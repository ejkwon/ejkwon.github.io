<?php

// 모듈 전체 제목
$header_name = 'mBoard : 목록/소팅';

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
                    <p class="info"><span class="date">2017.01.31</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[empty]</strong> 하단에 empty에 대한 다양한 케이스예시 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.04.27</span><span class="writer">김진아</span></p>
                    <ul class="title">
                        <li><strong>[array]</strong> 소팅기능사용시 주석으로 안내하던 퍼블리싱 가이드를 suio 로 변경한다는 주석가이드 개선<a href="/solution/cmc/advanced/operation/outcome/report/total.html" class="btnLink" target="_blank">예시</a></li>
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
    <h3>[ 소팅 Sorting ] </h3>
    <ol>
        <li>array를 활용하여, 오름차순과 내림차순으로 정렬할 수 있다. 퍼블리싱 진행시, 해당 페이지에 대한 안내문구를 꼭 추가한다.</li>
        <li class="zh_CN">使用array，可进行正序、倒叙排列。进行publishing时，必须添加该页面的指南语句。</li>
        <li class="en_US">번역필요</li>
    </ol>
    <div class="mBox typeBorder">
        &lt;!--<br />
        &nbsp;&nbsp;&nbsp;&nbsp;※ 참고: 소팅 아이콘 가이드 : http://fe.cafe24.com/suio/include/layout.php?MODULE=board_col_list<br />
    --&gt;</div>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:20%;" />
                <col style="width:20%;" />
                <col style="width:20%;" />
                <col style="width:20%;" />
                <col style="width:20%;" />
            </colgroup>
            <thead>
            <!--
                ※ 참고: 소팅 아이콘 가이드 : http://fe.cafe24.com/suio/include/layout.php?MODULE=board_col_list
            -->
                <tr>
                    <th scope="col"><strong class="array">오름차순(ㄱ→ㅎ), 비활성화<button type="button">정렬선택</button></strong></th>
                    <th scope="col"><strong class="array ascending">내림차순(ㅎ→ㄱ), 비활성화<button type="button">정렬선택</button></strong></th>
                    <th scope="col"><strong class="array ascend">오름차순(ㄱ→ㅎ), 활성화<button type="button">오름차순 정렬</button></strong></th>
                    <th scope="col"><strong class="array descend">내림차순(ㅎ→ㄱ), 활성화<button type="button">내림차순 정렬</button></strong></th>
                    <th scope="col"><strong class="array"><span>제목이<br />두줄인 경우</span><button type="button">정렬선택</button></strong></th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
        <p class="empty">내역이 없습니다.</p>
    </div>
'),
array(
'desc' => '
    <h3>[ mBoard.typeBody &gt; tr.hide ] </h3>
    <ul>
        <li>tr의 toggle처리 시, n번째 tr을 숨김 처리가 필요할 경우 tr에 class="hide"를 추가한다.</li>
        <li class="zh_CN">Tr toggle处理(隐藏显示)时，有需要隐藏tr的，在tr上手动添加class=hide即可。</li>
        <li class="en_US">번역필요</li>
    </ul>
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
        <div class="mBoard typeBody" style="max-height:500px;">
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
                        <td><button type="button" class="btnMove icoUnfold"><span>열기</span></button></td>
                    </tr>
                    <tr class="hide">
                        <td colspan="6">
                            <div class="mBoard gSmall">
                                <table border="1" summary="">
                                    <caption>제목</caption>
                                    <tbody>
                                        <tr>
                                            <th scope="row">제목</th>
                                            <td>내용</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">제목</th>
                                            <td>내용</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="rowChk" /></td>
                        <td>1</td>
                        <td>2013-03-25</td>
                        <td>2013-03-25 14:08:44</td>
                        <td class="left"><a href="#none">예시 문장입니다.</a></td>
                        <td><button type="button" class="btnMove icoFold"><span>닫기</span></button></td>
                    </tr>
                    <tr class="show">
                        <td colspan="6">
                            <div class="mBoard gSmall">
                                <table border="1" summary="">
                                    <caption>제목</caption>
                                    <tbody>
                                        <tr>
                                            <th scope="row">제목</th>
                                            <td>내용</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">제목</th>
                                            <td>내용</td>
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
    <h3>[ mBoardArea + empty ] </h3>
    <p>검색결과가 없을 경우 empty로 처리하며, 모든 목록화면 마지막에 추가한다. 아래 화면은 예시화면으로 empty만 퍼블리싱 되어있다.</p>
    <p class="zh_CN">没有搜索结果时，用empty，加到表格的最后。下面是举例页面，只有empty。</p>
    <p class="en_US">번역필요</p>
', 'html' => '
    <div class="mTitle">
        <h2>mBoard Vertical Type</h2>
    </div>

    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <thead>
                <tr>
                    <th scope="col">tr.empty</th>
                </tr>
            </thead>
            <tbody>
                <tr class="empty">
                    <td>내역이 없습니다.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mBoard gDouble">
        <table border="1" summary="">
            <caption>제목</caption>
            <thead>
                <tr>
                    <th scope="col">p.empty</th>
                </tr>
            </thead>
        </table>
        <p class="empty">내역이 없습니다.</p>
    </div>

    <div class="mTitle">
        <h2>mBoard in Horizontal Type</h2>
    </div>
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">tr.empty</th>
                    <td>
                        <div class="mBoard">
                            <table border="1" summary="">
                                <caption>제목</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">tr.empty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="empty">
                                        <td>내역이 없습니다.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">p.empty</th>
                    <td>
                        <div class="mBoard">
                            <table border="1" summary="">
                                <caption>제목</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">p.empty</th>
                                    </tr>
                                </thead>
                            </table>
                            <p class="empty">내역이 없습니다.</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mTitle">
        <h2>mBoard.gScroll Vertical Type</h2>
    </div>
    <div class="mBoard gScroll">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:1000px;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">tr.empty</th>
                </tr>
            </thead>
            <tbody>
                <tr class="empty">
                    <td>내역이 없습니다.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mBoard gScroll gDouble">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:1000px;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">p.empty</th>
                </tr>
            </thead>
        </table>
        <p class="empty">내역이 없습니다.</p>
    </div>

    <div class="mTitle">
        <h2>mBoard.gScroll in Horizontal Type</h2>
    </div>
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">내용없음 예시</th>
                    <td>
                        <div class="mBoard gScroll">
                            <table border="1" summary="">
                                <caption>제목</caption>
                                <colgroup>
                                    <col style="width:1000px;" />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col">tr.empty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="empty">
                                        <td>내역이 없습니다.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">내용없음 예시</th>
                    <td>
                        <div class="mBoard gScroll">
                            <table border="1" summary="">
                                <caption>제목</caption>
                                <colgroup>
                                    <col style="width:1000px;" />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col">p.empty</th>
                                    </tr>
                                </thead>
                            </table>
                            <p class="empty">내역이 없습니다.</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mTitle">
        <h2>mBoardArea</h2>
    </div>
    <div class="mBoardArea">
        <div class="mBoard typeHead">
            <table border="1" summary="">
                <caption>상품 목록</caption>
                <tbody>
                    <tr>
                        <th scope="col">tr.empty</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mBoard typeBody">
            <table border="1" summary="">
                <caption>상품 목록</caption>
                <tbody>
                    <tr class="empty">
                        <td>내역이 없습니다.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mBoard typeFoot">
            <table border="1" summary="">
                <caption>제목</caption>
                <tbody>
                    <tr>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mBoardArea gDouble">
        <div class="mBoard typeHead">
            <table border="1" summary="">
                <caption>상품 목록</caption>
                <tbody>
                    <tr>
                        <th scope="col">p.empty</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mBoard typeBody">
            <table border="1" summary="">
                <caption>상품 목록</caption>
            </table>
            <p class="empty">내역이 없습니다.</p>
        </div>
        <div class="mBoard typeFoot">
            <table border="1" summary="">
                <caption>제목</caption>
                <tbody>
                    <tr>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mTitle">
        <h2>mBoardArea in Horizontal Type</h2>
        <ul>
            <li>mBoardArea 가 mBoard 내에 위치할때는 empty가 상단으로 쏠려보이는 현상이 있으나, 해당건 처리를 위해서 별도의 CSS를 추가하는것은 최적화에 위배되는 것으로 판단되어 생략한다.</li>
            <li class="zh_CN">mBoardArea在mBoard里面时，empty的位置趋向于上端，为了解决这种现象另编写css是违背最简化， 因此省略。</li>
            <li class="en_US">번역필요</li>
        </ul>
    </div>
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">내용없음 예시</th>
                    <td>
                        <div class="mBoardArea">
                            <div class="mBoard typeHead">
                                <table border="1" summary="">
                                    <caption>상품 목록</caption>
                                    <tbody>
                                        <tr>
                                            <th scope="col">tr.empty</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mBoard typeBody">
                                <table border="1" summary="">
                                    <caption>상품 목록</caption>
                                    <tbody>
                                        <tr class="empty">
                                            <td>내역이 없습니다.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mBoard typeFoot">
                                <table border="1" summary="">
                                    <caption>제목</caption>
                                    <tbody>
                                        <tr>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">내용없음 예시</th>
                    <td>
                        <div class="mBoardArea">
                            <div class="mBoard typeHead">
                                <table border="1" summary="">
                                    <caption>상품 목록</caption>
                                    <tbody>
                                        <tr>
                                            <th scope="col">p.empty</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mBoard typeBody">
                                <table border="1" summary="">
                                    <caption>상품 목록</caption>
                                </table>
                                <p class="empty">내역이 없습니다.</p>
                            </div>
                            <div class="mBoard typeFoot">
                                <table border="1" summary="">
                                    <caption>제목</caption>
                                    <tbody>
                                        <tr>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>