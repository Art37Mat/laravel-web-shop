<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // показать все данные таблицы категории
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin\categories\index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
            // вызвать страницу создать
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
            // сохранение новой категории
    public function store(Request $request)
    {
        $new_category = new Category();        
        $new_category->nameCategory = $request->nameCategory;

        // Проверка на совпадение существующей категории
        $kol = DB::table('categories')->WHERE('nameCategory','=',$new_category->nameCategory)->count(); 
        if($kol ==0){
            $new_category->save();
            return redirect()->back()->withSuccess('Категория была успешно добавлена!');
        }
        else {
            return redirect()->back()->withSuccess('Такая категория в БД уже есть');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
            // вызвать страницу редактирование категории
    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // Дать переменную в метод вместо id , обновление
    public function update(Request $request, Category $category)
    {
        $category->nameCategory = $request->nameCategory;
        $category->save();

        return redirect()->back()->withSuccess('Категория была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Дать переменную в метод, удалить
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->withSuccess('Категория была успешно удалена!');
    }
}
