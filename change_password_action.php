<?php
session_start();
include 'connection.php';
$mob=$_SESSION['mobile'];
$old=$_POST['old_pass'];
$new=$_POST['new_pass'];
$sql="update users set user_pass='$new' where user_mobile='$mob'";
if(mysqli_query($conn,$sql))
{
echo "password updated successfully";
}
else
{
	 echo "incorrect password";
}
?>