<?php

// 모듈 전체 제목
$header_name = 'Font/Text';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>모든 태그에 사용이 가능하나, 한글의 경우 italic은 가독성을 떨어트리므로 일반은 &lt;span&gt; 태그, 강조는 &lt;strong&gt; 태그 사용할 것을 권장한다.</li>
        <li>td나 li등에 직접 class처리하지 않고, 반드시 inline element 로 감싸준다. (span, strong 등)</li>
        <li>.txtCode는 경우에 따라 block element 사용이 가능하다. (td, li 등)</li>
        <li>여러 class를 중첩해서 사용 할 수 있다. (&lt;span class="txtEng txtMore"&gt;)</li>
        <li>.txtCode에 사용되는 웹폰트(Oxygen Mono)는 EC 어드민의 (뉴)상품관리(/css/ec/product.css)에서만 사용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>均可使用于任意tag，但由于italic影响韩文可读性，因此建议“一般”使用&lt;span&gt; tag，“强调”使用&lt;strong&gt; tag。</li>
        <li>对于td或li，不应直接进行class处理，须由inline element套住。（span、strong等）</li>
        <li>.txtCode可根据实际情况，使用block element。（td、li等）</li>
        <li>可将多个class叠加使用。（&lt;span class="txtEng txtMore"&gt;）</li>
        <li>用于txtCode的Web字体（Oxygen Mono），仅限于EC Admin的（new）商品管理（/css/ec/product.css）中使用。</li>
    </ol>
    <ol class="en_US">
        <li>Even though it can be used in all tags, the Italic has poorly readable typography, which is why it is recommended to use the &lt;span&gt; tag for the normal texts and the &lt;strong&gt; tag for the highlighted texts.</li>
        <li>Do not directly handle with the class for the td or the li, but cover them with the inline element. (span, strong, etc…)</li>
        <li>The block element can be used for the .txtCode occasionally. (the td, the li, etc...)</li>
        <li>Various classes can be duplicated to be used. (&lt;span class="txtEng txtMore"&gt;)</li>
        <li>The web font (Oxygen Mono) that is used in the .txtCode is only utilized in the (new)product management (/css/ec/product.css) in the EC Admin.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋  (미사용시 주석처리)
$preview_css = '
    <link rel="stylesheet" type="text/css" href="/css/ec/product.css" media="all" />
    <style type="text/css">
        .txtInfo,
        td .txtInfo { outline:0; }
        .txtInfo:before { display:none; }
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
                    <p class="info"><span class="date">2018.08.14</span><span class="writer">전영학</span></p>
                    <ul class="title">
                        <li><strong>[txtPointer]</strong> mBoard중의 disabled에 클릭 가능한 사양 추가 <a href="/solution/erp/recipe/recipe/customer/customer_notice.html" class="btnLink" target="_blank">예시</a></li>
                    </ul>
                </li>
                <li>
                    <p class="info"><span class="date">2017.07.21</span><span class="writer">김은경</span></p>
                    <ul class="title">
                        <li><strong>[txtNotice]</strong> 표안에서 사용되는 공지 추가 <a href="/smartAdmin/market/local/product/register.html" class="btnLink" target="_blank">예시</a></li>
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
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>텍스트의 정렬</caption>
            <colgroup>
                <col style="width:100px;" />
                <col style="width:120px;" />
                <col style="width:250px;" />
                <col style="width:250px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Class</th>
                    <th scope="col">color, font</th>
                    <th scope="col">일반 一般</th>
                    <th scope="col">강조 强调</th>
                    <th scope="col">설명 说明</th>
                </tr>
            </thead>
            <tbody>

                <!-- 일반 -->
                <tr>
                    <th scope="row">.txtNormal</th>
                    <td>#1c1c1c</td>
                    <td><span class="txtEm">예시 <span class="txtNormal">[spasn] 예시</span> 예시</span></td>
                    <td><span class="txtEm">예시 <strong class="txtNormal">[strong] 예시</strong> 예시</span></td>
                    <td>
                        일반적인 텍스트, 다른 txt class가 적용 되어있고 일반형으로 적용해야 할때 사용한다.
                        <p class="zh_CN">一般Text，在其它txt class已被适用且需要适用为一般型时使用。</p>
                        <p class="en_US">It is the general text, the txt class is applied differently and occasionally used when the general type has to be applied.</p>
                    </td>
                </tr>

                <!-- 강조: 긍정과 부정 -->
                <tr>
                    <th scope="row">.txtEm</th>
                    <td>#1b87d4</td>
                    <td><span class="txtEm">[span] 예시</span></td>
                    <td><strong class="txtEm">[strong] 예시</strong></td>
                    <td>
                        긍정적인 강조문구에 사용한다.
                        <p class="zh_CN">用于肯定强调语句。</p>
                        <p class="en_US">It is used for the highlighted phrase that is positive.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtWarn</th>
                    <td>#ef5012</td>
                    <td><span class="txtWarn">[span] 예시</span></td>
                    <td><strong class="txtWarn">[strong] 예시</strong></td>
                    <td>
                        주의, 경고, 유의사항 등에 사용한다.
                        <p class="zh_CN">用于注意、警告、留意事项等。</p>
                        <p class="en_US">It is used for the cautions, warnings and notes.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtStress</th>
                    <td>#00ad33</td>
                    <td><span class="txtStress">[span] 예시</span></td>
                    <td><strong class="txtStress">[strong] 예시</strong></td>
                    <td>
                        txtEm, txtWarn 이 둘다 사용중이며 그 다음의 강조가 필요할대만 사용 가능하다
                        <p class="zh_CN">暂无</p>
                        <p class="en_US">...</p>
                    </td>
                </tr>

                <!-- Form 관련 요소의 부가 설명 -->
                <tr>
                    <th scope="row" rowspan="3">.mList</th>
                    <td rowspan="3">11px / #898989</td>
                    <td>
                        <span class="mList">[span] 예시</span>
                    </td>
                    <td>-</td>
                    <td>
                        안내 문구가 필요할 때 사용한다.
                        <p class="zh_CN">需要指南语句时使用。</p>
                        <p class="en_US">It is used when a guide phrase is needed.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul class="mList">
                            <li>[ul] 예시</li>
                        </ul>
                    </td>
                    <td>-</td>
                    <td>
                        문단형 안내 문구가 필요할 때 사용한다.
                        <p class="zh_CN">需要段落型指南语句时使用。</p>
                        <p class="en_US">It is used when a guide is needed in a phrase type.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul class="mList">
                            <li>[ul] 예시</li>
                            <li>[ul] 예시</li>
                        </ul>
                    </td>
                    <td>-</td>
                    <td>
                        목록형 안내 문구가 필요할 때 사용한다.
                        <p class="zh_CN">需要目录型指南语句时使用。</p>
                        <p class="en_US">It is used when a guide is needed for a list type.</p>
                    </td>
                </tr>

                <!-- Font Style -->
                <tr>
                    <th scope="row">.txtEng</th>
                    <td>Verdana</td>
                    <td><span class="txtEng">[span] English, 86,000</span></td>
                    <td><strong class="txtEng">[strong] English, 86,000</td>
                    <td>
                        영어, 숫자, 금액 등
                        <p class="zh_CN">英语、数字、金额等</p>
                        <p class="en_US">English, number and money…</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtKor</th>
                    <td>굴림</td>
                    <td>돋움 <span class="txtKor">[span] 굴림</span></td>
                    <td><strong> 돋움</strong> <strong class="txtKor">[strong] 굴림</strong></td>
                    <td>
                        일반문자가 굴림체로 강조 되어야 할때 사용한다.
                        <p class="zh_CN">需要以Gulim字体强调一般文字时使用。</p>
                        <p class="en_US">It is used when the normal texts should be highlighted in the Gulim.</p>
                    </td>
                </tr>

                <!-- 강조: 색상과 사이즈 -->
                <tr>
                    <th scope="row" rowspan="2">.txtMore</th>
                    <td>14px</td>
                    <td><span class="txtMore">[span] 예시</span></td>
                    <td><strong class="txtMore">[strong] 예시</strong></td>
                    <td rowspan="2">
                        큰 글씨로 강조할때 사용한다.
                        <p class="zh_CN">需要以大字强调时使用。</p>
                        <p class="en_US">It is used when the texts should be highlighted in a large size.</p>
                    </td>
                </tr>
                <tr>
                    <td>mList: 12px</td>
                    <td>
                        <span class="mList txtMore">[span] 예시</span>
                    </td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">.txtLess</th>
                    <td>11px</td>
                    <td><span class="txtLess">[span] 예시</span></td>
                    <td><strong class="txtLess">[strong] 예시</strong></td>
                    <td>
                        작은 글씨로 표현할때 사용한다.
                        <p class="zh_CN">需要以小字表示时使用。</p>
                        <p class="en_US">It is used when the texts should be small.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtLight</th>
                    <td>#898989</td>
                    <td><span class="txtLight">[span] 예시</span></td>
                    <td><strong class="txtLight">[strong] 예시</strong></td>
                    <td>
                        강조하지 않는 내용을 회색 글씨로 표현할때 사용한다.
                        <p class="zh_CN">需要将无需强调的内容以灰色字表示时使用。</p>
                        <p class="en_US">It is used to alter the color of the texts to gray for the contents that are not highlighted.</p>
                    </td>
                </tr>

                <!-- 특수문자(아이콘) 형태가 추가 될 때-->
                <tr>
                    <th scope="row">.txtIcon</th>
                    <td>12px; / normal</td>
                    <td><span class="txtLess">[span] <span class="txtIcon">※</span> 예시</span></td>
                    <td><strong class="txtLess">[strong] <span class="txtIcon">※</span> 예시</strong></td>
                    <td>
                        폰트 사이즈가 작거나, bold체 일때 시스템 특수문자(※)를 잘 보이기 위해 사용한다.<br />
                        <p class="zh_CN txtWarn">字体大小较小或bold体时，为使系统特殊文字（※）更加清晰而使用。</p>
                        <p class="en_US">It is used to highlight the special character of the system when the font is small or bold.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtCode</th>
                    <td>돋움체</td>
                    <td>
                        <p class="txtCode">AAAAAAAA</p>
                        <p class="txtCode">AAIIAAII</p>
                        <p>3,000 <span class="txtCode">KRW</span></p>
                    </td>
                    <td>-</td>
                    <td>
                        <ul class="mList typeMore">
                            <li>EC어드민 &gt; 상품<span class="txtEm">(/css/ec/product.css 사용페이지)</span>에만 사용 가능하다.</li>
                            <li>고정폭 문자로, <strong>상품코드</strong>와 <strong>화폐단위(예: KRW)</strong>에만 사용한다.</li>
                        </ul>
                       <ul class="mList typeMore zh_CN">
                            <li>仅可用于EC Admin > 商品 <span class="txtEm">（使用/css/ec/product.css的页面）</span>。</li>
                            <li>固定宽度的文字，仅用于商品代码和货币单位。（例：KRW）</li>
                       </ul>
                       <ul class="mList typeMore en_US">
                            <li>It can be used in the EC Admin &gt; Product(/css/ec/product.css used page).</li>
                            <li>It is a fixed width text, which is only used in the product code and the currency unit. (example :KRW)</li>
                       </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtEllipsis</th>
                    <td>말줄임표</td>
                    <td colspan="2">
                        <p class="txtEllipsis">[p] 설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명</p>
                        <a href="#none" class="txtEllipsis">[a] 설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명설명</a>
                    </td>
                    <td>
                        한줄의 끝에서 말줄임표가 필요할 경우 사용한다.
                        <p class="zh_CN">需要在行末添加省略号时使用。</p>
                        <p class="en_US">It is used when the ellipsis is needed at the end of a row.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtLink</th>
                    <td>underline</td>
                    <td colspan="2"><a href="#none" class="txtLink">예시</a> <a href="#none" class="txtLink" target="_blank" title="새창 열림">새창 열림</a></td>
                    <td>
                        게시판목록형태에서 링크가 있을때 사용한다. mBoard를 제외하고 사용 되지 않는다.
                        <p class="zh_CN">目录型留言板中存在链接时使用。仅使用于mBoard。</p>
                        <p class="en_US">It is used when a link is inserted in a noticeboard list type and is not used without the mBoard.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtPointer</th>
                    <td>#bababa/pointer</td>
                    <td class="disabled" colspan="2"><a href="#none" class="txtLink txtPointer">예시</a> <a href="#none" class="txtLink txtPointer" target="_blank" title="새창 열림">새창 열림</a></td>
                    <td>
                        mBoard중의 disabled에서 클릭이 가능한 사양일때 사용한다.
                        <p class="zh_CN">在mBoard中的disabled里，a标签可点击时使用。</p>
                        <p class="en_US">It is used when a link can be used in the disabled of mBoard.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtDel</th>
                    <td>line-through</td>
                    <td colspan="2">
                        <a href="#none" class="txtDel">예시</a> <a href="#none" class="txtDel" target="_blank" title="새창 열림">새창 열림</a><br />
                        <a href="#none" class="txtDel">&nbsp;양쪽 여백&nbsp;</a>
                    </td>
                    <td>
                        양쪽에 여백을 포함한 - 선이 필요한 경우 a 태그 사이에 &amp;nbsp;를 추가한다.
                        <p class="zh_CN">两边需要带间距的 - 线时，在a标签之间添加 &amp;nbsp;</p>
                        <p class="en_US">Including the space on the both sides – if a line is needed, add &nbsp; between a tags.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtByte</th>
                    <td>12px</td>
                    <td>
                        <input type="text" class="fText" style="width:100px" value="span" /> <span class="txtByte" title="현재글자수/최대글자수">[ <strong>0</strong> / 100 ]</span>
                    </td>
                    <td>
                        <input type="text" class="fText" style="width:100px" value="p" /><p class="txtByte" title="현재글자수/최대글자수">[ <strong>0</strong> / 100 ]</p>
                    </td>
                    <td>
                        &lt;input type="text" /&gt;에 사용자가 입력한 값이 몇글자인지 표현할때 사용한다.
                        <p class="zh_CN">用于显示用户在 &lt;input type="text" /&gt; 输入值的字数。</p>
                        <p class="en_US">To highlight the number of words that are input by a user in &lt;input type="text" /&gt;.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtDesign</th>
                    <td>12px</td>
                    <td colspan="2">
                        <span class="txtDesign">디자인 설정안내</span>
                    </td>
                    <td>
                        mTooltip으로 뜨지 않고 새창이나, 페이지이동일때 사용한다. <a href="/suio/include/layout.php?MODULE=tooltip" target="_blank" class="txtEm"><span>[mTooltip]</span></a>
                        <p class="zh_CN">不以mTooltip显示，以新窗口或移动页面显示时使用。 <a href="/suio/include/layout.php?MODULE=tooltip" target="_blank" class="txtEm"><span>[mTooltip]</span></a></p>
                        <p class="en_US">It is used when moving to a new window or page, with the mTooltip not activated.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtLaw</th>
                    <td>12px</td>
                    <td colspan="2">
                        <span class="txtLaw">법적고지</span>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">.txtNotice</th>
                    <td>12px</td>
                    <td colspan="2">
                        <span class="txtNotice">예시</span>
                    </td>
                    <td>
                        색상 등으로 강조가 필요할때, txtEm, txtWarn 을 혼용해서 사용할 수 있다.
                        <p class="zh_CN">需要强调文字时，可再加 .txtEm , .txtWarn。</p>
                        <p class="en_US">번역필요</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>표안에서 사용되는 보조설명 <span class="zh_CN">用于表格内部的辅助说明</span><span class="en_US">Supplementary explanation that is used in the table.</span></h3>
    <ol>
        <li>화면내 스크롤바가 최소화 될 수 있도록 도움말 위치는 가능한 "일반형"을 사용한다.</li>
        <li>기획서가 문단형으로 되어있어도 보기에 일반형이 가능하면 기획자와 협의 후 일반형으로 진행한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>为使画面中滚动条最小化，<帮助>的位置尽量使用“一般型”。</li>
        <li>段落型企划书若可更改为一般型，可与企划者沟通后转换为一般型。</li>
    </ol>
    <ol class="en_US">
        <li>To minimize the scroll bar in the screen, the “general type” should be used for the location of Help.</li>
        <li>Use the general type after discussing with the planner if it is possible to apply it, even if the paragraph type is used in the plan.</li>
    </ol>
', 'html' => '
    <div class="mBoard ">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:220px;" />
                <col style="width:500px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">예시</th>
                    <th scope="col">설명</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        일반형 보조설명
                        <p class="zh_CN">一般型的辅助说明</p>
                        <p class="en_US">Supplementary explanation of the general type</p>
                    </th>
                    <td><input type="text" class="fText" style="width:300px;" /><span class="txtInfo">예시</span></td>
                    <td>
                        -(하이픈)이 없으며, 기획서에 -(하이픈) 가 있어도 생략한다.
                        <p class="zh_CN">无-（连字符）用span制作，企划书中有-（连字符）时将其省略。<p>
                        <p class="en_US">No hyphen. Skip the hyphen even if it is included in the plan.<p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        문단형 보조설명
                        <p class="zh_CN">段落型的辅助说明<p>
                        <p class="en_US">Supplementary explanation of the paragraph type<p>
                    </th>
                    <td>
                        <input type="text" class="fText" style="width:300px;" />
                        <ul class="txtInfo">
                            <li>예시</li>
                        </ul>
                    </td>
                    <td rowspan="2">
                        -(하이픈)이 포함되어있다.
                        <p class="zh_CN">含-（连字符）。</p>
                        <p class="en_US">The hyphen is included.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        목록형 보조설명
                        <p class="zh_CN">目录型的辅助说明</p>
                        <p class="en_US">Supplementary explanation of the list type</p>
                    </th>
                    <td>
                        <input type="text" class="fText" style="width:300px;" />
                        <ul class="txtInfo">
                            <li>예시</li>
                            <li>예시</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>표안에서 사용되는 공지 <span class="zh_CN">表格里的公告</span><span class="en_US">번역필요</span></h3>
    <ol>
        <li>화면내에서 공지나 오류에 대한 안내가 적극적으로 필요할때 사용된다</li>
        <li>도움말과는 구분이 필요하며, 셀이 시작하는 상단에 배치를 권장한다</li>
    </ol>
    <ol class="zh_CN">
        <li>需要提示页面里的公告或错误时使用。</li>
		<li>需要跟帮助语区分，建议放在单元格开始的上端。</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mBoard ">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:220px;" />
                <col style="width:500px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">예시</th>
                    <th scope="col">설명</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        일반형 공지 (비권장)
                        <p class="zh_CN">一般型（不推荐）</p>
                        <p class="en_US">번역필요</p>
                    </th>
                    <td>
                        <input type="text" class="fText" style="width:300px;" />
                        <span class="txtNotice">예시</span>
                    </td>
                    <td></td>
                </tr>
                 <tr>
                    <th scope="row">
                        문단형 공지
                        <p class="zh_CN">段落型</p>
                        <p class="en_US">번역필요</p>
                    </th>
                    <td>
                        <ul class="txtNotice txtEm">
                            <li>예시</li>
                        </ul>
                        <input type="text" class="fText" style="width:300px;" />
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">
                        목록형 공지
                        <p class="zh_CN">目录型</p>
                        <p class="en_US">번역필요</p>
                    </th>
                    <td>
                        <ul class="txtNotice">
                            <li class="txtEm">예시</li>
                            <li>예시 <span class="txtWarn">예시</span></li>
                        </ul>
                        <input type="text" class="fText" style="width:300px;" />
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>