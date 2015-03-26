<!DOCTYPE html>
<html>
	<head>
		<?php
			$this->load->helper('url');
			$this->load->view('head_meta'); 
			$category = base_url() . "assets/scripts/category.js";
		?>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.1.0/themes/default/style.min.css" rel="stylesheet" type="text/css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.1.0/jstree.min.js"></script>
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