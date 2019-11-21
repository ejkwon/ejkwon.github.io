$(function(){
    // 디버깅 버튼
    $('body').append('<button type="button" id="debuggingView"></button><button type="button" id="debuggingBot"><span class="pause"></span></button><div id="debugTagCount" title="1000개 이하 사용권장"></div>');
    $('body').append('<style>#debuggingBot { z-index:1000; position:fixed; top:30px; right:0; display:inline-block; margin:4px; width:36px; height:36px; border-radius:18px; border:4px solid #ed9f03; box-sizing:border-box; cursor:pointer; background:none;  backface-visibility:none; perspective:1000; transform:translate3d(0, 0, 0); } #debuggingBot:before { position:absolute; top:50%; left:50%; animation-duration:1s; animation-name:grow; animation-iteration-count:10; animation-timing-function:ease-in-out; content:""; margin-left:-11px; margin-top:-11px; width:22px; height:22px; background:#ed9f03; border-radius:11px; } @keyframes grow { 0% { transform:scale(1); } 50% { transform:scale(0.75); } 100% { transform:scale(1); } } #debuggingBot .on { position:absolute; top:50%; left:50%; margin:-6px 0 0 -4px; display:inline-block; border-top:6px solid transparent; border-bottom:6px solid transparent; border-left:10px solid #fafafa; } #debuggingBot .pause { position:absolute; top:50%; left:50%; margin:-4px 0 0 -5px; } #debuggingBot .pause:before { position:absolute; display:block; content:""; width:4px; height:10px; background:#fafafa; } #debuggingBot .pause:after { position:absolute; display:block; content:""; margin:0 0 0 6px; width:4px; height:10px; background:#fafafa; } #debuggingView { z-index:1000; position:fixed; top:75px; right:14px; color:#000; outline:0; margin-left:3px; margin-top:3px; width:12px; height:12px; border-radius:70% 15%; border:solid 1px currentColor; box-sizing:content-box; -webkit-transform:rotate(45deg); transform:rotate(45deg); background:#fff; } #debuggingView:before { content:""; position:absolute; left:2px; top:2px; width:6px; height:6px; border-radius:50%; border:solid 1px currentColor; } #debuggingView.on:before { background:#106800; } #debugTagCount { display:none; position:fixed; top:100px; right:3px; background:#106800; color:#fff; padding:3px 5px 2px; font-weight:bold; text-align:center; font-size:14px; z-index:100; border-radius:4px; } #debugTagCount.on { display:block; }</style>');

    // Initial
    $('head link:last').after('<link rel="stylesheet" type="text/css" href="css/common.css" media="screen" id="common_css" />');
    commonSwitch('on');
    console.log("★ Debugging start!!! ★");
    var tagCount = document.getElementsByTagName("*").length;
    $("#debugTagCount").html("DOM "+tagCount);

    // 디버깅봇 버튼 클릭
    $("#debuggingBot").click(function(){
        $(this).toggleClass("debugCommon");
        debuggingBotChk($(this));
    });

    function debuggingBotChk(_this){
        var debugClass = _this.hasClass('debugCommon');
        if(debugClass){
            console.log("---- Debugging stop ----");
            commonSwitch('off');
            $('#debuggingBot').html('<span class="on"></span>');
            // debug css 삭제
            $('#common_css').removeAttr("href");
        }else{
            console.log("---- Debugging start ----");
            commonSwitch('on');
            $('#debuggingBot').html('<span class="pause"></span>');
            // debug css 추가
            if( $('#common_css').attr("href") == undefined) {
                $('#common_css').attr("href","css/common.css");
            }
        }
    }

    $("#debuggingView").click(function(){
        var debugClass = $('#debuggingBot').hasClass('debugCommon');
        if(!debugClass){
            $(this).toggleClass("debugCommon");
            debuggingViewChk($(this));
        }
    });

    function debuggingViewChk(_this){
        var debugClass = _this.hasClass('debugCommon');
        if(debugClass){
            viewSwitch("on");
        }else{
            viewSwitch("off");
        }
    }

});

// 확인용 디버깅
function viewSwitch (viewStatus){
    if(viewStatus == "on"){
        $("#debuggingView, #debugTagCount").addClass("on");

        // caption 명, 대체텍스트(.blind) 확인
        $("caption, .blind").each(function(){
            $(this).addClass("eViewMessage");
        });

        // 이미지 alt 값 확인
        $("img").each(function(){
            var altVal = $(this).attr("alt");
            if(altVal != "" && altVal != undefined){
                $(this).addClass("eDebugView").after("<span class='eVirtualView'>"+ altVal +"</span>");
            }
        });
    } else {
        $("#debuggingView, #debugTagCount").removeClass("on");

        $('.eDebugView').each(function(){
            $(this).removeClass('eDebugView');
        });
        $('.eViewMessage').each(function(){
            $(this).removeClass('eViewMessage');
        });
        $('.eVirtualView').each(function(){
            $(this).remove();
        });
    }
}

// 오류용 디버깅
function commonSwitch (status){
    if(status == "on") {
        // heading 태그 내에 블록요소 태그 추가시
        $("h1, h2, h3, h4, h5, h6").each(function(){
            $(this).has("p, div, table, h1, h2, h3, h4, h5, h6, form, ul, ol, li, dl, dt, dd, pre, blockquote").addClass("eDebug").after('<div class="eVirtual">heading 태그 내에 블록요소 태그 위치불가</div>');
            $(this).has(".eVirtual").remove(".eVirtual");
        });

        // img 태그의 alt 속성이 빠진 경우
        $("img").each(function(){
            var fImg = $(this)[0].outerHTML;
            if(fImg.indexOf("alt=") == -1){
                $(this).addClass("eDebug").after('<div class="eVirtual">alt 속성 필수</div>');
            }
        });

        // button 태그의 type="button" 속성이 빠진 경우
        $("button").each(function(){
            var fButton = $(this)[0].outerHTML;
            if(fButton.indexOf("type=") == -1){
                $(this).addClass("eDebug").after('<div class="eVirtual">type="button" 속성 필수</div>');
            }
        });

        // table
        // border 속성이 빠진 경우
        $("table").each(function(){
            if($(this).attr('border') == ''){
                $(this).addClass("eDebug").after('<div class="eVirtual">border="1" 속성 필수</div>');
            }
        });
        // caption 태그가 빠진 경우
        $("table:not(:has(caption))").each(function(){
            $(this).addClass("eDebug").after('<div class="eVirtual">&lt;caption&gt; 필수</div>');
        });
        // col width="" 로 표현된 경우
        $("colgroup > col").each(function(){
            var vWidth = $(this).attr("width");
            if(vWidth == undefined){
                vWidth = '';
            }
            if(vWidth != ""){
                $(this).parents("table").addClass("eDebug").after('<div class="eVirtual">col 태그의 width는 &lt;col style="width:"&gt; 로 표시</div>');
            }
        });
        // th 태그 scope 속성이 누락되었거나, 속성값(col/row/colgroup/rowgroup) 이외의 값을 적용한 경우
        $("table th").each(function(){
            var fScope = $(this).attr("scope");
            if ( fScope == "" ) {
                $(this).addClass("eDebug scopenone");
            } else if ( fScope != "col" && fScope != "row" && fScope != "colgroup" && fScope != "rowgroup" ) {
                $(this).addClass("eDebug scopeerror");
            }
        });

        // lable 안에 폼태그가 2개이상인 경우
        var count=0;
        $("label").each(function(){
            var inputLen = $(this).find('input').length;
            var selectLen = $(this).find('select').length;
            var areaLen = $(this).find('textarea').length;
            var total = inputLen + selectLen + areaLen;
            if(total > 1){
                $(this).addClass('eDebug').after('<div class="eVirtual">label 안의 폼태그는 최대 1개 사용가능</div>');
                count++;
            }
        });

        // img 태그에 RMB, RMIB 사용 시 이미지 파일명 끝에 _m 이 붙지 않은 경우
        $("img.RMB, img.RMIB, .RMB img, .RMIB img").each(function(){
            var imgName = $(this).attr("src");
            if( imgName.substring(imgName.length-4,imgName.length-6) != "_m"){
                $(this).addClass('eDebug').after('<div class="eVirtual">이미지 파일명 끝에 _m 필수</div>');
            }
        });
    } else {
        $('.eDebug').each(function(){
            $(this).removeClass('eDebug');
        });
        $('.eVirtual').each(function(){
            $(this).remove();
        });
        viewSwitch("off");
    }
}