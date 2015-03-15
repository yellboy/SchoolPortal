<form class="form-group row" name="add-to-alumni-form">
	<div class="col-md-5">
		<h3 class="form-title">Пријава на алумни листу</h3>
		<input type="text" class="form-control" placeholder="Име" required>
		<input type="text" class="form-control" placeholder="Презиме" required>
		<input type="text" class="form-control" placeholder="Место становања" required>
		<input type="text" class="form-control" placeholder="Држава" required>
		<input type="text" class="form-control" placeholder="е-пошта" required>
		<input type="text" class="form-control" placeholder="Година завршетка" 
		onkeypress="return event.charCode >= 48 && event.charCode <= 57;" required>
		<input type="number" class="form-control" placeholder="Одељење" min="1" max="10"
			onkeypress="return event.charCode >= 48 && event.charCode <= 57;" required>
		<button type="submit" class="btn btn-danger">Додај ме</button>
	</div>
</form>