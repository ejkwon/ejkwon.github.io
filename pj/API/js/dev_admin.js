$(document).ready(function(){
    tabMenu('#snb > li');
    tabMenu('#snb .children > li');
    tabMenu('.review .sorting > li');
    tabMenu('.mPaginate .page > a');
    mLayer();
    mTab();
    mTooltip();
    clickEvent();
    mInputForm();
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

//mLayer
function mLayer(){
    // mLayer : close
    $.mLayer_close = function(target){
        var findParent = target.parents('.mLayer:first');
         var findDimmed = $('#dimmed_' + findParent.attr('id'));
         findParent.hide();
         if(findDimmed){
             if($('.dimmed').length > 1){
                 $('.dimmed').removeClass('hide');
             }
             findDimmed.remove();
         }
         return false
    }
    $('body').delegate('.mLayer .eClose', 'click', function(e){
        $.mLayer_close($(this));
        e.preventDefault();
    });
    // mLayer : eLayerClick
    $('body').delegate('.eLayerClick', 'click', function(e){
        var findThis = $(this),
            findTarget = $($(this).attr('href')),
            propTargetWidth = findTarget.outerWidth(),
            propTargetHeight = findTarget.outerHeight(),
            propDocWidth = $(document).width(),
            propDocHeight = $(document).height(),
            propTop = findThis.offset().top,
            propLeft = findThis.offset().left,
            figure = propLeft + propTargetWidth,
            propMarginLeft = 0;

        var propFooterHeight = $('body').find('#footer').outerHeight();
        if(propFooterHeight == null){
            propFooterHeight = 0;
        }
        propTargetHeight = propTargetHeight+propFooterHeight+20;

        if((propDocHeight-propTop) < propTargetHeight){
            if(propDocHeight < propTargetHeight) {
                propTop = -20;
            } else {
                propTop = propDocHeight - propTargetHeight - 10;
            }
        }

        if(propDocWidth <= figure){
            if(propTargetWidth > propLeft){
                propMarginLeft = '-' + ( propTargetWidth / 2 ) + 'px';
                propLeft = '50%';
            } else {
                propLeft = propLeft - propTargetWidth + 20;
            }
        }
        findTarget.css({'top':propTop+30, 'left':propLeft, 'marginLeft':propMarginLeft}).show();
        e.preventDefault();
    });
    // eModal : dimmed layer position
    function dimmedLayerPosition(target){
        if(!target.attr('fixed')){
            var findLayer = target,
                propWinWidth = $(window).width(),
                propWinHeight = $(window).height(),
                propWidth = findLayer.outerWidth(),
                propHeight = findLayer.outerHeight(),
                propWinScroll = $(window).scrollTop();

            if(propWinWidth < propWidth){
                findLayer.css({'left':0, 'marginLeft':0});
            } else {
                var propLeft = propWidth/2;
                findLayer.css({'left':'50%', 'marginLeft':'-'+ propLeft +'px'});
            }

            var propTop = (propWinHeight/2) - (propHeight/2) + propWinScroll;
            findLayer.css({'top':propTop});

            findLayer.show();
        }
    }
    // eModal : show
    $('body').delegate('.eModal', 'click', function(e){
        var findTarget = $($(this).attr('href'));
        //call dimmed layer position function
        dimmedLayerPosition(findTarget);
         findTarget.parent().append('<div id="dimmed_'+ findTarget.attr('id') +'" class="dimmed"></div>');
         if($('.dimmed').length > 1 ){
             $('.dimmed').addClass('hide');
             var propZIndex = 110 + $('.dimmed').length;
             $(findTarget).css({'zIndex':propZIndex+5});
             $('#dimmed_'+ findTarget.attr('id')).css({ 'zIndex' : propZIndex }).removeClass('hide');
         }
        e.preventDefault();
    });

    //-------------------- MouseOver layer show --------------------//
    $('body').delegate('.eLayerOverReview', 'mouseenter', function(){
        var findTarget = $($(this).attr('href'));
        var bodyWidth = $('body').width();
        var targetWidth = findTarget.outerWidth();
        var setTop = $(this).offset().top;
        var setLeft = $(this).offset().left+$(this).width()+3;
        var posWidth = targetWidth + setLeft;
        if(bodyWidth < posWidth){
            targetWidth = posWidth - bodyWidth;
            findTarget.css({"top":setTop,"left":setLeft, "margin-left":'-'+ targetWidth +'px'});
        } else {
            findTarget.css({"top":setTop,"left":setLeft, "margin-left":0});
        }
        findTarget.mouseenter(function() {
            $(this).show();
        }).mouseleave(function() {
            $(this).hide();
        });
        $(this).css("display","block");
        findTarget.show();
    });
    $('body').delegate('.eLayerOverReview', 'mouseleave', function(){
        var findTarget = $("body #container .mLayerOver .mLayer");
        $(this).css("display","");
        findTarget.hide();
    });
}

//mTab
function mTab() {
    $('.mTab').each(function(){
        var selected = $(this).find('> ul > li.selected > a');
        if(selected.siblings('ul').length <= 0){
            $(this).removeClass('gExtend');
        }
    });

    $('body').delegate('.eTab a', 'click', function(e){
        var _li = $(this).parent('li').addClass('selected').siblings().removeClass('selected'),
            _target = $(this).attr('href'),
            _siblings = $(_target).attr('class'),
            _arr = _siblings.split(" "),
            _classSiblings = '.'+_arr[0];

        $(_target).show().siblings(_classSiblings).hide();

        // gExtend ctrl
        var mtab = $(this).parents('.mTab:first');
        if($(this).siblings('ul').length > 0){
            if(!mtab.hasClass('gExtend')){
                mtab.addClass('gExtend');
            }
        } else {
            if($(this).parents('ul:first').siblings('a').length <= 0){
                mtab.removeClass('gExtend');
            }
        }
        e.preventDefault();
    });
}

// click event
function clickEvent(){
    $('.eClick').click(function(){
        eToggle($(this).parent(), 'selected');
    });
    $('.userInfo .eClose').click(function(){
        $(this).parents('.profile').removeClass('selected');
    });
    $('.eQuick').click(function(){
        eToggle($(this).parent(), 'selected');
    });

}

// toggleClass
function eToggle(target, className) {
    target.toggleClass(className);
}

// toolTip
function mTooltip(){
    // 고정
    $('body').delegate('.mTooltip .eTip', 'click', function(e){
        mTooltipMouseEvent(this, e);
    });
// mouseover
    $('body').delegate('.mTooltip .eTipHover', 'mouseover', function(e){
        mTooltipMouseEvent(this, e);
    });

    function mTooltipMouseEvent(_this, e){
        var findSection = $(_this).parents('.section:first'),
            findTarget = $($(_this).siblings('.tooltip')),
            findTooltip = $('.tooltip'),
            findHover = $(_this).hasClass('eTipHover'),
            findShow = $(_this).parents('.mTooltip:first').hasClass('show');

        if(findShow && !findHover){
            $('.mTooltip').removeClass('show');
            findTarget.hide();
            findSection.css({'zIndex':0, 'position':'static'});
        }else{
            $('.mTooltip').removeClass('show');
            $(_this).parents('.mTooltip:first').addClass('show');
            findSection.css({'zIndex':0, 'position':'static'});
            findSection.css({'zIndex':100, 'position':'relative'});

            // 툴팁의 넓이 + offset좌표 의 값이 body태그의 width보다 클때 좌표값 왼쪽으로 이동
            var bodyWidth = $('body').width(),
                targetWidth = findTarget.outerWidth(),
                offsetLeft = $(_this).offset().left,
                posWidth = targetWidth + offsetLeft;

            if(bodyWidth < posWidth){
                var propMarginLeft = (targetWidth+$(_this).width()+10);
                var propWidth = offsetLeft - targetWidth;
                if(propWidth > 0){
                    findTarget.addClass('posRight').css({'marginLeft': '-'+ targetWidth +'px' });
                }else{
                    findTarget.removeClass('posRight').css({'marginLeft': 0 });
                }
            } else {
                findTarget.removeClass('posRight').css({'marginLeft': 0 });
            }
            // 툴팁의 top 값이 window height값보다 클때 좌표값 상단으로 이동
            var findFooter = $('#footer');
            var propFooterHeight = 0;
            if(findFooter.length >= 1){
                propFooterHeight = findFooter.outerHeight();
            }
            var propwindowHeight = $(window).height()-propFooterHeight,
                targetHeight = findTarget.outerHeight(),
                propscrollTop = $(window).scrollTop();
            offsetTop = $(_this).offset().top,
                posHeight = (offsetTop-propscrollTop)+targetHeight+$(_this).height();

            if(propwindowHeight < posHeight){
                var propMarginTop = (targetHeight+$(_this).height()+10);
                var propHeight = (offsetTop-propscrollTop) - targetHeight;
                var propHeadHeight = 0;
                if($('#header').length >= 1){
                    propHeadHeight = $('#header').height();
                }
                if(propHeight > propHeadHeight){
                    findTarget.addClass('posTop').css({'marginTop': '-'+ propMarginTop +'px' });
                }else{
                    findTarget.removeClass('posTop').css({'marginTop': 0 });
                }
            }else{
                findTarget.removeClass('posTop').css({'marginTop': 0 });
            }

            findTooltip.hide();
            findTarget.show();

            if($('#tooltipSCrollView').length > 0){
                $('#tooltipSCrollView').remove();
            }
        }
        e.preventDefault();
    }

// 동적
    $('body').delegate('.mTooltip .eTipScroll', 'click', function(e){
        $('#tooltipSCrollView').remove();

        var findShow = $(this).parents('.mTooltip:first').hasClass('show');
        if(findShow){
            $('.mTooltip').removeClass('show');
        }else{
            var tooltip = $(this).siblings('.tooltip').clone();
            var prevClass = $(this).parent('.mTooltip').attr('class');
            $('body').append('<div id="tooltipSCrollView" class="'+ prevClass +'" virtual="true">');
            $('#tooltipSCrollView').append(tooltip);

            $('.mTooltip').removeClass('show');
            $(this).parents('.mTooltip:first').addClass('show');

            var findThis = $(this),
                findTarget = $('#tooltipSCrollView').find('.tooltip'),
                propTargetWidth = findTarget.outerWidth(),
                propDocWidth = $(document).width(),
                propTop = findThis.offset().top+5,
                propLeft = findThis.offset().left,
                figure = propLeft + propTargetWidth,
                propMarginLeft = '-12px',
                propMarginTop = findThis.outerHeight();

            if(propDocWidth <= figure){
                propLeft = propLeft - propTargetWidth + 20;
                findTarget.addClass('posRight');
            } else {
                findTarget.removeClass('posRight');
            }
            findTarget.css({'top':propTop, 'left':propLeft, 'marginLeft':propMarginLeft, 'marginTop':propMarginTop}).show();

            $('.mTooltip .icon').each(function(i){
                var findScroll = $(this).hasClass('eTipScroll');
                if(!findScroll){
                    $(this).parent().removeClass('show');
                    $(this).parent().find('.tooltip').hide();
                }
            });
        }
        e.preventDefault();
    });

    $('body').delegate('.mTooltip .eClose', 'click', function(e){
        // 동적
        if($(this).parents('.mTooltip:first').attr('virtual')){
            $('#tooltipSCrollView').remove();
        } else {
            var findSection = $(this).parents('.section:first');
            var findTarget = $(this).parents('.tooltip:first');
            findTarget.hide();
            findSection.css({'zIndex':0, 'position':'static'});
        }
        $('.mTooltip').removeClass('show');
        e.preventDefault();
    });
}

//mInputForm typeSelect
function mInputForm(){
    var findTarget = $('.mInputForm.typeSelect.eToggle');
    findTarget.find('.button').click(function(e){
        $(this).parents('.eToggle').toggleClass('selected');
    });
}