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

Route::group(['prefix' => 'sitecontrol', 'namespace' => 'SiteControl'], function(){
  Route::get('/', 'HomeController@index')->name('st-home');
  Route::get('order', 'OrderController@index')->name('st-order');
  Route::get('member', 'MemberController@index')->name('st-member');
  // Route::get('product', 'ProductController@index')->name('st-product');
  Route::resource('product', 'ProductController', ['except' => 'show']);
  Route::resource('order', 'OrderController');

  // Route::group(['prefix' => 'product'], function(){
  //   Route::get('edit', 'ProductController@edit')->name('st-product');
  //   Route::get('add', 'ProductController@')->name('st-product');
  // });
});
