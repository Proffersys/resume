<?php

function user_exists($username){
$result = $con->query("SELECT  count(user_name) FROM dir_user where username = $username");
if ($result) {
	return true;
}

}


?>