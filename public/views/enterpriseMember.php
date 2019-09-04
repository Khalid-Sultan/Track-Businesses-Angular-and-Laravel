<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <h1>Add Enterprise Member</h1>
        <form ng-submit="addEnterpriseMembers()">
            <label> Enterprise </label>
            <select ng-model="myEnterpriseInput" name="enterprise" ng-repeat="list in allEnterprises" class="form-control input-lg">
                <option value="{{list.id}}">{{list.EnterpriseName}}</option>
            </select>

            <label>Name</label>
            <input ng-model="myNameInput" type="text" name="name" placeholder="Please Input a given name" required class="form-control input-lg"/>


            <label>Is Male</label>
            <input ng-model="myGenderInput" type="checkbox" name="gender" placeholder="Is you male?" class="form-control input-lg"/>

            <label>Age</label>
            <input ng-model="myAgeInput" type="number" name="age" placeholder="Please Input a given age" class="form-control input-lg"/>

            <label> Member Level </label>
            <select ng-model="myMemberLevelInput" name="memberLevel" ng-repeat="list in allMemberLevels" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>

            <label>Trained Career</label>
            <input ng-model="myTrainedCareerInput" type="text" name="trainedCareer" placeholder="Please Input a given trained career" required class="form-control input-lg"/>

            <label> Member Job Site </label>
            <select ng-model="myMemberJobSiteInput" name="memberJobSite" ng-repeat="list in allMemberJobSites" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>

            <label>Job Search</label>
            <input ng-model="myJobSearchInput" type="checkbox" name="jobSearch" class="form-control input-lg"/>

            <label>Job Search Registered</label>
            <input ng-model="myJobSearchRegisteredInput" type="text" name="jobSearchRegistered" placeholder="Please input a given job search registered" class="form-control input-lg"/>

            <label>Awareness Training</label>
            <input ng-model="myAwarenessTrainingInput" type="checkbox" name="awarenessTraining" class="form-control input-lg"/>
            <label>Professional Training</label>
            <input ng-model="myProfessionalTrainingInput" type="checkbox" name="professionalTraining" class="form-control input-lg"/>
            <label>Professional Evaluation</label>
            <input ng-model="myProfessionalEvaluationInput" type="checkbox" name="professionalEvaluation" class="form-control input-lg"/>
            <label>Professional Evaluation Eligibility</label>
            <input ng-model="myProfessionalEvalEligibilityInput" type="checkbox" name="professionalEvalEligibilityTraining" class="form-control input-lg"/>

            <label>Disabled</label>
            <input ng-model="myDisabledInput" type="checkbox" name="disabled" class="form-control input-lg"/>
            <label>Persecuted</label>
            <input ng-model="myPersecutedInput" type="checkbox" name="persecuted" class="form-control input-lg"/>
            <label>Living With AIDS</label>
            <input ng-model="myLivingWithAIDSInput" type="checkbox" name="disabled" class="form-control input-lg"/>
            <label>Displaced</label>
            <input ng-model="myDisplacedInput" type="checkbox" name="displaced" class="form-control input-lg"/>
            <label>Happiness</label>
            <input ng-model="myHappinessInput" type="checkbox" name="happiness" class="form-control input-lg"/>

            <label> Membership By EZs</label>
            <select ng-model="myMembershipByEZsInput" name="membershipByEZs" ng-repeat="list in allMembershipByEZs" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>

            <label>Nation</label>
            <input ng-model="myNationInput" type="text" name="nation" placeholder="Please input a given nation" class="form-control input-lg"/>
            <label>Phone Number</label>
            <input ng-model="myPhoneNumberInput" type="text" name="phoneNumber" placeholder="Please input a given phone number" class="form-control input-lg"/>
            <label> Member Job Types</label>
            <select ng-model="myMemberJobTypesInput" name="memberJobType" ng-repeat="list in allMemberJobTypes" class="form-control input-lg">
                <option value="{{list.id}}">{{list.name}}</option>
            </select>
            <label>Salary Amount</label>
            <input ng-model="mySalaryAmountInput" type="number" min="0" name="salaryAmount" placeholder="Please Input a given salary amount" required class="form-control input-lg"/>
            <label>Employement Period</label>
            <input ng-model="myEmployementPeriodInput" type="number" min="0" name="employementPeriod" placeholder="Please Input a given employement period" required class="form-control input-lg"/>
            <label>Lasting Months</label>
            <input ng-model="myLastingMonthsInput" type="number" min="0" name="lastingMonths" placeholder="Please Input a given lasting months" required class="form-control input-lg"/>



            <input type="submit" class="btn btn-default"/>
        </form>
    </div>
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 2em">

        <uib-tabset type="pills">
            <uib-tab heading="Show all">
                <h3>All Enterprise Members</h3>
                <div class="col-lg-offset-1">
                    <ul style="list-style-type: none;">
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <span> Id </span>
                                </div>
                                <div class="col-md-4">
                                    <span> Name </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-offset-1">
                    <ul ng-repeat="list in allEnterpriseMembers" style="list-style-type: none;">
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <span> {{list.id}} </span>
                                </div>
                                <div class="col-md-4">
                                    <span> {{list.name}} </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </uib-tab>
        </uib-tabset>
    </div>
</div>
