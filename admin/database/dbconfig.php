<?php
$server_name = "localhost";
$db_username = "root";
$db_password="";
$db_name ="wetalkk";
 $connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);
 $dbconfig = mysqli_select_db($connection,$db_name);
 if($dbconfig){
//echo "database connected";
 }
 else{
     echo "yiop";
 }

?>