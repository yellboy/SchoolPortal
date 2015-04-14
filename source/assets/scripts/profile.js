$(function(){
	
	var $photo;
	
	var $courseSelect = $('#course-select');
	for (var i = 0; i < $other.length; i++) {
		$courseSelect.append('<option data-attr=' + $other[i].Id + '>' + $other[i].CourseName + '</option>');
	}
	
	var $body =  $('#table-teaching').find('tbody');
	for (var i = 0; i < $teaching.length; i++) {
		$body.append($('<tr>')).append($('<td>')).append($teaching[i].CourseName)
		.append($('<td class="container-fluid">')).append('<button class="btn btn-danger remove-button" data-attr="' + $teaching[i].Id + '">Уклони</button>');
		
	}
	
	$('#save-changes').on('click', function(event) {
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
			
		});
		
	});
	
	$('#save-password').on('click', function(event) {
		
		var EMPTY_STRING = "";
		
		var $id = $(this).attr('data-id');
		var $oldPassword = $('#old-password').val();
		var $newPassword = $('#new-password').val();
		var $repeatPassword = $('#repeat-password').val();
		if ($oldPassword === EMPTY_STRING || $newPassword === EMPTY_STRING || $repeatPassword === EMPTY_STRING) {
			toastr.error(ST.FieldMissing);
			return;
		}
		if ($newPassword === $repeatPassword) {
			$.ajax({
				type: 'post',
				url: '/UserProfileController/ChangePassword',
				dataType: 'json',
				data: {
					'id': $id,
					'oldPassword': $oldPassword,
					'newPassword': $newPassword
				},
				success: function() {
					toastr.success(ST.PasswordChanged);
					$('#old-password').val('');
					$('#new-password').val('');
					$('#repeat-password').val('');
					$('#password_modal').modal('hide');
				},
				error: function() {
					toastr.error(ST.WrongPassword);
				}
			});
		} else {
			toastr.error(ST.PasswordsMissmatch);
		}
	});
	
	function readImage(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$photo = e.target.result;
				$('#temp-photo').attr('src', $photo );
				
				
			};       
			reader.readAsDataURL( input.files[0] );
		}
	}
	
	$('#userfile').change(function() {
		readImage(this);
	});

	$('#change-photo').on('click', function() {
		var $id = $(this).attr('data-attr');
		$.ajax ({
			type: 'post',
			url: '/UserProfileController/ChangePhoto',
			dataType: 'json',
			data: {
				'id': $id,
				'photo': $photo
			},
			success: function() {
				toastr.success(ST.PhotoChanged);
				$('#photo_modal').modal('hide');
				$('#userfile').val('');
				$('#user-image').attr('src', $photo);
			},
			error: function() {
				toastr.error(ST.ErrorChangingPhoto);
			}
		});
	});
	
	$('#photo_modal').on('shown.bs.modal', function() {
		$('#temp-photo').attr('src', $('#user-image').attr('src'));
	});
	
});