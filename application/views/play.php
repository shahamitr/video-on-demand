<div class="text-center">
	<h1><?= $title ?></h1>

	<video id="video1" controls width="70%" >
	<source class="lazyOwl" src="<?=$video_info->contents[0]->url?>" type="video/mp4">
	<source src="movie.ogg" type="video/ogg">
	Your browser does not support the video tag.
</video>
<br>
<a href="<?php echo base_url();?>welcome/index">Back To Video List</a>
</div>

<script>
$(document).ready(function(){
	$("#video1").bind("ended", function() {
		location.href='<?php echo base_url();?>';
	});
});
</script>
