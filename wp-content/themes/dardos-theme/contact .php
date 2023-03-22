<?php get_header();?>

<body class="enpix-bg-1">

    


    <!-- =========================== Menu Section =========================================== -->

    <header class="enpix-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-9">
                    <div class="logo">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/index.html">
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
                                <a href="<?php echo get_stylesheet_directory_uri();?>/services.html">Services</a>
                            </li>
                            <li>
                                <a href="<?php echo get_stylesheet_directory_uri();?>/portfolio.html">Portfolio</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-2 d-xl-flex d-none align-items-center">
                    <a href="<?php echo get_stylesheet_directory_uri();?>/contact.html" class="enpix-cta ml-auto">Contact Us</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="pb-130 pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5" >
                        <div class="address-area">
                            <div class="address-box mb-30">
                                <p class="enpix-subtitle-3 mb-10">Send us an email</p>
                                <a href="mailto:info@dardostech.com">info@dardostech.com</a>
                            </div>
                            <div class="address-box mb-30">
                                <p class="enpix-subtitle-3 mb-10">Reach us at</p>
                                <a href="tel:+12345678901">+962 - 79 111 5557</a>
                            </div>
                            <div>
                                <p class="enpix-subtitle-3 mb-10">Follow us on</p>
                                <div class="social-icons-box">
                                    <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://twitter.com"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://twitter.com"><i class="fa-brands fa-linkedin"></i></a>

                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <h2 class="heading-2 mb-80">Hey! Got a project?</h2>
                        <form action="#" class="contact-page-form">
                            <div class="input-fields-container mb-30">
                                <div class="input-field">
                                    <label for="name">Your Name</label>
                                    <input type="text" id="name" autocomplete="name" placeholder="Full Name">
                                </div>
                                <div class="input-field">
                                    <label for="email">Your Email</label>
                                    <input type="email" id="email" autocomplete="email" placeholder="example@mail.com">
                                </div>
                            </div>
                            <div class="textarea-container mb-50">
                                <div class="input-field">
                                    <label for="message">Tell us more about your idea</label>
                                    <textarea id="message" placeholder="Text type .."></textarea>
                                </div>
                            </div>
                            <div class="submit-container">
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <!-- scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.yu2fvl.min.js"></script>
    <script src="assets/js/mmenu-light.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/splide.min.js"></script>
    <script src="assets/js/main.js"></script>
