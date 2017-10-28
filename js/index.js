var heroDivOverlay_Y, heroDivUnderLay_Y;

function windowOnLoad(){
    heroDivUnderLay_Y = parseInt($('.hero-div-center-row-div-underlay').css('transform').split(',')[5]);
    heroDivOverlay_Y = parseInt($('.hero-div-center-row-div-overlay').css('transform').split(',')[5]);
    window.onscroll = windowOnScroll;
    windowOnScroll();
}

function windowOnScroll(){
    var ratio = $(window).scrollTop()/ $(document).height();
    $('.hero-div-center-row-div-overlay').css('transform', 'translateY(' + heroDivOverlay_Y + 'px)')
    var nhdoly = heroDivOverlay_Y - heroDivOverlay_Y * ratio * 13;
    var nhduly = heroDivUnderLay_Y - heroDivUnderLay_Y * ratio * 7;
    $('.hero-div-center-row-div-overlay').css('transform', 'translateY(' + nhdoly + 'px)');
    $('.hero-div-center-row-div-underlay').css('transform', 'translateY(' + nhduly + 'px)');
}



function onMenuBtnClick(){
    if($("span.menu-btn-text-p").text() == "CLOSE"){
        var to = 500;
        if($(window).innerWidth() <= 990){ to = 300;}
        setTimeout(function(){
            $(".navbar-div").toggleClass("navbav-all-visible");    
            $(".the-body").toggleClass("body-no-scroll");
            $("span.menu-btn-text-p").text("MENU");
            $(".menu-btn-text").toggleClass("menu-btn-text-tilt");
            $(".menu-btn-div").toggleClass("menu-btn-div-white");
        },to);
        setTimeout(function(){
            $(".menu-btn-bar").toggleClass("menu-btn-bar-visible");
            $(".menu-option-h3").toggleClass("menu-option-h3-show");
            $(".menu-div-text-bar-span").toggleClass("menu-div-text-bar-span-show");
        },100);
        $(".menu-div-text-p").toggleClass("menu-div-text-p-show");
    }else{
        setTimeout(function(){
            $(".menu-btn-bar").toggleClass("menu-btn-bar-visible");
            $(".menu-div-text-bar-span").toggleClass("menu-div-text-bar-span-show");
            $(".menu-option-h3").each(function(i){
                var item = $(this);
                setTimeout(function(){
                    item.toggleClass("menu-option-h3-show");
                },100*i);
            })
        },300);
        setTimeout(function(){
            $(".menu-div-text-p").toggleClass("menu-div-text-p-show");
        }, 500);
        
        $("span.menu-btn-text-p").text("CLOSE");
        $(".navbar-div").toggleClass("navbav-all-visible");
        $(".the-body").toggleClass("body-no-scroll");
        $(".menu-btn-text").toggleClass("menu-btn-text-tilt");
        $(".menu-btn-div").toggleClass("menu-btn-div-white");
    }
    
}