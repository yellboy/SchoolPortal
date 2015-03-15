<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view('head_meta'); ?>
	</head>
	
	<body>
		<?php $this->load->view('pre_header'); ?>
		<?php $this->load->view('header'); ?>

		<main class="main container" role="main">
			<div class="row">
				<div class="col-md-9">
					<div class="home-carousel">
						<?php $this->load->view('home_carousel'); 
							// echo $title;
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