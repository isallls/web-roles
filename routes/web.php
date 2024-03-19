<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productController;
use App\Http\Controllers\RoleUser;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/main', function () {
    return View('main');
});

// Route::group(['middleware'=>['guest']],function(){
    Route::get('/', [userController::class, 'loginpage'])->name('loginpage');
    Route::post('/login', [userController::class, 'login'])->name('login');
    Route::get('/products', [productController::class, 'show'])->name('product');
    Route::get('/signup', [userController::class, 'signup'])->name('signup');
// });


Route::group(['middleware' => ['auth']],function(){
    Route::get('/menu', [userController::class, 'home'])->name('menu');
    Route::get('/profile', [userController::class, 'profile'])->name('profile');
    Route::get('/logout', [userController::class, 'logOut'])->name('logout');
    
    
    Route::group(['middleware' => ['adminOnly']],function(){
        Route::get('/users', [RoleUser::class, 'index'])->name('users');
        Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');

        
        Route::group(['middleware' => ['owner']],function(){
            Route::get('/dashboard/action/{id}', [dashboardController::class, 'action'])->name('action');
        });
        
    });

});
