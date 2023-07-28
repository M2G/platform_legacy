 module.exports = function() {

   var Init = {
     // menu sidebar left
     first: function() {

       var show_sidebar = document.querySelector(".show-sidebar");
       var sidebar_primary = document.querySelector(".c-sidebar__primary");
       if (show_sidebar !== null) {
         document.addEventListener("click", (e) => {
           if (e.target.classList.contains("show-sidebar")) {
             show_sidebar.classList.toggle('close-icon');
             sidebar_primary.classList.toggle('sidebar-left');
           }
         });
       }
     },
     // menu sidebar right
     second: function() {

       var show_sidebar_second = document.querySelectorAll(".egaliseur");
       var sidebar_secondary = document.querySelector(".c-sidebar__secondary");
       if (show_sidebar_second !== null) {
         document.addEventListener("click", (e) => {
           if (e.target.classList.contains("egaliseur")) {
             sidebar_secondary.classList.toggle('sidebar-right');
           }
         });
       }
     },
     // animation nav
     three: function() {

       var lnr = document.querySelector('.lnr-chevron-up');
       var nav = document.querySelectorAll('.list');
       if (lnr !== null) {
         lnr.style.display = 'none';
         window.addEventListener('scroll', () => {
           var top = window.pageYOffset;
           (top <= 120) ? lnr.style.display = 'none' : lnr.style.display = 'block';
           for (var i = 0; i < nav.length; i++) {
             (top > 1) ? nav[i].classList.add('small') : nav[i].classList.remove('small');
           }
         }, false);
       }
     },
     // scroll to top
     four: function() {

       var link = document.querySelectorAll("a[href*='#']");
       var i = 0;
       var len = link.length;
       for (i, len; i < len; i++) {
         link[i].onclick = function() {
           var target = this.getAttribute("href").slice(1);
           if (target.length) {
             scrollTo(document.getElementById(target).offsetTop, 750);
             return false;
           }
         }
       }

       function scrollTo(element, duration) {
         var e = document.documentElement;
         if (e.scrollTop === 0) {
           var t = e.scrollTop;
           ++e.scrollTop;
           e = t + 1 === e.scrollTop-- ? e : document.body;
         }
         scrollToC(e, e.scrollTop, element, duration);
       }

       function scrollToC(element, from, to, duration) {
         if (duration < 0) return;
         if (typeof from === "object") from = from.offsetTop;
         if (typeof to === "object") to = to.offsetTop;
         scrollToX(element, from, to, 0, 1 / duration, 10, EasingFunctions.easeInOutQuint);
       }

       function scrollToX(element, x1, x2, t, v, step, operation) {
         if (t < 0 || t > 1 || v <= 0) return;
         element.scrollTop = x1 - (x1 - x2) * operation(t);
         t += v * step;
         setTimeout(function() {
           scrollToX(element, x1, x2, t, v, step, operation);
         }, step);
       }

/*
 * Easing Functions - inspired from http://gizma.com/easing/
 * only considering the t value for the range [0, 1] => [0, 1]
 */
EasingFunctions = {
  // no easing, no acceleration
  linear: function (t) { return t },
  // accelerating from zero velocity
  easeInQuad: function (t) { return t*t },
  // decelerating to zero velocity
  easeOutQuad: function (t) { return t*(2-t) },
  // acceleration until halfway, then deceleration
  easeInOutQuad: function (t) { return t<.5 ? 2*t*t : -1+(4-2*t)*t },
  // accelerating from zero velocity
  easeInCubic: function (t) { return t*t*t },
  // decelerating to zero velocity
  easeOutCubic: function (t) { return (--t)*t*t+1 },
  // acceleration until halfway, then deceleration
  easeInOutCubic: function (t) { return t<.5 ? 4*t*t*t : (t-1)*(2*t-2)*(2*t-2)+1 },
  // accelerating from zero velocity
  easeInQuart: function (t) { return t*t*t*t },
  // decelerating to zero velocity
  easeOutQuart: function (t) { return 1-(--t)*t*t*t },
  // acceleration until halfway, then deceleration
  easeInOutQuart: function (t) { return t<.5 ? 8*t*t*t*t : 1-8*(--t)*t*t*t },
  // accelerating from zero velocity
  easeInQuint: function (t) { return t*t*t*t*t },
  // decelerating to zero velocity
  easeOutQuint: function (t) { return 1+(--t)*t*t*t*t },
  // acceleration until halfway, then deceleration
  easeInOutQuint: function (t) { return t<.5 ? 16*t*t*t*t*t : 1+16*(--t)*t*t*t*t }
      }
     },
   };

   Init.first(); // Navigation
   Init.second(); // ScrollY animation(s)
   Init.three(); // Animation nav
   Init.four(); // Scroll to top

   module.exports = Init;

 }; // END FONCTION
