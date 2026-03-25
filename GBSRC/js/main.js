!(function (a) {
  "use strict";
  (a(window).scroll(function () {
    300 < a(this).scrollTop()
      ? a(".sticky-top").addClass("shadow").css("top", "0px")
      : a(".sticky-top").removeClass("shadow").css("top", "-100px");
  }),
    a(window).scroll(function () {
      100 < a(this).scrollTop()
        ? a(".back-to-top").fadeIn()
        : a(".back-to-top").fadeOut();
    }),
    a(".back-to-top").click(function (b) {
      (b.preventDefault(), a("html, body").animate({ scrollTop: 0 }, "300"));
    }),
    a(".testimonals_01").owlCarousel({
      autoplay: false,
      autoplayTimeout: 2e3,
      smartSpeed: 1e3,
      margin: 25,
      loop: true,
      center: !1,
      dots: !0,
      nav: !0,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: { 0: { items: 1 }, 576: { items: 1 }, 768: { items: 2 } },
    }),
    a(".awards_01").owlCarousel({
      autoplay: !0,
      autoplayTimeout: 2e3,
      smartSpeed: 500,
      margin: 0,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !1,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 1 },
        576: { items: 2 },
        768: { items: 2 },
        992: { items: 3 },
      },
    }),
    a(".testimonials_01").owlCarousel({
      autoplay: true,
      autoplayTimeout: 2e3,
      smartSpeed: 500,
      margin: 25,
      loop: !0,
      center: !1,
      dots: !1,
      nav: 1,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 1 },
        992: { items: 1 },
      },
    }),
    a(".placement_01").owlCarousel({
      autoplay: true,
      autoplayTimeout: 2e3,
      smartSpeed: 500,
      margin: 25,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !1,
      rtl: true,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 2 },
        576: { items: 2 },
        768: { items: 3 },
        992: { items: 5 },
      },
    }),
    a(".testimonial-carousel").owlCarousel({
      autoplay: true,
      autoplayTimeout: 2e3,
      smartSpeed: 500,
      margin: 25,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !1,
      rtl: true,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 1 },
        576: { items: 1 },
        768: { items: 2 },
        992: { items: 2 },
      },
    }),
    a(".placement_02").owlCarousel({
      autoplay: true,
      autoplayTimeout: 2e3,
      smartSpeed: 500,
      margin: 25,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !1,
      rtl: false, // ✅ LEFT TO RIGHT
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 2 },
        576: { items: 2 },
        768: { items: 3 },
        992: { items: 5 },
      },
    }),
    a(".gallary_01").owlCarousel({
      autoplay: !0,
      autoplayTimeout: 2e3,
      smartSpeed: 500,
      margin: 25,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !0,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 1 },
        576: { items: 1 },
        768: { items: 1 },
        992: { items: 3 },
      },
    }),
    $(document).ready(function () {
      $(".life-carousel").owlCarousel({
        loop: true,
        center: true,
        rtl: true,
        items: 5,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 2500,
        smartSpeed: 800,
        dots: false,
        nav: true,

        responsive: {
          0: { items: 1 },
          768: { items: 3 },
          1200: { items: 5 },
        },
      });
    }),
    $(".gallery_carousel_01")
      .owlCarousel({
        autoplay: true,
        loop: true,
        margin: -50,
        nav: true,
        dots: false,
        autoplayTimeout: 3000,
        navText: [
          '<i class="bi bi-chevron-left"></i>',
          '<i class="bi bi-chevron-right"></i>',
        ],
        responsive: {
          0: {
            items: 1,
            center: false,
          },
          600: {
            items: 2,
            center: false,
          },
          991: {
            items: 3,
            center: true,
          },
        },
      })
      .$("a.nav-link")
      .on("click", function (a) {
        (a.preventDefault(),
          (a = $(this).attr("href")),
          $("a.nav-link").removeClass("active"),
          $(this).addClass("active"),
          $("html, body").animate({ scrollTop: $(a).offset().top - 80 }, 5));
      }),
    $(".nav-link a").on("click", function (a) {
      (a.preventDefault(),
        (a = $(this).attr("href")),
        $(".nav-link a").removeClass("active"),
        $(this).addClass("active"),
        $("html, body").animate({ scrollTop: $(a).offset().top - 80 }, 5));
    }));
  var b = window.location.href;
  (a('.navbar-nav a[href="' + b + '"]').addClass("active"),
    a("[data-bgimg]").each(function () {
      a(this).css("background-image", "url(" + a(this).data("bgimg") + ")");
    }),
    document.addEventListener("DOMContentLoaded", function () {
      const a = document.querySelectorAll(".nav-item.nav-link"),
        b = document.querySelectorAll("section");
      window.addEventListener("scroll", function () {
        let c = window.scrollY + 300;
        b.forEach((b) => {
          b.offsetTop <= c &&
            b.offsetTop + b.offsetHeight > c &&
            a.forEach((a) => {
              (a.classList.remove("active"),
                `#${b.id}` === a.getAttribute("href") &&
                  a.classList.add("active"));
            });
        });
      });
    }));
})(jQuery);
