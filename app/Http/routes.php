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
  Route::resource('login', 'AccountController');
  Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('st-home');
    Route::get('order', 'OrderController@index')->name('st-order');
    Route::get('member', 'MemberController@index')->name('st-member');
    // Route::get('product', 'ProductController@index')->name('st-product');
    Route::resource('product', 'ProductController', ['except' => 'show']);
    Route::post('product/uploadimages', 'ProductController@uploadImages');
    Route::get('product/destroyimg/{pid}/{idImg}', 'ProductController@destroyImage')->name('st-destroyImage');
    Route::resource('order', 'OrderController');
    Route::resource('member', 'MemberController');
    Route::get('member/detail/{id}', 'MemberController@detail');
    Route::resource('variant', 'VariantController');
    Route::resource('group', 'ProductGroupController');
    Route::get('logout', 'AccountController@logout')->name('st-logout');
  });
});

Route::group(['namespace' => 'FrontEnd'], function(){
  Route::group(['prefix' => 'account'], function(){
    Route::get('/', 'AccountController@index')->name('account_index');
    Route::get('profile', 'AccountController@profile')->name('account_profile');
    Route::get('address', 'AccountController@address')->name('account_address');
    Route::get('history', 'AccountController@history')->name('account_history');
    Route::get('wishlist', 'AccountController@wishlist')->name('account_wishlist');
    Route::get('wishlist/{pid}', 'AccountController@wishlistAdd')->name('account_wishlist_add');
    Route::get('register', 'AccountController@create')->name('account_create');
    Route::post('register', 'AccountController@store')->name('account_store');
    Route::get('logout', 'AccountController@destroy')->name('account_logout');
    Route::get('login', 'AccountController@login')->name('account_login');
    Route::get('client_login', 'AccountController@clientLogin')->name('client_login');
    Route::get('client_logout', 'AccountController@clientLogout')->name('client_logout');
    Route::get('forgot_password', 'AccountController@fogot_password')->name('account_forgot_password');
  });

  Route::group(['prefix' => 'product'], function(){
    Route::get('/', 'ProductController@index')->name('product_list');
    Route::get('{id}', 'ProductController@show')->name('product_detail');
  });

  Route::group(['prefix' => 'cart'], function(){
    Route::get('/', 'CartController@index')->name('cart');
    Route::post('addToCart', 'CartController@addToCart')->name('add_to_cart');
    Route::get('shipping', 'CartController@shipping')->name('cart_shipping');
    Route::get('complete', 'CartController@completePayment')->name('cart_complete');
    Route::get('error', 'CartController@errorPayment')->name('cart_error');
  });
});

