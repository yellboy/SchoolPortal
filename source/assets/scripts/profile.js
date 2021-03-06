$(function(){	
	
	var $photo;
	var $selectedCourseId;

	function fillDropdown() {
		var $courseSelect = $('#course-select');
		$courseSelect.html('');
		for (var i = 0; i < $other.length; i++) {
			$courseSelect.append('<option value=' + $other[i].Id + '>' + $other[i].CourseName + '</option>');
		}
		$selectedCourseId = $other[0].Id;
		
		
	}
	
	function fillTable() {
		var $body =  $('#table-teaching').find('tbody');
		$body.html('');
		for (var i = 0; i < $teaching.length; i++) {
			var innerHtml = '<td>' + $teaching[i].CourseName + '</td>';
			if ($isAdministrator) {
				innerHtml += '<td class="container-fluid"><button class="btn btn-danger remove-course" data-course-id="' + $teaching[i].Id + '">Уклони</button></td>';
			}
			$body.append('<tr>' + innerHtml + '</tr>');
		}
	}
	
	fillDropdown();
	fillTable();
	
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
				jQuery.noConflict(); // Has to be added in order to access the modal
				$('#photo_modal').modal('hide');
				$('#userfile').val('');
				$('#user-image').attr('src', $photo);
			},
			error: function() {
				toastr.error(ST.ErrorChangingPhoto);
			}
		});
	});
	
	$('#open-photo-modal').on('click', function() {
		$('#temp-photo').attr('src', $('#user-image').attr('src'));
	});
	
	$('#add-course').on('click', function() {
		var course;
		for (var i = 0; i < $other.length; i++) {
			if ($other[i].Id == $selectedCourseId) {
				course = $other[i];
				break;
			}
		}
		
		var $id = $(this).attr('data-user-id');
		
		$.ajax ({
			type: 'post',
			url:  '/UserProfileController/AddCourseToUser',
			dataType: 'json',
			data: {
				'courseId': $selectedCourseId,
				'userId': $id
			},
			success: function() {
				$teaching.push(course);
				$teaching.sort(sortById);
				$other.splice($.inArray(course, $other), 1);
				fillDropdown();
				fillTable();
				toastr.success(ST.CourseAddedToUser);
			}, 
			error: function() {
				toastr.error(ST.CouldNotAddCourse);
			}
		});
	});
	
	$('#course-select').change( function() {
		$selectedCourseId  = $(this).val();
	});
	
	// Click event must be bound to some non-dynamic element.
	$('table').on('click', '.remove-course', function() {
		var $courseId = $(this).attr('data-course-id');
		var $userId = $('#table-teaching').attr('data-user-id');
		var course;
		for (var i = 0; i < $teaching.length; i++) {
			if ($teaching[i].Id === $courseId) {
				course = $teaching[i];
				break;
			}
		}
		
		$.ajax({
			type: 'post',
			url: '/UserProfileController/RemoveCourseFromUser',
			dataType: 'json',
			data: {
				'userId': $userId,
				'courseId': $courseId
			},
			success: function() {
				$other.push(course);
				$other.sort(sortById);
				$teaching.splice($.inArray(course, $teaching), 1);
				fillDropdown();
				fillTable();
				toastr.success(ST.CourseRemovedFromUser);
			},
			error: function() {
				toastr.error(ST.CouldNotRemoveCourse);
			}
		});
	});
	
	function sortById(a, b) {
		var aId = a.Id;
		var bId = b.Id; 
		return ((aId < bId) ? -1 : ((aId > bId) ? 1 : 0));
	}
	
});