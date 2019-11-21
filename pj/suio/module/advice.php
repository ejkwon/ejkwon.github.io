<?php

// 모듈 전체 제목
$header_name = 'mAdvice';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>.mBoard와 .mLayer 에서 사용된다.</li>
        <li>heading 태그 처리를 제외한 html 구조는 mHelp와 거의 동일하다. 자세한 내용은 mHelp를 참고한다. </li>
    </ol>
    <ol class="zh_CN">
        <li>用于.mBoard与.mLayer。</li>
        <li>heading 标签除外，html结构与mHelp几乎相同。详情请参考mHelp。</li>
    </ol>
    <ol class="en_US">
        <li>It is used in the .mBoard and .mLayer.</li>
        <li>The structure of html except for the heading tag handling is nearly identical with the mHelp. Refer the mHelp for the detailed contents.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
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
    <h3>[mBoard > mAdvice + typeInfo]</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">예시</th>
                    <td>예시
                        <div class="mAdvice typeInfo">
                            <strong class="title">대제목</strong>
                            <div class="content">
                                <ol>
                                    <li>1) 첫번째 순서가 있는 목록형
                                        <ol>
                                            <li>(1) 두번째 순서가 있는 목록형</li>
                                            <li>(2) 두번째 순서가 있는 목록형
                                                <ul>
                                                    <li>목록형 설명문구 (필요에 따라 추가하여 사용한다.)</li>
                                                </ul>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>2) 첫번째 순서가 있는 목록형
                                        <ul>
                                            <li>두번째 순서가 없는 목록형 <a href="#none" class="btnLink" title="새창 열림" target="_blank"><strong>[링크<em class="icoLink"></em>]</strong></a></li>
                                        </ul>
                                    </li>
                                    <li><span class="txtIcon">※</span> 목록형에 기호가 사용할 경우</li>
                                </ol>
                                <ul>
                                    <li>첫번째 순서가 없는 목록형
                                        <ul>
                                            <li>두번째 순서가 없는 목록형</li>
                                        </ul>
                                        <ol>
                                            <li><sapn class="txtIcon">①</sapn> 두번째 순서가 있는 목록형</li>
                                        </ol>
                                    </li>
                                </ul>
                                <p class="empty"><span class="txtIcon">※</span> 문단형에 기호가 사용할 경우</p>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')
,array(
'desc' => '
    <h3>[mLayer > mAdvice + typeInfo]</h3>
', 'html' => '
    <div id="layerAdviceTest" class="mLayer gMedium">
        <h2>대제목</h2>
        <div class="wrap">
            <div class="mTitle">
                <h3>중제목</h3>
            </div>
            <div class="mAdvice typeInfo">
                <strong class="title">대제목</strong>
                <div class="content">
                    <ol>
                        <li>1) 첫번째 순서가 있는 목록형
                            <ol>
                                <li>(1) 두번째 순서가 있는 목록형</li>
                                <li>(2) 두번째 순서가 있는 목록형
                                    <ul>
                                        <li>목록형 설명문구 (필요에 따라 추가하여 사용한다.)</li>
                                    </ul>
                                </li>
                            </ol>
                        </li>
                        <li>2) 첫번째 순서가 있는 목록형
                            <ul>
                                <li>두번째 순서가 없는 목록형 <a href="#none" class="btnLink" title="새창 열림" target="_blank"><strong>[링크<em class="icoLink"></em>]</strong></a></li>
                            </ul>
                        </li>
                        <li>
                             <span class="txtIcon">※</span> 목록형에 당구장 기호 사용할 경우
                        </li>
                    </ol>
                    <p class="empty">
                        <span class="txtIcon">※</span> 문단형에 당구장 기호 사용할 경우
                    </p>
                    <ul>
                        <li>첫번째 순서가 없는 목록형
                            <ul>
                                <li>두번째 순서가 없는 목록형</li>
                            </ul>
                            <ol>
                                <li><sapn class="txtIcon">①</sapn> 두번째 순서가 있는 목록형</li>
                            </ol>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer">
            <a href="#none" class="btnCtrl"><span>저장</span></a>
            <a href="#none" class="btnNormal eClose"><span>취소</span></a>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
')
);
?>