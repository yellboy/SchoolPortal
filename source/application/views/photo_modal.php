<div class="modal fade" id="photo_modal" tabindex="-1" role="dialog" aria-labelledby="photo_label" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="photo_label">
					Промена слике
				</h4>
			</div>
			<div class="modal-body" align="center">
				<img id="temp-photo" class="img-circle" style="width:200px;">
				<div>
					<input type="file" id="userfile" class="form-control" accept="image/*">
				</div>
			</div>
			<div class="modal-footer" class="container-fluid" align="center">
				<button id="change-photo" type="button" class="btn btn-default" data-attr="<?php echo $shownUser->Id ?>"> 
					У реду
				</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					Одустани
				</button>
			</div>
		</div>
	</div>
</div>