<?php

// 모듈 전체 제목
$header_name = 'IntroduceArea 서비스소개 指南介绍';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>파일명은 introduce.html로 한다. <a href="/suio/module/introduce.html" target="_blank">페이지 보기(전체구조)</a></li>
        <li>전체 컨텐츠는 &lt;div class="introduceArea $서비스명"&gt;로 감싸주고, mIntroXXX 모듈명을 사용한다.</li>
        <li>이미지 파일명은 다음의 가이드를 따른다. img_intro_$서비스명$숫자 (예: img_intro_plusapp2.gif)</li>
        <li>컨텐츠 개별 영역 : css파일에 .introduceArea.$서비스명 로 추가한다.</li>
        <li>suio.js 외에 우측 퀵배너용 스크립트를 반드시 추가한다. (<span class="txtEm">//img.echosting.cafe24.com/js/ec.js //img.echosting.cafe24.com/js/suio_slider.js</span>)</li>
        <li>서비스 이용약관이 해외서비스일 경우, <a href="//m-img.cafe24.com/images/terms/ec/optional/global.html" target="_blank">공통 약관</a>을 사용한다.</li>
        <li><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=651759116" target="_blank">위키 가이드 참고</a></li>
    </ol>
    <ol class="zh_CN">
        <li>文件名设置为introduce.html。</li>
        <li>整个contents用&lt;div class="introduceArea $서비스명"套住&gt;,其中的内容要使用模块名mIntroXXX制作。</li>
        <li>"图片文件名按照下方格式制定。img_intro_$服务名$数字 (例: img_intro_plusapp2.gif)"</li>
        <li>个别Contents区域：在css文件添加 .introduceArea.$서비스명。（<a href="/ec/bm/cafe24/app/introduce.html" target="_blank">例</a>）</li>
        <li>除suio.js外，必须添加右侧的快捷脚本。 (<span class="txtEm">//img.echosting.cafe24.com/js/ec.js //img.echosting.cafe24.com/js/suio_slider.js</span>)</li>
        <li>海外指南使用 <a href="//m-img.cafe24.com/images/terms/ec/optional/global.html" target="_blank">共同条约。</a></li>
        <li><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=651759116" target="_blank">Wiki Guide</a></li>
    </ol>
    <ol class="en_US">
        <li>The name of file should be introduce.html.</li>
        <li>All contents should be covered with the &lt;div class="introduceArea $service name"&gt;, and use the module name of mIntroXXX.</li>
        <li>The name of image file should follow the guide below. img_intro_$service name$number ( example : img_intro_plusapp2.gif )</li>
        <li>Contents development area: Add the .introduceArea.$service name in the css file.</li>
        <li>Other than the suio.js, add the script for the right side quick banner. (<span class="txtEm">//img.echosting.cafe24.com/js/ec.js //img.echosting.cafe24.com/js/suio_slider.js</span>)</li>
        <li>번역필요</li>
        <li><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=651759116" target="_blank">Refer the wiki</a></li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
/* 네비게이션 */
.navigation { display:none; position:fixed; right:0; top:30px; z-index:10; }
.navigation li { margin:0 0 5px; border:1px solid #ccc; background:#fff; opacity:0.9; }
.navigation li a { display:block; padding:6px; font-weight:bold; font-size:14px; color:#000; }
.navigation li a:hover { text-decoration:none; background:#6ebaa8; color:#fff; }
.navigation button { margin:0 0 5px; padding:5px; font-weight:bold; font-size:14px; color:#000;  border:1px solid #ccc; background:#fff; opacity:0.8; width:100%; }
.navigation .open { display:none; }
/* 개별 CSS추가 */
.mIntroVisual { background-image:url("//img.echosting.cafe24.com/ec/optional/bg_introduce_brandRegister.gif"); }
.mIntroFeature.typeGrid li[class*="item"]:before { background-image:url("//img.echosting.cafe24.com/ec/optional/bg_introduce_brandRegister2.png"); }
.mIntroFeature.typeHor li[class*="item"]:before { background-image:url("//img.echosting.cafe24.com/ec/optional/bg_introduce_brandRegister2.png"); }
.mIntroFeature.typeVer li[class*="item"]:before { background-image:url("//img.echosting.cafe24.com/ec/bm/agency/bg_introduce_sanitaryPermit2.png"); }
/* debug reset */
.introduceArea { border:0; }
.introduceArea:before { content:none; display:none; }
div[class*="mIntro"] div.mIntroHelp, div[class*="mIntro"] + ul.mIntroHelp, div.mIntroHelp > *:first-child { outline:0; }
div[class*="mIntro"] + ul.mIntroHelp:before, div.mIntroHelp > *:first-child:after { display:none; }
/* 쇼핑 큐레이션 > 서비스 이용안내 */
.mIntroThumbLink .item { width:158px; height:139px;}
.mIntroThumbLink .item:before { content:""; position:absolute; left:41px; top:17px; width:79px; height:72px; background:url("/img.echosting.cafe24.com/ec/optional/sfix_introduce_thumblink.png") no-repeat; }
.mIntroThumbLink .item.left:before { background-position:0 0; }
.mIntroThumbLink .item.right:before { background-position:-120px 0; }
.mIntroThumbLink .item.top:before { background-position:-240px 0; }
.mIntroThumbLink .item.fixed:before { background-position:-360px 0; }
.mIntroThumbLink .item.slide:before { background-position:-480px 0; }
/* 탭 확장 */
.mIntroTab.gExtend { margin:18px 0 60px 0; }
    </style>

<script>
$(document).ready(function(){
    $(".samplePreview").children().wrap($(".introduceArea"));
    $(".introduceArea .mIntroQuick").css("left","1160px");

    //네비게이션
    var tabMode = true;
    naviCheck();

    $(window).scroll(function(event){
        naviCheck();
    });

    function naviCheck(){
        if(tabMode){
            var naviScroll = $(window).scrollTop();
            if (naviScroll > 200){
                $(".navigation").show();
            }else {
                $(".navigation").hide();
            }
        }else{
            $(".navigation").hide();
        }
    }

    $(".navigation .open").click(function(){
        $(this).hide();
        $(this).prev(".navigation ul").show();
        $(this).next(".close").show();
    });
    $(".navigation .close").click(function(){
        $(this).hide();
        $(".navigation ul").hide();
        $(this).prev(".open").show();
    });
});
</script>
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
                    <p class="info"><span class="date">2018.05.10</span><span class="writer">소라</span></p>
                    <p class="title"><strong>[mIntroTab]</strong> 확장형(gExtend) 추가 <a href="/ec/bm/ja_JP/domain/introduce.html" class="btnLink" target="_blank">도메인구매 서비스 안내</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2018.05.10</span><span class="writer">소라</span></p>
                    <p class="title"><strong>[mIntroBoard]</strong> 전체보기(typeFold) 추가 <a href="/ec/bm/ja_JP/domain/introduce.html" class="btnLink" target="_blank">도메인구매 서비스 안내</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.12.01</span><span class="writer">조혜민</span></p>
                    <p class="title"><strong>[mIntroThumbLink]</strong> 추가 <a href="/ec/bm/cafe24/elastic/introduce.html" class="btnLink" target="_blank">쇼핑큐레이션 서비스 이용안내</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.09.26</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[mIntroList]</strong> 추가 <a href="/ec/community/review/introduce.html" class="btnLink" target="_blank">리뷰톡톡 서비스소개</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.04.10</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[mIntroAccordion]</strong> 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.07.14</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[mIntroCompare]</strong> 목록형(typeList) 추가 <a href="/smartAdmin/bm/agency/sanitaryPermit/introduce.html" class="btnLink" target="_blank">중국 위생허가 등록</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.07.14</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[mIntroFeauture]</strong> 세로형(typeVer) 추가 <a href="/smartAdmin/bm/agency/sanitaryPermit/introduce.html" class="btnLink" target="_blank">중국 위생허가 등록</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.06.02</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[mIntroProcess]</strong> 세로형(typeVer) 추가 <a href="/smartAdmin/bm/agency/registered/introduce.html" class="btnLink" target="_blank">상표등록 서비스</a></p>
                </li>
            </ul>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
    <button type="button" id="uioUpdate">Update</button>

<div class="navigation">
    <ul>
        <li><a href="#mIntroVisual">mIntroVisual</a></li>
        <li><a href="#mIntroTab">mIntroTab</a></li>
        <li><a href="#mIntroTitle">mIntroTitle</a></li>
        <li><a href="#mIntroBox">mIntroBox</a></li>
        <li><a href="#mIntroFeature">mIntroFeature</a></li>
        <li><a href="#mIntroFlow">mIntroFlow</a></li>
        <li><a href="#mIntroBanner">mIntroBanner</a></li>
        <li><a href="#mIntroCompare">mIntroCompare</a></li>
        <li><a href="#mIntroProcess">mIntroProcess</a></li>
        <li><a href="#mIntroBoard">mIntroBoard</a></li>
        <li><a href="#mIntroHelp">mIntroHelp</a></li>
        <li><a href="#mIntroPartner">mIntroPartner</a></li>
        <li><a href="#mIntroCustomer">mIntroCustomer</a></li>
        <li><a href="#mButton">mButton</a></li>
        <li><a href="#mIntroFaq">mIntroFaq</a></li>
        <li><a href="#mIntroThumbLink">mIntroThumbLink</a></li>
    </ul>
    <button type="button" class="open">Navi 열기</button>
    <button type="button" class="close">닫기</button>
</div>
';

// 상세 모듈
$arr_module = array(
array(
'desc' => '
    <h3>[ introduceArea + $서비스명 / mIntroQuick ]</h3>
    <ol>
        <li>mIntroQuick의 네비게이션 메뉴는 id="XXXQuick" 과 각 위치에 id="XXX"를 추가하여 연결한다.</li>
        <li>추천부가서비스 이미지는 common.css에서 공통 관리되므로 이미 사용중인 이미지가 있는지 작업전에 체크한다. (<a href="/suio/module/introduce_icon.html" target="_blank" class="txtEm">관리페이지</a>)</li>
    </ol>
    <ol class="zh_CN">
        <li>mIntroQuick的导航菜单在各位置添加id="XXX"与id="XXXQuick"相连接。 </li>
        <li>"推荐附加服务图片在common.css中共同管理，所以作业前确认是否有已在使用中的图片。(<a href="/suio/module/introduce_icon.html" target="_blank" class="txtEm">管理页面</a>)"</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요) </li>
        <li>(번역필요)</li>
    </ol>
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

    <div class="introduceArea $서비스명">
        <div class="mIntroQuick">
            <ul class="menu">
                <li><a href="#none" id="serviceFeatureQuick">서비스 특징</a></li>
                <li><a href="#none" id="serviceApplyQuick">서비스 신청절차</a></li>
                <li><a href="#none" id="serviceWarnQuick">서비스 유의사항</a></li>
            </ul>
            <div class="recommend">
                <strong>추천 부가서비스</strong>
                <ul class="service">
                    <li class="itemPhoneAuth">휴대폰인증<br />서비스</li>
                    <li class="itemPhonePay">휴대폰 결제<br />서비스</li>
                    <li class="itemDesignAgency">디자인 대행</li>
                </ul>
                <ul class="paginate">
                    <li class="selected"><a href="#none">1</a></li>
                    <li><a href="#none">2</a></li>
                    <li><a href="#none">3</a></li>
                </ul>
            </div>
        </div>
        <!-- 참고 : 이 스크립트 반드시 추가해야 합니다. 필수! -->
        <script type="text/javascript">
            $(document).ready(function(){
                $(".service").eRolling({
                    flexible : false,
                    autoplay : true,
                    delay : 2000
                });
            });
        </script>
    </div>

'),array(
'desc' => '
    <h3 id="mIntroVisual">[ mIntroVisual]</h3>
', 'html' => '
    <div class="mIntroVisual">
        <div class="copy">
            <h2>대제목</h2>
            <strong>중제목</strong>
            <p>내용</p>
        </div>
        <p class="button">
            <a href="#none" class="btnConfirm">button(가변/번역)</a>
            <a href="#none" class="btnMore">link button(가변/번역)</a>
            <a href="#none" class="btnDownload">download button(가변/번역)</a>
        </p>
    </div>
'),array(
'desc' => '
    <h3 id="mIntroTab">[ mIntroTab / mIntroTab + typeSub / mIntroTab + gExtend ]</h3>
    <ol>
        <li>글자수에 따라 넓이가 가변되며, "서비스 고객지원" 탭에선 우측 퀵메뉴가 노출되지 않는다.("서비스 고객지원" 문구로 노출여부 체크함)</li>
    </ol>
    <ol class="zh_CN">
        <li>"根据字数，宽度可变，在“서비스 고객지원”tab中隐藏右侧快捷菜单。（确认是否标有“서비스 고객지원”字样）"</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mIntroTab eTab">
        <ul>
            <li class="selected"><a href="#tabCont1_1">tab1</a></li>
            <li><a href="#tabCont1_2">tab2</a></li>
            <li><a href="#tabCont1_3">tab3</a></li>
        </ul>
    </div>

    <div class="gContent" id="tabCont1_1">
        <div class="mIntroTab typeSub eTab">
            <ul>
                <li class="selected"><a href="#tabCont2_1">sub tab1</a></li>
                <li><a href="#tabCont2_2">sub tab2</a></li>
                <li><a href="#tabCont2_3">sub tab3</a></li>
            </ul>
        </div>
        <div class="gContentSub" id="tabCont2_1">
        </div>
    </div>

    <div class="mIntroTab gExtend eTab">
        <ul>
            <li><a href="#tabCont1_1">tab1</a></li>
            <li  class="selected">
                <a href="#tabCont1_2">tab2</a>
                <ul>
                    <li class="selected"><a href="#tabCont2_1">sub tab1</a></li>
                    <li><a href="#tabCont2_2">sub tab2</a></li>
                    <li><a href="#tabCont2_3">sub tab3</a></li>
                </ul>
            </li>
            <li><a href="#tabCont1_3">tab3</a></li>
        </ul>
    </div>
'),array(
'desc' => '
    <h3 id="mIntroTitle">[ mIntroTitle / mIntroHeadline ]</h3>
    <ol>
        <li>mIntroHeadline은 페이지 상단에 headline으로 사용되는 문구에서만 사용한다.</li>
        <li>mIntroTitle 아래에 추가문구가 필요한 경우 div.mIntroTitle > p, ul 로 작업한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>mIntroHeadline只用在页面上端的标题文字。</li>
		<li>mIntroTitle下面需要添加文字时用div.mIntroTitle &gt; p, ul 制作。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <h3 class="mIntroTitle">대제목</h3>
    <h4 class="mIntroTitle">중제목</h4>
    <div class="mIntroTitle">
        <h3>대제목</h3>
        <p>내용</p>
        <ul>
            <li>내용</li>
            <li>내용</li>
        </ul>
    </div>
    <h3 class="mIntroTitle">서비스 소개 제목/服务介绍标题</h3>
    <ul class="mIntroHeadline">
        <li>서비스 소개 내용</li>
        <li>서비스 소개 내용 <span class="txtEm">서비스 소개 내용</span> 서비스 소개 내용</li>
    </ul>
    <p class="mIntroHeadline">서비스 소개 내용</p>
    <ul class="mIntroHeadline typeDash">
        <li>서비스 소개 내용</li>
        <li>서비스 소개 내용 <span class="txtEm">서비스 소개 내용</span> 서비스 소개 내용</li>
    </ul>
'),array(
'desc' => '
    <h3 id="mIntroList">[ mIntroList ]</h3>
', 'html' => '
    <ul class="mIntroList">
        <li>목록형 내용 <span class="txtEm">강조문구</span>입니다.</li>
        <li>목록형 내용입니다.</li>
        <li><span class="txtEm">목록형 내용</span>입니다.</li>
        <li><span class="txtEm">목록형 내용</span>입니다.</li>
        <li>목록형 내용입니다.</li>
    </ul>
'),array(
'desc' => '
    <h3 id="mIntroBox">[ mIntroBox ]</h3>
    <ol>
        <li>중앙정렬이 필요한 경우 gCenter class를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>需进行居中调整时，添加gCenter class。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mIntroBox gCenter">
        <strong class="title">제목</strong>
        <p class="desc">내용</p>
        <p class="gTriple"><img src="/img.echosting.cafe24.com/ec/optional/@img_intro_plusapp_graph.gif" alt="" /></p>
    </div>

    <div class="mIntroBox">
        <p class="desc">내용입니다.</p>
    </div>
'),array(
'desc' => '
    <h3 id="mIntroFeature">[ mIntroFeature + typeHor, typeGrid, typeVer ]</h3>
    <ol>
        <li>grid2,3 class를 추가하여 2개 또는 3개 나열이 가능하다.</li>
    </ol>
    <ol class="zh_CN">
        <li>添加grid2,3 class，可排列2至3个。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <ul class="mIntroFeature typeHor grid2">
        <li class="item1">
            <strong class="title">제목</strong>
            <p>내용</p>
        </li>
        <li class="item2">
            <strong class="title"><span class="txtEm">제목</span></strong>
            <p>내용</p>
        </li>
        <li class="item3">
            <strong class="title">제목</strong>
            <ul>
                <li>내용</li>
                <li>내용</li>
            </ul>
        </li>
        <li class="item4">
            <strong class="title">제목</strong>
            <ul>
                <li>내용</li>
                <li>내용</li>
            </ul>
        </li>
        <li class="item5">
            <strong class="title">제목</strong>
            <ul>
                <li>내용</li>
                <li>내용</li>
            </ul>
        </li>
        <li class="item6">
            <strong class="title">제목</strong>
            <ul>
                <li>내용</li>
                <li>내용</li>
            </ul>
        </li>
    </ul>
    <ul class="mIntroFeature typeGrid grid3">
        <li class="item1">
            <strong class="title">제목</strong>
            <p>내용</p>
        </li>
        <li class="item2">
            <strong class="title">제목</strong>
            <p>내용</p>
        </li>
        <li class="item3">
            <strong class="title">제목</strong>
            <p>내용</p>
        </li>
        <li class="item4">
            <strong class="title">제목</strong>
            <p>내용</p>
        </li>
        <li class="item5">
            <strong class="title">제목</strong>
            <p>내용</p>
        </li>
        <li class="item6">
            <strong class="title">제목</strong>
            <p>내용</p>
        </li>
    </ul>

    <ul class="mIntroFeature typeVer">
        <li class="item1">
            <strong class="title">세계적인 선두 업체 CIRS를 통한 허가증 취득</strong>
            <p class="strapline">글로벌 생산품의 중국 내 합법적인 유통 지원</p>
            <p>CIRS는 유럽, 미국, 아시아 등 다양한 국가에서 생산되는 화장품, 화학품, 식품 등의 <br />위생허가 취득 대행 전문 기업으로, 위생허가 관련 폭넓은 포트폴리오를 보유하고 있습니다.</p>
        </li>
        <li class="item2">
            <strong class="title">쉽고 편리한 신청</strong>
            <p class="strapline">전문가의 축적된 노하우를 통한 빠른 현지 대응 가능</p>
            <p>CIRS는 축적된 노하우로 인한 높은 신뢰도를 보장하며, 중국 현지 법률/법규에 빠른 대응이 가능하며 <br />중국 내 합법적인 제품 유통과 빠른 시장진입을 지원합니다</p>
        </li>
        <li class="item3">
            <strong class="title">중국 진출, 매출 증대의 첫걸음</strong>
            <p class="strapline">13억 중국 소비자를 향한 화장품 분야의 글로벌 매출 증대</p>
            <p>위생허가 취득은 13억 중국 소비자를 향한 첫걸음으로, 쇼핑몰의 잠재 고객 수를 늘릴 뿐 아니라 <br />해외 매출의 증대로 이어질 수 있습니다.</p>
        </li>
    </ul>
'),array(
'desc' => '
    <h3 id="mIntroFlow">[ mIntroFlow ]</h3>
    <ol>
        <li>이미지로 작업하며, 흐름도 내용에 맞는 대체설명을 넣어준다. (<a href="/ec/bm/cs/realpacking/introduce.html" class="txtEm" target="_blank">예시</a>)</li>
    </ol>
    <ol class="zh_CN">
        <li>做成图片，添加符合流程内容的替代说明。 (<a href="/ec/bm/cs/realpacking/introduce.html" class="txtEm" target="_blank">例子</a>)</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mIntroFlow">
        <img src="//img.echosting.cafe24.com/ec/optional/img_flow_realpacking.gif" alt="" />
        <ol class="blind">
            <li>구매자(상품주문) → 주문내역 전송 → 포장작업자 → 촬영 영상 자동 저장 → 쇼핑몰 관리자</li>
            <li>포장작업자: 바코드스캔 → 상품포장 → 바코드 스캔</li>
            <li>쇼핑몰 관리자: 촬영 영상 확인 후 SMS 발송</li>
            <li>구매자: SMS를 통해 쇼핑몰관리자에게 피드백을 보냄</li>
        </ol>
    </div>
    <div class="mIntroFlow">
         <h4>상담 프로세스</h4>
         <img src="//img.echosting.cafe24.com/ec/optional/img_flow_realpacking.gif" alt="" />
         <h4>서비스 프로세스</h4>
         <img src="//img.echosting.cafe24.com/ec/optional/img_flow_realpacking.gif" alt="" />
        <ol class="blind">
            <li>구매자(상품주문) → 주문내역 전송 → 포장작업자 → 촬영 영상 자동 저장 → 쇼핑몰 관리자</li>
            <li>포장작업자: 바코드스캔 → 상품포장 → 바코드 스캔</li>
            <li>쇼핑몰 관리자: 촬영 영상 확인 후 SMS 발송</li>
            <li>구매자: SMS를 통해 쇼핑몰관리자에게 피드백을 보냄</li>
        </ol>
    </div>
'),array(
'desc' => '
    <h3 id="mIntroBanner">[ mIntroBanner ]</h3>
    <ol>
        <li>이미지로 작업 후 alt값에 해당 내용을 추가한다. (<a href="/ec/bm/cs/mainnumber/introduce.html" class="txtEm" target="_blank">예시</a>)</li>
        <li>이미지 파일명은 <span class="txtWarn">img_introduce_$서비스명$숫자.확장자 파일명 규칙</span>을 따른다. (<a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=651759116" class="txtEm" target="_blank">위키 가이드 참고</a>)</li>
    </ol>
    <ol class="zh_CN">
        <li>做成图片后，在alt值中添加相关内容。 (<a href="/ec/bm/cs/mainnumber/introduce.html" class="txtEm" target="_blank">例子</a>)</li>
        <li>"图片文件名是img_introduce_$服务名$数字。
扩展者遵从文件名规则。(<a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=651759116" class="txtEm" target="_blank">参考 wiki 指南</a>)"
</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mIntroBanner"><img src="//img.echosting.cafe24.com/ec/optional/img_introduce_mainnumber5.jpg" alt="LG U+에서 카페24 고객사에만 제공하는 파격적인 혜택! 첫 달 사용료 면제 + 1년간 사용료의 30% 면제 대상 : 1년 이상 약정 가입자" /></div>
'),array(
'desc' => '
    <h3 id="mIntroCompare">[ mIntroCompare typeList ]</h3>
    <ol>
        <li>결과(summary)가 한개만 사용되는 경우 effect &gt; after 안에 넣어준다.</li>
        <li><a href="/ec/bm/agency/sanitaryPermit/introduce.html" class="txtEm" target="_blank">예시</a></li>
    </ol>
    <ol class="zh_CN">
        <li>只用一个总结(summary)时，放入effect &gt; after中。</li>
        <li><a href="/ec/bm/agency/sanitaryPermit/introduce.html" class="txtEm" target="_blank">例子</a></li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mIntroCompare typeList">
        <div class="effect">
            <div class="before">
                <h4>도입 전</h4>
                <ul class="list">
                    <li><strong class="head">현지출장, 전문인력, 시간적 비용 발생</strong>위생허가증 발급을 위해 많은 비용 지출</li>
                    <li><strong class="head">중국 현지의 실무적 지식 부족</strong>현지 법규, 허가 절차 등의 실무 지식 부족</li>
                    <li><strong class="head">위생허가증 발급까지 오랜 시간 소요</strong>정보 부족으로 인해 중도 탈락률이 높음</li>
                </ul>
            </div>
            <div class="after">
                <h4>도입 후</h4>
                <ul class="list">
                    <li><strong class="head">현지출장, 전문인력, 시간적 비용 절감</strong>신뢰도 높은 대행 업체를 통한 원스톱 취득</li>
                    <li><strong class="head">중국 현지 실무 전문가들의 대응 가능</strong>현지 상황에 대한 축적된 노하우 보유</li>
                    <li><strong class="head">단기간 내 위생허가증 발급 가능</strong>전문가의 대응으로 발급 기간 최소화 가능</li>
                </ul>
            </div>
        </div>
        <div class="result">
            <div class="summary" title="도입 전">위생허가증 취득을 위한<br />시간, 비용의 과다 발생</div>
            <div class="summary" title="도입 후">전문업체 대행을 통하여<br /><strong class="txtEm">빠르고 편리한 위생허가증 취득 가능</strong></div>
        </div>
    </div>
'),array(
'desc' => '
    <h3 id="mIntroProcess">[ mIntroProcess / mIntroProcess + typeVer ]</h3>
    <ol>
        <li>절차가 3~5개인 경우 가로형(default)을 사용하고, 6개 이상인 경우 세로형(typeVer)를 사용한다.</li>
        <li>가로형(default)은 grid3~5 class를 추가하여 3~5개의 step이 사용가능하다.</li>
        <li>내용이 없는 경우 heading 영역만 작업한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>"程序有3~5个时，使用横向(default)，有6个以上时，使用竖向(typeVer)。"</li>
        <li>横向(default)添加grid3~5 class后，可使用3~5个step。</li>
        <li>无内容时，只进行heading领域的作业。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mIntroProcess grid5">
        <ol>
            <li class="step1">
                <div class="heading">
                    <span class="number">Step 1</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                    <li>내용</li>
                </ul>
            </li>
            <li class="step2">
                <div class="heading">
                    <span class="number">Step 2</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                </ul>
            </li>
            <li class="step3">
                <div class="heading">
                    <span class="number">Step 3</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                    <li>내용</li>
                </ul>
            </li>
            <li class="step4">
                <div class="heading">
                    <span class="number">Step 4</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                    <li>내용</li>
                </ul>
            </li>
            <li class="step5">
                <div class="heading">
                    <span class="number">Step 5</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                    <li>내용</li>
                </ul>
            </li>
        </ol>
        <p class="mIntroHelp">도움말</p>
        <ul class="mIntroHelp">
            <li>도움말</li>
            <li>도움말</li>
        </ul>
    </div>

    <div class="mIntroProcess grid4">
        <ol>
            <li class="step1">
                <div class="heading">
                    <span class="number">Step 1</span>
                    <strong>제목</strong>
                </div>
            </li>
            <li class="step2">
                <div class="heading">
                    <span class="number">Step 2</span>
                    <strong>제목</strong>
                </div>
            </li>
            <li class="step3">
                <div class="heading">
                    <span class="number">Step 3</span>
                    <strong>제목</strong>
                </div>
            </li>
            <li class="step4">
                <div class="heading">
                    <span class="number">Step 4</span>
                    <strong>제목</strong>
                </div>
            </li>
        </ol>
    </div>
    <div class="mIntroProcess typeVer">
        <ol>
            <li class="step1">
                <div class="heading">
                    <span class="number">Step 1</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                </ul>
            </li>
            <li class="step2">
                <div class="heading">
                    <span class="number">Step 2</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                </ul>
            </li>
            <li class="step3">
                <div class="heading">
                    <span class="number">Step 3</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                </ul>
            </li>
            <li class="step4">
                <div class="heading">
                    <span class="number">Step 4</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                    <li>내용</li>
                </ul>
            </li>
            <li class="step5">
                <div class="heading">
                    <span class="number">Step 5</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                    <li>내용</li>
                </ul>
            </li>
            <li class="step6">
                <div class="heading">
                    <span class="number">Step 6</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                    <li>내용</li>
                    <li>내용</li>
                </ul>
            </li>
            <li class="step7">
                <div class="heading">
                    <span class="number">Step 7</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                </ul>
            </li>
            <li class="step8">
                <div class="heading">
                    <span class="number">Step 8</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                </ul>
            </li>
            <li class="step9">
                <div class="heading">
                    <span class="number">Step 9</span>
                    <strong>제목</strong>
                </div>
                <ul class="description">
                    <li>내용</li>
                </ul>
            </li>
        </ol>
    </div>
'),array(
'desc' => '
    <h3 id="mIntroBoard">[ mIntroBoard / mIntroBoard + typeFold ]</h3>
    <ol>
        <li>rowspan을 사용하여 border-right가 나오지 않는 경우 해당 태그에 gLine class를 추가한다.</li>
        <li>간격을 좁혀야 하는 경우 해당 태그에 gMerge class를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>使用rowspan，未出现border-right时，在该tag处添加gLine class。</li>
        <li>减小间距时，在该标签添加 class="gMerge"。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mIntroBoard">
        <div class="heading">
            <span class="left"><strong>타이틀</strong><span class="bar"></span>내용입니다.</span>
            <span class="right">[VAT 별도]</span>
        </div>
        <table border="1" summary="">
            <caption>제목</caption>
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
                <tr>
                    <td><strong class="txtNormal">가격 예</strong></td>
                    <td><strong class="txtEm">100,000원/월</strong> <span class="txtLess">(VAT별도)</span></td>
                    <td><strong class="txtEm">70,000원/월</strong> <span class="txtLess">(VAT별도)</span></td>
                    <td><strong class="txtEm">40,000원/월</strong> <span class="txtLess">(VAT별도)</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mIntroBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:180px;" />
                <col style="width:180px;" />
                <col style="width:auto;" />
            </colgroup>
            <tbody>
                <tr>
                    <th scope="col" rowspan="2" class="middle">제목<br /><span class="txtNormal">(VAT포함)</span></th>
                    <th scope="col">제목</th>
                    <td>내용</td>
                </tr>
                <tr>
                    <th scope="col">가격 예</th>
                    <td><span class="through">2,534,400원</span><strong class="txtDiscount">2,122,000원/월 (20% 할인)</strong></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mIntroBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:20%;" />
                <col style="width:20%;" />
                <col style="width:20%;" />
                <col style="width:20%;" />
                <col style="width:20%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col" rowspan="2">제목</th>
                    <th scope="col" rowspan="2" class="gLine">제목</th>
                    <th scope="col" colspan="3">제목</th>
                </tr>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <th scope="row">제목</th>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mIntroBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:60px;" />
                <col style="width:250px;" />
                <col style="width:170px;" />
                <col style="width:160px;" />
                <col style="width:216px;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" class="fIntroChk" title="전체선택" /></th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center middle">
                <tr>
                    <td rowspan="2" class="gLine"><input type="checkbox" class="fIntroChk" title="선택" /></td>
                    <td>내용</td>
                    <td>내용</td>
                    <td>
                        <div class="fIntroSelect gFull">
                            <select title="수량선택">
                                <option>선택</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </td>
                    <td rowspan="2">
                        <ul class="mList typeMore">
                            <li>내용</li>
                            <li>내용</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>내용</td>
                    <td>내용</td>
                    <td>
                        <div class="fIntroSelect gFull">
                            <select title="수량선택">
                                <option>선택</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mIntroBoard typeFold"><!-- 토글영역(.btnToggleView.eToggle) 활성화 시 .selected 추가 -->
        <div class="heading">
            <div class="left">
                <label class="gLabel"><input type="checkbox" class="fIntroChk" title="전체선택" /> <strong>전체선택</strong></label>
            </div>
        </div>

        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:60px;" />
                <col style="width:192px;" />
                <col style="width:150px;" />
                <col style="width:136px;" />
                <col style="width:136px;" />
                <col style="width:182px;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" class="fIntroChk" title="전체선택" /></th>
                    <th scope="col">도메인 예</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">등록여부 예</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center middle">
                <tr>
                    <td><input type="checkbox" class="fIntroChk" title="선택" /></td>
                    <td>cafe24<strong class="txtEm">.com</strong></td>
                    <td>
                        <div class="fIntroSelect gFull">
                            <select title="선택">
                                <option>선택</option>
                                <option>1</option>
                                <option>2</option>
                             </select>
                        </div>
                    </td>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="fIntroChk" title="선택" /></td>
                    <td>cafe24<strong class="txtEm">.house</strong></td>
                     <td>
                        <div class="fIntroSelect gFull">
                            <select title="선택">
                                <option>선택</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </td>
                    <td>내용</td>
                    <td><span class="txtWarn">등록불가능</span></td>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btnFoldView eToggle">전체보기</button><!-- 토글영역 활성화 시 text가 닫기로 변경되어야 합니다.  -->
    </div>
'),array(
'desc' => '
    <h3 id="mIntroHelp">[ mIntroHelp ]</h3>
    <ol>
        <li>ul.mIntroHelp는 다른 모듈내에서 보조 도움말로 사용이 가능하다.</li>
    </ol>
    <ol class="zh_CN">
        <li>ul.mIntroHelp可用于其它模块内的辅助说明。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mIntroHelp" id="serviceWarn">
        <h3>서비스 유의사항</h3>
        <h4 class="title">중제목</h4>
        <ul>
            <li>내용</li>
            <li>내용</li>
            <li>내용</li>
        </ul>
    </div>
    <ul class="mIntroHelp">
        <li>도움말</li>
        <li>도움말</li>
    </ul>
'),array(
'desc' => '
    <h3 id="mIntroPartner">[ mIntroPartner ]</h3>
    <ol>
        <li>제공사가 2개이상인 경우 ul구조를 사용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>有2个制造商时，使用ul构造。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mIntroPartner">
        <div class="heading">
            <h4>서비스 제공사</h4>
            <ul class="desc">
                <li>제공사 설명</li>
                <li>제공사 설명</li>
            </ul>
        </div>
        <div class="box">
            <div class="bi">
                <img src="//img.echosting.cafe24.com/ec/optional/img_introduce_brandRegister.gif" alt="INBET" />
                <strong class="company">회사명</strong>
            </div>
            <div class="contact">
                <strong class="manager">서비스담당자</strong>
                <dl class="info">
                    <dt>TEL :</dt>
                    <dd><span class="txtEm">070-4337-0250</span></dd>
                    <dt>FAX :</dt>
                    <dd>0505-223-9064</dd>
                    <dt>E-MAIL :</dt>
                    <dd><a href="mailto:rp_help@realpacking.com" class="txtLink">rp_help@realpacking.com</a></dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="mIntroPartner">
        <div class="heading">
            <h4>서비스 제공사</h4>
            <ul class="desc">
                <li>제공사 설명</li>
                <li>제공사 설명</li>
            </ul>
        </div>
        <ul>
            <li class="box">
                <div class="bi">
                    <img src="//img.echosting.cafe24.com/ec/optional/img_introduce_brandRegister.gif" alt="INBET" />
                    <strong class="company">회사명</strong>
                </div>
                <div class="contact">
                    <strong class="manager">서비스담당자</strong>
                    <dl class="info">
                        <dt>TEL :</dt>
                        <dd><span class="txtEm">070-4337-0250</span></dd>
                        <dt>FAX :</dt>
                        <dd>0505-223-9064</dd>
                        <dt>E-MAIL :</dt>
                        <dd><a href="mailto:rp_help@realpacking.com" class="txtLink">rp_help@realpacking.com</a></dd>
                    </dl>
                </div>
            </li>
            <li class="box">
                <div class="bi">
                    <img src="//img.echosting.cafe24.com/ec/optional/img_introduce_brandRegister.gif" alt="INBET" />
                    <strong class="company">회사명</strong>
                </div>
                <div class="contact">
                    <strong class="manager">서비스담당자</strong>
                    <dl class="info">
                        <dt>TEL :</dt>
                        <dd><span class="txtEm">070-4337-0250</span></dd>
                        <dt>FAX :</dt>
                        <dd>0505-223-9064</dd>
                        <dt>E-MAIL :</dt>
                        <dd><a href="mailto:rp_help@realpacking.com" class="txtLink">rp_help@realpacking.com</a></dd>
                    </dl>
                </div>
            </li>
        </ul>
        <ul class="mIntroHelp">
            <li>도움말</li>
            <li>도움말</li>
        </ul>
    </div>
'),array(
'desc' => '
    <h3 id="mIntroCustomer">[ mIntroCustomer ]</h3>
    <ol>
        <li>grid1~4 class를 사용하여 1~4개까지 나열 가능하다.</li>
    </ol>
    <ol class="zh_CN">
        <li>使用grid1~4 class，可排列1~4个。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <ul class="mIntroCustomer grid1">
        <li class="tel">
            <strong class="title">전화상담문의</strong>
            <div class="info"><strong class="number">0000-0000</strong><span class="time">운영시간 : AM 09:00 ~ PM 06:00 (토, 일, 공휴일 휴무)</span></div>
        </li>
    </ul>
    <ul class="mIntroCustomer grid4">
        <li class="tel">
            <strong class="title">전화상담문의</strong>
            <div class="info"><strong class="number">0000-0000</strong><span class="time">평일 9:00~18:00</span></div>
        </li>
        <li class="inquiry">
            <strong class="title">1:1문의</strong>
            <a href="#none" class="btnDirect">바로가기</a>
        </li>
        <li class="faq">
            <strong class="title">FAQ</strong>
            <a href="#none" class="btnDirect">바로가기</a>
        </li>
        <li class="manual">
            <strong class="title">매뉴얼</strong>
            <ul class="button">
                <li><a href="#none" class="btnDownload gFull">download button1</a></li>
                <li><a href="#none" class="btnDownload gFull">download button2</a></li>
            </ul>
        </li>
    </ul>
    <ul class="mIntroCustomer grid2">
        <li class="tel">
            <strong class="title">전화상담문의</strong>
            <div class="info">
                <strong class="number">0000-0000</strong> <span class="time">/ 평일 9:00~18:00</span>
                <p class="desc">외부지원 파트 (<a href="mailto:biz_support@simplexi.com" class="txtLink">biz_support@simplexi.com</a>)</p>
            </div>
        </li>
        <li class="manual">
            <strong class="title">매뉴얼</strong>
            <ul class="button">
                <li><a href="#none" class="btnDownload">download button</a></li>
            </ul>
        </li>
    </ul>
'),array(
'desc' => '
    <h3 id="mButton">[ mButton ]</h3>
    <ol>
        <li>페이지 내의 버튼 (<a href="/ec/bm/cs/mainnumber/introduce.html" class="txtEm" target="_blank">예시</a>)</li>
    </ol>
    <ol class="zh_CN">
        <li>页面内的按钮(<a href="/ec/bm/cs/mainnumber/introduce.html" class="txtEm" target="_blank">例子</a>)</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mButton gCenter">
        <a href="#none" class="btnConfirm">신청하기</a>
    </div>
'),array(
'desc' => '
    <h3 id="mIntroFaq">[ mIntroFaq ]</h3>
    <!--<ol>
        <li></li>
    </ol>
    <ol class="zh_CN">
        <li></li>
    </ol>
    <ol class="en_US">
        <li></li>
    </ol>-->
', 'html' => '
    <div class="mIntroFaq">
        <ul>
            <li class="selected">
                <div class="question">
                    <strong class="mark" title="질문">Q</strong>질문?
                    <button type="button">펼치기</button>
                </div>
                <div class="answer">
                    <strong class="mark" title="답변">A</strong>
                    <p>답변<br /> 답변</p>
                </div>
            </li>
            <li>
                <div class="question">
                    <strong class="mark" title="질문">Q</strong>질문?
                    <button type="button">펼치기</button>
                </div>
                <div class="answer">
                    <strong class="mark" title="답변">A</strong>
                    <p>답변</p>
                </div>
            </li>
        </ul>
    </div>
'),array(
'desc' => '
    <h3 id="mIntroThumbLink">[ mIntroThumbLink ]</h3>
    <!--<ol>
        <li></li>
    </ol>
    <ol class="zh_CN">
        <li></li>
    </ol>
    <ol class="en_US">
        <li></li>
    </ol>-->
', 'html' => '
    <ul class="mIntroThumbLink">
        <li class="item left"><a href="#none" title="새창 열림" target="_blank"><strong class="title">좌측슬라이드형</strong></a></li>
        <li class="item right"><a href="#none" title="새창 열림" target="_blank"><strong class="title">우측슬라이드형</strong></a></li>
        <li class="item top"><a href="#none" title="새창 열림" target="_blank"><strong class="title">상단형</strong></a></li>
        <li class="item fixed"><a href="#none" title="새창 열림" target="_blank"><strong class="title">고정형</strong></a></li>
        <li class="item slide"><a href="#none" title="새창 열림" target="_blank"><strong class="title">슬라이드형</strong></a></li>
    </ul>
')
);
?>