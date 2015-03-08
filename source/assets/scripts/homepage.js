$(function() {
  	setTimeout(function(){
  		$('.carousel a.right').click();
  	}, 4000)

  	$('ul.level1 > li > div > a').on('click', function(e){
  		// prevent if there are no kids
  		e.stopPropagation();
		e.preventDefault();
  	});

  	$('.auth-only').hide(); // TEMP

});