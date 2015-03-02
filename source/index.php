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
					<ul><li><a href="login.html" title="Prijava na sistem">пријава</a></li></ul>
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
			<nav>
				<?php // render html content body
					echo "Render category menu widget";
				?>
			</nav>	
		</header>

		<main class="main container" role="main">
			<div class="row">
				<div class="col-md-9">
					<div class="home-carousel">
						<?php include 'views/home_carousel.php'; // render only if its home page ?>
					</div>
					<div class="clear"></div>
						<?php include 'views/news-details.php'; // idk render news foreach on here? ?>
				</div>
				<aside class="col-md-3">
					<h2>Пријатељи школе</h2>
					<div class="right-sidebar-content-holder">
						<p>Bacon ipsum dolor amet boudin sausage pork, sirloin frankfurter jerky pig bresaola jowl beef venison ground round short loin. Turkey frankfurter landjaeger prosciutto. Leberkas brisket ground round pork, cow capicola spare ribs rump. Beef bacon kevin tenderloin pig, biltong ribeye tri-tip frankfurter. Swine leberkas turducken ham beef ribs boudin t-bone jowl cow pancetta tail flank sirloin tenderloin.</p>
						<?php // render html content sidebar
							echo "Render widget placeholder";
						?>
					</div>
				</aside>
			</div>

		</main>
		<footer class="zone footer container">
			© <a href="marinmarkic@mail.com"></a> emails, by who, . Sva prava zadržana. Celokupan sadržaj web sajta http://www.vbeogradska.edu.rs.
		</footer>
	</body>
</html>