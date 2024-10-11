var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    centeredSlides: false,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        813: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        1324: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});

var swiper2 = new Swiper(".mySwiper-2", {
    slidesPerView: 3,
    centeredSlides: false,
    spaceBetween: 30,
    // loop:true ,
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next-2",
        prevEl: ".swiper-button-prev-2",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        813: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        1324: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});

var swiper3 = new Swiper(".mySwiper-3", {
    slidesPerView: 3,
    centeredSlides: false,
    spaceBetween: 30,
    loop:true ,
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next-3",
        prevEl: ".swiper-button-prev-3",
    },
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        480: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        510: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        730: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        1113: {
            slidesPerView: 4,
            spaceBetween: 35
        },
        1220: {
            slidesPerView: 6,
            spaceBetween: 40
        },
    }
});

var appendNumber = 4;
var prependNumber = 1;
document
    .querySelector(".prepend-2-slides")
    .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.prependSlide([
            '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
            '<div class="swiper-slide">Slide ' + --prependNumber + "</div>",
        ]);
    });
document
    .querySelector(".prepend-slide")
    .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.prependSlide(
            '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
        );
        swiper2.prependSlide(
            '<div class="swiper-slide">Slide ' + --prependNumber + "</div>"
        );
    });
document
    .querySelector(".append-slide")
    .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.appendSlide(
            '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
        );
        swiper2.appendSlide(
            '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>"
        );
    });
document
    .querySelector(".append-2-slides")
    .addEventListener("click", function (e) {
        e.preventDefault();
        swiper.appendSlide([
            '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
            '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
        ]);
        swiper2.appendSlide([
            '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
            '<div class="swiper-slide">Slide ' + ++appendNumber + "</div>",
        ]);
    });
