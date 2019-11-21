$(document).ready(function(){

    $(".navList a").click(function(event){            
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
    });

    $('.visual .bg').slick({
        fade: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: 'linear',
        arrows: false,
        swipe: false,
        speed:2500
    });
    $('.attitude').slick({
        centerMode: true,
        infinite: true,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        swipe: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplaySpeed: 800,
        speed: 3000,
        responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });

    $('#portfolioList').NewWaterfall({
      // width of grid item
      width: 330,
      // refresh delay
      delay: 60,
      // By default, the plugin will add the class 'show' to grid item when in viewport
      // setting the options to true will remove the class when out of the viewport
      repeatShow: false
      
    });

// layer script
var $btnTop = $('#wrap .btnTop'),
    btnTopBottom,
    timer,
    endTiemr,
    flagWin = true;

$(window).resize(function () {
    $btnTop.css({"bottom":""});
    btnTopBottom = parseInt($btnTop.css('bottom').replace('px', ''));
    scrollEvent();
}).resize();

$(window).scroll(function () {
    scrollEvent();
});

function scrollEvent(){
    var totalScroll = $(document).height()-$(window).height(),
        footerHeight = $('#footer').height();

    $btnTop.hide();

    if ($(window).scrollTop() > 100) { // 스크롤 내릴 표시
        var thisTop = totalScroll-footerHeight,
            fixtdCul = btnTopBottom;
        if($(window).scrollTop() > thisTop){
            fixtdCul = ($(window).scrollTop()-thisTop)+btnTopBottom;
        }
        $btnTop.css({"bottom":fixtdCul});

        clearTimeout(timer);
        timer = setTimeout( refresh , 300 ,fixtdCul, thisTop, totalScroll, btnTopBottom);
    }

    //header class add
    var headerHeight = 0; //$('#header').height();
    if(headerHeight < $(window).scrollTop()){
        $('#header').addClass('fixed');
    }else{
        $('#header').removeClass('fixed');
    }
}

function refresh(fixtdCul, thisTop, totalScroll, btnTopBottom){
    if ($(window).scrollTop() > 100) { // 스크롤 내릴 표시
        $btnTop.fadeIn(650);

        var footNum = $('#footer').offset().top;
        var btnNum = $btnTop.offset().top;
        if(footNum <= btnNum){
            fixtdCul = (totalScroll-thisTop)+btnTopBottom;
        }
    }else{
        $btnTop.fadeOut(500);
    }
    $btnTop.css({"bottom":fixtdCul});

    clearTimeout(endTiemr);
    endTiemr = setTimeout( hideTopBtnEvent , 3000);
}

function hideTopBtnEvent(){
    clearTimeout(endTiemr);
    $btnTop.fadeOut(500);
}

$btnTop.mouseover(function() {
    clearTimeout(endTiemr);
});

$btnTop.mouseout(function() {
    clearTimeout(endTiemr);
    endTiemr = setTimeout( hideTopBtnEvent , 3000);
});

$btnTop.click(function () {
    $('html').velocity('scroll', {  duration: 750, offset: 0, mobileHA: false, easing: 'easeInSign' });
});

$('#header .eFold').click(function(e) {
    $(this).parents('#wrap').toggleClass('expand');
});
});

function tabMenu(selector){
    var $selectMenuItem =null;
    $(selector).click(function(){
        if($(this).siblings().hasClass('selected'))
        {
            $(this).siblings().removeClass("selected");
        }
        if($selectMenuItem!=null){
            $selectMenuItem.removeClass("selected");
        }
        $selectMenuItem = $(this);
        $selectMenuItem.addClass("selected");
    })
}