<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});

Route::get('aboutme', function (){
    return view('about-me');
});

Route::get('pendidikandanorganisasi', function (){
    return view('pendidikan');
});

Route::get('galeri', function (){
    return view('galeri');
});

Route::get('galeri1', function (){
    return view('galeri1');
});

Route::get('galeri2', function (){
    return view('galeri2');
});

Route::get('galeri3', function (){
    return view('galeri3');
});

Route::get('galeri4', function (){
    return view('galeri4');
});

Route::get('galeri5', function (){
    return view('galeri5');
});

Route::get('galeri6', function (){
    return view('galeri6');
});

Route::get('galeri7', function (){
    return view('galeri7');
});

Route::get('galeri8', function (){
    return view('galeri8');
});

Route::get('galeri9', function (){
    return view('galeri9');
});
