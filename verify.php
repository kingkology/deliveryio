<?php 
session_start();
include 'apis/tcons.php';
$the_status='';
if ( isset($_GET['vid']) AND (!(trim($_GET['vid']==""))) )
{
    $vid = mysqli_real_escape_string($con,$_GET['vid']);
    $sql="SELECT * FROM sysuserz WHERE verification_id ='$vid' ";
    $result=mysqli_query($con,$sql);
    if($result->num_rows>0)
    {
        while($row = $result->fetch_assoc()) 
        {
            if ($row['verification_status']=="Verified") {
                $_SESSION['recentmessgz']='This application has already been verified.';
                $_SESSION['messagetypez']='danger';
                header("location:index.php");
                return;
            }
            if ($row['verification_status']=="Pending") {
                $sqls = "UPDATE sysuserz SET verification_status='Verified',statuz='Pending' WHERE ((verification_id ='$vid') AND verification_status='Pending')";
                if ($con->query($sqls) === TRUE)
                {
                    if (mysqli_affected_rows($con)>0) {
                        $the_status='success';
                    }
                    else
                    {
                        $the_status='failure';
                    }
                    
                }
                else
                {
                    $the_status='failure';
                }
                
            }
            if ($row['verification_status']=="Expired") {
                $_SESSION['recentmessgz']='Verification link has expired. Kindly contact us by email.';
                $_SESSION['messagetypez']='danger';
                header("location:index.php");
                return;
            }
        }
    }
}
else
{
    $_SESSION['recentmessgz']='Not allowed to visit this page';
    $_SESSION['messagetypez']='warning';
    header("location:index.php");
    return;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="National Identification Authority">
    <meta name="author" content="National Identification Authority">

    <title>National Identification Authority</title>

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

    <!-- Elegant font icons -->
    <link href="assets/vendor/elegant_font/HTMLCSS/style.css" rel="stylesheet">

    <!-- Elegant font icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet" id="style">

    <!-- Custom styles for this template -->
    <link href="assets/css/style-dark-green.css" rel="stylesheet" id="style">


    <!-- Font Awesome -->
    <link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">

    <style type="text/css">
        .checkmark__circle {
          stroke-dasharray: 166;
          stroke-dashoffset: 166;
          stroke-width: 2;
          stroke-miterlimit: 10;
          stroke: #7ac142;
          fill: none;
          animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .checkmark {
          width: 156px;
          height: 156px;
          border-radius: 50%;
          display: block;
          stroke-width: 2;
          stroke: #7ac142;
          stroke-miterlimit: 10;
          margin: 10% auto;
          box-shadow: inset 0px 0px 0px #7ac142;
          animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        }

        .checkmark__check {
          transform-origin: 50% 50%;
          stroke-dasharray: 48;
          stroke-dashoffset: 48;
          animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }

        @keyframes stroke {
          100% {
            stroke-dashoffset: 0;
          }
        }
        @keyframes scale {
          0%, 100% {
            transform: none;
          }
          50% {
            transform: scale3d(1.1, 1.1, 1);
          }
        }
        @keyframes fill {
          100% {
            box-shadow: inset 0px 0px 0px 30px #7ac142;
          }
        }
    </style>
    

</head>


<?php 
if (isset($_SESSION['recentmessgz'])) 
{
    ?>
    <body class="ui-rounded" style="background-color:white;" onload="Toastz('<?php echo $_SESSION['messagetypez']; ?>', '<?php echo $_SESSION['recentmessgz']; ?>', '');" >
    <?php
    unset($_SESSION['messagetypez']);
    unset($_SESSION['recentmessgz']);
    unset($_SESSION['messgztitlez']);
} 
else 
{
    ?>
    <body class="ui-rounded" style="background-color:#F8F9FA;">
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
                    <div class="logo "><img src="assets/img/favicons/favicon-32x32.png" alt="NIA recruitment"><span>NIA</span>
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
                    <h4 class="logo-text"><span>National</span>Identification <br><small>Authority</small></h4>
                </div>
            </div>
            <div class="col-12 align-self text-center">
                <button class="btn btn-primary " type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
        </div>
    </div>
    <!-- Page laoder ends -->

    <!-- Fixed navbar -->
    <header class="header fixed-top " style="background:#28A745;">
        <nav class="navbar">
            <div >
                <a class="navbar-brand " href="">
                    <div class="logo" style="background:white;"><img src="assets/img/favicons/favicon-32x32.png"><span></span><span>NIA</span></div>
                    <h2 class="logo-text" style="color:white;"><span></span>National Identification Authority<br><small></small></h2>

                </a>
            </div>
            <div >
                
            </div>
        </nav>
    </header>
    <!-- Fixed navbar ends -->





    

    <!-- Begin page content -->
   <p>&nbsp</p>
   <p>&nbsp</p>
   <p>&nbsp</p>


   

      <main>
        <div class="row" >
          <div class="col-md-2 col-l-2 col-xl-2" ></div>
          <div class="col-md-8 col-l-8 col-xl-8" >
                <div style="box-shadow: 2px 2px 2px 2px;">
                    <div id="loginform">
                        <center>
                            <p>&nbsp</p>
                            <?php 
                                switch ($the_status) 
                                {
                                    case 'success':
                                        ?>
                                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                              <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                              <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                            </svg>
                                            <h3 class="font-medium m-b-20"><b>Account Verified Successfully</b></h3>
                                        <?php
                                        break;
                                    
                                    default:
                                        ?>
                                            <img src="assets/images/error.png" style="width:60%;">
                                            <h4 class="font-medium m-b-20"><br><b>Error Occured</b></h4>
                                        <?php
                                        break;
                                }
                             ?>
                              <br>
                        <h3 class="font-medium m-b-20"><br><a href="index.php"><b>click to go to login page</b></a></h3>     
                        </center>
                            
                    </div>
                        
                </div>
                    
          </div>
          <div class="col-md-2 col-l-2 col-xl-2" ></div>
          
        </div>
        <br>
        <br>
        <br>
      </main>

        

     
    <!-- Footer -->
    <footer class="footer mt-auto py-3 fixed-bottom" style="background:#28A745;">
        
        <div class="container-fluid">
            
            <p class="text-center" style="color:white;">NIA  Recruitment Portal <span class="text-danger " style="background-color:white;border-radius:25%;"><img src="assets/img/favicons/favicon-32x32.png"></span></p>
        </div>

    </footer>
    <!-- Footer ends -->

    <!-- scroll to top button -->
    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44 "><span class="arrow_carrot-up"></span></button>
    <!-- scroll to top button ends-->


    <!-- Required jquery and plugins -->
    
    <!-- JQuery -->
    <script type="text/javascript" src="assets/plugins/jquery-3.4.1.min.js"></script>

    <script type="text/javascript" src="assets/plugins/toaster/jquery.toaster.js"></script>
    <script type="text/javascript" src="assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <!-- cookie css -->
    <script src="assets/vendor/cookie/jquery.cookie.js"></script>
    

    <!-- Customized jquery file  -->
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/plugins/kingsjs/kingsjs.js"></script>


        


       

</body>

</html>