<?php include('header.php'); ?>
    <!-- Main Start -->
    <main>
		<!-- Services -->
		<section class="container my-4">
			<h1 class="text-center mb-4 section-heading border-bottom pb-2">Enquiry Form</h1>
			<div class="row">
				<div class="col-md-6">
					<img src="imgs/enquiry.jpg" class="img-fluid" /> 
				</div>
				<div class="col-md-6">
					<form>
						<table class="table table-bordered">
							<tr>
								<th>Full Name <span class="text-danger">*</span></th>
								<td><input type="text" class="form-control" placeholder="Full Name" /></td>
							</tr>
							<tr>
								<th>Email <span class="text-danger">*</span></th>
								<td><input type="email" class="form-control" placeholder="Email" /></td>
							</tr>
							<tr>
								<th>Location <span class="text-danger">*</span></th>
								<td><input type="text" class="form-control" placeholder="Location" /></td>
							</tr>
							<tr>
								<th>Message <span class="text-danger">*</span></th>
								<td>
									<textarea class="form-control" rows="5"></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" class="btn btn-primary" />
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</section>
		<!-- End -->
    </main>
    <!-- End -->
<?php include('footer.php'); ?>