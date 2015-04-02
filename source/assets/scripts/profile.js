$(function(){
	$('#save-changes').on('click', function() {
		var $id = $(this).attr('data-id');
		var $userName = $(this).attr('data-username');
		var $firstName = $(this).parents('#root-div').find('#firstname-input').val();
		var $lastName = $(this).parents('#root-div').find('#lastname-input').val();
		var $email = $(this).parents('#root-div').find('#email-input').val();
		var $about = $(this).parents('#root-div').find('#about-input').val();
		
		$.ajax({
			type: 'POST',
			url: '/UserProfileController/SaveUserData',
			dataType: 'json',
			data: {
				'id': $id,
				'userName': $userName,
				'firstName': $firstName,
				'lastName': $lastName,
				'email': $email,
				'about': $about
			},
			success: function() {
				toastr.success(ST.SaveSuccess);
			},
			error: function() {
				toastr.error(ST.SaveError);
			}
			
		})
		
	});
});