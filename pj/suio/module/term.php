<?php

// 모듈 전체 제목
$header_name = 'mTerm';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>약관을 iframe 으로 불러올 경우 사용하는 모듈이다. </li>
        <li>기본값은 grid1(클래스 생략)이며 grid2, grid3과 같이 사용할 수 있다.</li>
        <li>전체 약관을 동의하는 영역이 있을때만 사용하며, 약관이 하나만 있을 경우 <a href="/suio/include/layout.php?MODULE=box">[mBox + typeFrame]</a>를 사용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>用iframe链接叫出条约页面时使用的module</li>
        <li>基本值是grid1(class省略), grid2,grid3可一起使用.</li>
        <li>仅可在有同意全部条约的区域时使用.只有一个条约时使用 <a href="/suio/include/layout.php?MODULE=box">[mBox + typeFrame]</a></li>
    </ol>
    <ol class="en_US">
        <li>It is a module that is used when recalling the terms in the iframe.</li>
        <li>The default value is grid1(class is omitted) and can be used with the grid2 and grid3.</li>
        <li>It is used when there is an area that agrees to all the terms, and if there is only one term, use the <a href="/suio/include/layout.php?MODULE=box">[mBox + typeFrame]</a>.</li>
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
    <h3>[mTerm]</h3>
', 'html' => '
    <div class="mTerm">
        <div class="check">
            <label class="gLabel"><input type="checkbox" class="fChk" /> 이용약관, 개인정보처리방침에 모두 동의합니다.</label>
        </div>
        <div class="box">
            <h3>약관 제목</h3>
            <div class="term"><iframe src="//m-img.cafe24.com/images/terms/ec/optional/kakao_bizmessage_policy.html" title="$약관명" frameborder="0" scrolling="auto"></iframe></div>
            <p class="gSingle">
                <label class="gLabel"><input type="checkbox" class="fChk" /> 동의합니다.</label>
            </p>
        </div>
        <div class="box">
            <h3>약관 제목</h3>
            <div class="term"><iframe src="//m-img.cafe24.com/images/terms/ec/optional/kakao_bizmessage_policy.html" title="$약관명" frameborder="0" scrolling="auto"></iframe></div>
            <p class="gSingle">
                <label class="gLabel"><input type="checkbox" class="fChk" /> 동의합니다.</label>
            </p>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mTerm + grid2]</h3>
', 'html' => '
    <div class="mTerm grid2">
        <div class="check">
            <label class="gLabel"><input type="checkbox" class="fChk" /> 이용약관, 개인정보처리방침에 모두 동의합니다.</label>
        </div>
        <div class="box">
            <h3>약관 제목</h3>
            <div class="term"><iframe src="//m-img.cafe24.com/images/terms/ec/optional/kakao_bizmessage_policy.html" title="$약관명" frameborder="0" scrolling="auto"></iframe></div>
            <p class="gSingle">
                <label class="gLabel"><input type="checkbox" class="fChk" /> 동의합니다.</label>
            </p>
        </div>
        <div class="box">
            <h3>약관 제목</h3>
            <div class="term"><iframe src="//m-img.cafe24.com/images/terms/ec/optional/kakao_bizmessage_policy.html" title="$약관명" frameborder="0" scrolling="auto"></iframe></div>
            <p class="gSingle">
                <label class="gLabel"><input type="checkbox" class="fChk" /> 동의합니다.</label>
            </p>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mTerm + grid3]</h3>
', 'html' => '
    <div class="mTerm grid3">
        <div class="check">
            <label class="gLabel"><input type="checkbox" class="fChk" /> 이용약관, 개인정보처리방침에 모두 동의합니다.</label>
        </div>
        <div class="box">
            <h3>약관 제목</h3>
            <div class="term"><iframe src="//m-img.cafe24.com/images/terms/ec/optional/kakao_bizmessage_policy.html" title="$약관명" frameborder="0" scrolling="auto"></iframe></div>
            <p class="gSingle">
                <label class="gLabel"><input type="checkbox" class="fChk" /> 동의합니다.</label>
            </p>
        </div>
        <div class="box">
            <h3>약관 제목</h3>
            <div class="term"><iframe src="//m-img.cafe24.com/images/terms/ec/optional/kakao_bizmessage_policy.html" title="$약관명" frameborder="0" scrolling="auto"></iframe></div>
            <p class="gSingle">
                <label class="gLabel"><input type="checkbox" class="fChk" /> 동의합니다.</label>
            </p>
        </div>
        <div class="box">
            <h3>약관 제목</h3>
            <div class="term"><iframe src="//m-img.cafe24.com/images/terms/ec/optional/kakao_bizmessage_policy.html" title="$약관명" frameborder="0" scrolling="auto"></iframe></div>
            <p class="gSingle">
                <label class="gLabel"><input type="checkbox" class="fChk" /> 동의합니다.</label>
            </p>
        </div>
        <div class="box">
            <h3>약관 제목</h3>
            <div class="term"><iframe src="//m-img.cafe24.com/images/terms/ec/optional/kakao_bizmessage_policy.html" title="$약관명" frameborder="0" scrolling="auto"></iframe></div>
            <p class="gSingle">
                <label class="gLabel"><input type="checkbox" class="fChk" /> 동의합니다.</label>
            </p>
        </div>
        <div class="box">
            <h3>약관 제목</h3>
            <div class="term"><iframe src="//m-img.cafe24.com/images/terms/ec/optional/kakao_bizmessage_policy.html" title="$약관명" frameborder="0" scrolling="auto"></iframe></div>
            <p class="gSingle">
                <label class="gLabel"><input type="checkbox" class="fChk" /> 동의합니다.</label>
            </p>
        </div>
        <div class="box">
            <h3>약관 제목</h3>
            <div class="term"><iframe src="//m-img.cafe24.com/images/terms/ec/optional/kakao_bizmessage_policy.html" title="$약관명" frameborder="0" scrolling="auto"></iframe></div>
            <p class="gSingle">
                <label class="gLabel"><input type="checkbox" class="fChk" /> 동의합니다.</label>
            </p>
        </div>
    </div>
')
);
?>