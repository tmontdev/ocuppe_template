

(function($){
    
    //identificando tamanho da tela
    if($(window).width()>=768){
        //desktop
        //definindo tamanho da home
        var homeHeight = $(window).height() - $('#header').height();
        $('#home').css('height', homeHeight)
        
        //fazendo cabeçalho fixo
        $(window).scroll(function(){
            if($(this).scrollTop() > $('.header-first-line').height()){
                    $('.header-menu-party').addClass("fixed-header");
            }else{
                    $('.header-menu-party').removeClass("fixed-header");
            }
        });
        $('.company-img').css('height', $('.company-content-area').height()+120);
    }else{
        //mobile
        $('.deposition').each(function(){
            var container = $(this).width() - $(this).find("img").width();
            $(this).find("img").css('margin-left', container/2)
    
        })
        var homeHeight = $(window).height() - $('.header-mobile').height()
        $('#home').css('height', homeHeight);
        $('.menu-switch').click(function(){
            if($('.header-party').hasClass('header-actived')){
                // $('.menu-party').removeClass('header-actived')
                $('.header-party').removeClass('header-actived');
                $('.rollback').removeClass("rollback-area");
                $('.header-mobile').css('opacity', '1');
                $('.disabe').css('display',"none");
            }else{
                $('.header-party').addClass('header-actived');
                $('.rollback').addClass("rollback-area");
                $('.header-mobile').css('opacity', '0');
                $('.disabe').css('display',"block");
                
            }
            
        })
        $('.rollback-area').click(function(){
            alert("clicou")
            if($('.header-party').hasClass('header-actived')){
                // $('.menu-party').removeClass('header-actived')
                $('.header-party').removeClass('header-actived');
                $('.rollback').removeClass("rollback-area");
                $('.header-mobile').css('opacity', '1');
                $('.disabe').css('display',"none");
            }else{
                $('.header-party').addClass('header-actived');
                $('.rollback').addClass("rollback-area");
                $('.header-mobile').css('opacity', '0');
                $('.disabe').css('display',"block");
                
            }
            
        })
        $('.header-menu-option-link').click(function(){
            if($('.header-party').hasClass('header-actived')){
                // $('.menu-party').removeClass('header-actived')
                $('.header-party').removeClass('header-actived');
                $('.rollback').removeClass("rollback-area");
                $('.header-mobile').css('opacity', '1');
                $('.disabe').css('display',"none");
            }else{
                $('.header-party').addClass('header-actived');
                $('.rollback').addClass("rollback-area");
                $('.header-mobile').css('opacity', '0');
                $('.disabe').css('display',"block");
                
            }
            
        })
        $('.disable').click(function(){
            if($('.header-party').hasClass('header-actived')){
                // $('.menu-party').removeClass('header-actived')
                $('.header-party').removeClass('header-actived');
                $('.rollback').removeClass("rollback-area");
                $('.header-mobile').css('opacity', '1');
                $('.disabe').css('display',"none");
            }else{
                $('.header-party').addClass('header-actived');
                $('.rollback').addClass("rollback-area");
                $('.header-mobile').css('opacity', '0');
                $('.disabe').css('display',"block");
                
            }
            
        })
        
    }
    $('.company-content-item').click(function(){
        var modal = "";
        if($(this).text().includes("Política")){
            modal = $("#Política-de-Qualidade")
        }else if($(this).text().includes("Missão")){
            modal = $("#Missão")
        }else if ($(this).text().includes("Visão")){
            modal = $("#Visão")
        }else if ($(this).text().includes("Valores")){
            modal = $("#Valores")
        }
        modal.css('display','block')
    })
    $('.close').click(function(){
        $('.modal').each(function(){
            $(this).css('display', 'none')
        })
    })  
  }(jQuery));

  (function($){
    $(".clients-content").slick({
      autoplay:true,
      autoplaySpeed:5000,
      slidesToShow: 5,
      slidesToScroll: 5,
      dots:false,
      infinite: true,
      loop: true,
      swipe: true,
      draggable:true,
      prevArrow:'.controllers .prev',
      nextArrow:'.controllers .next',
      responsive: [ { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 2, } } ]
    });
  })(jQuery);

  (function($){
    $(".depositions-content").slick({
      autoplay:true,
      autoplaySpeed:10000,
      speed:600,
      slidesToShow:1,
      slidesToScroll:1,
      pauseOnHover:false,
      dots:false,
      pauseOnDotsHover:true,
      fade:false,
      draggable:true,
      prevArrow:'.controllers .prev',
      nextArrow:'.controllers .next',
    });
  })(jQuery);


    (function($){
        var clientheight = 0;
        $('.client').each(function(){
            if($(this).height()>clientheight){
                clientheight = $(this).height();
            }
        })
        $('.client').each(function(){
            $(this).css('height',clientheight)
        })
        
    })(jQuery);
  
  (function($){
    $(".home-slider").slick({
      autoplay:true,
      autoplaySpeed:10000,
      speed:600,
      slidesToShow:1,
      slidesToScroll:1,
      pauseOnHover:false,
      dots:false,
      pauseOnDotsHover:true,
      fade:false,
      draggable:true,
      prevArrow:'.controllers .prev',
      nextArrow:'.controllers .next',
    });
  })(jQuery);

  (function($){
    var height = 0;
        $('.company-content-item').each(function(){
            if($(this).hasClass("0")){
                $(this).removeClass("0");
                $(this).addClass("green")
            }
            if($(this).hasClass("3")){
                $(this).removeClass("3");
                $(this).addClass("green")
            }
            if($(this).hasClass("1")){
                $(this).removeClass("1");
                $(this).addClass("yellow")
            }
            if($(this).hasClass("2")){
                $(this).removeClass("2");
                $(this).addClass("yellow")
            }
            if($(this).height()>height){
                height = $(this).height();
            }
        });
        $('.company-content-item').each(function(){
            $(this).css('height', height);
        })


    })(jQuery);  
    
    (function($){

  // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {

    var headerHeight;
    if($(window).width()>768){
        headerHeight = $('.header-menu-party').height()
    }else{
        headerHeight = $('.header-mobile').height()
    }

    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - headerHeight 
        }, 1000, function() {
          
        });
      }
    }
  });

  var headerHeight;
    if($(window).width()>768){
        headerHeight = $('.header-menu-party').height()
    }else{
        headerHeight = $('.header-mobile').height()
    }

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        var diff = $(window).height()/2;
        var home = $('#home').offset().top;
        var company = $('#company').offset().top;
        var services = $('#services').offset().top;
        var depositions = $('#depositions').offset().top;
        var clients = $('#clients').offset().top;
        var contact = $('#contact').offset().top;
        if(scroll>home && scroll <company+headerHeight-diff){
            $('.header-menu-option').each(function(){
                $(this).removeClass('active')
            })
            $('.home-link').addClass('active')
        }else if(scroll >company+headerHeight-diff && scroll <services+headerHeight-diff){
            $('.header-menu-option').each(function(){
                $(this).removeClass('active')
            })
            $('.company-link').addClass('active');
        }else if(scroll >services+headerHeight-diff && scroll <depositions+headerHeight-diff){
            $('.header-menu-option').each(function(){
                $(this).removeClass('active')
            })
            $('.services-link').addClass('active')
        }else if(scroll >depositions+headerHeight-diff && scroll <clients+headerHeight-diff){
            $('.header-menu-option').each(function(){
                $(this).removeClass('active')
            })
            $('.depositions-link').addClass('active')
        }else if(scroll >clients+headerHeight-diff && scroll <contact+headerHeight-diff){
            $('.header-menu-option').each(function(){
                $(this).removeClass('active')
            })
            $('.clients-link').addClass('active')
        }else if(scroll >contact+headerHeight-diff){
            $('.header-menu-option').each(function(){
                $(this).removeClass('active')
            })
            $('.contact-link').addClass('active')
        }
        if($('.services-link').hasClass('active')){
            $('.service-title-cog').addClass('rotate');
        }else{
            $('.service-title-cog').removeClass('rotate');
        }
        if($(window).width()<768){
            $('.service-item').each(function(){

                if(scroll>$(this).offset().top-diff && scroll<$(this).offset().top+$(this).height()-diff){
                    $(this).addClass('service-active')
                }else{
                    $(this).removeClass('service-active')
                }
            })
        }
    })
  

})(jQuery);


