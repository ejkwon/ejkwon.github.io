<?php

// 모듈 전체 제목
$header_name = 'mButton : 버튼/아이콘';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <link rel="stylesheet" type="text/css" href="/css/ec/order.css" media="all" />
    <style type="text/css">
        .mTooltip[class*="typeCheckout"] { margin:0 auto; }
    </style>
    <style type="text/css">
        /* 프리뷰를 위한 CSS 제거 */
        .mTitle { padding-top:0 !important; }
        .section { margin-bottom:0 !important; }
        .btnGeneral, .btnStrong { outline:0; }

        .mBoard.typeHalf { float:right; width:49%; }
        .mBoard.typeHalf:first-child { float:left; }
        .samplePreview { overflow:hidden; }

        .mBox { margin:0 0 10px; }

        td + td .btnLink:before { display:none; }
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
                    <p class="info"><span class="date">2017.10.10</span><span class="writer">김은경</span></p>
                    <p class="title"><strong>[btnInfo]</strong> 버튼 추가 <a href="/ec/product/curation/setting_end.html" class="btnLink" target="_blank">쇼핑 큐레이션 설정</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.09.25</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[icoHelp]</strong> 아이콘 추가 <a href="/ec/community/submain.html" class="btnLink" target="_blank">게시판관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.08.31</span><span class="writer">조혜민</span></p>
                    <p class="title"><strong>[icoAssign][icoAssignNot][icoAssignAuto]</strong> 아이콘형 버튼 추가 <a href="/wms/order/confirm/unassign.html" class="btnLink" target="_blank">미할당주문나누기</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.08.28</span><span class="writer">조혜민</span></p>
                    <p class="title"><strong>[icoURL]</strong> 아이콘형 버튼 추가 <a href="/ec/community/review/list_all.html" class="btnLink" target="_blank">리뷰글관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.07.06</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoDelivertyPart]</strong> 텍스트형 아이콘 추가 <a hre="/wms/cs/popup/cs.html" class="btnLink" target="_blank">고객CS관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.05.04</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoHolding][icoHandling]</strong> 텍스트형 아이콘 추가 <a href="/wms/cs/popup/cs.html" class="btnLink" target="_blank">고객CS관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.05.02</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoStateRegister][icoStateReceipt][icoStateInvoice][icoStateOut]</strong> 텍스트형 아이콘 추가 <a href="/wms/cs/popup/cs.html" class="btnLink" target="_blank">고객CS관리</a></p>
                </li>
                 <li>
                    <p class="info"><span class="date">2017.03.29</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[icoPrev]</strong> 아이콘 추가 </p>
                </li>
                 <li>
                    <p class="info"><span class="date">2017.03.20</span><span class="writer">김은경</span></p>
                    <p class="title"><strong>[gSorting]</strong> sorting 버튼 추가 </p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.03.13</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[icoLifetime]</strong> 텍스트형 아이콘 추가 <a href="/smartAdmin/member/manage/profile.html" class="btnLink" target="_blank">회원정보 조회</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.01.24</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[icoResize]</strong> 버튼내 아이콘 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.01.24</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoBundleBan, icoRegisterFail]</strong> 텍스트형 아이콘 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.01.06</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoInvoiceFail, icoNumFail]</strong> 텍스트형 아이콘 추가 <a href="/smartAdmin/order/list/delivery/delivery.html" class="btnLink" target="_blank">배송중 관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.10.11</span><span class="writer">김도희</span></p>
                    <p class="title"><strong>[icoMarketProduct]</strong> 텍스트형 아이콘 추가 <a href="/smartAdmin/order/list/complete/complete.html" class="btnLink" target="_blank">배송완료 조회</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.09.13</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[icoStoreRegister, icoSeparatePrint]</strong> 텍스트형 아이콘 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.09.13</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[mTooltip.typeMarketFail]</strong> 텍스트형 아이콘 .mTooltip.typeMarketFail 추가 <a href="/smartAdmin/order/popup/detail/detail.html" class="btnLink" target="_blank">주문상세정보</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.09.13</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoMarketFail]</strong> 텍스트형 아이콘 icoMarketFail 추가 <a href="/smartAdmin/order/list/market/market.html" class="btnLink" target="_blank">마켓발주관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.09.08</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoUpper, icoLower]</strong> 시스템 버튼 내부 아이콘 icoUpper, icoLower 추가 <a href="/stock/popup/order/cs_tie_add.html" class="btnLink" target="_blank">묶음 추가</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.09.08</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoExcRegister mini]</strong> 텍스트형 아이콘 icoExcRegister mini 추가 <a href="/stock/popup/order/cs.html" class="btnLink" target="_blank">고객CS관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.09.08</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoEachRegister mini]</strong> 텍스트형 아이콘 icoEachRegister mini 추가 <a href="/stock/popup/order/cs.html" class="btnLink" target="_blank">고객CS관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.09.08</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoBlacklist mini]</strong> 텍스트형 아이콘 icoBlacklist mini 추가 <a href="/stock/popup/order/cs.html" class="btnLink" target="_blank">고객CS관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.08.22</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[icoRemindMe]</strong> 텍스트형 아이콘 icoRemindMe 추가 <a href="/smartAdmin/order/popup/detail/detail.html" class="btnLink" target="_blank">주문상세정보</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.06.27</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[icoInfo]</strong> 가이드형 아이콘 icoInfo 추가 <a href="/smartAdmin/promotion/coupon/service/make.html" class="btnLink" target="_blank">쿠폰만들기</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.06.15</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoDelete]</strong> 아이콘형 버튼 icoDelete추가 <a href="/smartAdmin/product/registration/product/register.html" class="btnLink" target="_blank">상품등록</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.06.15</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoDrag]</strong> 이미지형 아이콘 드래그 추가 <a href="/smartAdmin/product/registration/product/register.html" class="btnLink" target="_blank">상품등록</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.06.15</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoReverse]</strong> 버튼내 아이콘 역순정렬 추가 <a href="/smartAdmin/product/registration/product/register.html" class="btnLink" target="_blank">상품등록</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.05.25</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[icoAddressChange]</strong> btnCtrl에 icoLayer추가 <a href="/smartAdmin/product/registration/simple/register.html" class="btnLink" target="_blank">간단등록</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.04.28</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[icoAddressChange]</strong> 주소변경 아이콘 추가 <a href="/stock/outgoing/order/list.html" class="btnLink" target="_blank">주문관리(스마트재고)</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.03.24</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoOrder]</strong> 주문 아이콘 추가 <a href="/smartAdmin/order/popup/detail/detail.html" class="btnLink" target="_blank">주문상세정보</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.03.24</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[icoSalesFail]</strong> 매출확인실패 아이콘 추가 <a href="/smartAdmin/order/list/prepare/number.html" class="btnLink" target="_blank">배송준비중 관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.03.03</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[icoSendFail]</strong> 전송실패 아이콘 추가 <a href="/smartAdmin/order/list/delivery/delivery.html" class="btnLink" target="_blank">배송중 관리</a></p>
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
    <h3>[btn$Name] 기본 시스템 버튼 <span class="zh_CN">基本系统按钮</span><span class="en_US">basic system button</span></h3>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>기본 시스템 버튼</caption>
            <colgroup>
                <col style="width:10%;" />
                <col style="width:10%;" />
                <col style="width:10%;" />
                <col style="width:10%;" />
                <col style="width:10%;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col" rowspan="2">Class Name</th>
                    <th scope="col" colspan="2">기본 <span class="zh_CN">默认</span><span class="en_US">basic</span></th>
                    <th scope="col">선택된 <span class="zh_CN">已选状态</span><span class="en_US">selected</span></th>
                    <th scope="col">비활성 <span class="zh_CN">未激活状态</span><span class="en_US">disabled</span></th>
                    <th scope="col" rowspan="2">비고 <span class="zh_CN">备注</span><span class="en_US">note</span></th>
                </tr>
                <tr>
                    <th scope="col">&lt;a&gt;</th>
                    <th scope="col">&lt;button&gt;</th>
                    <th scope="col">(.selected)</th>
                    <th scope="col">(.disabled)</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>.btnNormal</td>
                    <td><a href="#none" class="btnNormal"><span>버튼</span></a></td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal selected"><span>버튼</span></a></td>
                    <td><a href="#none" class="btnNormal disabled"><span>버튼</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.btnCtrl</td>
                    <td><a href="#none" class="btnCtrl"><span>버튼</span></a></td>
                    <td>-</td>
                    <td><a href="#none" class="btnCtrl selected"><span>버튼</span></a></td>
                    <td><a href="#none" class="btnCtrl disabled"><span>버튼</span></a></td>
                    <td class="left">
                         .btnNormal  의 강조형 버튼
                         <p class="zh_CN">.btnNormal的强调型按钮</p>
                         <p class="en_US">Highlight button of the . btnNormal</p>
                    </td>
                </tr>
                <tr>
                    <td>.btnDate</td>
                    <td><a href="#none" class="btnDate"><span>버튼</span></a></td>
                    <td>-</td>
                    <td><a href="#none" class="btnDate selected"><span>버튼</span></a></td>
                    <td><a href="#none" class="btnDate disabled"><span>버튼</span></a></td>
                    <td class="left">
                         날짜와 관련되었을 경우 사용
                         <p class="zh_CN">与日期相关时使用</p>
                         <p class="en_US">Use it when it is related to the date</p>
                    </td>
                </tr>
                <tr>
                    <td>.btnGeneral</td>
                    <td><a href="#none" class="btnGeneral"><span>버튼</span></a></td>
                    <td>-</td>
                    <td><a href="#none" class="btnGeneral selected"><span>버튼</span></a></td>
                    <td><a href="#none" class="btnGeneral disabled"><span>버튼</span></a></td>
                    <td class="left">
                         페이지 중간에 위치하며, 모듈단위의 실행 버튼
                         <p class="zh_CN">位于页面中间，是模块单位的运行按钮</p>
                         <p class="en_US">Locate in the middle of the page, and the play button of the module unit</p>
                    </td>
                </tr>
                <tr>
                    <td>.btnStrong</td>
                    <td><a href="#none" class="btnStrong"><span>버튼</span></a></td>
                    <td>-</td>
                    <td><a href="#none" class="btnStrong selected"><span>버튼</span></a></td>
                    <td><a href="#none" class="btnStrong disabled"><span>버튼</span></a></td>
                    <td class="left">
                         btnGeneral 의 강조형 버튼
                         <p class="zh_CN">btnGeneral的强调型按钮</p>
                         <p class="en_US">Highlight button of the btnGeneral</p>
                    </td>
                </tr>
                <tr>
                    <td>.btnSubmit</td>
                    <td><a href="#none" class="btnSubmit"><span>버튼</span></a></td>
                    <td>-</td>
                    <td><a href="#none" class="btnSubmit selected"><span>버튼</span></a></td>
                    <td><a href="#none" class="btnSubmit disabled"><span>버튼</span></a></td>
                    <td class="left">
                         페이지 하단에 위치하며, 페이지 실행버튼 중 주요 버튼.
                         <p class="zh_CN">位于页面下端，是运行页面按钮中的主要按钮。( 制作popup页面时放在foot中，制作普通页面时除出现mHelp放在mHelp上端外，都放在页面最下端。)</p>
                         <p class="en_US">Locate in the lower of the page, and the main button among the play button of page.</p>
                    </td>
                </tr>
                <tr>
                    <td>.btnEm</td>
                    <td><a href="#none" class="btnEm"><span>버튼</span></a></td>
                    <td>-</td>
                    <td><a href="#none" class="btnEm selected"><span>버튼</span></a></td>
                    <td><a href="#none" class="btnEm disabled"><span>버튼</span></a></td>
                    <td class="left">
                         페이지 하단에 위치하며, 페이지 실행버튼 중 보조버튼. "취소"나 "닫기"에 사용.
                         <p class="zh_CN">位于页面下端，是运行页面按钮中的辅助按钮，用于“取消”与”关闭“。</p>
                         <p class="en_US">Locate in the lower of the page, and the supplementary button among the play button of page.It is used to “cancel” or “exit”</p>
                    </td>
                </tr>
                <tr>
                    <td>.btnSearch .reset</td>
                    <td>
                        <a href="#none" class="btnSearch"><span>검색</span></a>
                        <div class="gSingle"><a href="#none" class="btnSearch reset"><span>초기화</span></a></div>
                    </td>
                    <td>
                        <button type="button" class="btnSearch"><span>검색</span></button>
                        <div class="gSingle"><button type="button" class="btnSearch reset"><span>초기화</span></button></div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left">
                         검색 영역이 하나일 때 mBoard 안에 버튼을 추가한다.
                         <p class="zh_CN">只有一个搜索区域时，在mBoard里添加按钮。 <a href="/smartAdmin/market/global/admin/_mogujie/product/register.html" class="txtEm" target="_blank" title="새창 열림"><strong class="txtEm">[例子<em class="icoLink"></em>]</strong></a></p>
                        <!--&lt;button&gt; 타입의 경우 EC어드민 중 "주문"에서만 쓰였으나, 이후 삭제 됨-->
                         <p class="en_US">Add a button in the mBoard when the area of search is one.</p>
                    </td>
                </tr>
                <tr>
                    <td>.btnSearch</td>
                    <td>
                        <div class="section">
                            <div class="mButton gCenter">
                                <a href="#none" class="btnSearch"><span>검색</span></a>
                                <div class="gSingle"><a href="#none" class="btnSearch reset"><span>초기화</span></a></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="section">
                            <div class="mButton gCenter">
                                <button type="button" class="btnSearch"><span>검색</span></button>
                                <div class="gSingle"><button type="button" class="btnSearch reset"><span>초기화</span></button></div>
                            </div>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left">
                        검색 조건 mBoard 하단에 위치함.
                        <!--&lt;button&gt; 타입의 경우 EC어드민 중 "주문"에서만 쓰였으나, 이후 삭제 됨.-->
                         <p class="zh_CN">位于搜索条件mBoard下端。</p>
                         <p class="en_US">It is located in the lower side of the mBoard for the search condition.</p>
                    </td>
                </tr>
                <tr>
                    <td>.btnBubble</td>
                    <td>
                        <button class="btnBubble" type="button"><span>보기<em class="icoDel"></em></span></button>
                    </td>
                    <td>-</td>
                    <td>
                        <button class="btnBubble selected" type="button"><span>보기<em class="icoDel"></em></span></button>
                    </td>
                    <td>-</td>
                    <td class="left">
                        버튼의 특성상 링크값은 없으므로 button 태그만 허용한다.
                        <p class="zh_CN">因按钮的特性，无链接属性，只允许使用button标签。</p>
                        <p class="en_US">The value of link does not exist in the characteristic of buttons, so only the button tag is permitted.</p>
                    </td>
                </tr>
                <tr>
                    <td>.btnLink</td>
                    <td>
                        <a href="#none" class="btnLink"><span>[보기]</span></a>
                        <a href="#none" class="btnLink" target="_blank" title="새창 열림"><span>[보기<em class="icoLink"></em>]</span></a>
                    </td>
                    <td>-</td>
                    <td>
                        <a href="#none" class="btnLink"><strong>[보기]</strong></a>
                        <a href="#none" class="btnLink" target="_blank" title="새창 열림"><strong>[보기<em class="icoLink"></em>]</strong></a>
                    </td>
                    <td>-</td>
                    <td class="left">
                        새창열림 link일 경우 사용, 기본 [a&gt;span] 으로 처리하며 강조해야 할 경우 [a&gt;strong] 으로 처리한다. (txtEm, txtWarn 금지)
                        <p class="zh_CN">一般用[a&gt;span]处理，需要强调时用[a&gt;strong]处理。<br />
                        打开新建窗口link时必须使用<a href="#none" class="btnLink" target="_blank" title="새창 열림"><span>[보기<em class="icoLink"></em>]</span></a><a href="#none" class="btnLink" target="_blank" title="새창 열림"><strong>[보기<em class="icoLink"></em>]</strong></a> (txtEm, txtWarn 금지)</p>
                        <p class="en_US">Use it if the link is to open a new window. Handle it with the basic [a&gt;span] and if highlight is needed, handle it with the [a&gt;strong]. (txtEm, txtWarn 금지)</p>
                    </td>
                </tr>
                <tr>
                    <td>.gFile</td>
                    <td>
                        <span class="gFile">
                            <input type="file" class="file" />
                            <span class="btnNormal"><span>등록</span></span>
                        </span>
                    </td>
                    <td>
                        <span class="gFile">
                            <input type="file" class="file" />
                            <span class="btnNormal"><span><em class="icoPlus"></em> 이미지 등록</span></span>
                        </span>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left">
                        <ul>
                            <li>input[type="file"]을 엡솔루트 형식으로 기본 시스템 버튼위에 올려 버튼 클릭시 input[type="file"]태그가 클릭 되도록 구현됨. input[type="file"]은hover효과는 지원하지 않음.</li>
                            <li class="zh_CN">在基本系统按钮中，以定位的形式升级input[type="file"]，点击按钮时使input[type="file"]标签处于可点击的状态。input[type="file"]不支持hover效果。</li>
                            <li class="en_US">The input[type="file"] is on the basic system button as an absolute type, so the input[type="file"] tag can be clicked when clicking the button. The input[type="file"] does not support the hover effect.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>.btnFile</td>
                    <td><a href="#none" class="btnFile">file_name.JPG</a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left">
                        <span class="icoFile">첨부파일</span> 아이콘과 a태그를 하나로 합친 형태로 클릭시 파일다운로드가 되는 경우 사용한다.<br />
                        <span class="icoFile">첨부파일</span>
                        <span class="zh_CN">是图标与a标签合二为一的形态，点击时能下载文件的情况下可用。</span>
                        <span class="en_US">The type combining an icon and the a tag can be used in case a file download is possible when click.</span>
                    </td>
                </tr>
                <tr>
                    <td>.btnToggle</td>
                    <td><button type="button" class="btnToggle selected">직접</button><button type="button" class="btnToggle">입력</button></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.gSorting</td>
                    <td>
                        <div class="gSorting">
                            <a href="#none" class="btnSorting thumb"><span>썸네일형 보기</span></a>
                            <a href="#none" class="btnSorting list selected"><span>리스트형 보기</span></a>
                        </div>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.btnInfo</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left">
                        [mInfo + typeState] 의 버튼에서 사용한다. <a href="/suio/include/layout.php?MODULE=info" class="txtEm" target="_blank" title="새창 열림"><span class="txtEm">[Info<em class="icoLink"></em>]</span></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>[btnIcon] 아이콘형 버튼 <span class="zh_CN">icon型按钮, [em.ico$Name] 시스템 버튼 내부 아이콘 系统按钮内部icon</span><span class="en_US">icon type button, [em.ico$Name] 시스템 버튼 내부 아이콘 system button, internal icon</span></h3>
    <div class="mBox typeBorder">//img.echosting.cafe24.com/suio/sfix_icon_button.png</div>
    <ol>
        <li>아이콘 버튼 : btnIcon + ico[$Name] 와 같이 다중class 형태로 사용</li>
        <li>시스템 버튼 내부 아이콘 : &lt;em&gt; + ico[$Name]</li>
        <li>인터렉션정의에 따라 &lt;a&gt;나 &lt;button&gt;으로 처리한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>icon按钮：如同btnlcon+ico[$Name]，以多个class形式使用。</li>
        <li>系统按钮内部icon：&lt;em&gt+ico[$Name]</li>
        <li>根据计划书的定义，用&lt;a&gt或&lt;button&gt处理。</li>
        <li><span class="txtWarn">按钮中icon在左边的，文字与icon之间要用空格隔开。按钮中icon在右边的，文字与icon之间不允许出现空格。</span></li>
    </ol>
    <ol class="en_US">
        <li>Icon button : It is used in the multiple class types such as the btnIcon + ico[$Name].</li>
        <li>System button, internal icon : &lt;em&gt; + ico[$Name]</li>
        <li>The &lt;a&gt; or &lt;button&gt; is handled followed by the definition of interaction.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>아이콘형 버튼 및 시스템 버튼 내부 아이콘</caption>
            <colgroup>
                <col style="width:20%;" />
                <col style="width:11%;" />
                <col style="width:11%;" />
                <col style="width:11%;" />
                <col style="width:18%;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col" rowspan="2">Class Name</th>
                    <th scope="col" colspan="2">아이콘형 버튼 <span class="zh_CN">icon型按钮</span><span class="en_US">icon type button</span></th>
                    <th scope="col">비활성 <span class="zh_CN">未激活状态</span><span class="en_US">disabled</span></th>
                    <th scope="col" rowspan="2">버튼내 아이콘 <span class="zh_CN">系统按钮内部icon</span><span class="en_US">icon in buttons</span></th>
                    <th scope="col" rowspan="2">비고 <span class="zh_CN">备注</span><span class="en_US">note</span></th>
                </tr>
                <tr>
                    <th scope="col">&lt;a&gt;</th>
                    <th scope="col">&lt;button&gt;</th>
                    <th scope="col">(.disabled)</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>.icoDel</td>
                    <td><a href="#none" class="btnIcon icoDel"><span>삭제</span></a></td>
                    <td><button type="button" class="btnIcon icoDel"><span>삭제</span></button></td>
                    <td><a href="#none" class="btnIcon icoDel disabled"><span>삭제</span></a></td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제형</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoPlus</td>
                    <td><a href="#none" class="btnIcon icoPlus"><span>추가</span></a></td>
                    <td><button type="button" class="btnIcon icoPlus"><span>추가</span></button></td>
                    <td><a href="#none" class="btnIcon icoPlus disabled"><span>추가</span></a></td>
                    <td>
                        <a href="#none" class="btnNormal"><span><em class="icoPlus"></em> 추가형</span></a>
                        <a href="#none" class="btnCtrl"><span><em class="icoPlus"></em> 추가형</span></a>
                    </td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoMinus</td>
                    <td><a href="#none" class="btnIcon icoMinus"><span>삭제</span></a></td>
                    <td><button type="button" class="btnIcon icoMinus"><span>삭제</span></button></td>
                    <td><a href="#none" class="btnIcon icoMinus disabled"><span>삭제</span></a></td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoMinus"></em> 감소형</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoView</td>
                    <td><a href="#none" class="btnIcon icoView"><span>미리보기</span></a></td>
                    <td>-</td>
                    <td><a href="#none" class="btnIcon icoView disabled"><span>미리보기</span></a></td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoView"></em> 보기</span></a> <a href="#none" class="btnNormal"><span><em class="icoView"></em> HS코드 보기</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoEdit</td>
                    <td><a href="#none" class="btnIcon icoEdit"><span>수정</span></a></td>
                    <td><button type="button" class="btnIcon icoEdit"><span>수정</span></button></td>
                    <td><a href="#none" class="btnIcon icoEdit disabled"><span>수정</span></a></td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoStar</td>
                    <td><a href="#none" class="btnIcon icoStar"><span>수정</span></a></td>
                    <td><button type="button" class="btnIcon icoStar"><span>수정</span></button></td>
                    <td><a href="#none" class="btnIcon icoStar disabled"><span>수정</span></a></td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoStar"></em> 등록</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoPause</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="#none" class="btnNormal"><span><em class="icoPause"></em> 일시중단</span></a>
                        <a href="#none" class="btnNormal selected"><span><em class="icoPause"></em> 일시중단</span></a>
                    </td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoCopy</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class=" icoCopy"></em> 복사</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoList</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoList"></em> 목록</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoRefresh</td>
                    <td><a href="#none" class="btnIcon icoRefresh"><span>새로고침</span></a></td>
                    <td><button type="button" class="btnIcon icoRefresh"><span>새로고침</span></button></td>
                    <td><a href="#none" class="btnIcon icoRefresh disabled"><span>새로고침</span></a></td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoRefresh"></em> 새로고침</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoURL</td>
                    <td><a href="#none" class="btnIcon icoURL"><span>상품상세 URL</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoURL"></em> 상품상세 URL</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoReverse</td>
                    <td><a href="#none" class="btnIcon icoReverse"><span>역순정렬</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="btnIcon icoReverse"></em> 역순정렬</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoResize</td>
                    <td><a href="#none" class="btnIcon icoResize"><span>초기화</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoResize"></em> 초기화</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoBold + .selected</td>
                    <td>-</td>
                    <td>
                        <button type="button" class="btnIcon icoBold"><span>글자 굵게 사용</span></button>
                        <button type="button" class="btnIcon icoBold selected"><span>글자 굵게 사용</span></button>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoItalic + .selected</td>
                    <td>-</td>
                    <td>
                        <button type="button" class="btnIcon icoItalic"><span>글자 기울기 사용</span></button>
                        <button type="button" class="btnIcon icoItalic selected"><span>글자 기울기 사용</span></button>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoXls</td>
                    <td><a href="#none" class="btnIcon icoXls"><span>엑셀다운로드</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoXls"></em> 엑셀다운로드</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoDoc</td>
                    <td><a href="#none" class="btnIcon icoDoc"><span>워드다운로드</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoDoc"></em> 워드다운로드</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoPpt</td>
                    <td><a href="#none" class="btnIcon icoPpt"><span>PPT다운로드</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoPpt"></em> PPT다운로드</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoPdf</td>
                    <td><a href="#none" class="btnIcon icoPdf"><span>PDF다운로드</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoPdf"></em> PDF다운로드</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoHwp</td>
                    <td><a href="#none" class="btnIcon icoHwp"><span>한글다운로드</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoHwp"></em> 한글다운로드</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoText</td>
                    <td><a href="#none" class="btnIcon icoText"><span>텍스트다운로드</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoText"></em> 텍스트다운로드</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoZip</td>
                    <td><a href="#none" class="btnIcon icoZip"><span>Zip다운로드</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoZip"></em> Zip다운로드</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoJpg</td>
                    <td><a href="#none" class="btnIcon icoJpg"><span>jpg다운로드</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoJpg"></em> jpg다운로드</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoPng</td>
                    <td><a href="#none" class="btnIcon icoPng"><span>png다운로드</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoPng"></em> png다운로드</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoGif</td>
                    <td><a href="#none" class="btnIcon icoGif"><span>gif다운로드</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="btnNormal"><span><em class="icoGif"></em> gif다운로드</span></a></td>
                    <td class="left"></td>
                </tr>
            </tbody>
            <tbody class="center">
                <tr>
                    <td>.icoLower / .icoUpper</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <a href="#none" class="btnNormal"><span>추가<em class="icoLower"></em></span></a>
                        <a href="#none" class="btnNormal"><span>제외<em class="icoUpper"></em></span></a>
                        <div class="gSingle">
                            <a href="#none" class="btnGeneral"><span>추가<em class="icoLower"></em></span></a>
                            <a href="#none" class="btnGeneral"><span>제외<em class="icoUpper"></em></span></a>
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2">.icoLayer</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <div class="mOpen">
                            <a href="#ordOpen1" class="btnNormal eOpenClick"><span>레이어 펼침<em class="icoLayer"></em></span></a>
                            <div id="ordOpen1" class="open" style="width:90px;">
                                <div class="wrap">
                                    <ul class="default">
                                        <li><a href="#none">예시1</a></li>
                                        <li><a href="#none">예시2</a></li>
                                        <li><a href="#none">예시3</a></li>
                                        <li><a href="#none">예시4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="#none" class="btnNormal selected"><span>버튼<em class="icoLayer"></em></span></a>
                        <a href="#none" class="btnNormal disabled"><span>버튼<em class="icoLayer"></em></span></a>
                    </td>
                    <td rowspan="2" class="left">
                        <ol class="mList typeMore">
                            <li>글자와 icoLink 사이에 간격이 없어야 한다.</li>
                            <li>버튼 클릭 시 레이어 펼쳐질 경우 추가되는 아이콘, .mOpen과 함께 사용.</li>
                        </ol>
                        <ol class="mList typeMore zh_CN">
                            <li>字与icoLink之间不能存在间距。</li>
                            <li>点击按钮，出现弹窗时所添加的icon，须与mOpen一并使用。</li>
                        </ol>
                        <ol class="mList typeMore en_US">
                            <li>No space is allowed between the texts and the icoLink.</li>
                            <li>The icon that is added as a layer is stretched out when click a button. The mOpen is used together.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <div class="mOpen">
                            <a href="#ordOpen1" class="btnCtrl eOpenClick"><span>레이어 펼침<em class="icoLayer"></em></span></a>
                            <div id="ordOpen1" class="open" style="width:90px;">
                                <div class="wrap">
                                    <ul class="default">
                                        <li><a href="#none">예시1</a></li>
                                        <li><a href="#none">예시2</a></li>
                                        <li><a href="#none">예시3</a></li>
                                        <li><a href="#none">예시4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="#none" class="btnCtrl selected"><span>버튼<em class="icoLayer"></em></span></a>
                        <a href="#none" class="btnCtrl disabled"><span>버튼<em class="icoLayer"></em></span></a>
                    </td>
                </tr>
                <tr>
                    <td rowspan="3">.icoLink</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <a href="#none" title="새창 열림" target="_blank" class="btnNormal"><span>새창 이동<em class="icoLink"></em></span></a>
                        <a href="#none" title="새창 열림" target="_blank" class="btnNormal selected"><span>버튼<em class="icoLink"></em></span></a>
                        <a href="#none" title="새창 열림" target="_blank" class="btnNormal disabled"><span>버튼<em class="icoLink"></em></span></a>
                    </td>
                    <td rowspan="3" class="left">
                        <ol class="mList typeMore">
                            <li>글자와 icoLink 사이에 간격이 없어야 한다.</li>
                            <li>버튼 클릭 시 새창으로 이동할 경우 추가되는 아이콘</li>
                        </ol>
                        <ol class="mList typeMore zh_CN">
                            <li>字与icoLink之间不能存在间距。</li>
                            <li>点击按钮，弹出新页面时所添加的icon。</li>
                        </ol>
                        <ol class="mList typeMore en_US">
                            <li>No space is allowed between the textx and the icoLink.</li>
                            <li>The icon is added when click the button to move to a new window.</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <a href="#none" title="새창 열림" target="_blank" class="btnCtrl"><span>새창 이동<em class="icoLink"></em></span></a>
                        <a href="#none" title="새창 열림" target="_blank" class="btnCtrl selected"><span>버튼<em class="icoLink"></em></span></a>
                        <a href="#none" title="새창 열림" target="_blank" class="btnCtrl disabled"><span>버튼<em class="icoLink"></em></span></a>
                    </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" target="_blank" title="새창 열림" class="btnLink"><span>[새창 이동<em class="icoLink"></em>]</span></a></td>
                </tr>
                <tr>
                    <td>.icoPrev</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><a href="#none" class="txtLess"><em class="icoPrev"></em>이전으로 이동</a></td>
                    <td class="left">글자와 icoPrev 사이에 간격이 없어야 한다.</td>
                </tr>
                <tr>
                    <td>.gNumber</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <span class="gNumber">
                            <input type="text" class="fText" />
                            <button type="button" class="up"><span>증가</span></button>
                            <button type="button" class="down"><span>감소</span></button>
                        </span>
                        kg
                    </td>
                    <td class="left"><!--suio.css--></td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoHistory</td>
                    <td><a href="#none" class="btnIcon icoHistory"><span>내역</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoCal</td>
                    <td><a href="#none" class="btnIcon icoCal"><span>달력보기</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoPrint</td>
                    <td><a href="#none" class="btnIcon icoPrint"><span>인쇄</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td><a class="btnNormal" href="#none"><span><em class="icoPrint"></em> 인쇄</span></a></td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoPhone</td>
                    <td><a href="#none" class="btnIcon icoPhone"><span>Phone</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoSK</td>
                    <td><a href="#none" class="btnIcon icoSK"><span>SK</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoKT</td>
                    <td><a href="#none" class="btnIcon icoKT"><span>KT</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoLG</td>
                    <td><a href="#none" class="btnIcon icoLG"><span>LG</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoTeleStar</td>
                    <td><a href="#none" class="btnIcon icoTeleStar"><span>TeleStar</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
            </tbody>
            <tbody class="center bgDivistion">
                <tr>
                    <td>.icoSms + .selected</td>
                    <td>
                        <a href="#none" class="btnIcon icoSms"><span>SMS</span></a>
                        <a href="#none" class="btnIcon icoSms selected"><span>SMS</span></a>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoMail + .selected</td>
                    <td>
                        <a href="#none" class="btnIcon icoMail"><span>메일</span></a>
                        <a href="#none" class="btnIcon icoMail selected"><span>메일</span></a>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoMemo + .selected</td>
                    <td><a href="#none" class="btnIcon icoMemo"><span>메모</span></a> <a href="#none" class="btnIcon icoMemo selected"><span>메모</span></a></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoUser + .selected</td>
                    <td>
                        <a href="#none" class="btnIcon icoUser"><span>USER</span></a>
                        <a href="#none" class="btnIcon icoUser selected"><span>USER</span></a>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoAdmin + .selected</td>
                    <td>
                        <a href="#none" class="btnIcon icoAdmin"><span>ADMIN</span></a>
                        <a href="#none" class="btnIcon icoAdmin selected"><span>ADMIN</span></a>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoCafe24 + .selected</td>
                    <td>
                        <a href="#none" class="btnIcon icoCafe24"><span>CAFE24</span></a>
                        <a href="#none" class="btnIcon icoCafe24 selected"><span>CAFE24</span></a>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left"></td>
                </tr>
                <tr>
                    <td>.icoBunch + .selected</td>
                    <td>-</td>
                    <td>
                        <button type="button" class="btnIcon icoBunch"><span>묶음선택</span></button>
                        <button type="button" class="btnIcon icoBunch selected"><span>묶음해제</span></button>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left">묶음선택/묶음해제, <span class="zh_CN">选择绑定/解除绑定</span><span class="en_US">Grouping/Separating</span></td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoCurrentMall + .selected / icoBasicMall</td>
                    <td>-</td>
                    <td><button type="button" class="btnIcon icoCurrentMall selected"><span>현재몰</span></button><button type="button" class="btnIcon icoBasicMall"><span>기본몰</span></button></td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left" rowspan="2">현재몰/기본몰, <span class="zh_CN">当前网/基本网</span><span class="en_US">Current mall/basic mall</span></td>
                </tr>
                <tr>
                    <td>.icoCurrentMall / icoBasicMall + .selected</td>
                    <td>-</td>
                    <td><button type="button" class="btnIcon icoCurrentMall"><span>현재몰</span></button><button type="button" class="btnIcon icoBasicMall selected"><span>기본몰</span></button></td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>icoViewDetail + .selected / icoViewSimple</td>
                    <td>-</td>
                    <td><button type="button" class="btnIcon icoViewDetail selected"><span>상세보기</span></button><button type="button" class="btnIcon icoViewSimple"><span>간편보기</span></button></td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left" rowspan="2">상세보기/간편보기, <span class="zh_CN">详细查看/快捷查看</span><span class="en_US">Detail view/Preview</span></td>
                </tr>
                <tr>
                    <td>icoViewDetail / icoViewSimple + .selected</td>
                    <td>-</td>
                    <td><button type="button" class="btnIcon icoViewDetail"><span>상세보기</span></button><button type="button" class="btnIcon icoViewSimple selected"><span>간편보기</span></button></td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
            <tbody class="center bgDivistion">
                <tr>
                    <td>.icoDelete</td>
                    <td><a href="#none" class="btnIcon icoDelete"><span>삭제</span></a></td>
                    <td><button type="button" class="btnIcon icoDelete"><span>삭제</span></button></td>
                    <td>-</td>
                    <td>-</td>
                    <td class="left">
                        <ul class="mList typeMore">
                            <li><a href="/suio/include/layout.php?MODULE=image" class="txtEm">[이미지]</a>가 목록형으로 있을때 삭제하기 위한 버튼</li>
                        </ul>
                        <ul class="mList typeMore zh_CN">
                            <li>用于删除目录型<a href="/suio/include/layout.php?MODULE=image" class="txtEm">[이미지]</a>的按钮</li>
                        </ul>
                        <ul class="mList typeMore en_US">
                            <li>The button is to delete the <a href="/suio/include/layout.php?MODULE=image" class="txtEm">[image]</a> if it is in the list type. </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>[btnMove] 항목이동 버튼 移动项目按钮</h3>
    <div class="mBox typeBorder">//img.echosting.cafe24.com/suio/sfix_icon_move.png</div>
    <ol>
        <li>btnMove + ico[$Name] : 다중class 형태로 사용</li>
        <li>&lt;button&gt;으로 처리한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>btnMove + ico[$Name] : 以多个class形式使用。</li>
        <li>用&lt;button&gt;处理。</li>
    </ol>
    <ol class="en_US">
        <li>btnMove + ico[$Name] : Multiple class types are used</li>
        <li>Handle with the &lt;button&gt;</li>
    </ol>
', 'html' => '
    <div class="mBoard typeHalf">
        <table border="1" summary="">
            <caption>항목이동 버튼</caption>
            <colgroup>
                <col style="width:20%;" />
                <col style="width:20%;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Class Name</th>
                    <th scope="col">기본 <span class="zh_CN">默认</span><span class="en_US">basic</span></th>
                    <th scope="col">비고 <span class="zh_CN">备注</span><span class="en_US">note</span></th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>.icoFirst</td>
                    <td><button type="button" class="btnMove icoFirst"><span>선택한 항목 최상단으로 이동</span></button></td>
                    <td></td>
                </tr>
                <tr>
                    <td>.icoPrev</td>
                    <td><button type="button" class="btnMove icoPrev"><span>선택한 항목 한줄 위로 이동</span></button></td>
                    <td></td>
                </tr>
                <tr>
                    <td>.icoNext</td>
                    <td><button type="button" class="btnMove icoNext"><span>선택한 항목 한줄 아래로 이동</span></button></td>
                    <td></td>
                </tr>
                <tr>
                    <td>.icoLast</td>
                    <td><button type="button" class="btnMove icoLast"><span>선택한 항목 최하단으로 이동</span></button></td>
                    <td></td>
                </tr>
                <tr>
                    <td>.icoLeft</td>
                    <td><button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button></td>
                    <td></td>
                </tr>
                <tr>
                    <td>.icoRight</td>
                    <td><button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button></td>
                    <td></td>
                </tr>
                <tr>
                    <td>.icoAll</td>
                    <td><button type="button" class="btnMove icoAll"><span>전체추가</span></button></td>
                    <td class="left">전체추가 <span class="zh_CN">全部添加</span><span class="en_US">Add total</span></td>
                </tr>
                <tr>
                    <td>.icoBlank</td>
                    <td><button type="button" class="btnMove icoBlank"><span>공란추가</span></button></td>
                    <td class="left">공란추가 <span class="zh_CN">添加空格</span><span class="en_US">Add empty space</span></td>
                </tr>
                <tr>
                    <td class="del">.icoPlus</td>
                    <td><button type="button" class="btnMove icoPlus"><span>전체추가</span></button></td>
                    <td class="left" rowspan="2">CSS상에는 남아있으나, 현재 사용되지 않는걸로 파악 됨. <br />배포이후 재 확인 예정</td>
                </tr>
                <tr>
                    <td class="del">.icoMinus</td>
                    <td><button type="button" class="btnMove icoMinus"><span>공란추가</span></button></td>
                </tr>
                <tr>
                    <td class="del">.icoUnfold</td>
                    <td><button type="button" class="btnMove icoUnfold"><span>열기</span></button></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="del">.icoFold</td>
                    <td><button type="button" class="btnMove icoFold"><span>닫기</span></button></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mBoard typeHalf">
        <table border="1" summary="">
            <caption>항목 이동 버튼</caption>
            <colgroup>
                <col style="width:20%;" />
                <col style="width:20%;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Class Name</th>
                    <th scope="col">기본 默认</th>
                    <th scope="col">비고 备注</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>.icoRemove</td>
                    <td><button type="button" class="btnMove icoRemove"><span>선택한 항목 제거</span></button></td>
                    <td></td>
                </tr>
                <tr>
                    <td>.icoAdd</td>
                    <td><button type="button" class="btnMove icoAdd"><span>선택한 항목 추가</span></button></td>
                    <td></td>
                </tr>
                <tr>
                    <td>.icoAddText</td>
                    <td><button type="button" class="btnMove icoAddText"><span>선택한 항목 추가</span></button></td>
                    <td class="left">선택한 항목 추가 <span class="zh_CN">添加已选项目</span><span class="en_US">Add contents that are chosen</span></td>
                </tr>
                <tr>
                    <td>.icoAllText</td>
                    <td><button type="button" class="btnMove icoAllText"><span>선택한 항목 전체추가</span></button></td>
                    <td class="left">선택한 항목 전체추가 <span class="zh_CN">添加所有已选项目</span><span class="en_US">Add contents totally that are chosen</span></td>
                </tr>
                <tr>
                    <td>.icoDelText</td>
                    <td><button type="button" class="btnMove icoDelText"><span>선택한 항목 삭제</span></button></td>
                    <td class="left">선택한 항목 삭제 <span class="zh_CN">删除已选项目</span><span class="en_US">Delete contents that are chosen</span></td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>텍스트형 아이콘 <span class="zh_CN">文本型icon</span><span class="en_US">text type icon</span></h3>
    <div class="mBox typeBorder">//img.echosting.cafe24.com/suio/sfix_icon_text.png</div>
    <ol>
        <li>2015년 12월부터 <a href="https://wiki.simplexi.com/display/pubguide/CSS+Sprite" target="_blank" title="새창열기" class="txtEm">[sfix 네이밍가이드]</a>를 따른다. 각 <a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=601426417" target="_blank" title="새창열기" class="txtEm">[솔루션별 고유 class]</a>를 가지며 솔루션에 특화된 아이콘일 경우 .txtSFIX.[$솔루션CLASS].ico[$Name]의 형태로 관리한다. (예시: &lt;span class="txtSFIX SV ico$NAME"&gt;)</li>
        <li>아이콘의 특정 액션이 동일하고 상태가 다른 경우, [ico][의미][상태] 네이밍으로 묶어서 관리한다. (예시: icoAssign, icoAssignNot, icoAssignAuto)</li>
        <li>&lt;span&gt; + ico[$Name] : 아이콘과 문장간의 간격은 1space로 한다.</li>
        <li>기본은 &lt;span&gt; 태그를 사용하고 강조성 아이콘은 &lt;strong&gt; 태그, 링크는 &lt;a&gt; 태그를 사용한다.</li>
        <li>★ 아이콘 작업시 항상 <a href="/ec_mobile/guide/icon.html" class="txtEm">[모바일 아이콘]</a>과 양쪽 다 업데이트가 이루어 져야한다. 추가될 경우 각 파트에 꼭 요청한다.</li>
        <li>★ <strong>[EC Japan]</strong> <a href="/suio/include/layout_ja_JP.php?MODULE=btn" class="txtEm" target="_blank" title="새창 열림">일본어 아이콘</a>과 함께 관리한다. (모바일어드민은 EC Japan 범위가 아니므로, 현재 모바일 아이콘 작업은 없음)<br />- EC Japan 에서 필요하지 않은 아이콘은 PSD에 한국어로 동일한 위치에 반영해둔다. (한국어/일본어 PSD 파일 position 동일)</li>
    </ol>
    <ol class="zh_CN">
        <li>从2015年12月开始，按照[sfix Naming Guide]施行。每个[SUIO项目都有自己的固有class]，只在规定的网站设计中使用的图标是以 .txtSFIX.[$网站设计CLASS].ico[$Name]的形式进行管理.（示例：&lt;span class="txtSFIX SV ico$NAME"&gt;)</li>
        <li>(번역 필요)</li>
        <li>&lt;span&gt; + ico[$Name] : icon与文章间距定为1space。</li>
        <li>默认用&lt;span&gt;标签，强调型icon用&lt;strong&gt;标签，链接用&lt;a&gt;标签。</li>
        <li>해당페이지는 중국지사에서 작업할 내용이 없으므로 중국어 번역을 생략한다</li>
    </ol>
    <ol class="en_US">
        <li>Follow the [sfix naming guide] that was applied since December 2015. Each has [the unique class by the solution] and if the icon is specialized in the solution, it is managed in the form of the .txtSFIX.[$솔루션CLASS].ico[$Name]. (예시: &lt;span class="txtSFIX SV ico$NAME"&gt;)</li>
        <li>&lt;span&gt; + ico[$Name] : The space between the icon and the text is 1space. </li>
        <li>The basic is to use the tag &lt;span&gt; and for the highlighted icon the &lt;strong&gt;, and the link the &lt;a&gt;.</li>
        <li>The [mobile icon] and the both sides should be updated always. If added, a request has to be made for each part.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>텍스트형 아이콘</caption>
            <colgroup>
                <col style="width:15%;" />
                <col style="width:13%;" />
                <col style="width:13%;" />
                <col style="width:13%;" />
                <col style="width:13%;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Class Name</th>
                    <th scope="col">한국어</th>
                    <th scope="col"><span class="zh_CN">中文</span><span class="en_US">English</span></th>
                    <th scope="col">Icon</th>
                    <th scope="col">Tag</th>
                    <th scope="col">적용 예제 适用例子</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>.icoDefault</td>
                    <td>기본</td>
                    <td class="zh_CN">默认</td>
                    <td class="en_US">Basic</td>
                    <td><span class="icoDefault">기본</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoDefault">기본</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoNotice</td>
                    <td>공지</td>
                    <td class="zh_CN">公告</td>
                    <td class="en_US">Notice</td>
                    <td><strong class="icoNotice">공지</strong> </td>
                    <td>&lt;strong&gt;</td>
                    <td class="left"><span class="icoNotice">공지</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoMajor</td>
                    <td>중요</td>
                    <td class="zh_CN">重要</td>
                    <td class="en_US">Important</td>
                    <td><strong class="icoMajor">중요</strong> </td>
                    <td>&lt;strong&gt;</td>
                    <td class="left"><span class="icoMajor">중요</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoFavorite</td>
                    <td>단골</td>
                    <td class="zh_CN">热销</td>
                    <td class="en_US">Regular</td>
                    <td><strong class="icoFavorite">단골</strong> </td>
                    <td>&lt;strong&gt;</td>
                    <td class="left"><strong class="icoFavorite">단골</strong> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoSpecial</td>
                    <td>특별</td>
                    <td class="zh_CN">特殊</td>
                    <td class="en_US">Special</td>
                    <td><strong class="icoSpecial">특별</strong> </td>
                    <td>&lt;strong&gt;</td>
                    <td class="left"><strong class="icoSpecial">특별</strong> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoBad</td>
                    <td>불량</td>
                    <td class="zh_CN">不良</td>
                    <td class="en_US">Defects</td>
                    <td><strong class="icoBad">불량</strong> </td>
                    <td>&lt;strong&gt;</td>
                    <td class="left"><strong class="icoBad">불량</strong> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoBlacklist</td>
                    <td>블랙리스트</td>
                    <td class="zh_CN">黑名单</td>
                    <td class="en_US">blacklist</td>
                    <td><strong class="icoBlacklist">블랙리스트</strong> <strong class="icoBlacklist mini">블랙리스트</strong></td>
                    <td>&lt;strong&gt;</td>
                    <td class="left"><strong class="icoBlacklist">블랙리스트</strong> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoShopDisplay</td>
                    <td>SHOP 노출</td>
                    <td class="zh_CN">显示SHOP</td>
                    <td class="en_US">Shop expose</td>
                    <td><strong class="icoShopDisplay">SHOP 노출</strong> </td>
                    <td>&lt;strong&gt;</td>
                    <td class="left"><strong class="icoShopDisplay">SHOP 노출</strong> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoEachRegister</td>
                    <td>개별등록</td>
                    <td class="zh_CN">单独登记</td>
                    <td class="en_US">Upload individually</td>
                    <td><strong class="icoEachRegister">개별등록</strong> <strong class="icoEachRegister mini">개별등록</strong></td>
                    <td>&lt;strong&gt;</td>
                    <td class="left"><strong class="icoEachRegister">개별등록</strong> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoExcRegister</td>
                    <td>엑셀등록</td>
                    <td class="zh_CN">EXCEl登记</td>
                    <td class="en_US">Upload Excel</td>
                    <td><strong class="icoExcRegister">엑셀등록</strong> <strong class="icoExcRegister mini">엑셀등록</strong></td>
                    <td>&lt;strong&gt;</td>
                    <td class="left"><strong class="icoExcRegister">엑셀등록</strong> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoRetractExchange</td>
                    <td>교환철회</td>
                    <td class="zh_CN">撤销换货</td>
                    <td class="en_US">Call off exchange</td>
                    <td><span class="icoRetractExchange">교환철회</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoRetractExchange">교환철회</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoRetractCancel</td>
                    <td>취소철회</td>
                    <td class="zh_CN">撤销取消</td>
                    <td class="en_US">Call off cancellation</td>
                    <td><span class="icoRetractCancel">취소철회</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoRetractCancel">취소철회</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoRetractReturn</td>
                    <td>반품철회</td>
                    <td class="zh_CN">撤销退货</td>
                    <td class="en_US">Call off refund</td>
                    <td><span class="icoRetractReturn">반품철회</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoRetractReturn">반품철회</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoExchange</td>
                    <td>교환</td>
                    <td class="zh_CN">换货</td>
                    <td class="en_US">Exchange</td>
                    <td><span class="icoExchange">교환</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoExchange">교환</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoCancel</td>
                    <td>취소</td>
                    <td class="zh_CN">取消</td>
                    <td class="en_US">Cancellation</td>
                    <td><span class="icoCancel">취소</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoCancel">취소</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoReturn</td>
                    <td>반품</td>
                    <td class="zh_CN">退货</td>
                    <td class="en_US">Return</td>
                    <td><span class="icoReturn">반품</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoReturn">반품</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoSoldout</td>
                    <td>품절</td>
                    <td class="zh_CN">断货</td>
                    <td class="en_US">Out of stock</td>
                    <td><span class="icoSoldout">품절</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoSoldout">품절</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoWithdraw</td>
                    <td>철회</td>
                    <td class="zh_CN">撤销</td>
                    <td class="en_US">Call off</td>
                    <td><span class="icoWithdraw">철회</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoWithdraw">철회</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoSell</td>
                    <td>판매중</td>
                    <td class="zh_CN">正在销售</td>
                    <td class="en_US">On sale</td>
                    <td><span class="icoSell">판매중</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoSell">판매중</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center">
                <tr>
                    <td>.icoBundle</td>
                    <td>묶음</td>
                    <td class="zh_CN">捆绑</td>
                    <td class="en_US">Bundle</td>
                    <td><span class="icoBundle">묶음</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoBundle">묶음</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoSetProduct</td>
                    <td>세트</td>
                    <td class="zh_CN">套装</td>
                    <td class="en_US">Set</td>
                    <td><span class="icoSetProduct">세트</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoSetProduct">세트</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoSetProduct2</td>
                    <td>세트나눔</td>
                    <td class="zh_CN">单件可售</td>
                    <td class="en_US">Set division</td>
                    <td><span class="icoSetProduct2">세트나눔</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoSetProduct2">세트나눔</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoReference</td>
                    <td>참고</td>
                    <td class="zh_CN">参考</td>
                    <td class="en_US">Reference</td>
                    <td><span class="icoReference">참고</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoReference">참고</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoRefund</td>
                    <td>환불</td>
                    <td class="zh_CN">退款</td>
                    <td class="en_US">Refund</td>
                    <td><span class="icoRefund">환불</span> <span class="icoRefund disabled">환불</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoRefund">환불</span> <span class="icoRefund disabled">환불</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoOrdFirst</td>
                    <td>첫주문</td>
                    <td class="zh_CN">首笔订单</td>
                    <td class="en_US">First order</td>
                    <td><span class="icoOrdFirst">첫주문</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoOrdFirst">첫주문</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoDelay</td>
                    <td>처리지연</td>
                    <td class="zh_CN">延迟处理</td>
                    <td class="en_US">delay on handling</td>
                    <td><span class="icoDelay">처리지연</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoDelay">처리지연</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoIP</td>
                    <td>IP</td>
                    <td></td>
                    <td><span class="icoIP">IP</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoIP">IP</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoDefer</td>
                    <td>배송보류</td>
                    <td class="zh_CN">保留配送</td>
                    <td class="en_US">delay on shipment</td>
                    <td><span class="icoDefer">배송보류</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoDefer">배송보류</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoExcProduct</td>
                    <td>교환상품</td>
                    <td class="zh_CN">交换商品</td>
                    <td class="en_US">exchange product</td>
                    <td><span class="icoExcProduct">교환상품</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoExcProduct">교환상품</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoExcPayment</td>
                    <td>입금전교환</td>
                    <td class="zh_CN">付款前换货</td>
                    <td class="en_US">exchange before payment</td>
                    <td><span class="icoExcPayment">입금전교환</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoExcPayment">입금전교환</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoExcBefore</td>
                    <td>배송전교환</td>
                    <td class="zh_CN">配送前换货</td>
                    <td class="en_US">exchange before shipment</td>
                    <td><span class="icoExcBefore">배송전교환</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoExcBefore">배송전교환</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoExcAfter</td>
                    <td>배송후교환</td>
                    <td class="zh_CN">配送后换货</td>
                    <td class="en_US">exchange after shipment</td>
                    <td><span class="icoExcAfter">배송후교환</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoExcAfter">배송후교환</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoExcPart</td>
                    <td>부분수량교환</td>
                    <td class="zh_CN">部分换货</td>
                    <td class="en_US">exchange partial quantity</td>
                    <td><span class="icoExcPart">부분수량교환</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoExcPart">부분수량교환</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoRefusal</td>
                    <td>구매거절</td>
                    <td class="zh_CN">拒绝订购</td>
                    <td class="en_US">Refuse to purchase</td>
                    <td><span class="icoRefusal">구매거절</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoRefusal">구매거절</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center">
                <tr>
                    <td>.icoMobile</td>
                    <td>모바일</td>
                    <td class="zh_CN">手机版</td>
                    <td class="en_US">Mobile</td>
                    <td><span class="icoMobile">모바일</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoMobile">모바일</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoProduct</td>
                    <td>상품</td>
                    <td class="zh_CN">商品</td>
                    <td class="en_US">Product</td>
                    <td><span class="icoProduct">상품</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoProduct">상품</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoGift</td>
                    <td>사은품</td>
                    <td class="zh_CN">赠品</td>
                    <td class="en_US">free gift</td>
                    <td><span class="icoGift">사은품</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoGift">사은품</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.ico1MoreEvent</td>
                    <td>1+N 이벤트</td>
                    <td class="zh_CN">1+N优惠活动</td>
                    <td class="en_US">1+N Event</td>
                    <td><span class="ico1MoreEvent">1+N 이벤트</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="ico1MoreEvent">1+N 이벤트</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoSecurity</td>
                    <td>보안단계 : 안전, 미흡, 위험</td>
                    <td>-</td>
                    <td><span class="icoSecurity level1">안전</span> <span class="icoSecurity level2">미흡</span> <span class="icoSecurity level3">위험</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoSecurity level1">안전</span> <span class="icoSecurity level2">미흡</span> <span class="icoSecurity level3">위험</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoGrand</td>
                    <td>등급고정</td>
                    <td>-</td>
                    <td><span class="icoGrand">등급고정</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoGrand">등급고정</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoB2BRequest</td>
                    <td>B2B직배송요청</td>
                    <td class="zh_CN">B2B直运邀请</td>
                    <td class="en_US">B2B direct shipment request</td>
                    <td><span class="icoB2BRequest">B2B직배송요청</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoB2BRequest">B2B직배송요청</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoB2BReject</td>
                    <td>B2B직배송요청거부</td>
                    <td class="zh_CN">拒绝B2B直运邀请</td>
                    <td class="en_US">번역필요</td>
                    <td><span class="icoB2BReject">B2B직배송요청거부</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoB2BReject">B2B직배송요청거부</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoB2BStop</td>
                    <td>B2B상품제공중지</td>
                    <td class="zh_CN">终止B2B提供商品</td>
                    <td class="en_US">B2B stop selling product</td>
                    <td><span class="icoB2BStop">B2B상품제공중지</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoB2BStop">B2B상품제공중지</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoPersonal</td>
                    <td>개인</td>
                    <td class="zh_CN">个人</td>
                    <td class="en_US">individual</td>
                    <td><span class="icoPersonal">개인</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoPersonal">개인</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoCompany</td>
                    <td>회사</td>
                    <td class="zh_CN">公司</td>
                    <td class="en_US">company</td>
                    <td><span class="icoCompany">회사</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoCompany">회사</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoDivision</td>
                    <td>부서</td>
                    <td class="zh_CN">部门</td>
                    <td class="en_US">department</td>
                    <td><span class="icoDivision">부서</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoDivision">부서</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoRequired</td>
                    <td>필수</td>
                    <td class="zh_CN">必填</td>
                    <td class="en_US">essential</td>
                    <td><strong class="icoRequired">필수</strong> </td>
                    <td>&lt;strong&gt;</td>
                    <td class="left">문장과 조합 <strong class="icoRequired">필수</strong></td>
                </tr>
            </tbody>
            <tbody class="center">
                <tr>
                    <td>.icoCheckoutExchange</td>
                    <td>네이버페이교환요청</td>
                    <td class="zh_CN">NAVER PAY交换邀请</td>
                    <td class="en_US">Naverpay exchange request</td>
                    <td><span class="icoCheckoutExchange">네이버페이교환요청</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoCheckoutExchange">네이버페이교환요청</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoCheckoutCancel</td>
                    <td>네이버페이취소요청</td>
                    <td class="zh_CN">NAVER PAY取消邀请</td>
                    <td class="en_US">Naverpay cancellation request</td>
                    <td><span class="icoCheckoutCancel">네이버페이취소요청</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoCheckoutCancel">네이버페이취소요청</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoCheckoutReturn</td>
                    <td>네이버페이반품요청</td>
                    <td class="zh_CN">NAVER PAY换货邀请</td>
                    <td class="en_US">Naverpay return request</td>
                    <td><span class="icoCheckoutReturn">네이버페이반품요청</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoCheckoutReturn">네이버페이반품요청</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoCheckoutDelivery</td>
                    <td>네이버페이배송연동오류</td>
                    <td class="zh_CN">NAVER PAY配送联动错误</td>
                    <td class="en_US">Naverpay shipment merge error</td>
                    <td><span class="icoCheckoutDelivery">네이버페이배송연동오류</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoCheckoutDelivery">네이버페이배송연동오류</span> 문장과 조합</td>
                </tr>
                <tr class="del">
                    <td>.mTooltip.typeCheckout</td>
                    <td>네이버페이배송연동오류</td>
                    <td class="zh_CN">NAVER PAY配送联动错误</td>
                    <td class="en_US">Naverpay shipment merge error</td>
                    <td>
                        <div class="mTooltip typeCheckout gMedium">
                            <button type="button" class="icon eTip">네이버페이 배송연동오류</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">네이버페이 체크아웃 오류메시지</strong>
                                    <strong class="title">송장 오류 (기사용송장)</strong>
                                    <ul class="mList">
                                        <li>오류관련 상세내역은 네이버 페이 고객센터(1588-3849)에 문의바랍니다.</li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                     </td>
                    <td>&lt;button&gt;</td>
                    <td class="left"><a href="/suio/include/layout.php?MODULE=tooltip" class="txtWarn"><strong>2017년 3월 이후로 아이콘형으로 대체</strong></a></td>
                </tr>
                <tr>
                    <td>.icoCheckoutDelay</td>
                    <td>네이버페이발송지연</td>
                    <td class="zh_CN">NAVER PAY发货延迟</td>
                    <td class="en_US">Naverpay shipment delay</td>
                    <td><span class="icoCheckoutDelay">네이버페이발송지연</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoCheckoutDelay">네이버페이발송지연</span> 문장과 조합</td>
                </tr>
                <tr class="del">
                    <td>.mTooltip.typeCheckoutDelay</td>
                    <td>네이버페이발송지연</td>
                    <td class="zh_CN">NAVER PAY发货延迟</td>
                    <td class="en_US">Naverpay shipment delay</td>
                    <td>
                        <div class="mTooltip typeCheckoutDelay gMedium">
                            <button type="button" class="icon eTip">네이버 발송지연</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">네이버페이 발송지연 사유 안내</strong>
                                    <strong class="title">발송지연 사유 : $발송지연 사유코드 설명 ($발송지연 상세사유)</strong>
                                    <ul class="mList">
                                        <li>자세한 사유 확인은 네이버페이센터 또는 네이버페이 고객센터(1588-3819)에 문의하시기 바랍니다.<br /><a href="#none" target="_blank" title="새창 열림" class="btnLink"><span>[네이버 페이센터 바로가기<em class="icoLink"></em>]</span></a></li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                     </td>
                    <td>&lt;button&gt;</td>
                    <td class="left"><a href="/suio/include/layout.php?MODULE=tooltip" class="txtWarn"><strong>2017년 3월 이후로 아이콘형으로 대체</strong></a></td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoStorePickup</td>
                    <td>스토어픽업</td>
                    <td>store pickup</td>
                    <td><span class="icoStorePickup">스토어픽업</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoStorePickup">스토어픽업</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoFixed</td>
                    <td>고정</td>
                    <td>-</td>
                    <td><span class="icoFixed">고정</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoFixed">고정</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoNineteen</td>
                    <td>19세</td>
                    <td>-</td>
                    <td><span class="icoNineteen">19세</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoNineteen">19세</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoStock</td>
                    <td>스마트재고</td>
                    <td>-</td>
                    <td><span class="icoStock">스마트재고</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoStock">스마트재고</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoCafe24</td>
                    <td>카페24</td>
                    <td>-</td>
                    <td><span class="icoCafe24">카페24</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoCafe24">카페24</span> 문장과 조합</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mBoard gDivision">
        <table border="1" summary="">
            <caption>신규 텍스트형 아이콘</caption>
            <colgroup>
                <col style="width:15%;" />
                <col style="width:13%;" />
                <col style="width:13%;" />
                <col style="width:13%;" />
                <col style="width:13%;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Class Name</th>
                    <th scope="col">한국어</th>
                    <th scope="col">中文</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Tag</th>
                    <th scope="col">적용 예제 适用例子</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>.icoNecessary</td>
                    <td>필독</td>
                    <td>-</td>
                    <td><strong class="txtSFIX icoNecessary">필독</strong></td>
                    <td>&lt;strong&gt;</td>
                    <td class="left">문장과 조합 <strong class="txtSFIX icoNecessary">필수</strong></td>
                </tr>
                <tr>
                    <td>.icoBest</td>
                    <td>BEST</td>
                    <td>-</td>
                    <td><strong class="txtSFIX icoBest">BEST</strong></td>
                    <td>&lt;strong&gt;</td>
                    <td class="left">문장과 조합 <strong class="txtSFIX icoBest">BEST</strong></td>
                </tr>
                <tr>
                    <td>.icoNew</td>
                    <td>NEW</td>
                    <td>-</td>
                    <td><strong class="txtSFIX icoNew">NEW</strong></td>
                    <td>&lt;strong&gt;</td>
                    <td class="left">문장과 조합 <strong class="txtSFIX icoNew">NEW</strong></td>
                </tr>
                <tr>
                    <td>.icoReserve</td>
                    <td>예약주문</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoReserve">예약주문</span> <span class="txtSFIX icoReserve mini">예약주문</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left">문장과 조합 <span class="txtSFIX icoReserve">예약주문</span></td>
                </tr>
                <tr>
                    <td>.icoSetSplit</td>
                    <td>세트(분리형)</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoSetSplit">세트(분리형)</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoSetSplit">세트(분리형)</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoSetAll</td>
                    <td>세트(일체형)</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoSetAll">세트(일체형)</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoSetAll">세트(일체형)</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoReady</td>
                    <td>준비</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoReady">준비</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoReady">준비</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoPossible</td>
                    <td>가능</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoPossible">가능</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoPossible">가능</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoImpossible</td>
                    <td>불가</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoImpossible">불가</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoImpossible">불가</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoComplete</td>
                    <td>완료</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoComplete">완료</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoComplete">완료</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoOrder</td>
                    <td>주문</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoOrder">주문</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoOrder">주문</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoBundleBan</td>
                    <td>합포금지</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoBundleBan">합포금지</span> <span class="txtSFIX icoBundleBan mini">합포금지</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoBundleBan">합포금지</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoSendFail</td>
                    <td>전송실패</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoSendFail">전송실패</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoSendFail">전송실패</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center">
                <tr>
                    <td>.icoSalesFail</td>
                    <td>매출확인실패</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoSalesFail">매출확인실패</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoSalesFail">매출확인실패</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoAddressChange</td>
                    <td>주소변경</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoAddressChange">주소변경</span> <span class="txtSFIX icoAddressChange mini">주소변경</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoAddressChange">주소변경</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoRemindMe / .icoRemindMeBenefit</td>
                    <td>리마인드Me</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoRemindMe">리마인드Me</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoRemindMe">리마인드Me</span> 문장과 조합
                        <span class="mList">( <span class="txtSFIX icoRemindMeBenefit">리마인드Me</span> 는 현재 사용되지 않지만 이후 기능개선 될 수 있음)</span>
                    </td>
                </tr>
                <tr>
                    <td>.icoStoreRegister</td>
                    <td>매장등록</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoStoreRegister">매장등록</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoStoreRegister">매장등록</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoSeparatePrint</td>
                    <td>별도인쇄</td>
                    <td>-</td>
                    <td><span class="txtSFIX icoSeparatePrint">별도인쇄</span> <span class="txtSFIX icoSeparatePrint mini">별도인쇄</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoSeparatePrint">별도인쇄</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoMarketProduct</td>
                    <td>마켓자체등록상품</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoMarketProduct">마켓자체등록상품</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoMarketProduct">마켓자체등록상품</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoMarketFail</td>
                    <td>마켓전송실패</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoMarketFail">마켓전송실패</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoMarketFail">마켓전송실패</span> 문장과 조합</td>
                </tr>
                <tr class="del">
                    <td>.mTooltip.typeMarketFail</td>
                    <td>마켓전송실패</td>
                    <td>-</td>
                    <td>
                        <div class="mTooltip typeMarketFail gMedium">
                            <button type="button" class="icon eTip">마켓전송실패</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">마켓전송 실패사유 안내</strong>
                                    <strong class="title">인증 유효기간이 만료되었습니다.</strong>
                                    <ul class="mList">
                                        <li>[마켓통합관리 &gt; 서비스설정 &gt; 마켓 정보 설정]에서 회원 인증을 다시 받으신 후 주문 처리를 해주시기 바랍니다.<br /><a href="#none" target="_blank" title="새창 열림" class="btnLink"><span>[마켓정보설정 바로가기<em class="icoLink"></em>]</span></a></li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                     </td>
                    <td>&lt;button&gt;</td>
                    <td class="left"><a href="/suio/include/layout.php?MODULE=tooltip" class="txtWarn"><strong>2017년 3월 이후로 아이콘형으로 대체</strong></a></td>
                </tr>
                <tr>
                    <td>.icoInvoiceFail</td>
                    <td>송장전송실패</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoInvoiceFail">송장전송실패</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoInvoiceFail">마켓전송실패</span> 문장과 조합</td>
                </tr>
                <tr class="del">
                    <td>.mTooltip.typeInvoiceFail</td>
                    <td>송장전송실패</td>
                    <td>-</td>
                    <td>
                        <div class="mTooltip typeInvoiceFail gMedium">
                            <button type="button" class="icon eTip">송장전송실패</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">송장전송 실패사유 안내</strong>
                                    <strong class="title">운송장 번호가 올바르지 않습니다.</strong>
                                    <ul class="mList">
                                        <li>다시 송장 번호를 받으신 후 전송하시기 바랍니다.</li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                     </td>
                    <td>&lt;button&gt;</td>
                    <td class="left"><a href="/suio/include/layout.php?MODULE=tooltip" class="txtWarn"><strong>2017년 3월 이후로 아이콘형으로 대체</strong></a></td>
                </tr>
                <tr>
                    <td>.icoNumFail</td>
                    <td>송장채번실패</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoNumFail">송장채번실패</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoInvoiceFail">마켓전송실패</span> 문장과 조합</td>
                </tr>
                <tr class="del">
                    <td>.mTooltip.typeNumFail</td>
                    <td>송장채번실패</td>
                    <td>-</td>
                    <td>
                        <div class="mTooltip typeNumFail gMedium">
                            <button type="button" class="icon eTip">송장채번실패</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">송장채번 실패사유 안내</strong>
                                    <strong class="title">송장 채번 중 오류가 발생했습니다.</strong>
                                    <ul class="mList">
                                        <li>잠시 후 다시 시도해 주시기 바랍니다.</li>
                                        <li>이슈가 계속 지속될 경우 고객센터 (1588-3413)로 문의해 주시기 바랍니다.</li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                     </td>
                    <td>&lt;button&gt;</td>
                    <td class="left"><a href="/suio/include/layout.php?MODULE=tooltip" class="txtWarn"><strong>2017년 3월 이후로 아이콘형으로 대체</strong></a></td>
                </tr>
                <tr>
                    <td>.icoRegisterFail</td>
                    <td>송장등록실패</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoRegisterFail">송장등록실패</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoRegisterFail">송장등록실패</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoLifetime</td>
                    <td>평생회원</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoLifetime">평생회원</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoLifetime">평생회원</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center">
                <tr>
                    <td>.icoMembership</td>
                    <td>통합멤버십</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoMembership">통합멤버십</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoMembership">통합멤버십</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoServiceInUse</td>
                    <td>서비스사용중</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoServiceInUse">서비스사용중</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoServiceInUse">서비스사용중</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoServiceNotUse</td>
                    <td>서비스사용안함</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoServiceNotUse">서비스사용안함</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoServiceNotUse">서비스사용안함</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoStateRegister</td>
                    <td>등록</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoStateRegister">등록</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoStateRegister">등록</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoStateReceipt</td>
                    <td>접수</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoStateReceipt">접수</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoStateReceipt">접수</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoStateInvoice</td>
                    <td>송장</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoStateInvoice">송장</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoStateInvoice">송장</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoStateOut</td>
                    <td>출고</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoStateOut">출고</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoStateOut">출고</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoHolding</td>
                    <td>보류</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoHolding">보류</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoHolding">보류</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoHandling</td>
                    <td>처리</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoHandling">처리</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoHandling">처리</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoLink, .icoUnlink</td>
                    <td>연동, 미연동</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoLink">연동</span>
                        <span class="txtSFIX icoUnlink">미연동</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoLink">연동</span> <span class="txtSFIX icoUnlink">미연동</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoManageLog</td>
                    <td>처리로그</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoManageLog">처리로그</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoManageLog">처리로그</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoNormal</td>
                    <td>정상</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoNormal">정상</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoNormal">정상</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoDeliveryPart</td>
                    <td>부분배송</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoDeliveryPart">부분배송</span>
                        <span class="txtSFIX icoDeliveryPart mini">부분배송</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoDeliveryPart">부분배송</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center">
                <tr>
                    <td>.icoAssign</td>
                    <td>할당</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoAssign">할당</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoAssign">할당</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoAssignNot</td>
                    <td>미할당</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoAssignNot">미할당</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoAssignNot">미할당</span> 문장과 조합</td>
                </tr>
                <tr class="del">
                    <td>.icoPriority</td>
                    <td>우선할당</td>
                    <td class="zh_CN">优先分配</td>
                    <td class="en_US">Priority allocation</td>
                    <td><span class="icoPriority">우선할당</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoPriority">우선할당</span> 문장과 조합
                        <span class="mList">( <span class="icoPriority">우선할당</span> 은 구버전 아이콘 방식이지만 그룹으로 구분하기 위해 위치 변경함 )</span>
                    </td>
                </tr>
                <tr>
                    <td>.icoAssignFirst</td>
                    <td>우선할당</td>
                    <td class="zh_CN">优先分配</td>
                    <td class="en_US">Priority allocation</td>
                    <td><span class="txtSFIX icoAssignFirst">우선할당</span> <span class="txtSFIX icoAssignFirst mini">우선할당</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoAssignFirst">우선할당</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoAssignAuto</td>
                    <td>자동할당</td>
                    <td>-</td>
                    <td>
                        <span class="txtSFIX icoAssignAuto">자동할당</span>
                        <span class="txtSFIX icoAssignAuto mini">자동할당</span>
                     </td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="txtSFIX icoAssignAuto">자동할당</span> 문장과 조합</td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>이미지형 아이콘 <span class="zh_CN">图片型icon</span><span class="en_US">Image type icon</span></h3>
    <div class="mBox typeBorder">//img.echosting.cafe24.com/suio/sfix_icon_image.png</div>
    <ol>
        <li>&lt;span&gt; + ico[$Name] : 아이콘과 문장간의 간격은 1space로 한다.</li>
        <li>기본은 &lt;span&gt; 태그를 사용하고 강조성 아이콘은 &lt;strong&gt; 태그, 링크는 &lt;a&gt; 태그를 사용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>&lt;span&gt; + ico[$Name] : icon与文章间距定为1space。</li>
        <li>默认用 &lt;span&gt; 标签，强调型icon用 &lt;strong&gt; 标签，链接用 &lt;a&gt; 标签。</li>
    </ol>
    <ol class="en_US">
        <li>&lt;span&gt; + ico[$Name] : The space between the icon and the text is 1space.</li>
        <li>The basic is to use the tag &lt;span&gt; and for the highlighted icon the &lt;strong&gt;, and the link the &lt;a&gt;.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>항목 이동 버튼</caption>
            <colgroup>
                <col style="width:15%;" />
                <col style="width:15%;" />
                <col style="width:15%;" />
                <col style="width:55%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Class Name</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Tag</th>
                    <th scope="col">적용 예제 <span class="zh_CN">适用例子</span><span class="en_US">(번역필요)</span></th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>.icoPrint</td>
                    <td><span class="icoPrint">인쇄</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoPrint">인쇄</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoNew</td>
                    <td><strong class="icoNew">NEW</strong></td>
                    <td>&lt;strong&gt;</td>
                    <td class="left"><span class="icoNew">NEW</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoFile</td>
                    <td><span class="icoFile">첨부파일</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left">
                        <span class="icoFile">첨부파일</span> 문장과 조합<br />
                        링크는 <a class="btnFile" href="#none">file_name.JPG</a>로 적용한다. <span class="zh_CN">链接适用file_name.JPG。 </span><span class="en_US">The link applies the file_name.JPG.</span><a class="btnFile" href="#none">file_name.JPG</a>
                    </td>
                </tr>
                <tr>
                    <td>.icoUp</td>
                    <td><span class="icoUp">상승</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoUp">상승</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoDown</td>
                    <td><span class="icoDown">하락</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoDown">하락</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoShop</td>
                    <td><span class="icoShop">쇼핑몰</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left">
                        <div class="headingArea">
                            <div class="mTitle">
                                <h1>headingArea</h1>
                                <span class="icoShop">쇼핑몰</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>.gIcoShop &gt; .icoShop</td>
                    <td>
                        <div class="gIcoShop">
                            <span title="쇼핑몰별" class="icoShop">쇼핑몰별</span>
                        </div>
                    </td>
                    <td>&lt;span&gt;</td>
                    <td class="left">
                        <div class="gIcoShop">
                            <span title="쇼핑몰별" class="icoShop">쇼핑몰별</span>
                            .mBoard에서 쓰이며 [td &gt; .gIcoShop &gt; 컨텐츠 + .icoShop] 와 같이 사용.
                            <p class="zh_CN">在mBoard使用，与[td> .glcoShop>内容+.coShop]一并使用。</p>
                            <p class="en_US">It is used in .mBoard and utilized along with the [td &gt; .gIcoShop &gt; 컨텐츠 + .icoShop].</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>.icoDot</td>
                    <td><span class="icoDot"></span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoDot"></span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoDepth</td>
                    <td><span class="icoDepth"></span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoDepth"></span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoFix</td>
                    <td><span class="icoFix">고정</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoFix">고정</span> 문장과 조합 </td>
                </tr>
                <tr>
                    <td>.icoFix + undo</td>
                    <td><span class="icoFix undo">고정해제</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoFix undo">고정해제</span> 문장과 조합 </td>
                </tr>
                <tr>
                    <td>.icoChecked</td>
                    <td><span class="icoChecked">선택됨</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left">
                        <span class="icoChecked">선택됨</span> 이미 추가되어 선택할 수 없는 항목등에 적용하며, input[type="checkbox"]에 대응하여 사용한다.<br />
                        <span class="icoChecked">선택됨</span> <span class="zh_CN">适用于已添加完毕后，导致无法选择的项目，须对应input[type="checkbox"]使用。</span>
                        <span class="en_US">Apply in the contents that are added already and cannot be picked, and use them in accordance with the input[type="checkbox"].</span>
                    </td>
                </tr>
                <tr>
                    <td>.icoLock</td>
                    <td><span class="icoLock">비밀글</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="icoLock">비밀글</span> 문장과 조합 </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mBoard gDivision">
        <table border="1" summary="">
            <caption>신규 이미지형 아이콘</caption>
            <colgroup>
                <col style="width:15%;" />
                <col style="width:15%;" />
                <col style="width:15%;" />
                <col style="width:55%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Class Name</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Tag</th>
                    <th scope="col">적용 예제 适用例子</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>.imgSFIX.icoMobile</td>
                    <td><span class="imgSFIX icoMobile">모바일</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="imgSFIX icoMobile">모바일</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.imgSFIX.icoSpam</td>
                    <td><span class="imgSFIX icoSpam">스팸글</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="imgSFIX icoSpam">스팸글</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.imgSFIX.icoDrag</td>
                    <td><span class="imgSFIX icoDrag">드래그</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="imgSFIX icoDrag">드래그</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.imgSFIX.icoWarn</td>
                    <td><span class="imgSFIX icoWarn">경고 안내</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="imgSFIX icoWarn">경고 안내</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.imgSFIX.icoHelp</td>
                    <td><span class="imgSFIX icoHelp">도움말</span></td>
                    <td>&lt;span&gt;</td>
                    <td class="left"><span class="imgSFIX icoHelp">도움말</span> 문장과 조합</td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>가이드형 아이콘 <span class="zh_CN">指南型icon</span><span class="en_US">A guide type icon</span></h3>
    <div class="mBox typeBorder">//img.echosting.cafe24.com/suio/sfix_icon_guide.png</div>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>항목 이동 버튼</caption>
            <colgroup>
                <col style="width:12%;" />
                <col style="width:10%;" />
                <col style="width:10%;" />
                <col style="width:12%;" />
                <col style="width:12%;" />
                <col style="width:8%;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Class Name</th>
                    <th scope="col">한국어</th>
                    <th scope="col"><span class="zh_CN">中文</span><span class="en_US">English</span></th>
                    <th scope="col">Icon</th>
                    <th scope="col">버튼 <span class="zh_CN">按钮</span><span class="en_US">Button</span></th>
                    <th scope="col">Tag</th>
                    <th scope="col">적용 예제 <span class="zh_CN">适用例子</span><span class="en_US">(번역필요)</span></th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>.icoDesign</td>
                    <td>디자인설정안내</td>
                    <td><span class="zh_CN">设计指南</span><span class="en_US">Guide for design setting</span></td>
                    <td><span class="icoDesign">디자인설정안내</span></td>
                    <td><a href="#none" target="_blank" title="새창 열림" class="icoDesign">디자인설정안내</a></td>
                    <td>&lt;span&gt; &lt;a&gt;</td>
                    <td class="left">문장과 조합 <span class="icoDesign">디자인설정안내</span></td>
                </tr>
            </tbody>
            <tbody class="center bgDivision">
                <tr>
                    <td>.icoLaw</td>
                    <td>법적고지</td>
                    <td><span class="zh_CN">法律公告</span><span class="en_US">Legal notice</span></td>
                    <td><span class="icoLaw">법적고지</span></td>
                    <td><a href="#none" target="_blank" title="새창 열림" class="icoLaw">법적고지</a></td>
                    <td>&lt;span&gt; &lt;a&gt;</td>
                    <td class="left">문장과 조합 <span class="icoLaw">법적고지</span></td>
                </tr>
                <tr>
                    <td>.icoLawAdvice</td>
                    <td>법적권고</td>
                    <td><span class="zh_CN">法律劝告</span><span class="en_US">Legal advice</span></td>
                    <td><span class="icoLawAdvice">법적권고</span></td>
                    <td><a href="none" class="icoLawAdvice">법적권고</a></td>
                    <td>&lt;span&gt; &lt;a&gt;</td>
                    <td class="left"><span class="icoLawAdvice">법적권고</span> 문장과 조합</td>
                </tr>
                <tr>
                    <td>.icoLawViolation</td>
                    <td>법률위반위험</td>
                    <td><span class="zh_CN">法律风险</span><span class="en_US">Legal violation risk</span></td>
                    <td><span class="icoLawViolation">법률위반위험</span></td>
                    <td><a href="#none" class="icoLawViolation">법률위반위험</a></td>
                    <td>&lt;span&gt; &lt;a&gt;</td>
                    <td class="left"><span class="icoLawViolation">법률위반위험</span> 문장과 조합</td>
                </tr>
            </tbody>
            <tbody class="center">
                <tr>
                    <td>.icoPdf.password</td>
                    <td>패스워드설정가이드</td>
                    <td><span class="zh_CN">密码设置指南</span><span class="en_US">password setting guide</span></td>
                    <td><span class="icoPdf password">패스워드설정가이드</span></td>
                    <td><a href="#none" target="_blank" title="새창 열림" class="icoPdf password">패스워드설정가이드</a></td>
                    <td>&lt;span&gt; &lt;a&gt;</td>
                    <td class="left">
                        문장과 조합 <span class="icoPdf password">패스워드설정가이드</span><br />
                        <span class="en_US">Password setting guide with text combination <span class="icoPdf password">패스워드설정가이드</span></span><br />
                        pdf 는 여러 문장과 조합되므로 다중class로 정의한다.<br />
                        <span class="zh_CN">pdf icon可与多种text组合，为提高css效率，所以定义为多个class。</span>
                        <span class="en_US">Multiple classes are defined because the pdf can be combined with the various texts.</span>
                    </td>
                </tr>
                <tr>
                    <td>.icoInfo</td>
                    <td>공지사항 링크, 안내</td>
                    <td><span class="zh_CN">公告事项链接、指南</span><span class="en_US">Announcement link, guide</span></td>
                    <td>-</td>
                    <td><a href="#none" target="_blank" title="새창 열림" class="icoInfo">안내</a></td>
                    <td>&lt;a&gt;</td>
                    <td class="left">
                        다른 가이드형 아이콘과 달리, 텍스트는 시스템폰트 처리한다.
                        <p class="zh_CN">与其他指南类的图标不同，text需作系统字体处理。</p>
                        <p class="en_US">(번역필요)</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>결제수단 아이콘 <span class="zh_CN">支付方式icon</span><span class="en_US">payment icon</span></h3>
    <ol>
        <li>어드민과 스마트디자인 프론트에 함께 사용된다.</li>
        <li>항상 <a href="/ec_mobile/guide/icon.html" class="txtEm">[모바일 아이콘]</a>과 양쪽도 업데이트가 이루어 져야한다. 모바일에서는 리사이징만 하므로 별도의 이미지가 필요없다.</li>
    </ol>
    <ol class="zh_CN">
        <li>在admin和SmartDesignSkin都能使用。</li>
        <li>본사</li>
    </ol>
    <ol class="en_US">
        <li>It is used in the front of Admin and Smart Design.</li>
        <li>The <a href="/ec_mobile/guide/icon.html" class="txtEm">[mobile icon]</a> and the both sides should be updated always. In mobile, additional image is no need because only the resizing is required.</li>
    </ol>
', 'html' => '
    <div class="mBoard gLarge">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <tbody>
                <tr>
                    <th scope="row">16 X 16</th>
                    <td>
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_bankbook.gif" alt="무통장입금" title="무통장입금" />
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_mileage.gif" alt="적립금" title="적립금" />
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_deposit.gif" alt="예치금" title="예치금" />
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_coupon.gif" alt="쿠폰" title="쿠폰" />
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_paypal.gif" alt="페이팔" title="페이팔" />
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_daibiki.gif" alt="다이비키" title="다이비키" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_card.gif" alt="신용카드결제" title="신용카드결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_realtime1.gif" alt="실시간계좌이체" title="실시간계좌이체" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_mobile.gif" alt="휴대폰결제" title="휴대폰결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_account.gif" alt="가상계좌" title="가상계좌" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_escrow.gif" alt="에스크로가상계좌(하나은행)" title="에스크로가상계좌(하나은행)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_escrow3.gif" alt="에스크로(가상계좌)" title="에스크로(가상계좌)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_realtime2.gif" alt="에스크로(실시간계좌이체)" title="에스크로(실시간계좌이체)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_bpoint.gif" alt="B2B포인트" title="B2B포인트" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_market.gif" alt="마켓할인" title="마켓할인" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_delivery.gif" alt="착불" title="착불" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_insurance.gif" alt="전자보증보험" title="전자보증보험" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_cash.gif" alt="현금영수증" title="현금영수증" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_kpay_card.gif" alt="케이페이 신용카드결제" title="케이페이 신용카드결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_paynow_card.gif" alt="페이나우 신용카드결제" title="페이나우 신용카드결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_paynow_realtime.gif" alt="페이나우 실시간계좌이체" title="페이나우 실시간계좌이체" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco_card.gif" alt="페이코 신용카드결제" title="페이코 신용카드결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco_realtime.gif" alt="페이코 실시간계좌이체" title="페이코 실시간계좌이체" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco_account.gif" alt="페이코 가상계좌" title="페이코 가상계좌" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_kakaopay_card.gif" alt="카카오페이 신용카드결제" title="카카오페이 신용카드결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_kakaopay_money.gif" alt="카카오페이 카카오머니결제" title="카카오페이 카카오머니결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_kpay.gif" alt="케이페이" title="케이페이" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_paynow.gif" alt="페이나우" title="페이나우" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco.gif" alt="페이코" title="페이코" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco_escrow_realtime.gif" alt="페이코 에스크로 실시간 계좌이체" title="페이코 에스크로 실시간 계좌이체" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_paycoo_escrow_vitual.gif" alt="페이코 에스크로 가상계좌" title="페이코 에스크로 가상계좌" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco_point.gif" alt="페이코 포인트" title="페이코 포인트" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_kakaopay.gif" alt="카카오페이" title="카카오페이" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_ok.gif" alt="오케이캐쉬백" title="오케이캐쉬백" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_point.gif" alt="포인트" title="포인트" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_alipay.gif" alt="알리페이" title="알리페이" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_eximbay.gif" alt="엑심베이" title="엑심베이" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_axes.gif" alt="엑시즈" title="엑시즈" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_axes_over.gif" alt="엑시즈(과잉입금)" title="엑시즈(과잉입금)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_etc.gif" alt="기타" title="기타" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_ars.gif" alt="전화ARS" title="전화ARS" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_partner1.gif" alt="제휴사결제(GS)" title="제휴사결제(GS)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_partner2.gif" alt="제휴사결제(INTERPARK)" title="제휴사결제(INTERPARK)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_naver_mileage.gif" alt="네이버마일리지" title="네이버마일리지" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_naver_cash.gif" alt="네이버캐쉬" title="네이버캐쉬" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_naver_account.gif" alt="네이버안심결제가상계좌" title="네이버안심결제가상계좌" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_naver_card.gif" alt="네이버안심결제카드" title="네이버안심결제카드" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_naver_realtime.gif" alt="네이버안심실시간계좌" title="네이버안심실시간계좌" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_np.gif" alt="NP後払い" title="NP後払い" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_gmo.gif" alt="GMO後払い" title="GMO後払い" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_huodaofukuan.gif" alt="货到付款" title="货到付款" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_postpaid.gif" alt="후불결제" title="후불결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_mileage_expect.gif" alt="적립예정" title="적립예정" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_softbank.gif" alt="softbank" title="softbank" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_ecpay.gif" alt="ECPay" title="ECPay" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_membership.gif" alt="통합포인트" title="통합포인트" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">13 X 13</th>
                    <td>
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_bankbook2.gif" alt="무통장입금" title="무통장입금" />
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_mileage2.gif" alt="적립금" title="적립금" />
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_deposit2.gif" alt="예치금" title="예치금" />
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_coupon2.gif" alt="쿠폰" title="쿠폰" />
                        <img src="//img.echosting.cafe24.com/icon/ko_KR/ico_pay_daibiki2.gif" alt="다이비키" title="다이비키" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_card2.gif" alt="신용카드결제" title="신용카드결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_realtime3.gif" alt="실시간계좌이체" title="실시간계좌이체" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_mobile2.gif" alt="휴대폰결제" title="휴대폰결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_account2.gif" alt="가상계좌" title="가상계좌" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_escrow2.gif" alt="에스크로가상계좌(하나은행)" title="에스크로가상계좌(하나은행)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_escrow4.gif" alt="에스크로(가상계좌)" title="에스크로(가상계좌)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_realtime4.gif" alt="에스크로(실시간계좌이체)" title="에스크로(실시간계좌이체)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_bpoint2.gif" alt="B2B포인트" title="B2B포인트" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_market2.gif" alt="마켓할인" title="마켓할인" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_delivery2.gif" alt="착불" title="착불" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_insurance2.gif" alt="전자보증보험" title="전자보증보험" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_kpay_card2.gif" alt="케이페이 신용카드결제" title="케이페이 신용카드결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_paynow_card2.gif" alt="페이나우 신용카드결제" title="페이나우 신용카드결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_paynow_realtime2.gif" alt="페이나우 실시간계좌이체" title="페이나우 실시간계좌이체" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco_card2.gif" alt="페이코 신용카드결제" title="페이코 신용카드결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco_realtime2.gif" alt="페이코 실시간계좌이체" title="페이코 실시간계좌이체" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco_account2.gif" alt="페이코 가상계좌" title="페이코 가상계좌" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco_escrow_realtime2.gif" alt="페이코 에스크로 실시간 계좌이체" title="페이코 에스크로 실시간 계좌이체" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_paycoo_escrow_vitual2.gif" alt="페이코 에스크로 가상계좌" title="페이코 에스크로 가상계좌" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco_point2.gif" alt="페이코 포인트" title="페이코 포인트" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_kakaopay_card2.gif" alt="카카오페이 신용카드결제" title="카카오페이 신용카드결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_kakaopay_money2.gif" alt="카카오페이 카카오머니결제" title="카카오페이 카카오머니결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_kpay2.gif" alt="케이페이" title="케이페이" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_paynow2.gif" alt="페이나우" title="페이나우" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_payco2.gif" alt="페이코" title="페이코" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_kakaopay2.gif" alt="카카오페이" title="카카오페이" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_etc2.gif" alt="기타" title="기타" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_naver_mileage2.gif" alt="네이버마일리지" title="네이버마일리지" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_naver_cash2.gif" alt="네이버캐쉬" title="네이버캐쉬" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_np2.gif" alt="NP後払い" title="NP後払い" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_gmo2.gif" alt="GMO後払い" title="GMO後払い" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_huodaofukuan2.gif" alt="货到付款" title="货到付款" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_postpaid2.gif" alt="후불결제" title="후불결제" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_softbank2.gif" alt="softbank" title="softbank" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_ecpay2.gif" alt="ECPay" title="ECPay" />
                        <img src="//img.echosting.cafe24.com/icon/ico_pay_membership2.gif" alt="통합포인트" title="통합포인트" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        주문/매출경로/마켓연동<br />
                        <span class="zh_CN">订购/销售渠道/市场联动</span><span class="en_US">order/sales route/market merge</span>
                    </th>
                    <td>
                        <img src="//img.echosting.cafe24.com/icon/ico_route_cafe24.gif" alt="카페24" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_social.gif" alt="소셜커머스" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_mobile.gif" alt="모바일쇼핑몰" />
                        <!-- img src="//img.echosting.cafe24.com/icon/ico_route_mobile_app.gif" alt="모바일앱" /  2017.12.13 삭제 -->
                        <img src="//img.echosting.cafe24.com/icon/ico_route_app.gif" alt="모바일앱" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_plusapp.gif" alt="플래스앱" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_interpark.gif" alt="인터파크" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_openstyle.gif" alt="인터파크 오픈스타일" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_naver.gif" alt="네이버" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_naver_shopping.gif" alt="네이버 지식쇼핑" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_naver_checkout1.gif" alt="네이버 페이" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_naver_checkout2.gif" alt="네이버 페이" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_auction.gif" alt="옥션" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_about.gif" alt="옥션 어바웃" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_sk11st.gif" alt="11번가" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_gmarket.gif" alt="G마켓" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_daum.gif" alt="다음" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_shoppingone.gif" alt="다음 쇼핑원" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_yahoo.gif" alt="야후" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_yahoo_soho.gif" alt="야후 패션소호" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_overture.gif" alt="오버추어(스폰서링크)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_nate.gif" alt="네이트" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_coupang.gif" alt="쿠팡" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_google.gif" alt="구글" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_paran.gif" alt="파란" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_msn.gif" alt="MSN" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_livelinkon.gif" alt="바로가기(링콘)" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_etc.gif" alt="기타" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_b2b.gif" alt="B2B" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_shopn.gif" alt="스토어팜" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_hanafos.gif" alt="하나포스" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_rakuten.gif" alt="라쿠텐" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_amazon.gif" alt="아마존" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_tmall.gif" alt="티몰" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_jd.gif" alt="경동상청" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_mogujie.gif" alt="모구지에" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_lazada.gif" alt="라자다" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_ssg.gif" alt="SSG 마켓" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_alipay.gif" alt="알리페이" />
                        <img src="//img.echosting.cafe24.com/icon/ico_route_zigzag.gif" alt="지그재그" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">mobile app</th>
                    <td>
                        <img src="//img.echosting.cafe24.com/icon/ico_mobile_android.gif" alt="안드로이드" />
                        <img src="//img.echosting.cafe24.com/icon/ico_mobile_ios.gif" alt="iOS" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mBoard gLarge">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <tbody>
                <tr>
                    <th scope="row">EC Japan 16 X 16</th>
                    <td>
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_bankbook.gif" alt="銀行振込" title="銀行振込" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_mileage.gif" alt="ポイント" title="ポイント" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_deposit.gif" alt="預り金" title="預り金" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_coupon.gif" alt="クーポン" title="クーポン" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_paypal.gif" alt="PayPal" title="PayPal" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_daibiki.gif" alt="代金引換" title="代金引換" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_credit.gif" alt="SB(クレジットカード決済)" title="SB(クレジットカード決済)" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_store.gif" alt="SB(コンビニ決済)" title="SB(コンビニ決済)" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_softbank.gif" alt="SB(ソフトバンクまとめて支払い)" title="SB(ソフトバンクまとめて支払い)" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_docomo.gif" alt="SB(ドコモ ケータイ払い)" title="SB(ドコモ ケータイ払い)" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_au.gif" alt="SB(auかんたん決済)" title="SB(auかんたん決済)" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_payeasy.gif" alt="SB(Pay-easy決済)" title="SB(Pay-easy決済)" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">EC Japan 13 X 13</th>
                    <td>
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_bankbook2.gif" alt="銀行振込" title="銀行振込" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_mileage2.gif" alt="ポイント" title="ポイント" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_deposit2.gif" alt="預り金" title="預り金" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_coupon2.gif" alt="クーポン" title="クーポン" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_paypal2.gif" alt="PayPal" title="PayPal" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_daibiki2.gif" alt="代金引換" title="代金引換" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_credit2.gif" alt="SB(クレジットカード決済)" title="SB(クレジットカード決済)" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_store2.gif" alt="SB(コンビニ決済)" title="SB(コンビニ決済)" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_softbank2.gif" alt="SB(ソフトバンクまとめて支払い)" title="SB(ソフトバンクまとめて支払い)" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_docomo2.gif" alt="SB(ドコモ ケータイ払い)" title="SB(ドコモ ケータイ払い)" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_au2.gif" alt="SB(auかんたん決済)" title="SB(auかんたん決済)" />
                        <img src="//img.echosting.cafe24.com/icon/ja_JP/ico_pay_softbank_payeasy2.gif" alt="SB(Pay-easy決済)" title="SB(Pay-easy決済)" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>
