<!DOCTYPE html>
<html>
	<head>
		<?php // render meta tags and title that dependes on current page route here ?>
		<title>Title</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="styles/layout.css"> <!-- use min for production -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="scripts/homepage.js"></script> <?php // render script that dependes on current page route here ?>
	</head>
	
	<body>
		<section class="zone pre-header container">
			<div class="row">
				<div class="col-md-7">
					<img src="styles/img/rss.png" alt="RSS" />
					<ul>
						<li><a href="login.html" title="Prijava na sistem">пријави ме</a></li>
						<li class="auth-only">Marin Markic - </li>
						<li class="auth-only"><a href="login.html" title="Odjava sa sistema">одјави ме</a></li>
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
		<header class="zone header container" role="heading">
			<div class="static-content">
				<img src="styles/img/header.jpg" alt="Peta beogradska gimnazija"/>
			</div>
			<nav><?php include 'views/category_menu.php'; ?></nav>	
		</header>

		<main class="main container" role="main">
			<div class="row">
				<div class="col-md-9">
					<div class="home-carousel">
						<?php include 'views/home_carousel.php'; // render only if its home page ?>
					</div>
					<div class="clear"></div>
						<?php 
						 	include 'views/news-details.php'; // idk render news foreach on here? 
						?>
				</div>
				<aside class="col-md-3">
					<div class="right-sidebar-content-holder">
						<h2>Пријатељи школе</h2>
						<?php // render html content sidebar
							for ($i=0; $i < 20; $i++) { 
								echo "Bacon ipsum dolor amet boudin sausage pork ";
							}
						?>
					</div>
				</aside>
			</div>

		</main>
		<footer class="zone footer container">
		<ul>
			<li>© <a href="mailto:da" title="123">Бојан Јелача</a>,</li>
			<li><a href="mailto:marinmarkic@mail.com" title="marinmarkic@mail.com">Марин Маркић</a>.</li>
			<li> Сва права задржана. </li>
			<li><a href="http://www.vbeogradska.edu.rs">www.vbeogradska.edu.rs</a>.</li>
		</ul>
		</footer>
	</body>
</html>