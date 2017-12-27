<?php
  
  //database identification
  require_once('database_Login_Information.php');

 
//  This is for connecting to the local server
  /*
  $dbhost  = 'localhost';    
  $dbname  = 'network';   
  $dbuser  = 'root';   
  $dbpass  = 'root';
*/

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  
  //show error message if cannot connect to the database
  if ($connection->connect_error) die($connection->connect_error);

//   function createTable($name, $query)
//   {
//     queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
//     echo "Table '$name' created or already exists.<br>";
//   }

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die($connection->error);
    return $result;
  }

  function destroySession()
  {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
  }

  // Returns sanitize String    
  function sanitizeString($var)
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
  }
  
//   function user_exists($user)
//   {
     
//       $result = mysql_query("SELECT COUNT(`id`) FROM `profile` WHERE `username` = '$user'");
//       return mysql_result($result, 0);
      
//     //   $row = $result->fetch_array(MYSQLI_ASSOC);
//     //   return ($row['id'] == 1) ? true : false;
     
//   }



  
?>