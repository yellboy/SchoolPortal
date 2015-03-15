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
				<a href="index.php" class="text-muted">Повратак на главну страницу</a>
			</div>
		</div>
		<div class="col-md-4">
			<button class="btn btn-danger" onclick="window.location.href='register.php'">Регистрација</button>
		</div>
	</form>
	<table border="1" style="width:100%" class="table-striped">
		<tr>
			<th class="container-fluid"><b>Корисничко име</b></th>
			<th class="container-fluid"><b>Име</b></th>
			<th class="container-fluid"><b>Презиме</b></th>
			<th class="container-fluid"><b>Предмети</b></th>
		</tr>
		<tr>
			<td class="container-fluid"><a href="/administration/profile">года</a></td>
			<td class="container-fluid">Гордана</td>
			<td class="container-fluid">Давидовић</td>
			<td class="container-fluid">Математика</td>
		</tr>
		<tr>
			<td class="container-fluid"><a href="/administration/profile">дијо</a></td>
			<td class="container-fluid">Дивна</td>
			<td class="container-fluid">Јовановић</td>
			<td class="container-fluid">Физика</td>
		</tr>
	</table>
</div>
