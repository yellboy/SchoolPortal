<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view('head_meta'); ?>
	</head>
	<script>
		var SPV = SPV || {};
		SPV.pageCategoryId = '<?php echo $category->Id; ?>';
		SPV.pageHierarchyId = '<?php echo $category->HierarchyId; ?>';
	</script>
	<body>
		<?php $this->load->view('pre_header'); ?>
		<?php $this->load->view('header'); ?>

		<main class="main container" role="main">
			<div class="row">
				<div class="col-md-9">
					<div class="clear" ></div>
						<h3 class="form-title" align="center" style="color:#CB5E5E">Контакт</h3>
						<h4 class="form-title" align="center">Илије Гарашанина 24, Београд, Србија</h4>
						<h4 class="form-title" align="center">+381 11 3236 367 – централа</h4>
						<h4 class="form-title" align="center">+381 11 3234 674 – зборница</h4>
						<h4 class="form-title" align="center">+381 11 3344 331 – рачуноводство</h4>
						<h4 class="form-title" align="center">+381 11 3344 090 факс</h4>
						<h4 class="form-title" align="center">е-адреса:</h4>
						<h4 class="form-title" align="center">vgimnazija@eunet.rs</h4>
					<div class="col-md-9" align="center" style="width:100%">
					<head>
						<script
							src="http://maps.googleapis.com/maps/api/js">
						</script>

						<script>
							var myCenter=new google.maps.LatLng(44.810627, 20.472119);

							function initialize()
							{
							var mapProp = {
							  center:myCenter,
							  zoom:17,
							  mapTypeId:google.maps.MapTypeId.ROADMAP
							  };

							var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

							var marker=new google.maps.Marker({
							  position:myCenter,
							  });

							marker.setMap(map);
							}

							google.maps.event.addDomListener(window, 'load', initialize);
						</script>
					</head>
					<body>
						<div id="googleMap" style="width:500px;height:380px;"></div>
					</body>
					</div>
				</div>
				<aside class="col-md-3">
					<?php $this->load->view('right_sidebar'); ?>
				</aside>
			</div>

		</main>
		<?php $this->load->view('footer'); ?>
	</body>
</html>