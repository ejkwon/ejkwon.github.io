<?php

// 모듈 전체 제목
$header_name = 'Tip';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>툴팁과 다르게 버튼 클릭 시 <span class="txtWarn">하위의 컨텐츠를 밀어내며 노출</span>된다.</li>
        <li>개발참고: tip 열림 필요시 show 클래스 추가, 기본 닫힘일 경우 show삭제</li>
        <li>산출 전달시에는 <span class="txtWarn">기본 열림/닫힘 사양 확인후 적용</span>하고, 내부 디버깅은 유지한다.</li>
        <li>mTip을 사용할 시 반드시 section으로 감싸야 한다.</li>
        <li>버튼 위치는 제목의 유/무와 상관없이 <span class="txtWarn">오른쪽</span>을 기본으로 한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>点击与工具提示不同的按钮时，会显示下方内容。</li>
        <li>开发参考：tip需要展开时添加show class，默认关闭情况时删除show。</li>
        <li>(번역수정필요) 制作完成并邀请检查时，因show class名由JS控制，不得存在于代码上。</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
    <ol class="en_US">
        <li>Unlike tooltips, when click the button, it pushes subordinate contents and is exposed.</li>
        <li>Development reference: If it is needed to open tip, add the show class, but delete the show if the default is closed.</li>
        <li>(번역수정필요) When deliver the computation, the show class must be deleted.</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .mBoard:first-child { margin-bottom:20px; }
        .mTitle,
        .mTitle .mTip.show { outline:0; }
        .mTitle:before { display:none; }
        .mTip.typeGrid.domain { min-width:1016px; }
        .mTip.typeGrid.domain li[class*="item"] .thumbnail:before { background-image:url("//img.echosting.cafe24.com/ec/shop/sfix_icon_domain.png"); }
        .mTip { outline:0; }
        .mTip:before { display:none; }
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
                    <p class="info"><span class="date">2018.04.16</span><span class="writer">소라</span></p>
                    <p class="title"><strong>[mTip]</strong>  버튼 없는 케이스 추가 <a class="btnLink" href="/ec/community/submain.html" target="_blank">게시판관리</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2018.04.03</span><span class="writer">소라</span></p>
                    <p class="title"><strong>[mTip + typeGrid]</strong>  신규모듈 추가 <a class="btnLink" href="/ec/shop/information/domain2.html" target="_blank">도메인 설정 안내</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2018.03.22</span><span class="writer">박정우</span></p>
                    <p class="title"><strong>[mTip] icoChart</strong> 차트보기 추가 <a class="btnLink" href="/pdm/wms/report/selling/payment.html" target="_blank">결제기간별 판매통계</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.08.03</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[mTip]</strong> 모듈 독립 사용 <a class="btnLink" href="/ec/member/sms/customer/auto_kakao_message.html" target="_blank">자동 발송 메시지 설정</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.07.19</span><span class="writer">김도희</span></p>
                    <p class="title"><strong>[mTitle &gt; mTip]</strong> 신규모듈 추가 <a class="btnLink" href="/ec/mobile/app/setting.html" target="_blank">앱 환경설정</a></p>
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
    <h3>[mTip]</h3>
', 'html' => '
    <div class="mTip show"><!-- 팁 열기 버튼이 없는 경우 -->
        <div class="tip">
            <div class="content">
                <strong class="title">리뷰톡톡 서비스를 <span class="txtEm">쇼핑몰 화면에 적용</span>하려면 <span class="txtEm">"디자인 소스"를 추가</span>하세요.</strong>
                <ol class="list">
                    <li class="item1">
                        <p class="text">
                            <strong>쇼핑몰 화면 적용 절차</strong><br />
                            <span class="gSingle">클릭 시 관련 매뉴얼로 이동되어 상세한 설명을 확인할 수 있습니다.</span>
                        </p>
                        <div class="gDouble">
                            <img src="//img.echosting.cafe24.com/ec/community/img_review_service.jpg" alt="" />
                            <ol class="linkManual">
                                <li><a href="#none" target="_blank" title="새창 열림" class="btnManual first">디자인 소스 추가 (필수)</a></li>
                                <li><a href="#none" target="_blank" title="새창 열림" class="btnManual second">기존 게시판의 게시물 이관 (선택)</a></li>
                                <li>서비스 이용</li>
                            </ol>
                        </div>
                    </li>
                    <li class="item2">
                        <p class="text">
                            <strong>디자인 구조 이해</strong><br />
                            <span class="gSingle">스마트 디자인 편집창에 <span class="txtEm">"리뷰톡톡" 폴더가 자동 생성</span>됩니다.</span>
                        </p>
                        <div class="gDouble"><img src="//img.echosting.cafe24.com/ec/community/img_review_service2.jpg" alt="" /></div>
                    </li>
                </ol>
            </div>
        </div>
    </div><br />
    <div class="mTip"><!-- 팁 열림 시 show 클래스 추가, 기본 닫힘일 경우 show삭제 -->
        <button type="button" class="btnTip eTip">멀티쇼핑몰 사용 안내<em class="icoTip"></em></button>
        <div class="tip">
            <div class="content">
                <strong class="title">제목 <span class="txtEm">강조</span></strong>
                <ol class="list">
                    <li class="item1">
                        <p class="text">내용입니다.</p>
                        <div class="gDouble"><img src="/img.echosting.cafe24.com/ec/mobile/img_plusapp.jpg" alt="예시 이미지" /></div>
                    </li>
                    <li class="item2">
                        <p class="text">내용입니다.</p>
                        <div class="gDouble"><img src="/img.echosting.cafe24.com/ec/mobile/img_plusapp2.jpg" alt="예시 이미지" /></div>
                    </li>
                    <li class="item3">
                        <p class="text">
                            <strong>첫번째 문단입니다.</strong><br />
                            첫번째 문단 내용...
                            <span class="gSingle">
                                <strong>두번째 문단입니다.</strong><br />
                                두번째 문단 내용...
                            </span>
                        </p>
                        <div class="gDouble"><img src="/img.echosting.cafe24.com/ec/mobile/img_plusapp2.jpg" alt="예시 이미지" /></div>
                    </li>
                </ol>
            </div>
            <button type="button" class="close eClose">닫기</button>
        </div>
    </div>
'), 
/* SMARTWMS-15690 */
array(
'desc' => '
    <h3>[mTip] 아이콘</h3>
    <ol>
        <li>차트 아이콘이 필요할 경우 사용한다</li>
    </ol>
', 'html' => '
    <div class="mTip"><!-- 팁 열림 시 show 클래스 추가, 기본 닫힘일 경우 show삭제 -->
        <button type="button" class="btnTip eTip"><em class="icoChart"></em> 차트보기<em class="icoTip"></em></button>
        <div class="tip">
            <div class="content">[그래프 영역]</div>
            <button type="button" class="close eClose">닫기</button>
        </div>
    </div>
'),/* //SMARTWMS-15690 */
array(
'desc' => '
    <h3>[mTitle > mTip] h2 + .mTip</h3>
    <ol>
        <li>&lt;h2&gt;나 &lt;h3&gt;에 mTip을 포함하지 않도록 주의한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>请注意&lt;h2&gt;或 &lt;h3&gt;中不包含mTip。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mTitle">
        <h2>중제목</h2>
        <p>설명입니다.</p>
        <div class="mTip show"><!-- 팁 열림 시 show 클래스 추가, 기본 닫힘일 경우 show삭제 -->
            <button type="button" class="btnTip eTip">멀티쇼핑몰 사용 안내<em class="icoTip"></em></button>
            <div class="tip">
                <div class="content">
                    <strong class="title">제목 <span class="txtEm">강조</span></strong>
                    <ol class="list">
                        <li class="item1">
                            <p class="text">내용입니다.</p>
                            <div class="gDouble"><img src="/img.echosting.cafe24.com/ec/mobile/img_plusapp.jpg" alt="예시 이미지" /></div>
                        </li>
                        <li class="item2">
                            <p class="text">내용입니다.</p>
                            <div class="gDouble"><img src="/img.echosting.cafe24.com/ec/mobile/img_plusapp2.jpg" alt="예시 이미지" /></div>
                        </li>
                        <li class="item3">
                            <p class="text">
                                <strong>첫번째 문단입니다.</strong><br />
                                첫번째 문단 내용...
                                <span class="gSingle">
                                    <strong>두번째 문단입니다.</strong><br />
                                    두번째 문단 내용...
                                </span>
                            </p>
                            <div class="gDouble"><img src="/img.echosting.cafe24.com/ec/mobile/img_plusapp2.jpg" alt="예시 이미지" /></div>
                        </li>
                    </ol>
                </div>
                <button type="button" class="close eClose">닫기</button>
            </div>
        </div>
    </div>
'),
/* ECHOSTING-168601 */
array(
'desc' => '
    <h3>[mTip + typeGrid]</h3>
', 'html' => '
    <div class="mTip typeGrid domain"><!-- 팁 열림 시 show 클래스 추가, 기본 닫힘일 경우 show삭제 -->
        <button type="button" class="btnTip eTip">도메인 설정 안내 <em class="icoTip"></em></button>
        <div class="tip">
            <div class="content">
                <ol class="list">
                    <li class="item1">
                        <p class="text">신규 도메인 등록</p>
                        <span class="thumbnail"></span>
                        <div class="desc"><a href="#none" title="도메인 등록 바로가기 링크" class="txtLine">도메인 등록 바로가기</a></div>
                    </li>
                    <li class="item2">
                        <p class="text">도메인 연결</p>
                        <span class="thumbnail"></span>
                        <div class="desc">
                            보유한 도메인을<br />
                            입력합니다.
                        </div>
                    </li>
                    <li class="item3">
                        <p class="text">대표도메인 변경</p>
                        <span class="thumbnail"></span>
                        <div class="desc">
                            보유한 쇼핑몰의 대표도메인을<br />
                            변경할 수 있습니다.
                        </div>
                    </li>
                    <li class="item4">
                        <p class="text">보안인증서 신청</p>
                        <span class="thumbnail"></span>
                        <p class="desc">
                            보안 연결(SSL)을 무료로<br />
                            설정할 수 있습니다.
                        </p>
                    </li>
                </ol>
            </div>
            <button type="button" class="close eClose">닫기</button>
        </div>
    </div>
')/* //ECHOSTING-168601 */
);
?>