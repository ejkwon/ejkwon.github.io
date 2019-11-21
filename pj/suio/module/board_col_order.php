<?php

// 모듈 전체 제목
$header_name = '주문 목록(시안 대기중)';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <h2>Guide</h2>
    <ul>
        <li>첫번째 tbody에 class="first" 추가한다.</li>
        <li>주문번호 : td class="orderNum"</li>
        <li>수량 : td class="quantity"</li>
        <li>실 결제금액 : td class="total"</li>
        <li>주문정보 : td class="orderInfo"</li>
    </ul>
';

// 프리뷰를 위한 태그 리셋  (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        /* 완료 시 /css/ec/order.css 로 이동*/
        .mBoard.typeOrder table { border-right:1px solid #d9dadc; border-bottom:1px solid #d9dadc; }
        .mBoard.typeOrder tbody td { border:0; border-left:1px solid #d9dadc; border-top:1px solid #d9dadc; vertical-align:top; }
        .mBoard.typeOrder tbody tr:first-child td { border-top:0; background-image:url("/img/ec/order/bg_order_table.gif"); background-repeat:repeat-x; background-position:0 0; }
        .mBoard.typeOrder tbody.first tr:first-child td { background-image:none; }
        .mBoard.typeOrder .orderNum,
        .mBoard.typeOrder .orderNum a { color:#0173c5; font-weight:bold; text-align:left; text-decoration:underline; }
        .mBoard.typeOrder .quantity { color:#898989; text-align:center; }
        .mBoard.typeOrder .total { color:#1b87d4; font-weight:bold; text-align:right; }
        .mBoard.typeOrder .orderInfo { border-top:1px dotted #bbc0c4; font-size:11px; text-align:left; }
        .mBoard.typeOrder .orderInfo .recipient { float:left; width:49%; }
        .mBoard.typeOrder .orderInfo .orderer { float:right; width:49%; }
        .mBoard.typeOrder .orderInfo strong { float:left; width:30%; font-weight:normal; }
        .mBoard.typeOrder .orderInfo strong span { font-weight:bold; }
        .mBoard.typeOrder .orderInfo ul { float:left; width:69%; }
        .mBoard.typeOrder .orderInfo li {}
        .mBoard.typeOrder .orderInfo li span { color:#898989; }
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
    <h3>[mBoard + typeOrder]</h3>
', 'html' => '
    <div class="mBoard typeOrder">
        <table border="1" summary="" class="eChkBody">
        <caption>제목</caption>
        <colgroup>
            <col class="chk" />
            <col class="date" />
            <col style="width:10%;" />
            <col style="width:7%;" />
            <col style="width:10%;" />
            <col style="width:8%;" />
            <col style="width:auto;" />
            <col style="width:6%;" />
            <col style="width:13%;" />
            <col style="width:10%;" />
        </colgroup>
        <thead>
            <tr>
                <th scope="col"><input type="checkbox" class="allChk" /></th>
                <th scope="col">주문일</th>
                <th scope="col">주문번호</th>
                <th scope="col">유입경로</th>
                <th scope="col">운송장정보</th>
                <th scope="col">배송비</th>
                <th scope="col"><label><input type="checkbox" class="fChk" /> 주문상품</label></th>
                <th scope="col">수량</th>
                <th scope="col">실 결제금액</th>
                <th scope="col">결제유형</th>
            </tr>
        </thead>
        <tbody class="first">
            <tr>
                <td rowspan="2"><input type="checkbox" class="rowChk" disabled="disabled" /></td>
                <td rowspan="2">2013-03-28</td>
                <td rowspan="2" class="orderNum"><a href="#none">20111229 - 0001925</a></td>
                <td rowspan="2">경로</td>
                <td>
                    <select>
                        <option>자체배송</option>
                    </select>
                    <span class="gSingle"><input type="text" class="fText" style="width:60px;" /></span>
                </td>
                <td><input type="text" class="fText right" style="width:50px;" /></td>
                <td class="left">
                    <div class="gGoods gMedium gCheck">
                        <input type="checkbox" class="fChk" />
                        <span class="frame"><img src="/img.echosting.cafe24.com/thumb/50x50.gif" width="50" height="50" alt="" /></span>
                        <p><a href="#none">하트레인 더블 숄가디건</a></p>
                        <ul class="etc">
                            <li>목록형 설명문구</li>
                            <li>목록형 설명문구</li>
                        </ul>
                    </div>
                </td>
                <td class="quantity">56</td>
                <td class="total">89,600</td>
                <td>카드</td>
            </tr>
            <tr>
                <td colspan="6" class="orderInfo">
                    <div class="recipient">
                        <strong>받는이 : <span>홍길동</span></strong>
                        <ul>
                            <li><span>전화 : </span>02-1234-5678</li>
                            <li><span>휴대폰 : </span>010-1234-5678</li>
                            <li><span>주소 : </span>[730-763]경북 구미시 비상동 강변보성아파트 118동 1304호</li>
                        </ul>
                    </div>
                    <div class="orderer">
                        <strong>주문자 : <span>홍길동</span></strong>
                        <ul>
                            <li><span>전화 : </span>02-1234-5678</li>
                            <li><span>휴대폰 : </span>010-1234-5678</li>
                            <li><span>주소 : </span>[730-763]경북 구미시 비상동 강변보성아파트 118동 1304호</li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td rowspan="2"><input type="checkbox" class="rowChk" /></td>
                <td rowspan="2">2013-03-28</td>
                <td rowspan="2" class="orderNum"><a href="#none">20111229 - 0001925</a></td>
                <td rowspan="2">경로</td>
                <td>
                    <select>
                        <option>자체배송</option>
                    </select>
                    <span class="gSingle"><input type="text" class="fText" style="width:60px;" /></span>
                </td>
                <td><input type="text" class="fText right" style="width:50px;" /></td>
                <td class="left">
                    <div class="gGoods gMedium gCheck">
                        <input type="checkbox" class="fChk" />
                        <span class="frame"><img src="/img.echosting.cafe24.com/thumb/50x50.gif" width="50" height="50" alt="" /></span>
                        <p><a href="#none">하트레인 더블 숄가디건</a></p>
                        <ul class="etc">
                            <li>목록형 설명문구</li>
                            <li>목록형 설명문구</li>
                        </ul>
                    </div>
                </td>
                <td class="quantity">56</td>
                <td class="total">89,600</td>
                <td>카드</td>
            </tr>
            <tr>
                <td colspan="6" class="orderInfo">
                    <div class="recipient">
                        <strong>받는이 : <span>홍길동</span></strong>
                        <ul>
                            <li><span>전화 : </span>02-1234-5678</li>
                            <li><span>휴대폰 : </span>010-1234-5678</li>
                            <li><span>주소 : </span>[730-763]경북 구미시 비상동 강변보성아파트 118동 1304호</li>
                        </ul>
                    </div>
                    <div class="orderer">
                        <strong>주문자 : <span>홍길동</span></strong>
                        <ul>
                            <li><span>전화 : </span>02-1234-5678</li>
                            <li><span>휴대폰 : </span>010-1234-5678</li>
                            <li><span>주소 : </span>[730-763]경북 구미시 비상동 강변보성아파트 118동 1304호</li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td rowspan="5"><input type="checkbox" class="rowChk" /></td>
                <td rowspan="5">2013-03-28</td>
                <td rowspan="5" class="orderNum"><a href="#none">20111229 - 0001925</a></td>
                <td rowspan="5">경로</td>
                <td>
                    <select>
                        <option>자체배송</option>
                    </select>
                    <span class="gSingle"><input type="text" class="fText" style="width:60px;" /></span>
                </td>
                <td><input type="text" class="fText right" style="width:50px;" /></td>
                <td class="left">
                    <div class="gGoods gMedium gCheck">
                        <input type="checkbox" class="fChk" />
                        <span class="frame"><img src="/img.echosting.cafe24.com/thumb/50x50.gif" width="50" height="50" alt="" /></span>
                        <p><a href="#none">하트레인 더블 숄가디건</a></p>
                        <ul class="etc">
                            <li>목록형 설명문구</li>
                            <li>목록형 설명문구</li>
                        </ul>
                    </div>
                </td>
                <td class="quantity">56</td>
                <td class="total">89,600</td>
                <td>카드</td>
            </tr>
            <tr>
                <td colspan="6" class="orderInfo">
                    <div class="recipient">
                        <strong>받는이 : <span>홍길동</span></strong>
                        <ul>
                            <li><span>전화 : </span>02-1234-5678</li>
                            <li><span>휴대폰 : </span>010-1234-5678</li>
                            <li><span>주소 : </span>[730-763]경북 구미시 비상동 강변보성아파트 118동 1304호</li>
                        </ul>
                    </div>
                    <div class="orderer">
                        <strong>주문자 : <span>홍길동</span></strong>
                        <ul>
                            <li><span>전화 : </span>02-1234-5678</li>
                            <li><span>휴대폰 : </span>010-1234-5678</li>
                            <li><span>주소 : </span>[730-763]경북 구미시 비상동 강변보성아파트 118동 1304호</li>
                        </ul>
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="2">
                    <select>
                        <option>자체배송</option>
                    </select>
                    <span class="gSingle"><input type="text" class="fText" style="width:60px;" /></span>
                </td>
                <td rowspan="2"><input type="text" class="fText right" style="width:50px;" /></td>
                <td class="left">
                    <div class="gGoods gMedium gCheck">
                        <input type="checkbox" class="fChk" />
                        <span class="frame"><img src="/img.echosting.cafe24.com/thumb/50x50.gif" width="50" height="50" alt="" /></span>
                        <p><a href="#none">하트레인 더블 숄가디건</a></p>
                        <ul class="etc">
                            <li>목록형 설명문구</li>
                            <li>목록형 설명문구</li>
                        </ul>
                    </div>
                </td>
                <td class="quantity">56</td>
                <td rowspan="2" class="total">89,600</td>
                <td rowspan="2">카드</td>
            </tr>
            <tr>
                <td class="left">
                    <div class="gGoods gMedium gCheck">
                        <input type="checkbox" class="fChk" />
                        <span class="frame"><img src="/img.echosting.cafe24.com/thumb/50x50.gif" width="50" height="50" alt="" /></span>
                        <p><a href="#none">하트레인 더블 숄가디건</a></p>
                        <ul class="etc">
                            <li>목록형 설명문구</li>
                            <li>목록형 설명문구</li>
                        </ul>
                    </div>
                </td>
                <td class="quantity">56</td>
            </tr>
            <tr>
                <td colspan="6" class="orderInfo">
                    <div class="recipient">
                        <strong>받는이 : <span>홍길동</span></strong>
                        <ul>
                            <li><span>전화 : </span>02-1234-5678</li>
                            <li><span>휴대폰 : </span>010-1234-5678</li>
                            <li><span>주소 : </span>[730-763]경북 구미시 비상동 강변보성아파트 118동 1304호</li>
                        </ul>
                    </div>
                    <div class="orderer">
                        <strong>주문자 : <span>홍길동</span></strong>
                        <ul>
                            <li><span>전화 : </span>02-1234-5678</li>
                            <li><span>휴대폰 : </span>010-1234-5678</li>
                            <li><span>주소 : </span>[730-763]경북 구미시 비상동 강변보성아파트 118동 1304호</li>
                        </ul>
                    </div>
                </td>
            </tr>
        </tbody>
        <tbody class="empty">
            <tr>
                <td colspan="10">주문 내역이 없습니다.</td>
            </tr>
        </tbody>
        </table>
    </div>
')
);
?>