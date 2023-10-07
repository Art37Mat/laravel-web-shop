<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    //вывод информации из таблицы
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  //вывод представления СОЗДАТЬ
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $countries = Country::orderBy('id', 'DESC')->get();
        return view('admin.products.create', [
            'categories' => $categories,
            'countries' => $countries
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //Сохранить новый
    {
        // Валидация картинки
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif'
        ]);

        $product = new Product();
        $product->nameProduct = $request->nameProduct;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->country_id = $request->country_id;
        $product->releaseYear = $request->releaseYear;
        $product->model = $request->model;
        $product->category_id = $request->category_id;
        $product->count = $request->count;
        $product->image = $_FILES['image']['name'];
        //переносим файл из впеменной папки сервера в папку проекта
        if (!empty($_FILES)) {
            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                'storage/product/' . $_FILES['image']['name']
            );
        }
        $product->save();
        return Redirect()->back()->withSuccess("Товар был успешно добавлен!");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)  //представление одного товара
    {
        return view('admin.products.show', [
            'product' => product::find($id)
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)  //представление Редактировать
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $countries = Country::orderBy('id', 'DESC')->get();
        return view('admin.products.edit', [
            'categories' => $categories,
            'countries' => $countries,
            'product' => $product
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Сохранить редактирование
    public function update(Request $request, Product $product)
    {
         // Валидация картинки
         $request->validate([
            'imageRed' => 'required|mimes:jpeg,png,jpg,gif'
        ]);

        $product->nameProduct = $request->nameProduct;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->country_id = $request->country_id;
        $product->releaseYear = $request->releaseYear;
        $product->model = $request->model;
        $product->category_id = $request->category_id;
        $product->count = $request->count;
        $product->cooling_id = $request->cooling_id;
        $product->cpu_id = $request->cpu_id;
        $product->gpu_id = $request->gpu_id;
        $product->mb_id = $request->mb_id;
        $product->pccase_id = $request->pccase_id;
        $product->powun_id = $request->powun_id;
        $product->ram_id = $request->ram_id;
        $product->ssd_id = $request->ssd_id;

        $product->image = $_FILES['imageRed']['name'];
        //переносим файл из впеменной папки сервера в папку проекта
        if (!empty($_FILES)) {
            move_uploaded_file(
                $_FILES['imageRed']['tmp_name'],
                'storage/product/' . $_FILES['imageRed']['name']
            );
        }
        // если не меняем картинку, то оставлять имя
        if ($_FILES['imageRed']['name'] == "") {
            $product->image = $request->imageHidden;
        }
        $product->save();
        return Redirect()->back()->withSuccess("Товар был успешно изменен!");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)  //удалить
    {
        $product->delete();
        return redirect()->back()->withSuccess('Товар был успешно удален!');

    }
}
