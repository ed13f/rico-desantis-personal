jQuery(document).ready(function($) {
  var scrolled = false;
  $(window).scroll(function () {
    if ($(window).scrollTop() > $('#home').height()) {
      $('.nav-right').addClass("sidebar-nav")
      $('.nav-right').removeClass("primary-nav")
    } else {
      $('.nav-right').addClass("primary-nav")
      $('.nav-right').removeClass("sidebar-nav")
    }
  });
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top + 1
      }, 800, function(){
        window.location.hash = hash;
      });
    }
  });
  // $(".header-content img").removeClass("header-img")
  $(".header-scroll_trigger").mouseenter(function(){
    if (scrolled === false){
      $(  'html, body').animate({
        scrollTop: $("#projects").offset().top + 1
        }, 1000
      );
      scrolled = true;
    }
  });
})


