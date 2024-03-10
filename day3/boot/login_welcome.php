<?php
session_start(); // Start the session to access session variables
//echo $_SESSION['email'];
// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Display welcome message with user's first name
$firstName = $_SESSION['firstName'];
$email = $_SESSION['email'];

// Handle logout request
if (isset($_POST['logout'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to login page after logout
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    

    <link rel="stylesheet" href="test.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body class="BCK">
   
    <!-- Add logout option -->
    
    <!-- You can add more content here as needed -->

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">AI Insight</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Register.html">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AboutUs.html">About us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <button type="button" class="btn btn-primary" id="undoButton" disabled>Undo</button>
            <button type="button" class="btn btn-primary" id="redoButton" disabled>Redo</button>
            </ul>

            <form class=" nav-item" method="post" action="">
                <label><?php echo $email ?></label>
                <input class="btn btn-danger"type="submit" name="logout" value="Logout">
            </form>
            
          </div>
        </div>
      </nav>

      <br><br>

      <div class="container">
      <h1>Welcome, <?php echo $firstName; ?>!</h1>
    <h1>Personal Information</h1>
    <div class="mb-3">
      <label for="personalInfoTextarea" class="form-label">Personal Information</label>
      <textarea class="form-control" id="personalInfoTextarea" rows="4" readonly style="font-size: large">
        Name: <?php echo $_SESSION['firstName'] .  " " .  $_SESSION['lastname'] ?> 
        Email: <?php echo $_SESSION['email'] ?> 
        Phone: <?php echo $_SESSION['phonenumber'] ?> 
        DOB: <?php echo $_SESSION['DOB'] ?> 
      </textarea>
    </div>
  </div>

  <br><br>


      <body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="img/snake.jpg" class="card-img-top" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">Snake</h5>
            <a href="Snake.html" class="btn btn-primary" target ="_blank">Play</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img src="img/pacman.jpg" class="card-img-top" alt="Image 2">
          <div class="card-body">
            <h5 class="card-title">Pacman</h5>
            <a href="Pacman.html" class="btn btn-primary">Play</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <footer class="footer" style="background-color: #333333; color: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 Your Company Name. All rights reserved.</p>
                    <p>123 Main Street, City, Country</p>
                    <p>Email: info@example.com</p>
                    <p>Phone: +1234567890</p>
                </div>
                <div class="col-md-6 text-right">
                    <a href="#"><i class="fab fa-instagram fa-lg mr-3 text-white"></i></a>
                    <a href="#"><i class="fab fa-facebook fa-lg mr-3 text-white"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-lg mr-3 text-white"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-lg mr-3 text-white"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-lg mr-3 text-white"></i></a>
                    <a href="#"><i class="fab fa-pinterest fa-lg mr-3 text-white"></i></a>
                </div>
            </div>
        </div>
    </footer>



</body>
</html>
