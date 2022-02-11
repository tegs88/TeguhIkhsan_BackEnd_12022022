<?php echo form_open('transaksi/add',array("class"=>"form-horizontal")); ?>

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
		<label for="Description" class="col-md-4 control-label">Description</label>
		<div class="col-md-8">
			<select name="Description" class="form-control">
				<option value="">select</option>
				<?php 
				$Description_values = array(
					'1'=>'Tarik Tunai',
					'2'=>'Setor Tunai',
					'3'=>'Beli Pulsa',
					'4'=>'Bayar Listrik',
				);

				foreach($Description_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('Description')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="DebitCreditStatus" class="col-md-4 control-label">DebitCreditStatus</label>
		<div class="col-md-8">
			<select name="DebitCreditStatus" class="form-control">
				<option value="">select</option>
				<?php 
				$DebitCreditStatus_values = array(
					'D'=>'Debit',
					'C'=>'Credit',
				);

				foreach($DebitCreditStatus_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('DebitCreditStatus')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="TransactionDate" class="col-md-4 control-label">TransactionDate</label>
		<div class="col-md-8">
			<input type="text" name="TransactionDate" value="<?php echo $this->input->post('TransactionDate'); ?>" class="form-control" id="TransactionDate" />
		</div>
	</div>
	<div class="form-group">
		<label for="Amount" class="col-md-4 control-label">Amount</label>
		<div class="col-md-8">
			<input type="text" name="Amount" value="<?php echo $this->input->post('Amount'); ?>" class="form-control" id="Amount" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>