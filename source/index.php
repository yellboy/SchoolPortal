<!DOCTYPE html>
<html>
	<head>
		<?php // render meta tags and title that dependes on current page route here ?>
		<title>Title</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="styles/layout.css">
	</head>
	
	<body>
		<section class="zone pre-header container">
			<div class="row">
				<div class="col-md-6">
					RSS, links, login, ?
				</div>
				<div class="col-md-6">
					<form id="searchbox">
					    <input id="search" type="text" placeholder="Unesi tekst">
					    <input id="submit" type="submit" value="Pretraži">
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
					echo "render category menu";
				?>
			</nav>	
		</header>

		<main class="main container" role="main">
			<div class="row">
				<div class="col-md-9">
					Slider if home page...
					<?php // render html content body
						echo "hello world";
					?>
				</div>
				<aside class="col-md-3">
					<h2>Пријатељи школе</h2>
					<?php // render html content sidebar
						echo "Render widget";
					?>
				</aside>
			</div>

		</main>
		<footer class="zone footer container">
			© blah me, . Sva prava zadržana. Celokupan sadržaj web sajta http://www.vbeogradska.edu.rs
		</footer>
	</body>
</html>