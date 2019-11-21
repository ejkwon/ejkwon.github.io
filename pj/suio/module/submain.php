<?php

// 모듈 전체 제목
$header_name = 'submain';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>파일명은 submain.html로 한다.</li>
        <li>전체 컨텐츠는 &lt;div class="submain $Area"&gt;로 감싸준다.</li>
        <li>타이틀
            <ul>
                <li>시스템 폰트 : &lt;div class="title"&gt;로 감싼 &lt;h2&gt;를 사용한다.</li>
                <li>이미지 폰트 : &lt;div class="title img"&gt;로 감싼 &lt;h2&gt;를 사용한다.</li>
            </ul>
        </li>
        <li>공통가이드 영역 : div.half &gt; .flow + .reverse, span.advertise, ul.guide </li>
    </ol>
    <ol class="zh_CN">
        <li>文件名设置为submain.html。</li>
        <li>整个contents用&lt;div class="submain $Area"&gt;套住。</li>
        <li>Title
            <ul>
                <li>系统文字：使用以&lt;div class="title"&gt;套住的 &lt;h2&gt;。</li>
                <li>图片文字：使用以&lt;div class="title img"&gt;套住的&lt;h2&gt;。</li>
            </ul>
        </li>
        <li>共同指南区域：div.half > .flow + .reverse, span.advertise, ul.guide</li>
    </ol>
    <ol class="en_US">
        <li>The name of file should be submain.html.</li>
        <li>Cover the all contents with the &lt;div class="submain $Area"&gt;.</li>
        <li>title
            <ul>
                <li>System font : The &lt;h2&gt; that is covered with the &lt;div class="title"&gt; should be used.</li>
                <li>Image font : The &lt;h2&gt; that is covered with the &lt;div class="title img"&gt; should be used.</li>
            </ul>
        </li>
        <li>Common guide area : div.half &gt; .flow + .reverse, span.advertise, ul.guide</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <link rel="stylesheet" type="text/css" href="/css/ec/product.css" media="all" />
    <style type="text/css">
        .submain { padding:10px 0 0; }
        .samplePreview .half {margin:47px 0 8px; }
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
    <h3>[ submain + $Area ]</h3>
', 'html' => '
    <div class="headingArea">
        <div class="mTitle">
            <h1>페이지 대제목</h1>
        </div>
        <div class="mBreadcrumb">
            <ol>
                <li class="home">홈</li>
                <li class="now" title="현재 페이지">현재 페이지</li>
            </ol>
        </div>
    </div>

    <div class="submain productArea">
        <div class="title">
            <h2>중제목 - 시스템 폰트</h2>
        </div>
        <div class="mBoard">
            <table border="1" summary="">
                <caption>최근 가입 회원</caption>
                <colgroup>
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                    </tr>
                </thead>
                <tbody class="center">
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="title img">
            <h2><img src="/suio/img/h2_submain1.gif" alt="중제목 이미지폰트" /></h2>
        </div>
        <p class="desc"><img src="//img.echosting.cafe24.com/ec/ftp/txt_submain_ftp1.gif" alt="쇼핑몰에서 사용하는 이미지파일을 서버에 직접 업로드할 수 있는 서비스입니다." /></p>

        <div class="half">
            <div class="flow">
                <div class="title">
                    <h2>화면분할</h2>
                    <span class="advertise"><a href="#none">애드관리자 광고영역</a></span>
                    <a href="#none" class="btnNormal"><span>버튼</span></a>
                </div>
                왼쪽 컨텐츠 <a class="btnMore" href="#none">버튼</a>
            </div>
            <div class="reverse">
                <div class="title">
                    <h2>화면분할</h2>
                    <span class="advertise"><a href="#none">애드관리자 광고영역</a></span>
                    <a href="#none" class="btnNormal"><span>버튼</span></a>
                </div>
                오른쪽 컨텐츠
            </div>
        </div>

        <div class="title">
            <h2>이용 가이드</h2>
            <span class="advertise"><span id="admngDebug"></span><span id="admngSide_5"></span><script id="admng" type="text/javascript" src="http://ad.cafe24.com/adManager/logic/WebAnalysis.js?siteType=normal&userID=&groupIdx=82"></script></span>
        </div>
        <ul class="guide">
            <li class="item"><a href="#none">품목별로 재고 관리하는 품목 생성형 옵션</a></li>
            <li class="product"><a href="#none">필수/선택옵션을 설정하는 상품 연동형 옵션</a></li>
            <li class="set"><a href="#none">여러 상품을 하나로 판매하기! 세트상품 등록</a></li>
            <li class="sale"><a href="#none">PC쇼핑몰과 모바일쇼핑몰에 판매상품 진열</a></li>
            <li class="stock"><a href="#none">옵션별로 효율적으로 관리하는 재고관리</a></li>
            <li class="comingSoon">coming soon</li>
            <li class="comingSoon">coming soon</li>
            <li class="comingSoon">coming soon</li>
        </ul>
    </div>
')
);
?>