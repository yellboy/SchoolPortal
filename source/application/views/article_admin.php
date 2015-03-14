<div class="col-md-12">
	<h3>Uradjivanja vesti i clanaka</h3>

	<div class="container-fluid" align="left">
		<div class="row" style="border-bottom: 1px solid #ccc;">
			<div class="col-md-6">
				<div id="jstree_demo" class="demo jstree jstree-1 jstree-default" style="margin-top:1em; min-height:200px;" role="tree" aria-multiselectable="true" tabindex="0" aria-activedescendant="demo_root_2" aria-busy="false"><ul class="jstree-container-ul jstree-children jstree-striped jstree-wholerow-ul jstree-no-dots" role="group"><li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="demo_root_1_anchor" aria-expanded="true" id="demo_root_1" class="jstree-node  jstree-open"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="demo_root_1_anchor"><i class="jstree-icon jstree-themeicon jstree-themeicon-custom" role="presentation" style="background-image: url(http://www.jstree.com/static/3.0.9/assets/images/tree_icon.png); background-size: auto; background-position: 50% 50%;"></i>Root 1</a><ul role="group" class="jstree-children"><li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="j1_3_anchor" id="j1_3" class="jstree-node  jstree-leaf"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j1_3_anchor"><i class="jstree-icon jstree-themeicon" role="presentation"></i>Child 1</a></li><li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="j1_6_anchor" id="j1_6" class="jstree-node  jstree-leaf jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j1_6_anchor"><i class="jstree-icon jstree-themeicon" role="presentation"></i>New node</a></li></ul></li><li role="treeitem" aria-selected="false" aria-level="1" aria-labelledby="demo_root_2_anchor" aria-expanded="true" id="demo_root_2" class="jstree-node  jstree-open jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="demo_root_2_anchor"><i class="jstree-icon jstree-themeicon jstree-themeicon-custom" role="presentation" style="background-image: url(http://www.jstree.com/static/3.0.9/assets/images/tree_icon.png); background-size: auto; background-position: 50% 50%;"></i>Root 2</a><ul role="group" class="jstree-children"><li role="treeitem" aria-selected="false" aria-level="2" aria-labelledby="demo_child_1_anchor" aria-expanded="true" id="demo_child_1" class="jstree-node  jstree-open jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="demo_child_1_anchor"><i class="jstree-icon jstree-themeicon" role="presentation"></i>Child 2</a><ul role="group" class="jstree-children"><li role="treeitem" aria-selected="true" aria-level="3" aria-labelledby="demo_child_2_anchor" id="demo_child_2" class="jstree-node  jstree-leaf"><div unselectable="on" role="presentation" class="jstree-wholerow jstree-wholerow-clicked">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor jstree-clicked" href="#" tabindex="-1" id="demo_child_2_anchor"><i class="jstree-icon jstree-themeicon glyphicon glyphicon-file jstree-themeicon-custom" role="presentation"></i>One more</a></li><li role="treeitem" aria-selected="false" aria-level="3" aria-labelledby="j1_7_anchor" id="j1_7" class="jstree-node  jstree-leaf jstree-last"><div unselectable="on" role="presentation" class="jstree-wholerow">&nbsp;</div><i class="jstree-icon jstree-ocl" role="presentation"></i><a class="jstree-anchor" href="#" tabindex="-1" id="j1_7_anchor"><i class="jstree-icon jstree-themeicon glyphicon glyphicon-file jstree-themeicon-custom" role="presentation"></i>dada</a></li></ul></li></ul></li></ul></div>
			</div>
			<div class="col-md-6">
				<h3>Upustvo za koriscenje</h3> 
				<p>Izaberite kategoriju ... itd korisnicko upustvo </p>
			</div>
		</div>
		<div class="row" style="margin-top:30px;margin-bottom:15px;">
			<div class="col-md-6">
				<h3>
					Vesti u kategoriji 'Skolski odbor':
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"><input type="text" class="form-control" placeholder="Pretrazi po naslovu"/> </div>
			<div class="col-md-2"><input type="text" class="form-control" placeholder="Pretrazi po autoru"/> </div>					
		</div>
		<table border="1" style="width:100%; margin-bottom:25px; margin-top:15px;" class="table-striped">
			<tr>
				<th class="container-fluid" width="50%"><b>Naslov</b></th>
				<th class="container-fluid" width="25%"><b>Autor</b></th>
				<th class="container-fluid" width="20%"><b>Datum postavljanja</b></th>
				<th class="container-fluid"></th>
				<th class="container-fluid"></th>
			</tr>
			<?php for ($i=0; $i < 10 ; $i++) { ?>

			<tr>
				<td class="container-fluid">Veoma zanimljiva vest</td>
				<td class="container-fluid">Marin Markic</td>
				<td class="container-fluid">17.1.2048</td>
				<td class="container-fluid">
					<div class="container-fluied" align="center">
						<button type="submit" class="btn btn-warning">Измени</button>
					</div>

				</td>
				<td class="container-fluid">
					<div class="container-fluied" align="center">
						<button type="submit" class="btn btn-danger">Obrisi</button>
					</div>
				</td>
			</tr>
				
			<?php } ?>

		</table>

		<div class="row" style="margin-bottom:30px;border-bottom: 1px solid #ccc;padding-bottom:15px;">
			<div class="col-md-12">
				<div class="container-fluied" align="left">
					<button type="submit" class="btn btn-success">Dodaj</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row" style="margin-bottom:10px;">
					<div class="col-md-1" style="font-weight: 600;padding-top: 5px;">Naslov:</div>
					<div class="col-md-6"><input type="text" class="form-control" placeholder="" style="width:100%;" /> </div>
				</div>
				<div class="row">
					<div class="col-md-1" style="font-weight: 600;padding-top: 5px;">Sadrzaj:</div>
					<div class="col-md-11">
						<textarea rows="5" cols="172" class="ckeditor" id="ck-holder"></textarea>
					</div>

				</div>
				<div class="row" style="margin-bottom:25px; margin-top:35px;">
				    <div class="col-md-6 col-md-push-1">    	
	 					<button type="button" class="btn btn-success">Sačuvaj</button>
	 					<button type="button" class="btn">Poništi</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>











