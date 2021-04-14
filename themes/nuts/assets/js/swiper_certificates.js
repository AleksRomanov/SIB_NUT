const swiperCertificates = () => {
    var swiperCertificates = new Swiper('.certificates__swiper', {
        slidesPerView: 1,
        centeredSlides: true,
        zoom: true,
        preloadImages: false,
        autoHeight: false,
        lazy: true,
        navigation: {
            nextEl: '.certificates__slider-controls--next',
            prevEl: '.certificates__slider-controls--prev',
        },
        pagination: {
            el: '.swiper-certificates-pagination',
            dynamicBullets: true,
            dynamicMainBullets: 1,
            clickable: true,

            renderBullet(index, className) {
                return '<img class="' + className + ' swiper--bullet" src="themes/nuts/assets/images/certificates/bullets/' + index + '-bullet.jpg">';
            }
        },
        breakpoints: {
            1200: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 1,
            },
            320: {
                slidesPerView: 1,
            }
        },
        on: {
            init: function () {
                var fullScreenImageSlide = document.querySelectorAll('.certificates__slide');
                var popupFullScreen = document.querySelector('.certificates--full');
                var pageBody = document.querySelector('body');
                var closeButton = document.querySelector('.certificates__full-close');


                fullScreenImageSlide.forEach(function (imageSlide) {
                    imageSlide.addEventListener('click', function () {
                        popupFullScreen.classList.add('show-full-certificates--js');
                        pageBody.classList.add('overflow-hidden--js');
                        swiperFull.init();
                        swiperFull.slideReset();
                        swiperFull.slideTo(swiperCertificates.activeIndex);
                    })
                })
                closeButton.addEventListener('click', function () {
                    popupFullScreen.classList.remove('show-full-certificates--js');
                    pageBody.classList.remove('overflow-hidden--js');
                })
            }
        }
    });

    var swiperFull = new Swiper('.certificates__swiper--full', {
        init: false,
        preloadImages: false,
        lazy: true,
        zoom: true,
        slidesPerView: 1,
        centeredSlides: true,

        navigation: {
            nextEl: '.certificates__slider-controls--next',
            prevEl: '.certificates__slider-controls--prev',
        },

        pagination: {
            el: '.swiper-certificates-pagination',
            dynamicBullets: true,
            dynamicMainBullets: 1,
            clickable: true,

            renderBullet(index, className) {
                return '<img class="' + className + ' swiper--bullet" src="themes/nuts/assets/images/certificates/bullets/' + index + '-bullet.jpg">';
            }
        },
    });
    window.swiperCertificates = {
        swiper: swiperCertificates
    };
};

export default swiperCertificates;
