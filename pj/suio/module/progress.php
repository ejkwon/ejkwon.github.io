<?php

// 모듈 전체 제목
$header_name = 'Progress Bar';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = '';

// 프리뷰를 위한 태그 리셋  (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .mProgress { position:relative !important; top:0 !important; left:0 !important; margin:0 !important; }
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
    <h3>[mLoading] 처리중 : [mLoading] <span class="zh_CN">处理中</span><span class="en_US">loading</span></h3>
    <ol>
        <li>화면의 중앙에 위치하며, 특정위치에 고정시키고 싶은 경우 경우 .typeStatic을 추가한다.</li>
        <li>예시소스에서는 style 속성에 display:block; position:static; top:0; left:0; margin:0; 가 적용 되어있으나, 실제 코딩시엔 style의 내용을 모두 사용하지 않는다.</li>
        <li>EC어드민의 경우 별도의 추가가 필요 없지만, <strong>FRAMESET의 경우 아래의 코드를 추가</strong>해야 한다.</li>
        <li><img src="/img.echosting.cafe24.com/uidesign/common/img_loading.png" alt="" /><span>[Check Loading] 버튼 클릭 시 UI를 확인할 수 있다.</span></li>
    </ol>
    <ol class="zh_CN">
        <li>位于页面中央，如需定位在指定位置时可添加 .typeStatic。</li>
        <li>虽然示例代码中style 属性已适用display:block; position:static; top:0; left:0; margin:0; ，但实际编写代码时不使用 style的所有内容。</li>
        <li>若为EC Admin时无需另行添加，若为<strong>FRAMESET</strong>时则需添加以下代码。</li>
        <li><img src="/img.echosting.cafe24.com/uidesign/common/img_loading.png" alt="" /><span>点击[Check Loading]按钮时，可确认UI。</li>
    </ol>
    <ol class="en_US">
        <li>It is situated in the middle of screen, and add the .typeStatic if it has to be fixed in certain area.</li>
        <li>In an example source, the display:block; position:static; top:0; left:0; margin:0; are applied in the style property, but in actual coding, not all of the contents in the style are used.</li>
        <li>No addition is required in case of EC Admin, but the code below has to be added in case it is a <strong>FRAMESET.</strong></li>
        <li><img src="/img.echosting.cafe24.com/uidesign/common/img_loading.png" alt="" /><span>UI can be checked by clicking the button [Check Loading].</span></li>
    </ol>
', 'html' => '
    <div class="mLoading typeStatic" style="display:block; position:static; top:0; left:0; margin:0; /* 실사용시엔 style의 내용을 모두 사용하지 않음 */">
        <p>처리중입니다. 잠시만 기다려 주세요.</p>
        <img src="//img.echosting.cafe24.com/suio/ico_loading.gif" alt="" />
    </div>

    <!-- frameset의 경우 </body>앞에 아래의 코드를 추가한다. -->
    <?php require_once( $_SERVER["DOCUMENT_ROOT"]."/suio/module/loading.html"); ?>
'),
array(
'desc' => '
    <h3>[mProgress] 진행중 <span class="zh_CN">进行中</span><span class="en_US">progressing</span></h3>
', 'html' => '
    <div class="mProgress" style="display:block; position:static; top:0; left:0; margin:0; /* 실사용시엔 style의 내용을 모두 사용하지 않음 */">
        <p><strong>처리중입니다.</strong> 잠시만 기다려주세요. <span><em>25</em>%</span></p>
        <div class="bar"><span style="width:25%;"></span></div>
    </div>
'),
array(
'desc' => '
    <h3>[mProgress + typeComplete] 완료 <span class="zh_CN">完成</span><span class="en_US">complete</span></h3>
', 'html' => '
    <div class="mProgress typeComplete" style="display:block; position:static; top:0; left:0; margin:0; /* 실사용시엔 style의 내용을 모두 사용하지 않음 */">
        <p><strong>처리가 완료되었습니다.</strong> <span><em>100</em>%</span></p>
        <div class="bar"><span style="width:100%;"></span></div>
    </div>
')
);
?>