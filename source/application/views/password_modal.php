<div class="modal fade" id="password_modal" tabindex="-1" role="dialog" aria-labelledby="password_label" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="password_label">
					Промена лозинке
				</h4>
			</div>
			<div class="modal-body" align="center">
				<form name="change-password-form">
					<input type="password" id="old-password" class="form-control" placeholder="Стара лозинка" required>
					<input type="password" id="new-password"class="form-control" placeholder="Нова лозинка" required> 
					<input type="password" id="repeat-password"class="form-control" placeholder="Поновљена нова лозинка" required>
				</form>
			</div>
			<div class="modal-footer" class="container-fluid" align="center">
				<button id="save-password" type="submit" class="btn btn-default" data-id="<?php echo $shownUser->Id ?>">
					Сачувај
				</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					Одустани
				</button>
			</div>
		</div>
	</div>
</div>