$(document).ready(function(){
    // 개발 스크립트 처리 가이드
    var liWidth = $('#nav ul').width()/4;
    $('#nav li').css('min-width',liWidth);

    var path = location.pathname;
    var currentMenu=path.split("/")[2];
    if(path.indexOf('/ec_mobile/' + currentMenu) > -1) {
        $("#nav li").removeClass("selected");
        $('#nav li.' + currentMenu).addClass('selected');
    }

    // sidebar 슬라이딩
    var offCover = {
        init : function() {
            $(function() {
               $('#wrap').append('<a href="#container" id="btnFoldLayout">메뉴 토글</a>');
                offCover.resize();
                $(window).resize(function(){
                    offCover.resize();
                });
            });
        },
        layout : function(){
            if ($('html').hasClass('expand')) {
                $('#btnFoldLayout').show();
                $('#aside').css({'visibility':'visible'});
                if ($('html').hasClass('right')) {
                    $('#btnFoldLayout').css({'background':'rgba(0,0,0,0.7)'});
                } else {
                    setTimeout(function(){
                        $('#btnFoldLayout').css({'background':'rgba(0,0,0,0.7)'});
                    }, 300);
                }
            } else {
                $('#btnFoldLayout').hide();
                setTimeout(function(){
                     $('#aside').css({'visibility':'hidden'});
                    }, 300);
            }
            $('#aside').css({'visibility':'visible'});
        },
        resize : function(){
            var height = $('body').height();
            $('#container').css({'min-height':height});
        }
    };
    offCover.init();
    $('#header .fold, #aside .btnFold').click(function(e){
        $('#dimmedSlider').toggle();
        $('html').toggleClass('expand');
        offCover.layout();
        e.preventDefault();
    });
    $('#btnFoldLayout').click(function(e){
        $('#header .fold').trigger('click');
        e.preventDefault();
    });

    // 카테고리 검색
    $('#header .btnCategory, #aside .btnFoldCategory').click(function(e){
        $('#dimmedSlider').toggle();
        $('html').toggleClass('expand right');
        offCover.layout();
        e.preventDefault();
    });
    $('#btnFoldLayout').click(function(e){
        $('#header .btnCategory').trigger('click');
        e.preventDefault();
    });

    // 검색단
     $('#header .btnSearch').click(function(e){
        $('#header .searchLayer').addClass('selected');
        e.preventDefault();
    });
     $('#header .searchLayer .btnBasic').click(function(e){
        $(this).parent().removeClass('selected');
        e.preventDefault();
    });
     $('#header .searchForm .btnDelete').click(function(e){
        $(this).parent().children('.keyword').val('');
        e.preventDefault();
    });

    // 토글
    $('.eToggle .eButton').click(function(){
        if($(this).parent().hasClass('disabled')==false){
            $(this).parent('.eToggle').toggleClass('selected');
        }

        // 상세검색 버튼
        if($(this).hasClass("btnDetail")==true) {
            if($(this).parent().hasClass("selected")==false) {
                $('.btnDetail span').html("상세검색");
                $(".mSelect").show();
            } else {
                $('.btnDetail span').html("상세검색 닫기");
                $(".mSelect").hide();
            }
        }
    });

    // 버튼 클릭시
    $('.mButton button, .btnToggle button, #nav li, .btnEditor').click(function(){
        $(this).parent().children().removeClass('selected');
        $(this).addClass('selected');

        // 직접입력 버튼 클릭시
        if($(this).html()=="직접입력") {
            $(".selectDate").show();
        } else {
            $(".selectDate").hide();
        }

        if($(this).hasClass("btnEditor")==true)
        {
            if($(this).hasClass("center")==true) $(this).parent().parent().next().find('.fTextarea').addClass("center");
            else $(this).parent().parent().next().find('.fTextarea').removeClass("center");
        }
    });

    // 카테고리 메뉴 클릭시
    $('.mCategoryList .btnSpread').click(function(){
        $(this).parent().toggleClass('selected').siblings().removeClass('selected');
        $(this).parent().siblings().find('li').removeClass('selected');
    });
    $('.mCategoryList a').click(function(){
        if($(this).hasClass('child') == false) {
            $(this).parent().addClass('selected').siblings().removeClass('selected');
            $(this).parent().siblings().find('li').removeClass('selected');
        }
    });

    $("body").delegate(".mTab a", "click", function(e){
        // 클릭한 li 에 selected 클래스 추가, 기존 li에 있는 selected 클래스는 삭제.
        var _li = $(this).parent("li").addClass("selected").siblings().removeClass("selected"),
        _target = $(this).attr("href"),
        _siblings = "." + $(_target).attr("class");

        //클릭한 탭에 해당하는 요소는 활성화, 기존 요소는 비활성화 함.
        $(_target).show().siblings(_siblings).hide();

        //preventDefault 는 a 태그 처럼 클릭 이벤트 외에 별도의 브라우저 행동을 막기 위해 사용됨.
        e.preventDefault();
    });

    // 직접입력 선택시 레이어 활성
    $('.selectDate').click(function(){
        $(this).parents().find('.dimmedArea').css("display","block");
    });

    // 셀렉트 리스트 선택시
    $('.select .list li').click(function(){
        $(this).parents('.select').removeClass('selected');
    });

    // 헤더 고정 영역 스크롤
    $(document).scroll(function(){
        if($("body#main").length > 0){ //메인 레이아웃
            if($(this).scrollTop() > 48 ) {
                $("#nav").addClass("headerFixed");
            } else {
                $("#nav").removeClass("headerFixed");
            }
        } else { // 서브 레이아웃
            if($(this).scrollTop() > 0 ) {
                $("#header .mTitle").addClass("headerFixed");
            } else {
                $("#header .mTitle").removeClass("headerFixed");
            }
        }
    });

    //로그인 키보드 미리보기
    $('.mKeyboard button').click(function(){
        if($(this).hasClass('selected')==true){
            $('.mKeyboard button').removeClass('selected');
            $('.preview img').hide();
        } else{
            $('.mKeyboard button').removeClass('selected');
            $('.preview img').hide();
            $(this).addClass('selected');
            if($(this).hasClass('korean')==true){
                $('.preview').children('.korean').show();
            } else if($(this).hasClass('special')==true) {
                $('.preview').children('.special').show();
            }
        }
    });

    $('#guide .guideArea .btnHide').click(function(){
        $(this).parent().toggleClass('hide');
        if($(this).html() == "Hide") $(this).html("Show");
        else $(this).html("Hide");
    });

    // mLayer : eLayerClick
    $('body').delegate('.eLayerClick', 'click', function(e){
        var findThis = $(this),
            propBtnWidth = findThis.outerWidth(),
            findTarget = $($(this).attr('href')),
            propTargetWidth = findTarget.outerWidth(),
            propTargetHeight = findTarget.outerHeight(),
            propDocWidth = $(document).width(),
            propDocHeight = $(document).height(),
            propTop = findThis.offset().top,
            propLeft = findThis.offset().left,
            figure = propLeft + propTargetWidth,
            propMarginLeft = 0;

        findTarget.show();
        if(findTarget.hasClass('mPopup') == true || findTarget.hasClass('typeFull') == true) {
            $('body').addClass('eMobilePopup'); // mPopup 이나 mLayer.typeFull 노출에 따라 부모창 스크롤 제어
        }
        if($($(this).attr('href')).attr("style") != "display: none;") {
            $($(this).attr('href')).children(".mLayer").show();
        }
        e.preventDefault();
    });
    // mPopup 이나 mLayer.typeFull 노출에 따라 부모창 스크롤 제어
    if($('.mPopup, .typeFull').css('display') == 'block') {
        $('body').addClass('eMobilePopup');
    }
    // mPopup 이나 mLayer.typeFull 닫힘에 따라 부모창 스크롤 제어
    $(".mPopup .mButton a, .btnPopupClose, .mLayer.typeFull .mButton a, .mLayer.typeFull .btnLayerClose").click(function(){
        if($(this).parents(".mPopup").attr("style") == "display: none;" || $(this).parents(".mLayer.typeFull").attr("style") == "display: none;") {
            $('body').removeClass('eMobilePopup');
        }
    });

    // 진열편집 버튼 클릭시 하단 고정 버튼 액션 레이어 노출 제어
    $(".mCtrl .btnNormal").click(function(){
        if($(this).html() == '진열편집') {
            $('.mButton.typeFooter').show();
        }
    });
    $(".mButton.typeFooter .btnCancel").click(function(){
        $(this).parents('.mButton.typeFooter').hide();
    });

    // 상품목록 갤러리형
    $(".mSummary.typeGallery .frame").click(function(){
        $(this).parent().addClass('selected');
    });
    $(".mSummary.typeGallery .info").click(function(){
        $(this).parent().removeClass('selected');
    });

    // 즐겨찾는 메인분류
    $("button.icoBookmark").click(function(){
        $(this).toggleClass('selected');
        if($(this).hasClass('selected') == true) {
            $('.mBookmark').addClass('selected');
        } else {
            $('.mBookmark').removeClass('selected');
        }
    });
});