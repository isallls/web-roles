<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function dashboard(){
        return view('user.dashboard',[
            'users' => User::all(),
        ]);
    }
}
