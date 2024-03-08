<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\dashboardController;
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

Route::get('/',[userController::class,'loginpage'])->name('loginpage');
Route::post('/login',[userController::class,'login'])->name('login');
Route::get('/menu',[userController::class,'home'])->name('menu')->middleware('auth');
Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('dashboard');
Route::get('/main',function(){
    return View('main');
});