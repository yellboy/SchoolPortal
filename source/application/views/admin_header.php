<section class="zone pre-header container">
	<div class="row">
		<div class="col-md-7">
			<ul> 
				<li><a href="/">Почетна</a></li>
				<?php 
					if (IsAdministrator()) 
					{
				?>
						<li><a href="<?php echo ResolveRoute(ContentPageCodes::Users) ?>">Kорисници</a></li>
				<?php
					}
				?>
				<li><a href="<?php echo ResolveRoute(ContentPageCodes::CategoryAdmin) ?>">Категорије</a></li>
				<li><a href="<?php echo ResolveRoute(ContentPageCodes::ArticleAdmin) ?>">Чланци</a></li>
				<li><a href="<?php echo ResolveRoute(ContentPageCodes::UserProfile, $id) ?>">Мој профил</a></li>
				<li class="username"><?php echo $username; ?></li>
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