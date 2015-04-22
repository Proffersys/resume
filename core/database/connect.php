<?php
$database = 'u610591618_rdb';
$username = 'root';
$password = 'hackingclub';
$hostname = 'localhost';
$con=mysqli_connect("$hostname","$username","$password","$database");
if (isset($con->errno)) {
	// echo "connected to database :--u610591618_rdb".'<br>';
}
else{
	echo "unable to connect to database";
	echo $con->connect_errno;
	echo $con->error;
	die("sorry for your inconvenience");
}


?>
