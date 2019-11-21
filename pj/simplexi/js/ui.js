$(document).ready(function(){

    // 토글
    $('.language > button, .familysite > button').click(function(){
        $(this).parent().toggleClass('selected');
    });

    $('#sidebar li > button').click(function(){
        if($(this).parent('li').attr('class')!="selected"){
            $('#sidebar li').filter('.selected').children('ul').slideUp('fast');
            $('#sidebar li').removeClass('selected');
            $(this).next().slideDown('fast');
            $(this).parent().addClass('selected');
        } else {
            $(this).next().slideUp('fast');
            $('#sidebar li').removeClass('selected');
        }
    });

    $('.faq h3').click(function(){
        $(this).toggleClass('selected');
    });
    $('.mBrdList td .btnToggle').click(function(){
        $(this).parents("tr").next(".fieldDetail").toggle();
    });
    $('.mBrdList dt .btnToggle').click(function(){
        $(this).parent().next().next(".fieldDetail").toggle();
    });

    // 고객파트너
    $.fn.kStyleFunc = function(option){
        var opt = {
            btn : 'h4 a',
            wrap : '.item',
            partners : '.partners'
        };
        opt = $.extend(opt, option);
        $(this).each(function(){
            var $btn = $(this).find(opt.btn);
            $btn.on('hover', function(){
                $(this).parents(opt.wrap).toggleClass('selected')
                .siblings().removeClass('selected');
            });
        });
    };
    $('.kStyle').kStyleFunc();
 
    // 헤더 네비게이션
    function headerOpen(){
        if ($(document).width()>=1024) { // PC
            //  마우스오버 액션
            $("header #navigation > ul > li").mouseenter(function() {
                $(this).parents('header').addClass('open');
                $('#btnNavLayout').show();
            }).mouseleave(function() {
                $(this).parents('header').removeClass('open');
                $('#btnNavLayout').hide();
            });
            // 마우스오버 안되는 태블릿에서의 처리
            $('#btnNavLayout').click(function(e){
                $('header').removeClass('open');
                $('#btnNavLayout').hide();
                e.preventDefault();
            });
        } else { // 태블릿이하 처리
            $('header').removeClass('open');
        }
    }
    headerOpen();

    // sidebar 슬라이딩
    var offCover = {
        layout : function(){
            if ($('html').hasClass('expand')) {
                $('#sidebar').css({'visibility':'visible'}).animate({left:'0'});
                $('#btnFoldLayout').show();
            } else {
                $('#sidebar').animate({left:'-100%'});
                $('#btnFoldLayout').hide();
            }
        }
    };
    $('#header .fold').click(function(e){
        $('html').toggleClass('expand');
        offCover.layout();
        e.preventDefault();
    });
    $('#btnFoldLayout').click(function(e){
        $('#header .fold').trigger('click');
        e.preventDefault();
    });

    // 메인 비주얼
    function visualHeight(){
        var height = $('#container.main .visual img').height();
        $('#container.main .visual').css({'height':height}); // 비주얼 높이값

        var btnHeight = $('#container.main .visual .btnArea button').height();
        var btnTop = (height/2) - (btnHeight/2) +300;
        if ($(document).width()<768) { btnTop +=20; }
        $('#container.main .visual .btnArea button').css({'top':btnTop}); // 비주얼 버튼 위치
    }

    // 메인 모바일용 이미지로 변경
    function mainImgChange(target){
        var width = $(document).width();
        var mode = "";

        if (width<768) { mode = "mobile"; }
        else{ mode = "pc"; }

        var path = $(target).attr('src');
        if(path != undefined){
            var len = $(target).length;
            for(var i = 0; i<len; i++){
                var liPath = $(target).eq(i).attr('src');
                var liArr = liPath.split("img_visual");
                var lidiv = liArr[1].split(".jpg");
                var lidiv2 = lidiv[0].split("_m");
                var tag = $(target).get(i);
                var str = liArr[0]+"img_visual"+lidiv2[0];

                if(mode == "mobile") {
                    $(tag).attr("src", str+"_m.jpg")
                    console.log("str=1="+str+"_m.jpg");
                }else {
                    $(tag).attr("src", str+".jpg");
                    console.log("str=2="+str+".jpg");
                }
            }
        }
    }

    function mediaQuery(){
        var noticeMode = "pc";
        var width = $(document).width();
        var serviceHeight = ($("#container.main #contents > section .service .braces > img").outerHeight(true)) + 100;
        var peopleHeight = ($("#container.main #contents > section .people .braces > img").outerHeight(true)) + 106;

        // 메인 컨텐츠
        var sectionClass = $("#container.main #contents > section").attr("class");
        if(sectionClass == undefined || sectionClass == "" ){
            $("#container.main #contents > section > div").css({"border-top":"1px solid #d6d6d6", "clear":"none"});
            var colCount = $(".mBrdList.field table col").length;

            if (width<768) { // 모바일
                noticeMode = "mobile";
                addn = 0; //notice 모바일 초기값 설정
                initcul(0, noticeMode); //notice 모바일 위치값 초기화
                $("#container.main #contents > section").css("background","#fff");
                $("#container.main #contents > section > div").css("width","100%");
                $("#container.main #contents > section > div:nth-child(1)").css("border-top","0");
                peopleHeight += 16;
            } else if (width>=768 && width < 1024) { // 태블릿
                $("#container.main #contents > section").css({'background-image':'url("../img/main/bg_section_grid2.gif")', 'background-repeat':'repeat-y', 'background-position':'50% 0'});
                $("#container.main #contents > section > div").css("width","50%");
                $("#container.main #contents > section .notice").css("width","100%");
                $("#container.main #contents > section > div:nth-child(2n+1)").css("clear","both");
                $("#container.main #contents > section > div:nth-child(1), #container.main #contents > section > div:nth-child(2)").css("border-top","0");
                if($('.mBrdList.field .fieldDetail .content a').is('.btnApply')){
                    $(".mBrdList.field .fieldDetail td").attr("colspan",colCount-1); // 채용분야(fieldDetail 상세내용)
                }
            } else if (width>=1024) { // PC
                $("#container.main #contents > section").css({'background-image':'url("../img/main/bg_section_grid3_pc.gif")', 'background-repeat':'repeat-y', 'background-position':'0 0'});
                if (width>=1340) {
                    $("#container.main #contents > section").css({'background-image':'url("../img/main/bg_section_grid3_full.gif")', 'background-repeat':'repeat-y', 'background-position':'0 0'});
                }
                $("#container.main #contents > section > div").css("width","33%");
                $("#container.main #contents > section > div:nth-child(3n+2)").css("width","34%");
                $("#container.main #contents > section > div:nth-child(4)").css("clear","both");
                $("#container.main #contents > section .notice").css("width","67%");
                $("#container.main #contents > section > div:nth-child(1), #container.main #contents > section > div:nth-child(2), #container.main #contents > section > div:nth-child(3)").css("border-top","0");
                if($('.mBrdList.field .fieldDetail .content a').is('.btnApply')) {
                    $(".mBrdList.field .fieldDetail td").attr("colspan", colCount); // 채용분야(fieldDetail 상세내용)
                }
                serviceHeight += 9;
                peopleHeight += 35;
            }

            $("#container.main #contents > section .service .view").css("height",serviceHeight);
            $("#container.main #contents > section .people .view").css("height",peopleHeight);

            // notice 높이값
            var noticeheight = $("#container.main #contents > section .notice .braces a").outerHeight(true);
            if(noticeMode == "mobile") { noticeheight = noticeheight*2; }
            $("#container.main #contents > section .notice .noview").css("height",(noticeheight));
        }

    }

    // 디바이스 사이즈에 따라 이미지명 변경
    function imgReplace(target){
        var width = $(document).width();
        var imgSrc = $(target).attr("src");
        var divide;
        var imgBefore;

        if(imgSrc != undefined) {
            var deviceChk = imgSrc.substring(imgSrc.length-5,imgSrc.length-6); // 디바이스 체크
            var extension = imgSrc.substring(imgSrc.length,imgSrc.length-4); // 확장자명 체크

            if(deviceChk == "_"){
                divide = imgSrc.substring(imgSrc.length-6,0);
            }  else { // pc 이미지명 기준
                divide = imgSrc.substring(imgSrc.length-4,0);
            }

            if (width<768) { // 모바일
                imgBefore = divide+"_m";
            } else if (width>=768 && width < 1024) { // 태블릿
                imgBefore = divide+"_t";
            } else if (width>=1024 && width < 1340) { // PC
                imgBefore = divide;
            } else if (width>=1340) { // Full
                imgBefore = divide+"_f";
            }

            imageExists(imgBefore+extension, function(exists) {
                if(exists){ // 파일이 있으면 해당 이미지로 적용
                    $(target).attr("src",imgBefore+extension);
                } else { // 파일이 없으면 최초 pc 이미지로 적용
                    $(target).attr("src", divide+extension);
                    console.clear();
                }
            });
        }
    }

    //재무정보 select
    var select = $(".mBrdList.finance select");
    select.change(function(){
        //var select_name = $(this).children("option:selected").text();
        var select_index = $(this).children("option:selected").index()+2;
        $(".mBrdList.finance col:nth-child(1)~col, .mBrdList.finance th:nth-child(1)~th, .mBrdList.finance td:nth-child(1)~td").removeClass('selected');
        $(".mBrdList.finance col:nth-child("+select_index+"), .mBrdList.finance th:nth-child("+select_index+"), .mBrdList.finance td:nth-child("+select_index+")").addClass('selected');
        // if (select_index==0) {
        //     $(".mBrdList.finance col:nth-child(2), .mBrdList.finance th:nth-child(2), .mBrdList.finance td:nth-child(2)").addClass('selected');
        // } else if (select_index==1) {
        //     $(".mBrdList.finance col:nth-child(3), .mBrdList.finance th:nth-child(3), .mBrdList.finance td:nth-child(3)").addClass('selected');
        // } else if (select_index==2) {
        //     $(".mBrdList.finance col:nth-child(4), .mBrdList.finance th:nth-child(4), .mBrdList.finance td:nth-child(4)").addClass('selected');
        // } else if (select_index==3) {
        //     $(".mBrdList.finance col:nth-child(5), .mBrdList.finance th:nth-child(5), .mBrdList.finance td:nth-child(5)").addClass('selected');
        // } else if (select_index==4) {
        //     $(".mBrdList.finance col:nth-child(6), .mBrdList.finance th:nth-child(6), .mBrdList.finance td:nth-child(6)").addClass('selected');
        // }
    });

    //mTab
    $('.mTab').each(function(){
        var selected = $(this).find('> ul > li.selected > a');
        if(selected.siblings('ul').length <= 0){
            $(this).removeClass('gExtend');
        }
    });
    $('body').delegate('.eTab a', 'click', function(e){
        var _li = $(this).parent('li').addClass('selected').siblings().removeClass('selected'),
            _target = $(this).attr('href'),
            _siblings = '.' + $(_target).attr('class');
        $(_target).show().siblings(_siblings).hide();
        // gExtend ctrl
        var mtab = $(this).parents('.mTab:first');
        if($(this).siblings('ul').length > 0){
            if(!mtab.hasClass('gExtend')){
                mtab.addClass('gExtend');
            }
        } else {
            if($(this).parents('ul:first').siblings('a').length <= 0){
                mtab.removeClass('gExtend');
            }
        }
        e.preventDefault();
    });

    function imageExists(url, callback) {
        var img = new Image();
        img.onload = function() { callback(true); };
        img.onerror = function() { callback(false); };
        img.src = url;
    }

     $(window).resize(function(){ // 브라우저 리사이징
        if(jQuery.browser.msie && jQuery.browser.version <= 8.0){
             //ie8이하는 반응형 적용 제외
        } else {
                mainImgChange('#container.main .visual .slide .view img'); // 메인
                imgReplace(".serviceArea .mTitle .visual img"); // 서비스
                imgReplace(".process .step img"); // 채용절차
                imgReplace(".financeGraph li.graph1 img"); // 재무정보
                imgReplace(".financeGraph li.graph2 img"); // 재무정보
                imgReplace(".financeGraph li.graph3 img"); // 재무정보
                imgReplace(".location .map img"); // 오시는길
                mediaQuery();
                headerOpen();
                if(multis != null){multiEllipsis();}

                var width = $(document).width();
                if(width < 768){
                    peopleHeight();
                }
        }
        visualHeight();
    }).resize();

    $('.slide .view img').load(function(){
        visualHeight();
        mediaQuery();
    });

    // 메인 비주얼 - 슬라이드
    $(".touchslider-main").touchSlider({
        flexible : true,
        autoplay : true,
        delay : 5000,
        btn_prev : $(".touchslider-main").next().find(".btnPrev"),
        btn_next : $(".touchslider-main").next().find(".btnNext"),
    });

    // service - 슬라이드
    $(".touchslider-service").touchSlider({
        flexible : true,
        autoplay : true,
        delay : 3000,
        btn_prev : $(".touchslider-service").next().find(".prev"),
        btn_next : $(".touchslider-service").next().find(".next"),
        counter : function (e) {
            $(".service .paginate strong").html(e.current);
            $(".service .paginate .txtNormal").html(e.total);
        }
    });

    // people - 슬라이드
    $(".touchslider-people").touchSlider({
        flexible : true,
        autoplay : true,
        delay : 3500,
        btn_prev : $(".touchslider-people").next().find(".prev"),
        btn_next : $(".touchslider-people").next().find(".next"),
    });

    // notice 슬라이딩
    var addn = 0;
    var arr = [];
    var interval = null;
    var intvalmode = true;
    var len = $('.notice .slide .braces').length;

    noticeSlide();

    function noticeSlide(){
        for(var i=0; i<len; i++){
            this["target"+i] = $('.notice .slide .braces').get(i);
            arr.push(this["target"+i]);
        }
        $('.notice .slide .paginate .prev').click(function() {
            if(len > 1){
                noticeClick("prev");
            }
        });
        $('.notice .slide .paginate .next').click(function() {
            if(len > 1){
                noticeClick("next");
            }
        });
        intervalStart();
    }
    function intervalStart(){ //일정 시간에 롤링해주는 부분.
        interval = setInterval(function() {timeSlide();}, 2000);
    }
    function timeSlide(){
        var width = $(document).width();
        if (width>768 && len > 1) { // 모바일 아닐때
            noticeClick("next");
        }
    }
    function noticeClick(str){
        if(interval){
            clearInterval(interval);
            intervalStart();
        }

        if(str == "prev"){
            if(addn <= 0){
                addn = len;
            }
            addn--;

            initcul(0, "click");
            $('.notice .slide .braces').animate({"top":"+=30px"},
                { duration: 150, specialEasing: { width: "linear", height: "easeOutBounce" }}
            );
        }else{
            if(addn >= (len-1)){
                addn = -1;
            }
            addn++;

            $('.notice .slide .braces').animate({"top":"-=30px"},
                { duration: 150,
                specialEasing: { width: "linear", height: "easeOutBounce" },
                complete : function() {
                    initcul(30, "click");
                }
                }
            );
        }
    }
    function initcul(num, str){
        var pn = 0;
        for(var i=0; i<len; i++){
            if(str == "click"){
                var cul = (addn*-30)-30;
                if(addn <= i){
                    pn = cul;
                }else{
                    pn = (len*30)-((addn*30)+30);
                }
            }
            $(arr[i]).css("top",(pn+num));
        }
    }

    // multiline ellipsis - dh
    var multis = $('.multiEllipsis');
    var sLanguage = $('html').attr('lang');
    function multiEllipsis(){
        var x = function(a, i , j) {
          var space = j ? '' : ' ';
          return a.slice(0, i).join(space);
        };
        /**
         * requires element to be width/height limited
         * element must be in the DOM and can't be with display none, put it with visibility hidden instead
         * element shall have no sub elements either O:)
         */
        var ellipsisFill = function(e) {
          var d = ' ···',
              h = e.offsetHeight,
              w = e.innerHTML.split(' '),
              i = 0,
              l = w.length,
              j = false;
          if(sLanguage == 'cn' || sLanguage == 'jp') { w = e.innerHTML.split(''); l = w.length; j = true; }
          e.innerHTML = '';
          while (h >= e.scrollHeight && i <= l) {
            e.innerHTML = x(w, ++i , j) + d;
          }
          if (i > l) { e.innerHTML = x(w, i , j); }
          else { 
                 e.innerHTML = x(w, --i , j) + d;
          }
        };
        for(var i = 0; i < multis.length; i++){
            var multi = multis[i];
            ellipsisFill(multi);
        }
    }
    if(multis != null){multiEllipsis();}

    //people height - dh
    function peopleHeight(){
        var recruit = $(".main .peopleArea > .recruit");
        var recruitH = $(".main .peopleArea > .recruit").outerHeight();
        var peopleH = recruitH - 55;

        $(".peopleArea > .people .view").css( "height", peopleH );
    }
    $(window).load(function(){
        var width = $(document).width();
        if(width < 768){
            peopleHeight();
        }
    });

});