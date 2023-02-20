<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfNotAdmain;

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

Route::get('login', function () {
    return view('admin.login');
});
// prefix dashboard
Route::group(['middleware'=>['auth',RedirectIfNotAdmain::class]],function(){
Route::get('/', function () {
    return view('admin.index');
});

Route::get('list-users','AdminController@index');
Route::get('create','AdminController@create');
Route::post('storeOrUpdate','AdminController@store');
Route::post('destroy','AdminController@destroy');
Route::get('{id}/edit','AdminController@edit');
Route::post('update','AdminController@update');
});
