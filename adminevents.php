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
            <a class="nav-link" href="profile.php"><?php echo $_SESSION['username'];?> </a>
            </li>
            
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  

  <!-- About Section -->
  <section id="about" class="pageHeads text-center">
    <div class="container">
      <div class=" row">
        <div class="col-lg-8 mx-auto">
          <h1 class="text-white mb-4">Events</h1>
          <p class="text-white-50">Event Schedule of the Art Program </p>
        </div>
      </div>
      
    
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">
<div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <iframe class="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.5112506622245!2d-84.03843488523188!3d34.10765908059089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f59148d3953171%3A0xf1be0728e406c9d9!2sSugar+Hill+City+Hall!5e0!3m2!1sen!2sus!4v1554723628810!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Sugar Hill MakerFest</h4>
                <p class="mb-0 text-white-50">April 27, 2019</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
            <iframe class="map"src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d13208.453014922019!2d-84.19594064149732!3d34.143444532861984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x88f59d006a8a2f8d%3A0x3b916f5570c6c705!2sDenmark+High+School%2C+Mullinax+Road%2C+Alpharetta%2C+GA!3m2!1d34.147596899999996!2d-84.22949469999999!4m0!5e0!3m2!1sen!2sus!4v1554570823617!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Forsyth Event</h4>
                <p class="mb-0 text-white-50">March 29-31 @ Denmark High School, Alpharetta, GA</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
       
        </div>
       
           <div>
          <div class=" text-center text-lg-left">
              
               </div>
                
        </div>
      </div>

      <!-- Project One Row -->
        


    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Possible Newsletter</h2>

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
      Designed by Ian Toole and Natasha Setiadi
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
