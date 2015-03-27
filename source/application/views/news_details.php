<?php
	function formatMonth($id){
		switch ($id)
		{
			case '1': return 'JAN';
			case '2': return 'FEB';
			case '3': return 'MAR';
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


<?php foreach ($articles as $article) { ?>
<div class="news-details-template">
	<?php formatDateBox($article->CreatedAt) ?>
	<div class="news-headline">
		<h2><a href="<?php $article->Route ?>" class="prevent"><?php echo $article->Title; ?></a></h2>
	</div>
	<div class="clear"></div>

	<div class="news-content">
		<?php echo $article->Content;?>
	</div>
</div>

<?php } ?>

