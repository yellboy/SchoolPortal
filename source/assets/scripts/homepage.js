$(function () {
	setTimeout(function () {
		$('.carousel a.right').click();
	}, 4000)

	$('.auth-only').hide(); // TEMP

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
			window.location.assign('/search/' + $text.trim());
		}
	});

	$('body').on('click', '.prevent', function (e) {
		e.stopPropagation();
		e.preventDefault();
	});

});