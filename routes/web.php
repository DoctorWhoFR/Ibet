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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/pronostiques', 'PronostiquesController@index')->name('pronostiques')->middleware('auth');
Route::get('/pronostique/{pronostique}', 'PronostiquesController@show')->name('pronostique')->middleware('auth');
Route::get('/shops', 'HomeController@shop')->name('shop')->middleware('auth');
Route::get('/new/{article}', 'HomeController@newsShow')->name('news.show')->middleware('auth');
Route::post('/payment/add-funds/paypal/{type}', 'PaymentController@payWithpaypal')->name('payement.pay')->middleware('auth');
Route::get('/status', 'PaymentController@getPaymentStatus')->name('status')->middleware('auth');

Route::get('/admins', 'AdminController@index')->name('admins')->middleware('auth');
Route::get('/admins/news/{article}', 'AdminController@delete')->name('admins.news.delete')->middleware('auth');
Route::post('/admins/news/', 'API\ArticlesAPIController@store')->name('admins.news.store')->middleware('auth');
Route::post('/admins/coupons/', 'PaymentController@payWithCoupon')->name('payment.coupons')->middleware('auth');
Route::post('/admins/pronostiques/', 'API\PronostiquesAPIController@store')->name('admins.pronostiques.store')->middleware('auth');
Route::get('/admins/{pronostique}/destroy', 'API\PronostiquesAPIController@destroy')->name('admins.pronostiques.destroy')->middleware('auth');
Route::get('/admins/status/{pronostique}/{status}', 'API\PronostiquesAPIController@changeStatus')->name('admins.pronostiques.status')->middleware('auth');
Route::get('/admins/user/{user}/admin', 'AdminController@makeAdmins')->name('admins.user.makeadmin')->middleware('auth');
Route::get('/admins/user/{user}/update', 'AdminController@upgrade')->name('admins.user.upgrade')->middleware('auth');
Route::post('/admins/combines', 'AdminController@combines')->name('admins.combines')->middleware('auth');

Route::apiResource('/api/pronostiques', 'API\PronostiquesAPIController');
