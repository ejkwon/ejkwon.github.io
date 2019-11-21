$(function(){
    // code light
    prettyPrint();

    // updateNotice
    fakescroll.set("noticefakeScroll", { tracksize:"-39", scrollsize:52, useswipe:false});
    $("#noticefakeScroll .scroll-bar").append("<span class='inner'></span>");
    var timer = setInterval(function(){ $('#updateNotice').fadeOut(1000); }, 5000);
    $('#updateNotice .eClose').click(function(e){
        $(this).parents('#updateNotice').fadeOut(500);
        e.preventDefault();
    });
    $('#uioUpdate').click(function(e){
        $('#updateNotice').fadeIn(500);
        clearInterval(timer);
        e.preventDefault();
    });
    if($("#updateNotice .list").find("li").length==0){
        $("#updateNotice").append("<p class='empty'>최근 알림이 없습니다.</p>");
    }

    // side toggle
    $('#uioSidebar .toggle').click(function(){
        var _target = $($(this).attr('href'));
        if(_target.hasClass('hide')){
            $(this).text('‹');
            _target.removeClass('hide');
        } else {
            $(this).text('›');
            _target.addClass('hide');
        }
        return false
    });

    // module list
    $('#uioSidebar .ready a').click(function(){
        var _txt = $(this).text().replace('준비중 : ','');
        alert('['+ _txt + ']는 준비중입니다');
        return false
    });

    // module list
    $('#uioSidebar a.debug').mouseenter(function(){
        $(this).text('[Debug]').addClass('hover');
    });
    $('#uioSidebar a.debug').mouseleave(function(){
        $(this).text('[D]').removeClass('hover');
    });

    // html code toggle
    $('.sampleMenu .html').click(function(){
        var _code = $(this).parents('.sampleMenu:first').next('.code');
        if(_code.css('display') == 'none'){
            _code.show();
            $(this).text('▲ HTML Preview Open');
        } else {
            _code.hide();
            $(this).text('▼ HTML Preview Close');
        }
    });

    // java code toggle
    $('.sampleMenu .java').click(function(){
        var _code = $(this).parents('.sampleMenu:first').next('.code:first').next('.codeJAVA');
        if(_code.css('display') == 'none'){
            _code.show();
            $(this).text('▲ JAVASCRIPT code Open');
        } else {
            _code.hide();
            $(this).text('▼ JAVASCRIPT code Close');
        }
    });

    // sidebar search
    $('input[name="uioSearchKey"]').keyup(function(){
        var _val = $(this).val();
        if(_val == ''){
            $('#uioSnb li').show();
            $('#uioNull').text('');
        } else {
            var _length = $('#uioSnb a:contains('+ _val +')').length;
            if(_length <= 0){
                $('#uioNull').text('검색된 모듈이 없습니다.');
            } else {
                $('#uioNull').text('');
            }
            $('#uioSnb li').hide();
            $('#uioSnb a:contains('+ _val +')').each(function(){
               $(this).parents('li:first').show();
            });
        }
    });
    $('input[name="uioSearchKey"]').focusout(function(){
        var _val = $(this).val();
        if(!_val){
            $('#uioSnb li').show();
        }
    });

    // copy to clipboard
    var _clip = new Array();
    var _clip_index = 0;
    $('.btnCopySource').each(function(){
        var _clip = new ZeroClipboard.Client();
        _clip.setText($('#sampleClipboard_' + _clip_index ).text());
        _clip.glue( 'btnCopySource_' + _clip_index );
        _clip.addEventListener('complete', function (client) {
            alert('선택된 모듈(HTML)이 클립보드에 복사되었습니다.');
        });
        _clip_index ++;
    });

    // sidebar toggle position
    var _hdr_h = $('#uioHeader').outerHeight();
    var _sidebar_toggle = $('#uioSidebar .toggle');
    var _sidebar_focus = $('#uioSidebar .focus');
    $(window).scroll(function(){
        var _h = $(window).scrollTop();
        if(_hdr_h < _h) {
            _sidebar_toggle.css({'top':_h - _hdr_h + 5});
            _sidebar_focus.css({'top':_h - _hdr_h + 75});
        } else {
            _sidebar_toggle.css({'top':0});
            _sidebar_focus.css({'top':70+'px'});
        }
    });

    //languageSelect
	//figureNow = 0 일때 중문, figureNow = 1 일때 영문
    var figureNow = 0;
    var storeName = "figureNow";

    storeGet();

    //local data get
    function storeGet() {
        if (window.localStorage.length) {
            var getNum = localStorage.getItem(storeName);
            figureNow = getNum
        }
    }

    //local data set
    function storeSet() {
        localStorage.setItem(storeName, figureNow);
    }

    //select change event
    $('#uioLanguage').change(function(){
        var propArr = ['简体中文','ENGLISH'];
        var propVal = $(this).val();
        for(var i=0; i<propArr.length; i++){
            if(propArr[i] == propVal){
                figureNow = i;
            }
        }
        selectChangeEvent();
        storeSet();
    });

    function selectChangeEvent(){
        $('#uioLanguage option:eq('+figureNow+')').attr('selected', true);
        var displayflag1;
        var displayflag2;
        if(figureNow == 0){
            displayflag1 = false;
            displayflag2 = true;
        }else{
            displayflag1 = true;
            displayflag2 = false;
        }
        $('.en_US').toggle(displayflag1);
        $('.zh_CN').toggle(displayflag2);
        //localStorage.clear();
    }

    selectChangeEvent();
});