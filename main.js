function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.getElementsByClassName("navbar")[0].className = "navbar navbar-scrolled navbar-expand-lg";
    } else {
      document.getElementsByClassName("navbar")[0].className = "navbar navbar-expand-lg";
    }
  }
  window.onscroll = function() {scrollFunction()};