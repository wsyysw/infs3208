<!DOCTYPE html>
<html lang="en-US">
<?php include ( 'floralFunction.php')?>
<?php include ( 'flowerMain.php') ?>

<head>

    <title>Shiyun</title>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
    <meta name="description" content="Shiyun Flower">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,jquery">
    <meta name="author" content="Pegah">
    <meta http-equiv="refresh" content="360">

    <link rel="stylesheet" type="text/css" href="css/slideFloralPic.css" />
    <link rel="stylesheet" type="text/css" href="css/floral1.css" />

</head>

<body>

    <div class="main_wrapper">
        <!-- headerlogo -->
        <div id='logo'>
            <img src="ch_llaca_1.jpg" alt="llaca" width='255' height='110' />
		</div>
			
        <!-- header -->

        <div>
            <h2>Shiyun Floral</h2>
        </div>

        <span id="phone_information">
			<img src="telep.jpg" alt="phone_information" width='29' height='29' />
			<span id="phone">To place an order through phone, please call: <b>0123 456 987<b>
            </span>

		</span>

        <!-- main menue -->
        <div id="nav">
            <ul id="tab_pages">
                <li><a href="index1.php">Home</a></li>

                <li><a href="#">Contact</a></li>

                <li><a href="#">Help</a></li>

                <li><a href="#">About us</a></li>

                <li><a href="loginFloral1.php">Login</a></li>

                <li>
                    <form method="get" action="result_floral.php" enctype="multipart/form-data">
                        <input type="text" name="user_query" />
                        <input type="submit" name="search" value="search" />
                    </form>
                 </li>
                        
            </ul>
        </div>

        <!-- make a side bar -->
        <div id="floralSidebar">
            <div id="floralSidebarTitle">All Categories</div>

            <ul id="cats">
                <?php getcat(); ?>
            </ul>
            <div id="floralSidebarTitle_1">Price</div>
            <ul id="cats">
                <?php getprice(); ?>
            </ul>
        </div>
        
        <!-- Jquery for Slide show on the middle -->
        <div id='content_wrapper'>
            <div class="slider">
                <ul class="slides">

                    <li class="Slide"><img src="1Floral_slides.jpg" alt="pic1" /></li>
                    <li class="Slide "><img src="2Floral_slides.jpg" alt="pic2" /></li>
                    <li class="Slide "><img src="3Floral_slides.jpg" alt="pic3" /></li>
                    <li class="Slide "><img src="4Floral_slides.jpg" alt="pic4" /></li>
                    <li class="Slide "><img src="5Floral_slides.jpg" alt="pic5" /></li>
                    <li class="Slide "><img src="6Floral_slides.jpg" alt="pic6" /></li>
                    <li class="Slide"><img src="7Floral_slides.jpg" alt="pic7" /></li>

                </ul>
            </div>

            <!-- Function for Jquery Slide -->
            <script src="js/jquery.js"></script>
            <script>
                $(function() {
                    //configuration
                    var width = 950;
                    var animation = 1000;
                    var pause = 4000;
                    var currentSlide = 1;

                    //cache DOM
                    var $slider = $('.slider');
                    var $slideContainer = $slider.find('.slides');
                    var $Slide = $slideContainer.find('.Slide');

                    //copy slide1 to last
                    $slideContainer.append($Slide.first().clone());
                    var interval;

                    function startSlide() {
                        interval = setInterval(function() {

                            $('.slider .slides').animate({
                                    'margin-left': '-=' + width
                                }, animation,

                                function() {
                                    ++currentSlide;
                                    if (currentSlide === $Slide.length + 1) {
                                        currentSlide = 1;
                                        $slideContainer.css('margin-left', 0);
                                    }
                                });
                        }, pause);
                    }

                    function stopSlide() {
                        clearInterval(interval);
                    }
                    $slideContainer
                        .on('mouseenter', stopSlide)
                        .on('mouseleave', startSlide);
                    startSlide();
                });
            </script>

            <div id='product_box'>

                <?php getpro();?>
                <?php getpro_cat();?>
                <?php getprice_Cat();?>

            </div>

                               

        </div>

        <!-- make a Footer -->
        <div id='page_footer_main'>
            Copyright© ShiyunWang s46428134
        </div>

    </div>
</body>

</html>
           
