<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Travel Design</title>
</head>

<body>
    <!-- ####### Start Navbar ####### -->
    <nav class="bg-white shadow-md text-black <?php echo !is_product() ? "fixed top-0 left-0"  : "" ?> w-full z-50">
        <div class="w-[80%] mx-auto p-2 hidden md:flex justify-end gap-6 px-7">
            <a href="mailto:travel@traveldesign.ma">
                <div class="flex items-center gap-3 color-gradient">
                    <i class="fa-solid fa-envelope text-xl"></i>
                    <span class="text-lg">travel@traveldesign.ma</span>
                </div>
            </a>
            <a href="tel:+21260606060">
                <div class="flex items-center gap-3 color-gradient">
                    <i class="fa-solid fa-phone text-xl "></i>
                    <span class="text-lg">+212 60 60 60 60</span>
                </div>
            </a>
        </div>
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center gap-7">
                    <div class="md:hidden flex justify-between items-center w-full pr-4">
                        <span class="text-2xl text-[#fc5424] cursor-pointer p-4 md:hidden"
                            onclick="openNav()">&#9776;</span>
                        <div class="flex-shrink-0">
                            <img class="h-10 w-auto md:hidden block" src="<?php echo get_template_directory_uri(); ?> /assets/logo/logo_MTD.png"
                                alt="marrakech desert trip logo">
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <img class="h-10 w-auto hidden md:block" src="<?php echo get_template_directory_uri(); ?> /assets/logo/logo_MTD.png"
                            alt="marrakech desert trip logo">
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4 gap-8">
                        
                            <a 
                                href="<?php echo home_url(); ?>" 
                                class="nav-link <?php echo is_front_page() ? "bg-gradient-custom text-white" : "" ?>">
                                Home
                            </a>
                           
                            <a 
                                href="<?php echo get_permalink( get_page_by_path('desert-tours') ); ?>"
                                class="nav-link <?php echo is_page('desert-tours') ? "bg-gradient-custom text-white" : "" ?>">
                                Desert Tours
                            </a>
                           
                            <a 
                                href="<?php echo get_permalink( get_page_by_path('day-trips') ); ?>" 
                                class="nav-link <?php echo is_page('day-trips') ? "bg-gradient-custom text-white" : "" ?>">
                                Day Trips
                            </a>
                           
                            <a 
                                href="<?php echo get_permalink( get_page_by_path('activities-in-marrakech') ); ?>"
                                class="nav-link <?php echo is_page('activities-in-marrakech') ? "bg-gradient-custom text-white" : "" ?>">
                                Activities in Marrakech
                            </a>
                           
                            <a 
                                href="<?php echo get_permalink( get_page_by_path('contact') ) ?>" 
                                class="nav-link <?php echo is_page('contact') ? "bg-gradient-custom text-white" : "" ?>">
                                Contact
                            </a>
                        
                        </div>
                    </div>
                </div>
                <!-- Phone Nav -->
                <div id="overlay" class="fixed inset-0 bg-black bg-opacity-60 z-40 hidden" onclick="closeNav()"></div>

                <!-- Navbar -->
                <div id="mySidenav"
                    class="fixed top-0 left-0 h-full w-0 text-gray-800 bg-white overflow-x-hidden transition-width duration-300 md:hidden z-50">
                    <a href="javascript:void(0)" class="absolute top-4 right-4 text-4xl"
                        onclick="closeNav()">&times;</a>
                    <nav class="mt-16 flex flex-col space-y-6 pl-8">
                        <a href="/dist/" class="text-lg hover:text-gray-400 text-[#fc5424]">Home</a>
                        <a href="/dist/desert_tours.html" class="text-lg hover:text-gray-400">Desert Tours</a>
                        <a href="/dist/day_trips.html" class="text-lg hover:text-gray-400">Day Trips</a>
                        <a href="/dist/activities_in_marrakech.html" class="text-lg hover:text-gray-400">Activities in
                            Marrakech</a>
                        <a href="/dist/contact.html" class="text-lg hover:text-gray-400">Contact</a>
                        <div>
                            <a href="mailto:travel@traveldesign.ma">
                                <div class="flex items-center gap-3">
                                    <i class="fa-solid fa-envelope text-xl"></i>
                                    <span class="font-light">travel@traveldesign.ma</span>
                                </div>
                            </a>

                            <a href="tel:+21260606060">
                                <div class="flex items-center gap-3 mt-3">
                                    <i class="fa-solid fa-phone text-xl"></i>
                                    <span class="font-light">+212 60 60 60 60</span>
                                </div>
                            </a>
                        </div>
                    </nav>
                </div>
                <!-- Phone Nav -->
            </div>
        </div>
    </nav>

    <!-- ####### End Navbar ####### -->