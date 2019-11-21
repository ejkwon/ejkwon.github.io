$(function(){
    /***************************************************** 수정범위 *****************************************************/
        var debugCSS = "css/debug.css"; // ★ 해당 프로젝트의 디버깅 CSS 경로로 수정해주세요.
    /*************************************************** //수정범위 *****************************************************/

    $('head link:last').after('<link rel="stylesheet" type="text/css" href="'+debugCSS+'" media="screen" id="template_css" />');
    templateSwitch('on');

    // 디버깅봇 버튼 클릭
    $("#debuggingBot").click(function(){
        $(this).toggleClass("debug");
        debuggingBotChk($(this));
    });

    function debuggingBotChk(_this){
        var debugClass = _this.hasClass('debug');
        if(debugClass){
            templateSwitch('off');
            // debug css 삭제
            $('#template_css').removeAttr("href");
        }else{
            templateSwitch('on');
            // debug css 추가
            if( $('#template_css').attr("href") == undefined) {
                $('#template_css').attr("href",debugCSS);
            }
        }
    }

    $("#debuggingView").click(function(){
        var debugClass = $('#debuggingBot').hasClass('debug');
        if(!debugClass){
            $(this).toggleClass("debug");
            debuggingViewChk($(this));
        }
    });

    function debuggingViewChk(_this){
        var debugClass = _this.hasClass('debug');
        if(debugClass){
            viewTemplateSwitch("on");
        }else{
            viewTemplateSwitch("off");
        }
    }
});

// 확인용 디버깅
function viewTemplateSwitch (viewStatus){
    if(viewStatus == "on"){
        $("#debuggingView").addClass("on");
        /***************************************************** 수정범위 *****************************************************/

            // eLayerClick 표시
            $(".eLayerClick").each(function(){
                $(this).addClass("eDebugView eLayer").after("<span class='eVirtualView eLayer'>eLayerClick</span>");
            });
            // eModal 표시
            $(".eModal").each(function(){
                $(this).addClass("eDebugView eLayer").after("<span class='eVirtualView eLayer'>eModal</span>");
            });

        /*************************************************** //수정범위 *****************************************************/
    } else {
        $("#debuggingView").removeClass("on");
    }
}

// 오류용 디버깅
function templateSwitch (status){
    if(status == "on") {
        /***************************************************** 수정범위 *****************************************************/

            // a, button 버튼클래스 내에 strong 태그로 강조된 경우
            $("a, button").each(function(){
                $(this).find("strong").parent().addClass("eDebug").after('<div class="eVirtual">버튼클래스 내에 strong 태그사용 안함(필요시 span 태그사용)</div>');
            });

            // 해외언어 lang 필수 적용 (언어별 css 파일을 추가한 경우)
            $("link[href$='.css']").each(function() {
                // 영어
                if ($(this).attr('href').indexOf("_en.css") > -1 && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "en")) {
                    $("body").prepend('<div class="eVirtual">[영어] html 태그에 lang="en" 속성을 추가하세요.</div>');
                }
                // 일본어
                if ($(this).attr('href').indexOf("_jp.css") > -1 && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "ja")) {
                    $("body").prepend('<div class="eVirtual">[일본어] html 태그에 lang="ja" 속성을 추가하세요.</div>');
                }
                // 중국어
                if ($(this).attr('href').indexOf("_cn.css") > -1 && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "zh")) {
                    $("body").prepend('<div class="eVirtual">[중국어] html 태그에 lang="zh" 속성을 추가하세요.</div>');
                }
            });

            // 해외언어 lang 필수 적용 (body 태그에 언어별 id나 class를 추가한 경우)
            $("body").each(function() {
                // 영어
                if ($(this).attr("id") == "us" && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "en")) {
                    $(this).prepend('<div class="eVirtual">[영어] html 태그에 lang="en" 속성을 추가하세요.</div>');
                }
                // 일본어
                if ($(this).attr("id") == "jp" && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "ja")) {
                    $(this).prepend('<div class="eVirtual">[일본어] html 태그에 lang="ja" 속성을 추가하세요.</div>');
                }
                // 중국어
                if ($(this).attr("id") == "cn" && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "zh")) {
                    $(this).prepend('<div class="eVirtual">[중국어] html 태그에 lang="zh" 속성을 추가하세요.</div>');
                }
            });

            // textarea 태그에서 rows나 cols 속성이 빠진 경우
            $("textarea").each(function(){
                var fTextarea = $(this)[0].outerHTML;
                if(fTextarea.indexOf("rows=") == -1 && fTextarea.indexOf("cols=") == -1){
                    $(this).addClass("eDebug").after('<div class="eVirtual">rows & cols 속성 필수</div>');
                } else if (fTextarea.indexOf("rows=") == -1){
                    $(this).addClass("eDebug").after('<div class="eVirtual">rows 속성 필수</div>');
                } else if (fTextarea.indexOf("cols=") == -1){
                    $(this).addClass("eDebug").after('<div class="eVirtual">cols 속성 필수</div>');
                }
            });

        /*************************************************** //수정범위 *****************************************************/
    } else {
        $('.eDebug').each(function(){
            $(this).removeClass('eDebug');
        });
        $('.eVirtual').each(function(){
            $(this).remove();
        });
        viewTemplateSwitch("off");
    }
}