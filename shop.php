<?php
	require "header.php";
?>
 
		<main>
		    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Seek </span>									
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Nothing</option>
									<option <a href="#">Herbs</a></option>
									<option value="2">High Price → High Price</option>
									<option value="3">Low Price → High Price</option>
									<option value="4">Best Selling</option>
								</select>
                                </div>
                                <p>Showing all 4 results</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
<!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="images/img-pro-01.png" class="img-fluid" alt="Image">
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
                                                    <h4>These Things</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
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
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
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
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">New</p>
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
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
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
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
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
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
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
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
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
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">New</p>
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
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="new">New</p>
                                                        </div>
                                                        <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-map-signs"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heartbeat"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fa fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fa fa-map-signs"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="fa fa-heartbeat"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
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

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Herbs <small class="text-muted">(#of)</small>
								</a>
                                    <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">Herb 1 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Herb 2 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Herb 3 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Herb 4 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Herb 5 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Herb 6 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Herb 7 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Herb 8 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Herb 9 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Herb 10 <small class="text-muted">(Thc)</small></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Hash 
								<small class="text-muted">(#of)</small>
								</a>
                                    <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">Hash 1 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Hash 2 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Hash 3 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Hash 4 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Hash 5 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Hash 6 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Hash 7 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Hash 8 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Hash 9 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Hash 10 <small class="text-muted">(Thc)</small></a>
                                        </div>
                                    </div>
								<div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men3" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men3">Shatter 
								<small class="text-muted">(#of)</small>
								</a>
                                    <div class="collapse" id="sub-men3" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">Shatter 1 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Shatter 2 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Shatter 3 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Shatter 4 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Shatter 5 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Shatter 6 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Shatter 7 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Shatter 8 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Shatter 9 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Shatter 10 <small class="text-muted">(Thc)</small></a>
                                        </div>
                                    </div>
                                </div>							
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men4" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men4">Distillate
								<small class="text-muted">(#of)</small>
								</a>
                                    <div class="collapse" id="sub-men4" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">Distillate 1 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Distillate 2 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Distillate 3 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Distillate 4 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Distillate 5 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Distillate 6 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Distillate 7 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Distillate 8 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Distillate 9 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Distillate 10 <small class="text-muted">(Thc)</small></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men5" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men5">Oils
								<small class="text-muted">(#of)</small>
								</a>
                                    <div class="collapse" id="sub-men5" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">Oil 1 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Oil 2 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Oil 3 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Oil 4 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Oil 5 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Oil 6 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Oil 7 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Oil 8 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Oil 9 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Oil 10 <small class="text-muted">(Thc)</small></a>
                                        </div>
                                    </div>
                                </div>
                                                               <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men6" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men6">Resin
								<small class="text-muted">(#of)</small>
								</a>
                                    <div class="collapse" id="sub-men6" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">Resin 1 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Resin 2 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Resin 3 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Resin 4 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Resin 5 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Resin 6 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Resin 7 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Resin 8 <small class="text-muted">(Thc)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Resin 9 <small class="text-muted">(Thc)</small></a>
											<a href="#" class="list-group-item list-group-item-action">Resin 10 <small class="text-muted">(Thc)</small></a>
                                        </div>
                                    </div>
                                </div>
								
                            </div>
                        </div>
                        <div class="filter-price-left">
                            <div class="title-left">                              
                            </div>
                            <div class="price-box-slider">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->
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