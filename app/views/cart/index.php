<?php build('content') ?>
	<div class="container" style="padding: 50px 0px;">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Cart Items</h4>
			</div>

			<div class="card-body">
				<?php Flash::show()?>
				<?php if($items) :?>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<th>#</th>
							<th>Item</th>
							<th>Price</th>
							<th style="width:15%">Quantity</th>
							<th>Amount</th>
							<th>Action</th>
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
									<td>
										<?php echo wLinkDefault('#', 'Edit')?> | 
										<?php echo wLinkDefault(_route('cart:delete', $row->id), 'Delete')?>
									</td>
								</tr>
							<?php endforeach?>
						</tbody>
					</table>
				</div>
				<?php else:?>
					<p>No Cart Items add now here. <?php echo wLinkDefault(_route('home:shop'), 'Show now')?> </p>
				<?php endif?>
			</div>

			<?php if($items) :?>
				<div class="card-footer">
					<div class="row">
						<div class="col-md-6">
							<?php echo wLinkDefault(_route('cart:checkout'), 'Checkout', [
								'class' => 'btn btn-primary btn-lg'
							])?>
						</div>
						<div class="col-md-6" style="text-align:right">
							<h3><?php echo amountHTML($totalAmount)?></h3>
						</div>
					</div>
				</div>
			<?php endif?>
		</div>
	</div>
<?php endbuild()?>
<?php loadTo('tmp/landing')?>