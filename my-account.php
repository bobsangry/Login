<?php
	require "header.php";
?>
 
		<main>

		<?php
		if (isset($_SESSION['userId'])){
			echo '    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Account</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
							
							<p><b><u>Upload a Profile Picture</u></b></p>
							<br>						
							        <form id="eieio" action="uploads.php" method="POST" enctype="multipart/form-data">
                                    <input type="file" name="file">							
                                    <button type="submit" name="submit"><i class="fa fa-picture-o fa-2x" aria-hidden="true"></i></button>
									</form>				
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"><i class="fa fa-lock"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Login &amp; security</h4>
                                    <p>password reset feature coming then more</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-location-arrow"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Your Addresses</h4>
                                    <p>Edit billing addresses for orders and gifts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-credit-card"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Payment options</h4>
                                    <p>Edit or add payment methods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-flag-checkered"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Contest System</h4>
                                    <p>Well use this to keep track of contests</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-gift"></i> </a>
                                </div>
								
                                <div class="service-desc">
                                    <h4>Your Orders</h4>
                                    <p>Track, return, or buy things again</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-box">
								<p>This part is just QUESTIONMARK?</p>
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="account-box">
                                <div class="service-box">
			
                                    <div class="service-desc">
                                        <h4>Gold &amp; Diamond Jewellery</h4>
                                        <ul>
                                            <li> <a href="#">Apps and more</a> </li>
                                            <li> <a href="#">Content and devices</a> </li>
                                            <li> <a href="#">Music settings</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="account-box">
                                <div class="service-box">
                                    <div class="service-desc">
                                        <h4>Handloom &amp; Handicraft Store</h4>
                                        <ul>
                                            <li> <a href="#">Advertising preferences </a> </li>
                                            <li> <a href="#">Communication preferences</a> </li>
                                            <li> <a href="#">SMS alert preferences</a> </li>
                                            <li> <a href="#">Message center</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="account-box">
                                <div class="service-box">
                                    <div class="service-desc">
                                        <h4>The Designer Boutique</h4>
                                        <ul>
                                            <li> <a href="#">Amazon Pay</a> </li>
                                            <li> <a href="#">Bank accounts for refunds</a> </li>
                                            <li> <a href="#">Coupons</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="account-box">
                                <div class="service-box">
                                    <div class="service-desc">
                                        <h4>Gift Boxes, Gift Tags, Greeting Cards</h4>
                                        <ul>
                                            <li> <a href="#">Leave delivery feedback</a> </li>
                                            <li> <a href="#">Lists</a> </li>
                                            <li> <a href="#">Photo ID proofs</a> </li>
                                            <li> <a href="#">Profile</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="account-box">
                                <div class="service-box">
                                    <div class="service-desc">
                                        <h4>Other accounts</h4>
                                        <ul>
                                            <li> <a href="#">Amazon Business registration</a> </li>
                                            <li> <a href="#">Seller account</a> </li>
                                            <li> <a href="#">Amazon Web Services</a> </li>
                                            <li> <a href="#">Login with Amazon</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="account-box">
                                <div class="service-box">
                                    <div class="service-desc">
                                        <h4>Shopping programs and rentals</h4>
                                        <ul>
                                            <li> <a href="#">Subscribe &amp; Save</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
		}

		else {
			   echo '<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Ah Crap... something went wrong</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Something</a></li>
                        <li class="breadcrumb-item active">Broke Here</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>';
			echo "Why?? are you here?";
		}
		?>
    
    <!-- Extra copy pastable -->

		 <?php
		if (isset($_SESSION['userId'])){
			echo '<p class="login-status">You are logged in!</p>';
		}
		else {
			
			echo '<p class="login-status">You are logged out!</p>';
		}
		?>
		</main>
   
<?php
	require "footer.php";
?>