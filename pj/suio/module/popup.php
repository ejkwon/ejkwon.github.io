<?php
// 모듈 전체 제목
$header_name = 'popup';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>wrap안의 마크업은 일반 페이지와 동일하게 사용한다.</li>
        <li>페이지와 디자인 형태가 다를 경우 body의 #popup을 이용해 재선언한다.</li>
        <li><strong class="txtWarn">팝업사이즈는 꼭 기입하며, IA의 opts과 popup창의 size는 동일해야 한다.</strong></li>
    </ol>
    <ol class="zh_CN">
        <li>wrap与一般页面使用同样的markup。</li>
        <li>页面与设计形态不同时，用body的#popup重新制定。</li>
        <li><strong class="txtWarn">请务必填写popup的size，IA的opts与popup窗的size必须一样。</strong></li>
    </ol>
    <ol class="en_US">
        <li>The mark up in the wrap is identically used as normal pages.</li>
        <li>When a page and its design format are different, the #popup of the body can be used to re-declare.</li>
        <li><strong class="txtWarn">The size of pop up should be input, which also has to be the same with the size of the IA’s opts.</strong></li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
<style type="text/css">
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
    <pre>&lt;body id="popup" size="600,600"&gt;&lt;!-- 참고 : size 속성은 팝업 가로/세로 체크용입니다. 개발진행시에 팝업사이즈에 적용해주시고, size 는 삭제해주세요. --&gt;
&lt;div id="wrap"&gt;
    &lt;div class="headingArea"&gt; ... 생략 ... &lt;/div&gt;
    &lt;div class="section"&gt; ... 생략 ... &lt;/div&gt;
&lt;/div&gt;
&lt;div id="footer"&gt; ... 생략 ... &lt;/div&gt;
&lt;/body&gt; </pre>
</div>
    <p class="gSingle">
        <a href="/suio/module/popup.html" onclick="window.open(this.href, \'popup\', \'width=600, height=600\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>Popup Preview (查看POPUP 示例)<em class="icoLink"></em></span></a>
        <a href="/suio/module/popup.html" target="_blank" title="새창 열림" class="btnNormal"><span>New Page Preview (查看新建窗口示例)<em class="icoLink"></em></span></a>
    </p>
</div>
')
);
?>