<?php
session_start();
include 'connection.php';
$id=$_GET['id'];
$query="select * from users where unique_id='$id'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
$avatar=$row['avatar'];
$_SESSION['to']=$id;
$_SESSION['r_avt']=$avatar;
$_SESSION['r_name']=$row['user_name'];
header("Location: chat.php");
?>