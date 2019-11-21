<?php

// 모듈 전체 제목
$header_name = 'mStep';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li><strong>서비스소개(introduce.html)의 .step 에는 사용하지 않는다.</strong></li>
        <li>.type$Name을 사용하여 다양한 step을 지원한다.</li>
        <li>현재 단계를 나타내기 위해 .step$Number 를 추가한다. &lt;div class="mStep + type타입 + step현재스탭"&gt;</li>
        <li>step의 이미지는 1장의 png로 sprite기법을 이용하여 작업한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>不使用于指南介绍(introduce.html)的 .step。</li>
        <li>用.type$Name支持各种step。</li>
        <li>为表示当前阶段，添加 .step$Number。&lt;div class="mStep + type类型 + step当前步骤"&gt;</li>
        <li>Step的图片可用一张png，以sprite方法制作。</li>
    </ol>
    <ol class="en_US">
        <li><strong>It is not used in the .step of the service introduction((introduce.html)</strong></li>
        <li>Support various steps using the .type$Name.</li>
        <li>Add the .step$Number to show the current stage.  &lt;div class="mStep + type타입 + step현재스탭"&gt;</li>
        <li>The image of step is a page long in png and used by the sprite method.</li>
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
    <h3>[mStep + typePost]</h3>
', 'html' => '
    <style type="text/css">
        /* mStep + typePost */
        .mStep.typePost .step { background-image: url("//img.echosting.cafe24.com/ec/optional/sfix_delivery_apply_step.png"); }
        .mStep.typePost.step1 .step { background-position:-780px 0px; }
        .mStep.typePost.step2 .step { background-position:-780px -60px; }
        .mStep.typePost.step3 .step { background-position:-780px -120px; }
        .mStep.typePost.step4 .step { background-position:-780px -180px; }
        .mStep.typePost.step5 .step { background-position:-780px -240px; }
        .mStep.typePost .step li ol { top:75px; }
        .mStep.typePost .step li.step1 ol { left:30px; }
        .mStep.typePost .step li.step5 ol { left:610px; }
    </style>
    <div class="mStep typePost step1">
        <ol class="step">
            <li class="step1">
                신청
                <ol>
                    <li>신청일 : 2013-08-13</li>
                </ol>
            </li>
            <li class="step2">1차승인</li>
            <li class="step3">사용설정</li>
            <li class="step4">2차승인</li>
            <li class="step5">서비스 시작
                <ol>
                    <li>시작일 : 2013-08-13</li>
                </ol>
            </li>
        </ol>
    </div>
    <div class="mStep typePost step5">
        <ol class="step">
            <li class="step1">
                신청
                <ol>
                    <li>신청일 : 2013-08-13</li>
                </ol>
            </li>
            <li class="step2">1차승인</li>
            <li class="step3">사용설정</li>
            <li class="step4">2차승인</li>
            <li class="step5">서비스 시작
                <ol>
                    <li>시작일 : 2013-08-13</li>
                </ol>
            </li>
        </ol>
    </div>
')
);
?>

