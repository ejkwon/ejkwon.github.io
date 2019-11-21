<?php
// 모듈 전체 제목
$header_name = 'optionArea';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
상세내역은 작성예정<br />
테이블을 토글화시킬때 사용되며 <br />
optionArea > mOption, mOptionToogle 의 구조를 가짐<br />
mOption 두번째부터는 gDivision 필요
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
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
    <h3>[optionArea]</h3>
', 'html' => '
    <div class="optionArea">
        <div class="mOption">
            <table border="1" summary="">
                <caption>optionArea</caption>
                <colgroup>
                    <col style="width:154px;" />
                    <col style="width:auto;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">제목</th>
                        <td>기본 노출 영역</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mOption gDivision">
            <table border="1" summary="">
                <caption>mOption gDivision</caption>
                <colgroup>
                    <col style="width:154px;" />
                    <col style="width:auto;" />
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">제목</th>
                        <td>상세검색 활성화시 노출 영역</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mOptionToogle">
            <div class="ctrl">
                <span><button type="button" class="eOrdToogle">상세검색 열기</button></span>
            </div>
        </div>
        <div class="mButton gCenter">
            <a href="#none" class="btnSearch"><span>검색</span></a>
        </div>
    </div>
')
);
?>