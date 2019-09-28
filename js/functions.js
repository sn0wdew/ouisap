jQuery( document ).ready(function( $ ) {
  $(document).ready(function () {
      $(".login").toggle();
      $("footer").click(function(){
        $(".login").toggle();
    });
      $('#menu').slicknav({
        appendTo: '.nav-wrapper',
        label: '',
    });
  });
  $(document).ready(function () {
    typer('#slogan', {
            min: 20,
            max: 350
        })
        .line('Developing the IS Professionals of Tomorrow');
});

// Nav mobil menu function

// Sponsor Slider
$(document).ready(function () {
    $(".regular").slick({
        dots: false,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [ // This makes sponsor responsive. Change breakpoint and settings.
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                }
    },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 4,
                    centerMode: false,
                }
    },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    autoplaySpeed: 3000,
                    centerMode: false,
                    arrows: false,
                }
    }
  ]
    });
});

// Add CSS on Scroll
// $(function() {
//     //caches a jQuery object containing the header element
//     var upcomingEvents = $(".upcoming-events");
//     var homeInfo = $(".home-info");
//     var homeContact = $(".home-contact");
//
//     $(window).scroll(function() {
//         var scroll = $(window).scrollTop();
//
//         if (scroll >= 500) {
//             upcomingEvents.removeClass('clear-module').addClass("animated fadeInUp");
//         } else {
//             // upcomingEvents.removeClass("animated fadeInUp").addClass('clear-module');
//         };
//
//         if (scroll >= 950) {
//             homeInfo.removeClass('clear-module').addClass("animated fadeInLeft");
//         };
//         if (scroll >= 950) {
//             homeContact.removeClass('clear-module').addClass("animated fadeInRight");
//
//         };
//
//
//     });
// });
});

// Typable slogan function
