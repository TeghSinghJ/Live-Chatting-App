<?php
include 'connection.php';
session_start();
$outgoing_id=$_SESSION['u_id'];
$query="select * from users where unique_id in (SELECT incoming_id FROM friends where outgoing_id='$outgoing_id' and status='Yes')";
    $sql = mysqli_query($conn,$query);
    if(mysqli_num_rows($sql)>0)
	{
	while($result = mysqli_fetch_array($sql))
	{
	 echo "<a href='get_session.php?id={$result['unique_id']}' class='list-group-item'>
                        <div class='media'>
                            <div class='pull-left'><img class='img-circle' src='Avatar/{$result['avatar']}' alt='...'>
                            </div>
                            <div class='media-body'>
		<h4 class='media-heading'>{$result['user_name']}</h4>";
								if($result['status']=='Online')
								{
									echo "<small>Online</small>";
								}
								else{
									echo date("F j, Y g:i a",strtotime('+5 hours +30 minutes', strtotime($result["status"])));
								}	
								echo "</div>
                        </div>
                    </a>";
	}
	}
	else
	{
		 echo "You don't have friends";
	}
	
	
?>
