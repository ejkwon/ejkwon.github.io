<?php

// 모듈 전체 제목
$header_name = 'headingArea';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>headingArea : mBreadcrumb와 mTitle을 내용을 포함하고 있는 묶음이다. section에 포함하지 않도록 주의한다.</li>
        <li>mTitle : h2와 h3은 mTitle로 각각 감싸주고, h2를 생략하고 h3가 올 수 없다</li>
        <li>mTitle에 목록형(ul) 보조설명이나, 문단형(p) 보조설명에 버튼을 조합할 수는 있으나, 문단형(p)과 목록형(ul)을 같이 쓸 수 없다.</li>
    </ol>
    <ol class="zh_CN">
        <li>headingArea : 含mBreadcrumb与mTitle的集合，使用时与section等级相同。注意勿使其包含于section。</li>
        <li>mTitle：用mTitleh分别套住h2与h3，若省略h2则不可以有h3</li>
        <li>mTitle与目录型辅助说明可一同组合，段落型辅助说明与按钮可一同组合，但段落型与目录型不可一同组合。</li>
    </ol>
    <ol class="en_US"
        <li>The headingArea is the bundle including the contents of the mBreadcrumb and the mTitle, which should be cautiously excluded in the section.</li>
        <li>mTitle: The h2 and the h3 should be covered with the mTitle each, and the h3 cannot appear with the h2 skipped. </li>
        <li>Supplementary explanation can be combined in a list type(ul) or a paragraph type(p) for the mTitle, in which they cannot be used at the same time. </li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        /* 프리뷰를 위한 CSS 제거 */
        .mTitle:first-child { margin-top:0 !important; }
        .section { margin-bottom:0 !important; }
        .mTitle { outline:0; }
        .mTitle:before { display:none; }
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
                <li>
                    <p class="info"><span class="date">2016.05.09</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[btnManual, btnVideo]</strong> headingArea의 매뉴얼, 동영상가이드 버튼 추가, 툴팁, 상점아이콘 등 순서에 주의할 것</p>
                </li>
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
    <h3>[mTitle + mDesc + mBreadcrumb]</h3>
    <ol>
        <li>
            매뉴얼 버튼: 웹 표준이 아니거나 SUIO를 사용하지 않는 페이지에 적용시, <strong>img 버튼으로 적용</strong>한다.<br />
            &nbsp;&nbsp;&nbsp;예시) &lt;a href="#none" target="_blank" title="새창 열림"&gt;&lt;img src="//img.echosting.cafe24.com/admin/btn_manual.gif" alt="매뉴얼" /&gt;&lt;/a&gt;
        </li>
        <li>퍼블리싱에서는 mBreadcrumb에 링크처리를 하지 않으나, 필요한 경우 개발팀에서 a태그로 처리하면 된다. 예시로 "홈"에만 링크처리를 했다.</li>
    </ol>
    <ol class="zh_CN">
        <li>
			Manual 按钮： 不是web 标准， 或不使用SUIO的页面上， <strong>按钮用img</strong>。<br />&nbsp;&nbsp;&nbsp;例子) &lt;a href="#none" target="_blank" title="새창 열림"&gt;&lt;img src="//img.echosting.cafe24.com/admin/btn_manual.gif" alt="매뉴얼" /&gt;&lt;/a&gt;
		</li>
		<li>mBreadcrumb 不添加a标签，开发组处理a标签。</li>
    </ol>
    <ol class="en_US">
        <li></li>
    </ol>
', 'html' => '
    <div class="headingArea">
        <div class="mTitle">
            <h1>페이지 대제목</h1>
            <div class="mTooltip gMedium">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">14세 미만 회원가입 설정안내</strong>
                        <strong class="title">기본 배송설정 사용</strong>
                        <ul class="mList">
                            <li>"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                        </ul>
                        <strong class="title">배송비 무료</strong>
                        <ul class="mList">
                            <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                            <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        </ul>
                        <ol class="mList">
                            <li>1. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                            <li>2. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        </ol>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <span title="쇼핑몰별" class="icoShop">쇼핑몰별</span>
            <a href="#none" target="_blank" title="새창 열림" class="btnManual">매뉴얼</a>
            <a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/admin/btn_manual.gif" alt="매뉴얼" style="vertical-align:middle;" /></a>
            <a href="#none" target="_blank" title="새창 열림" class="btnVideo">동영상 가이드</a>
        </div>
        <div class="mBreadcrumb">
            <ol>
                <li class="home">홈</li>
                <li>2depth</li>
                <li>3depth</li>
                <li class="now" title="현재 페이지">현재 페이지</li>
            </ol>
            <a href="#none" class="manual" style="display:none;">매뉴얼</a>
            <a href="#none" class="help" style="display:none;">도움말</a>
        </div>
        <p class="mDesc">
            문단형 보조설명
        </p>
        <ul class="mDesc">
            <li>목록형 보조설명</li>
            <li>목록형 보조설명</li>
        </ul>
    </div>
'), array(
'desc' => '
    <h3>[mTitle] h2 + .mTooltip, .btnNormal</h3>
    <ol>
        <li>&lt;h2&gt;나 &lt;h3&gt;에 버튼과 툴팁을 포함하지 않도록 주의한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>注意避免heading tag包含按钮与tool tip。</li>
    </ol>
    <ol class="en_US">
        <li>Be cautious not to include a button or tooltip in the &lt;h2&gt; or the &lt;h3&gt;.</li>
    </ol>
', 'html' => '
    <div class="mTitle">
        <h2>중제목</h2>
        <div class="mTooltip gMedium">
            <button type="button" class="icon eTip">도움말</button>
            <div class="tooltip">
                <div class="content">
                    <strong class="titleEm">14세 미만 회원가입 설정안내</strong>
                    <strong class="title">기본 배송설정 사용</strong>
                    <ul class="mList">
                        <li>"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                    </ul>
                    <strong class="title">배송비 무료</strong>
                    <ul class="mList">
                        <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    </ul>
                    <ol class="mList">
                        <li>1. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        <li>2. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    </ol>
                </div>
                <button type="button" class="close eClose">닫기</button>
                <span class="edge"></span>
            </div>
        </div>
        <a href="#none" class="btnNormal"><span>버튼</span></a>
    </div>
'), array(
'desc' => '
    <h3>[mTitle] h2 + p 문단형 보조설명</h3>
', 'html' => '
    <div class="mTitle">
        <h2>중제목</h2>
        <div class="mTooltip gMedium">
            <button type="button" class="icon eTip">도움말</button>
            <div class="tooltip">
                <div class="content">
                    <strong class="titleEm">14세 미만 회원가입 설정안내</strong>
                    <strong class="title">기본 배송설정 사용</strong>
                    <ul class="mList">
                        <li>"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                    </ul>
                    <strong class="title">배송비 무료</strong>
                    <ul class="mList">
                        <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    </ul>
                    <ol class="mList">
                        <li>1. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        <li>2. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    </ol>
                </div>
                <button type="button" class="close eClose">닫기</button>
                <span class="edge"></span>
            </div>
        </div>
        <p>중제목의 문단형 보조설명</p>
    </div>
    '), array(
'desc' => '
    <h3>[mTitle] h2 + ul 목록형 보조설명</h3>
', 'html' => '
    <div class="mTitle">
        <h2>중제목</h2>
        <ul>
            <li>중제목의 목록형 보조설명</li>
            <li>중제목의 목록형 보조설명</li>
        </ul>
    </div>
'), array(
'desc' => '
    <h3>[mTitle] h3 + p 문단형 보조설명</h3>
', 'html' => '
    <div class="mTitle">
        <h3>소제목</h3>
        <p>소제목의 문단형 보조설명</p>
    </div>
'), array(
'desc' => '
    <h3>[mTitle] h3 + ul 목록형 보조설명</h3>
', 'html' => '
    <div class="mTitle">
        <h3>소제목</h3>
        <div class="mTooltip gMedium">
            <button type="button" class="icon eTip">도움말</button>
            <div class="tooltip">
                <div class="content">
                    <strong class="titleEm">14세 미만 회원가입 설정안내</strong>
                    <strong class="title">기본 배송설정 사용</strong>
                    <ul class="mList">
                        <li>"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                    </ul>
                    <strong class="title">배송비 무료</strong>
                    <ul class="mList">
                        <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    </ul>
                    <ol class="mList">
                        <li>1. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        <li>2. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    </ol>
                </div>
                <button type="button" class="close eClose">닫기</button>
                <span class="edge"></span>
            </div>
        </div>
        <ul>
            <li>소제목의 목록형 보조설명</li>
            <li>소제목의 목록형 보조설명</li>
        </ul>
    </div>
'), array(
'desc' => '
    <h3>[mTItle] h2 + h3</h3>
    <ol>
        <li>하나의 .mTitle로 감싸지 않고, h2 와 h3를 각각 감싸준다.</li>
    </ol>
    <ol class="zh_CN">
        <li>不应以同一mTitle套住，应将h2与h3分别套住。</li>
    </ol>
    <ol class="en_US">
        <li>Do not cover as a .mTitle, but cover the h2 and the h3 individually. </li>
    </ol>
', 'html' => '
    <div class="mTitle">
        <h2>중제목</h2>
        <div class="mTooltip gMedium">
            <button type="button" class="icon eTip">도움말</button>
            <div class="tooltip">
                <div class="content">
                    <strong class="titleEm">14세 미만 회원가입 설정안내</strong>
                    <strong class="title">기본 배송설정 사용</strong>
                    <ul class="mList">
                        <li>"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                    </ul>
                    <strong class="title">배송비 무료</strong>
                    <ul class="mList">
                        <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    </ul>
                    <ol class="mList">
                        <li>1. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        <li>2. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    </ol>
                </div>
                <button type="button" class="close eClose">닫기</button>
                <span class="edge"></span>
            </div>
        </div>
        <ul>
            <li>중제목의 목록형 보조설명</li>
            <li>중제목의 목록형 보조설명</li>
        </ul>
    </div>
    <div class="mTitle">
        <h3>소제목</h3>
        <div class="mTooltip gMedium">
            <button type="button" class="icon eTip">도움말</button>
            <div class="tooltip">
                <div class="content">
                    <strong class="titleEm">14세 미만 회원가입 설정안내</strong>
                    <strong class="title">기본 배송설정 사용</strong>
                    <ul class="mList">
                        <li>"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                    </ul>
                    <strong class="title">배송비 무료</strong>
                    <ul class="mList">
                        <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        <li>14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    </ul>
                    <ol class="mList">
                        <li>1. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                        <li>2. 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    </ol>
                </div>
                <button type="button" class="close eClose">닫기</button>
                <span class="edge"></span>
            </div>
        </div>
        <ul>
            <li>소제목의 목록형 보조설명</li>
            <li>소제목의 목록형 보조설명</li>
        </ul>
    </div>
'), array(
'desc' => '
    <h3>[mTItle] 인접태그 + gMerge</h3>
    <ol>
        <li>mTitle 인접태그에 gMerge class를 추가할 경우 상단 여백을 줄여준다.</li>
    </ol>
    <ol class="zh_CN">
        <li>在mTitle的邻接tag中添加gMerge class时，应减少上端空白。</li>
    </ol>
    <ol class="en_US">
        <li>Reduce the size of the upper margin when adding the gMerge class near the tag of mTitle.</li>
    </ol>
', 'html' => '
    <div class="mTitle">
        <h2>중제목</h2>
    </div>
    <div class="mState gMerge">
        <div class="gRight">
            <select class="fSelect">
                <option>10개씩보기</option>
                <option>20개씩보기</option>
                <option>30개씩보기</option>
                <option>50개씩보기</option>
                <option>100개씩보기</option>
            </select>
        </div>
    </div>
')
);
?>