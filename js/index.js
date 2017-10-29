var heroDivOverlay_Y, heroDivUnderLay_Y;

function windowOnLoad(){
    heroDivUnderLay_Y = parseInt($('.hero-div-center-row-div-underlay').css('transform').split(',')[5]);
    heroDivOverlay_Y = parseInt($('.hero-div-center-row-div-overlay').css('transform').split(',')[5]);
    window.onscroll = windowOnScroll;
    windowOnScroll();
    smoothScroolling();
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






////////////////////////////////////////////////
/////   The function for smooth scrolling.
/////   BORROWED FROM INTERNET.
////////////////////////////////////////////////
function smoothScroolling(){
    // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

}