$(function () {
	setTimeout(function () {
		$('.carousel a.right').click();
	}, 4000);

	if (SPV && SPV.pageHierarchyId) {
		var root = SPV.pageHierarchyId.split('.')[1];
		if (root) {
			$('nav .level1 > li > div > a[id=' + root + ']').addClass('selected');
		}
	}

	$('body').on('click', '#searchbox #submit', function (e) {
		e.stopPropagation();
		e.preventDefault();
		var $text = $('#searchbox #search').val();
		if ($text && $text.trim() != '') {
			var text = $text.trim();
			text = text.replace('<', 'lt');
			window.location.assign(ST.SearchRoute + text);
		}
	});

	$('body').on('click', '.prevent', function (e) {
		e.stopPropagation();
		e.preventDefault();
	});

	$('#materials-list').hide();
	$('#toggle-materials').text(ST.ShowMaterials);

	// news.js:
	var hidden = true;

	$('#toggle-materials').on('click', function () {
		if (hidden === true) {
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