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

//Routes for the getting the whole web pages on view root folder

Route::get('/', 'PagesController@getHome');


//Route for the application page



Auth::routes();
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/viewUsers','AdminController@showUsers');
Route::get('/editUser', 'HomeController@editUser')->name('editUser');


Route::get('/home', 'HomeController@index')->name('home');
    Route::prefix('admin')->group(function(){
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
        Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
       
    });

//Routes for the product pages
Route::get('/product','ProductsController@create');
Route::get('/view/{job_id}','ProductsController@show');
Route::post('/addproduct','ProductsController@store')->name('admin.addproduct');



