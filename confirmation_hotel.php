<?php
session_start();
error_reporting(0);
include('include/dbconnection.php');
if (strlen($_SESSION['touristo']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $customer_name=$_POST['customer_name'];
   $customer_email=$_POST['customer_email'];
   $customer_mobile=$_POST['customer_mobile'];
    $hotel_name=$_POST['hotel_name'];
   $check_in=$_POST['check_in'];
   $check_out=$_POST['check_out'];
   $guest=$_POST['guest'];
   $room_type=$_POST['room_type'];
   

     
    $query=mysqli_query($con, "insert into  booking(customer_name,customer_email,customer_mobile,check_in,check_out,guest,room_type,hotel_name) value('$customer_name','$customer_email','$customer_mobile','$check_in','$check_out','$guest','$room_type','$hotel_name') ");
   

   if ($query) {
    	//echo "<script>alert('Your Order has been Booked....');</script>"; 
    		//echo "<script>window.location.href = 'confirmation_hotel.php'</script>";   
    $msg="";
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
    }

  }
}
  ?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="">
	<title>Touristo | Confirm</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Montserrat:300,400,700" rel="stylesheet">
	
	<!-- COMMON CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	
	<!-- CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	
</head>

<body>

	<div id="preloader">
		<div class="sk-spinner sk-spinner-wave">
			<div class="sk-rect1"></div>
			<div class="sk-rect2"></div>
			<div class="sk-rect3"></div>
			<div class="sk-rect4"></div>
			<div class="sk-rect5"></div>
		</div>
	</div>
	<!-- End Preload -->

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<!-- Header================================================== -->
	 <header>
        
            
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                    	<h1><a href="home.html" title=""></a></h1>

                    	
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="images/logo.png" width="160" height="34" alt="" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                         <ul>
                            <li class="submenu">
                                <a href="home.html" class="show-submenu">Home</a>
                                
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="fort_list.html">Fort Tour</a></li>
                                    <li><a href="museum_list.html">Museum Tour</a></li>
                                    <li><a href="Lake_list.html">Lake Tour</a></li>
                                    <li><a href="wildlife_list.html">Wildlife Tour</a></li>
                                    <li><a href="palace_list.html">Palace Tour</a></li>
                                     
                                    <li><a href="temple_list.html">Temple Tour</a></li>
                                   
                                    
                                </ul>
                            </li>
                             <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Hotels <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="hotel_jhoomar.php">Hotel Jhoomar Baori</a></li>
                                    <li><a href="hotel_vinayak.php">Hotel Vinayak</a></li>
                                    <li><a href="hotel_gavdi.php">Hotel Gavdi Talab</a></li>
                                   
                                   
                                    
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#festival" class="show-submenu">Festival <i class="icon-down-open-mini"></i></a>

<ul>
                                    <li><a href="camel_festival.html">Camel Festival</a></li>
                                    <li><a href="braj_holi.html">Braj Holi Festival</a></li>
                                    <li><a href="mewar_festival.html">Mewar Festival</a></li>
                                   
                                   
                                    
                                </ul>


                            </li>
                             <li class="submenu">
                                <a href="index.html?#culture" class="show-submenu">Culture </a>
                            </li>
                            <li class="submenu">
                                <a href="contact_us1.html" class="show-submenu">Contact US </a>
                            </li>
                            
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Me <i class="icon-down-open-mini"></i></a><ul>
                                    <li><a href="logout.php">LogOut</a></li>
                                   
                                   
                                </ul>
                            </li>
                             
                            
                                
                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                       
                        
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->
	<!-- End Header -->


	<section id="hero_2">
		<div class="intro_title">
			<h1>Place your order</h1>
			<div class="bs-wizard row">

				

			</div>
			<!-- End bs-wizard -->
		</div>
		<!-- End intro-title -->
	</section>
	<!-- End Section hero_2 -->

	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="#">Home</a>
					</li>
					<li><a href="#">Category</a>
					</li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- End position -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-8 add_bottom_15">

					<div class="form_title">
						<h3><strong><i class="icon-ok"></i></strong>Thank you!</h3>
						<p>
							
						</p>
					</div>
					<div class="step">
						<p>
							Your Booking Is Confirmed...
						</p>
					</div>
					<!--End step -->

					<div class="form_title">
						<h3><strong><i class="icon-tag-1"></i></strong>Booking summary</h3>
						<p>
							
						</p>
					</div>

					<div class="step">
						<table class="table table-striped confirm">
							<tbody>
								
								<tr>
									<td>
										<strong>Name</strong>
									</td>
									<td>
										<?php echo $customer_name; ?>
									</td>
								</tr>
                                <tr>
                                    <td>
                                        <strong>Email</strong>
                                    </td>
                                    <td>
                                       <?php echo $customer_email; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Mobile No</strong>
                                    </td>
                                    <td>
                                        <?php echo $customer_mobile; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Hotel</strong>
                                    </td>
                                    <td>
                                        <?php echo $hotel_name; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>No. Of Guest</strong>
                                    </td>
                                    <td>
                                        <?php echo $guest; ?>
                                    </td>
                                </tr>
								<tr>
									<td>
										<strong>Check in</strong>
									</td>
									<td>
										<?php echo $check_in; ?></td>
								</tr>
								<tr>
									<td><strong>Check out</strong>
									</td>
									<td>
										<?php echo $check_out; ?>
										<br>
									</td>
								</tr>
								<tr>
									<td><strong>Rooms Type</strong>
									</td>
									<td><?php echo $room_type; ?></td>
								</tr>
								
								
							</tbody>
						</table>
					</div>
					<!--End step -->
				</div>
				<!--End col -->

				<aside class="col-lg-4">
					<div class="box_style_1">
						<h3 class="inner">Thank you!</h3>
						<p>
							Your Booking is Submited..ThankYou For Choosing US!!
						</p>
						<hr>
						<a class="btn_full_outline" href="#" target="_blank">View your invoice</a>
					</div>
					<div class="box_style_4">
						<i class="icon_set_1_icon-89"></i>
						<h4>Have <span>questions?</span></h4>
						<a href="tel://004542344599" class="phone">+45 423 445 99</a>
						<small>Monday to Friday 9.00am - 7.30pm</small>
					</div>
				</aside>

			</div>
			<!--End row -->
		</div>
		<!--End container -->
	</main>
	<!-- End main -->

	<footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                    <a href="#" id="email_footer">help@touristo.com</a>
                </div>
                <div class="col-md-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                         <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Tour guide</a></li>
                        <li><a href="#">Wishlist</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <p>© Touristo 2020 | Designed & Developed by KBS Developers</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_set_1_icon-78"></i>
			</button>
		</form>
	</div><!-- End Search Menu -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<input id="remember-me" type="checkbox" name="check">
						<label for="remember-me">Remember Me</label>
					</div>
					<div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
				<div class="text-center">
					Don’t have an account? <a href="javascript:void(0);">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<!-- Jquery -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts_min.js"></script>
	<script src="js/functions.js"></script>


</body>

</html>