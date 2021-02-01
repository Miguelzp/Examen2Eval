<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers;

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

Route::view('/', 'enunciado');


Auth::routes();
Route::group([ 'middleware'=>'auth'], function(){

    Route::get('/home','\App\Http\Controllers\HomeController@index');
    Route::get('/admin','\App\Http\Controllers\HomeController@admin');

    Route::get('/futureFlights','\App\Http\Controllers\HomeController@futuros')->name('futuros');

    Route::get('/buscar', '\App\Http\Controllers\HomeController@buscar')->name('buscar');
    Route::get('/vuelos/{id}', '\App\Http\Controllers\HomeController@vuelo')->name('mostrar');

    Route::post('/sumar','\App\Http\Controllers\HomeController@sumar')->name('sumar');

    Route::get('/navegar', function(){
        if(Auth::user()->rol == 'administrador'){
            return Redirect::to('/admin');
        }
        else{
            return Redirect::to('/home');
        }
    })->name('navegar');
    

});