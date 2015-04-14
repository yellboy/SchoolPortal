<form class="form-group row" name="add-to-alumni-form">
	<div class="col-md-5">
		<h3 class="form-title">Пријава на алумни листу</h3>
		<input type="text" class="form-control firstName" placeholder="Име" required>
		<input type="text" class="form-control lastName" placeholder="Презиме" required>
		<input type="text" class="form-control city" placeholder="Место становања" required>
		<input type="text" class="form-control state" placeholder="Држава" required>
		<input type="text" class="form-control email" placeholder="е-пошта" required>
		<input type="text" class="form-control year" placeholder="Година завршетка" 
		onkeypress="return event.charCode >= 48 && event.charCode <= 57;" required>
		<input id='gradeText' type="number" class="form-control grade" placeholder="Одељење" min="1" max="10"
			onkeypress="return event.charCode >= 48 && event.charCode <= 57;" required>
		<button id='submitBtn' type="submit" class="btn btn-danger add-alumni">Додај ме</button>
	</div>
</form>