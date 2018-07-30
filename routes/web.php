<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
    |--------------------------------------------------------------------------
    | FRONT-END ROUTES
    |--------------------------------------------------------------------------
*/

Route::get('/' , 'FrontEndController@index')->name('homepage');
Route::get('/about' , 'FrontEndController@about')->name('about');
Route::get('/services' , 'FrontEndController@services')->name('services');
Route::get('/tenderServices' , 'FrontEndController@tenderServices')->name('tender_services');
Route::get('/contact' , 'FrontEndController@contact')->name('contact');
Route::get('/signup' , 'FrontEndController@signup')->name('signup');
Route::get('/login' , 'FrontEndController@login')->name('login');
Route::get('/express' , 'FrontEndController@toExpress')->name('toExpress');
Route::get('/confirmExpress' , 'FrontEndController@confirmExpress')->name('express_confirm');
Route::post('/express' , 'FrontEndController@express')->name('express');


/*
    |--------------------------------------------------------------------------
    | ADMIN ROUTES
    |--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin'] , function (){

        Route::get('/toLogin' , 'AdminController@toLogin')->name('admin_toLogin');
        Route::post('/login' , 'AdminController@login')->name('admin_login');

        Route::post('/password/email' , 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin_password_email');
        Route::get('/password/reset' , 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin_password_request');
        Route::post('/password/reset' , 'Auth\AdminResetPasswordController@reset')->name('admin_password_reset');
        Route::get('/password/reset/{token}' , 'Auth\AdminResetPasswordController@showResetForm')->name('admin_reset_request');


    Route::group(['middleware' => 'admin'] , function(){
        Route::get('/customer/list' , 'AdminController@customerList')->name('customer_list');
        Route::get('/tender/list' , 'AdminController@tenderList')->name('tender_list');
        Route::get('/dashboard' , 'AdminController@index')->name('dashboard');
        Route::get('/logout' , 'AdminController@logout')->name('admin_logout');
        Route::get('/customerOrderList' ,  'AdminController@customerOrderList')->name('customer_order_list');
        Route::get('/confirm/customer/{customerOrder}' , 'AdminController@updateCustomerConfirmation')->name('update_confirm_customer_order');
        Route::get('/confirm/tender/{tenderOrder}' , 'AdminController@updateTenderConfirmation')->name('update_confirm_tender_order');
        Route::get('/tenderOrderList' ,  'AdminController@tenderOrderList')->name('tender_order_list');
        Route::get('/toAddAmdin' , 'AdminController@toAddAdmin')->name('to_add_admin');
        Route::post('/addAdmin' , 'AdminController@addAdmin')->name('add_admin');
    });
});



/*
    |--------------------------------------------------------------------------
    | CUSTOMER ROUTES
    |--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'customer'] , function(){

        Route::get('/toLogin' , 'CustomerController@toLogin')->name('customer_toLogin');
        Route::post('/login' , 'CustomerController@login')->name('customer_login');
        Route::get('/toRegister' , 'CustomerController@toRegister')->name('customer_toRegister');
        Route::post('/register' , 'CustomerController@register')->name('customer_register');

        Route::post('/password/email' , 'Auth\CustomerForgotPasswordController@sendResetLinkEmail')->name('customer_password_email');
        Route::get('/password/reset' , 'Auth\CustomerForgotPasswordController@showLinkRequestForm')->name('customer_password_request');
        Route::post('/password/reset' , 'Auth\CustomerResetPasswordController@reset')->name('customer_password_reset');
        Route::get('/password/reset/{token}' , 'Auth\CustomerResetPasswordController@showResetForm')->name('customer_reset_request');

    Route::group(['middleware' => 'customer'] , function(){

        Route::get('/dashboard' , 'CustomerController@index')->name('customer_dashboard');
        Route::get('/logout' , 'CustomerController@logout')->name('customer_logout');
        Route::get('/toOrder' , 'CustomerController@toOrder')->name('customer_toOrder');
        Route::post('/order' , 'CustomerController@order')->name('customer_order');
        Route::get('/orders' , 'CustomerController@orders')->name('customer_orders');
        Route::get('/confirmation' , 'CustomerController@toConfirmation')->name('customer_confirmation');



    });

});





/*
    |--------------------------------------------------------------------------
    | TENDER ROUTES
    |--------------------------------------------------------------------------
*/


Route::group(['prefix' => 'tender'] , function(){

        Route::get('/toLogin' , 'TenderController@toLogin')->name('tender_toLogin');
        Route::post('/login' , 'TenderController@login')->name('tender_login');
        Route::get('/toRegister' , 'TenderController@toRegister')->name('tender_toRegister');
        Route::post('/register' , 'TenderController@register')->name('tender_register');
        Route::post('/password/email' , 'Auth\TenderForgotPasswordController@sendResetLinkEmail')->name('tender_password_email');
        Route::get('/password/reset' , 'Auth\TenderForgotPasswordController@showLinkRequestForm')->name('tender_password_request');
        Route::post('/password/reset' , 'Auth\TenderResetPasswordController@reset')->name('tender_password_reset');
        Route::get('/password/reset/{token}' , 'Auth\TenderResetPasswordController@showResetForm')->name('tender_reset_request');

    Route::group(['middleware' => 'tender'] , function(){
        Route::get('/dashboard' , 'TenderController@index')->name('tender_dashboard');
        Route::get('/logout' , 'TenderController@logout')->name('tender_logout');
        Route::get('/toOrder' , 'TenderController@toOrder')->name('tender_toOrder');
        Route::post('/order' , 'TenderController@order')->name('tender_order');
        Route::get('/orders' , 'TenderController@orders')->name('tender_orders');

    });
});



//Auth::routes();

Route::get('/home', 'HomeController@index');
