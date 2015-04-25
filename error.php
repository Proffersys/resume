<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Error!</title>
</head>
<body>
	<h2>Sorry have made an Error!..</h2>
	<?php
	// print_r($errors);
	if (empty($errors)) {
		echo '<h3>'.'Sorry we are facing some problem.Try again after sometime'.'</h3>'.'<br>';
	}
	else
	{
		$output=array();
		foreach ($errors as $error) 
		{
		//echo  $error,', ';
			$output[]= '<li>' . $error . '</li>';
		}
		
		$show= implode('', $output);
		// print_r($show);
		echo '<center><h4>'.$show.'</center></h4>';
	}

	?>
</body>
</html>