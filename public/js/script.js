
$(function () {
    'use strict';

    // Scope
    var scopeDiv = $('html, body');

    // cookie 
    var cc = initCookieConsent();
    cc.run({
        current_lang: 'th',
        autoclear_cookies: true,
        page_scripts: true,
        gui_options: {
            consent_modal: {
                layout: 'cloud', // box/cloud/bar
                position: 'bottom center', // bottom/middle/top + left/right/center
                transition: 'slide', // zoom/slide
                swap_buttons: false // enable to invert buttons
            },
            settings_modal: {
                layout: 'bar', // box/bar
                // position: 'left', // left/right
                transition: 'slide', // zoom/slide
            }

        },
        languages: {
            th: {
                consent_modal: {
                    title: "เว็บไซต์นี้ใช้คุกกี้",
                    description: 'บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด ขออนุญาตใช้คุกกี้เพื่อสร้างประสบการณ์นำเสนอเนื้อหาที่ดีให้กับท่าน ทั้งนี้ ท่านมั่นใจได้ว่าเราจะดูแลและรักษาความปลอดภัยข้อมูลของท่านเป็นอย่างดี ท่านสามารถเลือกตั้งค่าความยินยอมการใช้คุกกี้ได้ โดยคลิก "การตั้งค่าคุกกี้" <a aria-label="Cookie policy" class="cc-link" href="/privacy-policy">นโยบายความเป็นส่วนตัว</a>',
                    primary_btn: { text: 'ยอมรับทั้งหมด', role: 'accept_all' },
                    secondary_btn: { text: 'การตั้งค่าคุกกี้', role: 'settings' }
                },
                settings_modal: {
                    title: 'การตั้งค่าความเป็นส่วนตัว',
                    save_settings_btn: "ยืนยันตัวเลือกของฉัน",
                    accept_all_btn: "ยอมรับทั้งหมด",
                    cookie_table_headers: [
                        { col1: "Name" },
                        { col2: "Domain" },
                        { col3: "Expiration" },
                        { col4: "Description" },
                        { col5: "Type" }
                    ],
                    blocks: [
                        {
                            title: "จัดการการกำหนดลักษณะความยินยอม",
                            description: ''
                        }, 
                        {
                            title: "คุกกี้พื้นฐานที่จำเป็น",
                            description: 'คุกกี้พื้นฐานที่จำเป็น เพื่อช่วยให้การทำงานหลักของเว็บไซต์ใช้งานได้ รวมถึงการเข้าถึงพื้นที่ที่ปลอดภัยต่าง ๆ ของเว็บไซต์ หากไม่มีคุกกี้นี้เว็บไซต์จะไม่สามารถทำงานได้อย่างเหมาะสม และจะใช้งานได้โดยการตั้งค่าเริ่มต้น โดยไม่สามารถปิดการใช้งานได้',
                            toggle: {
                                value: 'necessary',
                                enabled: true,
                                readonly: true
                            }
                        }, 
                        {
                            title: "คุกกี้ในส่วนวิเคราะห์",
                            description: 'คุกกี้ในส่วนวิเคราะห์ จะช่วยให้เว็บไซต์เข้าใจรูปแบบการใช้งานของผู้เข้าชมและจะช่วยปรับปรุงประสบการณ์การใช้งาน โดยการเก็บรวบรวมข้อมูลและรายงานผลการใช้งานของผู้ใช้งาน ',
                            toggle: {
                                value: 'analytics', // your cookie category
                                enabled: true,
                                readonly: false
                            },
                        }
                    ]
                }
            },
            en: {
                consent_modal: {
                    title: "This site uses cookies",
                    description: 'We use cookies to ensure this site\'s proper operation and, if you approve, tracking cookies to understand how you interact with it. If you wish to opt-out from the use of cookies please see our <a aria-label="Cookie policy" class="cc-link" href="/privacy-policy">Cookies Policy.</a>',
                    primary_btn: { text: 'Accept', role: 'accept_all' },
                    secondary_btn: { text: 'Settings...', role: 'settings' }
                },
                settings_modal: {
                    title: 'Cookie options',
                    save_settings_btn: "Save settings",
                    accept_all_btn: "Accept all",
                    reject_all_btn: "Reject all",
                    cookie_table_headers: [
                        { col1: "Name" },
                        { col2: "Domain" },
                        { col3: "Expiration" },
                        { col4: "Description" },
                        { col5: "Type" }
                    ],
                    blocks: [
                        {
                            title: "Cookie usage",
                            description: 'We use cookies to ensure the basic functionality of the website and to enhance your online experience. You can opt-in/out of receiving non-essential cookies.'
                        }, 
                        {
                            title: "Strictly necessary cookies",
                            description: 'These cookies are essential for the proper functioning of my website. Without these cookies, the website would not work properly.',
                            toggle: {
                                value: 'necessary',
                                enabled: true,
                                readonly: true
                            }
                        }, 
                        {
                            title: 'Performance and Analytics cookies',
                            description: 'These cookies allow the website to remember the choices you have made in the past',
                            toggle: {
                                value: 'analytics',  // your cookie category
                                enabled: false,
                                readonly: false
                            },
                        }
                    ]
                }
            }
        }
    });

    // revolution
    var revapi = jQuery('#rev_slider_1').show().revolution({
        delay: 6000,
        responsiveLevels: [1400, 1200, 768, 576],
        gridwidth: [1220, 920, 700, 380],
        gridheight: [720, 600, 500, 592],
        jsFileLocation: "js/",
        sliderLayout: "auto",
        // minHeight: screen_height,
        // minHeight: [780, 650, 440, 650],
        navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
            arrows: {
                style: "custom",
                enable: true,
                hide_onmobile: true,
                hide_under: 700,
                hide_onleave: false,
                tmp: '',
                left: {
                    h_align: "left",
                    v_align: "center",
                    h_offset: 150,
                    v_offset: 0
                },
                right: {
                    h_align: "right",
                    v_align: "center",
                    h_offset: 150,
                    v_offset: 0
                }
            },
            bullets: {
                enable: false
            }
        },
    });

    var $slider = $('.rev_slider');

    function rszSlider() {
        var winndowsWidth = $(document).width();
        var winndowsHeight = $(document).height();
        var winndowsWidth = window.innerWidth;
        var winndowsHeight = window.innerHeight;
        var slideHeight = 0;
        if (winndowsWidth > 1400) {
            slideHeight = winndowsHeight;
        }
        else if(winndowsWidth > 767 && winndowsWidth < 1401) {
            slideHeight = winndowsHeight / 2;
        }
        else if (winndowsWidth < 768) {
            slideHeight = 592;
        }
        $('.rev_slider').height(slideHeight);
        // $('.rev_slider').css({ 'height': slideHeight+'px !important;' }); // ตั้งค่าความสูงของ Slider
        revapi.revredraw(); // ใช้คำสั่ง revredraw เพื่อปรับ Slider ให้ตรงกับขนาดหน้าจอใหม่
        $('.rev_slider').css({ 'height': slideHeight+'px !important;' }); // ตั้งค่าความสูงของ Slider
        // revapi.parent().css({ 'height': slideHeight }); // ตั้งค่าความสูงของ Slider
    }
    rszSlider(); // เรียกใช้ฟังก์ชัน rszSlider ครั้งแรกเมื่อโหลดเว็บไซต์
    
    $(window).on('resize', function(){
        rszSlider(); // เรียกใช้ฟังก์ชัน rszSlider เมื่อขนาดหน้าจอเปลี่ยนแปลง
    });


    // Topnav
    var topnav = $('nav.topnav'),
        topnavMenuContainer = topnav.find('.menu-container'),
        topnavMenu = topnav.find('.menu-container > .menu'),
        topnavMenuNotsub = topnav.find('.menu-container > .menu:not(.menu.sub-menu)'),
        topnavSubMenu = topnav.find('.menu-container > .menu.sub-menu'),
        topnavDropdown = topnav.find('.topnav-dropdown'),
        topnavDropdownDivs = topnavDropdown.find('.dropdown-wrapper');
    var sidenav = $('nav.sidenav'),
        sidenavMenus = sidenav.find('.menu-container');
    if(topnav.length){
        topnavMenu.mouseenter(function(e){
            let self = $(this);
            if(!self.hasClass('active')){
                let lastIndex = topnavMenu.filter('.menu-active').index();
                let nowIndex = self.index();
                if(nowIndex > lastIndex){
                    topnavMenuContainer.removeClass('from-left');
                   topnavMenuContainer.addClass('from-right');
                }else{
                    topnavMenuContainer.removeClass('from-right');
                    topnavMenuContainer.addClass('from-left');
                }
            }
            topnavMenu.removeClass('menu-active');
            self.addClass('menu-active');
        })
        topnavMenu.find('> *:first-child').mouseenter(function (e) {
            let parent = $(this).parent(),
                dIndex = parent.data('dropdown');
            if (dIndex) {
                e.preventDefault();
                if (parent.hasClass('active-dropdown')) {
                    parent.removeClass('active-dropdown');
                    topnavDropdown.removeClass('active');
                    scopeDiv.removeClass('topnav-dropdown-opened');
                } else {
                    topnavMenu.removeClass('active-dropdown');
                    parent.addClass('active-dropdown');
                    topnavDropdown.addClass('active');
                    scopeDiv.addClass('topnav-dropdown-opened');

                    let prevActive = topnavDropdownDivs.filter('.active'),
                        nextActive = topnavDropdownDivs.filter('[data-dropdown="' + dIndex + '"]');
                    if (nextActive.length && !nextActive.hasClass('active')) {
                        if (prevActive.length) {
                            prevActive.addClass('fade-out');
                            nextActive.addClass('fade-in');
                            setTimeout(function () {
                                prevActive.removeClass('fade-in fade-out active');
                                nextActive.addClass('active');
                                nextActive.removeClass('fade-in fade-out');
                            }, 600);
                        } else {
                            nextActive.addClass('active');
                            nextActive.removeClass('fade-in fade-out');
                        }
                    }
                }
            }
        
            topnavMenuNotsub.mouseenter(function(){
                if (topnavDropdown.hasClass('active')) {
                    topnavSubMenu.removeClass('active-dropdown');
                    topnavDropdown.removeClass('active');
                }
            });
            topnavSubMenu.mouseenter(function(){
                if (topnavDropdown.hasClass('active')) {
                    topnavDropdown.removeClass('active');
                    setTimeout(function(){
                        topnavDropdown.addClass('active');
                    }, 980);
                }
            });
        });
    
        topnav.find('.dropdown-filter').mouseenter(function (e) {
            e.preventDefault();
            topnavMenu.removeClass('active');
            topnavDropdown.removeClass('active');
            topnavSubMenu.removeClass('active-dropdown');
            scopeDiv.removeClass('topnav-dropdown-opened');
        });
        sidenavMenus.find('.has-children').each(function(){
            $(this).append('<div class="dropdown-toggle"><em class="fas fa-chevron-right"></em></div>');
        });
        sidenavMenus.find('.dropdown-toggle').click(function(e){
            e.preventDefault();
            var self = $(this);
            self.toggleClass('active');
            self.prev().slideToggle();
        });
    }

    // Sidenav
    var sidenav = $('nav.sidenav'),
        sidenavToggle = $('nav .sidenav-toggle');
    sidenavToggle.click(function (e) {
        e.preventDefault();
        if ($('body').hasClass('sidenav-opened')) {
            $('html, body').removeClass('sidenav-opened');
            sidenavToggle.find('> *').removeClass('active');
            sidenav.removeClass('active');
        } else {
            $('html, body').addClass('sidenav-opened');
            sidenavToggle.find('> *').addClass('active');
            sidenav.addClass('active');
        }
    });
    $('.sidenav-filter').click(function (e) {
        e.preventDefault();
        $('html, body').removeClass('sidenav-opened');
        sidenavToggle.find('> *').removeClass('active');
        sidenav.removeClass('active');
    });

    // Global Search Container
    var globalSearchContainer = $('.global-search-container'),
        globalSearchToggles = $('.global-search-toggle');
    if (globalSearchContainer.length && globalSearchToggles.length) {
        if (globalSearchContainer.hasClass('use-gsap')) {
            var globalSearchTl = new TimelineMax({ paused: true })
                .from('.global-search-container .input-container', .45, {
                    opacity: 0, y: 30, ease: Power3.easeInOut
                }, '+=.6')
                .from('.global-search-container .btn-close', .45, {
                    opacity: 0, ease: Power3.easeInOut
                }, '-=.3')
                .reverse();
            $('.global-search-toggle').click(function (e) {
                e.preventDefault();
                globalSearchTl.reversed(!globalSearchTl.reversed());
                globalSearchContainer.toggleClass('active');
                if (globalSearchContainer.hasClass('active')) {
                    globalSearchContainer.find('input[type=text]').focus();
                }
            });
        } else {
            globalSearchToggles.click(function (e) {
                e.preventDefault();
                globalSearchToggles.toggleClass('active');
                globalSearchContainer.toggleClass('active');
                if (globalSearchContainer.hasClass('active')) {
                    globalSearchContainer.find('input[type=text]').focus();
                    $('html, body').addClass('global-search-opened');
                } else {
                    $('html, body').removeClass('global-search-opened');
                }
            });
        }
    }


    // Section Anchors
    var sectionAnchors = [];
    function calculateSectionAnchors() {
        let offset = 0;
        sectionAnchors = [];
        $('section[data-section]').each(function (d, i) {
            let top = Math.ceil($(this).offset().top);
            if (i == 0) offset = top;
            sectionAnchors.push(top - offset);
        });
    }
    calculateSectionAnchors();

    // Accessibility
    var accessTab = $('nav.accessibility'),
        accessTabBtnUp = accessTab.find('.btn-up'),
        accessTabBtnDown = accessTab.find('.btn-down');
    if (accessTab.length) {
        accessTab.find('.btn-a-toggle').click(function (e) {
            e.preventDefault();
            if (accessTab.hasClass('active')) {
                accessTab.removeClass('active');
                accessTab.find('.toggle-wrapper').slideUp();
            } else {
                accessTab.addClass('active');
                accessTab.find('.toggle-wrapper').slideDown();
            }
        });
        accessTabBtnUp.click(function (e) {
            e.preventDefault();
            let ready = true,
                goTo = 0,
                st = Math.ceil($(window).scrollTop());
            for (let i = sectionAnchors.length - 1; i >= 0; i--) {
                let d = sectionAnchors[i];
                if (ready && st > d) {
                    ready = false;
                    goTo = d;
                }
            }
            $('html, body').stop().animate({ scrollTop: goTo }, 600, 'easeInOutCubic');
        });
        accessTabBtnDown.click(function (e) {
            e.preventDefault();
            let ready = true,
                goTo = 0,
                st = Math.ceil($(window).scrollTop());
            for (let i = 1; i < sectionAnchors.length; i++) {
                let d = sectionAnchors[i];
                if (ready && st < d) {
                    ready = false;
                    goTo = d;
                }
            }
            $('html, body').stop().animate({ scrollTop: goTo }, 600, 'easeInOutCubic');
        });
    }


    // Check on Scroll
    function checkOnScroll(st) {
        if (st > 160) {
            topnav.addClass('sticky');
        } else {
            topnav.removeClass('sticky');
        }

        let saLen = sectionAnchors.length;
        if (saLen) {
            if (st <= sectionAnchors[0] + 1) accessTabBtnUp.addClass('inactive');
            else accessTabBtnUp.removeClass('inactive');
            if (st >= sectionAnchors[saLen - 1] - 1) accessTabBtnDown.addClass('inactive');
            else accessTabBtnDown.removeClass('inactive');
        } else {
            accessTabBtnUp.addClass('inactive');
            accessTabBtnDown.addClass('inactive');
        }
    }
    checkOnScroll($(window).scrollTop());
    $(window).scroll(function () {
        checkOnScroll($(this).scrollTop());
    });

    // Check on Resize
    var bodySize = 16;
    function checkOnResize(sw) {
        if (sw > 1400) bodySize = 16 + 2.5 * Math.ceil((sw - 1400) / 200);
        else bodySize = 16;
        $('html, body').css('font-size', bodySize + 'px');
    }
    checkOnResize($(window).width());
    $(window).resize(function () {
        calculateSectionAnchors();
        checkOnScroll($(this).scrollTop());
        checkOnResize($(this).width());
    });


    // Tab Container 01
    var tabContainers01 = $('.tab-container');
    if(tabContainers01.length) {
        tabContainers01.each(function () {
            var self = $(this),
                tabs = self.find('.tabs .tab'),
                tabContents = self.find('.tab-contents > .tab-content'),
                subMenus = self.find('.tabs .submenu-dropdown .menu'),
                subContents = self.find('.sub-contents > .sub-content');
            tabs.click(function (e) {
                var target = tabContents.filter('[data-tab="' + $(this).data('tab') + '"]'),
                    oldTargets = tabContents.filter('.active'),
                    swiperContainers = target.find('.swiper-container');
                if(target.length) {
                    e.preventDefault();
                    subMenus.removeClass('active');
                    subContents.removeClass('active');
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

                    if (swiperContainers.length) {
                        swiperContainers.each(function () {
                            $(this)[0].swiper.update();
                        });
                    }

                    let anchor = $(this).data('anchor');
                    if (anchor) {
                        let anchorTarget = $(anchor);
                        if (anchorTarget) {
                            let offset = anchorTarget.offset();
                            $('html, body').stop().animate({
                                scrollTop: offset.top - bodySize * 3.5
                            }, 700, 'easeInOutCubic');
                        }
                    }
                }
            });
            subMenus.click(function (e) {
                var subTarget = subContents.filter('[data-tab="' + $(this).data('tab') + '"]'),
                suboldTargets = subContents.filter('.active');
                if(subTarget.length) {
                    e.preventDefault();
                    tabs.removeClass('active');
                    tabContents.removeClass('active');
                    subMenus.removeClass('active');
                    $(this).addClass('active');

                    subContents.removeClass('fade-in');
                    suboldTargets.addClass('fade-out');
                    subTarget.addClass('fade-in');
                    setTimeout(function(){
                        subContents.removeClass('fade-in fade-out active');
                        subTarget.addClass('active');
                        AOS.refresh();
                    }, 600);
                }
            });
        });
    }

    // Main Tab Container 
    var mainTabTimer;
    var mainTabContainers = $('.main-tabs-container');
    if(mainTabContainers.length){
        let _tabLinks = mainTabContainers.find('.tab-wrapper .tab-link');
        let _tabContents = mainTabContainers.find('.main-tab-content');
        let _subTabContent = mainTabContainers.find('.sub-tab-container');
        let _subTabs = mainTabContainers.find('.sub-tab-container > .tabs > .tab');

        _subTabs.mouseenter(function(){
            let self = $(this);
            if(!self.hasClass('active')){
                let lastIndex = _subTabs.filter('.menu-active').index();
                let nowIndex = self.index();
                if(nowIndex > lastIndex){
                    _subTabContent.removeClass('from-left');
                    _subTabContent.addClass('from-right');
                }else{
                    _subTabContent.removeClass('from-right');
                    _subTabContent.addClass('from-left');
                }
                _subTabs.removeClass('menu-active');
                !self.addClass('menu-active');
            }
        })
   
        _tabLinks.mouseenter(function(e){
            let self = $(this);
            if(!self.hasClass('active')){
                let lastIndex = _tabLinks.filter('.active').index();
                let nowIndex = self.index();
                if(nowIndex > lastIndex){
                    mainTabContainers.removeClass('from-left');
                    mainTabContainers.addClass('from-right');
                }else{
                    mainTabContainers.removeClass('from-right');
                    mainTabContainers.addClass('from-left');
                }

                let dataTab = self.data('maintab');
                _tabLinks.removeClass('active');
                self.addClass('active');

                let target = _tabContents.filter('[data-maintab="'+dataTab+'"]');
                if(target.length){
                    if(mainTabTimer){
                        clearTimeout(mainTabTimer);
                        _tabContents.removeClass('previous');
                    }
                    mainTabTimer = setTimeout(function(){
                        _tabContents.removeClass('previous');
                    }, 600);
                    _tabContents.filter('.active').addClass('previous');

                    _tabContents.removeClass('active');
                    target.removeClass('previous');
                    target.addClass('active');
                    AOS.refresh();
                }
            }
        });

        _tabLinks.click(function(e){
            let anchor = $(this).data('anchor');
                if (anchor) {
                    let anchorTarget = $(anchor);
                    if (anchorTarget) {
                        let offset = anchorTarget.offset();
                        $('html, body').stop().animate({
                            scrollTop: offset.top - bodySize * 4.1
                        }, 700, 'easeInOutCubic');
                    }
                }
                calculateSectionAnchors();
        })

        _tabContents.each(function(){
            let self = $(this);
            let _subTabs = self.find('> .sub-tab-container > .tabs > .tab');
            let _subContents = self.find('> .sub-tab-container > .tab-contents > .tab-content');
            _subTabs.mouseenter(function(){
                let _s = $(this);
                let _d = _s.data('tab');
                if(!_s.hasClass('active')){
                    _subTabs.removeClass('active');
                    _s.addClass('active');

                    let _target = _subContents.filter('[data-tab="'+_d+'"]');
                    if(_target.length){
                        _subContents.removeClass('active');
                        _subContents.each(function(){
                            $(this)[0].style.display = 'none';
                        });
                        _target[0].style.display = 'block';
                        _target.addClass('fade-in');
                        setTimeout(function(){
                            _subContents.removeClass('fade-in fade-out active');
                            _target.addClass('active');
                            AOS.refresh();
                        }, 400);
                    }
                }
            })
        })

        
    }


    // Parallax Pattern
    $("body").on("mousemove", function(event){
        $(".pattern .wrapper").each(function () {
          var position = $(this).attr("value");
          var x = (window.innerWidth - event.pageX * position) / 90;
          var y = (window.innerHeight - event.pageY * position) / 90;
          $(this).css("transform", "translateX(" + x + "px) translateY(" + y + "px)");
        });
    });


     // Tab Container 01
     var showCaseTabContainers = $('.showcases-tab-container');
     if(showCaseTabContainers.length) {
        showCaseTabContainers.each(function () {
             var self = $(this),
                 tabs = self.find('.tabs .tab'),
                 tabContents = self.find('.tab-contents > .tab-content');
             tabs.click(function (e) {
                 let target = tabContents.filter('[data-tab="' + $(this).data('tab') + '"]'),
                     oldTargets = tabContents.filter('.active');
                 if(target.length) {
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

                     let anchor = $(this).data('anchor');
                        if (anchor) {
                        let anchorTarget = $(anchor);
                        if (anchorTarget) {
                            let offset = anchorTarget.offset();
                            $('html, body').stop().animate({
                                scrollTop: offset.top - bodySize * 3.7
                            }, 700, 'easeInOutCubic');
                        }
                    }
                 }
             });
         });
     }


    // Sub Tab container 
    var subTabContainers = $('.sub-tab-container');
    if(subTabContainers.length){
        subTabContainers.each(function(){
            var self = $(this),
                tabs = self.find('.tabs .tab'),
                tabContents = self.find('.tab-contents > .tab-content');
            tabs.click(function(e){
                var target = tabContents.filter('[data-tab="'+$(this).data('tab')+'"]'),
                    oldTargets = tabContents.filter('.active');
                if($(this).hasClass('active')) e.preventDefault();
                if(target.length && !$(this).hasClass('active')){
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
                    }, 600);
                }
            });
        });
    }


    // Menu Tab container 
    var menuTabContainers = $('.submenu-blocks');
    if(menuTabContainers.length){
        menuTabContainers.each(function(){
            var self = $(this),
                tabs = self.find('.submenu'),
                tabContents = self.find('.menu-content');
              
            tabs.mouseover(function(e){
                var target = tabs.filter('[data-tab="'+$(this).data('tab')+'"]');
                var tabContentFilter = tabContents.filter('[data-tab="'+$(this).data('tab')+'"]'),
                    oldTargets = tabContents.filter('.active');
                if($(this).hasClass('active')) e.preventDefault();
                if(target.length && !$(this).hasClass('active')){
                    e.preventDefault();
                    tabs.removeClass('active');
                    tabContents.removeClass('active');
                    $(this).addClass('active');

                    tabContents.removeClass('fade-in');
                    oldTargets.addClass('fade-out');
                    tabContentFilter.addClass('fade-in');
                    // target.addClass('fade-in');
                    // target.addClass('active');
                  
                    setTimeout(function(){
                        tabContents.removeClass('fade-in fade-out active');
                        tabContentFilter.addClass('active');
                        AOS.refresh();
                    }, 600);
                }
            });
        });
    }


    // Toggle Contact
    $('.toggle-contact').click(function (e) {
        e.preventDefault();
        let target = $('.toggle-contact-section[data-contact="' + $(this).data('contact') + '"]');
        if (target.length) {
            target.toggleClass('expanded');
            target.slideToggle(600);
            if (target.hasClass('expanded')) {
                let offset = target.offset();
                $('html, body').stop().animate({
                    scrollTop: offset.top - bodySize * 3.5
                }, 700);
            }
            setTimeout(function () {
                calculateSectionAnchors();
                AOS.refresh();
            }, 700);
        }
    });


    // Toggle Career
    $('.btn-job-slide').click(function (e) {
        e.preventDefault();
        var idx = $(this).data('idx');
        $('.toggle-career-section').not(idx + ' .toggle-career-section').slideUp(600);
        $(idx).find('.toggle-career-section').slideToggle(600);
        // let offset = $(idx).find('.toggle-career-section').offset();
        // $('html, body').stop().animate({
        //     scrollTop: offset.top - bodySize * 3.5
        // }, 700);
        let offset = $(idx).find('.toggle-career-section').offset();
        setTimeout(function () {
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
        let hexFlips = hexContainer.find('.hex-flip');
        let pageX = 0,
            pageY = 0;
        window.addEventListener('mousemove', function (e) {
            pageX = e.pageX;
            pageY = e.pageY;
        });
        hexFlips.on('mouseenter', function () {
            let self = $(this);
            let o = self.offset(),
                w = self.width(),
                h = self.height();
            if (pageX - 5 <= o.left) {
                self.removeClass('from-top from-bottom from-right');
                self.addClass('from-left');
            } else if (pageX + 5 >= o.left + w) {
                self.removeClass('from-top from-bottom from-left');
                self.addClass('from-right');
            } else if (pageY - 50 <= o.top) {
                self.removeClass('from-bottom from-left from-right');
                self.addClass('from-top');
            } else if (pageY + 50 >= o.top + h) {
                self.removeClass('from-top from-left from-right');
                self.addClass('from-bottom');
            }
        });
        hexFlips.on('mouseleave', function () {
            let self = $(this);
            let o = self.offset(),
                w = self.width(),
                h = self.height();
            if (pageX - 5 <= o.left) {
                self.removeClass('from-top from-bottom from-right');
                self.addClass('from-left');
            } else if (pageX + 5 >= o.left + w) {
                self.removeClass('from-top from-bottom from-left');
                self.addClass('from-right');
            } else if (pageY - 50 <= o.top) {
                self.removeClass('from-bottom from-left from-right');
                self.addClass('from-top');
            } else if (pageY + 50 >= o.top + h) {
                self.removeClass('from-top from-left from-right');
                self.addClass('from-bottom');
            }
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

        $(this).on('mouseover', function () {
            btTl.restart();
        });
    });


    // Isotope Filter
    var filterValue = $(this).attr('data-type');
    var $isotopeContainer = $('.isotope-box').isotope({itemSelector: '.isotope-item'});

    if(filterValue !== 'corporation') {
      filterValue = '[data-type="government"]';
    }

    $isotopeContainer.isotope({ filter: filterValue });
    $('.isotope-toolbar').on('click', '.isotope-tab', function () {
      var filterValue = $(this).attr('data-type');
      $('.isotope-toolbar-btn').removeClass('active');
      $(this).addClass('active');
      if(filterValue !== '*') {
        filterValue = '[data-type="' + filterValue + '"]';
      }
      $isotopeContainer.isotope({ filter: filterValue });
    });


    // Banner 02
    var banner02 = $('.banner-02');
    if (banner02.length) {
        banner02.find('.swiper-container').each(function () {
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


    // Banner 04
    var banner04 = $('.banner-04');
    if (banner04.length) {
        banner04.find('.swiper-container').each(function () {
            var self = $(this);
            new Swiper(self, {
                loop: true,
                speed: 900,
                slidesPerView: 1,
                spaceBetween: 0,
                grabCursor: true,
                pagination: {
                    el: self.find('.swiper-pagination'),
                    clickable: true,
                },
            });
        });
    }


    // Section 02
    var section02 = $('.section-02');
    if (section02.length) {
        section02.find('.swiper-container').each(function () {
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

    // Section Career
    var sectionCareer = $('.section-career');
    let swiperCareer;
    if (sectionCareer.length) {
        sectionCareer.find('.swiper-container').each(function () {
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
            self.find('.progress').html('1 / ' + slideNum);
            swiperCareer.on('slideChange', function () {
                self.find('.progress').html(swiperCareer.activeIndex + ' / ' + slideNum);
                AOS.refresh();
                calculateSectionAnchors();
            });
        });
    }

    // Section 06
    var section06 = $('.section-06');
    if (section06.length) {
        section06.find('.swiper-container').each(function () {
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
    var section07 = $('.section-07');
    if (section07.length) {
        section07.find('.content-container').each(function () {
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
    if (section08.length) {
        section08.find('.content-container').each(function () {
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
            self.find('.progress').html('1 / ' + slideNum);
            swiper08.on('slideChange', function () {
                self.find('.progress').html(swiper08.activeIndex + ' / ' + slideNum);
            });

        });
    }

    // Section 10
    var section10 = $('.section-10');
    if (section10.length) {
        section10.find('.swiper-container').each(function () {
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
                    slideShadows: true
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
            swiper10.on('beforeTransitionStart', function (s) {
                blockClick10 = true;
            });
            self.find('.img-bg').click(function () {
                if (blockClick10) blockClick10 = false;
                else {
                    let t = $(this),
                        parent = t.closest('.swiper-slide');
                    if (parent && parent.hasClass('swiper-slide-active')) {
                        let href = t.data('href');
                        if (href) window.location = href;
                    }
                }
            });
        });
    }

    // Section 12
    var section12 = $('.section-12');
    if (section12.length) {
        section12.find('.content-container').each(function () {
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
    if (section13.length) {
        section13.find('.swiper-container').each(function () {
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
                                ${String(index + 1).padStart(2, '0')}
                            </span>`;
                    }
                },
            });

            let dotsWrapper = self.find('.dots .wrapper');
            swiper13.on('slideChange', function () {
                dotsWrapper.css('--slide', swiper13.activeIndex);
            });
            let expanded = false;

            self.find('.btn-slide-more').click(function (e) {
                e.preventDefault();
                let dataMax = Number(self.data('max'));
                let arrows = document.getElementById("arrows");
                let text = document.getElementById("text");
                let text02 = document.getElementById("text02");
                if (!expanded) {
                    expanded = true;
                    self.addClass('show-all');
                    self.attr('data-pp', dataMax);
                    self.css('--slide-pp', dataMax);
                    swiper13.params.allowSwipeToNext = false;
                    swiper13.params.allowSwipeToPrev = false;
                    arrows.style.transform = "rotateX(180deg)";
                    text.style.display = "block";
                    text02.style.display = "none";
                } else {
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
                setTimeout(function () {
                    AOS.refresh();
                    calculateSectionAnchors();
                    swiper13.params.speed = 900;
                }, 500);
            });
        });
    }


    // Button to Div
    $('.btn-to-div').click(function (e) {
        e.preventDefault();
        let target = $($(this).data('target'));
        if (target.length) {
            let offset = target.offset();
            $('html, body').stop().animate({
                scrollTop: offset.top - bodySize * 3.5
            }, 700);
        }
    });


    // Page Init
    function processInit() {
        $('body').removeClass('loading');
        AOS.init({
            easing: 'ease-in-out-cubic', duration: 750, offset: 10,
            once: false, mirror: true
        });

        // Counter
        let counterUp = window.counterUp['default'];
        $('.counter').each(function () {
            let self = this;
            new Waypoint({
                element: self,
                handler: function () {
                    counterUp(self, {
                        duration: 2000,
                        delay: 10,
                    });
                    // this.destroy();
                },
                offset: 'bottom-in-view',
            });
        });
    }

    // Page Loader
    let pageLoader = $('.page-loader'),
        pageLoaderPercent = pageLoader.find('.loader-percent');
    if (pageLoader.length) {
        let _currval = 0;
        let _counting = setInterval(function () {
            ++_currval;
            if (_currval > 90) {
                _currval = 95;
                if (document.readyState == 'interactive') {
                    _currval = 99;
                }
                if (document.readyState == 'complete') {
                    clearInterval(_counting);
                    _currval = 100;
                    pageLoader.addClass('fade-out');
                    setTimeout(function () {
                        pageLoader.remove();
                        processInit();
                    }, 1700);
                }
            }
            pageLoader.css('--percent', _currval);
            pageLoaderPercent.html(_currval);
        }, 10);
    } else {
        processInit();
    }

});
