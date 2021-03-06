<?php require('connection.inc.php')?>
<?php require('functions.inc.php')?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Niamb Beauty</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- <link rel="stylesheet" href="blog.css"> -->


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <!-- <a href="index.php"><img src="images/skintone.jpg" alt="logo images"></a> -->
                                     <a href="index.php"><img src="images/logo/logo.PNG" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.php">Home</a></li>
                                        <li class="drop"><a href="#">Shop</a></li>
                                        <li class="drop"><a href="blog2.php">Blog</a></li>
                                        <li class="drop"><a href="#">Know Your Skin &#9660;</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Skin Care Quiz</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">About  Us &#9660;</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Our Founder</a></li>
                                                <li><a href="#">Our Foundation</a></li>
                                                <li><a href="#">Our Sustanability Oath</a></li>
                                                <li><a href="#">Carrer</a></li>
                                                <li><a href="#">Press / in the Media</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">Philosophy of Niamb &#9660;</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Less is more</a></li>
                                                <li><a href="#">How We Develop a product</a></li>
                                                <li><a href="#">Innovation</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        <!-- <li><a href="contact.html">Philosophy of Niamb</a></li> -->
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="blog2.php">blog</a></li>
                                            <li><a href="#">Know Your Skin</a>
                                                <ul>
                                                <li><a href="#">Skin Care Quiz</a></li>
                                               
                                                </ul>
                                            </li>
                                            <li><a href="#">About Us</a>
                                                <ul>
                                                <li><a href="#">Our Founder</a></li>
                                                <li><a href="#">Our Foundation</a></li>
                                                <li><a href="#">Our Sustanability Oath</a></li>
                                                <li><a href="#">Carrer</a></li>
                                                <li><a href="#">Press / in the Media</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="#">Philosophy of Niamb</a>
                                                <ul>
                                                <li><a href="#">Less is more</a></li>
                                                <li><a href="#">How We Develop a product</a></li>
                                                <li><a href="#">Innovation</a></li>
                                               
                                                </ul>
                                            </li>

                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>  
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                    <div class="header__account">
                                        <a href="#">Login</a>
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="#"><span class="htc__qua">2</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
 