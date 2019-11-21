<?php

// 모듈 전체 제목
$header_name = 'mInsert';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>목록의 순서변경을 할때 사용되며 주로 <a href="/suio/include/layout.php?MODULE=pickerArea">pickerArea</a>에서 쓰인다.</li>
    </ol>
    <ol class="zh_CN">
        <li>用于变更目录顺序，主要在 <a href="/suio/include/layout.php?MODULE=pickerArea">pickerArea</a>使用。</li>
    </ol>
    <ol class="en_US">
        <li>It is used when the list has to be changed in order, and mainly used in the <a href="/suio/include/layout.php?MODULE=pickerArea">pickerArea</a>.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">

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
', 'html' => '
    <div class="mInsert">
        선택한 상품을 <input type="text" class="fText" /> 번 위치로 이동
        <a href="#none" class="btnNormal"><span>이동</span></a>
    </div>
')
);
?>