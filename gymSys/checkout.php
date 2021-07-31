<?php include('header.php'); ?>
    <!-- Main Start -->
    <main>
		<!-- Services -->
		<section class="container my-4">
			<h1 class="text-center mb-4 section-heading border-bottom pb-2">Checkout</h1>
				<table class="table table-bordered">
					<thead class="table-warning">
						<tr>
							<th>Plan</th>
							<th>Plan Detail</th>
							<th>Payment For</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<table class="table-bordered table">
									<tr>
										<th>Name</th>
										<td>Basic</td>
									</tr>
									<tr>
										<th>Price</th>
										<td>$150</td>
									</tr>
									<tr>
										<th>Max Member</th>
										<td>30</td>
									</tr>
									<tr>
										<th>Already Registered</th>
										<td>15</td>
									</tr>
									<tr>
										<th>Balance Seats</th>
										<td>15</td>
									</tr>
								</table>
							</td>
							<td>
								<ul class="list-unstyled">
					              <li>Exercise Schedule</li>
					              <li>Diet Plan</li>
					              <li>Individual Coach</li>
					              <li>Cardio</li>
					            </ul>
							</td>
							<td>
								<table class="table table-bordered">
									<tr>
										<td><input data-planprice="150" data-discount="0" type="radio" id="validity1" name="validity" class="select-validity" value="1" /></td>
										<th><label for="validity1">1 Month</label></th>
										<td></td>
									</tr>
									<tr>
										<td><input data-planprice="150" data-discount="10" type="radio" id="validity2" name="validity" class="select-validity" value="3" /></td>
										<th><label for="validity2">3 Month</label></th>
										<td>10%</td>
									</tr>
									<tr>
										<td><input data-planprice="150" data-discount="20" type="radio" id="validity3" value="6" name="validity" class="select-validity" /></td>
										<th><label for="validity3">6 Month</label></th>
										<td>20%</td>
									</tr>
									<tr>
										<td><input data-planprice="150" data-discount="30" type="radio" id="validity4" value="12" name="validity" class="select-validity" /></td>
										<th><label for="validity4">12 Month</label></th>
										<td>30%</td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
					<tfoot class="table-info">
						<tr>
							<td></td>
							<th>Total Amount</th>
							<td><b>$<span class="totalAmount">150</span></b></td>
						</tr>
						<tr>
							<td colspan="2"></td>
							<td><input type="submit" value="Proceed to Payment" class="btn btn-primary" /></td>
						</tr>
					</tfoot>
				</table>
		</section>
		<!-- End -->
    </main>
    <!-- End -->

<script type="text/javascript">
	$(document).ready(function(){
		$(".select-validity").on('click',function(){
			var _planPrice=$(this).attr('data-planprice');
			var _planDisc=$(this).attr('data-discount');
			var _planValid=$(this).val();
			var _totalPrice=_planPrice*_planValid;
			if(_planDisc>0){
				var _discountedPrice=_totalPrice*_planDisc/100;
				_discountedPrice=_totalPrice-_discountedPrice;
			}else{
				var _discountedPrice=_totalPrice;
			}
			$(".totalAmount").text(_discountedPrice);
		});
	});
</script>

<?php include('footer.php'); ?>