<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
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
  Route::resource('member', 'MemberController');
  Route::resource('variant', 'VariantController');
  Route::resource('group', 'ProductGroupController');
  // Route::group(['prefix' => 'product'], function(){
  //   Route::get('edit', 'ProductController@edit')->name('st-product');
  //   Route::get('add', 'ProductController@')->name('st-product');
  // });
});

Route::group(['namespace' => 'FrontEnd'], function(){
  Route::group(['prefix' => 'account'], function(){
    Route::get('/', 'AccountController@index')->name('account_index');
    Route::get('profile', 'AccountController@profile')->name('account_profile');
    Route::get('address', 'AccountController@address')->name('account_address');
    Route::get('history', 'AccountController@history')->name('account_history');
    Route::get('wishlist', 'AccountController@wishlist')->name('account_wishlist');
    Route::get('register', 'AccountController@create')->name('account_create');
    Route::get('logout', 'AccountController@destroy')->name('account_logout');
  });

  Route::group(['prefix' => 'product'], function(){
    Route::get('/', 'ProductController@index')->name('product_list');
    Route::get('{id}', 'ProductController@show')->name('product_detail');
  });

  Route::group(['prefix' => 'cart'], function(){
    Route::get('/', 'CartController@index')->name('cart');
    Route::get('shipping', 'CartController@shipping')->name('cart_shipping');
    Route::get('complete', 'CartController@completePayment')->name('cart_complete');
    Route::get('error', 'CartController@errorPayment')->name('cart_error');
  });
});

