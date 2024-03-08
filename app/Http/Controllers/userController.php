<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;

class userController extends Controller
{
    //
    public function loginpage(){
        return view('user.login');
    }
    public function login(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($data)){
            return redirect()->route('menu');
        }else{
            return redirect()->route('loginpage');
        }
    }
    public function home(){
        return view('user.menu');
    }
}
