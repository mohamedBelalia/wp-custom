<?php get_header(); ?>

    <!-- ##### première section #### -->
    <?php 
        $background_img = get_template_directory_uri() . '/assets/Mosque-Koutoubia.jpg' ;
        $title = "Complete your trip with our selection of activities in Marrakech and its surroundings" ;
    
        set_query_var('background_img', $background_img);
        set_query_var('title', $title);
    
        get_template_part('template-parts/first-repeated-section');
    ?>
    <!-- ##### première section #### -->

<?php get_footer(); ?>