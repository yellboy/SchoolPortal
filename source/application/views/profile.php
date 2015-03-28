<div>
	<div class="container-fluid" align="center">
		<div class="form-title" align="center"><h2>года</h2></div>
		<div class="col-md-4">
			<div>
				<img class="img-circle" style="width:200px" src="https://cdn0.iconfinder.com/data/icons/people-groups/512/User_Female-512.png">
			</div>
			<div class="btn btn-danger" data-toggle="modal" data-target="#photo_modal">Промени слику</div>
		</div>
		<div class="col-md-5 form-group">
			<input type="text" class="form-control" placeholder="Име" value="<?php echo $user->FirstName ?>">
			<input type="text" class="form-control" placeholder="Презиме" value="<?php echo $user->LastName ?>">
			<input type="text" class="form-control" placeholder="е-пошта" value="<?php echo $user->Email ?>">
			<input type="text" class="form-control" placeholder="Предмети" value="Математика">
			<textarea class="form-control" rows="5" placeholder="О кориснику..." style="resize: none"><?php echo $user->About ?>
			</textarea>
		</div>
		<div class="col-md-1" align="center">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#password_modal">Промени лозинку</button>
		</div>
	</div>
	<div align="center" style="margin-bottom: 2px">
		<button type="button" class="btn btn-danger">Сачувај измене</button>
	</div>
	<?php $this->load->view('password_modal'); ?>
	<?php $this->load->view('photo_modal'); ?>
</div>