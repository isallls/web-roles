<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use PharIo\Manifest\Author;
use SebastianBergmann\CodeUnit\FunctionUnit;

class userController extends Controller
{
    //
    public function loginpage()
    {
        if (auth()->check()) {
            return redirect()->route('product');
        }
        return view('user.login')->with('failed', true);
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

        return view('user.profile', [
            'user1' => User::find('1'),
            'useremail' => User::where('email', 'kucing@email.com')->first(),
            'asd' => decrypt('eyJpdiI6IjhFMEFSeXNKNXhVS3RYdytuQXlmTmc9PSIsInZhbHVlIjoib09Ic3NpampmdXpJYXo1UUNnTTh4Qit0SXMzdlA5Q2JKbFdGMXIyZWM5Y2xJVSs1ZEU1eitSQUUrOVlIQ3RiN3FJdnJNWVBDTXI0b1c0R1BXYU82K2ZsWU9LZURSUWtnL1pvWGMrdE04Yms9IiwibWFjIjoiOTg0OTBiMDRjZGEzN2RjYTdlYTY3NTc0YzgzMWUyNGNjOWMyMWQzOTc2MjAxZmYyZTU4OGE4ZjhhOWM4OGQwNCIsInRhZyI6IiJ9'),

        ]);
    }
    public function signup()
    {
        if (!Auth::guest()) {
            return redirect()->route('menu');
        }
        return view('user.menu');
    }
}
