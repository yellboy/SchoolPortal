<form class="form-group row" name="add-to-alumni-form">
	<div id="target" class="col-md-5">
		<h3 class="form-title">Алумнисти</h3>
	</div>
	
	
	
	<table border="1" style="width:100%" class="table-striped">
		
		<tr>
			<th class="container-fluid"><b>Име</b></th>
			<th class="container-fluid"><b>Презиме</b></th>
			<th class="container-fluid"><b>е-пошта</b></th>
		</tr>
		<?php 
			foreach ($alumnus as $alumni)
			{
		?>
		<tr>
			<td class="container-fluid"><?php echo $alumni->FirstName?></td>
			<td class="container-fluid"><?php echo $alumni->LastName?></td>
			<td class="container-fluid"><?php echo $alumni->Email?></td>
		</tr>
		<?php 
			}
		?>
	</table>
	
	
	
	
</form>
