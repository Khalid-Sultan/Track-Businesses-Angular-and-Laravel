<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <h1>Add Capital Source</h1>
        <form ng-submit="addCapitalSources()">
            <label>Identification</label>
            <input ng-model="myIdentificationInput" type="number" name="identification" placeholder="Please Input a given identification" required class="form-control input-lg"/>
            <label>Name</label>
            <input ng-model="myNameInput" type="text" name="name" placeholder="Please Input a given name" required class="form-control input-lg"/>
            <input type="submit" class="btn btn-default"/>
        </form>
    </div>
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 2em">

        <uib-tabset type="pills">
            <uib-tab heading="Show all">
                <h3>All Capital Sources</h3>
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
                    <ul ng-repeat="list in allCapitalSources" style="list-style-type: none;">
                        <li>
                            <div class="row">
                                <div class="col-md-4">
                                    <span> {{list.identification}} </span>
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
