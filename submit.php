<?php
require_once('Database/header.php');

if(isset($_GET["rows"]))
{
    
     $id = $_SESSION['id'];
    $data = $_GET["rows"];
 
     queryMysql("INSERT INTO patient_description (patient_id, last_prescription) VALUES ('$current_patient','$data')");
    echo "<script>window.location = './index.php'</script>";
}




?>