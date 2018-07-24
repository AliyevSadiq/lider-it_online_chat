$(document).ready(function(){
/*   СКРОЛЛ ОТ МЕНЮ К БЛОКУ   */

    $('.go_to').click( function(){
        $(".go_to").parents("li").removeClass("active");
        $(this).parents("li").addClass("active");
	var scroll_el = $(this).attr('href'); 
        if ($(scroll_el).length != 0) {  
        $('html, body').animate({ scrollTop: $(scroll_el).offset().top-50 }, 600); 
        
        }
	    return false; // 
    });
/*  RESIZE MAIN BG IMAGE */
    function heightDetect(){
    $(".main-top").css("height", $(window).height()-54);
    };
    heightDetect();
    $(window).resize(function(){
        heightDetect();
    });

    if($(window).width() < 768){
        $('.about-text').removeClass('wow fadeInLeft');
        $('.about-text').removeClass('wow fadeInRight');
    };


/*   POSTEPENNOE POYAVLENIE BLOKOV   */
    var countbox = ".technologies";
    var show = true;
    $(window).on("scroll load", function () {
        if ($('.technologies').length > 0 )  {
            var w_top = $(window).scrollTop(); 
            var e_top = $(countbox).offset().top +250;
            var w_height = $(window).height(); 
            var d_height = $(document).height(); 
            var e_height = $(countbox).outerHeight();
            if ((w_top + w_height) > e_top && w_top < (e_top + e_height)) {
                $.fn.fade_img = function (ops) {
                    var $elem = this;
                    var res = $.extend({ delay: 200, speed: 600 }, ops);
                    for (var i=0, pause=0, l=$elem.length; i<l; i++, pause+=res.delay) {
                        $elem.eq(i).delay(pause).fadeIn(res.speed);
                    }
                    return $elem;
                };
                $('.technologies-block').fade_img();
            } 
        }
    });


    /*   ANIMCAIYA BLOKOV SPRAVA SLEVA   */
    new WOW().init();

/*   POP UP WINDOW    */
function checkWidth() {
    var modal = $('.lightbox');
    var btn = $(".read");
    var win = window.innerWidth;
    var body = $('body').width();
    var width = window.innerWidth - $('body').width();
    function openWindow(){
        console.log('ya zdes');
    }
    $(document).on('click', '.read',  function() {
     
        if(win > body){
            $(this).parent().find('.lightbox').fadeIn();
            $("body").addClass("modal-open");
            $(document.body).css('padding-right', width + 'px');
            console.log('wirina est');
            openWindow();
        }
        if(win == body){
            $(this).parent().find('.lightbox').fadeIn();
            $("body").addClass("modal-open");
            $(document.body).css('padding-right', width + 'px'); 
            console.log('wirini netu');
        }
    
    });
    /* FUNKCIYA DLA ZAKRITIYA */
    function closeWindow(){
        $('.lightbox').hide();
        $("body").removeClass("modal-open");
        $(document.body).css('padding-right', '0px'); 
    }
    $(document).on('click', '.shut', function() {
        closeWindow();
    });

    $(document).on('click', '.lightbox', function(event) {
        var target = $( event.target );
        if (target.hasClass( "lightbox" )) {
            closeWindow();
        }
    });
}

checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
});




/*  SLIDER   */

$(document).ready(function(){
    $("#owl").owlCarousel({
        items: '6',
        loop: true,
        autoplay: true,
        autoplayTimeout: 1900,
        smartSpeed: 1500,
        responsive : {
           1200 : {
               items:'6',
            },
            767 : {
                items: '3',
            },
            480 : {
                items: '2',
            },
            200 : {
                items: '1',
            }
        }
    });
    $("#info").owlCarousel({
        items: '1',
       dots: true,
        loop: true,
      
   
    });

  });



  /*  Счетчик цифр  */
  var currentNum = '.number-up';
  var show = true;
  $(window).on("scroll load", function () {
      if ($('.number-up').length > 0 )  {
          var w_top = $(window).scrollTop(); 
          var e_top = $(currentNum).offset().top +250;
          var w_height = $(window).height(); 
          var d_height = $(document).height(); 
          var e_height = $(currentNum).outerHeight();
          if ((w_top + w_height) > e_top && w_top < (e_top + e_height)) {
            var currentNumber = $('.number-up').text();
            $({numberValue: currentNumber}).animate({numberValue: 20}, {
                duration: 1000,
                easing: 'linear',
                step: function() { 
                    $('.number-up').text(Math.ceil(this.numberValue)); 
                }
            });
          } 
      }
  });

