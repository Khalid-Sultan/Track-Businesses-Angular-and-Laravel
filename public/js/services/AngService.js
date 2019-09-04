var app = angular.module('AngService', []);

app.factory('AngService', ['$http', function ($http) {
    var api_v1 = 'api/v1/';
    return {
        addAddressScope: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'addressScopes', model);
        },
        addAddressZone: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'addressZones', model);
        },
        addCapitalSource: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'capitalSources', model);
        },
        addEnterpriseArchitectureSource: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'enterpriseArchitectureSources', model);
        },
        addEnterpriseLevel: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'enterpriseLevels', model);
        },
        addEnterpriseMember: function (enterprise, name, gender, age, member_levels, trained_career, member_job_sites, job_search, job_search_registered,
                                       awareness_training, professional_training, professional_evaluation, professional_eval_eligibility, disabled,
                                       persecuted, living_with_aids, displaced, happiness, membership_by_e_z_s, nation, phone_number, member_job_types,
                                       salary_amount, employement_period, lasting_months) {
            let model = {
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
            };
            return $http.post(api_v1 + 'enterpriseMembers', model);
        },
        addEnterprise: function (identification, EnterpriseName, type_of_entrepreneurial_institutions, address_zones, zone, kebele,
                                 address_scopes, location_identity, house_number, phone_number, age_of_establishment, operating_sectors, operating_sub_sectors,
                                 enterprise_type_by_definitions, organizational_types, tax_payer_id, organizations, institutional_statuses, institutional_reasons,
                                 base_capital_size, capital_sources, loan_credit_size, time_of_loan, post_credit_size, refund_credit_size, return_credit_size,
                                 time_of_return, time_made_size, time_of_credit_made, enterprise_architecture_sources, hectare_size, rent_per_month, released_time,
                                 market_size, market_created_time, market_connection_types, market_connection_creator_institutions, market_connection_creator_markets,
                                 enterprise_levels, standard_time, technical_skill, kaiser_service, tech_support, dev_support, recognition, certificate) {
            let model = {
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
            };
            return $http.post(api_v1 + 'enterprises', model);
        },
        addEnterpriseTypeByDefinition: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'enterpriseTypeByDefinitions', model);
        },
        addInstitutionalStatus: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'institutionalStatuss', model);
        },
        addInstitutionalReason: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'institutionalReasons', model);
        },
        addMarketConnectionCreatorInstitution: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'mCCInstitutions', model);
        },
        addMarketConnectionCreatorMarket: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'mCCMarkets', model);
        },
        addMarketConnectionType: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'marketConnectionTypes', model);
        },
        addMemberJobSite: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'memberJobSites', model);
        },
        addMemberJobType: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'memberJobTypes', model);
        },
        addMemberLevel: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'memberLevels', model);
        },
        addMembershipByEZ: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'membershipByEZs', model);
        },
        addOperatingSector: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'operatingSectors', model);
        },
        addOperatingSubSector: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'operatingSubSectors', model);
        },
        addOrganization: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'organizations', model);
        },
        addOrganizationalType: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'organizationalTypes', model);
        },
        addTypeOfEntrepreneurialInstitution: function (identification, name) {
            let model = {
                identification: identification,
                name: name
            };
            return $http.post(api_v1 + 'tEInstitutions', model);
        },


        getAddressScope: function () {
            return $http.get(api_v1 + 'addressScopes');
        },
        getAddressZone: function () {
            return $http.get(api_v1 + 'addressZones');
        },
        getCapitalSource: function () {
            return $http.get(api_v1 + 'capitalSources');
        },
        getEnterpriseArchitectureSource: function () {
            return $http.get(api_v1 + 'enterpriseArchitectureSources');
        },
        getEnterpriseLevel: function () {
            return $http.get(api_v1 + 'enterpriseLevels');
        },
        getEnterpriseMember: function (){
            return $http.get(api_v1 + 'enterpriseMembers');
        },
        getEnterprise: function(){
            return $http.get(api_v1 + 'enterprises');
        },
        getEnterpriseTypeByDefinition: function () {
            return $http.get(api_v1 + 'enterpriseTypeByDefinitions');
        },
        getInstitutionalStatus: function () {
            return $http.get(api_v1 + 'institutionalStatuss');
        },
        getInstitutionalReason: function () {
            return $http.get(api_v1 + 'institutionalReasons');
        },
        getMarketConnectionCreatorInstitution: function () {
            return $http.get(api_v1 + 'mCCInstitutions');
        },
        getMarketConnectionCreatorMarket: function () {
            return $http.get(api_v1 + 'mCCMarkets');
        },
        getMarketConnectionType: function () {
            return $http.get(api_v1 + 'marketConnectionTypes');
        },
        getMemberJobSite: function () {
            return $http.get(api_v1 + 'memberJobSites');
        },
        getMemberJobType: function () {
            return $http.get(api_v1 + 'memberJobTypes');
        },
        getMemberLevel: function () {
            return $http.get(api_v1 + 'memberLevels');
        },
        getMembershipByEZ: function () {
            return $http.get(api_v1 + 'membershipByEZs');
        },
        getOperatingSector: function () {
            return $http.get(api_v1 + 'operatingSectors');
        },
        getOperatingSubSector: function () {
            return $http.get(api_v1 + 'operatingSubSectors');
        },
        getOrganization: function () {
            return $http.get(api_v1 + 'organizations');
        },
        getOrganizationalType: function () {
            return $http.get(api_v1 + 'organizationalTypes');
        },
        getTypeOfEntrepreneurialInstitution: function () {
            return $http.get(api_v1 + 'tEInstitutions');
        },
        updateAddressScope: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'addressScopes/' + id, model);
        },
        updateAddressZone: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'addressZones/' + id, model);
        },
        updateCapitalSource: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'capitalSources/' + id, model);
        },
        updateEnterpriseArchitectureSource: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'enterpriseArchitectureSources/' + id, model);
        },
        updateEnterpriseLevel: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'enterpriseLevels/' + id, model);
        },
        updateEnterpriseTypeByDefinition: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'enterpriseTypeByDefinitions/' + id, model);
        },
        updateInstitutionalStatus: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'institutionalStatuss/' + id, model);
        },
        updateInstitutionalReason: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'institutionalReasons/' + id, model);
        },
        updateMarketConnectionCreatorInstitution: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'mCCInstitutions/' + id, model);
        },
        updateMarketConnectionCreatorMarket: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'mCCMarkets/' + id, model);
        },
        updateMarketConnectionType: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'marketConnectionTypes/' + id, model);
        },
        updateMemberJobSite: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'memberJobSites/' + id, model);
        },
        updateMemberJobType: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'memberJobTypes/' + id, model);
        },
        updateMemberLevel: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'memberLevels/' + id, model);
        },
        updateMembershipByEZ: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'membershipByEZs/' + id, model);
        },
        updateOperatingSector: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'operatingSectors/' + id, model);
        },
        updateOperatingSubSector: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'operatingSubSectors/' + id, model);
        },
        updateOrganization: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'organizations/' + id, model);
        },
        updateOrganizationalType: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'organizationalTypes/' + id, model);
        },
        updateTypeOfEntrepreneurialInstitution: function (id, identification, name) {
            var model = {
                identification: identification,
                name: name
            };
            return $http.put(api_v1 + 'tEInstitutions/' + id, model);
        }

    };
}]);


