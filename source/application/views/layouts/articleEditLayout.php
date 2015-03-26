<!DOCTYPE html>
<html>
	<head>
		<?php
			$this->load->helper('url');
			$this->load->view('head_meta'); 
			$article = base_url() . "assets/scripts/article.js";
			$ckeditor = base_url() . "assets/plugins/ckeditor/ckeditor.js";
			$ckadapter = base_url() . "assets/plugins/ckeditor/adapters/jquery.js"
		?>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.1.0/themes/default/style.min.css" rel="stylesheet" type="text/css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.1.0/jstree.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.1/handlebars.min.js"></script>
		<script src="<?php echo $ckeditor; ?>"></script>
		<script src="<?php echo $ckadapter; ?>"></script>
		<script src="<?php echo $article; ?>"></script>
	</head>
	
	<body>
		<?php $this->load->view('admin_header'); ?>
		<main class="container" role="main">
			<div class="row">
 				<?php $this->load->view('article_admin'); ?>
			</div>

		</main>
		<?php $this->load->view('footer'); ?>
	</body>
</html>