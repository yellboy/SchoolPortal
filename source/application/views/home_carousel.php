<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <?php
        $numOfSlides = 5;

        echo "<ol class='carousel-indicators'>";
        for ($i = 0; $i < $numOfSlides; $i++) { 
            $isActive = $i == 0 ? "active" : "";
            echo "<li data-target='#carousel" . $i . "' data-slide-to='" . $i . "' class='" . $isActive ."'></li>";
        }
        echo "</ol>";
    ?>

    <div class="carousel-inner" role="listbox">
        <?php 
            for ($i = 0; $i < $numOfSlides; $i++) { 
                $isActive = $i == 0 ? "active" : "";
                echo "
                    <div class='item " . $isActive . "'>
                      <img src='/assets/styles/img/slider0" . ($i + 1) . ".jpg' alt='Slika gimnazije'>
                    </div>
                ";
            }
        ?>
    </div>

	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Sledeći</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Prethodni</span>
	</a>
</div>


