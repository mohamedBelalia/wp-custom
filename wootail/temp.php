<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

    <?php
        while ( have_posts() ) : the_post();
    ?>

    <div class="woocommerce-single-product-content mt-[80px]">

        <!-- Display the product title -->
        <h1 class="product-title text-red-600"><?php the_title(); ?></h1>

        <!-- Display the product image -->
        <div class="product-image">
            <?php
                // Display the main product image
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'full' ); // 'full' size for the main image
                }
            ?>
        </div>

        <!-- Display the product description -->
        <div class="product-description">
            <?php
                // Output the product description
                the_content(); // or you can use the_excerpt() for a shorter version
            ?>
        </div>

        <div class="product-gallery">
            <?php
                // Get the gallery image IDs
                $gallery_image_ids = $product->get_gallery_image_ids();

                // Check if there are gallery images
                if ( $gallery_image_ids ) :
                    echo '<ul class="gallery-images">';
                    foreach ( $gallery_image_ids as $image_id ) {
                        $image_url = wp_get_attachment_image_src( $image_id, 'full' )[0];
                        echo '<li><img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ) . '" /></li>';
                    }
                    echo '</ul>';
                endif;
            ?>
        </div>

    </div>

    <?php endwhile; // End of the loop. ?>

<?php
get_footer();
