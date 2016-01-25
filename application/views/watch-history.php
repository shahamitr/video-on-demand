<div class="text-center">
	<h1><?= $title ?></h1>

	<?php
		if(!empty($session_list)) {
			$i = 0;
			?>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Description</th>
					<th>Language</th>
					<th>Publish Date</th>
					<th>Category</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($session_list as $key=>$videoId) {
					?>
				<tr>
					<td class="text-left"><?= (++$i) ?></td>
					<td class="text-left"><?= $videoInformation->entries[$videoId]->title ?></td>
					<td class="text-left"><?= $videoInformation->entries[$videoId]->description ?></td>
					<td class="text-left"><?= $videoInformation->entries[$videoId]->metadata['0']->name ?></td>
					<td class="text-left"><?= date('Y-m-d',$videoInformation->entries[$videoId]->publishedDate) ?></td>
					<td class="text-left"><?= $videoInformation->entries[$videoId]->categories['0']->title ?></td>
				</tr>
				<?php } ?>
				</tbody>
			</table>
			<?php
		} else {
			?>
			<div class="alert alert-info ">Buddy! you have not visited any videos yet, please do so.</div>
			<?php
		}
	?>
<br>
<a href="<?php echo base_url();?>welcome/index">Back To Video List</a>
	<?php if(!empty($session_list)) { ?>
	&nbsp; | &nbsp;
	<a href="<?php echo base_url();?>welcome/clear">Clear History</a>
	<?php } ?>
</div>