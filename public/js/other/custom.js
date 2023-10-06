  
$(document).ready(function(){  
     
   /*===================Bootstrap scrollspy ==================*/

    $("a.target").on('click', function(event) {
        event.preventDefault();
    var hash = this.hash;

    $('html, body').animate({
        scrollTop: $(hash).offset().top  
        }, 1000, function(){ 
    });
    }); 
 
    $(".totop").click(function() {
      $("html, body").animate({scrollTop: 0},1300);
    });

    /*------------[Start] parallaxie.js ------------*/

    $('.parallaxie').parallaxie();
 
 
    /*------------[Start] Tooltip Bootstrip 5 ------------*/

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    });
  

    $(".swiper-banner").each(function(index, element){
        var $this = $(this);
        var swiper = new Swiper(this, {
            slidesPerView:1,
            spaceBetween:0, 
            speed: 1000,
            loop: true,
            effect: 'slide',   
            observer: true,
            observeParents: true,
            watchOverflow: true, 
            // autoplay: {
            //     delay: 7000,
            //     disableOnInteraction: false,
            // },
            pagination: {
                el: $this.parent().find('.swiper-pagination'),
                clickable: true,
            },
            navigation: {
                nextEl: $this.parent().find(".swiper-button-next")[0],
                prevEl: $this.parent().find(".swiper-button-prev")[0],
            }
        });
    });
 
});

 
$(window).on("load", function() {
  
  $(".preload").fadeOut();

  setTimeout(function () {
     $("html").addClass("page-loaded");
  }, 200);

 
  var isMobile = {
      Android: function() {
          return navigator.userAgent.match(/Android/i);
      },
      BlackBerry: function() {
          return navigator.userAgent.match(/BlackBerry/i);
      },
      iOS: function() {
          return navigator.userAgent.match(/iPhone|iPad|iPod/i);
      },
      Opera: function() {
          return navigator.userAgent.match(/Opera Mini/i);
      },
      Windows: function() {
          return navigator.userAgent.match(/IEMobile/i);
      },
      any: function() {
          return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
      }
  };

  if(isMobile.any()) {
      $("html").addClass("device");   
  }else{
      $("html").addClass("pc");    
  }
   

  var ua = window.navigator.userAgent;
  var isIE = /MSIE|Trident/.test(ua);

  if ( isIE ) {
     $("html").addClass("ie");
  }
  
  $('.modal').on("hidden.bs.modal", function (e) {
      if ($('.modal:visible').length) { 
          $('body').addClass('modal-open'); 
      }
  });

  
  $('img.svg-js').each(function() {
      var $img = jQuery(this);
      var imgURL = $img.attr('src');
      var attributes = $img.prop("attributes");

      $.get(imgURL, function(data) {
          // Get the SVG tag, ignore the rest
          var $svg = jQuery(data).find('svg');

          // Remove any invalid XML tags
          $svg = $svg.removeAttr('xmlns:a');

          // Loop through IMG attributes and apply on SVG
          $.each(attributes, function() {
              $svg.attr(this.name, this.value);
          });

          // Replace IMG with SVG
          $img.replaceWith($svg);
      }, 'xml');
  });
});

 
/*------------[Start] Height [vh] ------------*/

let vh_static = window.innerHeight * 0.01; 
document.documentElement.style.setProperty('--vhs', `${vh_static}px`);

let vh = window.innerHeight * 0.01; 
document.documentElement.style.setProperty('--vh', `${vh}px`);
window.addEventListener('resize', () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});
 