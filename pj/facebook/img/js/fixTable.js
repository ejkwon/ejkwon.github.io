;(function ($) {
    'use strict';

    $.fn.fixTable = function (figureInt) {
        var figureIePadding = 17,
            figureChromePadding = 5,
            arrIndex = [],
            arrRowSpan = [],
            arrTrRowSpan = [],
            arrTrNum = [],
            figureBtnNum = 0,
            figureAddNum = 0,
            figureFixInt = figureInt;

        var methods = {
            _eInit: function (options) {
                return this.each(function () {
                    var findThis = $(this);
                    methods._eSetup.apply(this, Array.prototype.slice.call(arguments, 1));
                });
            },

            /*픽스 테이블 나누기*/
            _eSetup: function () {
                var findThis = $(this),
                    findWrapper,
                    findFixedBody,
                    captionName = findThis.find('caption').text(),
                    figureThisWidth = findThis.width(),
                    figureParentWidth = findThis.parents('.mBoard').width(),
                    flagWidth = false,
                    flagHeight = false;

                if(figureThisWidth > figureParentWidth){
                   flagWidth = true;
                }

                figureBtnNum = findThis.find('tbody .btnFold').length;

                findThis.addClass('grid-table');
                findThis.wrap('<div class="grid-wrapper"></div>');
                findThis.wrap('<div class="grid-fixed-body"></div>');
                findThis.wrap('<div class="grid-tbody"></div>');

                findWrapper = findThis.closest('.grid-wrapper');
                findFixedBody = findWrapper.find('.grid-fixed-body');

                setTimeout(callFunction, 100);

                function callFunction(){
                    //Head clone call
                    objStart._eFixedHead(findThis, findWrapper, findFixedBody, captionName);
                    if(flagWidth && figureFixInt > 0){
                        //Column setup call
                        objStart._eFixedColumnSetup(findThis, findWrapper, findFixedBody, captionName);
                    }
                    //scroll event call
                    objStart._eBindScroll(findThis, findWrapper);
                    //mouse Wheel call
                    objStart._eMouseWheelEvent(findWrapper);
                    //table tr toggle call
                    objStart._eToggleEvent(findThis, findWrapper, flagWidth);
                    //rowspan check call
                    if(findWrapper.find('tbody .btnFold').length > 0){
                        objStart._eRowspanCheck(findThis, findWrapper, flagWidth, "S", false);
                    }
                }
            }
        };

        var objStart = {

            /*Head clone*/
            _eFixedHead: function (findThis, findWrapper, findFixedBody, captionName) {
                var findHead = $('<div class="grid-thead"><table class="grid-table"><caption>'+captionName+'</caption></table></div>').prependTo(findFixedBody),
                    findBody = findThis.closest('.grid-tbody'),
                    findThead = findThis.find('thead'),
                    headHeight = findHead.outerHeight(true);

                findThead.clone().appendTo(findHead.find('table'));
                findThis.css({'margin-top': -findHead.outerHeight(true)});

                setTimeout(headMarginInput, 300, findHead);
                function headMarginInput(findHead){
                    if(headHeight != findHead.outerHeight(true)){
                        findThis.css({'margin-top': -findHead.outerHeight(true)});
                    }
                }

                var figureHeight = findBody.height(),
                    figureTableHeight = findBody.find('.grid-table').height()-findHead.height(),
                    flagHeight = false,
                    flagWidth = false,
                    paddingNum = figureIePadding,
                    is_chrome = navigator.userAgent.indexOf('Chrome') > -1;

                if(is_chrome){ paddingNum = figureChromePadding; }
                if(figureHeight < figureTableHeight){ flagHeight = true; }
                if(findBody.width() < findBody.find('.grid-table').width()){ flagWidth = true; }

                if(!flagWidth){
                    var figureLen = 1;
                    if(flagHeight){
                        figureLen = paddingNum;

                        var figureBodyWidth = findFixedBody.width()+1;
                        findHead.css({"width": figureBodyWidth});
                        findBody.css({"width": figureBodyWidth});
                    }
                    var figureWidth = findFixedBody.width()-figureLen;
                    findFixedBody.find('.grid-table').css({"width": figureWidth});
                }
            },

            /*Column setup*/
            _eFixedColumnSetup: function (findThis, findWrapper, findFixedBody, captionName) {
                $('<div class="grid-fixed-column"></div>').prependTo(findWrapper);

                var findFixedBody = findWrapper.find('.grid-fixed-body'),
                    findFixedColumn = findWrapper.find('.grid-fixed-column'),
                    findThead = $('<div class="grid-thead"><table class="grid-table"><caption>'+captionName+'</caption><thead><tr></tr></thead></table></div>'),
                    findTbody = $('<div class="grid-tbody"><table class="grid-table"><caption>'+captionName+'</caption></table></div>'),
                    figureFixColumn = figureFixInt;

                objStart._eFixedHeadColumn(findWrapper, findFixedBody, findFixedColumn, findThead, figureFixColumn);
                objStart._eFixedBodyColumn(findWrapper, findFixedBody, findFixedColumn, findTbody, figureFixColumn);
            },

            /*fixed head clone*/
            _eFixedHeadColumn: function(findWrapper, findFixedBody, findFixedColumn, findThead, figureFixColumn){
                var findFirstThChildren = findFixedBody.find('.grid-thead thead tr > *:lt(' + figureFixColumn + ')');

                findThead.appendTo(findFixedColumn)
                    .find('tr')
                    .append(findFirstThChildren.clone());

                var figureFixedColumnWidth = 1;
                for(var i = 0; i<figureFixColumn; i++){
                    var propBodyStyle = findFixedBody.find('.grid-thead th').eq(i).attr('style'),
                        figureWidthNum = parseInt(propBodyStyle.replace(/[^0-9]/g,''));

                    findFixedColumn.find('thead th').eq(i).attr('style', propBodyStyle);

                    figureFixedColumnWidth += figureWidthNum;
                }
                findFixedColumn.css({ 'width': figureFixedColumnWidth});
            },

            /*fixed body clone */
            _eFixedBodyColumn: function(findWrapper, findFixedBody, findFixedColumn, findTbody, figureFixColumn){
                var findFirstThChildren,
                    findFirstTdChildren;

                findTbody.appendTo(findFixedColumn);

                findFixedBody.find('.grid-tbody tbody').each(function(i){
                    var propClass = $(this).attr('class'),
                        findColumnTbody = findFixedColumn.find('.grid-tbody');

                    $('<tbody></tbody>').appendTo(findColumnTbody.find('.grid-table'));
                    findColumnTbody.find('tbody').addClass(propClass);

                    var figureLen = $(this).find('tr').length;

                    for(var n = 0; n<figureLen; n++){
                        var propStryle = $(this).find('tr').eq(n).attr('style'),
                            propFixClass = $(this).find('tr').eq(n).attr('class');

                        $('<tr></tr>').appendTo(findTbody.find('tbody').eq(i));

                        if(propStryle){ findTbody.find('tbody:eq('+i+') tr').eq(n).attr('stryle', propStryle); }
                        if(propFixClass){ findTbody.find('tbody:eq('+i+') tr').eq(n).addClass(propFixClass); }

                        if(!$(this).hasClass('tfoot')){
                            var findFirstThChildren = $(this).find('tr:eq('+n+') th'),
                                figureTbodyLen = (findColumnTbody.find('tbody').length-1);

                            for(var j=0; j<findFirstThChildren.length; j++){
                                findFirstThChildren.eq(j).clone().appendTo(findColumnTbody.find('tbody:eq('+figureTbodyLen+') tr').eq(n));

                                var figureThWidth = findFirstThChildren.eq(j).outerWidth(),
                                    figureThHeight = findFirstThChildren.eq(j).outerHeight();

                                findColumnTbody.find('tbody:eq('+figureTbodyLen+') tr:eq('+n+') th').eq(j).css({"width":figureThWidth, "height":figureThHeight});
                            }
                        }else{
                            for(var m=0; m<figureFixColumn; m++){
                                findFirstTdChildren = $(this).find('tr > *:nth-child('+(m+1)+')');
                                findFirstTdChildren.clone().appendTo(findColumnTbody.find('.tfoot tr'));

                                var figureTdWidth = findFirstTdChildren.outerWidth(),
                                    figureTdHeight = findFirstTdChildren.outerHeight();

                                findColumnTbody.find('.tfoot tr > *:nth-child('+(m+1)+')').css({"width":figureTdWidth, "height":figureTdHeight});
                            }
                        }
                    }
                });

                findFixedColumn.find('.grid-tbody').css({ 'margin-top': -1 });
            },

            /*scroll event*/
            _eBindScroll: function (findThis, findWrapper) {
                var findFixedColumns = findWrapper.find('.grid-fixed-column'),
                    findFixedBody =  findWrapper.find('.grid-fixed-body'),
                    findHead = findFixedBody.find('.grid-thead'),
                    findBody = findFixedBody.find('.grid-tbody');

                findBody.bind('scroll', function(e) {
                    findFixedColumns.find('.grid-tbody .grid-table').css({
                        'margin-top': -findBody.scrollTop()
                    });
                    findHead.find('.grid-table').css({
                        'margin-left': -this.scrollLeft
                    });
                });
            },

            /*mouseWheel envent*/
            _eMouseWheelEvent: function (findWrapper){
                var findFixedColumns = findWrapper.find('.grid-fixed-column'),
                    findFixedBody =  findWrapper.find('.grid-fixed-body'),
                    paddingNum = figureIePadding,
                    is_chrome = navigator.userAgent.indexOf('Chrome') > -1;

                if(is_chrome){ paddingNum = figureChromePadding; }

                findFixedColumns.find('.grid-tbody .grid-table').bind('mousewheel', function(event) {
                    var maxTop = $(this).height() - (findFixedBody.find('.grid-tbody').height()-paddingNum);

                    var E = event.originalEvent;
                    if (E.wheelDelta == 0) {
                        return;
                    }
                    var top = parseInt($(this).css('marginTop'), 10) + (E.wheelDelta > 0 ? 30 : -30);

                    if (top > 0) {
                        top = 0;
                    }
                    if (top < -maxTop) {
                        top = -maxTop;
                    }
                    $(this).css('marginTop', top);
                    findFixedBody.find('.grid-tbody').scrollTop(-top).scroll();

                    if(-top == 0 || (-top) == maxTop){
                        return true;
                    }else{
                        return false;
                    }
                });
            },

            /*table tr toggle*/
            _eToggleEvent: function (findThis, findWrapper, flagWidth) {
                findWrapper.delegate('.btnFold', 'click', function(event) {
                    objStart._eClickEvent($(this), findThis, findWrapper, flagWidth);
                });
            },

            /*btnFold click event*/
            _eClickEvent: function (findTarget, findThis, findWrapper, flagWidth){
                var propTitle = findTarget.attr('title'),
                    strTitle,
                    strMode;

                findTarget.toggleClass('show');

                if(propTitle == "전체 펼치기" || propTitle == "전체 접기"){
                    strTitle = "전체 펼치기";
                    if(findTarget.hasClass('show')){
                        strTitle = "전체 접기"
                    }
                    strMode = "total";
                }else{
                    strTitle = "펼치기";
                    if(findTarget.hasClass('show')){
                        strTitle = "접기"
                    }
                    strMode = "block";
                }
                findTarget.attr('title',strTitle);

                var flag = findTarget.hasClass('show');
                if(strMode == "total"){
                    objStart._eRowspanCheck(findThis, findWrapper, flagWidth ,"T", flag);

                    figureAddNum = 0;

                    var strClassName = "show";
                    if(flag){
                        strClassName = "hide";
                        figureAddNum = figureBtnNum;
                    }
                    findWrapper.find('tbody .btnFold').each(function(i){
                        if(strClassName == "show"){
                            $(this).removeClass('show').attr('title','펼치기');
                        }else{
                            $(this).addClass('show').attr('title','접기');
                        }
                    });
                }else{
                    objStart._eRowspanCheck(findThis, findWrapper, flagWidth ,"B", flag, findTarget);
                }
            },

            /*rowspan check*/
            _eRowspanCheck: function (findThis, findWrapper, flagWidth, str, flag, findTarget){
                var findGridBody = findWrapper.find('.grid-fixed-body'),
                    findGridColumn = findWrapper.find('.grid-fixed-column'),
                    figureTfootLen = parseInt(findGridBody.find('.grid-tbody .tfoot').length),
                    figureBodyLen = parseInt(findGridBody.find('.grid-tbody tbody').length),
                    figureLenCul = figureBodyLen - figureTfootLen;

                if(str == "B"){
                    var figureindexNum = findTarget.parents('tr').index(),
                        figureTrIndex = objStart._eReturnNumber(findTarget, findGridBody, figureindexNum, figureLenCul);

                    if(flag){
                        figureAddNum++;
                    }else{
                        figureAddNum--;
                    }
                    if(figureBtnNum <= figureAddNum){
                        if(flagWidth){
                            findGridColumn.find('thead .btnFold').addClass('show').attr('title','전체 접기');
                        }
                        findGridBody.find('thead .btnFold').addClass('show').attr('title','전체 접기');
                    }else{
                        if(flagWidth){
                            findGridColumn.find('thead .btnFold').removeClass('show').attr('title','전체 펼치기');
                        }
                        findGridBody.find('thead .btnFold').removeClass('show').attr('title','전체 펼치기');
                    }
                }

                if(str == "S"){
                    arrIndex = [];
                    arrRowSpan = [];
                    arrTrRowSpan = [];
                    arrTrNum = [0];

                    var figuretfootAdd = 0;
                    findGridBody.find('.grid-table tbody').each(function(j){
                        var propTfoot = $(this).hasClass('tfoot');
                        if(!propTfoot){
                            var figurePlus = $(this).find('tr').length;
                            figuretfootAdd += figurePlus;
                            arrTrNum.push(figuretfootAdd);
                        }
                    });
                }

                findGridBody.find('.grid-table tbody th').each(function(i){
                    var propRowspan = $(this).attr('rowspan');
                    if(str == "S"){
                        arrRowSpan.push(propRowspan);
                        if(propRowspan > 0){
                            var figureNum = 0,
                                figureIndex = $(this).parents('tr').index(),
                                figureCul = objStart._eReturnNumber($(this), findGridBody, figureIndex, figureLenCul);

                            arrTrRowSpan[figureCul] = propRowspan;

                            for(var j=1; j<propRowspan; j++){
                                figureNum = (figureCul+j)+1;
                                arrIndex.push(figureNum);
                            }
                            $(this).attr('rowspan' , 1);
                        }
                    }else{
                        if(propRowspan > 0){
                            objStart._eRowSpanChangeCommon($(this), flag, str, i, figureTrIndex, findGridBody, figureLenCul);
                        }
                    }
                });

                if(flagWidth){
                    findGridColumn.find('.grid-table tbody th').each(function(i){
                        var propRowspan = $(this).attr('rowspan');
                        if(propRowspan > 0){
                            if(str == "S"){
                                $(this).attr('rowspan' , 1);
                            }else{
                                objStart._eRowSpanChangeCommon($(this), flag, str, i, figureTrIndex, findGridBody, figureLenCul);
                            }
                        }
                    });
                }

                var figureLen = 1-figureTfootLen,
                    strDisplay = "";

                if(str == "S" || !flag){
                    strDisplay = "none";
                }
                if(str == "B"){
                    for(var s=1; s<arrTrRowSpan[figureTrIndex]; s++){
                        var figureCul = ((figureTrIndex+1)+s)-figureLen;
                        objStart._eDisplayChange(findGridColumn, findGridBody, strDisplay, flagWidth, figureCul);
                    }
                }else{
                    for(var k=0; k<arrIndex.length; k++){
                        var figureCulNum = arrIndex[k]-figureLen;
                        objStart._eDisplayChange(findGridColumn, findGridBody, strDisplay, flagWidth, figureCulNum);
                    }
                }
                objStart._eTableThSizeControl(findThis, findWrapper, flagWidth);
            },

            /*table th size constrol*/
            _eTableThSizeControl:function (findThis, findWrapper, flagWidth){
                var findGridBody = findWrapper.find('.grid-fixed-body'),
                    findGridColumn = findWrapper.find('.grid-fixed-column'),
                    arrHeigth = [];

                if(flagWidth){
                    findGridBody.find('.grid-table tbody th').each(function(i){
                        var figureHeight = $(this).outerHeight();
                        arrHeigth.push(figureHeight);
                    });
                    findGridColumn.find('.grid-table tbody th').each(function(j){
                        $(this).css("height",arrHeigth[j]);
                    });

                    var figureFixedBodyHeight = findGridBody.find('.grid-tbody').height(),
                        paddingNum = figureIePadding,
                        is_chrome = navigator.userAgent.indexOf('Chrome') > -1;

                    if(is_chrome){ paddingNum = figureChromePadding; }
                    findGridColumn.find('.grid-tbody').css({ 'height': (figureFixedBodyHeight-paddingNum) });
                }
            },

            /*rowspan change call common*/
            _eRowSpanChangeCommon:function (findThisTarget, flag, str, i, figureTrIndex, findGridBody, figureLenCul){
                if(str == "B"){
                    var figureNum = findThisTarget.parents('tr').index(),
                        figureNowIndex = objStart._eReturnNumber(findThisTarget, findGridBody, figureNum, figureLenCul);

                    if(figureTrIndex == figureNowIndex){
                        objStart._eRowSpanChange(findThisTarget, flag, i);
                    }
                }else {
                    objStart._eRowSpanChange(findThisTarget, flag, i);
                }
            },

            /*rowspan Chage*/
            _eRowSpanChange: function (findThisTarget, flag, i){
                var propRowspan = findThisTarget.attr('rowspan');
                if(propRowspan > 0){
                    if(flag){
                        findThisTarget.attr('rowspan' , arrRowSpan[i]);
                    }else{
                        findThisTarget.attr('rowspan' , 1);
                    }
                }
            },

            /*display Change*/
            _eDisplayChange: function (findGridColumn, findGridBody, strDisplay, flagWidth, culNum){
                if(flagWidth){
                    findGridColumn.find('.grid-table tbody tr').eq(culNum).css("display",strDisplay);
                }
                findGridBody.find('.grid-table tbody tr').eq(culNum).css("display",strDisplay);
            },

            /*tr Number*/
            _eReturnNumber:function (findTarget, findGridBody, figureIndex, figureLenCul) {
                var figureTableLen = parseInt(findTarget.parents('table').children().length),
                    figuretBodyLen = parseInt(findTarget.parents('tbody').index()),
                    figureBodyIndex = (figuretBodyLen-(figureTableLen-1))+(figureLenCul-1),
                    figureTrNum = arrTrNum[figureBodyIndex],
                    figureCul = figureTrNum+figureIndex;

                return figureCul;
            }
        }

        return methods._eInit.apply(this, arguments);

    };

})(jQuery);

$(function(){
    'use strict';

    var arrTab = [];
    $('.eFixTable').each(function(i){
        console.log("i===="+i);
        var figureTabLen = $(this).parents('.tabCont').length;
        if(figureTabLen > 0){
            if(i == 0){
                fixTableCall($(this));
                arrTab[i] = false;
            }else{
                arrTab[i] = true;
            }
        }else{
            fixTableCall($(this));
        }
    });

    $('.eTab li').click(function(e){
        var index = $(this).index();
        if(index != 0){
            var propHref = $(this).find('a').attr('href');
            fixResizeCall(propHref, index);
        }
        arrTab[index] = false;
    });

    function fixResizeCall(propHref, index){
        if(arrTab[index]){
            var findTarget = $(propHref).find('.eFixTable');
            fixTableCall(findTarget);
        }
    }

    function fixTableCall(findTarget){
        var flag = true,
            figureInt = 0;

        findTarget.find('tbody').each(function(i){
            var propHasClass  = $(this).hasClass('tfoot');
            if(!propHasClass){
                if(flag){
                    flag = false;
                    figureInt = $(this).find('tr:eq(0) th').length;
                }
            }
        });
        findTarget.fixTable(figureInt);
    }
});