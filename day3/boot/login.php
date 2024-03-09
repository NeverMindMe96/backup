<!DOCTYPE html>


<?php
// Include server.php to handle database connections and user authentication
include('server.php');




function loginUser($email, $password, $conn) {
  global $errors;

  // Validate user input
  if (empty($email)) {
      array_push($errors, "Email is required");
  }
  if (empty($password)) {
      array_push($errors, "Password is required");
  }

  // If there are no validation errors, attempt to login the user
  if (count($errors) == 0) {
      $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
      $result = $conn->query($sql);

      if ($result->num_rows == 1) {
          // User found, return user information
          return $result->fetch_assoc();
      } else {
          // User not found or incorrect credentials
          array_push($errors, "Invalid email or password");
          return null;
      }

  }
}

// Initialize variables to hold user input
$email = "";
$password = "";

// Initialize variable to hold login errors
$errors = array();

// Initialize variable to hold user information
$userInfo = array();

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Attempt to login user
    $userInfo = loginUser($email, $password, $conn);
    
    // If user info is not null, display user information
    if ($userInfo) {

        session_start();

        $firstName = $userInfo['firstname'];
        $lastName = $userInfo['lastname'];
        $phoneNumber = $userInfo['contactnumber'];
        // Display user information
        echo "<h3>Welcome, $firstName $lastName</h3>";
        echo "<p>Phone Number: $phoneNumber</p>";

        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastname'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['phonenumber'] = $phoneNumber;

        header( 'Location: login_welcome.php' ) ; 

        
        
    } else {
        // If user info is null, display login error
        echo "<p>Login failed. Invalid email or password.</p>";
    }
}


?>


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
<body class="BCK" style="position: relative;">


    

    <!--Navigation bar-->
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
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>


      <!-- undo and redo button-->
      
      
      <!-- Bootstrap JS and jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      <script>
        // Example variables to simulate actions
        var actions = [];
        var currentIndex = -1;
      
        // Function to perform an action (in this example, adding to a list)
        function performAction(action) {
          actions.push(action);
          currentIndex++;
          updateButtons();
        }
      
        // Function to update button states
        function updateButtons() {
          if (currentIndex >= 0) {
            $('#undoButton').prop('disabled', false);
          } else {
            $('#undoButton').prop('disabled', true);
          }
          if (currentIndex < actions.length - 1) {
            $('#redoButton').prop('disabled', false);
          } else {
            $('#redoButton').prop('disabled', true);
          }
        }
      
        // Simulated actions
        $('#undoButton').click(function() {
          if (currentIndex >= 0) {
            console.log('Undo: ' + actions[currentIndex]);
            currentIndex--;
            updateButtons();
          }
        });
      
        $('#redoButton').click(function() {
          if (currentIndex < actions.length - 1) {
            currentIndex++;
            console.log('Redo: ' + actions[currentIndex]);
            updateButtons();
          }
        });
      
        // Simulate actions (replace with your actual actions)
        performAction('Action 1');
        performAction('Action 2');
        performAction('Action 3');
      </script>


      
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="login-container bg-light p-4 rounded">
              <h3 class="text-center mb-4">Login</h3>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" value="Register" class="btn btn-primary btn-block">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      

      <br><br><br><br><br><br><br><br><br><br>
      <!--Footer-->
      <footer class="footer" style="background-color: #333333; color: #ffffff;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 AI Insight. All rights reserved.</p>
                    <p>123 Main Street, Erode, TN,India,</p>
                    <p>Email: santhoshradhai2005@gmail.com</p>
                    <p>Phone: +91 8754918414</p>
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

