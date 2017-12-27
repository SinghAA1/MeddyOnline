<?php
session_start(); //session start

require_once ('libraries/Google/autoload.php');

//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
$client_id = '744304798555-bme49gtajf85fr9k818o0r77iph5j2si.apps.googleusercontent.com'; 
$client_secret = 'kRg_hD0tRVscxYscfFBki2gT';
$redirect_uri = 'http://hackathonmvp.com/google-login-api/';

//database
$db_username = "hackathonmvp_com"; //Database Username
$db_password = "6CR32aAz"; //Database Password
$host_name = "hackathonmvp.com.mysql"; //Mysql Hostname
$db_name = 'hackathonmvp_com'; //Database Name

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
echo '<div style="margin:20px">';
if (isset($authUrl)){ 
    ?>
<html>
<head>    
	<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Simple Effects for Drop-Down Lists</title>
		<meta name="description" content="Simple Effects for Drop-Down Lists" />
		<meta name="keywords" content="drop-down, select, jquery, plugin, fallback, transition, transform, 3d, css3" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="../css/style1.css" />
		<script src="../js/modernizr.custom.63321.js"></script>
		
    <style type="text/css">
    <!--
    body { 
        background-image: url(http://digiscope.diagnozit.com/images/doctor_stethoscope.jpg); 
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
      
    }
/*    html { */
        
/*  background: url(images/bg.jpg) no-repeat center center fixed; */
/*  -webkit-background-size: cover;*/
/*  -moz-background-size: cover;*/
/*  -o-background-size: cover;*/
/*  background-size: cover;*/
/*}*/
    -->
    </style>
</head>

<body>
    <?php
        include ('header_checker.php');
    ?>
<a href="../index.php"><h1 style="margin-top: 3%;"><strong style="padding: 0 40px; font-size: larger;">Medical Consultations Online</strong></h1></a>

<!-- Top Navigation -->
            

		
	
</body>    
</html>
    <?php
	//show login url
	echo '<div align="center" style="margin-top: 20%">';
	echo '<a class="login" href="' . $authUrl . '"><img width=200px src="images/signin.png" /></a>';
	echo '</div>';
	
	
} else {
	
	$user = $service->userinfo->get(); //get user info 
	
	// connect to database
	$mysqli = new mysqli($host_name, $db_username, $db_password, $db_name);
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
	
	else //else greeting text "Thanks for registering"
	{ 
        
		$statement = $mysqli->prepare("INSERT INTO google_users (google_id, google_name, google_email, google_link, google_picture_link) VALUES (?,?,?,?,?)");
		$statement->bind_param('issss', $user->id,  $user->name, $user->email, $user->link, $user->picture);
		$statement->execute();
	
    }
	$_SESSION['id'] = $user->id;
	
	
   
	//print user details
	echo '<pre>';
//	print_r($user);
	echo '</pre>';
	echo "<script type='text/javascript'>window.location.href = '../index.php';</script>";
    exit();
	
}
echo '</div>';


?>

