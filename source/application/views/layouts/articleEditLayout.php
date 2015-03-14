<!DOCTYPE html>
<html>
	<head>
		<?php
			$this->load->helper('url');
			$this->load->view('head_meta'); 
			$article = base_url() . "assets/scripts/article.js";
			echo link_tag('assets/plugins/vakata-jstree/dist/themes/default/style.min.css');
			$jstree = base_url() . "assets/plugins/vakata-jstree/dist/jstree.min.js";
			$ckeditor = base_url() . "assets/plugins/ckeditor/ckeditor.js";
			$ckadapter = base_url() . "assets/plugins/ckeditor/adapters/jquery.js"
		?>
		<script src="<?php echo $jstree; ?>"></script>
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