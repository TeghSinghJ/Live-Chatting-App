<?php
$server="localhost";
$pass="";
$uname="root";
$dbname = "chatting_system";
$conn=mysqli_connect($server,$uname,$pass);
if(!$conn)
{
	die("Connection failed!");
}
mysqli_select_db($conn,$dbname);
?>