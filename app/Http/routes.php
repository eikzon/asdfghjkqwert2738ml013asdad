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
    Route::get('member/detail/{id}', 'MemberController@detail')->name('member_detail');
    Route::resource('variant', 'VariantController');
    Route::resource('group', 'ProductGroupController');
    Route::resource('category', 'CategoryController');
    Route::get('logout', 'AccountController@logout')->name('st-logout');
    Route::resource('platform', 'PlatformController', ['except' => 'show']);
  });
});

Route::group(['namespace' => 'FrontEnd'], function(){
  Route::group(['prefix' => 'account'], function(){
    Route::get('/', 'AccountController@index')->name('account_index');
    Route::get('profile', 'AccountController@profile')->name('account_profile');
    Route::post('profile/update/{id}', 'AccountController@updateProfile')->name('account_update');
    Route::post('profile/changePassword/{id}', 'AccountController@changePassword')->name('account_change_password');
    Route::post('profile/updateShipping/{id}', 'AccountController@updateShipping')->name('account_update_shipping');
    Route::post('profile/updateBilling/{id}', 'AccountController@updateBilling')->name('account_update_billing');
    Route::get('address', 'AccountController@address')->name('account_address');
    Route::get('history', 'AccountController@history')->name('account_history');
    Route::get('history/{id}', 'AccountController@historyDetail')->name('account_history_detail');
    Route::get('wishlist', 'AccountController@wishlist')->name('account_wishlist');
    Route::get('wishlist/{pid}', 'AccountController@wishlistAdd')->name('account_wishlist_add');
    Route::get('wishlist/destroy/{pid}/{id}', 'AccountController@wishlistDestroy')->name('account_wishlist_delete');
    Route::get('register', 'AccountController@create')->name('account_create');
    Route::post('register', 'AccountController@store')->name('account_store');
    Route::get('logout', 'AccountController@destroy')->name('account_logout');
    Route::get('login', 'AccountController@login')->name('account_login');
    Route::get('client_login', 'AccountController@clientLogin')->name('client_login');
    Route::get('client_logout', 'AccountController@clientLogout')->name('client_logout');
    Route::get('forgot_password', 'AccountController@forgotPassword')->name('account_forgot_password');
    Route::post('forgot_password', 'AccountController@forgotPasswordSend')->name('account_forgot_password_send');
  });

  Route::group(['prefix' => 'product'], function(){
    Route::get('category/{id}', 'ProductController@index')->name('product_list');
    Route::get('platform/{id}', 'ProductController@platform')->name('platform_student');
    Route::post('platformCompareVariant', 'ProductController@platformCompareVariant')->name('platform_compare_variant');
    Route::get('{id}', 'ProductController@show')->name('product_detail');
  });

  Route::group(['prefix' => 'cart'], function(){
    Route::get('/', 'CartController@index')->name('cart');
    Route::post('addToCart', 'CartController@addToCart')->name('add_to_cart');
    Route::post('addToCartMoreVariant', 'CartController@addToCartMoreVariant')->name('add_to_cart_more_variant');
    Route::post('updateCart', 'CartController@updateCartItems')->name('update_cart');
    Route::get('deleteCart/{id}', 'CartController@deleteCartItems')->name('delete_cart');
    Route::get('shipping', 'CartController@shipping')->name('cart_shipping');
    Route::post('checkout', 'CartController@checkout')->name('cart_checkout');
    Route::get('complete/{type}/{token}', 'CartController@completePayment')->name('cart_complete');
    Route::get('error/{type}/{token}', 'CartController@errorPayment')->name('cart_error');
    Route::post('payment', 'PaypalController@store')->name('cart_payment');
  });

  Route::post('option_province', 'ProvincesController@options')->name('option_province');
  Route::post('option_amphures', 'ProvincesController@optionsAmphures')->name('option_amphures');
  Route::post('optionsDistricts', 'ProvincesController@optionsDistricts')->name('option_districts');
});
