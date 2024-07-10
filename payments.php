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
<div class="container">
  <h2 class="text-center my-4">Your Payments</h2>
  <form method="post" action="">
    <div class="form-group row">
      <label class="offset-sm-3 col-form-label">Order ID:</label>
      <div>
        <input type="text" class="form-control mx-3">
      </div>
      <div>
        <input type="submit" class="btn btn-primary mx-4" value="View">
      </div>
    </div>
  </form>
</div>

<?php
  include('./contact.php');
?>

<?php
  include('./footer.php');
?>