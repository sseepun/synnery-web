
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
                if(parent.hasClass('active-dropdown')){
                    parent.removeClass('active-dropdown');
                    topnavDropdown.removeClass('active');
                    scopeDiv.removeClass('topnav-dropdown-opened');
                }else{
                    topnavMenu.removeClass('active-dropdown');
                    parent.addClass('active-dropdown');
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
                goTo = 0,
                st = Math.ceil($(window).scrollTop());
            for(let i=sectionAnchors.length-1; i>=0; i--){
                let d = sectionAnchors[i];
                if(ready && st > d){
                    ready = false;
                    goTo = d;
                }
            }
            $('html, body').stop().animate({ scrollTop: goTo }, 600, 'easeInOutCubic');
        });
        accessTabBtnDown.click(function(e){
            e.preventDefault();
            let ready = true,
                goTo = 0,
                st = Math.ceil($(window).scrollTop());
            for(let i=1; i<sectionAnchors.length; i++){
                let d = sectionAnchors[i];
                if(ready && st < d){
                    ready = false;
                    goTo = d;
                }
            }
            $('html, body').stop().animate({ scrollTop: goTo }, 600, 'easeInOutCubic');
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

    // Check on Resize
    var bodySize = 16;
    function checkOnResize(sw) {
        if(sw > 1400) bodySize = 16 + 2.5*Math.ceil((sw - 1400) / 200);
        else bodySize = 16;
        $('html, body').css('font-size', bodySize+'px');
    }
    checkOnResize( $(window).width() );
    $(window).resize(function(){
        calculateSectionAnchors();
        checkOnScroll( $(this).scrollTop() );
        checkOnResize( $(this).width() );
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

                    let anchor = $(this).data('anchor');
                    if(anchor){
                        let anchorTarget = $(anchor);
                        if(anchorTarget){
                            let offset = anchorTarget.offset();
                            $('html, body').stop().animate({
                                scrollTop: offset.top - bodySize * 3.5
                            }, 700, 'easeInOutCubic');
                        }
                    }
                }
            });
        });
    }


    // Toggle Contact
    $('.toggle-contact').click(function(e){
        e.preventDefault();
        let target = $('.toggle-contact-section[data-contact="'+$(this).data('contact')+'"]');
        if(target.length){
            target.toggleClass('expanded');
            target.slideToggle(600);
            if(target.hasClass('expanded')){
                let offset = target.offset();
                $('html, body').stop().animate({
                    scrollTop: offset.top - bodySize * 3.5
                }, 700);
            }
            setTimeout(function(){
                calculateSectionAnchors();
            }, 700);
        }
    });


    // Toggle Career
    $('.btn-job-slide').click(function(e){
        e.preventDefault();
        var idx = $(this).data('idx');
        $('.toggle-career-section').not(idx+' .toggle-career-section').slideUp(600);
        $(idx).find('.toggle-career-section').slideToggle(600);
        // let offset = $(idx).find('.toggle-career-section').offset();
        // $('html, body').stop().animate({
        //     scrollTop: offset.top - bodySize * 3.5
        // }, 700);
        let offset = $(idx).find('.toggle-career-section').offset();
        setTimeout(function(){
            calculateSectionAnchors();
        }, 700);
        // let target = $('.toggle-career-section[data-career="'+$(this).data('idx')+'"]');

        // if(target.length){
        //     target.toggleClass('expanded');
        //     target.slideToggle(600);
        //     if(target.hasClass('expanded')){
        //         let offset = target.offset();
        //         $('html, body').stop().animate({
        //             scrollTop: offset.top - bodySize * 3.5
        //         }, 700);
        //     }
        //     setTimeout(function(){
        //         calculateSectionAnchors();
        //     }, 700);
        // }
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


    // Button Bubble
    $('.btn-bubble').each(function(){
        let $circlesTopLeft = $(this).parent().find('.circle.top-left');
        let $circlesBottomRight = $(this).parent().find('.circle.bottom-right');
      
        let tl = new TimelineLite();
        let tl2 = new TimelineLite();
      
        let btTl = new TimelineLite({ paused: true });
      
        tl.to($circlesTopLeft, 1.2, { x: -25, y: -25, scaleY: 2, ease: SlowMo.ease.config(0.1, 0.7, false) });
        tl.to($circlesTopLeft.eq(0), 0.1, { scale: 0.2, x: '+=6', y: '-=2' });
        tl.to($circlesTopLeft.eq(1), 0.1, { scaleX: 1, scaleY: 0.8, x: '-=10', y: '-=7' }, '-=0.1');
        tl.to($circlesTopLeft.eq(2), 0.1, { scale: 0.2, x: '-=15', y: '+=6' }, '-=0.1');
        tl.to($circlesTopLeft.eq(0), 1, { scale: 0, x: '-=5', y: '-=15', opacity: 0 });
        tl.to($circlesTopLeft.eq(1), 1, { scaleX: 0.4, scaleY: 0.4, x: '-=10', y: '-=10', opacity: 0 }, '-=1');
        tl.to($circlesTopLeft.eq(2), 1, { scale: 0, x: '-=15', y: '+=5', opacity: 0 }, '-=1');
      
        let tlBt1 = new TimelineLite();
        let tlBt2 = new TimelineLite();
        
        tlBt1.set($circlesTopLeft, { x: 0, y: 0, rotation: -45 });
        tlBt1.add(tl);
      
        tl2.set($circlesBottomRight, { x: 0, y: 0 });
        tl2.to($circlesBottomRight, 1.1, { x: 30, y: 30, ease: SlowMo.ease.config(0.1, 0.7, false) });
        tl2.to($circlesBottomRight.eq(0), 0.1, { scale: 0.2, x: '-=6', y: '+=3' });
        tl2.to($circlesBottomRight.eq(1), 0.1, { scale: 0.8, x: '+=7', y: '+=3' }, '-=0.1');
        tl2.to($circlesBottomRight.eq(2), 0.1, { scale: 0.2, x: '+=15', y: '-=6' }, '-=0.2');
        tl2.to($circlesBottomRight.eq(0), 1, { scale: 0, x: '+=5', y: '+=15', opacity: 0 });
        tl2.to($circlesBottomRight.eq(1), 1, { scale: 0.4, x: '+=7', y: '+=7', opacity: 0 }, '-=1');
        tl2.to($circlesBottomRight.eq(2), 1, { scale: 0, x: '+=15', y: '-=5', opacity: 0 }, '-=1');
        
        tlBt2.set($circlesBottomRight, { x: 0, y: 0, rotation: 45 });
        tlBt2.add(tl2);
      
        btTl.add(tlBt1);
        btTl.to($(this).parent().find('.button.effect-button'), 0.8, { scaleY: 1.1 }, 0.1);
        btTl.add(tlBt2, 0.2);
        btTl.to($(this).parent().find('.button.effect-button'), 1.8, { scale: 1, ease: Elastic.easeOut.config(1.2, 0.4) }, 1.2);
      
        btTl.timeScale(2.6);
      
        $(this).on('mouseover', function(){
            btTl.restart();
        });
    });


    // Pattern Movement
    document.addEventListener("mousemove", parallax);
    function parallax(event) {
        this.querySelectorAll(".pattern .wrapper").forEach((shift) => {
            const position = shift.getAttribute("value");
            const x = (window.innerWidth - event.pageX * position) / 90;
            const y = (window.innerHeight - event.pageY * position) / 90;
            shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
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
    
    // Section career
    var sectionCareer= $('.section-career');
    let swiperCareer;
    if(sectionCareer.length){
        sectionCareer.find('.swiper-container').each(function(){
            var self = $(this);
            let slideNum = self.find('.swiper-slide').length;
            swiperCareer = new Swiper(self, {
                loop: true,
                speed: 900,
                slidesPerView: 1,
                spaceBetween: 12,
                grabCursor: true,
                autoHeight: true,
                navigation: {
                    nextEl: sectionCareer.find('.btn-icon-next'),
                    prevEl: sectionCareer.find('.btn-icon-prev'),
                },
                pagination: {
                    el: self.find('.dots'),
                    clickable: true,
                },
            });
            self.find('.progress').html('1 / '+slideNum);
            swiperCareer.on('slideChange', function(){
                self.find('.progress').html(swiperCareer.activeIndex+' / '+slideNum);
                AOS.refresh();
                calculateSectionAnchors();
            });
        });
        // $('.btn-job-slide').click(function(){
        //     console.log($(this).attr('data-idx'))
        //     swiperCareer.slideTo($(this).attr('data-idx'), 0)
        // });
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

    // Section 10
    var section10= $('.section-10');
    if(section10.length){
        section10.find('.swiper-container').each(function(){
            var self = $(this);
            var swiper10 = new Swiper(self, {
                loop: true,
                speed: 900,
                slidesPerView: 5,
                spaceBetween: -150,
                slideToClickedSlide: true,
                centeredSlides: true,
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

            let blockClick10 = false;
            swiper10.on('beforeTransitionStart', function(s){
                blockClick10 = true;
            });
            self.find('.img-bg').click(function(){
                if(blockClick10) blockClick10 = false;
                else{
                    let t = $(this),
                        parent = t.closest('.swiper-slide');
                    if(parent && parent.hasClass('swiper-slide-active')){
                        let href = t.data('href');
                        if(href) window.location = href;
                    }
                }
            });
        });
    }

    // Section 12
    var section12= $('.section-12');
    if(section12.length){
        section12.find('.content-container').each(function(){
            var self = $(this);
            new Swiper(self.find('.swiper-container'), {
                loop: true,
                speed: 900,
                slidesPerView: 1,
                spaceBetween: 0,
                grabCursor: true,
                navigation: {
                    nextEl: self.find('.arrow-prev'),
                    prevEl: self.find('.arrow-next'),
                },
            });
        });
    }

    // Section 13
    var section13 = $('.section-13');
    if(section13.length){
        section13.find('.swiper-container').each(function(){
            var self = $(this);
            self.css('--slide-pp', 1);
            self.attr('data-pp', 1);
            self.css('--slide-max', self.find('.swiper-slide').length);
            self.attr('data-max', self.find('.swiper-slide').length);

            let swiper13 = new Swiper(self, {
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
                    el: self.find('.dots .wrapper'),
                    clickable: true,
                    renderBullet: function (index, className) {
                        return `<span class="swiper-pagination-bullet">
                                ${String(index+1).padStart(2, '0')}
                            </span>`;
                    }
                },
            });

            let dotsWrapper = self.find('.dots .wrapper');
            swiper13.on('slideChange', function(){
                dotsWrapper.css('--slide', swiper13.activeIndex);
            });
            let expanded = false;
          
            self.find('.btn-slide-more').click(function(e){
                e.preventDefault();
                let dataMax = Number(self.data('max'));
                let arrows = document.getElementById("arrows");
                let text = document.getElementById("text");
                let text02 = document.getElementById("text02");
                if(!expanded){
                    expanded = true;
                    self.addClass('show-all');
                    self.attr('data-pp', dataMax);
                    self.css('--slide-pp', dataMax);
                    swiper13.params.allowSwipeToNext = false;
                    swiper13.params.allowSwipeToPrev = false;
                    arrows.style.transform = "rotateX(180deg)";
                    text.style.display = "block";
                    text02.style.display = "none";
                }else{
                    expanded = false;
                    self.removeClass('show-all');
                    self.attr('data-pp', 1);
                    self.css('--slide-pp', 1);
                    swiper13.params.allowSwipeToNext = true;
                    swiper13.params.allowSwipeToPrev = true;
                    text.style.display = "none";
                    text02.style.display = "block";
                    arrows.style.transform = "rotateX(0deg)";
                    location.href = "#webShowcase";
                }
                swiper13.params.speed = 0;
                swiper13.slideTo(1);
                setTimeout(function(){
                    AOS.refresh();
                    calculateSectionAnchors();
                    swiper13.params.speed = 900;
                }, 500);
            });
        });
    }


    // Button to Div
    $('.btn-to-div').click(function(e){
        e.preventDefault();
        let target = $($(this).data('target'));
        if(target.length){
            let offset = target.offset();
            $('html, body').stop().animate({
                scrollTop: offset.top - bodySize * 3.5
            }, 700);
        }
    });


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
