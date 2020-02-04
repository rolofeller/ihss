<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>IHSS: Occupational Health & Safety Management System</title>
		<link rel="shortcut icon" href="/favicon.ico?v2">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/speedo.popup.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style/skins/metro/metro.css"></link>
		<link rel="stylesheet" type="text/css" href="style/lms-home.css"></link>
		<!-- Login CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/core.css" rel="stylesheet" type="text/css">
		<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
		<link href="assets/css/components.css" rel="stylesheet" type="text/css">
		<link href="assets/css/pages.css" rel="stylesheet" type="text/css">
		<link href="assets/css/menu.css" rel="stylesheet" type="text/css">
		<link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
		<link href="assets/css/elements.css" rel="stylesheet" type="text/css">
				<!-- printer stylesheet-->
		<style type="text/css">
.access-only {display: none;}
</style>
		<!-- Page Head area -->
		
		<link rel="stylesheet" type="text/css" href="./templates/standard/style/base.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/style/base-old-treeview.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/style/lms.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/style/lms-to-review.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/style/lms-menu.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/style/print.css" /><!-- yui css -->
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/button.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/calendar.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/container.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/menu.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/resize.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/autocomplete.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/tabview.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/datatable.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/paginator.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/treeview.css" />
		<link rel="stylesheet" type="text/css" href="./templates/standard/yui-skin/colorpicker.css" /><!-- yui js -->
		<script type="text/javascript" src="./addons/yui/utilities/utilities.js"></script> 
<script type="text/javascript"> YAHOO.util.Connect.initHeader('X-Signature','71fe320f36cfb77ecfd2d420d071bd99'); YAHOO.util.Connect.startEvent.subscribe(function() { YAHOO.util.Connect.initHeader('X-Signature','71fe320f36cfb77ecfd2d420d071bd99'); });</script>
		<script type="text/javascript" src="./addons/yui/json/json-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/animation/animation-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/animation/my_animation.js"></script> 
		<script type="text/javascript" src="./addons/yui/button/button-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/calendar/calendar-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/container/container-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/menu/menu-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/resize/resize-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/selector/selector-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/event-delegate/event-delegate-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/datasource/datasource-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/autocomplete/autocomplete-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/charts/charts-min.js"></script> 
<script type="text/javascript"> YAHOO.widget.Chart.SWFURL = "./addons/yui/charts/assets/charts.swf"; </script>
		<script type="text/javascript" src="./addons/yui/swf/swf-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/tabview/tabview-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/paginator/paginator-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/datatable/datatable-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/editor/editor-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/treeview/treeview-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/slider/slider-min.js"></script> 
		<script type="text/javascript" src="./addons/yui/colorpicker/colorpicker-min.js"></script> 	</head>
	<body class="login-bg">
		<div class="wrapper-page">
			<a href="index.php"><img class="img-responsive" src="assets/images/ihss_system_logo.png"></a>
		    <div class="panel panel-pages">
		      	<div class="panel-body">
			        			          <div class="inner"></div>
			        
			        <!-- FORM -->
			        <div id="login-box" class="form-horizontal m-t-20 m-b-30">
			          <form  class="std_form" id="login_confirm" method="post" action="./lms/index.php?modname=login&amp;op=confirm">
<div>
<input type="hidden" id="authentic_request_login_confirm" name="authentic_request" value="71fe320f36cfb77ecfd2d420d071bd99" /><div class="form-group"><div class="col-xs-12"><input placeholder="username" class="form-control" type="text" id="login_userid" name="login_userid" value="" maxlength="255" tabindex="1" /></div></div><div class="form-group"><div class="col-xs-12"><input placeholder="password" class="form-control" type="password" id="login_pwd" name="login_pwd" maxlength="255" tabindex="2" autocomplete="off" /></div></div><div class="form-group text-center m-t-10"><div class="col-sm-12"><button class="btn btn-info btn-lg btn-block w-lg waves-effect waves-light" type="submit" id="login" name="log_button" value="login" tabindex="3" />Log In</button></div><div class="col-sm-12 m-t-15"><p><a class="text-info" data-toggle="modal" data-target="#resetpw_modal" href="#"><i class="fa fa-lock" aria-hidden="true"></i> Forgot your password?</a></p></div></div></div></form>			           
			          <div id="links" class="speedo-popup" data-speedo-options='{"width":650,"height":800,"theme":"metro"}'>
			              
			            <div id="link"></div>			          </div>
			        </div>
			        <div id="links"></div>
		      	</div>                                 
		    </div>
		    <footer class="footer m-t-30">
			    <div class="footer-inner text-center">
			    	<p class="text-white"> © 2018 IHSS OHSMS. Powered by <a style="color:#71569f" href="https://applord.co/" target="_Blank">Applord</a> </p>
			    </div>
		  	</footer>
		  	<!-- Reset Password Modal -->
			<div id="resetpw_modal" class="modal fade" role="dialog">
			  	<div class="modal-dialog">
				    <!-- Modal content-->
				    <div class="modal-content">
					    <div class="modal-body">
					        <iframe src="index.php?modname=login&op=lostpwd" frameborder="0" scrolling="no" style="width: 100%; min-height: 380px;"></iframe>
					    </div>
					    <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    </div>
				    </div>
			  	</div>
			</div>
		</div>

		<script>var resizefunc = [];</script>
	    <!-- Main  -->
	    <script src="assets/js/jquery.min.js"></script>
	    <script src="assets/js/bootstrap.min.js"></script>
	    <script src="assets/js/detect.js"></script>
	    <script src="assets/js/fastclick.js"></script>
	    <script src="assets/js/jquery.slimscroll.js"></script>
	    <script src="assets/js/jquery.blockUI.js"></script>
	    <script src="assets/js/waves.js"></script>
	    <script src="assets/js/wow.min.js"></script>
	    <script src="assets/js/jquery.nicescroll.js"></script>
	    <script src="assets/js/jquery.scrollTo.min.js"></script>
	    <script src="assets/js/jquery.app.js"></script>
	</body>
</html>
