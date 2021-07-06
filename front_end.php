<?php
session_start();
?>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="styles.css" type="text/css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
<h3 class=" text-center">Messaging</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
		  
          <div class="inbox_chat">
            <div class="chat_list active_chat">
			<div id="msg-content"></div>
              </div>
              </div>
              </div>
           <div class="mesgs">
		   <center><img src="Images/logo.png" width="180px" height="180px"></center>
		   <h>Welcome to VITU</h2>
		   <p>Developed By</p>
		   <span>JUNI TEGH SINGH</span>
		   </div>
     
    </body>
	<script>
	$.ajax({
		url: "retrieve_user.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#msg-content').html(data); 
		}
	});
</script>
    </html>