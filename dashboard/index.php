<?php
require_once '../core/init.php';
if (isset($_SESSION['dir_id'])) {
  # code...
// echo $_SESSION['dir_id'];
// echo $user_info->fname;
}
else{
  header("Location:../index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>ProfferSys DashBoard</title>
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
  <body>
<section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
<!--header start-->
<header class="header black-bg">
      <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
    <!--logo start-->
    <a href="index.html" class="logo"><b>ProfferSys</b></a>
    <!--logo end-->
    <div class="top-menu">
    	<ul class="nav pull-right top-menu">
            <li><a class="logout" href="login.html">Logout</a></li>
    	</ul>
    </div>
</header>
<!--header end-->      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
<div id="sidebar"  class="nav-collapse ">
    <!-- sidebar menu start-->
  <ul class="sidebar-menu" id="nav-accordion">
  	  <p class="centered">
        <a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a>
      </p>
  	  <h5 class="centered"><?php echo $user_info->fname .' '. $user_info->lname;?></h5>
      <li class="mt">
          <a href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
          </a>
      </li>
      <li class="sub-menu">
          <a href="" >
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
          </a>
          <ul class="sub">
              <li><a  href="#">General</a></li>
              <li><a  href="#">Buttons</a></li>
              <li><a  href="#">Panels</a></li>
          </ul>
      </li>
  </ul>
    <!-- sidebar menu end-->
</div>
</aside>
<!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
              			
		</section>
</section><!-- /MAIN CONTENT -->

<!--main content end-->

<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2015 - proffersys
        <a href="index.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
  </body>
</html>