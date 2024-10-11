var swiper = new Swiper(".mySwiper-city", {
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable : true
    },
    mousewheel: true,
    keyboard: true,
    loop:true ,
    autoplay: {
        delay: 5000,
      },
});