<?php
session_start();
include 'connection.php';
$outgoing_id=$_SESSION['u_id'];
$query="select * from users where unique_id in (select incoming_id from friends where outgoing_id='$outgoing_id' and status='No')";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_array($res))
{
	echo "<img src='Avatar/{$row['avatar']}' height='100' width='100' alt'user
	<p id='info'><b>{$row['user_name']}</b> 
	    <a href='accept_request.php?id={$row['unique_id']}'><button class='confirm-button' type='submit'>Confirm</button></a>
                                            <button>Delete Request</button>
                                      <div>";
}
}
else
{
	echo "No friend requests recieved!";
}
?>