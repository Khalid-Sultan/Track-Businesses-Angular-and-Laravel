// var app = angular.module('mainApp', ['mainRoutes', 'todoService', 'ngAnimate', 'toastr', 'ui.bootstrap']);
//
//
var app = angular.module('mainApp', ['mainRoutes', 'AngService', 'ngAnimate', 'toastr', 'ui.bootstrap']);


app.controller('addressScopeController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allAddressScopes = [];
    var initializeAddressScopes = function () {
        AngService.getAddressScope().success(function (data) {
            $scope.allAddressScopes = data;
        });
    };
    initializeAddressScopes();
    $scope.addAddressScopes = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addAddressScope(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";

            toastr.success('Successfully added!', 'Success');
            initializeAddressScopes();
            $scope.allAddressScopes.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('addressZoneController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allAddressZones = [];

    var initializeAddressZones = function () {
        AngService.getAddressZone().success(function (data) {
            $scope.allAddressZones = data;
        });
    };
    initializeAddressZones();
    $scope.addAddressZones = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addAddressZone(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeAddressZones();
            $scope.allAddressZones.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('capitalSourceController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allCapitalSources = [];

    var initializeCapitalSources = function () {
        AngService.getCapitalSource().success(function (data) {
            $scope.allCapitalSources = data;
        });
    };
    initializeCapitalSources();
    $scope.addCapitalSources = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addCapitalSource(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeCapitalSources();
            $scope.allCapitalSources.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('enterpriseArchitectureSourceController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allEnterpriseArchitectureSources = [];

    var initializeEnterpriseArchitectureSources = function () {
        AngService.getEnterpriseArchitectureSource().success(function (data) {
            $scope.allEnterpriseArchitectureSources = data;
        });
    };
    initializeEnterpriseArchitectureSources();
    $scope.addEnterpriseArchitectureSources = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addEnterpriseArchitectureSource(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeEnterpriseArchitectureSources();
            $scope.allEnterpriseArchitectureSources.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('enterpriseLevelController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allEnterpriseLevels = [];

    var initializeEnterpriseLevels = function () {
        AngService.getEnterpriseLevel().success(function (data) {
            $scope.allEnterpriseLevels = data;
        });
    };
    initializeEnterpriseLevels();
    $scope.addEnterpriseLevels = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addEnterpriseLevel(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeEnterpriseLevels();
            $scope.allEnterpriseLevels.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('enterpriseMemberController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allEnterpriseMembers = [];
    $scope.allEnterprises = [];
    $scope.allMemberLevels = [];
    $scope.allMemberJobSites = [];
    $scope.allMembershipByEZs = [];
    $scope.allMemberJobTypes = [];

    var initializeEnterpriseMembers = function () {
        AngService.getEnterpriseMember().success(function (data) {  $scope.allEnterpriseMembers = data; });
        AngService.getEnterprise().success(function (data){     $scope.allEnterprises = data;   });
        AngService.getMemberLevel().success(function (data){    $scope.allMemberLevels = data;  });
        AngService.getMemberJobSite().success(function (data){    $scope.allMemberJobSites = data;  });
        AngService.getMembershipByEZ().success(function (data){    $scope.allMembershipByEZs = data;  });
        AngService.getMemberJobType().success(function (data){    $scope.allMemberJobTypes = data;  });
    };
    initializeEnterpriseMembers();
    $scope.addEnterpriseMembers = function () {
        var enterprise = $scope.myEnterpriseInput;
        var name = $scope.myNameInput;
        var gender = $scope.myGenderInput;
        var age = $scope.myAgeInput;
        var member_levels = $scope.myMemberLevelInput;
        var trained_career = $scope.myTrainedCarreerInput;
        var member_job_sites = $scope.myMemberJobSiteInput;
        var job_search = $scope.myJobSearchInput;
        var job_search_registered = $scope.myJobSearchRegisteredInput;
        var awareness_training = $scope.myAwarenessTrainingInput;
        var professional_training = $scope.myProfessionalTrainingInput;
        var professional_evaluation = $scope.myProfessionalEvaluationInput;
        var professional_eval_eligibility = $scope.myProfessionalEvalEligibilityInput;
        var disabled = $scope.myDisabledInput;
        var persecuted = $scope.myPersecutedInput;
        var living_with_aids = $scope.myLivingWithAidsInput;
        var displaced = $scope.myDisplacedInput;
        var happiness = $scope.myHappinessInput;
        var membership_by_e_z_s = $scope.myMembershipByEZsInput;
        var nation = $scope.myNationInput;
        var phone_number = $scope.myPhoneNumberInput;
        var member_job_types = $scope.myMemberJobTypeInput;
        var salary_amount = $scope.mySalaryAmountInput;
        var employement_period = $scope.myEmployementPeriodInput;
        var lasting_months = $scope.myLastingMonthsInput;
        AngService.addEnterpriseMember(enterprise,
            name, gender, age, member_levels, trained_career, member_job_sites, job_search, job_search_registered,
            awareness_training, professional_training, professional_evaluation, professional_eval_eligibility, disabled,
            persecuted, living_with_aids, displaced, happiness, membership_by_e_z_s, nation, phone_number, member_job_types,
            salary_amount, employement_period, lasting_months
        ).success(function (data) {
            $scope.myEnterpriseInput = "";
            $scope.myNameInput = "";
            $scope.myGenderInput = "";
            $scope.myAgeInput = "";
            $scope.myMemberLevelInput = "";
            $scope.myTrainedCarreerInput = "";
            $scope.myMemberJobSiteInput = "";
            $scope.myJobSearchInput = "";
            $scope.myJobSearchRegisteredInput = "";
            $scope.myAwarenessTrainingInput = "";
            $scope.myProfessionalTrainingInput = "";
            $scope.myProfessionalEvaluationInput = "";
            $scope.myProfessionalEvalEligibilityInput = "";
            $scope.myDisabledInput = "";
            $scope.myPersecutedInput = "";
            $scope.myLivingWithAidsInput = "";
            $scope.myDisplacedInput = "";
            $scope.myHappinessInput = "";
            $scope.myMembershipByEZsInput = "";
            $scope.myNationInput = "";
            $scope.myPhoneNumberInput = "";
            $scope.myMemberJobTypeInput = "";
            $scope.mySalaryAmountInput = "";
            $scope.myEmployementPeriodInput = "";
            $scope.myLastingMonthsInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeEnterpriseMembers();
            $scope.allEnterpriseMembers.push({
                id: data.id,
                enterprise: enterprise,
                name: name,
                gender: gender,
                age: age,
                member_levels: member_levels,
                trained_career: trained_career,
                member_job_sites: member_job_sites,
                job_search: job_search,
                job_search_registered: job_search_registered,
                awareness_training: awareness_training,
                professional_training: professional_training,
                professional_evaluation: professional_evaluation,
                professional_eval_eligibility: professional_eval_eligibility,
                disabled: disabled,
                persecuted: persecuted,
                living_with_aids: living_with_aids,
                displaced: displaced,
                happiness: happiness,
                membership_by_e_z_s: membership_by_e_z_s,
                nation: nation,
                phone_number: phone_number,
                member_job_types: member_job_types,
                salary_amount: salary_amount,
                employement_period: employement_period,
                lasting_months: lasting_months
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('enterpriseController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allEnterprises = [];
    $scope.allTypeOfEntrepreneurialInstitutions = [];
    $scope.allAddressZones = [];
    $scope.allAddressScopes = [];
    $scope.allOperatingSectors = [];
    $scope.allOperatingSubSectors = [];
    $scope.allEnterpriseTypeByDefinitions = [];
    $scope.allOrganizationalTypes = [];
    $scope.allOrganizations = [];
    $scope.allInstitutionalStatuses = [];
    $scope.allInstitutionalReasons = [];
    $scope.allCapitalSources = [];
    $scope.allEnterpriseArchitectureSources = [];
    $scope.allMarketConnectionTypes = [];
    $scope.allMarketConnectionCreatorInstitutions = [];
    $scope.allMarketConnectionCreatorMarkets = [];
    $scope.allEnterpriseLevels = [];

    var initializeEnterprise = function () {
        AngService.getEnterprise().success(function (data) {    $scope.allEnterprises = data;   });
        AngService.getTypeOfEntrepreneurialInstitution().success(function (data) { $scope.allTypeOfEntrepreneurialInstitutions = data; })
        AngService.getAddressZone().success(function (data) {    $scope.allAddressZones = data;   });
        AngService.getAddressScope().success(function (data) {    $scope.allAddressScopes = data;   });
        AngService.getOperatingSector().success(function (data) {    $scope.allOperatingSectors = data;   });
        AngService.getOperatingSubSector().success(function (data) {    $scope.allOperatingSubSectors = data;   });
        AngService.getEnterpriseTypeByDefinition().success(function (data) {    $scope.allEnterpriseTypeByDefinitions = data;   });
        AngService.getOrganizationalType().success(function (data) {    $scope.allOrganizationalTypes = data;   });
        AngService.getOrganization().success(function (data) {    $scope.allOrganizations = data;   });
        AngService.getInstitutionalStatus().success(function (data) {    $scope.allInstitutionalStatuses = data;   });
        AngService.getInstitutionalReason().success(function (data) {    $scope.allInstitutionalReasons = data;   });
        AngService.getCapitalSource().success(function (data) {    $scope.allCapitalSources = data;   });
        AngService.getEnterpriseArchitectureSource().success(function (data) {    $scope.allEnterpriseArchitectureSources = data;   });
        AngService.getMarketConnectionType().success(function (data) {    $scope.allMarketConnectionTypes = data;   });
        AngService.getMarketConnectionCreatorInstitution().success(function (data) {    $scope.allMarketConnectionCreatorInstitutions = data;   });
        AngService.getMarketConnectionCreatorMarket().success(function (data) {    $scope.allMarketConnectionCreatorMarkets = data;   });
        AngService.getEnterpriseLevel().success(function (data) {    $scope.allEnterpriseLevels = data;   });
    };
    initializeEnterprise();
    $scope.addEnterprise = function () {
        var identification = $scope.myIdentificationInput;
        var EnterpriseName = $scope.myEnterpriseNameInput;
        var type_of_entrepreneurial_institutions = $scope.myTypeOfEntrepreneurialInstitutionsInput;
        var address_zones = $scope.myAddressZonesInput;
        var zone = $scope.myZoneInput;
        var kebele = $scope.myKebeleInput;
        var address_scopes = $scope.myAddressScopesInput;
        var location_identity = $scope.myLocationIdentityInput;
        var house_number = $scope.myHouseNumberInput;
        var phone_number = $scope.myPhoneNumberInput;
        var age_of_establishment = $scope.myAgeOfEstablishmentInput;
        var operating_sectors = $scope.myOperatingSectorsInput;
        var operating_sub_sectors = $scope.myOperatingSubSectorsInput;
        var enterprise_type_by_definitions = $scope.myEnterpriseTypeByDefinitionInput;
        var organizational_types = $scope.myOrganizationalTypesInput;
        var tax_payer_id = $scope.myTaxPayerIdInput;
        var organizations = $scope.myOrganizationsInput;
        var institutional_statuses = $scope.myInstitutionalStatusesInput;
        var institutional_reasons = $scope.myInstitutionalReasonsInput;
        var base_capital_size = $scope.myBaseCapitalSizeInput;
        var capital_sources = $scope.myCapitalSourcesInput;
        var loan_credit_size = $scope.myLoanCreditSizeInput;
        var time_of_loan = $scope.myTimeOfLoanInput;
        var post_credit_size = $scope.myPostCreditSizeInput;
        var refund_credit_size = $scope.myRefundCreditSizeInput;
        var return_credit_size = $scope.myReturnCreditSizeInput;
        var time_of_return = $scope.myTimeOfReturnInput;
        var time_made_size = $scope.myTimeMadeSizeInput;
        var time_of_credit_made = $scope.myTimeOfCreditMadeInput;
        var enterprise_architecture_sources = $scope.myEnterpriseArchitectureSourcesInput;
        var hectare_size = $scope.myHectareSizeInput;
        var rent_per_month = $scope.myRentPerMonthInput;
        var released_time = $scope.myReleasedTimeInput;
        var market_size = $scope.myMarketSizeInput;
        var market_created_time = $scope.myMarketCreatedTimeInput;
        var market_connection_types = $scope.myMarketConnectionTypesInput;
        var market_connection_creator_institutions = $scope.myMarketConnectionCreatorInstitutionsInput;
        var market_connection_creator_markets = $scope.myMarketConnectionCreatorMarketsInput;
        var enterprise_levels = $scope.myEnterpriseLevelsInput;
        var standard_time = $scope.myStandardTimeInput;
        var technical_skill = $scope.myTechnicalSkillInput;
        var kaiser_service = $scope.myKaiserServiceInput;
        var tech_support = $scope.myTechSupportInput;
        var dev_support = $scope.myDevSupportInput;
        var recognition = $scope.myRecognitionInput;
        var certificate = $scope.myCertificateInput;

        AngService.addEnterprise(identification, EnterpriseName, type_of_entrepreneurial_institutions, address_zones, zone, kebele,
            address_scopes, location_identity, house_number, phone_number, age_of_establishment, operating_sectors, operating_sub_sectors,
            enterprise_type_by_definitions, organizational_types, tax_payer_id, organizations, institutional_statuses, institutional_reasons,
            base_capital_size, capital_sources, loan_credit_size, time_of_loan, post_credit_size, refund_credit_size, return_credit_size,
            time_of_return, time_made_size, time_of_credit_made, enterprise_architecture_sources, hectare_size, rent_per_month, released_time,
            market_size, market_created_time, market_connection_types, market_connection_creator_institutions, market_connection_creator_markets,
            enterprise_levels, standard_time, technical_skill, kaiser_service, tech_support, dev_support, recognition, certificate)
            .success(function (data) {
                $scope.myIdentificationInput = "";
                $scope.myEnterpriseNameInput = "";
                $scope.myTypeOfEntrepreneurialInstitutionsInput = "";
                $scope.myAddressZonesInput = "";
                $scope.myZoneInput = "";
                $scope.myKebeleInput = "";
                $scope.myAddressScopesInput = "";
                $scope.myLocationIdentityInput = "";
                $scope.myHouseNumberInput = "";
                $scope.myPhoneNumberInput = "";
                $scope.myAgeOfEstablishmentInput = "";
                $scope.myOperatingSectorsInput = "";
                $scope.myOperatingSubSectorsInput = "";
                $scope.myEnterpriseTypeByDefinitionInput = "";
                $scope.myOrganizationalTypesInput = "";
                $scope.myTaxPayerIdInput = "";
                $scope.myOrganizationsInput = "";
                $scope.myInstitutionalStatusesInput = "";
                $scope.myInstitutionalReasonsInput = "";
                $scope.myBaseCapitalSizeInput = "";
                $scope.myCapitalSourcesInput = "";
                $scope.myLoanCreditSizeInput = "";
                $scope.myTimeOfLoanInput = "";
                $scope.myPostCreditSizeInput = "";
                $scope.myRefundCreditSizeInput = "";
                $scope.myReturnCreditSizeInput = "";
                $scope.myTimeOfReturnInput = "";
                $scope.myTimeMadeSizeInput = "";
                $scope.myTimeOfCreditMadeInput = "";
                $scope.myEnterpriseArchitectureSourcesInput = "";
                $scope.myHectareSizeInput = "";
                $scope.myRentPerMonthInput = "";
                $scope.myReleasedTimeInput = "";
                $scope.myMarketSizeInput = "";
                $scope.myMarketCreatedTimeInput = "";
                $scope.myMarketConnectionTypesInput = "";
                $scope.myMarketConnectionCreatorInstitutionsInput = "";
                $scope.myMarketConnectionCreatorMarketsInput = "";
                $scope.myEnterpriseLevelsInput = "";
                $scope.myStandardTimeInput = "";
                $scope.myTechnicalSkillInput = "";
                $scope.myKaiserServiceInput = "";
                $scope.myTechSupportInput = "";
                $scope.myDevSupportInput = "";
                $scope.myRecognitionInput = "";
                $scope.myCertificateInput = "";
                toastr.success('Successfully added!', 'Success');
                initializeEnterprise();
                $scope.allEnterprise.push({
                    id: data.id,
                    identification: identification,
                    EnterpriseName: EnterpriseName,
                    type_of_entrepreneurial_institutions: type_of_entrepreneurial_institutions,
                    address_zones: address_zones,
                    zone: zone,
                    kebele: kebele,
                    address_scopes: address_scopes,
                    location_identity: location_identity,
                    house_number: house_number,
                    phone_number: phone_number,
                    age_of_establishment: age_of_establishment,
                    operating_sectors: operating_sectors,
                    operating_sub_sectors: operating_sub_sectors,
                    enterprise_type_by_definitions: enterprise_type_by_definitions,
                    organizational_types: organizational_types,
                    tax_payer_id: tax_payer_id,
                    organizations: organizations,
                    institutional_statuses: institutional_statuses,
                    institutional_reasons: institutional_reasons,
                    base_capital_size: base_capital_size,
                    capital_sources: capital_sources,
                    loan_credit_size: loan_credit_size,
                    time_of_loan: time_of_loan,
                    post_credit_size: post_credit_size,
                    refund_credit_size: refund_credit_size,
                    return_credit_size: return_credit_size,
                    time_of_return: time_of_return,
                    time_made_size: time_made_size,
                    time_of_credit_made: time_of_credit_made,
                    enterprise_architecture_sources: enterprise_architecture_sources,
                    hectare_size: hectare_size,
                    rent_per_month: rent_per_month,
                    released_time: released_time,
                    market_size: market_size,
                    market_created_time: market_created_time,
                    market_connection_types: market_connection_types,
                    market_connection_creator_institutions: market_connection_creator_institutions,
                    market_connection_creator_markets: market_connection_creator_markets,
                    enterprise_levels: enterprise_levels,
                    standard_time: standard_time,
                    technical_skill: technical_skill,
                    kaiser_service: kaiser_service,
                    tech_support: tech_support,
                    dev_support: dev_support,
                    recognition: recognition,
                    certificate: certificate
                });
            }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('enterpriseTypeByDefinitionController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allEnterpriseTypeByDefinitions = [];

    var initializeEnterpriseTypeByDefinitions = function () {
        AngService.getEnterpriseTypeByDefinition().success(function (data) {
            $scope.allEnterpriseTypeByDefinitions = data;
        });
    };
    initializeEnterpriseTypeByDefinitions();
    $scope.addEnterpriseTypeByDefinitions = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addEnterpriseTypeByDefinition(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeEnterpriseTypeByDefinitions();
            $scope.allEnterpriseTypeByDefinitions.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('institutionalStatusController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allInstitutionalStatuss = [];

    var initializeInstitutionalStatuss = function () {
        AngService.getInstitutionalStatus().success(function (data) {
            $scope.allInstitutionalStatuss = data;
        });
    };
    initializeInstitutionalStatuss();
    $scope.addInstitutionalStatuss = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addInstitutionalStatus(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeInstitutionalStatuss();
            $scope.allInstitutionalStatuss.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('institutionalReasonController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allInstitutionalReasons = [];

    var initializeInstitutionalReasons = function () {
        AngService.getInstitutionalReason().success(function (data) {
            $scope.allInstitutionalReasons = data;
        });
    };
    initializeInstitutionalReasons();
    $scope.addInstitutionalReasons = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addInstitutionalReason(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeInstitutionalReasons();
            $scope.allInstitutionalReasons.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('marketConnectionCreatorInstitutionController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allMarketConnectionCreatorInstitutions = [];

    var initializeMarketConnectionCreatorInstitutions = function () {
        AngService.getMarketConnectionCreatorInstitution().success(function (data) {
            $scope.allMarketConnectionCreatorInstitutions = data;
        });
    };
    initializeMarketConnectionCreatorInstitutions();
    $scope.addMarketConnectionCreatorInstitutions = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addMarketConnectionCreatorInstitution(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeMarketConnectionCreatorInstitutions();
            $scope.allMarketConnectionCreatorInstitutions.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('marketConnectionCreatorMarketController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allMarketConnectionCreatorMarkets = [];

    var initializeMarketConnectionCreatorMarkets = function () {
        AngService.getMarketConnectionCreatorMarket().success(function (data) {
            $scope.allMarketConnectionCreatorMarkets = data;
        });
    };
    initializeMarketConnectionCreatorMarkets();
    $scope.addMarketConnectionCreatorMarkets = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addMarketConnectionCreatorMarket(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeMarketConnectionCreatorMarkets();
            $scope.allMarketConnectionCreatorMarkets.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('marketConnectionTypeController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allMarketConnectionTypes = [];

    var initializeMarketConnectionTypes = function () {
        AngService.getMarketConnectionType().success(function (data) {
            $scope.allMarketConnectionTypes = data;
        });
    };
    initializeMarketConnectionTypes();
    $scope.addMarketConnectionTypes = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addMarketConnectionType(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeMarketConnectionTypes();
            $scope.allMarketConnectionTypes.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('memberJobSiteController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allMemberJobSites = [];

    var initializeMemberJobSites = function () {
        AngService.getMemberJobSite().success(function (data) {
            $scope.allMemberJobSites = data;
        });
    };
    initializeMemberJobSites();
    $scope.addMemberJobSites = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addMemberJobSite(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeMemberJobSites();
            $scope.allMemberJobSites.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('memberJobTypeController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allMemberJobTypes = [];

    var initializeMemberJobTypes = function () {
        AngService.getMemberJobType().success(function (data) {
            $scope.allMemberJobTypes = data;
        });
    };
    initializeMemberJobTypes();
    $scope.addMemberJobTypes = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addMemberJobType(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeMemberJobTypes();
            $scope.allMemberJobTypes.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('memberLevelController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allMemberLevels = [];

    var initializeMemberLevels = function () {
        AngService.getMemberLevel().success(function (data) {
            $scope.allMemberLevels = data;
        });
    };
    initializeMemberLevels();
    $scope.addMemberLevels = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addMemberLevel(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeMemberLevels();
            $scope.allMemberLevels.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('membershipByEZController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allMembershipByEZs = [];

    var initializeMembershipByEZs = function () {
        AngService.getMembershipByEZ().success(function (data) {
            $scope.allMembershipByEZs = data;
        });
    };
    initializeMembershipByEZs();
    $scope.addMembershipByEZs = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addMembershipByEZ(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeMembershipByEZs();
            $scope.allMembershipByEZs.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('operatingSectorController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allOperatingSectors = [];

    var initializeOperatingSectors = function () {
        AngService.getOperatingSector().success(function (data) {
            $scope.allOperatingSectors = data;
        });
    };
    initializeOperatingSectors();
    $scope.addOperatingSectors = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addOperatingSector(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeOperatingSectors();
            $scope.allOperatingSectors.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('operatingSubSectorController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allOperatingSubSectors = [];

    var initializeOperatingSubSectors = function () {
        AngService.getOperatingSubSector().success(function (data) {
            $scope.allOperatingSubSectors = data;
        });
    };
    initializeOperatingSubSectors();
    $scope.addOperatingSubSectors = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addOperatingSubSector(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeOperatingSubSectors();
            $scope.allOperatingSubSectors.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('organizationController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allOrganizations = [];

    var initializeOrganizations = function () {
        AngService.getOrganization().success(function (data) {
            $scope.allOrganizations = data;
        });
    };
    initializeOrganizations();
    $scope.addOrganizations = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addOrganization(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeOrganizations();
            $scope.allOrganizations.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('organizationalTypeController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allOrganizationalTypes = [];

    var initializeOrganizationalTypes = function () {
        AngService.getOrganizationalType().success(function (data) {
            $scope.allOrganizationalTypes = data;
        });
    };
    initializeOrganizationalTypes();
    $scope.addOrganizationalTypes = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addOrganizationalType(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeOrganizationalTypes();
            $scope.allOrganizationalTypes.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
app.controller('typeOfEntrepreneurialInstitutionController', ['$scope', '$http', 'toastr', 'AngService', function ($scope, $http, toastr, AngService) {
    $scope.allTypeOfEntrepreneurialInstitutions = [];

    var initializeTypeOfEntrepreneurialInstitutions = function () {
        AngService.getTypeOfEntrepreneurialInstitution().success(function (data) {
            $scope.allTypeOfEntrepreneurialInstitutions = data;
        });
    };
    initializeTypeOfEntrepreneurialInstitutions();
    $scope.addTypeOfEntrepreneurialInstitutions = function () {
        var identification = $scope.myIdentificationInput;
        var name = $scope.myNameInput;
        AngService.addTypeOfEntrepreneurialInstitution(identification, name).success(function (data) {
            $scope.myIdentificationInput = "";
            $scope.myNameInput = "";
            toastr.success('Successfully added!', 'Success');
            initializeTypeOfEntrepreneurialInstitutions();
            $scope.allTypeOfEntrepreneurialInstitutions.push({
                id: data.id,
                identification: identification,
                name: name
            });
        }).error(function () {
            toastr.error('Something went off. Please try again', 'Fail');
        });
    }
}]);
