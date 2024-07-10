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
              <a class="nav-link" href="courses.php">Courses</a>
            </li>
            <li class="nav-item custom-nav-item">
              <a class="nav-link" href="payments.php">Payments</a>
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
