<?php

// 모듈 전체 제목
$header_name = 'Paginate';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=709459979" target="_blank">사양 확인</a></li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .mPaginate { margin:0 !important; }
          /* typeTotal */
          .mPaginate.typeTotal { margin:0; padding:7px 0; border:1px solid #bbc0c4; text-align:center; background:#f6f6f6; background:-moz-linear-gradient(top, #fdfdfd 3%, #f6f6f6 100%); background:-webkit-linear-gradient(top, #fdfdfd 3%,#f6f6f6 100%); background:linear-gradient(to bottom, #fdfdfd 3%,#f6f6f6 100%); }
          .mPaginate.typeTotal a { display:inline-block; overflow:hidden; width:23px; height:20px; border:1px solid transparent; text-decoration:none; font-size:0; line-height:0; vertical-align:top; }
          .mPaginate.typeTotal a:hover { color:#25baff; border-color:#7cbfec; border-radius:2px; text-decoration:none; box-shadow:inset -1px 1px #f4f9fd; background:#d5e9f6; }
          .mPaginate.typeTotal a span { display:inline-block; position:relative; width:0; height:0; margin-top:5px; border-style:solid; font-size:0; line-height:0; }
          .mPaginate.typeTotal p { display:inline-block; height:22px; margin:0 10px; line-height:22px; color:#5d5d5d; }
          .mPaginate.typeTotal input { width:34px; padding:2px 0 3px; margin:0 2px 0 0; border-style:solid; border-width:1px; border-color:#a7a7a7 #cfcfcf #cfcfcf #a7a7a7; outline:none; vertical-align:top; text-align:center; color:#5d5d5d; }
          .mPaginate.typeTotal .btnPrev span { margin-right:2px; }
          .mPaginate.typeTotal .btnPrev span,
          .mPaginate.typeTotal .btnFirst span { border-width:5px 5px 5px 0; border-color:transparent #5a5a5a transparent transparent; }
          .mPaginate.typeTotal .btnFirst span:before { content:""; position:absolute; top:-4px; left:-2px; width:1px; height:9px; background:#5a5a5a; }
          .mPaginate.typeTotal .btnNext span { margin-left:2px; }
          .mPaginate.typeTotal .btnNext span,
          .mPaginate.typeTotal .btnLast span { border-width:5px 0 5px 5px; border-color:transparent transparent transparent #5a5a5a; }
          .mPaginate.typeTotal .btnLast span:before { content:""; position:absolute; top:-4px; right:-2px; width:1px; height:9px; background:#5a5a5a; }
          .mPaginate.typeTotal .btnPrev:hover span,
          .mPaginate.typeTotal .btnFirst:hover span { border-color:transparent #13476c transparent transparent; }
          .mPaginate.typeTotal .btnNext:hover span,
          .mPaginate.typeTotal .btnLast:hover span { border-color:transparent transparent transparent #13476c; }
          .mPaginate.typeTotal .btnFirst:hover span:before,
          .mPaginate.typeTotal .btnLast:hover span:before{ background-color:#13476c; }
              .mBoard + .mPagenate.typeTotal,
              .mGridTable + .mPagenate.typeTotal { margin:-1px 0 0; }
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
                    <p class="info"><span class="date">yyyy.mm.dd</span><span class="writer">작성자</span></p>
                    <ul class="title">
                        <li><strong>mPaginate typeMore</strong> 더보기 <a href="/solution/erp/recipe/recipe/manage/recipe.html" class="btnLink" target="_blank">레시피 관리</a></li>
                    </ul>
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
    <h3>[mPaginate] 기본형 <span class="zh_CN">标准型</span><span class="en_US">basic type</span></h3>
    <ul>
        <li>화살표 버튼은 이동할 페이지가 있는 경우에만 노출한다. </li>
    </ul>
    <ul class="zh_CN">
        <li>有下一页时，显示箭头按钮。</li>
    </ul>
    <ul class="en_US">
        <li>Expose the arrow shape button if there is a page to be moved. </li>
    </ul>
', 'html' => '
    <div class="section">
        <div class="mPaginate">
            <a href="#none" class="prev">이전 10페이지</a>
            <ol>
                <li><a href="#none">1</a></li>
                <li><a href="#none">2</a></li>
                <li><strong title="현재페이지">3</strong></li>
                <li><a href="#none">4</a></li>
                <li><a href="#none">5</a></li>
                <li><a href="#none">6</a></li>
                <li><a href="#none">7</a></li>
                <li><a href="#none">8</a></li>
                <li><a href="#none">9</a></li>
                <li><a href="#none">10</a></li>
            </ol>
            <a href="#none" class="next">다음 10페이지</a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mPaginate] </h3>
    <ul>
        <li>검색결과가 없거나, 1페이지만 있는 경우 </li>
    </ul>
    <ul class="zh_CN">
        <li>无搜索结果或只有一个页面的情况</li>
    </ul>
    <ul class="en_US">
        <li>In case there is no search result, or only one page is shown.</li>
    </ul>
', 'html' => '
    <div class="section">
        <div class="mPaginate">
            <ol>
                <li><strong title="현재페이지">1</strong></li>
            </ol>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mPaginate] </h3>
    <ul>
        <li>10페이지 미만으로 화살표로 이동할 페이지가 없는 경우</li>
    </ul>
    <ul class="zh_CN">
        <li>未满10页，无需用箭头按钮跳转的情况</li>
    </ul>
    <ul class="en_US">
        <li>In case it is below 10 pages long so no further page is shown to be moved.</li>
    </ul>
', 'html' => '
    <div class="section">
        <div class="mPaginate">
            <ol>
                <li><a href="#none">1</a></li>
                <li><a href="#none">2</a></li>
                <li><strong title="현재페이지">3</strong></li>
                <li><a href="#none">4</a></li>
                <li><a href="#none">5</a></li>
                <li><a href="#none">6</a></li>
            </ol>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mPaginate]</h3>
    <ul>
        <li> 첫 페이지, 마지막 페이지 이동버튼이 필요한 경우</li>
        <li>일반적으로 사용되지 않으며, 기획서에 추가 요청이 있는 경우에만 적용한다.</li>
    </ul>
    <ul class="zh_CN">
        <li>需要首页、最后一页移动按钮的情况</li>
        <li>一般不使用，只有在计划书中有附加要求时适用。</li>
    </ul>
    <ul class="en_US">
        <li>In case it is needed to move to the last page or the first.</li>
        <li>It is not generally used, and apply it if additional request is made from the plan.</li>
    </ul>
', 'html' => '
    <div class="section">
        <div class="mPaginate">
            <a href="#none" class="first">첫 페이지</a>
            <a href="#none" class="prev">이전 10페이지</a>
            <ol>
                <li><a href="#none">1</a></li>
                <li><a href="#none">2</a></li>
                <li><strong title="현재페이지">3</strong></li>
                <li><a href="#none">4</a></li>
                <li><a href="#none">5</a></li>
                <li><a href="#none">6</a></li>
                <li><a href="#none">7</a></li>
                <li><a href="#none">8</a></li>
                <li><a href="#none">9</a></li>
                <li><a href="#none">10</a></li>
            </ol>
            <a href="#none" class="next">다음 10페이지</a>
            <a href="#none" class="last">마지막 페이지</a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mPaginate + typeTotal]</h3>
', 'html' => '
    <div class="section">
        <div class="mPaginate typeTotal">
            <a href="#none" class="btnFirst"><span>처음 페이지</span></a>
            <a href="#none" class="btnPrev"><span>이전 페이지</span></a>
            <p><input type="text" title="현재 페이지" value="1" /> /10</p>
            <a href="#none" class="btnNext"><span>다음 페이지</span></a>
            <a href="#none" class="btnLast"><span>마지막 페이지</span></a>
        </div>
    </div>
'), array(
  'desc' => '
      <h3>[mPaginate + typeMore]</h3>
  ', 'html' => '
      <div class="section">
          <div class="mPaginate typeMore">
              <a href="#none" class="button"><span>더보기<em class="icoLower"></em></span></a>
          </div>
      </div>
  ')
);
?>