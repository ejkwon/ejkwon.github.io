<?php

// 모듈 전체 제목
$header_name = 'mFeature';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>mFeature 모듈을 사용할 경우, section fixed 처리를 권장한다.</li>
        <li>/css/ec/common.css 가 CSS상에 import 처리가 되어있어야 한다.</li>
        <li>[.item$숫자]의 가로 정렬이 필요한 경우 .typeHor를 추가한다.</li>
        <li>background 추가를 위해 의미에 맞는 class를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>使用mFeature模块时，建议做section fixed处理。</li>
        <li>在CSS中/css/ec/common.css须做import处理。</li>
        <li>如需横向排列[.item$数字]时，添加.typeHor。</li>
        <li>为添加background，增加符合相应意义的class。</li>
    </ol>
    <ol class="en_US">
        <li>In case using the .mFeature module, it is recommended to handle with the section fixed.</li>
        <li>/css/ec/common.css should show the import management on the CSS.</li>
        <li>In case the horizontal alignment of the [.item$number] is needed, add the .typeHor.</li>
        <li>Add the class that fits based on the meaning to add the background.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <link rel="stylesheet" type="text/css" href="/css/ec/common.css" media="all" charset="utf-8" />
    <style type="text/css">
      .mFeature.mobileApp > li { background-image:url("//img.echosting.cafe24.com/ec/mobile/bg_intro_app.jpg"); }
      .mFeature.mobileApp > li.item1 { background-position:0 0; }
      .mFeature.mobileApp > li.item2 { background-position:0 -200px; }
      .mFeature.mobileApp > li.item3 { background-position:0 -400px; }
      .mFeature.mobileApp > li.item4 { background-position:0 -600px; }
      .mFeature.mobileApp > li.item5 { background-position:0 -800px; }
      .mFeature.mobileApp > li .desc { padding-top:10px; height:133px; }
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
    <h3>[ mFeature ] 기본형</h3>
', 'html' => '
    <div class="section fixed">
        <div class="mTitle">
            <h2>기본형</h2>
        </div>
        <ul class="mFeature mobileApp">
            <li class="item1">
                <a class="desc" href="#none">
                    <strong class="title">전체 영역에 링크가 걸리는 경우</strong>
                    일반 문장형<br />일반 문장형
                </a>
            </li>
            <li class="item2">
                <div class="desc">
                    <strong class="title">링크가 없는 경우</strong>
                    <ul>
                        <li>블릿이 있는 목록형</li>
                        <li>블릿이 있는 목록형</li>
                    </ul>
                </div>
            </li>
            <li class="item3">
                <div class="desc">
                    <strong class="title">자세히보기 버튼만 링크가 있는 경우</strong>
                    일반 문장형<br />일반 문장형
                    <span class="gTriple"><a href="#none" class="btnMore">자세히보기</a></span>
                </div>
            </li>
        </ul>
    </div>
'),array(
'desc' => '
    <h3>[ mFeature + typeHor ] 가로배치형</h3>
', 'html' => '
    <div class="section fixed">
        <div class="mTitle">
            <h2>쉽고 편리한 앱 관리</h2>
        </div>
        <ul class="mFeature typeHor mobileApp">
            <li class="item1">
                <a class="desc" href="#none">
                    <strong class="title">전체 영역에 링크가 걸리는 경우</strong>
                    일반 문장형<br />일반 문장형
                </a>
            </li>
            <li class="item2">
                <div class="desc">
                    <strong class="title">링크가 없는 경우</strong>
                    <ul>
                        <li>블릿이 있는 목록형</li>
                        <li>블릿이 있는 목록형</li>
                    </ul>
                </div>
            </li>
            <li class="item3">
                <div class="desc">
                    <strong class="title">자세히보기 버튼만 링크가 있는 경우</strong>
                    일반 문장형<br />일반 문장형
                    <span class="gTriple"><a href="#none" class="btnMore">자세히보기</a></span>
                </div>
            </li>
        </ul>
    </div>
'),array(
'desc' => '
    <h3>[ mFeature + typeVer ] 세로배치형 - 제작예정</h3>
', 'html' => '
    <div class="section fixed">
        <div class="mTitle">
            <h2>쉽고 편리한 앱 관리</h2>
        </div>
        <ul class="mFeature typeVer mobileApp">
            <li class="item1">
                <a class="desc" href="#none">
                    <strong class="title">전체 영역에 링크가 걸리는 경우</strong>
                    일반 문장형<br />일반 문장형
                </a>
            </li>
            <li class="item2">
                <div class="desc">
                    <strong class="title">링크가 없는 경우</strong>
                    <ul>
                        <li>블릿이 있는 목록형</li>
                        <li>블릿이 있는 목록형</li>
                    </ul>
                </div>
            </li>
            <li class="item3">
                <div class="desc">
                    <strong class="title">자세히보기 버튼만 링크가 있는 경우</strong>
                    일반 문장형<br />일반 문장형
                    <span class="gTriple"><a href="#none" class="btnMore">자세히보기</a></span>
                </div>
            </li>
        </ul>
    </div>
')
);
?>