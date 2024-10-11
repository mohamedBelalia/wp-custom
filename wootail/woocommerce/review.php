
<h1>Hello World</h1>
<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

	<div id="comment-<?php comment_ID(); ?>" class="comment_container">

		<?php
			do_action( 'woocommerce_review_before', $comment );
		?>

		<div class="comment-text">

			<?php
				do_action( 'woocommerce_review_before_comment_meta', $comment );

				do_action( 'woocommerce_review_meta', $comment );

				do_action( 'woocommerce_review_before_comment_text', $comment );

				do_action( 'woocommerce_review_comment_text', $comment );

				do_action( 'woocommerce_review_after_comment_text', $comment );
			?>

		</div>
	</div>
