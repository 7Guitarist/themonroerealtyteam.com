(function () {
  var app = {
    initAos: function () {
      setTimeout(function () {
        AOS.init();
      }, 1000);
    },

    initNavigation: function () {
      var $nav = jQuery("#nav, #nav2");
      if ($nav.length > 0) $nav.navTabDoubleTap();
    },

    initDetectScroll: function () {
      if (jQuery(window).width() > 991 && jQuery(window).scrollTop() > 56) {
        jQuery("header.header").addClass("show-fixed");
      } else {
        jQuery("header.header").removeClass("show-fixed");
      }
    },

    initBurgerMenu: function () {
      jQuery(".burger-menu").on("click", function (e) {
        e.preventDefault();
        if (jQuery(this).hasClass("is-open")) {
          jQuery(this).removeClass("is-active");
          jQuery(".bm-view").removeClass("is-open");
          jQuery("body").removeClass("is-open");
        } else {
          jQuery(this).addClass("is-active");
          jQuery(".bm-view").addClass("is-open");
          jQuery("body").addClass("is-open");
        }
      });
      jQuery(".bm-drop, .bm-close").on("click", function (e) {
        e.preventDefault();
        jQuery(".bm-view").removeClass("is-open");
        jQuery(".bm-btn").removeClass("is-active");
        jQuery("body").removeClass("is-open");
      });
    },

    initSplitHeader: function () {
      /* Split Nav */
      jQuery(".header #nav").splitNav({
        logo: ".header-logo",
        navClasses: "header-item menu",
        splitCount: 3,
        splitCountEqual: false,
      });

      jQuery(".header-logo").addClass("no-padding");
    },

    initSlideshow: function () {
      //code here
    },

    initCta: function () {
      //code here
    },

    initBuffaloStories: function () {
      //code here
    },

    initQuickSearch: function () {
      //code here
    },

    initWelcome: function () {
      //code here
    },

    initTeam: function () {
      //code here

      var sectionSlick = ".team-slick";
      $(sectionSlick).slick({
        slidesToShow: 4,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: false,
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 2 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-team img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initProperties: function () {
      //code here

      var sectionSlick = ".properties-slick";
      $(sectionSlick).slick({
        slidesToShow: 1,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: false,
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 1 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-properties img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initSold: function () {
      //code here

      var sectionSlick = ".sold-slick";
      $(sectionSlick).slick({
        slidesToShow: 3,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: true,
        prevArrow: ".hp-sold .prev",
        nextArrow: ".hp-sold .next",
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 2 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-sold img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initAreas: function () {
      //code here
    },

    initTestimonials: function () {
      //code here

      var sectionSlick = ".testimonials-slick";
      $(sectionSlick).slick({
        slidesToShow: 1,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: true,
        prevArrow: ".hp-testimonials .prev",
        nextArrow: ".hp-testimonials .next",
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 1 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-testimonials img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initBlogs: function () {
      //code here

      var sectionSlick = ".blogs-slick";
      $(sectionSlick).slick({
        slidesToShow: 2,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: true,
        prevArrow: ".hp-blogs .prev",
        nextArrow: ".hp-blogs .next",
        rows: 2,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 1 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-blogs img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initSocial: function () {
      //code here

      var sectionSlick = ".social-slick";
      $(sectionSlick).slick({
        slidesToShow: 3,
        slideToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 7000,
        speed: 1000,
        arrows: true,
        prevArrow: ".hp-social .prev",
        nextArrow: ".hp-social .next",
        rows: 1,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 1 } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
        ],
      });
      var isSliding = false;
      jQuery(sectionSlick).on("beforeChange", function () {
        isSliding = true;
      });
      jQuery(sectionSlick).on("afterChange", function () {
        isSliding = false;
      });
      jQuery(".hp-social img").click(function (e) {
        if (isSliding) {
          e.stopImmediatePropagation();
          e.stopPropagation();
          e.preventDefault();
          return;
        }
      });
    },

    initContact: function () {
      //code here
    },
  };

  jQuery(document).ready(function () {
    app.initAos();
    app.initNavigation();

    app.initBurgerMenu();

    app.initSplitHeader();

    app.initSlideshow();

    app.initCta();

    app.initBuffaloStories();

    app.initQuickSearch();

    app.initWelcome();

    app.initTeam();

    app.initProperties();

    app.initSold();

    app.initAreas();

    app.initTestimonials();

    app.initBlogs();

    app.initSocial();

    app.initContact();
  });

  jQuery(window).on("scroll", function () {
    app.initDetectScroll();
  });

  jQuery(window).on("load", function () {});

  jQuery(window).on("resize", function () {});
})();
