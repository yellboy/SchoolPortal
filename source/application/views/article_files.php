		<div class="row article-list" style="margin-top:30px;margin-bottom:15px;display:none"; >
			<div class="col-md-6">
				<h3>
					<span class="section-title">Materijali</span> у категорији '<span class="category-name"></span>':
				</h3>
			</div>
		</div>
		<table border="1" style="width:100%; margin-bottom:25px; margin-top:15px;display:none;" class="table-striped article-list">
			<tr>
				<th class="container-fluid col-md-6"><b>Наслов</b></th>
				<th class="container-fluid col-md-3"><b>Аутор</b></th>
				<th class="container-fluid col-md-2"><b>Датум креирања</b></th>
				<th class="container-fluid"></th>
			</tr>
			<?php for ($i=0; $i < 2 ; $i++) { ?>

			<tr>
				<td class="container-fluid">Статистика слетања на Јупитер</td>
				<td class="container-fluid">Марин Маркић</td>
				<td class="container-fluid">17.1.2048</td>
				<td class="container-fluid">
					<div class="container-fluied">
						<button type="submit" class="btn btn-danger delete-article" data-toggle="modal" data-target="#confirm_modal">Обриши</button>
					</div>
				</td>
			</tr>
				
			<?php } ?>

		</table>

		<div class="row article-list" style="margin-bottom:30px;border-bottom: 1px solid #ccc;padding-bottom:15px;display:none;">
			<div class="col-md-12">
				<div>
					<button type="submit" class="btn btn-success add-article-files">Додај материјал</button>
				</div>
			</div>
		</div>