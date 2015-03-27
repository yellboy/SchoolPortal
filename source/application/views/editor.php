<div class="row">
	<div class="col-md-12">
		<div class="row" style="margin-bottom:10px;">
			<div class="col-md-1" style="font-weight: 600;padding-top: 5px;"><?php echo $this->lang->line('Title') . ':'; ?></div>
			<div class="col-md-6"><input type="text" class="form-control article-title" placeholder="" style="width:100%;" /> </div>
		</div>
		<div class="row">
			<div class="col-md-1" style="font-weight: 600;padding-top: 5px;"><?php echo $this->lang->line('Content') . ':'; ?></div>
			<div class="col-md-11">
				<textarea rows="5" cols="172" class="ckeditor" id="ck-holder"></textarea>
			</div>

		</div>
		<div class="row" style="margin-bottom:25px; margin-top:35px;">
			<div class="col-md-6 col-md-push-1">
	 			<button type="button" class="btn btn-success save-article"><?php echo $this->lang->line('Save');?></button>
	 			<button type="button" class="btn cancel"><?php echo $this->lang->line('Cancel');?></button>
			</div>
		</div>
	</div>
</div>