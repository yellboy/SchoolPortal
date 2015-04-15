<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view('head_meta'); ?>
		<title><?php echo $this->lang->line('TeachersTitle'); ?></title>
	</head>
	
	<body>
		
		<?php $this->load->view('pre_header'); ?>
		
		<main class="main container" role="main">
			<?php $this->load->view('teachers'); ?>

		</main>
		<?php $this->load->view('footer'); ?>
	</body>
</html>