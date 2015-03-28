<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view('head_meta'); ?>
	</head>
	<script>
		var SPV = SPV || {};
		SPV.pageCategoryId = '<?php echo $category->Id; ?>';
		SPV.pageHierarchyId = '<?php echo $category->HierarchyId; ?>';
	</script>
	<body>
		<?php $this->load->view('pre_header'); ?>
		<?php $this->load->view('header'); ?>

		<main class="main container" role="main">
			<div class="row">
				<div class="col-md-9">
					<div class="home-carousel">
						<?php 
							if ($category->IsHome == 1){
								$this->load->view('home_carousel');
							}
						?>
					</div>
					<div class="clear"></div>
					<?php $this->load->view('news_details'); ?>
				</div>
				<aside class="col-md-3">
					<?php $this->load->view('right_sidebar'); ?>
				</aside>
			</div>

		</main>
		<?php $this->load->view('footer'); ?>
	</body>
</html>