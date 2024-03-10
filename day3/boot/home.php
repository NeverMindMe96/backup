<!DOCTYPE html>

<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    

    <link rel="stylesheet" href="test.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body class="BCK" style="position: relative;">


  <nav>
    <div class="p-5 text-center bg-dark" >
      <img src="img/AI (2).png" height="50px" >
      <h4 style="color:white">
        AI Insights: Unraveling the Future - A Newsletter Chronicle</h4>
      
  </div>

  </nav>


    


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand"> <img src="img/AI (2).png" style="width: 75px;"> </a>
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
                <a class="nav-link" href="AboutUs.php">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Blog.php">Blog</a>
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
      

      <br><br>
      <!--  cOROUSEL // SLIDESHOW-->
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>


          <div class="carousel-inner">


            <div class="carousel-item active">
              <img class="d-block w-100" src="img/mm1.png" alt="First slide"height="500" width="500">
              <div class="carousel-caption d-none d-md-block">
                
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/im6.jpg" alt="Second slide"height="500" width="500">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/im5.jpg" alt="Third slide"height="500" width="500">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/im3.jpg" alt="Third slide"height="500" width="500">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/im2.jpg" alt="Second slide"height="500" width="500">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/im4.jpg" alt="Third slide"height="500" width="500">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block w-100" src="img/im1.jpg" alt="Third slide"height="500" width="500">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>

          </div>
        </div>
      </div>
      
      <br><br>
      <!-- new columns // grids-->
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="news-box">
              <div class="overlay"></div> <!-- Moved overlay inside the news box -->
              <center><img src="img/im7.jpg" alt="News Image" height="150" width="150"></center>
              <h3 style="color:rgb(253, 249, 249)">AWS launches Generative AI Competency to grade AI offerings</h3>
          
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="news-box">
              <div class="overlay"></div> <!-- Moved overlay inside the news box -->
              <center><img src="img/po.jpg" alt="News Image" height="150" width="150"></center>
              <h3 style="color:aliceblue">Google's Gemini firestorm shows the risks of the company's race to catch up with its AI rivals</h3>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="news-box">
              <div class="overlay"></div> <!-- Moved overlay inside the news box -->
              <center><img src="img/th (2).jpeg" alt="News Image" height="150" width="150"></center>
              <h3 style="color:aliceblue">Microsoft AI engineer warns FTC about Copilot Designer safety concerns</h3>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
          <div class="news-box">
            <div class="overlay"></div> <!-- Moved overlay inside the news box -->
            <center><img src="img/th (3).jpeg" alt="News Image" height="150" width="150"></center>
            <h3 style="color:aliceblue">AI Data Theft: Ex-Google Engineer Indicted For Stealing Trade Secrets To Help Chinese Firms</h3>
            
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="news-box">
            <div class="overlay"></div> <!-- Moved overlay inside the news box -->
            <center><img src="img/th(4).jpeg" alt="News Image" height="150" width="150"></center>
            <h3 style="color:aliceblue">Elon Musk tells Sam Altman’s OpenAI to change its name to ‘Closed AI’, promises to drop lawsuit</h3>
            
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="news-box">
            <div class="overlay"></div> <!-- Moved overlay inside the news box -->
            <center><img src="img/th(5).jpeg" alt="News Image" height="150" width="150"></center>
            <h3 style="color:aliceblue">Cabinet Approves India AI Mission At An Outlay Of Rs 10,372 Crore For 5 Years</h3>
            
          </div>
        </div>
        </div>
      </div>


      
      
      
      <!-- Bootstrap JS and jQuery -->
      
      
      

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

    <script>
    $(document).ready(function() {
      $('#undoBtn').click(function() {
        window.history.back(); // Redirect to previously opened page
      });
    });
  </script>  
</body>
</html>