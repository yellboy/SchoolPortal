<?php if (isset($isLogged) && $isLogged)
	{
		$this->load->view('admin_header');
	}
	else{ ?>
	
<section class="zone pre-header container">
	<div class="row">
		<div class="col-md-7">
<!--			<img src="/assets/styles/img/rss.png" alt="RSS" />-->
			<ul>
				<li><a href="/" title="Početna stranica">Почетна</a></li>
				<li><a href="<?php echo ResolveRoute(ContentPageCodes::Login) ?>" title="Prijava na sistem">Пријави ме</a></li>
			</ul>
		</div>
		<div class="col-md-5">
			<form id="searchbox">
				<input id="search" type="text" placeholder="Унесите текст">
				<input id="submit" type="submit" value="Претражи">
			</form>
		</div>
	</div>
</section>
	
	<?php
	}
	?>


