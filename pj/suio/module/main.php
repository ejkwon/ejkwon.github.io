<style type="text/css">
    #uioContent .moduleArea .title { margin-top:30px; font-size:26px; font-weight:bold; font-weight:bold; font-family:Tahoma; }
    #uioContent .moduleArea .title:first-child { margin-top:10px; }
    .mBoard { margin-top:20px; }
    .mBoard:first-child { margin-top:0; }
    #uioContent article .headerDesc td .mList { margin:0; }
</style>
<div class="moduleArea">
    <header class="title">SUIO</header>
    <section>
        <header>
            <h1>SUIO?</h1>
        </header>
        <article>
            <div class="headerDesc">
                <ol>
                    <li>Solution User Interface Objects 로, 사내 솔루션 UI제작을 위한 Framework 입니다.</li>
                    <li>UI개발을 위한 퍼블리싱 가이드를 위해 만들어졌으며 실제 사용 예제를 확인하실 수 있습니다.</li>
                </ol>
                <ol class="zh_CN">
                    <li>全称为Solution User Interface Objects ，是为了公司内部Solution UI制作而推出的Framework。</li>
                    <li>专为开发UI为目的的publishing指南而制成，可确认使用示例。</li>
                </ol>
                <ol class="en_US">
                    <li>SUIO stands for Solution User Interface Objects, which is a framework to produce an internal solution of UI. </li>
                </ol>
            </div>
        </article>
        <header>
            <h1>Spec</h1>
        </header>
        <article>
            <div class="mBoard">
                <table border="1" summary="">
                <caption>텍스트의 정렬</caption>
                <colgroup>
                    <col style="width:13%" />
                    <col style="width:13%" />
                    <col style="width:auto" />
                </colgroup>
                <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col"><span class="zh_CN">标题</span><span class="en_US">Title</span></th>
                    <th scope="col">내용  / <span class="zh_CN">内容</span><span class="en_US">Term</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">Browser Support</th>
                    <th scope="row">Browser Support</th>
                    <td>
                        IE 8이상 (IE8에서 미지원하는 일부 디자인 CSS 미지원, eq. border-radius), FireFox, Chrome<br />
                        <p class="zh_CN">IE 8以上 (在IE8未得到支援的部分设计CSS也为得到支援，eq. border-radius), FireFox, Chrome</p>
                        <p class="en_US">Above IE8 (Some parts of design that are not supported in IE8, eq, border-radius), FireFox, Chrome</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">CSS, Images 관리경로</th>
                    <th scope="row"><span class="zh_CN">CSS, Images 管理路径</span><span class="en_US">Management route for <br />CSS and images</span></th>
                    <td>
                        /css/suio.css  등 img.echosting.cafe24.com 에서 관리<br />
                        <p class="zh_CN">在img.echosting.cafe24.com 管理/css/suio.css  等</p>
                        <p class="en_US">It is managed in /css/suio.css  등 img.echosting.cafe24.com</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">HTML 검수 자동화 지원</th>
                    <th scope="row"><span class="zh_CN">支援HTML 自动化检测</span><span class="en_US">Automation support for <br />HTML examination</span></th>
                    <td>
                        각 모듈, 요소별 정합성을 준수 하였는지 CSS를 통한 Debugging을 제공합니다. <a href="../debug_css.html" class="txtEm"><span>[Debugging 예시화면 바로가기]</span></a><br />
                        <p class="zh_CN">检测各个模块和代码是否遵守正确性，通过CSS提供Debugging。<a href="../debug_css.html" class="txtEm"><span>[点击查看Debugging 示例页面]</span></a></p>
                        <p class="en_US">The debugging is provided through the CSS whether each module and the consistency of each element are complied. <a href="../debug_css.html" class="txtEm"><span>[Short cut to the example screen of debugging]</span></a></p>
                    </td>
                </tr>
                </tbody>
                </table>
            </div>
        </article>
    </section>
    <header class="title">Publishing Guide</header>
    <section>
        <header>
            <h1>HTML</h1>
        </header>
        <article>
            <div class="mBoard">
                <table border="1" summary="">
                <caption>주요 마크업 가이드 HTML</caption>
                <colgroup>
                    <col style="width:13%" />
                    <col style="width:13%" />
                    <col style="width:15%" />
                    <col style="width:auto" />
                </colgroup>
                <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col"><span class="zh_CN">标题</span><span class="en_US">Title</span></th>
                    <th scope="col">Wiki</th>
                    <th scope="col">상세 / <span class="zh_CN">内容</span><span class="en_US">Term</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">HTML 작성 가이드</th>
                    <th scope="row"><span class="zh_CN">编写HTML指南</span><span class="en_US">A guide of HTML writing</span></th>
                    <td class="center"><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=58233173" target="_blank">[ Space Link ]</a></td>
                    <td>
                        doctype 선언, 주요 attibute 사용 순서, head 선언 순서, hr 의 사용 등<br />
                        <p class="zh_CN">制定doctype，主要attibute使用顺序，head制定顺序，hr的使用等</p>
                        <p class="en_US">The declare of doctype, the usage order of main attribute, the order of head declare, and the utilization of the hr, and etc. </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">주석 규칙</th>
                    <th scope="row"><span class="zh_CN">注释规则</span><span class="en_US">The rule of notes</span></th>
                    <td class="center"><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=58233492" target="_blank">[ Space Link ]</a></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">HTML 들여쓰기와 개행 규칙</th>
                    <th scope="row"><span class="zh_CN">HTML缩进和改行规则</span><span class="en_US">The rule of HTML indentation and line alignments</span></th>
                    <td class="center"><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=58233494" target="_blank">[ Space Link ]</a></td>
                    <td></td>
                </tr>
                </tbody>
                </table>
            </div>
        </article>
        <header>
            <h1>CSS</h1>
        </header>
        <article>
            <div class="mBoard">
                <table border="1" summary="">
                <caption>주요 마크업 가이드 CSS</caption>
                <colgroup>
                    <col style="width:13%" />
                    <col style="width:13%" />
                    <col style="width:15%" />
                    <col style="width:auto" />
                </colgroup>
                <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col"><span class="zh_CN">标题</span><span class="en_US">Title</span></th>
                    <th scope="col">Wiki</th>
                    <th scope="col">상세 / <span class="zh_CN">内容</span><span class="en_US">Term</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">CSS 작성가이드</th>
                    <th scope="row"><span class="zh_CN">编写CSS指南</span><span class="en_US">The guide of CSS writing</span></th>
                    <td class="center"><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=58233674" target="_blank">[ Space Link ]</a></td>
                    <td>Hack, Tag Reset, z-index 등</td>
                </tr>
                <tr>
                    <th scope="row">주요 CSS 사용 순서</th>
                    <th scope="row"><span class="zh_CN">主要CSS使用顺序</span><span class="en_US">The utilization order of main CSS</span></th>
                    <td class="center"><a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=58233674" target="_blank">[ Space Link ]</a></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">SUIO 적용 가이드</th>
                    <th scope="row"><span class="zh_CN">SUIO适用指南</span><span class="en_US">The guide of SUIO application</span></th>
                    <td class="center">-</td>
                    <td>
                        UIO를 따를때는 항상 <strong>1. suio.css 2. 프로젝트별</strong> 순서로 css를 link합니다.<br />
                        <p class="zh_CN">随UIO时始终以1. suio.css 2.各个project的顺序将css做link。</p>
                        <p class="en_US">When follow UIO, link the CSS by the project order of 1. suio.css 2. all times. </p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">CSS 파일명 정의</th>
                    <th scope="row"><span class="zh_CN">CSS文件名定义</span><span class="en_US">The definition of CSS file names</span></th>
                    <td class="center">-</td>
                    <td>
                        각 프로젝트별 <a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=454429192" target="_blank">[퍼블리싱가이드]</a>를 참고합니다.<br />
                        <p class="zh_CN">各个project可参照<a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=454429192" target="_blank">[publishing指南]</a>。</p>
                        <p class="en_US">Refer the <a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=454429192" target="_blank">[publishing guide]</a> by projects. </p>
                    </td>
                </tr>
                </tbody>
                </table>
            </div>
        </article>
    </section>
</div>