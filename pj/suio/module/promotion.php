<?php

// 모듈 전체 제목
$header_name = 'mPromotion';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>EC몰 어드민에서 각 서브메인에 사용되는 광고이다</li>
        <li>카페24의 광고/팝업 전용 관리 사이트인 애드관리자에서 제공하는 JavaScript 코드를 입력한다.</li>
        <li>아래 예시에서는 HTML Ver.(html 제작용)과 애드관리자 Ver.(실제 쇼핑몰에 사용)을 확인할 수 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>使用于EC mall admin中各个sub main的广告。</li>
        <li>输入cafe24广告/pop up专用管理网站——Ad管理者提供的 JavaScript代码。</li>
        <li>在以下示例中，可确认HTML Ver.（用于制作html）与Ad管理者 Ver.（实际用于网店）。</li>
    </ol>
    <ol class="en_US">
        <li>It is an advertisement that is used in each sub-main of EC mall Admin.</li>
        <li>Insert the JavaScript code that is provided in Ad manager, which is the manager-site for cafe24’s the ad/pop-up.</li>
        <li>In the example below, the HTML Ver.(html production type) and Ad management Ver. (used in actual shopping malls) can be confirmed.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .samplePreview h3 { margin:30px 0 0; }
        .samplePreview h3:first-child { margin:0; }
        .mPromotion.typeFlying { position:static; }
        .samplePreview h3 + .mPromotion { margin:10px 0 0; }
    </style>
';

// SUIO 업데이트 알림창
$update_notice = '
    <div id="updateNotice">
        <h2>SUIO 업데이트 알림</h2>
        <div id="noticefakeScroll">
            <!--
                [ ※ 최신 업데이트를 맨 위에 추가할 것 ]
                <li>
                    <p class="info"><span class="date">yyyy.mm.dd</span><span class="writer">작성자</span></p>
                    <ul class="title">
                        <li><strong>[클래스명]</strong> 내용1 <a href="#none" class="btnLink" target="_blank">예시</a></li>
                        <li><strong>[클래스명]</strong> 내용2 <a href="#none" class="btnLink" target="_blank">예시1</a><a href="#none" class="btnLink" target="_blank">예시2</a></li>
                    </ul>
                </li>
                <li>
                    <p class="info"><span class="date">yyyy.mm.dd</span><span class="writer">작성자</span></p>
                    <p class="title"><strong>[클래스명]</strong> 내용 <a href="#none" class="btnLink" target="_blank">예시</a></p>
                </li>
            -->
            <ul class="list">
            </ul>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
    <button type="button" id="uioUpdate">Update</button>
';

// 상세 모듈
$arr_module = array(
array(
'desc' => '
    <h3>[mPromotion]</h3>
', 'html' => '
    <h3>HTML Ver.</h3>
    <div class="mPromotion">
        <ul>
            <li><a href="#none"><img src="//img.echosting.cafe24.com/suio/@promotion.gif" alt="" /></a></li>
            <li><a href="#none"><img src="//img.echosting.cafe24.com/suio/@promotion.gif" alt="" /></a></li>
            <li><a href="#none"><img src="//img.echosting.cafe24.com/suio/@promotion.gif" alt="" /></a></li>
        </ul>
        <p class="gPaginate">
            <button type="button" class="selected"><span>1</span></button>
            <button type="button"><span>2</span></button>
            <button type="button"><span>3</span></button>
        </p>
    </div>

    <h3>애드관리자(广告管理者) Ver.</h3>
    <div class="mPromotion">
        <span id="admngDebug"></span><span id="admngSide_22"></span><script id="admng" type="text/javascript" src="http://ad.cafe24.com/adManager/logic/WebAnalysis.js?siteType=malladmin&userID=&groupIdx=5033"></script>
    </div>
'),array(
'desc' => '
    <h3>[mPromotion + typeFlying]</h3>
', 'html' => '
    <h3>HTML Ver.</h3>
    <div class="mPromotion typeFlying">
        <img src="//img.cafe24.com/images/event/1211/bnr_121129_504.jpg" alt="" />
    </div>

    <h3>애드관리자(广告管理者) Ver.</h3>
    <div id="right_ad_banner" class="mPromotion typeFlying">
        <span id="admngDebug"></span><span id="admngSide_20"></span><script id="admng" type="text/javascript" src="http://ad.cafe24.com/adManager/logic/WebAnalysis.js?siteType=normal&userID=&groupIdx=4852"></script>
        <span id="admngDebug"></span><span id="admngSide_21"></span><script id="admng" type="text/javascript" src="http://ad.cafe24.com/adManager/logic/WebAnalysis.js?siteType=normal&userID=&groupIdx=4853"></script>
    </div>
')
);
?>