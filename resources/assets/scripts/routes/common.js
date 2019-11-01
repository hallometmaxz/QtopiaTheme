export default {
  init() {



    var animateOnce = true;
    var distanceTrigger = 4;
    //this is the distance from the bottom of the page that determines the trigger - 4 is 1/4 from the bottom while 2 would be 1/2 from the bottom and 0 would be the very bottom
/*eslint no-unused-vars: ["error", { "varsIgnorePattern": "t" }]*/
    var windowHeight;
    var windowWidth;
    var windowOffset;
    var objectLead;
    var scrollAlertOffsets = Array();
    var scrollAlertObjects = Array();
    var parallaxOffsets = Array();
    var parallaxObjects = Array();
    var parallaxObjectHeights = Array();
    var parallaxStyles = Array();
    var logoChangeInterval;
    var logoChangeArray = Array();
    var programsToLoadEachTime = 18;

    jQuery(document).ready(function(){

      getWindowDimensions();
      setupResizeEvents();
      setupSearch();
      setupDropdowns();
      setupAlertBanner();
      setupBacktoTop();
      setupAccordion();
      setupCarousel();
      setupLogoHover();
      setupModals();
      mobileMenuSetup();
      loadMorePrograms();

    });

    jQuery(window).on('load', function(){

      getWindowDimensions();
      scrollAlertSetup();
      setupAnimationEvents();
      parallaxSetup();

    });

    function setupAnimationEvents(){

      requestAnimationFrame(allAnimations);

    }

    function allAnimations(){

      getWindowOffset();
      scrollAlert();
      parallax();

      requestAnimationFrame(allAnimations);

    }

    function getWindowOffset(){

      windowOffset = jQuery(window).scrollTop();

    }

    function setupResizeEvents(){

      jQuery(window).resize(function(){

        getWindowDimensions();
        scrollAlertSetup();
        parallaxSetup();

      });

    }

    function scrollAlertSetup(){

      scrollAlertOffsets = Array();
      scrollAlertObjects = Array();

      jQuery('.scroll-alert').each(function(){

        var scrollObject = jQuery(this);

        scrollAlertObjects.push(scrollObject);
        scrollAlertOffsets.push(scrollObject.offset().top);

      });

      scrollAlert();

    }

    function scrollAlert(){

      for(var i = 0; i < scrollAlertOffsets.length; i++){

        if(windowOffset + windowHeight > scrollAlertOffsets[i] + objectLead){
          scrollAlertObjects[i].addClass('active');
        }
        else {
          if(!animateOnce || scrollAlertObjects[i].attr('id') == 'main-footer')
          scrollAlertObjects[i].removeClass('active');
        }

      }

    }

    function getWindowDimensions(){
      windowHeight = jQuery(window).height();
      windowWidth = jQuery(window).width();
      objectLead = windowHeight/distanceTrigger;

    }

    function parallaxSetup(){

      jQuery('.parallax').each(function(){

        var parallaxObject = jQuery(this);

        parallaxObjects.push(parallaxObject);
        parallaxOffsets.push(parallaxObject.offset().top);
        parallaxObjectHeights.push(parallaxObject.outerHeight());

        var parallaxStyle = parallaxObject.css('transform');

        if(parallaxStyle != 'none')
        parallaxStyles.push(parallaxStyle);
        else
        parallaxStyles.push('');

      });

    }

    function parallax(){

      for(var i = 0; i < parallaxObjects.length; i++){

        var element = parallaxObjects[i];
        var totalMovement = element.attr('data-parallax-distance');
        var extraOffset = totalMovement*-.5;
        var elementOffset = element.offset().top;
        var elementHeight = parallaxObjectHeights[i];
        var elementStart = windowOffset - elementOffset + windowHeight;
        var elementEnd = elementHeight + windowHeight;
        var elementMovement = elementStart/elementEnd*totalMovement;

        if((windowOffset + windowHeight > elementOffset + extraOffset) && (elementOffset + elementHeight - extraOffset) > windowOffset - extraOffset)
        jQuery(element).css('transform', parallaxStyles[i] + ' translateY('+elementMovement+'px)');

      }

    }

    function setupSearch(){

      jQuery('header nav ul li:last-child, #search .close').click(function(){



      });

    }

    function setupDropdowns(){

      jQuery('header nav ul li:nth-child(2), #dropdowns .close').click(function(){

        jQuery('html').toggleClass('dropdowns');

        return false;

      });

    }

    function setupAlertBanner(){

      if(getCookie('disclaimer') != 'closed')
      jQuery('.disclaimer').show();
      else
      jQuery('header').removeClass('has-disclaimer');

      jQuery('.disclaimer .close').click(function(){

        var height = jQuery('header .disclaimer').outerHeight();

        jQuery('header').css('transform', 'translateY(-' + height + 'px)').removeClass('has-disclaimer');

        document.cookie = 'disclaimer=closed;path=/';

      });

    }

    function getCookie(cname){

      var name = cname + '=';
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');

      for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }

      return ;

    }

    function setupBacktoTop(){

      jQuery('a[href="#top"]').click(function() {

        jQuery('html, body').animate({ scrollTop: 0 }, 'slow');

        return false;

      });

    }

    function setupAccordion(){

      jQuery('.accordion h4').click(function(){

        var selectedHeader = jQuery(this);
        var closeOnly = false;

        if(selectedHeader.hasClass('open'))
        closeOnly = true;

        var parent = selectedHeader.parents('.accordion');
        var previousSelectedHeader = jQuery('.open', parent);

        jQuery(' + div', previousSelectedHeader).removeClass('active').slideToggle(300);

        previousSelectedHeader.removeClass('open');

        if(!closeOnly){
          selectedHeader.toggleClass('open');
          jQuery(' + .accordion-content', this).addClass('active').slideToggle(300);
        }

      });

    }

    function setupCarousel(){

      jQuery('.slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        rows: 1,
        slidesPerRow: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        speed: 8000,
        autoplaySpeed: 1,
        fade: true,
        easing: 'linear',
        pauseOnHover: false,
        infinite: true,
        draggable: false,
        swipe: false,
        adaptiveHeight: false,
        cssEase: 'linear',
      });

    }

    function setupLogoHover(){

      logoChangeArray[0] = 'yellow';
      logoChangeArray[1] = 'dots';
      logoChangeArray[2] = 'red';
      logoChangeArray[3] = 'purple';
      logoChangeArray[4] = 'ink';
      logoChangeArray[5] = 'blue';
      logoChangeArray[6] = 'earth';
      logoChangeArray[7] = 'orange';

      jQuery('.logo').hover(function(){

        var element = jQuery(this);

        changeLogo(element);

        logoChangeInterval = setInterval(function(){ changeLogo(element); }, 200);

      },
      function(){

        clearInterval(logoChangeInterval);
        jQuery(this).attr('class', 'logo original');

      });

    }

    function changeLogo(element){

      var random = Math.floor(Math.random() * logoChangeArray.length);

      while(element.hasClass(logoChangeArray[random]))
      random = Math.floor(Math.random() * logoChangeArray.length);

      element.attr('class', 'logo').addClass(logoChangeArray[random]);

    }

    function setupModals(){

      jQuery('.modal-youtube').modalVideo();
      jQuery('.modal-vimeo').modalVideo({channel:'vimeo'});

    }

    function mobileMenuSetup(){

      jQuery('#mobile-menu-button').click(function(){

        if(jQuery('html').hasClass('search'))
        jQuery('html').removeClass('search');
        else{
          if(jQuery('header').hasClass('has-disclaimer') && jQuery('html').hasClass('mobile-menu')){
            jQuery('header').css('transform', 'translateY(0)');
          }else if(jQuery('header').hasClass('has-disclaimer') && !jQuery('html').hasClass('mobile-menu')){
            var height = jQuery('header .disclaimer').outerHeight();
            jQuery('header').css('transform', 'translateY(-' + height + 'px)');
          }

          jQuery('html').toggleClass('mobile-menu');
        }

      });

      jQuery('#mobile-nav li.menu-item-has-children').each(function(){

        jQuery(this).append('<span></span>');

      });

      jQuery('#mobile-nav li.menu-item-has-children.current-page-ancestor').each(function(){

        jQuery(this).addClass('open');
        jQuery('.sub-menu', this).show();

      });

      jQuery('#mobile-nav li.menu-item-has-children > span').click(function(){

        var selectedHeader = jQuery(this).parent();
        var previousSelectedHeader = selectedHeader.siblings('.open');

        jQuery('> .sub-menu', previousSelectedHeader).removeClass('active').slideToggle(300);

        previousSelectedHeader.removeClass('open');

        selectedHeader.toggleClass('open');
        jQuery('> .sub-menu', selectedHeader).addClass('active').slideToggle(300);

        return false;

      });

    }

    function loadMorePrograms(){

      var offset = programsToLoadEachTime;

      jQuery('.more-programs a').click(function(){

        var parent = jQuery(this).parent();

        parent.addClass('loading');

        var cat = jQuery(this).attr('data-cat');
        var programType = jQuery(this).attr('data-program-type');

        jQuery.ajax({
          url:'/wp-admin/admin-ajax.php',
          type:'POST',
          data:'action=load_programs&type=' + programType + '&cat='+ cat + '&offset=' + offset + '&count=' + programsToLoadEachTime,
          success:function(results){

            if(jQuery.trim(results) != '')
            jQuery('#program-load').append(results);
            else
            jQuery('.more-programs').html('Sorry, there are no more programs.');

            scrollAlertSetup();

            parent.removeClass('loading');

            offset += programsToLoadEachTime;

          },
        });

        return false;

      });

    }

    // var element = document.getElementById('popup');
    // /*eslint no-unused-vars: ["error", { "varsIgnorePattern": "t" }]*/
    // var t=setTimeout(openPopUp,2500);
    // function openPopUp() {
    //   element = document.getElementById('popup');
    //   element.style.visibility = 'visible';
    //   element.style.opacity = '1';
    //
    // }
    // $('.closepopup').click(function(){
    //   element.style.visibility = 'hidden';
    // });
    //
    //
    // var coll = document.getElementsByClassName('collapsible');
    // var i;
    //
    // for (i = 0; i < coll.length; i++) {
    //   coll[i].addEventListener('click', function() {
    //     this.classList.toggle('active');
    //     var content = this.nextElementSibling;
    //     if (content.style.maxHeight){
    //       content.style.maxHeight = null;
    //     } else {
    //       content.style.maxHeight = content.scrollHeight + 'px';
    //     }
    //   });
    // }

    // JavaScript to be fired on all pages
  },
  finalize() {

    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

var element = document.getElementById('popup');

var t=setTimeout(openPopUp,2500);
function openPopUp() {
  element = document.getElementById('popup');
  element.style.visibility = 'visible';
  element.style.opacity = '1';

}
$('.closepopup').click(function(){
        element.style.visibility = 'hidden';
    });


var coll = document.getElementsByClassName('collapsible');
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener('click', function() {
    this.classList.toggle('active');
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + 'px';
    }
  });
}
