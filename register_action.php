<?php
session_start();
include 'connection.php';
$image=rand(1,27).".jpg";
$ran_id = rand(time(), 100000000);
$uname=$_POST['name'];
$mobile=$_POST['mobile'];
$pass=$_POST['password'];
$add=$_POST['add'];
$state=$_POST['state'];
$sql="insert into users(unique_id,user_name,user_pass,user_mobile,user_address,user_state,avatar) values('$ran_id','$uname','$pass','$mobile','$add','$state','$image')";
if(mysqli_query($conn,$sql))
{
	header("Location: index.php");
}
else
{
	echo "registration failed ".mysqli_error($conn);
}
?>