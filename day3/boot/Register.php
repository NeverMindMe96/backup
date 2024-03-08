<!DOCTYPE html>




<?php
  // Include server.php for database connection and other server-side operations
  include('server.php');
  
  // Function to check if a us
  er already exists in the database
  function userExists($conn, $email) {
      $sql = "SELECT * FROM login WHERE email='$email'";
      $result = $conn->query($sql);
      return $result->num_rows > 0;
  }
  
  // Function to get the number of registered users
  function getNumberOfUsers($conn) {
      $sql = "SELECT COUNT(*) as total FROM login";
      $result = $conn->query($sql);
      $data = $result->fetch_assoc();
      return $data['total'];
  }
  
  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve form data
      $email = $_POST['email'];
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $password = $_POST['password'];
      $phoneNumber = $_POST['phoneNumber'];
  
      // Check if user already exists
      if (userExists($conn, $email)) {
          echo "User already exists!";
      } else {
          // Prepare SQL statement to insert data into the database
          $sql = "INSERT INTO login (email, firstname, lastname, password, contactnumber) VALUES ('$email', '$firstName', '$lastName', '$password', '$phoneNumber')";
  
          if ($conn->query($sql) === TRUE) {
              echo "User registered successfully";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }

      }
  }
  
  // Get the number of registered users
  $numberOfUsers = getNumberOfUsers($conn);
  echo "Total registered users: $numberOfUsers";
  
  // Close connection
  $conn->close();
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

      <br><br><br><br><br>

        

        <!-- $email = $_POST['email'];
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $password = $_POST['password'];
      $phoneNumber = $_POST['phoneNumber']; -->



      <!--REgisteration box-->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h2 class="text-center mb-4">Register</h2>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Enter first name">
                  </div>
                  <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Enter last name">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="Contace.No">Contact Number</label>
                    <input type="contact-number" name="phoneNumber" class="form-control" id="Phnumber" placeholder="123456789">
                  </div>
                  <button type="submit" value="Register" class="btn btn-primary btn-block">Register</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br><br><br><br><br>
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

