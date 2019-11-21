var CUI = CUI || {};
/*
	@인터렉션 참고: http://wiki.simplexi.com:8080/display/pubguide/SUIO+Layout 
*/

/**
 * Rolling 효과 마지막이면 처음으로가서 롤링
 *
 * @param el 효과가 적용될 엘리먼트
 * @param opts 옵션값들
 **/
CUI.newsrolling = function( el, opts){

    if ( $(el).length <= 0 ) {
        return false;
    };

    var rolling = $(el)
    , items = rolling.children()
    , itemHeight = items.eq(0).height()
    , itemWidth = items.eq(0).width()
    , itemLength = items.length
    , current = 1
    , that
    , o = $.extend( {} , CUI.newsrolling.defaults  , opts)
    , busy = false
    , timer = false;

    if ( items.length <= 1 ) {
        return false;
    };

    that = {
        init : function() {
            rolling.append( items.first().clone(true) ).prepend( items.last().clone(true) );
            this.initPosition();
            this.play();
            this.setEvent();
        },
        setEvent : function() {
            var s = this;
            rolling.bind("mouseenter", function(){
                s.stop();
            });

            rolling.bind("mouseleave", function(){
                s.play();
            });
        },
        initPosition : function() {
            rolling.css('top', '-' +  itemHeight + 'px' );
        },
        start : function(  ){
            var s = this;
            s.transition();
        },
        play : function(){
            var s = this;
            timer = setTimeout(function(){
                s.transition();
            }, o.interval );
        },
        stop : function(){
            clearTimeout( timer );
            timer = null;
        },
        transition : function(){
            if ( !busy ) {
                var s= this;
                busy = true;
                rolling.stop().animate( { 'top' : '-=' + itemHeight + 'px' }, o.duration, "linear", function(){
                    if ( current >= itemLength  ) {
                        s.initPosition();
                        current = 1;
                    } else {
                        current = current + 1;
                    }
                    s.play();
                    busy = false;
                });
            }
        }
    };
    that.init();
    return that;
};


/**
 * 토글러 버튼 처리
 * @param el 엘리먼트
 * @param target 토글 대상
 * @param className 저용됄 클래스명
 **/
CUI.toggler = function( el, target, className ) {
    var $target = $(target);
    $(el).unbind("click").bind("click", function(e) {
        $target.toggleClass(className);
    });
    $target.bind("mouseleave", function(){
        $(this).removeClass(className);
    });
};

/**
 * SNB를 구현
 * @param el 효과가 부여될 엘리먼트들
 * @apram opts 옵션값들
 **/
CUI.gnbLeft = function( el, opts ) {
    if ( $(el).length < 1 ) {
        return false;
    };
    var o = $.extend( {}, CUI.gnbLeft.defaults, opts );
    return $(el).each( function(){
        var $container = $(this)
        , $child = $container.children();
        if ( $child.length <= o.menuCount ) {
            $container.parent().addClass(o.menuClass);
        };
        $container.find("li").filter(function(){
            var $li = $(this);
            if ( $li.is(":has(ul)") ) {
                $li.addClass(o.expandClass);
            } else {
                $li.removeClass(o.expandClass);
            };
        });
        $container.find("li:has(ul)>a").bind("click", function(event){
            event.preventDefault();
            var $li = $(this).parent();
            if ( $li.hasClass(o.selctedClass) ) {
                if ( o.animation ) {
                    $li.find(">ul").slideUp(o.duration);
                } else {
                    $li.find(">ul").hide();
                }
                $li.removeClass(o.selctedClass);
            } else {
                if ( o.animation ) {
                    $li.find(">ul").slideDown(o.duration);
                } else {
                    $li.find(">ul").show();
                }
                $li.addClass(o.selctedClass);
            }
        });
    });
};
