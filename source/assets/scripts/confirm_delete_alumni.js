$(function() {
	
	saveId: null
	
	var $table = $('#alumnus-table');
	
	function fillTable() {	
	
		//console.log("Osvezio alumnije");
		
		var $body = $table.find('tbody');
		$body.html('');
		if($isLogged){
			for (var i = 0; i < $alumnus.length; i++) {
				if ($alumnus[i].IsDeleted != '1') {
					$body.append(
						'<tr data-id="' +  $alumnus[i].Id + '" class="filterable">' + 
							'<td class="container-fluid">' + $alumnus[i].FirstName + '</td>' +
							'<td class="container-fluid">' + $alumnus[i].LastName + '</td>' +
							'<td class="container-fluid">' + $alumnus[i].Email + '</td>' + 
							'<td class="container-fluid">' +
								'<div class="container-fluid" align="center">' +
									'<button type="submit" class="btn btn-danger delete-button" data-toggle="modal" data-target="#confirm_delete_alumni">Обриши</button>' +
								'</div>' +
							'</td>' +
						'</tr>'
					);
				}
			}
		}
		else{
			for (var i = 0; i < $alumnus.length; i++) {
				if ($alumnus[i].IsDeleted != '1') {
					$body.append(
						'<tr data-id="' +  $alumnus[i].Id + '" class="filterable">' + 
							'<td class="container-fluid">' + $alumnus[i].FirstName + '</td>' +
							'<td class="container-fluid">' + $alumnus[i].LastName + '</td>' +
							'<td class="container-fluid">' + $alumnus[i].Email + '</td>' + 
						'</tr>'
					);
				}
			}
		}
	}
	
	function reloadEvent() {	
		$('.delete-button').on('click', function(e)
		{
			console.log("Brisanje");
			saveId = $(this).parents('tr').attr('data-id');
		});
	}
	
	fillTable();
		
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
		
		//Osvezavanje prozora
		for (var i = 0; i < $alumnus.length; i++) {
					if ($alumnus[i].Id === saveId) {
						$alumnus[i].IsDeleted = '1';
						break;
					}
				}
		//console.log("Osvezavanje prozora");
		//fillTable();
		fillTable();
		reloadEvent();
	});

});