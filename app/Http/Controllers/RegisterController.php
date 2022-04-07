<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view ('auths.regis');
    }

    public function postregister(Request $request)
    {
         user::create([
            'role'=>'user',
            'nik'=>$request->nik,
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'telp'=>$request->telp,
            'remember_token'=>str_random(60),
        ]);
        return redirect('/login');
    }
   
}
