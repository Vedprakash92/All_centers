
<!DOCTYPE html>
<html lang="en" style="height:100%;;">
<head>
	<title>VisionIAS - Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-signin-scope" content="profile email">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<meta name="google-signin-client_id" content="867672025650-1mcr3cds25mai5oakocoq5dngrnn2pg4.apps.googleusercontent.com">
	<link rel="stylesheet" type="text/css" href="http://www.visionias.in/student_open/css/foundation.css" />
	<link rel="stylesheet" type="text/css" href="http://www.visionias.in/student_open/css/landing.css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	  <link rel="shortcut icon" href="../../student/images/favicon_vision.ico">
	<style>
		@media screen and (min-width:901px){
			.classroom_hash{
				width:1170px;
			}
			.laptop_view{
				padding-bottom:56px!important;
			}
		}
		@media screen and (max-width:900px){
			.notfication_font li {
				font-size: 8px;
				margin-left: 15px;
			}
			.classroom_hash{
				padding-left:0;
				padding-right:0;
				margin-right:0;
				margin-left:0;
			}
			.font_size{
				font-size:12px!important;
			}
			#mobile_hide{
				display:none!important;
			}
			.col-xs-6{
				width:100%!important;
			}
			.well{
				background-color:#ffffff;
				border:none!important;
			    box-shadow:none!important;
			}
			.mobile_view{
				margin-top:-54px!important;
			}
			.w3-display-container{
				margin-top:5px;
			}
		}   
		.top-bar a {
			color: #2f3c4d;
		}
		.top-bar_12 a {
			color: white;
		}
		.nav-colored {
			background-color:#fafafa;
		}; 
		.nav-transparent { 
			background-color:transparent;
			}
		.top-bar, .top-bar ul{
			background-color:#fefefe;
		}
		.social-footer {
			background: #111111;
			padding-top: 75px;
			padding-bottom: 50px;
			text-align: center;
			border-bottom: 1px solid #292929;
		}
		.sf-icons i:hover {
			color: #ffffff;
		}
		.fa {
			display: inline-block;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			line-height: 1;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		.sf-icons i {
			display: inline-block;
			width: 40px;
			height: 40px;
			line-height: 40px;
			text-align: center;
			font-size: 28px;
			color: #888888;
			margin: 10px;
		}
		.small-41 {
			width: 27.33333%;
		}
		.login-help{
			font-size: 12px;
			margin-right:15px;
		}
		.Register{
			width:95%;
			margin-left:15px;
			margin-right:15px;
		}
		.checkbox1{
			width:95%;
			margin-left:15px;
			margin-right:15px;
		}
		input[type=submit].btn-block {
			width:95%;
		}
		.checkbox input[type=checkbox]{
			margin-top:8px!important;
		}
		.login_reg{
			margin-top:10px;
		}
		.control-label {
			margin-right: 30px;
			margin-top: 5px;
		}
		.inf_address{
			border-radius:10px;
			padding-bottom: 30px;
			 background: #cbe2c1;
			background: linear-gradient(to right, rgba(209, 226, 237, 0.32), rgba(172, 203, 220, 0.39), rgba(13, 103, 178, 0.37));
			padding-top: 30px;
			height: 300px;
		}
		.inf_address1{
			border-radius:10px;
			padding-bottom:52.5px;
			 background: #cbe2c1;
			background: linear-gradient(to right, rgba(209, 226, 237, 0.32), rgba(172, 203, 220, 0.39), rgba(13, 103, 178, 0.37));
			padding-top: 30px;
			height: 300px;
		}
		.adddress_inf{
			padding-bottom: 30px;
			padding-top: 30px;
		}
		#classroom{
			background-color: #DFE2DB;
		}
		#testseries{
			background-color: #55BBEA;
		}
		#interview{
			background-color: #C1E1A6;
		}		
		#Career{
			background-color: #f3f2f299;
		}
		#notification{
			background-color: #2d3e50;
		}
		.embed_mobile{
			background-color: black;
		}
		.section_testseries{
			background:#e6ffff;
		}
		.service-item{
			background:white;
		}
		
		.all_margin{
			margin-left:25px;
		}
		.btn_register{
			background-color: black;
			color: white;
			padding: 12px 30px;
		}
		.font1{
			padding-top:13px;
			font-size:14px;
			text-transform : uppercase;
		}
		.font2{
			font-size:14px;
		}
		.fee_font{
			font-size:12px;
		}
		.enquiry_font{
			font-size:12px;
		}
		.navbar-inverse {
			background-color: #fefefe !important;
			border-color: #080808;
		}
		.navbar-brand {
			padding: 10px 10px !important;
		}
		.icon-bar {
			background-color: #005fae !important;
		}
		.navbar-inverse,.navbar-toggle {
			 border-color: #fff !important; 
		}
		.navbar,.navbar-inverse{		
			height: 42px !important;
			margin-bottom: 0px !important;
		}
		.navbar-nav {
			margin: -0.5px -15px !important;
			background-color: black !important;
		}
		.notfication_font li{
			color: #ffffffd1;
		}
		.heading_font{
			line-height: 25px;
			font-size: 16px;
			text-transform : uppercase;
			color:black;
			font-weight : 700;
		}
		.menu {
		  font-family: 'Poppins', serif;
		  font-size: 16px;
		}
		body{
			font-family: 'Poppins', serif;
		}
		.top_nav{
			padding-left : 12px;
			cursor:pointer;
		}
		.top_nav:hover{
			text-decoration:underline;
		}
		.top_nav{
			padding-right : 12px;
			cursor:pointer;
		}
		.top_nav:hover{
			text-decoration:underline;
		}
		.main_nav_bar_item:hover{
			text-decoration: none;
			color:#2199e8 !important;
		}
	.columns:last-child:not(:first-child) {
    float: left!important;}
</style>
	
	
</head>

<body style="height:100%; background-color:#fefefe;">
<div class="top-bar_12 hide-for-small-only"  id="mynav" style="width:100%;position:fixed;z-index:10;padding-bottom: 5px;padding-top: 5px;background-color:#2d3e50;">
	<div class="top-bar-left" >
		<a class="top_nav"><span class="glyphicon glyphicon-earphone"></span> +918468022022</a>
		<a class="top_nav" target="_blank" href="https://goo.gl/lmUZod" ><b>   <i class="fa fa-android"></i></b> DOWNLOAD APP</a>
	</div>
	<div class="top-bar-right" >	
		<a class="top_nav" target="_blank" href="http://visionias.in/onlinedemo">CLASSROOM DEMO</a>
		<a class="top_nav" target="_blank" href="http://visionias.in/student_open/login-form.php">OPEN TEST</a>
	</div>
</div>
<br class="hide-for-small-only">
<div class="top-bar hide-for-small-only"  id="mynav" style="width:100%;position:fixed;z-index:10;padding-bottom: 0px;padding-top:px;margin-top:10px;">
	<a href='.\'><div class="top-bar-left">
		<ul class="dropdown menu" data-dropdown-menu style="height:36x;">
			<li><span><img src="http://visionias.in/student/images/visionias_logo.png" width="160"></span></li>
		</ul>
	</div></a>
	<div class="top-bar-right">
		<ul class="dropdown menu" data-dropdown-menu style="padding-top:0.5%;">
			<li><a class="main_nav_bar_item" href="#testseries" ><b>TEST SERIES</b></a></li>
			<li><a class="main_nav_bar_item" href="#classroom" ><b>CLASSROOM</b></a></li>
			<li><a class="main_nav_bar_item" href="#interview" ><b>INTERVIEW</b></a></li>
			<li><a class="main_nav_bar_item" href="#resources" ><b>RESOURCES</b></a></li>
			<li><a class="main_nav_bar_item" target="_blank" href="http://www.visionias.in/student/login-form.php" ><b>LOGIN</b></a></li>
			<li><a class="main_nav_bar_item" target="_blank" href="http://www.visionias.in/old/paystart.php" ><b>REGISTER</b></a></li>
		</ul>
	</div>
</div>

<!--Begin Mobile Title Bar Menu-->
<div style="position:fixed;z-index:10;width:100%;height: 40px;" class="hide-for-medium hide-for-large">
	
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="http://visionias.in/student/images/visionias_logo.png" width="160"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#testseries"><b>TEST SERIES</b></a></li>
        <li><a href="#classroom"><b>CLASSROOM</b></a></li>
        <li class='xat'><a href="#interview"><b>INTERVIEW</b></a></li>
        <li><a href="#resources"><b>RESOURCES</b></a></li>
        <li><a href="http://www.visionias.in/student/login-form.php"><b>LOGIN</b></a></li>
        <li><a href="http://www.visionias.in/old/paystart.php"><b>REGISTER</b></a></li>
		<li><a href="http://visionias.in/onlinedemo/Video_Classroom_Lecture.php?cid=1" ><b>CLASSROOM DEMO</b></a></li>
		<li><a href="http://visionias.in/student_open/login-form.php" ><b>OPEN TEST</b></a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<br class="show-for-small-only">
<br class="show-for-small-only">
<div class="hide-for-small-only" style="padding-top:4%;"></div>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
@media screen and (min-width:1200px){
	.w3-large{
		font-size:58px!important;
	}
	.topper{
		height:525px!important; 		
	}
}
.topper{
		height:225px!important; 		
	}
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
</html>
