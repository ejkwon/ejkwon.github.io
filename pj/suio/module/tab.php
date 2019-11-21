<?php

// 모듈 전체 제목
$header_name = 'mTab';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>다른 페이지로 이동하는 탭(typeNav) / 페이지 내 컨텐츠를 구분하는 탭(typeTab) 2가지 타입으로 분리된다.</li>
        <li>일반형과 확장형(하위메뉴가 있는 경우)을 구분하여 사용한다.</li>
        <li>상황에 따라 section으로 감싸지 않아도 된다.</li>
    </ol>
    <ol class="zh_CN">
        <li>分为移向其他页面的tab（typeNav）/区分页面contents的tab（typeTab）两种类型。</li>
        <li>使用时要区分一般型和扩展型（有下级菜单时）。</li>
        <li>根据具体情况，可以不用section套住。</li>
    </ol>
    <ol class="en_US">
        <li>It is divided to 2, which are a tab(typeNav) to move to a different page and the other tab(typeTab) that separate the contents in a page.</li>
        <li>The general type and extended type(in case there are the child menu) are divided to be used.</li>
        <li>It is no need to cover with the section, followed by different circumstances.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
    .mTab.typeTab { outline:0; }
    .tabCont { margin:0 0 20px; }
    </style>
';

// SUIO 업데이트 알림창
$update_notice = '
    <div id="updateNotice">
        <h2>SUIO 업데이트 알림</h2>
        <div id="noticefakeScroll">
            <ul class="list">
                <li>
                    <p class="info"><span class="date">2018.05.24</span><span class="writer">전영학</span></p>
                    <ul class="title">
                        <li><strong>[mTab > gRight]</strong> 오른쪽 버튼 추가 <a href="/solution/marketing/soho/office/member/desk_info.html" class="btnLink" target="_blank">창업센터 어드민 - 데스크 정보 관리</a></li>
                    </ul>
                </li>
                <li>
                    <p class="info"><span class="date">2016.12.12</span><span class="writer">송유진</span></p>
                    <ul class="title">
                        <li><strong>[mTab + typeOption]</strong> 메뉴처럼 이동할때 사용하는 탭. <a href="/smartAdmin/product/manage/display/reserve_display.html" class="btnLink" target="_blank">상품 진열 예약</a></li>
                    </ul>
                </li>
                <li>
                    <p class="info"><span class="date">2016.10.25</span><span class="writer">김철준</span></p>
                    <ul class="title">
                        <li><strong>[mTab + typeNav]</strong> 특수상황으로 인한 eTab 사용 가능. <a href="/smartAdmin/mobile/app/benefit.html" class="btnLink" target="_blank">参考</a></li>
                    </ul>
                </li>
            </ul>

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
    <h3>[mTab + typeNav]</h3>
    <ol>
        <li>다른 페이지로 이동하는 탭. 대제목 .headingArea 바로 아래에 위치한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>移向其他页面的tab。位于大标题.headingArea正下方 (特殊要求时可用eTab)。</li>
    </ol>
    <ol class="en_US">
        <li>A tab to move to a different page, which is situated right under the first title .headingArea.</li>
    </ol>
', 'html' => '
    <div class="mTab typeNav">
        <ul>
            <li><a href="#none">페이지 이동 탭</a></li>
            <li class="selected"><a href="#none">페이지 이동 탭</a></li>
            <li><a href="#none">페이지 이동 탭</a></li>
        </ul>
        <div class="gRight">
            안내문구입니다.
            <div class="mTooltip gSmall">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">대제목</strong>
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                        </ul>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <a href="#none" class="btnNormal"><span>설정</span></a>
            <a href="#none" class="btnCtrl"><span>설정</span></a>
        </div>
    </div>
    <div class="mTab typeNav zh_CN">
        <ul>
            <li><a href="#none">页面移动tab </a></li>
            <li class="selected"><a href="#none">页面移动tab</a></li>
            <li><a href="#none">页面移动tab</a></li>
        </ul>
        <div class="gRight">
            当有一般文本的情况
            <div class="mTooltip gSmall">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">대제목</strong>
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                        </ul>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <a href="#none" class="btnNormal"><span>설정</span></a>
            <a href="#none" class="btnCtrl"><span>설정</span></a>
        </div>
    </div>
    <div class="mTab typeNav en_US">
        <ul>
            <li><a href="#none">moving page tab</a></li>
            <li class="selected"><a href="#none">moving page tab</a></li>
            <li><a href="#none">moving page tab</a></li>
        </ul>
        <div class="gRight">
            This is text.
            <div class="mTooltip gSmall">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">대제목</strong>
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                        </ul>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <a href="#none" class="btnNormal"><span>설정</span></a>
            <a href="#none" class="btnCtrl"><span>설정</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mTab + typeTab]</h3>
    <ol>
        <li>페이지 내에서 컨텐츠를 구분 할 때 사용하는 탭</li>
        <li>강조가 필요한 경우 .important 를 추가한다. EC몰 어드민에서 주문관리에서만 사용된다. </li>
    </ol>
    <ol class="zh_CN">
        <li>区分页面contents的tab</li>
        <li>需要强调时，添加.important。仅在EC mall Adimin的订单管理使用。</li>
    </ol>
    <ol class="en_US">
        <li>A tab to divide the contents in a page.</li>
        <li>Add the .important if a highlight is required. It is only used in the order management in EC mall Admin.</li>
    </ol>
', 'html' => '
    <div class="mTab typeTab">
        <ul>
            <li><a href="#none">컨텐츠 구분 탭</a></li>
            <li class="selected"><a href="#none">컨텐츠 구분 탭</a></li>
            <li class="important"><a href="#none">강조 (권장X)</a></li>
        </ul>
        <div class="gRight">
            안내문구입니다.
            <div class="mTooltip gSmall">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">대제목</strong>
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                        </ul>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <a href="#none" class="btnNormal"><span>설정</span></a>
            <a href="#none" class="btnCtrl"><span>설정</span></a>
        </div>
    </div>
    <div class="mTab typeTab zh_CN">
        <ul>
            <li><a href="#none">区分contents的tab</a></li>
            <li class="selected"><a href="#none">区分contents的tab</a></li>
            <li class="important"><a href="#none">强调（推荐×）</a></li>
        </ul>
        <div class="gRight">
            当有一般文本的情况
            <div class="mTooltip gSmall">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">대제목</strong>
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                        </ul>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <a href="#none" class="btnNormal"><span>설정</span></a>
            <a href="#none" class="btnCtrl"><span>설정</span></a>
        </div>
    </div>
    <div class="mTab typeTab en_US">
        <ul>
            <li><a href="#none">contents division tab</a></li>
            <li class="selected"><a href="#none">contents division tab</a></li>
            <li class="important"><a href="#none">highlight (not recommended)</a></li>
        </ul>
        <div class="gRight">
            This is text.
            <div class="mTooltip gSmall">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">대제목</strong>
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                        </ul>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <a href="#none" class="btnNormal"><span>설정</span></a>
            <a href="#none" class="btnCtrl"><span>설정</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mTab + typeNav/typeTab + gExtend]</h3>
    <ol>
        <li>.gExtend : 확장형 탭으로, 하위 메뉴가 필요할 때 추가한다.</li>
        <li>확장형 탭은 고정의 높이값을 가지고 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>.gExtend：为扩展型tab，需要下级菜单时添加。</li>
        <li>扩展型tab具有固定的高度值。</li>
    </ol>
    <ol class="en_US">
        <li>.gExtend is an extended tab that is added when child menu is required.</li>
        <li>Fixed tab has a fixed height value.</li>
    </ol>
', 'html' => '
    <div class="mTab typeNav gExtend">
        <ul>
            <li>
                <a href="#none">페이지 이동 탭</a>
                <ul>
                    <li><a href="#none">하위메뉴1</a></li>
                    <li><a href="#none">하위메뉴2</a></li>
                </ul>
            </li>
            <li class="selected">
                <a href="#none">페이지 이동 탭</a>
                <ul>
                    <li class="selected"><a href="#none">하위메뉴1 <span class="zh_CN">下级菜单1</span><span class="en_US">child menu1</span></a></li>
                    <li><a href="#none">하위메뉴2 <span class="zh_CN">下级菜单2</span><span class="en_US">child menu2</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#none">페이지 이동 탭</a>
                <ul>
                    <li><a href="#none">하위메뉴1</a></li>
                    <li><a href="#none">하위메뉴2</a></li>
                </ul>
            </li>
            <li>
                <a href="#none">페이지 이동 탭</a>
                <ul>
                    <li><a href="#none">하위메뉴1</a></li>
                    <li><a href="#none">하위메뉴2</a></li>
                </ul>
            </li>
        </ul>
        <div class="gRight">
            안내문구입니다.
            <div class="mTooltip gSmall">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">대제목</strong>
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                        </ul>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <a href="#none" class="btnNormal"><span>설정</span></a>
            <a href="#none" class="btnCtrl"><span>설정</span></a>
        </div>
    </div>

    <div class="mTab typeTab gExtend">
        <ul>
            <li>
                <a href="#none">컨텐츠 구분 탭</a>
                <ul>
                    <li><a href="#none">하위메뉴1</a></li>
                    <li><a href="#none">하위메뉴2</a></li>
                </ul>
            </li>
            <li class="selected">
                <a href="#none">컨텐츠 구분 탭</a>
                <ul>
                    <li class="selected"><a href="#none">하위메뉴1 <span class="zh_CN">下级菜单1</span><span class="en_US">child menu1</span></a></li>
                    <li><a href="#none">하위메뉴2 <span class="zh_CN">下级菜单2</span><span class="en_US">child menu2</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#none">컨텐츠 구분 탭</a>
                <ul>
                    <li><a href="#none">하위메뉴1</a></li>
                    <li><a href="#none">하위메뉴2</a></li>
                </ul>
            </li>
            <li>
                <a href="#none">컨텐츠 구분 탭</a>
                <ul>
                    <li><a href="#none">하위메뉴1</a></li>
                    <li><a href="#none">하위메뉴2</a></li>
                </ul>
            </li>
        </ul>
        <div class="gRight">
            안내문구입니다.
            <div class="mTooltip gSmall">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">대제목</strong>
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                        </ul>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <a href="#none" class="btnNormal"><span>설정</span></a>
            <a href="#none" class="btnCtrl"><span>설정</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mTab + typeNav/typeTab + eTab]</h3>
    <ol>
        <li>JS 컨트롤 : <strong>eTab</strong>을 추가하면 탭이 동작한다.</li>
        <li>
            숨김/보임 처리되는 컨텐츠의 속성
            <ol>
                <li>id는 링크용 id로 지정하며, 디자인 요소를 적용하지 않는다. (id가 개발팀에서 변경될 수 있으므로, 디자인이 필요한 경우 div로 감싸주거나 하위 오브젝트에 처리한다.)</li>
                <li>각 컨텐츠에 <strong>공통의 class</strong> 를 적용해야 하며, 다중 class를 사용할 수 없다. ( 잘못된 예 : &lt;div class="tabCont tab1"&gt; )</li>
                <li>기본으로 보여질 컨텐츠는 <strong>display:block;</strong> 지정하고, 이 외의 컨텐츠들은 <strong>display:none;</strong> 지정한다.</li>
            </ol>
        </li>
    </ol>
    <ol class="zh_CN">
        <li>JS control：添加<strong>.eTab</strong>，即可运行tab。</li>
        <li>
            进行隐藏/显示处理的contents属性
            <ol>
                <li>id指定为link专用id，不适用设计因素。（由于id可能被开发组变更，如需设计时，需用div套住，或在下级object处理。</li>
                <li>各contents中需要适用共同的class，不可使用多种class。（错误示例: &lt;div class="tabCont tab1"&gt;）</li>
                <li>默认要显示的contents以display:block;指定，其余的contents以display:none;指定。</li>
            </ol>
        </li>
    </ol>
    <ol class="en_US">
        <li>JS control: It is operative once the <strong>eTab</strong> is added.</li>
        <li>
            Contents property that process the hide and show.
            <ol>
                <li>Assign ID as a link type ID, and do not apply the design factor since the ID can be changed from the dev team.(If a design is required, cover it with the div or handle it in the lower object.)</li>
                <li><strong>Common class</strong> should be applied in each contents, and multiple classes cannot be used. ( bad example: &lt;div class="tabCont tab1"&gt; )</li>
                <li>Assign the <strong>display:block;</strong> in contents that is generally shown, and assign the <strong>display:none;</strong> for the rest contents.</li>
            </ol>
        </li>
    </ol>
', 'html' => '
    <div class="mTab typeTab eTab">
        <ul>
            <li><a href="#tabCont1_1">첫번째 탭 <span class="zh_CN">第一个tab</span><span class="en_US">(번역필요)</span></a></li>
            <li class="selected"><a href="#tabCont1_2">두번째 탭 <span class="zh_CN">第二个tab</span><span class="en_US">(번역필요)</span></a></li>
            <li><a href="#tabCont1_3">세번째 탭 <span class="zh_CN">第三个tab</span><span class="en_US">(번역필요)</span></a></li>
            <li><a href="#tabCont1_4">네번째 탭 <span class="zh_CN">第四个tab</span><span class="en_US">(번역필요)</span></a></li>
        </ul>
        <div class="gRight">
            안내문구입니다.
            <div class="mTooltip gSmall">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">대제목</strong>
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                        </ul>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <a href="#none" class="btnNormal"><span>설정</span></a>
            <a href="#none" class="btnCtrl"><span>설정</span></a>
        </div>
    </div>
    <div id="tabCont1_1" class="tabCont" style="display:none;">
        첫번째 컨텐츠<br />
        <span class="zh_CN">第一个 Centents</span>
        <span class="en_US">(번역필요)</span>
    </div>
    <div id="tabCont1_2" class="tabCont" style="display:block;">
        두번째 컨텐츠<br />
        <span class="zh_CN">第二个 Centents</span>
        <span class="en_US">(번역필요)</span>
    </div>
    <div id="tabCont1_3" class="tabCont" style="display:none;">
        세번째 컨텐츠<br />
        <span class="zh_CN">第三个 Centents</span>
        <span class="en_US">(번역필요)</span>
    </div>
    <div id="tabCont1_4" class="tabCont" style="display:none;">
        네번째 컨텐츠<br />
        <span class="zh_CN">第四个 Centents</span>
        <span class="en_US">(번역필요)</span>
    </div>
'), array(
'desc' => '
    <h3>[mTab + typeNav + eTab]</h3>
    <ol>
        <li>이중 탭 : 탭 안의 탭</li>
    </ol>
    <ol class="zh_CN">
        <li>双重tab：tab中的tab</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mTab typeNav eTab">
        <ul>
            <li class="selected"><a href="#tabCont2_1">이중 탭이 적용된 메뉴 <span class="zh_CN">适用双重tab的菜单</span><span class="en_US">(번역필요)</span></a></li>
            <li><a href="#tabCont2_2">두번째 메뉴 <span class="zh_CN">第二个菜单</span><span class="en_US">(번역필요)</span></a></li>
            <li><a href="#tabCont2_3">세번째 메뉴 <span class="zh_CN">第三个菜单</span><span class="en_US">(번역필요)</span></a></li>
            <li><a href="#tabCont2_4">네번째 메뉴 <span class="zh_CN">第四个菜单</span><span class="en_US">(번역필요)</span></a></li>
        </ul>
        <div class="gRight">
            안내문구입니다.
            <div class="mTooltip gSmall">
                <button type="button" class="icon eTip">도움말</button>
                <div class="tooltip">
                    <div class="content">
                        <strong class="titleEm">대제목</strong>
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                        </ul>
                    </div>
                    <button type="button" class="close eClose">닫기</button>
                    <span class="edge"></span>
                </div>
            </div>
            <a href="#none" class="btnNormal"><span>설정</span></a>
            <a href="#none" class="btnCtrl"><span>설정</span></a>
        </div>
    </div>

    <div id="tabCont2_1" class="tabCont" style="display:block;">
        <div class="mTab typeTab eTab">
            <ul>
                <li class="selected"><a href="#tabContSub2_1_1">하위 탭1 <span class="zh_CN">下级tab1</span><span class="en_US">(번역필요)</span></a></li>
                <li><a href="#tabContSub2_1_2">하위 탭2 <span class="zh_CN">下级tab2</span><span class="en_US">(번역필요)</span></a></li>
                <li><a href="#tabContSub2_1_3">하위 탭3 <span class="zh_CN">下级tab3</span><span class="en_US">(번역필요)</span></a></li>
            </ul>
            <div class="gRight">
                안내문구입니다.
                <div class="mTooltip gSmall">
                    <button type="button" class="icon eTip">도움말</button>
                    <div class="tooltip">
                        <div class="content">
                            <strong class="titleEm">대제목</strong>
                            <strong class="title">중제목</strong>
                            <ul class="mList">
                                <li>내용</li>
                            </ul>
                        </div>
                        <button type="button" class="close eClose">닫기</button>
                        <span class="edge"></span>
                    </div>
                </div>
                <a href="#none" class="btnNormal"><span>설정</span></a>
                <a href="#none" class="btnCtrl"><span>설정</span></a>
            </div>
        </div>
        <div id="tabContSub2_1_1" class="tabContSub" style="display:block;">
            SUB TAB #1
        </div>
        <div id="tabContSub2_1_2" class="tabContSub" style="display:none;">
            SUB TAB #2
        </div>
        <div id="tabContSub2_1_3" class="tabContSub" style="display:none;">
            SUB TAB #3
        </div>
    </div>
    <div id="tabCont2_2" class="tabCont" style="display:none;">
        두번째 컨텐츠
    </div>
    <div id="tabCont2_3" class="tabCont" style="display:none;">
        세번째 컨텐츠
    </div>
    <div id="tabCont2_4" class="tabCont" style="display:none;">
        네번째 컨텐츠
    </div>
    <script type="text/javascript">
        var call_eTab = function() {
            $.eTab(".eTab");
        }
    </script>
'), array(

'desc' => '
    <h3>[mTab + typeOption ]</h3>
    <ol>
        <li>선택값으로 이동하는 탭</li>
        <li>풀사이즈로 사용할 경우, mTab에 <strong>gFull</strong>클래스를 추가한다.</li>
        <li>아이콘이 들어가는 경우, mTab에 <strong>item$NAME</strong>클래스를 추가한다.</li>
        <li>배경이미지 작업시 <strong>이미지 파일명은 sfix_tabitem_$NAME</strong>으로 한다. (기본 배경아이콘 크기: 16px * 17px)</li>
    </ol>
    <ol class="zh_CN">
        <li>跳转到选择项的tab</li>
        <li>要100%的宽度，在mTab加 <strong>gFull</strong>。</li>
        <li>插入icon时，mTab加 <strong>item$NAME</strong>名。</li>
        <li>制作背景图时<strong>文件名命为 sfix_tabitem_$NAME</strong>。(背景icon一般大小为：16px * 17px)</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
<style>
/* CSS 재선언 필요한 부분 참고 */
.mTab.typeOption.itemReserve a:before { background-image:url("//img.echosting.cafe24.com/ec/product/sfix_tabitem_reserve.png"); }
.mTab.typeOption.itemReserve .term a:before { background-position:0 0; }
.mTab.typeOption.itemReserve .term.selected a:before { background-position:0 -20px; }
.mTab.typeOption.itemReserve .gift a:before { background-position:-20px 0; }
.mTab.typeOption.itemReserve .gift.selected a:before { background-position:-20px -20px; }
</style>

    <div class="mTab typeOption">
        <ul>
            <li><a href="#none">선택값으로 이동</a></li>
            <li class="selected"><a href="#none">선택값으로 이동</a></li>
            <li><a href="#none">선택값으로 이동</a></li>
        </ul>
    </div>
    <div class="mTab typeOption itemReserve">
        <ul>
            <li class="term"><a href="#none">선택값으로 이동</a></li>
            <li class="gift selected"><a href="#none">선택값으로 이동</a></li>
            <li class="term"><a href="#none">선택값으로 이동</a></li>
        </ul>
    </div>
    <div class="mTab typeOption gFull">
        <ul>
            <li><a href="#none">선택값으로 이동</a></li>
            <li class="selected"><a href="#none">선택값으로 이동</a></li>
            <li><a href="#none">선택값으로 이동</a></li>
        </ul>
    </div>
    <div class="mTab typeOption gFull itemReserve">
        <ul>
            <li class="term"><a href="#none">설정한 기간동안 특정분류에 상품 진열</a></li>
            <li class="gift selected"><a href="#none">프로모션 혜택 기간동안 특정분류에 상품 진열</a></li>
        </ul>
    </div>

')
);
?>