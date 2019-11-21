<?php

// 모듈 전체 제목
$header_name = 'mResizer';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>높이값을 resizing 할 수 있는 기능이 필요한 경우, 2017년 3월부터 신규 가이드 mResizer.theme(1~n) 를 적용한다. (표준 js는 없고, 개발팀에서 처리함)</li>
        <li>동일한 기능에 디자인 스타일만 다르므로 theme1, 2, 3...으로 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>需要对高度进行调整时，从2017年3月开始适用mResizer.theme(1~n). (JS部分由开发组处理)</li>
        <li>拥有相同功能但样式不同的部分，用theme1 , 2 , 3... 来追加样式。</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
        <li>번역필요</li>
    </ol>';

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
                    <p class="info"><span class="date">2017.07.14</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[mResizer.theme3]</strong> 신규 테마 추가 <a href="/wms/popup/micro/quick_incoming.html" class="btnLink" target="_blank">스마트재고 &gt; 빠른입출고 </a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.03.30</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[mResizer]</strong> 신규 모듈 추가</p>
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
    <h3>[ mResizer.theme1 ]</h3>
', 'html' => '
    <div class="mCtrl typeHeader">
        <div class="gLeft">
            <span class="txtLess">선택한 항목을</span>
            <a class="btnNormal" href="#none"><span><em class="icoDel"></em> 삭제</span></a>
        </div>
        <div class="gRight">
            <a class="btnCtrl" href="#none"><span>버튼</span></a>
        </div>
    </div>
    <div class="mBox typeBorder gScroll gNoMargin">
        미리보기 영역<br />
        스크롤 박스<br />
        스크롤 박스<br />
        스크롤 박스<br />
        스크롤 박스<br />
        스크롤 박스<br />
        스크롤 박스<br />
        스크롤 박스<br />
    </div>
    <div class="mResizer theme1"><span>선택 높이 영역 조절</span></div>
'),
array(
'desc' => '
    <h3>[ mResizer.theme2 ]</h3>
', 'html' => '
    <div class="mCtrl typeHeader">
        <div class="gLeft">
            <span class="txtLess">선택한 항목을</span>
            <a class="btnNormal" href="#none"><span><em class="icoDel"></em> 삭제</span></a>
        </div>
        <div class="gRight">
            <a class="btnCtrl" href="#none"><span>버튼</span></a>
        </div>
    </div>
    <div class="mBoardArea">
        <div class="mBoard typeHead">
            <table border="1" summary="">
                <caption>상품 목록</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col"><input type="checkbox" class="allChk" /></th>
                        <th scope="col">No</th>
                        <th scope="col">DATE</th>
                        <th scope="col">TIME</th>
                        <th scope="col">제목</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mBoard typeBody gClearHeight">
            <table border="1" summary="" class="eChkColor">
                <caption>상품 목록</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                </colgroup>
                <tbody class="center">
                    <tr>
                        <td><input type="checkbox" class="rowChk" /></td>
                        <td>1</td>
                        <td>2013-03-25</td>
                        <td>2013-03-25 14:08:44</td>
                        <td class="left">예시 문장입니다.</td>
                    </tr>
                </tbody>
            </table>
            <p class="empty">내역이 없습니다.</p>
        </div>
    </div>
    <div class="mCtrl typeFooter">
        <div class="gLeft">
            <span class="txtLess">선택한 항목을</span>
            <a class="btnNormal" href="#none"><span><em class="icoDel"></em> 삭제</span></a>
        </div>
        <div class="gRight">
            <a class="btnCtrl" href="#none"><span>버튼</span></a>
        </div>
    </div>
    <div class="mResizer theme2"><span>선택 높이 영역 조절</span></div>

    <strong class="gTriple gDoubleBreak">[참고] OLD 버전 기존가이드</strong>
    <div class="ctrlHeight"><span>선택 높이 영역 조절</span></div>
'),
array(
'desc' => '
    <h3>[ mResizer.theme3 ]</h3>
', 'html' => '
    <div class="mCtrl typeHeader">
        <div class="gLeft">
            <span class="txtLess">선택한 항목을</span>
            <a class="btnNormal" href="#none"><span><em class="icoDel"></em> 삭제</span></a>
        </div>
        <div class="gRight">
            <a class="btnCtrl" href="#none"><span>버튼</span></a>
        </div>
    </div>
    <div class="mBoardArea">
        <div class="mBoard typeHead">
            <table border="1" summary="">
                <caption>상품 목록</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="col"><input type="checkbox" class="allChk" /></th>
                        <th scope="col">No</th>
                        <th scope="col">DATE</th>
                        <th scope="col">TIME</th>
                        <th scope="col">제목</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mBoard typeBody gClearHeight">
            <table border="1" summary="" class="eChkColor">
                <caption>상품 목록</caption>
                <colgroup>
                    <col class="chk" />
                    <col style="width:50px;" />
                    <col class="date" />
                    <col class="time" />
                    <col style="width:auto;" />
                </colgroup>
                <tbody class="center">
                    <tr>
                        <td><input type="checkbox" class="rowChk" /></td>
                        <td>1</td>
                        <td>2013-03-25</td>
                        <td>2013-03-25 14:08:44</td>
                        <td class="left">예시 문장입니다.</td>
                    </tr>
                </tbody>
            </table>
            <p class="empty">내역이 없습니다.</p>
        </div>
    </div>
    <div class="mCtrl typeFooter">
        <div class="gLeft">
            <span class="txtLess">선택한 항목을</span>
            <a class="btnNormal" href="#none"><span><em class="icoDel"></em> 삭제</span></a>
        </div>
        <div class="gRight">
            <a class="btnCtrl" href="#none"><span>버튼</span></a>
        </div>
    </div>
    <div class="mResizer theme3">
        <strong class="blind">테이블 높이 조절</strong>
        <button type="button" class="btnExpand" title="더보기">더보기</button>
        <button type="button" class="btnReduce" title="줄이기">줄이기</button>
    </div>
')
);
?>