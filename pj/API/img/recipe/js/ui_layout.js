// 전역 > 사이드메뉴
function eSideExpand() {
    var findTarget = $("#wrap");
    $('.eMenu').click(function () {
        $('#wrap').toggleClass('sideExpand');
        findTarget.parent().append('<div id="dimmed_'+ findTarget.attr('id') +'" class="dimmed"></div>');

        $('.dimmed').on('click', function() {
            dimmedClose();
        });
    })
    $('#sidebar .eClose').on('click', function() {
        dimmedClose();
    })
}
function dimmedClose(){
    var findDimmed = $("#dimmed_wrap");
    $('#wrap').removeClass('sideExpand');
    $('.dimmed').removeAttr('onclick');
    findDimmed.remove();
}