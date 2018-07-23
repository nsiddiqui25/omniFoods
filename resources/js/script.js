$(document).ready(function(){

    /*    
   $('h1').click(function(){
       $(this).css('background-color', '#ff0000');  
   })
    //when we select the h1 element, it changes the css style to red
    */
    
//STICKY NAVIGATION - NAV BAR APPEARS AFTER SCROLLING DOWN PAST THE LANDING PAGE - WITH THE USE OF WAYPOINT PLUGIN)
    $('.jsSectionFeatures').waypoint(function(direction){
        if (direction == 'down') {
            $('nav').addClass('sticky')
        } else {
            $('nav').removeClass('sticky')
        }
    }, {
        offset: '60px;'
    });
    
//SCROLL ON BUTTONS
    $('.jsScrollToPlans').click(function(){
       $('html, body').animate({scrollTop: $('.jsSectionPlans').offset().top}, 750)
    });
    
    $('.jsScrollToStart').click(function(){
       $('html, body').animate({scrollTop: $('.jsSectionFeatures').offset().top}, 750)
    });
    
//SCROLL TO LINKS
    // Select all links with hashes
        // the following code is from: https://css-tricks.com/snippets/jquery/smooth-scrolling/
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
    
//ANIMATIONS ON SCROLL
    
    //FEATURES SECTION SCROLL ANIMATION
    $('.jsWaypoint1').waypoint(function(){
        $('.jsWaypoint1').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });
    
    //IPHONE ANIMATION
    $('.jsWaypoint2').waypoint(function(){
        $('.jsWaypoint2').addClass('animated fadeInUp');
    }, {
        offset: '50%'
    });
    
    //CITIES ANIMATION
    $('.jsWaypoint3').waypoint(function(){
        $('.jsWaypoint3').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });
    
    //PREMIUM PRICING PLAN ANIMATION
    $('.jsWaypoint4').waypoint(function(){
        $('.jsWaypoint4').addClass('animated pulse');
    }, {
        offset: '50%'
    });
    
//MOBILE NAVIGATION
    $('.jsNavIcon').click(function(){
        var nav = $('.jsMainNav');
        var icon = $('.jsNavIcon i');
        
        nav.slideToggle(200);
        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round');
        }
    });  
    
//MAPS
    var map = new GMaps({
      div: '.map',
      lat: 41.811342,
      lng: -88.1616304
    });

    map.addMarker({
      lat: 41.811342,
      lng: -88.1616304,
      title: 'OmniFoods',
      infoWindow: {
          content: '<p>27475 Ferry Road, Warrenville IL 60555</p>'
        }
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});