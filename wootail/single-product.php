<?php get_header(); ?>

<style>
    .swiper {
        width: 100%;
        height: 250px;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .fixed-top {
        position: fixed;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        z-index: 1000;
    }

    .clicked-button {
        color: #3f69d3;
        border-bottom: 2px solid #3f69d3;
    }

    .swiper-button-prev::after,
    .swiper-button-next::after {
        font-size: 20px;
        font-weight: bold;
    }

    .swiper-button-prev {
        background-color: #000000;
        color: white;
        border-radius: 50%;
        padding: 10px;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-button-next {
        background-color: #000000;
        color: white;
        border-radius: 50%;
        padding: 10px;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<?php
while (have_posts()) : the_post();
    global $product;

    $title = get_the_title();
    $description = get_the_content();
    $short_description = $product->get_short_description();
    $price = $product->get_price();
    $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail');
    $tour_url = get_permalink();
    $days_nbr = get_post_meta(get_the_ID(), 'days', true);
    $departure = get_post_meta(get_the_ID(), 'departure', true);
    $destination = get_post_meta(get_the_ID(), 'destination', true);
    $tour_type = get_post_meta(get_the_ID(), 'tour_type', true);
    $regime = get_post_meta(get_the_ID(), 'regime', true);
    $pick_up = get_post_meta(get_the_ID(), 'pick_up', true);
    $highlights = get_post_meta(get_the_ID(), 'highlights', true);
    $including = get_post_meta(get_the_ID(), 'including', true);
    $not_including = get_post_meta(get_the_ID(), 'not_including', true);
    $additional_information = get_post_meta(get_the_ID(), 'additional_information', true);
    // Itinerary
    $Itinerary = get_field("itinerary");
?>

    <div class="block md:hidden">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img-1.webp" alt="" class="h-[100%] object-cover">
                </div>
                <div class="swiper-slide h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img-10.webp" alt="" class="h-[100%] w-full  object-cover">
                </div>
                <div class="swiper-slide h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img-12.webp" alt="" class="h-[100%] w-full  object-cover">
                </div>
                <div class="swiper-slide h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img-18.webp" alt="" class="h-[100%] w-full  object-cover">
                </div>
                <div class="swiper-slide h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img-5.webp" alt="" class="h-[100%]  w-full object-cover">
                </div>
            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>


    <div class="md:w-[80%] w-[92%] mx-auto flex flex-col md:flex-row justify-between items-center mt-[20px]">
        <div>
            <h1 class="text-3xl font-bold md:w-[90%]"><?php echo $title ?></h1>
            <div class="flex items-center gap-5 mt-2">
                <p class="text-sm text-gray-700">
                    <i class="fa-solid fa-star text-yellow-500 font-bold"></i>
                    <i class="fa-solid fa-star text-yellow-500 font-bold"></i>
                    <i class="fa-solid fa-star text-yellow-500 font-bold"></i>
                    <i class="fa-solid fa-star text-yellow-500 font-bold"></i>
                    <i class="fa-solid fa-star text-yellow-500 font-bold"></i>
                    421 reviews
                </p>
                <span class="text-sm text-gray-700"><i class="fa-solid fa-check text-[#349c9c] text-lg"></i> Free
                    cancellation</span>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <div class="md:block hidden">
                <span class="text-4xl text-[#40a59d] font-bold"><?php echo $price ?>$</span>
                <span class="text-4xl line-through">69$</span>
                <p>/person</p>
            </div>
            <button class="custom-btn-one h-14 md:block hidden">select options</button>
        </div>
        <div class="flex justify-between items-center border border-gray-400 p-2 rounded-xl mt-5 w-full md:hidden">
            <p>Price <span>Per Person</span></p>
            <div>
                <span class="text-2xl text-[#40a59d] font-bold"><?php echo $price ?>$</span>
                <span class="text-2xl line-through">69$</span>
            </div>
        </div>
    </div>


    <!-- #### images section #### -->
    <div class="w-[80%] mx-auto mt-8 md:block hidden">

        <?php
        $gallery_image_ids = $product->get_gallery_image_ids();
        ?>

        <div class="grid grid-cols-5 grid-rows-1 gap-2 h-[400px]">
            <div class="col-span-3 row-span-2 rounded-xl overflow-hidden">
                <img src="<?php echo esc_url($image[0]); ?>" alt="" class="w-full h-full object-cover">
            </div>
            <div class="col-start-5 row-start-1 h-full rounded-xl overflow-hidden">
                <img src="<?php echo esc_url(wp_get_attachment_image_src($gallery_image_ids[1])[0]) ?>" alt="" class="h-full object-cover">
            </div>
            <div class="col-start-5 row-start-2 h-full rounded-xl overflow-hidden">
                <img src="<?php echo esc_url(wp_get_attachment_image_src($gallery_image_ids[2])[0]) ?>" alt="" class="h-full object-cover">
            </div>
            <div class="col-start-4 row-start-2 h-full rounded-xl overflow-hidden">
                <img src="<?php echo esc_url(wp_get_attachment_image_src($gallery_image_ids[3])[0]) ?>" alt="" class="h-full object-cover">
            </div>
            <div class="col-start-4 row-start-1 h-full rounded-xl overflow-hidden">
                <img src="<?php echo esc_url(wp_get_attachment_image_src($gallery_image_ids[4])[0]) ?>" alt="" class="h-full object-cover">
            </div>
        </div>


    </div>
    <!-- #### images section #### -->

    <!-- #### Fixed Menu #### -->
    <div id="fixed-menu" class="sticky md:block hidden md:w-[80%] w-[95%] mx-auto top-0 bg-white py-2 sticky-menu z-50">
        <div class="p-2 flex justify-start gap-3 text-sm font-semibold">
            <a href="#about_this_section">
                <button class="px-4 py-2 border-b-2 hover:border-[#3f69d3] border-gray-200">About this excursion</button>
            </a>
            <a href="#description">
                <button class="px-4 py-2 border-b-2 hover:border-[#3f69d3] border-gray-200">Description</button>
            </a>
            <a href="#highlights">
                <button class="px-4 py-2 border-b-2 hover:border-[#3f69d3] border-gray-200">Highlights</button>
            </a>
            <a href="#including">
                <button class="px-4 py-2 border-b-2 hover:border-[#3f69d3] border-gray-200">Including</button>
            </a>
            <a href="#not_including">
                <button class="px-4 py-2 border-b-2 hover:border-[#3f69d3] border-gray-200">Not Including</button>
            </a>
            <a href="#itinerary">
                <button class="px-4 py-2 border-b-2 hover:border-[#3f69d3] border-gray-200">Itinerary</button>
            </a>
        </div>
    </div>
    <!-- #### Fixed Menu #### -->


    <!-- #### About this excursion Section #### -->
    <div class="md:w-[80%] w-[95%] mx-auto mt-10 flex flex-col-reverse md:flex-row gap-12 items-start">

        <div class="w-full">
            <h1 id="about_this_section" class="text-2xl font-bold">About this excursion</h1>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-4 mt-6">
                <div class="border border-gray-300 rounded-lg p-5">
                    <div class="flex gap-4 items-start justify-start">
                        <i class="fa-solid fa-calendar-days text-2xl color-gradient"></i>
                        <div class="-mt-1">
                            <span>Duration</span>
                            <p class="text-lg font-semibold"><?php echo $days_nbr ?> days</p>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-lg p-5">
                    <div class="flex gap-4 items-start justify-start">
                        <i class="fa-solid fa-location-dot text-2xl color-gradient"></i>
                        <div class="-mt-1">
                            <span>Departure from</span>
                            <p class="text-lg font-semibold"><?php echo $departure ?></p>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-lg p-5">
                    <div class="flex gap-4 items-start justify-start">
                        <i class="fa-solid fa-location-arrow text-2xl color-gradient"></i>
                        <div class="-mt-1">
                            <span>Destination</span>
                            <p class="text-lg font-semibold"><?php echo $destination ?></p>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-lg p-5">
                    <div class="flex gap-4 items-start justify-start">
                        <i class="fa-solid fa-font-awesome text-2xl color-gradient"></i>
                        <div class="-mt-1">
                            <span>Tour Type</span>
                            <p class="text-lg font-semibold"><?php echo $tour_type ?></p>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-lg p-5">
                    <div class="flex gap-4 items-start justify-start">
                        <i class="fa-solid fa-check text-2xl color-gradient"></i>
                        <div class="-mt-1">
                            <span>Regime</span>
                            <p class="text-lg font-semibold"><?php echo $regime ?></p>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-lg p-5">
                    <div class="flex gap-4 items-start justify-start">
                        <i class="fa-solid fa-car text-2xl color-gradient"></i>
                        <div class="-mt-1">
                            <span>Pick up</span>
                            <p class="text-lg font-semibold"><?php echo $pick_up ? "Included" : "Not Included" ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full h-[1px] my-10 bg-gray-300"></div>

            <h1 id="description" class="text-2xl font-bold">Description</h1>
            <p class="mt-4 text-gray-700">
                <?php echo $description ?>
            </p>

            <div class="w-full h-[1px] my-10 bg-gray-300"></div>

            <span id="highlights"></span>
            <h1 id="" class="text-2xl font-bold">Highlights</h1>
            <ul class="list-disc pl-5 flex flex-col gap-4 mt-3 text-gray-700">
                <?php echo $highlights; ?>
            </ul>

            <div class="w-full h-[1px] my-10 bg-gray-300"></div>

            <h1 id="including" class="text-2xl font-bold">Including</h1>
            <ul class="[&>li]:relative [&>li]:before:content-['\2713'] [&>li]:before:absolute [&>li]:before:-left-5 pl-5 flex flex-col gap-4 mt-3 text-gray-700">
                <?php echo $including; ?>
            </ul>

            <div class="w-full h-[1px] my-10 bg-gray-300"></div>

            <h1 id="not_including" class="text-2xl font-bold">Not Including</h1>
            <ul class="[&>li]:relative [&>li]:before:content-['\2716'] [&>li]:before:absolute [&>li]:before:-left-5 pl-5 flex flex-col gap-4 mt-3 text-gray-700">
                <?php echo $not_including; ?>
            </ul>


            <div class="w-full h-[1px] my-10 bg-gray-300"></div>

            <h1 id="itinerary" class="text-2xl font-bold">Itinerary</h1>
            <div class="mt-8">
                <div class="flex gap-x-3">
                    <div
                        class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-400">
                        <div class="relative z-10 size-7 flex justify-center items-center">
                            <i class="fa-solid fa-location-dot text-2xl"></i>
                        </div>
                    </div>

                    <div class="grow pt-0.5 pb-8">
                        <div class="px-3 w-fit text-sm rounded-full border border-[#000000b6] mb-3">Day <?php echo $Itinerary["day_number"] ?></div>
                        <h3 class="font-bold text-gray-800 text-xl">
                            <?php echo $Itinerary["itinerary_title"] ?>
                        </h3>
                        <div class="mt-3">
                            <i class="fa-regular fa-clock text-[#fc5424] mr-1"></i>
                            <span class="text-sm"><?php echo $Itinerary["sub_title"] ?></span>
                        </div>
                        <p class="mt-3 text-gray-800">
                            <?php echo $Itinerary["itinerary_description"] ?>
                        </p>
                    </div>
                </div>

                <div class="flex gap-x-3">
                    <div
                        class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-400 ">
                        <div class="relative z-10 size-7 flex justify-center items-center">
                            <i class="fa-solid fa-x text-lg"></i>
                        </div>
                    </div>

                    <div class="grow pt-0.5 pb-8">
                        <div class="px-3 w-fit text-sm rounded-full border border-[#000000b6] mb-3">Day 2</div>
                        <h3 class="font-bold text-gray-800 text-xl">
                            Zagora Desert - Kasbah of Ait Ben Haddou - Marrakech
                        </h3>
                        <div class="mt-3">
                            <i class="fa-regular fa-clock text-[#fc5424] mr-1"></i>
                            <span class="text-sm">Trip of approximately 7 hours.</span>
                        </div>
                        <p class="mt-3 text-gray-800">
                            The second day of <span class="font-bold text-black">the 2-day Zagora desert
                                tour</span> starts just before sunrise with an early
                            morning camel ride that will allow you to explore
                            the surroundings while soaking up the morning sun.
                            Once the camel ride is over and you have taken enough photos,
                            you will sit down for a traditional breakfast. Then, you will
                            begin the journey back to Marrakech.
                        </p>
                        <p class="mt-3 text-gray-800">
                            On the way back to Marrakech, the driver will make
                            appropriate stops for lunch and to <span class="font-bold text-black">discover the beautiful
                                sites at iconic locations along the way</span> . Travelers will
                            also be able to explore the beautiful landscapes of the
                            Draa Valley, as well as the high-altitude Tichka Pass.
                        </p>
                        <p class="mt-3 text-gray-800">
                            The tour will arrive in Marrakech in the evening
                            from 7pm, depending on traffic and time spent on stops.
                            <span class="font-bold text-black">Experiencing and exploring the wonders of the Zagora
                                Desert is something you cannot miss</span> . For more information
                            about our 2-day shared desert tour from Marrakech to Zagora,
                            please contact us now!
                        </p>
                    </div>
                </div>

            </div>

            <div class="w-full h-[1px] my-10 bg-gray-300"></div>

            <h1 class="text-2xl font-bold">Map</h1>
            <div class="mt-4">
                <iframe class="lazy-loaded"
                    data-lazy-type="iframe"
                    data-src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1751327.450780003!2d-8.03100325765923!3d30.982718963566946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0xdafee8d96179e51%3A0x5950b6534f87adb8!2smarrakech!3m2!1d31.6294723!2d-7.9810845!4m5!1s0xdbc36ea58680e95%3A0x75e9e9fb616de232!2szagora!3m2!1d30.345899799999998!2d-5.8406587!5e0!3m2!1sfr!2sma!4v1536600918076"
                    width="100%"
                    height="450"
                    frameborder="0"
                    style="border: 0px; pointer-events: none;"
                    allowfullscreen=""
                    src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d1751327.450780003!2d-8.03100325765923!3d30.982718963566946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0xdafee8d96179e51%3A0x5950b6534f87adb8!2smarrakech!3m2!1d31.6294723!2d-7.9810845!4m5!1s0xdbc36ea58680e95%3A0x75e9e9fb616de232!2szagora!3m2!1d30.345899799999998!2d-5.8406587!5e0!3m2!1sfr!2sma!4v1536600918076">
                </iframe>
            </div>

            <div class="w-full h-[1px] my-10 bg-gray-300"></div>

            <h1 class="text-2xl font-bold">Additional information</h1>
            <ul class="list-none pl-5 flex flex-col gap-4 mt-3 text-gray-700 md:w-full w-[90%] mx-auto">
                <?php echo $additional_information ?>
            </ul>

        </div>

        <div class="md:w-1/2">
            <form action="" class="flex flex-col gap-5 shadow-xl border border-gray-300 rounded-xl p-6">
                <div class="flex flex-col gap-1">
                    <label class="font-bold">Number of people:</label>
                    <select class="select-list cursor-pointer">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-bold">Camp Category:</label>
                    <select class="select-list cursor-pointer">
                        <option value="Comfort Camp">Comfort Camp</option>
                        <option value="Superior Camp (+49€)">Superior Camp (+49$)</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-bold">Date:</label>
                    <input type="date" class="select-list cursor-pointer">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="font-bold">Pick-up address:</label>
                    <input type="text" class="select-list" placeholder="Name and address of the hotel">
                </div>
                <div class="flex justify-between items-center">
                    <span>Total</span>
                    <div>
                        <span class="text-3xl text-[#40a59d] font-bold">65$</span>
                        <span class="text-3xl line-through">69$</span>
                    </div>
                </div>
                <button type="submit"
                    class="flex gap-3 items-center custom-btn-two w-full justify-center text-white font-semibold mx-auto px-8 py-4 rounded-full">
                    <i class="fa-solid fa-cart-flatbed-suitcase text-xl"></i>
                    <span>Add to Cart</span>
                </button>
                <span class="text-center text-gray-800">* The rest is paid on the day of the excursion</span>
            </form>
            <div class="w-full p-4 text-gray-800 bg-[#faebd7] mt-8 rounded-lg">
                <h1 class="font-bold">Why choose us?</h1>
                <div class="flex flex-col gap-2">
                    <div class="border-b border-[#d5d5b9] flex items-center gap-3 py-3">
                        <i class="fa-solid fa-star text-[#fc5424]"></i>
                        <p>Best value for money</p>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="border-b border-[#d5d5b9] flex items-center gap-3 py-3">
                        <i class="fa-solid fa-car text-[#fc5424]"></i>
                        <p>Pick up at your hotel</p>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="border-b border-[#d5d5b9] flex items-center gap-3 py-3">
                        <i class="fa-solid fa-check text-[#fc5424]"></i>
                        <p>Free cancellation</p>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="border-b border-[#d5d5b9] flex items-center gap-3 py-3">
                        <i class="fa-solid fa-phone text-[#fc5424]"></i>
                        <p>Personalized assistance</p>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-3 py-3">
                        <i class="fa-solid fa-envelope text-[#fc5424]"></i>
                        <p>Immediate confirmation</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- #### About this excursion Section #### -->


<?php endwhile; ?>

<?php get_footer(); ?>
<script>
    function myPlugin({
        swiper,
        extendParams,
        on
    }) {
        extendParams({
            debugger: false,
        });

        on('init', () => {
            if (!swiper.params.debugger) return;
        });
        on('click', (swiper, e) => {
            if (!swiper.params.debugger) return;
        });
        on('tap', (swiper, e) => {
            if (!swiper.params.debugger) return;
        });
        on('doubleTap', (swiper, e) => {
            if (!swiper.params.debugger) return;
        });
        on('sliderMove', (swiper, e) => {
            if (!swiper.params.debugger) return;
        });
        on('slideChange', () => {
            if (!swiper.params.debugger) return;
        });
        on('slideChangeTransitionStart', () => {
            if (!swiper.params.debugger) return;
        });
        on('slideChangeTransitionEnd', () => {
            if (!swiper.params.debugger) return;
        });
        on('transitionStart', () => {
            if (!swiper.params.debugger) return;
        });
        on('transitionEnd', () => {
            if (!swiper.params.debugger) return;
        });
        on('fromEdge', () => {
            if (!swiper.params.debugger) return;
        });
        on('reachBeginning', () => {
            if (!swiper.params.debugger) return;
        });
        on('reachEnd', () => {
            if (!swiper.params.debugger) return;
        });
    }
</script>

<script>
    var swiper = new Swiper('.swiper', {
        modules: [myPlugin],
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        debugger: true,
    });
</script>