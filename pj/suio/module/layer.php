<?php

// 모듈 전체 제목
$header_name = 'mLayer';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>&lt;div class="mLayer"&gt; 안에 .wrap, .footer 구조를 가지며, 버튼이 필요없는 경우 footer는 생략 할 수 있다.</li>
        <li><strong>레이어는 항상 &lt;/body&gt;앞에 추가한다. 각 mLayer에는 ID가 들어가며, 버튼의 href와 연결된다.</strong></li>
        <li><strong>mLayer의 ID는 "컨텐츠명+숫자"를 사용한다.</strong></li>
        <li>사이즈는 gSmall, gMedium, gLarge 3가지를 사용 할 수 있으며, style로 width를 추가해 다른 사이즈를 지정 할 수 있다.</li>
        <li><strong>mLayer에 css를 추가 필요한 경우 css selector로 id를 사용 불가,  .mLayer > .wrap에 class를 추가하여 css를 적용한다. 예) class="wrap <span class="txtEm">addGadget</span>"</strong> <a href="/solution/cmc/advanced/dashboard/dashboard.html">[참고: cmc대시보드 &gt; 가젯추가 레이어팝업]</a></li>
        <li>개발팀의 요청으로 mLayer에 아이프레임처리를 해야하는 경우가 있다. 상세가이드는 페이지 하단의 [mLayer + typeScroll]를 참고한다. </li>
    </ol>
    <ol class="zh_CN">
        <li>&lt;div class="mLayer"&gt; 具有.wrap, .footer 结构，无需用按钮时可省略footer。</li>
        <li><strong>Layer须添加在&lt;/body&gt;前，每个 mLayer都设置ID，并与按钮的href相互连接。</strong></li>
        <li><strong>mLayer须用”contents名+数字“的形式设置ID。</strong></li>
        <li>Size可用gSmall, gMedium, gLarge等3种形式，用style添加width，可指定其他size。</li>
        <li><strong>需要在mLayer中添加css时，由于css selector，不可使用id。可在.mLayer &gt; .wrap中添加class，适用css。例）class="wrap <span class="txtEm">addGadget</span>"</strong> <a href="/solution/cmc/advanced/dashboard/dashboard.html">[参考：cmc dashboard &gt; 添加Gadget Layer弹窗]</a></li>
        <li>有时，根据开发组的要求，需要对mLayer进行iframe处理。详细指南参考页面下端。</li>
        <li>应于开发组的要求需要在iframe领域中处理mLayer部分的时候，请参考[mLayer + typeScroll].</li>
    </ol>
    <ol class="en_US">
        <li>It has the wrap and .footer structure in the &lt;divclass=”mLayer”&gt;, and the footer can be skipped.  </li>
        <li><strong>Layers should always be in front of the &lt;/body&gt;. Each mLayer has ID in it, and is connected to the href of button.</strong></li>
        <li><strong>Use “the name of contents + number” as an ID of the mLayer.</strong></li>
        <li>The size can be used in the gSmall, gMedium, and gLarge, and the different size can be assigned by adding the width with the style.</li>
        <li><strong>In case the css has to be added in the mLayer, ID cannot be used as a css selector. Assign the css by adding the class in the .mLayer &gt; .wrap. 예) class="wrap <span class="txtEm">addGadget</span>"</strong> <a href="/solution/cmc/advanced/common/dashboard.html">[참고: cmc대시보드 &gt; 가젯추가 레이어팝업]</a></strong></li>
        <li>There are occasions when it has to be handled by the iframe in the mLayer by a request from the dev team. Below is the detailed guide.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .samplePreview { overflow:hidden; }
        .mLayer { display:block; position:relative !important; left:0 !important; }
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
                    <p class="info"><span class="date">2016.03.30</span><span class="writer">송유진</span></p>
                    <ul class="title">
                        <li><strong>[mLayer + typeScroll]</strong> 레이어 스크롤형 <a href="/smartAdmin/market/global/admin/order/tmall/shipping/ready.html" class="btnLink" target="_blank">마켓주문 배송처리</a></li>
                        <li><strong>[#iframe > mLayer]</strong> [상세설정] 버튼 클릭시 <a href="/smartAdmin/shop/operate/operator_modify.html" class="btnLink" target="_blank">운영자 수정</a></li>
                        <li><strong>[mLayer + #iframe]</strong> [업데이트 내역] 버튼 클릭시 <a href="/smartAdmin/mobile/app/introduce.html" class="btnLink" target="_blank">앱 서비스 현황</a></li>
                    </ul>
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
    <h3>[mLayer  + gSmall] width:340px;</h3>
', 'html' => '
    <div id="layerTest1" class="mLayer gSmall">
        <h2> h2 : 대제목</h2>
        <div class="wrap">
            <div class="mTitle">
                <h3>h3 : 중제목</h3>
                <p>제목의 문단형 보조설명</p>
            </div>
            <div class="mTitle">
                <h4>[ h4 : 소제목 : ] 항상 [ ]로 묶어준다.</h4>
                <ul>
                    <li>제목의 문장형 보조설명</li>
                    <li>제목의 문장형 보조설명</li>
                </ul>
            </div>
            <div class="AAAAAA">
                컨텐츠영역. 필요 없는 경우 div는 생략 가능하며, div 사용시 class는 반드시 넣는다.
            </div>
        </div>
        <div class="footer">
            <a href="#none" class="btnCtrl"><span>저장</span></a>
            <a href="#none" class="btnNormal eClose"><span>취소</span></a>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
'),
array(
'desc' => '
    <h3>[mLayer  + gMedium] width:500px;</h3>
', 'html' => '
    <div id="layerTest1" class="mLayer gMedium zh_CN">
        <h2>h2 : 大标题</h2>
        <div class="wrap">
            <div class="mTitle">
                <h3>h3 : 中标题</h3>
                <p>标题的段落型补充说明</p>
            </div>
            <div class="mTitle">
                <h4>[ h4 : 小标题 ] 必须用[ ]括住。</h4>
                <ul>
                    <li>标题的文章型补充说明</li>
                    <li>标题的文章型补充说明</li>
                </ul>
            </div>
            <div class="AAAAAA">
                无需用contents区域时可省略div，存在div时必须添加class。
            </div>
        </div>
        <div class="footer">
            <a href="#none" class="btnCtrl"><span>저장</span></a>
            <a href="#none" class="btnNormal eClose"><span>취소</span></a>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
    <div id="layerTest1" class="mLayer gMedium en_US">
        <h2>h2 : main title</h2>
        <div class="wrap">
            <div class="mTitle">
                <h3>h3 : sub title</h3>
                <p>sub-explanation in paragraphs for the title</p>
            </div>
            <div class="mTitle">
                <h4>[ h4: small title : ] Cluster with [ ] all times.</h4>
                <ul>
                    <li>Sub-explanation for the sentence type of title</li>
                    <li>Sub-explanation for the sentence type of title</li>
                </ul>
            </div>
            <div class="AAAAAA">
                Contents area. In case it is not needed, the div can be skipped, but the class has to be inserted.
            </div>
        </div>
        <div class="footer">
            <a href="#none" class="btnCtrl"><span>저장</span></a>
            <a href="#none" class="btnNormal eClose"><span>취소</span></a>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
'), array(
'desc' => '
    <h3>[mLayer  + gLarge] width:630px;</h3>
', 'html' => '
    <div id="layerTest1" class="mLayer gLarge">
        <h2>h2 : 대제목</h2>
        <div class="wrap">
            <div class="mTitle">
                <h3>h3 : 중제목</h3>
                <p>제목의 문단형 보조설명</p>
            </div>
            <div class="mTitle">
                <h4>[ h4 : 소제목 ]</h4>
                <ul>
                    <li>제목의 문장형 보조설명</li>
                    <li>제목의 문장형 보조설명</li>
                </ul>
            </div>
        </div>
        <div class="footer">
            <a href="#none" class="btnCtrl"><span>저장</span></a>
            <a href="#none" class="btnNormal eClose"><span>취소</span></a>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
'), array(
'desc' => '
    <h3>[mLayer + typeScroll] 스크롤형</h3>
    <ol>
        <li>레이어팝업의 높이가 커서, 화면에서 잘림 현상이 있을 경우 사용한다.</li>
        <li>.wrap에 max-height를 inline style로 적용한다.</li>
        <li>overflow속성으로 인해 툴팁 등 레이어의 고정너비를 초과할 수 있는 요소가 레이어의 가로스크롤을 생성하게 되므로 가능한 사용하지 않을 것을 권장한다.</li>
    </ol>
    <ol>
        <li>layer过高导致在页面中出现被覆盖的情况时使用.</li>
        <li>.wrap中使用inline style形式给予max-height指定高度.</li>
        <li>因overflow属性，导致有tooltip等能超过layer的宽度领域时出现横向滚动条，不推荐使用。</li>
    </ol>
', 'html' => '
    <div id="layerTest1" class="mLayer gSmall typeScroll">
        <h2>h2 : 대제목</h2>
        <div class="wrap" style="max-height:200px;">
            <div class="mTitle">
                <h3>h3 : 중제목</h3>
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
                <p>제목의 문단형 보조설명</p>
            </div>
            <div class="mTitle">
                <h4>[ h4 : 소제목 : ] 항상 [ ]로 묶어준다.</h4>
                <ul>
                    <li>제목의 문장형 보조설명</li>
                    <li>제목의 문장형 보조설명</li>
                    <li>제목의 문장형 보조설명</li>
                    <li>제목의 문장형 보조설명</li>
                    <li>제목의 문장형 보조설명</li>
                    <li>제목의 문장형 보조설명</li>
                    <li>제목의 문장형 보조설명</li>
                </ul>
            </div>
            <div class="AAAAAA">
                컨텐츠영역. 필요 없는 경우 div는 생략 가능하며, div 사용시 class는 반드시 넣는다.
            </div>
        </div>
        <div class="footer">
            <a href="#none" class="btnCtrl"><span>저장</span></a>
            <a href="#none" class="btnNormal eClose"><span>취소</span></a>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
'), array(
'desc' => '
    <h3>[mLayer] 오늘 하루 열지 않음 今日不再提醒</h3>
    <ol>
        <li>footer에 .check를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>在 footer添加.check。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div id="layerTest1" class="mLayer gSmall">
        <h2>h2 : 대제목</h2>
        <div class="wrap">
            <div class="mTitle">
                <h3>h3 : 중제목</h3>
                <p>제목의 문단형 보조설명</p>
            </div>
            <div class="mTitle">
                <h4>[ h4 : 소제목 ]</h4>
                <ul>
                    <li>제목의 문장형 보조설명</li>
                    <li>제목의 문장형 보조설명</li>
                </ul>
            </div>
        </div>
        <div class="footer check">
            <label class="gLabel"><input type="checkbox" class="fChk" /> 오늘 하루 열지 않음</label>
            <a href="#none" class="btnNormal eClose"><span>닫기</span></a>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
'), array(
'desc' => '
    <div class="headerDesc">
        <strong>mLayer의 Iframe 처리</strong>
        <ol>
            <li>개발팀에 요청에 따라, 레이어팝업영역을 iframe으로 처리할 수 있다.</li>
            <li>
                아이프레임 처리는 영역에 따라 아래 2가지로 구분한다.
                <ol>
                    <li>mLayer 전체</li>
                    <li>mLayer 내, 컨텐츠 영역 (.wrap)</li>
                </ol>
            </li>
        </ol>
        <strong class="gTriple zh_CN">mLayer的 Iframe 处理</strong>
        <ol class="zh_CN">
            <li>根据开发组的要求，可对Layer弹窗进行iframe处理。</li>
            <li>
                根据不同区域，iframes处理可分为以下两种。
                <ol>
                    <li>整个 mLayer</li>
                    <li>mLayer 内的内容区域（.wrap）</li>
                </ol>
            </li>
        </ol>
        <strong class="gTriple en_US">(번역필요)</strong>
        <ol class="en_US">
            <li>(번역필요)</li>
            <li>
                (번역필요)
                <ol>
                    <li>(번역필요)</li>
                    <li>(번역필요)</li>
                </ol>
            </li>
        </ol>
    </div>
    <h3>a. mLayer 전체를 iframe으로 호출하는 경우 : <span class="zh_CN">a. mLayer 全部用 iframe 调用的时候</span><span class="en_US">In case calling the entire .mLayer with the iframe</span></h3>
    <ol>
        <li>HTML 구조: mLayer + typeIframe + $gSize &gt; #iframe &gt; mLayer <a href="/smartAdmin/shop/operate/operator_modify.html">[참고: 페이지 접근권한 &gt; 상세설정 레이어팝업]</a></li>
        <li>iframe을 감싸는 div에 [mLayer + typeIframe + $gSize] 를 추가한다,</li>
        <li>$gSize에는 레이어의 크기에 따라 gSmall (342px), gMedium (502px), gLarge (632px) 클래스를 추가한다.</li>
        <li>iframe페이지의 body에 id="iframe", 전체를 감싸는 div에 mLayer를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>HTML 结构：mLayer + typeIframe + $gSize &gt; #iframe &gt; mLayer <a href="/smartAdmin/shop/operate/operator_modify.html">[参考：页面访问权限 &gt; 详细设置Layer弹窗]</a></li>
        <li>在套住iframe的div中添加[mLayer + typeIframe + $gSize]。</li>
        <li>对于$gSize，根据Layer大小添加gSmall (342px), gMedium (502px), gLarge (632px) class。 </li>
        <li>在iframe页面的body中添加id="iframe"，在套住整体的div中添加.mLayer。</li>
    </ol>
    <ol class="en_US">
        <li>The structure of HTML: mLayer + typeIframe + $gSize > #iframe > mLayer <a href="/smartAdmin/shop/operate/operator_modify.html">[reference: page access authorization &gt; detailed setting layer pop up]</a></li>
        <li>Add the [mLayer + typeIframe + $gSize] in the div that is covering the iframe.</li>
        <li>Add class of gSmall (342px), gMedium (502px), and gLarge (632px) to the $gSize by the size of layers.</li>
        <li>Add id="iframe" in the body of iframe page and also the mLayer in the div covering the total.</li>
    </ol>
', 'html' => '
<div id="layerTest1" class="mLayer typeIframe gLarge">
        &lt;body id="iframe"&gt;
            <div class="mLayer">
                <h2>타이틀</h2>
                <div class="wrap">
                    ..중략..
                </div>
                <div class="footer">
                    <a href="#none" class="btnCtrl"><span>저장</span></a>
                    <a href="#none" class="btnNormal eClose"><span>취소</span></a>
                </div>
                <button type="button" class="btnClose eClose">닫기</button>
            </div>
        &lt;/body&gt;
</div>
'), array(
'desc' => '
    <h3>b. mLayer 내, 컨텐츠 영역만 iframe으로 호출하는 경우 : <span class="zh_CN">b. mLayer内，内容区域里调用iframe的时候</span><span class="en_US">b. In case recalling the contents area only with the iframe in the mLayer</span></h3>
    <ol>
        <li>HTML 구조 : mLayer > #iframe + mLayer <a href="/smartAdmin/mobile/app/introduce.html">[참고: 앱 서비스 현황 &gt; 업데이트 내역 레이어팝업]</a></li>
        <li>iframe을 감싸는 div에 .mLayer 를 추가한다.</li>
        <li>iframe태그에 width, height를 inline style로 적용한다.</li>
        <li>iframe페이지는 &lt;body id="iframe" class="mLayer&gt;로 적용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>HTML结构：mLayer &gt; #iframe + mLayer <a href="/smartAdmin/mobile/app/introduce.html">[참고: 앱 서비스 현황 &gt; 업데이트 내역 레이어팝업]</a></li>
        <li>在套住iframe的div中添加.mLayer。</li>
        <li>在iframe tag中将width、height适用为inline style。</li>
        <li>iframe页面应适用为 &lt;body id="iframe" class="mLayer&gt;。</li>
    </ol>
    <ol class="en_US">
        <li>The structure of HTML : mLayer &gt; #iframe + mLayer <a href="/smartAdmin/mobile/app/introduce.html">[reference: the status of app service &gt; the layer popup of update history]</a> Add the .mLayer to the div covering the iframe.</li>
        <li>(번역필요)</li>
        <li>Apply the inline style for the width and height to the iframe tag.</li>
        <li>Apply the &lt;body id="iframe" class="mLayer&gt; in the iframe page.</li>
    </ol>
', 'html' => '
<div id="layerTest1" class="mLayer gLarge">
        <h2>타이틀</h2>
        &lt;iframe src="$fileName.html" title="$프레임내용" frameborder="0" style="width:850px; height:395px;"&gt;&lt;/iframe&gt;
        <button type="button" class="btnClose eClose">닫기</button>
</div>

<strong class="gDouble gSingleBreak">$fileName.html 은 아래와 같이 작성한다.</strong>
&lt;body id="iframe" class="mLayer"&gt;
        <div class="wrap">
            ..중략..
        </div>
&lt;/body&gt;
')
);
?>