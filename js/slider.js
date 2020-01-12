jQuery(document).ready(function ($) {

    $(".rslides").responsiveSlides({
        speed: 1000, // Integer: Speed of the transition, in milliseconds
        timeout: 6000, // Integer: Time between slide transitions, in milliseconds
    });

    $(".demo-kikentai.desktop").responsiveSlides({
    	auto: false,             // Boolean: Animate automatically, true or false
        pager: false,           // Boolean: Show pager, true or false
		nav: true,             // Boolean: Show navigation, true or false
		prevText: "&lt;",   // String: Text for the "previous" button
		nextText: "&gt;",       // String: Text for the "next" button
    });

    $(".demo-kikentai.mobile").responsiveSlides({
        auto: false,             // Boolean: Animate automatically, true or false
        pager: false,           // Boolean: Show pager, true or false
        nav: true,             // Boolean: Show navigation, true or false
        prevText: "&lt;",   // String: Text for the "previous" button
        nextText: "&gt;",       // String: Text for the "next" button
    });

});    
