<!DOCTYPE html>
<html>
	<head>
		<?php
			$this->load->helper('url');
			$this->load->view('head_meta'); 
			echo link_tag('assets/plugins/vakata-jstree/dist/themes/default/style.min.css');
			$jstree = base_url() . "assets/plugins/vakata-jstree/dist/jstree.min.js";
			$category = base_url() . "assets/scripts/category.js";
		?>
		<script src="<?php echo $jstree; ?>"></script>
		<script src="<?php echo $category; ?>"></script>
	</head>
	
	<body>
		<?php $this->load->view('admin_header'); ?>
		<main class="container" role="main">
			<div class="row">
				<?php $this->load->view('category_admin', $categories); ?>
			</div>

		</main>
		<?php $this->load->view('footer'); ?>
	</body>
</html>