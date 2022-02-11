<div class="pull-right">
	<a href="<?php echo site_url('nasabah/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>AccountId</th>
		<th>Name</th>
		<th>Actions</th>
    </tr>
	<?php foreach($nasabah as $t){ ?>
    <tr>
		<td><?php echo $t['AccountId']; ?></td>
		<td><?php echo $t['Name']; ?></td>
		<td>
            <a href="<?php echo site_url('nasabah/edit/'.$t['AccountId']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('nasabah/remove/'.$t['AccountId']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
