<?php
session_start(); //session start

require_once ('libraries/Google/autoload.php');
include_once('stylesheets.php'); 
include_once('header.php');
include_once('dbconnect.php');

//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
$client_id = '307712715810-5gqv439ef8l9hmmod3ggpbdplcc7t7gq.apps.googleusercontent.com'; 
$client_secret = 'yvXrJI4PIvIEtJr4G-DBd44N';
//$redirect_uri = 'http://exe.nith.ac.in/login.php';
$redirect_uri='http://localhost/github/Team-exe-website-NEW-2017/login.php';


//incase of logout request, just unset the session var
if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
}

/************************************************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 ************************************************/
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");

/************************************************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 ************************************************/
$service = new Google_Service_Oauth2($client);

/************************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
*/
  
if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  exit;
}

/************************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ************************************************/
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
} else {
  $authUrl = $client->createAuthUrl();
}


//Display user info or display login url as per the info we have.
echo "<br><br><br>";
echo '<div class="jumbotron">';
echo '<div class="container">';
if (isset($authUrl)){ 
	//show login url
	echo '<div align="center">';
	echo '<img class="btlog1" src="images/logo.png"><br>';
	echo "<h3><code>Team .EXE wants you to Sign In to yor Google account</code></h3><br>";
	echo '<a class="login" href="' . $authUrl . '"><img class="btlog1" src="images/signin_button.png" /></a>';
	
} 
else {
	$user = $service->userinfo->get(); //get user info 
	$_SESSION['login_user']=$user['id'];
	include_once('user_session.php');

	// connect to database
	$mysqli = new mysqli($host_name, $db_username, $db_password, $db_name);
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
	
	//check if user exist in database using COUNT
	$result = $mysqli->query("SELECT COUNT(google_id) as usercount FROM users WHERE google_id=$user->id");
	$user_count = $result->fetch_object()->usercount; //will return 0 if user doesn't exist

	echo "<center>";
		
	if($user_count) //if user already exist change greeting text to "Welcome Back"
    {
        echo '<code><h3> Welcome back <b><a href="profile.php">'.$user->name.'</a></b> Nice to see you again </h3></code>';
    }
	else //else greeting text "Thanks for registering"
	{ 
        echo '<code><h3>Hi <b><a href="profile.php">'.$user->name.'</a></b>, Thanks for Registering!</code></h3>';
	$statement = $mysqli->prepare("INSERT INTO users (google_id, name, email, link, picture) VALUES (?,?,?,?,?)");
		$statement->bind_param('issss', $user->id,  $user->name, $user->email, $user->link, $user->picture);
		$statement->execute();
		echo $mysqli->error;
    }
    //show user picture
	echo '<img src="'.$user->picture.'" style=" width:20%; margin-top: 33px;" />';
	
	//print user details
	/*echo '<pre>';
	print_r($user);
	echo '</pre>';*/
}
include_once('user_navigation.php');
echo '</div>';
echo '</div>';
echo "</center>";
include_once('footer.php');
?>