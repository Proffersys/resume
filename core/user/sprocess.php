<?php
require_once("../init.php");
// echo "dshbfhsdfhjs";
if(empty($_POST)===false)
{
    $fname=strip_tags(trim($_POST['firstname']));
    $lname=strip_tags(trim($_POST['lastname']));
    $email=strip_tags(trim($_POST['email']));
    $gender=strip_tags(trim($_POST['gender']));
    $month=strip_tags(trim($_POST['month']));
    $day=strip_tags(trim($_POST['day']));
    $year=strip_tags(trim($_POST['year']));
    $user_name=strip_tags(trim($fname.time()));
    $password=sha1(strip_tags(trim($_POST['password1'])));
    $c_password=sha1(strip_tags(trim($_POST['confirm_password'])));
    $birthday=$year."-".$month."-".$day;
// echo $fname .'<br>'.$lname.'<br>'.$email.'<br>'.$gender.'<br>'.$user_name.'<br>'.$password.'<br>'.$c_password ;
    if(!empty($fname)and!empty($lname)and!empty($email)and!empty($gender)and!empty($month)and!empty($day)and!empty($year))
     {   
        if($password === $c_password)
        {
            $checkquery=$con->query("SELECT email from dir_user WHERE email='$email'");
            // print_r($checkquery);
            if($checkquery)
            {
                $count=$checkquery->num_rows;
                echo "count is".$count;
                if($count==0)
                {
                    $insert = $con->query("INSERT INTO dir_user(fname,lname,email,gender,dob,password,user_name) VALUES('$fname','$lname','$email','$gender','$birthday','$password','$user_name');");
                    echo "string1";
                    if($con->affected_rows)
                    {   
                        echo "string2";
                        $id=$con->query("SELECT dir_id FROM dir_user WHERE email='$email' AND user_name='$user_name'");
                        if($id)
                        {
                            echo "string3";
                            $row1=$id->fetch_object();
                            $temp1=$row1->dir_id;
                            $result3=$con->query("INSERT INTO user(dir_id,fname,lname,user_name,email)VALUES ($temp1,'$fname','$lname','$user_name','$email')");
                            if ($con->affected_rows) 
                            {
                                echo "string4";
                                $result4=$con->query("SELECT ssn FROM user WHERE dir_id='$temp1' AND user_name='$user_name'");
                                if($result4)
                                {
                                    echo "string5";
                                    $row2=$result4->fetch_object();
                                    echo "You are now registered";
                                    echo $row2->ssn;
                                    if ($update= $con->query("UPDATE dir_user set ssn=$row2->ssn WHERE dir_id=$temp1")) 
                                    {
                                        echo "string6";
                                        var_dump($update);
                                        echo $con->affected_rows;
                                        header("Location: login.php");

                                        }

                                }
                            }
                        }
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
            else{
                echo "We are facing some technical issue.Please try again after sometime";
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

?>
