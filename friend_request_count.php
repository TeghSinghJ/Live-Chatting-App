<?php
include 'connection.php';
session_start();
$outgoing_id=$_SESSION['u_id'];
    $sql = mysqli_query($conn, "SELECT * FROM friends where outgoing_id='$outgoing_id' and status='No'");
    $count=mysqli_num_rows($sql);
	if($count>0)
	{
	echo $count;
	}
?>