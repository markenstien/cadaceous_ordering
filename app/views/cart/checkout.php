<?php build('content') ?>
	<div class="container" style="padding: 50px 0px;">
		<?php
			Form::open([
				'method' => 'post'
			]);
			
		?>
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Checkout Page</h4>
			</div>

			<div class="card-body">
				<div class="mb-4">
					<div class="form-group row mb-2">
						<div class="col-md-6">
							<?php echo $formPayment->getCol('payer_name', [
								'attributes' => [
									'required' => true
								]
							])?>
						</div>

						<div class="col-md-6">
							<?php echo $formPayment->getCol('mobile_number', [
								'attributes' => [
									'required' => true
								]
							])?>
						</div>
					</div>

					<div class="form-group">
						<?php  echo $formPayment->getCol('address')?>
					</div></div>
				<?php if($items) :?>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<th>#</th>
							<th>Item</th>
							<th>Price</th>
							<th style="width:15%">Quantity</th>
							<th>Amount</th>
						</thead>

						<tbody>
							<?php $totalAmount = 0?>
							<?php foreach($items as $key => $row) :?>
								<?php $itemPriceTotal = ($row->quantity * $row->sold_price)?>
								<?php $totalAmount += $itemPriceTotal?>
								<tr>
									<td><?php echo ++$key?></td>
									<td><?php echo wLinkDefault(_route('home:catalog-view', $row->item_id), $row->name)?></td>
									<td><?php echo $row->sold_price?></td>
									<td><?php echo $row->quantity?></td>
									<td><?php echo amountHTML($itemPriceTotal)?></td>
								</tr>
							<?php endforeach?>
						</tbody>
					</table>
				</div>
				<?php else:?>
					<p>No Cart Items add now here. <?php echo wLinkDefault(_route('home:shop'), 'Show now')?> </p>
				<?php endif?>
			</div>

			<div class="card-footer">
				<div class="row">
					<div class="col-md-6">
						<?php if(empty(whoIs())) :?>
							<h3 class="text-danger">You must have an account to proceed checkout</h3>
							<?php echo wLinkDefault(_route('auth:register'), 'Create your Account here.')?>
						<?php else :?>
							<input type="submit" name="btn_checkout" class="btn btn-primary btn-lg" value="Checkout">
						<?php endif?>
					</div>
					<div class="col-md-6" style="text-align:right">
						<h3><?php echo amountHTML($totalAmount)?></h3>
					</div>
				</div>
			</div>

			<img src="<?php echo _path_upload_get('cadaceous_logo.png');?>" alt="<?php echo COMPANY_NAME?> Logo"
              style="width:150px; margin:0px auto; display:block">
		</div>
		<?php Form::close()?>
	</div>
<?php endbuild()?>
<?php loadTo('tmp/landing')?>