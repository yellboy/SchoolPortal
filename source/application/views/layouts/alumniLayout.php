﻿<!DOCTYPE html>
<html>
	<head>
		<?php
			$this->load->view('head_meta'); 
		?>
		<title>Алумнисти Пете Београдске гимназије</title>
	</head>
	
	<body>

		<?php $this->load->view('pre_header'); ?>
		
		<main class="main container" role="main">
			<?php $this->load->view('alumni'); ?>

		</main>
		<?php $this->load->view('footer'); ?>
	</body>
</html>