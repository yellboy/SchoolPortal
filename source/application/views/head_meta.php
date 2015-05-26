<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<?php 
	$this->load->helper('html');
	echo link_tag('assets/styles/layout.min.css');
	echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.css');
	$homepage = base_url() . "assets/scripts/homepage.js";
	$this->lang->load('serbian', 'serbian');
	if (isset($category) && $category->Id != 2){
		echo '<title>' . $category->Title .'</title>';
		echo '<meta name="description" content=' . $category->Title .'>';
	}
	else {
		echo '<title>' . $this->lang->line('PageTitle') . '</title>';
	}
?>
<link href="http://hayageek.github.io/jQuery-Upload-File/uploadfile.min.css" rel="stylesheet">
<script>var SPV = SPV || {};</script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://hayageek.github.io/jQuery-Upload-File/jquery.uploadfile.min.js"></script>
<script src="<?php echo $homepage; ?>"></script>
