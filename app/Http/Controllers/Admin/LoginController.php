<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
    public function login(LoginRequest $request){
        if(auth()->guard('admin')->attempt($request->only('username','password'))){
            return redirect()->route('admin.dashboard');
        }

    }
     public function logout(){
        auth()->guard('admin')->logout();
        return redirect()->route('admin.show-login');
    }

    // function make_new_admin(){
    //     \App\Models\Admin::create([
    //         'name'=>'admin',
    //         'email'=>'test@gmail.com',
    //         'username'=>'admin',
    //         'password'=>bcrypt('12345678'),
    //     ]);
    // }
}
