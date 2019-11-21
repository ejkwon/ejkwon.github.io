$(document).ready(function() {
	$(".eTab li a").click(function(){
		$(this).each(function(i){
			$(".gContent").css("display","none");
			$(".eTab li").removeClass("selected");
		});
		$( this.getAttribute("href") ).css("display","block");
		$(this).parent().addClass("selected");
		return false;
	});

	$("#endHidden").click(function(){
		$("tr.end").css("display","none");
	});

    // 팝업
	$('.popup').click(function(){
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
		window.open(_href,_name,'scrollbars='+_scroll+',width='+_width+',height='+_height+',resizable='+_resizable+',menubar='+_menubar+'');
		return false
	});
	$('#contents tbody:nth-child(odd)').each(function(){
		$(this).addClass('even');
	});

    // jira 셀(td) 새창열기 링크로 교체
    $('td.jira').each(function(){
        var text = $(this).text();
        var findThis = $(this);
        var split = text.split(',');
        findThis.empty();
        for(var i=0; i<split.length; i++){
            findThis.append('<a href="http://jira.simplexi.com:8080/browse/'+ split +'" target="_blank">'+ split[i] +'</a>');
        }
    });

	$(".mTable td.login").click(function(){
		$(this).css("color","#1c1c1c");
	});

    // 미리보기
    $('.mTable td .frame > img').each(function(){
        var src = $(this).attr('src');
        $(this).parent().append('<span class="layer"><img src="'+ src +'" /></span>');
    }).mouseenter(function(){
        $(this).siblings('.layer').show();
    })
    $('body').delegate('.mTable td .frame', 'mouseleave', function(){
        $(this).find('.layer').hide();
    });
    
    // operation flex list
    $('.eOperation').each(function(){
        if(!$(this).hasClass('title')){
            var li = $(this).find('>li');
            var liHeight = li.find('>span').css('height');
            $(this).find('>li').mouseenter(function(){
                var findThis = $(this);
                var index = findThis.index() + 1;
                var next = findThis.next();
                var prev = findThis.prev();
                if(index%2 == 1){
                    next.addClass('selected');
                } else {
                    if(index == 1){
                        next.addClass('selected');
                    } else {
                        prev.addClass('selected');
                    }
                }
                findThis.addClass('selected');
            });
            $(this).find('>li').mouseleave(function(){
                li.removeClass('selected');
                $(this).removeClass('selected');
            });
        }
    });

    // 로그보기
    $('.log').each(function(){
        var log = $(this);
        var ul = $(this).find('ul');
        var memoEle = '<span class="btnIcon icoMemo">로그</span>';
        var li = ul.find('li');
        ul.wrap('<div class="content" />');
        log.append(memoEle);
        var memo = log.find('.icoMemo');
        li.each(function(i){
            var jira = $(this).text();
            $(this).text('');
            i = i+1;
            $(this).append('<a href="http://jira.simplexi.com:8080/browse/'+ jira +'" target="_blank" title="로그(지라) 새창열림">'+ jira +'</a>');
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
    $('.log').mouseenter(function(){
        logCtrl($(this).find('.content'), true);
    });
    $('.log').mouseleave(function(){
        logCtrl($(this).find('.content'), false);
    });
});	