<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

    Route::get('/', 'DashboardController@index')->name('admin.dashboard');
    Route::get('logout', 'LoginController@logout')->name('admin.logout');


});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('admin.show-login');
    Route::post('login', 'LoginController@login')->name('admin.login');

});
// Route::get('/', function () {
//     return view('admin.auth.login');
// });
