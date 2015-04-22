<?php
require('core/init.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>RE-US-ME</title>
 <link rel="stylesheet" href="includes/bootstrap/dist/css/bootstrap.css">
 <link rel="stylesheet" href="css/animate.css">
<link href="includes/bootstrap/docs/examples/carousel/carousel.css" rel="stylesheet">
<link href="css/nlog.css" rel="stylesheet">
<link href="css/fb.css" rel="stylesheet">
  <style>
  .mywidth{
    width: 20%;
    text-align: center;
    font-family: "Comic Sans MS";
  }
  .nav-container{
    width: 90%;
    height: 10%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 1%;
  }
  .brand{
    float: left;
    width: 20%;
  }
  .main-nav{
    float: right;
    width: 80%;
  }
  .foo1{
    width: 80%;
  }
  .foo2{
    font-size: large;
    text-align: center;
    padding-right: 5px;
    font-family: "Trebuchet MS";
  }
.error{
      display: block;
        width: 100%;
        height: 34px;
        /*padding: 6px 12px;*/
        /*font-size: 14px;*/
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
             -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          /*border: 1px solid red;*/
          background:red;
          padding: 3px;
          font-size: 16px;
          font-family: Segoe UI;
          border-top: none;
          display:none;}

  </style>
  </head>
<!-- NAVBAR
================================================== -->
<body>
<div id="fb-root"></div>
<div class="navbar-wrapper bigEntrance">
      <div class="nav-container">
        <div class="navbar navbar-inverse navbar-static-top " role="navigation">
            <div class="main-nav">
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav foo1">
                  <li class="active mywidth"><a href="#">Home</a></li>
                  <li class="mywidth"><a href="contact.php">Contact</a></li>
                  <!-- <li class="mywidth"><a href="pages/veri/html.html">Email verification</a></li> -->
                  <li class="mywidth"><a href="about.php">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="foo2"><a href="" data-toggle="modal" data-target="#myModal">Login</a></li>
                  <li class="foo2"><a href="" data-toggle="modal" data-target="#myModal1">Signup</a></li>
                </ul>
              </div>
            </div>
            <div class="navbar-header brand">
              <a class="navbar-brand" href="index.php">ProfferSys</a>
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/back1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Stay on the top.</h1>
              <p>Get noticed by your super seniors</p>
              <p><a class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal1" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/four.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Get selected</h1>
              <p>we make sure your supersenior recoomends you as fast as possile</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/third.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One thing more for good measure.</h1>
              <p>Get your resume viewed by many other people who are at the top of their level</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing" id="maindiv">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4" >
          <img class="img-circle" src="images/face1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Martin Rodriguez</h2>
          <p>"I got Placed at Amazon .Thanks to Resume"</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/face2.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Tim Dunn</h2>
          <p>"I got Placed at microsoft .Thanks to Resume"</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/face3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Steve Mccharthy</h2>
          <p>"I use Resume to hire from the abundant fresh talent around the world"</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider" id="firstLine">

      <div class="row featurette" id ="firstSpan">

        <div class="col-md-7" id="firstrow">
          <h2 class="featurette-heading">Get Helped <br><span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Super Seniors will help you on your highway to success</p>
        </div>--
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/super.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id ="secondSpan">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/try.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Try it for free.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id ="thirdSpan">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Get Placed At you Dream Company</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/logo.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="container">
  <div class="row">
    <div class="main">
      <h3>Please Log In, or <a href="#">Sign Up</a></h3>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>
      <!-- <form role="form" > -->
      <form role="form" action="core/user/lprocess.php" method="post" id="form2">
        <div class="form-group">
          <label for="inputUsernameEmail">Email</label>
          <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control"  name="password" id="password">
          <a class="pull-right" href="#">Forgot password?</a>
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Remember me </label>
        </div>
        <button type="submit" class="btn btn btn-primary">
          Log In
        </button>
      </form>
    </div>
  </div>
</div>
</div>
<!--################## Signup Modal Begin ################################ -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="container" id="wrap">
<div class="row">
        <div class="col-md-6 col-md-offset-3">
<form action="core/user/sprocess.php" method="post" accept-charset="utf-8" class="form" role="form" id="form" name="submit">
  <legend><center>Sign Up</center></legend>
  <h4>It's free and always will be.</h4>
  <div class="row">
  <div class="col-xs-6 col-md-6">
      <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name" id="fname" />                        </div>
  <div class="col-xs-6 col-md-6">
      <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name" id="lname" />                        </div>
  </div>
  <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email" id="email"/>
  <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  id="password"/>
  <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password" id="cpassword" />                   
  <label id="bdate">Birth Date</label>
<div class="row">
  <div class="col-xs-4 col-md-4">
    <select name="month" class = "form-control input-lg">
          <option value="01">Jan</option>
          <option value="02">Feb</option>
          <option value="03">Mar</option>
          <option value="04">Apr</option>
          <option value="05">May</option>
          <option value="06">Jun</option>
          <option value="07">Jul</option>
          <option value="08">Aug</option>
          <option value="09">Sep</option>
          <option value="10">Oct</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
      </select>  
  </div>
  <div class="col-xs-4 col-md-4">
    <select name="day" class = "form-control input-lg">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>                        
  </div>
  <div class="col-xs-4 col-md-4">
      <select name="year" class = "form-control input-lg">
        <option value="1935">1935</option>
        <option value="1936">1936</option>
        <option value="1937">1937</option>
        <option value="1938">1938</option>
        <option value="1939">1939</option>
        <option value="1940">1940</option>
        <option value="1941">1941</option>
        <option value="1942">1942</option>
        <option value="1943">1943</option>
        <option value="1944">1944</option>
        <option value="1945">1945</option>
        <option value="1946">1946</option>
        <option value="1947">1947</option>
        <option value="1948">1948</option>
        <option value="1949">1949</option>
        <option value="1950">1950</option>
        <option value="1951">1951</option>
        <option value="1952">1952</option>
        <option value="1953">1953</option>
        <option value="1954">1954</option>
        <option value="1955">1955</option>
        <option value="1956">1956</option>
        <option value="1957">1957</option>
        <option value="1958">1958</option>
        <option value="1959">1959</option>
        <option value="1960">1960</option>
        <option value="1961">1961</option>
        <option value="1962">1962</option>
        <option value="1963">1963</option>
        <option value="1964">1964</option>
        <option value="1965">1965</option>
        <option value="1966">1966</option>
        <option value="1967">1967</option>
        <option value="1968">1968</option>
        <option value="1969">1969</option>
        <option value="1970">1970</option>
        <option value="1971">1971</option>
        <option value="1972">1972</option>
        <option value="1973">1973</option>
        <option value="1974">1974</option>
        <option value="1975">1975</option>
        <option value="1976">1976</option>
        <option value="1977">1977</option>
        <option value="1978">1978</option>
        <option value="1979">1979</option>
        <option value="1980">1980</option>
        <option value="1981">1981</option>
        <option value="1982">1982</option>
        <option value="1983">1983</option>
        <option value="1984">1984</option>
        <option value="1985">1985</option>
        <option value="1986">1986</option>
        <option value="1987">1987</option>
        <option value="1988">1988</option>
        <option value="1989">1989</option>
        <option value="1990">1990</option>
        <option value="1991">1991</option>
        <option value="1992">1992</option>
        <option value="1993">1993</option>
        <option value="1994">1994</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
    </select>    
  </div>
</div>
 <label>Gender : </label>
 <label class="radio-inline">
  <input type="radio" name="gender" value="M" id="male" /> Male
</label>
<label class="radio-inline">
    <input type="radio" name="gender" value="F" id="female" /> Female
</label>
<br />
<span class="help-block">
  By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.
</span>
<button name ="submit" class="btn btn-lg btn-primary btn-block signup-btn" id="btn" type="submit">
Create my account
</button>
  </form>          
      </div>
</div>            
</div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="includes/jquery.min.js"></script>
<script src="includes/bootstrap/docs/assets/js/docs.min.js"></script>
<script src="includes/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="includes/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="includes/jquery-latest.min.js"></script>
<script type="text/javascript" src="includes/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
$(function(){
  $("#form2").submit(function(){
  // alert("ok!");
$(document).find(".error").remove();
var username=$("#username");
var password=$("#password");
  if(username.val()===""){
      $("#username").after("<div class='error'>Please Enter UserName</div>");
      $(".error").slideDown();
      username.focus();
      //$(".error").fadeOut(5000);
      return false;
  }
  if(password.val()==""){
      $("#password").after("<span class='error'>Please enter your Password</span>");
      $(".error").slideDown();
      password.focus();
      return false;
  }

});
});
</script>
<script type="text/javascript">
$(function(){
$("#form").submit(function(){
  $(document).find(".error").remove();
  var fname=$("#fname");
  var lname=$("#lname");
  var email=$("#email");
  var password=$("#password");
  var cpassword=$("#cpassword");
  var m=$("#male");
  var f=$("#female");
  var fnameRule=/^([a-zA-Z]{2,30}\s*)+$/;
  var lnameRule=/^[a-zA-Z]{3,30}$/;
  var emailRule=/^([a-zA-Z0-9_.]{2,}@[a-zA-Z0-9]{2,}.[a-zA-Z]{2,}(.[a-zA-Z]{2,3})?)$/;
  var passwordRule=/^[a-z A-z 0-9 \s]{1,}([! @ # $ % ^ & * \s]){1,}[a-z A-z 0-9 \s]{1,}$/;
  //var mobileRule=/^([0-9]{10})$/;

  if(fname.val()===""){
      $("#fname").after("<div class='error'>Please enter your First Name</div>");
      $(".error").slideDown();
      fname.focus();
      //$(".error").fadeOut(5000);
      return false;
  }
  if(!fnameRule.test(fname.val())){
      $("#fname").after("<span class='error'>Please enter a valid First name</span>");
      $(".error").slideDown();
      fname.focus();
      return false;
  }
  if(lname.val()===""){
      $("#lname").after("<span class='error'>Please enter your Last Name</span>");
      $(".error").slideDown();
      lname.focus();
      return false;
  }
  if(!lnameRule.test(lname.val())){
      $("#lname").after("<span class='error'>Please enter a valid Last name</span>");
      $(".error").slideDown();
      lname.focus();
      return false;
  }
  if(email.val()===""){
      $("#email").after("<span class='error'>Please enter your email</span>");
      $(".error").slideDown();
      email.focus();
      return false;
  }
  
  if(!emailRule.test(email.val())){
      $("#email").after("<span class='error'>Please enter a valid email</span>");
      $(".error").slideDown();
      email.focus();
      return false;
  }
  if(password.val()===""){
      $("#password").after("<span class='error'>Please enter your password</span>");
      $(".error").slideDown();
      password.focus();
      return false;
  }

  if(!passwordRule.test(password.val())){
      $("#password").after("<span class='error'>password must start and end with an alphanumeric and must contain a special character</span>");
      $(".error").slideDown();
      password.focus();
      return false;
  }
  if(cpassword.val()!=password.val())
  {
      $("#cpassword").after("<span class='error'>passwords mismatch</span>");
      $(".error").slideDown();
      cpassword.focus();
      return false;
  }
  if(!m.is(':checked')&&!f.is(':checked'))
  {
      //alert("select gender!")a
      $("#female").after("<span class='error'>select gender</span>");
      $(".error").slideDown();
      return false;
  }
  /*alert($('input[name=gender]').val());
  alert($("input:radio[name=gender]").val());*/
});
});
</script>

</body>
</html>
