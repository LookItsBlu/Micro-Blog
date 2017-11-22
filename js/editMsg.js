$('document').ready(function(){
	//initialize isEditing variable to 0;
	var isEditing = [];
	$('blockquote').each(function(i,el) {
		isEditing[i] = false;
	});


	$('.editBtn').on('click', function(){
		var blockquote = $(this).parent().parent();

		if(isEditing[blockquote.index()] == true) {

			//remove the editing form and display the quote
			blockquote.prepend('<p>'+blockquote.find('textarea')[0].value+'</p>');
			blockquote.children('form').remove();

			//change blue button into edit button
			$(this).children('i').removeClass('fa-times').addClass('fa-pencil');
			isEditing[blockquote.index()] = false;

		} else {

			//remove the quote and display the editing form
			blockquote.prepend("<form class='msgediting' method='POST' action='php/updateMsg.php?action=edit'><textarea name='msg'>"+blockquote.find('p')[0].innerHTML+"</textarea><input type='hidden' class='msgid' name='id'></input><button type='submit' class='btn btn-sm btn-success'><i class='fa fa-check'></i></button></form>");
			$(blockquote).find('.msgid')[0].value = blockquote.index()+1;
			blockquote.children('p').remove();

			//change blue button into cancel edit button
			$(this).children('i').removeClass('fa-pencil').addClass('fa-times');
			isEditing[blockquote.index()] = true;

		}
	});
});
