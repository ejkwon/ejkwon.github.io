<?php

// 모듈 전체 제목
$header_name = 'mToggleBar 열기/닫기';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>.mToggleBar + .eToggle의 구조로 <strong>.eToggle은 필수</strong>로 사용되며, .toggleArea 의 기본값은 display:none 이다</li>
        <li>.eToggle 클릭시 노출되는 컨텐츠 영역은 .toggleArea에 퍼블리싱</strong>한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>结构为.mToggleBar + .eToggle时，必须使用.eToggle，.toggleArea的基本值为display:none。</li>
        <li>点击.eToggle时显示的contents区域，需作publishing于.toggleArea</li>
    </ol>
    <ol class="en_US">
        <li>The <strong>.eToggle is used essentially</strong> as the structure of the .mToggleBar + .eToggle, and the default value of the .toggleArea is the displa:none.</li>
        <li>The contents area that is exposed when click the .eToggle has to be published in the.toggleArea.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
    #uioContent article .toggleArea .mBoard { margin:0; }
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
                    <p class="info"><span class="date">2017.04.10</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[mToggleBar + theme1]</strong> 테마1 <a href="/pdm/mes/erp/common/template.html" class="btnLink" target="_blank">생산관리시스템</a></p>
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
    <h3>[mToggleBar + eToggle > toggleArea]</h3>
    <ol>
        <li>기본 : 닫힘 상태</li>
    </ol>
    <ol class="zh_CN">
        <li>基本：关闭状态</li>
    </ol>
    <ol class="en_US">
        <li>default : closed.</li>
    </ol>
', 'html' => '
    <div class="mToggleBar eToggle">
        <h2>토글바 제목</h2>
        <div class="ctrl">
            <label class="gLabel"><input type="checkbox" /> 항상열기</label>
            <span><button type="button"><em>접기</em></button></span>
        </div>
    </div>
    <div class="toggleArea">
        <div class="mBoard">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col style="width:154px;" />
                    <col style="width:auto;" />
                    <col style="width:154px;" />
                    <col style="width:auto;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">컨텐츠</th>
                        <td colspan="3">내용</td>
                    </tr>
                    <tr>
                        <th scope="row">컨텐츠</th>
                        <td>내용</td>
                        <th scope="row">컨텐츠</th>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<br /><br />

    <div class="mToggleBar eToggle">
        <h2>토글바 제목</h2>
        <div class="ctrl">
            <label class="gLabel"><input type="checkbox" /> 항상열기</label>
            <span><button type="button"><em>접기</em></button></span>
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
                </thead>
                <tfoot>
                    <tr>
                        <th scope="row">합계</th>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
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
'),
array(
'desc' => '
    <h3>[mToggleBar + eToggle + selected > toggleArea]</h3>
    <ol>
        <li>활용 : 열림 상태</li>
        <li>열림 상태로 로딩이 필요한 경우 아래와 같은 속성을 추가한다.
            <ol>
                <li>&lt;div class="mToggleBar eToggle <strong>selected</strong>"&gt;</li>
                <li>&lt;div class="toggleArea"<strong>style="display:block;"</strong>&gt; </li>
            </ol>
        </li>
    </ol>
    <ol class="zh_CN">
        <li>活用：开启状态</li>
        <li>需要在开启状态下loading时，添加以下属性。
            <ol>
                <li>&lt;div class="mToggleBar eToggle <strong>selected</strong>"&gt;</li>
                <li>&lt;div class="toggleArea"<strong>style="display:block;"</strong>&gt; </li>
            </ol>
        </li>
    </ol>
    <ol class="en_US">
        <li>Use : open</li>
        <li>Add the property like below in case a loading is needed in an open status.
            <ol>
                <li>&lt;div class="mToggleBar eToggle <strong>selected</strong>"&gt;</li>
                <li>&lt;div class="toggleArea"<strong>style="display:block;"</strong>&gt; </li>
            </ol>
        </li>
    </ol>
', 'html' => '
    <div class="mToggleBar eToggle selected">
        <h2>토글바 제목</h2>
        <div class="ctrl">
            <label class="gLabel"><input type="checkbox" /> 항상열기</label>
            <span><button type="button"><em>접기</em></button></span>
        </div>
    </div>
    <div class="toggleArea" style="display:block;">
        <div class="mBoard">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col style="width:154px;" />
                    <col style="width:auto;" />
                    <col style="width:154px;" />
                    <col style="width:auto;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">컨텐츠</th>
                        <td colspan="3">내용</td>
                    </tr>
                    <tr>
                        <th scope="row">컨텐츠</th>
                        <td>내용</td>
                        <th scope="row">컨텐츠</th>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br /><br />

    <div class="mToggleBar eToggle selected">
        <h2>토글바 제목</h2>
        <div class="ctrl">
            <label class="gLabel"><input type="checkbox" /> 항상열기</label>
            <span><button type="button"><em>접기</em></button></span>
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
                </thead>
                <tfoot>
                    <tr>
                        <th scope="row">합계</th>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
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
'),
array(
'desc' => '
    <h3>[mToggleBar + theme1]</h3>
    <ol>
        <li>동일한 기능에 디자인 스타일만 다른 경우, class "theme1"을 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>同样的功能，样式不同时，加 class="theme1"</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mToggleBar theme1 eToggle selected">
        <h2>토글바 제목</h2>
        <div class="ctrl">
            <label class="gLabel"><input type="checkbox" /> 항상열기</label>
            <span><button type="button"><em>접기</em></button></span>
        </div>
    </div>
    <div class="toggleArea" style="display:block;">
        <div class="mBoard">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col style="width:154px;" />
                    <col style="width:auto;" />
                    <col style="width:154px;" />
                    <col style="width:auto;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">컨텐츠</th>
                        <td colspan="3">내용</td>
                    </tr>
                    <tr>
                        <th scope="row">컨텐츠</th>
                        <td>내용</td>
                        <th scope="row">컨텐츠</th>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br /><br />

    <div class="mToggleBar theme1 eToggle selected">
        <h2>토글바 제목</h2>
        <div class="ctrl">
            <label class="gLabel"><input type="checkbox" /> 항상열기</label>
            <span><button type="button"><em>접기</em></button></span>
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
                </thead>
                <tfoot>
                    <tr>
                        <th scope="row">합계</th>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
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
')
);
?>