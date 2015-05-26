<?php $userspage = base_url()."assets/scripts/userspage.js"; ?>
<script> 
	var $users = <?php echo json_encode($users); ?> 
</script>
<script src="<?php echo $userspage; ?>"> </script>
<div class="container-fluid" align="left">
	<div class="login form-inline" style="margin-bottom:5px; margin-top:5px">
		<div  class="form-group">
			<span>Нови корисник</span>
			<input type="text" class="form-control" placeholder="Корисничко име" id="new-user-username"/>
			<button id="add-user" type="button" class="btn btn-danger">Додај</button>
		</div>
	</div>
	<table id="users-table" border="1" style="width:100%" class="table-striped">
		<thead>
			<tr>
				<th><input type="text" class="form-control filter" placeholder="Корисничко име"/> </th>
				<th><input type="text" class="form-control filter" placeholder="Име"/></th>
				<th><input type="text" class="form-control filter" placeholder="Презиме"/></th>
				<th><input type="text" class="form-control filter" placeholder="е-пошта"/></th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	
	<?php $this->load->view('confirm_modal');?>
</div>
