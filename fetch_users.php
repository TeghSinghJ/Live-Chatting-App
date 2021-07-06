<?php
session_start();
include 'connection.php';
$sql="SELECT * FROM chat LEFT JOIN users ON users.unique_id = chat.outgoing_msg_id
                WHERE (outgoing_msg_id = '1' AND incoming_msg_id = '2')
                OR (outgoing_msg_id = '2' AND incoming_msg_id = '1') ORDER BY chat_id"; 
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0){
	while($row = mysqli_fetch_assoc($query)){
        if($row['outgoing_msg_id'] === $outgoing_id){
		print "<div class='outgoing_msg'>
              <div class='sent_msg'>
                <p>{$row['msg']}</p>
                <span class='time_date'>{$row['ch_timestamp']}</span> </div>
            </div>";
				}
				else{
					echo "<div class='incoming_msg'>
              <div class='incoming_msg_img'> <img src='Avatar/{$avt}' alt='sunil'> </div>
              <div class='received_msg'>
                <div class='received_withd_msg'>
                  <p>{$row['msg']}</p>
                  <span class='time_date'>{$row['ch_timestamp']}</span></div>";
				}
	}
}
?>