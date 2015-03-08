<title>Title</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<?php 
	// render meta tags and title that dependes on current page route here - use meta helper
	$this->load->helper('html');
	$this->load->helper('url');
	echo link_tag('assets/styles/layout.css'); // use min for production
	echo link_tag('assets/styles/img/favicon.ico', 'shortcut icon', 'image/ico');
	$homepage = base_url() . "assets/scripts/homepage.js";
?>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="<?php echo $homepage; ?>"></script>