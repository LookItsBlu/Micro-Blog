$('document').ready(function(){
	$('.show-more').on('click', function(e){
		e.preventDefault();
		$.ajax({
			context: this,
			type: 'GET',
			url: 'php/expandmessage.php',
			data: {id: $(this).attr('data-id')},
			success: function(data){
				$(this).parent()[0].innerHTML = JSON.parse(data)[0];
			}
		});
	});
});
