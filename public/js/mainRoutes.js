var app = angular.module('mainRoutes', ['ngRoute']);

app.config(function ($routeProvider) {
    $routeProvider
    .when('/about', {
            templateUrl: '../views/home/about.html'
        })
    .when('/', {
        controller: 'enterpriseController',
        templateUrl: '../views/enterprise.php'
    })
    .when('/addressScope', {
        controller: 'addressScopeController',
        templateUrl: '../views/addressScope.php'
    }).when('/addressZone', {
        controller: 'addressZoneController',
        templateUrl: '../views/addressZone.php'
    }).when('/capitalSource', {
        controller: 'capitalSourceController',
        templateUrl: '../views/capitalSource.php'
    }).when('/enterpriseArchitectureSource', {
        controller: 'enterpriseArchitectureSourceController',
        templateUrl: '../views/enterpriseArchitectureSource.php'
    }).when('/enterpriseLevel', {
        controller: 'enterpriseLevelController',
        templateUrl: '../views/enterpriseLevel.php'
    }).when('/enterpriseMember', {
        controller: 'enterpriseMemberController',
        templateUrl: '../views/enterpriseMember.php'
    }).when('/enterpriseTypeByDefinition', {
        controller: 'enterpriseTypeByDefinitionController',
        templateUrl: '../views/enterpriseTypeByDefinition.php'
    }).when('/institutionalStatus', {
        controller: 'institutionalStatusController',
        templateUrl: '../views/institutionalStatus.php'
    }).when('/institutionalReason', {
        controller: 'institutionalReasonController',
        templateUrl: '../views/institutionalReason.php'
    }).when('/mCCInstitution', {
        controller: 'marketConnectionCreatorInstitutionController',
        templateUrl: '../views/marketConnectionCreatorInstitution.php'
    }).when('/mCCMarket', {
        controller: 'marketConnectionCreatorMarketController',
        templateUrl: '../views/marketConnectionCreatorMarket.php'
    }).when('/marketConnectionType', {
        controller: 'marketConnectionTypeController',
        templateUrl: '../views/marketConnectionType.php'
    }).when('/memberJobSite', {
        controller: 'memberJobSiteController',
        templateUrl: '../views/memberJobSite.php'
    }).when('/memberJobType', {
        controller: 'memberJobTypeController',
        templateUrl: '../views/memberJobType.php'
    }).when('/memberLevel', {
        controller: 'memberLevelController',
        templateUrl: '../views/memberLevel.php'
    }).when('/membershipByEZ', {
        controller: 'membershipByEZController',
        templateUrl: '../views/membershipByEZ.php'
    }).when('/operatingSector', {
        controller: 'operatingSectorController',
        templateUrl: '../views/operatingSector.php'
    }).when('/operatingSubSector', {
        controller: 'operatingSubSectorController',
        templateUrl: '../views/operatingSubSector.php'
    }).when('/organization', {
        controller: 'organizationController',
        templateUrl: '../views/organization.php'
    }).when('/organizationalType', {
        controller: 'organizationalTypeController',
        templateUrl: '../views/organizationalType.php'
    }).when('/tEInstitution', {
        controller: 'typeOfEntrepreneurialInstitutionController',
        templateUrl: '../views/typeOfEntrepreneurialInstitution.php'
    })
    .otherwise({
        redirectTo: '/'
    });
});
