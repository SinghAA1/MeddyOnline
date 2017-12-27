<?php
require_once('Database/header.php');

if(isset($_POST['worker']))
{
    
     $id = $_SESSION['id'];
    $worker = sanitizeString($_POST['worker']);
    queryMySQL("UPDATE google_users SET worker='$worker' WHERE google_id='$id'");
    echo "<script>window.location = './index.php'</script>";
}
if(isset($_POST['status']))
{
    
     $id = $_SESSION['id'];
    $status = sanitizeString($_POST['status']);
    queryMySQL("UPDATE google_users SET online='$status' WHERE google_id='$id'");
    echo "<script>window.location = './index.php'</script>";
}
if(isset($_POST['firstname']))
{
    $id = $_SESSION['id'];
    $firstname = sanitizeString($_POST['firstname']);
    queryMySQL("UPDATE google_users SET google_name='$firstname' WHERE google_id='$id'");
    echo "<script>window.location = './index.php'</script>";
}
if(isset($_POST['email']))
{
    $id = $_SESSION['id'];
    $email = sanitizeString($_POST['email']);
    queryMySQL("UPDATE google_users SET google_email='$email' WHERE google_id='$id'");
     echo "<script>window.location = './index.php'</script>";
}
if(isset($_POST['phone']))
{
    $id = $_SESSION['id'];
    $phone = sanitizeString($_POST['phone']);
    queryMySQL("UPDATE google_users SET price='$phone' WHERE google_id='$id'");
    echo "<script>window.location = './index.php'</script>";
}
if(isset($_POST['description']))
{
    $id = $_SESSION['id'];
    $type = sanitizeString($_POST['description']);
    queryMySQL("UPDATE google_users SET description='$type' WHERE google_id='$id'");
    echo "<script>window.location = './index.php'</script>";
}


?>