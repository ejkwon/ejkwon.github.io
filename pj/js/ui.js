var oldonload = window.onload;

window.onload = function() {
    if (oldonload) {
        oldonload();
    }

    if ( window.jQuery === undefined ) {
        return false;
    }

    $.fn.inlay = function( options ){
        var opts = $.extend( {}, $.fn.inlay.defaults, options )
            , $this = $(this)
            , prevTarget = null
            , getTarget = function( $el ){
                var $target = null;
                if ( $.isFunction(opts.findSelector) ) {
                    $target = opts.findSelector( $el );
                } else {
                    $target = $el.parent().parent().next();
                };
                return $target;
            };

        function init() {
            $this.each(function(){
                if ( $(this).hasClass(opts.selected) ) {
                    getTarget( $(this) ).addClass( opts.enableClass );
                };
            });
            setEvent();
        };

        function toggleRow( $el ) {
            var $target = getTarget( $el );
            if ( $el.hasClass( opts.selected) ) {
                $el.removeClass(opts.selected);
                $target.removeClass(opts.enableClass);
            } else {
                if ( opts.indentity ) {
                    $target.parent().find('.' +  opts.selected).removeClass(opts.selected);
                    $target.siblings().removeClass(opts.enableClass);
                };
                $el.addClass(opts.selected);
                $target.addClass(opts.enableClass);
            };
        };

        function setEvent() {
            if ( opts.eventType === "click" ) {
                $this.unbind("click").bind("click", function(){
                    toggleRow( $(this) );
                });
            } else if ( opts.eventType === "hover" ) {
                $this.unbind("mouseenter").bind("mouseenter", function(){
                    toggleRow( $(this) );
                });
            };
        };
        init();
    };

    $.fn.inlay.defaults = {
        'selected' : "selected",
        'findSelector' : false,
        'enableClass' : "enabled",
        'indentity' : true,
        'eventType' : 'click',
        'animate' : true
    };


    if ( window.call_inlay ) {
        call_inlay();
    };


    // tab
    $.eTab = function(ul){
        $(ul).find('a').click(function(){
            var _li = $(this).parent('li').addClass('selected').siblings().removeClass('selected'),
                _target = $(this).attr('href'),
                _siblings = '.' + $(_target).attr('class');
            $(_target).show().siblings(_siblings).hide();
            return false
        });
    }
    if ( window.call_eTab ) {
        call_eTab();
    };

    // tab(new)
    $('.mTab').each(function(){
        var selected = $(this).find('> ul > li.selected > a');
        if(selected.siblings('ul').length <= 0){
            $(this).removeClass('gExtend');
        }
    });
    $('body').delegate('.eTab a', 'click', function(e){
        var _li = $(this).parent('li').addClass('selected').siblings().removeClass('selected'),
            _target = $(this).attr('href'),
            _siblings = '.' + $(_target).attr('class');
        $(_target).show().siblings(_siblings).hide();
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

    //툴팁, 레이어팝업 디스플레이
    function hiddenTooltip() {
        $(".mTooltip").each(function (i) {
            $(this).hide();
        });
    };
    function hiddenLayer() {
        $(".mLayer").each(function (i) {
            $(this).hide();
        });
    };

    //$(".eClose").click(function () {
        //$(this).parent().hide();
    //});
    $('body').delegate('.mLayer > .eClose', 'click', function(){
        $(this).parent().hide();
    });

    $('body').delegate('.eLyrClose', 'click', function(){
        $(this).parent().parent().parent().hide();
    });

// toolTip
    //cTip으로 인한 mBoard.gScroll 자식에 eTip 있을경우 eTipScroll class 변경
    var findBoard = $('.mBoard');
    if(findBoard.length > 0){
        setTimeout(eTipCheckEvent, 500);
        function eTipCheckEvent(){
            findBoard.each(function(i){
                var strClassName = $(this).hasClass('gScroll');
                if(strClassName){
                    var findTip = $(this).find('.cTip .eTip');
                    if(findTip.length > 0){
                        findTip.addClass('eTipScroll').removeClass('eTip');
                    }
                }
            });
        }
    }

    $('body').delegate('.eTip', 'click', function(e){
        var findTarget = $(this).siblings('.mTooltip');
        if(findTarget.length <= 0){
            mTooltipSuioEvent(this, e);
        }else{
            mTooltipModuleEvent(this, e);
        }

        if($('#tooltipSCrollView').length > 0){
            $('#tooltipSCrollView').parent().remove();
        }
    });

    function mTooltipModuleEvent(_this, e){
        var findSection = $(_this).parents('.section:first'),
            findTarget = $($(_this).siblings('.mTooltip')),
            findTooltip = $('.mTooltip'),
            findHover = $(_this).hasClass('eTipHover'),
            findShow = findTarget.hasClass('show');

        if(findShow && !findHover){
            //$('.mTooltip').removeClass('show');
            mTootipClose($('.mTooltip'), "show", findTarget);
            findTarget.hide();
            findSection.css({'zIndex':'', 'position':''});
            findTarget.css({'zIndex':''});
        }else{
            //$('.mTooltip').removeClass('show');
            mTootipClose($('.mTooltip'), "show", findTarget);
            findTarget.addClass('show');

            $('.section').css({'zIndex':'', 'position':''});
            findSection.css({'zIndex':100, 'position':'relative'});//.siblings().css({'zIndex':'', 'position':''});

            // 툴팁의 넓이 + offset좌표 의 값이 body태그의 width보다 클때 좌표값 왼쪽으로 이동
            var bodyWidth = $('body').width(),
                targetWidth = findTarget.outerWidth(),
                offsetLeft = $(_this).offset().left,
                posWidth = targetWidth + offsetLeft,
                figureLeftPos = $(_this).position().left+10,
                strMode = "";

            if(bodyWidth < posWidth){
                var propMarginLeft = figureLeftPos-targetWidth+45;
                var propWidth = offsetLeft - targetWidth;
                if(propWidth > 0){
                    findTarget.css({'left': propMarginLeft }).find('span').attr('class','').addClass('icoArrTR');
                    strMode = "icoArrTR";
                }else{
                    findTarget.css({'left': figureLeftPos }).find('span').attr('class','').addClass('icoArrTL');
                }
            } else {
                findTarget.css({'left': figureLeftPos }).find('span').attr('class','').addClass('icoArrTL');
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
                posHeight = (offsetTop-propscrollTop)+targetHeight+$(_this).height(),
                figureTopPos = $(_this).position().top;

            if(propwindowHeight < posHeight){
                var propMarginTop = figureTopPos-(targetHeight+$(_this).height()+13),
                    propHeight = (offsetTop-propscrollTop) - targetHeight,
                    propHeadHeight = 0;

                if($('#header').length >= 1){
                    propHeadHeight = $('#header').height();
                }
                if(propHeight > propHeadHeight){
                    if(strMode == "icoArrTR"){
                        findTarget.css({'top': propMarginTop }).find('span').attr('class','').addClass('icoArrB');
                    }else{
                        findTarget.css({'top': propMarginTop }).find('span').attr('class','').addClass('icoArrBL');
                    }

                }else{
                    if(strMode == "icoArrTR"){
                        findTarget.css({'top': figureTopPos }).find('span').attr('class','').addClass('icoArrTR');
                    }else{
                        findTarget.css({'top': figureTopPos }).find('span').attr('class','').addClass('icoArrTL');
                    }
                }
            }else{
                if(strMode == "icoArrTR"){
                    findTarget.css({'top': figureTopPos }).find('span').attr('class','').addClass('icoArrTR');
                }else{
                    findTarget.css({'top': figureTopPos }).find('span').attr('class','').addClass('icoArrTL');
                }
            }
            //findTooltip.hide();
            mTootipClose(findTooltip, "hide", findTarget, "S");
            findTarget.show();
            findTarget.css({'zIndex':'99'});
        }
        e.preventDefault();
    }

    function mTooltipSuioEvent(_this, e){
        var findSection = $(_this).parents('.section:first'),
            findTarget = $($(_this).siblings('.tooltip')),
            findTooltip = $('.tooltip'),
            findHover = $(_this).hasClass('eTipHover'),
            findShow = $(_this).parents('.mTooltip:first').hasClass('show');

        if(findShow && !findHover){
            //$('.mTooltip').removeClass('show');
            mTootipClose($('.mTooltip'), "show", findTarget);
            findTarget.hide();
            findSection.css({'zIndex':'', 'position':''});
        }else{
            //$('.mTooltip').removeClass('show');
            mTootipClose($('.mTooltip'), "show", findTarget);
            $(_this).parents('.mTooltip:first').addClass('show');

            $('.section').css({'zIndex':'', 'position':''});
            findSection.css({'zIndex':100, 'position':'relative'});//.siblings().css({'zIndex':'', 'position':''});

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
            //findTooltip.hide();
            mTootipClose(findTooltip, "hide", findTarget, "M");
            findTarget.show();
        }
        e.preventDefault();
    }

    function mTootipClose(findTooltip, str, findTarget, strOpt){
        if(str == "hide"){
            findTooltip.hide();
        }else{
            findTooltip.removeClass('show');
        }

        if(str == "hide"){
            if(strOpt == "S"){
                $('.cTip .mTooltip').show();
                $('.cTip .mTooltip .tooltip').hide();
            }else if(strOpt == "M"){
               $('.mTooltip').hide();
               $('.cTip .mTooltip').show();
            }
        }
    }

    $('body').delegate('.mTooltip .eTipScroll', 'click', function(e){
        $('#tooltipSCrollView').parent().remove();
        $('.section').css({'zIndex':'', 'position':''});

        var findShow = $(this).parents('.mTooltip:first').hasClass('show');
        if(findShow){
            $('.mTooltip').removeClass('show');
        }else{
            var tooltip = $(this).siblings('.tooltip').clone();
            var prevClass = $(this).parent('.mTooltip').attr('class');
            $('body').append('<div class="cTip"><div id="tooltipSCrollView" class="'+ prevClass +'" virtual="true"></div>');
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
        var findSection = $(this).parents('.section:first');
        findSection.css({'zIndex':'', 'position':''});

        var findTarget = $(this).parent();
        findTarget.hide();
        findTarget.css({'zIndex':''});

        $('.mTooltip').removeClass('show');
        e.preventDefault();
    });

    $(".eTipR").click(function (e) { //.icoHelp2, .mLayerShow
        $next = $(this).next();
        if ($next.css("display") == "block") {
            $next.hide();
        } else {
            hiddenTooltip();
            $next.show();
        }
        $(this).next().css("left", e.pageX-300);
        $(this).next().css("top", e.pageY-5);
    });

    $(".mTooltip .gMiddle").mouseleave(function (e){
        //$(".mTooltip").css("display","none");
    });

     $(".eLayer").click(function (e) {
        $next = $(this).next();
        if ($next.css("display") == "block") {
            $next.hide();
        } else {
            hiddenLayer();
            $next.show();
        }
        $(this).next().css("left", e.pageX);
        $(this).next().css("top", e.pageY);
    });

    // 라디오버튼과 체크박스 선택시 강조효과
    /* for checked radio */
    $("input[type=radio]").each(function(){

        if ( $(this).is(":checked")) {
             $(this).parent("label").addClass("eSelected");
        }

        $(this).click(function() {
            var $this = $(this),
                sClickRadio = $this.attr("name");

            if (!$this.is(':checked')) return;

            $("input[type=radio][name=" + sClickRadio + "]").parent("label").removeClass("eSelected");
            $this.parent("label").addClass("eSelected");
        });
    });

    /* for checked checkbox */
    $("input[type=checkbox]").each(function() {
        var $this = $(this);

        if ( $this.is(":checked")) {
             $this.parent("label").addClass("eSelected");
        }

        $this.click(function(){
            var $this = $(this),
            sMethod = $this.is(":checked") ? 'addClass' : 'removeClass';
            $this.parent("label")[sMethod]("eSelected");
        });
    });

    $("input[disabled=disabled]").each(function(){
        $(this).parent("label").removeClass("eSelected");
    });

    // 테이블의 배경색 변경
    /* for check all */
    $('.eBody input[type=checkbox][class=allCk], .eTr input[type=checkbox][class=allCk]').click(function () {
        var $this = $(this);
            $checkItemList = $this.parents('table:first').find('.rowCk'),
            $selectedList = $this.parents('table:first').find('tbody, tr'),
            bChecked = $this.is(":checked"),
            sMethod = bChecked ? 'addClass' : 'removeClass';

        $checkItemList.attr('checked', bChecked);
        $selectedList[sMethod]("selected");
    });

    /* for check - Tr */
    $('.eTr .rowCk').click(function () {
        var $this = $(this),
            $checkAll = $this.parents('table:first').find('.allCk'),
            $selectedItem = $this.parents('tr:first');

        if ($this.is(":checked")) {
            $selectedItem.addClass("selected");
        } else {
            $selectedItem.removeClass("selected");
            $checkAll.attr('checked', false);
        };
    });

    /* for check - Body */
    $('.eBody .rowCk').click(function () {
        var $this = $(this),
            $checkAll = $this.parents('table:first').find('.allCk'),
            $selectedItem = $this.parents('tbody:first');

        if ($this.is(":checked")) {
            $selectedItem.addClass("selected");
        } else {
            $selectedItem.removeClass("selected");
            $checkAll.attr('checked', false);
        };
    });

    /* for over - Body, for over - Tr  */
    $('.eBody tbody, .eTr tbody tr').mouseover(function () {
        $(this).addClass("hover");
    }).mouseout(function () {
        $(this).removeClass("hover");
    });

    // Placeholder
    $(".ePlaceholder :input").each(function() {
        var $input = $(this), $label = $input.prev("span");
        $label.attr({
            id : "label_" +  $input.attr("name")
        });
        $label.addClass("pos");
        blur_aciton(this);
    }).bind("focus",function(){
        focus_action(this);
    }).bind("blur",function(){
        blur_aciton(this);
    });

    $(".ePlaceholder span").bind("click", "span", function() {
        var $input = $(this).next(':input');
        focus_action($input[0]);
        $input.focus();
    });

    function blur_aciton ( input ) {
        var $input = $(input);
        if(!$.trim($input.val())) $("#label_" + $input.attr("name")).show();
        else $("#label_" + $input.attr("name")).hide();
    }

    function focus_action( input ) {
        var $input = $(input);
        $("#label_" + $input.attr("name")).hide();
    }

    // mOpen
    $('body').delegate('.mOpen .eOpenClick', 'click', function(e){
        var findTarget = $($(this).attr('href'));
        findTarget.toggle();
        e.preventDefault();
    });
    $('body').delegate('.mOpen .eOpenOver', 'mouseenter', function(){
        var findTarget = $(this).siblings('.open');
        var flag = $(this).attr('find');
        findTarget.show();
        if(flag){
            $(this).parents('.'+ flag +':first').css({'zIndex':1});
        }
    });
    $('body').delegate('.mOpen', 'mouseleave', function(){
        var findClose = $(this).find('.eClose');
        if(findClose.length <= 0){
            var findTarget = $(this).find('.open');
            var flag = $(this).find('.eOpenOver').attr('find');
            findTarget.hide();
            if(flag){
                $(this).parents('.'+ flag +':first').css({'zIndex':0});
            }
        }
    });
    $('body').delegate('.mOpen .eClose', 'click', function(e){
        $(this).parents('.open:first').hide();
        e.preventDefault();
    });
};