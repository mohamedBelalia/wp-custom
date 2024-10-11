<?php get_header(); ?>

    <!-- ##### première section #### -->
    <?php 
        $background_img = get_template_directory_uri() . '/assets/img-1.webp' ;
        $title = "Experience the magic of the Sahara on our Moroccan desert excursions" ;
    
        set_query_var('background_img', $background_img);
        set_query_var('title', $title);
    
        get_template_part('template-parts/first-repeated-section');
    ?>
    <!-- ##### première section #### -->

<?php get_footer(); ?>