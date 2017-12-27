<?php
require_once('Database/header.php');

if(isset($_GET['ids']))
{
    
     $ids = $_GET['ids'];
     $current_patient = $_GET['patient'];
    
    queryMySQL("UPDATE google_users SET current_patient='$current_patient' WHERE google_id='$ids'");
  echo "<script>window.location = './view.php?id=$ids'</script>";
}
?>