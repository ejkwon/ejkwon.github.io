<?php
// 상세 모듈
$arr_module2 = array(
array(
'desc' => '
    <h2 class="debugTitle" id="tem2">a, button 버튼클래스</h2>
    <h3 class="debugSubTitle">a, button 버튼클래스 내에 strong 태그로 강조된 경우, 필요시 span 태그로 사용할 것</h3>
', 'html' => '
    <button type="button" class="btnStrong"><strong>버튼</strong></button>
', 'javaCode' => '
    // a, button 버튼클래스 내에 strong 태그로 강조된 경우
    $("a, button").each(function(){
        $(this).find("strong").parent().addClass("eDebug").after("<div class="eVirtual">버튼클래스 내에 strong 태그사용 안함(필요시 span태그사용)</div>");
    });
'), array(
'desc' => '
    <h3 class="debugSubTitle">레이어버튼 액션 있는 경우 표시(확인용 디버깅)</h3>
', 'html' => '
    <a href="#layerTest" class="btnNormal eLayerClick">eLayerClick 버튼</a>
    <div id="layerTest" class="mLayer gSmall">
        <h2>h2 : 대제목</h2>
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
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>

', 'javaCode' => '
    // 레이어버튼 표시
    $(".eLayerClick").each(function(){
        $(this).addClass("eDebugView").after("<span class="eVirtualView">eLayerClick</span>");
    });
'), array(
'desc' => '
    <h2 class="debugTitle" id="tem3">table</h2>
    <h3 class="debugSubTitle">table 정렬 클래스</h3>
', 'html' => '
    <table border="1" class="sample right">
        <caption>테이블 캡션명</caption>
        <colgroup>
            <col style="width:160px;" />
            <col style="width:auto;" />
            <col style="width:auto;" />
            <col style="width:auto;" />
        </colgroup>
        <tbody>
            <tr>
                <th scope="row">table class="right"</th>
                <td class="left">내용</td>
                <td>내용</td>
                <td>내용</td>
            </tr>
        </tbody>
    </table>

    <table border="1" class="sample">
        <caption>테이블 캡션명</caption>
        <colgroup>
            <col style="width:160px;" />
            <col style="width:auto;" />
            <col style="width:auto;" />
            <col style="width:auto;" />
        </colgroup>
        <tbody>
            <tr>
                <th scope="row">tbody 기본(왼쪽정렬)</th>
                <td class="left">내용</td>
                <td>내용</td>
                <td>내용</td>
            </tr>
        </tbody>
        <tbody class="center">
            <tr>
                <th scope="row">tbody class="center"</th>
                <td>내용</td>
                <td class="center">내용</td>
                <td class="center">내용</td>
            </tr>
        </tbody>
    </table>
', 'javaCode' => '
    /* table 정렬 클래스 */
      /* table 태그에 align 속성을 적용한 경우 */
        table.center, table.left, table.right { outline:1px solid #467bff; position:relative; }
        table.center:before, table.left:before, table.right:before { position:absolute; left:-1px; top:-1px; content:"[align 속성은 tbody, tfoot 만 허용]"; padding:3px; background:#467bff; text-align:left; color:#fff; font-size:11px; }
      /* tr이나 td 태그에 tbody 정렬과 동일한 클래스를 추가한 경우 */
        .left > tr > td.left,
        .center > tr > td.center,
        .right > tr > td.right,
        .middle > tr > td.middle { background:#ca5ccb; text-align:left; }
            .left > tr > td.left:before,
            .center > tr > td.center:before,
            .right > tr > td.right:before,
            .middle > tr > td.middle:before { content:"[tbody와 동일한 class 사용 불가] "; color:#fff; }
      /* 기본값 left 는 생략 */
        td.left, tbody.left { background:#ca5ccb; }
            td.left:before,
            tbody.left:before { content:"[.left 는 재지정시에만 허용] "; color:#fff; }
        .center .mBoard .left,
        .right .mBoard .left,
        .center td.left,
        .right td.left,
        .middle td.top { background:transparent; }
        .center .mBoard .left:before,
        .right .mBoard .left:before,
        .center td.left:before,
        .right td.left:before,
        .middle td.top:before { content:""; display:none; }
'), array(
'desc' => '
    <h2 class="debugTitle" id="tem_lang">해외언어 lang</h2>
    <h3 class="debugSubTitle">해외언어 페이지 제작시, html 태그에 lang 속성을 적용하지 않거나 잘못 적용한 경우</h3>
', 'html' => '
    <a href="lang.html" target="_blank">새창으로 보기</a>
', 'javaCode' => '
    // 해외언어 lang 필수 적용 (언어별 css 파일을 추가한 경우)
    $("link[href$=".css"]").each(function() {
        // 영어
        if ($(this).attr("href").indexOf("_en.css") > -1 && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "en")) {
            $("body").prepend("<div class="eVirtual">[영어] html 태그에 lang="en" 속성을 추가하세요.</div>");
        }
        // 일본어
        if ($(this).attr("href").indexOf("_jp.css") > -1 && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "ja")) {
            $("body").prepend("<div class="eVirtual">[일본어] html 태그에 lang="ja" 속성을 추가하세요.</div>");
        }
        // 중국어
        if ($(this).attr("href").indexOf("_cn.css") > -1 && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "zh")) {
            $("body").prepend("<div class="eVirtual">[중국어] html 태그에 lang="zh" 속성을 추가하세요.</div>");
        }
    });

    // 해외언어 lang 필수 적용 (body 태그에 언어별 id나 class를 추가한 경우)
    $("body").each(function() {
        // 영어
        if ($(this).attr("id") == "us" && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "en")) {
            $(this).prepend("<div class="eVirtual">[영어] html 태그에 lang="en" 속성을 추가하세요.</div>");
        }
        // 일본어
        if ($(this).attr("id") == "jp" && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "ja")) {
            $(this).prepend("<div class="eVirtual">[일본어] html 태그에 lang="ja" 속성을 추가하세요.</div>");
        }
        // 중국어
        if ($(this).attr("id") == "cn" && ($(this).parents("html").attr("lang") == "" || $(this).parents("html").attr("lang") != "zh")) {
            $(this).prepend("<div class="eVirtual">[중국어] html 태그에 lang="zh" 속성을 추가하세요.</div>");
        }
    });
'), array(
'desc' => '
    <h2 class="debugTitle" id="tem_textarea">textarea</h2>
    <h3 class="debugSubTitle">Doctype html5 아닐 때, textarea 태그에서 rows나 cols 속성이 빠진 경우</h3>
', 'html' => '
    <textarea>textarea태그에 rows / cols 속성이 빠졌다.
    textarea태그에 rows / cols 속성이 빠졌다.</textarea>
    <br /><br />
    <textarea rows="7">textarea태그에 cols 속성이 빠졌다.
    textarea태그에 cols 속성이 빠졌다.
    textarea태그에 cols 속성이 빠졌다.</textarea>
    <br /><br />
    <textarea cols="80">textarea태그에 rows 속성이 빠졌다.
    textarea태그에 rows 속성이 빠졌다.
    textarea태그에 rows 속성이 빠졌다.</textarea>
', 'javaCode' => '
    // textarea 태그에서 rows나 cols 속성이 빠진 경우
    $("textarea").each(function(){
        var fTextarea = $(this)[0].outerHTML;
        if(fTextarea.indexOf("rows=") == -1 && fTextarea.indexOf("cols=") == -1){
            $(this).addClass("eDebug").after("<div class="eVirtual">rows & cols 속성 필수</div>");
        } else if (fTextarea.indexOf("rows=") == -1){
            $(this).addClass("eDebug").after("<div class="eVirtual">rows 속성 필수</div>");
        } else if (fTextarea.indexOf("cols=") == -1){
            $(this).addClass("eDebug").after("<div class="eVirtual">cols 속성 필수</div>");
        }
    });
')
);
?>