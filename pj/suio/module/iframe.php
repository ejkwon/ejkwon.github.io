<?php
// 모듈 전체 제목
$header_name = 'iframe';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>아이프레임영역은 담당 개발자와 확인해서 퍼블리싱에 반영한다.</li>
        <li>필요한 js, css만 삽입한다. (layout.css 등은 삽입 금지)</li>
        <li>아이프레임은 &lt;body id="iframe"&gt;으로 선언한다</li>
    </ol>
    <ol class="zh_CN">
        <li>对于iframe区域，经开发负责人确认后，再适用于publishing。
        <li>只插入必要的js、css。（禁止插入layout.css等）</li>
        <li>iframe设定为&lt;body id="iframe"&gt;</li>
    </ol>
    <ol class="en_US">
        <li>The area of iframe should be applied in publishing after confirming with the developer in charge. </li>
        <li>Only the necessary js and css have to be inserted. (layout.css is banned to be inserted)</li>
        <li>Declare the iframe as &lt;body id="iframe"&gt;.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
<style type="text/css">
    #iframe { border:1px solid #000; }
    .mBox { line-height:1.8em; }
    .mBox  pre { font-size:12px; }
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
<h3>구조</h3>
', 'html' => '
<div class="section">
    <div class="mBox typeBorder">
    <pre>&lt;body id="iframe"&gt;
&lt;div class="section"&gt; ... 생략 ... &lt;/div&gt;
<strong>&lt;iframe src="#none" style="width:100%; height:500px;"&gt;&lt;/iframe&gt;</strong>
&lt;div class="section"&gt; ... 생략 ... &lt;/div&gt;
&lt;/body&gt; </pre>
    </div>
</div>
')
);
?>