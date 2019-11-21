$(document).ready(function(){
    clickEvent();

    $( '.mSearchForm .search' ).focus(function() {
        $(this).parents('.mSearchForm').addClass('focus');
    });
    $( '.mSearchForm .search' ).focusout(function() {
        $(this).parents('.mSearchForm').removeClass('focus');
    });

    $('.mInfo .eToggle').click(function(){
        var targetParent = $(this).parents(".expand");
        targetParent.toggleClass('selected');
        if (targetParent.hasClass('selected')){
            $(this).text('닫힘');
        } else {
            $(this).text('열림');
        }
    });
});

function clickEvent() {
    $('.eClick').click(function(){
        eToggle($(this).parent(), 'selected');
    });
}
// toggleClass
function eToggle(target, className) {
    target.toggleClass(className);
}