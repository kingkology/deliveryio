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
    <link rel="apple-touch-icon" sizes="57x57" href="../../assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!--font-awesome-4.7.0-->
    <link href="../../assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Elegant font icons -->
    <link href="../../assets/vendor/elegant_font/HTMLCSS/style.css" rel="stylesheet">

    <!-- Elegant font icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="../../assets/css/style.css" rel="stylesheet" id="style">
    <!-- Custom styles for this template -->
    <link href="../../assets/css/style-maroon.css" rel="stylesheet" id="style">
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
     
        <div class="row h-100">
            <div class="col-12 align-self-start text-center">
            </div>
            <div class="col-12 align-self-center text-center">

                <div class="loader-logo">
                    <div class="logo <?php echo $christmas; ?>"><img src="../../assets/img/favicons/favicon-32x32.png" alt="Quality Delievery Services"><span>AT</span>
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



    <!-- Begin page content -->
       <main class="flex-shrink-0 main-container" >


           <!-- page content goes here -->
           <div class="banner-hero scroll-y">


               <div class="container text-black">
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>

                   <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3" ></div>
                       <div class="col-12 col-md-6">
                               <div class="card shadow-sm border-0 bg-danger">
                                   <div class="card-body">
                                       <div class="media">

                                           <div class="media-body text-white">
                                               <h6 class="">Welcome to the partner login screen</h6>
                                               <p class="text-mute">We are working hard on this feature.</p>
                                           </div>
                                           <a class="btn btn-light shadow-sm btn-44 " href="../signup" >
                                               <i class="fa fa-arrow-left "></i>
                                           </a>
                                       </div>
                                   </div>
                               </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3" ></div>  
                   </div>

                   <p>&nbsp;</p>

                   <div class="row" >
                       
                       <div class="col-sm-12 col-md-3 col-lg-3" ></div>

                       <div class="col-sm-12 col-md-6 col-lg-6" >
                           <div class="card border-0 text-center mb-3 overflow-hidden" style=" box-shadow:1px 2px 2px 2px">
                               <div class="card-body position-relative p-0">
                                   <a href="javascript:void(0);" class="h-150 position-relative overflow-hidden d-block">
                                       <div class="background" style="background-image: url(&quot;../../assets/img/partner.png&quot;);">
                                           <img src="../../assets/img/partner.png" alt="" style="display: none; object-fit: fill;" >
                                       </div>
                                   </a>
                               </div>
                               <div class="card-footer">
                                   

                                  <div class="card shadow-sm border-0 mb-4">

                                    <div class="card-body">
                                        
                                        <h2><center>Comning soon</center></h2>
                                        <div class="progress mb-3">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                        </div>


                                    </div>
                        
                                  </div>


                               </div>
                           </div>   
                       </div>

                       <div class="col-sm-12 col-md-3 col-lg-3" ></div>

                   </div>


                   
               </div>
           </div>


                   <p>&nbsp;</p>
                   <p>&nbsp;</p>
       </main>
       <!-- End of page content -->


    <!-- scroll to top button -->
    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>
    <!-- scroll to top button ends-->


    <!-- Required jquery and libraries -->
    <script type="text/javascript" src="../../assets/libraries/jquery-3.4.0.min.js"></script>

    <script type="text/javascript" src="../../assets/libraries/toaster/jquery.toaster.js"></script>
    <script type="text/javascript" src="../../assets/libraries/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript" src="../../assets/libraries/kingslibrary.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <!-- cookie css -->
    <script src="../../assets/vendor/cookie/jquery.cookie.js"></script>


    <!-- Customized jquery file  -->
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/color-scheme-demo.js"></script>

</body>

</html>
