    <!-- #### Footer #### -->
    <div class="mx-auto bg-gray-100 pt-5 pb-7 md:px-32 px-5 mt-24 flex justify-center flex-col items-center">
        <div class="grid md:grid-cols-4 grid-cols-1 gap-4 mt-5 p-2 w-full">
            <div>
                <span class="font-medium">Discover</span>
                <ul class="text-sm text-gray-500 mt-3 flex flex-col gap-2">
                    <li class="hover:underline"><a href="">Desert tours</a></li>
                    <li class="hover:underline"><a href="">Day trips</a></li>
                    <li class="hover:underline"><a href="">Activities in Marrakech</a></li>
                    <li class="hover:underline"><a href="">About us</a></li>
                    <li class="hover:underline"><a href="">Travel to Morocco</a></li>
                </ul>
            </div>
            <div>
                <span class="font-medium">Information</span>
                <ul class="text-sm text-gray-500 mt-3 flex flex-col gap-2">
                    <li class="hover:underline"><a href="">Travel documentation</a></li>
                    <li class="hover:underline"><a href="">FAQ</a></li>
                    <li class="hover:underline"><a href="">Conditions</a></li>
                    <li class="hover:underline"><a href="">Privacy Policy</a></li>
                    <li class="hover:underline"><a href="">Contact</a></li>
                    <li class="hover:underline"><a href="">Refund Policy</a></li>
                </ul>
            </div>
            <div>
                <span class="font-medium">Do you need help?</span>
                <ul class="text-sm text-gray-700 mt-3 flex flex-col gap-2">
                    <li><span class="text-black font-semibold">Whatsapp</span>: +212 637 244 350</li>
                    <li><span class="text-black font-semibold">Phone</span>: +44 30 4562 5873</li>
                    <li><span class="text-black font-semibold">E-mail</span>: <a
                            href="mailto:hola@descubredesierto.com">hola@descubredesierto.com</a></li>
                </ul>
            </div>
            <div>
                <span class="font-medium">Newsletter</span>
                <p class="text-sm text-gray-800 mt-3">Get discounts and promotions in your inbox with our newsletter!
                </p>
                <form action="" class="flex justify-center gap-0 mt-6">
                    <input type="text" placeholder="Enter your email"
                        class="border text-sm border-gray-400 rounded-l-3xl w-[200px] pl-3 h-9 focus:outline-none focus:border-black">
                    <input type="submit" value="JOIN US"
                        class="cursor-pointer rounded-r-3xl bg-gray-700 hover:bg-gray-900 text-white w-[170px] font-bold">
                </form>
                <div class="mt-4 flex gap-5">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <div class="p-3 w-full mt-14 flex flex-col md:flex-row md:justify-between justify-center items-end">
            <div
                class="flex w-full flex-col md:flex-row md:justify-start justify-center md:items-end items-center gap-3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/Logo-mtd.png" alt="logo footer" class="w-40">
                <span class="md:text-start text-center text-sm text-gray-600">© 2024. All rights reserved</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/credit-card-icons.png" alt="credit card icons"
                class="w-32 md:mx-0 mx-auto md:mt-0 mt-4 ">
        </div>

    </div>
    <!-- #### Footer #### -->
    <?php wp_footer(); ?>
</body>

</html>