<?php

// 모듈 전체 제목
$header_name = 'mRequired';

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
    <h3>[mRequired] 필수입력사항</h3>
', 'html' => '
    <div class="mTitle">
        <h2>중제목</h2>
    </div>
    <div class="mTitle">
        <h3>소제목</h3>
    </div>
    <p class="mRequired"><strong>*</strong> 필수 입력사항</p>
    <div class="mBoard gSmall">
        <table border="1" summary="">
        <caption>제목</caption>
        <tbody>
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