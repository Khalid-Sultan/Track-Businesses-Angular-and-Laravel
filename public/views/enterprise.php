<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <h1>Add Enterprise Member</h1>
        <form ng-submit="addEnterpriseMembers()">
            <label>Identification</label>
            <input ng-model="myIdentificationInput" type="number" name="identification" placeholder="Please Input a given identification" required class="form-control input-lg"/>
            <label>Enterprise Name</label>
            <input ng-model="myEnterpriseNameInput" type="text" name="enterpriseName" placeholder="Please Input a given name" required class="form-control input-lg"/>


            <label> Type Of Entrepreneurial Institution</label>
            <select ng-model="myTypeOfEntrepreneurialInstitutionInput" name="typeOfEntrepreneurialInstitution" ng-repeat="list in allTypeOfEntrepreneurialInstitutions">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label> Address Zone</label>
            <select ng-model="myAddressZoneInput" name="addressZones" ng-repeat="list in allAddressZones">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label>Zone</label>
            <input ng-model="myZoneInput" type="number" min="0" name="zone" placeholder="Please Input a given zone" required class="form-control input-lg"/>
            <label>Kebele</label>
            <input ng-model="myKebeleInput" type="number" min="0" name="kebele" placeholder="Please Input a given kebele" required class="form-control input-lg"/>
            

            <label> Address Scope</label>
            <select ng-model="myAddressScopeInput" name="addressScopes" ng-repeat="list in allAddressScopes">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label>Location Identity</label>
            <input ng-model="myLocationIdentityInput" type="text" name="locationIdentity" placeholder="Please Input a given location identity" required class="form-control input-lg"/>
            <label>House Number</label>
            <input ng-model="myHouseNumberInput" type="text" name="houseNumber" placeholder="Please Input a given house number" required class="form-control input-lg"/>
            <label>Phone Number</label>
            <input ng-model="myPhoneNumberInput" type="text" name="phoneNumber" placeholder="Please Input a given phone number" required class="form-control input-lg"/>

            <label>Age Of Establishment</label>
            <input ng-model="myAgeOfEstablishmentInput" type="datetime-local" name="ageOfEstablishment" placeholder="Please Input a given age of establishment" required class="form-control input-lg"/>

            <label> Operating Sector</label>
            <select ng-model="myOperatingSectorInput" name="operatingSector" ng-repeat="list in allOperatingSectors">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label> Operating Sub Sector</label>
            <select ng-model="myOperatingSubSectorInput" name="operatingSubSector" ng-repeat="list in allOperatingSubSectors">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>

            <label> Enterprise Type By Definition</label>
            <select ng-model="myEnterpriseTypeByDefinitionInput" name="enterpriseTypeByDefinition" ng-repeat="list in allEnterpriseTypeByDefinitions">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label> Organizational Type</label>
            <select ng-model="myOrganizationalTypeInput" name="organizationalType" ng-repeat="list in allOrganizationalTypes">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>

            <label>Tax Payer ID</label>
            <input ng-model="myTaxPayerIDInput" type="text" name="taxPayerID" placeholder="Please Input a given Tax Payer ID" required class="form-control input-lg"/>
            <label> Organization </label>
            <select ng-model="myOrganizationInput" name="organization" ng-repeat="list in allOrganizations">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label> Institutional Status</label>
            <select ng-model="myInstitutionalStatusInput" name="institutionalStatus" ng-repeat="list in allInstitutionalStatuses">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label> Institutional Reason</label>
            <select ng-model="myInstitutionalReasonInput" name="institutionalReason" ng-repeat="list in allInstitutionalReasons">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>

            <label>Base Capital Size</label>
            <input ng-model="myBaseCapitalSizeInput" type="number" name="baseCapitalSize" placeholder="Please Input a given base capital size" required class="form-control input-lg"/>
            <label> Capital Source</label>
            <select ng-model="myCapitalSourceInput" name="capitalSource" ng-repeat="list in allCapitalSources">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>


            <label>Loan Credit Size</label>
            <input ng-model="myBaseCapitalSizeInput" type="number" name="baseCapitalSize" placeholder="Please Input a given base capital size" required class="form-control input-lg"/>

            <label>Enterprise Architecture Source</label>
            <select ng-repeat="list in allEnterpriseArchitectureSources">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label>Market Connection Creator Institution</label>
            <select ng-repeat="list in allMarketConnectionCreatorInstitutions">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label>Market Connection Creator Market</label>
            <select ng-repeat="list in allMarketConnectionCreatorMarkets">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label>Enterprise Level</label>
            <select ng-repeat="list in allEnterpriseLevels">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>

            <!--
        'zone',
        'kebele',
        'location_identity',
        'house_number',
        'phone_number',
        'age_of_establishment',
        'tax_payer_id',
        'base_capital_size',
        'loan_credit_size',
        'time_of_loan',
        'post_credit_size',
        'refund_credit_size',
        'return_credit_size',
        'time_of_return',
        'time_made_size',
        'time_of_credit_made',
        'hectare_size',
        'rent_per_month',
        'released_time',
        'market_size',
        'market_created_time',
        'standard_time',
        'technical_skill',
        'kaiser_service',
        'tech_support',
        'dev_support',
        'recognition',
        'certificate'

            -->


            <input type="submit" class="btn btn-default"/>
        </form>
    </div>
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 2em">

        <uib-tabset type="pills">
            <uib-tab heading="Show all">
                <h3>All Enterprises</h3>
                <div class="col-lg-offset-1">
                    <ul style="list-style-type: none;">
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <span> Identification </span>
                                </div>
                                <div class="col-md-4">
                                    <span> Name </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-offset-1">
                    <ul ng-repeat="list in allEnterprises" style="list-style-type: none;">
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <span> {{list.identification}} </span>
                                </div>
                                <div class="col-md-4">
                                    <span> {{list.EnterpriseName}} </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </uib-tab>
        </uib-tabset>
    </div>
</div>
