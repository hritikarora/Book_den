<?php
$server='localhost';
$user='anshul';
$password='AsdfZxcv909';
$db=='php_course';
$conn = mysqli_connect($server,$user,$password,$db);
if(!$conn){
	die("Connection Failed!:".mysqli_connect_error());
}
?>