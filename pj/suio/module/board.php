<?php

// 모듈 전체 제목
$header_name = 'mBoard';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>오른쪽 상단 SUIO Debug 의 항목을 클릭하여 addForm, Caption, QA_ID List가 정상적으로 적용되었는지 확인한다.</li>
        <li><strong class="icoRequired">필수</strong> 특히, SUIO Debug 의 항목 중 <strong>layout fixed</strong>를 클릭하여 디자인이 틀어지거나, 어색하게 떨어지는 부분이 없는지 확인하여야 한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>点击右上端SUIO Bebug项目，确认addForm，Caption，QA_iD List是否已正常适用。</li>
        <li><strong class="txtWarn">注意</strong>尤其要注意，须点击SUIO Bebug项目中的<strong>layout fixed</strong>，确认设计是否发生混乱或不自然等情况。</li>
    </ol>
    <ol class="en_US">
        <li>Click the contents of SUIO Debug in the upper-right side to check if the addForm, Caption, QA_ID List are applied accurately.</li>
        <li><strong class="txtWarn">Must-do</strong>: Especially, check whether the design is well positioned by clicking the layout fixed from the contents of SUIO Debug.</li>
    </ol>
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
                    <p class="info"><span class="date">2017.09.12</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[mBoardArea]</strong> 팝업내 width 정책 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.05.16</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[colgroup]</strong> IE7 대응을 위한 col style hack 제거</p>
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
    <h3>[mBoard] col 타입 类型</h3>
    <ol>
        <li>테이블의 각 col 사이즈는 &lt;colgroup&gt;으로 선언한다.</li>
        <li>col 사이즈는 %를 기본으로 한다.</li>
        <li>고정 width값이 필요한 것들 중 chk, date, time 만 class로 지정한다.</li>
        <li>이름, 전화번호 등 글자수가 고정인 경우, 가독성을 위해 width를 px로 고정한다.</li>
        <li>px와 %가 함께 사용될 경우, 디자인에 맞게 혼용해서 사용. (% : 해상도에 따라 가변width를 제공한다.)</li>
        <li>auto는 전체 선언된 폭에서 auto의 갯수만큼 나누어 적용되므로 여러번 사용할 수 있다.</li>
        <li>팝업에서는, 브라우저를 강제로 줄일 경우 auto가 너무 좁게 표현되어 글자가 틀어지는 현상이 있으므로 auto를 사용하지 않는다.</li>
    </ol>
    <ol class="zh_CN">
        <li>table各个col的size定为&lt;colgroup&gt;。</li>
        <li>col的size以%为准。</li>
        <li>需要固定width值的项目中， 仅chk，date，time指定为class。</li>
        <li>在姓名，电话号码等已固定字数的情况下，为了可读性，使width定为px。（在ie7，根据情况须用hack）</li>
        <li>同时使用px与%时，根据页面设计可混搭使用。（%：根据分辨率提供可变width）</li>
        <li>auto可使用多次。</li>
        <li>번역필요</li>
    </ol>
    <ol class="en_US">
        <li>Declare the col’s size of table as the &lt;colgroup&gt;.</li>
        <li>Fixing a % as the size of col is the basic.</li>
        <li>Select the chk, date, and time as a class, which need the width value.</li>
        <li>In case the number of text is fixed such as a name and phone number, fix the width in the px for readability.</li>
        <li>If both the px and % are used together, combine them in accordance with the design.</li>
        <li>The auto can be used multiple times.</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mTitle">
        <h3>Table 예시</h3>
    </div>
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:25%;" />
                <col style="width:25%;" />
                <col style="width:25%;" />
                <col style="width:25%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th scope="row">합계</th>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tfoot>
            <tbody class="tfoot">
                <tr class="sum">
                    <th scope="row">합계</th>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
                <tr>
                    <th scope="row">합계</th>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
                <tr>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mTitle">
        <h3>colgroup 예시</h3>
    </div>
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:100px;" />
                <col style="width:300px;" />
                <col style="width:10%;" />
                <col style="width:auto;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">고정폭</th>
                    <th scope="col">가변폭</th>
                    <th scope="col">auto</th>
                    <th scope="col">auto</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <th scope="row">value</th>
                    <td>px</td>
                    <td>%</td>
                    <td>auto</td>
                    <td>auto</td>
                </tr>
                <tr>
                    <th scope="row">예시</th>
                    <td>이름, 날짜</td>
                    <td>금액</td>
                    <td>메모, 비고, 여러 금액을 비교할때</td>
                    <td>메모, 비고, 여러 금액을 비교할때</td>
                </tr>
                <tr>
                    <th scope="row">value</th>
                    <td>px</td>
                    <td>%</td>
                    <td>auto</td>
                    <td>auto</td>
                </tr>
                <tr>
                    <th scope="row">示例</th>
                    <td>名字，日期</td>
                    <td>金额</td>
                    <td>记录，备注，与别的金额进行比较时</td>
                    <td>记录，备注，与别的金额进行比较时</td>
                </tr>
            </tbody>
        </table>
    </div>
'),
array(
'desc' => '
    <h3>[mBoard + g$Size] row 타입 类型</h3>
    <ol>
        <li>사이즈 기준 : gSmall,gMedium,gLarge</li>
        <li>셀병합으로 colspan 사용 될 경우, g$Size대신 &lt;colgroup&gt;에 고정 width값을 사용한다. (팝업의 &lt;colgroup&gt;의 고정width값은 주석 참고)</li>
    </ol>
    <ol class="zh_CN">
        <li>size标准：gSmall,gMedium,gLarge</li>
        <li>合并单元格使用colspan时，以&lt;colgroup&gt;代替g$Size, 使用固定的width值。（弹窗&lt;colgroup&gt;的固定width值，请参考注释。）</li>
    </ol>
    <ol class="en_US">
        <li>Standard size: gSmall,gMedium,gLarge.</li>
        <li>In case the colspan is used as a cell merge, use the fixed width value other than the g$Size in the &lt;colgroup&gt;</li>
    </ol>
', 'html' => '
    <!-- gSmall -->
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">Case</th>
                    <td>gSmall</td>
                </tr>
                <tr>
                    <th scope="row">Case</th>
                    <td>gSmall</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br />

    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">Case</th>
                    <td>gSmall</td>
                    <th scope="row">Case</th>
                    <td>gSmall</td>
                </tr>
                <tr>
                    <th scope="row">Case</th>
                    <td>gSmall</td>
                    <th scope="row">Case</th>
                    <td>gSmall</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br />

    <!-- gSmall : colspan 사용 될 경우 -->
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:154px;" />
                <col style="width:auto;" />
                <col style="width:154px;" />
                <col style="width:auto;" />
            </colgroup>
            <!-- gSmall : 팝업용 colgroup 사이즈
            <colgroup>
                <col style="width:134px;" />
                <col style="width:auto;" />
                <col style="width:134px;" />
                <col style="width:auto;" />
            </colgroup>
            -->
            <tbody>
                <tr>
                    <th scope="row">Case</th>
                    <td colspan="3">colgroup</td>
                </tr>
                <tr>
                    <th scope="row">Case</th>
                    <td>colgroup</td>
                    <th scope="row">Case</th>
                    <td>colgroup</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br />

    <!-- gMedium -->
    <div class="mBoard gMedium">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">Case</th>
                    <td>gMedium</td>
                </tr>
                <tr>
                    <th scope="row">Case</th>
                    <td>gMedium</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br />

    <div class="mBoard gMedium">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">Case</th>
                    <td>gMedium</td>
                    <th scope="row">Case</th>
                    <td>gMedium</td>
                </tr>
                <tr>
                    <th scope="row">Case</th>
                    <td>gMedium</td>
                    <th scope="row">Case</th>
                    <td>gMedium</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br />

    <!-- gMedium : colspan 사용 될 경우 -->
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:174px;" />
                <col style="width:auto;" />
                <col style="width:174px;" />
                <col style="width:auto;" />
            </colgroup>
            <!-- gMedium : 팝업용 colgroup 사이즈
            <colgroup>
                <col style="width:144px;" />
                <col style="width:auto;" />
                <col style="width:144px;" />
                <col style="width:auto;" />
            </colgroup>
            -->
            <tbody>
                <tr>
                    <th scope="row">Case</th>
                    <td colspan="3">colgroup</td>
                </tr>
                <tr>
                    <th scope="row">Case</th>
                    <td>colgroup</td>
                    <th scope="row">Case</th>
                    <td>colgroup</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br />

    <!-- gLarge -->
    <div class="mBoard gLarge">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">Case</th>
                    <td>gLarge</td>
                </tr>
                <tr>
                    <th scope="row">Case</th>
                    <td>gLarge</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br />

    <div class="mBoard gLarge">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">Case</th>
                    <td>gLarge</td>
                    <th scope="row">Case</th>
                    <td>gLarge</td>
                </tr>
                <tr>
                    <th scope="row">Case</th>
                    <td>gLarge</td>
                    <th scope="row">Case</th>
                    <td>gLarge</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br />

    <!-- gLarge : colspan 사용 될 경우 -->
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:199px;" />
                <col style="width:auto;" />
                <col style="width:199px;" />
                <col style="width:auto;" />
            </colgroup>
            <!-- gLarge : 팝업용 colgroup 사이즈
            <colgroup>
                <col style="width:164px;" />
                <col style="width:auto;" />
                <col style="width:164px;" />
                <col style="width:auto;" />
            </colgroup>
             -->
            <tbody>
                <tr>
                    <th scope="row">Case</th>
                    <td colspan="3">colgroup</td>
                </tr>
                <tr>
                    <th scope="row">Case</th>
                    <td>colgroup</td>
                    <th scope="row">Case</th>
                    <td>colgroup</td>
                </tr>
            </tbody>
        </table>
    </div>
'),
array(
'desc' => '
    <h3>[mBoard + typeFixed] Table Size 고정형 <span class="zh_CN">固定型</span><span class="en_US">Table size fixed type</span></h3>
    <ol>
        <li>한 화면에 테이블이 여러개 일 경우, 테이블 간 연계성이 있어서 가독성을 높여야 할 때 사용된다. <a href="/solution/hosting/reseller/request/domain/domain.html" target="_blank" class="txtEm"><span>[사용예시]</span></a></li>
        <li>&lt;colgroup&gt;의 width는 px단위로 입력한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>一个页面有多个table时，table间存在联系性，因此需要提高可读性时使用。<a href="/solution/hosting/reseller/request/domain/domain.html" target="_blank" class="txtEm"><span>[使用示例]</span></a></li>
        <li>&lt;colgroup&gt;的width用px单位输入。</li>
    </ol>
    <ol class="en_US">
        <li>If tables are many in a screen, it is used to increase the legibility for a connectivity among the tables. <a href="/biz/reseller/request/domain/domain.html" target="_blank" class="txtEm"><span>[사용예시]</span></a></li>
        <li>Insert the width of the &lt;colgroup&gt; in the px unit.</li>
    </ol>
', 'html' => '
    <div class="section">
        <div class="mBoard typeFixed">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col style="width:100px;" />
                    <col style="width:100px;" />
                    <col style="width:100px;" />
                    <col style="width:100px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="row">합계</th>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="section">
        <div class="mBoard typeFixed">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col style="width:100px;" />
                    <col style="width:100px;" />
                    <col style="width:100px;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="row">합계</th>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
'),
array(
'desc' => '
    <h3>[mBoard + typeDivide] 동일한 &lt;thead&gt;가 있는 &lt;table&gt; 사이에 공간이 필요할 때</h3>
    <h3 class="zh_CN">[mBoard + typeDivide] 具有同样&lt;thead&gt;的&lt;table&gt;间需要空间的情况</h3>
    <h3 class="en_US">[mBoard + typeDivide] When need a space in between the &lt;table&gt; which include the identical &lt;thead&gt;</h3>
    <ol>
        <li>동일한 &lt;thead&gt;를 가지고 있으나, 테이블 사이의 구분을 위해 margin이 필요한 경우에 사용한다.</li>
        <li>하위 &lt;table&gt;에 .typeDivide 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>具有相同的&lt;thead&gt;，但为了区分table，根据需求可使用margin。</li>
        <li>在子&lt;table&gt;中添加 .typeDivide。</li>
    </ol>
    <ol class="en_US">
        <li>It is used to indicate the separated tables with the margin, even if the identical &lt;thead&gt; is used.</li>
        <li>Add the .typeDivide in the lower &lt;table&gt;.</li>
    </ol>
', 'html' => '
    <div class="section">
        <div class="mBoard">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mBoard typeDivide">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mBoard &gt; table + gDivision], [mBoard + gDivision]</h3>
    <ol>
        <li>gDivision : 화면에서는 하나의 &lt;table&gt;로 보이지만, 브라우저 속도나 개발소스 분리 등의 이슈로 &lt;table&gt;을 분리 할 때 사용한다.</li>
        <li>&lt;div&gt;, &lt;table&gt; 태그에 사용 가능</li>
    </ol>
    <ol class="zh_CN">
        <li>gDivision :虽然在页面显示为一个&lt;table&gt;，但因为打开网页的速度或开发代码分离等问题，需要分割&lt;table&gt;时使用。</li>
        <li>可用于&lt;div&gt;，&lt;table&gt;标签。</li>
    </ol>
    <ol class="en_US">
        <li>gDivision : In a screen the &lt;table&gt;seems one, but it is separated for an issue such as the speed of browser or the division of development source.</li>
        <li>Available for the &lt;div&gt; and &lt;table&gt; tags. </li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:154px;" />
                <col style="width:auto;" />
                <col style="width:154px;" />
                <col style="width:auto;" />
            </colgroup>
            <tbody>
                <tr>
                    <th scope="row">제목 <strong class="icoRequired">필수</strong></th>
                    <td colspan="3">내용</td>
                </tr>
                <tr>
                    <th scope="row">제목</th>
                    <td colspan="3">내용</td>
                </tr>
            </tbody>
        </table>
        <table border="1" summary="" class="gDivision"><!-- gDivision : 테이블 구분이 불가피 한 경우 -->
            <caption>제목</caption>
            <colgroup>
                <col style="width:154px;" />
                <col style="width:auto;" />
                <col style="width:154px;" />
                <col style="width:auto;" />
            </colgroup>
            <tbody>
                <tr>
                    <th scope="row">제목 <strong class="icoRequired">필수</strong></th>
                    <td colspan="3">내용</td>
                </tr>
                <tr>
                    <th scope="row">제목</th>
                    <td>내용</td>
                    <th scope="row">제목</th>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mBoard gSmall gDivision"><!-- gDivision : 테이블 구분이 불가피 한 경우 -->
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">제목 <strong class="icoRequired">필수</strong></th>
                    <td>내용</td>
                </tr>
                <tr>
                    <th scope="row">제목</th>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>