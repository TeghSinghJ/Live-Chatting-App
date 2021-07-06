<?php
session_start();
include 'connection.php';
$i_id=$_POST['id'];
$_SESSION['i_id']=$i_id;
header("Location: chat.php");
?>