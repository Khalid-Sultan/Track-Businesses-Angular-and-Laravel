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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'api/v1'], function() {
    Route::resource('addressScopes', 'AddressScopeController');
    Route::resource('addressZones', 'AddressZoneController');
    Route::resource('capitalSources', 'CapitalSourceController');
    Route::resource('enterpriseArchitectureSources', 'EnterpriseArchitectureSourceController');
    Route::resource('enterpriseLevels', 'EnterpriseLevelController');
    Route::resource('enterpriseMembers', 'EnterpriseMemberController');
    Route::resource('enterprises', 'EnterpriseController');
    Route::resource('enterpriseTypeByDefinitions', 'EnterpriseTypeByDefinitionController');
    Route::resource('institutionalReasons', 'InstitutionalReasonController');
    Route::resource('institutionalStatuss', 'InstitutionalStatusController');
    Route::resource('mCCInstitutions', 'MarketConnectionCreatorInstitutionController');
    Route::resource('mCCMarkets', 'MarketConnectionCreatorMarketController');
    Route::resource('marketConnectionTypes', 'marketConnectionTypeController');
    Route::resource('memberJobSites', 'MemberJobSiteController');
    Route::resource('memberJobTypes', 'MemberJobTypeController');
    Route::resource('memberLevels', 'MemberLevelController');
    Route::resource('membershipByEZs', 'MembershipByEZController');
    Route::resource('operatingSectors', 'OperatingSectorController');
    Route::resource('operatingSubSectors', 'OperatingSubSectorController');
    Route::resource('organizationalTypes', 'OrganizationalTypeController');
    Route::resource('organizations', 'OrganizationController');
    Route::resource('tEInstitutions', 'TypeOfEntrepreneurialInstitutionController');

});