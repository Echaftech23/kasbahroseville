(function ($) {
  "use strict";

  var kasbah_window = $(window);

  // ****************************
  // :: 1.0 Preloader Active Code
  // ****************************

  kasbah_window.on("load", function () {
    $("#preloader").fadeOut("1000", function () {
      $(this).remove();
    });
  });

  // ****************************
  // :: 2.0 ClassyNav Active Code
  // ****************************

  if ($.fn.classyNav) {
    $("#kasbahNav").classyNav();
  }

  // ***************************
  // :: 3.0 Single Project Slide
  // ***************************

  $(".single-project-slide").on("mouseenter", function () {
    $(".single-project-slide").removeClass("active");
    $(this).addClass("active");
  });

  // *********************************
  // :: 4.0 Welcome Slides Active Code
  // *********************************

  if ($.fn.owlCarousel) {
    var welcomeSlider = $(".welcome-slides");
    welcomeSlider.owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      smartSpeed: 1000,
      nav: true,
    });

    welcomeSlider.on("translate.owl.carousel", function () {
      var layer = $("[data-animation]");
      layer.each(function () {
        var anim_name = $(this).data("animation");
        $(this)
          .removeClass("animated " + anim_name)
          .css("opacity", "0");
      });
    });

    $("[data-delay]").each(function () {
      var anim_del = $(this).data("delay");
      $(this).css("animation-delay", anim_del);
    });

    $("[data-duration]").each(function () {
      var anim_dur = $(this).data("duration");
      $(this).css("animation-duration", anim_dur);
    });

    welcomeSlider.on("translated.owl.carousel", function () {
      var layer = welcomeSlider
        .find(".owl-item.active")
        .find("[data-animation]");
      layer.each(function () {
        var anim_name = $(this).data("animation");
        $(this)
          .addClass("animated " + anim_name)
          .css("opacity", "1");
      });
    });

    function welcomeSlide() {
      $(".owl-item").removeClass("prev next");
      var currentSlide = $(".welcome-slides .owl-item.active");
      currentSlide.next(".owl-item").addClass("next");
      currentSlide.prev(".owl-item").addClass("prev");
      var nextSlideImg = $(".owl-item.next")
        .find(".single-welcome-slide")
        .attr("data-img-url");
      var prevSlideImg = $(".owl-item.prev")
        .find(".single-welcome-slide")
        .attr("data-img-url");
      $(".owl-nav .owl-prev").css({
        background: "url(" + prevSlideImg + ")",
      });
      $(".owl-nav .owl-next").css({
        background: "url(" + nextSlideImg + ")",
      });
    }

    welcomeSlide();

    welcomeSlider.on("translated.owl.carousel", function () {
      welcomeSlide();
    });
  }

  // *********************************
  // :: 5.0 Project Slides Active Code
  // *********************************
  if ($.fn.owlCarousel) {
    var projectSlide = $(".projects-slides");
    projectSlide.owlCarousel({
      items: 5,
      margin: 0,
      loop: true,
      autoplay: true,
      smartSpeed: 1500,
      dots: true,
      responsive: {
        0: {
          items: 1,
        },
        768: {
          items: 2,
        },
        992: {
          items: 3,
        },
        1500: {
          items: 4,
        },
      },
    });
  }

  // *************************************
  // :: 6.0 Testimonial Slides Active Code
  // *************************************
  if ($.fn.owlCarousel) {
    var testiThumbSlide = $(".testimonial-thumbnail");
    testiThumbSlide.owlCarousel({
      items: 1,
      margin: 0,
      loop: true,
      autoplay: true,
      smartSpeed: 500,
    });
  }
  if ($.fn.owlCarousel) {
    var testiSlides = $(".testimonial-slides");
    testiSlides.owlCarousel({
      items: 1,
      margin: 0,
      loop: true,
      autoplay: true,
      smartSpeed: 1000,
    });
  }

  // *******************************
  // :: 7.0 Rooms Slides Active Code
  // *******************************
  if ($.fn.owlCarousel) {
    var roomSlides = $(".rooms-slides");
    roomSlides.owlCarousel({
      items: 1,
      margin: 0,
      loop: true,
      autoplay: true,
      smartSpeed: 1500,
      nav: true,
      navText: [
        '<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous',
        'Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
      ],
    });

    roomSlides.on("translate.owl.carousel", function () {
      var layer = $("[data-animation]");
      layer.each(function () {
        var anim_name = $(this).data("animation");
        $(this)
          .removeClass("animated " + anim_name)
          .css("opacity", "0");
      });
    });

    $("[data-delay]").each(function () {
      var anim_del = $(this).data("delay");
      $(this).css("animation-delay", anim_del);
    });

    $("[data-duration]").each(function () {
      var anim_dur = $(this).data("duration");
      $(this).css("animation-duration", anim_dur);
    });

    roomSlides.on("translated.owl.carousel", function () {
      var layer = roomSlides.find(".owl-item.active").find("[data-animation]");
      layer.each(function () {
        var anim_name = $(this).data("animation");
        $(this)
          .addClass("animated " + anim_name)
          .css("opacity", "1");
      });
    });
  }

  // ********************************
  // :: 8.0 Search Button Active Code
  // ********************************
  $(".search-btn").on("click", function () {
    $(".search-form").toggleClass("search-form-active");
  });

  // *********************************
  // :: 9.0 Magnific Popup Active Code
  // *********************************
  if ($.fn.magnificPopup) {
    $(".video-play-btn").magnificPopup({
      type: "iframe",
    });
  }

  // ***************************
  // :: 10.0 Tooltip Active Code
  // ***************************
  if ($.fn.tooltip) {
    $('[data-toggle="tooltip"]').tooltip();
  }

  // ***********************
  // :: 11.0 WOW Active Code
  // ***********************
  if (kasbah_window.width() > 767) {
    new WOW().init();
  }

  // ****************************
  // :: 12.0 Jarallax Active Code
  // ****************************
  if ($.fn.jarallax) {
    $(".jarallax").jarallax({
      speed: 0.5,
    });
  }

  // ****************************
  // :: 13.0 Scrollup Active Code
  // ****************************
  if ($.fn.scrollUp) {
    kasbah_window.scrollUp({
      scrollSpeed: 1500,
      scrollText: '<i class="arrow_carrot-up"></i>',
    });
  }

  // *********************************
  // :: 15.0 Prevent Default 'a' Click
  // *********************************
  $('a[href="#"]').on("click", function ($) {
    $.preventDefault();
  });

  // *******************************
  // :: 17.0 Nice Select Active Code
  // *******************************
  if ($.fn.countdown) {
    $("select").niceSelect();
  }

  $(function () {
    $("#sliderRangePrice").on("input", function () {
      $("#sliderValue").text($(this).val());
    });

    $("#sliderRangePrice").on("input", function () {
      var x = $(this).val();
      var percentage = (x / 300) * 100;
      var color = `linear-gradient(90deg, #e42c76 ${percentage}%, #e8f1f8 ${percentage}%)`;
      $(this).css("background", color);
    });
  });

})(jQuery);