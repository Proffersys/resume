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
        <a href="profile.php"><img src="assets/img/ui-zac.jpg" class="img-circle" width="60"></a>
      </p>
  	  <h5 class="centered"><?php echo $user_info->fname .' '. $user_info->lname;?></h5>
      <li class="mt">
          <a href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
          </a>
          <a class="active" href="profile.php">
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
          <a href="recomendation.php">
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
  <div class="panel panel-default">
   <div class="panel-heading">
  <h2>Basic Info</h2>
  </div>
      <div class="basic">
      <h4>
        <?php
          $userid=$_SESSION['dir_id'];
          // echo $userid;
          $bresult=$con->query("select fname,lname,mobile,email,gender,dob,location,website,area_code from dir_user where dir_id='$userid'");
          if ($bresult) {
            # code...
            $data=$bresult->fetch_object();
            echo"<div class='panel-body'>";
            echo "<b>First Name:</b> ".strtoupper($data->fname).'<br>';
            echo "<b>Last Name:</b> ".strtoupper($data->lname).'<br>';
            echo "<b>Mobile:</b> ".strtoupper($data->mobile).'<br>';
            echo "<b>Email:</b> ".$data->email.'<br>';
            echo "<b>Gender:</b> ".strtoupper($data->gender).'<br>';
            echo "<b>DOB:</b> ".strtoupper($data->dob).'<br>';
            echo "<b>Location:</b> ".strtoupper($data->location).'<br>';
            echo "<b>Website:</b> ".$data->website.'<br>';
            echo "<b>Area Code:</b> ".strtoupper($data->area_code).'<br>';
            echo"</div>";
          }
        ?>
        </h4>
      </div></div>
  <div class="panel panel-default">
   <div class="panel-heading">      
  <h2>Educational Info</h2>
  </div>
   <?php 
// include "connection.php";
$userid=$_SESSION['dir_id'];
$bresult=$con->query("select ssn from dir_user where dir_id='$userid'");
          if ($bresult) {
            # code...
            $data=$bresult->fetch_object();
            $ssn=$data->ssn;
          }
$sql=mysqli_query($con,"select school_name,passing_year,description from high_school where ssn=$ssn");
while($row=mysqli_fetch_array($sql))
{
  $school_name=$row["school_name"];
  $passing_year=$row["passing_year"];
  $description=$row["description"];
}
$sql=mysqli_query($con,"select school_name,passing_year,description,branch from intermediate where ssn=$ssn");
while($row=mysqli_fetch_array($sql))
{
  $inter_school_name=$row["school_name"];
  $inter_passing_year=$row["passing_year"];
  $inter_description=$row["description"];
  $inter_branch=$row["branch"];
}
$sql=mysqli_query($con,"select college_name,concentration,starting_year,ending_year,course,description from college where ssn=$ssn");
while($row=mysqli_fetch_array($sql))
{
  $college_name=$row["college_name"];
  $concentration=$row["concentration"];
  $starting_year=$row["starting_year"];
  $ending_year=$row["ending_year"];
  $course=$row["course"];
  $college_description=$row["description"];
}
echo"<div class='panel-body'>";
echo"<h3>High School</h3> " ;
echo"<h4><b>School:</b> ".strtoupper($school_name)."      \t-".$passing_year."<br>";
echo"<b>Description:</b> ".$description."</h4>";
echo"<h3>Intermediate</h3> ";
echo"<h4><b>School:</b> ".strtoupper($inter_school_name)."       \t-".$inter_passing_year."<br>";
echo"<b>Stream:</b> ".strtoupper($inter_branch);
echo"<br><b>Description:</b> ".$inter_description."</h4>";
echo"<h3>College</h3>";
echo"<h4><b>College: ".strtoupper($college_name)."       \t".$starting_year."-".$ending_year."<br>";
echo"<b>Course:</b> ".strtoupper($course);
echo"<br><b>Concentration: ".strtoupper($concentration);
echo"<br><b>Description:</b> ".$college_description."</h4>";
echo"</div>";
?>

</div>
  <div class="panel panel-default">
   <div class="panel-heading">   
  <h2>Proffessional Info</h2>
  </div>
<?php/* 
// include "connection.php";
$ssn=$_SESSION['dir_id'];
//$query="select user_name,email from user where user_name=$name";
//echo $query;
$sql=mysqli_query($con,"select user_name,email from user where ssn=$ssn");
while ($row = mysqli_fetch_array($sql))
//$row=mysql_fetch_array($sql)
{
  $username=$row["user_name"];
  $email=$row["email"];
}
$sql=mysqli_query($con,"select pro_skills,working_skills from skills where ssn=$ssn");
while($row=mysqli_fetch_array($sql))
{
  $pro_skills=$row["pro_skills"];
  $working_skills=$row["working_skills"];
}
$sql=mysqli_query($con,"select company_name,position,location,starting_year,ending_year,project_working,description from working where ssn=$ssn");
while($row=mysqli_fetch_array($sql))
{
  $company_name=$row["company_name"];
  $position=$row["position"];
  $location=$row["location"];
  $starting_year=$row["starting_year"];
  $ending_year=$row["ending_year"];
  $project_working=$row["project_working"];
  $description=$row["description"];

}
$sql=mysqli_query($con,"select about,motive,dream_job from extra_detail where ssn=$ssn");
while($row=mysqli_fetch_array($sql))
{
  $about=$row["about"];
  $motive=$row["motive"];
  $dream_job=$row["dream_job"];
}*/
?>
</div>
</section>
</section><!-- /MAIN CONTENT -->

<!--main content end-->

<?php include 'footer.php';?>
