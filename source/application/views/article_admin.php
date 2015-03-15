<div class="col-md-12">
	<h3>Уређивање вести и чланака</h3>

	<div class="container-fluid">
		<div class="row" style="border-bottom: 1px solid #ccc;">
			<div class="col-md-6">
				<div id="jstree-holder" class="demo jstree jstree-1 jstree-default" style="margin-top:1em; min-height:200px;" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="demo_root_2" aria-busy="false"><ul class="jstree-container-ul jstree-children jstree-striped jstree-wholerow-ul jstree-no-dots" role="group"><li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="demo_root_1_anchor" aria-expanded="true" id="demo_root_1" class="jstree-node  jstree-open"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="demo_root_1_anchor"><i class="jstree-icon jstree-themeicon jstree-themeicon-custom" role="presentation" style="background-image: url(http://www.jstree.com/static/3.0.9/assets/images/tree_icon.png); background-size: auto; background-position: 50% 50%;"></i>Root 1</a><ul role="group" class="jstree-children"><li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="j1_3_anchor" id="j1_3" class="jstree-node  jstree-leaf"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j1_3_anchor"><i class="jstree-icon jstree-themeicon" role="presentation"></i>Child 1</a></li><li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="j1_6_anchor" id="j1_6" class="jstree-node  jstree-leaf jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j1_6_anchor"><i class="jstree-icon jstree-themeicon" role="presentation"></i>New node</a></li></ul></li><li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="demo_root_2_anchor" aria-expanded="true" id="demo_root_2" class="jstree-node  jstree-open jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="demo_root_2_anchor"><i class="jstree-icon jstree-themeicon jstree-themeicon-custom" role="presentation" style="background-image: url(http://www.jstree.com/static/3.0.9/assets/images/tree_icon.png); background-size: auto; background-position: 50% 50%;"></i>Root 2</a><ul role="group" class="jstree-children"><li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="demo_child_1_anchor" aria-expanded="true" id="demo_child_1" class="jstree-node  jstree-open jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="demo_child_1_anchor"><i class="jstree-icon jstree-themeicon" role="presentation"></i>Child 2</a><ul role="group" class="jstree-children"><li role="treeitem" aria-selected="true" aria-level="3" aria-labelledby="demo_child_2_anchor" id="demo_child_2" class="jstree-node  jstree-leaf"><div unselectable="on" role="presentation" class="jstree-wholerow jstree-wholerow-clicked">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor jstree-clicked" href="#" tabindex="-1" id="demo_child_2_anchor"><i class="jstree-icon jstree-themeicon glyphicon glyphicon-file jstree-themeicon-custom" role="presentation"></i>One more</a></li><li role="treeitem" aria-selected="false" aria-level="3" aria-labelledby="j1_7_anchor" id="j1_7" class="jstree-node  jstree-leaf jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j1_7_anchor"><i class="jstree-icon jstree-themeicon glyphicon glyphicon-file jstree-themeicon-custom" role="presentation"></i>dada</a></li></ul></li></ul></li></ul></div>
			</div>
			<div class="col-md-6">
				<h4>Упуство за коришћење</h4> 
				<p>Изаберите категорију у којој желите да додајете, мењате или бришете вести и чланке. ... итд</p>
			</div>
		</div>
		<div class="row article-list" style="margin-top:30px;margin-bottom:15px;display:none"; >
			<div class="col-md-6">
				<h3>
					<span class="section-title">Чланци</span> у категорији '<span class="category-name"></span>':
				</h3>
			</div>
		</div>
		<div class="row article-list" style="display:none;">
			<div class="col-md-3"><input type="text" class="form-control" placeholder="Претражи по наслову"/> </div>
			<div class="col-md-3"><input type="text" class="form-control" placeholder="Претражи по аутору"/> </div>
		</div>
		<table border="1" style="width:100%; margin-bottom:25px; margin-top:15px;display:none;" class="table-striped article-list">
			<tr>
				<th class="container-fluid col-md-6"><b>Наслов</b></th>
				<th class="container-fluid col-md-3"><b>Аутор</b></th>
				<th class="container-fluid col-md-2"><b>Датум креирања</b></th>
				<th class="container-fluid"></th>
				<th class="container-fluid"></th>
			</tr>
			<?php for ($i=0; $i < 10 ; $i++) { ?>

			<tr>
				<td class="container-fluid">Веома занимљива вест</td>
				<td class="container-fluid">Марин Маркић</td>
				<td class="container-fluid">17.1.2048</td>
				<td class="container-fluid">
					<div class="container-fluied">
						<button type="submit" class="btn btn-warning edit-article">Измени</button>
					</div>

				</td>
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
					<button type="submit" class="btn btn-success add-article">Додај</button>
				</div>
			</div>
		</div>
		<div class="article-details" style="display:none;">
			<?php $this->load->view('editor');?>
		</div>
		<?php $this->load->view('confirm_modal'); ?>
	</div>
</div>











