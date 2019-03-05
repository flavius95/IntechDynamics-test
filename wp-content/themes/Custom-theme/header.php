<!--Template for header section-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test IntechDynamics</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <?php wp_head();?>

</head>

<body>

<div class="container-fluid">
    <div class="top-wrapper">
        <div class="main-nav">
            <div class="container">
                <!--Use the css class to insert the logo-->
                <div class="navbar-brand">
                    <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo"/>
                </div>
                <!--Create the navbar menu links-->
                <nav class="blog-nav">
                    <a class="main-nav-item" href="#">CONTACT US</a>
                    <a class="main-nav-item" href="#">SERVICES</a>
                    <a class="main-nav-item" href="#">ABOUT US</a>
                    <a class="main-nav-item active" href="#">HOME</a>
                    <a class="main-nav-item" href="tel:(800) 508-2265"><img src="<?php echo get_template_directory_uri();?>/images/iphone1.png" alt="phone"/> (800) 508-2265</a>
                </nav>
            </div>
        </div>`
    </div>
<!--Set the static text for left side of the page and create the submit button-->
<div class="container">
    <div class="blog-header">
        <h1 class="blog-title">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT.</h1>
        <p class="lead blog-description">Vestibulum placerat dolor sed lacinia ornare. In sit amet erat viverra, vulputate urna iaculis, venenatis ex. Donec porttitor mattis justo id ornare.</p>
        <button role="button" type="submit">Submit</button>
    </div>
</div>
    <!--Insert the slider with pictures-->
    <!-- Wrapper for slides -->
    <div class="container text-center my-3">
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider1.jpeg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider2.jpeg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider3.jpeg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider1.jpeg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider2.jpeg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block col-4 img-fluid" src="<?php echo get_template_directory_uri();?>/images/slider3.jpeg">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
