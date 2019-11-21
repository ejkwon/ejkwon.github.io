<?php

// 모듈 전체 제목
$header_name = 'mCtrl';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>mBoard 기준으로 상/하단에 따라 사용되는 typeClass(typeHeader/typeFooter) 사용에 유의한다.</li>
        <li>mCtrl 을 단독으로 사용해야 할 경우, grid 클래스를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>请注意以mBoard为准分别用于上/下端的typeClass(typeHeader/typeFooter) 的使用。</li>
        <li>单独使用mCtrl时，添加grid class。</li>
    </ol>
    <ol class="en_US">
        <li>Be cautions to use the typeClass(typeHeader/typeFooter) that is utilized based on the mBoard.</li>
        <li>In case the mCtrl has to be used individually, the grid class should be added.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        /* 프리뷰를 위한 CSS 제거 */
        .mTitle { padding-top:0 !important; }
        .section { margin-bottom:0 !important; }
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
    <h3>[ mCtrl + gDouble ] 단독 사용 <span class="zh_CN">( [ mCtrl + gDouble ] 单独使用 )</span><span class="en_US">( [ mCtrl + gDouble ] (번역필요) )</span></h3>
', 'html' => '
    <div class="mCtrl gDouble">
        <div class="gLeft">
            <span class="txtLess">선택한 상품을</span>
            <a href="#none" class="btnNormal"><span>진열함</span></a>
            <a href="#none" class="btnNormal"><span><em class="icoPlus"></em> 복사</span></a>
            <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
        </div>
        <div class="gRight">
            <a href="#none" class="btnCtrl"><span>등록</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[ mCtrl ]</h3>
', 'html' => '
    <div class="mCtrl typeHeader">
        <div class="gLeft">
            <span class="txtLess">선택한 상품을</span>
            <a href="#none" class="btnNormal"><span>진열함</span></a>
            <a href="#none" class="btnNormal"><span><em class="icoPlus"></em> 복사</span></a>
            <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
        </div>
        <div class="gRight">
            <a href="#none" class="btnCtrl"><span>등록</span></a>
        </div>
    </div>
    <div class="mBoard">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <colgroup>
                <col style="width:33%;" />
                <col style="width:33%;" />
                <col style="width:33%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mCtrl typeFooter">
        <div class="gLeft">
            <span class="txtLess">선택한 상품을</span>
            <a href="#none" class="btnNormal"><span>진열함</span></a>
            <a href="#none" class="btnNormal"><span><em class="icoPlus"></em> 복사</span></a>
            <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
        </div>
        <div class="gRight">
            <a href="#none" class="btnCtrl"><span>등록</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[ mCtrl ] 순서변경 버튼 <span class="zh_CN">顺序变更按钮</span><span class="en_US">(번역필요)</span></h3>
', 'html' => '
    <div class="mCtrl typeHeader">
        <div class="gLeft">
            <button type="button" class="btnMove icoLast"><span>선택한 항목 최하단으로 이동</span></button>
            <button type="button" class="btnMove icoNext"><span>선택한 항목 한줄 아래로 이동</span></button>
            <button type="button" class="btnMove icoPrev"><span>선택한 항목 한줄 위로 이동</span></button>
            <button type="button" class="btnMove icoFirst"><span>선택한 항목 최상단으로 이동</span></button>
        </div>
        <div class="gRight">
            <a href="#none" class="btnCtrl"><span>등록</span></a>
            <a href="#none" class="btnCtrl"><span>추가</span></a>
        </div>
    </div>
    <div class="mBoard">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <colgroup>
                <col style="width:33%;" />
                <col style="width:33%;" />
                <col style="width:33%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mCtrl typeFooter">
        <div class="gLeft">
            <button type="button" class="btnMove icoLast"><span>선택한 항목 최하단으로 이동</span></button>
            <button type="button" class="btnMove icoNext"><span>선택한 항목 한줄 아래로 이동</span></button>
            <button type="button" class="btnMove icoPrev"><span>선택한 항목 한줄 위로 이동</span></button>
            <button type="button" class="btnMove icoFirst"><span>선택한 항목 최상단으로 이동</span></button>
        </div>
        <div class="gRight">
            <a href="#none" class="btnCtrl"><span>등록</span></a>
            <a href="#none" class="btnCtrl"><span>추가</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[ mCtrl ] 가운데 정렬 <span class="zh_CN">居中</span><span class="en_US">(번역필요)</span></h3>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <colgroup>
                <col style="width:33%;" />
                <col style="width:33%;" />
                <col style="width:33%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mCtrl typeFooter">
        <a href="#none" class="btnNormal"><span><em class="icoPlus"></em> 추가</span></a>
        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
    </div>
'), array(
'desc' => '
    <h3>[mCtrl + setting &gt; mOpen] 목록표시 설정</h3>
', 'html' => '
    <div class="mCtrl typeHeader setting">
        <div class="gLeft">
            <a href="#none" class="btnNormal"><span>진열함</span></a>
        </div>
        <div class="gRight">
            <a href="#none" class="btnCtrl"><span>등록</span></a>
            <a href="#none" class="btnCtrl"><span>추가</span></a>
        </div>
        <div class="gSetting">
            <div class="mOpen">
                <a href="#listSubject" class="btnSetting eOpenClick"><span>설정</span></a>
                <div id="listSubject" class="open">
                    <strong>목록표시</strong>
                    <div class="wrap">
                        <ul class="default">
                            <li><label><input type="checkbox" class="fChk" /> No</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품구분</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품코드</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품명</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품명(상점별)</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 쇼핑몰 화면</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 판매가</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 할인가</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 모바일할인가</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 영문상품명</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 공급자 상품명</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 상품분류</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 자체 상품코드</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 진열상태</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 판매상태</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 제조사</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 공급사</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 브랜드</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 트랜드</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 공급가</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 원산지</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 모델명</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품상태</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품 검색태그</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 품절사용</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 품목수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 품절품목수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 관심상품수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 무이자할부 상품</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 조회수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 배송수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 결제수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품구매율(%)</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 상품등록일</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 메모</label></li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#none" class="btnCtrl"><span>적용</span></a>
                        <a href="#none" class="btnNormal eClose"><span>닫기</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mBoard">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <colgroup>
                <col style="width:33%;" />
                <col style="width:33%;" />
                <col style="width:33%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>[mCtrl + gTable] mCtrl Position Reset</h3>
    <ul>
        <li>mCtrl 의 postition을 static으로 reset 하기 위해 사용되며, 사용하지 않는것이 기본이다.</li>
        <li class="zh_CN">mCtrl的position值需要重置为static时使用gTable，默认不使用gTable。</li>
        <li class="en_US">번역필요</li>
    </ul>
', 'html' => '
    <div class="mCtrl typeHeader gTable">
        <div class="gLeft">
            <a href="#none" class="btnNormal"><span>진열함</span></a>
        </div>
        <div class="gRight">
            <a href="#none" class="btnCtrl"><span>등록</span></a>
            <a href="#none" class="btnCtrl"><span>추가</span></a>
        </div>
    </div>
    <div class="mBoard">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <colgroup>
                <col style="width:33%;" />
                <col style="width:33%;" />
                <col style="width:33%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>[mCtrl &gt; gTop, gBottom] 상/하단 구분 <span class="zh_CN">区分上/下端</span><span class="en_US">(번역필요)</span></h3>
    <ol>
        <li>mCtrl 영역에 추가될 버튼이 많을 경우 상/하단 구분을 위해 사용됨. <a href="/ec/order/list/prepare/number.html" target="_blank" class="txtEm">[ 예시 ]</a></li>
        <li>좌우구분이 필요할 경우, gTop에는 gRight, gBottom에는 gLeft를 추가하여 사용.</li>
    </ol>
    <ol class="zh_CN">
        <li>在mCtrl 区域须添加的按钮较多时，为区分上/下端而使用。<a href="/ec/order/list/prepare/number.html" target="_blank" class="txtEm">[ 例子 ]</a></li>
        <li>需区分左右时，在gTop添加gRight，在gBottom添加gLeft使用。</li>
    </ol>
    <ol class="en_US">
        <li>If there are too many buttons that have to be added in the mCtrl area, it is used to divide the upper and lower end. <a href="/smartAdmin/order/list/prepare/number.html" target="_blank" class="txtEm">[example]</a></li>
        <li>If the division of right and left is needed, add the gLeft in the gBottom and the gTom in the gRight.</li>
    </ol>
', 'html' => '
    <div class="mCtrl typeHeader">
        <div class="gTop">
            <a href="#none" class="btnNormal"><span>진열함</span></a>
        </div>
        <div class="gBottom">
            <a href="#none" class="btnCtrl"><span>등록</span></a>
            <a href="#none" class="btnCtrl"><span>추가</span></a>
        </div>
    </div>
    <div class="mBoard">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <colgroup>
                <col style="width:33%;" />
                <col style="width:33%;" />
                <col style="width:33%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mCtrl typeFooter">
        <div class="gTop">
            선택한 항목의 작성자에게
            <select class="fSelect">
                <option selected="selected">- 적립금 일괄지급 구분 -</option>
                <option>적립예정 금액을</option>
                <option>모두 같은 금액의 적립금을 </option>
            </select>
            <a href="#mileage_batch" class="btnNormal eModal"><span>일괄지급</span></a>
            <span class="gRight">
                <a href="#none" class="btnCtrl"><span>책갈피로 이동</span></a>
            </span>
        </div>
        <div class="gBottom">
            <span class="gLeft">
                <a href="#none" class="btnCtrl"><span>책갈피로 지정</span></a>
                <a href="#none" class="btnNormal"><span>스팸신고</span></a>
                <a href="#none" class="btnNormal"><span>스팸해제</span></a>
                <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
            </span>
            <a href="#none" title="새창 열림" target="_blank" class="btnNormal"><span>SMS보내기<em class="icoLink"></em></span></a>
        </div>
    </div>
')
);
?>