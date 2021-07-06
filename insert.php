<?php
require_once 'connection.php';
if (isset($_POST['message'])) {
    $message = $_POST['message'];
    mysqli_query($conn, "insert into ch(msg) values ('$message')");
}
?>