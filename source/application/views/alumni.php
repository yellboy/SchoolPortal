<?php $confirm_delete_alumni = base_url()."assets/scripts/confirm_delete_alumni.js"; ?>
<script src="<?php echo $confirm_delete_alumni; ?>"> </script>

<div class="container-fluid" align="left">

	<form class="form-group row" name="add-to-alumni-form">
		<div id="target" class="col-md-5">
			<h3 class="form-title">Алумнисти</h3>
		</div>
	</form>
	
	<table border="1" style="width:100%" class="table-striped">
		<tr>
			<th class="container-fluid"><b>Име</b></th>
			<th class="container-fluid"><b>Презиме</b></th>
			<th class="container-fluid"><b>е-пошта</b></th>																	
			<?php if (isset($isLogged) && $isLogged) { ?>
				<th class="container-fluid"><b>&nbsp</b></th>
			<?php } ?>
		</tr>
		<?php 
			foreach ($alumnus as $alumni)
			{
		?>
		<tr data-id="<?php echo $alumni->Id ?>" class="filterable">
			<td class="container-fluid"><?php echo $alumni->FirstName?></td>
			<td class="container-fluid"><?php echo $alumni->LastName?></td>
			<td class="container-fluid"><?php echo $alumni->Email?></td>
			<?php if (isset($isLogged) && $isLogged)
			{
			?>
			<td class="container-fluid">
				<div class="container-fluid" align="center">
					<button type="submit" class="btn btn-danger delete-button" data-toggle="modal" data-target="#confirm_delete_alumni">Обриши</button>
				</div>
			</td>
			<?php
			}
			?>
		</tr>
		<?php 
			}
		?>
	</table>
	
	<?php if (isset($isLogged) && $isLogged) { ?>
		<?php $this->load->view('confirm_delete_alumni');?>
	<?php } ?>

</div>