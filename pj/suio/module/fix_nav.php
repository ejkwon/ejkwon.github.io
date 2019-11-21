<?php

// 모듈 전체 제목
$header_name = 'FixNav';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>스크롤 이동 시 navigation bar를 상단에 고정할 때 사용한다.</li>
        <li>개수에 상관없이 각각의 메뉴는 동일한 width를 가진다. 단, 설정이나 고객의 이슈로 메뉴의 개수가 1개인 경우 navigation bar가 노출되지 않는 사양으로 협의한다.</li>
        <li>eFixNav 클래스를 추가해야 상단 고정을 시키는 script가 작동한다.</li>
        <li>일반적으로 mToggleBar와 함께 사용된다. (예시: .mToggleBar.eToggle + .toggleArea &gt; .mFixNav)</li>
        <li>상단에 고정해야하는 추가 내용이 있는 경우 mFivNav에 추가 가능하다. <a href="/smartAdmin/product/manage/list/modify.html" target="_blank">[예시]</a></li>
    </ol>
    <ol class="zh_CN">
        <li>移动滚轮时，为了将navigation bar固定在上端时使用。</li>
        <li>无论数量多少，各个菜单拥有同一个width。但，若只有1个菜单时，需向开发组申请，避免navigation bar显示出来。</li>
        <li>为了固定上端，应该添加eFixNav class。</li>
        <li>一般与mToggleBar一同使用。（例：.mToggleBar.eToggle + .toggleArea &gt; .mFixNav）</li>
        <li>有需要固定在上端的追加内容时，可以在mFivNav进行添加。<a href="/smartAdmin/product/manage/list/modify.html" target="_blank">[例子]</a></li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        div[id^="content"] { padding:20px; }
        div[id^="content"] p { font-size:15px; }
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
                    <p class="info"><span class="date">2016.08.19</span><span class="writer">김도희</span></p>
                    <p class="title">신규모듈 추가 <a class="txtLink" href="/smartAdmin/market/local/product/register.html" target="_blank">[예시]</a></p>
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
    <h3>mFixNav</h3>
', 'html' => '
    <div class="mFixNav eFixNav">
        <ul class="nav">
            <li class="selected"><a href="#content1">NAV1</a></li>
            <li><a href="#content2">NAV2</a></li>
            <li><a href="#content3">NAV3</a></li>
            <li><a href="#content4">NAV4</a></li>
            <li><a href="#content5">NAV5</a></li>
        </ul>
    </div>
    <div id="content1">
        <div class="mTitle">
            <h2>중제목</h2>
        </div>
        <p>content1</p>
    </div>
    <div id="content2">
        <div class="mTitle">
            <h2>중제목</h2>
        </div>
        <p>content2</p>
    </div>
    <div id="content3">
        <div class="mTitle">
            <h2>중제목</h2>
        </div>
        <p>content3</p>
    </div>
    <div id="content4">
        <div class="mTitle">
            <h2>중제목</h2>
        </div>
        <p>content4</p>
    </div>
    <div id="content5">
        <div class="mTitle">
            <h2>중제목</h2>
        </div>
        <p>content5</p>
    </div>
')
);
?>