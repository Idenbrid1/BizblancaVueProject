
var swiper = new Swiper(".processslider", {
    slidesPerView: 1,
    spaceBetween: 1,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2.5,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 6,
            spaceBetween: 30,
        },
        1224: {
            slidesPerView: 7,
            spaceBetween: 30,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});
/* blog list slide  */


var swiper = new Swiper(".bloglistlider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2.5,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1224: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});


/* logo slide  */


var swiper = new Swiper(".logoslider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2.5,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1224: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});

//  side nav
$(document).ready(function () {

    let count = 0;
    $('#humburger-menu').on('click', (e) => {
        if (count == 0) {
            $('.hidden-nav').fadeIn(100);
            count = 1;
        } else {
            $('.hidden-nav').fadeOut(100);
            count = 0;
        }
    });
});

function removeExperience(e) {
    let targetvalue = e.target;
    $(targetvalue).parent().parent().parent().remove();
}

function openProfileTab() {
    document.getElementById("Profile-tab-mobile-nav").style.left = "0%";
}

function closeProfileTab() {
    document.getElementById("Profile-tab-mobile-nav").style.left = "-100%";
}


var _NavBarToggler = 0;

function ShowNavbar() {
    if (_NavBarToggler == 0) {
        document.getElementById("nav-lists").classList.add("_Menus-show");
        _NavBarToggler++
    } else {
        _NavBarToggler = 0;
        document.getElementById("nav-lists").classList.remove("_Menus-show");
    }
}
