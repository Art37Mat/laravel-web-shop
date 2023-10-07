<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(array(
            'login' => $input['login'],
            'password' => $input['password']
        ))) {            
            if (auth()->user()->role == 1) {
                return redirect()->route('Adminindex');
            } else {
                return redirect()->route('about');
            }
        } else {
            return redirect()->route('login')->with('error', "Логин или пароль неверны");
        }
    }
}
