<?php
session_start();
include 'connection.php';
$outgoing_id=$_SESSION['u_id'];
$chatid=$_GET['id'];
$query="update friends set status='Yes' where incoming_id='$chatid' and outgoing_id='$outgoing_id'";
if($res=mysqli_query($conn,$query))
{
	header("Location: find.php");
}
?>