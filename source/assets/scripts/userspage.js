$(function() {
	
	var $table = $('#users-table');
	
	function fillTable() {
		var $body = $table.find('tbody');
		$body.html('');
		for (var i = 0; i < $users.length; i++) {
			$body.append(
				'<tr data-id="' +  $users[i].Id + '" class="filterable">' + 
					'<td class="container-fluid">' + $users[i].UserName + '</td>' +
					'<td class="container-fluid">' + $users[i].FirstName + '</td>' +
					'<td class="container-fluid">' + $users[i].LastName + '</td>' +
					'<td class="container-fluid">' + $users[i].Email + '</td>' + 
					'<td class="container-fluid">' +  
						'<div align="center">' +
							'<a type="submit" class="btn btn-danger change-button">Измени</a>' +
						'</div>' + 
					'</td>' +	
					'<td class="container-fluid">' + 
						'<div class="container-fluid" align="center">' +
							'<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#confirm_modal">Обриши</button>' +
						'</div>' +
					'</td>' + 
				'</tr>'
			);
		}
	}
	
	fillTable();
	
	$('.filter').on('keyup', function(e) {
		// Ignore tab key
		var code = e.keyCode || e.which;
        if (code == '9') return;
		
		var $input = $(this);
		var inputContent = $input.val();
		var column = $table.find('th').index($input.parents('th'));
        var $rows = $table.find('.filterable');
		
		// Find rows that not fit to search criteria
		var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
		
		$rows.show();
		$filteredRows.hide();
		
	});
	
	
	// Click event must be bound to some non-dynamic element.
	$table.on('click', '.change-button', function(e){
		var id = $(this).parents('tr').attr('data-id');
		window.location.href = 'профил-корисника/' + id;
	});
	
	$('#add-user').on('click', function(e) {
		var username = $('#new-user-username').val();
		if (username != null && username != '') {
			$.ajax({
				type: 'post',
				url: '/UsersController/AddNewUser',
				dataType: 'json',
				data: {
					'username': username
				},
				success: function(data) {
					$users.push(data);
					fillTable();
					toastr.success(data.UserName);
				}, 
				error: function() {
					toastr.error(ST.CouldNotCreateUser);
				}
			});
		} else {
			toastr.error(ST.UserNameMissing);
		}
	});
	
});