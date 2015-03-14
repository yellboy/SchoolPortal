<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view('head_meta'); ?>
	</head>
	
	<body>
		
		<?php $this->load->view('admin_header'); ?>
		
		<main class="main container" role="main">
			<?php $this->load->view('users'); ?>

		</main>
		<?php $this->load->view('footer'); ?>
	</body>
</html>