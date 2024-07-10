<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="CSS/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <!-- My CSS -->
    <link rel="stylesheet" href="CSS/style.css">

    <title>My LMS</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">My LMS</a>
        <span class="navbar-text">Welcome Seeker!</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav custom-nav pl-5">
            <li class="nav-item custom-nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#">Courses</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#">Payments</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#">My Profile</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginformModal">Login</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#">Logout</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#regformModal" href="#">Signup</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#">Suggestions</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Background Image -->
    <div class="container-fluid">
      <div class="bg-parent">
        <img class="bg-img" src="Resources/bgdimg.jpg">
        <div class="bg-overlay"></div>
      </div>
      <div class="overlay-content">
        <h1 class="my-content">Welcome to My LMS</h1>
        <br>
        <h3 class="my-content">Learn -> Implement -> Grow</h3>
        <br>
        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#regformModal">Get Started</a>
      </div>
    </div>

    <!--Home Page Text Banner -->
    <div class="container-fluid bg-danger txt-banner">
      <div class="row bottom-banner">
        <div class="col-sm">
          <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-users mr-3"></i> Industry Certified Instructors</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
        </div>
        <div class="col-sm">
          <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
        </div>
      </div>
    </div>

    <!-- Popular Courses -->
    <div class="container mt-5">
      <h1 class="text-center">Popular Courses</h1>
      
      <!-- Deck 1 -->
      <div class="row mt-4">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="Resources/guitar.png" class="card-img-top" alt="Guitar">
            <div class="card-body">
              <h5 class="card-title">Learn Easily!</h5>
              <p class="card-text">Some Text.</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 400</span>
              </p>
              <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="Resources/guitar.png" class="card-img-top" alt="Guitar">
            <div class="card-body">
              <h5 class="card-title">Learn Easily!</h5>
              <p class="card-text">Some Text.</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 400</span>
              </p>
              <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="Resources/guitar.png" class="card-img-top" alt="Guitar">
            <div class="card-body">
              <h5 class="card-title">Learn Easily!</h5>
              <p class="card-text">Some Text.</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
                <span class="font-weight-bolder">&#8377 400</span>
              </p>
              <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </div>

    <!-- Deck 2 -->
    <div class="row mt-4">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="Resources/python.png" class="card-img-top" alt="Python">
          <div class="card-body">
            <h5 class="card-title">Learn Easily!</h5>
            <p class="card-text">Some Text.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
              <span class="font-weight-bolder">&#8377 400</span>
            </p>
            <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="Resources/python.png" class="card-img-top" alt="Python">
          <div class="card-body">
            <h5 class="card-title">Learn Easily!</h5>
            <p class="card-text">Some Text.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
              <span class="font-weight-bolder">&#8377 400</span>
            </p>
            <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="Resources/python.png" class="card-img-top" alt="Python">
          <div class="card-body">
            <h5 class="card-title">Learn Easily!</h5>
            <p class="card-text">Some Text.</p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small>
              <span class="font-weight-bolder">&#8377 400</span>
            </p>
            <a class="btn btn-primary text-white" style="font-weight: bolder; float: right;" href="#">Enroll</a>
          </div>
        </div>
      </div>
    </div>

      <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="#">View All Courses</a>
      </div>
    </div>
    
    <!-- Contact Us -->
    <?php
      include('./contact.php');
    ?>
    <!-- Social Media Links -->
    <div class="container-fluid bg-danger">
      <div class="row text-white text-center p-1">
        <div class="col-sm">
          <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
        </div>
        <div class="col-sm">
          <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> X</a>
        </div>
        <div class="col-sm">
          <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a>
        </div>
        <div class="col-sm">
          <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
      </div>
    </div>

    <!-- About Section -->
    <div class="container-fluid p-4" style="background-color: white;">
      <div class="container" style="background-color: white;">
        <div class="row text-center">
          <div class="col-sm">
            <h5>About Us</h5>
            <p>About Us Text.</p>
          </div>
          <div class="col-sm">
            <h5>Category</h5>
            <a class="text-dark" href="#">Web Development</a>
            <br>
            <a class="text-dark" href="#">Web Designing</a>
            <br>
            <a class="text-dark" href="#">Android Development</a>
            <br>
            <a class="text-dark" href="#">iOS Development</a>
            <br>
            <a class="text-dark" href="#">Game Development</a>
            <br>
          </div>
          <div class="col-sm">
            <h5>Contact Us</h5>
            <p>Adress and contact info.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid bg-dark text-center p-2">
      <small class="text-white">Copyright &copy; 2024 || Designed By: Rishabh Rawat || <a href="#login" data-bs-toggle="modal" data-bs-target="#adloginformModal">Admin Login</a></small>
    </footer>

    <!-- User Registration -->
    <!-- Modal -->
    <div class="modal fade" id="regformModal" tabindex="-1" aria-labelledby="regformModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"  style="background-color: bisque;">
          <div class="modal-header" style="border-bottom: 2px solid black;">
            <h1 class="modal-title fs-5" id="regformModalLabel">User Registration</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="border-bottom: 2px solid black;">
            <!-- User Registration Form -->
            <form>
              <div class="form-group">
                <i class="fas fa-user"></i>
                <label for="usrRegName" class="pl-2 font-weight-bold">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="usrRegName" id="usrRegName">
              </div>
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="usrRegEmail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="usrRegEmail" id="usrRegEmail">
                <small class="form-text">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="usrRegPass" class="pl-2 font-weight-bold">Create Password</label>
                <input type="password" class="form-control" placeholder="Password" name="usrRegPass" id="usrRegPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Sign Up</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <!-- User Login -->
    <!-- Modal -->
    <div class="modal fade" id="loginformModal" tabindex="-1" aria-labelledby="loginformModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"  style="background-color: bisque;">
          <div class="modal-header" style="border-bottom: 2px solid black;">
            <h1 class="modal-title fs-5" id="loginformModalLabel">User Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="border-bottom: 2px solid black;">
            <!-- User Login Form -->
            <form id="usrLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="usrLogEmail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="usrLogEmail" id="usrLogEmail">
              </div>
              <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="usrLogPass" class="pl-2 font-weight-bold">Enter Password</label>
                <input type="password" class="form-control" placeholder="Password" name="usrLogPass" id="usrLogPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="usrLoginBtn">Login</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Admin Login -->
    <!-- Modal -->
    <div class="modal fade" id="adloginformModal" tabindex="-1" aria-labelledby="adloginformModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"  style="background-color: bisque;">
          <div class="modal-header" style="border-bottom: 2px solid black;">
            <h1 class="modal-title fs-5" id="adloginformModalLabel">Admin Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="border-bottom: 2px solid black;">
            <!-- Admin Login Form -->
            <form id="adLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i>
                <label for="adLogEmail" class="pl-2 font-weight-bold">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="adLogEmail" id="adLogEmail">
              </div>
              <div class="form-group">
                <i class="fas fa-key"></i>
                <label for="adLogPass" class="pl-2 font-weight-bold">Enter Password</label>
                <input type="password" class="form-control" placeholder="Password" name="adLogPass" id="adLogPass">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="adLoginBtn">Login</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="JS/jquery.min.js"></script>
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="JS/all.min.js"></script>
  </body>
</html>