<?php

// 모듈 전체 제목
$header_name = 'mGridTable';

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
                    <p class="info"><span class="date">2018.05.30</span><span class="writer">송유진</span></p>
                    <ul class="title">
                        <li><strong>[tip]</strong> 정렬 안에 툴팁이 쓰일 경우 <a href="/pdm/wms/stock/state/list_stock.html" class="btnLink" target="_blank">재고목록</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
    <button type="button" id="uioUpdate">Update</button>
    <script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/js/suio.table.fix.resize.js" charset="utf-8"></script>
';

// 상세 모듈
$arr_module = array(
array(
'desc' => '
    <h3>[mGridTable + eMultiTable ] </h3>
    <ol>
        <li>jQuery 1.10이상 버전에 최적화 되어있다.</li>
        <li>스크립트 실행 구문을 추가한다. suio.table.fix.resize.js는 &lt;head&gt; 안에, 실행 구분은 &lt;div class="mGridTable"&gt;바로 위에 위치하도록 한다.<a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=727320526" target="_blank" title="새창 열림">[제작 가이드]</a></li>
        <li>table에 id="eMultiTable" 을 추가한다.</li>
        <li>한 페이지내에서 두개이상 사용될때는 eMultiTable$숫자로 네이밍하여 추가한다.</li>
        <li>table class="bgClear" 가 들어가면 짝수에만 들어간 배경색을 클리어해준다.</li>
    </ol>
    <ol class="zh_CN">
        <li>最适用于jQuery 1.10以上版本。</li>
        <li>添加script代码。 <a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=727320526" target="_blank" title="새창 열림"><strong class="txtEm">[制作guide]</strong></a></li>
        <li>table 加 id="eMultiTable"。</li>
        <li>一个页面里，有两个或两个以上时，"eMultiTable$数字"命名。</li>
        <li>有table class="bgClear"时， 会除去隔行出现的背景颜色。</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <script type="text/javascript">
        $(document).ready(function() {
            $("#eMultiTable1").fixResize({ colResize:true, height:200, resizeVer:"flex" });
        });
    </script>
    <div class="mGridTable">
        <table border="1" summary="" id="eMultiTable1" class="eChkColor">
            <caption>제목</caption>
            <thead>
            <!--
                ※ 참고: 소팅 아이콘 가이드 : http://fe.cafe24.com/suio/include/layout.php?MODULE=grid_table
            -->
                <tr>
                    <th scope="col" style="width:50px;"><input type="checkbox" class="allChk" /></th>
                    <th scope="col" class="array" style="width:200px;">오름차순(ㄱ→ㅎ), 비활성화<button type="button">정렬선택</button></th>
                    <th scope="col" class="array ascending" style="width:200px;">내림차순(ㅎ→ㄱ), 비활성화<button type="button">정렬선택</button></th>
                    <th scope="col" class="array ascend" style="width:200px;">오름차순(ㄱ→ㅎ), 활성화<button type="button">오름차순 정렬</button></th>
                    <th scope="col" class="array descend" style="width:200px;">내림차순(ㅎ→ㄱ), 활성화<button type="button">내림차순 정렬</button></th>
                    <th scope="col" style="width:200px;">제목</th>
                    <th scope="col" style="width:200px;">제목
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
                    </th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>내용이 길어질 경우 말줄임 처리됩니다.</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        <!-- 참고: 검색결과 없을 경우 tbody 를 제거 한 후, <p class="empty">내역이 없습니다.</p> 으로 처리합니다 -->
    </div>
'),
array(
'desc' => '
    <h3>[ 소팅 Sorting ] </h3>
    <ol>
        <li>mBoard와 다르므로 유의한다.</li>
        <li>array를 활용하여, 오름차순과 내림차순으로 정렬할 수 있다.</li>
        <li>array안에 도움말(mTooltip) 모듈이 사용될 경우, th에 class="tip"을 추가한다.</li>
        <li>
            퍼블리싱 진행시, 해당 페이지에 대한 안내문구를 꼭 추가한다.
            <div class="mBox typeBorder">
            &lt;!--<br />
            &nbsp;&nbsp;&nbsp;&nbsp;※ 참고: 소팅 아이콘 가이드 : http://fe.cafe24.com/suio/include/layout.php?MODULE=grid_table<br />
            --&gt;</div>
        </li>
    </ol>
    <ol class="zh_CN">
        <li>请注意，此排列不同于mBoard。</li>
        <li>使用array，可进行正序、倒叙排列。</li>
        <li>번역필요</li>
        <li>
            进行publishing时，必须添加该页面的指南语句。
            <div class="mBox typeBorder">
            &lt;!--<br />
            &nbsp;&nbsp;&nbsp;&nbsp;※ 참고: 소팅 아이콘 가이드 : http://fe.cafe24.com/suio/include/layout.php?module=grid_table<br />
            --&gt;</div>
        </li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요</li>
        <li>번역필요
            <div class="mBox typeBorder">
            &lt;!--<br />
            &nbsp;&nbsp;&nbsp;&nbsp;※ 참고: 소팅 아이콘 가이드 : http://fe.cafe24.com/suio/include/layout.php?MODULE=grid_table<br />
            --&gt;</div>
        </li>
    </ol>
', 'html' => '
    <script type="text/javascript">
        $(document).ready(function() {
            $("#eMultiTable2").fixResize({ colResize:true, height:200, resizeVer:"flex" });
        });
    </script>
    <div class="mGridTable">
        <table border="1" summary="" id="eMultiTable2">
            <caption>제목</caption>
            <thead>
            <!--
                ※ 참고: 소팅 아이콘 가이드 : http://fe.cafe24.com/suio/include/layout.php?MODULE=grid_table
            -->
                <tr>
                    <th scope="col" class="array" style="width:200px;">오름차순(ㄱ→ㅎ), 비활성화<button type="button">정렬선택</button></th>
                    <th scope="col" class="array ascending" style="width:200px;">내림차순(ㅎ→ㄱ), 비활성화<button type="button">정렬선택</button></th>
                    <th scope="col" class="array ascend" style="width:200px;">오름차순(ㄱ→ㅎ), 활성화<button type="button">오름차순 정렬</button></th>
                    <th scope="col" class="array descend" style="width:200px;">내림차순(ㅎ→ㄱ), 활성화<button type="button">내림차순 정렬</button></th>
                    <th scope="col" class="array tip" style="width:200px;">
                        <span class="txtBreak">제목이 두줄인 경우 제목이</span><span class="txtBreak">두줄인 경우 제목이 두줄인 경우</span><button type="button">정렬선택</button>
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
                    </th>
                    <th scope="col" class="array tip" style="width:200px;">툴팁과 함께 쓰일 경우<button type="button">정렬선택</button>
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
                    </th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        <!-- 참고: 검색결과 없을 경우 tbody 를 제거 한 후, <p class="empty">내역이 없습니다.</p> 으로 처리합니다 -->
    </div>
'),
array(
'desc' => '
    <h3>[ align ]</h3>
    <ol>
        <li>mBoard와 동일하게 사용한다.</li>
        <li>사용가능 태그 : thead, tbody, tfoot, th, td</li>
        <li>종류 : left, center, right, top, middle</li>
        <li>.left와 .top은 기본값이므로 재 선언할 경우에만 사용한다.</li>
        <li>tbody와 동일한 class는 추가하지 않는다.</li>
    </ol>
    <ol class="zh_CN">
        <li>与mBoard同样使用。</li>
        <li>可用标签：thead，tbody，tfoot，th，td</li>
        <li>类别：left，center，right，top，middle</li>
        <li>基本值.left与 .top仅在重新设置时使用。</li>
        <li>不添加与tbody同样的class。</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
        <li>Available tags: thead, tbody, tfoot, th, td</li>
        <li>The type: left, center, right, top, middle</li>
        <li>The .left and .top are the basic value, which is used only when re-declare.</li>
        <li>The class should not be added if it is identical with the tbody.</li>
    </ol>
', 'html' => '
    <script type="text/javascript">
        $(document).ready(function() {
            $("#eMultiTable3").fixResize();
        });
    </script>
    <div class="mGridTable">
        <table border="1" summary="" id="eMultiTable3">
            <caption>제목</caption>
            <thead>
                <tr>
                    <th scope="col" rowspan="2" style="width:200px;">tbody</th>
                    <th scope="col" colspan="5" style="width:auto;">td</th>
                </tr>
                <tr>
                    <th scope="col" style="width:200px;">
                        <span class="txtBreak">왼쪽정렬 (.left)</span>
                        <span class="txtBreak">
                            <span class="zh_CN">左对齐</span>
                            <span class="en_US" style="display:none;">left alignment</span>
                        </span>
                    </th>
                    <th scope="col" style="width:200px;">
                        <span class="txtBreak">가운데정렬 (.center)</span>
                        <span class="txtBreak">
                            <span class="zh_CN">居中</span>
                            <span class="en_US" style="display:none;">central alignment</span>
                        </span>
                    </th>
                    <th scope="col" style="width:200px;">
                        <span class="txtBreak">오른쪽정렬 (.right)</span>
                        <span class="txtBreak">
                            <span class="zh_CN">右对齐</span>
                            <span class="en_US" style="display:none;">right alignment</span>
                        </span>
                    </th>
                    <th scope="col" style="width:200px;">
                        <span class="txtBreak">높이 상단 정렬 (.top)</span>
                        <span class="txtBreak">
                            <span class="zh_CN">上端对齐</span>
                            <span class="en_US" style="display:none;">upper part alignment of height</span>
                        </span>
                    </th>
                    <th scope="col" style="width:200px;">
                        <span class="txtBreak">높이 중앙 정렬 (.middle)</span>
                        <span class="txtBreak">
                            <span class="zh_CN">中间对齐</span>
                            <span class="en_US" style="display:none;">central alignment of height</span>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <strong>&lt;tbody&gt;</strong><br />
                        왼쪽정렬 (기본값, class 생략)<br />
                        <span class="zh_CN">左对齐（基本值，省略class）</span>
                        <span class="en_US" style="display:none;">left alignment</span>
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
                        <span class="en_US" style="display:none;">central alignment</span>
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
                        <span class="en_US" style="display:none;">right alignment</span>
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
                        <span class="en_US" style="display:none;">upper part alignment of height (the basic value, skip class)</span>
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
                        <span class="en_US" style="display:none;">central alignment of height</span>
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
'),
array(
'desc' => '
    <h3>[ background-color ]</h3>
    <ol>
        <li>mBoard와 동일하게 eChkColor를 사용된다.</li>
    </ol>
    <ol class="zh_CN">
        <li>与mBoard同样，使用eChkColor。</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <script type="text/javascript">
        $(document).ready(function() {
            $("#eMultiTable4").fixResize({ height:301 });
        });
    </script>
    <div class="mGridTable">
        <table border="1" summary="" id="eMultiTable4" class="eChkColor">
            <caption>제목</caption>
            <thead>
                <tr>
                    <th scope="col" style="width:50px;"><input type="checkbox" class="allChk" /></th>
                    <th scope="col" style="width:100px;">class</th>
                    <th scope="col" style="width:800px;">내용</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>.hover</td>
                    <td class="left">
                        <a href="#none">마우스 오버 / #f5f3f4 : table을 eChkColor로 선언하면 js에서 클래스가 추가, 삭제 된다.</a>
                        <p class="zh_CN"><a href="#none">mouse over / #f5f3f4 : js，自动添加或删除class。</a>
                        </p><p class="en_US" style="display:none;"><a href="#none">mouse over / #f5f3f4 : In js, classes can be added and deleted.</a></p></td>
                </tr>
                <tr class="selected">
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>.selected</td>
                    <td class="left">
                        <a href="#none">셀 선택 / #eef3f7 : js에서 class가 자동으로 추가, 삭제 된다.</a>
                        <p class="zh_CN"><a href="#none">选择单元格 / #eef3f7 : js，自动添加或删除class。</a></p>
                        <p class="en_US" style="display:none;"><a href="#none">Select a cell / #eef3f7 : In js, classes can be added and deleted.</a></p>
                    </td>
                </tr>
                <tr class="negative">
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>.negative</td>
                    <td class="left">
                        <a href="#none">부정의 강조 / #ffefe1</a><br />
                        <p class="zh_CN"><a href="#none">强调错误 / #ffefe1</a></p>
                        <p class="en_US" style="display:none;"><a href="#none">Emphasizing negative / #ffefe1</a></p>
                    </td>
                </tr>
                <tr class="positive">
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>.positive</td>
                    <td class="left">
                        <a href="#none">긍정의 강조 / #ffffe1</a><br />
                        <p class="zh_CN"><a href="#none">强调正确 / #ffffe1</a></p>
                        <p class="en_US" style="display:none;"><a href="#none">Emphasizing postive / #ffffe1</a></p>
                    </td>
                </tr>
                <tr class="bgDivision">
                    <td><input type="checkbox" class="rowChk" /></td>
                    <td>.bgDivision</td>
                    <td class="left">
                        <a href="#none">셀 구분 / #f3fcf2</a><br />
                        <p class="zh_CN"><a href="#none">区分单元格 / #f3fcf2</a></p>
                        <p class="en_US" style="display:none;"><a href="#none">cell division / #f3fcf2</a></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),
array(
'desc' => '
    <h3>[ padding ]</h3>
    <ol>
        <li><strong>gCell</strong> : td 상하/좌우폭을 좁게 사용해야 하는 경우 추가한다. ex) &lt;div class="mGridTable gCell"&gt;</li>
        <li><strong>gCellSingle</strong> : td 상하폭을 좁게 사용해야 하는 경우 추가한다. ex) &lt;div class="mGridTable gCellSingle"&gt;</li>
        <li><strong>gCellNarrow</strong> : td 좌우폭을 좁게 사용해야 하는 경우 추가한다. ex) &lt;div class="mGridTable gCellNarrow"&gt;</li>
    </ol>
    <ol class="zh_CN">
        <li><strong>gCell</strong> : 缩小td上下/左右间距时添加。ex）&lt;div class="mGridTable gCell"&gt;</li>
        <li><strong>gCellSingle</strong> : 缩小td上下间距时添加。ex）&lt;div class="mGridTable gCellSingle"&gt;</li>
        <li><strong>gCellNarrow</strong> : 缩小td 左右间距时添加。ex）&lt;div class="mGridTable gCellNarrow"&gt;</li>
    </ol>
    <ol class="en_US">
        <li>Add it in case the width of uppper&lower/right&left should be narrowed. ex) &lt;div class="mBoard gCell"&gt;</li>
        <li>Add it in case the width of upper and lower has to be narrowed. ex) &lt;div class="mBoard gCellSingle"&gt;</li>
        <li>gCellNarrow : Add it when the width of right and left should be close. ex) &lt;div class="mBoard gCellNarrow"&gt;</li>
    </ol>
', 'html' => '
<style type="text/css">
    .mFrameSet .mGridTable table { width:auto; }
</style>

    <div class="section">
        <div class="mFrameSet">
            <div class="frame">
                <div class="mGridTable">
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
                <div class="mGridTable gCell">
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
                <div class="mGridTable gCellSingle">
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
                <div class="mGridTable gCellNarrow">
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
')
);
?>