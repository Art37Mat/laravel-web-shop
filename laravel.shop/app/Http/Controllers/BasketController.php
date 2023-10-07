<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Status;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Basket;
use App\Models\Components;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class BasketController extends Controller
{
    
    //проверка товара по количесту
    public function add(Request $request, $id)
    {
            $repeatProduct=DB::table('baskets')->select('id','countBasket')->where('product_id','=',$id)->get();     
                   
             $product=Product::find($id);         
            // преобразование в массив
             $result = json_decode(json_encode($repeatProduct), true);
             if(count($result)==0)
              {
                $basket=Basket::create([
                    'user_id'=>auth()->user()->id,     
                    'product_id'=>$id,
                     'countBasket'=>1
                 ]);                              
             }
             else  
             {
                if(($product->count)>($result[0]['countBasket']))             
                     DB::update("UPDATE baskets SET countBasket=countBasket+1 WHERE product_id =?", [$id]);                   
                else  {        
                    session()->put('idstop', $id); 
                    return redirect()->back()->withSuccess("Товар закончился!");
                }
             }                    
             return Redirect()->back();  
        
    }

    public function componentadd(Request $request, $id)
    {
            $repeatComponent=DB::table('baskets')->select('id','countBasketcomp')->where('component_id','=',$id)->get();     
                   
             $component=Components::find($id);         
            // преобразование в массив
             $result = json_decode(json_encode($repeatComponent), true);

             if (count($result) == 0) {
                $basket = Basket::create([
                    'user_id' => auth()->user()->id,     
                    'component_id' => $id,
                    'countBasketcomp'=>1
                ]);                              
            } 
            else 
            {
                $basket = Basket::where([
                    ['user_id', '=', auth()->user()->id],
                    ['component_id', '=', $id]
                ])->first();
            
                if (($basket->countBasketcomp) < ($result[0]['countBasketcomp'])) {
                    DB::update("UPDATE baskets SET countBasketcomp = countBasketcomp + 1 WHERE component_id = ?", [$id]);                   
                } else {        
                    session()->put('idstop', $id); 
                    return redirect()->back()->withSuccess("Компонент закончился!");
                }

                //  if(count($result)==0)
            //   {
            //     $basket=Basket::create([
            //         'user_id'=>auth()->user()->id,     
            //         'component_id'=>$id,
            //         'countBasketcomp'=>1
            //      ]);                              
            //  }
            //  else  
            //  {
            //     if(($basket->count)>($result[0]['countBasketcomp']))             
            //          DB::update("UPDATE baskets SET countBasketcomp=countBasketcomp+1 WHERE component_id =?", [$id]);                   
            //     else  {        
            //         session()->put('idstop', $id); 
            //         return redirect()->back()->withSuccess("Компонент закончился!");
            //     }
            //  }                    
             return Redirect()->back();  
            }
    }


    //вывести корзину 
    public function index()
    {   
                  
        // $sum=DB::select("SELECT SUM(countBasket*price) AS Itog FROM baskets, products WHERE baskets.product_id=products.id");   
        // // $sum = json_decode(json_encode($sum), true);

        // $compsum=DB::select("SELECT SUM(countBasketcomp*components.price) AS Itog FROM baskets, components WHERE baskets.component_id=components.id");   
        // $compsum = json_decode(json_encode($compsum), true);

        $sum=DB::select("SELECT SUM(total) AS Itog FROM (
            SELECT SUM(countBasket*price) AS total FROM baskets INNER JOIN products ON baskets.product_id=products.id
            UNION ALL
            SELECT SUM(countBasketcomp*components.price) AS total FROM baskets INNER JOIN components ON baskets.component_id=components.id
        ) AS sums");
        $sum = json_decode(json_encode($sum), true);

        // dd($sum);

        $id = auth()->user()->id;
        $orders = Order::orderBy('created_at', 'desc')->where('user_id', '=', $id)->get(); 
        $user= User::find($id);      

        return view('basket.index', [
            'baskets'=> Basket::orderBy('created_at', 'desc')->get(),
            'Product' => Product::all() ,
            'sum'=>$sum,
            'orders' => $orders,
            'user'=>$user,
        ]);
       
    }


     // Прибавить количество в корзину товар по ID
     public function PlusProductBasket(Request $request)
     {
         if ($request->product_idPlus) {
             $id = $request->product_idPlus;
             DB::update("UPDATE baskets SET countBasket=countBasket+1 WHERE product_id =?", [$id]); 
           
         }
         if($request->component_idPlus){
            $id = $request->component_idPlus;
             DB::update("UPDATE baskets SET countBasketcomp=countBasketcomp+1 WHERE component_id =?", [$id]); 
         }
         return redirect()->back();
     }
 
     // Вычесть количество из корзины товар по ID
     public function MinusProductBasket(Request $request)
     {
         if ($request->product_idMinus) {
             $id = $request->product_idMinus;
             DB::update("UPDATE baskets SET countBasket=countBasket-1 WHERE product_id =?", [$id]); 
         }
         if($request->component_idMinus){
            $id = $request->component_idMinus;
             DB::update("UPDATE baskets SET countBasketcomp=countBasketcomp-1 WHERE component_id =?", [$id]); 
         }
         return redirect()->back();
     }

// Удаляем строку с ID
public function deleteProductBasket(Request $request)
{
    if ($request->product_id) {
        $id = $request->product_id;
        DB::delete("DELETE FROM baskets WHERE product_id =?", [$id]); 
    }
    if ($request->component_id) {
        $id = $request->component_id;
        DB::delete("DELETE FROM baskets WHERE component_id =?", [$id]); 
    }
    return redirect()->back();
}


public function OrderProduc(Request $request) // Оформить заказ 
    {
        $IDuser = auth()->user()->id;
        $pasUser = auth()->user()->password;
        $PasswordOrder = $request->PasswordOrder;
        // if (password_verify($PasswordOrder,  $pasUser)) {
            // Добавление данных в таблицу orders - 1 запись
            $new_order = new Order();
            $new_order->user_id = $IDuser;
            $new_order->status_id = 1;  //новый
            $new_order->save();
        
             // Добавление данных в таблицу  order_products все записи корзины (сессии)
             $baskets=Basket::all();


             if ($request->product_id == 0 && $request->component_id !=0){
                foreach ($baskets as $details){
                    OrderProduct::insert(
                        array(
                            'order_id' => $new_order->id,
                            'product_id' => $details['product_id'],
                            'component_id' => $details['component_id'],
                            'quantity' => $details['countBasketcomp']
                        )
                    );
                    
                    $component = Components::find($details['component_id']); 
                    $component->count = $component->count - $details['countBasketcomp'];
                    $component->save();
                 }; 
                }

             if ($request->product_id != 0 && $request->component_id ==0){
             foreach ($baskets as $details){
                OrderProduct::insert(
                    array(
                        'order_id' => $new_order->id,
                        'product_id' => $details['product_id'],
                        'component_id' => $details['component_id'],
                        'quantity' => $details['countBasketcomp']
                    )
                );
                $product = Product::find($details['product_id']); //обновление таблицы продукты 
                $product->count = $product->count - $details['countBasket'];
                $product->save();
             }; 
            }
            //  Удаление таблицы - очистка данных корзины
             DB::delete("DELETE FROM baskets");

             return redirect()->back()->withSuccess("Заказ оформлен! Он на рассмотрении.");
        // } else {
        //     return redirect()->back()->withSuccess("Пароль не верен");
        // }
        
        }

    }

