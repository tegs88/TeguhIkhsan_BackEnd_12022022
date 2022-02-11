<div class="pull-right">
	<a href="<?php echo site_url('transaksi/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>No</th>
		<th>Account Id</th>
		<th>Transaction Date</th>
		<th>Description</th>
		<th>Debit Credit</th>
		<th>Amount</th>
    </tr>
	<?php 
		$no = 1;
		foreach($transaksi as $t){		
	?>
    <tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $t['AccountId']; ?></td>
		<td><?php echo $t['TransactionDate']; ?></td>
		<td><?php 
		if($t['Description'] == 1)
			echo "Tarik Tunai";
		else if($t['Description'] == 2)
			echo "Setor Tunai";
		else if($t['Description'] == 3)
			echo "Beli Pulsa";
		else if($t['Description'] == 4)
			echo "Bayar Listrik";
		?></td>
		<td><?php echo $t['DebitCreditStatus']; ?></td>
		<td><?php echo $t['Amount']; ?></td>
    </tr>
	<?php } ?>
</table>
