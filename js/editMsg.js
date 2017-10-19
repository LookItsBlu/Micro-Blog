$('document').ready(function(){
	$('.editBtn').on('click', function(){
		var blockquote = $(this).parent().parent();
		blockquote.prepend("<textarea>"+blockquote.find('p')[0].innerHTML+"</textarea> <input type='hidden' name='id'></input>");
	});
});
