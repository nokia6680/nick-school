var galleryThumbs = new Swiper('.video-thumbs', {
    spaceBetween: 30,
    slidesPerView: 1,
    freeMode: false,
    direction: 'vertical',
    autoplay: false,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
    },
});

var galleryTop = new Swiper('.video-top', {
    spaceBetween: 0,
    autoplay: false,
    navigation: {
        nextEl: '.video__next-th',
        prevEl: '.video__prev-th',
    },

    thumbs: {
        swiper: galleryThumbs
    }
});
