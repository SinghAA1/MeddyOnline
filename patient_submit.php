<?php
require_once('Database/header.php');


if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['phone']) )
{

    
     $id = $_SESSION['id'];
    $name = sanitizeString($_POST['name']);
    $age = sanitizeString($_POST['age']);
    $phone = sanitizeString($_POST['phone']);
  
     queryMysql("INSERT INTO admin (google_id, patient_name, patient_age, patient_number) VALUES ('$id','$name','$age','$phone')");
    echo "<script>window.location = './patients.php'</script>";
}




?>