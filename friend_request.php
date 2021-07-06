<?php
session_start();
include 'connection.php';
$outgoing_id=$_GET['id'];
$incoming_id=$_SESSION['u_id'];;
$sql="insert into friends(outgoing_id,incoming_id) values('$outgoing_id','$incoming_id')";
mysqli_query($conn,$sql);
header("Location: find.php");
?>