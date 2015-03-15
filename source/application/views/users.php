<div class="container-fluid" align="left">
	<form class="login input-group row">
		<div class="col-md-4">
			<div class="form-tittle"> <h4> Претрага корисника </h4> </div>
			<input type="text" class="form-control" placeholder="Корисничко име"/> 
			<input type="text" class="form-control" placeholder="Име"/>
			<input type="text" class="form-control" placeholder="Презиме"/>
			<input type="text" class="form-control" placeholder="е-пошта"/>
			<input type="text" class="form-control" placeholder="Предмети"/>
			<div>
				<a href="/default_controller" class="text-muted">Повратак на главну страницу</a>
				<br>
				<a href="/administration/register" class="text-muted">Регистрација</a>
			</div>
		</div>
	</form>
	<table border="1" style="width:100%" class="table-striped">
		<tr>
			<th class="container-fluid"><b>Корисничко име</b></th>
			<th class="container-fluid"><b>Име</b></th>
			<th class="container-fluid"><b>Презиме</b></th>
			<th class="container-fluid"><b>е-пошта</b></th>
			<th class="container-fluid"><b>Предмети</b></th>
			<th class="container-fluid"><b>&nbsp</b></th>
			<th class="container-fluid"><b>&nbsp</b></th>
		</tr>
		<tr>
			<td class="container-fluid">года</td>
			<td class="container-fluid">Гордана</td>
			<td class="container-fluid">Давидовић</td>
			<td class="container-fluid">gdavidovic@yahoo.com</td>
			<td class="container-fluid">Математика</td>
			<td class="container-fluid">
				<div align="center">
					<a type="submit" class="btn btn-danger" href="/administration/profile">Измени</a>
				</div>
			</td>
			<td class="container-fluid">
				<div class="container-fluid" align="center">
					<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#confirm_modal">Обриши</button>
				</div>
			</td>
		</tr>
		<tr>
			<td class="container-fluid">дијо</td>
			<td class="container-fluid">Дивна</td>
			<td class="container-fluid">Јовановић</td>
			<td class="container-fluid">divna@yahoo.com</td>
			<td class="container-fluid">Физика</td>
			<td class="container-fluid">
				<div class="container-fluied" align="center">
					<a type="submit" class="btn btn-danger" href="/administration/profile">Измени</a>
				</div>
			</td>
			<td class="container-fluid">
				<div class="container-fluid" align="center">
					<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#confirm_modal">Обриши</button>
				</div>
			</td>
		</tr>
	</table>
	
	<?php $this->load->view('confirm_modal');?>
</div>
