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
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS #8f3985-->
  <link rel="stylesheet" href="css/custom.css">

  <title>Online Service Managment System</title>

  <style>
    .head1 {
      color: white;
      font-size: 55px;
    }

    .head2 {
      font-weight: ;
      color: white;
      font-size: 25px;
    }

    .img {
      height: 100px;
      width: 100px;
      margin-bottom: 10px;
    }

    .bg{
      background-image: linear-gradient(to right,  #2798B5 , #373B44  );
    }

    .bgg{
      background-image: linear-gradient(to left,  #2798B5 , #373B44  );
    }

    .card{
      background-image: linear-gradient(to top,  #7F7FD5 , #86A8E7 , #91EAE4  );
    }
    .extra{
      background-image:;
    }
  </style>
 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script>
        $(document).ready(function(){
            $("#mymodal").modal('show');
        });
    </script>
</head>

<body>
  <!-- modal CODE -->
<?php include('modal.php'); ?>

  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg pl-5 fixed-top">
    <a href="index.php" class="navbar-brand " id=''><img src="images/customlogo.png" style='width: 100px; ' alt=""></a>
    <span class="navbar-text text-light">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav ml-auto">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Page er img-->
  <header class="img-overlay jumbotron back-image " style="background-image: url(images/w.jpg);">
    <div class="container  myclass mainHeading">
      <h1 class="head1 text-uppercase  font-weight-bold" data-aos="fade up" data-aos-duration="1400" data-aos-delay="300"    style="margin-top:150px;">Welcome to Online <br>Service Managment . </h1>
      <p class="head2 " data-aos="fade up" data-aos-duration="1400" data-aos-delay="300">We are here to servcie you 24/7</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4" data-aos="fade up" data-aos-duration="1400" data-aos-delay="300">Login</a>
      <a href="#registration" class="btn btn-primary mr-4" data-aos="fade up" data-aos-duration="1400" data-aos-delay="300">Sign Up</a>
    <div class="asd"></div>
    </div>
  </header> <!-- End Page -->  

  <!-- about us section -->
  <div class="container ">
    <div class=" row align-items-center" id="slider">
      <div class="col-md-12 col-lg-6 col-sm-6 jumbotron shadow  mb-3  rounded " data-aos="zoom-in-left" data-aos-duration="3000" data-aos-delay="300">
        <!-- Start 1st Column-->
        <div class="about-part">
         <h1 class="text-center"> About us  </h1><hr>
         <p class='text-center'>
          This is just a simple project made by CSE 21(A1) Students . Our project aim is to “To provide Electronic
          Appliances care services to keep the devices fit and healthy and customers happy and smiling”.
          </p>
        </div>
      </div> <!-- End  1st Column-->

      <div class="col-md-12 col-lg-6 col-sm-6">
          <!-- Start  2nd Column-->
        <div class="img-part" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="2500" data-aos-delay="300">
        <img src="images/37811.jpg" class="img-fluid " >
        </div>
      </div>
    </div> <!-- End 2nd Column-->
  </div>
  

  <!-- Services -->
  <div class="container text-center border-bottom my-5 py-5 " id="Services">
    <h1 class=""  >Our Services</h1>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4" data-aos="zoom-in-left" data-aos-duration="2500" data-aos-delay="300">
        <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
        <h4 class="mt-4">Electronic Appliances</h4>
      </div>
      <div class="col-sm-4 mb-4" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="300">
        <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
        <h4 class="mt-4">Preventive Maintenance</h4>
      </div>
      <div class="col-sm-4 mb-4" data-aos="zoom-in-right" data-aos-duration="2500" data-aos-delay="300">
        <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault Repair</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer  -->
  <div class="jumbotron bgg" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white " style="font-size: 40px;">Our Happy Customers</h2><br><hr class="bg-white">
      <div class=" row mt-5" id="slider" >
        <div class="col-md-12 col-lg-3 col-sm-6" >
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avater5.jpg" class="img-fluid img" style="border-radius: 100px;">
              <h4 class="card-title" >Taufiqul Hoq</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-md-12 col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar2.jpg" class="img-fluid img" style="border-radius: 100px;">
              <h4 class="card-title">MJ Rifat</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-md-12 col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar3.jpg" class="img-fluid img" style="border-radius: 100px;">
              <h4 class="card-title">GZ Saiful</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-md-12 col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/Bill.jpg" class="img-fluid img" style="border-radius: 100px;">
              <h4 class="card-title">Bill Gates</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
      <br><hr class="bg-white">
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container my-5" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
     
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- map start  -->
  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7990189281436!2d91.8091325597712!3d22.361216435387743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd97f972c9cbf%3A0x8fe976105b47e2f0!2sPort%20City%20International%20University!5e0!3m2!1sen!2sbd!4v1648733172227!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    <!-- map end -->

<!-- start 1st footer -->
 
<div class="footer py-3 " style="background-color:#F6F6F6 ; margin-top: -20px; margin-bottom: -40px;">
    <div class="container">
        <div class=" row mt-5" id="">
            <div class="col-md-12 col-lg-3 col-sm-6 text-center pt-5">
                <!-- <h4 class="mb-4">Company logo</h4> -->

                <img src="images/customlogo.png" style='width: 160px; ' alt="">

            </div>
            <div class="col-md-12 col-lg-3 col-sm-6 px-4">
                <h4 class="text-center ">About Us</h4>
                <hr>
                <p class="text-center "> This is just a simple project made by CSE 21(A1) Students . Our project aim is
                    to “To provide
                    Electronic
                    Appliances care services to keep the devices fit and healthy and customers happy and smiling”.</p>
            </div>
            <div class="col-md-12 col-lg-3 col-sm-6">
                <h4 class="text-center">Others</h4>
                <hr>
                <ul class=" mx-5">
                    <i class="fa fa-angle-double-right" style="color:rgb(238, 26, 18); aria-hidden=" true"></i><a
                        href="#"> Media</a> <br>
                    <i class="fa fa-angle-double-right" style="color:rgb(238, 26, 18); aria-hidden=" true"></i><a
                        href="#"> Mobile Apps</a> <br>
                    <i class="fa fa-angle-double-right" style="color:rgb(238, 26, 18); aria-hidden=" true"></i><a
                        href="#"> Privacy Policy</a> <br>
                </ul>
            </div>
            <div class="col-md-12 col-lg-3 col-sm-6">
                <h4 class="text-center">Contact Us</h4>
                <hr>
                <ul class=" ml-4">
                    <i class="fa fa-envelope " style="color:rgb(57, 175, 190); margin-right: 8px;"
                        aria-hidden="true"></i><a href="mailto:info@example.com">
                        www.CSE.com
                    </a> <br>
                    <i class="fa fa-phone" style="color:rgb(206, 50, 50); margin-right: 8px;" aria-hidden="true"></i>
                    012345678
                    <br>
                    <i class="fa fa-fax" style="color:rgb(238, 131, 8); margin-right: 8px;" aria-hidden="true"></i>
                    123B ,CTG
                    <br>
                </ul>
            </div>
        </div>
    </div>
</div>


 
<!-- end 1st footer -->

  <!-- Start 2nd Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 7px solid #00008B;">
    <div class="container">
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End1st Column -->

        <!-- Start Footer 2nd Column -->
        <div class="col-md-6 text-right">
          <small> Project by CSE 21(A1) &copy; 2022.</small>
          <small class="ml-5"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div>
    </div>
  </footer>

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/all.min.js"></script>
  <script src="js/SmoothScroll.min.js"></script>

   
</body>

</html>