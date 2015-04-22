<?php
require_once("core/init.php");
echo "dshbfhsdfhjs";

if(isset($_POST['submit']))
{
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $month=$_POST['month'];
    $day=$_POST['day'];
    $year=$_POST['year'];
    $user_name=$fname.time();
    //$user_name=$fname+" "+$lname;
    $password=sha1($_POST['password']);
    $c_password=sha1($_POST['confirm_password']);
    $birthday=$year."-".$month."-".$day;
     // require_once ("core/database/init.php");
    if(!empty($fname)and!empty($lname)and!empty($email)and!empty($gender)and!empty($month)and!empty($day)and!empty($year))
    {
        if(($password===$c_password))
        {
            $checkquery=mysqli_query($con,"SELECT email from dir_user WHERE email='$email'");
            if($checkquery)
            {
                $count=mysqli_num_rows($checkquery);
                if($count==0)
                {
                    $query=mysqli_query($con,"INSERT into dir_user(fname,lname,email,gender,dob,password,user_name)values('$fname','$lname','$email','$gender','$birthday','$password','$user_name');");
                    if($query)
                    {
                        header("Location:http://www.google.com");
                        //header("Location:landing_page.php");
                        //echo "<div class='success'>You have been registered successfully, You may now login.</div>";
                        //$_SESSION['user_session']=array('user_fname'=>$fname,'user_lname'=>$lname,'user_name'=>$user_name,'gender'=>$gender,'dob'=>$birthday); 
                    }
                    else
                    { 
                        echo "<div class='error'>There was an error registering you, Please try again later.</div>";    
                    }   
                }
                else
                {
                    echo "<div class='error'>Account to this email id is already in use.</div>";    
                }   
            }
        }
        else
        {
            echo "<div class='error'>Your password and Confirm password do not match.</div>";
        }
    }
    else
    {
        echo "<div class='error'>Please fill in all the fields</div>";
    }
}
/*else
{
   echo "not submitted"; //if form doesn't get submitted!
}*/
?>
