<div class="text-center">
	<h1><?= $title ?></h1>

	<?php
		if(!empty($session_list)) {
			?>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Description</th>
					<th>Length</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>John</td>
					<td>Doe</td>
					<td>john@example.com</td>
				</tr>
				<tr>
					<td>Mary</td>
					<td>Moe</td>
					<td>mary@example.com</td>
				</tr>
				<tr>
					<td>July</td>
					<td>Dooley</td>
					<td>july@example.com</td>
				</tr>
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
</div>