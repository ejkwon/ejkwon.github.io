$(function(){
    // code light
    prettyPrint();

    // debug code toggle
    $('.sampleMenu .debug').click(function(){
        var _code = $(this).parents('.sampleMenu:first').next('.codeView').children('.codeDebug');
        if(_code.css('display') == 'none'){
            _code.show();
            $(this).text('▲ Debug code Close');
        } else {
            _code.hide();
            $(this).text('▼ Debug code Open');
        }
    });
    // html code toggle
    $('.sampleMenu .html').click(function(){
        var _code = $(this).parents('.sampleMenu:first').next('.codeView').children('.codeHTML');
        if(_code.css('display') == 'none'){
            _code.show();
            $(this).text('▲ Error code Close');
        } else {
            _code.hide();
            $(this).text('▼ Error code Open');
        }
    });

    // quickmenu text
    var quickMenu="";
    $(".areaTitle .text, .debugTitle").each(function(){
        quickMenu = quickMenu+"<li><a href='#"+$(this).attr("id") +"'>"+ $(this).html()+"</a></li>";
        $("#quick .menu").html(quickMenu);
    });
    // btnQuick show/hide
    $('.btnQuick').click(function(){
        $(this).parents("#quick").toggleClass("hide");
        if($(this).parents("#quick").hasClass("hide")==true) {
            $(this).children("span").html("◀");
        } else {
            $(this).children("span").html("▶");
        }
    });
    // quickmenu scroll
    $('#quick .menu a[href^="#"]').click(function() {
        var target = $(this.hash);
        $('html, body').animate({ scrollTop: target.offset().top }, 500, 'swing');
        return false;
    });
    $('.areaTitle .btnToggle, .areaTitle .text').click(function() {
        $(this).parents('.areaTitle').toggleClass('selected');
        $(this).parents('.areaTitle').next().toggle();
        return false;
    });

    // copy to clipboard
    var _clip = new Array();
    var _clip_index = 0;
    $('.btnCopySource').each(function(){
        var _clip = new ZeroClipboard.Client();
        _clip.setText($('#sampleClipboard_' + _clip_index ).text());
        _clip.glue( 'btnCopySource_' + _clip_index );
        _clip.addEventListener('complete', function (client) {
            alert('선택된 코드가 클립보드에 복사되었습니다.');
        });
        _clip_index ++;
    });

    // mLayer : eLayerClick
    $('body').delegate('.eLayerClick', 'click', function(e){
        var findTarget = $($(this).attr('href'));
        findTarget.show();
        e.preventDefault();
    });
});

