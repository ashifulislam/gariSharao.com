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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home','AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::POST  ( 'admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('/home','HomeController@home');

Route::group(['prefix'=>'customer'],function(){

//    Route::get('/','EmployerController@index')->name('employer.home');
    Route::get('/login', 'customer\LoginController@showLoginForm')->name('customer.login');
    Route::post('/login', 'customer\LoginController@login')->name('customer.login.submit');
    Route::get('/register', 'customer\RegisterController@showRegForm')->name('customer.register');

    Route::post('/register', 'customer\RegisterController@register')->name('customer.register.submit');

    Route::get('logout', 'customer\LoginController@logout')->name('customer.logout');
});
Route::get('/customerHome','CustomerController@showCustomerHome')->name('customer.home');
Route::group(['prefix'=>'autoMobileEngineer'],function(){

//    Route::get('/','EmployerController@index')->name('employer.home');
    Route::get('/login', 'autoMobileEngineer\LoginController@showLoginForm')->name('autoMobileEngineer.login');
    Route::post('/login', 'autoMobileEngineer\LoginController@login')->name('autoMobileEngineer.login.submit');
    Route::get('/register', 'autoMobileEngineer\RegisterController@showRegForm')->name('autoMobileEngineer.register');

    Route::post('/register', 'autoMobileEngineer\RegisterController@register')->name('autoMobileEngineer.register.submit');

    Route::get('logout', 'autoMobileEngineer\LoginController@logout')->name('autoMobileEngineer.logout');
});
Route::get('/autoMobileEngineerHome','autoMobileEngineer@showCustomerHome')->name('autoMobileEngineer.home');

