<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dardose</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri();?>/assets/img/site-logo/Dardos logo icon.png">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/all.min.css?rand=<?php echo rand();?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/normalize.css?rand=<?php echo rand();?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css?rand=<?php echo rand();?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/splide.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/preloader.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/main.css?rand=<?php echo rand();?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/default.css?rand=<?php echo rand();?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/responsive.css?rand=<?php echo rand();?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/mmenu-light.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
</head>
<body class="enpix-bg-1">
    <!-- Preloader Starts-->
    <div id="preloader">
        <div class="ctn-preloader" id="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span class="letters-loading" data-text-preloader="D"> D </span>
                    <span class="letters-loading" data-text-preloader="A"> A </span>
                    <span class="letters-loading" data-text-preloader="R"> R </span>
                    <span class="letters-loading" data-text-preloader="D"> D </span>
                    <span class="letters-loading" data-text-preloader="O"> O </span>
                    <span class="letters-loading" data-text-preloader="S"> S </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Ends -->
    <!-- =========================== Menu Area =========================================== -->
    <header class="enpix-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-9">
                    <div class="logo">
                        <a href="<?php echo home_url();?>">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/site-logo/Dardos-logo.png" alt="Dardos">
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-3 d-flex align-items-center">
                    <a class="menu-opener ml-auto d-xl-none" href="#menu">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                    <nav id="menu" class="site-menu ml-auto">
                        <ul>
                            <li class="current-menu-item ">
                            <li>
                                <a href="<?php echo home_url();?>/?cat=3">Services</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url();?>/?cat=4">Portfolio</a>
                            </li>
                            <li class="con">
                    <a href="<?php echo home_url();?>/?page_id=61" class="enpix-cta ml-auto">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
               
            </div>
        </div>
    </header>