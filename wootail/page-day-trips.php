<?php get_header(); ?>

<!-- ##### première section #### -->

<?php 
    $background_img = get_template_directory_uri() . '/assets/img-6.webp' ;
    $title = "Carefully selected varied day trips from Marrakech" ;

    set_query_var('background_img', $background_img);
    set_query_var('title', $title);

    get_template_part('template-parts/first-repeated-section');
?>
<!-- ##### première section #### -->

<?php get_template_part('template-parts/private_day_trips'); ?>

<?php get_footer(); ?>