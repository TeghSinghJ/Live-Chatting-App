<?php
session_start();
			include 'connection.php';
			$u_id=$_SESSION['u_id'];
			$sql="select * from users where unique_id <>'$u_id'";
			$res=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($res))
			{
				print "<div class='chat_people'>
                <div class='chat_img'> <img src='Avatar/{$row['avatar']}' alt='sunil'> </div>
                <div class='chat_ib'>
                  <h5><a href='chat.php?id={$row['unique_id']}'>{$row['user_name']}<span class='chat_date'>Dec 25</span></a></h5>
                  <p>Message</p>
                </div>";
				}
			?>
              