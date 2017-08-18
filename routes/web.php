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

Route::get('/', function () {
    return view('landing.welcome');
});

Auth::routes();

Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('logout','Auth\LoginController@logout')->name('GetLogout');

Route::group(['middleware' => 'auth'],function (){
    Route::get('/home', 'Admin\DashboardController@index')->name('home');
    Route::middleware(['IsAdmin'])->namespace('Admin')->group(function (){

    });
    Route::middleware(['IsUser'])->namespace('User')->group(function (){
        Route::get('JMI/Lip','JMIController@index')->name('JMI.index');
    });
    Route::namespace('User')->group(function () {


    });
});
