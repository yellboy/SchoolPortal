
<?php echo form_open('verifyLoginController', array('class' => 'login input-group')); ?>
	<div class="form-tittle"> <h1> Улогујте се </h1> </div>

	<div class="row">
		<div class="col-md-2">
			<label for="username" class="margin-t5">Корисничко име:</label>
		</div>
		<div class="col-md-4">
			<input type="text" id="username" name="username" class="form-control" placeholder="Корисничко име"/>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<label for="password" class="margin-t5">Лозинка:</label>
		</div>
		<div class="col-md-4">
			<input type="password" id="password" name="password" class="form-control" placeholder="Лозинка"/>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1 col-md-push-2">
			<button type="submit" class="btn btn-danger">Улогуј ме</button>
		</div>
	</div>
</form>

<?php echo validation_errors(); ?>
