var oldonload = window.onload;

window.onload = function() {
    if (oldonload) {
        oldonload();
    }
    if ( window.jQuery === undefined ) {
        return false;
    }

    // toolTip
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
    $('body').delegate('.mTooltip .eClose', 'click', function(e){
        var findSection = $(this).parents('.section:first');
        var findTarget = $(this).parents('.tooltip:first');
        $('.mTooltip').removeClass('show');
        findTarget.hide();
        findSection.css({'zIndex':0, 'position':'static'});
        e.preventDefault();
    });

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
            if(propWinHeight < propHeight){
                window.scrollTo(0,0);
                findLayer.css({'top':0});
            } else {
                var propTop = (propWinHeight/2) - (propHeight/2) + propWinScroll;
                findLayer.css({'top':propTop});
            }
            findLayer.show();
        }
    }

    // mLayer : eLayerClick
    $.mLayer_open = function(target){
        var findThis = target,
            propBtnWidth = findThis.outerWidth(),
            findTarget = $(target.attr('href')),
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

        //call dimmed layer position function
        dimmedLayerPosition(findTarget);
        findTarget.parent().append('<div id="dimmed_'+ findTarget.attr('id') +'" class="dimmed"></div>');
        if($('.dimmed').length > 1 ){
            $('.dimmed').addClass('hide');
            var propZIndex = 110 + $('.dimmed').length;
            $(findTarget).css({'zIndex':propZIndex+5});
            $('#dimmed_'+ findTarget.attr('id')).css({ 'zIndex' : propZIndex }).removeClass('hide');
        }
        return false
    }
    $('body').delegate('.eLayerClick', 'click', function(e){
        $.mLayer_open($(this));
        e.preventDefault();
    });
    if ( $(".eLayerOpen").length > 0 ) { // 디폴트로 레이어 열기
        $.mLayer_open($(".eLayerOpen"));
    }

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
    $('body').delegate('.mLayer .footer .eClose', 'click', function(e){
        $.mLayer_close($(this));
        e.preventDefault();
    });
    $('body').delegate('.mLayer > .eClose', 'click', function(e){
        $.mLayer_close($(this));
        e.preventDefault();
    });
    $('body').delegate('.mPostcode > .eClose', 'click', function(e){
        var findParent = $(this).parents('.mPostcode:first');
        var findDimmed = $('#dimmed_' + findParent.attr('id'));
        findParent.hide();
        if(findDimmed){
            if($('.dimmed').length > 1){
                $('.dimmed').removeClass('hide');
            }
            findDimmed.remove();
        }
        e.preventDefault();
    });

    // 필수입력 position
    function mobileRequiredPosition(){
        if($(document).width() < 768) {
            $('.mRequired').css('top', '-25px');
        } else {
            $('.mRequired').css('top', '-38px');
        }
    }
    mobileRequiredPosition();

    // window resize
    $(window).resize(function(){

        // 필수입력 position
        mobileRequiredPosition();

        // dimmed layer position
        if($('.dimmed').length > 0){
            $('.dimmed').each(function(){
                if($(this).css('display') == 'block'){
                    var layerId = $(this).attr('id').replace('dimmed_','');
                    dimmedLayerPosition($('#'+layerId));
                }
            });
        }
    });


    /* Start - form control */
    function createSelect(target){
        var select = target;
        select.wrap('<div class="fSelect" />');
        var fSelect = select.parent('.fSelect');
        fSelect.append('<ul class="list"></ul>');
        var list = fSelect.find('.list');
        $('option', select).each(function(){
            var text = $(this).text();
            list.append('<li>'+ text +'</li>');
            if($(this).attr('selected') == true){
                selectedText = $(this).text();
                list.before('<p class="now" title="선택옵션">'+ selectedText +'</p>');
            }
        });
        select.removeClass('eSelect');
        list.before('<button type="button">토글</button>');
    }
    function selectListToggle(target){
        var fSelect = target.parents('.fSelect:first');
        if(target.css('display') == 'block'){
            target.hide();
            fSelect.removeClass('show');
        } else {
            target.show();
            fSelect.addClass('show');
        }
    }

	function  selectListAutoHeight(){
		var listHeight=$(".fSelect .list").height();
		if(listHeight>=200){
			$(".fSelect .list").css({
				"overflow":"auto",
				"height":"200"
			});
		}
	}

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

    function createFile(target){
        var file = target;
        file.wrap('<div class="fFile">');
        var fFile = file.parent('.fFile');
        fFile.append('<span class="fileName"></span>');
        fFile.append('<button type="button">선택</button>');
        var button = fFile.find('button');
        file.removeClass('eFile');
    }

    $(function(){
		selectListAutoHeight();
        //create select box
        $('.eSelect').each(function(){
            createSelect($(this));
        });
        // fSelect
        $('body').delegate('.fSelect button', 'click', function(){
            var list = $(this).siblings('.list');
            selectListToggle(list);
        });
        $('body').delegate('.fSelect .list li', 'click', function(){
            var fSelect = $(this).parents('.fSelect:first');
            var select = $(this).parents('.list:first').siblings('select');
            var index = $(this).index();
            var option = $('option:eq('+ index +')', select);
            var text = option.text();
            var now = fSelect.find('.now');
            now.text(text);
            option.attr('selected', true);
            var list = $(this).parent('.list');
            list.hide();
            fSelect.removeClass('show');
        });
        $('body').delegate('.fSelect .now', 'click', function(){
            var list = $(this).siblings('.list');
            selectListToggle(list);
        });
        $('body').delegate('.fSelect', 'mouseleave', function(){
            var list = $(this).find('.list');
            var fSelect = list.parents('.fSelect:first');
            list.hide();
            fSelect.removeClass('show');
        });

        // checkbox
        $('.fCheck input[type="checkbox"]').each(function(){
            checkFlag($(this));
        });
        $('body').delegate('.fCheck input[type="checkbox"]', 'click', function(){
            checkFlag($(this));
        });

        // radio
        $('body').delegate('.fRadio input[type="radio"]', 'click', function(){
            radioFlag($(this));
        });
        $('.fRadio input[type="radio"]').click(function(){
            radioFlag($(this));
        });

        //file
        $('.eFile').each(function(){
            createFile($(this));
        });
        $('body').delegate('.fFile input[type="file"]', 'change', function(){
            var val = $(this).val();
            var fileName = $(this).siblings('.fileName');
            fileName.text(val);
        });
        $('body').delegate('.fFile button', 'click', function(){
            $(this).siblings('input[type="file"]').trigger('click');
        });
    });
    /* End - form control */

    /* Start - multi shopping mall */
    $(".mLang li a").click(function(){
        if($(this).parent().hasClass("select")){
            $(this).parent().removeClass("select");
        }else{
            $(this).parent().addClass("select");
        }
    });
    /* End - multi shopping mall */

    /* Start - mBeginning */
    var $tab = $(".mBeginning");

    $tab.find("h3").each(function(idx){
        $(this).find("a").bind("mouseenter focus", function(event){
            $(this).parent().addClass("selected").siblings("h3").removeClass("selected");
            $(this).parent().next(".tabContent").addClass("show").siblings(".tabContent").removeClass("show");
            $(".mBeginning .gNav").removeClass("hide").addClass("show");
            event.preventDefault();
        });
    });
    /* End - mBeginning */

    $(".mList .layer").hide();
    $(".mList a").click(function(){
        $(this).children(".layer")
        if($(this).children(".layer").is(":hidden")){
            $(".mList .layer").hide();
            $(this).children(".layer").show();
        }else{
            $(this).children(".layer").hide();
        }
    });

    $('.eToggle .eButton').click(function(){
        if($(this).parent().hasClass('disabled')==false){
            $(this).parent('.eToggle').toggleClass('selected');
        }
    });

    $("#header .language .button").click(function(){
        if($(this).parent().hasClass('disabled')==false){
            $(this).parent('.language').toggleClass('selected');
        }
    });
    $("#header .language .list a").click(function(){
        var code = $(this).html();
        $(this).parents('.language').children(".button").html(code);
        $(this).parents('.language').toggleClass('selected');
    });

    $('.mAllCheck .fCheck').click(function(){
        var target = $(this).parent('.mAllCheck').siblings('.termArea');
        if($(this).hasClass('selected') == true){
            $('.termArea .fCheck').removeClass('selected');
            target.slideDown();
        } else {
            $('.termArea .fCheck').addClass('selected');
            target.slideUp();
        }
    });

    $('body').delegate('.eTab li', 'click', function(e){
        $(this).addClass('selected').siblings().removeClass('selected');
        _target = $(this).children("a").attr('href');
        $(_target).addClass('selected').siblings().removeClass('selected');
        e.preventDefault();
    });

}