<?php include 'header.php';
$userid=$_SESSION['dir_id'];
$query="select user_name from dir_user where dir_id='$userid'"; 
//echo "string";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result))
{
   $id=$row["user_name"];
}
$bresult=$con->query("select mobile,email,location from dir_user where dir_id='$userid'");
          if ($bresult) {
            # code...
            $data=$bresult->fetch_object();
            $mobile=$data->mobile;
            $email=$data->email;
            $location=$data->location;}
            //$data->website;
            //$data->area_code;
?>
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
          <a class="active" href="udprofile.php">
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
<div class="container">        
<form id="form1" name="form1" class="form-inline" role="form">
<table class="table table-condensed">
<tbody><tr><td><div class="form-group"><h3>User Id</h3><td>    <input name="id" id="id" required="" type="text" class="form-control" value=<?php echo $id; ?>></div></td></tr>
<tr><td><div class="form-group"><h3>Mobile</h3></td><td>    <input name="mobile" id="mobile" required="" type="text" class="form-control" value=<?php echo $mobile;?>></div></td></tr>
<tr><td>    <div class="form-group">    <h3>Email</h3></td><td><input name="email" id="email" class="form-control" required="" type="text" value=<?php echo $email;?>></div></td></tr>
<tr><td><div class="form-group"><h3>location</h3></td><td>    <input name="location" id="location" required="" class="form-control" type="text" value=<?php echo $location;?>></div></td></tr>
<tr><td> </td><td><a href="#" onclick="update_function()">Update</a></td></tr>
</tbody></table>
</form>
</div>
<div id="response"></div>     
    </section>
</section><!-- /MAIN CONTENT -->

<!--main content end-->

      <script type="text/javascript">
        function update_function()
{
var id=$("#id").val(); 
var mobile=$("#mobile").val(); 
var email=$("#email").val();
var location=$("#location").val();
var dataString = "id=" + id + "&mobile=" + mobile + "&email=" + email + "&location=" + location;
    $.ajax({  
        type: "POST",  
        url: "udphp.php",  
        data: dataString,
        beforeSend: function() 
        {
            $('html, body').animate({scrollTop:0}, 'slow');
            $("#response").html('<div class="prev_box"><img src="loading.gif" alt="Loading..." align="absmiddle"> Loading...<br clear="all"><br clear="all">');
        },  
        success: function(response)
        {
            $("#response").html(response);
        }
    });
}       </script>
<?php include 'footer.php';?>
