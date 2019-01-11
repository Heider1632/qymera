$("#preview").click(function() {
    $('.content').slideToggle(function(){
      $('html, body').animate({
        scrollTop: $('.content').offset().top
      });
    });
});
