$(function(){
    /***************************************************** 수정범위 *****************************************************/
        var debugCSS = "/img.cafe24.com/mobile/hosting/css/debug.css"; // ★ 해당 프로젝트의 디버깅 CSS 경로로 수정해주세요.
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

            // mLayer 이름이 layer로 시작하지 않을 때
            $(".mLayer").not("[id^=layer]").each(function(){
                $(this).css({'outline':'1px solid red'}).append("<span class='Alert'>레이어 id명 layer$NAME</span>");
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