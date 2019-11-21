<?php

// 모듈 전체 제목
$header_name = '게시판 보기';

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
    <h3>[mBoard + g$Size]</h3>
    <ul>
        <li>gSmall,gMedium,gLarge 3가지 사이즈를 기준으로 한다.</li>
        <li>셀병합으로 colspan 사용 될 경우 gSmall대신 col에 고정 width값을 사용하며 IE7은 hack을 사용한다.</li>
        <li>팝업의 경우 gSmall,gMedium,gLarge의 사이즈가 css에서 재설정 된다.</li>
    </ul>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
        <caption>제목</caption>
        <tbody>
            <tr>
                <th scope="row">제목 <strong class="icoRequired">필수</strong></th>
                <td>내용</td>
            </tr>
            <tr>
                <th scope="row">제목</th>
                <td>내용</td>
            </tr>
        </tbody>
        </table>
    </div>

    <br />

    <div class="mBoard">
        <table border="1" summary="">
        <caption>제목</caption>
        <colgroup>
            <col style="width:154px;*width:135px;" />
            <col style="width:auto;" />
            <col style="width:154px;" />
            <col style="width:auto;" />
        </colgroup>
        <!-- gSmall : 팝업용 colgroup 사이즈
        <colgroup>
            <col style="width:134px;*width:115px;" />
            <col style="width:auto;" />
            <col style="width:134px;" />
            <col style="width:auto;" />
        </colgroup>
        -->
        <tbody>
            <tr>
                <th scope="row">제목 <strong class="icoRequired">필수</strong></th>
                <td colspan="3">내용</td>
            </tr>
            <tr>
                <th scope="row">제목</th>
                <td>내용</td>
                <th scope="row">제목</th>
                <td>내용</td>
            </tr>
        </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>[mBoard &gt; table + gDivision] [mBoard + gDivision]</h3>
    <ul>
        <li>gDivision : 개발 시 테이블 구분이 불가피 한 경우 추가한다.</li>
        <li>div, table 태그에 사용가능하다.</li>
    </ul>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
        <caption>제목</caption>
        <colgroup>
            <col style="width:154px;*width:135px;" />
            <col style="width:auto;" />
            <col style="width:154px;" />
            <col style="width:auto;" />
        </colgroup>
        <tbody>
            <tr>
                <th scope="row">제목 <strong class="icoRequired">필수</strong></th>
                <td colspan="3">내용</td>
            </tr>
            <tr>
                <th scope="row">제목</th>
                <td colspan="3">내용</td>
            </tr>
        </tbody>
        </table>
        <table border="1" summary="" class="gDivision"><!-- gDivision : 개발 시 테이블 구분이 불가피 한 경우 -->
        <caption>제목</caption>
        <colgroup>
            <col style="width:154px;*width:135px;" />
            <col style="width:auto;" />
            <col style="width:154px;" />
            <col style="width:auto;" />
        </colgroup>
        <tbody>
            <tr>
                <th scope="row">제목 <strong class="icoRequired">필수</strong></th>
                <td colspan="3">내용</td>
            </tr>
            <tr>
                <th scope="row">제목</th>
                <td>내용</td>
                <th scope="row">제목</th>
                <td>내용</td>
            </tr>
        </tbody>
        </table>
    </div>
    <div class="mBoard gSmall gDivision"><!-- gDivision : 개발 시 테이블 구분이 불가피 한 경우 -->
        <table border="1" summary="">
        <caption>제목</caption>
        <tbody>
            <tr>
                <th scope="row">제목 <strong class="icoRequired">필수</strong></th>
                <td>내용</td>
            </tr>
            <tr>
                <th scope="row">제목</th>
                <td>내용</td>
            </tr>
        </tbody>
        </table>
    </div>
')
);
?>