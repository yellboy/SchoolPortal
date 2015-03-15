

<ul class="level1">
	<?php
		for ($i=0; $i < 2; $i++) { 
		?>
	<li>
	    <div class="dropdown">
	    	<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#">
	        	<strong>Школа</strong> 
	        	<span class="caret"></span> <!-- hide span if no kids -->
	    	</a>
	    	<!-- hide ul if no kids -->
			<ul class="dropdown-menu multi-level level2" role="menu" aria-labelledby="dropdownMenu">
		      <li><a href="#">Some action</a></li>
		      <li><a href="#">Some other action</a></li>
		      <li class="dropdown-submenu">
		        <a tabindex="-1" href="#">Hover me for more options</a>
		        <ul class="dropdown-menu">
		          <li><a tabindex="-1" href="#">Second level</a></li>
		          <li class="dropdown-submenu">
		            <a href="#">Even More..</a>
		            <ul class="dropdown-menu">
		                <li><a href="#">3rd level</a></li>
		            	<li><a href="#">3rd level</a></li>
		            </ul>
		          </li>
		          <li><a href="#">Second level</a></li>
		          <li><a href="#">Second level</a></li>
		        </ul>
		      </li>
		    </ul>
	   </div>
	</li>
	<?php
		}
	?>
	<li>
		<div class="dropdown">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#">
				<strong>Запослени</strong> 
				<span class="caret"></span> <!-- hide span if no kids -->
			</a>
			<!-- hide ul if no kids -->
			<ul class="dropdown-menu multi-level level2" role="menu" aria-labelledby="dropdownMenu">
			  <li><a href="">Директор и заменик директора</a></li>
			  <li><a href="/teachers">Наставници</a></li>
			</ul>
		</div>
	</li>
	<li>
		<div class="dropdown">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#">
				<strong>Алумни</strong> 
				<span class="caret"></span> <!-- hide span if no kids -->
			</a>
			<!-- hide ul if no kids -->
			<ul class="dropdown-menu multi-level level2" role="menu" aria-labelledby="dropdownMenu">
			  <li><a href="">Алумнисти</a></li>
			  <li><a href="/add-to-alumni">Пријави се на листу</a></li>
			</ul>
		</div>
	</li>
	  <div class="clear"></div>
</ul> 
