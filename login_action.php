<?php
session_start();
include 'connection.php';
$mobile=$_POST['mobile'];
$pass=$_POST['password'];
$sql="select * from users where user_mobile='$mobile' and  user_pass='$pass'";
$query="update users set status='Online' where user_mobile='$mobile' and  user_pass='$pass'";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
if($count>0)
{
	if(mysqli_query($conn,$query))
	{
		$_SESSION['mobile']=$mobile;
		header("Location: current_user.php");
	}
}
else
{
	echo "Username or password is invalid!";
}
?>