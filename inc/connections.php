<?php
$conn=mysqli_connect('localhost','root','','asmaa');
if(!$conn){
    die('error'.mysqli_connect_error());
}