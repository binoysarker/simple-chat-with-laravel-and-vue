<?php

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

use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/chat',function (){
    $user = auth()->user()->name;
    return view('chat',compact('user'));
})->middleware('auth');

Route::get('/messages',function(){
	return Message::with('user')->get();
})->middleware('auth');
Route::post('/user',function(){
	return User::with('user')->get();
})->middleware('auth');*/

Route::resource('/chat','MessageController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
