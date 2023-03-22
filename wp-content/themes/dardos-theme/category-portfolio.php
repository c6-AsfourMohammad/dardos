<?php get_header();?>
    <!-- =========================== Menu Area =========================================== -->
    <main>
        <section class="pt-70 pb-70">
            <div class="container">
                <h1 class="text-center">Our Portfolio</h1>
                <div class="portfolio-filter-buttons mt-65 mb-80 comp ">
                    <button class="selected" data-filter="*">All</button>
                    <button data-filter=".web-design">IT and Software Solutions</button>
                    <button data-filter=".branding">Marketing </button>
                    <button data-filter=".design">Events and Communication</button>
                    <button data-filter=".development"> Productions </button>
                    <button data-filter=".consultation"> Business Consultation</button>
                </div>
                <!-- =========================== Brands Logo Slider =========================================== -->
                <section class="brands-logo-area pb-70">
                    <div class="container">
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
                                <img src="<?php echo get_field('image');?>" style="width:100%" alt="dardos">
                            </li>
                            <?php }}?> 
                        </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- =========================== Our Portfolio =========================================== -->
                <!-- ===========================  Marketing =========================================== -->
                <div class="enpix-portfolio-grid">
                <?php
                    $args=array(
                        'posts_per_page' => 100, 
                        'cat' => 8,
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                             ?>
                    <div class="portfolio-item  branding">
                        <div class="portfolio-image relative">
                            <img src="<?php echo get_field('image');?>" style="width:100%" alt="dardos">
                            <div class="portfolio-hover-overlay rounded"></div>
                            
                            <a href="<?php echo get_field('url');?>" class="portfolio-hover-link  " target="_blank">View</a>
                            

                            
                        </div>
                        <div class="portfolio-text mt-30">
                            <h2 class="heading-5 mt-15"><a href="<?php echo get_field('url');?>"><?php the_title();?></a>
                            </h2>
                        </div>
                    </div>
                    <?php } wp_reset_postdata();}?> 
                <!-- =========================== IT and Software Solutions =========================================== -->
                    <?php
                    $args=array(
                        'posts_per_page' => 100, 
                        'cat' => 9,
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                             ?>
                    <div class="portfolio-item  web-design">
                        <div class="portfolio-image relative">
                            <img src="<?php echo get_field('image');?>" style="width:100%" alt="dardos">
                            <div class="portfolio-hover-overlay rounded"></div>
                            <a href="<?php echo get_field('url');?>" class="portfolio-hover-link">View</a>
                        </div>
                        <div class="portfolio-text mt-30">
                            <h2 class="heading-5 mt-15"><a href="<?php echo get_field('url');?>"><?php the_title();?></a>
                            </h2>
                        </div>
                    </div>
                    <?php }}?> 
                <!-- =========================== Events and Communication =========================================== -->
                    <?php
                    $args=array(
                        'posts_per_page' => 100, 
                        'cat' => 10,
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                             ?>
                    <div class="portfolio-item design ">
                        <div class="portfolio-image relative">
                            <img src="<?php echo get_field('image');?>" style="width:100%" alt="dardos">
                            <div class="portfolio-hover-overlay rounded"></div>
                            <a href="<?php echo get_field('url');?>" class="portfolio-hover-link">View</a>
                        </div>
                        <div class="portfolio-text mt-30">
                           
                            <h2 class="heading-5 mt-15"><a href="<?php echo get_field('url');?>"><?php the_title();?></a>
                            </h2>
                        </div>
                    </div>
                    <?php }}?> 
                <!-- =========================== Productions =========================================== -->
                    <?php
                    $args=array(
                        'posts_per_page' => 100, 
                        'cat' => 11,
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                             ?>
                    <div class="portfolio-item development ">
                        <div class="portfolio-image relative">
                            <img src="<?php echo get_field('image');?>" style="width:100%" alt="dardos">
                            <div class="portfolio-hover-overlay rounded"></div>
                            <a href="<?php echo get_field('url');?>" class="portfolio-hover-link">View</a>
                        </div>
                        <div class="portfolio-text mt-30">
                            <h2 class="heading-5 mt-15"><a href="<?php echo get_field('url');?>"><?php the_title();?></a>
                            </h2>
                        </div>
                    </div>
                    <?php }}?> 
                <!-- =========================== business consultation =========================================== -->
                    <?php
                    $args=array(
                        'posts_per_page' => 100, 
                        'cat' => 12,
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                             ?>
                    <div class="portfolio-item consultation ">
                        <div class="portfolio-image relative">
                            <img src="<?php echo get_field('image');?>" style="width:100%" alt="dardos">
                            <div class="portfolio-hover-overlay rounded"></div>
                            <a href="<?php echo get_field('url');?>" class="portfolio-hover-link">View</a>
                        </div>
                        <div class="portfolio-text mt-30">
                            <h2 class="heading-5 mt-15"><a href="<?php echo get_field('url');?>"><?php the_title();?></a>
                            </h2>
                        </div>
                    </div>
                    <?php }}?> 
                </div>
            </div>
        </section>
    </main>
    <!-- =========================== Footer Section =========================================== -->
    <?php get_footer();?>
