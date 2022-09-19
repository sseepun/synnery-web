
$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav');


    // Section Anchors
    var sectionAnchors = [];
    function calculateSectionAnchors(){
        sectionAnchors = [];
        $('section[data-section]').each(function(){
            sectionAnchors.push(Math.ceil($(this).offset().top));
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
                    
                    if(slideContainers.length){
                        slideContainers.each(function(){
                            $(this).find('.slides').slick('setPosition');
                        });
                    }
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
