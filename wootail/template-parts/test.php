<?php get_header(); ?>

<?php
// Arguments for querying products
$args = array(
    'post_type' => 'product', // Query products
    'posts_per_page' => 10, // Number of products to display
    'orderby' => 'date', // Order by date
    'order' => 'DESC', // Newest first
);

// Create a new WP_Query object
$loop = new WP_Query($args);

// Check if there are products
if ($loop->have_posts()) :
    echo '<div class="products-grid">'; // Container for products

    // Start the Loop
    while ($loop->have_posts()) : $loop->the_post();
        global $product; // Get the global product object
        ?>

        <div class="product-item">
            <a href="<?php the_permalink(); ?>"> <!-- Product link -->
                <?php
                // Display product thumbnail
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium'); // Change 'medium' to 'full' or other sizes as needed
                }
                ?>
                <h2><?php the_title(); ?></h2>
                <span class="price"><?php echo $product->get_price_html(); ?></span> <!-- Display price -->
            </a>
        </div>

        <?php
    endwhile;

    echo '</div>'; // End products container
else :
    echo '<p>No products found</p>';
endif;

// Reset post data
wp_reset_postdata();
?>

<?php get_footer(); ?>
