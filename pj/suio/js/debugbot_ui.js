$.fn.eDebugUI = function(opts){
    var objDebugUI = {
        _eInit: function () {
            // calling dynamic function
            for(i in opts){
                if(opts[i] == true){
                    this[i].apply(this);
                }
            }
        },
        eHelp : function(){
            var strTag = '<textarea id="clip_target" name="textarea" rows="1" cols="1"></textarea>';
            $('.mHelp').parent().append(strTag);

            if($('.mHelp').length > 0){
                $('.mHelp').each(function(i){
                    eZeroClipboard($(this), i);
                });
            }

            if($('.mAdvice').length > 0){
                var flagLayer = true;
                $('.mLayer').each(function(i){
                    var propChk = $(this).css('display');
                    if(propChk == "none"){
                        $(this).css({'display':'block', 'opacity':'0'});
                        flagLayer = false;
                    }
                });
                $('.mAdvice').each(function(i){
                    eZeroClipboard($(this), i);
                });
                if(!flagLayer){
                    $('.mLayer').css({'display':'none', 'opacity':'1'});
                }
            }

            function eZeroClipboard(findThis, i){
                var propClass = findThis.attr('class');
                findThis.before('<div class="copyHelpHtml"><span class="btn"><button type="button" id="btnCopySource_'+i+'">도움말 HTML 복사</button"></span></div>');

                var findPrev = findThis.prev();
                findPrev.find('.btn').click(function(e){
                    var propClone = findThis.wrap('<div class="'+ propClass +'"/>').parent().clone().html();
                    findThis.unwrap('<div class="'+ propClass +'"/>');

                    $('#clip_target').val(propClone);
                    $('#clip_target').select();
                    try {
                        var flagSuccessful = document.execCommand('copy');
                        if($('#dHelpCopy').length > 0){
                            $('#dHelpCopy').remove();
                        }
                        $('body').append('<div id="dHelpCopy" style="z-index:999;"><p>도움말 모듈(HTML)이 <strong>클립보드에 복사</strong>되었습니다.</p></div>');
                        var findLayer = $('#dHelpCopy');
                        eSetHelpLayer(findLayer);
                        findLayer.fadeOut(2000, function(){
                            findLayer.remove();
                        });
                    } catch (err) {
                        alert('이 브라우저는 지원하지 않습니다.')
                    }
                })
            }

            function eSetHelpLayer(target){
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
        },
        eUIcreate: function () {
            // report struct
            $('body').append('<div id="dReport" />');
            $('#dReport').append('<h1>디버그 결과</h1>');
            $('#dReport').append('<ul />');
            $('#dReport').append('<button type="button" class="close">닫기</button>');

            // 고정 디버그 정보 tools
            $('body').append('<div id="debugbotArea"><div class="debugLayer"><ul class="varList"></ul><ul class="fixList first"></ul><ul class="fixList last"><li><a href="http://fe.cafe24.com/suio/include/layout.php?MODULE=main" title="새창 열림" target="_blank">SUIO 가이드 바로가기<span class="clamp">바로가기</span></a></li><li><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=641894523" title="새창 열림" target="_blank">EC솔루션 가이드 바로가기<span class="clamp">바로가기</span></a></li><li><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=819726206" title="새창 열림" target="_blank">개발팀전달용 바로가기<span class="clamp">바로가기</span></a></li></ul><div class="arrow"></div></div><ul class="icon"><li class="light"></li><li class="move"></li><li class="face"></li><li class="foot"></li><li class="body"></li><li class="plus"></li><li class="hello"></li></ul></div>');

            if($('#popup').length > 0){
                var findDebugbot = $('#debugbotArea'),
                    propPopupHeight = /*$('#wrap').height()*/$(window).height()-$('#footer').outerHeight(),
                    propLayerHeight = findDebugbot.find('.debugLayer').height(),
                    propIconHeight = findDebugbot.find('.icon').height(),
                    propAdd = propLayerHeight + propIconHeight,
                    figurebottom = 5;

                if(propAdd > propPopupHeight){
                    findDebugbot.find('.fixList.last').remove();
                }else{
                    figurebottom = $('#footer').height()+30;
                }
                findDebugbot.css('bottom',figurebottom);
            }

            // qaIdViewer 생성
            if($('.section').length > 0){
                var flag = false;
                for(var i=0; i<=$('.section').length; i++){
                    var propQaId = $('.section').eq(i).attr('id');
                    if(!propQaId){propQaId="";}
                    var reg = new RegExp('^QA_','gi'),
                        flag = reg.test(propQaId);
                    if(flag){
                        break;
                    }
                }
                if(flag){
                    $('body').append('<div id="qaIdViewer"><strong>QA ID List</strong><ul></ul><button type="button" class="eClose">닫기</button></div>');
                }
            }
        },
        eBody: function (key) {
            if($('body').attr('id') != 'popup'){
                objDebugUI._eDebugArea({
                    strButtonId : 'dBodyWidth',
                    findTarget : $('body'),
                    strMsgT : 'Show : 레이아웃 사이즈 고정',
                    strMsgF : 'Hide : 레이아웃 사이즈 가변'
                }, key);
            }
        },
        eAddForm: function (key) {
            if($('.addForm').length > 0){
                $('.addForm').addClass('show');
                objDebugUI._eDebugArea({
                    strButtonId : 'addFormToggle',
                    findTarget : $('.addForm'),
                    strSwapClass : 'show',
                    strMsgT : 'Show : 선택폼 영역 숨김',
                    strMsgF : 'Hide : 선택폼 영역 숨김',
                    flagStatus : false
                },key);
            }
        },
        eDebugReport : function (key) {
            objDebugUI._eDebugArea({
                strButtonId : 'btnReport',
                findTarget : $('#dReport'),
                strSwapClass : 'dReport',
                strMsgT : 'Show : 디버깅 Report',
                strMsgF : 'Hide : 디버깅 Report'
            },key);

            setTimeout(objDebugUI._eNumberCheck, 100);
        },
        _eNumberCheck : function(){
            var figureLen = $('#dReport').find('li').length,
                strTxt = $('#btnReport').html(),
                arr = strTxt.split("<"),
                strChangeTxt = "디버깅 Report ("+figureLen+")",
                strReport = strChangeTxt+"<"+arr[1];

            if(figureLen <= 0){
                $('#btnReport').parent().remove();
            }else{
                $('#btnReport').html(strReport);
            }
        },
        eCaption : function (key) {
            if($('caption').length > 0){
                objDebugUI._eDebugArea({
                    strButtonId : 'captionToggle',
                    findTarget : $('caption'),
                    strSwapClass : 'dCaption',
                    strMsgT : 'Show : Caption 태그 검수',
                    strMsgF : 'Hide : Caption 태그 검수'
                },key);
            }
        },
        eScroll : function (key) {
            if($('.mBoard.gScroll').length > 0){
                objDebugUI._eDebugArea({
                    strButtonId : 'gScrollToggle',
                    findTarget : $('.mBoard.gScroll'),
                    strSwapClass : 'gScrollCheck',
                    strMsgT : 'Show : 가로 스크롤 영역 표시',
                    strMsgF : 'Hide : 가로 스크롤 영역 표시',
                    flagStatus : false
                },key);
            }
        },
        eQaAssign : function (key) {
            if($('.qaAssign').length > 0){
                objDebugUI._eDebugArea({
                    findTarget : $('.qaAssign'),
                    strButtonId : 'qaAssignToggle',
                    strMsgT : 'Show : QA ID 미지정',
                    strMsgF : 'Hide : QA ID 미지정',
                    strSwapClass : 'show',
                    flagStatus : false
                },key);
            }
        },
        eQaId : function (key) {
            if($('.qaId').length > 0){
                objDebugUI._eDebugArea({
                    findTarget : $('.qaId'),
                    strButtonId : 'qaIdToggle',
                    strSwapClass : 'show',
                    strMsgT : 'Show : QA ID 시작확인',
                    strMsgF : 'Hide : QA ID 시작확인',
                    flagStatus : false
                },key);
            }
        },
        eQaIdViewer : function (key) {
            if($('#qaIdViewer').length > 0){
                objDebugUI._eDebugArea({
                    findTarget : $('#qaIdViewer'),
                    strButtonId : 'qaIdViewToggle',
                    strSwapClass : 'show',
                    strMsgT : 'Show : QA ID 목록',
                    strMsgF : 'Hide : QA ID 목록',
                    flagStatus : false
                },key);
            }
        },
        eLayerClick : function (key) {
            if(!key){
                var loadingChk = ''; // Check Loading 버튼 확인
                if($('.eLayerClick').length == 0 && $('.eModal').length == 1){
                    if($('.eModal').hasClass('loading') == true){
                        loadingChk = true;
                    }
                }
            }
            if($('.eLayerClick').length > 0 || $('.eModal').length > 0){
                if(loadingChk != true || key){
                    objDebugUI._eDebugArea({
                        strButtonId : 'layerToggle',
                        findTarget : $('.eLayerClick, .eModal:not(.loading)'),
                        strSwapClass : 'show',
                        strMsgT : 'Show : 레이어 클릭 영역 표시',
                        strMsgF : 'Hide : 레이어 클릭 영역 표시',
                        flagStatus : false
                    },key);
                }
            }
        },
        ec_langViewer : function (key) {
            var figureEcLen = $("[ec-lang]").length,
                figureAdd = 0;

             $('img').each(function(i){
                var propScr = $(this).attr('src'),
                    figureIndexOf = propScr.indexOf("/ko_KR/");
                if(figureIndexOf >= 0){
                    figureAdd++;
                }
            });

            if(figureEcLen > 0 || figureAdd > 0){
                $("html").dblclick(function(e){
                    $('[ec-lang]').toggleClass('ec-lang');
                    $('#ecJapanToggle').click();
                    e.preventDefault();
                });

                objDebugUI._eDebugArea({
                    findTarget : $('[ec-lang]'),
                    strButtonId : 'ecJapanToggle',
                    strMsgT : 'Show : EC Japan',
                    strMsgF : 'Hide : EC Japan',
                    strSwapClass : 'ec-lang',
                    flagStatus : false
                },key);
            }
        },
        eCase : function (key) {
             if($('[uidev-case]').length > 0){
                $("html").dblclick(function(e){
                    $('[uidev-case]').toggleClass('uidev-case-text');
                    $('#caseToggle').click();
                    e.preventDefault();
                });
                objDebugUI._eDebugArea({
                    strButtonId : 'caseToggle',
                    findTarget : $('[uidev-case]'),
                    strSwapClass : 'uidev-case-text',
                    strMsgT : 'Show : 설정별로 노출되는 UI 확인',
                    strMsgF : 'Hide : 설정별로 노출되는 UI 확인',
                    flagStatus : false
                },key);
            }
        },
        ePopup : function (key) {
            if($("#popup").attr("size") != undefined){
                objDebugUI._eDebugArea({
                    findTarget : $('#popup'),
                    strButtonId : 'popupSizeToggle',
                    strMsgT : 'Show : 팝업 사이즈 표시 <strong class="popSize">['+$("#popup").attr("size")+']</strong>',
                    strMsgF : 'Hide : 팝업 사이즈 표시 <strong class="popSize">['+$("#popup").attr("size")+']</strong>',
                    strSwapClass : 'sizeBorder',
                    flagStatus : false
                },key);
            }
        },
        eCheckLoading : function (key) {
            if($('#jsLoadingSample').length > 0){
                objDebugUI._eDebugArea({
                    findTarget : $('#ectArea'),
                    strButtonId : 'chkLoading',
                    strMsgT : 'Show : 로딩바 UI 확인',
                    strMsgF : 'Hide : 로딩바 UI 확인',
                    strSwapClass : '',
                    flagStatus : false
                },key);
            }
        },
        eButton : function () {
            var findDebugbot = $('#debugbotArea');
            var figureLen = findDebugbot.find('.first li').length;
            if(figureLen <= 0){
                findDebugbot.find('.first').remove("");
            }
            $('#dReport .close').click(function(){
                 objDebugUI.eDebugReport("key");
            });
        },
        eDebugAreaToogle : function () {
            var findDebugbotArea = $('#debugbotArea');

            findDebugbotArea.find('.icon').click(function(){
                $(this).parent().toggleClass('show');
                $(this).parent().find('.debugLayer').toggleClass('show');

                var flagClass = $(this).parent().hasClass('show');
                if(!flagClass){
                    $(this).css({'right':-40, 'opacity':0.4});
                }else{
                    $(this).css({'right':0, 'opacity':1});
                }
            });

            var propHost = $(location).attr('host');
            if(propHost != "fe.cafe24.com"){
                findDebugbotArea.find('.icon').click();
            }

            var figureInterval = window.setInterval(eAddClass, 300);
            function eAddClass(){
                clearInterval(figureInterval);
                findDebugbotArea.find('.icon').addClass('play');
            }
        },
        _eDebugArea : function (parm, key) {
            var findDebugbot = $('#debugbotArea'),
                flagGridTabel = true,
                flagStart = false,
                strButtonId = parm.strButtonId,
                findTarget = parm.findTarget,
                strSwapClass = parm.strSwapClass,
                strMsgT = parm.strMsgT,
                strMsgF = parm.strMsgF,
                flagStatus = parm.flagStatus;

            if(!key){
                var strShorcut = objDebugUI._eIdCheckEvent(strButtonId),
                    strMagTname = strMsgT.replace('Show : ',''),
                    strMagFname = strMsgF.replace('Hide : ','');

                if(strButtonId == "btnReport" || strButtonId == "captionToggle" || strButtonId == "qaIdViewToggle"){
                    findDebugbot.find('.first').append('<li><a id="'+strButtonId+'" href="#">'+ strMagTname + '<span class="shortcut">'+strShorcut+'</span></a></li>');
                }else{
                    if(strButtonId == "chkLoading"){
                        findDebugbot.find('.varList').append('<li><a href="#jsLoadingSample" class="btnSUIO eModal" title="새창 열림" target="_blank">'+ strMagTname + '</a><a href="#" class="btnSUIO" style="display:none;">'+ strMagFname + '</a></li>');
                        //chkLoading btn event
                        $('.btnSUIO').click(function(e){
                            objDebugUI._eBtnSuio($(this),"suio");
                            setTimeout(clickEvent, 100);
                            e.preventDefault();
                        });

                        function clickEvent(){
                            $('#dimmed_jsLoadingSample').addClass('eClick');
                            $('.eClick').click(function(e){
                                objDebugUI._eBtnSuio($('.btnSUIO'), "body");
                                e.preventDefault();
                            });
                        }
                    }else{
                        findDebugbot.find('.varList').append('<li><a id="'+strButtonId+'" href="#">'+ strMagTname + '<span class="shortcut">'+strShorcut+'</span></a></li>');
                    }
                }
            }

            if(strButtonId != "chkLoading"){
                var findButton = findDebugbot.find('#'+strButtonId);
                if(!key){
                    findButton.click(function(e){
                        objDebugUI._eToggle($(this), strButtonId, findTarget, strSwapClass, strMsgF, strMsgT);
                        e.preventDefault();
                    });
                }else{
                    objDebugUI._eToggle(findButton, strButtonId, findTarget, strSwapClass, strMsgF, strMsgT);
                }
            }
        },
        _eBtnSuio : function (findThis, str){
            var findParent = findThis.parent();
            findParent.toggleClass('on');
            var strToggleClass = findThis.parent().hasClass('on');
            if(strToggleClass && str == "suio"){
                findParent.find('a').eq(0).hide();
                findParent.find('a').eq(1).show();
            }else{
                findParent.find('a').eq(1).hide();
                findParent.find('a').eq(0).show();

                $('#dimmed_jsLoadingSample').remove();
                $('#jsLoadingSample').hide();
            }
        },
        _eToggle : function (findThis, strButtonId, findTarget, strSwapClass, strMsgF, strMsgT){
            var strToggleClass = findThis.hasClass('on');

            if(strButtonId == "addFormToggle"){
                if(!strToggleClass){
                    objDebugUI._eToggleHide(findThis, strButtonId, findTarget, strSwapClass, strMsgF, strMsgT);
                }else{
                    objDebugUI._eToggleView(findThis, strButtonId, findTarget, strSwapClass, strMsgF, strMsgT);
                }
            }else{
                if(!strToggleClass){
                    objDebugUI._eToggleView(findThis, strButtonId, findTarget, strSwapClass, strMsgF, strMsgT);
                }else{
                    objDebugUI._eToggleHide(findThis, strButtonId, findTarget, strSwapClass, strMsgF, strMsgT);
                }
            }
        },
        _eToggleView : function (findThis, strButtonId, findTarget, strSwapClass, strMsgF, strMsgT){
            if(strButtonId == 'dBodyWidth'){
                objDebugUI._eBodyOnly(true);
            } else {
                if(strMsgF.indexOf('Hide') == -1) { // 디폴트가 Hide인 경우
                    objDebugUI._eSwapAction(findTarget, strSwapClass, false);
                } else {
                    objDebugUI._eSwapAction(findTarget, strSwapClass, true);
                }
                //팝업 size 영역
                if(strSwapClass=="sizeBorder"){
                    var propSize = $("#popup").attr("size"),
                        figureWidth = parseInt(propSize.split(",")[0]),
                        figureHeight = parseInt(propSize.split(",")[1]),
                        figureAllHeight = document.body.clientHeight;

                    if(figureAllHeight > figureHeight) {
                        figureWidth = figureWidth-17;
                    }

                    $("#popup").css({ width:figureWidth, height:figureHeight-9 });

                    var figureTablelen = $('.mGridTable').length;
                    if(figureTablelen > 0){
                        var figurePopuplen = $('#popup').length;
                            figureStyleNum = $('.mGridTable').find('.grid-tbody').attr('style').indexOf("%");
                        if(figureStyleNum){
                            if(figureTablelen >= 1 && figurePopuplen >= 1 && figureStyleNum > 0){
                                var figureHeight = (figureHeight-9)-($('.mGridTable').find('.grid-tbody .grid-table').height()+20);
                                $('.mGridTable').find('.grid-tbody').css({height:figureHeight});
                                flagGridTabel = false;
                            }
                        }
                    }
                }else if(strButtonId == "qaIdViewToggle"){
                    var strColor = findThis.attr("style");
                    if(strColor){
                        findThis.removeClass('on');
                    }
                    $('body').append('<div class="qa_dimmed"></div>');
                    $('.qa_dimmed').click(function(){
                        objDebugUI.eQaIdViewer("key");
                    });
                }else if(strButtonId == "ecJapanToggle"){
                    objDebugUI._ecLangCheck(true);
                }else if(strButtonId == "caseToggle"){
                    objDebugUI._caseCheck(true);
                }else if(strButtonId == "btnReport"){
                    findTarget.show();
                }

            }

            if(strButtonId == "addFormToggle"){
                var strMagTname = strMsgT.replace('Show : ','');
                objDebugUI._eShorcutSpan(findThis, strButtonId, strMagTname);
                findThis.removeClass('on');
            }else{
                if(strButtonId != "btnReport"){
                    var strMagFname = strMsgF.replace('Hide : ','');
                    objDebugUI._eShorcutSpan(findThis, strButtonId, strMagFname);
                }
                findThis.addClass('on');
            }
        },
        _eToggleHide : function (findThis, strButtonId, findTarget, strSwapClass, strMsgF, strMsgT){
            if(strButtonId == 'dBodyWidth'){
                objDebugUI._eBodyOnly(false);
            } else {
                if(strMsgT.indexOf('Show') == -1) { // 디폴트가 Hide인 경우
                    objDebugUI._eSwapAction(findTarget, strSwapClass, true);
                } else {
                    objDebugUI._eSwapAction(findTarget, strSwapClass, false);
                }
                if(strSwapClass=="sizeBorder"){
                    $("#popup").css({ width:"", height:""}); //팝업 size 영역
                }else if(strButtonId == "ecJapanToggle"){
                    objDebugUI._ecLangCheck(false);
                }else if(strButtonId == "caseToggle"){
                     objDebugUI._caseCheck(false);
                }
            }

            var figureTablelen = $('.mGridTable').length,
                figurePopuplen = $('#popup').length;
            if(figureTablelen >= 1 && figurePopuplen >= 1 && !flagGridTabel){
                $('.mGridTable').find('.grid-tbody').css({height:"100%"});
            }

            if(strButtonId == "addFormToggle"){
                var strMagFname = strMsgF.replace('Hide : ','');
                objDebugUI._eShorcutSpan(findThis, strButtonId, strMagFname);
                findThis.addClass('on');
            }else{
                if(strButtonId == "btnReport"){
                    findTarget.hide();
                }else{
                    var strMagTname = strMsgT.replace('Show : ','');
                    objDebugUI._eShorcutSpan(findThis, strButtonId, strMagTname);
                }
                findThis.removeClass('on');
            }

            if(strButtonId == "qaIdViewToggle"){
                if($('.qa_dimmed').length >= 0){
                    $('.qa_dimmed').remove();
                }
            }
        },
        _eShorcutSpan : function (findThis, strButtonId, strMsg) {
            var strShorcut = objDebugUI._eIdCheckEvent(strButtonId),
                strTitle;
            if(strButtonId == "chkLoading"){
                strTitle = strMsg;
            }else{
                strTitle = strMsg + '<span class="shortcut">'+strShorcut+'</span>';
            }
            findThis.html(strTitle);
        },
        _eIdCheckEvent : function (strButtonId){
            var figureNum = 0,
                strShorcut = "";

            if(strButtonId == "dBodyWidth" || strButtonId == "popupSizeToggle"){
                figureNum = 1;
            }else if(strButtonId == "addFormToggle"){
                figureNum = 2;
            }else if(strButtonId == "layerToggle"){
                figureNum = 3;
            }else if(strButtonId == "ecJapanToggle"){
                figureNum = 4;
            }else if(strButtonId == "caseToggle"){
                figureNum = 5;
            }else if(strButtonId == "gScrollToggle"){
                figureNum = 6;
            }else if(strButtonId == "btnReport"){
                figureNum = 7;
            }else if(strButtonId == "captionToggle"){
                figureNum = 8;
            }else if(strButtonId == "qaIdViewToggle"){
                figureNum = 9;
            }

            if(figureNum == 0){
                strShorcut = ""
            }else{
                strShorcut = "Alt+"+String(figureNum);
            }
            return strShorcut;
        },
        _eBodyOnly : function (flag){
            var findBody = $('body'),
                propFixWidth = findBody.css('minWidth');
            if(flag == true){
                findBody.css({'width':propFixWidth});
            } else {
                findBody.css({'width':'auto'});
            }
        },
        _eSwapAction : function (findTarget, strSwapClass, flag) {
            findTarget.each(function(i){
                var figure = -1;
                if($(this).attr('class') != undefined){
                    figure = $(this).attr('class').indexOf('btnSUIO');
                }
                if(figure == -1){
                    objDebugUI._eClassAdd($(this), strSwapClass, flag);
                }
            });
        },
        _eClassAdd : function (findTarget, strSwapClass, flag) {
             if(strSwapClass && flag == true){
                findTarget.addClass(strSwapClass);
            } else {
                findTarget.removeClass(strSwapClass);
            }
        },
        _caseCheck : function (flag){
            $('[uidev-case]').each(function(i){
                var ecLangFlag = $(this).hasClass('ec-lang');
                if(ecLangFlag && flag){
                    $(this).addClass('afterChange');
                }else{
                    $(this).removeClass('afterChange');
                }
            });
        },
        _ecLangCheck : function(flag){
            var strLang = "ko";
            if(flag){
                strLang = "ja";
            }
            $('html').attr({'xml:lang':strLang, 'lang':strLang});

            $('[ec-lang]').each(function(i){
                if(flag){
                    objDebugUI._ecLangCreate($(this), true);
                }else{
                    $('.ecjapan').remove();
                    var flagClass = $(this).hasClass("afterChange");
                    if(flagClass){
                        $(this).removeClass('afterChange');
                    }
                }
            });

            $('img').each(function(i){
                var propScr = $(this).attr('src');
                var strlang = "/ko_KR/";
                if(!flag){
                    strlang = "/ja_JP/";
                }
                var figureIndexOf = propScr.indexOf(strlang);
                if(figureIndexOf >= 0){
                    var strSrc = "";
                    if(flag){
                        strSrc = propScr.replace('ko_KR', 'ja_JP');
                    }else{
                        strSrc = propScr.replace('ja_JP', 'ko_KR');
                    }
                    $(this).attr("src", strSrc);
                }
            });
        },
        _ecLangCreate : function (findTarget, flag) {
            var strTag = '<div class="ecjapan">EC Japan</div>',
                arrTag = ["SELECT", "IMG"],
                tagFlag = true;

            for(var j = 0; j<arrTag.length; j++){
                if(findTarget.attr("tagName") == arrTag[j]){
                    tagFlag = false;
                    findTarget.before(strTag);
                }
            }
            if(tagFlag){
                findTarget.prepend(strTag);
                findTarget.find('.ecjapan').addClass('sort');
            }

            var flagClass = findTarget.hasClass("uidev-case-text");
            if(flagClass){
                findTarget.addClass('afterChange');
            }
        },
        eShortcut : function (){
             function KeyDown(e){
                var eventobj=window.event? event : e;
                    //console.log("eventobj.altKey==="+eventobj.altKey+" ,eventobj.keyCode=="+eventobj.keyCode);
                if(eventobj.altKey && eventobj.keyCode == 49 || eventobj.keyCode == 97){
                    if($("#popup").attr("size") != undefined){
                        objDebugUI.ePopup("key");
                    }else{
                        objDebugUI.eBody("key");
                    }
                }else if(eventobj.altKey && eventobj.keyCode == 50 || eventobj.keyCode == 98){
                    objDebugUI.eAddForm("key");
                }else if(eventobj.altKey && eventobj.keyCode == 51 || eventobj.keyCode == 99){
                    objDebugUI.eLayerClick("key");
                }else if(eventobj.altKey && eventobj.keyCode == 52 || eventobj.keyCode == 100){
                    objDebugUI.ec_langViewer("key");
                }else if(eventobj.altKey && eventobj.keyCode == 53 || eventobj.keyCode == 101){
                    objDebugUI.eCase("key");
                }else if(eventobj.altKey && eventobj.keyCode == 54 || eventobj.keyCode == 102){
                    objDebugUI.eScroll("key");
                }else if(eventobj.altKey && eventobj.keyCode == 55 || eventobj.keyCode == 103){
                    objDebugUI.eDebugReport("key");
                }else if(eventobj.altKey && eventobj.keyCode == 56 || eventobj.keyCode == 104){
                    objDebugUI.eCaption("key");
                }else if(eventobj.altKey && eventobj.keyCode == 57 || eventobj.keyCode == 105){
                    objDebugUI.eQaIdViewer("key");
                }
            }
            document.onkeydown=KeyDown;
        }
    }
    objDebugUI._eInit();
}
$(function(){
    // [EC프레임셋 제거 후 퍼블리싱 가이드] 관련하여 title 태그 공통 적용
    var propTitle = $('.mBreadcrumb li:last-child').html();
    if(propTitle != null){
        $('title').html(propTitle);
    }

    // 팝업 h1태그 값 title 적용
    if($('body').attr('id') == 'popup') {
        var propPopupTitle = $('.headingArea .mTitle h1').html();
        $('title').html(propPopupTitle);
    }

    // 스마트재고 h2태그 값 title 적용
    var propWmsTitle = $('.titleArea .title h2').html();
    if(propWmsTitle != null){
        $('title').html(propWmsTitle);
    }

    var flagQaId = $.fn.eDebugBot.arrDefaults.eQaId;

    $.fn.eDebugUI({
        eHelp : true,                 // 도움말 복사
        eUIcreate : true,             // UI 생성
        eBody : true,                 // 레이아웃 사이즈
        ePopup : true,                // 팝업 size 영역
        eAddForm : true,              // 선택폼 영역 노출
        eQaAssign : true,             // QA id할당 안됨
        eDebugReport : true,          // 디버그 리포트
        eCaption : true,              // caption
        eQaId : flagQaId,             // QA id 시작여부
        eQaIdViewer : flagQaId,       // QA id 보기 토글
        eLayerClick : true,           // 레이어팝업 호출
        ec_langViewer : true,         // ec_lang 속성이 있을때 노출
        eCase : true,                 // case
        eScroll : true,               // scroll
        eCheckLoading : true,         // check Loading
        eButton : true,               // button length 0 check
        eDebugAreaToogle : true,      // UI 디버깅
        eShortcut : true              // 단축키
    });
});