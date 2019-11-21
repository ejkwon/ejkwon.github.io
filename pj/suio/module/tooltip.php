<?php

// 모듈 전체 제목
$header_name = 'ToolTip';

// 모듈 상단 설명 (미사용시 주석처리)
// $header_desc = '';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .mBoard:first-child { margin-bottom:20px; }
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
                    <p class="info"><span class="date">2017.02.28</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[mTooltip > ico$NAME]</strong> 아이콘형 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.12.21</span><span class="writer">김도희</span></p>
                    <p class="title"><strong>[eTipHover]</strong> 버튼에 마우스오버 시 툴팁 노출 <a href="/smartAdmin/bm/pay/pg/use/utilization/inicis.html" class="btnLink" target="_blank">예시</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.05.09</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[이미지 미리보기]</strong> 도움말 추가</p>
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
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:150px;" />
                <col style="width:150px;" />
                <col style="width:200px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">中文</th>
                    <th scope="col" class="en_US">English</th>
                    <th scope="col">Class</th>
                    <th scope="col">설명/미리보기 <span class="zh_CN">说明/预览</span><span class="en_US">explanation/preview</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" rowspan="2">기본형</th>
                    <th scope="row" rowspan="2" class="zh_CN">基本型</th>
                    <th scope="row" rowspan="2" class="en_US">default</th>
                    <th scope="row">사용 순서<br /><span class="zh_CN">使用顺序</span><span class="en_US">process </span></th>
                    <td>
                        사용자가 <strong class="icoRequired">필수</strong> 에 대한 도움말로 오해하지 않도록,
                        [ 텍스트
                        <div class="mTooltip gSmall" style="outline:0 !important;">
                            <button type="button" class="icon eTip">도움말</button>
                        </div>
                        <strong class="icoRequired">필수</strong> ] 순으로 작성한다.
                        <div class="zh_CN">
                            为避免用户将<帮助>的对象误认为 <strong class="icoRequired">필수</strong>，应以
                            [ text
                            <div class="mTooltip gSmall" style="outline:0 !important;">
                                <button type="button" class="icon eTip">도움말</button>
                            </div>
                            <strong class="icoRequired">필수</strong> ] 的顺序编写。
                        </div>
                        <div class="en_US">
                            Write in the order from
                            [ text
                            <div class="mTooltip gSmall" style="outline:0 !important;">
                                <button type="button" class="icon eTip">도움말</button>
                            </div>
                            <strong class="icoRequired">필수</strong> ] so users do not misunderstand that the <strong class="icoRequired">필수</strong> is about the must.
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">사용 예시<br /><span class="zh_CN">使用示例</span><span class="en_US">example</span></th>
                    <td>
                        툴팁에 들어갈 수 있는 모든 컨텐츠는
                        <div class="mTooltip typeText gLarge">
                            <button type="button" class="text eTip">[예시]</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">예시) 14세 미만 회원가입 설정안내</strong>
                                    <strong class="title">예시) 기본 배송설정 사용</strong>
                                    <ul class="mList">
                                        <li>예시)"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                                    </ul>
                                    <strong class="title">예시) 기본 배송설정 사용</strong>
                                    <ul class="mList">
                                        <li>예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                                        <li>예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.
                                            <ol>
                                                <li>1) 예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시</li>
                                                <li>2) 예시</li>
                                                <li>3) 예시</li>
                                            </ol>
                                        </li>
                                    </ul>
                                    <strong class="title">기본 배송설정 사용</strong>
                                    <ol class="mList">
                                        <li>1. 예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                                        <li>2. 예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                                    </ol>
                                    <div class="mState">
                                        <div class="gRight">
                                            <p>(VAT 별도)</p>
                                        </div>
                                    </div>
                                    <div class="mBoard">
                                        <table border="1" summary="">
                                            <caption>샘플 단가표</caption>
                                            <colgroup>
                                                <col style="width:33%;" />
                                                <col style="width:33%;" />
                                                <col style="width:33%;" />
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th scope="col">중분류</th>
                                                    <th scope="col">소분류</th>
                                                    <th scope="col">샘플가격</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>자켓</td>
                                                    <td>-</td>
                                                    <td class="right">60,000원</td>
                                                </tr>
                                                <tr>
                                                    <td>점퍼</td>
                                                    <td>-</td>
                                                    <td class="right">70,000원</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="gImage center"><img src="//img.echosting.cafe24.com/ec/shop/img_basketdesign_tooltip.gif" alt="" /></div>
                                    <strong class="titleTip">설정 Tip</strong>
                                    <ul class="mList">
                                        <li>예시)"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>를 클릭하여 참고한다.
                        <div class="zh_CN">
                            对于ToolTip内可能存在的所有内容，可通过点击
                            <div class="mTooltip typeText gLarge">
                                <button type="button" class="text eTip">[使用示例]</button>
                                <div class="tooltip">
                                    <div class="content">
                                        <strong class="titleEm">예시) 14세 미만 회원가입 설정안내</strong>
                                        <strong class="title">예시) 기본 배송설정 사용</strong>
                                        <ul class="mList">
                                            <li>예시)"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                                        </ul>
                                        <strong class="title">예시) 기본 배송설정 사용</strong>
                                        <ul class="mList">
                                            <li>예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                                            <li>예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.
                                                <ol>
                                                    <li>1) 예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시</li>
                                                    <li>2) 예시</li>
                                                    <li>3) 예시</li>
                                                </ol>
                                            </li>
                                        </ul>
                                        <strong class="title">기본 배송설정 사용</strong>
                                        <ol class="mList">
                                            <li>1. 예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                                            <li>2. 예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                                        </ol>
                                        <div class="mState">
                                            <div class="gRight">
                                                <p>(VAT 별도)</p>
                                            </div>
                                        </div>
                                        <div class="mBoard">
                                            <table border="1" summary="">
                                                <caption>샘플 단가표</caption>
                                                <colgroup>
                                                    <col style="width:33%;" />
                                                    <col style="width:33%;" />
                                                    <col style="width:33%;" />
                                                </colgroup>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">중분류</th>
                                                        <th scope="col">소분류</th>
                                                        <th scope="col">샘플가격</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>자켓</td>
                                                        <td>-</td>
                                                        <td class="right">60,000원</td>
                                                    </tr>
                                                    <tr>
                                                        <td>점퍼</td>
                                                        <td>-</td>
                                                        <td class="right">70,000원</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="gImage center"><img src="//img.echosting.cafe24.com/ec/shop/img_basketdesign_tooltip.gif" alt="" /></div>
                                    </div>
                                    <button type="button" class="close eClose">닫기</button>
                                    <span class="edge"></span>
                                </div>
                            </div>来参考。
                        </div>
                        <div class="en_US">
                            All contents that can be included in the tool tip can be referred by clicking the
                            <div class="mTooltip typeText gLarge">
                                <button type="button" class="text eTip">[example]</button>
                                <div class="tooltip">
                                    <div class="content">
                                        <strong class="titleEm">예시) 14세 미만 회원가입 설정안내</strong>
                                        <strong class="title">예시) 기본 배송설정 사용</strong>
                                        <ul class="mList">
                                            <li>예시)"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                                        </ul>
                                        <strong class="title">예시) 기본 배송설정 사용</strong>
                                        <ul class="mList">
                                            <li>예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                                            <li>예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.
                                                <ol>
                                                    <li>1) 예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시예시</li>
                                                    <li>2) 예시</li>
                                                    <li>3) 예시</li>
                                                </ol>
                                            </li>
                                        </ul>
                                        <strong class="title">기본 배송설정 사용</strong>
                                        <ol class="mList">
                                            <li>1. 예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                                            <li>2. 예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                                        </ol>
                                        <div class="mState">
                                            <div class="gRight">
                                                <p>(VAT 별도)</p>
                                            </div>
                                        </div>
                                        <div class="mBoard">
                                            <table border="1" summary="">
                                                <caption>샘플 단가표</caption>
                                                <colgroup>
                                                    <col style="width:33%;" />
                                                    <col style="width:33%;" />
                                                    <col style="width:33%;" />
                                                </colgroup>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">중분류</th>
                                                        <th scope="col">소분류</th>
                                                        <th scope="col">샘플가격</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>자켓</td>
                                                        <td>-</td>
                                                        <td class="right">60,000원</td>
                                                    </tr>
                                                    <tr>
                                                        <td>점퍼</td>
                                                        <td>-</td>
                                                        <td class="right">70,000원</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="gImage center"><img src="//img.echosting.cafe24.com/ec/shop/img_basketdesign_tooltip.gif" alt="" /></div>
                                    </div>
                                    <button type="button" class="close eClose">닫기</button>
                                    <span class="edge"></span>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="3">도움말 사이즈 예시</th>
                    <th scope="row" rowspan="3" class="zh_CN"><帮助>size示例</th>
                    <th scope="row" rowspan="3" class="en_US">size example of Help</th>
                    <th>.mTooltip.gSmall</th>
                    <td>
                        <div class="mTooltip gSmall">
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
                    </td>
                </tr>
                <tr>
                    <th>.mTooltip.gMedium</th>
                    <td>
                        <div class="mTooltip gMedium">
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
                    </td>
                </tr>
                <tr>
                    <th>.mTooltip.gLarge</th>
                    <td>
                        <div class="mTooltip gLarge">
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
                    </td>
                </tr>
                <tr class="del">
                    <th scope="row"> 법적고지형</th>
                    <th scope="row" class="zh_CN">法定公告型</th>
                    <th scope="row" class="en_US">legal notice type</th>
                    <th>.mTooltip.typeLaw</th>
                    <td>
                        <div class="mTooltip typeLaw gSmall">
                            <button type="button" class="icon eTip">법적고지</button>
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
                        <p class="txtWarn"><strong>2017년 3월 이후로 아이콘형으로 대체</strong></p>
                    </td>
                </tr>
                <tr class="del">
                    <th scope="row">디자인설정형</th>
                    <th scope="row" class="zh_CN">样式设计型</th>
                    <th scope="row" class="en_US">design setting type</th>
                    <th>.mTooltip.typeDesign</th>
                    <td>
                        <div class="mTooltip typeDesign gMedium">
                            <button type="button" class="icon eTip">디자인설정 안내</button>
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
                        <p class="txtWarn"><strong>2017년 3월 이후로 아이콘형으로 대체</strong></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="3">아이콘형</th>
                    <th scope="row" rowspan="3" class="zh_CN">icon型</th>
                    <th scope="row" rowspan="3" class="en_US">icon type</th>
                    <th rowspan="3">.mTooltip > .ico$NAME</th>
                    <td>
                        <div class="mTooltip gSmall">
                            <button type="button" class="icoDesign eTip">디자인 설정안내</button>
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
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mTooltip gSmall">
                            <button type="button" class="txtSFIX icoRegisterFail eTip">송장등록실패</button>
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
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mTooltip gSmall">
                            <button type="button" class="imgSFIX icoWarn eTip">경고 안내</button>
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
                        </div> 경고성 안내 도움말
                    </td>
                </tr>
                <tr>
                    <th scope="row">텍스트버튼형</th>
                    <th scope="row" class="zh_CN">text 按钮型</th>
                    <th scope="row" class="en_US">text button type</th>
                    <th>.mTooltip > .text</th>
                    <td>
                        <div class="mTooltip gLarge">
                            <button type="button" class="text eTip">[텍스트버튼형]</button>
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
                    </td>
                </tr>
                <tr class="del">
                    <th scope="row">텍스트버튼형</th>
                    <th scope="row" class="zh_CN">text 按钮型</th>
                    <th scope="row" class="en_US">text button type</th>
                    <th>.mTooltip.typeText</th>
                    <td>
                        <div class="mTooltip typeText gLarge">
                            <button type="button" class="text eTip">[텍스트버튼형]</button>
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
                        <p class="txtWarn"><strong>2017년 3월 이후로 typeText 사용안함</strong></p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">팝업형</th>
                    <th scope="row" class="zh_CN">弹窗型</th>
                    <th scope="row" class="en_US">pop up type</th>
                    <th>a target="_blank"</th>
                    <td>
                        <div class="mTooltip">
                            <a class="icon" title="새창 열림" target="_blank" href="#none">도움말</a>
                        </div>
                        팝업이나 새창으로 도움말을 제공할때 사용된다. 클릭시 레이어의 도움말이 뜨지 않는다.<br />
                        <div class="mTooltip">
                            <a class="icon" title="새창 열림" target="_blank" href="#none">도움말</a>
                        </div>
                        <span class="zh_CN">以弹窗或新窗口提供<帮助>时使用,点击时layer的<帮助>不弹出。</span>
                        <span class="en_US">It is used to provide the Help with the Help pop up or a new window. When click, the Help text of layer is not shown.</span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">이미지 미리보기<br />(단순 진열형)</th>
                    <th scope="row" class="zh_CN">预览图片<br />(单一陈列型)</th>
                    <th scope="row" class="en_US">image preview<br />(simple display type)</th>
                    <th>.gImage<br />.gImage.center<br />.gImage.left</th>
                    <td>
                        <div class="mTooltip gLarge">
                            <button type="button" class="icon eTip">도움말</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">gImage 가이드</strong>
                                    <ul class="mList">
                                        <li>이미지와 텍스트의 조합등 여러 경우의 수가 있다. 퍼블리싱하면서 가장 보기 좋은 형태로 퍼블리싱한다.</li>
                                    </ul>
                                    <strong class="title">gImage</strong>
                                    <ul class="mList">
                                        <li>이미지 사이즈가 화면폭에 적당히 들어가면 gImage만 사용한다.</li>
                                    </ul>
                                    <div class="gImage">
                                        <img src="//img.echosting.cafe24.com/ec/shop/img_basketdesign_tooltip.gif" alt="" />
                                    </div>
                                    <strong class="title">gImage + center</strong>
                                    <ul class="mList">
                                        <li>화면내에서 가운데 정렬을 하고 싶을때 center를 추가한다.</li>
                                    </ul>
                                    <div class="gImage center">
                                        <img src="//img.echosting.cafe24.com/ec/shop/img_basketdesign_tooltip.gif" alt="" />
                                    </div>
                                    <strong class="title">gImage + left</strong>
                                    <ul class="mList">
                                        <li>화면내에서 제목 바로 아래 들어갈때 블릿영역과 라인을 맞추고 싶은 경우.</li>
                                    </ul>
                                    <div class="gImage left">
                                        <img src="//img.echosting.cafe24.com/ec/product/img_productOption_tooltip.jpg" alt="" />
                                    </div>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                        이미지를 추가할때 gImage를 사용한다. 상세 화면은 mTooltip을 클릭하여 확인한다.<br />

                        <div class="mTooltip gLarge">
                            <button type="button" class="icon eTip">도움말</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">gImage 가이드</strong>
                                    <ul class="mList">
                                        <li>可能会出现图片和字段的组合。以最美观的形式进行publishing即可</li>
                                    </ul>
                                    <strong class="title">gImage</strong>
                                    <ul class="mList">
                                        <li>图片的大小跟父级的大小适中，只需用gImage。</li>
                                    </ul>
                                    <div class="gImage">
                                        <img src="//img.echosting.cafe24.com/ec/shop/img_basketdesign_tooltip.gif" alt="" />
                                    </div>
                                    <strong class="title">gImage + center</strong>
                                    <ul class="mList">
                                        <li>想给此图片居中，请使用center</li>
                                    </ul>
                                    <div class="gImage center">
                                        <img src="//img.echosting.cafe24.com/ec/shop/img_basketdesign_tooltip.gif" alt="" />
                                    </div>
                                    <strong class="title">gImage + left</strong>
                                    <ul class="mList">
                                        <li>图片正好在题目的下方，且想使他们对齐的时候</li>
                                    </ul>
                                    <div class="gImage left">
                                        <img src="//img.echosting.cafe24.com/ec/product/img_productOption_tooltip.jpg" alt="" />
                                    </div>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                        <span class="zh_CN">"追加图片时，使用gImage。详细页面，点击mTooltip进行确认。"</span>
                        <span class="en_US">Use the gImage when adding an image of the Help. The detailed screen can be checked by clicking the mTooltip.</span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">이미지 미리보기<br />(글자 조합형)</th>
                    <th scope="row" class="zh_CN">预览图片<br />(文字混合型)</th>
                    <th scope="row" class="en_US">image preview<br />(text combination type)</th>
                    <th>.gPreview >.text + .thumb</th>
                    <td>
                        <div class="mTooltip gLarge">
                            <button type="button" class="icon eTip">도움말</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">대제목</strong>
                                    <div class="gPreview">
                                        <div class="text">
                                            <strong class="title">중제목</strong>
                                            <ul class="mList">
                                                <li>목록형 내용</li>
                                                <li>목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우</li>
                                                <li>목록형 내용</li>
                                            </ul>
                                        </div>
                                        <div class="thumb">
                                            <img src="//img.echosting.cafe24.com/ec/product/img_productOption_tooltip.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                        내용과 이미지가 조합된 형태, 툴팁에 사용되는 이미지 파일명은 반드시 img_tooltip_으로 시작한다.<br />

                        <div class="mTooltip gLarge">
                            <button type="button" class="icon eTip">도움말</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">대제목</strong>
                                    <div class="gPreview">
                                        <div class="text">
                                            <strong class="title">중제목</strong>
                                            <ul class="mList">
                                                <li>목록형 내용</li>
                                                <li>목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우, 목록형 내용이 긴 경우</li>
                                                <li>목록형 내용</li>
                                            </ul>
                                        </div>
                                        <div class="thumb">
                                            <img src="//img.echosting.cafe24.com/ec/product/img_productOption_tooltip.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                        <span class="zh_CN">内容与图片相结合的形式，用于ToolTip的图片文件名必须以img_tooltip_开头。</span>
                        <span class="en_US">The combined type of Help contents and their images must begin with the img_tooltip for the title of image file.</span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">이미지 미리보기<br />(이미지 나열형)</th>
                    <th scope="row" class="zh_CN">预览图片<br />(图片罗列型)</th>
                    <th scope="row" class="en_US">image preview<br />(image list type)</th>
                    <th>.gPreview > li</th>
                    <td>
                        <div class="mTooltip">
                            <button type="button" class="icon eTip">도움말</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">대제목</strong>
                                    <ul class="gPreview">
                                        <li>
                                            <strong class="title">중제목</strong>
                                            <img src="//img.echosting.cafe24.com/ec/board/review/img_add_review.gif" alt="" />
                                        </li>
                                        <li>
                                            <strong class="title">중제목</strong>
                                            <img src="//img.echosting.cafe24.com/ec/board/review/img_add_review.gif" alt="" />
                                        </li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                        여러 이미지가 나열되는 형태 (이미지 사이즈가 툴팁에 맞지 않는 경우 gLarge를 생략할 수 있다.) <br />

                        <div class="mTooltip">
                            <button type="button" class="icon eTip">도움말</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">대제목</strong>
                                    <ul class="gPreview">
                                        <li>
                                            <strong class="title">중제목</strong>
                                            <img src="//img.echosting.cafe24.com/ec/board/review/img_add_review.gif" alt="" />
                                        </li>
                                        <li>
                                            <strong class="title">중제목</strong>
                                            <img src="//img.echosting.cafe24.com/ec/board/review/img_add_review.gif" alt="" />
                                        </li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                        <span class="zh_CN">罗列多张图片的形式（如图片尺寸与ToolTip不相符时，可省略gLarge。）</span>
                        <span class="en_US">The type that list various images (in case the size of image do not fit with the tooltip, the gLarge can be omitted.)</span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">멀티라인형</th>
                    <th scope="row" class="zh_CN">多线型</th>
                    <th scope="row" class="en_US">multi line type</th>
                    <th>.gTooltip &gt; span +.mTooltip</th>
                    <td>
                        thead내의 th의 폭을 줄여야 할때, 제목이 2줄 이상되는 경우
                        <div class="mTooltip">
                            <a class="icon" title="새창 열림" target="_blank" href="#none">도움말</a>
                        </div> 아이콘의 중앙정렬을 위해 사용한다.
                        <div class="zh_CN">
                            需减少thead中th的长度时，如遇2行以上标题，则用于将
                            <div class="mTooltip">
                                <a class="icon" title="새창 열림" target="_blank" href="#none">도움말</a>
                            </div> icon向中央对齐。
                        </div>
                        <div class="en_US">
                            In case the width of the th in the thead should be reduced, it is used for the central alignment of the
                            <div class="mTooltip">
                                <a class="icon" title="새창 열림" target="_blank" href="#none">도움말</a>
                            </div> icon if the lines of title is more than 2.
                        </div>
                        <div class="mBoard typeFixed" style="margin-top:5px;">
                            <table border="1">
                                <colgroup>
                                    <col style="width:80px;" />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="gTooltip">
                                                <span>좁은폭<br />정렬</span>
                                                <div class="mTooltip gMedium">
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
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>예시</td>
                                    </tr>
                                <tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">툴팁이 잘릴 경우</th>
                    <th scope="row" class="zh_CN">ToolTip被剪切时</th>
                    <th scope="row" class="en_US">in case tooltip is cut off</th>
                    <th>.eTipScroll</th>
                    <td>
                        부모요소가 overflow 속성으로 scroll을 가질때 버튼의 class를 <strong>.eTip</strong>이 아닌 <strong>.eTipScroll</strong>를 사용한다.<br />
                        <span class="zh_CN">主因素因overflow属性具备scroll时，按钮的class不应使用 <strong>.eTip</strong>，而应使用 <strong>.eTipScroll</strong>。</span>
                        <span class="en_US">The <strong>.eTipScroll</strong> is used, not the <strong>.eTip</strong>, in case the parent factor has the scroll as an overflow property.</span><br />
                        ※ &lt;button type="button" class="icon <strong class="txtWarn">eTipScroll</strong>"&gt;도움말&lt;/button&gt;
                        <div style="overflow:scroll; width:500px; height:50px; margin:5px 0 0; padding:10px; border:5px solid gray;">
                            예시
                            <div class="mTooltip gSmall">
                                <button type="button" class="icon eTipScroll">도움말</button>
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
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">버튼에 마우스오버시 <br /> 툴팁 노출</th>
                    <th scope="row" class="zh_CN">鼠标移至按钮之上时<br />出现 tooltip</th>
                    <th scope="row" class="en_US">번역필요</th>
                    <th>.eTipHover</th>
                    <td>
                        버튼에 마우스 오버시에 툴팁이 노출되어야 할 경우 <strong>.eTip</strong>이 아닌 <strong>.eTipHover</strong>를 사용한다.<br />
                        <span class="zh_CN">鼠标移入按钮时出现toolTip，类名应是 <strong>.eTipHover</strong>， 而不是 <strong>.eTip</strong>。</span>
                        <span class="en_US">번역필요</span><br />
                        ※ &lt;button type="button" class="icon <strong class="txtWarn">eTipHover</strong>"&gt;도움말&lt;/button&gt;
                        <div style="position:relative;">
                            예시
                            <div class="mTooltip gSmall">
                                <button type="button" class="icon eTipHover">도움말</button>
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
                            <div style="position:absolute; top:0; right:0;">
                                예시
                                <div class="mTooltip gMedium">
                                    <button type="button" class="icon eTipHover">도움말</button>
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
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>Tooltip View</h3>
    <ol>
        <li>ol 구조는 숫자를 직접 입력한다. </li>
        <li>툴팁에 사용되는 이미지 파일명은 반드시 img_tooltip_으로 시작한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>ol 结构直接输入数字。</li>
        <li>用于ToolTip的图片文件名必须以img_tooltip_开头。</li>
    </ol>
    <ol class="en_US">
        <li>Numbers can be inserted directly in the structure of ol.</li>
        <li>The name of image file should begin with the img_tooltip_ for the tool tip.</li>
    </ol>
', 'html' => 
    '<div class="mTooltip gLarge">
        <button type="button" class="icon eTip">도움말</button>
        <div class="tooltip">
            <div class="content">
                <strong class="titleEm">예시) 14세 미만 회원가입 설정안내</strong>
                <strong class="title">예시) 기본 배송설정 사용</strong>
                <ul class="mList">
                    <li>예시)"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                </ul>
                <strong class="title">예시) 기본 배송설정 사용</strong>
                <ul class="mList">
                    <li>예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                    <li class="empty gIndent">
                        <ol>
                            <li>1) li안에서 "-" list-style없이 ol을 노출 시키고 싶을 경우 empty와 gIndent를 함께 사용한다. </li>
                            <li>2) 예시
                                <ol>
                                    <li>1) ol예시 3depth</li>
                                    <li>2) ol예시 3depth</li>
                                    <li>3) ol예시 3depth</li>
                                </ol>
                            </li>
                            <li>3) 예시
                                <ul>
                                    <li>ul예시 3depth</li>
                                    <li>ul예시 3depth</li>
                                    <li>ul예시 3depth</li>
                                </ul>
                            </li>
                        </ol>
                    </li>
                </ul>
                <strong class="title">기본 배송설정 사용</strong>
                <ol class="mList">
                    <li>1. 예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.
                        <ol>
                            <li>1) ol예시 3depth
                                <ul>
                                    <li>ul예시 3depth</li>
                                    <li>ul예시 3depth</li>
                                    <li>ul예시 3depth</li>
                                </ul>
                            </li>
                            <li>2) ol예시 3depth</li>
                            <li>3) ol예시 3depth</li>
                        </ol>
                    </li>
                    <li>2. 예시) 14세미만 고객의 회원가입 시 필요한 정책을 설정합니다.</li>
                </ol>
                <div class="mState">
                    <div class="gRight">
                        <p>(VAT 별도)</p>
                    </div>
                </div>
                <div class="mBoard">
                    <table border="1" summary="">
                        <caption>샘플 단가표</caption>
                        <colgroup>
                            <col style="width:33%;" />
                            <col style="width:33%;" />
                            <col style="width:33%;" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">중분류</th>
                                <th scope="col">소분류</th>
                                <th scope="col">샘플가격</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>자켓</td>
                                <td>-</td>
                                <td class="right">60,000원</td>
                            </tr>
                            <tr>
                                <td>점퍼</td>
                                <td>-</td>
                                <td class="right">70,000원</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="gImage center"><img src="//img.echosting.cafe24.com/ec/shop/img_basketdesign_tooltip.gif" alt="" /></div>
                <strong class="titleTip">설정 Tip</strong>
                <ul class="mList">
                    <li>예시)"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.</li>
                </ul>
                <div class="gPreview">
                    <div class="text">
                        <strong class="title">중제목</strong>
                        <ul class="mList">
                            <li>내용</li>
                            <li>내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용내용</li>
                            <li>내용내용내용내용내용내용내용</li>
                        </ul>
                    </div>
                    <div class="thumb">
                        <img src="//img.echosting.cafe24.com/ec/product/img_productOption_tooltip.jpg" alt="" />
                    </div>
                </div>
            </div>
            <button type="button" class="close eClose">닫기</button>
            <span class="edge"></span>
        </div>
    </div>
'), array(
'desc' => '
    <h3>EC솔루션 전용 Tooltip</h3>
    <ol>
        <li>EC솔루션 tooltip은 ECHelp 운영툴에서 관리되므로 작업하지 않는다.</li>
        <li>div.cTip안에 상속되며 mList의 구조가 일반 tooltip과 다르므로 아래 구조를 참고한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>번역필요</li>
        <li>번역필요</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
        <li>번역필요</li>
    </ol>
', 'html' =>
'<div class="cTip">
    <div class="mTooltip gLarge">
        <button type="button" class="icon eTip">도움말</button>
        <div class="tooltip">
            <div class="content">
                <strong class="titleEm">대제목</strong>
                <strong class="title">중제목</strong>
                <ul class="mList">
                    <li>내용</li>
                    <li>내용</li>
                </ul>
                <ol class="mList">
                    <li>ol 예시 1depth</li>
                </ol>
                <ol class="mList">
                    <li>
                        <ol class="mList">
                            <li>ol 예시 2depth</li>
                        </ol>
                    </li>
                </ol>
                <ol class="mList">
                    <li>
                        <ol class="mList">
                            <li>
                                <ol class="mList">
                                    <li>ol 예시 3depth</li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                </ol>

                <ul class="mList">
                    <li>ul 예시 1depth</li>
                </ul>
                <ol class="mList">
                    <li>
                        <ul class="mList">
                            <li>ul 예시 2depth</li>
                        </ul>
                    </li>
                </ol>
                <ol class="mList">
                    <li>
                        <ol class="mList">
                            <li>
                                <ul class="mList">
                                    <li>ul 예시 3depth</li>
                                </ul>
                            </li>
                        </ol>
                    </li>
                </ol>

                <div class="gImage center"><img src="//img.echosting.cafe24.com/ec/shop/img_basketdesign_tooltip.gif" alt="" /></div>
                <strong class="titleTip">설정 Tip</strong>
                <ul class="mList">
                    <li>예시)"상점관리 &gt; 배송 및 반품설정 &gt; 배송 및 반품설정"에서 설정한 기본배송비가 적용됩니다.<a href="#none" class="btnLink" target="_blank"><strong>[바로가기 <em class="icoLink"></em>]</strong></a></li>
                </ul>
            </div>
            <button type="button" class="close eClose">닫기</button>
            <span class="edge"></span>
        </div>
    </div>
</div>
')
);
?>