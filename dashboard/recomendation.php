<?php include 'header.php';?>

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
<div id="sidebar"  class="nav-collapse ">
    <!-- sidebar menu start-->
  <ul class="sidebar-menu" id="nav-accordion">
  	  <p class="centered">
        <a href="profile.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a>
      </p>
  	  <h5 class="centered"><?php echo $user_info->fname .' '. $user_info->lname;?></h5>
      <li class="mt">
          <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
          </a>
          <a href="profile.php">
              <i class="fa fa-desktop"></i>
              <span>Profile</span>
          </a>
          <a href="udprofile.php">
              <i class="fa fa-tasks"></i>
              <span>Update Profile</span>
          </a>
          <a href="upload.php">
              <i class="fa fa-cloud-upload"></i>
              <span>Update Resume</span>
          </a>
          <a href="connection.php">
              <i class="fa fa-dashboard"></i>
              <span>Connections</span>
          </a>
          <a class="active" href="recomendation.php">
              <i class="fa fa-th"></i>
              <span>Recomendation</span>
          </a>
          <a href="event.php">
              <i class="fa fa-cogs"></i>
              <span>Events</span>
          </a>
          <a href="analysis.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>Analysis</span>
          </a>
      </li>

<!--       <li class="sub-menu">
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
 --> 
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

<?php include 'footer.php';?>
