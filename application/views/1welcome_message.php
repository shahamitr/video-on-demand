<h1><?= $title ?></h1>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	<?php
	for($i=1;$i<=$videos->totalCount;$i++) {
		$class = "";
		if($i==1){
			$class = "active";
		}
		echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="'.$class.'"></li>';
	}
	?>
	</ol>

	<div class="carousel-inner" role="listbox">
		<?php
			$i = 0;
			foreach($videos->entries as $video) {
				$class='';
				if($i==0) {
					$class='active';
				}
				echo '<div class="item '.$class.'">
						 <video controls>
						  <source src="'.$video->contents[0]->url.'" type="video/mp4">
						  <source src="movie.ogg" type="video/ogg">
						  Your browser does not support the video tag.
						</video>
				</div>';
				$i++;
			}
		?>
	</div>

	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>