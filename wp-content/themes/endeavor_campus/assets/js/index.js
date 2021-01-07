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
        h_lc_card_body();
    });

    function h_lc_card_body(){
        let h_lc_card_body = 0;

        $('.lc-card--body').each(( index, element ) => {
            if( element.offsetHeight > h_lc_card_body ){
                h_lc_card_body = element.offsetHeight;
            }
        })

        $('.lc-card--body').height( h_lc_card_body - 32 );
    }
    
})(jQuery);