<style type="text/css">
#del{position: :absolute;right: 0}
.clearfix{clear: both;}
</style>
<?php
//session_start(); !!! "HAVE A LOOK HERE FOR SESSION"  !!!!
$body=htmlentities(addslashes($_POST['post_body']));
//$user_id=$_SESSION['user']['id']; !!!HAVE A LOOK HERE FOR THE PERSON'S ID WHOSOEVER IS POSTING !!!
$user_id="4";  //!!! COMMENT THIS LINE-5 COMPLETELY AFTER HANDLING ABOVE ISSUES !!!
date_default_timezone_set("Asia/Kolkata");
//echo time();
if(!empty($body)){
	require_once("connection.php");
	$query=mysqli_query($con,"INSERT into posts(ssn,body) values('$user_id','$body')");
	$inserted_id=mysqli_insert_id($con);   //returns the id of the post last inserted
	if($query){
		$user_query=mysqli_query($con,"SELECT * from dir_user WHERE ssn='$user_id'") or die('fail2');
      	$username=mysqli_fetch_assoc($user_query);
		echo "
		<div class='article' >".
		"<h2 style='display:inline-block;'>Posted By : ".$username['fname'].", on ".date("l,d-F,Y h:i:s a",time())."</h2>
			<a href='#' id='del' class='delete' data-id='".$inserted_id."'>Delete</a>
			"."
			<p>
			".$body."
			</p>
		</div>".
		"<div class='clearfix'>"."</div>
		";
	}else{
		echo "Error";
	}
}
?>
