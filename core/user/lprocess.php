<?php
include_once '../init.php';
if (empty($_POST)===false) 
{
  // $username=$_POST['username'];
  // $password=sha1($_POST['password']);
  $username=strip_tags(trim($_POST['username']));
  $password=sha1(strip_tags(trim($_POST['password'])));
  echo $username .'<br>'. $password.'<br>';
  // var_dump($con);
  $result = $con->query("SELECT count(user_name),status,password,dir_id FROM dir_user where user_name = '$username'");
  if($result){
  if ($result->num_rows==1) {
  	echo "user found ";
  	$row=$result->fetch_object();
  	// print_r($row);
  	if ($row->status !=1) {
  		$errors[]="Please activate your account.";
  		$errors[]="Check your mail for further instruction";
  	}
  	else if($row->password!=$password)
	{
		$errors[]="username password combination is wrong";
  	}
  	else{
  		echo "login sucessfull";
  		$_SESSION['dir_id']=$row->dir_id;
  		echo $row->dir_id.'<hr>';
  		 if (isset($_SESSION['dir_id']))
  		 {
  		 	echo "Session set";
  		 } 

  	}
 }

}else{
	$errors[]= "We can't find you have you register";
  $errors[]="Please register to avail our service";
}


}
if (!empty($errors)) {
	include_once '../../error.php';
  echo '<a href="../../index.php">Click Me {Home page}</a>';

}
else{
  header("Location: ../../landing.php");
}
// print_r($errors);
?>