<?php

// 모듈 전체 제목
$header_name = 'mAccordion';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>메뉴를 클릭하면 펼쳐지거나 접혀지는 모양이 악기 아코디언과 흡사하여 아코디언 메뉴라고 불린다.</li>
        <li>다른 디자인이 필요하다면, type을 추가하여 사용 가능하다. ( 예시 : &lt;div class="<strong class="txtWarn">mAccordion + type$Class</strong>"&gt; )</li>
    </ol>
    <ol class="zh_CN">
        <li>点击菜单时展开或折叠的样子类似于乐器Accordion，故称之为Accordion菜单。</li>
        <li>如需其他设计，可添加type使用。 ( 示例 : &lt;div class="<strong class="txtWarn">mAccordion + type$Class</strong>"&gt; )</li>
    </ol>
    <ol class="en_US">
        <li>The shape when it is open or close looks alike with the accordion’s, which is why it is called accordion menu.</li>
        <li>Types can be added to use if different design is needed. ( example : &lt;div class="<strong class="txtWarn">mAccordion + type$Class</strong>"&gt; )</li>
    </ol>
';

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
                <li>
                    <p class="info"><span class="date">2017.04.18</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[mAccordion + typeButton]</strong> 타입추가 <a href="/smartAdmin/product/registration/product/register_basic2.html" class="btnLink" target="_blank">상품 등록&gt;해시태그 설정</a></p>
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
    <h3>[mAccordion + typeButton]</h3>
', 'html' => '
    <div class="mAccordion typeButton">
        <button type="button" class="btnExpand eToggle"><span>예시 Click</span></button>
        <div class="box">
            <div class="mBoard gSmall">
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
    <div class="mAccordion typeButton">
        <button type="button" class="btnExpand eToggle"><span>예시 Click</span></button>
        <div class="box">
            <div class="mBox typeBg">
                내용 내용 내용 내용 내용 내용 내용 내용
            </div>
        </div>
    </div>
'),array(
'desc' => '
    <h3>[mAccordion + typeButton + gBorder]</h3>
', 'html' => '
    <div class="mAccordion typeButton gBorder">
        <button type="button" class="btnExpand eToggle"><span>예시 Click</span></button>
        <div class="box">
             <div class="mBoard gSmall">
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
'),array(
'desc' => '
    <h3>[mAccordion + typeFaq + eAccordion]</h3>
    <ol>
        <li>12r (사내 개발 Framework) 아코디언 메뉴와 같은 구조로, /js/jquery.12r.accordion.js 파일을 호출하여 사용한다. (참고: <a href="https://wiki.simplexi.com/display/platformDocument/JQuery" target="_blank">12r 아코디언 메뉴</a> )</li>
        <li>개발환경이 12r이 아닐 경우 이미지서버의 해당 js를 제공할 수 있다.</li>
        <li><strong>.eAccordion</strong>을 추가하면 아코디언 메뉴가 동작한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>与12r（公司自主开发的Framework）accordion菜单结构相同，可调出使用 /js/jquery.12r.accordion.js文件。（参考：<a href="https://wiki.simplexi.com/display/platformDocument/JQuery" target="_blank">12r Accordion菜单）</a></li>
        <li>在非12r的开发环境下，可提供图片服务器中的相应js。</li>
        <li>添加<strong>.eAccordion</strong>，即可让Accordion菜单运行。</li>
    </ol>
    <ol class="en_US">
        <li>Just like the 12R (café24 development framework) accordion, the /js/jquery.12r.accordion.js should be called. (Refer <a href="https://wiki.simplexi.com/display/platformDocument/JQuery" target="_blank">the menu of 12R accordion</a>)</li>
        <li>If the development environment is not 12r, js for the image server can be provided.</li>
        <li>Accordion menu is to be operative if the <strong>.eAccordion</strong> is added. </li>
    </ol>
', 'html' => '
    <div class="mAccordion typeFaq eAccordion">
        <h3>아코디언 메뉴 제목 1</h3>
        <div class="answer">
            <p>아코디언 메뉴 내용 1</p>
        </div>

        <h3>아코디언 메뉴 제목 2</h3>
        <div class="answer">
            <p>아코디언 메뉴 내용 2</p>
        </div>

        <h3>아코디언 메뉴 제목 3</h3>
        <div class="answer">
            <p>아코디언 메뉴 내용 3</p>
        </div>

        <h3>아코디언 메뉴 제목 4</h3>
        <div class="answer">
            <p>아코디언 메뉴 내용 4</p>
        </div>
    </div>

    <link rel="stylesheet" href="/css/library.css" type="text/css" />
    <script type="text/javascript" src="/js/jquery.12r.accordion.js"></script>
    <script type="text/javascript">
    //<![CDATA[
        $(function() {
            $( ".eAccordion" ).accordion({ autoHeight: false });
        });
    //]]>
    </script>
')
);
?>