<?php

// 모듈 전체 예시
$header_name = 'mButton : 정렬과 사용예시';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = '';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        /* 프리뷰를 위한 CSS 제거 */
        .mTitle { padding-top:0 !important; }
        .section { margin-bottom:0 !important; }
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
    <h3>[mButton] 페이지 하단형 <span class="zh_CN">页面下端型 : 오른쪽 정렬 右对齐</span><span class="en_US">bottom page type : 오른쪽 정렬 right alignment</span></h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>테이블 예시</caption>
            <tbody>
                <tr>
                    <th scope="row">예시</th>
                    <td>예시</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mButton">
        <a href="#none" class="btnSubmit"><span>버튼</span></a>
        <a href="#none" class="btnEm"><span>버튼</span></a>
    </div>
'), array(
'desc' => '
    <h3>[mButton] 페이지 하단형 <span class="zh_CN">页面下端型 : 왼쪽 정렬 左对齐</span><span class="en_US">bottom page type : 왼쪽 정렬 left alignment</span></h3>
    <ol>
        <li>왼쪽 버튼들을 .gLeft 로 감싼다.</li>
    </ol>
    <ol class="zh_CN">
        <li>用.gLeft套住左侧按钮。</li>
    </ol>
    <ol class="en_US">
        <li>Cover the left buttons with the .gLeft.</li>
    </ol>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>테이블 예시</caption>
            <tbody>
                <tr>
                    <th scope="row">예시</th>
                    <td>예시</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mButton">
        <span class="gLeft">
            <a href="#none" class="btnSubmit"><span>버튼</span></a>
            <a href="#none" class="btnEm"><span>버튼</span></a>
        </span>
    </div>
'), array(
'desc' => '
    <h3>[mButton] 페이지 하단형 <span class="zh_CN">页面下端型 : 양쪽 정렬 两端对齐</span><span class="en_US">bottom page type : 양쪽 정렬 both sides alignment</span></h3>
    <ol>
        <li>왼쪽 버튼들만 .gLeft 로 감싼다.</li>
    </ol>
    <ol class="zh_CN">
        <li>用.gLeft只套住左侧按钮。</li>
    </ol>
    <ol class="en_US">
        <li>Cover the left buttons only with the .gLeft</li>
    </ol>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>테이블 예시</caption>
            <tbody>
                <tr>
                    <th scope="row">예시</th>
                    <td>예시</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mButton">
        <span class="gLeft">
            <a href="#none" class="btnSubmit"><span>버튼</span></a>
            <a href="#none" class="btnEm"><span>버튼</span></a>
        </span>
        <a href="#none" class="btnSubmit"><span>버튼</span></a>
        <a href="#none" class="btnEm"><span>버튼</span></a>
    </div>
'), array(
'desc' => '
    <h3>[mButton + gCenter] 페이지 하단 <span class="zh_CN">页面下端型 : 가운데 정렬 居中</span><span class="en_US">bottom page type : 가운데 정렬 central alignment</span></h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>테이블 예시</caption>
            <tbody>
                <tr>
                    <th scope="row">예시</th>
                    <td>예시</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mButton gCenter">
        <a href="#none" class="btnSubmit"><span>버튼</span></a>
        <a href="#none" class="btnEm"><span>버튼</span></a>
    </div>
'), array(
'desc' => '
    <h3>[mButton + gCenter] 페이지 하단형 <span class="zh_CN">页面下端型 : 복합 정렬 多种排列</span><span class="en_US">bottom page type : 복합 정렬 complex alignment</span></h3>
    <ol>
        <li>좌우측의 버튼들을 각각 .gLeft, .gRight로 감싼다.</li>
    </ol>
    <ol class="zh_CN">
        <li>用.gLeft, .gRight套住左右侧的按钮。</li>
    </ol>
    <ol class="en_US">
        <li>Cover the both sides’ buttons with the .gLeft and .gRight</li>
    </ol>
', 'html' => '
    <div class="mButton gCenter">
        <a href="#none" class="btnSubmit"><span>버튼</span></a>
        <a href="#none" class="btnEm"><span>버튼</span></a>
        <span class="gLeft">
            <a href="#none" class="btnEm"><span>버튼</span></a>
        </span>
        <span class="gRight">
            <a href="#none" class="btnEm"><span>버튼</span></a>
        </span>
    </div>
'), array(
'desc' => '
    <h3>[mButton] 페이지 중간형 <span class="zh_CN">页面中间型 : 실행 버튼 运行按钮</span><span class="en_US">central page type : 실행 버튼 Play button</span></h3>
    <ol>
        <li>"페이지 페이지 하단형"의 버튼 정렬과 동일하다.</li>
        <li>페이지 중간에 위치하는 버튼들은 검색 버튼을 제외하고 .btnGeneral, .btnStrong을 사용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>等同于“页面下端”按钮的排列。</li>
        <li>除了搜索按钮，位于页面中间的按钮均使用 .btnGeneral, .btnStrong。</li>
    </ol>
    <ol class="en_US">
        <li>It is identical with the button array of “the bottom page type”.</li>
        <li>The buttons in the center excluding the search button use the .btnGeneral and .btnStrong.</li>
    </ol>
', 'html' => '
    <div class="section">
        <div class="mBoard gSmall">
            <table border="1" summary="">
                <caption>테이블 예시</caption>
                <tbody>
                    <tr>
                        <th scope="row">예시</th>
                        <td>예시</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mButton">
            <a href="#none" class="btnGeneral"><span>버튼</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mButton] 검색 버튼형 <span class="zh_CN">搜索按钮型</span><span class="en_US">search button type</span></h3>
', 'html' => '
    <div class="section">
        <div class="mBoard gSmall">
            <table border="1" summary="">
                <caption>테이블 예시</caption>
                <tbody>
                    <tr>
                        <th scope="row">예시</th>
                        <td>예시</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mButton gCenter">
            <a href="#none" class="btnSearch"><span>검색</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mButton] 팝업의 페이지 중간형 <span class="zh_CN">弹窗页面中间型</span><span class="en_US">the central type of pop up page</span></h3>
    <ol>
        <li>버튼의 사이즈만 다르며, 모두 페이지형과 동일하다.</li>
    </ol>
    <ol class="zh_CN">
        <li>只有按钮size不同， 其他的均与页面型相同。</li>
    </ol>
    <ol class="en_US">
        <li>Everything except for the size of buttons is the same with the page type.</li>
    </ol>
', 'html' => '
    <div class="section">
        <div id="popup">
            <div class="mButton">
                <a href="#none" class="btnStrong"><span>버튼</span></a>
                <a href="#none" class="btnStrong disabled"><span>버튼</span></a>
                <a href="#none" class="btnGeneral"><span>버튼</span></a>
                <a href="#none" class="btnGeneral disabled"><span>버튼</span></a>
            </div>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mButton] 팝업의 페이지 하단형 <span class="zh_CN">弹窗页面下端型</span><span class="en_US">the bottom type of pop up page</span></h3>
    <ol>
        <li>#footer에 위치하며 .mButton으로 감싸지 않는다. </li>
    </ol>
    <ol class="zh_CN">
        <li>位于#footer，无需用.mButton套住。</li>
    </ol>
    <ol class="en_US">
        <li>It is located in the #footer and does not cover with the .mButton.</li>
    </ol>
', 'html' => '
    <div id="popup">
        <div id="footer" style="position:static">
            <a href="#none" class="btnSubmit"><span>버튼</span></a>
            <a href="#none" class="btnSubmit disabled"><span>버튼</span></a>
            <a href="#none" class="btnEm"><span>버튼</span></a>
            <a href="#none" class="btnEm disabled"><span>버튼</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mButton] 텍스트 + 오른쪽 정렬 <span class="zh_CN">text+右对齐</span><span class="en_US">text + right alignment</span></h3>
', 'html' => '
    <div class="mButton">
        <p class="gInfo">예시</p>
        <a href="#none" class="btnNormal"><span>버튼</span></a>
    </div>
'), array(
'desc' => '
    <h3>[mTitle]</h3>
', 'html' => '
    <div class="section">
        <div class="mTitle">
            <h2>중예시</h2>
            <a href="#none" class="btnNormal"><span>버튼</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mBoard]</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>테이블 예시</caption>
            <tbody>
                <tr>
                    <th scope="row">텍스트와의 조합</th>
                    <th class="zh_CN">与text的组合</span></th>
                    <th class="en_US">combination with the text</span>
                    <td>예시 <a href="#none" class="btnNormal"><span>버튼</span></a></td>
                </tr>
                <tr>
                    <th scope="row">Form 태그와의 조합</th>
                    <th class="zh_CN">与Form标签的组合</th>
                    <th class="en_US">combination with the form tag</th>
                    <td>
                        <input type="text" class="fText" />
                        <a href="#none" class="btnSearch"><span>검색</span></a>&nbsp;
                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 버튼</span></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">달력</th>
                    <th class="zh_CN">日历</th>
                    <th class="en_US">calendar</th>
                    <td>
                        <a href="#none" class="btnDate"><span>오늘</span></a>
                        <a href="#none" class="btnDate"><span>3일</span></a>
                        <a href="#none" class="btnDate"><span>7일</span></a>
                        <a href="#none" class="btnDate"><span>1개월</span></a>
                        <a href="#none" class="btnDate"><span>3개월</span></a>
                        <a href="#none" class="btnDate"><span>1년</span></a>
                        <a href="#none" class="btnDate"><span>기본 검색기간 설정</span></a>
                        <input type="text" value="2013-04-03" class="fText gDate" />
                        <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a> ~
                        <input type="text" value="2013-04-03" class="fText gDate" />
                        <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.gBtnFixed</th>
                    <th></th>
                    <td>
                        <div class="gBtnFixed">
                            <p class="txt">
                                14) gBtnFixed &gt; .txt, .button : 아이콘은 최대 2개까지 삽입 할 수 있다.
                                <span class="zh_CN">14) gBtnFixed > .txt, .button : 最多能插入2个icon。</span>
                                <span class="en_US">(번역 필요)</span>
                            </p>
                            <p class="button">
                                <a href="#none" class="btnIcon icoView" title="미리보기">미리보기</a>
                                <a href="#none" class="btnIcon icoEdit" title="수정">수정</a>
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>