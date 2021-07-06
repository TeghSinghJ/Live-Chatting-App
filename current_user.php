<?php
session_start();
include 'connection.php';
$mob=$_SESSION['mobile'];
$sql="select * from users where user_mobile='$mob'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$_SESSION['u_id']=$row['unique_id'];
$_SESSION['u_avt']=$row['avatar'];
$_SESSION['u_name']=$row['user_name'];
header("Location: find.php");
?>