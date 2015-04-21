<?php
  if (empty($_POST)===false) 
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    echo $username .'<br>'. $password.'<br>';
   if (user_exists($username)===false) {
    $errors[]="we can\'t find you have you register";

  }
  else
      if(user_active($username)===false) 
        {
          $errors[]='you haven\'t activated your account';
        }
    else{
          $login = login($username,$password);
          if ($login===false) {
            $errors[]='username and password combination is incorrect'; 
          }
          else
          {
            echo "good to go";
            $_SESSION['ssn']=$login;
            echo $login.'<hr>';
               if (isset($_SESSION['ssn'])) 
              {
                echo "in if";
                $URL="pages/landing.php";
                echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';

              }
            echo "strinddg";
          }
        }
  }
 print_r($errors);

?>

