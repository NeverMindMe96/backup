<!DOCTYPE html>
<?php
  // Include server.php for database connection and other server-side operations                                           
  include('server.php');
  // Function to check if a user already exists in the database
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
  //have fun with this code yuvaraj
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve form data
      $email = $_POST['email'];
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $password = $_POST['password'];
      $phoneNumber = $_POST['phoneNumber'];
      $dob = $_POST['DOB'];
      // Check if all fields are filled
      if (empty($email) || empty($firstName) || empty($lastName) || empty($password) || empty($phoneNumber)||empty($dob)) {
        $warning_message = "All fields are required";
        echo '<div class="alert alert-warning" role="alert">' . $warning_message . '</div>';
      } else {
          // Check if user already exists
          if (userExists($conn, $email)) {
              //echo "User already exists!";
              $warning_message = "User mail id already exits";
              echo '<div class="alert alert-danger" role="alert">' . $warning_message . '</div>';
          } else {
              // Prepare SQL statement to insert data into the database
              $sql = "INSERT INTO login (email, firstname, lastname, password, contactnumber,DOB) VALUES ('$email', '$firstName', '$lastName', '$password', '$phoneNumber','$dob')";
              if ($conn->query($sql) === TRUE) {
                   //alert("User registered successfully");
                   $warning_message = "Registeration successful";
                   echo '<div class="alert alert-success" role="alert">' . $warning_message . '</div>';
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }
          }
      }
      echo "Total registered users: " . getNumberOfUsers($conn);
  }
  // Display the number of registered users
?>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AboutUs.php">About us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  AI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="https://chat.openai.com/">Chat GPT</a></li>
                  <li><a class="dropdown-item" href="https://gemini.google.com/app">Gemini</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=q-Y0bnx6Ndw">The one about Cute Puppy</a></li>
                </ul>
              </li>
              <button id="undoBtn" class="btn btn-primary">Undo</button>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <br><br><br><br><br>
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
                     <div class="form-group">
                       <label for="DOB">Date of Birth</label>
                       <input name="DOB" type="date" class="form-control" id="date" placeholder="dd/mm/yyyy">
                     </div>
                   </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="termsCheckbox">
                   <label class="form-check-label" for="termsCheckbox">I agree to the terms and conditions</label>
                  </div>
                 <button type="submit" class="btn btn-primary" id="submitButton" disabled>Submit</button>
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
    <script>
document.getElementById('termsCheckbox').addEventListener('change', function() {
    document.getElementById('submitButton').disabled = !this.checked;
});
</script>
    <script>
    $(document).ready(function() {
      $('#undoBtn').click(function() {
        window.history.back(); // Redirect to previously opened page
      });
    });
  </script> 
</body>
</html>
