<style type="text/css">
	#jstree1, #jstree2, .demo { max-width:100%; overflow:auto; font:12px Verdana, sans-serif; box-shadow:0 0 5px #ccc; padding:10px; border-radius:5px; margin-bottom: 25px; }
</style>
<script>
	SPV.categories = <?php echo $categories; ?>;
</script>

<div class="col-md-12">
	<h3><?php echo $this->lang->line('CategoryAdministration'); ?></h3>
	<div class="row">
		<div class="col-md-6 col-sm-8 col-xs-8">
			<button type="button" class="btn btn-success btn-sm create-category" ><i class="glyphicon glyphicon-asterisk"></i> <?php echo $this->lang->line('AddCategory'); ?> </button>
			<button type="button" class="btn btn-warning btn-sm rename-category"><i class="glyphicon glyphicon-pencil"></i> <?php echo $this->lang->line('Rename'); ?></button>
			<button type="button" class="btn btn-danger btn-sm delete-category"><i class="glyphicon glyphicon-remove"></i> <?php echo $this->lang->line('DeleteCategory'); ?></button>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-4" style="text-align:right;">
			<input type="text" value="" style="box-shadow:inset 0 0 4px #eee; width:200px; margin:0; padding:6px 12px; border-radius:4px; border:1px solid silver; font-size:1.1em;" id="demo_q" placeholder="<?php echo $this->lang->line('SearchCategory'); ?>">
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div id="jstree-holder" class="demo jstree jstree-1 jstree-default" style="margin-top:1em; min-height:200px;" role="tree" aria-multiselectable="true" tabindex="0" aria-busy="false">
			</div>
		</div>
	</div>
	<!--	
	<div class="row">
		<div class="col-md-2">
			<button type="button" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-asterisk"></i> <?php echo $this->lang->line('Save'); ?> </button>
		</div>
	</div>
	-->
	<div class="row" style="margin-bottom:25px;margin-top:15px;">
		<div class="col-md-12">
		<h4><?php echo $this->lang->line('UserGuide'); ?></h4>
		<div>
			<p><?php echo $this->lang->line('CategoryUserGuide'); ?> </p>
		</div>
		</div>
	</div>
</div>