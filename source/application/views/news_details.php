<?php for ($j=0; $j < 3; $j++) { ?>
<div class="news-details-template">
	<div class="date-image">
		<div class="box">
			<div class="month">APR</div>
			<div class="day">15</div>
		</div>
		<div class="year">2015</div>
	</div> 
	<div class="news-headline">
		<h2><a href="#" class="prevent">Link do vesti, ovo je neki naslov, moze da ide u vise redova itd veoma cudnovato</a></h2>
	</div>
	<div class="clear"></div>

	<div class="news-content">
		<?php for ($i=0; $i < 120; $i++) { 
			echo "Hello dear viewer";
		}
		?>
	</div>
</div>

<?php } ?>

