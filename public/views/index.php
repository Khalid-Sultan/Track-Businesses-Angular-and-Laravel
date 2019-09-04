<!DOCTYPE html>
<html>
<head>
	<title>Laravel/Angular todo app</title>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.angularjs.org/1.5.7/angular.min.js"></script>
	<script type="text/javascript" src="https://code.angularjs.org/1.5.7/angular-route.min.js"></script>
	<script type="text/javascript" src="https://code.angularjs.org/1.5.8/angular-animate.min.js"></script>
	<script type="text/javascript" src="../js/libraries/ui-bootstrap-tpls-2.0.0.min.js"></script>

	<script src="https://unpkg.com/angular-toastr/dist/angular-toastr.tpls.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/angular-toastr/dist/angular-toastr.css" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="../content/css/style.css">
	<link rel="stylesheet" type="text/css" href="../content/css/helpers.css">

	<script type="text/javascript" src="../js/index.js"></script>
	<script type="text/javascript" src="../js/services/AngService.js"></script>
	<script type="text/javascript" src="../js/mainRoutes.js"></script>
	<script type="text/javascript" src="../js/mainApp.js"></script>

</head>
<body ng-app="mainApp">
<div class="col">
    <div id="wrapper">
	    <!-- <div class="overlay"></div> -->
	    <!-- Sidebar -->
	    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
	        <ul class="nav sidebar-nav">
	            <li class="sidebar-brand">
	                <a href="#/">
	                   Assossa System
	                </a>
	            </li>
                <li><a href="#enterpriseMember">Enterprise Member</a></li>
                <li>Miscellaneous</li>
                <li><a href="#addressScope">Address Scope</a></li>
                <li><a href="#addressZone">Address Zone</a></li>
                <li><a href="#capitalSource">Capital Source</a></li>
                <li><a href="#enterpriseArchitectureSource">Enterprise Architecture Source</a></li>
                <li><a href="#enterpriseLevel">Enterprise Level</a></li>
                <li><a href="#enterpriseTypeByDefinition">Enterprise Type By Definition</a></li>
                <li><a href="#institutionalReason">Institutional Reason</a></li>
                <li><a href="#institutionalStatus">Institutional Status</a></li>
                <li><a href="#mCCInstitution">Market Connection Creator Institution</a></li>
                <li><a href="#mCCMarket">Market Connection Creator Market</a></li>
                <li><a href="#marketConnectionType">Market Connection Type</a></li>
                <li><a href="#memberJobSite">Member Job Site</a></li>
                <li><a href="#memberJobType">Member Job Type</a></li>
                <li><a href="#memberLevel">Member Level</a></li>
                <li><a href="#membershipByEZ">Membership By EZ</a></li>
                <li><a href="#operatingSector">Operating Sector</a></li>
                <li><a href="#operatingSubSector">Operating Sub Sector</a></li>
                <li><a href="#organization">Organization</a></li>
                <li><a href="#organizationalType">Organizational Type</a></li>
                <li><a href="#tEInstitution">Type Of Entrepreneurial Institution</a></li>
	            <li><a href="#about">About</a></li>
	        </ul>
	    </nav>
	    <!-- /#sidebar-wrapper -->

	    <!-- Page Content -->
	    <div id="page-content-wrapper">
	        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
	            <span class="hamb-top"></span>
				<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
	        </button>
	        <div class="container">
	            <ng-view></ng-view>
	        </div>
	    </div>
	    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>
</html>