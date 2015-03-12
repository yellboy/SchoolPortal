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
		

		<main class="main container" role="main">
			<form class="login input-group">
				<div class="form-tittle"> <h1> Улогујте се </h1> </div>
				<input type="text" class="form-control" placeholder="Корисничко име"/> 
				<input type="password" class="form-control" placeholder="Лозинка"/> <br/>
				<button type="submit" class="btn btn-danger">Улогуј ме</button>
					<div>
						<a href="index.php" class="text-muted">Повратак на главну страницу</a>
					</div>
			</form>
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