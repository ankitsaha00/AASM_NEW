<?php 
 require_once("OOP_CLASS/db-connect/connect.php");
 require_once("OOP_CLASS/class/common_class.php");
 require_once("OOP_CLASS/function/function.php");
 $server=new Main_Class();
?>
<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from demo.webtend.net/html/gadden_preview/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 17:21:06 GMT -->
<head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Landscaping, Gardening, Florists, Groundskeeping">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>AAMS</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon_gadden.css">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="assets/vendor/magnific-popup/dist/magnific-popup.css">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="assets/vendor/slick/slick.css">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.min.css">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="assets/vendor/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
         

    </head>
    <style>
        .error
        {
          color:red;
        }
    </style>
    <body>
        <!--====== Start Preloader ======-->
        <!--====== End Preloader ======-->
        <!--====== Search From ======-->
		<div class="modal fade search-modal" id="search-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="form_group">
                        	<input type="text" class="form_control" placeholder="Search here" name="search">
                        	<label><i class="fa fa-search"></i></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <header class="header-area header-three">
            <!--======= Header Navigation ======-->
            <div class="header-navigation main-bg navigation-white">
                <div class="nav-overlay"></div>
                <div class="container-fluid">
                    <!--======= Primary Menu ======-->
                    <div class="primary-menu">
                        <!--======= Site Branding ======-->
                        <div class="site-branding">
                            <a href="index.php" class="brand-logo" style="width:500px;"><img src="assets/images/logo/University logo.png" alt="Site Logo" style="height: 60px; width:60px;"><span style="color:white; margin-left:15px; font-family: 'Ubuntu', sans-serif; font-weight: bold; font-size: 30px;">Raiganj University</span></a>

                            <!-- <a href="index.html" class="sticky-logo"><img src="assets/images/logo/logo-white.png" alt="Site Logo"></a> -->
                        </div>
                        <!--======= Nav Menu ======-->
                        <div class="nav-menu">
                            <!-- Mobile Logo -->
                            <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                                <a href="index.php" class="brand-logo"><img src="assets/images/logo/University logo.png" alt="Site Logo" style="height: 60px; width:60px;"></a>
                            </div>
                            <!--=== Nav Search ===-->
                            <div class="nav-search mb-30 d-block d-xl-none ">
                                <form>
                                    <div class="form_group">
                                        <!-- <input type="email" class="form_control" placeholder="Search Here" name="email" required> -->
                                    </div>
                                </form>
                            </div>
                            <!--=== Main menu ===-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item has-children"><a href="index.php">Home</a>
                                    </li>
                                    <li class="menu-item has-children"><a href="about.php">About</a>
                                    </li>
                                    <li class="menu-item has-children"><a href="Facilities.php">Facilities</a>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Plants</a>
                                        <ul class="sub-menu">
                                            <li><a href="Medicinal.php">Medicinal</a></li>
                                            <li><a href="Arometic.php">Aromatic</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Others</a>
                                        <ul class="sub-menu">
                                            <li><a href="Faculty-Members.php">Members</a></li>
                                            <li><a href="Mission&mandates.php">Mission and mandates</a></li>
                                            <li><a href="Books.php">Book's</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!--====== Menu Button ======-->
                        </div>
                        <!--======= Nav Right Item ======-->
                        <div class="nav-right-item d-flex align-items-center">
                            <div class="lang-dropdown">
                            </div>
                            <!-- <div class="search-btn" data-toggle="modal" data-target="#search-modal"><i class="far fa-search"></i></div> -->
                            <div class="menu-button d-xl-block d-none">
                                <a href="contact.php" class="main-btn secondary-btn">Contact Us</a>
                            </div>
                           
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       