<?php $profile = base_url()."/assets/scripts/profile.js" ?>
<script src="<?php echo $profile ?>"></script>
<div id="root-div">
	<div class="container-fluid" align="center">
		<div class="form-title" align="center"><h2><?php echo $shownUser->UserName?></h2></div>
		<div class="col-md-4">
			<div>
				<img id="user-image" class="img-circle" style="width:200px" src="<?php echo $shownUser->Photo ?>">
			</div>
			<div class="btn btn-danger" data-toggle="modal" style="margin-top: 5px" data-target="#photo_modal">Промени слику</div>
		</div>
		<div class="col-md-5 form-group">
			<input type="text" id="firstname-input" class="form-control" placeholder="Име" value="<?php echo $shownUser->FirstName ?>">
			<input type="text" id="lastname-input" class="form-control" placeholder="Презиме" value="<?php echo $shownUser->LastName ?>">
			<input type="text" id="email-input"class="form-control" placeholder="е-пошта" value="<?php echo $shownUser->Email ?>">
			<input type="text" id="courses-input" class="form-control" placeholder="Предмети" value="Математика">
			<textarea id="about-input" class="form-control" rows="5" placeholder="О кориснику..." style="resize: none"><?php echo $shownUser->About ?>
			</textarea>
		</div>
		<div class="col-md-1" align="center">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#password_modal">Промени лозинку</button>
		</div>
	</div>
	<div align="center" style="margin-bottom: 2px">
		<button id="save-changes" data-id="<?php echo $shownUser->Id ?>" data-username="<?php echo $shownUser->UserName ?>" 
			type="button" class="btn btn-danger">Сачувај измене</button>
	</div>
	<?php $this->load->view('password_modal'); ?>
	<?php $this->load->view('photo_modal'); ?>
</div>