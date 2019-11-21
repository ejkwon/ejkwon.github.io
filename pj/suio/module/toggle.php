<?php

// 모듈 전체 제목
$header_name = 'mToggle 열기/닫기 开启/关闭';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>.mToggle &gt; .eToggle의 구조로 <strong>.eToggle은 필수</strong>로 사용되며, .toggleArea 의 기본값은 display:none 이다</li>
        <li>.eToggle 클릭시 노출되는 컨텐츠 영역은 .toggleArea에 퍼블리싱</strong>한다.</li>
        <li>토글버튼의 위치에 따라 상단(typeHeader), 하단(typeFooter) 2가지 타입으로 나뉜다.</li>
        <li>토글버튼의 [열기/닫기]는 토글액션에 따라서 &lt;em&gt;의 안의 문구가  js 처리된다.</li>
    </ol>
    <ol class="zh_CN">
        <li>结构为.mToggle &gt; .eToggle时，必须使用.eToggle，.toggleArea的基本值为display:none。</li>
        <li>点击.eToggle时显示的contents区域，需作publishing于.toggleArea</li>
        <li>Toggle按钮可根据位置分为上方(typeHeader)，下方(typeFooter) 两种形式。</li>
        <li>Toggle按钮的 [열기/닫기]根据Toggle Action把&lt;em&gt;里的内容处理为js。</li>
    </ol>
    <ol class="en_US">
        <li>The <strong>.eToggle</strong> is used essentially as a structure of the .mToggle &gt; .eToggle, and the basic value of the .toggleArea is the display:none. </li>
        <li>The contents area that is exposed when click the .eToggle should be published in the .toggleArea.</li>
        <li>Based on the location of toggle buttons, the upper side(typeHeader) and the lower side(typeFooter) are separated.</li>
        <li>For [open/close] of toggle buttons, the text in the &ltem&gt is handled with the js, based on the toggle actions.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
    #uioContent article .toggleArea .mBoard { margin:0; }
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
    <h3>[mToggle + typeHeader > eToggle > toggleArea]</h3>
    <ol>
        <li>기본 : 닫힘 상태</li>
        <li>토글버튼이 상단에 위치</li>
    </ol>
    <ol class="zh_CN">
        <li>基本：关闭状态</li>
        <li>Toggle按钮位于上方</li>
    </ol>
    <ol class="en_US">
        <li>Default : closed.</li>
        <li>Toggle button situated in the upper end</li>
    </ol>
', 'html' => '
    <div class="mTitle">
        <h2>제목</h2>
    </div>
    <div class="mToggle typeHeader">
        <div class="ctrl">
            <label class="gLabel"><input type="checkbox" class="fChk" /> 항상열기</label>
            <span class="eToggle"><button type="button"><em>열기</em></button></span>
        </div>
    </div>
    <div class="toggleArea">
        <div class="mBoard">
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
                        <th scope="col">컨텐츠</th>
                        <th scope="col">컨텐츠</th>
                        <th scope="col">컨텐츠</th>
                        <th scope="col">컨텐츠</th>
                    </tr>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
'),array(
'desc' => '
    <h3>[mToggle + typeFooter > eToggle > toggleArea]</h3>
    <ol>
        <li>기본 : 닫힘 상태</li>
        <li>토글버튼이 하단에 위치</li>
    </ol>
    <ol class="zh_CN">
        <li>基本：关闭状态</li>
        <li>Toggle按钮位于下方</li>
    </ol>
    <ol class="en_US">
        <li>Default : closed.</li>
        <li>Toggle button situated in the lower end</li>
    </ol>
', 'html' => '
    <div class="toggleArea">
        <div class="mBoard gSmall">
            <table border="1" summary="">
                <caption>제목</caption>
                <tbody>
                    <tr>
                        <th scope="row">컨텐츠</th>
                        <td>내용</td>
                    </tr>
                    <tr>
                        <th scope="row">컨텐츠</th>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mToggle typeFooter">
        <div class="ctrl">
            <span class="eToggle"><button type="button"><em>열기</em></button></span>
        </div>
    </div>
'),array(
'desc' => '
    <h3>[mToggle + typeHeader/typeFooter > eToggle+selected > toggleArea]</h3>
    <ol>
        <li>활용 : 열림 상태</li>
        <li>열림 상태로 로딩이 필요한 경우 아래와 같은 속성을 추가한다.
            <ol>
                <li>&lt;span class="eToggle <strong>selected</strong>"&gt;</li>
                <li>&lt;div class="toggleArea" <strong>style="display:block;"</strong>&gt; </li>
            </ol>
        </li>
    </ol>
    <ol class="zh_CN">
        <li>活用：开启状态</li>
        <li>需要在开启状态下loading时，添加以下属性。
            <ol>
                <li>&lt;span class="eToggle <strong>selected</strong>"&gt;</li>
                <li>&lt;div class="toggleArea" <strong>style="display:block;"</strong>&gt; </li>
            </ol>
        </li>
    </ol>
    <ol class="en_US">
        <li>utilization - open</li>
        <li>If loading is needed as an open status, the property as below should be added.
            <ol>
                <li>&lt;span class="eToggle <strong>selected</strong>"&gt;</li>
                <li>&lt;div class="toggleArea" <strong>style="display:block;"</strong>&gt; </li>
            </ol>
        </li>
    </ol>
', 'html' => '
    <div class="mTitle">
        <h2>제목</h2>
    </div>
    <div class="mToggle typeHeader">
        <div class="ctrl">
            <label class="gLabel"><input type="checkbox" class="fChk" /> 항상열기</label>
            <span class="eToggle selected"><button type="button"><em>닫기</em></button></span><!-- 토글영역 활성화 시 js에서 .selected 추가 -->
        </div>
    </div>
    <div class="toggleArea" style="display:block;">
        <div class="mBoard">
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
                        <th scope="col">컨텐츠</th>
                        <th scope="col">컨텐츠</th>
                        <th scope="col">컨텐츠</th>
                        <th scope="col">컨텐츠</th>
                    </tr>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br /><br /><br /><br />

    <div class="toggleArea" style="display:block;">
        <div class="mBoard gSmall">
            <table border="1" summary="">
                <caption>제목</caption>
                <tbody>
                    <tr>
                        <th scope="row">컨텐츠</th>
                        <td>내용</td>
                    </tr>
                    <tr>
                        <th scope="row">컨텐츠</th>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mToggle typeFooter">
        <div class="ctrl">
            <span class="eToggle selected"><button type="button"><em>닫기</em></button></span><!-- 토글영역 활성화 시 js에서 .selected 추가 -->
        </div>
    </div>
')
);
?>