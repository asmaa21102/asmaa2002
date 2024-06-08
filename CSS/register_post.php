<?php 
include('inc/connections.php');
if(isset($_POST ['submit'])){
$username=stripcslashes(strtolower($_POST['username']));
$email=stripcslashes($_POST['email']);
$password=stripcslashes($_POST['passwoed']);
$birthday_month=stripcslashes($_POST['birthday_month']);
}
$username=htmlentities(mysqli_real_escape_string($conn,$_POST['username']));
$email=htmlentities(mysqli_real_escape_string($conn,$_POST['email']));
$password=htmlentities(mysqli_real_escape_string($conn,$_POST['password']));
$md5_pass=md5($password);
if(isset($_POST['gender'])){
    $gender=($_POST['gender']);
    $gender=htmlentities(mysqli_real_escape_string($conn,$_POST['gender']));
    if(!in_array($gender,['male','female'])){
        $gender_error='please choose gender not a text';
        $err_s=1; 
    }
}
}