<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
<script src="https://use.fontawesome.com/4427571116.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Zippy Hippy</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css"> <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
		</head>
		<body>
		<header>		
		<nav>
	<?php
		if (isset($_SESSION['userId'])){
			echo '<div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">		
                    <div class="right-phone-box">
                        <p></p>
                    </div>
                    <div class="our-link">

                        <ul>
						<li><i class="fa fa-mobile fa-2x" aria-hidden="true"></i> - <a href="tel:123-456-7890">123-456-7890</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">					
					<!-- These are the Cycling deal things at the top Change these as needed -->			
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                                                <li>
                                    <a href="#" class="next"><img src="images/A.png" alt=""></a> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <a href="#" class="next"><img src="images/A.png" alt=""></a> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <a href="#" class="next"><img src="images/A.png" alt=""></a> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <a href="#" class="next"><img src="images/A.png" alt=""></a> Off 50%! Shop Now
                                </li>
                                <li>
                                    <a href="#" class="next"><img src="images/A.png" alt=""></a> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <a href="#" class="next"><img src="images/A.png" alt=""></a> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <a href="#" class="next"><img src="images/A.png" alt=""></a> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <a href="#" class="next"><img src="images/A.png" alt=""></a> Off 50%! Shop Now 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
		}
		else {
			
			echo '<div class="main-top">
       <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			
                    <div class="right-phone-box">
                        <p></p>
                    </div>
                    <div class="our-link">

                        <ul>
						<li><i class="fa fa-mobile fa-2x" aria-hidden="true"></i> - <a href="tel:123-456-7890"><b>123-456-7890</b></a></li>
                            <li><a href="contact-us.php"><b>Contact Us</b></a></li>
                        </ul>
                    </div>
                </div>
				<!-- <img src="images/log.png" alt=""> --> <i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>
                        <ul>
							<form action="includes/login.inc.php" method="post">
								<input type="text" name="mailuid" placeholder="Username" style="color: white; background-color: transparent;">
								<input type="password" name="pwd" placeholder="Password" style="color: white; background-color: transparent;">
								<button type="submit" name="login-submit" >Login</button>
							</form>                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>';
		}
		?>
		<div>
		<?php
				if (isset($_SESSION['userId'])){
			echo '		    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div  class="navbar-header">                    
					<form id="logoutbuttonguy" action="includes/logout.inc.php" method="post">
						<button type="submit" name="logout-submit"><b>Log Out</b><a class="navbar-brand" href="index.php"><img src="images/logo.jpg" class="logo" alt=""></a></button>
					</form>   
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
						<li class="nav-item"><a class="nav-link" href="shop-detail.php">Product Details</a></li>
						<li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
						<li class="nav-item"><a class="nav-link" href="wishlist.php">WishList</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Vlog</a></li>
						
                    </ul>
                </div>

                <!-- Start Atribute Navigation -->
               <div class="attr-nav">
                    <ul>
                       <li class="nav-item"><a class="nav-link" href="my-account.php">My Account</a></li>
					</li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>';
		}
		else {
			
			echo '		    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
						<li class="nav-item"><a class="nav-link" href="shop-detail.php">Product Details</a></li>
                    </ul>
                </div>

                <!-- Start Atribute Navigation -->
               <div class="attr-nav">
                    <ul>
                        <li class="button"><a href="signup.php"><img src="images/log2.png" alt="">Register Account</a></li>

                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>';
		}
		?>
			

		</div>
		</nav>	
		</header>
