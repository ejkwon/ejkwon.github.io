$.fn.layoutView = function(){
    var body = $('body');
    var layout = {
        init : function(){
            $(function(){
                $('[data-layout]').each(function(i){
                    $(this).attr('layout-index',i);
                    var dataId = $(this).attr('id');
                    var top = $(this).offset().top;
                    var width = $(this).outerWidth();
                    var height = $(this).outerHeight();
                    var bgColor = $(this).attr('data-layout');
                    var cssProp = 'top:'+ top +'px; ';
                    var bgCssProp = 'top:'+ top +'px; width:' + width + 'px; height:' + height + 'px;' + 'background-color:'+ bgColor + '; opacity:0.5;';
                    var tagName = $(this).get(0).tagName.toLowerCase();
                    body.append('<div class="dataIdLabel" data-label="'+ i +'" style="'+ cssProp +'">&lt;'+ tagName +' id="'+ dataId +'"&gt;</div>');
                    body.append('<div class="dataIdLabelBg" data-label="'+ i +'" style="'+ bgCssProp +'" />');
                });
                var cssText  = '.dataIdLabel { z-index:1001; display:none; position:absolute; padding:5px 10px; font-size:14px; color:#fff; font-weight:bold;}';
                    cssText += '.dataIdLabelBg { z-index:1000; display:none; position:absolute; left:0; top:0; }';
                    cssText += '.dataIdBtn { z-index:1002; position:fixed; right:0; top:0; padding:5px 10px; font-size:12px; font-weight:normal; font-family:Verdana; color:#fff; border:0; background:#467bff; cursor:pointer; opacity:0.5;}';
                    cssText += '.dataIdBtn:hover { opacity:1; }';
                var css = '<style type="text/css">'+ cssText +'</style>';
                body.append('<button type="button" class="dataIdBtn">레이아웃 보임/숨김</button>');
                body.append(css);
                layout.position();
                $(window).resize(function(){
                    layout.position();
                });
                $('.dataIdBtn').click(function(){
                    $('.dataIdLabel').toggle();
                    $('.dataIdLabelBg').toggle();
                });
            });
        },
        position : function(){
             $('[data-label]').each(function(i){
                var target = $(this);
                var index = target.attr('data-label');
                var standard = $('[layout-index]:eq('+ index +')');
                var left = standard.offset().left;
                target.css({'left': left});
             });
        }
    }
    layout.init();
}

$(function(){
    // iframe resize
    if(parent.guideFrameResize != undefined){
        parent.guideFrameResize(document.body.scrollHeight);
        $(window).resize(function(){
            parent.guideFrameResize(document.body.scrollHeight);
        });
    }

    // ia popup
    $('body#ia .popup').click(function(){
        var _this = $(this),
            _opts = _this.attr('opts').split(','),
            _href = _this.attr('href'),
            _name = _this.parents('tr:first').find('.id').text().trim(),
            _width = _opts[0],
            _height = _opts[1],
            _scroll = _opts[2];
            _resizable = _opts[3];
            _menubar = _opts[4];
        if(_scroll == 'y'){
            _scroll = 1;
        } else {
            _scroll = 0;
        }
        if(_menubar == 'y'){
            _menubar = 1;
        } else {
            _menubar = 0;
        }
        if(_resizable == 'y'){
            _resizable = 1;
        } else {
            _resizable = 0;
        }
        if(_width == '100%'){
            _width = screen.width;
        } 
        if(_height == '100%'){
            _height = screen.height;
        } 
        window.open(_href,_name,'scrollbars='+_scroll+',width='+_width+',height='+_height+',resizable='+_resizable+',menubar='+_menubar+'');
        return false
    });
    $('body#ia .guideBoard tbody:nth-child(odd)').each(function(){
        $(this).addClass('even');
    });

    // ia log
    $('body#ia .log').each(function(){
        var log = $(this);
        var ul = $(this).find('ul');
        var memoEle = '<span class="icoLog">로그</span>';
        var li = ul.find('li');
        ul.wrap('<div class="content" />');
        log.append(memoEle);
        var memo = log.find('.icoLog');
        li.each(function(i){
            var jira = $(this).text();
            $(this).text('');
            i = i+1;
            $(this).append('<a href="http://jira.simplexi.com:8080/browse/'+ jira +'" target="_blank" title="새창 열림">'+ jira +'</a>');
        });
        if(li.length > 1){
            memo.addClass('selected');
        } else {
            memo.removeClass('selected');
        }
    });
    function logCtrl(target, view){
        if(target.length > 0){
            if(view == true){
                target.addClass('view');
            } else {
                target.removeClass('view');
            }
            var left = target.parents('.log:first').position().left;
            var top = target.parents('.log:first').position().top;
            target.css({'left':left, 'top':top});
        }
    }
    $('body#ia .log').mouseenter(function(){
        logCtrl($(this).find('.content'), true);
    });
    $('body#ia .log').mouseleave(function(){
        logCtrl($(this).find('.content'), false);
    });

    // ia address 
    if($('body#ia')){
        var iaUrl = window.location.href;
        $('body#ia h2').append('<label class="txtIaAddress">IA URL : <input type="text" readonly="readonly" value="'+ iaUrl +'" /></label>');
    }
});