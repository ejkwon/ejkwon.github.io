<?php

// 모듈 전체 제목
$header_name = '우편번호 검색';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>해당페이지는 중국지사에서 작업할 내용이 없으므로 중국어 번역을 생략한다</li>
        <li>우편번호는 전사공통으로 사용되며 별도의 퍼블리싱을 전달하지 않고 아래 URL만 전달한다.</li>
        <li>법적이슈로 우편번호가 6자리에서 5자리로 변경되어 당분간 두개의 퍼블리싱을 유지한다. (last update: 2015.07)</li>
        <li>5자리 변경건 이전에는 스마트디자인 프론트도 다른 디자인을 유지했으나, 5자리 변경이후부터는 모두 통합된다. (last update: 2015.07)</li>
        <li><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=511740659" target="_blank">사양 확인</a></li>
    </ol>
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
    <h3>전사 공용 우편번호 검색 : 5자리 우편번호 검색</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>우편번호찾기 샘플</caption>
            <tbody>
                <tr>
                    <th scope="row">주소(PC)</th>
                    <td>
                        <input type="text" class="fText center" readonly="readonly" style="width:90px;" />
                        <a href="/suio/module/postcode.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=620, scrollbars=auto\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>팝업형(공통)<em class="icoLink"></em></span></a>
                        <a href="/suio/module/postcode_ec.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=620, scrollbars=auto\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>팝업형(EC)<em class="icoLink"></em></span></a>
                        <a href="/suio/module/postcode_layer.html" onclick="window.open(this.href, \'zipcode\', \'width=700, height=700, scrollbars=auto\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>레이어형(공통)<em class="icoLink"></em></span></a>
                        <a href="/suio/module/postcode_layer_ec.html" onclick="window.open(this.href, \'zipcode\', \'width=700, height=700, scrollbars=auto\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>레이어형(EC)<em class="icoLink"></em></span></a>
                        <div class="gSingle"><input type="text" readonly="readonly" class="fText" style="width:340px;" /></div>
                        <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">주소(모바일)</th>
                    <td>
                        <input type="text" class="fText center" readonly="readonly" style="width:90px;" />
                        <a href="/suio/module/postcode_mobile.html" onclick="window.open(this.href, \'zipcode\', \'width=337, height=480\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>공통<em class="icoLink"></em></span></a>
                        <a href="/suio/module/postcode_mobile_ec.html" onclick="window.open(this.href, \'zipcode\', \'width=337, height=480\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>EC<em class="icoLink"></em></span></a>
                        <div class="gSingle"><input type="text" readonly="readonly" class="fText" style="width:340px;" /></div>
                        <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mHelp typeInfo">
        <h2>[필독] 개발팀 작업시 참고사항</h2>
        <div class="content">
            <ol>
                <li>1) 팝업 및 레이어팝업 사이즈는 600 * 620 고정</li>
                <li>2) 레이어와 팝업은 동일한 구조로, <strong>mCafe24Post gPc 영역에 typeLayer 타입을 추가</strong>하여 디자인을 적용한다.<br />상단 닫기버튼 노출여부와 팝업 테두리선의 차이등이 있다.</li>
                <li>3) 영문포함용은 팝업/레이어 소스 내 주석으로 처리되어있다. 목록의 상단 안내문구가 다르며, 도로명주소와 지번주소의 a링크를 하나로 묶어서 처리한다.</li>
                <li>4) 검색없음의 경우, search 영역과 empty 영역을 제외한 영역들은 다 삭제한다.</li>
                <li><span class="txtEm">5) 레이어타입를 사용하는 경우에는 기존 페이지의 영향을 받아 일부 디자인 오류가 발생할 수 있다. 문제시 UI개발팀에 접수한다.</span></li>
            </ol>
        </div>
    </div>
'), array(
'desc' => '
    <h3>EC솔루션 전용 해외 우편번호 검색 (PC)</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>우편번호찾기 샘플</caption>
            <tbody>
                <tr>
                    <th scope="row">주소 (레이어)</th>
                    <td>
                        <input type="text" readonly="readonly" class="fText" style="width:90px;" />
                        <!-- 전사공통으로 대체
                            <a href="#ordZipcode1" class="btnNormal eModal"><span>우편번호 검색 (한국)</span></a>
                            <a href="#ordZipcode4" class="btnNormal eModal"><span>우편번호 검색 (도로명주소 포함)</span></a>
                        //전사공통으로 대체 -->

                        <a href="#ordZipcode2" class="btnNormal eModal"><span>우편번호 검색 (일본)</span></a>
                        <a href="#ordZipcode3" class="btnNormal eModal"><span>우편번호 검색 (중국어 간체)</span></a>
                        <a href="#ordZipcode5" class="btnNormal eModal"><span>우편번호 검색 (중국어 번체)</span></a>
                        <div class="gSingle"><input type="text" readonly="readonly" class="fText" style="width:340px;" /></div>
                        <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">주소 (팝업)</th>
                    <td>
                        <input type="text" readonly="readonly" class="fText" style="width:90px;" />

                        <!-- 전사공통으로 대체
                            <a href="/suio/module/zipcode.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=600\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색 (한국)<em class="icoLink"></em></span></a>
                            <a href="/suio/module/zipcode_multi.html" onclick="window.open(this.href, \'zipcode\', \'width=650, height=700\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색 (도로명주소 포함)<em class="icoLink"></em></span></a>
                        //전사공통으로 대체 -->

                        <a href="/suio/module/zipcode_jp.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=600\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색 (일본)<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_zh.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=600\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색 (중국어 간체)<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_tw.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=600\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색 (중국어 번체)<em class="icoLink"></em></span></a>
                        <div class="gSingle"><input type="text" readonly="readonly" class="fText" style="width:340px;" /></div>
                        <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>전사 공용 우편번호 검색 (사용하지 않음)</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>우편번호찾기 샘플</caption>
            <tbody>
                <tr>
                    <th scope="row">주소 (레이어)</th>
                    <td>
                        <input type="text" readonly="readonly" class="fText" style="width:90px;" />
                        <a href="/suio/module/zipcode_common_layer.html" onclick="window.open(this.href, \'zipcode\', \'width=620, height=565, scrollbars=yes, resizable=yes\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_not_found_layer.html" onclick="window.open(this.href, \'zipcode\', \'width=620, height=565, scrollbars=yes, resizable=yes\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>요청페이지없음<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_no_permission_layer.html" onclick="window.open(this.href, \'zipcode\', \'width=620, height=565, scrollbars=yes, resizable=yes\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>접속권한없음<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_access_failure_layer.html" onclick="window.open(this.href, \'zipcode\', \'width=620, height=565, scrollbars=yes, resizable=yes\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>접속장애<em class="icoLink"></em></span></a>
                        <div class="gSingle"><input type="text" readonly="readonly" class="fText" style="width:340px;" /></div>
                        <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">주소 (팝업)</th>
                    <td>
                        <input type="text" readonly="readonly" class="fText" style="width:90px;" />
                        <a href="/suio/module/zipcode_common_popup.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=565, scrollbars=no, resizable=no\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_not_found_popup.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=565, scrollbars=no, resizable=no\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>요청페이지없음<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_no_permission_popup.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=565, scrollbars=no, resizable=no\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>접속권한없음<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_access_failure_popup.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=565, scrollbars=no, resizable=no\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>접속장애<em class="icoLink"></em></span></a>
                        <div class="gSingle"><input type="text" readonly="readonly" class="fText" style="width:340px;" /></div>
                        <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mHelp typeInfo">
        <h2>[필독] 개발팀 작업시 참고사항</h2>
        <div class="content">
            <ol>
                <li>1) 팝업사이즈는 600 * 565 고정</li>
                <li>2) 검색결과의 지역갯수에 따라, 지역 영역과 검색결과 영역의 class가 달라지므로 주석을 참고해 작업한다.</li>
                <li>3) 자바스크립트는 12r을 기준으로 제작되어 jquery-1.4.4.min.js으로 적용 되어있다. js에 문제가 있을 경우 솔루션에 맞게 커스터마이징 하시면 됩니다</li>
                <li><span class="txtEm">4) 레이어타입를 사용하는 경우에는 기존 페이지의 영향을 받아 일부 디자인 오류가 발생할 수 있다. 문제시 UI개발팀에 접수한다.</span></li>
            </ol>
        </div>
    </div>
'), array(
'desc' => '
    <h3>스마트디자인 스킨 전용 우편번호 검색</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>우편번호찾기 샘플</caption>
            <tbody>
                <tr>
                    <th scope="row">주소</th>
                    <td>
                        <input type="text" readonly="readonly" class="fText" style="width:90px;" />
                        <a href="/suio/module/zipcode_sd.html" onclick="window.open(this.href, \'zipcode\', \'width=620, height=720\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색 (PC)<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_sd_mobile.html" onclick="window.open(this.href, \'zipcode\', \'width=310, height=560\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span style="text-decoration:line-through;">우편번호 검색 (구모바일)<em class="icoLink"></em></span></a>
                        <div class="gSingle"><input type="text" readonly="readonly" class="fText" style="width:340px;" /></div>
                        <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">주소(뉴모바일)</th>
                    <td>
                        <input type="text" readonly="readonly" class="fText" style="width:90px;" />
                        <a href="/suio/module/zipcode_sd_newmobile_ko_KR.html" onclick="window.open(this.href, \'zipcode\', \'width=320, height=580\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색 (국문)<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_sd_newmobile_ja_JP.html" onclick="window.open(this.href, \'zipcode\', \'width=320, height=570\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색 (일문)<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_sd_newmobile_zh_CN.html" onclick="window.open(this.href, \'zipcode\', \'width=320, height=570\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색 (중문-간체)<em class="icoLink"></em></span></a>
                        <a href="/suio/module/zipcode_sd_newmobile_zh_TW.html" onclick="window.open(this.href, \'zipcode\', \'width=320, height=570\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>우편번호 검색 (중문-번체)<em class="icoLink"></em></span></a>
                        <div class="gSingle"><input type="text" readonly="readonly" class="fText" style="width:340px;" /></div>
                        <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>