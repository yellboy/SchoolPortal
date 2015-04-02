$(function() {
	
	var $table = $('#users-table');
	
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
	
	$('.change-button').on('click', function(e){
		var id = $(this).parents('tr').attr('data-id');
		window.location.href = 'profile/' + id;
	});
	
});