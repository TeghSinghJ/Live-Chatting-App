<?php
include 'connection.php';
session_start();
$outgoing_id=$_SESSION['u_id'];
    $sql = mysqli_query($conn, "SELECT * FROM friends where outgoing_id='$outgoing_id' and status='Yes'");
    $count=mysqli_num_rows($sql);
	echo $count;
?>