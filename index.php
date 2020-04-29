<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="css/all.min.css">

 <!-- Google Font -->
 <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="css/custom.css">

 <title>Gromos India</title>
</head>
<body>
 <!-- Start Navigation -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-0 fixed-top">
 <img src="images/tempsnip.png" class="img-fluid ml-2" style="border-radius:100px;">
 <span class="navbar-text"></span>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="myMenu">
   <ul class="navbar-nav pl-5 custom-nav">
    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
    <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Customer Login</a></li>
    <li class="nav-item"><a href="Admin/employeelogin.php" class="nav-link">Employee Login</a></li>
    <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
   </ul>
  </div>
  <h5 href="index.php" class="text-white">GROMOS INDIA</h5>
 </nav> <!-- End Navigation -->

 <!-- Start Header Jumbotron-->
 <header class="jumbotron back-image" style="background-image:url(images/hvac.jpg); margin-top:60px">
  <div class="myclass mainHeading">
   <h5 class="text-white font-weight-bold">Welcome to GROMOS INDIA</h5>
   <p class="font-italic text-white">Customer's Happiness is our Aim</p>
   <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
   <a href="#registration" class="btn btn-primary mr-4">Sign Up</a>
  </div>
 </header> <!-- End Header Jumbotron-->

 <!-- Start Introduction Section -->
 <div class="container">
  <div class="jumbotron">
   <h3 class="text-center"> Our Services</h3>
   <p>
	GROMOS INDIA is a service provider for Comfort air-conditioning systems. It fulfils the requirement which need to enhanced air-conditioning by effective periodical maintenance, operation & repairing by trained engineers with using genuine spare parts.

    GROMOS INDIA primarily focuses on both, domestic and commercial consumers. These include installation and commissioning of Room / Split ACs, Precession Air conditioner, Duct and packaged machines, HVAC piping & Insulation work in institutional and government organizations..    
   </p>
  </div>
 </div> <!-- End Introduction Section Container -->

 <!-- Start Services Section -->
 <div class="container text-center border-bottom" id="Services">
  <h2>Our Services</h2>
  <div class="row mt-4">
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
    <h4 class="mt-4">Installation & Commissioning</h4>
   </div>
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
    <h4 class="mt-4">Preventive Maintenance</h4>
   </div>
   <div class="col-sm-4 mb-4">
    <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
    <h4 class="mt-4">Repair & Maintenance</h4>
   </div>
  </div>
 </div> <!-- End Services Section Container -->

 <!-- Start Registration Form -->
 <?php include('UserRegistration.php') ?>
 <!-- End Registration Form Container -->

 <!-- Start Happy Customer -->
 <div class="jumbotron bg-primary">
   <div class="container">
    <h2 class="text-center text-white">Happy Customers</h2>
    <div class="row mt-5">
     <div class="col-lg-3 col-sm-6"> <!-- Start 1st Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt1">
        <h4 class="card-title">Rahul Kumar</h4>
        <p class="card-text">Itaque illo explicabo voluptatum,saepe libero rerum, adducimus voluptas nesciunt debitis numquam.</p>
       </div>
      </div>
     </div> <!-- End 1st Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 2nd Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt2">
        <h4 class="card-title">Sonam Sharma</h4>
        <p class="card-text">Itaque illo explicabo voluptatum,saepe libero rerum, adducimus voluptas nesciunt debitis numquam.</p>
       </div>
      </div>
     </div> <!-- End 2nd Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 3rd Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt3">
        <h4 class="card-title">Sumit Vyas</h4>
        <p class="card-text">Itaque illo explicabo voluptatum,saepe libero rerum, adducimus voluptas nesciunt debitis numquam.</p>
       </div>
      </div>
     </div> <!-- End 3rd Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 4th Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt4">
        <h4 class="card-title">Jyoti Sinha</h4>
        <p class="card-text">Itaque illo explicabo voluptatum,saepe libero rerum, adducimus voluptas nesciunt debitis numquam.</p>
       </div>
      </div>
     </div> <!-- End 4th Column -->
    </div>
   </div>
 </div> <!-- End Happy Customer -->

 <!-- Start Contact US -->
 <div class="container" id="Contact">
  <h2 class="text-center mb-4">Contact Us</h2>
  <div class="row">
   <!-- Start 1st Column -->
    <?php include('contactform.php') ?>
   <!-- End 1st Column -->
   <div class="col-md-4 text-center"> <!-- Start 2nd Column -->
    <strong>Headquarter:</strong><br>
    Gromos India Solutions Pvt. Ltd.,<br>
    S-04, Mahaveer CHS, Plot No-5A,<br>
    Sector-06, Koparkhairane<br>
    Navi Mumbai - 400709<br>
    Phone: +9892374440<br>
    <a href="#" target="_blank">www.osms.com</a><br>
    <br> <br>
    <strong>Branch:</strong><br>
    Gromos India Solutions Pvt. Ltd.,<br>
    Vaishali Nagar, Delhi<br>
    Delhi - 564567<br>
    Phone: +0000000000<br>
    <a href="#" target="_blank">www.osms.com</a><br>    
   </div> <!-- End 2nd Column -->
  </div>
 </div> <!-- End Contact US -->

 <!-- Start Footer -->
 <footer class="container-fluid bg-dark mt-5 text-white">
  <div class="container">
   <div class="row py-3">
    <div class="col-md-6"> <!-- Start 1st Column -->
     <span class="pr-2">Follow Us: </span>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
     <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
    </div> <!-- End 1st Column -->
    <div class="col-md-6 text-right"> <!-- Start 2nd Column -->
     <small>Designed by Gromos India &copy; 2020</small>
     <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
    </div> <!-- End 2nd Column -->
   </div>
  </div>
 </footer>

 <!-- JavaScript -->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/all.min.js"></script>
</body>
</html>