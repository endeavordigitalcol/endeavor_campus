const swiperCatHome = new Swiper('.swiper-cat-home', {
    slidesPerView: 1, 
    spaceBetween: 16,
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 3000
    },
    breakpoints: {
        600: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }
})