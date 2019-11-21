/**
 * @param Object    settings    환경변수 오브젝트
 *        roll            -    순환 (default true)
 *        flexible        -    유동 레이아웃 (default false)
 *        resize          -    리사이즈 사용 (default false)
 *        view            -    다중 컬럼 (default 1)
 *        speed           -    애니메이션 속도 (default 75)
 *        range           -    넘김 판정 범위 (default 0.15)
 *        page            -    초기 페이지 (default 1)
 *        transition      -    CSS3 transition 사용 (default true)
 *        btn_prev        -    prev 버튼 (jQuery Object, default null)
 *        btn_next        -    next 버튼 (jQuery Object, default null)
 *        paging          -    page 버튼 (jQuery Object, default null)
 *        sidePage        -    사이드 페이지 사용 (default false)
 *        initComplete    -    초기화 콜백
 *        counter         -    슬라이드 콜백, 카운터
*/

(function ($) {

    $.fn.eRolling = function (settings) {

        settings = jQuery.extend({
            roll : true,
            flexible : false,
            btn_prev : null,
            btn_next : null,
            paging : null,
            speed : 500,
            view : 1,
            range : 0.15,
            page : 1,
            sidePage : false,
            transition : true,
            initComplete : null,
            counter : null,
            autoplay : false,
            delay : null,
            listroll : false
        }, settings);

        var opts = [];
        opts = $.extend({}, $.fn.eRolling.defaults, settings);

        return this.each(function () {

            var _this = this;

            $.fn.extend(this, eRolling);
            this.opts = opts;
            this.init();

            $(window).bind("orientationchange resize", function () {
                _this.resize(_this);
            });

        });
    };

    var eRolling = {

        init : function () {
            var _this = this;
            this._view = this.opts.view;
            this._speed = this.opts.speed;
            this._tg = $(this);
            this._list = this._tg.children();
            this._width = parseInt(this._tg.css("width"));
            this._item_w = this._width;
            this._len = this._list.length;
            this._range = this.opts.range * this._width;
            this._pos = [];
            this._start = [];
            this._startX = 0;
            this._startY = 0;
            this._left = 0;
            this._top = 0;
            this._drag = false;
            this._link = true;
            this._scroll = false;
            this._btn_prev;
            this._btn_next;
            this.timer;
            
            if(this._width == 0){
                this._width = (this._tg.parent().width()-2);
            }

            if(this.opts.autoplay){
                this.timer = setInterval(function() {_this.interval(_this);}, this.opts.delay);
            }

            $(this).css({
                "width":this._width + "px",
                "z-index":"1"
            });

            if(this.opts.flexible) this._item_w = this._width / this._view;

            if(this.opts.roll) {
                if(this._len % this._view > 0) {
                    var blank = $(document.createElement(this._list.eq(0).eq(0).prop("tagName"))).hide();
                    var cnt = this._view - (this._len % this._view);
                    for(var i=0; i<cnt; ++i) {
                        this._list.parent().append(blank.clone());
                    }
                }
                this._list = this._tg.children();
                this._len = this._list.length;
                this._len = (this._len / this._view) * this._view;
            }

            var page_gap = (this.opts.page > 1 && this.opts.page <= this._len) ? (this.opts.page - 1) * this._item_w : 0;

            for(var i=0; i<this._len; ++i) {
                this._pos[i] = this._item_w * i - page_gap;
                this._start[i] = this._pos[i];
                this._list.eq(i).css({
                    "float" : "none",
                    "position" : "absolute",
                    "top" : "0",
                    "width" : this._item_w + "px"
                });

                this.move({
                    tg : this._list.eq(i),
                    speed : 0,
                    to : this._pos[i]
                });
            }
            if(this.opts.btn_prev && this.opts.btn_next) {
                this.opts.btn_prev.unbind("click").bind("click", function() {
                    _this.animate(1, true);
                    if(_this.opts.autoplay){
                        if(_this.timer){
                            clearInterval(_this.timer);
                            _this.timer = setInterval(function() {_this.interval(_this);}, _this.opts.delay);
                        }
                    }
                    return false;
                })
                this.opts.btn_next.unbind("click").bind("click", function() {
                    _this.animate(-1, true);
                    if(_this.opts.autoplay){
                        if(_this.timer){
                            clearInterval(_this.timer);
                            _this.timer = setInterval(function() {_this.interval(_this);}, _this.opts.delay);
                        }
                    }
                    return false;
                });
            }

            if(this.opts.paging) {
                $(this._list).each(function (i, el) {
                    var btn_page = _this.opts.paging.eq(0).clone();
                    _this.opts.paging.before(btn_page);

                    btn_page.bind("click", function(e) {
                        _this.go_page(i, e);
                        return false;
                    });
                });

                this.opts.paging.remove();
            }

            this._tg.find("a").live("click", function (e) {
                if(!_this._link) {
                    return false;
                }
            });

            this.initComplete();
            this.counter();
        },

        initComplete : function () {
            if(this.opts.sidePage) {
                this.animate(-1, true, 0);
                this.animate(1, true, 0);
            }
            /*if(typeof(this.opts.initComplete) == "function") {
                this.opts.initComplete(this);
            }*/
            var _this = this;
            //var target = this._tg.next().children();
            var target = this._tg.siblings(".paginate").children();
            if(target){
                target.bind("click", function (e) {
                    var i = $(this).index();
                    _this.go_page(i);
                });
                target.bind("mouseover", function (e) {
                    if(_this.opts.autoplay){
                        _this.intervalend();
                    }
                });
                target.bind("mouseout", function (e) {
                    if(_this.opts.autoplay){
                        _this.intervalstart();
                    }
                });
            }
        },

        resize : function (e) {
            if(e.opts.flexible) {
                var tmp_w = e._item_w;

                e._width = parseInt(e._tg.css("width"));
                e._item_w = e._width / e._view;
                e._range = e.opts.range * e._width;

                for(var i=0; i<e._len; ++i) {
                    e._pos[i] = e._pos[i] / tmp_w * e._item_w;
                    e._start[i] = e._start[i] / tmp_w * e._item_w;
                    e._list.eq(i).css({
                        "width" : e._item_w + "px"
                    });
                    this.move({
                        tg : e._list.eq(i),
                        speed : 0,
                        to : e._pos[i]
                    });
                }
            }
            this.counter();
        },

        position : function (d) {
            var gap = this._view * this._item_w;
            var nextmax = 0;
            if(this.opts.listroll){
                var c = this._item_w * this._len;
                var u = c - (this._item_w*2)
                nextmax = u;
            }

            if(d == -1 || d == 1) {
                this._startX = 0;
                this._start = [];
                for(var i=0; i<this._len; ++i) {
                    this._start[i] = this._pos[i];
                }
                this._left = d * gap;
            } else {
                if(this._left > gap) this._left = gap;
                if(this._left < - gap) this._left = - gap;
            }

            if(this.opts.roll) {
                var tmp_pos = [];

                for(var i=0; i<this._len; ++i) {
                    tmp_pos[i] = this._pos[i];
                }
                tmp_pos.sort(function(a,b){return a-b;});

                var max_chk = tmp_pos[this._len-this._view];
                var p_min = $.inArray(tmp_pos[0], this._pos);
                var p_max = $.inArray(max_chk, this._pos);

                var p = (this.opts.sidePage) ? 3 : 1;
                if(this._view <= 1) max_chk = this._len - p;

                if((d == 1 && tmp_pos[p-1] >= 0) || (this._drag && tmp_pos[p-1] > 0)) {
                    for(var i=0; i<this._view; ++i, ++p_min, ++p_max) {
                        this._start[p_max] = this._start[p_min] - gap;
                        this.move({
                            tg : this._list.eq(p_max),
                            speed : 0,
                            to : this._start[p_max]
                        });
                    }
                } else if((d == -1 && tmp_pos[max_chk] <= nextmax) || (this._drag && tmp_pos[max_chk] <= nextmax)) {
                    for(var i=0; i<this._view; ++i, ++p_min, ++p_max) {
                        this._start[p_min] = this._start[p_max] + gap;
                        this.move({
                            tg : this._list.eq(p_min),
                            speed : 0,
                            to : this._start[p_min]
                        });
                    }
                }
            } else {
                if(this.limit_chk()) this._left = this._left / 2;
            }
        },

        move : function (obj) {
            var transition = obj.speed + "ms";
            var transform = "translate3d(" + obj.to + "px,0,0)";
            if(this.opts.supportsCssTransitions && this.opts.transition) {
                obj.tg.css({
                    "left" : "0",
                    "-moz-transition" : transition,
                    "-moz-transform" : transform,
                    "-ms-transition" : transition,
                    "-ms-transform" : transform,
                    "-webkit-transition" : transition,
                    "-webkit-transform" : transform,
                    "transition" : transition,
                    "transform" : transform
                });
            } else {
                obj.tg.css("left", obj.to + "px");
            }
        },

        animate : function (d, btn_click, speed) {
            if(this._drag || !this._scroll || btn_click) {
                var _this = this;
                var speed = (speed > -1) ? speed : this._speed;

                if(btn_click) this.position(d);

                var gap = d * (this._item_w * this._view);
                if(this._left == 0 || (!this.opts.roll && this.limit_chk()) ) gap = 0;

                this._list.each(function (i, el) {
                    var list = $(this);
                    _this._pos[i] = _this._start[i] + gap;

                    if(_this.opts.supportsCssTransitions && _this.opts.transition) {
                        var transition = speed + "ms";
                        var transform = "translate3d(" + _this._pos[i] + "px,0,0)";
                        setTimeout(function () {
                            list.css({
                                "left" : "0",
                                "-moz-transition" : transition,
                                "-moz-transform" : transform,
                                "-ms-transition" : transition,
                                "-ms-transform" : transform,
                                "-webkit-transition" : transition,
                                "-webkit-transform" : transform,
                                "transition" : transition,
                                "transform" : transform
                            });
                        },10);
                    } else {
                        $(this).stop().animate({"left": _this._pos[i] + "px"}, speed);
                    }
                });

                this.counter();
            }
        },

        direction : function () {
            var r = 0;
            if(this._left < -(this._range)) r = -1;
            else if(this._left > this._range) r = 1;

            if(!this._drag || this._scroll) r = 0;

            return r;
        },

        limit_chk : function () {
            var last_p = parseInt((this._len - 1) / this._view) * this._view;
            return ( (this._start[0] == 0 && this._left > 0) || (this._start[last_p] == 0 && this._left < 0) );
        },

        go_page : function (i, e) {
            var crt = ($.inArray(0, this._pos) / this._view) + 1;
            var cal = crt - (i + 1);

            while(cal != 0) {
                if(cal < 0) {
                    this.animate(-1, true);
                    cal++;
                } else if(cal > 0) {
                    this.animate(1, true);
                    cal--;
                }
            }
        },

        get_page : function () {
            return {
                obj : this,
                total : Math.ceil(this._len / this._view),
                current : ($.inArray(0, this._pos) / this._view) + 1
            }
        },

        counter : function () {
            if($.inArray(0, this._pos) < 0) {
                this.init();
            }
            this.opts.page = this.get_page().current;
            if(this.opts.resize) {
                this._tg.css({
                    "height" : this._list.eq(this.opts.page-1).height() + "px"
                });
            }
            /*if(typeof(this.opts.counter) == "function") {
                this.opts.counter(this.get_page());
            }*/
            var target = this._tg.siblings(".paginate").children();
            if(target){
                target.removeClass("selected").eq(this.opts.page-1).addClass("selected");
            }
        },
        interval : function (e) {
            e.animate(-1, true);
        },
        intervalstart : function (e) {
            var _this = this;
            this.timer = setInterval(function() {_this.interval(_this);}, this.opts.delay);
        },
        intervalend : function (e) {
            clearInterval(this.timer);
        }

    };

})(jQuery);