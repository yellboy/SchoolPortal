<script>
	SPV.categories = <?php echo $categories; ?>;
</script>

<div class="col-md-12">
	<h3><?php echo $this->lang->line('ArticlesAdministration'); ?></h3>

	<div class="container-fluid">
		<div class="row" style="border-bottom: 1px solid #ccc;margin-bottom:30px;">
			<div class="col-md-6">
				<div id="jstree-holder" class="demo jstree jstree-1 jstree-default" style="margin-top:1em; min-height:200px;" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="demo_root_2" aria-busy="false">
				</div>
			</div>
			<div class="col-md-6">
				<h4><?php echo $this->lang->line('UserGuide'); ?></h4> 
				<p><?php echo $this->lang->line('ArticlesUserGuid'); ?></p>
			</div>
		</div>

		<div class="row article-list" style="margin-top:30px;margin-bottom:15px;display:none"; >
			<div class="col-md-6">
				<h3>
					<span class="section-title"><?php echo $this->lang->line('Articles'); ?></span> <?php echo $this->lang->line('InCategory'); ?> '<span class="category-name"></span>':
				</h3>
			</div>
		</div>
		<div class="row article-list" style="display:none;">
			<div class="col-md-3"><input type="text" class="form-control searchByTitle" placeholder="<?php echo $this->lang->line('SearchByTitle'); ?>"/> </div>
			<div class="col-md-3"><input type="text" class="form-control searchByAuthor" placeholder="<?php echo $this->lang->line('SearchByAuthor'); ?>"/> </div>
		</div>
		<table border="1" style="width:100%; margin-bottom:25px; margin-top:15px;display:none;" class="table-striped article-list articles-list-holder">
		</table>

		<div class="row article-list" style="margin-bottom:30px;border-bottom: 1px solid #ccc;padding-bottom:15px;display:none;">
			<div class="col-md-12">
				<div>
					<button type="submit" class="btn btn-success add-article"><?php echo $this->lang->line('Add'); ?></button>
				</div>
			</div>
		</div>
		<div class="article-details" style="display:none;">
			<?php $this->load->view('editor');?>
		</div>

		<?php $this->load->view('article_files');?>

		<?php $this->load->view('confirm_modal'); ?>
	</div>
</div>


<script id="articles-list-template" type="text/x-handlebars-template">
	<tr>
		<th class="container-fluid col-md-6"><b><?php echo $this->lang->line('Title'); ?></b></th>
		<th class="container-fluid col-md-3"><b><?php echo $this->lang->line('Author'); ?></b></th>
		<th class="container-fluid col-md-2"><b><?php echo $this->lang->line('CreationDate'); ?></b></th>
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
				<button type="submit" class="btn btn-warning edit-article"><?php echo $this->lang->line('Edit'); ?></button>
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












