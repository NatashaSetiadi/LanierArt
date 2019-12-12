<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lanier HS Art</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Lanier HS Art</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="adminhome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminevents.php">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminclasses.php">Classes</a>
          </li>
             <li class="nav-item">
    
            <li class="nav-item">
            <a class="nav-link" href="adminclubs.php">Clubs</a>
         
          </li>
            
              <li class="nav-item">
            <a class="nav-link" href="admingallery.php">Gallery</a>
         
          </li>
        <li class="nav-item">
            <a class="nav-link" href="admin  .php">  </a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php"><?php echo $_SESSION['username'];?></a>
            </li>
            
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead img-fluid">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Lanier High School <br> Art Program</h1>

        <h2 class="text-white-50 mx-auto mt-2 mb-5">General Info/Quote Here</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Learn More</a>

      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class=" hoverEffect row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">About Us</h2>
          <p class="text-white-50">About Text Here </p>
        </div>
      </div>
         <div class="hoverEffect row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">What we do?</h2>
          <p class="text-white-50">Lanier High School's art program provides students with an education in art so that they will be able to continue it as a hobby or a career in college. The program consists of outstanding art electives for more serious students and art club for students who want to do it more for fun. There is also the art National Honors Society, for students who stand out in their artistic ability. </p>
        </div>
      </div>
     
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
       
        </div>
       
           
           <div>
          <div class="missionStatement hoverEffect text-center text-lg-left">
            <h3>Our Mission</h3>
            <p class="text-left text-black-50 mb-0"> Mission Statement Here </p>
              
          </div>
                <div>
          <div class="missionStatement hoverEffect text-center text-lg-left">
            <h3>Our Teachers</h3>
            <p class="text-left text-black-50 mb-0"> The Lanier High School art program has two fantastic teachers, Mrs. Cole and Mrs. Junais. These teachers strive to provide students who desire to learn art an enjoyable education so that they can become better artists. </p>
              
          </div>
        </div>
        </div>
      </div>

      <!-- Project One Row -->
            <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/cowpi3.PNG" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Image Title Here</h4>
                <p class="mb-0 text-white-50">More Image Info Here</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/guillotine.png" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Image Title Here</h4>
                <p class="mb-0 text-white-50">More Image Info Here</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/chumBucket.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Image Title Here</h4>
                <p class="mb-0 text-white-50">More Image Info Here <br>(Optional)</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Possible newsletter</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">918 Buford Highway, Sugar Hill, Georgia, 30518</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">lhsart@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+1 (999) 999-9999</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
  
        <a href="#" class="mx-2">
          <i class="fab fa-instagram"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Siteable Technologies 2019<br />
      Designed By Ian Toole and Natasha Setiadi
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
    
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
   
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>
      <script src="js/grayscale.js"></script>

</body>

</html>
