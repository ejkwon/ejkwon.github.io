<?php

// 모듈 전체 제목
$header_name = 'mThumbSelect';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = '

//';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
<style>
.mThumbSelect li > button:before,
.mThumbSelect li > label:before,
.mThumbSelect li > a:before { background-color:#ddd; }
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
                    <p class="info"><span class="date">2016.10.12</span><span class="writer">권언정</span></p>
                    <ul class="title">
                        <li><strong>[mThumbSelect]</strong> disabled 비활성 버튼 클래스 추가 <a href="/smartAdmin/shop/operate/search.html" class="btnLink" target="_blank">상품검색조건 설정</a></li>
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

    <ol>
        <li>버튼의 기능에 따라 button(typeButton), radio(typeRadio), checkbox(typeCheck), a(typeAnchor) 로 구분한다.</li>
        <li><span class="txtWarn">단순 UI 조작인 경우 <strong>typeButton</strong>, 데이터 전송이 필요한 경우 <strong>typeRadio</strong>와 <strong>typeCheck</strong>(다중 선택), URL이동이 필요한 경우 <strong>typeAnchor</strong>를 사용한다.</span></li>
        <li>고유의 item$NAME을 class로 넣어서 width, height, 배경이미지등 필요한 디자인 요소를 선언한다. <a href="/smartAdmin/promotion/remind/setting.html" class="txtEm" target="_blank">(예시)</a> (2016.12.12 이후부터)</li>
        <li>배경이미지 작업시 이미지 파일명은 sfix_thumbSelect_$NAME으로 한다.</li>
        <li>비활성 버튼이 필요한 경우, 별도의 배경이미지 요청없이 투명도로 처리되므로 disabled 클래스만 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>根据按钮的功能，分为 button(typeButton), radio(typeRadio), checkbox(typeCheck), a(typeAnchor)。</li>
        <li><span class="txtWarn">仅操作用户界面时用 <strong>typeButton</strong>,需传送数据时用 <strong>typeRadio</strong>和 <strong>typeCheck</strong>(多选)，需跳转URL时用typeAnchor。</span></li>
        <li>class="item$NAME"用专名命名，设置width, height, 背景图等需要的属性。 <a href="/smartAdmin/promotion/remind/setting.html" class="txtEm" target="_blank">(例子)</a> (从2016.12.12 开始)</li>
        <li>设置背景图时，图片名为sfix_thumbSelect_$NAME。</li>
        <li>需要无效按钮时不会另用图片，只需加class="disabled"名，会用透明属性处理。</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>기본 설정</caption>
            <colgroup>
                <col style="width:120px;" />
                <col style="width:100px;" />
                <col style="width:150px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">中文</th>
                    <th scope="col" class="en_US">English</th>
                    <th scope="col">Class</th>
                    <th scope="col">설명 说明</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">버튼형</th>
                    <th class="zh_CN">按钮型</th>
                    <th class="en_US">번역필요</th>
                    <th>typeButton + <span class="txtEm">$NAME</span></th>
                    <td>
                        <ul class="mThumbSelect typeButton">
                            <li><button type="button">예시</button></li>
                            <li><button type="button">예시</button></li>
                            <li class="disabled"><button type="button">disabled</button></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">라디오형</th>
                    <th class="zh_CN">radio型</th>
                    <th class="en_US">번역필요</th>
                    <th>typeRadio + <span class="txtEm">$NAME</span></th>
                    <td>
                        <ul class="mThumbSelect typeRadio">
                            <li><label><input type="radio" />예시</label></li>
                            <li><label><input type="radio" />예시</label></li>
                            <li class="disabled"><label><input type="radio" />disabled</label></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">체크박스형</th>
                    <th class="zh_CN">checkbox型</th>
                    <th class="en_US">번역필요</th>
                    <th>typeCheck + <span class="txtEm">$NAME</span></th>
                    <td>
                        <ul class="mThumbSelect typeRadio">
                            <li><label><input type="checkbox" />예시</label></li>
                            <li><label><input type="checkbox" />예시</label></li>
                            <li class="disabled"><label><input type="checkbox" />disabled</label></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">앵커형</th>
                    <th class="zh_CN">anchor型</th>
                    <th class="en_US">번역필요</th>
                    <th>typeAnchor + <span class="txtEm">$NAME</span></th>
                    <td>
                        <ul class="mThumbSelect typeAnchor">
                            <li><a href="#none" title="새창 열림" target="_blank">예시</a></li>
                            <li><a href="#none">예시</a></li>
                            <li class="disabled"><a href="#none">disabled</a></li>
                        </ul>
                        <ul class="mList">
                            <li>앵커형은 hover 효과만 지원한다.(eSelected 없음)</li>
                            <li class="mList zh_CN">anchor型只有‘hover效果。(没有eSelected)</li>
                            <li class="mList en_US">번역필요</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">예시</th>
                    <th class="zh_CN">例</th>
                    <th class="en_US">번역필요</th>
                    <th>mThumbSelect + typeButton + <span class="txtEm" title="$NAME">itemExcel</span></th>
                    <td>
                        <ul class="mThumbSelect typeButton itemExcel">
                            <li class="phone"><button type="button">휴대폰번호 입력</button></li>
                            <li class="id"><button type="button">아이디 입력</button></li>
                            <li class="id disabled"><button type="button">아이디 입력</button></li>
                        </ul>
                        <ul class="mList">
                            <li>재선언 필요한 CSS "▼HTML Preciew Open"에서 확인해주세요.</li>
                            <li class="zh_CN">请在"▼HTML Preciew Open"里，确认需要的css样式。</li>
                            <li class="en_US">번역필요</li>
                        </ul>
    <style>
    /* CSS 재선언 필요한 부분 참고 */
    .mThumbSelect.itemExcel li button:before { background:url("/img.echosting.cafe24.com/ec/member/sfix_thumbSelect_smsSend.png") no-repeat; }
        .mThumbSelect.itemExcel .phone button:before { background-position:-298px 0; }
        .mThumbSelect.itemExcel .id button:before { background-position:-395px 0; }
    .mThumbSelect.itemExcel li { width:110px; }
    </style>
                    </td>
                </tr>
                <tr>
                    <th scope="row">예시(레이어)</th>
                    <th class="zh_CN">例(layer)</th>
                    <th class="en_US">번역필요</th>
                    <th></th>
                    <td>
                        <a href="#layerEx" class="btnNormal eModal"><span>Layer 예시 <em class="icoLayer"></em></span></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="layerEx" class="mLayer gMedium">
        <h2>예시</h2>
        <div class="wrap">
            <ul class="mThumbSelect typeButton gFull">
                <li><button type="button">예시</button></li>
                <li><button type="button">예시</button></li>
                <li><button type="button">예시</button></li>
                <li><button type="button">예시</button></li>
            </ul>
        </div>
        <div class="footer">
            <a href="#none" class="btnCtrl"><span>저장</span></a>
            <a href="#none" class="btnNormal eClose"><span>취소</span></a>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
'),array(
'desc' => '
    <h3>[ mThumbSelect + gFull ]</h3>

', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>기본 설정</caption>
            <colgroup>
                <col style="width:120px;" />
                <col style="width:100px;" />
                <col style="width:150px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">中文</th>
                    <th scope="col" class="en_US">English</th>
                    <th scope="col">Class</th>
                    <th scope="col">설명 说明</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">풀사이즈형</th>
                    <th scope="row" class="zh_CN">宽度100%型</th>
                    <th scope="row" class="en_US">번역필요</th>
                    <th>gFull</th>
                    <td>
                        <ul class="mThumbSelect typeRadio gFull">
                            <li><label><input type="radio" />예시</label></li>
                            <li><label><input type="radio" />예시</label></li>
                            <li><label><input type="radio" />예시</label></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>[ mThumbSelect + gHor ]</h3>
    <ol>
        <li>디자인나오면 CSS 확정예정</li>
    </ol>
    <ol>
        <li class="zh_CN">设计图出来后，确定css</li>
        <li class="en_US">번역필요</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>기본 설정</caption>
            <colgroup>
                <col style="width:120px;" />
                <col style="width:100px;" />
                <col style="width:150px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">中文</th>
                    <th scope="col" class="en_US">English</th>
                    <th scope="col">Class</th>
                    <th scope="col">설명 说明</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">가로형</th>
                    <th class="zh_CN">横向型</th>
                    <th class="en_US">번역필요</th>
                    <th>gHor</th>
                    <td>
                        <ul class="mThumbSelect typeButton gHor">
                            <li class="search"><button type="button">예시</button></li>
                            <li class="rating"><button type="button">예시</button></li>
                            <li class="anniversary"><button type="button">예시</button></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">예시</th>
                    <th class="zh_CN">例</th>
                    <th class="en_US">번역필요</th>
                    <th>mThumbSelect + gHor + <span class="txtEm" title="$NAME">itemMember</span></th>
                    <td>
                        <ul class="mThumbSelect typeButton itemMember gHor">
                            <li class="rating"><button type="button">회원 등급</button></li>
                            <li class="anniversary"><button type="button">기념일</button></li>
                        </ul>
                        <ul class="mList">
                            <li>재선언 필요한 CSS "▼HTML Preciew Open"에서 확인해주세요.</li>
                            <li class="zh_CN">请在"▼HTML Preciew Open"里，确认需要的css样式。</li>
                            <li class="en_US">번역필요</li>
                        </ul>
    <style>
    /* CSS 재선언 필요한 부분 참고 */
    .mThumbSelect.gHor.itemMember li button:before { background:url("/img.echosting.cafe24.com/ec/member/sfix_thumbSelect_smsSend.png") no-repeat; }
        .mThumbSelect.gHor.itemMember .rating button:before { background-position:-110px 9px; }
        .mThumbSelect.gHor.itemMember .anniversary button:before { background-position:-210px 9px; }
    .mThumbSelect.gHor.itemMember li { width:150px; }
    </style>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>[ thumbSelectArea ]</h3>
    <ol>
        <li>thumbSelectArea > box > mThumbSelect의 구조를 가진다.</li>
        <li>토글을 사용하고 싶은 경우 btnExpand를 추가하고, eToggle을 추가해야 동작한다.</li>
        <li>box는 btnExpand와 형제레벨로 있는 경우에만 display:none처리 된다.</li>
        <li>thumbSelectArea 는 mThumbSelect 적용시에만 사용하고, 그외의 btnExpand와 box의 액션만 적용할 경우 <a href="/suio/include/layout.php?MODULE=accordion" target="_blank" class="txtLink">[mAccordion + typeButton]</a> 모듈을 사용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>结构是thumbSelectArea > box > mThumbSelect。</li>
        <li>想加toogle，要加btnExpand和eToggle。</li>
        <li>box 与 btnExpand 是兄弟级别时，才会有display:none属性值。</li>
        <li>box里有mThumbSelect时，box外才加thumbSelectArea。仅有btnExpand和 box时，应用<a href="/suio/include/layout.php?MODULE=accordion" target="_blank" class="txtLink">[mAccordion + typeButton]</a> 模块。</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>기본 설정</caption>
            <colgroup>
                <col style="width:120px;" />
                <col style="width:100px;" />
                <col style="width:150px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">中文</th>
                    <th class="en_US">English</th>
                    <th scope="col">Class</th>
                    <th scope="col">설명 说明</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">기본형</th>
                    <th class="zh_CN">基本型</th>
                    <th class="en_US">번역필요</th>
                    <th>box > mThumbSelect</th>
                    <td>
                        <div class="thumbSelectArea">
                            <div class="box">
                                <ul class="mThumbSelect typeButton gFull">
                                    <li><button type="button">예시</button></li>
                                    <li><button type="button">예시</button></li>
                                    <li><button type="button">예시</button></li>
                                    <li><button type="button">예시</button></li>
                                    <li><button type="button">예시</button></li>
                                    <li><button type="button">예시</button></li>
                                </ul>
                                <ul class="mList">
                                    <li>.box안에서 mList 사용 가능</li>
                                    <li class="zh_CN">.box里可使用 mList</li>
                                    <li class="en_US">번역필요</li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">toggle형</th>
                    <th class="zh_CN">toggle型</th>
                    <th class="en_US">번역필요</th>
                    <th>btnExpand + <br />(box > mThumbSelect)</th>
                    <td>
                        <div class="thumbSelectArea">
                            <button type="button" class="btnExpand eToggle"><span>예시 Click</span></button>
                            <div class="box">
                                <ul class="mThumbSelect typeButton gFull">
                                    <li><button type="button">예시</button></li>
                                    <li><button type="button">예시</button></li>
                                    <li><button type="button">예시</button></li>
                                    <li><button type="button">예시</button></li>
                                    <li><button type="button">예시</button></li>
                                    <li><button type="button">예시</button></li>
                                </ul>
                                <ul class="mList">
                                    <li>설명</li>
                                    <li>설명</li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">예시</th>
                    <th class="zh_CN">例</th>
                    <th class="en_US">번역필요</th>
                    <th>box > mThumbSelect + <span title="$NAME" class="txtEm">itemRemindMe</span></th>
                    <td>
                        <div class="thumbSelectArea">
                            <button type="button" class="btnExpand eToggle"><span>예시 Click</span></button>
                            <div class="box">
                                <ul class="mThumbSelect typeButton itemRemindMe gFull">
                                    <li class="recent"><button type="button"><strong>최근 조회한 상품</strong>을 <br />보여주고 구매를 유도</button></li>
                                    <li class="product"><button type="button"><strong>상품을 구매한 회원</strong>에게 <br />다른 상품을 추천</button></li>
                                    <li class="basket"><button type="button"><strong>장바구니에 담긴 상품</strong>을 <br />보여주고 구매를 유도</button></li>
                                    <li class="wish"><button type="button"><strong>관심상품에 담긴 상품</strong>을 <br />보여주고 구매를 유도</button></li>
                                    <li class="mileage"><button type="button"><strong>적립금 보유중</strong>임을 <br />알려주고 구매를 유도</button></li>
                                    <li class="coupon"><button type="button"><strong>쿠폰 보유중</strong>임을 <br />알려주고 구매를 유도</button></li>
                                </ul>
                                <ul class="mList">
                                    <li>재선언 필요한 CSS "▼HTML Preciew Open"에서 확인해주세요.</li>
                                    <li>번역필요</li>
                                </ul>
                            </div>
                        </div>

    <style>
    /* CSS 재선언 필요한 부분 참고 */
    .mThumbSelect.itemRemindMe li { height:136px; }
    .mThumbSelect.itemRemindMe li button { padding-top:80px; height:136px; }
    .mThumbSelect.itemRemindMe li button:before { width:100px; height:80px; background:url("/img.echosting.cafe24.com/ec/promotion/sfix_thumbSelect_remindMe.png") no-repeat; }
        .mThumbSelect.itemRemindMe .product button:before { background-position:-100px 0; }
        .mThumbSelect.itemRemindMe .basket button:before { background-position:-200px 0; }
        .mThumbSelect.itemRemindMe .wish button:before { background-position:-300px 0; }
        .mThumbSelect.itemRemindMe .mileage button:before { background-position:-400px 0; }
        .mThumbSelect.itemRemindMe .coupon button:before { background-position:-500px 0; }
    .mThumbSelect.itemRemindMe > li .eSelected { font-weight:normal; } /* 여기서만 예외로 선택되었을때 bold처리 되지않음 */
    </style>

                    </td>
                </tr>
                <tr>
                    <th scope="row">여러줄 대응 <br />(3*3, 4*2, 5*2 등)</th>
                    <th class="zh_CN">多行情况下 <br />(3*3, 4*2, 5*2 等)</th>
                    <th class="en_US">번역필요</th>
                    <th>네이밍 규칙 <br /><span title="$NAME" class="txtEm">$NAME + $숫자</span></th>
                    <td>
                        <div class="thumbSelectArea">
                            <div class="box">
                                <ul class="mThumbSelect typeButton gHor remind4">
                                    <li class="recent"><button type="button"><strong>최근 조회한 상품</strong>을 <br />보여주고 구매를 유도</button></li>
                                    <li class="product"><button type="button"><strong>상품을 구매한 회원</strong>에게 <br />다른 상품을 추천</button></li>
                                    <li class="basket"><button type="button"><strong>장바구니에 담긴 상품</strong>을 <br />보여주고 구매를 유도</button></li>
                                    <li class="wish"><button type="button"><strong>관심상품에 담긴 상품</strong>을 <br />보여주고 구매를 유도</button></li>
                                    <li class="mileage"><button type="button"><strong>적립금 보유중</strong>임을 <br />알려주고 구매를 유도</button></li>
                                    <li class="coupon"><button type="button"><strong>쿠폰 보유중</strong>임을 알려주고 <br />구매를 유도</button></li>
                                    <li class="login"><button type="button"><strong>로그인한 지 오래된</strong> <br />회원에게 로그인을 유도</button></li>
                                    <li class="inactive"><button type="button"><strong>휴면예정</strong>임을 알려주고 <br />로그인을 유도</button></li>
                                </ul>
                                <ul class="mList">
                                    <li>위에 예 4*2와 같이 여러줄 대응이 필요한 경우 고유의 디자인 class 네임 <span class="txtEm">remind</span>에 <span class="txtEm">4(1줄에 나열되는 li갯수)</span>를 붙여 네이밍한다.</li>
                                </ul>
                            </div>
                        </div>
                        <style>
    /* CSS 재선언 필요한 부분 참고 */
    .mThumbSelect.remind4 { margin-top:-8px; }
    .mThumbSelect.remind4 li { width:24.1%; height:106px; margin-top:8px; }
    .mThumbSelect.remind4 .mileage { margin-left:0; }
    .mThumbSelect.remind4 li button { height:106px; padding-left:89px; text-align:left; }
    .mThumbSelect.remind4 li button:before { width:89px; background:url("/img.echosting.cafe24.com/ec/promotion/sfix_thumbSelect_remind.png") no-repeat; }
    .mThumbSelect.remind4 .product button:before { background-position:-100px 0; }
    .mThumbSelect.remind4 .basket button:before { background-position:-200px 0; }
    .mThumbSelect.remind4 .wish button:before { background-position:-300px 0; }
    .mThumbSelect.remind4 .mileage button:before { background-position:0 -100px; }
    .mThumbSelect.remind4 .coupon button:before { background-position:-100px -100px; }
    .mThumbSelect.remind4 .login button:before { background-position:-200px -100px; }
    .mThumbSelect.remind4 .inactive button:before { background-position:-300px -100px; }
    .mThumbSelect.remind4 > li .eSelected { font-weight:normal; letter-spacing:-0.05em; }
    </style>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')

);
?>