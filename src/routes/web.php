<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/guest', function () {
    return view('guest');
});
Route::get('/about', function () {
    return view('about');
}); 
Route::name('user.')->group(function(){
    Route::view('/signed','signed')->middleware(middleware:'Auth')->name(name:'signed');

    Route::get('/login',function(){
        if(Auth::check()){
            return redirect(route(name:'user.signed'));
        }
        return view(view:'login');
    })->name(name:'login');

    //Route::post('/login', [])
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
