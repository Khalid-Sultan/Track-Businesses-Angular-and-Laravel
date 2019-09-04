<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <h1>Add Enterprise</h1>
        <form ng-submit="addEnterprise()">
            <label>Identification</label>
            <input ng-model="myIdentificationInput" type="number" name="identification" placeholder="Please Input a given identification" required class="form-control input-lg"/>
            <label>Enterprise Name</label>
            <input ng-model="myEnterpriseNameInput" type="text" name="enterpriseName" placeholder="Please Input a given name" required class="form-control input-lg"/>


            <label> Type Of Entrepreneurial Institution</label>
            <select ng-model="myTypeOfEntrepreneurialInstitutionInput" name="typeOfEntrepreneurialInstitution" ng-repeat="list in allTypeOfEntrepreneurialInstitutions" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label> Address Zone</label>
            <select ng-model="myAddressZoneInput" name="addressZones" ng-repeat="list in allAddressZones" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label>Zone</label>
            <input ng-model="myZoneInput" type="number" min="0" name="zone" placeholder="Please Input a given zone" required class="form-control input-lg"/>
            <label>Kebele</label>
            <input ng-model="myKebeleInput" type="number" min="0" name="kebele" placeholder="Please Input a given kebele" required class="form-control input-lg"/>


            <label> Address Scope</label>
            <select ng-model="myAddressScopeInput" name="addressScopes" ng-repeat="list in allAddressScopes" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            
            <label>Location Identity</label>
            <input ng-model="myLocationIdentityInput" type="text" name="locationIdentity" placeholder="Please Input a given location identity" required class="form-control input-lg"/>
            <label>House Number</label>
            <input ng-model="myHouseNumberInput" type="text" name="houseNumber" placeholder="Please Input a given house number" required class="form-control input-lg"/>
            <label>Phone Number</label>
            <input ng-model="myPhoneNumberInput" type="text" name="phoneNumber" placeholder="Please Input a given phone number" required class="form-control input-lg"/>

            <label>Age Of Establishment</label>
            <input ng-model="myAgeOfEstablishmentInput" type="date" name="ageOfEstablishment" placeholder="Please Input a given age of establishment" required class="form-control input-lg"/>

            <label> Operating Sector</label>
            <select ng-model="myOperatingSectorInput" name="operatingSector" ng-repeat="list in allOperatingSectors" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label> Operating Sub Sector</label>
            <select ng-model="myOperatingSubSectorInput" name="operatingSubSector" ng-repeat="list in allOperatingSubSectors" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>

            <label> Enterprise Type By Definition</label>
            <select ng-model="myEnterpriseTypeByDefinitionInput" name="enterpriseTypeByDefinition" ng-repeat="list in allEnterpriseTypeByDefinitions" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label> Organizational Type</label>
            <select ng-model="myOrganizationalTypeInput" name="organizationalType" ng-repeat="list in allOrganizationalTypes" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>

            <label>Tax Payer ID</label>
            <input ng-model="myTaxPayerIDInput" type="text" name="taxPayerID" placeholder="Please Input a given Tax Payer ID" required class="form-control input-lg"/>
            <label> Organization </label>
            <select ng-model="myOrganizationInput" name="organization" ng-repeat="list in allOrganizations" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label> Institutional Status</label>
            <select ng-model="myInstitutionalStatusInput" name="institutionalStatus" ng-repeat="list in allInstitutionalStatuses" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label> Institutional Reason</label>
            <select ng-model="myInstitutionalReasonInput" name="institutionalReason" ng-repeat="list in allInstitutionalReasons" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>

            <label>Base Capital Size</label>
            <input ng-model="myBaseCapitalSizeInput" type="number" name="baseCapitalSize" placeholder="Please Input a given base capital size" required class="form-control input-lg"/>
            <label> Capital Source</label>
            <select ng-model="myCapitalSourceInput" name="capitalSource" ng-repeat="list in allCapitalSources" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>


            <label>Loan Credit Size</label>
            <input ng-model="myLoanCreditSizeInput" type="number" name="loanCreditSize" placeholder="Please Input a given loan credit size" required class="form-control input-lg"/>
            <label>Time of Loan</label>
            <input ng-model="myTimeOfLoanInput" type="date" name="timeOfLoan" placeholder="Please Input a given time of loan" required class="form-control input-lg"/>
            <label>Post Credit Size</label>
            <input ng-model="myPostCreditSizeInput" type="number" name="postCreditSize" placeholder="Please Input a given post credit size" required class="form-control input-lg"/>
            <label>Refund Credit Size</label>
            <input ng-model="myRefundCreditSizeInput" type="number" name="refundCreditSize" placeholder="Please Input a given refund credit size" required class="form-control input-lg"/>
            <label>Return Credit Size</label>
            <input ng-model="myReturnCreditSizeInput" type="number" name="returnCreditSize" placeholder="Please Input a given return credit size" required class="form-control input-lg"/>
            <label>Time of Return</label>
            <input ng-model="myTimeOfReturnInput" type="date" name="timeOfReturn" placeholder="Please Input a given time of return" required class="form-control input-lg"/>

            <label>Time Made Size</label>
            <input ng-model="myTimeMadeSizeInput" type="number" name="timeMadesize" placeholder="Please Input a given time made size" required class="form-control input-lg"/>
            <label>Time of Credit Made</label>
            <input ng-model="myTimeOfCreditMadeInput" type="date" name="timeOfCreditMade" placeholder="Please Input a given time of credit made" required class="form-control input-lg"/>


            <label>Enterprise Architecture Source</label>
            <select ng-model="myEnterpriseArchitectureSourceInput" name="enterpriseArchitectureSource" ng-repeat="list in allEnterpriseArchitectureSources" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label>Hectare Size</label>
            <input ng-model="myHectareSizeInput" type="number" name="hectareSize" placeholder="Please Input a given hectare size" required class="form-control input-lg"/>
            <label>Rent Per Month</label>
            <input ng-model="myRentPerMonthInput" type="number" name="rentPerMonth" placeholder="Please Input a given rent per month" required class="form-control input-lg"/>
            <label>Released Time</label>
            <input ng-model="myReleasedTimeInput" type="date" name="releasedTime" placeholder="Please Input a given released time" required class="form-control input-lg"/>

            <label>Market Size</label>
            <input ng-model="myMarketSizeInput" type="number" name="marketSize" placeholder="Please Input a given market size" required class="form-control input-lg"/>
            <label>Market Created Time</label>
            <input ng-model="myMarketCreatedTimeInput" type="date" name="marketCreatedTime" placeholder="Please Input a given market created time" required class="form-control input-lg"/>
            <label>Market Connection Creator Institution</label>
            <select ng-model="myMarketConnectionCreatorInstitutionInput" name="marketConnectionCreatorInstitution" ng-repeat="list in allMarketConnectionCreatorInstitutions" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label>Market Connection Creator Market</label>
            <select ng-model="myMarketConnectionCreatorMarketInput" name="marketConnectionCreatorMarket" ng-repeat="list in allMarketConnectionCreatorMarkets" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>


            <label>Enterprise Level</label>
            <select ng-model="myEnterpriseLevelInput" name="enterpriseLevel" ng-repeat="list in allEnterpriseLevels" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label>Standard Time</label>
            <input ng-model="myStandardTimeInput" type="date" name="standardTime" placeholder="Please Input a given standard time" required class="form-control input-lg"/>


            <label>Technical Skill</label>
            <input ng-model="myTechnicalSkillInput" type="checkbox" name="technicalSkill"   class="form-control input-lg"/>
            <label>Kaiser Service</label>
            <input ng-model="myKaiserServiceInput" type="checkbox" name="kaiserService"   class="form-control input-lg"/>
            <label>Tech Support</label>
            <input ng-model="myTechSupportInput" type="checkbox" name="techSupport"   class="form-control input-lg"/>
            <label>Dev Support</label>
            <input ng-model="myDevSupportInput" type="checkbox" name="devSupport"   class="form-control input-lg"/>
            <label>Recognition</label>
            <input ng-model="myRecognitionInput" type="checkbox" name="recognition"   class="form-control input-lg"/>
            <label>Certificate</label>
            <input ng-model="myCertificateInput" type="checkbox" name="certificate"   class="form-control input-lg"/>

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
