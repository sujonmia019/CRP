<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Basic Routing
Route::get('/', function () {
    return view('index');
});

//Auth Routing
Auth::routes();

//Common Routing
Route::get('/home', 'HomeController@index')->name('home');

// User SignUp Route
Route::post('auth', 'Backend\UserRegisterController@registerAuth')->name('auth.store');

// Profile Route
Route::get('profile', 'Backend\AllUserProfileController@index')->name('all.user.profile');

// Facebook Social Route
Route::get('login/{provider}', 'Auth\LoginController@facebookRedirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@facebookHandleProviderCallback');

// Google Social Route
Route::get('login/{provider}', 'Auth\LoginController@googleRedirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@googleHandleProviderCallback');

// Admin Group Routing
Route::group(['as'=>'admin.','prefix'=>'admin/','namespace'=>'Backend\Admin','middleware'=>['auth','is_admin']], function(){

    //Admin Dashboard Route
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    // User Route
    Route::resource('users', 'UserController');
    // Order Route
    Route::resource('order','AdminOrderController');
    // Free Trials Route
    Route::resource('freetrials','AdminFreeTrialController');
    // Specification Route
    Route::resource('specification','AdminSpecificationController');
    Route::resource('specifications','SpecificationCreateController');
    // User Record Route
    Route::resource('record/billing','AdminRecordBillingController');
    Route::resource('record/client','AdminRecordClientController');
    Route::resource('record/worker','AdminRecordWorkerController');
    // User Control Route
    Route::get('users/deactived/{id}', 'UserController@deactivedUser')->name('user.deactived');
    Route::get('users/actived/{id}', 'UserController@activedUser')->name('user.actived');
    Route::get('users/view/{id}', 'UserController@userView')->name('user.view');


});

// Client Group Routing
Route::group(['as'=>'client.','prefix'=>'client/','namespace'=>'Backend\Client','middleware'=>['auth','is_client']], function(){

    Route::get('dashboard', 'ClientController@dashboard')->name('dashboard');
    Route::resource('order','ClientOrderController');
    Route::resource('specification','ClientSpecificationController');
    Route::resource('specification-stepbystep','ClientSpecificationStepbystepController');
    Route::resource('specification-marketplace','ClientSpecificationMarketplaceController');
    Route::resource('account','ClientAccountController');

});


// Worker Group Routing
Route::group(['as'=>'worker.','prefix'=>'worker/','namespace'=>'Backend\Worker','middleware'=>['auth','is_worker']], function(){

    Route::get('dashboard', 'WorkerController@dashboard')->name('dashboard');
    Route::resource('order','WorkerOrderController');
    Route::resource('account','WorkerAccountController');

});



