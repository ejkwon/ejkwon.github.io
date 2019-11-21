<?php

// 모듈 전체 제목
$header_name = 'Image : 미리보기 이미지 预览图片';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>미리보기 이미지는 반드시 class로 감싸야한다.</li>
        <li>width, height, max-width 속성은 필요에 따라 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>预览图片必须用class套住。</li>
        <li>必要时再添加width，height，max-width的属性。</li>
    </ol>
    <ol class="en_US">
        <li>The preview image has to be coved with the class.</li>
        <li>Add properties such as width, height, and max-width if it is necessary.</li>
    </ol>';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
/*$preview_css = '
    <style type="text/css">

    </style>
';*/

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
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:80px;" />
                <col style="width:120px;" />
                <col style="width:20%;" span="4" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Class</th>
                    <th scope="col">style</th>
                    <th scope="col">38px</th>
                    <th scope="col">50px</th>
                    <th scope="col">110px</th>
                    <th scope="col">110px + mouse over</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">.frame</th>
                    <th scope="row">- border O<br />- padding O</th>
                    <td><span class="frame"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/32x32.gif" alt="" /></a></span> 32 x 32</td>
                    <td><span class="frame"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" alt="" /></a></span> 44 x 44</td>
                    <td><span class="frame"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/104x104_1.gif" alt="" /></a></span> 104 x 104</td>
                    <td><span class="frame"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/104x104_2.gif" alt="" /><button type="button" class="btnIcon icoDelete">삭제</button></a></span> 104 x 104</td>
                </tr>
                <tr>
                    <th scope="row">.figure</th>
                    <th scope="row">- border O<br />- padding X</th>
                    <td><span class="figure"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/36x36.gif" alt="" /></a></span> 36 x 36</td>
                    <td><span class="figure"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/48x48.gif" alt="" /></a></span> 48 x 48</td>
                    <td><span class="figure"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></a></span> 108 x 108</td>
                    <td><span class="figure"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/108x108_2.gif" alt="" /><button type="button" class="btnIcon icoDelete">삭제</button></a></span> 108 x 108</td>
                </tr>
                <tr>
                    <th scope="row">.zoom</th>
                    <th scope="row">- border O<br />- padding X</th>
                    <td><span class="zoom"><img src="//img.echosting.cafe24.com/thumb/36x36.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a></span> 36 x 36</td>
                    <td><span class="zoom"><img src="//img.echosting.cafe24.com/thumb/48x48.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a></span> 48 x 48</td>
                    <td><span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a></span> 108 x 108</td>
                    <td><span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_2.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span> 108 x 108</td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>