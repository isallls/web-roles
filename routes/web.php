<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productController;
use App\Http\Controllers\RoleUser;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [userController::class, 'loginpage'])->name('loginpage');
Route::post('/login', [userController::class, 'login'])->name('login');
Route::get('/menu', [userController::class, 'home'])->name('menu')->middleware('auth');

Route::get('/dashboard/action/{id}', [dashboardController::class, 'action'])->name('action');
Route::get('/products', [productController::class, 'show'])->name('product');
Route::get('/logout', [userController::class, 'logOut'])->name('logout');
Route::get('/profile', [userController::class, 'profile'])->name('profile')->middleware('islogin');

Route::get('/main', function () {
    return View('main');
});

Route::group(['middleware' =>['adminOnly']],function(){
    Route::get('/users', [RoleUser::class, 'index'])->name('users');
    Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
});
