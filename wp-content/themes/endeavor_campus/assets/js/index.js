(function($){
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

    $( window ).load(() => {
        same_height('.lc-card--body', 32);
        same_height('.pc-card' ,32);
    });

    $( window ).scroll(() => {
        if( window.scrollY > 0 ){
            if( window.scrollY < window.innerHeight ){
                $('.social-icons-bar').css({ "top": (window.innerHeight - window.scrollY) + "px"});
            }
        }
    })

    $('.wp-block-embed__wrapper iframe').height(
        ($('.wp-block-embed__wrapper iframe').width() * 9) / 16
    );

    function same_height( identifier, padding = 32 ){
        let h = 0;

        $( identifier ).each(( index, element ) => {
            if( element.offsetHeight > h ){
                h = element.offsetHeight;
            }
        })

        $( identifier ).height( h - padding );
    }
    
})(jQuery);