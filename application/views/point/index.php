<table class="table table-striped table-bordered">
    <tr>
		<th>Account Id</th>
		<th>Name</th>
		<th>Point</th>
    </tr>
	<?php foreach($point as $p){ ?>
    <tr>
		<td><?php echo $p['AccountId']; ?></td>
		<td><?php echo $p['Name']; ?></td>
		<td><?php echo $p['total']; ?></td>
    </tr>
	<?php } ?>
</table>
