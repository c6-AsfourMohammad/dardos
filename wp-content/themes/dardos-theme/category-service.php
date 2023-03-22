<?php get_header();?>
    <main>
        <!-- Subject Starts -->
        <div class="container">
        <?php
                     $post_id = 383;
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
            <div class="row">
            
                <div class="col-xl-6 col-lg-9 mx-auto">
                    <div class="page-heading pt-130 pb-80 text-center">
                        <h1 class="mb-30"><?php the_title();?></h1>
                    </div>
                </div>
            </div>
            <div class="page-thumbnail">
                <img src="<?php echo get_field('image');?>" style="width: 100%;" alt="dardos">
            </div>
            <div class="service-text row pt-100 pb-125">
                
            </div>
            <?php } }wp_reset_postdata(); ?>
        </div>
        <!-- Subject Ends -->
        <!-- Services Starts -->
        <section class="services-table-area pt-20 pb-130 bg-white">
            <div class="container">
                <table class="services-table mt-5">
                    <tr class="row">
                    <?php while ( have_posts() ) { the_post(); ?>
                        <td class="col-xl-2 ">
                            <img src="<?php echo get_field('image');?>" style="width: 100%;" alt="dardos">
                        </td>
                        <td class="col-xl-10">
                            <h3 class="heading-5 mb-15"><?php the_title();?></h3>
                            <p class="enpix-body-text-1"><?php short_content(100);?></p>
                        </td>
                        <?php } wp_reset_query();?> 
                    </tr>              
                </table>
            </div>
        </section>
        <!-- Services Ends -->
        <!-- Have a Project? Starts -->
        <div class="enpix-cta-section pb-130 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>
                            Have a project in mind? Let's get to work.
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 d-flex align-items-center">
                            <a class="enpix-cat enpix-cta-rounded ml-auto" href="<?php echo home_url();?>/?page_id=61">Submit a Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Have a Project? Ends -->
    </main>
    <!-- =========================== Footer Section =========================================== -->
    <?php get_footer();?>
