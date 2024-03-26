<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard', [
            'users' => User::orderBy('role_id', 'desc')->get(),
            'user' => User::find(1),
            'role' => Roles::find(1),
            'roles' => Roles::all(),
            'testrole' => Roles::all(),
            'testrole2' => Roles::find(2)->roles,
            'main' => User::all()->where('roles', true)->all(),
        ]);
    }

    public function action(Request $request,)
    {
        if (!Auth::check() && !Auth::user()->roles->role == 'owner') {
            return redirect()->back();
        }
        return view('admin.action', [
            'roles' => Roles::all(),
            'user' => User::find(decrypt($request->id)),
            'testfind' => User::where('email', decrypt($request->id))->first(),
            'data1' =>  decrypt($request->id,),
            'data' => User::Where('email', decrypt($request->id))->first(),
            'id' => $request->id,
            'd' => 'kucing',

        ]);
    }

    public function revokeRole($id)
    {
        $id = User::where('email', decrypt($id))->first()->id;
        $user = User::find($id);

        $user->update([
            'role_id' => NULL,
            'updated_at' => time()
        ]);
        return redirect()->back();
    }

    public function test(Request $request, $id)
    {

        $user = User::find(decrypt($id));
        $user->update([
            'role_id' => $request->role,
            'updated_at' => time()
        ]);
        return redirect()->back();
    }
}
