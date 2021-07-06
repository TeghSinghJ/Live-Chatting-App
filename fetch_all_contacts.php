<?php
include 'connection.php';
session_start();
$outgoing_id=$_SESSION['u_id'];
    $sql = mysqli_query($conn, "SELECT * FROM users where unique_id <> '$outgoing_id'");
    $count=mysqli_num_rows($sql);
	echo $count;
?>