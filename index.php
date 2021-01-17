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


</head>

<body class="ui-rounded">
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
                <a href="profile.php" class=""><span class="avatar avatar-30"><i class=" icon_id-2_alt"></i></span>Services</a>
                <a href="#about" class=""><span class="avatar avatar-30"><i class=" icon_lightbulb_alt"></i></span>About</a>
                <a href="login.php" class=""><span class="avatar avatar-30"><i class="fa fa-lock"></i></span>Login</a>
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
                        <div class="background" style="background-image: url(&quot;assets/img/banner1.jpg&quot;);object-fit:contain;">
                            <img src="assets/img/banner1.jpg" alt="..." style="display: none;">
                        </div>
                    </div>
                    <div class="carousel-item h-800">
                        <div class="background" style="background-image: url(&quot;assets/img/banner2.jpg&quot;);">
                            <img src="assets/img/banner2.jpg" alt="..." style="display: none;">
                        </div>
                    </div>
                    <div class="carousel-item h-800 ">
                        <div class="background" style="background-image: url(&quot;assets/img/banner3.jpg&quot;);">
                            <img src="assets/img/banner3.jpg" alt="..." style="display: none;">
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

        <!-- page content goes here -->
        <div class="section-100 bg-white" id="about">
            <div class="container h-100">
                <div class="row h-100 justify-content-center text-center">
                    <div class="col-12 col-md-11 col-lg-10 align-self-center">
                        <p class="font-weight-light text-uppercase text-mute">We are</p>
                        <h1 class="f-200 font-weight-bold">One<span>UI</span><span>UX</span></h1>
                        <h4 class="font-weight-medium">Creative & Unique Mobile<br>HTML Templates</h4>
                        <p class="my-4">For the humans by the human<br><span class="text-mute">Hand Crafted by <a href="https://maxartkiller.com/" target="_blank">Maxartkiller</a> with </span><span class="text-danger">❤</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid section-150 position-relative overflow-hidden">
            <div class="row mb-5">
                <div class="container">
                    <h2 class="font-weight-bold">Its time to fall in love with Creative design, Flexibility & Uniqueness.</h2>
                    <p class="font-weight-medium text-mute my-4">User experienced user interfaces with HTML and CSS also providing flexibility of style color customization. We have created specific website template demos and component library which be used across any demo.</p>
                </div>
            </div>
            <div class="bottom-right bottom-50">
                <h2 class="f-200 opacity-5 text-truncate">UX Design</h2>
            </div>
        </div>



        <div class="container-fluid bg-default">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-3 align-self-center">
                            <div class="text-center py-5">
                                <h1 class="f-80"><span class="countertext">50</span>+</h1>
                                <p class="text-mute text-uppercase">Components</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 align-self-center">
                            <div class="text-center py-5">
                                <h1 class="f-80"><span class="countertext">200</span>+</h1>
                                <p class="text-mute text-uppercase">HTML Pages</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 align-self-center">
                            <div class="text-center py-5">
                                <h1 class="f-80"><span class="countertext">3</span></h1>
                                <p class="text-mute text-uppercase">Mobile Apps</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 align-self-center">
                            <div class="text-center py-5">
                                <h1 class="f-80"><span class="countertext">16</span></h1>
                                <p class="text-mute text-uppercase">Predefined Style</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid section-150 bg-white position-relative overflow-hidden">
            <div class="row mb-5">
                <div class="container text-center">
                    <h6 class="font-weight-light text-uppercase text-mute">Flexibility & Competibility</h6>
                    <h2 class="mt-4">Build with best Framework</h2>
                    <p class="font-weight-medium">Hand coded with Bootstrap 4, SCSS and JQuery</p>
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
                                    <p class="text-mute mt-3">User Experience is key priority for us and we always think about domains as well as users from those business domain.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row mb-4">
                                <div class="col-auto pr-0"><span class="icons icon-60 bg-default icon_genius mb-4"></span></div>
                                <div class="col">
                                    <h5>Unlimited Styles</h5>
                                    <p class="text-mute mt-3">We have predefined 16+ styles and create very own new style by changing and recompiling provided varibles file in SCSS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row mb-4">
                                <div class="col-auto pr-0"><span class="icons icon-60 bg-default icon_heart_alt mb-4"></span></div>
                                <div class="col">
                                    <h5>Loving Framework</h5>
                                    <p class="text-mute mt-3">We and many of us love bootstrap framework so we have build Oneuiux with Bootstrap 4.4.1 version.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 align-self-center ">
                            <div class="row mb-4">
                                <div class="col-auto pr-0"><span class="icons icon-60 bg-default icon_images mb-4"></span></div>
                                <div class="col">
                                    <h5>Many Icons</h5>
                                    <p class="text-mute mt-3">There are many posibility to use icons with any fonts icons. Here we have used elegant icons</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row mb-4">
                                <div class="col-auto pr-0"><span class="icons icon-60 bg-default icon_like mb-4"></span></div>
                                <div class="col">
                                    <h5>Clean Code</h5>
                                    <p class="text-mute mt-3">We have practiced with clean code no more commented areas and only required comments. Also validated with W3C validator.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row mb-4">
                                <div class="col-auto pr-0"><span class="icons icon-60 bg-default icon_document_alt mb-4"></span></div>
                                <div class="col">
                                    <h5>Documentation</h5>
                                    <p class="text-mute mt-3">We have added documentation to undertand basic folder structure and steps to change styles with code snippets.</p>
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
            <div class="row no-gutters">
                <div class="col-12 col-md-6 position-relative overflow-hidden section-150">
                    <div class="background">
                        <img src="assets/img/emotions.jpg" alt="">
                        <div class="caption">
                            <a href="https://unsplash.com/@mimithian?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <title>unsplash-logo</title>
                                        <path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path>
                                    </svg>
                                </span>
                                <span>Mimi Thian</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 section-150 px-3">
                    <div class="row mx-0">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 mx-auto">
                            <h6 class="font-weight-light text-uppercase text-mute">Interfaces those speaks</h6>
                            <h3 class="mt-3">Attach with Emotions</h3>
                            <h5 class="font-weight-medium">Express your brand with OneUIUX</h5>
                            <p class="mt-4 text-mute">Our One<span>UI</span><span>UX</span> HTML template is creatively hand crafter with consideration of human behaviour with consistancy and color contrast. We have created full website demo with multiple each domain/business demo unlike anyother template in market.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white px-0">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 position-relative overflow-hidden">
                    <div class="background">
                        <img src="assets/img/businessdomain1.jpg" alt="">
                        <div class="caption">
                            <a href="https://unsplash.com/@austindistel?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer"> <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <title>unsplash-logo</title>
                                        <path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path>
                                    </svg>
                                </span>
                                <span>Austin Distel</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 section-150 px-3">
                    <div class="row  mx-0">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 mx-auto">
                            <h6 class="font-weight-light text-uppercase text-mute">Best match for all</h6>
                            <h3 class="mt-3">Domain/Business Demos</h3>
                            <h5 class="font-weight-medium">Multiple Business websites</h5>
                            <p class="mt-4 text-mute">One<span>UI</span><span>UX</span> HTML template includes multiple business demo with suitable domain and brand imaginations. Template also give essense of business domain by layout structure, color contrast and images used.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12 col-md-6 position-relative overflow-hidden section-150">
                    <div class="background">
                        <img src="assets/img/savemoneytime.jpg" alt="">
                        <div class="caption">
                            <a href="https://unsplash.com/@danteov_seen?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                        <title>unsplash-logo</title>
                                        <path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path>
                                    </svg>
                                </span>
                                <span>Nikola Jovanovic</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 section-150 px-3">
                    <div class="row mx-0">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-7 mx-auto">
                            <h6 class="font-weight-light text-uppercase text-mute">Save Time & Money</h6>
                            <h3 class="mt-3">Grow fast & think beyond</h3>
                            <h5 class="font-weight-medium">Value for money, ready to use template</h5>
                            <p class="mt-4 text-mute">Our One<span>UI</span><span>UX</span> HTML template is ready to use template. You can use is by changes brand, content and images with suitable brand colors scheme. Use predefined stylesheet or change with scss variable and compile it.</p>
                        </div>
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
    <script src="assets/js/jquery-3.3.1.min.js"></script>
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
