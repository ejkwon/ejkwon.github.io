<?php

// 모듈 전체 제목
$header_name = 'mList';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>mBoard 안에서 사용될때와 밖에서 사용될때 여백이 다르다.</li>
        <li><strong class="txtWarn">문단형 리스트는 2017년 9월부로 사용하지 않는다.</strong></li>
    </ol>
    <ol class="zh_CN">
        <li>分别用于mBoard内外时，间距不同。</li>
        <li><strong class="txtWarn">2017年9月开始不使用段落型。</strong></li>
    </ol>
    <ol class="en_US">
        <li>The margin is different when it is used in the mBoard and outside</li>
        <li>(번역필요)</li>
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
    <h3>[mList] </h3>
', 'html' => '
    <del><p class="mList">문단형 리스트 <span class="zh_CN">段落型</span><span class="en_US">paragraph type list</span></p></del>

    <ul class="mList">
        <li>순서가 없는 목록형 리스트 <span class="zh_CN">目录型</span><span class="en_US">list type without order</span></li>
        <li>순서가 없는 목록형 리스트 <span class="zh_CN">目录型</span><span class="en_US">list type without order</span></li>
    </ul>

    <ol class="mList">
        <li>순서가 있는 목록형 리스트 <span class="zh_CN">有序目录型</span><span class="en_US">list type with order</span></li>
        <li>순서가 있는 목록형 리스트 <span class="zh_CN">有序目录型</span><span class="en_US">list type with order</span></li>
    </ol>
'), array(
'desc' => '
    <h3>[mList + typeMore] </h3>
    <ol>
        <li>12px, #1c1c1c의 디자인을 사용할때 사용한다. </li>
    </ol>
    <ol class="zh_CN">
        <li>用于使用12px、#1c1c1c的设计时。</li>
    </ol>
    <ol class="en_US">
        <li>It is used when utilizing the design of 12px, #1c1c1c.</li>
    </ol>
', 'html' => '
    <del><p class="mList typeMore">문단형 리스트 <span class="zh_CN">段落型</span><span class="en_US">paragraph type list</span></p></del>

    <ul class="mList typeMore">
        <li>순서가 없는 목록형 리스트 <span class="zh_CN">目录型</span><span class="en_US">list type without order</span></li>
        <li>순서가 없는 목록형 리스트 <span class="zh_CN">目录型</span><span class="en_US">list type without order</span></li>
    </ul>

    <ol class="mList typeMore">
        <li>순서가 있는 목록형 리스트 <span class="zh_CN">有序目录型</span><span class="en_US">list type with order</span></li>
        <li>순서가 있는 목록형 리스트 <span class="zh_CN">有序目录型</span><span class="en_US">list type with order</span></li>
    </ol>
'), array(
'desc' => '
    <h3>[mList + typeMore + gIndent] </h3>
    <ol>
        <li>들여쓰기가 필요할 경우 gIndent 클래스를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>需要缩排时，添加gindent class。</li>
    </ol>
    <ol class="en_US">
        <li>Add the gIndent class if indentation is needed.</li>
    </ol>
', 'html' => '
    <del><p class="mList typeMore gIndent">문단형 리스트 <span class="zh_CN">段落型</span><span class="en_US">paragraph type list</span></p></del>

    <ul class="mList typeMore gIndent">
        <li>순서가 없는 목록형 리스트 <span class="zh_CN">目录型</span><span class="en_US">list type without order</span></li>
        <li>순서가 없는 목록형 리스트 <span class="zh_CN">目录型</span><span class="en_US">list type without order</span></li>
    </ul>

    <ol class="mList typeMore gIndent">
        <li>순서가 있는 목록형 리스트 <span class="zh_CN">有序目录型</span><span class="en_US">list type with order</span></li>
        <li>순서가 있는 목록형 리스트 <span class="zh_CN">有序目录型</span><span class="en_US">list type with order</span></li>
    </ol>
'), array(
'desc' => '
    <h3>[mList + typeMore] .txtInfo와의 차이점 <span class="zh_CN">与txtInfo的差异</span><span class="en_US">difference from the .txtInfo</span></h3>
    <ol>
        <li>form 태그에 안내문구를 사용 할 경우, txtInfo 클래스를 사용하므로 사용시 주의한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>对form tag使用指南语句时，会使用txtInfo class，故使用时需留意。</li>
    </ol>
    <ol class="en_US">
        <li>If a guide text is used in the form tag, be cautious because txtInfo class is used.</li>
    </ol>
', 'html' => '
    <div class="mBoard gMedium">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">.mList</th>
                    <td>
                        <ul class="mList">
                            <li>순서가 없는 목록형 리스트 <span class="zh_CN">目录型</span><span class="en_US">list type without order</span></li>
                            <li>순서가 없는 목록형 리스트 <span class="zh_CN">目录型</span><span class="en_US">list type without order</span></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtInfo</th>
                    <td>
                        <input type="text" class="fText" style="width:300px;" />
                        <ul class="txtInfo">
                            <li>목록형 보조설명 <span class="zh_CN">段落型的辅助说明</span><span class="en_US">supplementary explanation in paragraph type</span></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">.txtInfo</th>
                    <td>
                        <input type="text" class="fText" style="width:300px;" />
                        <ul class="txtInfo">
                            <li>목록형 보조설명 <span class="zh_CN">目录型的辅助说明</span><span class="en_US">supplementary explanation in list type</span></li>
                            <li>목록형 보조설명 <span class="zh_CN">目录型的辅助说明</span><span class="en_US">supplementary explanation in list type</span></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>[mList / mList + typeMore] mLayer 사용 예시 <span class="zh_CN">使用示例</span><span class="en_US">Example usage of the mLayer</span></h3>
', 'html' => '
    <div class="mLayer gSmall">
        <h2>예시</h2>
        <div class="wrap">
            <div class="mBoard">
                <table border="1" summary="">
                    <caption>제목</caption>
                    <colgroup>
                        <col style="width:22%;" />
                        <col style="width:auto;" />
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">예시</th>
                            <td>
                                <ul class="mList typeMore">
                                    <li>순서가 없는 목록형 리스트</li>
                                    <li>순서가 없는 목록형 리스트</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <ul class="mList">
                <li>순서가 없는 목록형 리스트</li>
                <li>순서가 없는 목록형 리스트</li>
            </ul>
            <ul class="mList typeMore">
                <li>순서가 없는 목록형 리스트</li>
            </ul>
        </div>
        <div class="footer">
            <a href="#none" class="btnCtrl"><span>저장</span></a>
            <a href="#none" class="btnNormal eClose"><span>닫기</span></a>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
')
);
?>