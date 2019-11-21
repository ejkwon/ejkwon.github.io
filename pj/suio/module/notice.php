<?php

// 모듈 전체 제목
$header_name = 'mNotice';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = '';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <link rel="stylesheet" type="text/css" href="/css/notice_ec.css">
    <style type="text/css">
        .mNotice, .mNoticeEc { display:block; position:relative; left:0; top:0 !important; margin-left:0; }
        .mNotice.gLarge { margin-left:0; }
        .grid { float:left; margin:0 20px 0 0; }
        .clear { overflow:hidden; }
        .clear:last-child { margin-top:20px; }
        .preview strong { float:left; height:50px; margin:0 -80px 15px !important; }

        .mBox h4 { margin:10px 0 0; }
        .mBox h4:first-child { margin:0; }
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
                    <p class="info"><span class="date">2016.07.20</span><span class="writer">김도희</span></p>
                    <p class="title"><strong>.box.raw</strong> 법적고지 추가</p>
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
    <h3>[mNoticeEc]</h3>
    <ol>
        <li>EC 몰어드민 전용팝업이며, HTML은 애드관리자형으로 제작한다. 필히 아래 예시화면 중, [버튼]을 클릭하여 예시 html 로 제작한다. </li>
        <li>업그레이드 소식(.typeUpgrade)과 필독 공지(.typeRequired) 타입으로 분리된다</li>
        <li>대분류 메뉴에 따라 아이콘을 적용해준다</li>
        <li>.info 에서 divide는 구분선이 있을 경우에만 사용한다.</li>
        <li>notice.css는 &lt;!-- 소스 적용 --&gt; 이라는 주석 하단에 링크시키도록 한다. (&lt;head&gt;에 추가하지 않음)</li>
    </ol>
    <ol class="zh_CN">
        <li>是EC Mall admin专用弹窗，HTML须用专门管理广告/弹窗的页面制作。请务必在下列示例页面中点击[按钮], 制作为示例html。</li>
        <li>分为新消息（.typeUpgrade)与必读公告（.typeRequired)类型。</li>
        <li>根据大分类菜单适用icon。</li>
        <li>在.info，仅在有区分线时使用divide。</li>
        <li>notice.css在注释 &lt;!-- 适用代码 --&gt; 的下端建立链接。（不添加在&lt;head&gt; 中）</li>
    </ol>
    <ol class="en_US">
        <li>It is a specialized pop up for the EC Mall Admin, which has HTML to be produced in the Ad manager type. It is required to click the [button] to produce in the example html.</li>
        <li>The types are divided to an upgrade news and a must-read announcement.</li>
        <li>Icons should be applied followed by the classified menu.</li>
        <li>Use the divide in the .info if there is a division line.</li>
        <li>The notice.css should be linked in the lower note &lt;!-- source apply --&gt;. (do not add it in the &lt;head&gt;)</li>
    </ol>
    <div class="mBox typeBg">
        <h4>애드관리자란?</h4>
        <p>카페24의 광고/팝업 전용 관리 사이트이다. </p>

        <h4>애드관리자 html의 특징</h4>
        <ol>
            <li>자세히보기 a태그에 href="#none" name="admngPopImage" 추가 / href="#none"</li>
            <li>오늘하루 이창 열지 않음 - __FOOTER__ 로 치환</li>
            <li>닫기버튼 onclick="new nDrag().close2(admngLayerWrapper); return false;" 추가</li>
            <li>h1에 이동을 위한 스크립트와 css 추가</li>
        </ol>

        <h4>ERP html의 특징</h4>
        <p>일반형과 footer와 [공지사항 닫기]버튼이 다르다. (일반형 footer에서 footer &gt; mButton 삭제, [공지사항 닫기]버튼 삭제)</p>

        <h4 class="zh_CN">广告管理者是什么？</h4>
        <p class="zh_CN">是cafe24广告/弹窗专用管理网站。</p>

        <h4 class="zh_CN">广告管理者html的特征</h4>
        <ol class="zh_CN">
            <li>在“查看详情a标签”添加href="#none" name="admngPopImage" 。</li>
            <li>今日不再提醒替换为__FOOTER__。</li>
            <li>添加关闭按钮onclick="new nDrag().close2(admngLayerWrapper); return false;" 。</li>
            <li>为方便移动，在h1添加script和css。</li>
            <li>广告管理者的 查看详情连接无须添加，标准型，ERP的 查看详情连接需要添加。</li>
        </ol>

        <h4 class="en_US">what is the Ad manager?</h4>
        <p class="en_US">It is a specialized site for an ad/pop-up management of Café24.</p>

        <h4 class="en_US">Characteristic of the Ad Manager’s html.</h4>
        <ol class="en_US">
            <li>Add href="#none" name="admngPopImage" to the a tag of detailed view / href="#none"</li>
            <li>Do not open this window today. Substitute to - __FOOTER__ .</li>
            <li>Add the close button onclick="new nDrag().close2(admngLayerWrapper); return false;".</li>
            <li>Add a script and css to move to the h1.</li>
        </ol>

        <h4>ERP html的特征</h4>
        <p>跟一般型比较，footer和[공지사항 닫기]按钮不同。(一般型的footer上，去掉 footer &gt; mButton 和[공지사항 닫기]按钮)</p>
    </div>
', 'html' => '
    <div class="clear">
        <div class="grid">
            <!-- 소스 적용 -->
            <div class="mNoticeEc typeRequired gLarge" style="top:100px;">
                <h1><strong class="required">[필독]</strong><span>의무화 안내</span></h1>
                <span class="flag">notice</span>
                <p class="info">최고책임자를 지정하고 신고하도록 의무화한 제도입니다.</p>
                <div class="content">
                    <ul class="info divide">
                        <li>
                            <strong class="title">안내기간 :</strong>
                            <span class="text">2013-02-06 (수) ~ 2013-02-19 (화)</span>
                        </li>
                        <li>
                            <strong class="title">변경일 :</strong>
                            <span class="text"><strong class="txtWarn">2013-02-20 (수)</strong></span>
                        </li>
                        <li>
                            <strong class="title">변경내용 :</strong>
                            <span class="text">변경 전 &rarr; 변경 후</span>
                        </li>
                        <li>
                            <strong class="title">업데이트 내용</strong>
                            <p class="text">적립금 금액의 좌/우로 자유롭게 표시할 수 있다. </p>
                        </li>
                    </ul>
                    <ul class="info bullet divide">
                        <li>블릿만 있는 리스트 <a href="#none" class="btnNoticeLink">바로가기</a></li>
                        <li>블릿만 있는 리스트</li>
                    </ul>

                    <div class="info">
                        <h2>제목 <span>보조제목</span></h2>
                        <p class="desc">문단형 부가 설명</p>
                        <ul class="desc">
                            <li>- 목록형 부가 설명</li>
                            <li>- 목록형 부가 설명</li>
                        </ul>
                        <table border="1" summary="" class="table">
                            <caption>메뉴위치 및 메뉴명 변경</caption>
                            <colgroup>
                                <col style="width:110px;" />
                                <col style="width:auto;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row">제목</th>
                                    <td>내용 <a href="#none" class="txtNoticeLink">[링크]</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="box">
                        <h2 class="clear"><span class="icoLaw">법적고지</span></h2>
                        <p class="desc"><strong>법적고지 설명입니다.</strong></p>
                        <ul class="desc">
                            <li>- 법적고지 설명입니다.</li>
                        </ul>
                    </div>

                    <ul class="desc">
                        <li>- 목록형 부가 설명</li>
                        <li>- 목록형 부가 설명</li>
                    </ul>
                    <p class="desc">- 문단형 부가 설명</p>
                    <div class="mButton">
                        <a href="/suio/module/notice_required.html" class="btnEm gFlex" target="_blank"><span>일반형, ERP용 HTML</span></a>
                    </div>
                    <div class="mButton">
                        <a href="/suio/module/notice_required_admng.html" class="btnEm" target="_blank"><span>애드관리자 HTML</span></a>
                    </div>
                    <p class="more"><a href="#none" name="admngPopImage">자세히보기</a></p>
                </div>
                <!-- 일반형 -->
                <div class="footer">
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 오늘 하루 열지 않음</label>
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 더 이상 열지 않음</label>
                    <div class="mButton">
                        <a href="#none" class="btnNormal"><span>닫기</span></a>
                    </div>
                </div>
                <button type="button" class="close">공지사항 닫기</button>
                <!-- //일반형 -->
                <!-- ERP용 -->
                <div class="footer">
                    <label class="gLabel"><input class="fChk" type="checkbox" /> 오늘 하루 열지 않음</label>
                </div>
                <!-- //ERP용 -->
            </div>
            <!-- //소스 적용 -->
        </div>

        <div class="grid">
            <!-- 소스 적용 -->
            <div class="mNoticeEc typeUpgrade" style="top:100px;">
                <h1><strong class="community">[게시판관리]</strong><span>기능 업그레이드</span></h1>
                <span class="flag">upgrade</span>
                <p class="info">쇼핑몰이 업그레이드 되었습니다.</p>
                <div class="content">
                    <ul class="info divide">
                        <li>
                            <strong class="title">안내기간 :</strong>
                            <span class="text">2013-02-06 (수) ~ 2013-02-19 (화)</span>
                        </li>
                        <li>
                            <strong class="title">변경일 :</strong>
                            <span class="text"><strong class="txtWarn">2013-02-20 (수)</strong></span>
                        </li>
                        <li>
                            <strong class="title">변경내용 :</strong>
                            <span class="text">변경 전 &rarr; 변경 후</span>
                        </li>
                        <li>
                            <strong class="title">업데이트 내용</strong>
                            <p class="text">적립금 금액의 좌/우로 자유롭게 표시할 수 있다. </p>
                        </li>
                    </ul>

                    <ul class="info bullet divide">
                        <li>블릿만 있는 리스트 <a href="#none" class="btnNoticeLink">바로가기</a></li>
                        <li>블릿만 있는 리스트</li>
                    </ul>

                    <div class="info">
                        <h2>제목 <span>보조제목</span></h2>
                        <p class="desc">문단형 부가 설명</p>
                        <ul class="desc">
                            <li>- 목록형 부가 설명</li>
                            <li>- 목록형 부가 설명</li>
                        </ul>
                        <table border="1" summary="" class="table">
                            <caption>메뉴위치 및 메뉴명 변경</caption>
                            <colgroup>
                                <col style="width:110px;" />
                                <col style="width:auto;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row">제목</th>
                                    <td>내용 <a href="#none" class="txtNoticeLink">링크</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="box">
                        <h2 class="clear"><span class="icoLaw">법적고지</span></h2>
                        <p class="desc"><strong>법적고지 설명입니다.</strong></p>
                        <ul class="desc">
                            <li>- 법적고지 설명입니다.</li>
                        </ul>
                    </div>

                    <ul class="desc">
                        <li>- 목록형 부가 설명</li>
                        <li>- 목록형 부가 설명</li>
                    </ul>
                    <p class="desc">- 문단형 부가 설명</p>

                    <div class="mButton">
                        <a href="/suio/module/notice_upgrade.html" class="btnEm gFlex" target="_blank"><span>일반형, ERP용 HTML</span></a>
                    </div>
                    <div class="mButton">
                        <a href="/suio/module/notice_upgrade_admng.html" class="btnEm" target="_blank"><span>애드관리자 HTML</span></a>
                    </div>
                    <p class="more"><a href="#none">자세히보기</a></p>
                </div>
                <!-- 일반형 -->
                <div class="footer">
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 오늘 하루 열지 않음</label>
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 더 이상 열지 않음</label>
                    <div class="mButton">
                        <a href="#none" class="btnNormal"><span>닫기</span></a>
                    </div>
                </div>
                <button type="button" class="close">공지사항 닫기</button>
                <!-- //일반형 -->
                <!-- ERP용 -->
                <div class="footer">
                    <label class="gLabel"><input class="fChk" type="checkbox" /> 오늘 하루 열지 않음</label>
                </div>
                <!-- //ERP용 -->
            </div>
            <!-- //소스 적용 -->
        </div>

        <div class="grid">
            <div class="mNoticeEc typeUpgrade preview clear">
                <h1>
                    <strong class="shop">[상점관리]</strong>
                    <strong class="product">[상품관리]</strong>
                    <strong class="order">[주문관리]</strong>
                    <strong class="community">[게시판관리]</strong>
                    <strong class="promotion">[프로모션]</strong>
                    <strong class="mobile">[모바일]</strong>
                    <strong class="design">[디자인관리]</strong>
                    <strong class="member">[고객관리]</strong>
                    <strong class="optional">[부가서비스]</strong>
                    <strong class="cstore">[C스토어]</strong>
                    <strong class="market">[마켓통합관리]</strong>
                </h1>
            </div>
        </div>
    </div>

    <div class="clear">
        <div class="grid">
            <!-- 소스 적용 -->
            <div class="mNoticeEc typeRequired gLarge" style="top:100px;">
                <h1><strong class="required">[必读]</strong><span>辅助文字</span></h1>
                <span class="flag">notice</span>
                <p class="info">为指定或举报最高负责人的义务化制度。</p>
                <div class="content">
                    <ul class="info divide">
                        <li>
                            <strong class="title">显示时间 :</strong>
                            <span class="text">2013-02-06 (周三) ~ 2013-02-19 (周二)</span>
                        </li>
                        <li>
                            <strong class="title">变更日期 :</strong>
                            <span class="text"><strong class="txtWarn">2013-02-20 (周三)</strong></span>
                        </li>
                        <li>
                            <strong class="title">变更内容 :</strong>
                            <span class="text">变更前 &rarr; 变更后</span>
                        </li>
                        <li>
                            <strong class="title">更新内容</strong>
                            <p class="text">可在积分金额的左/右自由标注。</p>
                        </li>
                    </ul>
                    <ul class="info bullet divide">
                        <li>仅有blit的list <a href="#none" class="btnNoticeLink">仅有blit的list</a></li>
                        <li>仅有blit的list</li>
                    </ul>

                    <div class="info">
                        <h2>标题 <span>辅助标题</span></h2>
                        <p class="desc">段落型附加说明</p>
                        <ul class="desc">
                            <li>- 目录型附加说明</li>
                            <li>- 目录型附加说明</li>
                        </ul>
                        <table border="1" summary="" class="table">
                            <caption>메뉴위치 및 메뉴명 변경</caption>
                            <colgroup>
                                <col style="width:110px;" />
                                <col style="width:auto;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row">标题</th>
                                    <td>内容</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="box">
                        <h2 class="clear"><span class="icoLaw">법적고지</span></h2>
                        <p class="desc"><strong> 对法律条款的说明</strong></p>
                        <ul class="desc">
                            <li>-  对法律条款的说明</li>
                        </ul>
                    </div>

                    <ul class="desc">
                        <li>- 目录型附加说明</li>
                        <li>- 目录型附加说明</li>
                    </ul>
                    <p class="desc">- 段落型附加说明</p>
                    <div class="mButton">
                        <a href="/suio/module/notice_required.html" class="btnEm gFlex" target="_blank"><span>标准型，ERP用HTML</span></a>
                    </div>
                    <div class="mButton">
                        <a href="/suio/module/notice_required_admng.html" class="btnEm" target="_blank"><span>广告管理者 HTML</span></a>
                    </div>
                    <p class="more"><a href="#none" name="admngPopImage">查看详情</a></p>
                </div>
                <!-- 일반형 -->
                <div class="footer">
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 今日不再提醒</label>
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 不再提醒</label>
                    <div class="mButton">
                        <a href="#none" class="btnNormal"><span>关闭</span></a>
                    </div>
                </div>
                <button type="button" class="close">공지사항 닫기</button>
                <!-- //일반형 -->
                <!-- ERP용 -->
                <div class="footer">
                    <label class="gLabel"><input class="fChk" type="checkbox" /> 今日不再提醒</label>
                </div>
                <!-- //ERP용 -->
            </div>
            <!-- //소스 적용 -->
        </div>

        <div class="grid">
            <!-- 소스 적용 -->
            <div class="mNoticeEc typeUpgrade" style="top:100px;">
                <h1><strong class="community">[留言板管理]</strong><span>功能更新</span></h1>
                <span class="flag">upgrade</span>
                <p class="info">购物网已更新</p>
                <div class="content">
                    <ul class="info divide">
                        <li>
                            <strong class="title">显示时间 :</strong>
                            <span class="text">2013-02-06 (周三) ~ 2013-02-19 (周二)</span>
                        </li>
                        <li>
                            <strong class="title">变更日期 :</strong>
                            <span class="text"><strong class="txtWarn">2013-02-20 (周三)</strong></span>
                        </li>
                        <li>
                            <strong class="title">变更内容 :</strong>
                            <span class="text">变更前 &rarr; 变更后</span>
                        </li>
                        <li>
                            <strong class="title">更新内容</strong>
                            <p class="text">可在积分金额的左/右自由标注。</p>
                        </li>
                    </ul>
                    <ul class="info bullet divide">
                        <li>仅有blit的list <a href="#none" class="btnNoticeLink">仅有blit的list</a></li>
                        <li>仅有blit的list</li>
                    </ul>

                    <div class="info">
                        <h2>标题 <span>辅助标题</span></h2>
                        <p class="desc">段落型附加说明</p>
                        <ul class="desc">
                            <li>- 目录型附加说明</li>
                            <li>- 目录型附加说明</li>
                        </ul>
                        <table border="1" summary="" class="table">
                            <caption>메뉴위치 및 메뉴명 변경</caption>
                            <colgroup>
                                <col style="width:110px;" />
                                <col style="width:auto;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row">标题</th>
                                    <td>内容</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="box">
                        <h2 class="clear"><span class="icoLaw">법적고지</span></h2>
                        <p class="desc"><strong>对法律条款的说明</strong></p>
                        <ul class="desc">
                            <li>- 对法律条款的说明</li>
                        </ul>
                    </div>

                    <ul class="desc">
                        <li>- 目录型附加说明</li>
                        <li>- 目录型附加说明</li>
                    </ul>
                    <p class="desc">- 段落型附加说明</p>
                    <div class="mButton">
                        <a href="/suio/module/notice_required.html" class="btnEm gFlex" target="_blank"><span>标准型，ERP用HTML</span></a>
                    </div>
                    <div class="mButton">
                        <a href="/suio/module/notice_required_admng.html" class="btnEm" target="_blank"><span>广告管理者 HTML</span></a>
                    </div>
                    <p class="more"><a href="#none" name="admngPopImage">查看详情</a></p>
                </div>
                <!-- 일반형 -->
                <div class="footer">
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 今日不再提醒</label>
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 不再提醒</label>
                    <div class="mButton">
                        <a href="#none" class="btnNormal"><span>关闭</span></a>
                    </div>
                </div>
                <button type="button" class="close eClose">공지사항 닫기</button>
                <!-- //일반형 -->
                <!-- ERP용 -->
                <div class="footer">
                    <label class="gLabel"><input class="fChk" type="checkbox" /> 今日不再提醒</label>
                </div>
                <!-- //ERP용 -->
            </div>
            <!-- //소스 적용 -->
        </div>

        <div class="grid">
            <div class="mNoticeEc typeUpgrade preview clear">
                <h1>
                    <strong class="shop">[商店管理]</strong>
                    <strong class="product">[商品管理]</strong>
                    <strong class="order">[订单管理]</strong>
                    <strong class="community">[留言板管理]</strong>
                    <strong class="promotion">[Promotion]</strong>
                    <strong class="mobile">[手机版]</strong>
                    <strong class="design">[设计管理]</strong>
                    <strong class="member">[客户管理]</strong>
                    <strong class="optional">[附加项目]</strong>
                    <strong class="cstore">[cstore]</strong>
                    <strong class="market">[market]</strong>
                </h1>
            </div>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mNotice]</h3>
    <ol>
        <li>사용되는 화면에 module.css나 suio.css가 없을 경우 //img.echosting.cafe24.com/css/notice.css를 링크시켜야 한다. <a href="/suio/module/notice_sample.html" target="_blank" class="txtEm">[예시]</a></li>
        <li>mNotice 모듈의 기능개선이 있는 경우, module.css, notice.css, suio.css 총 3개의 CSS를 업데이트 한다.</li>
        <li>html은 <a href="http://fe-front.cafe24.com/event/index.html">[이곳]</a>에 저장한다.</li>
        <li>팝업은 일반형과 애드관리자형으로 나뉘며, <a href="http://fe-front.cafe24.com/event/2013/YUIDEV-186.html" class="txtEm">[이곳]</a>의 링크에서 확인 가능하다. 일반형일때는 왼쪽 팝업, 애드관리자형일때는 오른쪽 팝업을 html을 복사해서 제작한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>在使用的页面无module.css或suio.css时，须链接//img.echosting.cafe24.com/css/notice.css。 <a href="/suio/module/notice_sample.html" target="_blank" class="txtEm">[예시]</a></li>
        <li>mNotice模块的功能有改善时，须上传 module.css, notice.css, suio.css 共3个CSS。</li>
        <li>html须保存在。<a href="http://fe-front.cafe24.com/event/index.html" target="_blank" class="txtEm">[这里]</a></li>
        <li>弹窗分为标准型与广告管理者型，仅在<a href="http://fe-front.cafe24.com/event/2013/YUIDEV-186.html">[这里]</a>的链接才能确认。按标准型-左侧弹窗、广告管理者型-右侧弹窗的形式，复制html制作。</li>
    </ol>
    <ol class="en_US">
        <li>In case there is no module.css or suio.css in the screen, //img.echosting.cafe24.com/css/notice.css should be linked. <a href="/suio/module/notice_sample.html" target="_blank" class="txtEm">[example]</a></li>
        <li>In case there is a function improvement for the mNotice, three types of CSS (module.css, notice.css, suio.css) should be updated.</li>
        <li>HTML can be saved <a href="http://fe-front.cafe24.com/event/index.html" target="_blank" class="txtEm">[here].</a></li>
        <li>The pop up is divided to the general type and Ad manager type, which can be checked in the link <a href="http://fe-front.cafe24.com/event/2013/YUIDEV-186.html" class="txtEm">[here].</a> In case it is a general type, copy the html of pop up on the left, and if it is Ad manager type, the pop up on the right.</li>
    </ol>
', 'html' => '
    <div class="clear">
        <div class="grid">
            <div class="mNotice" style="top:100px;">
                <h1><span>대메뉴</span></h1>
                <div class="wrap">
                    <p class="point">설명문장</p>
                    <ul class="info">
                        <li>
                            <span class="title">안내기간 :</span>
                            <span class="text">2013-02-06 (수) ~ 2013-02-19 (화)</span>
                        </li>
                    </ul>
                    <ul class="info bullet">
                        <li>
                            블릿만 있는 리스트
                            <p class="txtLight">보조설명이 들어갑니다.</p>
                        </li>
                        <li>블릿만 있는 리스트</li>
                    </ul>
                    <div class="info">
                        <h2>메뉴삭제</h2>
                        <table border="1" summary="" class="table">
                            <caption>제목</caption>
                            <colgroup>
                                <col style="width:110px;" />
                                <col style="width:auto;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row">제목</th>
                                    <td>내용</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>메뉴삭제</h2>
                        <table border="1" summary="" class="table">
                            <caption>제목</caption>
                            <colgroup>
                                <col style="width:110px;" />
                                <col style="width:auto;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row">제목</th>
                                    <td>내용</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="desc">
                        <li>목록형 부가 설명</li>
                        <li>목록형 부가 설명</li>
                    </ul>
                    <p class="desc">문단형 부가 설명</p>
                    <div class="mButton">
                        <a href="#none" class="btnEm gFlex"><span>버튼</span></a>
                    </div>
                    <div class="mButton">
                        <a href="#none" class="btnEm"><span>버튼</span></a>
                    </div>
                    <p class="more"><a href="#none">자세히보기</a></p>
                </div>
                <div class="footer">
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 오늘 하루 열지 않음</label>
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 더 이상 열지 않음</label>
                    <div class="mButton">
                        <a href="#none" class="btnNormal eClose"><span>닫기</span></a>
                    </div>
                </div>
                <button type="button" class="close eClose">공지사항 닫기</button>
            </div>
        </div>
        <div class="grid">
            <div class="mNotice gLarge" style="top:100px;">
                <h1><span>大菜单</span></h1>
                <div class="wrap">
                    <p class="point">说明语句</p>
                    <ul class="info">
                        <li>
                            <span class="title">显示时间： :</span>
                            <span class="text">2013-02-06（周三）~2013-02-19（周二）</span>
                        </li>
                    </ul>
                    <ul class="info bullet">
                        <li>
                            仅有blit的list
                            <p class="txtLight">有辅助说明</p>
                        </li>
                        <li>仅有blit的list</li>
                    </ul>
                    <div class="info">
                        <h2>删除菜单</h2>
                        <table border="1" summary="" class="table">
                            <caption>제목</caption>
                            <colgroup>
                                <col style="width:110px;" />
                                <col style="width:auto;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row">标题</th>
                                    <td>内容</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>메뉴삭제</h2>
                        <table border="1" summary="" class="table">
                            <caption>제목</caption>
                            <colgroup>
                                <col style="width:110px;" />
                                <col style="width:auto;" />
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row">标题</th>
                                    <td>内容</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <ul class="desc">
                        <li>目录型附加说明</li>
                        <li>目录型附加说明</li>
                    </ul>
                    <p class="desc">段落型附加说明</p>
                    <div class="mButton">
                        <a href="#none" class="btnEm gFlex"><span>按钮</span></a>
                    </div>
                    <div class="mButton">
                        <a href="#none" class="btnEm"><span>按钮</span></a>
                    </div>
                    <p class="more"><a href="#none">查看详情</a></p>
                </div>
                <div class="footer">
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 今日不再提醒</label>
                    <label class="gLabel"><input type="checkbox" class="fChk" /> 不再提醒</label>
                    <div class="mButton">
                        <a href="#none" class="btnNormal eClose"><span>关闭</span></a>
                    </div>
                </div>
                <button type="button" class="close eClose">공지사항 닫기</button>
            </div>
        </div>
    </div>
')
);
?>