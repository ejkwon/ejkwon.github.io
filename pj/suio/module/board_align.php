<?php

// 모듈 전체 제목
$header_name = 'mBoard : 정렬/여백/배경색';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = "";

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
    <h3>[ align ] </h3>
    <ol>
        <li>정렬과 관련된 class는 table과 input에서만 사용해야 한다.</li>
        <li>사용가능 태그 : thead, tbody, tfoot, th, td</li>
        <li>종류 : left, center, right, top, middle</li>
        <li>.left와 .top은 기본값이므로 재 선언할 경우에만 사용한다.</li>
        <li>tbody와 동일한 class는 추가하지 않는다.</li>
    </ol>
    <ol class="zh_CN">
        <li>与排列相关的class仅限在table与input使用。</li>
        <li>可用标签：thead，tbody，tfoot，th，td</li>
        <li>类别：left，center，right，top，middle</li>
        <li>基本值.left与 .top仅在重新设置时使用。</li>
        <li>不添加与tbody同样的class。</li>
    </ol>
    <ol class="en_US">
        <li>The class that is related to the align has to be used in the table and input.</li>
        <li>Available tags: thead, tbody, tfoot, th, td</li>
        <li>The type: left, center, right, top, middle</li>
        <li>The .left and .top are the basic value, which is used only when re-declare.</li>
        <li>The class should not be added if it is identical with the tbody.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:25%;" />
                <col style="width:15%;" />
                <col style="width:15%;" />
                <col style="width:15%;" />
                <col style="width:15%;" />
                <col style="width:15%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col" rowspan="2">tbody</th>
                    <th scope="col" colspan="5">td</th>
                <tr>
                    <th scope="col">
                        왼쪽정렬 (.left)<br />
                        <span class="zh_CN">左对齐</span>
                        <span class="en_US">left alignment</span>
                   </th>
                    <th scope="col">
                        가운데정렬 (.center)<br />
                        <span class="zh_CN">居中</span>
                        <span class="en_US">central alignment</span>
                   </th>
                    <th scope="col">
                        오른쪽정렬 (.right)<br />
                        <span class="zh_CN">右对齐</span>
                        <span class="en_US">right alignment</span>
                   </th>
                    <th scope="col">
                        높이 상단 정렬 (.top)<br />
                        <span class="zh_CN">上端对齐</span>
                        <span class="en_US">upper part alignment of height</span>
                   </th>
                    <th scope="col">
                        높이 중앙 정렬 (.middle)<br />
                        <span class="zh_CN">中间对齐</span>
                        <span class="en_US">central alignment of height</span>
                   </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <strong>&lt;tbody&gt;</strong><br />
                        왼쪽정렬 (기본값, class 생략)<br />
                        <span class="zh_CN">左对齐（基本值，省略class）</span>
                        <span class="en_US">left alignment</span>
                    </td>
                    <td class="left"><br /><span style="color:#fff;">.left只需再定义时使用</span></td>
                    <td class="center">예시</td>
                    <td class="right">예시</td>
                    <td>예시&nbsp;<br />&nbsp;<br />&nbsp;</td>
                    <td class="middle">예시</td>
                </tr>
            </tbody>
            <tbody class="center">
                <tr>
                    <td>
                        <strong>&lt;tbody class="center"&gt;</strong><br />
                        가운데정렬<br />
                        <span class="zh_CN">居中</span>
                        <span class="en_US">central alignment</span>
                    </td>
                    <td class="left">예시</td>
                    <td class="center"><br /><span style="color:#fff;">不能跟tbody使用一样的class</span></td>
                    <td class="right">예시</td>
                    <td>예시&nbsp;<br />&nbsp;<br />&nbsp;</td>
                    <td class="middle">예시</td>
                </tr>
            </tbody>
            <tbody class="right">
                <tr>
                    <td>
                        <strong>&lt;tbody class="right"&gt;</strong><br />
                        오른쪽정렬<br />
                        <span class="zh_CN">右对齐</span>
                        <span class="en_US">right alignment</span>
                    </td>
                    <td class="left">예시</td>
                    <td class="center">예시</td>
                    <td class="right"><br /><span style="color:#fff;">不能跟tbody使用一样的class</span></td>
                    <td>예시&nbsp;<br />&nbsp;<br />&nbsp;</td>
                    <td class="middle">예시</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>
                        <strong>&lt;tbody&gt;</strong><br />
                        높이 상단정렬 (기본값, class 생략)<br />
                        <span class="zh_CN">上端对齐（基本值，省略class）</span>
                        <span class="en_US">upper part alignment of height (the basic value, skip class)</span>
                    </td>
                    <td>예시</td>
                    <td class="center">예시</td>
                    <td class="right">예시</td>
                    <td class="top"><br /><span style="color:#fff;">.top只需再定义时使用</span></td>
                    <td class="middle">예시</td>
                </tr>
            </tbody>
            <tbody class="middle">
                <tr>
                    <td>
                        <strong>&lt;tbody class="middle"&gt;</strong><br />
                        높이 중앙정렬<br />
                        <span class="zh_CN">中间对齐</span>
                        <span class="en_US">central alignment of height</span>
                    </td>
                    <td>예시</td>
                    <td class="center">예시</td>
                    <td class="right">예시</td>
                    <td class="top">예시&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;</td>
                    <td class="middle"><br /><span style="color:#fff;">不能跟tbody使用一样的class</span></td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>[ background-color ] </h3>
    <ol>
        <li>내역이 없을 경우 table과 형제레벨로 &lt;p class="empty"&gt;내역이 없습니다.&lt;/p&gt;를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>没有明细时，与table同等级的&lt;p class="empty"&gt;也无明细。添加&lt;/p&gt;。</li>
        <li>hover/selected等效果都是由js控制 <a href="layout.php?MODULE=javascript" target="_blank" class="txtEm">[ 例子 ]</a></li>
    </ol>
    <ol class="en_US">
        <li>If no history, add &lt;p class="empty"&gt; no history .&lt;/p&gt; in the same level with the table.</li>
    </ol>
', 'html' => '
   <div class="mState">
        <div class="gRight">
            <span class="icoStatus negative"></span> 부정의 강조
            <span class="icoStatus positive"></span> 긍정의 강조
            <span class="icoStatus div"></span> 셀구분(even 역할에만 사용)
        </div>
    </div>
    <div class="mBoard">
        <table border="1" summary="" class="eChkTr">
            <caption>제목</caption>
            <colgroup>
                <col class="chk" />
                <col style="width:50px;" />
                <col class="date" />
                <col class="time" />
                <col style="width:auto;" />
                <col style="width:8%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                    <th scope="col">px</th>
                    <th scope="col">.date</th>
                    <th scope="col">.time</th>
                    <th scope="col">width:auto</th>
                    <th scope="col">%</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>7</td>
                    <td>2013-03-25</td>
                    <td>2013-03-25 14:08:44</td>
                    <td class="left">
                        <div class="gBtnFixed">
                            <p class="txt">
                                <a href="#none">
                                    .gBtnFixed &gt; txt, button : 텍스트와 아이콘을 같이 사용 할 경우. 아이콘은 최대 2개까지 삽입 할 수 있다.
                                    <p class="zh_CN">.gBtnFixed &gt; txt, button :同时使用text与icon时，最多能插入2个icon。</p>
                                    <p class="en_US">gBtnFixed &gt; txt, button : When using texts and icons together, the icons can be inserted maximum 2.</p>
                                </a>
                            </p>
                            <p class="button">
                                <a href="#none" class="btnIcon icoView" title="미리보기">미리보기</a>
                                <a href="#none" class="btnIcon icoEdit" title="수정">수정</a>
                            </p>
                        </div>
                    </td>
                    <td>홍길동</td>
                </tr>
                <tr class="disabled">
                    <td>-</td>
                    <td>6</td>
                    <td>2014-02-26</td>
                    <td>2014-02-26 10:05:07</td>
                    <td class="left">
                        <a href="#none">.disable / 선택할 수 없는 row - 비활성화 / #bababa / <strong class="txtEm">txtEm(#b5d7f8)</strong>, <strong class="txtWarn">txtWarn(#f9b9a0)</strong></a><br />
                        <p class="zh_CN"><a href="#none">.disable/无法选择的row-未激活/#bababa/<strong class="txtEm">txtEm(#b5d7f8)</strong>,<strong class="txtWarn">txtWam(#f9b9a0)</strong></a></p>
                        <p class="en_US"><a href="#none">.disable / A row that is unable to choose – inactivate / #bababa / <strong class="txtEm">txtEm(#b5d7f8)</strong>,<strong class="txtWarn"> txtWarn(#f9b9a0)</strong></a></p>
                    </td>
                    <td>홍길동</td>
                </tr>
                <tr class="hover">
                    <td>-</td>
                    <td>5</td>
                    <td>2013-03-25</td>
                    <td>2013-03-25 14:08:44</td>
                    <td class="left">
                        <a href="#none">.hover / 마우스 오버 / #f5f3f4 : table을 eChkColor로 선언하면 js에서 클래스가 추가, 삭제 된다.</a>
                        <p class="zh_CN"><a href="#none">在hover / mouse over / #f5f3f4 : js，自动添加或删除class。</a></span>
                        <p class="en_US"><a href="#none">.hover / mouse over / #f5f3f4 : In js, classes can be added and deleted.</a></span>
                    </td>
                    <td>홍길동</td>
                </tr>
                <tr class="selected">
                    <td><input type="checkbox" class="rowChk" checked="checked" /></td>
                    <td>4</td>
                    <td>2013-03-25</td>
                    <td>2013-03-25 14:08:44</td>
                    <td class="left">
                        <a href="#none">.selected / 셀 선택 / #eef3f7 : js에서 class가 자동으로 추가, 삭제 된다.</a>
                        <p class="zh_CN"><a href="#none">在.selected / 选择单元格 / #eef3f7 : js，自动添加或删除class。</a></p>
                        <p class="en_US"><a href="#none">.selected / Select a cell / #eef3f7 : In js, classes can be added and deleted.</a></p>
                    </td>
                    <td>홍길동</td>
                </tr>
                <tr class="negative">
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>3</td>
                    <td>2013-03-25</td>
                    <td>2013-03-25 14:08:44</td>
                    <td class="left">
                        <a href="#none">.negative / 부정의 강조 / #ffefe1</a><br />
                        <p class="zh_CN"><a href="#none">.negative / 强调错误 / #ffefe1</a></p>
                        <p class="en_US"><a href="#none">.negative / Emphasizing negative / #ffefe1</a></p>
                    </td>
                    <td>홍길동</td>
                </tr>
                <tr class="positive">
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>2</td>
                    <td>2013-03-25</td>
                    <td>2013-03-25 14:08:44</td>
                    <td class="left">
                        <a href="#none">.positive / 긍정의 강조 / #ffffe1</a><br />
                        <p class="zh_CN"><a href="#none">.positive / 强调正确 / #ffffe1</a></p>
                        <p class="en_US"><a href="#none">.positive / Emphasizing postive / #ffffe1</a></p>
                    </td>
                    <td>홍길동</td>
                </tr>
                <tr class="bgDivision">
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>1</td>
                    <td>2013-03-25</td>
                    <td>2013-03-25 14:08:44</td>
                    <td class="left">
                        <a href="#none">.bgDivision / 셀 구분 / #f3fcf2</a><br />
                        <p class="zh_CN"><a href="#none">.bgDivision / 区分单元格 / #f3fcf2</a></p>
                        <p class="en_US"><a href="#none">.bgDivision / cell division / #f3fcf2</a></p>
                    </td>
                    <td>홍길동</td>
                </tr>
            </tbody>
        </table>
        <p class="empty">내역이 없습니다.</p>
    </div>
'),array(
'desc' => '
    <h3>[ padding ] </h3>
    <ol>
        <li><strong>gCell</strong> : td 상하/좌우폭을 좁게 사용해야 하는 경우 추가한다. ex) &lt;div class="mBoard gCell"&gt;</li>
        <li><strong>gCellSingle</strong> : td 상하폭을 좁게 사용해야 하는 경우 추가한다. ex) &lt;div class="mBoard gCellSingle"&gt;</li>
        <li><strong>gCellNarrow</strong> : td 좌우폭을 좁게 사용해야 하는 경우 추가한다. ex) &lt;div class="mBoard gCellNarrow"&gt;</li>
        <li><strong>gCellDense</strong> : th, td 전체 폰트크기와 폭을 좁게 사용해야 하는 경우 추가한다. ex) &lt;div class="mBoard gCellDense"&gt;</li>
        <li><strong>gCellEmpty</strong> : td에 여백을 없애야 하는 경우 추가한다. ex) &lt;div class="mBoard gCellEmpty"&gt;</li>
    </ol>
    <ol class="zh_CN">
        <li><strong>gCell</strong> : 缩小td上下/左右间距时添加。ex）&lt;div class="mBoard gCell"&gt;</li>
        <li><strong>gCellSingle</strong> : 缩小td上下间距时添加。ex）&lt;div class="mBoard gCellSingle"&gt;</li>
        <li><strong>gCellNarrow</strong> : 缩小td 左右间距时添加。ex）&lt;div class="mBoard gCellNarrow"&gt;</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
    <ol class="en_US">
        <li>Add it in case the width of uppper&lower/right&left should be narrowed. ex) &lt;div class="mBoard gCell"&gt;</li>
        <li>Add it in case the width of upper and lower has to be narrowed. ex) &lt;div class="mBoard gCellSingle"&gt;</li>
        <li>gCellNarrow : Add it when the width of right and left should be close. ex) &lt;div class="mBoard gCellNarrow"&gt;</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="section">
        <div class="mFrameSet">
            <div class="frame">
                <div class="mBoard typeFixed">
                    <table border="1" summary="">
                        <caption>제목</caption>
                        <colgroup>
                            <col style="width:150px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">default</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>padding:9px 9px 7px</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="frame">
                <div class="mBoard typeFixed gCell">
                    <table border="1" summary="">
                        <caption>제목</caption>
                        <colgroup>
                            <col style="width:150px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">gCell</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>padding:5px 4px 4px</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="frame">
                <div class="mBoard typeFixed gCellSingle">
                    <table border="1" summary="">
                        <caption>제목</caption>
                        <colgroup>
                            <col style="width:150px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">gCellSingle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>padding:5px 9px 4px</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="frame">
                <div class="mBoard typeFixed gCellEmpty">
                    <table border="1" summary="">
                        <caption>제목</caption>
                        <colgroup>
                            <col style="width:150px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">gCellEmpty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>padding:0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="frame">
                <div class="mBoard typeFixed gCellNarrow">
                    <table border="1" summary="">
                        <caption>제목</caption>
                        <colgroup>
                            <col style="width:150px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">gCellNarrow</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>padding:9px 4px 7px</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="mFrameSet">
            <div class="frame">
                <div class="mBoard typeFixed gCellDense">
                    <table border="1">
                        <caption>제목</caption>
                        <colgroup>
                            <col style="width:150px;" />
                            <col style="width:150px;" />
                        </colgroup>
                        <tbody>
                            <tr>
                                <th scope="row">가로형</th>
                                <td>font-size:11px</td>
                            </tr>
                            <tr>
                                <th scope="row">padding:3px 10px 2px</th>
                                <td>padding:3px 10px 2px</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="frame">
                <div class="mBoard typeFixed gCellDense">
                    <table border="1">
                        <caption>제목</caption>
                        <colgroup>
                            <col style="width:70px;" />
                            <col style="width:150px;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">목록형</th>
                                <th scope="col">padding:3px 0 2px;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>padding:3px 10px 2px;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
')
);
?>