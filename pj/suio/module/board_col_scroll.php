<?php

// 모듈 전체 제목
$header_name = 'mBoard : 목록 Scroll Bar';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = '';

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
                    <p class="info"><span class="date">2017.09.12</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[mBoardArea]</strong> 팝업내 width 정책 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.09.01</span><span class="writer">김은경</span></p>
                    <ul class="title">
                        <li><strong>[mBoard + gScroll]</strong> 테이블안의 테이블 border,margin reset <a href="/smartAdmin/market/global/admin/product/common/register.html" class="btnLink" target="_blank">품목상세정보</a></li>
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
    <h3>[gScroll] 가로스크롤 <span class="zh_CN">横向滚动条</span><span class="en_US">horizontal scroll</span></h3>
    <ol>
        <li>col width : chk, date, time 제외하고 px로 조정한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>col width : chk, date, time除外，都使用px调整。</li>
    </ol>
    <ol class="en_US">
        <li>col width : Adjust with the px excluding the chk, date, and time.</li>
    </ol>
', 'html' => '
    <div class="mBoard gScroll">
        <table border="1" summary="" class="eChkColor">
            <caption>제목</caption>
            <colgroup>
                <col class="chk" />
                <col style="width:50px;" />
                <col class="date" />
                <col class="time" />
                <col style="width:450px;" />
                <col style="width:80px;" />
                <col style="width:100px;" />
                <col style="width:100px;" />
                <col style="width:100px;" />
                <col style="width:150px;" />
                <col style="width:80px;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                    <th scope="col">No</th>
                    <th scope="col">DATE</th>
                    <th scope="col">TIME</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>-</td>
                    <td>2</td>
                    <td>2013-03-25</td>
                    <td>2013-03-25 14:08:44</td>
                    <td class="left"><a href="#none">예시 문장입니다.</a></td>
                    <td>홍길동</td>
                    <td>010-1234-5678</td>
                    <td>02-1234-5678</td>
                    <td>우리은행</td>
                    <td>1234-567-89000</td>
                    <td>홍길동동</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>1</td>
                    <td>2013-03-25</td>
                    <td>2013-03-25 14:08:44</td>
                    <td class="left"><a href="#none">예시 문장입니다.</a></td>
                    <td>홍길동</td>
                    <td>010-1234-5678</td>
                    <td>02-1234-5678</td>
                    <td>우리은행</td>
                    <td>1234-567-89000</td>
                    <td>홍길동동</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>1</td>
                    <td>2013-03-25</td>
                    <td>2013-03-25 14:08:44</td>
                    <td class="left"><a href="#none">예시 문장입니다.</a></td>
                    <td>홍길동</td>
                    <td>010-1234-5678</td>
                    <td>02-1234-5678</td>
                    <td>우리은행</td>
                    <td>1234-567-89000</td>
                    <td>홍길동동</td>
                </tr>
            </tbody>
        </table>
        <p class="empty">내역이 없습니다.</p>
    </div>
'),
array(
'desc' => '
    <h3>[mBoard + gScroll] 가로스크롤 + 테이블 안에 테이블 <span class="zh_CN">横向滚动条+table里的table</span><span class="en_US">Horizontal scroll + table inside table</span></h3>
    <ol>
        <li>.mBoard &gt; td &gt; .mBoard에 .inTable 추가.</li>
    </ol>
    <ol class="zh_CN">
        <li>在.mBoard &gt; td &gt; .mBoard添加 .inTable。</li>
    </ol>
    <ol class="en_US">
        <li>.mBoard &gt; td &gt; Add the .inTable to the .mBoard.</li>
    </ol>
', 'html' => '
    <div class="mBoard gScroll">
        <table border="1" summary="" class="eChkTr">
            <caption>제목</caption>
            <colgroup>
                <col class="chk" />
                <col style="width:50px;" />
                <col class="date" />
                <col class="time" />
                <col style="width:450px;" />
                <col style="width:80px;" />
                <col style="width:100px;" />
                <col style="width:100px;" />
                <col style="width:100px;" />
                <col style="width:150px;" />
                <col style="width:80px;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                    <th scope="col">No</th>
                    <th scope="col">DATE</th>
                    <th scope="col">TIME</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td colspan="11">
                        <div class="mBoard inTable">
                            <table border="1" summary="">
                                <caption>제목</caption>
                                <colgroup>
                                    <col class="chk" />
                                    <col style="width:auto;" />
                                </colgroup>
                                <tbody class="center">
                                    <tr>
                                        <td><input type="checkbox" class="rowChk" /></td>
                                        <td class="left"><a href="#none">예시 문장입니다.</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="11">
                        <div class="mBoard inTable">
                            <table border="1" summary="">
                                <caption>제목</caption>
                                <colgroup>
                                    <col class="chk" />
                                    <col style="width:auto;" />
                                </colgroup>
                                <tbody class="center">
                                    <tr>
                                        <td><input type="checkbox" class="rowChk" /></td>
                                        <td class="left"><a href="#none">예시 문장입니다.</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="empty">내역이 없습니다.</p>
    </div>
'),
array(
'desc' => '
    <h3>[mBoardArea &gt; typeHead, typeBody, typeFoot] 세로스크롤 <span class="zh_CN">竖向滚动条</span><span class="en_US">vertical scroll</span></h3>
    <ol>
        <li>thead영역 =&gt; .typeHead, tbody영역 =&gt; .typeBody로 구분한다.</li>
        <li>tfoot 고정이 필요한 경우, .typeFoot의 테이블을 추가한다.</li>
        <li>.typeBody의 높이값 조정이 필요할 경우 .mBoardArea .mBoard.typeBody에 inline style로 max-height를 추가한다.</li>
        <li>.typeHead의 마지막 셀 width를 typeBody 보다 17px 늘려준다.</li>
        <li>width조정은 px, %, class로 모두 가능하다</li>
        <li>팝업에서는, 브라우저를 강제로 줄일 경우 auto가 너무 좁게 표현되어 글자가 틀어지는 현상이 있으므로 min-width:$size 를 인라인 스타일로 추가한다</li>
    </ol>
    <ol class="zh_CN">
        <li>区分为thead区域 => .typeHead和tbody区域 => .typeBody。</li>
        <li>需要固定tfoot时，须添加typeFoot的table。</li>
        <li>需要调整 .typeBody的高度值时，在 .mBoardArea .mBoard.typeBody以inline style添加 max-height。</li>
        <li>.typeHead最后一个单元格的width必须要比typeBody拉长17px。</li>
        <li>调整width时， 均可使用px, %, class。</li>
        <li>번역필요</li>
    </ol>
    <ol class="en_US">
        <li>Divide them from thead area => .typeHead, tbody area => typeBody</li>
        <li>In case the tfoot needs to be fixed, add the table of . typeFoot.</li>
        <li>Add the max height as an inline style in the .mBoardArea .mBoard.typeBody, if the height value of .typeBody needs to be adjusted.</li>
        <li>For the width of the last cell of .typeHead, extend by 17px more than the typeBody.</li>
        <li>The adjustment of width is possible with the px, % and class.</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mBoardArea">
        <div class="mBoard typeHead">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                    <col style="width:97px;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col"><input type="checkbox" class="allChk" /></th>
                        <th scope="col">No</th>
                        <th scope="col">DATE</th>
                        <th scope="col">TIME</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mBoard typeBody">
            <table border="1" summary="" class="eChkColor">
                <caption>제목</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                    <col style="width:80px;" />
                </colgroup>
                <tbody class="center">
                    <tr>
                        <td><input type="checkbox" class="rowChk" /></td>
                        <td>2</td>
                        <td>2013-03-25</td>
                        <td>2013-03-25 14:08:44</td>
                        <td class="left"><a href="#none">예시 문장입니다.</a></td>
                        <td>홍길동</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="rowChk" /></td>
                        <td>1</td>
                        <td>2013-03-25</td>
                        <td>2013-03-25 14:08:44</td>
                        <td class="left"><a href="#none">예시 문장입니다.</a></td>
                        <td>홍길동</td>
                    </tr>
                </tbody>
            </table>
            <p class="empty">내역이 없습니다.</p>
        </div>
        <div class="mBoard typeFoot">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                    <col style="width:97px;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">-</th>
                        <th scope="row">합계</th>
                        <td>2013-03-25</td>
                        <td>2013-03-25</td>
                        <td>예시 문장입니다.</td>
                        <td>홍길동</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
'),
array(
'desc' => '
    <h3>[mBoardArea &gt; typeHead, typeBody] 세로스크롤 + 테이블 안에 테이블 <span class="zh_CN">竖向滚动条+table里的table</span><span class="en_US">vertical scroll + table inside table</span></h3>
    <ol>
        <li>.mBoard.typeBody &gt; td &gt; .mBoard에 .inTable 추가.</li>
    </ol>
    <ol class="zh_CN">
        <li>在 .mBoard.typeBody > td > .mBoard添加 .inTable。</li>
    </ol>
    <ol class="en_US">
        <li>.mBoard.typeBody &gt; td &gt; Add the .inTable to the .mBoard.</li>
    </ol>
', 'html' => '
    <div class="mBoardArea">
        <div class="mBoard typeHead">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                    <col style="width:97px;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col"><input type="checkbox" class="allChk" /></th>
                        <th scope="col">No</th>
                        <th scope="col">DATE</th>
                        <th scope="col">TIME</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mBoard typeBody">
            <table border="1" summary="" class="eChkColor">
                <caption>제목</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                    <col style="width:80px;" />
                </colgroup>
                <tbody class="center">
                    <tr>
                        <td colspan="6">
                            <div class="mBoard inTable">
                                <table border="1" summary="">
                                    <caption>제목</caption>
                                    <colgroup>
                                        <col class="chk" />
                                        <col style="width:auto;" />
                                    </colgroup>
                                    <tbody class="center">
                                        <tr>
                                            <td><input type="checkbox" class="rowChk" /></td>
                                            <td class="left"><a href="#none">예시 문장입니다.</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <div class="mBoard inTable">
                                <table border="1" summary="">
                                    <caption>제목</caption>
                                    <colgroup>
                                        <col class="chk" />
                                        <col style="width:auto;" />
                                    </colgroup>
                                    <tbody class="center">
                                        <tr>
                                            <td><input type="checkbox" class="rowChk" /></td>
                                            <td class="left"><a href="#none">예시 문장입니다.</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="empty">내역이 없습니다.</p>
        </div>
    </div>
'),
array(
'desc' => '
    <h3>[mBoardArea gNoScoll] 세로스크롤 삭제 <span class="zh_CN">删除竖向滚动条</span><span class="en_US">Delete the vertical scroll</span></h3>
    <ol>
        <li>typeBody의 스크롤을 삭제하고자 할 경우, mBoardArea에 [gNoScoll] class를 추가한다. <a href="/pdm/wms/stock/popup/request_history.html" class="btnNormal" target="_blank" title="새창 열림"><span>예시</span></a></li>
        <li>typeHead의 마지막 셀 width를 typeBody와 맞춰준다.</li>
        <li>width조정은 px, %, class로 모두 가능.</li>
    </ol>
    <ol class="zh_CN">
        <li>需要删除typeBody的滚动条时，在mBoardArea添加[gNoScoll] class。<a href="/pdm/wms/stock/popup/request_history.html" class="btnNormal" target="_blank" title="새창 열림"><span>示例]</span></a></li>
        <li>typeHead最后一个单元格的width须与 typeBody相同。</li>
        <li>调整width时， 均可使用px, %, class。</li>
    </ol>
    <ol class="en_US">
        <li>If a scroll of typeBody needs to be deleted, add the [gNoScoll] class in the mBoardArea. <a href="/smartAdmin/product/manage/list/product_modify.html" class="btnNormal" target="_blank" title="새창 열림"><span>example</span></a></li>
        <li>Adjust the width of typeHead’s last cell to the typeBody.</li>
        <li>Adjustment of width is available with the px, %, and class.</li>
    </ol>
', 'html' => '
    <div class="mBoardArea gNoScroll">
        <div class="mBoard typeHead">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                    <col style="width:97px;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col"><input type="checkbox" class="allChk" /></th>
                        <th scope="col">No</th>
                        <th scope="col">DATE</th>
                        <th scope="col">TIME</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mBoard typeBody">
            <table border="1" summary="" class="eChkColor">
                <caption>제목</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                    <col style="width:97px;" />
                </colgroup>
                <tbody class="center">
                    <tr>
                        <td><input type="checkbox" class="rowChk" /></td>
                        <td>2</td>
                        <td>2013-03-25</td>
                        <td>2013-03-25 14:08:44</td>
                        <td class="left"><a href="#none">예시 문장입니다.</a></td>
                        <td>홍길동</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="rowChk" /></td>
                        <td>1</td>
                        <td>2013-03-25</td>
                        <td>2013-03-25 14:08:44</td>
                        <td class="left"><a href="#none">예시 문장입니다.</a></td>
                        <td>홍길동</td>
                    </tr>
                </tbody>
            </table>
            <p class="empty">내역이 없습니다.</p>
        </div>
        <div class="mBoard typeFoot">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                    <col style="width:97px;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">-</th>
                        <th scope="row">합계</th>
                        <td>2013-03-25</td>
                        <td>2013-03-25</td>
                        <td>예시 문장입니다.</td>
                        <td>홍길동</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
')
);
?>