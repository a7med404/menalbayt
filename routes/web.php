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
Route::get('cpanel/changeLocale', function () {
    return dd( changeLocale());
})->name('change-locale');


/**
 * Admin Routes  ==================================================================================> 
 */
    Route::get('cpanel', 'AdminController@index');


/**
 * Customers Routes  ==================================================================================> 
 */
    

    
    
    
    Route::prefix('cpanel')->group(function() {
        Route::resource('customers', 'CustomerController');
        Route::any('customers/data', 'CustomerController@ajaxData')->name('ajaxDataAllCustomers');
        Route::get('customers/repport', 'CustomerController@repport')->name('customers.repport');
        // Route::get('customers/rep', function(){
        //     return "fffffffffff";
        // })->name('customers.rep');
        Route::any('search', 'CustomerController@searchForCustmoer')->name('search');
        
    });
    
        Route::get('cpanel/customers/repport', 'CustomerController@repport')->name('customers.repport');
    
    

/**
 * Departments Routes ==================================================================================> 
 */
    Route::group(['prefix' => 'cpanel'], function() {
        Route::resource('departments', 'DepartmentController');
        Route::get('departments/repport', function(){
            return "fffffffffff";
        })->name('departments.repport');
        // Route::get('departments/repport', 'DepartmentController@repport')->name('departments.repport');
    });



/**
 * Jobs Routes       ==================================================================================>
 */

    Route::group(['prefix' => 'cpanel'], function() {
        Route::resource('jobs', 'JobController');
        Route::get('jobs/repport', 'JobController@repport')->name('jobs.repport');        
    });



/**
 * Offers Routes     ==================================================================================>
 */

    Route::group(['prefix' => 'cpanel'], function() {
        Route::resource('offers', 'OfferController');
        Route::get('offers/repport', 'OfferController@repport')->name('offers.repport');                
    });



/**
 * Projects Routes   ==================================================================================>
 */




/**
 * Protfolio Routes  ==================================================================================>
 */




/**
 * Providers Routes  ==================================================================================>
 */

    Route::group(['prefix' => 'cpanel'], function() {
        Route::resource('providers', 'ProviderController');
        Route::get('providers/repport', 'ProviderController@repport')->name('providers.repport');                        
    });

/**
 * Rates Routes      ==================================================================================>
 */






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













/**
 * Offers Routes     ==================================================================================>
 */

    Route::resource('test', 'testController');
