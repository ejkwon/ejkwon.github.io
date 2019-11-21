<?php

// 모듈 전체 제목
$header_name = 'mBubble';
// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>mBubble을 제어하는 js는 개발에서 관리되며, 작업시 따로 스크립트를 추가할 필요는 없다.</li>
        <li>기본형에 button과 조합이 가능하고 box안에 txtInfo를 사용할수 있다.</li>
        <li>EC솔루션의 상품관리메뉴에서 bubble 영역안에 썸네일을 추가할 수 있으며, <a href="/suio/include/layout.php?MODULE=color_picker" target="_blank">[Color Picker]</a>나 <a href="/suio/include/layout.php?MODULE=color_picker" target="_blank">[mLayer]</a>를 함께 사용할 수 있다. </li>
        <li>단순 버튼으로만 사용되는 btnBubble과 혼선되어 사용하지 않는다. <a href="/suio/include/layout.php?MODULE=btn" target="_blank"><button class="btnBubble" type="button"><span>보기 <em class="icoDel"></em></span></button></a></li>
        <li>버튼 수정 불가한 경우, disabled 사용하여 비활성화 처리한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>控制mBubble的js由开发部进行管理，编辑时无需添加javascript。</li>
        <li>基本型可与button组合使用，可在box内使用txtInfo。</li>
        <li>EC Solution商品管理菜单中的bubble区域内可添加缩略图，并可与 <a href="/suio/include/layout.php?MODULE=color_picker" target="_blank">[Color Picker]</a>、<a href="/suio/include/layout.php?MODULE=color_picker" target="_blank">[mLayer]</a>一同使用。</li>
        <li>不可与单纯按钮功能的btnBubble一并使用。 <a href="/suio/include/layout.php?MODULE=btn" target="_blank"><button class="btnBubble" type="button"><span>보기 <em class="icoDel"></em></span></button></a></li>
        <li>无法修改按钮时，使用disabled进行不激活处理。</li>
    </ol>
    <ol class="en_US">
        <li>The js controlling the mBubble is managed in the development, and there is no need of adding script individually when working.</li>
        <li>The button can be combined with the default type and use the txtInfo in the box.</li>
        <li>It is possible to add a thumbnail in the bubble area from the product management menu of EC solution. <a href="/suio/include/layout.php?MODULE=color_picker" target="_blank">[Color Picker]</a>나 <a href="/suio/include/layout.php?MODULE=color_picker" target="_blank">[mLayer]</a>를 함께 사용할 수 있다. </li>
        <li>Do not get confused with the btnBubble that is used as a simple button. <a href="/suio/include/layout.php?MODULE=btn" target="_blank"><button class="btnBubble" type="button"><span>View <em class="icoDel"></em></span></button></a></li>
        <li>(번역필요)</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">

/* 옵션세트 관리, 스타일 설정 버튼 */
.btnOption, .btnStyle { display:inline-block; overflow:hidden; width:20px; height:19px; font-size:0; line-height:0; vertical-align:middle; white-space:nowrap; background-image:url("//img.echosting.cafe24.com/ec/product/sfix_btn.png"); background-repeat:no-repeat; *margin:0 2px; }
.btnOption span, .btnStyle span { visibility:hidden; }
.btnOption.lv2Minus { background-position:-90px -29px; }

  /* 해시태그 */
    .mBubble.typeHash ul li { border-color:#a0eaf7; background-color:#e5fcff; }
    .mBubble.typeHash ul li:hover,
    .mBubble.typeHash ul li.selected { border-color:#35c4dd; background-color:#b5ecf3; }
    .mBubble.typeHash ul li .fText, .mBubble.typeHash ul li .fText:focus { color:#1b87d4; }
    .mBubble.typeHash ul li .fText.txtLight, .mBubble.typeHash ul li .fText.txtLight:focus { color:#898989; }

/* 리뷰글 상세 */
  /* 해시태그 링크 버튼 */
    .btnHash { color:#1c1c1c; }
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
                    <p class="info"><span class="date">2017.12.08</span><span class="writer">김은경</span></p>
                    <p class="title"><strong>[mBubbles]</strong> mBubbles > box > p.txtInfo 추가 <a href="/smartAdmin/product/category/setting.html" class="btnLink" target="_blank">쇼핑큐레이션 해시태그 설정</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.04.10</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[mBubbles]</strong> mBubbles 추가 <a href="/pdm/mes/erp/common/template.html" class="btnLink" target="_blank">생산관리 시스템</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.09.23</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[mBubble circle]</strong> thumb 원형타입 추가 <a href="/smartAdmin/shop/operate/search.html" class="btnLink" target="_blank">상품검색조건 설정</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.04.19</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[bubbleArea > mAutoDrop]</strong> 자동완성 드롭다운 메뉴 추가 <a href="/smartAdmin/product/sale/trend/setting.html" class="btnLink" target="_blank">트렌드 관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.08.16</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[mBubble disabled]</strong> 비활성화 추가 <a href="/smartAdmin/product/category/setting.html" class="btnLink" target="_blank">상품분류 관리</a></p>
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
    <h3>[mBubble]</h3>
', 'html' => '
    <div class="mBoard">
       <table border="1" summary="">
           <caption>옵션세트</caption>
           <colgroup>
               <col style="width:150px;" />
               <col style="width:150px;" />
               <col style="width:auto;" />
           </colgroup>
           <tbody id="eManualOptionTbody">
               <tr>
                   <th scope="row">기본형</th>
                   <th scope="row"><span class="zh_CN">基本样式</span><span class="en_US">(번역필요)</span></th>
                   <td>
                       <div class="mBubble eOptionBodyUI">
                           <div class="box">
                               <ul class="eOptionValueGroup">
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText txtLight" style="width:65px;" value="예시) 블랙" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue selected" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:34px;" value="옵션값" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:34px;" value="옵션값" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:65px;" value="옵션값입니다" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                               </ul>
                               <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                           </div>
                       </div>

                       <p class="mList gTriple">disabled 비활성화 처리</p>
                       <div class="mBubble disabled eOptionBodyUI">
                           <div class="box">
                               <ul class="eOptionValueGroup">
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText txtLight" style="width:65px;" value="예시) 블랙" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue selected" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:34px;" value="옵션값" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:34px;" value="옵션값" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:65px;" value="옵션값입니다" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                               </ul>
                               <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                               <div class="dimmed"></div>
                           </div>
                       </div>
                   </td>
               </tr>
               <tr>
                   <th scope="row">스크롤형<br /> .box &gt; .gScroll</th>
                   <th scope="row"><span class="zh_CN">滚动条型</span><span class="en_US">(번역필요)</span><br /> .box &gt .gScroll</th>
                   <td>
                       <div class="mBubble eOptionBodyUI">
                           <div class="box">
                               <div class="gScroll">
                               <ul class="eOptionValueGroup">
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                               </ul>
                               <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                               </div>
                           </div>
                       </div>

                       <p class="mList gTriple">disabled 비활성화 처리</p>
                       <div class="mBubble disabled eOptionBodyUI">
                           <div class="box">
                               <div class="gScroll">
                                   <ul class="eOptionValueGroup">
                                       <li class="eOptionValue" rel="0">
                                           <span class="eBox boxWrap">
                                               <span class="eTextBox textBox">
                                                   <span class="eTextUpdater">
                                                       <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                                   </span>
                                               </span>
                                               <span class="eDel btnDelete">삭제</span>
                                           </span>
                                       </li>
                                       <li class="eOptionValue" rel="0">
                                           <span class="eBox boxWrap">
                                               <span class="eTextBox textBox">
                                                   <span class="eTextUpdater">
                                                       <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                                   </span>
                                               </span>
                                               <span class="eDel btnDelete">삭제</span>
                                           </span>
                                       </li>
                                       <li class="eOptionValue" rel="0">
                                           <span class="eBox boxWrap">
                                               <span class="eTextBox textBox">
                                                   <span class="eTextUpdater">
                                                       <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                                   </span>
                                               </span>
                                               <span class="eDel btnDelete">삭제</span>
                                           </span>
                                       </li>
                                       <li class="eOptionValue" rel="0">
                                           <span class="eBox boxWrap">
                                               <span class="eTextBox textBox">
                                                   <span class="eTextUpdater">
                                                       <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                                   </span>
                                               </span>
                                               <span class="eDel btnDelete">삭제</span>
                                           </span>
                                       </li>
                                   </ul>
                                   <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                               </div>
                               <div class="dimmed"></div>
                           </div>
                       </div>
                   </td>
               </tr>
               <tr>
                   <th scope="row">조합형<br /> .box + .button</th>
                   <th scope="row"><span class="zh_CN">组合型</span><span class="en_US">(번역필요)</span><br /> .box + .button</th>
                   <td>
                       <div class="mBubble eOptionBodyUI">
                           <div class="box">
                               <ul class="eOptionValueGroup">
                                   <li class="eOptionValue" rel="0">
                                       <a href="#layerOptionStyle" class="thumb eLayerClick"><img src="//img.echosting.cafe24.com/ec/product/ico_no_picker.gif" alt="" /></a><!-- 참고 : 기본이미지 -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <span class="fText" style="width:57px;">옵션값 보기</span>
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <a href="#layerOptionStyle" class="thumb eLayerClick" style="background-color:#ff0000"></a><!-- 참고 : 컬러값이 들어갈경우 인라인으로 background처리 -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:57px;" value="옵션값 수정" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue selected" rel="0">
                                       <a href="#layerOptionStyle" class="thumb eLayerClick"><img src="/img.echosting.cafe24.com/ec/product/@img_option_thumb.jpg" alt="" /></a><!-- 참고 : 사용자이미지가 들어갈 경우 img 태그로 넣어준다. -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:57px;" value="옵션값 선택" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:34px;" value="옵션값" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:34px;" value="옵션값" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:34px;" value="옵션값" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <!-- 참고: 원형 디자인은 circle 클래스를 추가한다. -->
                                   <li class="eOptionValue" rel="0">
                                       <a href="#layerOptionStyle" class="thumb circle eLayerClick"><img src="//img.echosting.cafe24.com/ec/product/ico_no_picker.gif" alt="" /></a><!-- 참고 : 기본이미지 -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <span class="fText" style="width:57px;">옵션값 보기</span>
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <a href="#layerOptionStyle" class="thumb circle eLayerClick" style="background-color:#ff0000"></a><!-- 참고 : 컬러값이 들어갈경우 인라인으로 background처리 -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:57px;" value="옵션값 수정" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue selected" rel="0">
                                       <a href="#layerOptionStyle" class="thumb circle eLayerClick"><img src="/img.echosting.cafe24.com/ec/product/@img_option_thumb.jpg" alt="" /></a><!-- 참고 : 사용자이미지가 들어갈 경우 img 태그로 넣어준다. -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:57px;" value="옵션값 선택" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li><!-- //참고 -->
                               </ul>
                               <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                               <p class="txtInfo">세미콜론(;) 또는 Enter, Tab키를 통해 옵션값을 연속적으로 입력하세요.</p>
                           </div>
                           <div class="button">
                               <button type="button" class="btnOption lv2Minus vaBottom"><span>삭제</span></button>
                           </div>
                       </div>

                       <p class="mList gTriple">disabled 비활성화 처리</p>
                       <div class="mBubble disabled eOptionBodyUI">
                           <div class="box">
                               <ul class="eOptionValueGroup">
                                   <li class="eOptionValue" rel="0">
                                       <a href="#layerOptionStyle" class="thumb eLayerClick"><img src="//img.echosting.cafe24.com/ec/product/ico_no_picker.gif" alt="" /></a><!-- 참고 : 기본이미지 -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <span class="fText" style="width:57px;">옵션값 보기</span>
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <a href="#layerOptionStyle" class="thumb eLayerClick" style="background-color:#ff0000"></a><!-- 참고 : 컬러값이 들어갈경우 인라인으로 background처리 -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:57px;" value="옵션값 수정" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue selected" rel="0">
                                       <a href="#layerOptionStyle" class="thumb eLayerClick"><img src="/img.echosting.cafe24.com/ec/product/@img_option_thumb.jpg" alt="" /></a><!-- 참고 : 사용자이미지가 들어갈 경우 img 태그로 넣어준다. -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:57px;" value="옵션값 선택" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:34px;" value="옵션값" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                               </ul>
                               <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                               <p class="txtInfo">세미콜론(;) 또는 Enter, Tab키를 통해 옵션값을 연속적으로 입력하세요.</p>
                               <div class="dimmed"></div>
                           </div>
                           <div class="button">
                               <button type="button" class="btnOption lv2Minus vaBottom"><span>삭제</span></button>
                           </div>
                       </div>
                   </td>
               </tr>
               <tr>
                   <th scope="row">조합형 스크롤<br /> .box &gt; .gScroll + .button</th>
                   <th scope="row"><span class="zh_CN">组合型 滚动条</span><span class="en_US">(번역필요)</span><br /> .box &gt; .gScroll + .button</th>
                   <td>
                       <div class="mBubble eOptionBodyUI">
                           <div class="box">
                                <div class="gScroll">
                                <ul class="eOptionValueGroup">
                                    <li class="eOptionValue" rel="0">
                                       <a href="#layerOptionStyle" class="thumb eLayerClick"><img src="//img.echosting.cafe24.com/ec/product/ico_no_picker.gif" alt="" /></a><!-- 참고 : 기본이미지 -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <span class="fText" style="width:57px;">옵션값 보기</span>
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <a href="#layerOptionStyle" class="thumb eLayerClick" style="background-color:#ff0000"></a><!-- 참고 : 컬러값이 들어갈경우 인라인으로 background처리 -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue selected" rel="0">
                                       <a href="#layerOptionStyle" class="thumb eLayerClick"><img src="/img.echosting.cafe24.com/ec/product/@img_option_thumb.jpg" alt="" /></a><!-- 참고 : 사용자이미지가 들어갈 경우 img 태그로 넣어준다. -->
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                               </ul>
                               </div>
                               <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                               <p class="txtInfo">세미콜론(;) 또는 Enter, Tab키를 통해 옵션값을 연속적으로 입력하세요.</p>
                           </div>
                           <div class="button">
                               <button type="button" class="btnOption lv2Minus vaBottom"><span>삭제</span></button>
                           </div>
                       </div>

                       <p class="mList gTriple">disabled 비활성화 처리</p>
                       <div class="mBubble disabled eOptionBodyUI">
                           <div class="box">
                                <div class="gScroll">
                                    <ul class="eOptionValueGroup">
                                        <li class="eOptionValue" rel="0">
                                           <a href="#layerOptionStyle" class="thumb eLayerClick"><img src="//img.echosting.cafe24.com/ec/product/ico_no_picker.gif" alt="" /></a><!-- 참고 : 기본이미지 -->
                                           <span class="eBox boxWrap">
                                               <span class="eTextBox textBox">
                                                   <span class="eTextUpdater">
                                                       <span class="fText" style="width:57px;">옵션값 보기</span>
                                                   </span>
                                               </span>
                                               <span class="eDel btnDelete">삭제</span>
                                           </span>
                                       </li>
                                       <li class="eOptionValue" rel="0">
                                           <a href="#layerOptionStyle" class="thumb eLayerClick" style="background-color:#ff0000"></a><!-- 참고 : 컬러값이 들어갈경우 인라인으로 background처리 -->
                                           <span class="eBox boxWrap">
                                               <span class="eTextBox textBox">
                                                   <span class="eTextUpdater">
                                                       <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                                   </span>
                                               </span>
                                               <span class="eDel btnDelete">삭제</span>
                                           </span>
                                       </li>
                                       <li class="eOptionValue selected" rel="0">
                                           <a href="#layerOptionStyle" class="thumb eLayerClick"><img src="/img.echosting.cafe24.com/ec/product/@img_option_thumb.jpg" alt="" /></a><!-- 참고 : 사용자이미지가 들어갈 경우 img 태그로 넣어준다. -->
                                           <span class="eBox boxWrap">
                                               <span class="eTextBox textBox">
                                                   <span class="eTextUpdater">
                                                       <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                                   </span>
                                               </span>
                                               <span class="eDel btnDelete">삭제</span>
                                           </span>
                                       </li>
                                       <li class="eOptionValue" rel="0">
                                           <span class="eBox boxWrap">
                                               <span class="eTextBox textBox">
                                                   <span class="eTextUpdater">
                                                       <input type="text" class="eManualOptionValue fText" style="width:700px;" value="스크롤형을 재현을 위한 긴글자 처리입니다." />
                                                   </span>
                                               </span>
                                               <span class="eDel btnDelete">삭제</span>
                                           </span>
                                       </li>
                                   </ul>
                               </div>
                               <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                               <p class="txtInfo">세미콜론(;) 또는 Enter, Tab키를 통해 옵션값을 연속적으로 입력하세요.</p>
                               <div class="dimmed"></div>
                           </div>
                           <div class="button">
                               <button type="button" class="btnOption lv2Minus vaBottom"><span>삭제</span></button>
                           </div>
                       </div>
                   </td>
               </tr>
           </tbody>
       </table>
    </div>
'),
array(
'desc' => '
    <h3>[mBubble + typeHash]</h3>
    <ol>
        <li>typeHash는 게시판관리(board.css)만 사용된다.</li>
    </ol>
    <ol class="zh_CN">
        <li>typeHash只用于留言板管理(board.css)。</li>
    </ol>
    <ol class="en_US">
        <li>The typeHash is used for the notice board management only (board.css)</li>
    </ol>
', 'html' => '
    <div class="mBoard">
       <table border="1" summary="">
           <caption>옵션세트</caption>
           <colgroup>
               <col style="width:150px;" />
               <col style="width:150px;" />
               <col style="width:auto;" />
           </colgroup>
           <tbody>
               <tr>
                   <th scope="row">기본형</th>
                   <th scope="row"><span class="zh_CN">基本样式</span><span class="en_US">(번역필요)</span></th>
                   <td>
                       <div class="mBubble typeHash eOptionBodyUI">
                           <div class="box">
                               <ul class="eOptionValueGroup">
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText txtLight" style="width:65px;" value="예시) 블랙" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue selected" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:34px;" value="옵션값" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:34px;" value="옵션값" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                                   <li class="eOptionValue" rel="0">
                                       <span class="eBox boxWrap">
                                           <span class="eTextBox textBox">
                                               <span class="eTextUpdater">
                                                   <input type="text" class="eManualOptionValue fText" style="width:65px;" value="옵션값입니다" />
                                               </span>
                                           </span>
                                           <span class="eDel btnDelete">삭제</span>
                                       </span>
                                   </li>
                               </ul>
                               <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                           </div>
                       </div>
                   </td>
               </tr>
           </tbody>
       </table>
    </div>
'),
array(
'desc' => '
    <h3>[bubbleArea > mAutoDrop]</h3>
    <ol>
        <li>입력시 자동완성 기능의 드롭다운 메뉴가 필요한 경우, bubbleArea 클래스로 감싸고 mBubble 아래에 mAutoDrop 을 추가한다.</li>
        <li>드롭다운 메뉴의 액션 처리시, bubbleArea 클래스에 eAuto 클래스를 추가/삭제한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>输入时，需要可以自动完成的下拉菜单时，用bubbleArea class套住，并在mBubble下方添加mAutoDrop。</li>
        <li>开始处理下拉菜单时，在bubbleArea class中添加/删除eAuto class。</li>
    </ol>
    <ol class="en_US">
        <li>When drop down menu is needed with an auto complete function, cover it with the bubbleArea class and add the mAutoDrop under the mBubble.</li>
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <!-- 테스트용 : 개발시 삭제 -->
    <script>
        $(document).ready(function(){
            $(".bubbleArea .mBubble .eManualOptionValue").keydown(function(){
                $(this).parents(".bubbleArea").addClass("eAuto");
            });
            $(".bubbleArea .mBubble .eManualOptionValue").keyup(function(){
                $(this).parents(".bubbleArea").addClass("eAuto");
            });
            $(".bubbleArea .mAutoDrop a").click(function(e){
                $(this).parents(".bubbleArea").removeClass("eAuto");
            });
        });
    </script>

    <div class="mBoard">
        <table border="1" summary="">
            <caption>옵션세트</caption>
            <colgroup>
                <col style="width:150px;" />
                <col style="width:150px;" />
                <col style="width:auto;" />
            </colgroup>
            <tbody>
                <tr>
                    <th scope="row">기본형</th>
                    <th scope="row"><span class="zh_CN">基本样式</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="bubbleArea eAuto">
                            <div class="mBubble eOptionBodyUI">
                                <div class="box">
                                    <ul class="eOptionValueGroup">
                                        <li class="eOptionValue selected" rel="0">
                                            <span class="eBox boxWrap">
                                                <span class="eTextBox textBox">
                                                    <span class="eTextUpdater">
                                                        <input type="text" class="eManualOptionValue fText" style="width:55px;" value="#태그값" />
                                                    </span>
                                                </span>
                                                <span class="eDel btnDelete">삭제</span>
                                            </span>
                                        </li>
                                        <li class="eOptionValue" rel="0">
                                            <span class="eBox boxWrap">
                                                <span class="eTextBox textBox">
                                                    <span class="eTextUpdater">
                                                        <input type="text" class="eManualOptionValue fText txtLight" style="width:55px;" value="예시) 블랙" />
                                                    </span>
                                                </span>
                                                <span class="eDel btnDelete">삭제</span>
                                            </span>
                                        </li>
                                    </ul>
                                    <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                                    <p class="txtInfo">쉼표(,) 또는 Enter, Tab, Space 키를 통해 태그를 연속적으로 입력하세요.</p>
                                </div>
                            </div>
                            <ul class="mAutoDrop">
                                <li><a href="#none">태그값</a></li>
                                <li><a href="#none">태그값 태그값</a></li>
                                <li><a href="#none">태그값1</a></li>
                                <li><a href="#none">태그값 태그값2</a></li>
                            </ul>
                        </div>

                        <p class="mList gTriple">disabled 비활성화 처리</p>
                        <div class="bubbleArea eAuto">
                            <div class="mBubble disabled eOptionBodyUI">
                                <div class="box">
                                    <ul class="eOptionValueGroup">
                                        <li class="eOptionValue selected" rel="0">
                                            <span class="eBox boxWrap">
                                                <span class="eTextBox textBox">
                                                    <span class="eTextUpdater">
                                                        <input type="text" class="eManualOptionValue fText" style="width:55px;" value="#태그값" />
                                                    </span>
                                                </span>
                                                <span class="eDel btnDelete">삭제</span>
                                            </span>
                                        </li>
                                        <li class="eOptionValue" rel="0">
                                            <span class="eBox boxWrap">
                                                <span class="eTextBox textBox">
                                                    <span class="eTextUpdater">
                                                        <input type="text" class="eManualOptionValue fText txtLight" style="width:75px;" value="#태그값입니다" />
                                                    </span>
                                                </span>
                                                <span class="eDel btnDelete">삭제</span>
                                            </span>
                                        </li>
                                    </ul>
                                    <input class="eOptionValueCtrl optionValueCtrl" type="text" />
                                    <p class="txtInfo">쉼표(,) 또는 Enter, Tab, Space 키를 통해 태그를 연속적으로 입력하세요.</p>
                                    <div class="dimmed"></div>
                                </div>
                            </div>
                            <ul class="mAutoDrop">
                                <li><a href="#none">태그값</a></li>
                                <li><a href="#none">태그값 태그값</a></li>
                                <li><a href="#none">태그값1</a></li>
                                <li><a href="#none">태그값 태그값2</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),
array(
'desc' => '
    <h3>[mBobbles]</h3>
    <ol>
        <li></li>
    </ol>
    <ol class="zh_CN">
        <li>번역필요</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>옵션세트</caption>
            <colgroup>
                <col style="width:150px;" />
                <col style="width:150px;" />
                <col style="width:auto;" />
            </colgroup>
            <tbody>
                <tr>
                    <th scope="row">기본형<br />mBobbles</th>
                    <th scope="row"><span class="zh_CN">基本样式</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="mBubbles">
                            <div class="box">
                                <ul>
                                    <li><span class="text">글자</span></li>
                                    <li><span class="text">글자</span></li>
                                    <li><span class="text">글자+삭제버튼</span><button type="button" class="btnDelete">삭제</button></li>
                                    <li><input type="text" class="text" placeholder="예시) 힌트" style="width:53px;" /></li>
                                    <li><input type="text" class="text" value="글자입력 가능" style="width:70px;" /></li>
                                    <li><input type="text" class="text" value="글자입력 가능" style="width:70px;" /><button type="button" class="btnDelete">삭제</button></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">이동형<br />mBobbles + typeMove</th>
                    <th scope="row"><span class="zh_CN">可移动型</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="mBubbles typeMove">
                            <div class="box">
                                <ul>
                                    <li><span class="text">글자</span></li>
                                    <li><span class="text">글자</span></li>
                                    <li><span class="text">글자+삭제버튼</span><button type="button" class="btnDelete">삭제</button></li>
                                    <li><input type="text" class="text" placeholder="예시) 힌트" style="width:53px;" /></li>
                                    <li><input type="text" class="text" value="글자입력 가능" style="width:70px;" /></li>
                                    <li><input type="text" class="text" value="글자입력 가능" style="width:70px;" /><button type="button" class="btnDelete">삭제</button></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">비활성화<br />mBobbles + disabled</th>
                    <th scope="row"><span class="zh_CN">禁用型</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="mBubbles disabled">
                            <div class="box">
                                <ul>
                                    <li><span class="text">글자</span></li>
                                    <li><span class="text">글자</span></li>
                                    <li><span class="text">글자+삭제버튼</span><button type="button" class="btnDelete">삭제</button></li>
                                    <li><input type="text" class="text" value="글자입력 불가" disabled="disabled" style="width:70px;" /></li>
                                    <li><input type="text" class="text" value="글자입력 불가" disabled="disabled" style="width:70px;" /><button type="button" class="btnDelete">삭제</button></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">드롭다운형<br />mBobbles + typeDrop</th>
                    <th scope="row"><span class="zh_CN">下拉式型</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="mBubbles typeDrop eAuto">
                            <div class="box">
                                <ul>
                                    <li class="selected"><span class="text">글자</span></li>
                                    <li><span class="text">글자</span></li>
                                    <li><span class="text">글자+삭제버튼</span><button type="button" class="btnDelete">삭제</button></li>
                                    <li><input type="text" class="text" placeholder="예시) 힌트" style="width:53px;" /></li>
                                    <li><input type="text" class="text" value="글자입력 가능" style="width:70px;" /></li>
                                    <li><input type="text" class="text" value="글자입력 가능" style="width:70px;" /><button type="button" class="btnDelete">삭제</button></li>
                                </ul>
                                 <p class="txtInfo">세미콜론(;) 또는 Enter, Tab키를 통해 옵션값을 연속적으로 입력하세요.</p>
                            </div>
                            <ul class="mAutoDrop">
                                <li><a href="#none">태그값</a></li>
                                <li><a href="#none">태그값 태그값</a></li>
                                <li><a href="#none">태그값1</a></li>
                                <li><a href="#none">태그값 태그값2</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')

);
?>