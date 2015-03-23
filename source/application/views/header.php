<header class="zone header container" role="heading">
	<div class="static-content">
		<img src="assets/styles/img/header.jpg" alt="Peta beogradska gimnazija" />
	</div>
	<nav>
		<ul class="level1">
			<?php foreach($categories as $category){ ?>
			<li>
				<div class="dropdown">
					<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="<?php echo $category->Route; ?>">
						<strong><?php echo $category->Title; ?></strong>
						<?php 
						if ($category->ChildrenCount > 0){
							echo '<span class="caret"></span>';
						}
						?>
					</a>
					<?php if ($category->ChildrenCount > 0){ ?>
						<ul class="dropdown-menu multi-level level2" role="menu" aria-labelledby="dropdownMenu">
							<?php 
								foreach ($category->children as $level2){ 
									if ($level2->ChildrenCount == 0)
									{
										echo '<li><a href="' . $level2->Route . '">' . $level2->Title . '</a></li>';
									}
									else
									{ 
							?>
							<li class="dropdown-submenu">
								<a tabindex="-1" href="#"><?php echo $level2->Title; ?></a>
								<ul class="dropdown-menu">
									<?php foreach ($level2->children as $level3){ 
											if ($level3->ChildrenCount == 0)
											{
												echo '<li><a tabindex="-1" href="' . $level3->Route . '">' . $level3->Title . '</a></li>';
											}
											else 
											{
									?>
									<li class="dropdown-submenu">
										<a href="#"><?php echo $level3->Title; ?></a>
										<ul class="dropdown-menu">
											<?php foreach ($level3->children as $level4){
													echo '<li><a href="' . $level4->Route . '">' . $level4->Title . '</a></li>';
												}
											?>
										</ul>
									</li>
									<?php	}
										}
									?>
								</ul>
							</li>
							<?php	}
								}
							?>
						</ul>
					<?php } ?>
				</div>
			</li>
			<?php } ?>
		</ul>
	</nav>
</header>
