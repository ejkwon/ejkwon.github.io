<?php

// 모듈 전체 제목
$header_name = 'login';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>suio.css에서 공통으로 관리하는 모듈이 아니며, 신규 솔루션 개발시 공통 사용되는 경우가 많아 suio 가이드에 추가한다.</li>
        <li>신규 솔루션 개발시 일반적으로 사용되는 템플릿으로 각 솔루션 CSS에서 대응한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>他不是在suio中共同管理的部分，但因为在新页面开发制作时使用的情况很多，所以添加到了suio</li>
        <li>新页面开发制作时, 用一般使用的模板 , 对应相关页面的css.</li>
    </ol>
    <ol class="en_US">
        <li>The module is not commonly managed in suio.css, and is added in suio guide since it is used frequently to develop new solutions.</li>
        <li>The template is commonly utilized to develop new solutions, and the CSS of each solution should respond.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
<style type="text/css">
.loginArea { width:560px; margin:150px auto; }
.loginArea p.copy { padding:10px 0 0; font-size:9px; font-family:tahoma, verdana, sans-serif; text-align:center; color:#9c9c9c }
    .mLogin { margin:12px 0 0;padding:60px 108px 65px; background:#f0f4f8; border:1px solid #d4dde8; border-radius:2px; }
    .mLogin h2 { padding:0 0 15px; }
    .mLogin fieldset { position:relative; *top:-2px; width:340px; }
    .mLogin label { display:block; padding:1px 0 3px; color:#757575; }
    .mLogin label.login { position:relative; height:25px; }
    .mLogin label.login > input { position:absolute; left:0; top:0; }
    .mLogin label.save { padding-top:10px; }
    .mLogin .fText { width:232px; height:19px; padding:2px 3px; border:1px solid #dadada; }
    .mLogin .fText:focus { border-color:#4aaaea; }
    .mLogin a.btnLogin { overflow:hidden; position:absolute; right:0; top:0; *top:2px; width:91px; height:55px; background:url(//img.echosting.cafe24.com/login/sfix_btn.png) 0 0 no-repeat; }
    .mLogin a.btnLogin:hover { background-position:-101px 0; }
    .mLogin a.btnLogin span { display:block; text-indent:-100%; }
    .mLogin li { padding:8px 0 0 7px; background:url(//img.echosting.cafe24.com/login/sflex_icon.png) -198px 13px no-repeat; color:#9fa4b0; font-size:11px; line-height:14px; letter-spacing:-1px; word-spacing:-1px; }
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
    <h3>[mLogin]</h3>
', 'html' => '
    <div class="loginArea">
        <h1><img src="//img.echosting.cafe24.com/login/h1_hosting.gif" alt="호스팅센터" /></h1>
        <div class="mLogin">
            <h2><img src="//img.echosting.cafe24.com/login/h2_login.gif" alt="로그인" /></h2>
            <fieldset>
                <legend>로그인</legend>
                <label class="login"><strong>아이디</strong><input type="text" name="id" class="fText" placeholder="아이디" /></label>
                <label class="login"><strong>비밀번호</strong><input type="password" name="password" class="fText" placeholder="비밀번호" /></label>
                <label class="save"><input type="checkbox" /> 아이디 저장</label>
                <a href="#none" class="btnLogin"><span>로그인</span></a>
            </fieldset>
            <ul>
                <li>카페24 모바일스트리밍호스팅 신청시 입력하신 ID/PW를 입력하세요.</li>
                <li>아이디/비밀번호 분실 시 카페24 [나의서비스관리] &gt; [서비스 접속정보]에서 <br />확인하실 수 있습니다.</li>
            </ul>
        </div>
        <p class="copy">Copyright&copy; <strong>Simplex Internet</strong> Inc. All Rights Reserved.</p>
    </div>
')
);
?>