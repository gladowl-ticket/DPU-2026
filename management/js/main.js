!(function (b) {
  "use strict";
  b(window).scroll(function () {
    (300 < b(this).scrollTop()
      ? b(".sticky-top").addClass("navTop")
      : b(".sticky-top").removeClass("navTop")
    ).addClass("top_01");
  }),
    b(window).scroll(function () {
      100 < b(this).scrollTop()
        ? b(".back-to-top").fadeIn()
        : b(".back-to-top").fadeOut();
    }),
    b(".back-to-top").click(function (a) {
      a.preventDefault(),
        b("html, body").animate(
          {
            scrollTop: 0,
          },
          "300"
        );
    }),
    b(".placement_01").owlCarousel({
      autoplay: true,
      autoplayTimeout: 2e3,
      smartSpeed: 500,
      margin: 10,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !1,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: {
          items: 3,
        },
        576: {
          items: 3,
        },
        768: {
          items: 4,
        },
        992: {
          items: 6,
        },
      },
    }),
    b(".corporate_01").owlCarousel({
      autoplay: true,
      autoplayTimeout: 2e3,
      smartSpeed: 500,
      margin: 10,
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
        0: {
          items: 3,
        },
        576: {
          items: 3,
        },
        768: {
          items: 4,
        },
        992: {
          items: 6,
        },
      },
    }),
    b(".testimonals_01").owlCarousel({
      autoplay: true,
      autoplayTimeout: 2e3,
      smartSpeed: 1e3,
      margin: 0,
      loop: !0,
      dots: !0,
      nav: !0,
      autoplayHoverPause: true,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: { 0: { items: 1 }, 576: { items: 1 }, 991: { items: 2 } },
    });
  b(".placement_02").owlCarousel({
    autoplay: !0,
    autoplayTimeout: 2e3,
    smartSpeed: 500,
    margin: 10,
    loop: !0,
    center: !1,
    dots: !1,
    nav: !1,
    rtl: !0,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],
    responsive: {
      0: {
        items: 2,
      },
      576: {
        items: 3,
      },
      768: {
        items: 4,
      },
      992: {
        items: 6,
      },
    },
  }),
    b(".veteransslider").owlCarousel({
      autoplay: !0,
      autoplayTimeout: 3e3,
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
        0: {
          items: 1,
        },
        576: {
          items: 1,
        },
        768: {
          items: 2,
        },
        992: {
          items: 3,
        },
      },
    }),
    $("a.nav-link").on("click", function (a) {
      a.preventDefault(),
        (a = $(this).attr("href")),
        $("a.nav-link").removeClass("active"),
        $(this).addClass("active"),
        $("html, body").animate(
          {
            scrollTop: $(a).offset().top - 80,
          },
          5
        );
    }),
    $(".nav-link a").on("click", function (a) {
      a.preventDefault(),
        (a = $(this).attr("href")),
        $(".nav-link a").removeClass("active"),
        $(this).addClass("active"),
        $("html, body").animate(
          {
            scrollTop: $(a).offset().top - 80,
          },
          5
        );
    });
  var c = window.location.href;
  b('.navbar-nav a[href="' + c + '"]').addClass("active"),
    b("[data-bgimg]").each(function () {
      b(this).css("background-image", "url(" + b(this).data("bgimg") + ")");
    });
  const d = document.querySelectorAll(".redirectBtn");
  d.forEach((a) => {
    a.addEventListener("click", function () {
      const a = document.getElementById("subChildUG");
      a &&
        a.scrollIntoView({
          behavior: "smooth",
        });
    });
  });
  const e = document.querySelectorAll(".redirectBtn2");
  e.forEach((a) => {
    a.addEventListener("click", function () {
      const a = document.getElementById("subChildPG");
      a &&
        a.scrollIntoView({
          behavior: "smooth",
        });
    });
  });
  const a = document.querySelectorAll(".accordion-button");
  a.forEach((a) => {
    a.addEventListener("click", function () {
      const a = document.querySelector(".accordion-button:not(.collapsed)"),
        b = document.querySelector(this.getAttribute("data-target"));
      var c;
      a &&
        a !== this &&
        ((c = a.getAttribute("data-target")),
        document.querySelector(c).classList.remove("show"),
        a.classList.add("collapsed")),
        b.classList.toggle("show"),
        this.classList.toggle("collapsed");
    });
  });

  //////////////
  document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-item.nav-link");
    const sections = document.querySelectorAll("section"); // Ensure all target sections have a `<section>` tag

    function onScroll() {
      let scrollPos = window.scrollY + 300; // Offset to trigger a bit earlier

      sections.forEach((section) => {
        if (
          section.offsetTop <= scrollPos &&
          section.offsetTop + section.offsetHeight > scrollPos
        ) {
          navLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href") === `#${section.id}`) {
              link.classList.add("active");
            }
          });
        }
      });
    }
    window.addEventListener("scroll", onScroll);
  });

  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("overview-toggle")) {
      let id = e.target.getAttribute("data-target");
      let content = document.getElementById(id);

      content.classList.toggle("expanded");

      if (content.classList.contains("expanded")) {
        e.target.innerText = "Read Less";
      } else {
        e.target.innerText = "Read More";
      }
    }
  });

  $(" [data-bgimg]").each(function () {
    $(this).css("background-image", "url(" + $(this).data("bgimg") + ")");
  });

  // counter

  document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");
    const speed = 50; // bigger = slower

    const startCounter = (entry) => {
      if (!entry.isIntersecting) return;

      const counter = entry.target;
      const target = +counter.dataset.target;
      const suffix = counter.innerText.replace(/[0-9]/g, "");

      let count = 0;

      const update = () => {
        if (count < target) {
          count += Math.ceil(target / speed);
          counter.innerText = count + suffix;
          requestAnimationFrame(update);
        } else {
          counter.innerText = target + suffix;
        }
      };

      update();
      observer.unobserve(counter);
    };

    const observer = new IntersectionObserver(
      (entries) => entries.forEach(startCounter),
      { threshold: 0.5 }
    );

    counters.forEach((c) => observer.observe(c));
  });

  document.querySelectorAll(".readmore-box").forEach((box) => {
    const btn = box.querySelector(".readmore-btn");
    const content = box.querySelector(".readmore-content");

    btn.addEventListener("click", () => {
      content.classList.toggle("active");

      btn.textContent = content.classList.contains("active")
        ? "Read Less"
        : "Read More";
    });
  });
})(jQuery);


// Testimonials -----------------------------
    $(document).ready(function () {

    // Character limit
    var maxLength = 180;

    $(".testimonial-text").each(function () {
        var fullText = $(this).html().trim();

        if (fullText.length > maxLength) {
            var visibleText = fullText.substring(0, maxLength);
            var hiddenText = fullText.substring(maxLength);

            var html = `
                ${visibleText}
                <span class="more-text" style="display:none;">${hiddenText}</span>
                <a href="javascript:void(0);" class="read-more-btn testimonial_read_more fw-bold">... Read More</a>
            `;

            $(this).html(html);
        }
    });

    // Read More Read Less Toggle
    $(document).on("click", ".read-more-btn", function () {
        var moreText = $(this).prev(".more-text");

        if (moreText.is(":visible")) {
            moreText.hide();
            $(this).text("... Read More");
        } else {
            moreText.show();
            $(this).text(" Read Less");
        }
    });

});
