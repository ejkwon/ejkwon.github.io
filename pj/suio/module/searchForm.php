<?php

// 모듈 전체 제목
$header_name = 'mSearchForm, mInputForm';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = '';

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
                    <p class="info"><span class="date">2016.05.25</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[inputFormArea]</strong> 기본형/그룹형 구분 추가, 버튼고정형 추가</p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.05.24</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[mInputForm]</strong> 기본형/그룹형 구분 추가, 버튼고정형 추가</p>
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
    <div class="sampleTitle">
        <h3>[mSearchForm]</h3>
    </div>
    <ol>
        <li>상품에서만 사용되었다가 전사 사용으로 확장되어 모듈명만 만들었으며, 이전에 만든 화면의 경우 모듈명이 없을 수 있다.</li>
        <li>width.css에 관련 CSS가 있어 전사 사용이 가능하다. (다른 파일로 변경 예정)</li>
        <li>테스트 스크립트를 넣어야 정상적인 UI확인이 가능하다. <span class="txtEm">HTML Preview Open</span>를 클릭하여 script를 참고한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>仅在商品中使用的mSearchForm扩展到全网使用，因此只制作了模块名，之前制作的页面有可能无模块名。</li>
        <li>因width.css有相关CSS，可在全网使用。（预计变更为其他文件）</li>
        <li>须加入text script才能确认正常的UI。点击<span class="txtEm">HTML Preview Open</span>可参考script。</li>
    </ol>
    <ol class="en_US">
        <li>It used to be utilized in the product only and gradually expanded for the entire company’s service, so there is only the name of module and it may not be for the screens that are made before.</li>
        <li>There is the CSS related to the width.css that can be utilized for the whole company’s service. (the file will be changed to another)</li>
        <li>The UI can be checked by inserting a test script. Refer the script by clicking the <span class="txtEm">HTML Preview Open.</span></li>
    </ol>
', 'html' => '
    <!-- 참고 : chzn 테스트용으로 개발소스에 적용하는 범위 아님 -->
    <script type="text/javascript" src="/js/chosen.jquery.js"></script>
    <script type="text/javascript">
        $(function(){
            $(".chzn-select").chosen();
            $(".chzn-select-deselect").chosen({allow_single_deselect:true});
        });
    </script>
    <!-- //참고 -->

    <div class="mBoard">
        <table border="1" summary="">
            <caption>옵션세트</caption>
            <colgroup>
               <col style="width:150px;" />
               <col style="width:150px;" />
               <col style="width:auto;" />
            </colgroup>
            <tbody>
                <tr>
                    <th scope="row">기본형</th>
                    <th scope="row">基本样式</th>
                    <td>
                        <select data-placeholder="- 전체 판매내역 -" class="mSearchForm chzn-select-deselect" style="width:350px;">
                            <option value=""></option>
                            <option value="가제조사">가제조사</option>
                            <option value="나제조사">나제조사</option>
                            <option value="다제조사">다제조사</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

'),
array(
'desc' => '
    <div class="sampleTitle">
        <h3>[mInputForm]</h3>
    </div>
    <ol>
        <li>&lt;input type="text"&gt;에 입력시 도움을 주는 레이어가 활성화 되는 UI가 필요할 경우 사용한다.</li>
        <li>mBoard에서 입력시 mInputForm을 사용하며, 버튼 클릭시 검색 UI가 필요할 경우 inputFormArea를 사용한다.</li>
        <li>일반적으로는 ul.list만 사용가능하며, ul의 제목 등의 구분이 필요한 그룹형을 필요할 경우 div.list 로 감싸준다. </li>
        <li>typeCtrl : 검색 후 컨트롤을 위한 버튼 등이 들어갈 수 있는 UI이며 스크롤영역을 감싸준다.</li>
        <li>돋보기 아이콘은 IE에서 X와 중첩현상과 글자가 길어질때 겹침현상이 있으므로 포커스 됐을 경우에는 빠진다.</li>
        <li>[검색 기본형]과 [검색 그룹형] 에서 검색결과값은 생략이 가능하다.</li>
    </ol>
    <ol class="zh_CN">
        <li>在&lt;input type="text"&gt;中输入时，需要可激活起帮助作用的layer的UI时使用。</li>
        <li>在mBoard中输入时，使用mInputForm，在点击按钮需要搜索UI的情况使用inputFormArea。</li>
        <li>通常为ul.list专用，如需区分组合样式的ul标题等因素时，则用div.list套住。</li>
        <li>typeCtrl : 搜索后为了调控按钮等能够进入UI，会将滚动区域套住。</li>
        <li>放大镜icon在 IE上， 会与删除按钮（X）出现重叠显现，因此获得焦点后放大镜icon会隐藏。</li>
        <li>[검색 기본형] 与 [검색 그룹형] 中可以省略搜索结果。</li>
    </ol>
    <ol class="en_US">
        <li>Use it in case a UI is needed that activate a layer helping input in the &lt;input type="text"&gt;</li>
        <li>Use the mlnputForm when writing in the mBoard, and use the inputFormArea when a search UI is needed when click buttons.</li>
        <li>Generally, it is available to use the ul.list only, and if the group type is needed that requires division of the ul’s title, cover it with the div.list.</li>
        <li>typeCtrl: This UI has buttons for the control after search, covering the scroll area.</li>
        <li>번역필요</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>옵션세트</caption>
            <colgroup>
               <col style="width:150px;" />
               <col style="width:150px;" />
               <col style="width:auto;" />
               <col style="width:auto;" />
            </colgroup>
            <tbody>
                <tr>
                    <th scope="row">기본형</th>
                    <th scope="row"><span class="zh_CN">基本样式</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="mInputForm eToggle">
                            <input type="text" class="fText" style="width:240px;" />
                            <ul class="list">
                                <li><strong>보조제목</strong> 상세내용</li>
                                <li><strong>번역필요</strong> 번역필요</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="mInputForm eToggle">
                            <select class="fSelect" style="width:100px;">
                                <option>옵션</option>
                            </select>
                            <input type="text" class="fText" style="width:140px;" />
                            <ul class="list">
                                <li><strong>보조제목</strong> 상세내용</li>
                                <li><strong>번역필요</strong> 번역필요</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">그룹형</th>
                    <th scope="row"><span class="zh_CN">组合样式</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="mInputForm eToggle">
                            <input type="text" class="fText" style="width:240px;" />
                            <div class="list">
                                <strong class="title">제목</strong>
                                <ul>
                                    <li><strong>보조제목</strong> 상세내용</li>
                                    <li><strong>보조제목</strong> 상세내용</li>
                                </ul>
                                <strong class="title">번역필요</strong>
                                <ul>
                                    <li><strong>보조제목</strong> 상세내용</li>
                                    <li><strong>보조제목</strong> 상세내용</li>
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="mInputForm eToggle">
                            <select class="fSelect" style="width:100px;">
                                <option>옵션</option>
                            </select>
                            <input type="text" class="fText" style="width:140px;" />
                            <div class="list">
                                <strong class="title">제목</strong>
                                <ul>
                                    <li><strong>보조제목</strong> 상세내용</li>
                                    <li><strong>보조제목</strong> 상세내용</li>
                                </ul>
                                <strong class="title">번역필요</strong>
                                <ul>
                                    <li><strong>보조제목</strong> 상세내용</li>
                                    <li><strong>보조제목</strong> 상세내용</li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">버튼고정 기본형</th>
                    <th scope="row"><span class="zh_CN">固定按钮基本样式</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="mInputForm eToggle typeCtrl">
                            <input type="text" class="fText" style="width:240px;" />
                            <div class="list">
                                <div class="scroll">
                                    <ul>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                    </ul>
                                </div>
                                <div class="ctrl">
                                    <a href="#none" class="btnNormal"><span>버튼</span></a>
                                    <a href="#none" class="btnNormal"><span>번역필요</span></a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="mInputForm eToggle typeCtrl">
                            <select class="fSelect" style="width:100px;">
                                <option>옵션</option>
                            </select>
                            <input type="text" class="fText" style="width:140px;" />
                            <div class="list">
                                <div class="scroll">
                                    <ul>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                    </ul>
                                </div>
                                <div class="ctrl">
                                    <a href="#none" class="btnNormal"><span>버튼</span></a>
                                    <a href="#none" class="btnNormal"><span>번역필요</span></a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">버튼고정 그룹형</th>
                    <th scope="row"><span class="zh_CN">固定按钮组合样式</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="mInputForm eToggle typeCtrl">
                            <input type="text" class="fText" style="width:240px;" />
                            <div class="list">
                                <div class="scroll">
                                    <strong class="title">제목</strong>
                                    <ul>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                    </ul>
                                    <strong class="title">번역필요</strong>
                                    <ul>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                    </ul>
                                </div>
                                <div class="ctrl">
                                    <a href="#none" class="btnNormal"><span>버튼</span></a>
                                    <a href="#none" class="btnNormal"><span>번역필요</span></a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="mInputForm eToggle typeCtrl">
                            <select class="fSelect" style="width:100px;">
                                <option>옵션</option>
                            </select>
                            <input type="text" class="fText" style="width:140px;" />
                            <div class="list">
                                <div class="scroll">
                                    <strong class="title">제목</strong>
                                    <ul>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                    </ul>
                                    <strong class="title">번역필요</strong>
                                    <ul>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                        <li><strong>보조제목</strong> 상세내용</li>
                                    </ul>
                                </div>
                                <div class="ctrl">
                                    <a href="#none" class="btnNormal"><span>버튼</span></a>
                                    <a href="#none" class="btnNormal"><span>번역필요</span></a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                   <th scope="row">검색 기본형</th>
                   <th scope="row"><span class="zh_CN">基本样式</span><span class="en_US">(번역필요)</span></th>
                   <td>
                        <div class="mInputForm eToggle">
                            <input type="text" class="fText" style="width:240px;" placeholder="검색어를 입력하세요." />
                            <p class="total">[총<strong class="txtEm">17</strong>건] 검색결과1, 검색결과2, 검색결과3</p>
                            <ul class="result">
                                <li><label><input type="checkbox" class="fChk" /> 전체</label></li>
                                <li><label><input type="checkbox" class="fChk" /> 검색입력과 동일한 글자일 경우 <strong class="txtEm">txtEm</strong>으로 처리합니다.</label></li>
                                <li class="focus"><label><input type="checkbox" class="fChk" checked="checked" /> 체크가 된 경우 bold 처리 됩니다.</label></li>
                                <li class="focus"><label><input type="checkbox" class="fChk" checked="checked" /> 키보드 접근시 li에 focus 를 추가해 배경색을 처리합니다.</label></li>
                            </ul>
                        </div>
                    </td>
                   <td>
                        <div class="mInputForm eToggle">
                            <select class="fSelect" style="width:100px;">
                                <option>옵션</option>
                            </select>
                            <input type="text" class="fText" style="width:140px;" placeholder="검색어를 입력하세요." />
                            <ul class="result">
                                <li><label><input type="checkbox" class="fChk" /> 전체</label></li>
                                <li><label><input type="checkbox" class="fChk" /> 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과</label></li>
                                <li><label><input type="checkbox" class="fChk" /> 검<strong class="txtEm">색결</strong>과</label></li>
                                <li><label><input type="checkbox" class="fChk" /> 공급사4</label></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                   <th scope="row">검색 그룹형</th>
                   <th scope="row"><span class="zh_CN">基本样式</span><span class="en_US">(번역필요)</span></th>
                   <td>
                        <div class="mInputForm eToggle">
                            <input type="text" class="fText" style="width:240px;" placeholder="검색어를 입력하세요." />
                            <p class="total">[총<strong class="txtEm">17</strong>건] 검색결과1, 검색결과2, 검색결과3</p>
                            <ul class="result">
                                <li><label><input type="checkbox" class="fChk" /> 최근검색 목록 적용</label></li>
                                <li class="group"><label><input type="checkbox" class="fChk" /> [그룹]A그룹</label></li>
                                <li class="focus"><label><input type="checkbox" class="fChk" checked="checked" /> 검색입력과 동일한 글자일 경우 <strong class="txtEm">txtEm</strong>으로 처리합니다.</label></li>
                                <li class="focus"><label><input type="checkbox" class="fChk" checked="checked" /> [그룹]C그룹</label></li>
                                <li class="group"><label><input type="checkbox" class="fChk" /> 공급사 전체</label></li>
                                <li><label><input type="checkbox" class="fChk" /> A공급사 1</label></li>
                                <li><label><input type="checkbox" class="fChk" /> A공급사 2</label></li>
                                <li><label><input type="checkbox" class="fChk" /> B공급사 1</label></li>
                            </ul>
                        </div>
                    </td>
                   <td>
                        <div class="mInputForm eToggle">
                            <select class="fSelect" style="width:100px;">
                                <option>옵션</option>
                            </select>
                            <input type="text" class="fText" style="width:140px;" placeholder="검색어를 입력하세요." />
                            <ul class="result">
                                <li><label><input type="checkbox" class="fChk" /> 전체</label></li>
                                <li class="group"><label><input type="checkbox" class="fChk" /> 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과 검<strong class="txtEm">색결</strong>과</label></li>
                                <li><label><input type="checkbox" class="fChk" /> 검<strong class="txtEm">색결</strong>과</label></li>
                                <li><label><input type="checkbox" class="fChk" /> 공급사4</label></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

'),
array(
'desc' => '
    <div class="sampleTitle">
        <h3>[inputFormArea]</h3>
    </div>
    <ol>
        <li>버튼 클릭시 검색 UI가 필요한 경우 inputFormArea를 사용하며, 안에 mInputForm의 구조는 동일하게 사용된다.</li>
        <li>btnCtrl, btnNormal 사용시 &lt;em class="icoLayer"&gt;&lt;/em&gt; 필수이며, 그 외에 버튼도 사용될 수 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>点击按钮需要搜索UI的情况，使用inputFormArea时，内部mInputForm的构成也一并使用。</li>
        <li>btnCtrl、 btnNormal使用时，如有必须的&lt;em class="icoLayer"&gt;&lt;/em&gt;，则其他按钮也可以使用。</li>
    </ol>
    <ol class="en_US">
        <li>If a search UI is needed when click a button, use the inputFormArea, and the structure of mInputForm is used identically.</li>
        <li>Using the btnCtrl, btnNormal, the <em class="icoLayer"></em> is a must, and the other buttons can be used as well.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>옵션세트</caption>
            <colgroup>
                <col style="width:150px;" />
                <col style="width:150px;" />
                <col style="width:auto;" />
            </colgroup>
            <tbody>
                <tr>
                    <th scope="row">기본형</th>
                    <th scope="row"><span class="zh_CN">固定按钮组合样式</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="inputFormArea">
                            <a href="#none" class="btnCtrl"><span>기본형 클릭<em class="icoLayer"></em></span></a>
                            <div class="mInputForm eToggle">
                                <div class="function">
                                    <select class="fSelect" style="width:100px;">
                                        <option>옵션세트명</option>
                                        <option>옵션세트 설명</option>
                                        <option>옵션세트코드</option>
                                        <option>옵션명</option>
                                        <option>옵션값</option>
                                        <option>옵션코드</option>
                                    </select>
                                    <input type="text" class="fText" style="width:220px;" />
                                </div>
                                <ul class="list">
                                    <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                    <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                    <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                    <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                    <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                    <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="inputFormArea">
                            <a href="#none" class="btnCtrl"><span>결과 없음<em class="icoLayer"></em></span></a>
                            <div class="mInputForm eToggle typeCtrl">
                                <div class="function">
                                    <select class="fSelect" style="width:100px;">
                                        <option>옵션세트명</option>
                                        <option>옵션세트 설명</option>
                                        <option>옵션세트코드</option>
                                        <option>옵션명</option>
                                        <option>옵션값</option>
                                        <option>옵션코드</option>
                                    </select>
                                    <input type="text" class="fText" style="width:220px;" />
                                </div>
                                <p class="empty">검색 결과가 없습니다.</p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">그룹형</th>
                    <th scope="row"><span class="zh_CN">组合样式</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="inputFormArea">
                            <a href="#none" class="btnNormal"><span>그룹형 클릭<em class="icoLayer"></em></span></a>
                            <div class="mInputForm eToggle">
                                <div class="function">
                                    <select class="fSelect" style="width:100px;">
                                        <option>옵션세트명</option>
                                        <option>옵션세트 설명</option>
                                        <option>옵션세트코드</option>
                                        <option>옵션명</option>
                                        <option>옵션값</option>
                                        <option>옵션코드</option>
                                    </select>
                                    <input type="text" class="fText" style="width:220px;" />
                                </div>
                                <div class="list">
                                    <strong class="title">제목</strong>
                                    <ul>
                                        <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                        <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                        <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                        <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                        <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                        <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">버튼고정 기본형</th>
                    <th scope="row"><span class="zh_CN">固定按钮基本样式</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="inputFormArea">
                            <a href="#none" class="btnCtrl"><span>버튼고정 기본형 클릭<em class="icoLayer"></em></span></a>
                            <div class="mInputForm eToggle typeCtrl">
                                <div class="function">
                                    <input type="text" class="fText" style="width:96%;" />
                                </div>
                                <div class="list">
                                    <div class="scroll">
                                        <ul>
                                            <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                            <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                            <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                            <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                            <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                            <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ctrl">
                                        <a href="#none" class="btnNormal"><span>버튼</span></a>
                                        <a href="#none" class="btnNormal"><span>번역필요</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="inputFormArea">
                            <a href="#none" class="btnCtrl"><span>결과 없음<em class="icoLayer"></em></span></a>
                            <div class="mInputForm eToggle typeCtrl">
                                <div class="function">
                                    <select class="fSelect" style="width:100px;">
                                        <option>옵션세트명</option>
                                        <option>옵션세트 설명</option>
                                        <option>옵션세트코드</option>
                                        <option>옵션명</option>
                                        <option>옵션값</option>
                                        <option>옵션코드</option>
                                    </select>
                                    <input type="text" class="fText" style="width:220px;" />
                                </div>
                                <div class="list">
                                    <p class="empty">검색 결과가 없습니다.</p>
                                    <div class="ctrl">
                                        <a href="#none" class="btnNormal"><span>버튼</span></a>
                                        <a href="#none" class="btnNormal"><span>번역필요</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">버튼고정 그룹형</th>
                    <th scope="row"><span class="zh_CN">固定按钮组合样式</span><span class="en_US">(번역필요)</span></th>
                    <td>
                        <div class="inputFormArea">
                            <a href="#none" class="btnCtrl"><span>버튼고정 그룹형 클릭<em class="icoLayer"></em></span></a>
                            <div class="mInputForm eToggle typeCtrl">
                                <div class="function">
                                    <select class="fSelect" style="width:100px;">
                                        <option>옵션세트명</option>
                                        <option>옵션세트 설명</option>
                                        <option>옵션세트코드</option>
                                        <option>옵션명</option>
                                        <option>옵션값</option>
                                        <option>옵션코드</option>
                                    </select>
                                    <input type="text" class="fText" style="width:220px;" />
                                </div>
                                <div class="list">
                                    <div class="scroll">
                                        <strong class="title">제목</strong>
                                        <ul>
                                            <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                            <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                            <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                            <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                            <li>PS_색상사이즈 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                            <li>옵션세트-추금유 <a href="#layerOptionSetInfoView" class="btnIcon icoView eLayerClick"><span>미리보기</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ctrl">
                                        <a href="#none" class="btnNormal"><span>버튼</span></a>
                                        <a href="#none" class="btnNormal"><span>번역필요</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')

);
?>