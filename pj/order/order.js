// 썸네일 이미지 엑박일경우 기본값 설정
$(window).load(function() {
    $(".thumbnail img, img.thumbImage, img.bigImage").each(function($i,$item){
        var $img = new Image();
        $img.onerror = function () {
            $item.src="//img.echosting.cafe24.com/thumb/img_product_big.gif";
        }
        $img.src = this.src;
    });
});

$(document).ready(function(){
    // 토글
    $('div.eToggle .title').click(function(){
        var toggle = $(this).parent('.eToggle');
        if(toggle.hasClass('disable') == false){
            $(this).parent('.eToggle').toggleClass('selected')
        }
    });

    $('dl.eToggle dt').click(function(){
        $(this).toggleClass('selected');
        $(this).next('dd').toggleClass('selected');
    });

    //장바구니 페이지 수량폼 Type 변경
    $('[id^="quantity"]').each(function() {
        $(this).get(0).type = 'tel';
    });

    // 모바일에서 공급사 테이블 th 강제조절
    $('.xans-mall-supplyinfo, .supplyInfo').find('table > colgroup').find('col').eq(0).width(98);
    $('.xans-mall-supplyinfo, .supplyInfo').find('th, td').css({padding:'13px 10px 12px'});

    /**
     *  메인카테고리 toggle
     */
    $('.xans-product-listmain h2').toggle(function(){
        $(this).css('background-image', 'url("//img.echosting.cafe24.com/skin/mobile_ko_KR/layout/bg_title_open.gif")');
        $(this).siblings().hide();
        $(this).parent().find('div.paginate').hide();
        $(this).parent().next('div.xans-product-listmore').hide();
    }, function() {
        $(this).css('background-image', 'url("//img.echosting.cafe24.com/skin/mobile_ko_KR/layout/bg_title_close.gif")');
        $(this).siblings().show();
        $(this).parent().find('div.paginate').show();
        $(this).parent().next('div.xans-product-listmore').show();
    });

    /**
     *  상단탑버튼
     */
    var globalTopBtnScrollFunc = function() {
        // 탑버튼 관련변수
        var $btnTop = $('#btnTop');

        $(window).scroll(function() {
            try {
                var iCurScrollPos = $(this).scrollTop();

                if (iCurScrollPos > ($(this).height() / 2)) {
                    $btnTop.fadeIn('fast');
                } else {
                    $btnTop.fadeOut('fast');
                }
            } catch(e) { }
        });
    };

    /**
     *  구매버튼
     */
    var globalBuyBtnScrollFunc = function() {
        // 구매버튼 관련변수
        var sFixId = $('#orderFixItem').size() > 0  ? 'orderFixItem' : 'fixedActionButton',
            $area = $('#orderFixArea'),
            $item = $('#' + sFixId + '').not($area);

        $(window).scroll(function(){
            try {
                 // 구매버튼 관련변수
                var iCurrentHeightPos = $(this).scrollTop() + $(this).height(),
                    iButtonHeightPos = $item.offset().top;

                if (iCurrentHeightPos > iButtonHeightPos || iButtonHeightPos < $(this).scrollTop() + $item.height()) {
                    if (iButtonHeightPos < $(this).scrollTop() - $item.height()) {
                        $area.fadeIn('fast');
                    } else {
                        $area.hide();
                    }
                } else {
                    $area.fadeIn('fast');
                }
            } catch(e) { }
        });
    };

    globalTopBtnScrollFunc();
    globalBuyBtnScrollFunc();
});

// 공통레이어팝업 오픈
var globalLayerOpenFunc = function(_this) {
    this.id = $(_this).data('id');
    this.param = $(_this).data('param');
    this.basketType = $('#basket_type').val();
    this.url = $(_this).data('url');
    this.layerId = 'ec_temp_mobile_layer';
    this.layerIframeId = 'ec_temp_mobile_iframe_layer';

    var _this = this;

    function paramSetUrl() {
        if (this.param) {
            // if isset param
        } else {
            this.url = this.basketType ?  this.url + '?basket_type=' + this.basketType : this.url;
        }
    };

    if (this.url) {
        window.ecScrollTop = $(window).scrollTop();
        $.ajax({
            url : this.url,
            success : function (data) {
                if (data.indexOf('404 페이지 없음') == -1) {
                    // 있다면 삭제
                    try { $(_this).remove(); } catch ( e ) { }

                    var $layer = $('<div>', {
                        html: $("<iframe>", { src: _this.url, id: _this.layerIframeId, scrolling: 'auto', css: { width: '100%', height: '100%', overflowY: 'auto', border: 0 } } ),
                        id: _this.layerId,
                        css : { position: 'absolute', top: 0, left:0, width: '100%', height: $(window).height(), 'z-index': 9999 }
                    });

                    $('body').append($layer);
                    $('html, body').css({'overflowY': 'hidden', height: '100%', width: '100%'});
                    $('#' + this.layerId).show();
                }
            }
        });
    }
};

// 공통레이어팝업 닫기
var globalLayerCloseFunc = function() {
    this.layerId = 'ec_temp_mobile_layer';

    if (window.parent === window)
        self.clse();
    else {
        parent.$('html, body').css({'overflowY': 'auto', height: 'auto', width: '100%'});
        parent.$('html, body').scrollTop(parent.window.ecScrollTop);
        parent.$('#' + this.layerId).remove();
    }
};

/**
 * document.location.href split
 * return array Param
 */
var getQueryString = function(sKey)
{
    var sQueryString = document.location.search.substring(1);
    var aParam = {};

    if (sQueryString) {
        var aFields = sQueryString.split("&");
        var aField  = [];
        for (var i=0; i<aFields.length; i++) {
            aField = aFields[i].split('=');
            aParam[aField[0]] = aField[1];
        }
    }

    aParam.page = aParam.page ? aParam.page : 1;
    return sKey ? aParam[sKey] : aParam;
};

// PC버전 바로 가기
var isPCver = function() {
    var sUrl = window.location.hostname;
    var aTemp = sUrl.split(".");

    var pattern = /^(mobile[\-]{2}shop[0-9]+)$/;

    if (aTemp[0] == 'm' || aTemp[0] == 'skin-mobile' || aTemp[0] == 'mobile') {
        sUrl = sUrl.replace(aTemp[0]+'.', '');
    } else if (pattern.test(aTemp[0]) === true) {
        var aExplode = aTemp[0].split('--');
        aTemp[0] = aExplode[1];
        sUrl = aTemp.join('.');
    }
    window.location.href = '//'+sUrl+'/?is_pcver=T';
};

/* 도움말 */
$('body').delegate('.ec-base-tooltip-area .eTip', 'click', function(e){
    var findArea = $($(this).parents('.ec-base-tooltip-area'));
    var findTarget = $($(this).siblings('.ec-base-tooltip'));
    var findTooltip = $('.ec-base-tooltip');
    if(findArea.hasClass('show')){
        findArea.removeClass('show');
        findTarget.hide();
    }else{
        $('.ec-base-tooltip-area').removeClass('show');
        findTooltip.hide();
        findArea.addClass('show');
        findTarget.show();
    }
    e.preventDefault();
});
$('body').delegate('.ec-base-tooltip-area .eClose', 'click', function(e){
    var findTarget = $(this).parents('.ec-base-tooltip:first');
    $('.ec-base-tooltip-area').removeClass('show');
    findTarget.hide();
    e.preventDefault();
});


$(document).ready(function(){
/******** 참고: 쉬운 주문서 프로토타입용 ********/
    $("#mCafe24Order").delegate(".ec-base-tab a", "click", function(e){
        // 클릭한 li 에 selected 클래스 추가, 기존 li에 있는 selected 클래스는 삭제.
        var _li = $(this).parent("li").addClass("selected").siblings().removeClass("selected"),
        _target = $(this).attr("href"),
        _siblings = $(_target).attr("class"),
        _arr = _siblings.split(" "),
        _classSiblings = "."+_arr[0];
        $(_target).show().siblings(_classSiblings).hide();
        e.preventDefault();
    });

    $("#mCafe24Order").delegate(".ec-order-expand", "click", function(e){
        $(this).parents('.ec-order-expandwrap').toggleClass("selected");
        e.preventDefault();
    });

    var $selectMenuItem =null;
    $("#mCafe24Order .payMethod li").click(function(){
        if($(this).siblings().hasClass('selected'))
        {
            $(this).siblings().removeClass("selected");
        }
        if($selectMenuItem!=null){
            $selectMenuItem.removeClass("selected");
        }
        $selectMenuItem = $(this);
        $selectMenuItem.addClass("selected");
    });

    //레이어 위치 값을 구해서 해당 위치에 팝업.
    function dimmedLayerPosition(target){
        if(!target.attr("fixed")){
            var findLayer = target,
                propWinWidth = $(window).width(),
                propWinHeight = $(window).height(),
                propWidth = findLayer.outerWidth(),
                propHeight = findLayer.outerHeight(),
                propWinScroll = $(window).scrollTop();
            if(propWinWidth < propWidth){
                findLayer.css({"left":0, "marginLeft":0});
            } else {
                var propLeft = propWidth/2;
                findLayer.css({"left":"50%", "marginLeft":"-"+ propLeft +"px"});
            }
            var propTop = (propWinHeight/2) - (propHeight/2) + propWinScroll;
            findLayer.css({"top":propTop});
            findLayer.show();
        }
    }
    $("body").delegate(".eModal", "click", function(e){
        var findTarget = $($(this).attr("href"));
        //call dimmed layer position function
        dimmedLayerPosition(findTarget);
        //흰색 투명 배경 생성.
        findTarget.parent().append("<div id='dimmed_"+ findTarget.attr('id') +"' class='dimmed'></div>");
        //흰색 투명 배경이 2개 이상일경우 zindex를 높여서 처리해줌.
        if($(".dimmed").length > 1 ){
            $(".dimmed").addClass("hide");
            var propZIndex = 110 + $(".dimmed").length;
            $(findTarget).css({"zIndex":propZIndex+5});
            $("#dimmed_"+ findTarget.attr("id")).css({ "zIndex" : propZIndex }).removeClass("hide");
        }
        e.preventDefault();
    });

/********************** //참고 **********************/



    // 쇼핑몰 이용약관 동의
    $('#mallAgree').click(function() {
        if ($(this).attr('checked') === true) {
            $('#mall_agreement_radio0').attr('checked', true);
        } else {
            $('#mall_agreement_radio1').attr('checked', true);
        }
    });

    // 비회원 구매 개인정보 취급방침에 동의
    $('#personAgree').click(function() {
        if ($(this).attr('checked') === true) {
            $('#nm_agreement0').attr('checked', true);
        } else {
            $('#nm_agreement1').attr('checked', true);
        }
    });

    // 청약 철회 방침에 동의
    $('#subscription').click(function() {
        if ($(this).attr('checked') === true) {
            $('#subscription_agreement0').attr('checked', true);
        } else {
            $('#subscription_agreement1').attr('checked', true);
        }
    });

    var fixLayerPriceRest = function() {
        $('#checked_order_count, #checked_order_price').html('').css('padding-bottom','0');
    };

    // 고정영역 빈값세팅
    fixLayerPriceRest();

    // 고정영역에 상품정보 세팅
    var fixedLayerPriceSet = function() {
        var iSumPrice = 0;
        var iCheckPrdCnt = 0;
        $('[id^="chk_order_cancel_list"]').each(function(){
            if ($(this).attr('checked') == true) {
                var sCheckId = $(this).attr('id');
                var aTemp = sCheckId.split('_');
                var iCheckId = aTemp[3].replace(/[^0-9]/g, '');
                var iProductPrice = aBasketProductOrderData[iCheckId].product_sum_price;
                iSumPrice = iSumPrice + iProductPrice;
                iCheckPrdCnt = iCheckPrdCnt + 1;
             }
        });
        if (iCheckPrdCnt > 0) {
            var sTotalPrice = SHOP_PRICE_FORMAT.toShopPrice(iSumPrice);
            $('#checked_order_count').html('<strong>' + sprintf(__('%s'),iCheckPrdCnt) + '</strong>' +'개 상품선택').css('padding-bottom','5px');
            $('#checked_order_price').html('결제예정금액 <strong><em>'+sTotalPrice+'</em></strong>').css('padding-bottom','5px');
        } else {
            fixLayerPriceRest();
        }

        var sPriceRef = SHOP_PRICE_FORMAT.shopPriceToSubPrice(iSumPrice);
        if (sPriceRef != '') $('#checked_order_price').find('strong').append(sPriceRef);
    };

    // 장바구니 체크박스 체크시 상품총합계, 체크한 숫자 구하기
    $('[id^="chk_order_cancel_list"]').click(function(e) {
        fixedLayerPriceSet();
    });

    // fix주문하기 버튼 클릭
    $('#btn_payment_fix').unbind().bind('click', function() {
        $('#btn_payment').trigger('click');
    });

    // 상품리스트 전체선택
    $('#product_select_all').bind('click', function() {
        var _status = $(this).data('status');

        $('[id^="chk_order_cancel_list"]').each(function(){
            var bChecked = $(this).is(":checked");

            if (_status == 'off') {
                if (bChecked === false) $(this).attr('checked', true);
            } else {
                $(this).attr('checked', false);
            }
        });

        $(this).data('status', _status == 'off' ? 'on' : 'off');
        fixedLayerPriceSet();
    });

    // 적립금, 마일리지 전체사용
    $('#all_use_mileage, #all_use_deposit').unbind().bind('click', function() {
        var id = $(this).attr('id');
        var total_mileage = parseInt($('#ori_total_avail_mileage').val());
        var total_deposit = parseInt($('#ori_total_deposit').val());
        if (id == 'all_use_mileage') {
            $('#input_mile').attr('value', total_mileage);
            $('#input_mile').trigger('blur');
        } else {
            $('#input_deposit').attr('value', total_deposit);
            $('#input_deposit').trigger('blur');
        }
    });
});

//쇼핑몰 이용약관 동의
function viewMallAgree() {
    window.open('/order/agreement/mallagree.html?basket_type='+$('#basket_type').val()+'&delvtype='+getQueryString('delvtype'));
}
//비회원 구매시 개인정보수집이용동의
function viewPersonAgree() {
    window.open('/order/agreement/personagree.html?basket_type='+$('#basket_type').val()+'&delvtype='+getQueryString('delvtype'));
}
//청약철회방침 보기
function viewSubscription() {
    window.open('/order/agreement/subscription.html?basket_type='+$('#basket_type').val());
}
//전자보증보험 보기
function viewInsurance() {
    window.open('/order/agreement/insurance.html?basket_type='+$('#basket_type').val()+'&delvtype='+getQueryString('delvtype'));
}
//Daum 비회원 구매 동의 보기
function viewDaum() {
    window.open('/order/agreement/daum.html?basket_type='+$('#basket_type').val());
}
//배송정보 제공방침 동의
function viewDelivery() {
    window.open('/order/agreement/delivery.html?basket_type='+$('#basket_type').val()+'&delvtype='+getQueryString('delvtype'));
}
//고유식별정보수집 동의
function viewIdentification() {
    window.open('/order/agreement/identification.html?basket_type='+$('#basket_type').val()+'&delvtype='+getQueryString('delvtype'));
}
//개인정보수집 이용동의
function viewMemberJoinAgree() {
    window.open('/order/agreement/privacy_agreement.html?basket_type='+$('#basket_type').val()+'&delvtype='+getQueryString('delvtype'));
}
//개인정보 제3자 제공 동의
function viewInformationAgree() {
    window.open('/order/agreement/information_agreement.html?basket_type='+$('#basket_type').val()+'&delvtype='+getQueryString('delvtype'));
}
//개인정보취급 위탁 동의
function viewConsignmentAgree() {
    window.open('/order/agreement/consignment_agreement.html?basket_type='+$('#basket_type').val()+'&delvtype='+getQueryString('delvtype'));
}
//장바구니 선택상품 삭제
function selBasketDel(id) {
    $('[id^="'+BASKET_CHK_ID_PREFIX+'"]').attr('checked', false);
    $('[id="'+id+'"]').attr('checked', true);
    Basket.deleteBasket();
}

// 도움말 툴팁
$('body').delegate('.mTooltip .eTip', 'click', function(e){
        var findSection = $(this).parents('.section:first');
        var findTarget = $($(this).siblings('.tooltip'));
        var findTooltip = $('.tooltip');
        $('.mTooltip').removeClass('show');
        $(this).parents('.mTooltip:first').addClass('show');
        $('.section').css({'zIndex':0, 'position':'static'});
        findSection.css({'zIndex':100, 'position':'relative'});

        findTooltip.hide();
        findTarget.show();
        e.preventDefault();
    });
    $('body').delegate('.mTooltip .eClose', 'click', function(e){
        var findSection = $(this).parents('.section:first');
        var findTarget = $(this).parents('.tooltip:first');
        $('.mTooltip').removeClass('show');
        findTarget.hide();
        findSection.css({'zIndex':0, 'position':'static'});
        e.preventDefault();
    });



    $(document).ready(function(){
    //실시간 계좌이체, 에스크로 결제 수단 제외 처리
    $('#addr_paymethod').find("option[value='tcash']").remove();
    $('#addr_paymethod').find("option[value='esc_vcash']").remove();
    $('#payment_input_tcash').hide();
    $('#payment_input_esc_vcash').hide();
});

order = {

    //결제 로딩바 제거, Element 복구
    dLoadingHide:function()
    {
        $('input, a, select, button, textarea, .trigger').show();
        $('#progressPaybar').hide();
    },

    //결제진행
    processPayModule:function()
    {
        $('#progressPaybarView').hide();
        document.getElementById('payReqForm').target = '';
        document.getElementById('payReqForm').CAFE24EncData.value = '';

        if ( $('#addr_paymethod').val() == 'cell' ) {
            //휴대폰결제
            processCellPay(document.getElementById('payForm'));
        }else{
            //결제진행 (PG쪽 js)
            processPay(document.getElementById('payForm'));
        }

        window.scrollTo(0,0);
    },

    SSLencryptSubmit:function(frmName, callbackName)
    {
        var aData = new Array();
        var hObjList = document.getElementById(frmName);
        for (var i=0; i<hObjList.length; i++)
        {
            if (hObjList[i].name && hObjList[i].name != 'CAFE24EncData')
            {
                aData[aData.length] = 'frm_order_act::'+hObjList[i].name;
            }
        }

        AuthSSLManager.weave({
            'auth_mode': 'encrypt1.9'
            , 'aEleId': aData
            , 'auth_callbackName': callbackName
        });
    },

    payEncSubmit_Complete:function(output)
    {
        var payReqForm = document.getElementById('payReqForm');
        var payForm = document.getElementById('payForm');
        var sParam;

        if ( AuthSSLManager.isError(output) == true )
        {
            alert('[ERR-03] 결제시도중 오류발생');
            order.dLoadingHide();
            return;
        }

        //요청용 히든폼에 변수대입
        payReqForm.CAFE24EncData.value = encodeURIComponent(output);

        payReqForm.pgName.value = payForm.pgName.value;
        payReqForm.reqType.value = payForm.reqType.value;
        payReqForm.action = '/Pay/request.php';
        payReqForm.submit();
    },

    //결제결과 리턴
    processPayResult:function(bType)
    {
        if (bType === true)
        {
            order.SSLencryptSubmit('payForm', 'order.payEncSubmit_Complete');
        }else{
            //폼영역을 초기화하여 재활용이 가능하게끔 함
            $('#paymentFormWrap').html('');

            try
            {
                var frmObj = document.createElement('<form name="payForm">');
            }
            catch (e)
            {
                var frmObj = document.createElement('form');
                frmObj.setAttribute('name', 'payForm');
            }
            frmObj.setAttribute('id', 'payForm');
            frmObj.setAttribute('method', 'post');
            frmObj.setAttribute('action', '/Pay/request.php');

            document.getElementById('paymentFormWrap').appendChild(frmObj);
        }
    }

};