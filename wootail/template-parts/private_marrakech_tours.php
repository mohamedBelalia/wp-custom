<?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
);

$loop = new WP_Query($args);
?>

<!-- #### PRIVATE MARRAKECH TOURS & ACTIVITIES #### -->
<div class="w-[80%] mx-auto my-20">
    <div class="text-center">
        <h1 class="text-3xl font-semibold">PRIVATE MARRAKECH TOURS & ACTIVITIES</h1>
        <p class="text-sm text-gray-500 mt-1">Choose from our carefully selected private Marrakech tours and
            activities to suit your budget, timetable and interests</p>
    </div>

    <?php if ($loop->have_posts()) { ?>

        <div class="mt-8">
            <swiper-container class="mySwiper-2 flex" pagination="true"
                pagination-clickable="true" slides-per-view="1" breakpoints='{
                    "480": { "slidesPerView": 2, "spaceBetween": 10 },
                    "820": { "slidesPerView": 3, "spaceBetween": 10 },
                    "900": { "slidesPerView": 4, "spaceBetween": 10 }
                }'>

                <?php while ($loop->have_posts()) {
                    $loop->the_post();
                    global $product;

                    $title = get_the_title();
                    $description = get_the_content();
                    $short_description = $product->get_short_description();
                    $price = $product->get_price();
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
                    $tour_url = get_permalink();
                    $days_nbr = get_post_meta(get_the_ID(), 'days', true);
                ?>

                    <!-- card -->
                    <swiper-slide class="h-auto">
                        <a href="<?php echo esc_url($tour_url) ?>">
                            <div class="bg-white border border-gray-200 rounded-lg shadow h-full">
                                <div class="h-[200px] w-full">
                                    <img class="rounded-t-lg w-full h-full object-cover object-top"
                                        src="<?php echo esc_url($image[0]); ?>" alt="" />
                                </div>
                                <div class="p-5">
                                    <h2 class="font-medium"><?php echo $title ?></h2>
                                    <div class="my-2 text-xs text-gray-600">
                                        <i class="fa-regular fa-clock mr-2"></i>
                                        <span><?php echo $days_nbr ?> days</span>
                                    </div>
                                    <p class="text-gray-600 text-sm">
                                        <?php echo wp_trim_words($description, 20, '...') ?>
                                    </p>
                                    <p class="text-[12px] text-gray-700 mt-4">
                                        <i class="fa-solid fa-star text-yellow-500 font-bold"></i>
                                        <i class="fa-solid fa-star text-yellow-500 font-bold"></i>
                                        <i class="fa-solid fa-star text-yellow-500 font-bold"></i>
                                        <i class="fa-solid fa-star text-yellow-500 font-bold"></i>
                                        <i class="fa-solid fa-star-half-stroke text-yellow-500 font-bold"></i>
                                        (1284 Reviews)
                                    </p>
                                    <div class="flex justify-end mt-2">
                                        <span class="flex gap-1 items-center">
                                            <span class="text-gray-600 text-sm">From</span>
                                            <span class="text-xl font-semibold text-green-800">$<?php echo $price; ?></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </swiper-slide>


                <?php } // end the while loop
                ?>

            </swiper-container>
        </div>

    <?php } // end if have posts
    ?>

</div>
<!-- #### PRIVATE MARRAKECH TOURS & ACTIVITIES #### -->