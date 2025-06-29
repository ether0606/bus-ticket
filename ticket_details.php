<?php include_once('include/header.php'); ?>
<?php

if(!isset($_SESSION['cart'])){ ?>
	<div class="row" style="margin-top: 143px;">
		<div class="col-12">
			<h1 class="text-center pb-5 mb-5"> No ticket found in cart</h1>
		</div>
	</div>
<?php }else{ ?>
	<div class="row" style="margin-top: 143px;">
		<div class="col-md-6 mb-5 mb-md-0">
			<h2 class="h3 mb-3 text-black">Billing Details</h2>
			<div class="p-3 p-lg-5 border bg-white">
				<form action="checkout.php" method="post">
				<div class="form-group row">
					<div class="col-md-6">
						<label for="name" class="text-black">Name <span class="text-danger">*</span></label>
						<input required="" type="text" class="form-control" value="<?= $_SESSION['customer_data']->name ?>" name="name">
						<input type="hidden" value="<?= $_SESSION['customer_data']->id ?>" name="customer_id">
					</div>
					<div class="col-md-6">
						<label for="email" class="text-black">Email <span class="text-danger">*</span></label>
						<input  required="" type="text" class="form-control" value="<?= $_SESSION['customer_data']->email ?>" name="email">
					</div>
				
					<div class="col-md-12">
						<label for="address" class="text-black">Address <span class="text-danger">*</span></label>
						<input required="" type="text" class="form-control" value="<?= $_SESSION['customer_data']->address ?>" name="address" placeholder="Street address">
					</div>
				
					<div class="col-md-6">
						<label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
						<input required="" type="text" class="form-control" value="<?= $_SESSION['customer_data']->contact_no ?>" name="phone" placeholder="Phone Number">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<button class="btn btn-black btn-lg py-3 btn-block" type="submit">Place Order </button>
					</div>
				</div>

				</form>
			</div>
		</div>


		<div class="col-md-6">
			<div class="row mb-5">
				<div class="col-md-12">
					<h2 class="h3 mb-3 text-black">Your Order</h2>
					<div class="p-3 p-lg-5 border bg-white">
						<div class="form-group">
							<label for="coupon_code">Coupon Code</label>
							<div class="input-group">
								<input type="text" class="form-control" id="coupon_code" placeholder="Enter coupon code">
								<div class="input-group-append">
									<button class="btn btn-primary" onclick="applyCoupon()">Apply</button>
								</div>
							</div>
							<span id="coupon_message" class="text-danger"></span>
						</div>
						<table class="table site-block-order-table mb-5">
							<thead>
								<th>Product</th>
								<th>Total</th>
							</thead>
							<tbody>
								<?php foreach($_SESSION['cart']['item'] as $seat){ ?>
										<tr>
											<td><?= $seat['name'] ?> </td>
											<td>BDT <?= $seat['price'] ?></td>
										</tr>
								<?php } ?>
										<tr>
											<td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
											<td class="text-black">BDT <?= $_SESSION['cart']['total'] ?></td>
										</tr>
										<tr>
											<td class="text-black font-weight-bold"><strong>Discount</strong></td>
											<td class="text-black">BDT <span id="discount_amount"><?= $_SESSION['cart']['discount'] ?? 0 ?></span></td>
										</tr>
										<tr>
											<td class="text-black font-weight-bold"><strong>Platform Charges</strong></td>
											<td class="text-black">BDT <?= $_SESSION['cart']['other_charge'] ?></td>
										</tr>
										<tr>
											<td class="text-black font-weight-bold"><strong>Order Total</strong></td>
											<td class="text-black">BDT <span id="grand_total"><?= ($_SESSION['cart']['total'] + $_SESSION['cart']['other_charge'] ) - ($_SESSION['cart']['discount'] ?? 0) ?></span></td>
										</tr>
										
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<script>
function applyCoupon() {
    const couponCode = $('#coupon_code').val();
    
    $.ajax({
        url: 'check_coupon.php',
        type: 'GET',
        data: { code: couponCode },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                $('td:contains("Discount")').next().text('BDT ' + response.discount);
                $('td:contains("Order Total")').next().text('BDT ' + response.grand_total);
                $('#coupon_message').html('<span class="text-success">'+response.message+'</span>');
                location.reload();
            } else {
                $('#coupon_message').html('<span class="text-danger">' + response.message + '</span>');
            }
        },
        error: function(xhr) {
            $('#coupon_message').html('<span class="text-danger">Error applying coupon</span>');
        }
    });
}
</script>

<?php require_once('include/footer.php')?>
						
						
		
						
				