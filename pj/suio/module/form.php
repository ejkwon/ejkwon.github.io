<?php

// 모듈 전체 제목
$header_name = 'mForm';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>입력폼의 다양한 예제는 <a href="/suio/include/layout.php?MODULE=board_row_write">[게시판 쓰기/수정]</a>를 참고한다. <a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=549356272" target="_blank">[Form tag Display 사양가이드]</a></li>
    </ol>
    <ol class="zh_CN">
        <li>有关输入框的多种例子，请参考<a href="/suio/include/layout.php?MODULE=board_row_write">[发表/修改留言板]</a>。</li>
    </ol>
	<ol class="en_US">
		<li>Refer the <a href="/suio/include/layout.php?MODULE=board_row_write">[notice board write/edit]</a> for the various examples of insert format. <a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=549356272" target="_blank">[Form tag Display Spec Guide]</a></li>
	</ol>
';

// 프리뷰를 위한 태그 리셋  (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .w120 { width:120px; }
        .w180 { width:180px; }
        .addForm { display:block !important; }
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
                    <p class="info"><span class="date">2018.06.07</span><span class="writer">소라</span></p>
                    <p class="title"><strong>[mForm]</strong> fToggle 버튼 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.11.09</span><span class="writer">조혜민</span></p>
                    <p class="title"><strong>[mForm]</strong> fText 초기화 버튼 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.03.22</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[mForm]</strong> disabled와 readonly 사용예시 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.06.14</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[gLabel]</strong> 여백가이드 확장</p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.06.08</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[mForm]</strong> mForm의 사용예시 추가</p>
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
    <ol>
        <li>form 태그에 disabled 처리가 필요한 경우 disabeld="disabled" 속성값으로 처리한다.</li>
        <li>개발편의상 데이터전송을 위해 readonly 속성을 disabled처럼 사용하는 경우 disabled class를 사용하며, 수정을 금지하게 하려는 readonly 속성에서는 절대 사용을 금한다.</li>
        <li>fTextarea 은 col, row는 필수값으로 생략이 불가능하다. style로 width를 지정할 수는 있으나 height 는 생략한다. 단 width를 제거 했을시에도 입력값이 확보되도록 col 의 사이즈를 style로 선언한 width 와 비슷해 보이게끔 입력할 것을 권장 한다.</li>
        <li>fToggle은 사용자가 버튼을 선택하는 즉시 저장될 때 사용하는 버튼이다.</li>
    </ol>
    <ol>
        <li>（现在使用class="disabled"）</li>
        <li>为了方便开发传送数据，用readonly属性替用disabled属性的情况时， 建议使用class="disabled"， 禁用readonly属性， 该属性是无法对内容修改。</li>
        <li>fTextarea的col , row值是不可省略。 用style指定width, 可省略height。 当删除width时，根据col值的宽度要跟width值的宽度相似。</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:100px;" />
                <col style="width:auto;" />
                <col style="width:auto;" />
                <col style="width:auto;" />
                <col style="width:auto;" />
                <col style="width:auto;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">text</th>
                    <th scope="col">checkbox/radio</th>
                    <th scope="col">toggle (checkbox)</th>
                    <th scope="col">select</th>
                    <th scope="col">select multiple</th>
                    <th scope="col">textarea</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Class</th>
                    <td>fText</td>
                    <td>fChk</td>
                    <td>fToggle</td>
                    <td>fSelect</td>
                    <td>fMultiple</td>
                    <td>fTextarea</td>
                </tr>
                <tr>
                    <th scope="row">예시</th>
                    <td><input type="text" class="fText" style="width:100px;" /></td>
                    <td>
                        <label class="gLabel"><input type="radio" class="fChk" /> 전체</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" checked="checked" /> 전체</label>
                    </td>
                    <td>
                        <label class="fToggle">
                            <input type="checkbox" class="check">
                            <span class="label" aria-hidden="true"></span>
                        </label>
                    </td>
                    <td><select class="fSelect"><option>- 이메일 선택 -</option></select></td>
                    <td><select class="fMultiple" multiple="multiple"><option>- 이메일 선택 -</option></select></td>
                    <td><textarea class="fTextarea" cols="20" rows="4" style="width:100px;"></textarea></td>
                </tr>
                <tr>
                    <th scope="row">disabled</th>
                    <td><input type="text" class="fText" style="width:100px;" disabled="disabled" /></td>
                    <td>
                        <label class="gLabel"><input type="radio" class="fChk" disabled="disabled" /> 전체</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" checked="checked" disabled="disabled" /> 전체</label>
                    </td>
                    <td></td>
                    <td><select class="fSelect" disabled="disabled"><option>- 이메일 선택 -</option></select></td>
                    <td><select class="fMultiple" multiple="multiple" disabled="disabled"><option>- 이메일 선택 -</option></select></td>
                    <td><textarea class="fTextarea" cols="20" rows="3" style="width:100px;" disabled="disabled"></textarea></td>
                </tr>
                <tr>
                    <th scope="row">readonly</th>
                    <td><input type="text" class="fText disabled" style="width:100px;" readonly="readonly" /></td>
                    <td>미지원</td>
                    <td>미지원</td>
                    <td>미지원</td>
                    <td>미지원</td>
                    <td><textarea class="fTextarea disabled" cols="20" rows="3" style="width:100px;" readonly="readonly"></textarea></td>
                </tr>
                <tr>
                    <th scope="row">fReset</th>
                    <td>
                        <div class="fReset selected"><!-- 참고: 텍스트 입력중일 때, fReset에 class="selected" 추가. -->
                           <input type="text" class="fText" style="width:100px;" /><button type="button" class="btnReset">입력 초기화</button>
                        </div>
                    </td>
                    <td>미지원</td>
                    <td>미지원</td>
                    <td>미지원</td>
                    <td>미지원</td>
                    <td>미지원</td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>[gLabel / gNumber]</h3>
    <ol>
        <li>form 태그는 .gLabel을 이용해 정렬한다.</li>
        <li>좁은 여백이 필요할때는 gSingleLabel를 이용하거나 &ampnbsp;를 활용할 수 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>form标签用 .gLabel排列。</li>
        <li>如需窄间距时，可以使用gSingleLabel或&ampnbsp;。</li>
    </ol>
    <ol class="en_US">
        <li>Align the form tag, using the .gLabel.</li>
        <li>In case a narrow space is needed, use the gSingleLabel or the &ampnbsp;.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:50px;" />
                <col style="width:130px;" />
                <col style="width:130px;" />
                <col style="width:180px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">中文</th>
                    <th scope="col" class="en_US">ENGLISH</th>
                    <th scope="col">Class</th>
                    <th scope="col">설명 说明</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">L-1</th>
                    <th>기본형</th>
                    <th class="zh_CN">基本样式</th>
                    <th class="en_US">The general type</th>
                    <th>.gLabel</th>
                    <td>
                        <label class="gLabel"><input type="checkbox" class="fChk" checked="checked" /> 예시</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">L-1-1</th>
                    <th>기본형 + 좁은폭</th>
                    <th class="zh_CN">基本样式</th>
                    <th class="en_US">The general type + narrow width</th>
                    <th>.gSingleLabel</th>
                    <td>
                        <label class="gSingleLabel"><input type="checkbox" class="fChk" checked="checked" /> 예시</label>
                        <label class="gSingleLabel"><input type="checkbox" class="fChk" /> 예시</label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">L-1-2</th>
                    <th>기본형 + 좁은폭</th>
                    <th class="zh_CN">基本样式</th>
                    <th class="en_US">The general type + narrow width</th>
                    <th>&ampnbsp; </th>
                    <td>
                        <label><input type="checkbox" class="fChk" checked="checked" /> 예시</label>&nbsp;
                        <label><input type="checkbox" class="fChk" /> 예시</label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">L-2</th>
                    <th>도움말 제공</th>
                    <th class="zh_CN">提供<帮助></th>
                    <th class="en_US">Support Help</th>
                    <th>.gLabel + .mTooltip</th>
                    <td>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label>
                        <div class="mTooltip gMedium gLabel">
                            <button type="button" class="icon eTip">도움말</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">예시</strong>
                                    <ul class="mList">
                                        <li>예시</li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">L-3</th>
                    <th>넓이 선언</th>
                    <th class="zh_CN">宽度设置</th>
                    <th class="en_US">declare width</th>
                    <th>.gLabel.w$SIZE</th>
                    <td>
                        <label class="gLabel w200"><input type="checkbox" class="fChk" /> 예시) 넓이 200px인 항목</label>
                        <label class="gLabel w160"><input type="checkbox" class="fChk" /> 예시) 넓이 160px인 항목</label>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">L-1</th>
                    <th rowspan="2">추가 입력형</th>
                    <th rowspan="2" class="zh_CN">附加输入项</th>
                    <th rowspan="2" class="en_US">Additional input type</th>
                    <th>.gLabel + span.gLabel</th>
                    <td>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label><span class="gLabel"><input type="text" class="fText" style="width:120px;" /></span>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label><span class="gLabel"><select class="fSelect"><option>선택</option></select></span>
                        <ul class="txtInfo">
                            <li>&lt;label&gt; 요소 안에는 하나의 form 만 사용 가능하므로, 선택값이 2개 이상일 경우 &lt;span.gLabel&gt;로 처리한다.</li>
                            <li class="zh_CN"><span class="txtMore">&lt;label&gt;元素中仅使用一个form，选项值为2个以上时，用 &lt;span.gLabel&gt; 处理。</span></li>
                            <li class="en_US">Since only one format can be used in the &lt;label&gt;, handle it with the &lt;span.gLabel&gt; if more than 2 values are selected.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.gLabel + .fSelect.gLabel</th>
                    <td>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label><input type="text" class="fText gLabel" style="width:120px;" />
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label><select class="fSelect gLabel"><option>선택</option></select>
                        <ul class="txtInfo">
                            <li>.fSelect, .fText에 gLabel을 추가 하는것도 가능하다.</li>
                            <li class="zh_CN"><span class="txtMore">在.fSelect, .fText也能添加gLabel。</span></li>
                            <li class="en_US"><span class="txtMore">It is also possible to add the gLabel in the .fSelect, .fText.</span></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">L-4</th>
                    <th scope="row">정렬</th>
                    <th class="zh_CN">排列</th>
                    <th class="en_US">Alignment</th>
                    <th scope="row">.gWidth.w$SIZE</th>
                    <td>
                        <ul class="mForm typeVer">
                            <li>
                                <span class="gWidth w60">예시</span><input type="text" class="fText right" style="width:70px;" />
                                <span class="txtInfo">fText, fSelect 시작줄을 맞추기 위해 사용한다.</span>
                            </li>
                            <li class="zh_CN">
                                <span class="gWidth w60">추가 예시</span><input type="text" class="fText right" style="width:70px;" />
                                <span class="txtInfo"><span class="txtMore">fText、fSelect纵向对齐时使用。</span></span>
                            </li>
                            <li class="en_US">
                                <span class="gWidth w60">추가 예시</span><input type="text" class="fText right" style="width:70px;" />
                                <span class="txtInfo"><span class="txtMore">Use it to align the start line of the fText, fSelect.</span></span>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">L-5</th>
                    <th scope="row">수량</th>
                    <th class="zh_CN">数量</th>
                    <th class="en_US">Quantity</th>
                    <th scope="row">.gNumber</th>
                    <td>
                        <span class="gNumber">
                            <input type="text" class="fText" />
                            <button type="button" class="up"><span>증가</span></button>
                            <button type="button" class="down"><span>감소</span></button>
                        </span>
                        kg
                    </td>
                </tr>
                <tr>
                    <th scope="row">L-6</th>
                    <th scope="row">추가 입력형</th>
                    <th class="zh_CN">数量</th>
                    <th class="en_US">Quantity</th>
                    <th scope="row">.gForm</th>
                    <td>
                        <select class="fSelect"><option>- 선택 -</option></select>
                        <div class="gForm">
                            <input type="text" class="fText" style="width:30px;" />
                            <input type="text" class="fText" style="width:30px;" />
                            <input type="text" class="fText" style="width:30px;" />
                        </div>
                        <ul class="txtInfo">
                            <li>
                                select 에서 option을 선택했을때 select 오른쪽에 노출되는 여러 form tag가 필요할 경우 편의를 위해 추가한다.<br />
                                추가되는 tag가 하나일경우 생략 가능하며 개발팀 편의를 위한 목적 외에는 아무런 기능이 없다.<br />
                                mTooltip 등 block 요소 대응을 대비하여 div으로 처리되었으나, blcok 요소가 없다면 inline 태그인 span을 권장한다.
                             </li>
                            <li class="zh_CN">select中选择option后右边需要添加几个form tag的时候使用.<br />
                                  如果追加的tag只有一个时可省略, 除了给开发组提供方便之外, 毫无功能和效果.<br />
                                  因为考虑到mTooltip等block属性的元素使用了div, 但其实像span等inline标签也可以使用.
                            </li>
                            <li class="en_US">
                                selecting an option, add many form tags to appear on the right side of the select if necessary for the convenience.<br />
                                It is possible to skip if there is only one tag that is added, and no function is needed unless it is for the convenience of the development team.<br />
                                It has been handled with the div to respond to the block cases such as the mTooltip, but it is possible to use the inline tag like the span.
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>[mForm + typeVer] 세로진열 标签的竖向排列 Vertical Array</h3>
    <ol>
        <li>Form 태그가 세로형의 형태로 다양한 조합으로 제공될 때 사용 된다.</li>
        <li>첫번째 선택을 하고, 추가 선택이 필요한 경우 .addForm을 사용한다. 화면상에서는 보이지 않다가 첫번째 선택값을 체크했을때만 화면에 노출된다. </li>
        <li>addForm 영역은 UI개발팀의 작업편의상 fe.cafe24.com 사이트에서만 화면에 보이며 실제 쇼핑몰에서는 첫번째 선택 전까지 화면에서 보이지 않는다. 작업시 오른쪽 상단에 addForm 을 클릭하면 화면에서 노출될때와 아닐때를 볼 수 있다. 디버깅 확인하기 <a href="/smartAdmin/shop/operate/system.html" class="txtEm" target="_blank" title="새창열림">[활용예시]</a></li>
        <li>.addForm 영역은 fe.cafe24.com 에서 mouseover시 <span style="outline:1px dashed blue; padding:1px 3px; margin:0 3px;">파란색 박스</span>로 확인할 수 있다. </li>
    </ol>
    <ol class="zh_CN">
        <li>Form标签以竖排形式、显示多种组合时使用。</li>
        <li>选择第一个选项后， 需要继续选择时用.addForm。一般不在页面显示，只在已选择第一个选项值时显示。</li>
        <li>为方便UI开发部的工作，addForm区域仅在fe.cafe24.com网站页面显示，未做出第一次选择前，不会显示在实际购物网站中。编辑时点击右上端的addform，可查看页面显示状态与不显示状态的情况。 调试确认 <a href="/smartAdmin/shop/operate/system.html" class="txtEm" target="_blank" title="새창열림">[应用示例]</a></li>
        <li>.addform区域在fe.cafe24.com网站中mouseover时，可通过<span style="outline:1px dashed blue; padding:1px 3px; margin:0 3px;">蓝色框</span>确认。</li>
    </ol>
	<ol class="en_US">
		<li>It is used when the form tag is provided with the diverse combination in the vertical type.</li>
		<li>If additional option is needed after the first choice, use .addForm. It does not appear on the screen until the value is checked.</li>
		<li>The area of addForm is shown in the site of fe.cafe24.com for the convenience of UI development team, and does not appear on the actual shopping mall before the first choice. Clicking the addForm on the up-right corner as working on it, it is possible to see when it is shown and when not. Check debugging. <a href="/smartAdmin/shop/operate/system.html" class="txtEm" target="_blank" title="새창열림">[example]</a></li>
		<li>The area of .addForm can be confirmed in a blue box in the fe.cafe24.com with mouseover function.</li>
	</ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:60px;" />
                <col style="width:130px;" />
                <col style="width:130px;" />
                <col style="width:180px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">中文</th>
                    <th scope="col" class="en_US">ENGLISH</th>
                    <th scope="col">Class</th>
                    <th scope="col">설명 说明</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">V-1</th>
                    <th>기본형</th>
                    <th class="zh_CN">基本样式</th>
                    <th class="en_US">general type </th>
                    <th>ul.mForm.typeVer</th>
                    <td>
                        <ul class="mForm typeVer">
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 1</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 2</label></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">V-2</th>
                    <th>기본형 정렬</th>
                    <th class="zh_CN">基本样式排列</th>
                    <th class="en_US">general type array</th>
                    <th>.gWidth.w$SIZE</th>
                    <td>
                        <ul class="mForm typeVer">
                            <li>
                                <span class="icoDot"></span> <span class="gWidth w70">예시입니다</span>
                                <input type="text" class="fText right" style="width:70px;" />
                            </li>
                            <li>
                                <span class="icoDot"></span> <span class="gWidth w70">예시다</span>
                                <input type="text" class="fText right" style="width:70px;" />
                            </li>
                            <li>
                                <span class="icoDot"></span> <span class="gWidth w70">예시</span>
                                <input type="text" class="fText right" style="width:70px;" />
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">V-3</th>
                    <th>추가 입력형,<br />넓이 선언</th>
                    <th class="zh_CN">添加输入项，<br />宽度设置</th>
                    <th class="en_US">additional input type<br />declare width</th>
                    <th>.gLabel + span.gLabel<br />.gLabel.w$SIZE</th>
                    <td>
                        <ul class="mForm typeVer">
                            <li>
                                <label class="gLabel w120"><input type="radio" class="fChk" /> 예시입니다</label>
                                <span class="gLabel"><input type="text" class="fText" style="width:150px;" value="예시" /></span>
                                <span class="gLabel">&lt;span.gLabel&gt; 삽입해 여백을 재조절 하고, 넓이를 선언하여 추가 입력 form의 시작점을 정렬한다.</span>
                            </li>
                            <li>
                                <label class="gLabel w120"><input type="radio" class="fChk" /> 예시입니다</label>
                                <span class="gLabel"><select class="fSelect" style="width:162px;"><option>선택하세요</option></select></span>
                                <span class="gLabel"><span class="txtMore">插入&lt;span.gLabel&gt; 重新调整间距，设置宽度对齐添加的输入框。</span></span>
                            </li>
                            <li>
                                <label class="gLabel w120"><input type="radio" class="fChk" /> 예시다</label>
                                <span class="gLabel"><input type="text" class="fText right" style="width:50px;" value="3,000" /> 원</span>
                                <span class="gLabel">.fText에 right를 추가하면 오른쪽으로 정렬 할수 있다. <span class="txtMore">在fText添加right，完成右对齐。</span></span>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">V-4</th>
                    <th>확장형</th>
                    <th class="zh_CN">展开型</th>
                    <th class="en_US">extended type</th>
                    <th>.addForm</th>
                    <td>
                        <ul class="mForm typeVer">
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 예시</label>
                                <p class="addForm"><input type="text" class="fText" style="width:100px;" /></p>
                            </li>
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 예시</label>
                                <p class="addForm"><select class="fSelect"><option>선택하세요</option></select></p>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">V-5</th>
                    <th>확장형<br />(가로진열)</th>
                    <th class="zh_CN">展开型<br />(横向排列)</th>
                    <th class="en_US">extended type<br />(horizontal array)</th>
                    <th>ul.addForm.gHor</th>
                    <td>
                        <ul class="mForm typeVer">
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 예시</label>
                            </li>
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (가로진열)</label>
                                <ul class="addForm gHor">
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label> <input type="text" class="fText" style="width:150px;" /></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">V-6</th>
                    <th>확장형<br />(세로진열)</th>
                    <th class="zh_CN">展开型<br />(竖向排列)</th>
                    <th class="en_US">extended type<br />(vertical array)</th>
                    <th>ul.addForm.gVer</th>
                    <td>
                        <ul class="mForm typeVer">
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 예시</label>
                            </li>
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (세로진열)</label>
                                <ul class="addForm gVer">
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 1</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 2</label></li>
                                    <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label> <input type="text" class="fText" style="width:150px;" /></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">V-7</th>
                    <th>확장형<br />(다단진열)</th>
                    <th class="zh_CN">展开型<br />(阶梯式排列)</th>
                    <th class="en_US">extended type<br />(multiple-stage array)</th>
                    <th>ul.addForm&gt; ul.subform</th>
                    <td>
                        <ul class="mForm typeVer">
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 예시</label>
                            </li>
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (다단 진열)</label>
                                <ul class="addForm gVer">
                                    <li>
                                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시 1</label>
                                        <ul class="subform">
                                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 1-1</label></li>
                                            <li><span class="icoDot"></span> 예시 1-2</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시 2</label>
                                        <p class="subform"><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 2-1</label></p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">V-8</th>
                    <th>확장형 (모듈)</th>
                    <th class="zh_CN">展开型 (模块)</th>
                    <th class="en_US">extended type<br />(module)</th>
                    <th>ul.addForm &gt; m$Name</th>
                    <td>
                        <ul class="mForm typeVer">
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 예시</label>
                            </li>
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (모듈)</label>
                                <div class="addForm">
                                    <div class="mSelect gSmall gFunction eSelect">
                                        <ul>
                                            <li class="selected">
                                                <strong>버튼을 포함한 목록형 단일선택</strong>
                                                <button class="btnIcon icoDel"><span>삭제</span></button>
                                            </li>
                                            <li>
                                                <strong>버튼을 포함한 목록형 단일선택</strong>
                                                <button class="btnIcon icoDel"><span>삭제</span></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>[mForm + typeHor] 가로진열 标签的横向排列 Horizontal Array</h3>
    <ol>
        <li>Form 태그가 가로형의 형태로 다양한 조합으로 제공될 때 사용 된다.</li>
        <li>일반적인 가로진열일 경우, &lt;ul&gt;구조를 생략하지만, 선택값들이 모두 동일한 폭으로 제공되어야 할때 gWidth와 함께 사용 한다. <a href="/smartAdmin/shop/operate/operator_modify.html" class="txtEm" target="_blank" title="새창열림">[예시) "페이지 접근권한" 항목 확인]</a></li>
        <li>.addForm이 사용되어야 할때 div.mForm으로 감싸준다. (확장형-가로진열 참고)</li>
    </ol>
    <ol class="zh_CN">
        <li>Form标签以横排形式、显示多种组合时使用。</li>
        <li>一般的横向排列将省略 &lt;ul&gt;结构，但项目宽度同样时, class值中添加gWidth。<a href="/smartAdmin/shop/operate/operator_modify.html" class="txtEm" target="_blank" title="새창열림">[例子)查看“页面访问权限”项目]</a></li>
        <li>需要使用.addForm时，用div.mForm套住。（参考展开型-横向排列）</li>
    </ol>
	<ol class="en_US">
		<li>It is used when the form tag is provided with the diverse combination in the horizontal type.</li>
		<li>If it is horizontal array, the &lt;ul&gt; structure is skipped, but when the chosen values should be provided in the same width, gWidth should be used together. <a href="/smartAdmin/shop/operate/operator_modify.html" class="txtEm" target="_blank" title="새창열림">[example] check the contents “page access authority”]</a></li>
		<li>Cover with div.mForm when the .addForm has to be used. (refer the extended type-horizontal array)</li>
	</ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:60px;" />
                <col style="width:100px;" />
                <col style="width:100px;" />
                <col style="width:180px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">中文</th>
                    <th scope="col" class="en_US">ENGLISH</th>
                    <th scope="col">Class</th>
                    <th scope="col">설명 说明</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">H-1</th>
                    <th>기본형</th>
                    <th class="zh_CN">基本样式</th>
                    <th class="en_US">general type</th>
                    <th>.gLabel</th>
                    <td>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시 1</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시 2</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시 3</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시 4</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시 5</label>
                        <ul class="txtInfo">
                            <li>ul.mForm.typeHor 로 사용하지 않도록 유의한다.</li>
                            <li>请勿使用ul.mForm.typeHor.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">H-2</th>
                    <th>추가 입력형</span></th>
                    <th class="zh_CN">附加输入型</th>
                    <th class="en_US">additional input type</th>
                    <th>.gLabel + span.gLabel</th>
                    <td>
                        <ul class="mForm typeHor">
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 예시</label>
                                <span class="gLabel"><input type="text" class="fText" style="width:150px;" value="예시" /></span>
                            </li>
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 예시) 금액</label>
                                <span class="gLabel"><input type="text" class="fText right" style="width:50px;" value="3,000" /> 원</span>
                            </li>
                            <li>
                                <label class="gLabel"><input type="radio" class="fChk" /> 예시) 필수선택</label>
                                <span class="gLabel"><select class="fSelect"><option>선택하세요</option></select></span>
                            </li>
                        </ul>
                        <ul class="txtInfo">
                            <li>추가 입력형도 가능하지만, 사용성이 직관적이지 않으므로 권장하지 않는다.</li>
                            <li>可以使用附加输入型，但是由于使用性能欠佳，所以不建议使用。</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">H-3</th>
                    <th>블럭형</span></th>
                    <th class="zh_CN">block型</th>
                    <th class="en_US">block type</th>
                    <th>ul.mForm.typeHor</th>
                    <td>
                        <ul class="mForm typeHor">
                            <li class="block"><label class="gLabel"><input type="checkbox" class="fChk" /> 예시) 전체선택</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 1</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 2</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 3</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 4</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 5</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 6</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 7</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 8</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 9</label></li>
                            <li class="block"><label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label> <input type="text" class="fText" style="width:100px;" /></li>
                        </ul>
                        <ul class="txtInfo">
                            <li>전체선택과 같이 한줄을 차지하는 항목이 필요할때 li에 .block을 추가한다. .addForm.gHor과 혼선되지 않도록 주의한다.</li>
                            <li><span class="txtMore">如需像<全部选择>般单独占据一整行的项目, 请在li添加.block。请注意不要与.addForm.gHor混淆。</span></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">H-4</th>
                    <th>확장형<br />(가로진열)</th>
                    <th class="zh_CN">展开型<br />(横向排列)</th>
                    <th class="en_US">extended type<br />(horizontal array)</th>
                    <th> ul.addForm.gHor</th>
                    <td>
                        <div class="mForm">
                            <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (가로진열)</label>
                            <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (가로진열)</label>
                            <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (가로진열)</label>
                            <ul class="addForm gHor">
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 1</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 2</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 3</label></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">H-5</th>
                    <th>확장형<br />(세로진열)</th>
                    <th class="zh_CN">展开型<br />(竖向排列)</th>
                    <th class="en_US">extended type<br />(vertical array)</th>
                    <th> ul.addForm.gVer</th>
                    <td>
                        <div class="mForm">
                            <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (세로진열)</label>
                            <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (세로진열)</label>
                            <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (세로진열)</label>
                            <ul class="addForm gVer">
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 1</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 2</label></li>
                                <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예시 3</label></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">H-6</th>
                    <th>확장형<br />(단독진열)</th>
                    <th class="zh_CN">展开型<br />(单独排列)</th>
                    <th class="en_US">extended type<br />(individual array)</th>
                    <th>p.addForm</th>
                    <td>
                        <div class="mForm">
                            <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (단독진열)</label>
                            <label class="gLabel"><input type="radio" class="fChk" /> 확장형 (단독진열)</label>
                            <p class="addForm"><input type="text" class="fText" style="width:100px;" /><span class="txtInfo">예시) 설명문구</span></p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">H-7</th>
                    <th>타이틀과 조합<br />(세로형)</span></th>
                    <th class="zh_CN">标题与组合</th>
                    <th class="en_US">combination with title<br />(vertical type)</th>
                    <th>ul.mForm.typeHor.gIndent</th>
                    <td>
                        <span class="icoDot"></span> 예시) 대표문구
                        <ul class="mForm typeHor gIndent">
                            <li><label class="gLabel"><input type="checkbox" class="fChk" checked="checked" /> 전체결제</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 신용카드</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 무통장</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 에스크로/전자보증</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 실시간 계좌이체</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 휴대폰결제</label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk" /> 예치금결제</label></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">H-8</th>
                    <th>화면 상단정렬</th>
                    <th class="zh_CN">页面上端排列</th>
                    <th class="en_US">array of the upper screen</th>
                    <th>ul.mForm.typeHor.gTop</th>
                    <td>
                        <ul class="mForm typeHor gTop">
                            <li><label class="gLabel"><input type="checkbox" class="fChk top" /> <img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_own1.png" alt="" /></label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk top" /> <img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_own2.png" alt="" /></label></li>
                            <li><label class="gLabel"><input type="checkbox" class="fChk top" /> <img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_own3.png" alt="" /></label></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>[mForm] 활용 的应用</h3>
    <ol>
        <li>&lt;label&gt;의 진열이 아닌 경우에도 mForm을 활용할 수 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>不属于&lt;label&gt;排列的情况下也能用mForm。</li>
    </ol>
	<ol class="en_US">
		<li>The mForm can be used even if the array is not by the &lt;label&gt;</li>
	</ol>
', 'html' => '
    <div class="mBoard gMedium">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">div.mForm > p.addForm</th>
                    <td>
                        <div class="mForm">
                            <select class="fSelect full">
                                <option>- 선택 -</option>
                            </select>
                            <p class="addForm">
                                <span class="gWidth w70"><span class="icoDot"></span> 예시</span>
                                <input type="text" style="width:100px;" class="fText" /><span class="txtInfo">예시) 설명문구</span>
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">ul.mForm</th>
                    <td>
                        <ul class="mForm typeVer">
                            <li><input type="text" class="fText" style="width:200px;" /> <button type="button" class="btnIcon icoPlus"><span>추가</span></button></li>
                            <li><input type="text" class="fText" style="width:200px;" /> <button type="button" class="btnIcon icoPlus"><span>추가</span></button> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">ul.mForm > ul.addForm</th>
                    <td>
                        <div class="mForm">
                            <label class="gLabel"><input type="radio" class="fChk" /> 사용함</label>
                            <label class="gLabel"><input type="radio" class="fChk" /> 사용안함</label>
                            <ul class="addForm gVer">
                                <li><input type="text" class="fText" style="width:200px;" /> <button type="button" class="btnIcon icoPlus"><span>추가</span></button></li>
                                <li><input type="text" class="fText" style="width:200px;" /> <button type="button" class="btnIcon icoPlus"><span>추가</span></button> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>