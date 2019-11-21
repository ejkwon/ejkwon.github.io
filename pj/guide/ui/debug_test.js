$(function(){
    console.log("ui 개발팀만 볼수있는 로컬 debug_test.js!");

    if($('body').attr('id') == 'popup'){
        //팝업 size 영역
        var size = $("#popup").attr("size");
        if(!size){
            $("#popup").append('<p id="popupSize">※ 팝업은 <strong>size(가로,세로) 값을 필수</strong>로 기재합니다. 해당영역은 더블클릭하면 사라집니다.<br />※ 가이드: <span class="txtWarn">&lt;body id="popup" size="720, 450"&gt;&lt;!-- 참고 : size 속성은 팝업 가로/세로 체크용입니다. 개발진행시에 팝업사이즈에 적용해주시고, size 는 삭제해주세요. --&gt;</span><br />※ size 최대값은 1100, 800 이며 사이즈 제한이 불필요한 경우는 <strong>free를 추가</strong>하세요. ex) &lt;body id="popup" size="1280, 800, free"&gt;</p>');
            $('#popupSize').dblclick(function(){
                $('#popupSize').hide();
            });
        } else {
            var popupWidth = size.split(",")[0];
            var popupHeight = size.split(",")[1];
            var freeSize = size.split(",")[2];
            if( typeof(freeSize) == 'undefined' || freeSize.indexOf('free') == -1) {
                if(popupWidth>1100 || popupHeight>800) { alert("팝업size 확인해주세요! (최대 1100, 800)"); }
            }
        }
    }
});