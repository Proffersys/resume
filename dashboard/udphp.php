<?php require_once '../core/init.php';
?>
<?php
$id=$_POST['id'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$location=$_POST['location'];
$userid=$_SESSION['dir_id'];

$query="UPDATE dir_user SET user_name='$id',mobile='$mobile',email='$email',location='$location' where dir_id='$userid'";

$result = mysqli_query($con,$query);
if($result)
{
echo "Record Updated Sucessfully";    
}
else
{
header('Location:www.google.com');    
}  

?>
