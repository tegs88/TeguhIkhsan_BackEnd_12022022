<?php echo form_open('report',array("class"=>"form-horizontal")); ?>
<div class="form-group">
<label for="AccountId" class="col-md-4 control-label">Nasabah</label>
		<div class="col-md-8">
			<select name="AccountId" class="form-control">
				<option value="">select nasabah</option>
				<?php 
				foreach($all_nasabah as $nasabah)
				{
					$selected = ($nasabah['AccountId'] == $this->input->post('AccountId')) ? ' selected="selected"' : "";

					echo '<option value="'.$nasabah['AccountId'].'" '.$selected.'>'.$nasabah['Name'].'</option>';
				} 
				?>
			</select>
		</div>
</div>
<div class="form-group">
    <label for="StartDate" class="col-md-4 control-label">Start Date</label>
    <div class="col-md-8">
        <input type="text" name="StartDate" value="<?php echo $this->input->post('StartDate'); ?>" class="form-control" id="StartDate" />
    </div>
</div>
<div class="form-group">
    <label for="EndDate" class="col-md-4 control-label">End Date</label>
    <div class="col-md-8">
        <input type="text" name="EndDate" value="<?php echo $this->input->post('EndDate'); ?>" class="form-control" id="EndDate" />
    </div>
</div>
<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Show</button>
        </div>
	</div>
<?php echo form_close(); ?>

<?php
    if(isset($report)){
?>
<table class="table table-striped table-bordered">
    <tr>
		<th>Transaction Date</th>
		<th>Description</th>
		<th>Credit</th>
        <th>Debit</th>
        <th>Amount</th>
    </tr>
    <?php foreach($report as $r){ ?>
    <tr>
		<td><?php echo $r['TransactionDate']; ?></td>
		<td><?php 
		if($r['Description'] == 1)
			echo "Tarik Tunai";
		else if($r['Description'] == 2)
			echo "Setor Tunai";
		else if($r['Description'] == 3)
			echo "Beli Pulsa";
		else if($r['Description'] == 4)
			echo "Bayar Listrik";
		?></td>
        <td><?php echo $r['Credit']; ?></td>
        <td><?php echo $r['Debit']; ?></td>
        <td><?php echo $r['Amount']; ?></td>
    </tr>
	<?php } ?>
	
</table>
<?php } ?>
