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
      $sql = "SELECT * FROM logintable WHERE email='$email' AND password='$password'";
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

        //session_start();

        $username = $userInfo['username'];
        //$lastName = $userInfo['lastname'];
        //$phoneNumber = $userInfo['contactnumber'];
        // Display user information
        echo "<h3>Welcome, $username </h3>";
        //echo "<p>Phone Number: $phoneNumber</p>";

        //$_SESSION['firstName'] = $firstName;
        //$_SESSION['lastname'] = $lastName;
        //$_SESSION['email'] = $email;
        //$_SESSION['phonenumber'] = $phoneNumber;

        //header( 'Location: login_welcome.php' ) ; 
        
    } else {
        // If user info is null, display login error
        echo "<p>Login failed. Invalid email or password.</p>";
    }
}


?>

<html lang="en">
  <nav>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navigation Bar</title>
    <style type="text/css">
        *{
            text-decoration: none;
        }
        .navbar{
            background: orange; font-family: calibri; padding-right: 6px;padding-left: 15px;
        }
        .navdiv{
            display: flex; align-items: center; justify-content: space-between;
        }
        .logo a{
            font-size: 35px; font-weight: 600; color: white;
        }
        li{
            list-style: none; display: inline-block;
        }
        li a{
            color: white; font-size: 18px; font-weight: bold; margin-right: 10px;
        }
        button{
            background-color: orange; margin-left: 10px; border-radius: 10px; padding: 10px; width: 90px;
        }
        button a{
            color: white; font-weight: bold; font-size: 15px;
        }
    </style>

<body>
    <nav class="navbar">
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Home
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="home.html">About us</a></li>
        <li><a href="portpolio.html">Portfolio</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="services.html">Services</a></li>
      </ul>
    
    
  
        <div class="navdiv">
            <ul>
                
            </ul>
    </div>
        </div>
    
        <img src="un 2.png" class="logo" style="width:60px;height:60px;"> 
        <ul style="text-align:left;text-align: left;">
            
            <button><a href="new.html">Login</a></button>
            <button><a href="new.html">Sign up</a></button>
            <button><a href="programm1.html">Back</a></button>
            <button type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-search" style="text"></span> Search
              </button>
            
            </ul> <br><br><br>  
            <head>
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            </nav>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 style="text-align: center;color: orange;">Login</h2>
  <form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  >
    
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
  </form>
</div>

</body>
</html>