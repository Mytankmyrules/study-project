<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;

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
Route::get('/about', function () {
    return view('about');
}); 
Route::get('/BA', function () {
    return view('topic/topic');
});
//Auth::routes();
Route::auth();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/BA', [TopicController::class, 'addTopic']);

Route::post('/add', [TopicController::class, 'createTopic']);

Route::get('/view', function () {
    return view('topic/view');
});

//Route::get('/BA',[TopicController::class, 'deleteTopic']);

//Route::get('/BA/{topic}',[TopicController::class, 'viewTopic'])->name('view');
