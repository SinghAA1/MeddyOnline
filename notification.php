<?php
require_once('Database/header.php');
if($worker == "doctor" && $current_patient != 0)
{
    
    $usr_info = queryMysql("SELECT * FROM admin WHERE id = '$current_patient' ");
     	  $row = $usr_info->fetch_array(MYSQLI_ASSOC);
    // 	  $usr = $row['google_name'];
           $p_name = $row['patient_name'];
           
     $usr_info1 = queryMysql("SELECT * FROM patient_description WHERE patient_id=$current_patient ORDER BY id DESC");
           $row1 = $usr_info1->fetch_array(MYSQLI_ASSOC);
           
           if($p_l_s != ' '){
           $p_l_s = $row1['last_prescription'];
           }else
           {
               $p_l_s='';
           }
           
    echo "<br><h3>------------ INCOMING PATIENT -------------</h3><br>";
    
    echo "<br><h3>Patient Name: $p_name</h3><br>";
    
    echo "<h3>Last Prescription: $p_l_s</h3>";
    echo "<br>";
    echo "<h3>Date: ".date("d/m/y")."</h3>";
    echo "<br><h3>-----------------------------------------------------</h3><br>";
}
?>