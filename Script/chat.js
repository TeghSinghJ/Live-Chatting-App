	(function worker() {
  $.get('fetch_chat.php', function(data) {
    // Now that we've completed the request schedule the next one.
    $('.msger-chat').html(data);
    setTimeout(worker, 5000);
	$('.msger-chat').animate({scrollTop: $('.msger-chat').prop("scrollHeight")}, 500);
  });
})();
            $(document).on("click", "#save", function () {
                //get value of message 
                var message = $("#msger-input").val();
                //check if value is not empty
            
                //Ajax call to send data to the insert.php
                $.ajax({
                    type: "POST",
                    url: "insert_message.php",
                    data: {message: message},
                    cache: false,
                    success: function (data) {
                        //Insert data before the message wrap div
                        //Clear the textarea message
                        $(document).ready(function(){
			$.ajax({
		url: "fetch_chat.php",
		type: "POST",
		cache: false,
		success: function(data){
		$(".msger-chat").html(data); 
		$('.msger-chat').animate({scrollTop: $('.msger-chat').prop("scrollHeight")}, 500);
		}
	});
	});					
                    }
                });
            });
			