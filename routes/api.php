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

Route::get('getSurveyeds/{document}', 'QueryController@getByDocument');
Route::post('insertGeneral', 'QueryController@insertGeneral');
Route::post('insertDemographic', 'QueryController@insertDemographic');
Route::post('insertHome', 'QueryController@insertHome');
Route::post('insertCertification', 'QueryController@insertCertification');
Route::post('insertCertifiedActivity', 'QueryController@insertCertified');
Route::post('insertEconomicActivity', 'QueryController@insertEconomic');

Route::post('insertEconomicActivityMain', 'QueryController@insertEconomicActivityMain');
Route::post('insertEconomicActivitySec', 'QueryController@insertEconomicActivitySec');
Route::post('insertFinancialMarket', 'QueryController@insertFinanceMarket');
Route::post('insertEducation', 'QueryController@insertEducation');
Route::post('insertSocial', 'QueryController@insertSocial');
Route::post('insertExpectation', 'QueryController@insertExpectative');
Route::post('insertExternal', 'QueryController@insertExternal');
Route::post('insertGenre', 'QueryController@insertGenre');
Route::post('insertSelfEsteem', 'QueryController@insertSelfEsteem');
