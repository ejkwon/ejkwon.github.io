<?php

// 모듈 전체 제목
$header_name = '모듈제목';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <h2>상단 설명 타이틀</h2>
    <p class="mList">
        상단설명 부분입니다.<br />
        여기에 상단 설명문구가 들어갑니다.<br />
        <strong>이렇게 이렇게!!ㅎㄷㄷ</strong> 살려주세요ㅠ
    </p>
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
    <h3>모듈 타이틀</h3>
    <p>모듈에 대한 설명 정의</p>
', 'html' => '
    <!-- 관련 모듈 샘플#1 -->
    <div class="mSampleTest">
        <h2>sample title</h2>
        <p>sample paragraph</p>
        <a href="#none">sample a link</a>
    </div>
'), array(
'desc' => '
    <h3>모듈 타이틀</h3>
    <p>모듈에 대한 설명 정의</p>
', 'html' => '
    <!-- 관련 모듈 샘플#2 -->
    <div class="mSampleTest">
        <h2>sample title</h2>
        <p>sample paragraph</p>
        <a href="#none">sample a link</a>
    </div>
')
);
?>