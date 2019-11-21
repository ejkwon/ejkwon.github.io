$(window).scroll(function() {
    var $el = $('.mSummary');

    if($(this).scrollTop() >= 327) $el.addClass('fixed');
    else $el.removeClass('fixed');
});

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
                if(rv < 11){
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

    expandSearch();
    mTab();
    mLayer();
    mOpen();
    /*$('.eOpenSub').click(function(){
        $('#wrap').toggleClass('openSnb');
        if ($(this).parents($('#wrap')).hasClass('openSnb')){
            $(this).children().text('메뉴 영역 닫기');
        } else {
            $(this).children().text('메뉴 영역 열기');
        }
    });*/

    // fSelect class 추가
    if($('.fSelect').length > 0){
        $('.fSelect').each(function(i){
            var arr = $(this).attr('class').split(' ');
            if(arr.length > 1){
                $(this).removeClass();
                for(var j = 0; j<(arr.length+1); j++){
                    if(j == 0){
                        $(this).addClass('fSelect');
                    }else if(j == 1){
                        $(this).addClass('eSelect');
                    }else{
                        var className = arr[(j-1)];
                        $(this).addClass(className);
                    }
                }
            }else{
                $(this).addClass('eSelect');
            }
        });
    }

    // table.fix.resize.js 선호출
    var firstidArr = [];
    $('table').each(function(i){
        if($(this).attr('id')){
            firstidArr.push($(this).attr('id'))
        }
    });

    if(firstidArr.length > 0){
        var gridTableChk = firstidArr[0].indexOf("eMultiTable");
        if(gridTableChk >= 0){
            var fixTableInterval = setInterval(function() { fixComplete() }, 100);
            function fixComplete(){
                var count = 0;
                for(var i=0; i<firstidArr.length; i++){
                    var idMame = "#"+firstidArr[i],
                        returnBol = $(idMame).fixResize("createComplete");    // fixResize js에서 완료(true가 될때까지 인터벌로 체크해줌)
                    if(returnBol){
                        count++;
                        if(count == firstidArr.length){
                            clearInterval(fixTableInterval);
                            clickEvent();
                        }
                    }
                }
            }
        }else{
            clickEvent();
        }
    }else{
        clickEvent();
    }

    // click event
    function clickEvent(){
        /* mSelect */
        $('.eSelect').click(function(){
            eToggle($(this).parents('.mSelect'), 'selected');
        });
        $('.mSelect > .fText').click(function(){
            eToggle($(this).parents('.mSelect'), 'selected');
        });
        $('.mCalendar > .fText').click(function(){
            eToggle($(this).parents('.mCalendar'), 'selected');
        });
        $('.eArrow').click(function(){
            eToggle($(this).parents('.gridSet'), 'selected');
        });
        $('.eAccordion').click(function(){
            eToggle($(this).parent('.head'), 'selected');
        });

        /* btnFavorite */
        $('.eFavorite').click(function(){
            $(this).toggleClass('selected');
            if ($(this).hasClass('selected')){
                $(this).text('즐겨찾기 해제');
            } else {
                $(this).text('즐겨찾기 추가');
            }
        });

        /* eSummary */
        $('.eSummary').click(function(){
            eToggle($(this).parent(), 'selected');
            if ($(this).parents('.mSummary').hasClass('selected')){
                $(this).text('요약 접기');
            } else {
                $(this).text('요약 펼치기');
            }
        });

        // gSetting
        $('.eClick').click(function(){
            eToggle($(this).parent(), 'selected');
        });
        $('.gSetting .eClose').click(function(){
            $(this).parents('.gSetting').removeClass('selected');
        });

        // table : array
        $('.mBoard').find('.array .text').click(function(){
            eToggle($(this).parent(), 'ascend');
            if($(this).parent().hasClass('ascend')){
                $(this).siblings('button').html('오름차순 정렬');
            } else {
                $(this).siblings('button').html('내림차순 정렬');
            }
        });
    }

    // grid table : scroll
    $('.mBoard .grid-fixed-body .grid-tbody').scroll(function() {
        var scrollVal = $(this).scrollLeft();
        var findFixed = $(this).parents('.grid-wrapper').children('.grid-fixed-column');
        if(scrollVal > 0){
            findFixed.addClass("on");
        } else {
            findFixed.removeClass("on");
        }
    });

    // 전체 목록 선택
    $('.eAllListChk').click(function(){
        if($(this).text() == '선택 취소'){
            $(this).parent('.mCtrl').remove();
        }
        $(this).text('선택 취소');
    });

    // table : mBoard.typeView tr hover
    $("body").delegate('.mBoard.typeView thead + tbody:not(.empty) > tr', 'mouseover', function(){
        tableTrHover($(this), $(this).closest(".mBoard.typeView"), "over");
    });
    $("body").delegate('.mBoard.typeView thead + tbody:not(.empty) > tr', 'mouseout', function(){
        tableTrHover($(this), $(this).closest(".mBoard.typeView"), "out");
    });

    // table : rowChk
    $("body").delegate(".eChkColor .rowChk", "click", function() {
        var findChkTarget = $(this).parent("td").parent("tr");
        var findRowspan = parseInt(findChkTarget.children().attr("rowspan"));
        if (findRowspan > 1) {
            //rowspan이 있을경우 chkTrHover() 함수에 몇번째 tr에 있는지 인자값으로 변수 전달
            var figureNum = $(this).parents("tbody tr").index();
            chkTrHover($(this), figureNum, findRowspan);
        } else {
            //rowspan이 없을경우 체크박스유무에 따라 highlight 추가 삭제
            if ($(this).is(":checked")) {
                $(this).parents("tr:first").addClass("highlight");
            } else {
                $(this).parents("tr:first").removeClass("highlight");
            }
        }
    });

    // table : allCheck
    $("body").delegate(".mBoard .allChk", "click", function() {
        var findThis = $(this),
            findTable = $(this).parents("table:first"),
            findMboard = $(this).parents(".mBoard:first"),
            findColspan;

        //typeHead class 유무에 따른 처리.
        if (findMboard.hasClass("typeHead")) {
            var findNext = findMboard.next();
            var findRowChk = findNext.find(".rowChk").not(":disabled");
        } else {
            var findRowChk = findTable.find(".rowChk").not(":disabled");
        }
        /*eChkTr code-----------------------------------------------------*/
        if (findThis.is(":checked")) {
            findRowChk.each(function() {
                //checked가 안되어 있을때 전체 체크박스에 체크.
                $(this).attr("checked", true);
                if ($(this).parents("table:first").hasClass("eChkColor")) {
                    $(this).parents("tr:first").addClass("highlight");
                }
            });
        } else {
            findRowChk.each(function() {
                //checked가 되어 있을때 전체 체크박스에 체크풀어줌.
                $(this).attr("checked", false);
                if ($(this).parents("table:first").hasClass("eChkColor")) {
                    $(this).parents("tr:first").removeClass("highlight");
                }
            });
        }
        /*----------------------------------------------------------------------*/
        //allchk colspan highlight
        //typeHead class 유무에 따른 처리.
        if (findMboard.hasClass("typeHead")) {
            //typeHead 일경우 다음 테이블을 타켓으로 잡아줌.
            findColspan = findMboard.next();
        } else {
            findColspan = findTable;
        }
        // rowChk에 체크가 안된 부분 전체 highlight 를 추가 해줌.
        var findNoRowChk = findColspan.find("tbody tr:not(tbody table tr)").each(function(i) {
            if (!$(this).children().children().hasClass("rowChk")) {
                if (findThis.is(":checked")) {
                    findColspan.find("tbody tr:not(tbody table tr)").eq(i).addClass("highlight");
                } else {
                    findColspan.find("tbody tr:not(tbody table tr)").eq(i).removeClass("highlight");
                }
            }
        });
    });

    /*ePosClick*/
    $('body').delegate('.ePosTarget .ePosClick', 'click', function(e){
        layerPosition($(this), "LRTB", e);
    });

    /*ePosHover*/
    $('body').delegate('.ePosTarget .ePosHover', 'mouseover', function(e){
        layerPosition($(this), "LRTB", e);
    });

    function layerPosition(_this, str, e){
        // 툴팁의 넓이 + offset좌표 의 값이 body태그의 width보다 클때 좌표값 왼쪽으로 이동

        var thisTarget = _this.parents('.gScroll'),
            bodyTarget,
            offsetLeftNum = 0;
        if(thisTarget.length >= 1){
            bodyTarget = thisTarget;
            offsetLeftNum = bodyTarget.offset().left;
        }else{
            bodyTarget = $('#container');
        }

        var bodyWidth = bodyTarget.outerWidth(),
            findTarget = $(_this.siblings('.ePosLayer')),
            targetWidth = findTarget.outerWidth(),
            offsetLeft = (_this.offset().left-offsetLeftNum),
            posWidth = targetWidth + offsetLeft;

        if(str == "LRTB"){
            if(bodyWidth < posWidth){
                findTarget.parents('.ePosTarget').addClass('gRight').removeClass('gLeft');
                if(findTarget.offset().left <= 5){
                    findTarget.parents('.ePosTarget').addClass('gLeft').removeClass('gRight');
                }
            } else {
                findTarget.parents('.ePosTarget').addClass('gLeft').removeClass('gRight');
            }
        }

        // 툴팁의 top 값이 window height값보다 클때 좌표값 상단으로 이동
        var findFooter = $('#footer'),
            bodyTargetH,
            propFooterHeight = 0;
        if(findFooter.length >= 1){
            propFooterHeight = findFooter.outerHeight();
        }
        var offsetTopNum = 0;

        if(thisTarget.length >= 1){
            bodyTargetH = thisTarget;
            propFooterHeight = 0;
            offsetTopNum = bodyTargetH.offset().top;
        }else{
            bodyTargetH = $(window);
        }

        var propwindowHeight = bodyTargetH.height()-propFooterHeight,
            targetHeight = findTarget.outerHeight(),
            propscrollTop = bodyTargetH.scrollTop();
        if(thisTarget.length >= 1){ propscrollTop = 0; }

        var offsetTop = (_this.offset().top-offsetTopNum),
            posHeight = (offsetTop-propscrollTop)+targetHeight+_this.height();

        if(propwindowHeight < posHeight){
            var propHeight = (offsetTop-propscrollTop) - targetHeight;
            var propHeadHeight = 0;
            if($('#header').length >= 1 && thisTarget.length < 1){
                propHeadHeight = $('#header').height();
            }

            if(propHeight > propHeadHeight){
                findTarget.parents('.ePosTarget').addClass('gTop').removeClass('gBottom');
            }else{
                findTarget.parents('.ePosTarget').addClass('gBottom').removeClass('gTop');
            }
        }else{
            findTarget.parents('.ePosTarget').addClass('gBottom').removeClass('gTop');
        }

        e.preventDefault();
    }
});

function chkTrHover(findTarget, figureNum, findRowspan) {
    //rowspan이 몇개에 tr에 적용되어 있는지 체크한후 체크박스 유무에 따라 highlight 추가 삭제
    var findTisTarget = $(".eChkColor").find("tbody tr:not(tbody table tr)");
    for (var i = figureNum; i < (figureNum + findRowspan); i++) {
        if (findTarget.is(":checked")) {
            findTisTarget.eq(i).addClass("highlight");
        } else {
            findTisTarget.eq(i).removeClass("highlight");
        }
    }
}

// table : tr hover
function tableTrHover(findTarget, findBoardTarget, str){
    var figurei = 0;
    var findRowspan = 0;
    var figureindex = findTarget.index();

    var findNoRowspan = findBoardTarget.find('tbody tr').each(function(i){
        var figureNum = parseInt($(this).children().attr('rowspan'));
        if(!($(this).children().is('th'))) {
            if (!figureNum) {
                figureNum = 1;
            }
            if (figureNum >= 1) {
                figurei = i;
                findRowspan = figureNum;

                if (figureindex >= figurei && figureindex < (figurei + findRowspan)) {
                    for (var j = figurei; j < (figurei + findRowspan); j++) {
                        if (str == "over") {
                            findBoardTarget.find('tbody tr').eq(j).addClass('hover');
                        } else {
                            findBoardTarget.find('tbody tr').eq(j).removeClass('hover');
                        }
                    }
                } else {
                    if (str == "over") {
                        findBoardTarget.find('tbody tr').eq(figureindex).addClass('hover');
                    } else {
                        findBoardTarget.find('tbody tr').eq(figureindex).removeClass('hover');
                    }
                }
            }
        }
    });
}

// toggleClass
function eToggle(target, className) {
    target.toggleClass(className);
}

// mSearchEngine
function expandSearch(){
    // 상세검색 열기/닫기
    $('.mSearchEngine .eExpand').click(function(){
        var $findEngine = $(this).parents('.mSearchEngine');
        var btnText = '상세검색 열기';
        $findEngine.toggleClass('expand');
        if ($findEngine.hasClass('expand')){
            btnText = '상세검색 닫기';
        }
        $(this).children('span').text(btnText);
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

// mOpen
function mOpen(){
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
                var findShow = $(this).parent().find('.mTooltip').hasClass('show');
                if(!findShow){
                    $(this).parents('.'+ flag +':first').css({'zIndex':0});
                }else{
                    $(this).parents('.'+ flag +':first').css({'zIndex':2});
                }
            }
        }
    });
    $('body').delegate('.mOpen .eClose', 'click', function(e){
        $(this).parents('.open:first').hide();
        e.preventDefault();
    });
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
        findTarget.css({'top':propTop+50, 'left':propLeft, 'marginLeft':propMarginLeft}).show();
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
        //findTarget.addClass("typeModal");
         findTarget.parent().append('<div id="dimmed_'+ findTarget.attr('id') +'" class="dimmed"></div>');
         if($('.dimmed').length > 1 ){
             $('.dimmed').addClass('hide');
             var propZIndex = 110 + $('.dimmed').length;
             $(findTarget).css({'zIndex':propZIndex+5});
             $('#dimmed_'+ findTarget.attr('id')).css({ 'zIndex' : propZIndex }).removeClass('hide');
         }
        e.preventDefault();
    });
}

