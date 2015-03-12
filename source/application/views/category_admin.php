<style type="text/css">
	#jstree1, #jstree2, .demo { max-width:100%; overflow:auto; font:12px Verdana, sans-serif; box-shadow:0 0 5px #ccc; padding:10px; border-radius:5px; margin-bottom: 25px; }
</style>

<div class="col-md-12">
	<h3>Уређивање категорија сајта</h3>
	<div class="row">
		<div class="col-md-6 col-sm-8 col-xs-8">
			<button type="button" class="btn btn-success btn-sm" onclick="demo_create();"><i class="glyphicon glyphicon-asterisk"></i> Додај подкатегорију </button>
			<button type="button" class="btn btn-warning btn-sm" onclick="demo_rename();"><i class="glyphicon glyphicon-pencil"></i> Промени назив</button>
			<button type="button" class="btn btn-danger btn-sm" onclick="demo_delete();"><i class="glyphicon glyphicon-remove"></i> Обриши категорију</button>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-4" style="text-align:right;">
			<input type="text" value="" style="box-shadow:inset 0 0 4px #eee; width:200px; margin:0; padding:6px 12px; border-radius:4px; border:1px solid silver; font-size:1.1em;" id="demo_q" placeholder="Претражи kategorije">
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div id="jstree_demo" class="demo jstree jstree-1 jstree-default" style="margin-top:1em; min-height:200px;" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="demo_root_2" aria-busy="false"><ul class="jstree-container-ul jstree-children jstree-striped jstree-wholerow-ul jstree-no-dots" role="group"><li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="demo_root_1_anchor" aria-expanded="true" id="demo_root_1" class="jstree-node  jstree-open"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="demo_root_1_anchor"><i class="jstree-icon jstree-themeicon jstree-themeicon-custom" role="presentation" style="background-image: url(http://www.jstree.com/static/3.0.9/assets/images/tree_icon.png); background-size: auto; background-position: 50% 50%;"></i>Root 1</a><ul role="group" class="jstree-children"><li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="j1_3_anchor" id="j1_3" class="jstree-node  jstree-leaf"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j1_3_anchor"><i class="jstree-icon jstree-themeicon" role="presentation"></i>Child 1</a></li><li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="j1_6_anchor" id="j1_6" class="jstree-node  jstree-leaf jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j1_6_anchor"><i class="jstree-icon jstree-themeicon" role="presentation"></i>New node</a></li></ul></li><li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="demo_root_2_anchor" aria-expanded="true" id="demo_root_2" class="jstree-node  jstree-open jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="demo_root_2_anchor"><i class="jstree-icon jstree-themeicon jstree-themeicon-custom" role="presentation" style="background-image: url(http://www.jstree.com/static/3.0.9/assets/images/tree_icon.png); background-size: auto; background-position: 50% 50%;"></i>Root 2</a><ul role="group" class="jstree-children"><li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="demo_child_1_anchor" aria-expanded="true" id="demo_child_1" class="jstree-node  jstree-open jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="demo_child_1_anchor"><i class="jstree-icon jstree-themeicon" role="presentation"></i>Child 2</a><ul role="group" class="jstree-children"><li role="treeitem" aria-selected="true" aria-level="3" aria-labelledby="demo_child_2_anchor" id="demo_child_2" class="jstree-node  jstree-leaf"><div unselectable="on" role="presentation" class="jstree-wholerow jstree-wholerow-clicked">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor jstree-clicked" href="#" tabindex="-1" id="demo_child_2_anchor"><i class="jstree-icon jstree-themeicon glyphicon glyphicon-file jstree-themeicon-custom" role="presentation"></i>One more</a></li><li role="treeitem" aria-selected="false" aria-level="3" aria-labelledby="j1_7_anchor" id="j1_7" class="jstree-node  jstree-leaf jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j1_7_anchor"><i class="jstree-icon jstree-themeicon glyphicon glyphicon-file jstree-themeicon-custom" role="presentation"></i>dada</a></li></ul></li></ul></li></ul></div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<h3>Upustvo za koriscenje</h3>
		<div>Neko lepo i detaljno upustvo</div>
		</div>
	</div>
</div>