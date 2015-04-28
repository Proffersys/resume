<?php include 'header.php';
?>

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
<!--sidebar start-->
        <style>
                .profcontent{
                    min-height: 910px;
                }
                #d2{
                    border-bottom: black;
                    z-index: 1px;
                    box-shadow: 2px; 
                }
        </style>
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
          <a href="recomendation.php">
              <i class="fa fa-th"></i>
              <span>Recomendation</span>
          </a>
          <a href="event.php">
              <i class="fa fa-cogs"></i>
              <span>Events</span>
          </a>
          <a class="active" href="analysis.php">
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
        

        <script src='assets/js/chart.min.js'></script>
        <!-- pie chart canvas element -->
 
            
            <div id='d2' style="position:relative; left:210px;background: #FFFFFF">
            <canvas id="jobs" width="300" height="400"></canvas>
            <div style="position:absolute;top:100px;left:600px;border:1px solid red;text-align:center;padding: 10px 4px;width:200px;background: #FFFFFF">
            <b>JOBS AVAILABLE AS PER LANGUAGE IN 2013</b><br>
            <span style="color:#878BB6">SQL</span><br>
            <span style="color:#4ACAB4">JAVA</span><br>
            <span style="color:#FF8153">HTML</span><br>
            <span style="color:#FFEA88">JAVASCRIPT</span><br>
            <span style="color:#00FF00">C++</span><br>
            <span style="color:#996633">C#</span><br>
            <span style="color:#660066">XML</span><br>
            <span style="color:#FF0099">C</span><br>
            <span style="color:#333300">PERL</span><br>
            <span style="color:#CC0000">PYTHON</span>       
            <!-- bar chart canvas element --></div></div>
            <br>
            <div id='d3' style="position:relative; left:210px;background: #FFFFFF">
        <canvas id="salary" width="600" height="400" left="230px"></canvas>
         <div style="position:absolute;top:150px;left:600px;border:1px solid red;text-align:center;padding: 10px 4px;width:200px;background: #FFFFFF">
            <span style="color:#660066">x-Axis:Skills</span><br>
            <span style="color:#660066">y:Axis:salary in $ per annum</span><br>     
            <!-- bar chart canvas element --></div>
        </div>
        <script>
            // pie chart data
            var pieData =[
                {
                    value: 98454,
                    color:"#878BB6"
                },
                {
                    value : 66485,
                    color : "#4ACAB4"
                },
                {
                    value : 45456,
                    color : "#FF8153"
                },
                {
                    value : 43189,
                    color : "#FFEA88"
                },
                {
                    value : 32018,
                    color : "#00FF00"
                },
                {
                    value : 31936,
                    color : "#996633"
                },
                {
                    value : 31431,
                    color : "#660066"
                },
                {
                    value : 24801,
                    color : "#FF0099"
                },
                {
                    value : 20579,
                    color : "#333300"
                },               
                {
                    value : 19627,
                    color : "#CC0000"
                }
            ];
            // pie chart options
            var pieOptions = {
                 segmentShowStroke : false,
                 animateScale : true
            }
            // get pie chart canvas
            var jobs= document.getElementById("jobs").getContext("2d");
            // draw pie chart
            new Chart(jobs).Pie(pieData, pieOptions);
            // bar chart data
            </script>
                    
            <script>
            var barData = {
                labels : ["SQL  ","JAVA","HTML","JAVASCRIPT","C++","C#","XML","C","PERL","PYTHON"],
                datasets : [
                    {
                        fillColor : "#FF0000",
                        strokeColor : "#48A4D1",
                        data : [90000,95000,81000,81000,94000,91000,92000,93000,93000,83000]
                    }
                ]
            }
            // get bar chart canvas
            var salary = document.getElementById("salary").getContext("2d");
            // draw bar chart
            new Chart(salary).Bar(barData);
        </script><br>

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
