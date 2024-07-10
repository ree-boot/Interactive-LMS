<?php
  include('./header.php');
?>

  <!-- Course Page Banner -->
  <div class="container-fluid bg-dark" style="height: 450px;">
    <div class="row">
      <img src="./Resources/coursebanner.jpg" alt="courses" style="height: 450px; object-fit:cover;">
    </div>
  </div>

<!-- Main Content -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <img src="./Resources/guitar.png" class="card-img-top" alt="Guitar">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Course Name: Learn Guitar</h5>
        <p class="card-text">Description: Some Text.</p>
        <p class="card-text">Duration: 30 Days</p>
        <form action="" method="post">
          <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
            
          <span class="font-weight-bolder">&#8377 400</span>
          </p>
          <button type="submit" class="btn btn-primary text-white float-right" style="font-weight: bolder;" name="buy">Buy Now</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Lesson No.</th>
          <th scope="col">Lesson Name</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Introduction</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
  include('./footer.php');
?>