<?php

use App\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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



Route::get('/facebook', 'SocialController@redirect');
Route::get('/callback/facebook', 'SocialController@callback');



Route::Post('/search','ProductController@search');




Route::middleware(['user','verified'])->group(function () {

    Route::get('/profile',function(){
        return view('Fashion.profile');
    });
    Route::get('/cart','ProductController@cart');

    });











Route::get('/', function () {return view('Fashion.home');});
Route::get('/home', function () {return view('Fashion.home');});









Auth::routes(['verify' => true]);
Route::get('/logout', 'Auth\LoginController@logout');



Route::group(['prefix' => 'panel','middleware' => ['auth','admin']], function()
{
    Route::get('/', function () {
        return view('layouts.dashboard');});

        Route::get('/users', 'UserController@showUsers');


        Route::get('/products', 'ProductController@showProducts');

        Route::get('/categories', 'CategoryController@showCategories');


    });









Route::middleware('admin')->group(function () {



//add
Route::get('/panel/add/product','CategoryController@categoriesSelection');
Route::post('/add-product', 'ProductController@addProduct');

Route::get('/panel/add/category', function () {return view('management.add-category');});
Route::post('/add-category', 'CategoryController@addCategory');


Route::get('/panel/add/user', function () {return view('management.add-user');});
Route::post('/add-user', 'UserController@addUser');



});






Route::middleware('can:isAdmin')->group(function ()
{
// delete
Route::get('/panel/delete/category/{id}','CategoryController@deleteCategory');
Route::get('/panel/delete/product/{id}','ProductController@deleteProduct');
Route::get('/panel/delete/user/{id}','UserController@deleteUser');

//edit
Route::get('/panel/edit/category/{id}','CategoryController@editForm');
Route::post('/update-category/{id}', 'CategoryController@updateCategory');

Route::get('/panel/edit/product/{id}','ProductController@editForm');
Route::post('/update-product/{id}', 'ProductController@updateProduct');

Route::get('/panel/edit/user/{id}','UserController@editForm');
Route::post('/update-user/{id}', 'UserController@updateUser');
});















