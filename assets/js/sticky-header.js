(function($){
  $(document).ready(function(){
    var $header = $('header.site-header');
    if ($header.length) {
      $header.addClass('sticky-header');
    }
  });
})(jQuery);