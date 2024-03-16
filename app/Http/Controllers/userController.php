<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use PharIo\Manifest\Author;

class userController extends Controller
{
    //
    public function loginpage()
    {
        if(auth()->check()){
            return redirect()->route('dashboard');
        }
        return view('user.login');
    }
    public function login(Request $request)
    {
        

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('menu');
        } else {
            return redirect()->route('loginpage');
        }
    }
    public function home()
    {
        return view('user.menu');
    }
    public function logOut(Request $request)
    {
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function profile()
    {
        
        return view('user.profile');
    }
}
