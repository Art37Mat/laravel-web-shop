<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Category;
// use App\Models\Country;
// use App\Models\Product;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    //вывод информации из таблицы
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.users.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  //вывод представления СОЗДАТЬ
    {
        // $categories = Category::orderBy('id', 'DESC')->get();
        // $countries = Country::orderBy('id', 'DESC')->get();
        // return view('admin.products.create', [
        //     'categories' => $categories,
        //     'countries' => $countries
        // ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //Сохранить новый
    {
        $user = new User();
        $user->login = $request->login;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->releaseYear = $request->releaseYear;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        // //переносим файл из впеменной папки сервера в папку проекта
        // if (!empty($_FILES)) {
        //     move_uploaded_file(
        //         $_FILES['image']['tmp_name'],
        //         'images/' . $_FILES['image']['name']
        //     );
        // }
        $user->save();
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
      

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)  //представление Редактировать
    {
        // $name = name::orderBy('id', 'DESC')->get();
        // $surname = surname::orderBy('id', 'DESC')->get();
        // $patronymic = patronymic::orderBy('id', 'DESC')->get();
        // $login = login::orderBy('id', 'DESC')->get();
        // $email = email::orderBy('id', 'DESC')->get();
        // $password = password::orderBy('id', 'DESC')->get();
        // $role = role::orderBy('id', 'DESC')->get();


        return view('admin.users.edit', [
            // 'name' => $name,
            // 'surname' => $surname,
            // 'patronymic' => $patronymic,
            // 'login' => $login,
            // 'email' => $email,
            // 'password' => $password,
            'user' => $user,

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
    public function update(Request $request, User $user)
    {
        $user->login = $request->login;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;

        $user->save();
        return Redirect()->back()->withSuccess("Товар был успешно изменен!");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()  //удалить
    {
        $user->delete();
        return redirect()->back()->withSuccess('Товар был успешно удален!');
    
    }
}
