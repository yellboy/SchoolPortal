<?php 
    $data = array("http://www.mpn.gov.rs", "http://www.mos.gov.rs", "http://www.palilula.org.rs");
    $url = "/assets/styles/img/sidebar_";
?>


<div class="right-sidebar-content-holder">
	<h2><?php echo $this->lang->line('SchoolFriends'); ?></h2>
	<div class="content-holder">
		<?php
			for ($i=0; $i < count($data); $i++) { 
				echo '<div class="content"><a href="' . $data[$i] . '" target="_blank"><img src="' . $url . $i .'.png"></a></div>';
			}
		?>
	</div>
</div>