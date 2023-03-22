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
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/splide.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/preloader.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/default.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/mmenu-light.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
</head>
<body class="enpix-bg-1">
<?php get_header();?>
    <main>
        <!-- =========================== slider Section =========================================== -->
        <section class="splide" id="bannerslider">
            <div class="splide__track overflow-visible">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="banner-area">
                            <div class="container">
                                <div class="row">
                                <?php
                                     $args=array(
                                     'posts_per_page' => 4, 
                                     'cat' => 13,
                                                 );
                                     $the_query = new WP_Query( $args );
                                     if ( $the_query->have_posts() ) {
                                     while ( $the_query->have_posts() ) {
                                     $the_query->the_post();
                                     ?>
                                    <div class="col-lg-6 col-md-7">
                                        <div class="d-flex align-items-center h-100 relative">
                                            <div class="banner-text order-xl-2 order-lg-2 order-md-2 ">
                                                <h1><?php the_title();?></h1>
                                                <h3 class="enpix-subtitle-2"><?php echo get_the_content();?></h3>
                                            </div>
                                            <!-- SVG Shapes -->
                                            <img class="path-svg" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/svg/Path.svg" alt="enpix">
                                            <img class="rectangle-svg" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/svg/Rectangle.svg" alt="enpix">
                                            <img class="oval-svg" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/svg/Oval.svg" alt="enpix">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5">
                                        <div class="banner-image-area order-xl-1 order-lg-1 order-md-1">
                                            <img class="banner-image rounded" src="<?php echo get_field('image');?> " style="width: 100%; "
                                                alt="enpix">
                                            <div class="banner-image-svg relative">
                                                <!-- SVG Shapes -->
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/svg/Ellipse14.svg" alt="dardos">
                                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/svg/Ellipse13.svg" alt="dardos">
                                            </div>
                                            
                                            <img class="fill-255" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/home/banner/Group21.svg" alt="enpix">
                                        </div>
                                    </div>
                                    <?php } } ?>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
  <!-- =========================== About us Area =========================================== -->
  <section class="branding-area">
    <div class="container">
        <div class="row">
        <?php
$post_id = 34; 
$args = array(
    'p' => $post_id,
    'post_type' => 'post',
    'post_status' => 'publish'
);
$query = new WP_Query($args);
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
?>
            <div class="col-md-6 wow animate__animated animate__fadeInLeft">
                <div class="branding-image-container relative">
                    <img class="branding-image-shape" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/svg/Group21.svg" alt="dardos">
                    <img class="branding-image rounded" src="<?php echo get_field('image');?>" style="width: 100%;" alt="dardos">
                </div>
            </div>
            <div class="col-md-6 wow animate__animated animate__fadeInRight" style="padding-left: 40px;">
                <div class="branding-text">
                    <h2 class="heading-1"> <?php the_title();?>  </h2>
                    <p class="enpix-subtitle-2 mt-50"><?php short_content(100);?></p>
                </div>
            </div>
            <?php } }wp_reset_postdata(); ?>
        </div>
    </div>
</section>
 <!-- =========================== Our Mission Area =========================================== -->
 <section class="branding-area">
    <div class="container">
        <div class="row"> 
        <?php
$post_id = 36;
$args = array(
    'p' => $post_id,
    'post_type' => 'post',
    'post_status' => 'publish'
);
$query = new WP_Query($args);
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
?>
            <div class="col-md-6 wow animate__animated animate__fadeInLeft order-xl-2 order-lg-2 order-md-2" >
                <div class="branding-image-container relative ">
                    <img class="branding-image-shape" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/svg/Group21.svg" alt="dardos">
                    <img class="branding-image rounded" src="<?php echo get_field('image');?>" style="width: 100%;" alt="dardos">
                </div>
            </div>
            <div class="col-md-6 wow animate__animated animate__fadeInRight order-xl-1 order-lg-1 order-md-1" style="padding-right: 40px;">
                <div class="branding-text ">
                    <h2 class="heading-1"><?php the_title();?> </h2>
                    <p class="enpix-subtitle-2 mt-50"><?php short_content(100);?></p>
                </div>
            </div>
            <?php } }wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!-- =========================== Our Vision Area =========================================== -->
<section class="branding-area">
    <div class="container">
        <div class="row">
        <?php
$post_id = 38;
$args = array(
    'p' => $post_id,
    'post_type' => 'post',
    'post_status' => 'publish'
);

$query = new WP_Query($args);
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
?>
            <div class="col-md-6 wow animate__animated animate__fadeInLeft">
                <div class="branding-image-container relative">
                    <img class="branding-image-shape" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/svg/Group21.svg" alt="dardos">
                    <img class="branding-image rounded" src="<?php echo get_field('image');?>" style="width: 100%;" alt="dardos">
                </div>
            </div>
            <div class="col-md-6 wow animate__animated animate__fadeInRight" style="padding-left: 40px;">
                <div class="branding-text">
                    <h2 class="heading-1"><?php the_title();?> </h2>
                    <p class="enpix-subtitle-2 mt-50"><?php short_content(100);?></p>
                </div>
            </div>
            <?php } }wp_reset_postdata(); ?>
        </div>
    </div>
</section>
        <!-- =========================== Services Area =========================================== -->
        <section class="services-area pb-130 relative">
            <div class="container">
                <div class="row services-header pt-120 pb-80">
                <?php
                     $post_id = 40;
                     $args = array(
                                 'p' => $post_id,
                                'post_type' => 'post',
                                'post_status' => 'publish'
                                 );
                                 $query = new WP_Query($args);
                                if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                $query->the_post();
                                   ?>
                    <div class="col-xl-5 col-md-6 wow animate__animated animate__fadeInLeft">
                        <h2 class="heading-1"><?php the_title();?> </h2>
                    </div>
                    <div class="col-xl-5 col-md-6 offset-xl-2 wow animate__animated animate__fadeInRight">
                        <p class="enpix-subtitle-2 m-0">
                            <?php short_content(100);?>
                        </p>
                    </div>
                    <?php } }wp_reset_postdata(); ?>
                </div>
                <div class="relative">
                    <img class="circle-shape" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/home/services/Group34.svg" alt="dardos">
                    <img class="triangle-shape" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/home/services/Trianglelineshape.svg" alt="dardos">
                    <div class="row wow animate__animated animate__fadeInUp animate__delay-1s">  
                    <?php
                    $args=array(
                        'posts_per_page' => 4, 
                        'cat' => 3,
                    );
                    $the_query = new WP_Query( $args );
                            
                    // The Loop
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                    ?>
                       
                        <div class="col-xl-3 col-sm-6">
                            <div class="service-content">
                                <img src="<?php echo get_field('image');?>" style="width: 100%;" alt="dardos">
                                <h3 class="heading-5"><a href="<?php echo home_url();?>/?cat=3<?php the_permalink();?>"> <?php the_title();?></a></h3>
                                <p class="enpix-body-text-2"><?php short_content(3);?></p>
                                <a href="<?php echo home_url();?>/?cat=3">
                                    <svg width="37" height="15" viewBox="0 0 37 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M30.1667 13.5098L36 7.50977L30.1667 1.50977M1 7.50977H36H1Z"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                    <div class="text-center">
                        <a href="<?php echo home_url();?>/?cat=3" class="enpix-cta-transparent d-inline-block wow animate__animated animate__flipInX animate__delay-1s">
                        See More</a>
                    </div>
                </div>
            </div>
        </section>
 <!-- =========================== companies Logo Slider =========================================== -->
        <section class="brands-logo-area pb-70">
            <div class="container">
                <h2 class="heading-4 mb-70 text-center">We are blessed to work with landing brands and companies</h2>
                <div class="splide" id="companieslogo">
                    <div class="splide__track">
                        <ul class="splide__list">
                        <?php
                    $args=array(
                        'posts_per_page' => 100, 
                        'cat' => 7,
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                             ?>
                            <li class="splide__slide">
                                <img src="<?php echo get_field('image');?>" style="width:80%" alt="dardos">
                            </li>
                            <?php }}?> 
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Subscribe Area ======================================= -->
    </main>
     <!-- =========================== Footer Section =========================================== -->
            <?php get_footer() ?>
</body>
</html>