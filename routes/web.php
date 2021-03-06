<?php

use Illuminate\Support\Facades\DB;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UsersController');
Route::resource('products', 'ProductsController');       //->except('create');
Route::resource('sizes', 'SizesController');
Route::get('profile', 'NavBarController@profile');
Route::get('faq', 'NavBarController@faq');
Route::get('store', 'NavBarController@store');
Route::get('editproduct', 'ProductsController@edit');
Route::get('new', 'ProductsController@create');
Route::get('show1/{id}', 'ProductsController@show');
Route::get('allproducts', 'ProductsController@index');
