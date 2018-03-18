<?php
session_start();
//$_SESSION["id"]="";
//$_SESSION["log"]="";
$server='localhost';
$user='Anshul';
$password='AsdfZxcv909';
$db='php_course';
$myConnection = mysqli_connect($server,$user,$password,$db);
if(!$myConnection){
	die("Connection Failed!:".mysqli_connect_error());
}
$email=$_POST["email"];
$password=$_POST["password"];
if($email && $password)
{
mysqli_select_db($myConnection, "php_course") or die ("no database");
$sql="SELECT * FROM info WHERE email=$email and password=$password";
if($id=mysqli_query($myConnection, $sql))
{
	$_SESSION["log"]=$email;
	$_SESSION["id"]=$id[0];
	echo "login successful";
}}
?>
