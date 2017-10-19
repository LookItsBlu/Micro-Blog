$('document').ready(function(){
	$('.sendMsg').click(function(){
		$.ajax({
			type: 'POST',
			url: 'sendMsg.php',
			success: function(msg){
				console.log(msg);

				if(msg) {
					var dt = new Date();
					var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
					$('.messageList').append('<blockquote> <p>' + $('#message').value + '</p> <footer>???, ' . time . '</footer> </blockquote>');
				} else {
					alert("error when sending message, please try again at a later time");
				}
			}
		});
	});
});
