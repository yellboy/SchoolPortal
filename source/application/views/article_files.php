		<div class="row article-files" style="margin-top:30px;margin-bottom:15px;display:none"; >
			<div class="col-md-6">
				<h3>
					<span class="section-title2">Материјали</span> у категорији '<span class="category-name"></span>':
				</h3>
			</div>
		</div>
		<table border="1" style="width:100%; margin-bottom:25px; margin-top:15px;display:none;" class="table-striped article-files-list">
		</table>

		<div class="row article-files" style="margin-bottom:30px;border-bottom: 1px solid #ccc;padding-bottom:15px;display:none;">
			<div class="col-md-12">
				<div>
					<button type="submit" id="add-article-files" class="btn btn-success" data-toggle="modal" data-target="#file_modal">Додај материјал</button>
				</div>
			</div>
		</div>

<script id="files-list-template" type="text/x-handlebars-template">
	<tr>
		<th class="container-fluid col-md-6"><b>Наслов</b></th>
		<th class="container-fluid col-md-3"><b>Аутор</b></th>
		<th class="container-fluid col-md-2"><b>Датум креирања</b></th>
		<th class="container-fluid"></th>
		<th class="container-fluid"></th>
	</tr>
	{{#rows}}
	<tr data-id="{{Id}}">
		<td class="container-fluid">{{Title}}</td>
		<td class="container-fluid">{{CreatedByUserName}}</td>
		<td class="container-fluid">{{CreatedAt}}</td>
		<td class="container-fluid">
			<div class="container-fluied">
				<button type="submit" class="btn btn-warning download-file" data-path="{{FilePath}}"><?php echo $this->lang->line('Download'); ?></button>
			</div>

		</td>
		<td class="container-fluid">
			<div class="container-fluied">
				<button type="submit" class="btn btn-danger delete-article"><?php echo $this->lang->line('Delete'); ?></button>
			</div>
		</td>
	</tr>
	{{/rows}}
</script>
<?php $this->load->view('file_modal'); ?>