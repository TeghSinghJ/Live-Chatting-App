<?php
include 'connection.php';
session_start();
$date = date('Y-m-d H:i:s');
$id=$_SESSION['u_id'];
$sql="update users set status='$date' where unique_id='$id'";
if(mysqli_query($conn,$sql))
{
    $path = session_save_path();

    $files = glob($path.'/*'); // get all file names
    foreach($files as $file){ // iterate files
      if(is_file($file))
        unlink($file); // delete file
    }
    header("Location: index.php");
}
else
{
    echo mysqli_error($conn);
}
?>