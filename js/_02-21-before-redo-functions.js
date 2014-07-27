jQuery(function($) {
	$(document).on('focusin', '.field, textarea', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field, textarea', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});
	$('.nav ul ul, .browse ul.word-list li ul').prepend('<li class="arrow" />');

	$('.nav > ul').append("<li class='stretcher'/>");

  $('.pins-feed-list a').attr('target', '_blank');
  
  $('.fadeout').hover(function() {
    $(this).stop().fadeTo(400, .6);
  }, function() {
    $(this).fadeTo(400, 1);
  });
  
	$('.img-col, .item .img-box').hover(function() {
		$(this).find('.overlay').stop(true,true).fadeIn()
	}, function() {
		$(this).find('.overlay').fadeOut();
	})

	$('.scr-link a').on('click', function() {
		var href = $(this).attr('href');
		$('html,body').animate({scrollTop: $("."+href).offset().top},'slow');
		return false;
	})

	$('.colorbox').colorbox({
		maxWidth: '90%',
		maxHeight: '90%'
	});

	$(document).on('click', '.colorbox-close', function() {
		$.colorbox.close();
	});
  
  
  $('.zebra-modal').click(function(e) {
    e.preventDefault();
    var thisEl   = $(this);
    var content  = thisEl.attr('href');
    var zClass = thisEl.attr('data-class');
    
    var signinLeft = $('.sign-in-link').offset().left;
    
    new $.Zebra_Dialog('', {
      'source':  {'ajax': content},
      'overlay_opacity': 0,
      'custom_class': zClass,
      'position': ['left + ' + parseInt(signinLeft - 177), 'top + 130']
    });
  });
  
  //On page scroll
  $(window).scrollStopped(function() {
    if ($(document).scrollTop() > ($(window).height()/2)) {
      $('.browse .top-button > div').stop().fadeIn('slow');
    } else {
      $('.browse .top-button > div').stop().fadeOut('slow');
    }
  });
  $('.browse .top-button a.scrolltop').click(function() {
    $('html, body').animate({ scrollTop: 0 }, "slow");
    return false;
  });

	$(document).on('keypress', 'input.field', function (e) {
		if (e.which == 13) {
			$('.pop form').submit();
		}
	});

	$(window).load(function() {
    homeSliderInit();

		$('.video-row .player-part .slides li').each(function() {
			$(this).css('display', 'block')
		})
		$('.player-part .slides').carouFredSel({
			items: 1,
			auto: false,
      scroll: {
        onAfter: function() {
          var videoTitle = $('.player-part .slides').find('li:eq(0) .video-title').text();
          var videoImage = $('.player-part .slides').find('li:eq(0) .video-image').text();
          //update video title and image
          $('.video-details > h3').text(videoTitle);
          //$('.video-details > img').attr('src', videoImage);
        }
      }
		})

    $('.video-row .slider-part .slides').carouFredSel({
			prev: '.v-prev',
			next: '.v-next',
			items: 4,
			auto: false
		})

		$('.post-slide .slides').carouFredSel({
			prev: '.post-slide .prev',
			next: '.post-slide .next',
			pagination: {
				anchorBuilder: false,
				container: '.pag-thumbs' 
			},
			auto: 5000
		})

		$('.video-row .slider-part .slides li').on('click', function() {
		  var num = parseInt($(this).data('num'));
		  $(this).addClass('active').siblings().removeClass('active');
		  $('.player-part .slides').trigger('slideTo', num );
		});

		var old_html = $('#influencer-subscribe-button').html();

		$('#influencer-subscribe-button').on('mouseover', function() {
			$(this).html($(this).data('hover'));
		}).on('mouseout', function() {
			$(this).html(old_html);
		});

		$('.interact-with-influencer a').on('click', function() {
			$(this).parents('form').trigger('submit');
			return false;
		});
	})


	$('.browse-row').infinitescroll({
		navSelector  : ".posts-navigation",
		nextSelector : ".posts-navigation a",
		itemSelector : ".col_5"
	});

	/* Isotope */
	$container = $('#container')

	$container.isotope();

	var filters = {
		rePage: 1,
		reCats: []
	},
	loading = false,
	append = true;

	function refreshFilters() {
		loading = true;

		if( ! append ) {
			filters.rePage = 1;
		}

		$.ajax({
			data: filters,
			success: function( data ) {
				var $items = $( '#container > *', data ),
					$realItems = $( '#container > *' ).addClass('removeMe');

				if( append ) {
					var $hidden = $( '<div style="height:0; position:relative; overflow:hidden;" />' ).appendTo( 'body' ).append( $items );
				    $hidden.find( '.size2 .descr' ).each(function(){
				    	$(this).css( 'min-height', $(this).height() > 111 ? 304 : 110 );
				    });
					$container.isotope( 'insert', $items );
				} else {
					$items.each(function(){
						var $item = $(this);
						$realItems.each(function(){
							var $realItem = $(this);

							if( $item.attr('id') == $realItem.attr('id') ) {
								$realItem.removeClass( 'removeMe' );
								$item.addClass( 'removeMe' )
							}
						});
					});

					$container.isotope( 'remove', $realItems.filter( '.removeMe' ), function(){
						$container.isotope( 'insert', $items.not('.removeMe') );
					} );
				}

				$realItems.removeClass( 'removeMe' );

				loading = false;
			}
		})
	}

	if($('body').hasClass('page-template-template-home-php')) {
		$('.nav > ul > li.video a').on('click', function() {
			if($('.video-row').length) {
				$('body, html').animate({
					scrollTop: $('.video-row').offset().top - $('#header').height() - ($('body').hasClass('admin-bar') ? 70 : 40)
				})
			}
			return false;
		});
	}
  
  //Window resize listener
  $(window).resize(function() {
    infContentResize();
  });

  
/*
** FUNCTIONS
*********************************************************/
//Enable debug log
  debug = function (log_txt) {
    if (typeof window.console != 'undefined') {
      console.log(log_txt);
    }
  }
  
//Do things when browser resizes
function infContentResize() {
  homeSliderInit();
}
  
//Initialize Home Page Slider
  function homeSliderInit() {
    var slideBaseWidth  = $('.top-slider .inner-slide:first').width();
    var slideBaseHeight = $('.top-slider .inner-slide:first').height();
    var vpWidth         = $(window).width();
    var vpHeight        = $(window).height() - $('#header').height() - $('#footer').height();
    
    var slideItems      = 5;
    var sliderWidth     = '125%';
    var slideCenter     = 2;
    
    //choose appropriate slide number, 5, 7 or 9
    //slide height is greater than viewable space, use more slides
    var topSlider = $('.top-slider');
    if (slideBaseHeight > vpHeight) {
      //if (vpHeight <= 500) { slideItems = 7; sliderWidth = '118%'; slideCenter = 3; topSlider.addClass('seven').removeClass('nine'); }
      //if (vpHeight <= 250) { slideItems = 9; sliderWidth = '114%'; slideCenter = 4; topSlider.addClass('nine').removeClass('seven'); }
      slideItems = 7; sliderWidth = '118%'; slideCenter = 3; topSlider.addClass('seven').removeClass('nine');
    }
    //browser width is greater than 4 x slideBaseWidth, use more slides
    var maxWidth = slideBaseWidth*(slideItems-1);
    if (vpWidth > maxWidth) {
      //if (vpWidth <= (slideBaseWidth*6)) { slideItems = 7; sliderWidth = '118%'; slideCenter = 3; topSlider.addClass('seven').removeClass('nine'); }
      //else { slideItems = 9; sliderWidth = '114%'; slideCenter = 4; topSlider.addClass('nine').removeClass('seven'); }
      slideItems = 7; sliderWidth = '118%'; slideCenter = 3; topSlider.addClass('seven').removeClass('nine');
    }
    
    $('.top-slider .slides').carouFredSel({
      width : sliderWidth,
      align: 'center',
      items: slideItems,
      responsive: true,
      prev: '.top-slider .prev',
      next: '.top-slider .next',
      onCreate: function() {
        $('.top-slider .loader').fadeOut();
        $('.top-slider .slides').find('li:eq('+slideCenter+')').addClass('current').siblings().removeClass('current');
        //set slider height
        var slideHeight = $('.top-slider .inner-slide:first').height();
        $('.top-slider').css({'height': slideHeight+'px'});
      },
      scroll: {
        pauseOnHover    : true,
        items: 1,
        onAfter: function() {
          $('.top-slider .slides').find('li:eq('+slideCenter+')').addClass('current').siblings().removeClass('current');
        }
      },
      auto: 6000
    });
  }
  
  
});

//scrollStopped function, fires once after scrolling stops
//Same usage as scroll, i.e. jQuery(window).scrollStopped(function() { etc.
jQuery.fn.scrollStopped = function(callback) {           
  jQuery(this).scroll(function(){
    var self = this, $this = jQuery(self);
    if ($this.data('scrollTimeout')) {
      clearTimeout($this.data('scrollTimeout'));
    }
    $this.data('scrollTimeout', setTimeout(callback,250,self));
  });
};