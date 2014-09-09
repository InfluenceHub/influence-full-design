(function ($) {
  if ( $(window).width() < 700) {
    function horiz_slider () {
      var wWidth = $(window).width();

      $('#swiped').each(function() {
        $(this).css('display','block');
        $(this).width(wWidth);
        var totalWidth = wWidth * 4;
        $(this).find('.swipe-slide').each(function() {
          $(this).css('width',wWidth);
        });
        $(this).find('.swipe-wrap').width(totalWidth);
      });

      // $('.post_sliders').find('li').height(maxHeight);

      // //Makes room for "blog" post
      // var blog_width = $('.blog_container').css('width');
      // $('.dwmslider').css('marginLeft', blog_width);
    }
    $(window).load(horiz_slider);
  }
}(jQuery));
