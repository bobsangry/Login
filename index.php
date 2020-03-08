<?php
	require "header.php";
?>
 <meta name="viewport" content="width=device-width, initial-scale=1">
		<main>
		<!-- Start Slider -->
				<?php
		if (isset($_SESSION['userId'])){
			echo '<div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Zippy Hippy</strong></h1>
                            <p class="m-b-40">Cheapest Herbs \ Shatter \ distillate \ Hash \ Oils \ Buddha \ Resins.<br> Delivered right to you.</p>
                            <p><a class="btn hvr-hover" href="shop.php#list-group-men">Browse</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Zippy Hippy</strong></h1>
                            <p class="m-b-40">Cheapest Herbs \ Shatter \ distillate \ Hash \ Oils \ Buddha \ Resins.<br> Delivered right to you.</p>
                            <p><a class="btn hvr-hover" href="shop.php#list-view">Browse</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Zippy Hippy</strong></h1>
                            <p class="m-b-40">Cheapest Herbs \ Shatter \ distillate \ Hash \ Oils \ Buddha \ Resins.<br> Delivered right to you.</p>
                            <p><a class="btn hvr-hover" href="#">Browse</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-arrow-circle-o-right fa-3x" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-arrow-circle-o-left fa-3x" aria-hidden="true"></i></a>
        </div>
    </div>';
		}
		else {
			
			echo '<div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Zippy Hippy</strong></h1>
                            <p class="m-b-40">Setting up an account is easy and fast.<br> Or place an order over the phone.</p>
                            <p><a class="btn hvr-hover" href="tel:123-456-7890">Call</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Zippy Hippy</strong></h1>
                            <p class="m-b-40">Signing up an account is free.<br> Takes only a minute.</p>
                            <p><a class="btn hvr-hover" href="signup.php#list-view">Register Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Zippy Hippy</strong></h1>
                            <p class="m-b-40">Already a Member?<br> Log In to take advantage of all the great benefits and use most of the site.</p>
                            <p><a class="btn hvr-hover" href="#">Login At The Top</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-arrow-circle-o-right fa-3x" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-arrow-circle-o-left fa-3x" aria-hidden="true"></i></a>
        </div>
    </div>';
		}
		?>

    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Specials on Herbs</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_02.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Specials on Shatter</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_03.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Specials on Oils</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
			<?php
		if (isset($_SESSION['userId'])){
			echo '<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/add-img-01.jpg" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/add-img-02.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>';
		}
		else {
			
			echo '';
		}
		?>
	

    <!-- Start Products  -->
	<?php
			if (isset($_SESSION['userId'])){
			echo '    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Distillates & Resins</h1>
                        <p>Might we Suggest trying some of our finest Distillates & Resins.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-map-signs"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heartbeat"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-map-signs"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heartbeat"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-map-signs"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heartbeat"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-map-signs"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heartbeat"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $15.79</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->';
		}
		else {
			
			echo '    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Distillates & Resins</h1>
                        <p>Log in to try some of our finest Distillates & Resins.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">          
                                <a class="cart" href="#">Log In To Purchase</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="#">Log In To Purchase</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="#">Log In To Purchase</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="#">Log In To Purchase</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $15.79</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->';
		}
		?>


    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Latest News</h1>
                        <p>Catch The lastest Showcases.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="fa fa-heartbeat"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="fa fa-heartbeat"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="fa fa-heartbeat"></i></a></li>
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->
	
	<!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><img src="images/fb_icon_325x325.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><img src="images/fb_icon_325x325.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><img src="images/fb_icon_325x325.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><img src="images/fb_icon_325x325.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><img src="images/fb_icon_325x325.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><img src="images/fb_icon_325x325.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><img src="images/fb_icon_325x325.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><img src="images/fb_icon_325x325.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><img src="images/fb_icon_325x325.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><img src="images/fb_icon_325x325.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->
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