$(document).ready(function(){
    // intro
    var totalNum = $('.mIntroNav li').length;
    var nowNum = 0;
    var interval;
    //네비게이션 메뉴 클릭 이벤트
    $('.mIntroNav ul a').click(function (){
        var target = $(this);
        var index = $(this).parent().index();
        nowNum = index;
        pageChangeEvent(target, index);

        return false;
    });
    //페이지 슬라이드 공통으로쓰는 함수
    function pageChangeEvent(target, yIndex){
        target.parent('li').addClass('selected').siblings().removeClass('selected');
        var yValue = yIndex*(-800);
        $('.mIntro').css("transform","translate3d(0,"+yValue+"px,0)");
        $('.mIntro').children().eq(yIndex).addClass('animation').siblings().removeClass('animation');

        timerStartEvent(yIndex);
    }
    //마우스 휠 이벤트
     $(window).mousewheel(function(event, delta, deltaX, deltaY) {
        if($('.introArea').length >= 1){
            clearTimeout($.data(this, 'timer'));
            $.data(this, 'timer', setTimeout(function() {
                //console.log("delta==="+delta);
                nowNumsetting(delta);
            }, 200));
        }
    });
    //키 up, down 이벤트
    $(window).keydown(function(e){
        var key = e.which;
        var direction;
        switch(key){
            case 38:
                direction = 1;
                break;
            case 40:
                direction = -1;
        }
        nowNumsetting(direction);
    });
    //마우스, 키 이벤트 공통으로 페이지 넘버링해주는 함수
    function nowNumsetting(num){
        if (num >= 0) {
            nowNum--;
            if(nowNum < 0){
                nowNum = 0;
            }
        }else{
            nowNum++;
            if(nowNum > (totalNum-1)){
                nowNum = (totalNum-1);
            }
        }
        var target = $('.mIntroNav ul li').eq(nowNum).find('a');
        pageChangeEvent(target, nowNum);
    }
    //애니메이션 일정시간 지나면 실행되게 class 넣어주는 함수
    function timerStartEvent(num){
        if(interval){
            clearInterval(interval);
        }
        if(num == 5){
            var hasChk = $('#chapter6.animation .layer').hasClass('two');
            if(hasChk){
                $('#chapter6.animation .layer').removeClass('two');
            }            
            interval = setInterval(updateTransition, 7000);
        }
    }

    function updateTransition() {
        if(interval){
            clearInterval(interval);
        }
        $('#chapter6.animation .layer').addClass('two');
    }
    //리사이징할때 닫시버튼 위치 지정.
    $(window).resize(function(){
        var width = $(this).width(),
            height = $(this).height(),
            introWidth = $('.introArea').width(),
            introHeight = $('.introArea').height();
        if(width < introWidth || height < introHeight){
            $('.introArea .btnClose').css({'position':'fixed'});
            var offset = $('.introArea').offset();
            if(width < introWidth && height >= introHeight){
                var setTop = offset.top+28;
                $('.introArea .btnClose').css({'top':setTop});
            }else if(width >= introWidth && height < introHeight){
                var setLeft = (offset.left+introWidth)-($('.introArea .btnClose').width()+32);
                $('.introArea .btnClose').css({'left':setLeft});
            }else {
                $('.introArea .btnClose').css({'top':'28px', 'left':''});
            }
        }else{
            $('.introArea .btnClose').css({'position':'absolute', 'top':'28px', 'left':''});
        }
    }).resize();

    $('aside .btnFold').click(function(){
        $(this).parent().toggleClass('foldArea');
        if ($(this).parent().hasClass('foldArea')){
            $(this).children().text('OPEN');
        } else {
            $(this).children().text('CLOSE');
        }
    });
    $('.mToolbar .button').click(function(){
        var fParent = $(this).parent();
        if (fParent.hasClass('toolGroup')) {
            $(this).toggleClass('selected');
        } else {
            $(this).parent().toggleClass('selected');
        }
    });
    $('.btnFavorite').click(function(){
        $(this).toggleClass('selected');
    });
    $('.btnExpand').click(function(){
        if(!$(this).parents('.mGroup').hasClass('eExpand')) {
            $('.mGroup').removeClass('eExpand').children('.btnExpand').removeClass('reduce').attr('title', '확대하기');
        }
        if($(this).hasClass('reduce')){
            $(this).removeClass('reduce').attr('title','확대하기').parents('.mGroup').removeClass('eExpand').parents('#container').removeClass('eExpand');
            $('.mGroup').first().addClass('eExpand');
        } else {
            $(this).addClass('reduce').attr('title','축소하기').parents('.mGroup').addClass('eExpand').parents('#container').addClass('eExpand');
        }
    });

    $('.btnToggle').click(function(){
        var fParent = $(this).parent();
        if (fParent.hasClass('toggleWrap')){
            if(!fParent.hasClass('disabled')){
                if (fParent.hasClass('selected')) {
                    fParent.removeClass('selected');
                } else {
                    fParent.addClass('selected');
                }
            }
        } else {
            if ($(this).hasClass('selected')){
                $(this).removeClass('selected');
            } else {
                $(this).addClass('selected');
            }
        }
    });

    $('.language .list li, .eSave').click(function(){
        $(".mProgress").show();
        $(".dimmed").show();
    });

    $('.btnSelect').click(function(){
        var fParent = $(this).parent();
        if(fParent.hasClass('mSelect')){
            if (fParent.hasClass('selected')) {
                fParent.removeClass('selected');
            } else {
                fParent.addClass('selected');
            }
        } else {
            if ($(this).hasClass('selected')) {
                if($(this).hasClass('eLayerClick')){
                    $($(this).attr("href")).hide();
                }
                $(this).removeClass('selected');
            } else {
                $(this).addClass('selected');
            }
        }
    });

    $('.eFullLayer').click(function(){
        var findTarget = $($(this).attr('href'));
        findTarget.show();
        findTarget.parents('#contents').addClass('eFullPopup');
    });

    // mLayer : eLayerClick
    $("body").delegate(".eLayerClick", "click", function(e){
        var findThis = $(this),
            propBtnWidth = findThis.outerWidth(),
            findTarget = $($(this).attr("href")),
            propTargetWidth = findTarget.outerWidth(),
            propTargetHeight = findTarget.outerHeight(),
            propDocWidth = $(document).width(),
            propDocHeight = $(document).height(),
            propTop = findThis.offset().top,
            propLeft = findThis.offset().left,
            figure = propLeft + propTargetWidth,
            propMarginLeft = 0;
        if((propDocHeight-propTop) < propTargetHeight){
            if(propDocHeight < propTargetHeight) {
                propTop = 0;
            } else {
                propTop = propDocHeight - propTargetHeight - 10;
            }
        }
        if(propDocWidth <= figure){
            if(propTargetWidth > propLeft){
                propMarginLeft = "-" + ( propTargetWidth / 2 ) + "px";
                propLeft = "50%";
            } else {
                propLeft = propLeft - propTargetWidth + 20;
            }
        }
        //레이어 위치 값을 구해서 해당 위치에 팝업.
        findTarget.css({"top":propTop+10, "left":propLeft, "marginLeft":propMarginLeft}).show();

        //preventDefault 는 a 태그 처럼 클릭 이벤트 외에 별도의 브라우저 행동을 막기 위해 사용됨.
        e.preventDefault();
    });

    //-------------------- modal layer show, loading layer show --------------------//
    //레이어 위치 값을 구해서 해당 위치에 팝업.
    function dimmedLayerPosition(target){
        if(!target.attr("fixed")){
            var findLayer = target,
                propWinWidth = $(window).width(),
                propWinHeight = $(window).height(),
                propWidth = findLayer.outerWidth(),
                propHeight = findLayer.outerHeight(),
                propWinScroll = $(window).scrollTop();
            if(propWinWidth < propWidth){
                findLayer.css({"left":0, "marginLeft":0});
            } else {
                var propLeft = propWidth/2;
                findLayer.css({"left":"50%", "marginLeft":"-"+ propLeft +"px"});
            }
            var propTop = (propWinHeight/2) - (propHeight/2) + propWinScroll;
            findLayer.css({"top":propTop});

            findLayer.show();
        }
    }

    $("body").delegate(".eModal", "click", function(e){
        var findTarget = $($(this).attr("href"));
        //call dimmed layer position function
        dimmedLayerPosition(findTarget);
        //흰색 투명 배경 생성.
        findTarget.parent().append('<div id="dimmed_'+ findTarget.attr('id') +'" class="dimmed"></div>');
        //흰색 투명 배경이 2개 이상일경우 zindex를 높여서 처리해줌.
        if($(".dimmed").length > 1 ){
            $(".dimmed").addClass("hide");
            var propZIndex = 110 + $(".dimmed").length;
            $(findTarget).css({"zIndex":propZIndex+5});
            $("#dimmed_"+ findTarget.attr("id")).css({ "zIndex" : propZIndex }).removeClass("hide");
        }
        e.preventDefault();
    });

    //mLayer : close
    $.mLayer_close = function(target){
        var findParent = target.parents(".mLayer:first");
        var findDimmed = $("#dimmed_" + findParent.attr("id"));
        findParent.hide();

        //흰색 투명 배경 있을 경우 삭제.
        if(findDimmed){
            if($(".dimmed").length > 1){
                $(".dimmed").removeClass("hide");
            }
            findDimmed.remove();
        }
        return false
    }

    $('body').delegate('.mLayer .eClose', 'click', function(){
        $.mLayer_close($(this));
    });
    $('body').delegate('.mFullLayer .eClose', 'click', function(){
        $(this).parents('.mFullLayer').hide();
        $(this).parents('#contents').removeClass('eFullPopup');
    });
    $('body').delegate('.mProgress .eClose', 'click', function(){
        $(this).parents('.mProgress').hide().next('.dimmed').hide();
        $('.sideImage .mImgList .mLoading').hide();
    });

    function checkFlag(target){
        if(target.attr('checked') == true){
            target.parent('.fCheck').addClass('selected');
        } else {
            target.parent('.fCheck').removeClass('selected');
        }
    }
    function radioFlag(target){
        var name = target.attr('name');
        var siblings = $('input[name="'+ name +'"]');
        if(target.attr('checked') == true){
            siblings.parent('.fRadio').removeClass('selected');
            target.parent('.fRadio').addClass('selected');
        }
    }

    // checkbox
    $('.fCheck input[type="checkbox"]').each(function(){
        checkFlag($(this));
    });
    $('body').delegate('.fCheck input[type="checkbox"]', 'click', function(){
        checkFlag($(this));
    });
    // radio
    $('.fRadio input[type="radio"]').each(function(){
        radioFlag($(this));
    });
    $('body').delegate('.fRadio input[type="radio"]', 'click', function(){
        radioFlag($(this));
    });

    $('.mGoodsList li a').click(function(){
        var fParent = $(this).parents('.mLayer');
        fParent.hide();
        $('.btnSelect').removeClass("selected");
    });

    $('.gridSet button').click(function(){
        $(this).parent().siblings().removeClass("selected");
        $(this).parent().addClass("selected");
    });
    $('.mToolbar .imgSelect li').click(function(){
        $(this).parents('.mToolbar').hide();
    });
});