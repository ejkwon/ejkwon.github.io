<?php

// 모듈 전체 제목
$header_name = 'mProcess/mProcessBar';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>해당 기능을 사용하기 위해서 여러단계가 필요할 경우 "현재 단계"를 나타낸다. (예시: 장바구니 &gt; 주문서 &gt; 주문완료)</li>
        <li><strong>하나의 이미지로 제작하며 alt 값으로 타이틀을 제공</strong>한다. (예시: &lt;img src="" alt="<strong class="txtWarn">1단계 신청</strong>" /&gt;)</li>
        <li>.typeSingle 외에 다른 디자인이 필요하다면, type을 추가하여 사용 가능하다. (예시: &lt;div class="<strong class="txtWarn">mProcess + type$Class</strong>"&gt;)</li>
    </ol>
    <ol class="zh_CN">
        <li>为使用相应功能需要进行多种步骤时，显示“目前的步骤”。（示例：购物车 > 订单 > 完成订购）</li>
        <li><strong>制作为一张图片，以alt值设定title。</strong>（示例：&lt;img src="" alt="<strong class="txtWarn">第一步骤申请"</strong> /&gt）</li>
        <li>如需typeSingle之外的其他设计，可添加type使用。（示例：&lt;<strong class="txtWarn">div class="mProcess + type$Class"</strong>&gt;)</li>
    </ol>
    <ol class="en_US">
        <li>In case multiple stages are needed to use the function, show the “current stage” (example : shopping cart &gt; order page &gt; order completion)</li>
        <li><strong>Produce it with one image and provide the title with the value of alt.</strong> (example: &lt;img src="" alt="Apply the first stage" /&gt;) </li>
        <li>If different design is needed other than the .typeSingle, add the type. (example: &lt;div class="<strong class="txtWarn">mProcess + type$Class</strong>"&gt;)</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
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
                <li>
                    <p class="info"><span class="date">2018.03.29</span><span class="writer">김은경</span></p>
                    <ul class="title">
                        <li><strong>[mProcessBar]</strong> mProcessBar <a href="/ec/bm/myservice/service_apply.html" class="btnLink" target="_blank">부가서비스 서비스 신청</a></li>
                    </ul>
                </li>
                 <li>
                    <p class="info"><span class="date">2017.08.14</span><span class="writer">김은경</span></p>
                    <ul class="title">
                        <li><strong>[mProcess typeInfo]</strong> typeInfo 추가 <a href="/ec/bm/cafe24/app/apply_choice.html" class="btnLink" target="_blank">카페24 플러스앱 서비스 신청</a></li>
                    </ul>
                </li>
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
    <h3>[mProcessBar]</h3>
', 'html' => '
     <div class="mProcessBar">
        <ol class="process">
            <li class="selected">1. 서비스신청</li>
            <li>2. 신청 내역 확인 신청 내역 확인 신청 내역 확인</li>
            <li>3. 결제</li>
            <li>4. 신청완료</li>
        </ol>
    </div>
'),
array(
'desc' => '
    <h3>[mProcessBar + gFix]</h3>
    <ul>
        <li>각 단계의 넓이가 동일할 경우 gFix를 사용한다.</li>
        <li>번역 필요</li>
    </ul>
', 'html' => '
     <div class="mProcessBar gFix">
        <ol class="process">
            <li class="selected">1. 서비스신청</li>
            <li>2. 신청 내역 확인</li>
        </ol>
    </div>
'),
array(
'desc' => '
    <h3>[mProcess + typeSingle]</h3>
', 'html' => '
    <div class="mProcess typeSingle">
        <p><img src="//img.echosting.cafe24.com/ec/optional/img_process_cjapply1.gif" alt="1단계 신청" /></p>
    </div>

    <div class="mProcess typeSingle">
        <p><img src="//img.echosting.cafe24.com/ec/optional/img_process_cjapply2.gif" alt="2단계 승인중" /></p>
    </div>

    <div class="mProcess typeSingle">
        <p><img src="//img.echosting.cafe24.com/ec/optional/img_process_cjapply3.gif" alt="3단계 서비스 시작" /></p>
    </div>
'),
array(
'desc' => '
  <h3>[mProcess + typeInfo]</h3>
', 'html' => '
    <div class="mProcess typeInfo">
        <p><img src="//img.echosting.cafe24.com/ec/bm/plusapp/img_process_plusapp1.gif" alt="1단계 OS/서비스기간 선택" /></p>
        <div class="info">
            <strong class="title">신청할 OS버전과 서비스 기간을 선택하세요.</strong>
        </div>
    </div>

    <div class="mProcess typeInfo">
        <p><img src="//img.echosting.cafe24.com/ec/bm/plusapp/img_process_plusapp4.gif" alt="4단계 신청서 확인" /></p>
        <div class="info">
            <strong class="title">카페24 플러스앱 서비스 신청이 완료되었습니다.</strong>
            <p class="text">
                모바일쇼핑몰 내 플러스앱 관리 메뉴가 오픈되었습니다.<br />
                입력하신 신청내역에 문제가 없다면, 영업일 기준으로 약 10일 후 앱이 출시됩니다.<br />
                [모바일쇼핑몰 &gt; 플러스앱 관리 &gt; 앱 등록정보] 페이지에서, 제작 진행상황을 확인할 수 있습니다.
            </p>
            <span class="gTriple">
                <a href="#none" class="btnNormal"><span>앱 등록정보 바로가기</span></a>
            </span>
        </div>
    </div>
')
);
?>