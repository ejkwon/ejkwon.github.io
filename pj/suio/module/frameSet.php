<?php

// 모듈 전체 제목
$header_name = 'mFrameSet';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>넓이가 정해져 있는 영역을 분할할때 사용한다.</li>
        <li>float:left 속성으로 가로 정렬된다.</li>
        <li>"제목"이 필요한 경우 mTitle을 사용하되, mBoard 내에서는 &lt;span class="icoDot"&gt;&lt;/span&gt; &lt;strong&gt;제목&lt;/strong&gt;으로 처리한다.</li>
        <li>&lt;span class="icoDot"&gt;&lt;/span&gt; 사용시 인접하는 형제 요소에 grid class를 사용하여 여백을 준다.</li>
        <li>gFrame에 인라인스타일로 width 크기지정 가능하다.</li>
    </ol>
    <ol class="zh_CN">
        <li>分割既定宽度区域时使用。</li>
        <li>用Float:left进行横向排列。</li>
        <li>标题可以用mTitle，但在mBoard里标题用&lt;span class="icoDot"&gt;&lt;/span&gt; &lt;strong&gt;标题&lt;/strong&gt;。</li>
        <li>跟&lt;span class="icoDot"&gt;&lt;/span&gt; 紧接着的兄弟标签，给grid class获得间距。</li>
        <li>gFrame可以给inline-style来指定宽度。</li>
    </ol>
    <ol class="en_US">
        <li>It utilized for the division of fixed-width area.</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>';

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
                <li>
                    <p class="info"><span class="date">2017.04.10</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[mFrameSet + typeHalf]</strong> mFrameSet + typeHalf 추가 <a href="/pdm/mes/erp/common/template.html" class="btnLink" target="_blank">생산관리시스템</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2017.03.28</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[mFrameSet]</strong> mTitle 사용 / gFrame width 처리 <a href="/wms/common/layer_micro_pos.html#layerPayDetail" class="btnLink" target="_blank">결제상세정보 레이어팝업</a></p>
                </li>
                <li>
                    <p class="info"><span class="date">2016.05.31</span><span class="writer">윤나영</span></p>
                    <p class="title"><strong>[mFrameSet]</strong> mFrameSet 기본형 추가 <a href="/smartAdmin/shop/operate/system.html" class="btnLink" target="_blank">운영방식 설정</a></p>
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
    <div class="mFrameSet">
        <div class="gFrame">
            <div class="mTitle">
                <h2>제목</h2>
            </div>
            <div class="mBoard typeFixed gSmall">
                <table border="1" summary="">
                    <caption>제목</caption>
                    <tbody>
                        <tr>
                            <th scope="row">제목</th>
                            <td>내용</td>
                        </tr>
                        <tr>
                            <th scope="row">제목</th>
                            <td>내용</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="gFrame">
            <div class="mTitle">
                <h2>제목</h2>
            </div>
            <div class="mBoard typeFixed gSmall">
                <table border="1" summary="">
                    <caption>제목</caption>
                    <tbody>
                        <tr>
                            <th scope="row">제목</th>
                            <td>내용</td>
                        </tr>
                        <tr>
                            <th scope="row">제목</th>
                            <td>내용</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mBoard gSmall gTriple">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">mBoard</th>
                    <td>
                        <div class="mFrameSet">
                            <div class="gFrame">
                            <span class="icoDot"></span> <strong>제목</strong>
                                <div class="mBoard typeFixed gSmall gSingle">
                                    <table border="1" summary="">
                                        <caption>제목</caption>
                                        <tbody>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="gFrame">
                                <span class="icoDot"></span> <strong>제목</strong>
                                <div class="mBoard typeFixed gSmall gSingle">
                                    <table border="1" summary="">
                                        <caption>제목</caption>
                                        <tbody>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

'),array(
'desc' => '
    <h3>[ mFrameSet + typeDivide ]</h3>
    <ol>
        <li>동일한 비율로 영역이 분할되어야 하는 경우 사용한다.</li>
        <li>display:table-cell 속성으로 가로 정렬된다.</li>
    </ol>
    <ol class="zh_CN">
        <li>需要按照相同比例分割区域时使用。</li>
        <li>用display:table-cell属性进行横向排列。</li>
    </ol>
    <ol class="en_US">
        <li>It is used when the area must be separated by the same grace.</li>
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">동일 비율</th>
                    <td>
                        <div class="mFrameSet typeDivide">
                            <div class="gFrame">
                                <span class="icoDot"></span> <strong>제목</strong>
                                <div class="mBoard gSmall gSingle">
                                    <table border="1" summary="">
                                        <caption>제목</caption>
                                        <tbody>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="gFrame">
                                <span class="icoDot"></span> <strong>제목</strong>
                                <div class="mBoard gSmall gSingle">
                                    <table border="1" summary="">
                                        <caption>제목</caption>
                                        <tbody>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="gFrame">
                                <span class="icoDot"></span> <strong>제목</strong>
                                <div class="mBoard gSmall gSingle">
                                    <table border="1" summary="">
                                        <caption>제목</caption>
                                        <tbody>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">gFrame style="width:"</th>
                    <td>
                        <div class="mFrameSet typeDivide">
                            <div class="gFrame" style="width:60%;">
                                <span class="icoDot"></span> <strong>제목</strong>
                                <div class="mBoard gSmall gSingle">
                                    <table border="1" summary="">
                                        <caption>제목</caption>
                                        <tbody>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="gFrame">
                                <span class="icoDot"></span> <strong>제목</strong>
                                <div class="mBoard gSmall gSingle">
                                    <table border="1" summary="">
                                        <caption>제목</caption>
                                        <tbody>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">제목</th>
                                                <td>내용</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

'),array(
'desc' => '
    <h3>[ mFrameSet + typeHalf ]</h3>
    <ol>
        <li>50% 비율로 영역이 분할되어야 하는 경우 사용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>class="mFrameSet typeHalf" 让下一级的宽度占50%。</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mFrameSet typeHalf">
        <div class="gFrame">
            <div class="mCtrl typeHeader">
                <div class="gLeft">
                    <span class="txtLess">선택한 항목을</span>
                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                </div>
            </div>
            <div class="mBoard">
                <table border="1" summary="" class="eChkColor">
                    <caption>1차분류</caption>
                    <colgroup>
                        <col class="chk" />
                        <col style="width:auto;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="allChk" /></th>
                            <th scope="col">1차분류</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="rowChk" /></td>
                            <td>내용</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="rowChk" /></td>
                            <td>내용</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="gFrame">
            <div class="mCtrl typeHeader">
                <div class="gLeft">
                    <span class="txtLess">선택한 항목을</span>
                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                </div>
            </div>
            <div class="mBoard">
                <table border="1" summary="" class="eChkColor">
                    <caption>2차분류</caption>
                    <colgroup>
                        <col class="chk" />
                        <col style="width:auto;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="allChk" /></th>
                            <th scope="col">상의 &gt; 2차분류</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="rowChk" /></td>
                            <td>내용</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mFrameSet typeHalf gSingle">
        <div class="gFrame">
            <div class="mCtrl typeHeader">
                <div class="gLeft">
                    <span class="txtLess">선택한 항목을</span>
                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                </div>
            </div>
            <div class="mBoard">
                <table border="1" summary="" class="eChkColor">
                    <caption>1차분류</caption>
                    <colgroup>
                        <col class="chk" />
                        <col style="width:auto;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col"><input type="checkbox" class="allChk" /></th>
                            <th scope="col">1차분류</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="rowChk" /></td>
                            <td>내용</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="rowChk" /></td>
                            <td>내용</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
')

);
?>