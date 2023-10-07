<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)    {       
        
    $request->validate([
        'name' => ['required', 'max:255', 'regex:/^[А-Яа-яЁё\s\-]+$/u'],
        'surname' => ['required', 'max:255','regex:/^[А-Яа-яЁё\s\-]+$/u'],
        'patronymic' => ['max:255','nullable','regex:/^[А-Яа-яЁё\s\-]+$/u'],
        'login' => ['required', 'string', 'max:255', 'unique:users', 'regex:/^[A-Za-z0-9\-]+$/'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'min:6', 'regex:/^[A-Za-z0-9\-]+$/'],
        'rules'=>['required'],
        'password_repeat'=>['same:password'] //проверка совпадаения поля с паролем
    ]);
         //2 способ   
    $user=User::create([
        'password'=>Hash::make($request->password), //хеширование
        'rules'=>$request->rules=='on'?'1':'0',
    ] + $request->all()); 
    return Redirect()->Route('login');  
}
}
