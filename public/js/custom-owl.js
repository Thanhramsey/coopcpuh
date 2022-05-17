$('.owl-carousel-slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: false,
    navigation: false,
    autoplayTimeout: 3000,
    items: 1,
    dots: true
})
$('.owl-carousel-product').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: false,
    navigation: false,
    autoplayTimeout: 2500,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
			loop:( $('.owl-carousel-product').length > 5 )
        }
    }
})
$('.owl-carousel-product-cl').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: false,
    navigation: false,
    autoplayTimeout: 2500,
    responsive: {
        0: {
            items: 2,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 5,
			loop:( $('.owl-carousel-product-cl').length > 5 )
        }
    }
})

