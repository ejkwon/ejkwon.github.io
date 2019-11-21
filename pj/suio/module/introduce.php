<?php

// 모듈 전체 제목
$header_name = 'Introduce';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>파일명은 introduce.html로 한다.</li>
        <li>전체 컨텐츠는 &lt;div class="introduce $Area"&gt;로 감싸준다.</li>
        <li>.mVisual와 .introTab의 width는 가변, 그 외 컨텐츠는 .gContent로 감싸서 width를 고정시켜준다.</li>
        <li>이미지 파일명은 다음의 가이드를 따른다. tag_intro_컨텐츠숫자 (예: h3_intro_reward1.gif)</li>
        <li>공통가이드 영역 : div.mVisual, h3, p.desc, div.info, div.step</li>
        <li>컨텐츠 개별 영역 : css파일에 .introduce.$Area 로 추가한다. (introduce.html 파일 검색을 통해 참고한다.)</li>
        <li><strong>mTab, mStep은 .introduce 전용 클래스를 사용</strong>한다. (예시: .mTab → .introTab / .mStep → div.step)</li>
    </ol>
    <ol class="zh_CN">
        <li>文件名设置为introduce.html。</li>
        <li>整个contents用&lt;div class="introduce $Area"&gt;套住。</li>
        <li>.mVisual与.introTab的width为可变型，其余contents用.gContent套住后固定width。</li>
        <li>image文件名按以下格式设置。tag_intro_Contentnumber(例：h3_intro_reward1.gif）</li>
        <li>共同指南区域：div.mVisual, h3, p.desc, div.info, div.step</li>
        <li>个别Contents区域：在css文件添加 .introduce.$Area。（可搜索introduce.html 文件作参考）</li>
        <li>mTab, mStep用.introduce专用class。（示例： .mTab → .introTab / .mStep → div.step)</li>
    </ol>
    <ol class="en_US">
        <li>The name of file should be introduce.html.</li>
        <li>Cover the total contents with the &lt;div class="introduce $Area"&gt;.</li>
        <li>The .mVisual and width of .introTab are variable, and the rest contents fix the width covered with the .gContent.</li>
        <li>The name of the image file should follow the guide; tag_intro contents number (example: h3_intro_reward1.gif)</li>
        <li>The area of common guide : div.mVisual, h3, p.desc, div.info, div.step</li>
        <li>Contents development area: Add the .introduce $Area in CSS file. (Refer through the introduce.html file search)</li>
        <li><strong>For the mTab and mSteop, use the specialized class for the .introduce.</strong> (example: .mTab → .introTab / .mStep → div.step)</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        /* 리워드 프로그램 관리 > 서비스 안내 */
        .rewardArea .mVisual { background:url("//img.echosting.cafe24.com/smartAdmin/img/promotion/bg_intro_reward1.jpg") no-repeat 0 100%; }
        .rewardArea .step { background:url("//img.echosting.cafe24.com/smartAdmin/img/promotion/bg_intro_reward5.png") no-repeat 0 0; }
        .rewardArea .step li.step1 { width:230px; margin:0 0 0 70px; }
        .rewardArea .step li.step2 { width:260px; }
        /* 서비스 신청 절차 */
        .introduce .step.vertical ol { zoom:1; overflow:hidden; margin:20px 0 0 160px; padding:0; font-size:12px; color:#7c8086; line-height:1.5; border:1px solid #e0e0e0; border-top:none; background-color:#fbfbfb; }
        .introduce .step.vertical ol > li {padding:30px 0 27px 20px; width:580px; border-top: 1px solid #e0e0e0; }
        .introduce .step.vertical ol > li { margin:0; }
        .introduce .step.vertical ol > li strong { font-size:0; line-height:0; text-indent:150%; }
            /* 카드/계좌이체 결제서비스 */
            .introduce.rewardArea .step.vertical { padding:0; background:url("//img.echosting.cafe24.com/ec/optional/pay/bg_pay_vstep.gif") no-repeat 0 0; }
            .introduce.rewardArea .step.vertical ol { line-height:1; }
            .introduce .step.vertical ol .step2 { padding-bottom:26px; }
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
    <h3>[ introduce + $Area ] 서비스소개  指南介绍</h3>
', 'html' => '
    <div class="headingArea">
        <div class="mTitle">
            <h1>페이지 대제목</h1>
        </div>
        <div class="mBreadcrumb">
            <ol>
                <li class="home">홈</li>
                <li class="now" title="현재 페이지">현재 페이지</li>
            </ol>
        </div>
    </div>

    <div class="introduce rewardArea">
        <div class="mVisual">
            <div class="copy">
                <h2>리워드 프로그램</h2>
                <p><strong>최적의 고객유치 프로모션 서비스입니다.</strong> 기존 고객(추천인)의 충성도를 높이고, 신규 고객(피추천인)의 구매율까지 높이는 고객유치 서비스 입니다.</p>
            </div>
            <p class="button">
                <a href="#none"><img src="//img.echosting.cafe24.com/smartAdmin/img/promotion/btn_intro_reward.gif" alt="리워드설정 바로가기" /></a>
            </p>
        </div>

        <div class="introTab">
            <ul>
                <li class="selected"><a href="#none">서비스안내</a></li>
                <li><a href="#none">FAQ</a></li>
            </ul>
        </div>
        <div class="gContent">
            <h3><img src="//img.echosting.cafe24.com/smartAdmin/img/promotion/h3_intro_reward1.gif" alt="리워드 프로그램이란?" /></h3>
            <p class="desc"><img src="//img.echosting.cafe24.com/ec/optional/txt_intro_cti5.gif" alt="LG 유플러스 CTI(구축형)서비스는 상담, 계약, 구축까지 모든 부분은 LG 유플러스에서 진행합니다." /></p>
            <div class="info">
                <p>리워드 프로그램이란 고객들의 어떤 행동에 대해 보상을 행하는 프로모션을 의미하며, 이미 많은 기업들이 활용하고 있고 검증된<br />마케팅 도구입니다. <strong>카페24도 기존의 적립금 등과 연계한 리워드 프로그램 기능을 제공하여 쇼핑몰의 홍보효과<br />극대화를 위해 적극 지원합니다.</strong> <a class="btnMore" href="#none">버튼</a></p>
            </div>
            <h3><img src="//img.echosting.cafe24.com/smartAdmin/img/promotion/h3_intro_reward3.gif" alt="서비스 운영 절차" /></h3>
            <div class="step">
                <ol>
                    <li class="step1">
                        <strong>리워드 프로그램 설정</strong>
                        <ul>
                            <li>기본 설정</li>
                            <li>지급 조건 설정</li>
                        </ul>
                    </li>
                    <li class="step2">
                        <strong>추천인 적립금 지급관리</strong>
                        <ul>
                            <li>추천인 적립급 지급</li>
                            <li>정액(원) / 구매금액대비(%) 지급</li>
                        </ul>
                    </li>
                    <li class="step3">
                        <strong>추천인/피추천인 조회 및 관리</strong>
                        <ul>
                            <li>추천인 및 피추천인 조회 / 관리</li>
                            <li>추천인 적립금 내역 확인</li>
                        </ul>
                    </li>
                </ol>
            </div>
            <h3><img src="//img.echosting.cafe24.com/ec/optional/pay/h3_pay_title5.gif" alt="서비스 신청 절차" /></h3>
            <p class="desc"><img src="//img.echosting.cafe24.com/ec/optional/pay/txt_pay_desc5.gif" alt="신청 절차를 알기 쉽게 안내해 드립니다." /></p>
            <div class="step vertical">
                <ol>
                    <li class="step1">
                        <strong>PG회사 선택</strong>
                        <img src="//img.echosting.cafe24.com/ec/optional/pay/txt_pay_vstep.gif" alt="PG회사 별 계약서와 지원범위를 확인하여 PG회사를 선택합니다." />
                    </li>
                    <li class="step2">
                        <strong>신청서작성</strong>
                        <img src="//img.echosting.cafe24.com/ec/optional/pay/txt_pay_vstep2.gif" alt="신청을 위하여 신청서를 작성합니다." />
                    </li>
                    <li class="step3">
                        <strong>신청서확인</strong>
                        <img src="//img.echosting.cafe24.com/ec/optional/pay/txt_pay_vstep3.gif" alt="작성한 신청서를 최종 한 번 체크합니다." />
                    </li>
                    <li class="step4">
                        <strong>가입비 납부</strong>
                        <img src="//img.echosting.cafe24.com/ec/optional/pay/txt_pay_vstep4.gif" alt="서비스 신청을 위해 가입비를 결제합니다." />
                    </li>
                    <li class="step5">
                        <strong>계약서발송/카드심사</strong>
                        <img src="//img.echosting.cafe24.com/ec/optional/pay/txt_pay_vstep5.gif" alt="계약 시 필요한 서류를 PG회사로 발송합니다." />
                    </li>
                    <li class="step6">
                        <strong>심사완료</strong>
                        <img src="//img.echosting.cafe24.com/ec/optional/pay/txt_pay_vstep6.gif" alt="승인이 완료되었습니다. 온라인전자결제 이용이 가능합니다." />
                    </li>
                </ol>
            </div>

            <h3><img src="/img.echosting.cafe24.com/ec/optional/h3_intro_mobile_app6.gif" alt="서비스 상품 구성 및 가격" /></h3>
            <div class="mBoard">
                <table border="1" summary="">
                    <caption>안드로이드 + iOS 결합 상품</caption>
                    <colgroup>
                        <col style="width:105px;" />
                        <col style="width:65px;" />
                        <col style="width:auto;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="col" rowspan="2" class="middle">txtDel + txtDiscount</th>
                            <th scope="col">국내몰</th>
                            <td><span class="txtDel">660,000원</span><strong class="txtDiscount">600,000원</strong></td>
                        </tr>
                        <tr>
                            <th scope="col">해외몰</th>
                            <td><span class="txtDel">660,000원</span><strong class="txtDiscount">600,000원</strong></td>
                        </tr>
                        <tr>
                            <th scope="col" rowspan="3" class="middle">서비스관리비용<br />(VAT포함)</th>
                            <th scope="col">1년</th>
                            <td>무료</td>
                        </tr>
                        <tr>
                            <th scope="col">1년 이후</th>
                            <td>별도 협의</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3><img src="//img.echosting.cafe24.com/smartAdmin/img/optional/h3_intro_livelinkon7.gif" alt="FAQ 자주묻는 질문" /></h3>
            <div class="faq">
                <h4>바로가기 아이콘 다운로드 및 설치가 정상 진행되지 않습니다.</h4>
                <div class="answer">
                    <p>
                        바로가기 아이콘 설치를 위한 어플리케이션은 본 서비스 제공사인 (주)티컴즈에서 제공하는 기술이므로,<br />
                        (주)티컴즈로 문의 및 기술지원 요청을 하셔야 합니다.
                    </p>
                    <h5>(주)티컴즈 문의처</h5>
                    <ul>
                        <li>
                            <span class="bullet"></span>
                            전화번호 : <strong>070-8722-7526</strong>
                        </li>
                        <li>
                            <span class="bullet"></span>
                            이메일 : <a href="mailto:cafe24@tcomms.co.kr">cafe24@tcomms.co.kr</a>
                        </li>
                    </ul>
                </div>
            </div>
            <dl class="faq">
                <dt>Q. 바로가기 아이콘 다운로드 및 설치가 정상 진행되지 않습니다.</dt>
                <dd>
                    바로가기 아이콘 설치를 위한 어플리케이션은 본 서비스 제공사인 (주)티컴즈에서 제공하는 기술이므로,<br />
                    (주)티컴즈로 문의 및 기술지원 요청을 하셔야 합니다.
                </dd>
                <dt>Q. 바로가기 아이콘 다운로드 및 설치가 정상 진행되지 않습니다.</dt>
                <dd>
                    바로가기 아이콘 설치를 위한 어플리케이션은 본 서비스 제공사인 (주)티컴즈에서 제공하는 기술이므로,<br />
                    (주)티컴즈로 문의 및 기술지원 요청을 하셔야 합니다.
                </dd>
            </dl>
        </div>
    </div>
')
);
?>