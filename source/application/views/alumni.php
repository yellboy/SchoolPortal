<?php $confirm_delete_alumni = base_url()."assets/scripts/confirm_delete_alumni.js"; ?>
<script src="<?php echo $confirm_delete_alumni; ?>"> </script>

<div class="container-fluid alumni-context">

	<div class="row">
		<div class="col-md-5"><h3 class="form-title">Алумнисти</h3></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table width="95%">
				<tr>
					<th class="container-fluid"><b>Име</b></th>
					<th class="container-fluid"><b>Презиме</b></th>
					<th class="container-fluid"><b>E-пошта</b></th>
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
		</div>
	</div>
	
	<?php if (isset($isLogged) && $isLogged) { ?>
		<?php $this->load->view('confirm_delete_alumni');?>
	<?php } ?>

</div>