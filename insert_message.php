<?php
include 'connection.php';
session_start();
$outgoing_id=$_SESSION['to'];
$date = date('Y-m-d H:i:s');
$incoming_id=$_SESSION['u_id'];
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    mysqli_query($conn, "insert into chat (incoming_msg_id,outgoing_msg_id,msg,ch_timestamp) values ('$incoming_id','$outgoing_id','$message','$date')");
}
?>