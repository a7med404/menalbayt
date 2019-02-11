<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});






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

