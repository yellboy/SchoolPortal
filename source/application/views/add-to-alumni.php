
<form class="form-group" name="add-to-alumni-form" onsubmit="return validateForm()" method="post">
	<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
	<div class="add-to-alumnus">
		<div class="row">
			<div class="col-md-5">
				<h3 class="form-title">Пријава на алумни листу</h3>
			</div>
		</div>
		<div class="row"></div>
		<div class="row">
			<div class="col-md-4">
				<input type="text" class="form-control firstName" placeholder="Име" required>
			</div>
			<div class="col-md-4">
			<input type="text" class="form-control lastName" placeholder="Презиме" required>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="text" class="form-control city" placeholder="Место становања" required>
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control state" placeholder="Држава" required>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<input type="text" class="form-control email" placeholder="е-пошта" required>
			</div>
			<div class="col-md-4">
				<input type="text" class="form-control year" placeholder="Година завршетка" onkeypress="return event.charCode >= 48 && event.charCode <= 57;" required>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<input id='gradeText' type="number" class="form-control grade" placeholder="Одељење" min="1" max="10" onkeypress="return event.charCode >= 48 && event.charCode <= 57;" required>
			</div>
		</div>
		<div class="row"></div>
		<div class="row">
			<div class="col-md-4">
				<button id='submitBtn' type="submit" class="btn btn-danger add-alumni">Додај ме</button>
			</div>
		</div>
	</div>


</form>