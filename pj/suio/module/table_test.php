<?php

// 모듈 전체 제목
$header_name = 'Table cell 사양 정의 (for 필수입력사항)';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = '';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .w120 { width:120px; }
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
    <h3>1. 게시판 보기</h3>
', 'html' => '
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
'),
array(
'desc' => '
    <h3>2-1. 게시판 쓰기</h3>
    <h4>- 텍스트 입력 : input, textarea</h4>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
        <caption>제목</caption>
        <tbody>
            <tr>
                <th scope="row">input</th>
                <td><input type="text" class="fText" style="width:120px;" /></td>
            </tr>
            <tr>
                <th scope="row">textarea</th>
                <td><textarea rows="3" cols="20" class="fTextarea" style="width:98%;"></textarea></td>
            </tr>
        </tbody>
        </table>
    </div>
'),
array(
'desc' => '
    <h3>2-2. 게시판 쓰기</h3>
    <h4>- 항목선택 : radio, checkbox, select, file</h4>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
        <caption>제목</caption>
        <tbody>
            <tr>
                <th scope="row">radio</th>
                <td>
                    <label class="gLabel"><input type="radio" name="radio1" class="fChk" checked="checked" /> 판매중</label>
                    <label class="gLabel"><input type="radio" name="radio1" class="fChk" /> 판매중지</label>
                    <label class="gLabel"><input type="radio" name="radio1" class="fChk" /> 품절</label>
                </td>
            </tr>
            <tr>
                <th scope="row">checkbox</th>
                <td>
                    <label class="gLabel"><input type="checkbox" class="fChk" checked="checked" /> 전체</label>
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 카페24</label>
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 네이버 지식쇼핑</label>
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 인터파크</label>
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 옥션</label>
                </td>
            </tr>
            <tr>
                <th scope="row">select</th>
                <td>
                    <select class="fSelect" style="width:100px;">
                        <option>전체</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">file</th>
                <td>
                    <input type="file" size="22" class="fFile" style="width:250px;" />
                    <div class="gSingle"><span class="frame"><img src="//img.echosting.cafe24.com/thumb/48x48.gif" width="48" height="48" alt="" /></span></div>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
'),
array(
'desc' => '
    <h3>2-3. 게시판 쓰기</h3>
    <h4>- 입력사항이 많을 경우</h4>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
        <caption>제목</caption>
        <tbody>
            <th scope="row">주소</th>
                <td>
                    <input type="text" class="fText" style="width:45px;" /> -
                    <input type="text" class="fText" style="width:45px;" />
                    <a href="#none" class="btnNormal" target="_blank" title="새창 열림"><span>우편번호 <em class="icoLink"></em></span></a>
                    <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                    <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                </td>
            </tr>
            <tr>
                <th scope="row">추가 입력형</th>
                <td>
                    <ul class="mForm typeVer">
                        <li>
                            <label class="gLabel w120"><input type="radio" name="gVer1" class="fChk" /> 입력폼</label>
                            <span class="gLabel"><input type="text" class="fText" style="width:150px;" value="일반적인 입력폼" /></span>
                            <span class="gLabel txtInfo">일반적인 입력폼 부가설명</span>
                        </li>
                        <li>
                            <label class="gLabel w120"><input type="radio" name="gVer1" class="fChk" /> 입력폼(금액)</label>
                            <span class="gLabel"><input type="text" class="fText right" style="width:50px;" value="3,000" /> 원</span>
                        </li>
                        <li>
                            <label class="gLabel w120"><input type="radio" name="gVer1" class="fChk" /> 입력폼(필수선택)</label>
                            <span class="gLabel"><select class="fSelect"><option>선택하세요</option></select></span>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
')
);
?>