<!--Template for header section-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test IntechDynamics</title>
    <?php wp_head();?>
</head>
<body>
<!--Start of the header-->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="navbar-brand">
                    <a class="logo" href="http://intech.test/"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo"/></a>
                </div>
            </div>
            <!--The main navigation menu-->
            <div class="main-nav col-md-8">
                <nav class="blog-nav">
                    <a class="main-nav-item" target="_blank" href="http://intech.test/">CONTACT US</a>
                    <a class="main-nav-item" target="_blank" href="http://intech.test/">SERVICES</a>
                    <a class="main-nav-item" target="_blank" href="http://intech.test/">ABOUT US</a>
                    <a class="main-nav-item active" target="_blank" href="http://intech.test/">HOME</a>
                    <a class="phonenb" href="tel:(800) 508-2265"><img src="<?php echo get_template_directory_uri();?>/images/iphone1.png" alt="phone"/> (800) 508-2265</a>
                </nav>
            </div>`
        </div>
    </div>
<!--Set the static text for left side of the page and create the submit button for the form-->
<div class="container">
    <div class="row">
        <!--Insert the static text-->
        <div class="blog-header col-md-6">
            <h1 class="title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT.</h1>
            <p class="description">Vestibulum placerat dolor sed lacinia ornare. In sit amet erat viverra, vulputate urna iaculis, venenatis ex. Donec porttitor mattis justo id ornare.</p>
            <!--Submit button for the products form-->
            <button type="button" class="show-content" value="Submit" onclick="showSelectedProducts()">Submit</button>
        </div>
        <!--Dropdown categories selection-->
        <div class="col-md-6">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle dropbutton" onclick="customDropdown()">
                    PLEASE SELECT WHAT KIND OF PRODUCTS DO YOU PREFER
                </button>
                <div id="categoriesDropdown" class="dropdown-content">
                    <ul class="col-md-4">
                        <li><a href="#" data-name="popInd">Popular Industries</a></li>
                        <li><a href="#" data-name="olGames">Olympic Games</a></li>
                        <li><a href="#" data-name="liveHealth">Live Healthy</a></li>
                        <li><a href="#" data-name="vegetables">Vegetables</a></li>
                    </ul>
                    <ul class="col-md-4">
                        <li><a href="#" data-name="books">Top Books 2015</a></li>
                        <li><a href="#" data-name="music">Top Music 2015</a></li>
                        <li><a href="#" data-name="vacations">Exotic Vacations</a></li>
                        <li><a href="#" data-name="spEquip">Sport Equipment</a></li>
                    </ul>
                    <ul class="col-md-4">
                        <li><a href="#" data-name="tech">Technology</a></li>
                        <li><a href="#" data-name="bJobs">Best Jobs</a></li>
                        <li><a href="#" data-name="receip">Receipts</a></li>
                        <li><a href="#" data-name="nature">Nature</a></li>
                    </ul>
                </div>
                <!--Form for products with images-->
                <form name="productSelect" id="products-select" class="products-select" method="post" action="#submited">
                    <div class="col-md-12">
                        <ul>
                            <li class="category-item" data-category="popInd">
                                <img src="<?php echo get_template_directory_uri();?>/images/Phone.jpeg"/>
                                <input type="radio" name="product" value="phone" data-category="popInd" class="btnradio">
                            </li>
                            <li class="category-item" data-category="popInd">
                                <img src="<?php echo get_template_directory_uri();?>/images/Tablet.jpeg"/>
                                <input type="radio" name="product" value="tablet" data-category="popInd">
                            </li>
                            <li class="category-item" data-category="popInd">
                                <img src="<?php echo get_template_directory_uri();?>/images/Laptop.jpeg"/>
                                <input type="radio" name="product" value="laptop" data-category="popInd">
                            </li>
                            <li class="category-item" data-category="liveHealth">
                                <img src="<?php echo get_template_directory_uri();?>/images/mp3.jpeg"/>
                                <input type="radio" name="product1" value="mp3" data-category="popInd">
                            </li>
                            <li class="category-item" data-category="liveHealth">
                                <img src="<?php echo get_template_directory_uri();?>/images/gps.jpeg"/>
                                <input type="radio" name="product1" value="gps" data-category="popInd">
                            </li>
                            <li class="category-item" data-category="liveHealth">
                                <img src="<?php echo get_template_directory_uri();?>/images/camera.jpeg"/>
                                <input type="radio" name="product1" value="camera" data-category="popInd">
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!--Slider with pictures-->
    <!-- Wrapper for slides -->
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <a class="slider-item" data-toggle="modal" data-target="#mainModal">
                            <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider1.jpeg"/>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="slider-item" data-toggle="modal" data-target="#mainModal">
                            <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider2.jpeg"/>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="slider-item" data-toggle="modal" data-target="#mainModal">
                            <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider3.jpeg"/>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="slider-item" data-toggle="modal" data-target="#mainModal">
                            <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider1.jpeg"/>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="slider-item" data-toggle="modal" data-target="#mainModal">
                            <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider2.jpeg"/>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="slider-item" data-toggle="modal" data-target="#mainModal">
                            <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider3.jpeg"/>
                        </a>
                    </div>
                </div>
                <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--End of the slider-->
<!--Modal wrapper-->
<div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
