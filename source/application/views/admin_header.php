<section class="zone pre-header container">
	<div class="row">
		<div class="col-md-7">
			<ul> 
				<li><a href="/" title="Prijava na sistem">Почетна</a></li>
				<li><a href="/administration/users" title="Pretraga korisnika">Kорисници</a></li>
				<li><a href="/administration/category" title="Pretraga korisnika">Категорије</a></li>
				<li><a href="/administration/article" title="Pretraga korisnika">Чланци</a></li>
				<li><a href="/administration/profile" title="Pretraga korisnika">Мој профил</a></li>
				<li><?php echo $username; ?></li>
				<li><a href="/logout" title="Odjava sa sistema">Oдјави ме</a></li>
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