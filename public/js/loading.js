$( document ).ready(function() { 
    // Page Loader
    let pageLoader = $('.loading-page');
        // pageLoaderPercent = pageLoader.find('.loader-percent');
    pageLoaderSlogan = pageLoader.find('.loading-slogan');
    if (pageLoader.length) {
        
        setTimeout(function () {
            pageLoader.addClass('inprocess');
            // pageLoader.remove();
            // processInit();
        }, 400);
        setTimeout(function () {
            pageLoader.addClass('fade-out');
            pageLoaderSlogan.fadeOut(200);
            // pageLoader.remove();
            processInit();
        }, 1500);
        setTimeout(function () {
            // pageLoader.remove();
            pageLoader.fadeOut(400);
            processInit();
        }, 1950);

    } else {
        processInit();
    }
});