<?php $userspage = base_url()."assets/scripts/userspage.js"; ?>
<script> 
	var $users = <?php echo json_encode($users); ?> 
</script>
<script src="<?php echo $userspage; ?>"> </script>
<div class="container-fluid" align="left">
	<div class="login form-inline" style="margin-bottom:5px; margin-top:5px">
		<div  class="form-group">
			<h2>Нови корисник</h2>
			<input type="text" class="form-control" placeholder="Корисничко име" id="new-user-username"/>
			<input type="checkbox" id="is-admod-checkbox">Адмод?</input>
			<div style="margin-top:5px">
				<button id="add-user" type="button" class="btn btn-danger">Додај</button>
			</div>
		</div>
	</div>
	<h2>Постојећи корисници</h2>
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
