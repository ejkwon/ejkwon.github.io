/*
 * SUIO FIND
 * SUIO 리스트(suio.xml)는 [http://fe.cafe24test.com/suio/include/xml_create.php]에서 자동생성됩니다.
 * 모듈이 추가될 경우 위 url에서 접근하면 xml파일이 자동생성됩니다.
**/

// append text
var StringBuffer = function() {
    this.buffer = new Array();
    }
    StringBuffer.prototype.append = function(obj) {
    this.buffer.push(obj);
    }
    StringBuffer.prototype.toString = function() {
    return this.buffer.join("");
}
$(function(){

    // findHtml
    var findHtml = new StringBuffer();
    findHtml.append('<div id="suioFinder">');
        findHtml.append('<div class="wp">');
            findHtml.append('<div class="hd">');
                findHtml.append('<input type="text" placeholder="모듈명 입력" class="keyword" />');
                findHtml.append('<ul class="list">');
                    findHtml.append('<li class="empty">일치하는 모듈없음</li>');
                findHtml.append('</ul>');
            findHtml.append('</div>');
            findHtml.append('<div class="iframe"><iframe src="" frameborder="0"></iframe></div>');
        findHtml.append('</div>');
        findHtml.append('<span class="loaderBg"></span>');
        findHtml.append('<button type="button">SUIO</button>');
    findHtml.append('</div>');

    // findCss
    var findCss = new StringBuffer();
    findCss.append('<style type="text/css">');
        findCss.append('#suioFinder { z-index:1000; position:fixed; right:0px; top:0px; bottom:0; }');
        findCss.append('#suioFinder .wp { display:none; width:100%; height:100%; padding:10px; border:5px solid #000; background:#fff; box-sizing: border-box; -moz-box-sizing: border-box; }');
        findCss.append('#suioFinder .hd { z-index:10; position:relative; height:30px; padding:10px; background:#000; }');
        findCss.append('#suioFinder .keyword { width:510px; height:30px; font-size:14px; font-weight:bold; line-height:30px; border:0; }');
        findCss.append('#suioFinder .keyword:focus { background:lightblue; }');
        findCss.append('#suioFinder .list { display:none; position:absolute; left:9px; top:35px; width:500px; padding:5px; background:#fff; border:1px solid #000; }');
        findCss.append('#suioFinder .list li { display:none; float:left; width:50%; }');
        findCss.append('#suioFinder .list a { display:block; padding:3px 0; font-size:14px; }');
        findCss.append('#suioFinder .list a:focus,');
        findCss.append('#suioFinder .list a:hover { text-decoration:none; background:lightblue; }');
        findCss.append('#suioFinder .iframe { position:absolute; left:20px; right:15px; top:70px; bottom:20px; }');
        findCss.append('#suioFinder .loader { z-index:10; position:absolute; left:50%; top:50%; width:220px; padding:0 0 19px; margin:-9px 0 0 -110px; font-size:14px; font-family:Helvetica; color:#fff; font-weight:bold; text-align:center; text-transform:capitalize; background:url("/suio/img/loader.gif") no-repeat 0 100%;}');
        findCss.append('#suioFinder .loaderBg { position:absolute; left:0px; right:0px; top:0px; bottom:0px; background:#000; opacity:0.7; filter:alpha(opacity=70); }');
        findCss.append('#suioFinder .iframe iframe { width:100%; height:100%; }');
        findCss.append('#suioFinder button { position:absolute; top:0; right:100%; margin-right:-1px; padding:5px 10px; white-space:nowrap; border:1px solid #000; opacity:0.5; font-weight:bold;" }');
    findCss.append('</style>');

    // append html, css
    $('body').append(findHtml.toString());
    $('body').append(findCss.toString());

    // append list
    var file ='';
    var suioFinder = $('#suioFinder');
    $.ajax({
        type: 'get',
        dataType: 'xml',
        url: 'http://fe.cafe24test.com/suio/suio.xml',
        success : function(xml){
            var file = $(xml).find('file');
            file.each(function(){
                var fileHtml = new StringBuffer();
                fileHtml.append('<li style="">');
                    fileHtml.append('<a href="/suio/include/layout.php?MODULE='+$(this).text()+'&XML=Y">'+ $(this).siblings('module').text() +'</a>');
                fileHtml.append('</li>');
                $('.list',suioFinder).append(fileHtml.toString());
            });
        },
        error : function(){
            alert('xml을 가져오지못함.');
        }
    });

    // list click
    $('a',suioFinder).live('click', function(){
        var text = $(this).text();
        $('input[type="text"]',suioFinder).val(text);
        $('iframe',suioFinder).attr('src',$(this).attr('href'));
        $(this).parents('ul:first').hide();

        suioFinder.append('<span class="loader">loading...</span>');
        $('.loaderBg',suioFinder).show();

        $('iframe',suioFinder).load(function(){
            $('.loader',suioFinder).remove();
            $('.loaderBg',suioFinder).fadeOut();
        });
        return false
    });

    // form focus
    $('input[type="text"]',suioFinder).focus(function(){
        $('ul',suioFinder).show();
        $('li:not(".empty")',suioFinder).show();
    });

    // form keyup
    $('input[type="text"]',suioFinder).keyup(function(){
        $('#suioFinder .list').show();
        var val = $(this).val();
        if(val == '*' || val == '' ){
            $('li',suioFinder).show();
            $('li.empty',suioFinder).hide();
            return false
        } else {
           $('li',suioFinder).hide();
            $('a:contains('+ val +')', suioFinder).each(function(){
                $(this).parents('li:first').show(); 
            });
        }
        if($('a:contains('+ val +')', suioFinder).length == 0){
            $('#suioFinder .list .empty').show();
        } else {
            $('#suioFinder .list .empty').hide();
        }
    });

    // toggle button
    $('button',suioFinder).live('click', function(){
        if($(this).hasClass('show')){
            $(this).removeClass('show');
            suioFinder.css({'width':'0%'});
            $('.wp',suioFinder).hide();
        } else {
            $(this).addClass('show');
            suioFinder.css({'width':'85%'});
            $('.wp',suioFinder).show();
        }
    });

    // ul hidden
    $('iframe',suioFinder).mouseenter(function(){
        $('ul',suioFinder).hide();
    });

});