$.ajax({
		url: "fetch_my_friends.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#fetch-my-friends').html(data); 
		}
	});
    $.ajax({
		url: "view_user.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#fetch-all-users').html(data); 
		}
	});
    $.ajax({
		url: "view-chats.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#fetch-my-recent-chats').html(data); 
		}
	});
	$.ajax({
		url: "friend_request_count.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#fetch-requests-count').html(data); 
		}
	});
    $.ajax({
		url: "fetch_all_contacts.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#all-contacts').html(data); 
		}
	});
    $.ajax({
		url: "get_friend_request.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#friend-request').html(data); 
		}
	});
    $.ajax({
		url: "fetch_my_contacts.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#my-contact-friends').html(data); 
		}
	});
    $.ajax({
		url: "sent_request.php",
		type: "POST",
		cache: false,
		success: function(data){
			$('#request-sent').html(data); 
		}
	});
    