$(document).ready(function () {
    $("#testimonial-slider").owlCarousel({
        items: 3,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [867, 1],
        pagination: false,
        navigation: true,
        navigationText: ["", ""],
        slideSpeed: 600,
        autoPlay: false,
        
    });
});