
<?php echo validation_errors(); ?>
<?php echo form_open('verifyLoginController', array('class' => 'login input-group')); ?>

	<div class="form-tittle"> <h1> Улогујте се </h1> </div>
	<label for="username">Корисничко име:</label>
	<input type="text" size="20" id="username" name="username" class="form-control" placeholder="Корисничко име"/>
	<br />
	<label for="password">Лозинка:</label>
	<input type="password" size="20" id="password" name="password" class="form-control" placeholder="Лозинка"/>
	<br />
	<button type="submit" class="btn btn-danger">Улогуј ме</button>
</form>
