<?php include('header.php'); ?>
    <!-- Main Start -->
    <section class="container my-4">
    	<h1 class="text-center mb-4 section-heading border-bottom pb-2">Plans</h1>
  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Basic</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$150<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Exercise Schedule</li>
              <li>Diet Plan</li>
              <li>...</li>
              <li>...</li>
            </ul>
            <a href="checkout.php" class="w-100 btn btn-lg btn-outline-primary">Get started</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Medium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$250<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Exercise Schedule</li>
              <li>Diet Plan</li>
              <li>Individual Coach</li>
              <li>Cardio</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Advance</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$350<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Exercise Schedule</li>
              <li>Diet Plan</li>
              <li>Individual Coach</li>
              <li>Cardio & Functional Training</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Get started</button>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4">Compare plans</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Basic</th>
            <th style="width: 22%;">Medium</th>
            <th style="width: 22%;">Advance</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Exercise Schedule</th>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Diet Plan</th>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Individual Coach</th>
            <td><i class="bi bi-x-lg text-danger"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Cardio & Functional Training</th>
            <td><i class="bi bi-x-lg text-danger"></i></td>
            <td><i class="bi bi-x-lg text-danger"></i></td>
            <td><i class="bi bi-check-lg"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</section>
    <!-- End -->
<?php include('footer.php'); ?>