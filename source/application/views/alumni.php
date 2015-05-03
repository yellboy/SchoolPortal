<?php $confirm_delete_alumni = base_url()."assets/scripts/confirm_delete_alumni.js"; ?>
<script> 
	var $alumnus = <?php echo json_encode($alumnus); ?> 
	var $isLogged = <?php echo json_encode($isLogged); ?> 
</script>
<script src="<?php echo $confirm_delete_alumni; ?>"> </script>

<div class="container-fluid" align="left">

	<form class="form-group row" name="add-to-alumni-form">
		<div id="target" class="col-md-5">
			<h3 class="form-title">Алумнисти</h3>
		</div>
	</form>
	
	<table id="alumnus-table" border="1" style="width:100%" class="table-striped">
		<thead>
			<tr>
				<th class="container-fluid"><b>Име</b></th>
				<th class="container-fluid"><b>Презиме</b></th>
				<th class="container-fluid"><b>е-пошта</b></th>																	
				<?php if (isset($isLogged) && $isLogged) { ?>
					<th class="container-fluid"><b>&nbsp</b></th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	
	<?php if (isset($isLogged) && $isLogged) { ?>
		<?php $this->load->view('confirm_delete_alumni');?>
	<?php } ?>

</div>