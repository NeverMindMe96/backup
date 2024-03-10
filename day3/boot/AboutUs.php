<!DOCTYPE html>



<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
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

      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto white_text " >
            <h2 class="text-center mb-4">About Us</h2>
            <p>Welcome to AI Insight, your go-to source for all things artificial intelligence.</p><br>
            <P>We are a team of At AI Insight, we're passionate about unraveling the mysteries of AI and bringing its transformative potential closer to you. Whether you're a seasoned AI enthusiast or just dipping your toes into this fascinating field, our mission is to provide clear, concise, and insightful content that demystifies AI concepts and keeps you updated on the latest developments.</P>
            <br><p>Our team of AI experts is dedicated to breaking down complex topics into digestible insights, empowering you to navigate the rapidly evolving landscape of artificial intelligence with confidence. From practical applications to ethical considerations, we're here to guide you through the exciting journey of AI discovery.
            <br><p>Join us as we explore the limitless possibilities of AI and discover how it's reshaping the world around us. Together, let's unlock the secrets of artificial intelligence and unlock its full potential for the benefit of all.</p>
            </p>
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
    $(document).ready(function() {
      $('#undoBtn').click(function() {
        window.history.back(); // Redirect to previously opened page
      });
    });
  </script>  

</body>

