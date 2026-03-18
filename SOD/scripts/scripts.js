$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $(".navbar-nav li a, .navbar-brand a").on("click", function (e) {
    e.preventDefault();
    var href = $(this).attr("href");
    href = "#" + href.split("#").pop();
    var $target = $(href).offset().top - 140;
    $("html, body").animate(
      {
        scrollTop: $target,
      },
      900,
      "swing",
      function () {
        window.history.pushState("object or string", "Title", href);
      },
    );
    if (screen.width <= 991) {
      $(".navbar-toggler").trigger("click");
    }
  });
  new WOW().init();
  AOS.init({
    duration: 2000,
    delay: 0.5,
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".scroll").fadeIn();
    } else {
      $(".scroll").fadeOut();
    }
  });
  $("#scroll1").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      600,
    );
    return !1;
  });
  $("#ranking_slide").owlCarousel({
    autoplay: !0,
    autoplayTimeout: 5000,
    navigation: !0,
    margin: 20,
    ltr: !1,
    loop: !0,
    dots: !0,
    nav: !0,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
  $("#achieve_slide").owlCarousel({
    autoplay: !1,
    navigation: !0,
    margin: 20,
    ltr: !1,
    loop: !0,
    dots: !0,
    nav: !0,
    navText: [
      "<img src='images/right-arrow.png'>",
      "<img src='images/left-arrow.png'>",
    ],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
  $("#career_opport_slide").owlCarousel({
    autoplay: !1,
    autoplayTimeout: 100000,
    navigation: !0,
    margin: 30,
    ltr: !1,
    loop: !0,
    dots: !0,
    nav: !1,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
  $("#recruiters_slide")
    .owlCarousel({
      autoplay: !1,
      navigation: !0,
      margin: 20,
      ltr: !0,
      loop: !0,
      dots: !0,
      nav: !0,
      navText: [
        "<img src='images/right-arrow.png'>",
        "<img src='images/left-arrow.png'>",
      ],
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1000: {
          items: 3,
        },
      },
    })
    .on("dragged.owl.carousel", function (event) {
      console.log("event : ", event.relatedTarget._drag.direction);
    });
  ($("#Testimonials_slide").owlCarousel({
    autoplay: !0,
    autoplayTimeout: 5000,
    navigation: !0,
    margin: 20,
    ltr: !0,
    loop: !0,
    dots: !0,
    nav: !1,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 2,
      },
    },
  }),
    $(".testimonial-carousel").owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      autoplay: false,
      smartSpeed: 800,
      navText: [
        "<img src='img/testimonal/left-arrow.svg' class='owl-arrow'>",
        "<img src='img/testimonal/right-arrow.svg' class='owl-arrow'>",
      ],
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1200: {
          items: 3,
        },
      },
    }),
    $(".event-carousel").owlCarousel({
      items: 1,
      loop: true,
      nav: true,
      dots: false,
      margin: 10,
      autoplay: true,
      smartSpeed: 800,
      navText: [
        "<img src='img/testimonal/left-arrow.svg' class='owl-arrow'>",
        "<img src='img/testimonal/right-arrow.svg' class='owl-arrow'>",
      ],
    }));
});
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#splide02", {
    type: "loop",
    perPage: 2,
    autoplay: !0,
    interval: 2000,
    flickMaxPages: 1,
    updateOnMove: !0,
    pagination: !1,
    perMove: 1,
    throttle: 300,
    breakpoints: {
      767: {
        perPage: 1,
      },
    },
  }).mount();
});
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#first-slider", {
    type: "loop",
    perPage: 1,
    autoplay: !0,
    interval: 5000,
    flickMaxPages: 1,
    updateOnMove: !0,
    pagination: !1,
    throttle: 300,
    breakpoints: {
      767: {
        perPage: 1,
      },
    },
  }).mount();
  new Splide("#splide3", {
    type: "loop",
    perPage: 4,
    autoplay: !0,
    interval: 3000,
    flickMaxPages: 1,
    updateOnMove: !0,
    pagination: !0,
    throttle: 300,
    breakpoints: {
      767: {
        perPage: 1,
      },
    },
  }).mount();
  new Splide("#splide4", {
    type: "loop",
    perPage: 4,
    focus: "center",
    autoplay: !0,
    interval: 3000,
    flickMaxPages: 3,
    updateOnMove: !0,
    pagination: !1,
    padding: "10%",
    throttle: 300,
    breakpoints: {
      767: {
        perPage: 1,
      },
    },
  }).mount();
});
$(document).on("click", ".overview-toggle", function () {
  var $btn = $(this);
  var $textDiv = $btn.closest(".overview-wrapper").find(".overview-text");

  $textDiv.toggleClass("expanded");

  if ($textDiv.hasClass("expanded")) {
    $btn.text("Read Less");
  } else {
    $btn.text("Read More");
  }
});
