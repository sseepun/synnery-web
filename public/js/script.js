
$(function(){ 'use strict';

    // Scope
    var scopeDiv = $('html, body');


    // Topnav
    var topnav = $('nav.topnav'),
        topnavMenu = topnav.find('.menu-container > .menu'),
        topnavDropdown = topnav.find('.topnav-dropdown'),
        topnavDropdownDivs = topnavDropdown.find('.dropdown-wrapper');
    if(topnav.length){
        topnavMenu.find('> *:first-child').click(function(e){
            let parent = $(this).parent(),
                dIndex = parent.data('dropdown');
            if(dIndex){
                e.preventDefault();
                if(parent.hasClass('active')){
                    parent.removeClass('active');
                    topnavDropdown.removeClass('active');
                    scopeDiv.removeClass('topnav-dropdown-opened');
                }else{
                    topnavMenu.removeClass('active');
                    parent.addClass('active');
                    topnavDropdown.addClass('active');
                    scopeDiv.addClass('topnav-dropdown-opened');

                    let prevActive = topnavDropdownDivs.filter('.active'),
                        nextActive = topnavDropdownDivs.filter('[data-dropdown="'+dIndex+'"]');
                    if(nextActive.length && !nextActive.hasClass('active')){
                        if(prevActive.length){
                            prevActive.addClass('fade-out');
                            nextActive.addClass('fade-in');
                            setTimeout(function(){
                                prevActive.removeClass('fade-in fade-out active');
                                nextActive.addClass('active');
                                nextActive.removeClass('fade-in fade-out');
                            }, 600);
                        }else{
                            nextActive.addClass('active');
                            nextActive.removeClass('fade-in fade-out');
                        }
                    }
                }
            }
        });
        topnav.find('.dropdown-filter').click(function(e){
            e.preventDefault();
            topnavMenu.removeClass('active');
            topnavDropdown.removeClass('active');
            scopeDiv.removeClass('topnav-dropdown-opened');
        });
    }


    // Section Anchors
    var sectionAnchors = [];
    function calculateSectionAnchors(){
        let offset = 0;
        sectionAnchors = [];
        $('section[data-section]').each(function(d, i){
            let top = Math.ceil($(this).offset().top);
            if(i == 0) offset = top;
            sectionAnchors.push(top - offset);
        });
    }
    calculateSectionAnchors();

    // Accessibility
    var accessTab = $('nav.accessibility'),
        accessTabBtnUp = accessTab.find('.btn-up'),
        accessTabBtnDown = accessTab.find('.btn-down');
    if(accessTab.length){
        accessTab.find('.btn-a-toggle').click(function(e){
            e.preventDefault();
            if(accessTab.hasClass('active')){
                accessTab.removeClass('active');
                accessTab.find('.toggle-wrapper').slideUp();
            }else{
                accessTab.addClass('active');
                accessTab.find('.toggle-wrapper').slideDown();
            }
        });
        accessTabBtnUp.click(function(e){
            e.preventDefault();
            let ready = true,
                st = Math.ceil($(window).scrollTop());
            for(let i=sectionAnchors.length-1; i>=0; i--){
                let d = sectionAnchors[i];
                if(ready && st > d){
                    ready = false;
                    $('html, body').stop().animate({ scrollTop: d }, 700, 'easeInOutCubic');
                }
            }
        });
        accessTabBtnDown.click(function(e){
            e.preventDefault();
            let ready = true,
                st = Math.ceil($(window).scrollTop());
            for(let i=1; i<sectionAnchors.length; i++){
                let d = sectionAnchors[i];
                if(ready && st < d){
                    ready = false;
                    $('html, body').stop().animate({ scrollTop: d }, 900, 'easeInOutCubic');
                }
            }
        });
    }
    

    // Check on Scroll
    function checkOnScroll(st){
        if(st > 160){
            topnav.addClass('sticky');
        }else{
            topnav.removeClass('sticky');
        }

        let saLen = sectionAnchors.length;
        if(saLen){
            if(st <= sectionAnchors[0]+1) accessTabBtnUp.addClass('inactive');
            else accessTabBtnUp.removeClass('inactive');
            if(st >= sectionAnchors[saLen-1]-1) accessTabBtnDown.addClass('inactive');
            else accessTabBtnDown.removeClass('inactive');
        }else{
            accessTabBtnUp.addClass('inactive');
            accessTabBtnDown.addClass('inactive');
        }
    }
    checkOnScroll( $(window).scrollTop() );
    $(window).scroll(function(){
        checkOnScroll( $(this).scrollTop() );
    });
    $(window).resize(function(){
        calculateSectionAnchors();
        checkOnScroll( $(this).scrollTop() );
    });
    

    // Tab Container
    var tabContainers = $('.tab-container');
    if(tabContainers.length){
        tabContainers.each(function(){
            var self = $(this),
                tabs = self.find('.tabs .tab'),
                tabContents = self.find('.tab-contents > .tab-content');
            tabs.click(function(e){
                var target = tabContents.filter('[data-tab="'+$(this).data('tab')+'"]'),
                    oldTargets = tabContents.filter('.active'),
                    slideContainers = target.find('.slide-container'),
                    swiperContainers = target.find('.swiper-container');
                if(target.length){
                    e.preventDefault();
                    tabs.removeClass('active');
                    $(this).addClass('active');

                    tabContents.removeClass('fade-in');
                    oldTargets.addClass('fade-out');
                    target.addClass('fade-in');
                    setTimeout(function(){
                        tabContents.removeClass('fade-in fade-out active');
                        target.addClass('active');
                    }, 600);
                    
                    if(swiperContainers.length){
                        swiperContainers.each(function(){
                            $(this)[0].swiper.update();
                        });
                    }
    
                    AOS.refresh();
                }
            });
        });
    }


    // Page Loader
    let pageLoader = $('.page-loader');
    if(pageLoader.length){
        window.onload = function(){
            setTimeout(function(){
                pageLoader.addClass('started');
            }, 100);
            setTimeout(function(){
                pageLoader.addClass('fade-out');
                setTimeout(function(){
                    pageLoader.remove();
                    $('body').removeClass('loading');
                    AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });
                }, 1700);
            }, 1100);
        }
    }else{
        $('body').removeClass('loading');
        AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });
    }

});

 // Section 02
 var section02= $('.section-02');
 if(section02.length){
    section02.find('.swiper-container').each(function(){
         var self = $(this);
         new Swiper(self, {
             loop: true,
             speed: 800,
             slidesPerView: 6,
             spaceBetween: 20,
             grabCursor: true,
             breakpoints: {
                 1199.98: { slidesPerView: 3, spaceBetween: 20 },
                 991.98: { slidesPerView: 2, spaceBetween: 20 },
                 575.98: { slidesPerView: 1.4, spaceBetween: 20 },
             },
         });
     });
 }

 
 // Section 06
 var section06= $('.section-06');
 if(section06.length){
    section06.find('.swiper-container').each(function(){
         var self = $(this);
         new Swiper(self, {
             loop: true,
             speed: 800,
             slidesPerView: 3,
             spaceBetween: 20,
             grabCursor: true,
             breakpoints: {
                 1199.98: { slidesPerView: 3, spaceBetween: 20 },
                 991.98: { slidesPerView: 2, spaceBetween: 20 },
                 575.98: { slidesPerView: 1.4, spaceBetween: 20 },
             },
         });
     });
 }

 // Section 07
 var section07= $('.section-07');
 if(section07.length){
    section07.find('.swiper-container').each(function(){
         var self = $(this);
         new Swiper(self, {
             loop: true,
             speed: 800,
             slidesPerView: 2,
             spaceBetween: 20,
             grabCursor: true,
             navigation: {
                nextEl: self.find('.btn-icon-next'),
                prevEl: self.find('.btn-icon-prev'),
            },
            pagination: {
                el: self.find('.dots'),
                clickable: true,
            },
             breakpoints: {
                 1199.98: { slidesPerView: 3, spaceBetween: 20 },
                 991.98: { slidesPerView: 2, spaceBetween: 20 },
                 575.98: { slidesPerView: 1.4, spaceBetween: 20 },
             },
         });
     });
 }

 // Section 08
 var section08= $('.section-08');
 if(section08.length){
    section08.find('.swiper-container').each(function(){
         var self = $(this);
         new Swiper(self, {
             loop: true,
             speed: 800,
             slidesPerView: 1,
             spaceBetween: 20,
             grabCursor: true,
             navigation: {
                nextEl: self.find('.btn-icon-next'),
                prevEl: self.find('.btn-icon-prev'),
            },
            pagination: {
                el: self.find('.dots'),
                type: "fraction",
            },
             breakpoints: {
                 1199.98: { slidesPerView: 3, spaceBetween: 20 },
                 991.98: { slidesPerView: 2, spaceBetween: 20 },
                 575.98: { slidesPerView: 1.4, spaceBetween: 20 },
             },
         });
     });
 }

 // Section 08 (pagination style 02)
 var section08= $('.section-08');
 if(section08.length){
    section08.find('.swiper-container').each(function(){
         var self = $(this);
         new Swiper(self, {
             loop: true,
             speed: 800,
             slidesPerView: 1,
             spaceBetween: 20,
             grabCursor: true,
             pagination: {
                el: self.find('.dots-style-02'),
                clickable: true,
            },
         });
     });
 }