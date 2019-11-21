<?php

// 모듈 전체 제목
$header_name = 'pickerArea';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>
            <a href="/suio/include/layout.php?MODULE=ctrl" class="txtEm">[mCtrl]</a>,
            <a href="/suio/include/layout.php?MODULE=board" class="txtEm">[mBoard]</a>,
            <a href="/suio/include/layout.php?MODULE=insert" class="txtEm">[mInsert]</a>,
            <a href="/suio/include/layout.php?MODULE=state" class="txtEm">[mState]</a>,
            <a href="/suio/include/layout.php?MODULE=paginate" class="txtEm">[mPaginate]</a>
            등을 조합한 모듈로 왼쪽에서 선택한 값을 오른쪽에 이동시키는 UI다.
        </li>
        <li>mPicker만 단독으로 사용하지 않는다.</li>
        <li>
            <strong>높이 Grid</strong> mPicker의 상단모듈 mCondition안 mBoard내 tr의 갯수에 따라 pickerArea에 grid를 적용한다.
            <ol>
                <li>tr 1개 : pickerArea + grid1</li>
                <li>tr 2개 : pickerArea + grid2</li>
                <li>tr 3개 : pickerArea + grid3</li>
             </ol>
        </li>
        <li>
            <strong>Tbody Height Size Grid</strong> mPicker에 포함된 모듈 종류에 따라 grid를 적용한다.
            <ol>
                <li>pickerArea : mInsert, mPaginate 모두포함</li>
                <li>pickerArea + gInsert :  mInsert만 포함</li>
                <li>pickerArea + gPage :  mPaginate만 포함</li>
                <li>pickerArea + gEmpty :  mInsert, mPaginate 미포함</li>
                <li>pickerArea + gFull :  mBoard만 포함</li>
             </ol>
        </li>
    </ol>
    <ol class="zh_CN">
        <li>是组合<a href="/suio/include/layout.php?MODULE=ctrl" class="txtEm">[mCtrl]</a>, <a href="/suio/include/layout.php?MODULE=board" class="txtEm">[mBoard]</a>, <a href="/suio/include/layout.php?MODULE=insert" class="txtEm">[mInsert]</a>, <a href="/suio/include/layout.php?MODULE=state" class="txtEm">[mState]</a>, <a href="/suio/include/layout.php?MODULE=paginate" class="txtEm">[mPaginate]</a> 等class的模块，将在左端选择的值移到右端时使用的UI。</li>
        <li>不可单独使用mPicker。</li>
        <li>
            根据<strong>高度Grid</strong> mPicker的上端模块mCondition中mBoard内tr的数量，在pickerArea中适用grid
            <ol>
                <li>1个 tr : pickerArea + grid1</li>
                <li>2个 tr : pickerArea + grid2</li>
                <li>3个 tr : pickerArea + grid3</li>
             </ol>
        </li>
        <li>
            根据<strong>Tbody Height Size Grid</strong> mPicker的模块种类适用grid。
            <ol>
                <li>pickerArea : 全部包含mInsert, mPaginate</li>
                <li>pickerArea + gInsert : 仅包含mInsert </li>
                <li>pickerArea + gPage : 仅包含mPaginate</li>
                <li>pickerArea + gEmpty : 未包含mInsert, mPaginate</li>
                <li>pickerArea + gFull : 仅包含mBoard</li>
             </ol>
        </li>
    </ol>
    <ol class="en_US">
        <li>This UI moves the selected value from the left side, combined with the
               <a href="/suio/include/layout.php?MODULE=ctrl" class="txtEm">[mCtrl]</a>,
               <a href="/suio/include/layout.php?MODULE=board" class="txtEm">[mBoard]</a>,
               <a href="/suio/include/layout.php?MODULE=insert" class="txtEm">[mInsert]</a>,
               <a href="/suio/include/layout.php?MODULE=state" class="txtEm">[mState]</a>, and
               <a href="/suio/include/layout.php?MODULE=paginate" class="txtEm">[mPaginate]</a> to the right side.</li>
        <li>The mPicker is not used individually.</li>
        <li>(번역필요)
             <ol>
                <li>tr 1 : pickerArea + grid1</li>
                <li>tr 2 : pickerArea + grid2</li>
                <li>tr 3 : pickerArea + grid3</li>
             </ol>
        </li>
        <li>Apply the grid followed by the kind of module that is included in the Tbody Height Size Grid mPicker.
             <ol>
                <li>pickerArea : mInsert, mPaginate included</li>
                <li>pickerArea + gInsert : include only the mInsert</li>
                <li>pickerArea + gPage : include only the mPaginate</li>
                <li>pickerArea + gEmpty : mInsert, mPaginate not included</li>
                <li>pickerArea + gFull : include only the mBoard</li>
             </ol>
        </li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .mBoard { margin:0 !important; }
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
    <h3>[ pickerArea + grid1 + gInsert ]</h3>
', 'html' => '
    <div class="pickerArea grid1 gInsert">
        <div class="gFlow">
            <div class="mPicker">
                <h2>상품검색</h2>
                <div class="mCondition">
                    <div class="mBoard gSmall">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">상품카테고리</th>
                                    <td>내용</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mButton gCenter">
                        <a href="#none" class="btnSearch"><span>검색</span></a>
                    </div>
                </div>
                <div class="mState">
                    <div class="gLeft">
                        <p class="total">검색결과 <strong>4</strong>개</p>
                    </div>
                    <div class="gRight">
                         <select class="fSelect">
                            <option>- 정렬 선택 -</option>
                            <option>상품명</option>
                         </select>
                    </div>
                </div>
                <div class="mBoardArea">
                    <div class="mBoard typeHead">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:auto;" />
                                <col style="width:97px;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                                    <th scope="col">상품명</th>
                                    <th scope="col">진열상태</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mBoard typeBody">
                        <table border="1" summary="" class="eChkColor">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:auto;" />
                                <col style="width:80px;" />
                            </colgroup>
                            <tbody class="center">
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="empty">검색된 상품이 없습니다.</p>
                    </div>
                </div>
                <div class="mPaginate">
                    <a href="#none" class="prev">이전 10페이지</a>
                    <ol>
                        <li><a href="#none">1</a></li>
                        <li><a href="#none">2</a></li>
                        <li><strong title="현재페이지">3</strong></li>
                        <li><a href="#none">4</a></li>
                        <li><a href="#none">5</a></li>
                        <li><a href="#none">6</a></li>
                        <li><a href="#none">7</a></li>
                        <li><a href="#none">8</a></li>
                        <li><a href="#none">9</a></li>
                        <li><a href="#none">10</a></li>
                    </ol>
                    <a href="#none" class="next">다음 10페이지</a>
                </div>
            </div>
        </div>

        <div class="mController">
            <div class="button">
                <p>
                    <button type="button" class="btnAdd">추가</button>
                    <button type="button" class="btnAdd typeAll">전체추가</button>
                </p>
            </div>
        </div>

        <div class="gReverse">
            <div class="mPicker">
                <h2>상품진열</h2>
                <div class="mCondition">
                    <div class="mBoard gSmall">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">상품카테고리</th>
                                    <td>
                                        <label class="gLabel"><input type="radio" class="fChk" checked="checked" /> 메인진열</label>
                                        <label class="gLabel"><input type="radio" class="fChk" /> 상품카테고리 진열</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mState">
                    <div class="gLeft">
                        <p class="total">검색결과 <strong>4</strong>개</p>
                    </div>
                </div>
                <div class="mBoardArea">
                    <div class="mBoard typeHead">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:50px;" />
                                <col style="width:auto;" />
                                <col style="width:97px;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                                    <th scope="col">순서</th>
                                    <th scope="col">상품명</th>
                                    <th scope="col">진열상태</th>
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
                                <col style="width:auto;" />
                                <col style="width:80px;" />
                            </colgroup>
                            <tbody class="center">
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="empty">진열된 상품이 없습니다.</p>
                    </div>
                </div>
                <div class="mCtrl typeFooter">
                    <div class="gLeft">
                        <button type="button" class="btnMove icoLast"><span>선택한 항목 최하단으로 이동</span></button>
                        <button type="button" class="btnMove icoNext"><span>선택한 항목 한줄 아래로 이동</span></button>
                        <button type="button" class="btnMove icoPrev"><span>선택한 항목 한줄 위로 이동</span></button>
                        <button type="button" class="btnMove icoFirst"><span>선택한 항목 최상단으로 이동</span></button>
                    </div>
                    <div class="gRight">
                         <a href="#none" class="btnNormal"><span>진열상태 변경</span></a>
                         <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                    </div>
                </div>
                <div class="mInsert">
                    선택한 상품을 <input type="text" class="fText right" /> 번 위치로 이동
                    <a href="#none" class="btnNormal"><span>이동</span></a>
                </div>
            </div>
        </div>
    </div>
')
, array(
'desc' => '
    <h3>[ pickerArea + grid2 + gPage ]</h3>
', 'html' => '
    <div class="pickerArea grid2 gPage">
        <div class="gFlow">
            <div class="mPicker">
                <h2>상품검색</h2>
                <div class="mCondition">
                    <div class="mBoard gSmall">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">상품카테고리</th>
                                    <td>내용</td>
                                </tr>
                                <tr>
                                    <th scope="row">상품검색</th>
                                    <td>
                                        <select class="fSelect">
                                            <option>상품명</option>
                                        </select>
                                        <input type="text" class="fText" style="width:150px;" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mButton gCenter">
                        <a href="#none" class="btnSearch"><span>검색</span></a>
                    </div>
                </div>
                <div class="mState">
                    <div class="gLeft">
                        <p class="total">검색결과 <strong>4</strong>개</p>
                    </div>
                    <div class="gRight">
                         <select class="fSelect">
                            <option>- 정렬 선택 -</option>
                            <option>상품명</option>
                         </select>
                    </div>
                </div>
                <div class="mBoardArea">
                    <div class="mBoard typeHead">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:auto;" />
                                <col style="width:97px;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                                    <th scope="col">상품명</th>
                                    <th scope="col">진열상태</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mBoard typeBody">
                        <table border="1" summary="" class="eChkColor">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:auto;" />
                                <col style="width:80px;" />
                            </colgroup>
                            <tbody class="center">
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="empty">검색된 상품이 없습니다.</p>
                    </div>
                </div>
                <div class="mPaginate">
                    <a href="#none" class="prev">이전 10페이지</a>
                    <ol>
                        <li><a href="#none">1</a></li>
                        <li><a href="#none">2</a></li>
                        <li><strong title="현재페이지">3</strong></li>
                        <li><a href="#none">4</a></li>
                        <li><a href="#none">5</a></li>
                        <li><a href="#none">6</a></li>
                        <li><a href="#none">7</a></li>
                        <li><a href="#none">8</a></li>
                        <li><a href="#none">9</a></li>
                        <li><a href="#none">10</a></li>
                    </ol>
                    <a href="#none" class="next">다음 10페이지</a>
                </div>
            </div>
        </div>

        <div class="mController">
            <div class="button">
                <p>
                    <button type="button" class="btnAdd">추가</button>
                    <button type="button" class="btnAdd typeAll">전체추가</button>
                </p>
            </div>
        </div>

        <div class="gReverse">
            <div class="mPicker">
                <h2>상품진열</h2>
                <div class="mCondition">
                    <div class="mBoard gSmall">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">상품카테고리</th>
                                    <td>
                                        <label class="gLabel"><input type="radio" class="fChk" checked="checked" /> 메인진열</label>
                                        <label class="gLabel"><input type="radio" class="fChk" /> 상품카테고리 진열</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">진열될 영역선택</th>
                                    <td>
                                        <select class="fSelect">
                                            <option>추천상품</option>
                                            <option>추천카테고리1</option>
                                        </select>
                                        <a href="#none" class="btnNormal"><span>메인분류 추가</span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mState">
                    <div class="gLeft">
                        <p class="total">검색결과 <strong>4</strong>개</p>
                    </div>
                </div>
                <div class="mBoardArea">
                    <div class="mBoard typeHead">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:50px;" />
                                <col style="width:auto;" />
                                <col style="width:97px;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                                    <th scope="col">순서</th>
                                    <th scope="col">상품명</th>
                                    <th scope="col">진열상태</th>
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
                                <col style="width:auto;" />
                                <col style="width:80px;" />
                            </colgroup>
                            <tbody class="center">
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="empty">진열된 상품이 없습니다.</p>
                    </div>
                </div>
                <div class="mCtrl typeFooter">
                    <div class="gLeft">
                        <button type="button" class="btnMove icoLast"><span>선택한 항목 최하단으로 이동</span></button>
                        <button type="button" class="btnMove icoNext"><span>선택한 항목 한줄 아래로 이동</span></button>
                        <button type="button" class="btnMove icoPrev"><span>선택한 항목 한줄 위로 이동</span></button>
                        <button type="button" class="btnMove icoFirst"><span>선택한 항목 최상단으로 이동</span></button>
                    </div>
                    <div class="gRight">
                         <a href="#none" class="btnNormal"><span>진열상태 변경</span></a>
                         <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                    </div>
                </div>
                <div class="mPaginate">
                    <a href="#none" class="prev">이전 10페이지</a>
                    <ol>
                        <li><a href="#none">1</a></li>
                        <li><a href="#none">2</a></li>
                        <li><strong title="현재페이지">3</strong></li>
                        <li><a href="#none">4</a></li>
                        <li><a href="#none">5</a></li>
                        <li><a href="#none">6</a></li>
                        <li><a href="#none">7</a></li>
                        <li><a href="#none">8</a></li>
                        <li><a href="#none">9</a></li>
                        <li><a href="#none">10</a></li>
                    </ol>
                    <a href="#none" class="next">다음 10페이지</a>
                </div>
            </div>
        </div>
    </div>
')
, array(
'desc' => '
    <h3>[ pickerArea + grid3] mInsert, mPaginate 모두포함 <span class="zh_CN">全部包含mInsert, mPaginate</span><span class="en_US">mInsert, mPaginate included</span></h3>
', 'html' => '
    <div class="pickerArea grid3">
        <div class="gFlow">
            <div class="mPicker">
                <h2>상품검색</h2>
                <div class="mCondition">
                    <div class="mBoard gSmall">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">상품카테고리</th>
                                    <td>내용</td>
                                </tr>
                                <tr>
                                    <th scope="row">상품검색</th>
                                    <td>
                                        <select class="fSelect">
                                            <option>상품명</option>
                                        </select>
                                        <input type="text" class="fText" style="width:150px;" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">상품옵션</th>
                                    <td>내용</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mButton gCenter">
                        <a href="#none" class="btnSearch"><span>검색</span></a>
                    </div>
                </div>
                <div class="mState">
                    <div class="gLeft">
                        <p class="total">검색결과 <strong>4</strong>개</p>
                    </div>
                    <div class="gRight">
                         <select class="fSelect">
                            <option>- 정렬 선택 -</option>
                            <option>상품명</option>
                         </select>
                    </div>
                </div>
                <div class="mBoardArea">
                    <div class="mBoard typeHead">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:auto;" />
                                <col style="width:97px;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                                    <th scope="col">상품명</th>
                                    <th scope="col">진열상태</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mBoard typeBody">
                        <table border="1" summary="" class="eChkColor">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:auto;" />
                                <col style="width:80px;" />
                            </colgroup>
                            <tbody class="center">
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="empty">검색된 상품이 없습니다.</p>
                    </div>
                </div>
                <div class="mPaginate">
                    <a href="#none" class="prev">이전 10페이지</a>
                    <ol>
                        <li><a href="#none">1</a></li>
                        <li><a href="#none">2</a></li>
                        <li><strong title="현재페이지">3</strong></li>
                        <li><a href="#none">4</a></li>
                        <li><a href="#none">5</a></li>
                        <li><a href="#none">6</a></li>
                        <li><a href="#none">7</a></li>
                        <li><a href="#none">8</a></li>
                        <li><a href="#none">9</a></li>
                        <li><a href="#none">10</a></li>
                    </ol>
                    <a href="#none" class="next">다음 10페이지</a>
                </div>
            </div>
        </div>

        <div class="mController">
            <div class="button">
                <p>
                    <button type="button" class="btnAdd">추가</button>
                    <button type="button" class="btnAdd typeAll">전체추가</button>
                </p>
            </div>
        </div>

        <div class="gReverse">
            <div class="mPicker">
                <h2>상품진열</h2>
                <div class="mCondition">
                    <div class="mBoard gSmall">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">상품카테고리</th>
                                    <td>
                                        <label class="gLabel"><input type="radio" class="fChk" checked="checked" /> 메인진열</label>
                                        <label class="gLabel"><input type="radio" class="fChk" /> 상품카테고리 진열</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">상품검색</th>
                                    <td>
                                        <select class="fSelect">
                                            <option>상품명</option>
                                        </select>
                                        <input type="text" class="fText" style="width:150px;" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">상품옵션</th>
                                    <td>내용</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mState">
                    <div class="gLeft">
                        <p class="total">검색결과 <strong>4</strong>개</p>
                    </div>
                </div>
                <div class="mBoardArea">
                    <div class="mBoard typeHead">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:50px;" />
                                <col style="width:auto;" />
                                <col style="width:97px;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                                    <th scope="col">순서</th>
                                    <th scope="col">상품명</th>
                                    <th scope="col">진열상태</th>
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
                                <col style="width:auto;" />
                                <col style="width:80px;" />
                            </colgroup>
                            <tbody class="center">
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="empty">진열된 상품이 없습니다.</p>
                    </div>
                </div>
                <div class="mCtrl typeFooter">
                    <div class="gLeft">
                        <button type="button" class="btnMove icoLast"><span>선택한 항목 최하단으로 이동</span></button>
                        <button type="button" class="btnMove icoNext"><span>선택한 항목 한줄 아래로 이동</span></button>
                        <button type="button" class="btnMove icoPrev"><span>선택한 항목 한줄 위로 이동</span></button>
                        <button type="button" class="btnMove icoFirst"><span>선택한 항목 최상단으로 이동</span></button>
                    </div>
                    <div class="gRight">
                         <a href="#none" class="btnNormal"><span>진열상태 변경</span></a>
                         <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                    </div>
                </div>
                <div class="mInsert">
                    선택한 상품을 <input type="text" class="fText right" /> 번 위치로 이동
                    <a href="#none" class="btnNormal"><span>이동</span></a>
                </div>
                <div class="mPaginate">
                    <a href="#none" class="prev">이전 10페이지</a>
                    <ol>
                        <li><a href="#none">1</a></li>
                        <li><a href="#none">2</a></li>
                        <li><strong title="현재페이지">3</strong></li>
                        <li><a href="#none">4</a></li>
                        <li><a href="#none">5</a></li>
                        <li><a href="#none">6</a></li>
                        <li><a href="#none">7</a></li>
                        <li><a href="#none">8</a></li>
                        <li><a href="#none">9</a></li>
                        <li><a href="#none">10</a></li>
                    </ol>
                    <a href="#none" class="next">다음 10페이지</a>
                </div>
            </div>
        </div>
    </div>
')
, array(
'desc' => '
    <h3>[ pickerArea + grid3 + gEmpty ] mInsert, mPaginate 미포함 <span class="zh_CN">未包含mInsert, mPaginate</span><span class="en_US">mInsert, mPaginate not included</span></h3>
', 'html' => '
    <div class="pickerArea grid3 gEmpty">
        <div class="gFlow">
            <div class="mPicker">
                <h2>상품검색</h2>
                <div class="mCondition">
                    <div class="mBoard gSmall">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">상품카테고리</th>
                                    <td>내용</td>
                                </tr>
                                <tr>
                                    <th scope="row">상품검색</th>
                                    <td>
                                        <select class="fSelect">
                                            <option>상품명</option>
                                        </select>
                                        <input type="text" class="fText" style="width:150px;" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">상품옵션</th>
                                    <td>내용</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mButton gCenter">
                        <a href="#none" class="btnSearch"><span>검색</span></a>
                    </div>
                </div>
                <div class="mState">
                    <div class="gLeft">
                        <p class="total">검색결과 <strong>4</strong>개</p>
                    </div>
                    <div class="gRight">
                         <select class="fSelect">
                            <option>- 정렬 선택 -</option>
                            <option>상품명</option>
                         </select>
                    </div>
                </div>
                <div class="mBoardArea">
                    <div class="mBoard typeHead">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:auto;" />
                                <col style="width:97px;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                                    <th scope="col">상품명</th>
                                    <th scope="col">진열상태</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mBoard typeBody">
                        <table border="1" summary="" class="eChkColor">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:auto;" />
                                <col style="width:80px;" />
                            </colgroup>
                            <tbody class="center">
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="empty">검색된 상품이 없습니다.</p>
                    </div>
                </div>
                <div class="mPaginate">
                    <a href="#none" class="prev">이전 10페이지</a>
                    <ol>
                        <li><a href="#none">1</a></li>
                        <li><a href="#none">2</a></li>
                        <li><strong title="현재페이지">3</strong></li>
                        <li><a href="#none">4</a></li>
                        <li><a href="#none">5</a></li>
                        <li><a href="#none">6</a></li>
                        <li><a href="#none">7</a></li>
                        <li><a href="#none">8</a></li>
                        <li><a href="#none">9</a></li>
                        <li><a href="#none">10</a></li>
                    </ol>
                    <a href="#none" class="next">다음 10페이지</a>
                </div>
            </div>
        </div>

        <div class="mController">
            <div class="button">
                <p>
                    <button type="button" class="btnAdd">추가</button>
                    <button type="button" class="btnAdd typeAll">전체추가</button>
                </p>
            </div>
        </div>

        <div class="gReverse">
            <div class="mPicker">
                <h2>상품진열</h2>
                <div class="mCondition">
                    <div class="mBoard gSmall">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">상품카테고리</th>
                                    <td>
                                        <label class="gLabel"><input type="radio" class="fChk" checked="checked" /> 메인진열</label>
                                        <label class="gLabel"><input type="radio" class="fChk" /> 상품카테고리 진열</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">상품검색</th>
                                    <td>
                                        <select class="fSelect">
                                            <option>상품명</option>
                                        </select>
                                        <input type="text" class="fText" style="width:150px;" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">상품옵션</th>
                                    <td>내용</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mState">
                    <div class="gLeft">
                        <p class="total">검색결과 <strong>4</strong>개</p>
                    </div>
                </div>
                <div class="mBoardArea">
                    <div class="mBoard typeHead">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:50px;" />
                                <col style="width:auto;" />
                                <col style="width:97px;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                                    <th scope="col">순서</th>
                                    <th scope="col">상품명</th>
                                    <th scope="col">진열상태</th>
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
                                <col style="width:auto;" />
                                <col style="width:80px;" />
                            </colgroup>
                            <tbody class="center">
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="empty">진열된 상품이 없습니다.</p>
                    </div>
                </div>
                <div class="mCtrl typeFooter">
                    <div class="gLeft">
                        <button type="button" class="btnMove icoLast"><span>선택한 항목 최하단으로 이동</span></button>
                        <button type="button" class="btnMove icoNext"><span>선택한 항목 한줄 아래로 이동</span></button>
                        <button type="button" class="btnMove icoPrev"><span>선택한 항목 한줄 위로 이동</span></button>
                        <button type="button" class="btnMove icoFirst"><span>선택한 항목 최상단으로 이동</span></button>
                    </div>
                    <div class="gRight">
                         <a href="#none" class="btnNormal"><span>진열상태 변경</span></a>
                         <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
')
, array(
'desc' => '
    <h3>[ pickerArea + grid1 + gFull ]  mBoard만 포함 <span class="zh_CN">仅包含mBoard</span><span class="en_US">include only the mBoard</span></h3>
', 'html' => '
    <div class="pickerArea grid1 gFull">
        <div class="gFlow">
            <div class="mPicker">
                <h2>상품검색</h2>
                <div class="mCondition">
                    <div class="mBoard gSmall">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <tbody>
                                <tr>
                                    <th scope="row">상품검색</th>
                                    <td>
                                        <select class="fSelect">
                                            <option>상품명</option>
                                        </select>
                                        <input type="text" class="fText" style="width:150px;" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mButton gCenter">
                        <a href="#none" class="btnSearch"><span>검색</span></a>
                    </div>
                </div>
                <div class="mState">
                    <div class="gLeft">
                        <p class="total">검색결과 <strong>4</strong>개</p>
                    </div>
                    <div class="gRight">
                         <select class="fSelect">
                            <option>- 정렬 선택 -</option>
                            <option>상품명</option>
                         </select>
                    </div>
                </div>
                <div class="mBoardArea">
                    <div class="mBoard typeHead">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:auto;" />
                                <col style="width:97px;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                                    <th scope="col">상품명</th>
                                    <th scope="col">진열상태</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mBoard typeBody">
                        <table border="1" summary="" class="eChkColor">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:auto;" />
                                <col style="width:80px;" />
                            </colgroup>
                            <tbody class="center">
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="empty">검색된 상품이 없습니다.</p>
                    </div>
                </div>
                <div class="mPaginate">
                    <a href="#none" class="prev">이전 10페이지</a>
                    <ol>
                        <li><a href="#none">1</a></li>
                        <li><a href="#none">2</a></li>
                        <li><strong title="현재페이지">3</strong></li>
                        <li><a href="#none">4</a></li>
                        <li><a href="#none">5</a></li>
                        <li><a href="#none">6</a></li>
                        <li><a href="#none">7</a></li>
                        <li><a href="#none">8</a></li>
                        <li><a href="#none">9</a></li>
                        <li><a href="#none">10</a></li>
                    </ol>
                    <a href="#none" class="next">다음 10페이지</a>
                </div>
            </div>
        </div>

        <div class="mController">
            <div class="button">
                <p>
                    <button type="button" class="btnAdd">추가</button>
                    <button type="button" class="btnAdd typeAll">전체추가</button>
                </p>
            </div>
        </div>

        <div class="gReverse">
            <div class="mPicker">
                <h2>상품진열</h2>
                <div class="mBoardArea">
                    <div class="mBoard typeHead">
                        <table border="1" summary="">
                            <caption>제목</caption>
                            <colgroup>
                                <col class="chk" />
                                <col style="width:50px;" />
                                <col style="width:auto;" />
                                <col style="width:97px;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                                    <th scope="col">순서</th>
                                    <th scope="col">상품명</th>
                                    <th scope="col">진열상태</th>
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
                                <col style="width:auto;" />
                                <col style="width:80px;" />
                            </colgroup>
                            <tbody class="center">
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="rowChk" /></td>
                                    <td><input type="text" class="fText" style="width:20px;" /></td>
                                    <td>
                                        <div class="gGoods gMedium gFunction">
                                            <span class="frame"><a href="#none" target="_blank" title="새창 열림"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></a></span>
                                            <p><a href="#none" target="_blank" title="새창 열림" class="txtLink">나이키 포스 올백</a></p>
                                            <ul class="etc">
                                                <li>색상: 빨강, 노랑, 검정</li>
                                                <li>색상: 빨강, 노랑, 검정</li>
                                            </ul>
                                            <a href="#none" class="btnIcon icoView icoPreview"><span>미리보기</span></a>
                                        </div>
                                    </td>
                                    <td>진열</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="empty">진열된 상품이 없습니다.</p>
                    </div>
                </div>
                <div class="mCtrl typeFooter">
                    <div class="gLeft">
                        <button type="button" class="btnMove icoLast"><span>선택한 항목 최하단으로 이동</span></button>
                        <button type="button" class="btnMove icoNext"><span>선택한 항목 한줄 아래로 이동</span></button>
                        <button type="button" class="btnMove icoPrev"><span>선택한 항목 한줄 위로 이동</span></button>
                        <button type="button" class="btnMove icoFirst"><span>선택한 항목 최상단으로 이동</span></button>
                    </div>
                    <div class="gRight">
                         <a href="#none" class="btnNormal"><span>진열상태 변경</span></a>
                         <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
')

);
?>