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

    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">
        <?php 
            for ($i = 0; $i < $numOfSlides; $i++) { 
                $isActive = $i == 0 ? "active" : "";               
                echo "
                    <div class='item " . $isActive . "'>
                      <img src='../styles/img/slider0" . ($i + 1) . ".jpg' alt='Slika gimnazije'>
                    </div>
                ";
            }
        ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div>


