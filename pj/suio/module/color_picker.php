<?php

// 모듈 전체 제목
$header_name = 'colorPicker';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <h2>Guide</h2>
    <ol>
        <li>12r (사내 개발 Framework) 컬러피커 플러그인과 같은 구조로, /js/jquery.12r.colorpicker.js 파일을 호출하여 사용한다. ( 참고 : <a href="https://wiki.simplexi.com/display/platformDocument/JQuery#JQuery-플러그인-컬러피커뉴" target="_blank">12r ColorPicker</a> )</li>
        <li>선택된 색상(.selected)의 값은 inline style(style="background-color:#ff0000")로 처리한다. <a href="/smartAdmin/product/show/product/main.html" class="txtEm" target="_blank" title="새창열림">[활용예시]</a></li>
    </ol>
    <ol class="zh_CN">
        <li>与12r（公司自主开发的Framework）colorPicker 菜单结构相同，可调出使用 /js/jquery.12r.colorpicker.js文件。( 参考：<a href="https://wiki.simplexi.com/display/platformDocument/JQuery#JQuery-플러그인-컬러피커뉴" target="_blank">12r ColorPicker</a> )</li>
        <li>已选颜色(.selected)的值处理为 inline style(style="background-color:#ff0000")。 <a href="/smartAdmin/product/show/product/main.html" class="txtEm" target="_blank" title="새창열림">[ 应用示例 ]</a></li>
    </ol>
    <ol class="en_US">
        <li>With the same structure with the 12R color picker plugin (cafe24 development frame), call the /js/jquery.12r.colorpicker.js file to use. (Refer the <a href="https://wiki.simplexi.com/display/platformDocument/JQuery#JQuery-플러그인-컬러피커뉴" target="_blank">12R ColorPicker</a>)</li>
        <li>The value of selected color (.selected) is handled with the inline style(style="background-color:#ff0000") <a href="/smartAdmin/product/show/product/main.html" class="txtEm" target="_blank" title="새창열림">[활용예시]</a> (번역필요)</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">

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
    <h3>[mColorPicker + eColorPicker]</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <tbody>
                <tr>
                    <th scope="row">컬러선택</th>
                    <td>
                        <div class="mColorPicker eColorPicker">
                            <span class="selected" style="background-color:#ff0000"></span><input type="text" maxlength="7" readonly="readonly" value="#ff0000" class="fText" style="width:50px;" />
                            <span class="selector">
                                <a href="#none">컬러선택</a>
                            </span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <link rel="stylesheet" href="/css/library.css" type="text/css" />
    <script type="text/javascript" src="/js/jquery.12r.colorpicker.js"></script>
')
);
?>