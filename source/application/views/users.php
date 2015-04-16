<?php $userspage = base_url()."assets/scripts/userspage.js"; ?>
<script src="<?php echo $userspage; ?>"> </script>
<div class="container-fluid" align="left">
	<form class="login input-group row">
		<div>
			<div>
				<a href="/" class="text-muted">Повратак на главну страницу</a>
				<br>
				<a href="<?php echo ResolveRoute(ContentPageCodes::Register) ?>" class="text-muted">Регистрација</a>
			</div>
		</div>
	</form>
	<table id="users-table" border="1" style="width:100%" class="table-striped">
		<tr>
			<th><input type="text" class="form-control filter" placeholder="Корисничко име"/> </th>
			<th><input type="text" class="form-control filter" placeholder="Име"/></th>
			<th><input type="text" class="form-control filter" placeholder="Презиме"/></th>
			<th><input type="text" class="form-control filter" placeholder="е-пошта"/></th>
			<!-- <th><input type="text" class="form-control filter" placeholder="Предмети"/> </th> -->
			<th class="container-fluid"><b>&nbsp</b></th>
			<th class="container-fluid"><b>&nbsp</b></th>
		</tr>
		<tbody>
			<?php 
				foreach ($users as $user)
				{
			?>
			<tr data-id="<?php echo $user->Id ?>" class="filterable">
				<td class="container-fluid"><?php echo $user->UserName?></td>
				<td class="container-fluid"><?php echo $user->FirstName?></td>
				<td class="container-fluid"><?php echo $user->LastName?></td>
				<td class="container-fluid"><?php echo $user->Email?></td>
				<td class="container-fluid">
					<div align="center">
						<a type="submit" class="btn btn-danger change-button">Измени</a>
					</div>
				</td>
				<td class="container-fluid">
					<div class="container-fluid" align="center">
						<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#confirm_modal">Обриши</button>
					</div>
				</td>
			</tr>
			<?php 
				}
			?>
		</tbody>
	</table>
	
	<?php $this->load->view('confirm_modal');?>
</div>
