// 환경설정 > 채널 연결 관리
function eFaqAccordion() {
    var findTarget = $(".eFaqAccordion li .link");
    findTarget.click(function () {
        if(findTarget.closest('li').hasClass('selected')) {
            $(this).closest('li').removeClass('selected');
        }else{
            $(this).closest('li').addClass('selected');
        }
    });
};