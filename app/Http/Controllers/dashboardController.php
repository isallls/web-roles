<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\CodeCleaner\FunctionContextPass;
use Symfony\Component\HttpFoundation\Session\Session;

class dashboardController extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard',[
            'users' => User::all(),
            'user' => User::find(1),
            'role'=> Roles::find(1),
            'roles' => Roles::all(), 
            'testrole' => Roles::all(),
            'testrole2' => Roles::find(2)->roles,
            'main' => User::all()->where('roles',true)->all()
        ]);
    }
    
    public function action(Request $request){
        if(!Auth::check() && !Auth::user()->roles->role == 'owner'){
            return redirect()->back();
        }
        return view('admin.action',[
            // dd($request),
            // 'data' => $request->id,
            'roles' => Roles::all(),
            'user' => User::find(decrypt($request->id)),
            'testfind' => User::where('email',decrypt($request->id)),
            'data1' =>  decrypt($request->id,),
            'data' => User::Where('email',decrypt($request->id))->first()
        ]);
    }
}
