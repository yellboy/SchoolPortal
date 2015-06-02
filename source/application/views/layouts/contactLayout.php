<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view('head_meta'); ?>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
	</head>
	<script>
		var SPV = SPV || {};
		SPV.pageCategoryId = '<?php echo $category->Id; ?>';
		SPV.pageHierarchyId = '<?php echo $category->HierarchyId; ?>';
		
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
	<body>
		<?php $this->load->view('pre_header'); ?>
		<?php $this->load->view('header'); ?>

		<main class="main container" role="main">
			<div class="row">
				<div class="col-md-9">
					<div class="contact-holder-main">
						<h1>Контакт</h1>
						<div class="content-holder">
							<div class="row">
								<div class="col-md-5">
									<p class="contact-zone info-address">
										Илије Гарашанина 24, Београд, Србија
									</p>
									<div class="contact-zone">
										<p>централа: </p><a href="tel:+381113236367">+381 11 3236 367</a> 
									</div>
									<div class="contact-zone">
										<p>зборница: </p><a href="tel:+381113234674">+381 11 3234 674</a>
									</div>
									<div class="contact-zone">
										<p>рачуноводство: </p><a href="tel:+381113344331">+381 11 3344 331</a>
									</div>
									<div class="contact-zone">
										<p>факс: </p><a href="tel:+381113344090">+381 11 3344 090</a>
									</div>
									<div class="contact-zone">
										<p>е-адреса: </p><a href="mailto:vgimnazija@eunet.rs">vgimnazija@eunet.rs</a>
									</div>
								</div>
								<div class="col-md-7">
									<div id="googleMap" style="width:100%;height:380px;"></div>
								</div>
							</div>
						</div>
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