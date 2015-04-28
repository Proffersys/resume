<?php
session_start();
// error_reporting(1);
// error_reporting(E_ALL);
//if(file_exists('database/connect.php')){
require ('database/connect.php');
//}
else{
	echo "cant find connect.php"
}
// require ('function.php');

$errors=array();
// echo "****";
// print_r($errors);
if (isset($_SESSION['dir_id'])) 
{
	$dir_user_id=$_SESSION['dir_id'];
	$result=$con->query("SELECT fname,lname,user_name,gender FROM dir_user WHERE dir_id=$dir_user_id");
	if ($result) {
		if($result->num_rows===1){
			$user_info=$result->fetch_object();
			// print_r($user_info);
		}
	}	
}
?>
