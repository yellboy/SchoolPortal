<!DOCTYPE html>
<html>

	<head>
		<?php
			$this->load->view('head_meta');			
			$alumni = base_url() . "assets/scripts/alumni.js";
		?>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.1.0/themes/default/style.min.css" rel="stylesheet" type="text/css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.1.0/jstree.min.js"></script>
		<script src="<?php echo $alumni; ?>"></script>
	</head>
	
	<body>
		
		<?php $this->load->view('pre_header'); ?>
		
		<main class="main container" role="main">
			<?php $this->load->view('add-to-alumni'); ?>

		</main>
		<?php $this->load->view('footer'); ?>
	</body>
</html>