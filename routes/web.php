<?php

use GuzzleHttp\Middleware;
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
// Auth::routes();


Auth::routes();

Route::resource('/home', 'HomeController');
Route::get('/admin','AdminController@index')->middleware('auth')->name('admin');
// Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']],function(){
// Route::get('/',function(){
// return view('admin');

// })->name('admin');

// });
