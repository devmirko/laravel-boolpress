<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('guests.home');
// })->name('home');

Auth::routes();

Route::middleware('auth')
->namespace('Admin')  //cartella dentro controllers
->name('admin.')    //le rotte iniziano con admin
->prefix('admin')  //l'url ha il prefisso /admin/
->group(function () {
    Route::get('/', 'AdminController@dashboard')->name('dashboard');
    Route::resource('posts', 'PostController');
    Route::get('users', 'UserController@index')->name('users.index');
    Route::resource('categories', 'CategoryController');
    Route::resource('tags', 'TagController');



});

// con questa rotta vado ad indicare che se una rotta non e stata trovata in precendeza, vado ad assegnare a vue l'assegnazione della rotta.
Route::get("{any?}", function() {
    return view("guests.home");
})->where("any", ".*")->name('home');;
