
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

    // Sidenav
    var sidenav = $('nav.sidenav'),
        sidenavToggle = $('nav .sidenav-toggle');
    sidenavToggle.click(function(e){
        e.preventDefault();
        if($('body').hasClass('sidenav-opened')){
            $('html, body').removeClass('sidenav-opened');
            sidenavToggle.find('> *').removeClass('active');
            sidenav.removeClass('active');
        }else{
            $('html, body').addClass('sidenav-opened');
            sidenavToggle.find('> *').addClass('active');
            sidenav.addClass('active');
        }
    });
    $('.sidenav-filter').click(function(e){
        e.preventDefault();
        $('html, body').removeClass('sidenav-opened');
        sidenavToggle.find('> *').removeClass('active');
        sidenav.removeClass('active');
    });

    // Global Search Container
    var globalSearchContainer = $('.global-search-container'),
        globalSearchToggles = $('.global-search-toggle');
    if(globalSearchContainer.length && globalSearchToggles.length){
        if(globalSearchContainer.hasClass('use-gsap')){
            var globalSearchTl =  new TimelineMax({paused: true})
                .from('.global-search-container .input-container', .45, {
                    opacity: 0, y: 30, ease: Power3.easeInOut
                }, '+=.6')
                .from('.global-search-container .btn-close', .45, {
                    opacity: 0, ease: Power3.easeInOut
                }, '-=.3')
                .reverse();
            $('.global-search-toggle').click(function(e){
                e.preventDefault();
                globalSearchTl.reversed( !globalSearchTl.reversed() );
                globalSearchContainer.toggleClass('active');
                if(globalSearchContainer.hasClass('active')){
                    globalSearchContainer.find('input[type=text]').focus();
                }
            });
        }else{
            globalSearchToggles.click(function(e){
                e.preventDefault();
                globalSearchToggles.toggleClass('active');
                globalSearchContainer.toggleClass('active');
                if(globalSearchContainer.hasClass('active')){
                    globalSearchContainer.find('input[type=text]').focus();
                    $('html, body').addClass('global-search-opened');
                }else{
                    $('html, body').removeClass('global-search-opened');
                }
            });
        }
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
                        AOS.refresh();
                        calculateSectionAnchors();
                    }, 600);
                    
                    if(swiperContainers.length){
                        swiperContainers.each(function(){
                            $(this)[0].swiper.update();
                        });
                    }
                }
            });
        });
    }


    // Toggle Contact
    $('.toggle-contact').click(function(e){
        e.preventDefault();
        $('.toggle-contact-section[data-contact="'+$(this).data('contact')+'"]')
            .slideToggle(600);
        setTimeout(function(){
            calculateSectionAnchors();
        }, 700);
    });


    // Hex Container
    var hexContainer = $('.hex-container');
    if(hexContainer.length){
        let pageX = 0,
            pageY = 0;
        window.addEventListener('mousemove', function(e){
            pageX = e.pageX;
            pageY = e.pageY;
        });
        hexContainer.find('.hex-flip').on('mouseenter', function(){
            let self = $(this);
            self.removeClass('from-top from-bottom from-left from-right');
            let o = self.offset(),
                w = self.width(),
                h = self.height();
            if(pageX-5 <= o.left) self.addClass('from-left');
            else if(pageX+5 >= o.left + w) self.addClass('from-right');
            else if(pageY-50 <= o.top) self.addClass('from-top');
            else if(pageY+50 >= o.top + h) self.addClass('from-bottom');
        });
        hexContainer.find('.hex-flip').on('mouseleave', function(){
            let self = $(this);
            self.removeClass('from-top from-bottom from-left from-right');
            let o = self.offset(),
                w = self.width(),
                h = self.height();
            if(pageX-5 <= o.left) self.addClass('from-left');
            else if(pageX+5 >= o.left + w) self.addClass('from-right');
            else if(pageY-50 <= o.top) self.addClass('from-top');
            else if(pageY+50 >= o.top + h) self.addClass('from-bottom');
        });
    }


    // Banner 02
    var banner02 = $('.banner-02');
    if(banner02.length){
        banner02.find('.swiper-container').each(function(){
            var self = $(this);
            new Swiper(self, {
                loop: true,
                speed: 900,
                slidesPerView: 1,
                spaceBetween: 0,
                grabCursor: true,
                navigation: {
                    nextEl: self.find('.arrow.arrow-next'),
                    prevEl: self.find('.arrow.arrow-prev'),
                },
            });
        });
    }

    
    // Section 02
    var section02= $('.section-02');
    if(section02.length){
        section02.find('.swiper-container').each(function(){
            var self = $(this);
            new Swiper(self, {
                loop: true,
                speed: 900,
                slidesPerView: 6,
                spaceBetween: 2,
                grabCursor: true,
                breakpoints: {
                    1299.98: { slidesPerView: 5 },
                    1199.98: { slidesPerView: 4 },
                    991.98: { slidesPerView: 3 },
                    767.98: { slidesPerView: 2 },
                    575.98: { slidesPerView: 1.5 },
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
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 12,
                grabCursor: true,
                breakpoints: {
                    1199.98: { slidesPerView: 3 },
                    991.98: { slidesPerView: 2 },
                    575.98: { slidesPerView: 1.5 },
                },
            });
        });
    }

    // Section 07
    var section07= $('.section-07');
    if(section07.length){
        section07.find('.content-container').each(function(){
            var self = $(this);
            new Swiper(self.find('.swiper-container'), {
                loop: true,
                speed: 900,
                slidesPerView: 2,
                spaceBetween: 0,
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
                    1199.98: { slidesPerView: 2 },
                    991.98: { slidesPerView: 2 },
                    575.98: { slidesPerView: 1 },
                },
            });
        });
    }

    // Section 08
    var section08 = $('.section-08');
    if(section08.length){
        section08.find('.content-container').each(function(){
            var self = $(this);
            let slideNum = self.find('.swiper-slide').length;
            let swiper08 = new Swiper(self.find('.swiper-container'), {
                loop: true,
                speed: 900,
                slidesPerView: 1,
                spaceBetween: 0,
                grabCursor: true,
                navigation: {
                    nextEl: self.find('.btn-icon-next'),
                    prevEl: self.find('.btn-icon-prev'),
                },
                pagination: {
                    el: self.find('.dots'),
                    clickable: true,
                },
            });
            self.find('.progress').html('1 / '+slideNum);
            swiper08.on('slideChange', function(){
                self.find('.progress').html(swiper08.activeIndex+' / '+slideNum);
            });
        });
    }

    // Section 13
    var section13 = $('.section-13');
    if(section13.length){
        section13.find('.swiper-container').each(function(){
            var self = $(this);
            new Swiper(self, {
                direction: 'vertical',
                loop: true,
                speed: 900,
                slidesPerView: 1,
                spaceBetween: 0,
                grabCursor: true,
                navigation: {
                    nextEl: self.find('.btn-icon-next'),
                    prevEl: self.find('.btn-icon-prev'),
                },
                pagination: {
                    el: self.find('.dots > .wrapper'),
                    clickable: true,
                },
            });
            self.find('.swiper-pagination-bullet').each(function(d){
                $(this).html(String(d+1).padStart(2, '0'));
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
                    processInit();
                }, 1700);
            }, 1100);
        }
    }else{
        processInit();
    }

    function processInit(){
        $('body').removeClass('loading');
        AOS.init({
            easing: 'ease-in-out-cubic', duration: 750, offset: 10,
            once: false, mirror: true
        });
        
        // Counter
        let counterUp = window.counterUp['default'];
        $('.counter').each(function(){
            let self = this;
            new Waypoint({
                element: self,
                handler: function(){ 
                counterUp(self, {
                    duration: 2000,
                    delay: 10,
                });
                this.destroy();
                },
                offset: 'bottom-in-view',
            });
        });
    }

});



// Section 10
var section10= $('.section-10');
if(section10.length){
    section10.find('.swiper-container').each(function(){
        var self = $(this);
        new Swiper(self, {
            loop: true,
            speed: 900,
            slidesPerView: 5,
            spaceBetween: -150,
            effect: 'coverflow', 
            coverflowEffect: {
                rotate: 40,
                stretch: 0,
                // depth: 0,
                modifier: 1,
                slideShadows : true
            },
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
                1199.98: { slidesPerView: 3 },
                991.98: { slidesPerView: 3 },
                575.98: { slidesPerView: 3 },
            },
        });
    });
}
