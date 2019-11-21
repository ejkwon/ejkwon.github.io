<?php

// 모듈 전체 제목
$header_name = 'mSelect / mMultiple / multipleArea';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = '';

// 프리뷰를 위한 태그 리셋  (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .mBoard { position:relative; *zoom:1; }
        .multipleArea { outline:0; }
        .multipleArea + .multipleArea { margin-top:30px; }
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
                    <p class="info"><span class="date">2016.12.28</span><span class="writer">송유진</span></p>
                    <p class="title"><strong> mSelect gDrop</strong> 길어질 경우 줄바꿈 처리 <a href="/wms/basic/operator/list_position.html" class="btnLink" target="_blank">직급 설정</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.12.16</span><span class="writer">권언정</span></p>
                    <p class="title"><strong> gCtrl full</strong> 버튼없이 검색만 있는 경우 추가 <a href="/smartAdmin/shop/security/option_phone.html" class="btnLink" target="_blank">보안인증수단 관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.10.24</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>mSelect + gCheck</strong> 필수 체크박스 추가 <a href="/smartAdmin/promotion/memberinfo/make.html" class="btnLink" target="_blank">이벤트 만들기</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.09.07</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>mSelect &gt; ctrlHeight</strong> 내용 <a href="#none" class="btnLink" target="_blank">예시</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.04.05</span><span class="writer">김도희</span></p>
                    <ul class="title">
                        <li><strong>multipleArea &gt; gCtrl </strong> <a href="/smartAdmin/product/registration/product/register.html" class="btnLink" target="_blank">마켓카테고리 영역</a></li>
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
    <h3>[ mSelect, mMultiple ]</h3>
    <ol>
        <li>기본폭은 100%이며, 필요에 따라 gSmall, gMedium, gLarge로 grid 적용이 가능하다.</li>
        <li>제목, 검색폼, 버튼 등 다양한 형태를 조합할 수 있다. 자세한 HTML 예시는 [multipleArea]를 참고한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>基本宽度为100%，可根据具体需求，grid可适用为gSmall、gMedium、gLarge。</li>
        <li>可组合标题、搜索框、按钮等多种形态。HTML的具体示例请参考[multipleArea]。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:190px;" />
                <col style="width:170px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">class</th>
                    <th scope="col">미리보기</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" rowspan="4">select multiple형 선택박스</th>
                    <th scope="row">mMultiple + gSmall</th>
                    <td>
                        <div class="mMultiple gSmall">
                            <div class="gCtrl">
                                <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                <p class="edit">
                                    <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                    <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                </p>
                            </div>
                            <select multiple="multiple" class="fMultiple">
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mMultiple + gMedium</th>
                    <td>
                        <div class="mMultiple gMedium">
                            <div class="gCtrl">
                                <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                <p class="edit">
                                    <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                    <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                </p>
                            </div>
                            <select multiple="multiple" class="fMultiple">
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mMultiple + gLarge</th>
                    <td>
                        <div class="mMultiple gLarge">
                            <div class="gCtrl">
                                <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                <p class="edit">
                                    <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                    <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                </p>
                            </div>
                            <select multiple="multiple" class="fMultiple">
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mMultiple + clearBorder</th>
                    <td class="gCellEmpty">
                        <div class="mMultiple clearBorder">
                            <select multiple="multiple" class="fMultiple">
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="3">삭제버튼을 포함한 선택박스</th>
                    <th scope="row">mSelect + gSmall</th>
                    <td>
                        <div class="mSelect gSmall gFunction eSelect">
                            <div class="gCtrl">
                                <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                <p class="edit">
                                    <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                    <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                </p>
                            </div>
                            <ul>
                                <li class="selected">
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect + gMedium</th>
                    <td>
                        <div class="mSelect gMedium gFunction eSelect">
                            <div class="gCtrl">
                                <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                <p class="edit">
                                    <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                    <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                </p>
                            </div>
                            <ul>
                                <li class="selected">
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect + gLarge</th>
                    <td>
                        <div class="mSelect gLarge gFunction eSelect">
                            <div class="gCtrl">
                                <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                <p class="edit">
                                    <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                    <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                </p>
                            </div>
                            <ul>
                                <li class="selected">
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect 길어질 경우 줄바꿈</th>
                    <th scope="row">mSelect + gDrop</th>
                    <td>
                        <!-- suio.css로 이전 필요 -->
                        <style>
                            .mSelect.gDrop li { padding:5px 25px 5px 5px; }
                            .mSelect.gDrop li strong { word-wrap:break-word; }
                        </style>
                        <div class="mSelect eSelect gDrop">
                            <ul>
                                <li>
                                    <strong>배송팀</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <input type="text" class="fText" style="width:90%;" />
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>444444444444222222222222222222222222222222222333333333333333333333444444444444222222222222222222222222222222222333333333333333333333</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>CS팀</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect의 활용</th>
                    <th scope="row">mSelect > gGood</th>
                    <td>
                        <div class="mSelect gMedium gFunction eSelect">
                            <div class="gCtrl">
                                <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                <p class="edit">
                                    <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                    <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                </p>
                            </div>
                            <ul style="height:150px;">
                                <li class="selected">
                                    <div class="gGoods gMedium">
                                        <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                                        <p><span class="icoSetProduct">세트</span> 겨울이야기(세트)</p>
                                        <ul class="etc">
                                            <li>Plus : 선택안함</li>
                                            <li>Size : S</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="gGoods gMedium">
                                        <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                                        <p><span class="icoSetProduct">세트</span> 겨울이야기(세트)</p>
                                        <ul class="etc">
                                            <li>Plus : 선택안함</li>
                                            <li>Size : S</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="gGoods gMedium">
                                        <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                                        <p><span class="icoSetProduct">세트</span> 겨울이야기(세트)</p>
                                        <ul class="etc">
                                            <li>Plus : 선택안함</li>
                                            <li>Size : S</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="gGoods gMedium">
                                        <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                                        <p><span class="icoSetProduct">세트</span> 겨울이야기(세트)</p>
                                        <ul class="etc">
                                            <li>Plus : 선택안함</li>
                                            <li>Size : S</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="gGoods gMedium">
                                        <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                                        <p><span class="icoSetProduct">세트</span> 겨울이야기(세트)</p>
                                        <ul class="etc">
                                            <li>Plus : 선택안함</li>
                                            <li>Size : S</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="mList">
                            <li>multipleArea 와 활용이 가능하고, 높이값 조절이 필요한 경우 mSelect &gt; ul에 인라인으로 높이값 대응이 가능하다.</li>
                        </ul>
                        <ul class="mList zh_CN">
                            <li>可与multipleArea灵活运用，如需调整高度值，可在 mSelect &gt; ul以行内形式对应高度值。</li>
                        </ul>
                        <ul class="mList en_US">
                            <li>(번역필요)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">높이 확장(최소 100px)</th>
                    <th scope="row">mMultiple > mResizer.theme1</th>
                    <td>
                        <div class="mMultiple gSmall gFunction">
                            <div class="gCtrl">
                                <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                <p class="edit">
                                    <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                    <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                </p>
                            </div>
                            <select multiple="multiple" class="fMultiple">
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                                <option>선택 목록</option>
                            </select>
                            <div class="mResizer theme1"><span>선택 높이 영역 조절</span></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect > mResizer.theme1</th>
                    <td>
                        <div class="mSelect gSmall gFunction eSelect">
                            <div class="gCtrl">
                                <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                <p class="edit">
                                    <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                    <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                </p>
                            </div>
                            <ul>
                                <li class="selected">
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <strong>선택 목록</strong>
                                    <button class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                            </ul>
                            <div class="mResizer theme1"><span>선택 높이 영역 조절</span></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>[ multipleArea ]</h3>
    <ol>
        <li>기본폭은 659px(팝업 450px)이며, 필요에 따라 style로 폭조절이 가능하다.</li>
        <li>제목, 검색폼, 버튼 등 다양한 형태를 조합할 수 있다.</li>
        <li>선택영역의 한쪽에만 제목, 검색폼, 버튼 등이 있는 경우 multipleArea > gCtrl 형태를 사용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>基本宽度为659px（popup 450px），可根据具体需求，以style调整宽度。</li>
        <li>可组合标题、搜索框、按钮等多种形态。</li>
        <li>如标题、搜索form、按钮等只存在于选择区域的一边时，采用multipleArea &gt; gCtrl形式。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:190px;" />
                <col style="width:170px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">class</th>
                    <th scope="col">미리보기</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" rowspan="3">기본형</th>
                    <th scope="row">mMultiple</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gFlow">
                                <div class="mMultiple">
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mMultiple">
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <ul>
                                        <li class="selected"><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect gFunction eSelect">
                                    <ul>
                                        <li class="selected">
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect + gCheck</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <ul>
                                        <li class="selected"><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect gCheck eSelect">
                                    <ul>
                                        <li class="selected">
                                            <strong>선택 목록</strong>
                                            <label><input type="checkbox" /> 필수</label>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <label><input type="checkbox" /> 필수</label>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <label><input type="checkbox" /> 필수</label>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <label><input type="checkbox" /> 필수</label>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <label><input type="checkbox" /> 필수</label>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">제목이나 버튼이 있는 경우</th>
                    <th scope="row">mMultiple</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gFlow">
                                <div class="mMultiple">
                                    <div class="gCtrl">
                                        <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                        <p class="edit">
                                            <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                            <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                        </p>
                                    </div>
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mMultiple">
                                    <div class="gCtrl">
                                        <label class="gLabel"><input type="checkbox" class="fChk" /> 전체선택</label>
                                        <p class="edit">
                                            <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                            <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                        </p>
                                    </div>
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <div class="gCtrl">
                                        <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                        <p class="edit">
                                            <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                            <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                        </p>
                                    </div>
                                    <ul>
                                        <li class="selected"><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect gFunction eSelect">
                                    <div class="gCtrl">
                                        <label class="gLabel"><input type="checkbox" class="fChk" /> 전체선택</label>
                                        <p class="edit">
                                            <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                            <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                        </p>
                                    </div>
                                    <ul>
                                        <li class="selected">
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">검색이 있는 경우</th>
                    <th scope="row">mMultiple</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gFlow">
                                <div class="mMultiple">
                                    <div class="gCtrl">
                                        <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                        <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                        <p class="edit">
                                            <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                            <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                        </p>
                                    </div>
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mMultiple">
                                    <div class="gCtrl">
                                        <label class="gLabel"><input type="checkbox" class="fChk" /> 전체선택</label>
                                        <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                        <p class="edit">
                                            <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                            <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                        </p>
                                    </div>
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <div class="gCtrl">
                                        <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                        <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                        <p class="edit">
                                            <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                            <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                        </p>
                                    </div>
                                    <ul>
                                        <li class="selected"><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect gFunction eSelect">
                                    <div class="gCtrl">
                                        <label class="gLabel"><input type="checkbox" class="fChk" /> 전체선택</label>
                                        <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                        <p class="edit">
                                            <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                            <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                        </p>
                                    </div>
                                    <ul>
                                        <li class="selected">
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">버튼없이 검색만 있는 경우</th>
                    <th scope="row">mMultiple gCtrl.full</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gFlow">
                                <div class="mMultiple">
                                    <div class="gCtrl full">
                                        <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                        <p class="search"><input type="text" class="fText" style="width:203px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                    </div>
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mMultiple">
                                    <div class="gCtrl full">
                                        <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                        <p class="search"><input type="text" class="fText" style="width:203px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                    </div>
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect gCtrl.full</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <div class="gCtrl full">
                                        <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                        <p class="search"><input type="text" class="fText" style="width:203px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                    </div>
                                    <ul>
                                        <li class="selected"><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect gFunction eSelect">
                                    <div class="gCtrl full">
                                        <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                        <p class="search"><input type="text" class="fText" style="width:203px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                    </div>
                                    <ul>
                                        <li class="selected">
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">제목이나 버튼 등이 한쪽에만 있는 경우</th>
                    <th scope="row">multipleArea > gCtrl</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gCtrl">
                                <span class="icoDot"></span> <strong>표시항목 선택</strong>
                                <p class="search"><input type="text" class="fText" style="width:140px;" /> <a class="btnNormal" href="#none"><span>검색</span></a></p>
                                <p class="edit">
                                    <button type="button" class="btnMove icoPrev"><span>이전</span></button>
                                    <button type="button" class="btnMove icoNext"><span>다음</span></button>
                                </p>
                            </div>
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <ul>
                                        <li class="selected"><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect gFunction eSelect">
                                    <ul>
                                        <li class="selected">
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">multipleArea > gCtrl <br />select 사용 시</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gCtrl">
                                <select class="fSelect">
                                    <option>선택 목록</option>
                                    <option>선택 목록</option>
                                    <option>선택 목록</option>
                                    <option>선택 목록</option>
                                    <option>선택 목록</option>
                                    <option>선택 목록</option>
                                    <option>선택 목록</option>
                                </select>
                            </div>
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <ul>
                                        <li class="selected"><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect gFunction eSelect">
                                    <ul>
                                        <li class="selected">
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">다른사이즈 대응</th>
                    <th scope="row">mMultiple</th>
                    <td>
                        <div class="multipleArea" style="width:800px;">
                            <div class="gFlow">
                                <div class="mMultiple">
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mMultiple">
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect</th>
                    <td>
                        <div class="multipleArea" style="width:800px;">
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <ul>
                                        <li class="selected"><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect gFunction eSelect">
                                    <ul>
                                        <li class="selected">
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">높이 확장(최소 100px)</th>
                    <th scope="row">mMultiple</th>
                    <td>
                        <div class="multipleArea" style="width:800px;">
                            <div class="gFlow">
                                <div class="mMultiple">
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                    <div class="mResizer theme1"><span>선택 높이 영역 조절</span></div>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mMultiple">
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                    <div class="mResizer theme1"><span>선택 높이 영역 조절</span></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect</th>
                    <td>
                        <div class="multipleArea" style="width:800px;">
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <ul>
                                        <li class="selected"><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                    </ul>
                                    <div class="mResizer theme1"><span>선택 높이 영역 조절</span></div>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect gFunction eSelect">
                                    <ul>
                                        <li class="selected">
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                    <div class="mResizer theme1"><span>선택 높이 영역 조절</span></div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

'),array(
'desc' => '
    <h3>[ multipleArea + gCenter ]</h3>
    <ol>
        <li>mBoard에서 사용되지 않는 경우, mBox 사용을 권장한다. 가운데 정렬이 필요할 경우 gCenter를 사용한다.</li>
        <li>제목, 검색폼, 버튼 등 다양한 형태를 조합할 수 있다. 자세한 HTML 예시는 [multipleArea]를 참고한다.</li>
        <li>아래화면은 화면이해를 위해 mBoard 안에 적용 되어있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>若非使用于mBoard，推荐使用mBox。如需居中排列时，使用gCenter。</li>
        <li>可组合标题、搜索框、按钮等多种形态。HTML的具体示例请参考[multipleArea]。</li>
        <li>为便于理解，以下内容适用于mBoard之内。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mBoard gLarge">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">mMultiple</th>
                    <td>
                        <div class="multipleArea gCenter">
                            <div class="gFlow">
                                <div class="mMultiple">
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mMultiple">
                                    <select class="fMultiple" multiple="multiple">
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                        <option>선택 목록</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">mSelect</th>
                    <td>
                        <div class="multipleArea gCenter">
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <ul>
                                        <li class="selected"><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                        <li><strong>선택 목록</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect eSelect">
                                    <ul>
                                        <li class="selected">
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>선택 목록</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mBox typeBorder">
        <div class="multipleArea gCenter">
            <div class="gFlow">
                <div class="mMultiple">
                    <select class="fMultiple" multiple="multiple">
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                    </select>
                </div>
            </div>
            <div class="mController">
                <div class="button">
                    <p>
                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                    </p>
                </div>
            </div>
            <div class="gReverse">
                <div class="mMultiple">
                    <select class="fMultiple" multiple="multiple">
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                        <option>선택 목록</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
')
);
?>