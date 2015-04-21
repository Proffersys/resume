<?php
include '../core/init.php';
//include google api files
require_once 'src/Google_Client.php';
require_once 'src/contrib/Google_Oauth2Service.php';

########## Google Settings.. Client ID, Client Secret from https://cloud.google.com/console #############
$google_client_id       = '273264425108-ffguf9v635dpgvpv3c1jvs0iq729bd65.apps.googleusercontent.com';
$google_client_secret   = 'Um7NSjHmpEJbrUojN6hC6a1A';
$google_redirect_url    = 'http://localhost/resume/google/index.php'; //path to your script
$google_developer_key   = 'AIzaSyDNZl7oIBOaf4iIUkBkRb89BCMfpkSfEFs';

########## MySql details (Replace with yours) #############
// $db_username = "xxxxxxxxx"; //Database Username
// $db_password = "xxxxxxxxx"; //Database Password
// $hostname = "localhost"; //Mysql Hostname
// $db_name = 'xxxxxxxxx'; //Database Name
###################################################################




$gClient = new Google_Client();
$gClient->setApplicationName('Login to ProfferSys');
$gClient->setClientId($google_client_id);
$gClient->setClientSecret($google_client_secret);
$gClient->setRedirectUri($google_redirect_url);
$gClient->setDeveloperKey($google_developer_key);

$google_oauthV2 = new Google_Oauth2Service($gClient);

//If user wish to log out, we just unset Session variable
if (isset($_REQUEST['reset'])) 
{
  unset($_SESSION['token']);
  $gClient->revokeToken();
  header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL)); //redirect user back to page
}

//If code is empty, redirect user to google authentication page for code.
//Code is required to aquire Access Token from google
//Once we have access token, assign token to session variable
//and we can redirect user back to page and login.
if (isset($_GET['code'])) 
{ 
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL));
    return;
}


if (isset($_SESSION['token'])) 
{ 
    $gClient->setAccessToken($_SESSION['token']);
}


if ($gClient->getAccessToken()) 
{
      //For logged in user, get details from google using access token
      $user                 = $google_oauthV2->userinfo->get();
      $user_id              = $user['id'];
      $user_name            = filter_var($user['name'], FILTER_SANITIZE_SPECIAL_CHARS);
      $email                = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
      $profile_url          = filter_var($user['link'], FILTER_VALIDATE_URL);
      $profile_image_url    = filter_var($user['picture'], FILTER_VALIDATE_URL);
      $personMarkup         = "$email<div><img src='$profile_image_url?sz=50'></div>";
      $_SESSION['token']    = $gClient->getAccessToken();
}
else 
{
    //For Guest user, get google login url
    $authUrl = $gClient->createAuthUrl();
}

//HTML page start
echo '<!DOCTYPE HTML><html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '<title>Login with Google</title>';
echo '</head>';
echo '<body>';
echo '<h1>Login with Google</h1>';

  if(isset($authUrl)) //user is not logged in, show login button
  {
      echo "string****";
      echo $authUrl;
      echo '<a class="login" href="'.$authUrl.'"> click me<img src="images/gb.png" /></a>';
  } 
  else // user logged in 
  {
  //compare user id in our database
    $user_exist = $db->query("SELECT COUNT(google_id) as usercount FROM google_user WHERE google_id=$user_id")->fetch_object()->usercount; 
    if($user_exist)
    {
        echo 'Welcome back '.$user_name.'!';
    }else{ 
        //user is new
        echo 'Hi '.$user_name.', Thanks for Registering!';
        if($insert=$db->query("
        INSERT INTO google_user (google_id, google_name, google_email, profile_link, google_picture_link) 
        VALUES ($user_id, '$user_name','$email','$profile_url','$profile_image_url')
        ")){
          // echo "string";
          echo "affected row:-",$db->affected_rows;
        }
        else 
          echo $db->errno;
    }
    
    echo '<br /><a href="'.$profile_url.'" target="_blank"><img src="'.$profile_image_url.'?sz=100" /></a>';
    echo '<br /><a class="logout" href="?reset=1">Logout</a>';
    
    //list user details
    echo '<pre>'; 
    print_r($user);
    echo '</pre>';  
}
 
echo '</body></html>';

?>