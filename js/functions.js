jQuery(function($) {

  //mobile js for menu
  $("#hamburger").on('click', function(e){
    e.preventDefault();
    $(this).siblings('.nav').toggle(); 
  });


  var isMobile = window.matchMedia("only screen and (max-width: 760px)");
  if (isMobile.matches) {
    $("li.menu-item-has-children a").on('click', function(e){
      e.preventDefault();
      $(this).next('.sub-menu').toggle();
    });
  }


	$(document).on('focusin', '.field, textarea', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field, textarea', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});
	$('.nav ul ul').prepend('<li class="arrow" />');
  //.browse ul.word-list li ul

	//$('.nav > ul').append("<li class='stretcher'/>");

  //$('.pins-feed-list a').attr('target', '_blank');
  //always open outside links in a new tab
  $('a:not([href^="http://64.50.176.63"]):not([href^="http://theinfluence.com"]):not([href^="http://www.theinfluence.com"]):not([href^="#"]):not([href^="/"])').attr('target','_blank');
  
  $('#header form.search input[type="submit"]').click(function() {
    var thisEl = $(this);
    
    thisEl.parent().find('input[type="text"]').animate({'width': '120px', 'padding-left': '2px', 'padding-right': '2px', 'border-width': '1px'});
    
    if (thisEl.hasClass('open') && thisEl.parent().find('input[type="text"]').val().length > 0) {
      thisEl.parent().submit();
    } else {
      thisEl.addClass('open');
      return false;
    }
  });
  
  $('.fadeout').hover(function() {
    $(this).stop().fadeTo(400, .6);
  }, function() {
    $(this).fadeTo(400, 1);
  });
  
  //Social Vertical links
  $('.social-vert').parent().hover(function() {
    $(this).find('.social-vert').stop().fadeTo('slow', 1);
  }, function() {
    $(this).find('.social-vert').stop().fadeTo('slow', 0);
  });
  
  //Newsletter signup box
  $('body.home .newsletter-pop').delay(3000).fadeIn(400);
  $('.top-button .news').click(function() {
    $('.newsletter-pop').show(400);
    return false;
  });
  $('.newsletter-pop .close').click(function() {
    $('.newsletter-pop').hide(400);
    return false;
  });
  
  //Sign up box
  $('.sign-up-link').click(function() {
    $('.sign-in-pop .inner.login').fadeOut(0);
    $('.sign-in-pop .inner.reset').fadeOut(0);
    $('.sign-in-pop .inner.register').fadeIn(0);
    $('.sign-in-pop').show(400);
    return false;
  });
  
  //Sign in box
  $('.sign-in-link').click(function() {
    $('.sign-in-pop .inner.register').fadeOut(0);
    $('.sign-in-pop .inner.reset').fadeOut(0);
    $('.sign-in-pop .inner.login').fadeIn(0);
    $('.sign-in-pop').show(400);
    return false;
  });
  $('.sign-up-link').click(function() {
    return false;
  });
  $('.sign-in-pop .close').click(function() {
    $('.sign-in-pop').hide(400);
    return false;
  });
  $(document).bind('click', function (e) {
    $('.sign-in-pop').hide(400);
  });
  $('.sign-in-pop').bind('click', function(e) {
    e.stopPropagation();
  });
  $('.sign-in-pop .lost').click(function() {
    //show password reset box
    $('.sign-in-pop .inner.login').fadeOut(400, function() {
      $('.sign-in-pop .inner.reset').fadeIn(400);
    });
    
    return false;
  });
  $('.sign-in-pop .signin').click(function() {
    //show login box
    $('.sign-in-pop .inner.reset').fadeOut(400, function() {
      $('.sign-in-pop .inner.login').fadeIn(400);
    });
    
    return false;
  });
  
  //My Influencers cancel button
  $('.AZ-signup-submit .cancel').click(function() {
    $('#myInfluence')[0].reset();
    $('.icheckbox_minimal').removeClass('checked');
  });
  
	$('.img-col, .item .img-box').hover(function() {
		$(this).find('.overlay').stop(true,true).fadeIn()
	}, function() {
		$(this).find('.overlay').fadeOut();
	})

	$('.scr-link a').on('click', function() {
		//var href = $(this).attr('href');
    var href = $(this).attr('data-scrollto');
		$('html,body').animate({scrollTop: $("."+href).offset().top -100},'slow');
		return false;
	})

  
  $("a.az-return").on('click', function(e){
    $('html,body').animate({scrollTop: $('div.az-links').offset().top}, 'slow');
    console.log('blah');
    return false;
  });

	$('.colorbox').colorbox({
		maxWidth: '90%',
		maxHeight: '90%'
	});

	$(document).on('click', '.colorbox-close', function() {
		$.colorbox.close();
	});
  
  $('input').iCheck({
    checkboxClass: 'icheckbox_minimal',
    radioClass: 'iradio_minimal',
    increaseArea: '20%' // optional
  });
  
  //On page scroll
  $(window).scrollStopped(function() {
    if ($(document).scrollTop() > ($(window).height()/2)) {
      $('.browse .top-button > div').stop().fadeIn('slow');
      $('.newsletter-pop').stop().hide(400);
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

    $('.video-row .slider-part .slides').carouFredSel({
			prev: '.v-prev',
			next: '.v-next',
			items: 3,
      scroll: {
        items: 1
      },
			auto: false
		});
    console.log($('#topSlider.influencers-slider .slides')); 
    $('#topSlider.influencers-slider .slides').carouFredSel({
			prev: '.prev',
			next: '.next',
			items: 3,
      scroll: {
        items: 1
      },
			auto: false
		});
    $('#shop-slider-small .slides').carouFredSel({
			prev: '.prev',
			next: '.next',
			items: 4,
      scroll: {
        items: 1
      },
			auto: false
		});

    if(!isMobile.matches) {
      $('#shop-slider-1 .slides').carouFredSel({
  			prev: '.prev-1',
  			next: '.next-1',
  			items: 5,
        scroll: {
          items: 1
        },
  			auto: false
  		});
    } 
    $('#shop-slider-2 .slides').carouFredSel({
			prev: '.prev-2',
			next: '.next-2',
			items: 5,
      scroll: {
        items: 1
      },
			auto: false
		});
    $('#shop-slider-3 .slides').carouFredSel({
			prev: '.prev-3',
			next: '.next-3',
			items: 5,
      scroll: {
        items: 1
      },
			auto: false
		});
    $('#shop-slider-4 .slides').carouFredSel({
			prev: '.prev-4',
			next: '.next-4',
			items: 5,
      scroll: {
        items: 1
      },
			auto: false
		});
    $('#shop-slider-5 .slides').carouFredSel({
			prev: '.prev-5',
			next: '.next-5',
			items: 5,
      scroll: {
        items: 1
      },
			auto: false
		});
    $('#shop-slider-6 .slides').carouFredSel({
			prev: '.prev-6',
			next: '.next-6',
			items: 5,
      scroll: {
        items: 1
      },
			auto: false
		});
    $('#topSlider.interview-slider .slides').carouFredSel({
			prev: '.prev.top',
			next: '.next.top',
			items: 1,
			auto: false
		});
    $('.interview-slider.bottom .slides').carouFredSel({
			prev: '.prev.bottom',
			next: '.next.bottom',
			items: 5,
      scroll: {
        items: 1
      },
			auto: false
		});
    $('#hash-inf-slider .slides').carouFredSel({
			prev: '.hash-influence .prev',
			next: '.hash-influence .next',
			items: 3,
      direction: 'up',
      scroll: {
        items: 1
      },
			auto: false
		});
    $('.video-slider .slides').carouFredSel({
			prev: '.prev-v',
			next: '.next-v',
			items: 3,
      direction: 'up',
      scroll: {
        items: 1
      },
			auto: false
		});
    $('.interview-slider.bottom ul.slides').on('click', 'li', function() {
      var thisEl = $(this);
      var indexClicked = thisEl.attr('data-index');
      var indexTarget  = $('#topSlider.interview-slider .slides li[data-index="'+indexClicked+'"]');
      //console.log(indexClicked + ' -- ' + indexTarget);
      $('#topSlider.interview-slider .slides').trigger('slideTo', [indexTarget]);
      $('.interview-slider.bottom ul.slides li').removeClass('current');
      thisEl.addClass('current');
    });

    $('.interview-slider.bottom ul.slides > li').hover(function() {
      $(this).stop().fadeTo('slow', 1);
    }, function() {
      $(this).stop().fadeTo('slow', .7);
    });

		$('.post-slide .slides').carouFredSel({
			prev: '.post-slide .prev',
			next: '.post-slide .next',
			pagination: {
				anchorBuilder: false,
				container: '.pag-thumbs' 
			},
			auto: 5000
		});
    
    //Home page flexsliders
    $('.qa-slider').flexslider({
      animation: "slide",
      direction: "vertical",
      slideshow: false,
      prevText: "",
      nextText: "",
      directionNav: false,
      contolNav: false
    });
    $('.styleseeker .arrows .prev').click(function(){ $('.qa-slider').flexslider('prev'); return false; });
    $('.styleseeker .arrows .next').click(function(){ $('.qa-slider').flexslider('next'); return false; });
    /*
    $('.hinf-slider').flexslider({
      animation: "slide",
      direction: "vertical",
      controlNav: false,
      directionNav: false,
      //animationLoop: false,
      //minItems: 1,
      //maxItems: 2,
      slideshow: false,
      prevText: "",
      nextText: ""
    });
    $('.hash-influence .arrows .prev').click(function(){ $('.hinf-slider').flexslider('prev'); return false; });
    $('.hash-influence .arrows .next').click(function(){ $('.hinf-slider').flexslider('next'); return false; });
    */

    //Videos
    //init
    var firstVidEl = $('.video-row .video-slider .slides li').eq(0);
    var firstVideo = firstVidEl.attr('data-id');
    var firstVideoNum = firstVidEl.attr('data-num');
    var firstImg   = firstVidEl.find('img').attr('src');
    var firstInfoTitle = firstVidEl.find('img').attr('title');
    var firstInfoImg   = firstVidEl.find('img').attr('data-info-image');
    var firstInfoExhibitSlug   = firstVidEl.find('img').attr('data-info-exhibitSlug');
    var firstInfoMediaStream   = firstVidEl.find('img').attr('data-info-mediaStream');
    //$('.video-details > h3').text(firstInfoTitle);
    $('.video-row h3.video-title').text(firstInfoTitle);
    $('.video-details > #video-thumb').attr('src', firstInfoImg);
    $('.video-row .player-part').find('img').attr({'data-id': firstVideo, 'data-num': firstVideoNum, 'data-info-exhibitSlug': firstInfoExhibitSlug, 'data-info-mediaStream': firstInfoMediaStream, 'src': firstInfoImg});
    if (firstInfoExhibitSlug) {
      $('.video-row .player-part').tubeplayer({
        width: 968,
        initialVideo: firstVideo,
        height: 520
      });
    }
    //change video
		$('.video-row .video-slider .slides li').on('click', function() {
      var thisEl = $(this);
      var vidID  = thisEl.attr('data-id');
      var vidNum = thisEl.attr('data-num');
      var vidImg = thisEl.find('img').attr('src');
      var vidInfoTitle = thisEl.find('img').attr('title');
      var vidInfoImg   = thisEl.find('img').attr('data-info-image');
      var vidInfoExhibitSlug   = thisEl.find('img').attr('data-info-exhibitSlug');
      var vidInfoMediaStream   = thisEl.find('img').attr('data-info-mediaStream');
		  thisEl.addClass('active').siblings().removeClass('active');
      
      //stop all players
      $('#revelensWrapper').html('<div id="flashContent"></div>');
      $('.video-row .player-part').tubeplayer('stop', vidID);
      
      $('.video-row .player-part .playbutton').fadeIn('fast');
      //$('.video-row .player-part').tubeplayer('cue', vidID);
      $('.video-row .player-part').find('img').attr({'data-id': vidID, 'data-num': vidNum, 'data-info-exhibitSlug': vidInfoExhibitSlug, 'data-info-mediaStream': vidInfoMediaStream, 'src': vidInfoImg}).fadeIn('fast');
      //update video title and image
      //$('.video-details > h3').text(vidInfoTitle);
      $('.video-row h3.video-title').text(vidInfoTitle);
      $('.video-details > #video-thumb').attr('src', vidInfoImg);
		});
    //play video
    $('.video-row .player-part .playbutton').click(function() {
      var thisEl = $(this);
      var vidInfoExhibitSlug   = $('.video-row .player-part').find('img').attr('data-info-exhibitSlug');
      var vidInfoMediaStream   = $('.video-row .player-part').find('img').attr('data-info-mediaStream');
      
      if (vidInfoExhibitSlug > '' && vidInfoMediaStream > '') {
        //debug('revTest');
      
        var swfVersionStr = "11.1.0";
        var xiSwfUrlStr = "playerProductInstall.swf";
        var flashvars = {
          "providerKey":      "0faeb590f8b9800a27f2f68947c6d3f4cd282ef17c625008049bcb4adea1e2fde94a472936249ba7a43a55b96cc9ff894c73b29d584894340fa56e9dc1f2ad31d011e7ee6810edc6b57411fb03ddca661077272e2eaaaa09a3c4e79b8d238f0b886a46ff33df1e9ef7805494436858121f0ce38142df89bb7c6f0c91b827bc910227686422f50c91388f9bcde986df102d9f684e0ed5f2c420fb6a7ff0c52af9ed1334f6a9cbe382f442cab2d750313989a650f9ac0aa3d0a629f7e6c1173d98a36705acba0a077bc7fe6e8c9fddafbf1fa1c2efe28799ab807e6835dcde92f639dd86c43d79843ba46d6de79267dc4a7a65d36e985f6dc51b1b123f4cee59bb",
          "apiURL":           "https://api.revelens.com/api/",
          "exhibitSlug":      vidInfoExhibitSlug,
          "mediaStream":      vidInfoMediaStream
        };
        flashvars.displayPrice = "true";
        flashvars.shelfToggleOpacity = "0.65";
        flashvars.shelfToggleOpenText = "SHOP\nTHIS!";
        flashvars.shelfToggleButtonTopYOffset = "75";
        flashvars.shelfPreviewDisplaySeconds  = "5.0";
        flashvars.shelfPreviewTextCopy = "Click the Screen to Shop and Bookmark Items in this Video!\nFYI : Double Check That Your PopUp Blocker Is Disabled! ";
        
        var params = {
          "quality":           "high",
          "bgcolor":           "#aaa",
          "allowscriptaccess": "sameDomain",
          "allowfullscreen":   "true",
          "scale":             "noScale",
          "wmode":             "direct"
        };
        
        var attributes = {
          "id":    "Revelens",
          "name":  "Revelens",
          "align": "middle"
        };
        
        swfobject.embedSWF(
        "http://www.theinfluence.com/site/wp-content/themes/influence-full-design/Revelens.swf",
        "flashContent",
        "830",
        "401",
        swfVersionStr, xiSwfUrlStr,
        flashvars, params, attributes);
        
        swfobject.createCSS("#flashContent", "display:block;text-align:left;");
        
        thisEl.closest('.player-part').find('img').delay(500).fadeOut('fast');
        thisEl.fadeOut('fast');
      } else {
        var vidID = $('.video-row .player-part').find('img').attr('data-id');
        thisEl.closest('.player-part').find('img').delay(500).fadeOut('fast');
        thisEl.fadeOut('fast');
        //$('.video-row .player-part').tubeplayer('play', vidID);
        window.location = 'http://www.youtube.com/watch_popup?v=' + vidID;
      }
    });
    
    //Subscribe buttons
		var old_html = $('#influencer-subscribe-button').html();

		$('#influencer-subscribe-button').on('mouseover', function() {
			$(this).html($(this).data('hover'));
		}).on('mouseout', function() {
			$(this).html(old_html);
		});

		$('.interact-with-influencer a.subscribe-link').on('click', function() {
			//if (!$(this).hasClass('sign-in-link')) {
        $(this).parents('form').trigger('submit');
			  return false;
      //} else {
        //open sign in box
        //var redirect = $('form#login #redirect_to').val();
        //$('form#login #redirect_to').val(redirect);
        //$('form#login .status').text('Please sign in to subscribe.');
      //}
		});


//browse by js


  $('.browse-col .browse-row').isotope({
    itemSelector: '.archive-col',
    layoutMode: 'masonry'
  });



	});


	$('.browse-row').infinitescroll({
		navSelector  : ".posts-navigation",
		nextSelector : ".posts-navigation a",
		itemSelector : ".col_5, .infinite-block"
	}, function(newElements) {
    var $newElems = $(newElements);
    $newElems.imagesLoaded(function(){
      $('.browse-row').isotope('appended', $newElems );
    });
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

  //Scroll to videos on home page
	if($('body').hasClass('page-template-template-home-php')) {
		$('.nav > ul > li.video a').on('click', function(e) {
			e.preventDefault();
      scrollToVideos();
		});
	}
  if (getUrlVars()['sc'] == 'videos') {
    $(window).load(function() {
      scrollToVideos();
    });
  }
  function scrollToVideos() {
    if($('.video-row').length) {
      $('body, html').animate({
        scrollTop: $('.video-row').offset().top - ($('body').hasClass('admin-bar') ? 70 : 40)
      })
		}
		return false;
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
  
  //Retrieve GET values from URL
  function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++) {
      hash = hashes[i].split('=');
      vars.push(hash[0]);
      vars[hash[0]] = hash[1];
    }
    return vars;
  }
  
  //Get href anchor value
  function getUrlAnchor() {
    var anchorParts = window.location.href.split('#');
    var anchor = anchorParts[1];
    return anchor;
  }
  
//Do things when browser resizes
function infContentResize() {
  homeSliderInit();
}

//Pin header
var headerHeight = parseInt($('#header').height()+20);
  if ($('#top_ad-block').length > 0) {
    var topOffset = $('#top_ad-block').height();
    $(window).scroll(function() {
      var thisEl = $('#header');
      if ($(window).scrollTop() >= topOffset && !thisEl.hasClass('pinned')) {
        thisEl.addClass('pinned');
        $('#content').css({'margin-top': headerHeight+'px'});
      } else if ($(window).scrollTop() < topOffset && thisEl.hasClass('pinned')) {
        thisEl.removeClass('pinned');
        $('#content').css({'margin-top': '0px'});
      }
    });
  } else {
    $('#header').addClass('pinned');
    $('#content').css({'margin-top': headerHeight+'px'});
  }

  
//Initialize Home Page Slider
  function homeSliderInit() {
    var slideBaseWidth  = $('.top-slider .inner-slide:first').outerWidth();
    var slideBaseHeight = $('.top-slider .inner-slide:first').height();
    var vpWidth         = $(window).width();
    var vpHeight        = $(window).height() - $('#header').height() - $('#footer').height();
    
    var slideItems      = 9;
    var sliderWidth     = '100%';
    var slideCenter     = 4;
    
    var leftOffset = (slideCenter* slideBaseWidth) - (vpWidth/2) + (slideBaseWidth/2); //offset to put 
    if (leftOffset > 1005) {
      leftOffset = 1005;
    }
    
    /*No longer responsive 
    choose appropriate slide number, 5, 7 or 9
    //slide height is greater than viewable space, use more slides 
    var topSlider = $('.top-slider');
    if (slideBaseHeight > vpHeight) {
      if (vpHeight <= 500) { slideItems = 7; sliderWidth = '118%'; slideCenter = 3; topSlider.addClass('seven').removeClass('nine'); }
      if (vpHeight <= 250) { slideItems = 9; sliderWidth = '114%'; slideCenter = 4; topSlider.addClass('nine').removeClass('seven'); }
      slideItems = 7; sliderWidth = '118%'; slideCenter = 3; topSlider.addClass('seven').removeClass('nine');
    }
    //browser width is greater than 4 x slideBaseWidth, use more slides
    var maxWidth = slideBaseWidth*(slideItems-1);
    if (vpWidth > maxWidth) {
      if (vpWidth <= (slideBaseWidth*6)) { slideItems = 7; sliderWidth = '118%'; slideCenter = 3; topSlider.addClass('seven').removeClass('nine'); }
      else { slideItems = 9; sliderWidth = '114%'; slideCenter = 4; topSlider.addClass('nine').removeClass('seven'); }
      slideItems = 7; sliderWidth = '118%'; slideCenter = 3; topSlider.addClass('seven').removeClass('nine');
    }
    
    */
    $('.top-slider .slides').carouFredSel({
      width : '5000px',
      //align: 'center',
      items: slideItems,
      responsive: false,
      onTouch: true,
      prev: '.top-slider .prev',
      next: '.top-slider .next',
      onCreate: function() {
        $('.top-slider .loader').fadeOut();
        //set current slide and nearby
        var slideCurrent = $('.top-slider .slides').find('li:eq('+slideCenter+')');
        var slideNearby = $('.top-slider .slides').find('li:eq('+(slideCenter-1)+'), li:eq('+(slideCenter+1)+')');
        slideCurrent.addClass('current').siblings().removeClass('current');
        $('.top-slider .slides li').removeClass('nearby');
        slideNearby.addClass('nearby');
        //center slider
        $('.top-slider .caroufredsel_wrapper').css({'left': '-'+leftOffset+'px'});
        //align arrows
        $('.top-slider .prev').css({'left': (slideCurrent.offset().left - slideBaseWidth + 25)+'px'});
        $('.top-slider .next').css({'left': (slideCurrent.offset().left + (slideBaseWidth*2) - 65)+'px'});
        //set slider height
        //var slideHeight = $('.top-slider .inner-slide:first').height();
        //$('.top-slider').css({'height': slideHeight+'px'});
      },
      scroll: {
        pauseOnHover    : true,
        items: 1,
        onAfter: function() {
          $('.top-slider .slides').find('li:eq('+slideCenter+')').addClass('current').siblings().removeClass('current');
          $('.top-slider .slides li').removeClass('nearby');
          $('.top-slider .slides').find('li:eq('+(slideCenter-1)+'), li:eq('+(slideCenter+1)+')').addClass('nearby');
          //add .nearby
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
}