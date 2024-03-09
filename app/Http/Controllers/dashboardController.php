<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function dashboard(){
        return view('user.dashboard',[
            'users' => User::all(),
            'user' => User::find(1),
            'role'=> Roles::find(1),
            'roles' => Roles::all(), 
            'testrole' => Roles::all(),
            'testrole2' => Roles::find(2)->roles
        ]);
    }
}
