<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Status;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $idStatusFilter = $request->idStatusFilter; //определяется номер
        $status = Status::all();

        if ($idStatusFilter == 0 || $idStatusFilter == null) {
            $orders = Order::orderBy('created_at', 'desc')->get(); //без фильтра
        } else {
            $orders = Order::orderBy('created_at', 'desc')->
                      where('status_id', '=', $idStatusFilter)->get();
        }
        $rez = Status::find($idStatusFilter);
        return view('admin\orders\index', [
            'orders' => $orders,
            'status' => $status,
            'idStatusFilter' => $idStatusFilter,
            'rez' => $rez
        ]);
    }


    public function filterStatus()
    {
        $status = Status::all();
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('admin\orders\index', [
            'orders' => $orders,
            'status' => $status,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.orders.show', [
            'order' => order::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
  
        // Обновление

        $orders = Order::find($id);
        $orders->status_id = $request->status_id;
        $orders->note = $request->note;
        $orders->save();

// если статтус отменен, то обновить таблицу продукты и 
        if ($orders->status_id==2)
        {
            foreach ($orders->OrderOrderProduct as $row){
                $product = Product::find($row['product_id']); 
                //обновление таблицы продукты возврат товара
                $product->count = $product->count + $row['quantity'];
                $product->save();
            }
          
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
