<?php 
	$this->load->helper('routing_helper');
?>
<header class="zone header container" role="heading">
	<div class="static-content">
		<img src="/assets/styles/img/header.jpg" alt="Peta beogradska gimnazija" />
	</div>
	<nav>
		<ul class="level1">
			<?php foreach($categories as $category){ ?>
			<li>
				<div class="dropdown">
					<?php 
						if ($category->ChildrenCount > 0){
							echo '<a id="' . $category->Id . '" role="button" data-toggle="dropdown" class="btn btn-primary prevent" data-target="#" href="#">';
						}
						else{
							echo '<a id="' . $category->Id . '" role="button" class="btn btn-primary" href="' . GenerateRouteForObject($category) .'">';
						}
						echo '<strong>' . $category->Title . '</strong>';
						if ($category->ChildrenCount > 0){
							echo '<span class="caret"></span>';
						}
						echo '</a>';
					?>
					<?php if ($category->ChildrenCount > 0){ ?>
						<ul class="dropdown-menu multi-level level2" role="menu" aria-labelledby="dropdownMenu">
							<?php 
								foreach ($category->Children as $level2){ 
									if ($level2->ChildrenCount == 0)
									{
										echo '<li><a href="' . GenerateRouteForObject($level2) . '">' . $level2->Title . '</a></li>';
									}
									else
									{ 
							?>
							<li class="dropdown-submenu">
								<a tabindex="-1" href="#"><?php echo $level2->Title; ?></a>
								<ul class="dropdown-menu">
									<?php foreach ($level2->Children as $level3){ 
											if ($level3->ChildrenCount == 0)
											{
												echo '<li><a tabindex="-1" href="' . GenerateRouteForObject($level3) . '">' . $level3->Title . '</a></li>';
											}
											else 
											{
									?>
									<li class="dropdown-submenu">
										<a href="#"><?php echo $level3->Title; ?></a>
										<ul class="dropdown-menu">
											<?php foreach ($level3->Children as $level4){
													echo '<li><a href="' . GenerateRouteForObject($level4) . '">' . $level4->Title . '</a></li>';
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
