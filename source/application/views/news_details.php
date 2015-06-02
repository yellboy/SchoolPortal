
<?php
	function formatMonth($id){
		switch ($id)
		{
			case '1': return 'JAN';
			case '2': return 'FEB';
			case '3': return 'MAR';
			case '4': return 'APR';
			case '5': return 'MAJ';
			case '6': return 'JUN';
			case '7': return 'JUL';
			case '8': return 'AVG';
			case '9': return 'SEP';
			case '10': return 'OKT';
			case '11': return 'NOV';
			case '12': return 'DEC';
			default: return '';
		}
	}

	function formatDateBox($date)
	{
		$array = date_parse($date);
		echo '
			<div class="date-image">
				<div class="box">
					<div class="month">' . formatMonth($array['month']) .'</div>
					<div class="day">' . $array['day'] . '</div>
				</div>
				<div class="year">' . $array['year'] . '</div>
			</div>';
	}

?>

<?php if ($category->IsCourse == 1){
	echo '<a class="text-muted" id="toggle-materials" href="#">Прикажи материјале</a>';
	echo '<ul id="materials-list">';
	
	foreach($files as $file) {
		echo '<li><a class="text-muted" href=" ' . base_url() . $file->FilePath . '">' .$file->Title . '</li>';
	}
	
	echo '</ul>';
}?>


<?php foreach ($articles as $article) { ?>
<div class="news-details-template">
	<?php 
		if ($category->IsHome == 1){
			formatDateBox($article->CreatedAt);
		}
	?>
	<div class="news-headline">
		<h2><a href="#" class="prevent"><?php echo $article->Title; ?></a></h2>
	</div>
	<div class="clear"></div>

	<div class="news-content">
		<?php include($article->Content); ?>
	</div>
</div>

<?php } ?>

