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


 
/*

    |--------------------------------------------------------------------------
    | admin Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register admin routes for the application.
    |
*/
Route::group(['middleware' => ['web', 'admin', 'auth']], function(){


Route::get('changeLocale/{lang}', function ($lang) {
        if($lang == 'en' ){
            app()->setLocale(session()->forget('lang'));
            session()->forget('lang');
            session()->put('lang', 'ar');
        }else{
            // app()->setLocale(session()->forget('lang'));
            session()->forget('lang');
            session()->put('lang', 'en');
        }

        // if($lang == "en"){
        //     session()->forget('lang');
        //     session()->put('lang', 'ar');
        //     App::setLocale(session('lang'));
        // }else{
        //     session()->forget('lang');
        //     session()->put('lang', 'en');
        //     App::setLocale(session('lang'));
        // }
        
        // App::setLocale($lang);
        // dd(App::getLocale());
    // }else{
    //     if(session()->has('lang')){
    //         session()->forget('lang');
    //     }
    //     session()->put('lang', App::getLocale());
    //     // App::setLocale(App::getLocale());
    return back();
    // return dd( \App::getLocale());
})->name('change-locale');





/**
 * Admin Routes  ==================================================================================> 
 */
Route::get('cpanel', 'AdminController@index')->name('admin.home');



Route::prefix('cpanel')->group(function() {







    Route::group(['middleware' => ['web', 'isAdmin', 'auth']], function(){

        /**
         * Users Routes  ==================================================================================> 
         */
        Route::resource('users','UsersController');
        # change-password For User
        Route::get('users/{user}/change-password', 'UsersController@changePassword')->name('change-password');
        Route::patch('users/{user}/update-password', 'UsersController@updatePassword')->name('update-password');
        Route::get('users/delete/{id}', 'UsersController@destroy')->name('users.delete');
        #change level For Users
        Route::get('users/{user}/editLevel', 'UsersController@editLevel')->name('users.editLevel');

        /**
         * Customers Routes  ==================================================================================> 
         */

        Route::any('customers/repports/all', 'CustomerController@repport')->name('customers.repport');
        Route::get('customers/delete/{id}', 'CustomerController@destroy')->name('customers.delete');


        /**
         * Departments Routes ==================================================================================> 
         */

        Route::get('departments/delete/{id}', 'DepartmentController@destroy')->name('departments.delete');
        Route::get('departments/repports/all', 'DepartmentController@repport')->name('departments.repport');



        /**
         * Offers Routes     ==================================================================================>
         */
        Route::get('offers/repports/all', 'OfferController@repport')->name('offers.repport');    
        Route::get('offers/delete/{id}', 'OfferController@destroy')->name('offers.delete');              


        /**
         * Providers Routes  ==================================================================================>
         */
        Route::get('providers/repports/all', 'ProviderController@repport')->name('providers.repport');                        
        Route::get('providers/selectJson', 'ProviderController@selectJson')->name('providers.selectJson');      
        Route::get('providers/delete/{id}', 'ProviderController@destroy')->name('providers.delete');                   
            


    });

    
    /*
    |--------------------------------------------------------------------------
    | Resource For Users
    |--------------------------------------------------------------------------
    */
    Route::get('users/delete/{id}', 'UsersController@destroy')->name('users.delete');
    #change- My -password For Auth User
    Route::get('users/{user}/change-my-password', 'UsersController@changeMyPassword')->name('change-my-password');
    //Route::get('users/{user}/update-my-password', 'UsersController@updateMyPassword')->name('update-my-password');
    Route::get('logout', 'UsersController@logout')->name('admin.logout');

    
/**
 * Customers Routes  ==================================================================================> 
 */
        Route::resource('customers', 'CustomerController')->middleware('isAdmin');
        Route::any('customers/data', 'CustomerController@ajaxData')->name('ajaxDataAllCustomers');

        Route::any('search', 'CustomerController@searchForCustmoer')->name('search');
        
        // Route::get('customers/repport', 'CustomerController@repport')->name('customers.repport');

        # --------------------------------------------------------------------------------->

    
    

/**
 * Departments Routes ==================================================================================> 
 */
        Route::resource('departments', 'DepartmentController');
    



/**
 * Jobs Routes       ==================================================================================>
 */
        Route::resource('jobs', 'JobController');
        Route::get('jobs/repport', 'JobController@repport')->name('jobs.repport');
        Route::get('jobs/delete/{id}', 'JobController@destroy')->name('jobs.delete');        
    



/**
 * Offers Routes     ==================================================================================>
 */
        Route::resource('offers', 'OfferController');             
    

/**
 * Projects Routes   ==================================================================================>
 */




/**
 * Protfolio Routes  ==================================================================================>
 */




/**
 * Providers Routes  ==================================================================================>
 */
        Route::resource('providers', 'ProviderController');                
                      
    

/**
 * Rates Routes      ==================================================================================>
 */
    });
});






/*
    |--------------------------------------------------------------------------
    | website Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register website routes for the application.
    |
*/




Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



Route::resource('test', 'testController');











/*
    |--------------------------------------------------------------------------
    | Json Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register json routes for the application.
    |
*/


/**
 * Customers Routes  ==============================================================================> 
 */
Route::any('/cpanel/customers/json/getDataJson', 'CustomerController@getDataJson');
Route::any('/cpanel/customers/json/setDataJson', 'CustomerController@setDataJson');
Route::any('/cpanel/customers/json/getDataLoginJson', 'CustomerController@getDataLoginJson');



/**rates
 * providers Routes  ==============================================================================> 
 */
Route::any('/cpanel/providers/json/getDataOneJson/{id}', 'ProviderController@getDataOneJson');
Route::any('/cpanel/providers/json/setDataJson', 'ProviderController@setDataJson');
Route::any('/cpanel/providers/json/getDataLoginJson', 'ProviderController@getDataLoginJson');
Route::any('/cpanel/providers/json/getDataAllProvidersJson', 'ProviderController@getDataAllProvidersJson');
Route::any('/cpanel/providers/json/getDataForProviderJobsJson', 'ProviderController@getDataForProviderJobsJson');

Route::any('/cpanel/providers/json/getDataOffOnJson/{id}/{provider_id}', 'ProviderController@getDataOffOnJson');


/**
 * Offers Routes  =================================================================================> 
 */
Route::any('/cpanel/offers/json/getDataOneJson', 'OfferController@getDataOneJson');
Route::any('/cpanel/offers/json/getDataOfferDoneForCustomerJson/{id}', 'OfferController@getDataOfferDoneForCustomerJson');
Route::any('/cpanel/offers/json/getDataOfferApprovedForCustomerJson/{id}', 'OfferController@getDataOfferApprovedForCustomerJson');
Route::any('/cpanel/offers/json/getDataHasWorkForProviderJson/{id}', 'OfferController@getDataHasWorkForProviderJson');
Route::any('/cpanel/offers/json/getDataDoneForProviderJson/{id}', 'OfferController@getDataDoneForProviderJson');


Route::any('/cpanel/offers/json/getCommentsOfferJson/{id}', 'OfferController@getCommentsOfferJson');
Route::any('/cpanel/offers/json/getAcceptProviderJson/{offer_id}/{provider_id}', 'OfferController@getAcceptProviderJson');
Route::any('/cpanel/offers/json/getDataOfferProvidersApprovedForCustomerJson/{id}', 'OfferController@getDataOfferProvidersApprovedForCustomerJson');


Route::any('/cpanel/offers/json/getDataNewRequestForProviderJson/{id}', 'OfferController@getDataNewRequestForProviderJson');
Route::any('/cpanel/offers/json/getDataJobsOfTheOfferJson', 'OfferController@getDataJobsOfTheOfferJson');

Route::any('/cpanel/offers/json/setDataNewOfferJson', 'OfferController@setDataNewOfferJson');
Route::any('/cpanel/offers/json/setProviderIdDataJson', 'OfferController@setProviderIdDataJson');
Route::any('/cpanel/offers/json/setOfferLevelDataJson/{id}/{level}', 'OfferController@setOfferLevelDataJson');



/**
 * Rates Routes  ==================================================================================> 
 */
Route::any('/cpanel/rates/json/getDataJson', 'RateController@getDataJson');
Route::any('/cpanel/rates/json/setDataJson', 'RateController@setDataJson');





/**
 * Jobs Routes  =================================================================================> 
 */
Route::any('/cpanel/jobs/json/getDataAllJobsJson', 'JobController@getDataAllJobsJson');




/**
 * Departments Routes  =================================================================================> 
 */
Route::any('/cpanel/departments/json/getDataAllDepartmentsJson', 'DepartmentController@getDataAllDepartmentsJson');
Route::any('/cpanel/departments/json/getProviderDept', 'DepartmentController@getProviderDept');



/**
 * Departments Routes  =================================================================================> 
 */
Route::any('/cpanel/comments/json/setDataCommentJson', 'CommentController@setDataCommentJson');

