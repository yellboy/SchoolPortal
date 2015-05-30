$(function() {
	
	var hidden = true;
	
	$('#materials-list').hide();
	$('#toggle-materials').text(ST.ShowMaterials);
	
	$('#toggle-materials').on('click', function() {
		if (hidden  === true) {
			$('#materials-list').show();
			$('#toggle-materials').text(ST.HideMaterials);
			hidden = false;
		} else {
			$('#materials-list').hide();
			$('#toggle-materials').text(ST.ShowMaterials);
			hidden = true;
		}
	});
});