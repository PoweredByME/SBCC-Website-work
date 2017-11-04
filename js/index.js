var heroDivOverlay_Y, heroDivUnderLay_Y;

function windowOnLoad(){
    heroDivUnderLay_Y = parseInt($('.hero-div-center-row-div-underlay').css('transform').split(',')[5]);
    heroDivOverlay_Y = parseInt($('.hero-div-center-row-div-overlay').css('transform').split(',')[5]);
    window.onscroll = windowOnScroll;
    window.onresize = windowOnResize;
    windowOnScroll();
    windowOnResize();
    smoothScroolling();
    setTimeout(onWindowLoad_effect, 800);
}

function onWindowLoad_effect(){
    $(".menu-btn-div").removeClass("before-load");
    $(".navbar-div").removeClass("before-load");
    $(".start-a-project-div-btn").removeClass("before-load");
    $(".hero-div-center-row-div-underlay-text").removeClass("before-load");
    $(".hero-div-center-row-div-overlay-text").removeClass("before-load");
    $(".take-a-tour-div-button").removeClass("before-load");
    $(".about-us-div-imag-div-container").removeClass("before-load");
}


function windowOnScroll(){
    heroDivParrallax();
    aboutUsDivImageAnimeTrigger();
    aboutUsDivTextAnimationTrigger();
    aboutUsDivImageAnimeTrigger2();
    ourWorkDivHeadingAnimationTrigger();
}


function windowOnResize(){
    $(".about-us-complay-name-div").height($(".about-us-div-text-div").height() + 120);
}


var onMenuBtnClick_inProcess = false;
function onMenuBtnClick(){
    if(onMenuBtnClick_inProcess == true){return;}
    if($("span.menu-btn-text-p").text() == "CLOSE"){
        onMenuBtnClick_inProcess = true;
        var to = 500;
        if($(window).innerWidth() <= 990){ to = 300;}
        setTimeout(function(){
            $(".navbar-div").toggleClass("navbav-all-visible");    
            $(".the-body").toggleClass("body-no-scroll");
            $("span.menu-btn-text-p").text("MENU");
            $(".menu-btn-text").toggleClass("menu-btn-text-tilt");
            $(".menu-btn-div").toggleClass("menu-btn-div-white");
            onMenuBtnClick_inProcess = false;
        },to);
        setTimeout(function(){
            $(".menu-btn-bar").toggleClass("menu-btn-bar-visible");
            $(".menu-option-h3").toggleClass("menu-option-h3-show");
            $(".menu-div-text-bar-span").toggleClass("menu-div-text-bar-span-show");
        },100);
        $(".menu-div-text-p").toggleClass("menu-div-text-p-show");
    }else{
        onMenuBtnClick_inProcess = true;
        setTimeout(function(){
            $(".menu-btn-bar").toggleClass("menu-btn-bar-visible");
            $(".menu-div-text-bar-span").toggleClass("menu-div-text-bar-span-show");
            $(".menu-option-h3").each(function(i){
                var item = $(this);
                setTimeout(function(){
                    item.toggleClass("menu-option-h3-show");
                },100*i);
            })
            setTimeout(function(){onMenuBtnClick_inProcess=false;},200);
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

function heroDivParrallax(){
    var ratio = $(window).scrollTop()/ $(document).height();
    $('.hero-div-center-row-div-overlay').css('transform', 'translateY(' + heroDivOverlay_Y + 'px)')
    var nhdoly = heroDivOverlay_Y - heroDivOverlay_Y * ratio * 13;
    var nhduly = heroDivUnderLay_Y - heroDivUnderLay_Y * ratio * 7;
    $('.hero-div-center-row-div-overlay').css('transform', 'translateY(' + nhdoly + 'px)');
    $('.hero-div-center-row-div-underlay').css('transform', 'translateY(' + nhduly + 'px)');
}


var aboutUsDivImageAnimeTrigger_flag = {flag:false};
function aboutUsDivImageAnimeTrigger(){
    if($(window).width() > 992){
        onScrollAction($(".about-us-div-imag-div-container"), $(window).height()/2, aboutUsDivImageAnimeTrigger_flag, function(){
            $(".about-us-div-imag-div-container").toggleClass("about-us-div-imag-div-container-show");
        });
    }else{
        onScrollAction($(".about-us-div-imag-div-container"), $(window).height()/2.5, aboutUsDivImageAnimeTrigger_flag, function(){
            $(".about-us-div-imag-div-container").toggleClass("about-us-div-imag-div-container-show");
        });
    }
}


var aboutUsDivImageAnimeTrigger2_flag = {flag:false};
function aboutUsDivImageAnimeTrigger2(){
    onScrollAction($(".about-us-complay-name-div"), $(window).height() / 2, aboutUsDivImageAnimeTrigger2_flag, function(){
        if($(".about-us-complay-name-div").hasClass("show")){
            $(".about-us-complay-name-div-heading").toggleClass("show");
            setTimeout(function(){
                    $(".about-us-complay-name-div").toggleClass("show");
            },300);
        }else{
            $(".about-us-complay-name-div").toggleClass("show");
            setTimeout(function(){
                    $(".about-us-complay-name-div-heading").toggleClass("show");
            },300);
        }
    })
}


var aboutUsDivTextAnimationTrigger_flag = {flag:false};
function aboutUsDivTextAnimationTrigger(){
    onScrollAction($(".about-us-div-text-div"),$(window).height() / 2.8, aboutUsDivTextAnimationTrigger_flag, function(){
        $(".about-us-div-text-div").toggleClass("show");
        $(".div-for-about-us-text-div-animation").toggleClass("show");
        $(".about-us-div-heading").toggleClass("show");
        $(".about-us-div-text-content").toggleClass("show");
    });
    
    
}


var ourWorkDivHeadingAnimationTrigger_flag = {flag:false};
function ourWorkDivHeadingAnimationTrigger(){
    onScrollAction($(".our-word-div-heading-div"), $(window).height()/4, ourWorkDivHeadingAnimationTrigger_flag, function(){
        $(".our-word-div-heading-div").toggleClass("show");
    })
}



function onScrollAction(element, offset,  globalvariable_r,callback){
    var top = element.offset().top - $(window).scrollTop();
    var trigger_offset = $(window).innerHeight() - offset;
    if(top <= trigger_offset && globalvariable_r.flag == false){
        callback();
        globalvariable_r.flag = true;
        //console.log( element.attr("class") +" lepos = " + top + " " + trigger_offset + " " + globalvariable_r.flag);
    }else if (top > trigger_offset && globalvariable_r.flag == true){
        callback();
        globalvariable_r.flag = false;
        //console.log( element.attr("class") +" lepos = " + top + " " + trigger_offset + " " + globalvariable_r.flag);
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