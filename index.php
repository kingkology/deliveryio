<?php 
session_start();

$dt=new DateTime('now', new DateTimezone('Africa/Accra'));
$ladate = $dt->format('Y-m-d');
$lamonth= $dt->format('m');
$latodayz = $ladate;
$ladatez = $dt->format('Y-m-d H:i:s');
$latimez = $dt->format('H:i:s');

$christmas="";
$get_drivers=50;
$get_clients=200;
$get_errands=600;
$get_partners=14;

if ($lamonth==12)
{
  $christmas="christmas";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AKROTECH HTML errand website . errand UI UX, errand theme, errand HTML, errand template, errand website, errand pwa template,Deliveryio.">
    <meta name="author" content="IAKROTECH">

    <title>Deliveryio</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!--font-awesome-4.7.0-->
    <link href="assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Elegant font icons -->
    <link href="assets/vendor/elegant_font/HTMLCSS/style.css" rel="stylesheet">

    <!-- Elegant font icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Swiper Slider -->
    <link href="assets/vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet" id="style">

    <!-- Custom styles for this template -->
    <link href="assets/css/style-maroon.css" rel="stylesheet" id="style">


    <!-- Font Awesome -->
    <link href="assets/libraries/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    

</head>

<?php 
if (isset($_SESSION['backend_message'])) 
{
  ?>
  <body class="ui-rounded" onload="Swal.fire('<?php echo $_SESSION['message_type']; ?>', '<?php echo $_SESSION['backend_message']; ?>', '<?php echo $_SESSION['message_type']; ?>');">
  <?php
  unset($_SESSION['message_type']);
  unset($_SESSION['backend_message']);
  session_unset(); 
} 
else 
{
?>
<body class="ui-rounded" >
<?php
}
?>

    <!-- Page laoder -->
    <div class="container-fluid pageloader">
        <?php if ($christmas=="christmas"):?>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <div class="snow"></div>
  <?php endif?>
        <div class="row h-100">
            <div class="col-12 align-self-start text-center">
            </div>
            <div class="col-12 align-self-center text-center">

                <div class="loader-logo">
                    <div class="logo <?php echo $christmas; ?>"><img src="assets/img/favicons/favicon-32x32.png" alt="Quality Delievery Services"><span>AT</span>
                        <div class="loader-roller">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h4 class="logo-text"><span>Deliveryio</span><br>BY <br><small>IAKROTECH</small></h4>
                </div>
            </div>
            <div class="col-12 align-self text-center">
                <button class="btn btn-primary <?php echo $christmas; ?>" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
        </div>
    </div>
    <!-- Page laoder ends -->

    <!-- Fixed navbar -->
    <header class="header fixed-top header-fill">
        <nav class="navbar">
            <div>
                <a class="btn btn-secondary btn-sm <?php echo $christmas; ?>" href="tel:+233544720636" style="background-color:yellow;color:black;"><span class="avatar avatar-30"><i class="fa fa-phone" style="color:black;"></i></span>Call Us</a>
            </div>
            <div>
                <a class="navbar-brand " href="index.php">
                    <div class="logo"><img src="assets/img/favicons/favicon-32x32.png"><span></span><span>IA</span></div>
                    <h4 class="logo-text"><span>Deliveryio</span><small>Iakrotech</small></h4>

                </a>
            </div>
            <div >
                <a href="#about" class=""><span class="avatar avatar-30"><i class=" icon_lightbulb_alt"></i></span>About</a>
                <a href="#services" class=""><span class="avatar avatar-30"><i class=" icon_id-2_alt"></i></span>Services</a>
                <a href="views/login/main.html" class=""><span class="avatar avatar-30"><i class="fa fa-lock"></i></span>Login</a>
                <a href="register.php" class=""><span class="avatar avatar-30"><i class="fa fa-pencil"></i></span>Signup</a>
                
            </div>
        </nav>
    </header>
    <!-- Fixed navbar ends -->


    

    <!-- Begin page content -->
    <main class="flex-shrink-0 main-container py-0">

        <div class="bg-white position-relative overflow-hidden">
            <div class=" ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" style="width:100%;">
                    <div class="carousel-item h-800 active" >
                        <div class="background" style="background-image: url(&quot;assets/img/banner1.jpg&quot;);">
                            <img src="assets/img/banner1.jpg" alt="fast delivery" style="display: none;">
                        </div>
                    </div>
                    <div class="carousel-item h-800">
                        <div class="background" style="background-image: url(&quot;assets/img/banner2.jpg&quot;);">
                            <img src="assets/img/banner2.jpg" alt="safe delivery" style="display: none;">
                        </div>
                    </div>
                    <div class="carousel-item h-800 ">
                        <div class="background" style="background-image: url(&quot;assets/img/banner3.jpg&quot;);">
                            <img src="assets/img/banner3.jpg" alt="cheap" style="display: none;">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>
    </main>

 
    


    <!-- Begin page content -->
    <main class="flex-shrink-0 main-container">

      <!-- page about content goes here -->
      <div id="about"  class="container-fluid bg-white px-0">
          <div class="row no-gutters">

            <div class="col-12 col-md-6 position-relative overflow-hidden section-150">
                <div class="background">
                    <img src="assets/img/c4.jpg" alt="about Deliveryio">
                </div>
            </div>

              <div class="col-12 col-md-6 section-150 px-3">
                  <div class="row mx-0">
                      <div class="col-12 col-md-10 col-lg-8 col-xl-7 mx-auto">
                          <h6 class="font-weight-light text-uppercase text-mute">We are</h6>
                          <h3 class="mt-3">Deliveryio</h3>
                          <h5 class="font-weight-medium">Delivery service providers</h5>
                          <p class="mt-4 text-mute">Our One<span> goal</span><span> is</span> to serve as the cheapest, most reliable and fastest 3rd party delivery service provider between any client and any seller/supplier.</p>

                          <p class="my-4"><br><span class="text-mute">Powered by <a href="https:iakrotech.com/" target="_blank">I-Akrotech</a></span></p>

                      </div>
                  </div>
              </div>
          </div>
      </div>



        <div class="container-fluid bg-default">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-3 align-self-center">
                            <div class="text-center py-5">
                                <h1 class="f-80"><span class="countertext">50</span></h1>
                                <p class="text-mute text-uppercase">Drivers</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 align-self-center">
                            <div class="text-center py-5">
                                <h1 class="f-80"><span class="countertext">200</span></h1>
                                <p class="text-mute text-uppercase">Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 align-self-center">
                            <div class="text-center py-5">
                                <h1 class="f-80"><span class="countertext">600</span></h1>
                                <p class="text-mute text-uppercase">Errands</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 align-self-center">
                            <div class="text-center py-5">
                                <h1 class="f-80"><span class="countertext">14</span></h1>
                                <p class="text-mute text-uppercase">Partners</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid section-150 bg-white position-relative overflow-hidden">
            <div class="row mb-5">
                <div class="container text-center">
                    <h6 class="font-weight-light text-uppercase text-mute">Flexibility & Affordabiity</h6>
                </div>
            </div>
            <br>

            <div class="row mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 align-self-center ">
                            <div class="row mb-4">
                                <div class="col-auto pr-0"><span class="icons icon-60 bg-default icon_star_alt mb-4"></span></div>
                                <div class="col">
                                    <h5>User Experience</h5>
                                    <p class="text-mute mt-3">User Experience is key priority for us and we always think about how best to make the platform user friendly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row mb-4">
                                <div class="col-auto pr-0"><span class="icons icon-60 bg-default icon_genius mb-4"></span></div>
                                <div class="col">
                                    <h5>Unlimited Possibilties</h5>
                                    <p class="text-mute mt-3">Join our group of partners and earn as you book errands on behalf of your own clients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row mb-4">
                                <div class="col-auto pr-0"><span class="icons icon-60 bg-default icon_heart_alt mb-4"></span></div>
                                <div class="col">
                                    <h5>Affordability</h5>
                                    <p class="text-mute mt-3">Experience the cheapest delivery service you can ever find anywhere.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 align-self-center ">
                            <div class="row mb-4">
                                <div class="col-auto pr-0"><span class="icons icon-60 bg-default icon_images mb-4"></span></div>
                                <div class="col">
                                    <h5>Quality Service</h5>
                                    <p class="text-mute mt-3">Join our family and experience excellent customer service like no other.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <br>
            <br>
        </div>

        <div class="container-fluid position-relative px-0">
          <h3><center><strong>Our Services</strong></center></h3>
            
        </div>
        <div class="container-fluid bg-white px-0">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 position-relative overflow-hidden">
                    <div class="background">
                        <img src="assets/img/food.jpg" alt="Food Delivery">
                    </div>
                </div>
                <div class="col-12 col-md-6 section-150 px-3">
                    <div class="row  mx-0">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 mx-auto">
                            <h6 class="font-weight-light text-uppercase text-mute">Food Delivery</h6>
                            <h3 class="mt-3">We help you pickup your food from any eatery at any given time.</h3>
                            <h5 class="font-weight-medium">Just let us know when you need it.</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                
                <div class="col-12 col-md-6 section-150 px-3">
                    <div class="row mx-0">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 mx-auto">
                            <h6 class="font-weight-light text-uppercase text-mute">Package pickup</h6>
                            <h3 class="mt-3">We pickup all forms of packages (small, medium, big)</h3>
                            <h5 class="font-weight-medium">Fridge, letters, birthday cakes</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 position-relative overflow-hidden section-150">
                    <div class="background">
                        <img src="assets/img/savemoneytime.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid section-150 position-relative overflow-hidden bg-white">
            <div class="row mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10">
                            <h2 class="font-weight-bold">Default framework elements and useful third parties</h2>
                            <p class="font-weight-medium text-mute my-4">We have used framework Bootstrap 4 and also included third parties for date range picker, multiselect and swiper and can be used anywhere template site wide.</p>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="bottom-right bottom-50">
                <h2 class="f-200 opacity-5 text-truncate">Elements</h2>
            </div>
        </div>
    </main>
    <!-- End of page content -->



    <!-- Footer -->
    <footer class="footer mt-auto py-3 fixed-bottom">
        
        <div class="container-fluid">
            
            <p class="text-center">IAKROTECH <span class="text-mute"> SERVICES <a href="https://maxartkiller.com/" target="_blank"></a> </span><span class="text-danger <?php echo $christmas; ?>"><img src="assets/img/favicons/favicon-32x32.png"></span></p>
        </div>
    </footer>
    <!-- Footer ends -->

    <!-- scroll to top button -->
    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44 <?php echo $christmas; ?>"><span class="arrow_carrot-up"></span></button>
    <!-- scroll to top button ends-->


    <!-- Required jquery and libraries -->
    
    <!-- JQuery -->
    <script type="text/javascript" src="assets/libraries/jquery-3.4.0.min.js"></script>

    <script type="text/javascript" src="assets/libraries/toaster/jquery.toaster.js"></script>
    <script type="text/javascript" src="assets/libraries/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript" src="assets/libraries/kingslibrary.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <!-- cookie css -->
    <script src="assets/vendor/cookie/jquery.cookie.js"></script>

    <!-- Swiper slider  -->
    <script src="assets/vendor/swiper/js/swiper.min.js"></script>

    <!-- Sweet alert  -->
    <script src="assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Sweet alert  -->
    <script src="assets/vendor/toastify/toastify.js"></script>
    

    <!-- Customized jquery file  -->
    <script src="assets/js/main.js"></script>

    <!-- Masonry js -->
        <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>

        <!-- Customized jquery file  -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/color-scheme-demo.js"></script>

        <script>
            "use strict"
            $(document).ready(function() {
                /* Swiper slider */
                var swiper = new Swiper('.introslider', {
                    autoplay: true,
                    pagination: {
                        el: '.swiper-pagination',
                    },
                });
            });

        </script>


       

</body>

</html>
