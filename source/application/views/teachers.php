<?php $teacherspage = base_url()."assets/scripts/teachers.js"; ?>
<script src=<?php echo $teacherspage?>></script>
<div class="container-fluid" align="left">
	<div class="row">
		<div class="col-md-4">
			<div class="form-tittle"> <h4> Наставници </h4> </div>
		</div>
	</div>
	
	<div class="teachers-custom-table" id="teachers-table">
		<table border="1" style="width:95%">
			<tr>
				<th><input type="text" class="form-control filter" placeholder="Корисничко име"/> </th>
				<th><input type="text" class="form-control filter" placeholder="Име"/></th>
				<th><input type="text" class="form-control filter" placeholder="Презиме"/></th>
				<th><input type="text" class="form-control filter" placeholder="е-пошта"/></th>
			</tr>
			<?php 
				foreach ($teachers as $teacher)
				{
			?>
			<tr class="filterable">
				<td><a href="<?php echo ResolveRoute(ContentPageCodes::UserProfile, $teacher->Id) ?>" class="text-muted"><?php echo $teacher->UserName ?></a></td>
				<td><?php echo $teacher->FirstName ?></td>
				<td><?php echo $teacher->LastName ?></td>
				<td><?php echo $teacher->Email ?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>
</div>
