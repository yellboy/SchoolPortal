$(function() {
	
	saveId: null
	
	$('.delete-button').on('click', function(e)
	{
		console.log("Brisanje");
		saveId = $(this).parents('tr').attr('data-id');
	});
	
	$('.yes-button').on('click', function(e)
	{
		console.log("Stisnuo Da");
		console.log(saveId);

		$.ajax({
					type: 'POST',
					url: '/alumniController/DeleteAlumni',
					data: {id: saveId },
					dataType: 'json'
				});
		//NE RADI OSVEZAVANJE PROZORA
				
		var currentdate = new Date();
		var datetime = "Last Sync: " + currentdate.getDay() + "/"+currentdate.getMonth() 
		+ "/" + currentdate.getFullYear() + " @ " 
		+ currentdate.getHours() + ":" 
		+ currentdate.getMinutes() + ":" + currentdate.getSeconds();


		window.location = location.href + '?upd=' + datetime;
		location.reload(true);
	});

});