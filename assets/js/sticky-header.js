(function($){
  $(document).ready(function(){
    var $header = $('header.site-header');
    if ($header.length) {
      $header.addClass('sticky-header');
      var lastScroll = 0;
      $(window).on('scroll', function(){
        var scroll = $(window).scrollTop();
        if(scroll > 60){
          $header.addClass('shrink');
        } else {
          $header.removeClass('shrink');
        }
        lastScroll = scroll;
      });
    }
  });
})(jQuery);