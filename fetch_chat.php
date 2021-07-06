<?php
session_start();
include 'connection.php';
$outgoing_id=$_SESSION['to'];
$incoming_id=$_SESSION['u_id'];
$in_avt=$_SESSION['u_avt'];
$out_avt=$_SESSION['r_avt'];
$query="SELECT * FROM chat LEFT JOIN users ON users.unique_id = chat.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY chat_id";
    $sql = mysqli_query($conn, $query);
    if(mysqli_num_rows($sql) > 0){
	while($result = mysqli_fetch_assoc($sql)){
        if($result['outgoing_msg_id'] == $outgoing_id){
		echo "<div class='chat'><div class='chat-avatar'>
            <a class='avatar avatar-online' data-toggle='tooltip' href='#' data-placement='right' title='' data-original-title='June Lane'>
              <img src='Avatar/$in_avt' alt='avt'>
              <i></i>
            </a>
          </div>";
    echo  "<div class='chat-body'>
            <div class='chat-content'>
              <p>{$result['msg']}</p><time class='chat-time' datetime='2015-07-01T11:37'>".date("F j, Y g:i a",strtotime('+5 hours +30 minutes', strtotime($result["ch_timestamp"])))."</time>
            </div>
          </div>
        </div>";
		}
		else
		{
			 echo "<div class='chat chat-left'>
          <div class='chat-avatar'>
            <a class='avatar avatar-online' data-toggle='tooltip' href='#' data-placement='left' title='' data-original-title='Edward Fletcher'>";
              echo "<img src='Avatar/$out_avt' alt='...'><i></i>
            </a>
          </div>
          <div class='chat-body'>
            <div class='chat-content'>
              <p>{$result['msg']}</p>
              <time class='chat-time' datetime='2015-07-01T11:39'>".date("F j, Y g:i a",strtotime('+5 hours +30 minutes', strtotime(($result['ch_timestamp']))))."</time>
            </div>
          </div>
        </div>";
		}
	}
	}
	else{
		echo "You havent started conversation yet!start now by sending HI";
		}
?>