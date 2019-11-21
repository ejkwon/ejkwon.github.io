$(document).ready(function(){
    $("#sidebar .menu li, #header .gnb li").click(function(){
        $(this).addClass("selected").siblings().removeClass("selected");
    });
    $(".mImgSelect li label").click(function(){
        $(this).addClass("eSelected").parents().siblings().children().removeClass("eSelected");
    });
    $(".btnBookmark").click(function(){
        $(this).toggleClass("selected");
    });

    //buttonFormArea
    $(".buttonFormArea > a").click(function(){
        if($(this).next(".mButtonForm").css("display") == "none"){
            $(this).next(".mButtonForm").addClass("selected");
        } else {
            $(this).next(".mButtonForm").removeClass("selected");
        }
    });
    $(".mButtonForm .list").click(function(){
        $(this).parents(".mButtonForm").removeClass("selected");
    });

    // ----------------------------------------------------------------- SUIO ------------------------------------------------------- //
    // toolTip
    // 고정
    $('body').delegate('.mTooltip .eTip', 'click', function(e){
        var findSection = $(this).parents('.section:first');
        var findTarget = $($(this).siblings('.tooltip'));
        var findTooltip = $('.tooltip');
        $('.mTooltip').removeClass('show');
        $(this).parents('.mTooltip:first').addClass('show');
        $('.section').css({'zIndex':0, 'position':'static'});
        findSection.css({'zIndex':100, 'position':'relative'});
        // 툴팁의 넓이 + offset좌표 의 값이 body태그의 width보다 클때 좌표값 왼쪽으로 이동
        var bodyWidth = $('body').width();
        var targetWidth = findTarget.outerWidth();
        var offsetLeft = $(this).offset().left;
        var posWidth = targetWidth + offsetLeft;
        if(bodyWidth < posWidth){
            findTarget.addClass('posRight').css({'marginLeft': '-'+  targetWidth +'px' });
        } else {
            findTarget.removeClass('posRight').css({'marginLeft': 0 });
        }
        if($('#tooltipSCrollView').length > 0){
            $('#tooltipSCrollView').remove();
        }
        findTooltip.hide();
        findTarget.show();
        e.preventDefault();
    });
    // 동적
    $('body').delegate('.mTooltip .eTipScroll', 'click', function(e){
        if($('#tooltipSCrollView').length == 0){
            var tooltip = $(this).siblings('.tooltip').clone();
            var prevClass = $(this).parent('.mTooltip').attr('class');
            $('body').append('<div id="tooltipSCrollView" class="'+ prevClass +'" virtual="true">');
            $('#tooltipSCrollView').append(tooltip);
            var findThis = $(this),
                propBtnWidth = findThis.outerWidth(),
                findTarget = $('#tooltipSCrollView').find('.tooltip'),
                propTargetWidth = findTarget.outerWidth(),
                propTargetHeight = findTarget.outerHeight(),
                propDocWidth = $(document).width(),
                propDocHeight = $(document).height(),
                propTop = findThis.offset().top,
                propLeft = findThis.offset().left,
                figure = propLeft + propTargetWidth,
                propMarginLeft = '-11px',
                propMarginTop = findThis.outerHeight();
            if((propDocHeight-propTop) < propTargetHeight){
                if(propDocHeight < propTargetHeight) {
                    propTop = 0;
                } else {
                    propTop = propDocHeight - propTargetHeight - 10;
                }
            }
            if(propDocWidth <= figure){
                propLeft = propLeft - propTargetWidth + 20;
                findTarget.addClass('posRight');
            } else {
                findTarget.removeClass('posRight');
            }
            findTarget.css({'top':propTop, 'left':propLeft, 'marginLeft':propMarginLeft, 'marginTop':propMarginTop}).show();
        }
        e.preventDefault();
    });
    $('body').delegate('.mTooltip .eClose', 'click', function(e){
        // 동적
        if($(this).parents('.mTooltip:first').attr('virtual')){
            $('#tooltipSCrollView').remove();
        } else {
        // 고정
            var findSection = $(this).parents('.section:first');
            var findTarget = $(this).parents('.tooltip:first');
            $('.mTooltip').removeClass('show');
            findTarget.hide();
            findSection.css({'zIndex':0, 'position':'static'});
            e.preventDefault();
        }
    });

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
    $('body').delegate('.mLayer .footer .eClose', 'click', function(){
        $.mLayer_close($(this));
    });
    $('body').delegate('.mLayer > .eClose', 'click', function(){
        $.mLayer_close($(this));
    });
    // mLayer : eLayerClick
    $('body').delegate('.eLayerClick', 'click', function(e){
        var findThis = $(this),
            propBtnWidth = findThis.outerWidth(),
            findTarget = $($(this).attr('href')),
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
                propMarginLeft = '-' + ( propTargetWidth / 2 ) + 'px';
                propLeft = '50%';
            } else {
                propLeft = propLeft - propTargetWidth + 20;
            }
        }
        findTarget.css({'top':propTop+10, 'left':propLeft, 'marginLeft':propMarginLeft}).show();
        e.preventDefault();
    });

    // checkbox, radio
    var regexpSelectedClassName = /(^|\s)eSelected($|\s)/;
    function updateCheckedDesign(target) {
        var cur = target;
        for (var i = 0; i < 4; i++) {
            cur = cur.parentNode;
            if ( ! cur || ! cur.ownerDocument) {
                break;
            }
            if (cur.tagName.toUpperCase() === 'LABEL') {
                var className = cur.className;
                var hasClass = regexpSelectedClassName.test(className);
                if (target.checked && hasClass === false) {
                    cur.className = className + ' eSelected';
                } else if ( ! target.checked && hasClass === true) {
                    cur.className = className.replace(regexpSelectedClassName, ' ');
                }
                break;
            }
        }
    }
    $('body')
        // checked 상태에 따라 해당 요소의 design을 자동으로 업데이트해줍니다.
        .delegate('input[type=checkbox],input[type=radio]', 'updateDesign', function() {
                var target = this;
                window.setTimeout(function(){updateCheckedDesign(target);});
         })
        // checked 상태에 따라 label에 eSelected class를 붙여줍니다.
        .delegate('input[type=checkbox],input[type=radio]', 'click', function() {
                var target = this;
                window.setTimeout(function(){updateCheckedDesign(target);});
            // radio를 클릭한 경우에 대한 처리
            if ($(this).is('input[type=radio]') === true) {
                $('input[type=radio][name="' + this.name + '"]').each(function() {
                    var target = this;
                    window.setTimeout(function(){updateCheckedDesign(target);});
                 });
             }
         });
        // 페이지 로드시 checked 상태에 따라 design 요소 업데이트
        $('input[type=checkbox],input[type=radio]').each(function() {
                updateCheckedDesign(this);
        });

        //-------------------- mOpen + eOpenClick --------------------//
        $("body").delegate(".mOpen .eOpenClick", "click", function(e){
            var findTarget = $($(this).attr("href"));
            findTarget.toggle();
            e.preventDefault();
        });
        $("body").delegate(".mOpen", "mouseleave", function(){
            var findClose = $(this).find(".eClose");
            if(findClose.length <= 0){
                var findTarget = $(this).find(".open");
                //find(gGoods)
                var flag = $(this).find(".eOpenOver").attr("find");
                //open 클래스 요소를 비활성화
                findTarget.hide();
                if(flag){
                    //flag 있을경우 부모 노드 zindx 값 0 설정.
                    $(this).parents("."+ flag +":first").css({"zIndex":0});
                }
            }
        });

        //-------------------- placeholder --------------------//
        //placeholder가 지원되지 않는 IE8부터 적용되는 코드.
        $.fn.extend({
            placeholder : function() {
                if (hasPlaceholderSupport() === true) {
                    return this;
                }
                return this.each(function(){
                    var findThis = $(this);
                    var sPlaceholder = findThis.attr('placeholder');
                    if ( ! sPlaceholder) {
                        return;
                    }
                    findThis.wrap('<label class="ePlaceholder" />');
                    var sDisplayPlaceHolder = $(this).val() ? ' style="display:none;"' : '';
                    findThis.before('<span' + sDisplayPlaceHolder + '>' + sPlaceholder + '</span>');
                    this.onpropertychange = function(e){
                        e = event || e;
                        if (e.propertyName == 'value') {
                            $(this).trigger('focusout');
                        }
                    };
                });
            }
        });
        $(':input[placeholder]').placeholder();
        $('body').delegate('.ePlaceholder span', 'click', function(){
            $(this).hide();
        });
        $('body').delegate('.ePlaceholder :input', 'focusin', function(){
            $(this).prev('span').hide();
        });
        $('body').delegate('.ePlaceholder :input', 'focusout', function(){
            if (this.value) {
                $(this).prev('span').hide();
            } else {
                $(this).prev('span').show();
            }
        });
        function hasPlaceholderSupport() {
            if ('placeholder' in document.createElement('input')) {
                return true;
            } else {
                return false;
            }
        }

        // eChkColor
        $('body').delegate('.eChkColor .rowChk', 'click', function(){
            if($(this).is(':checked')){
                $(this).parents('tr:first').addClass('selected');
            } else {
                $(this).parents('tr:first').removeClass('selected');
            }
        });

        // table : allCheck
        $('body').delegate('.mBoard .allChk', 'click', function(){
            var findThis = $(this),
                findTable = $(this).parents('table:first'),
                findMboard = $(this).parents('.mBoard:first');

            if(findTable.hasClass('eChkBody')){
                var findRowChk = findTable.find('.rowChk').not(':disabled');
                if(findThis.is(':checked')){
                    findRowChk.attr('checked', true);
                } else {
                    findRowChk.attr('checked', false);
                }
            } else {
                if(findMboard.hasClass('typeHead')){
                    var findNext = findMboard.next();
                    var findRowChk = findNext.find('.rowChk').not(':disabled');
                } else {
                    var findRowChk = findTable.find('.rowChk').not(':disabled');
                }
                if(findThis.is(':checked')){
                    findRowChk.each(function(){
                        $(this).attr('checked', true);
                        if($(this).parents('table:first').hasClass('eChkColor')){
                            $(this).parents('tr:first').addClass('selected');
                        }
                    });
                } else {
                    findRowChk.each(function(){
                        $(this).attr('checked', false);
                        if($(this).parents('table:first').hasClass('eChkColor')){
                            $(this).parents('tr:first').removeClass('selected');
                        }
                    });
                }
            }
        });

        // Table : tr hover
        $('body').delegate('.eChkColor > tbody:not(.empty) > tr', 'mouseover', function(){
            $(this).addClass("hover");
        });
        $('body').delegate('.eChkColor > tbody:not(.empty) > tr', 'mouseout', function(){
            $(this).removeClass("hover");
        });
});