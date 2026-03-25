$(document).ready(function () {

  $('[data-toggle="tooltip"]').tooltip();

  $('.navbar-nav li a, .navbar-brand a').on('click', function (e) {
    e.preventDefault();
    var href = $(this).attr('href');
    href = '#' + href.split('#').pop();

    var $target = $(href).offset().top - 140;

    $('html, body').animate({
      'scrollTop': $target
    }, 900, 'swing', function () {
      window.history.pushState("object or string", "Title", href);
    });
    if (screen.width <= 991) {
      $(".navbar-toggler").trigger('click');
    }
  });

  new WOW().init();

  AOS.init({
    duration: 2000,
    delay: 0.5,
  })


  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.scroll').fadeIn();
    } else {
      $('.scroll').fadeOut();
    }
  });
  $('#scroll1').click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
  });


  $('#ranking_slide').owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000,
    navigation: true,
    margin: 20,
    rtl: true,
    loop: true,
    dots: true,
    nav: true,
    // navText: ["<img src='owlCarousel/img/left.png'>","<img src='owlCarousel/img/right.png'>"],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });
  $('#achieve_slide').owlCarousel({
    autoplay: false,
    navigation: true,
    margin: 20,
    ltr: false,
    loop: true,
    autoplay: true,
    dots: false,
    nav: true,
    navText: ["<img src='images/left-arrow.png'>", "<img src='images/right-arrow.png'>"],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });
  $('#career_opport_slide').owlCarousel({
    autoplay: false,
    autoplayTimeout: 100000,
    navigation: true,
    margin: 30,
    ltr: false,
    loop: true,
    dots: true,
    nav: false,
    // navText: ["<img src='owlCarousel/img/left.png'>","<img src='owlCarousel/img/right.png'>"],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });

  $('#recruiters_slide').owlCarousel({
    autoplay: false,
    navigation: true,
    margin: 20,
    loop: true,
    dots: false,
    autoplay: true,
    nav: true,
    navText: [
      "<img src='images/left-arrow.png'>",
      "<img src='images/right-arrow.png'>"
    ],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  }).on("dragged.owl.carousel", function (event) {
    console.log('event : ', event.relatedTarget['_drag']['direction'])
  });
  $('#Testimonials_slide').owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000,
    navigation: true,
    margin: 20,
    ltr: true,
    loop: true,
    dots: true,
    nav: false,
    //navText: ["<img src='owlCarousel/img/angle-left.png'>","<img src='owlCarousel/img/angle-right.png'>"],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 2
      }
    }
  });

  $(".owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    touchDrag: true,
    nav: false,
    dots: false
  });



$(".owl-carousel").owlCarousel({
  items: 1,
  loop: false,
  autoplay: false,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  touchDrag:true,
  nav: false,
  dots: false
});
});


// (function () {
//   const second = 1000,
//     minute = second * 60,
//     hour = minute * 60,
//     day = hour * 24;

//   //I'm adding this section so I don't have to keep updating this pen every year :-)
//   //remove this if you don't need it
//   let today = new Date(),
//     dd = String(today.getDate()).padStart(2, "0"),
//     mm = String(today.getMonth() + 1).padStart(2, "0"),
//     yyyy = today.getFullYear(),
//     nextYear = yyyy + 1,
//     dayMonth = "06/09/",
//     birthday = dayMonth + yyyy;

//   today = mm + "/" + dd + "/" + yyyy;
//   if (today > birthday) {
//     birthday = dayMonth + nextYear;
//   }
//   //end

//   const countDown = new Date(birthday).getTime(),
//     x = setInterval(function () {

//       const now = new Date().getTime(),
//         distance = countDown - now;

//       document.getElementById("days").innerText = Math.floor(distance / (day)),
//         document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
//         document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
//         document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

//       //do something later when date is reached
//       if (distance < 0) {
//         document.getElementById("headline").innerText = "Application Closed";
//         document.getElementById("countdown").style.display = "none";
//         document.getElementById("content").style.display = "block";
//         clearInterval(x);
//       }
//       //seconds
//     }, 0)
// }());