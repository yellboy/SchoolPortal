<?php $profile = base_url()."/assets/scripts/profile.js" ?>
<script> 
	var $teaching = <?php echo json_encode($teaching); ?>;
	var $other = <?php echo json_encode($other); ?>;
	var $isAdministrator = <?php echo $isAdministrator; ?>;
</script>
<script src="<?php echo $profile ?>"></script>
<div id="root-div">
	<div class="container-fluid" align="center">
		<div class="form-title" align="center"><h2><?php echo $shownUser->UserName?></h2></div>
		<div class="col-md-4">
			<div>
				<img id="user-image" class="img-circle" style="width:200px" src="<?php echo $shownUser->Photo ?>">
			</div>
			<?php
				if (IsAdministrator() || ($shownUser->Id == $id))
				{
			?>
			<div id="open-photo-modal" class="btn btn-danger" data-toggle="modal" style="margin-top: 5px" data-target="#photo_modal">Промени слику</div>
			<?php
				}
			?>
		</div>
		<div class="col-md-5 form-group">
			<input type="text" id="firstname-input" class="form-control" placeholder="Име" value="<?php echo $shownUser->FirstName ?>" <?php if (!IsAdministrator() && !($shownUser->Id == $id)) {?> readonly <?php } ?>>
			<input type="text" id="lastname-input" class="form-control" placeholder="Презиме" value="<?php echo $shownUser->LastName ?>" <?php if (!IsAdministrator() && !($shownUser->Id == $id)) {?> readonly <?php } ?>>
			<input type="text" id="email-input"class="form-control" placeholder="е-пошта" value="<?php echo $shownUser->Email ?>" <?php if (!IsAdministrator() && !($shownUser->Id == $id)) {?> readonly <?php } ?>>
			<textarea id="about-input" class="form-control" rows="5" placeholder="О кориснику..." style="resize: none" <?php if (!IsAdministrator() && !($shownUser->Id == $id)) {?> readonly <?php } ?>>
				<?php echo $shownUser->About ?>
			</textarea>
		</div>
		<?php 
			if (IsAdministrator() || ($shownUser->Id == $id))
			{
		?>
		<div class="col-md-1" align="center">
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#password_modal">Промени лозинку</button>
		</div>
		<?php
			}
		?>
	</div>
	<?php 
		if (IsAdministrator() || ($shownUser->Id == $id))
		{
	?>
			<div align="center" style="margin-bottom: 2px">
				<button id="save-changes" data-id="<?php echo $shownUser->Id ?>" data-username="<?php echo $shownUser->UserName ?>" type="button" class="btn btn-danger">Сачувај измене</button>
			</div>
	<?php
		}
	?>
	<br>
	<?php 
		if (IsAdministrator())
		{
	?>
			<table class="table-stripped" style="width:40%">
			<tbody>
				<tr>
					<td>
					<select id="course-select" class="form-control" style="width:95%">
					</select>
					</td>
					<td>
					<button type="button" class="btn btn-danger" id="add-course" data-user-id="<?php echo $shownUser->Id; ?>">Додај предмет</button>
					</td>
				</tr>
			</tbody>
			</table>
	<?php
		}
	?>
	<div>
		<div>
			<h4>Предмети наставника	<?php echo $shownUser->UserName ?></h2>
		</div>
		<table id="table-teaching" style="width:40%" data-user-id="<?php echo $shownUser->Id ?>">
			<tbody></tbody>
		</table>
	</div>
	<?php $this->load->view('password_modal'); ?>
	<?php $this->load->view('photo_modal'); ?>
</div>