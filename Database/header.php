<?php
  session_start();
  //error_reporting(0);
 require_once 'functions.php';

  $userstr = ' (Guest)';
  

//if user has logged in
  if (isset($_SESSION['id']))
  {
      
    //   if($_GET['id'] != null)
    //   {
    //       $id = $_GET['id'];
          
    //   }
      
    //   else
    //   {
    //       $id = $_SESSION['id'];
    //   }
                                                                                                        
      $loggedin = TRUE;
      $id = $_SESSION['id'];
      $user_info = queryMysql("SELECT * FROM google_users WHERE google_id = '$id' ");
	  $row = $user_info->fetch_array(MYSQLI_ASSOC);
	  $user = $row['google_name'];
      $firstname = $row['google_name'];
      $email_id = $row['google_email'];
      $worker = $row['worker'];
      $phone = $row['price'];
      $type = $row['description'];
      $status = $row['online'];
      $current_patient = $row['current_patient'];
    
     
      
    
  }
  else $loggedin = FALSE;

  

  
?>
