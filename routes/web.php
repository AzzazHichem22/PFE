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



Route::get('/admin', function () { return view('admin');})->name('admin');
Route::get('/comptable', function () { return view('comptable');})->name('comptable');
Route::get('/client', function () { return view('client');})->name('client');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// dossier Routes 


//post 


// get 
Route::get('/dossier/delete/{id}','DossierController@destroy');

// put 



// delete 