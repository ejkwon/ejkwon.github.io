$(document).ready(function(){
    //IE10이하 업그레이드
    var agent = navigator.userAgent.toLowerCase();
    var agentStr = navigator.userAgent;

    function upgradeBrowser() {
        if (agent.indexOf('msie') != -1) {
            if (agentStr.indexOf('Trident/7.0') > -1) {
                if (navigator.appName == 'Netscape' && navigator.userAgent.search('Trident') != -1) {
                    $('body').attr('id', 'unsupported');
                }else{
                    alert('호환성 보기를 해제하세요.');
                }
            }else{
                var rv = getInternetExplorerVersion();
                if(rv < 10){
                    $('body').attr('id', 'unsupported');
                    if(rv <= 8){
                        $('body').addClass('ie8');
                    }
                }
            }
        }else{
            var filter = 'win16|win32|win64|mac';
            if(navigator.platform){
                if(0 <= filter.indexOf(navigator.platform.toLowerCase())){
                    var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
                    var is_safari = navigator.userAgent.indexOf('Safari') > -1;
                    var is_safari3 = navigator.userAgent.indexOf('applewebkit/5') > -1;
                    if ((is_chrome)&&(is_safari)) {is_safari=false;}
                    if(is_safari || is_safari3) {
                        $('body').attr('id', 'unsupported');
                    }
                }
            }
        }


        var findDis = $('.unsupported').css('display');
        if(findDis != "none"){
            $('.unsupported .close').click(function(){
                $('.unsupported').remove();
                $('body').attr('id', '');
            });
            $('.unsupported .check').click(function(){
                var target = $(this);
                closePop(target);
            });
        }
    }


    if (getCookie("unsupportedsave") != "done"){
        upgradeBrowser();
    }

    function getInternetExplorerVersion() {
        var rv = -1; // Return value assumes failure.
        if (navigator.appName == 'Microsoft Internet Explorer') {
            var ua = navigator.userAgent;
            var re = new RegExp('MSIE ([0-9]{1,}[\.0-9]{0,})');
            if (re.exec(ua) != null)
                rv = parseFloat(RegExp.$1);
        }
        return rv;
    }


    //팝업 닫기
    function closePop(target) {
        var hasName = target.hasClass('selected');
        if (!hasName) {
            setCookie("unsupportedsave", "done", 1);
        }
        $('.unsupported').remove();
        $('body').attr('id', '');
    }

    //로컬 쿠키 저장
    function setCookie(name, value, expiredays) {
        var todayDate = new Date();
        todayDate.setDate(todayDate.getDate() + expiredays);
        document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";";
    }

    //로컬 쿠기 저장된 데이터 가져오기
    function getCookie(name) {
        var nameOfCookie = name + "=";
        var x = 0;
        while (x <= document.cookie.length) {
            var y = (x + nameOfCookie.length);
            if (document.cookie.substring(x, y) == nameOfCookie) {
                if ((endOfCookie = document.cookie.indexOf(";", y)) == -1) {
                    endOfCookie = document.cookie.length;
                }
                return unescape(document.cookie.substring(y, endOfCookie));
            }
            x = document.cookie.indexOf(" ", x) + 1;
            if (x == 0) break;
        }
        return "";
    }



    $(".enterNav").addClass("hide");

    // visual slider
    $('.eVisualSlider').bxSlider({
        mode : 'fade',
        easing : 'linear',
        speed: 1000,
        auto : true,
        pause: 2500,
        pager : false,
        controls : false
    });

    // globalMall slider
    $('.eMallSlider').bxSlider({
        ticker: true,
        speed: 40000,
        slideWidth: 184,
        pager: false,
        maxSlides: 6,
        moveSlides: 1
    });

    // 모바일의 경우 애니매이션 제거
    var screenWidth = window.screen.availWidth;
    if(screenWidth < 768){
        $('.mSkill').addClass('animation');
        $('.enterNav').addClass('hide');
    }

    // 스크롤 이벤트
    $(window).scroll(function() {
        var value = $(this).scrollTop();
        var findId;

        if(screenWidth >= 768) {
            if (value < 250) {
                $('.enterprise').children().removeClass('animation');
            } else {
                if (250 <= value && value < 1110) {
                    findId = "#knowhow";
                } else if (1110 <= value && value < 2550) {
                    findId = "#infra";
                } else if (2550 <= value) {
                    findId = "#solution";
                }
                $('.enterprise').find(findId).addClass('animation');
                if ($('#infra').hasClass('animation') == true) {
                    setTimeout(zooming, 2700);
                    function zooming() {
                        $('#infra .center').removeClass('zoom');
                    }
                }
                $('.enterNav').find('[href=' + findId + ']').addClass('selected').siblings().removeClass('selected');
            }
            if(value < 467) {
                $('.enterNav').addClass('hide');
            } else {
                $('.enterNav').removeClass('hide');
            }
        }
    });

    function shortcut(target) {
        var findHref = $(target.getAttribute('href'));
        if( findHref.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: findHref.offset().top
            }, 500);
        }
        return false;
    }

    // 바로가기 클릭 이벤트
    $('.btnShortcut').click(function (){
        shortcut(this);
    });

    // 네비게이션 메뉴 클릭 이벤트
    $('.enterNav .circle').click(function (){
        $(this).addClass('selected').siblings().removeClass('selected');
        shortcut(this);
    });

    // tooltip
    $('.eTip').click(function(){
        var tooltip = $(this).parent();
        var findLi = $(this).parent().parent();
        tooltip.toggleClass("show");

        if(tooltip.hasClass('show')){
            findLi.css('z-index','2');
            $(this).siblings('.tooltip').fadeIn("fast");
        } else {
            $(this).siblings('.tooltip').fadeOut("fast");
            findLi.css('z-index','');
        }
    });

    // TOP 버튼 이벤트
    $('.btnTop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 500, 'swing');
        return false;
    });
});