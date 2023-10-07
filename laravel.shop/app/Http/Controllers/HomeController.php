<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Country;
use App\Models\Accessories;
use App\Models\Components;
use App\Models\Review;

use Illuminate\Support\Facades\DB;



use Illuminate\Support\Facades\Auth;


use App\Http\Middleware\RoleAdmin;

use phpDocumentor\Reflection\Types\Null_;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class HomeController extends Controller
{
    
// на страницу о нас
    public function about()    {
        
        $products = Product::orderBy('id', 'desc')->where('count', '>', '0')->limit(5)->get();
        return view('about.index', [
            'products' => $products          
        ]);
    }
//  Где нас найти
    public function contacts()
    {
        return view('contacts.index');
    }

    

    public function main()
    {
        $jsautoscroll = Product::select('image')->get();
        return view('main.index', [
            'jsautoscroll' => $jsautoscroll,
        ]);
    }
    

    // каталог
    public function catalog(Request $request)    {   
        $CatId = $request->Category_id;
        $sotrirovka = $request->sotrirovka;
        $sort=$request->Sort;

        $CategoryName = Category::select('nameCategory')->get();           





        $product = Product::select(
            'products.*',
            'gpu_components.title AS gpu_title',
            'mb_components.title AS mb_title',
            'cpu_components.title AS cpu_title',
            'ram_components.title AS ram_title',
            'powun_components.title AS powun_title',
            'cooling_components.title AS cooling_title',
            'ssd_components.title AS ssd_title',
            'pccase_components.title AS pccase_title')
        ->leftJoin('components AS gpu_components', function ($join) {
                $join->on('gpu_components.id', '=', 'products.gpu_id');
            })
        ->leftJoin('components AS mb_components', function ($join) {
                $join->on('mb_components.id', '=', 'products.mb_id');
            })
        ->leftJoin('components AS cpu_components', function ($join) {
                $join->on('cpu_components.id', '=', 'products.cpu_id');
            })
        ->leftJoin('components AS ram_components', function ($join) {
                $join->on('ram_components.id', '=', 'products.ram_id');
            })
        ->leftJoin('components AS powun_components', function ($join) {
                $join->on('powun_components.id', '=', 'products.powun_id');
            })
        ->leftJoin('components AS cooling_components', function ($join) {
                $join->on('cooling_components.id', '=', 'products.cooling_id');
            })
        ->leftJoin('components AS ssd_components', function ($join) {
                $join->on('ssd_components.id', '=', 'products.ssd_id');
            })
        ->leftJoin('components AS pccase_components', function ($join) {
                $join->on('pccase_components.id', '=', 'products.pccase_id');
            })
        ->groupBy('products.id', 'gpu_title', 'mb_title', 'cpu_title', 'ram_title', 'powun_title', 'cooling_title', 'ssd_title', 'pccase_title')
        ->get();
      







        if ($CatId != 0 && $sotrirovka!= Null) {           
            $product = Product::orderBy($sotrirovka, $sort)->where('count', '>', '0')->where('category_id', '=', $CatId)->get();
      }          
     elseif ($CatId == 0 && $sotrirovka!= Null)
      {
        $product = Product::orderBy($sotrirovka, $sort)->where('count', '>', '0')->get();
      }
    
        
        return view('catalog.index', [
            'Product' => $product,
            'Category' => Category::all(),
            'Country' => Country::all(),    
            'CategoryName' => $CategoryName,
            // 'infopc' => $infopc,
            'CatId' => $CatId,   
            'kolsearch'=>count($product),
               
        ]);
    }






    // Метод вызова представления страницы товара по его id
    public function show($id)
    {       

        return view('catalog.show', [
            'product' => Product::find($id)
        ]);

    }

    public function register()
    {
        return view('auth.register');
    } 

    public function login()
    {
        return view('auth.login');
    }

    public function logout()    {
       
        Auth::logout();
        return  redirect()->route('about');
    }  

    public function Adminindex()
    {       
       if (auth()->user()->role == 1)  {
            return view('admin.home.index');
        } else {
            return redirect()->route('login');
        }
    }

    public function Adminsettings()
    {       
            return view('admin.home.settings');
 
    }

    public function Adminaccessories()
    {       
            return view('admin.home.accessories');
 
    }

    public function reviews()
    {       
        
        $reviews = Review::join('users', 'reviews.user_id', '=', 'users.id')
                  ->select('reviews.description', 'users.name')
                  ->get();
                // dd($reviews);
            return view('reviews.index',[
                'reviews'=>$reviews,
            ]);
 
    }

    public function catalogall(){

        $product = Product::select(
            'products.*',
            'gpu_components.title AS gpu_title',
            'mb_components.title AS mb_title',
            'cpu_components.title AS cpu_title',
            'ram_components.title AS ram_title',
            'powun_components.title AS powun_title',
            'cooling_components.title AS cooling_title',
            'ssd_components.title AS ssd_title',
            'pccase_components.title AS pccase_title')
        ->leftJoin('components AS gpu_components', function ($join) {
                $join->on('gpu_components.id', '=', 'products.gpu_id')
                    ->where('gpu_components.title', 'like', '346%');
            })
        ->leftJoin('components AS mb_components', function ($join) {
                $join->on('mb_components.id', '=', 'products.mb_id');
            })
        ->leftJoin('components AS cpu_components', function ($join) {
                $join->on('cpu_components.id', '=', 'products.cpu_id');
            })
        ->leftJoin('components AS ram_components', function ($join) {
                $join->on('ram_components.id', '=', 'products.ram_id');
            })
        ->leftJoin('components AS powun_components', function ($join) {
                $join->on('powun_components.id', '=', 'products.powun_id');
            })
        ->leftJoin('components AS cooling_components', function ($join) {
                $join->on('cooling_components.id', '=', 'products.cooling_id');
            })
        ->leftJoin('components AS ssd_components', function ($join) {
                $join->on('ssd_components.id', '=', 'products.ssd_id');
            })
        ->leftJoin('components AS pccase_components', function ($join) {
                $join->on('pccase_components.id', '=', 'products.pccase_id');
            })
        ->groupBy('products.id', 'gpu_title', 'mb_title', 'cpu_title', 'ram_title', 'powun_title', 'cooling_title', 'ssd_title', 'pccase_title')
        ->get();
    

        
        // $products = DB::table('products')
        // ->select('description', 'name', 'title')
        // ->join('components', 'products.id', '=', 'components.product_id')
        // ->where('components.title', 'like', '%2060%')
        // ->get();
        dd($product);
        
        return view('catalog.all', [
            'product' => $product,
               
        ]);
    }

    public function component()
    {
        $pccase = Accessories::select('title','description')->where('id', '=', '8')->get();
        $mbinfo = Accessories::select('title','description')->where('id', '=', '6')->get();
        $cpuinfo = Accessories::select('title','description')->where('id', '=', '3')->get();
        $raminfo = Accessories::select('title','description')->where('id', '=', '1')->get();
        $gpuinfo = Accessories::select('title','description')->where('id', '=', '2')->get();
        $coolinginfo = Accessories::select('title','description')->where('id', '=', '5')->get();
        $powuninfo = Accessories::select('title','description')->where('id', '=', '4')->get();
        $ssdinfo = Accessories::select('title','description')->where('id', '=', '7')->get();


        return view('component.index', [
            'mbinfo' => $mbinfo,
            'pccase' => $pccase,
            'cpuinfo' => $cpuinfo,
            'raminfo' => $raminfo,
            'gpuinfo' => $gpuinfo,
            'coolinginfo' => $coolinginfo,
            'powuninfo' => $powuninfo,
            'ssdinfo' => $ssdinfo,
               
        ]);
    }




    public function componentcatalog(Request $request){

        $per = $_GET['per'];
            $accessorieslist = Components::select('id','title','description','price','image')->where([['accessories_id', '=', $per ],['count', '>', '0']])->paginate(8);
        
        // dd($accessorieslist);


        return view('component.componentcatalog', [
            'accessorieslist' => $accessorieslist,
        
            
        ]);



        
    }
    
    public function reviewscreate()
    {
        $reviews = Review::select('user_id','description')->get();
        #
        return view('reviews.create',[
            'reviews'=>$reviews,
        ]);
    }

    public function privacypolicy()
    {
        return view('privacypolicy');
    }
}
