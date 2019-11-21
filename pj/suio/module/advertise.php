<?php

// 모듈 전체 제목
$header_name = 'mAdvertise';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>배너영역 컨텐츠 내용에 따라 qna, use 등 class를 지정하여 background-image로 아이콘을 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>根据banner区域contents的内容，指定qna、use等class，以background-image添加icon。</li>
    </ol>
    <ol class="en_US">
        <li>Followed by the contents in the banner area, class such as the qna and use should be assigned and added as an icon of background-image.</li>
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
    <h3>[mAdvertise &gt; gFlow + qna / gReverse + use]</h3>
', 'html' => '
    <div class="mAdvertise">
        <div class="gFlow qna">
            <p><strong><img src="//img.echosting.cafe24.com/ec/optional/txt_intro_buying3.gif" alt="배송대행 서비스 문의" /></strong><a href="#none" class="btnNormal"><span>Q&amp;A</span></a></p>
        </div>
        <div class="gReverse use">
            <p><img src="//img.echosting.cafe24.com/ec/optional/txt_intro_buying4.gif" alt="서비스 이용문의 : 1599-7862" /></p>
        </div>
    </div>
')
);
?>