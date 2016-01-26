
<?php /*
<div class="container-fluid">
	<div class="row-fluid">
		<div class="carousel slide" id="myCarousel">
			<div class="carousel-inner">
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
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>


	</div>
</div> */ ?>

<div class="text-center">
	<h1><?= $title ?></h1>

	<div id="owl-demo" class="owl-carousel owl-theme">
		<?php
		foreach($videos->entries as $key=>$video) {
			echo '<div class="item">
					<video controls width="80%">
						<source class="lazyOwl" src="'.$video->contents[0]->url.'" type="video/mp4">
						<source src="movie.ogg" type="video/ogg">
						Your browser does not support the video tag.
					</video>
					<br>
					'.$video->title.'
					<br>
					<a href="'.base_url().'welcome/play?v='.$key.'">Full Screen</a>
				</div>';
		}
		?>
	</div>
</div>
