<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');


if(isset($_POST['submit']))
  {
    $cust_name=$_POST['cust_name'];
   $cust_email=$_POST['cust_email'];
   $cust_pass=$_POST['cust_pass'];
   

     
    $query=mysqli_query($con, "insert into  customer_account(cust_name,cust_email,cust_pass) value('$cust_name','$cust_email','$cust_pass') ");
   

   if ($query) {
    echo "<script>alert('Your Account has been Created....');</script>"; 
            echo "<script>window.location.href = 'index.php'</script>";   
    $msg="";
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";      
    }

  
}
  ?>




<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script>
    <!-- End Google Tag Manager -->
    <title>Touristo | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets1/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets1/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets1/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets1/css/skins/default.css">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 14 start -->
<div class="login-14">
    <div class="container">
         <p style="font-size:40px; color:deeppink;font-weight: bold; font-family: Segoe Print">Touristo</p>
        <div class="row login-box">
            <div class="col-lg-5 col-md-12 bg-img none-992 col-pad-0 align-self-center">
                <div class="info">
                    <div class="logo clearfix">
                        <a href="index.php">
                            
                        </a>
                    </div>
                    <div class="btn-section clearfix">
                        <a href="index.php" class="link-btn active btn-1">Login</a>
                        <div class="clearfix"></div>
                        <a href="register.php" class="link-btn btn-1 default-bg">Register</a>
                    </div>
                    <ul class="social-list">
                        <li>
                            <a href="#" class="facebook-bg">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter-bg">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="google-bg">
                                <i class="fa fa-google"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="linkedin-bg">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pinterest-bg">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 bg-color-16 align-self-center">
                <div class="form-section">
                    <div class="logo-2 clearfix">
                        <a href="index.php">
                          
                        </a>
                    </div>
                    <h3>Create an account</h3>
                    <div class="login-inner-form">
                        <form  method="post">
                            <div class="form-group form-box">
                                <input type="text" name="cust_name" class="input-text" placeholder="Full Name" required="">
                                <i class="flaticon-user"></i>
                            </div>
                            <div class="form-group form-box">
                                <input type="email" name="cust_email" class="input-text" placeholder="Email Address" required="">
                                <i class="flaticon-mail-2"></i>
                            </div>
                            <div class="form-group form-box">
                                <input type="password" name="cust_pass" class="input-text" placeholder="Password" required="">
                                <i class="flaticon-password"></i>
                            </div>
                            <div class="checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        I agree to the <a href="#">terms of service</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" name="submit" class="btn-md btn-theme btn-block">Register</button>
                            </div>
                            <p class="text">Already a member?<a href="index.php"> Login here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 14 end -->

<!-- External JS libraries -->
<script src="assets1/js/jquery-2.2.0.min.js"></script>
<script src="assets1/js/popper.min.js"></script>
<script src="assets1/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
</body>


</html>