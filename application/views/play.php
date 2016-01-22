<div class="text-center">
	<h1><?= $title ?></h1>

	<video controls width="80%" autoplay>
	<source class="lazyOwl" src="<?=$video?>" type="video/mp4">
	<source src="movie.ogg" type="video/ogg">
	Your browser does not support the video tag.
</video>
<br>
<a href="<?php echo base_url();?>welcome/index">Back To Video List</a>
</div>