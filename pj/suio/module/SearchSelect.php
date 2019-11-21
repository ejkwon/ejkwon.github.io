<?php
// 모듈 전체 제목
$header_name = 'SearchSelect';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
작성예정
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
    <h3>[SearchSelect] 카테고리</h3>
', 'html' => '
    <div class="mSearchSelect typeCategory gDouble">
        <table border="1" summary="">
            <caption>분류</caption>
            <colgroup>
                <col style="width:25%;" span="4" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col" class="center">대분류</th>
                    <th scope="col" class="center">중분류</th>
                    <th scope="col" class="center">소분류</th>
                    <th scope="col" class="center">상세분류</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="list">
                            <ul>
                                <li class="selected">TOP &gt;</li>
                                <li>OUTER &gt;</li>
                                <li>DRESS &gt;</li>
                                <li>PANTS &gt;</li>
                                <li>SKIRT &gt;</li>
                                <li>BAG &gt;</li>
                                <li>SHOSE &gt;</li>
                                <li>ACC &gt;</li>
                                <li>COSMETIC &gt;</li>
                                <li>MADE &gt;</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="list">
                            <ul>
                                <li class="selected txtHide">티셔츠 &gt;</li><!-- 표시하지 않는 분류일 경수 class="txtHide" 추가 -->
                                <li>블라우스 &gt;</li>
                                <li class="txtHide">니트 &gt;</li><!-- 표시하지 않는 분류일 경수 class="txtHide" 추가 -->
                                <li>세트 &gt;</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="list">
                            <ul>
                                <li class="selected">후디</li>
                                <li>나시</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="list">
                            <ul>
                                <li class="selected">인기 후디</li>
                                <li>츄리닝 후디</li>
                                <li>패션 후디</li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>[SearchSelect] 주문검색 활용</h3>
', 'html' => '
    <div class="mSearchSelect">
        <table border="1" summary="">
            <caption>상세조건</caption>
            <colgroup>
                <col style="width:20%;" span="5" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 주문 경로</label>
                    </th>
                    <th scope="col">
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 유입경로</label>
                        <div class="mTooltip gSmall gLabel">
                            <button type="button" class="icon eTip">도움말</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">대제목</strong>
                                    <strong class="title">중제목</strong>
                                    <ul class="mList">
                                        <li>내용</li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                    </th>
                    <th scope="col">
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 결제수단</label>
                    </th>
                    <th scope="col">
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 할인수단</label>
                    </th>
                    <th scope="col">
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 해외PG</label>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="list">
                            <strong class="title">카페24</strong>
                            <ul>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> PC쇼핑몰</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 모바일웹</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 모바일앱</label></li>
                            </ul>
                            <strong class="title">판매처 <a href="#ordOption1" class="btnNormal eLayerClick"><span>설정</span></a></strong>
                            <ul>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 네이버페이</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 인터파크</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 옥션</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 11번가</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> G마켓</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 라쿠텐</label></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="list">
                            <ul>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 옥션어바웃</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 인터파크 오픈스타일</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 네이버 쇼핑</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 바로가기(링콘)</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 기타</label></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="list">
                            <ul>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 무통장입금</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 신용카드카드</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 실시간계좌이체</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 휴대폰결제</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 가상계좌</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 에스크로(실시간 계좌이체)</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 에스크로 가상계좌(하나은행)</label></li>
                            </ul>
                            <div class="group">
                                <strong class="title">간편결제</strong>
                                <ul>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 케이페이(신용카드결제)</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 페이나우(신용카드결제)</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 페이나우(실시간 계좌이체)</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 페이코(신용카드결제)</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 페이코(에스크로 - 실시간 계좌이체)</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 페이코(에스크로 - 가상계좌)</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 페이코(포인트결제)</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 카카오페이(신용카드결제)</label></li>
                                </ul>
                            </div>
                            <ul>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 적립금 &amp 마켓할인</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예치금</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 네이버마일리지</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 네이버캐쉬</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 착불결제</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> B포인트</label></li>
                                <li class="line"><label class="gLabel"><input type="checkbox" class="fChk" /> 전자보증보험</label></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="list">
                            <ul>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 적립금 &amp 마켓할인</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예치금</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 쿠폰</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 네이버마일리지</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 네이버캐쉬</label></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="list">
                            <ul>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 페이팔</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 알리페이</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 엑시즈</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 엑시즈 - 과잉입금</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 액심베이</label></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="eOptionToggle"><span>전체 펼치기</span></button>
    </div>
')
);
?>