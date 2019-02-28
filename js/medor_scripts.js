$(function() {
    var header = $(".navbar");

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
            header.removeClass("scrolledAgain");
        } else {
            header.removeClass("scrolled");
            header.addClass("scrolledAgain");
        }
    });

});

$(function() {
    $(".pets-gallery li img").click(function(){
        $('.pets-gallery__photo--main').attr('src',$(this).attr('src').replace());
       
    });
});
$(function() {
  $(".active.nav-item a.dropdown-item").filter(function(){
    return this.href == location.href.replace(/#.*/, "");
  }).addClass("active");
});

(function($) {
    
    $.fn.visible = function(partial) {
      
            var $t            = $(this),
                $w            = $(window),
                viewTop       = $w.scrollTop(),
                viewBottom    = viewTop + $w.height(),
                _top          = $t.offset().top,
                _bottom       = _top + $t.height(),
                compareTop    = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;
      
          return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
      
        };
      
      })(jQuery);
      
      
      $(window).scroll(function(event) {
      
        $(".news-col").each(function(i, el) {
          var el = $(el);
          if (el.visible(true)) {
            el.addClass("animated fadeIn dogo");
          } 
        });
      });

      $(function() {
        $('.pop').on('click', function() {
            $('.imagepreview').attr('src', $(this).find('img').attr('src'));
            $('#imagemodal').modal('show');   
        });     
      });
      

      (function(){
        // Back to Top - by CodyHouse.co
      var backTop = document.getElementsByClassName('js-cd-top')[0],
        // browser window scroll (in pixels) after which the "back to top" link is shown
        offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offsetOpacity = 1200,
        scrollDuration = 700,
        scrolling = false;
      if( backTop ) {
        //update back to top visibility on scrolling
        window.addEventListener("scroll", function(event) {
          if( !scrolling ) {
            scrolling = true;
            (!window.requestAnimationFrame) ? setTimeout(checkBackToTop, 250) : window.requestAnimationFrame(checkBackToTop);
          }
        });
        //smooth scroll to top
        backTop.addEventListener('click', function(event) {
          event.preventDefault();
          (!window.requestAnimationFrame) ? window.scrollTo(0, 0) : scrollTop(scrollDuration);
        });
      }
  
      function checkBackToTop() {
        var windowTop = window.scrollY || document.documentElement.scrollTop;
        ( windowTop > offset ) ? addClass(backTop, 'cd-top--show') : removeClass(backTop, 'cd-top--show', 'cd-top--fade-out');
        ( windowTop > offsetOpacity ) && addClass(backTop, 'cd-top--fade-out');
        scrolling = false;
      }
  
      function scrollTop(duration) {
          var start = window.scrollY || document.documentElement.scrollTop,
              currentTime = null;
  
          var animateScroll = function(timestamp){
            if (!currentTime) currentTime = timestamp;
              var progress = timestamp - currentTime;
              var val = Math.max(Math.easeInOutQuad(progress, start, -start, duration), 0);
              window.scrollTo(0, val);
              if(progress < duration) {
                  window.requestAnimationFrame(animateScroll);
              }
          };
  
          window.requestAnimationFrame(animateScroll);
      }
  
      Math.easeInOutQuad = function (t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2*t*t + b;
        t--;
        return -c/2 * (t*(t-2) - 1) + b;
      };
  
      //class manipulations - needed if classList is not supported
      function hasClass(el, className) {
          if (el.classList) return el.classList.contains(className);
          else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
      }
      function addClass(el, className) {
        var classList = className.split(' ');
        if (el.classList) el.classList.add(classList[0]);
        else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
        if (classList.length > 1) addClass(el, classList.slice(1).join(' '));
      }
      function removeClass(el, className) {
        var classList = className.split(' ');
          if (el.classList) el.classList.remove(classList[0]);
          else if(hasClass(el, classList[0])) {
            var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
            el.className=el.className.replace(reg, ' ');
          }
          if (classList.length > 1) removeClass(el, classList.slice(1).join(' '));
      }
    })();
  