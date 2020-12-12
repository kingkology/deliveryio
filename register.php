<?php 
session_start();

$dt=new DateTime('now', new DateTimezone('Africa/Accra'));
$ladate = $dt->format('Y-m-d');
$lamonth= $dt->format('m');
$latodayz = $ladate;
$ladatez = $dt->format('Y-m-d H:i:s');
$latimez = $dt->format('H:i:s');

$christmas="";

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
    <meta name="description" content="AKROTECH HTML errand website . errand UI UX, errand theme, errand HTML, errand template, errand website, errand pwa template.">
    <meta name="author" content="IAKROTECH">

    <title>IAKROTECH ERRANDS</title>

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
</head>

<body class="ui-rounded">
    <!-- Page laoder -->
    <div class="container-fluid pageloader">
        
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
                    <h4 class="logo-text"><span>IAKROTECH</span><small></small></h4>
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


    <!-- Begin page content -->
    <main class="flex-shrink-0 main-container py-0">


        <!-- page content goes here -->
        <div class="banner-hero vh-100 scroll-y bg-dark">

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
            <div class="background opac">
                <img src="assets/img/login.jpg" alt="">
            </div>
            <div class="container h-100 text-white">
                <div class="row h-100 h-sm-auto">
                    <div class="col-12 col-md-8 col-lg-5 col-xl-4 mx-auto align-self-center text-center">
                        <div class="loader-logo">
                             <div class="logo <?php echo $christmas; ?>"><img src="assets/img/favicons/favicon-32x32.png"><span>AK</span><span>TEC</span></div>
                            <h4 class="logo-text"><span>IAKROTECH</span><small>Errand Services</small></h4>
                        </div>
                        <br>
                        <br>
                        <h3 class="font-weight-normal mb-4">Create account with us</h3>
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <input type="text" id="username" class="form-control form-control-lg" placeholder="Username" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword1" class="sr-only">Password</label>
                            <input type="password" id="inputPassword1" class="form-control form-control-lg" placeholder="Confirm Password" required="">
                        </div>
                        <div class="my-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                <label class="custom-control-label" for="customCheck1">Agree to the Terms and Condition</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <a href="index.php" class=" btn btn-lg btn-default default-shadow btn-block <?php echo $christmas; ?>">Sign Up <span class="ml-2 icon arrow_right"></span></a>
                        </div>
                        <div class="mb-4">
                            <p>
                                Already have account? Please <a href="login.php">Sign In</a> here.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End of page content -->


    <!-- scroll to top button -->
    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>
    <!-- scroll to top button ends-->

  

    <!-- Required jquery and libraries -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <!-- cookie css -->
    <script src="assets/vendor/cookie/jquery.cookie.js"></script>

    <!-- Swiper slider  -->
    <script src="assets/vendor/swiper/js/swiper.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/color-scheme-demo.js"></script>

    <script>
        "use strict"
        $(document).ready(function() {
            var swiper = new Swiper('.swiper-stories3', {
                slidesPerView: 'auto',
                spaceBetween: 0,
                pagination: false,
            });
        });

    </script>
</body>

</html>
