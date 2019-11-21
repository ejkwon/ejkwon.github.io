<?php

// 모듈 전체 제목
$header_name = 'section';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <h2>Guide</h2>
    <ol>
        <li><span class="txtWarn">해당 가이드는 <a href="/smartAdmin/dashboard/index.html">[EC어드민]</a>에만 적용되며 기타 솔루션에서는 적용하지 않습니다.</span></li>
        <li>section은 컨텐츠 그룹의 묶음으로 제목과 컨텐츠를 묶어주며 section간 여백을 가진다.</li>
        <li>mTitle이 h2 일때마다 section으로 감싼다.</li>
        <li>일부 모듈은 section으로 감싸지 않는다. (HeadingArea, mHelp,mTab + typeNav, mInfo, pickerArea, mPromotion)</li>
    </ol>
    <ol class="zh_CN">
        <li><span class="txtWarn">此向导只适合在<a href="/smartAdmin/dashboard/index.html">[EC어드민]</a>上使用，其他的布局不适用。</span></li>
        <li>section是以绑定主题和内容形式的内容的组合, 每个section间存在间距。</li>
        <li>当mTitle为h2时，须用section套住。</li>
        <li>部分模块不需要用section套住。(HeadingArea, mHelp,mTab + typeNav, mInfo, pickerArea, mPromotion)</li>
    </ol>
    <ol class="en_US">
        <li><span class="txtWarn">The following guide is applicable in <a href="/smartAdmin/dashboard/index.html">[the EC Admin]</a>Admin only, and is not to be applied to the other solutions.
        <li>The sections bind the title and contents as a contents group and has space in between the sections.</li>
        <li>The mTitle is covered with the section when it is h2.</li>
        <li>Some modules are not covered with the section. (HeadingArea, mHelp,mTab + typeNav, mInfo, pickerArea, mPromotion)</li>
    </ol>

    <h2>QA Automation</h2>
    <h3>1. ID 정책</h3>
    <ol>
        <li>QA Automaton은 <a href="/smartAdmin/dashboard/index.html">EC솔루션</a>에만 적용한다. (C스토어 적용대상 아님)</li>
        <li>ID 시작은 항상 대문자 QA_ 로한다.</li>
        <li>section 단위로 id를 삽입하며 "QA_ + CamelCase"를 규칙으로 한다.</li>
        <li>QA_다음에는 파일명을 아이디로 사용하며 페이지가 처음 제작시엔 1부터 순차적으로 사용한다.</li>
    </ol>
    <h3 class="zh_CN">1. ID 命名规则</h3>
    <ol class="zh_CN">
        <li>QA Automaton仅适用于<a href="/smartAdmin/dashboard/index.html" target="_blank" title="새창 열림">EC솔루션</a>。（不是C스토어的适用对象）</li>
        <li>ID始终以大写QA_打头。此IA中마켓통합,부가서비스,FTP,접속통계四个目录不需要QA_ID值。</li>
        <li>按“QA+CamelCase”规则，以section为单位输入ID。</li>
        <li>QA_后接文件名作为ID，首次制作页面时从1开始依次使用。</li>
    </ol>
    <h3 class="en_US">1. ID Policy</h3>
    <ol class="en_US">
        <li>QA Automaton은 <a href="/smartAdmin/dashboard/index.html">EC솔루션</a>에만 적용한다. (C스토어 적용대상 아님)</li>
        <li>An ID always starts with the “QA_” in capital letter.</li>
        <li>The ID is inserted in the sections, and “QA_ + CamelCase” is the standard. </li>
        <li>Followed by QA_, the name of file is used as an ID, and it begins from 1 (one) in order from the first page.</li>
    </ol>

    <h3>2. 변경에 대한 관리</h3>
    <ol>
        <li>개발이 완료된 이후부터 section이 추가/수정 될 경우 기존의 ID의 숫자를 변경하지 않는다.</li>
        <li>삭제된 ID는 다시 사용하지않는다.</li>
    </ol>
    <h3 class="zh_CN">2. 变更管理时应注意事项</h3>
    <ol class="zh_CN">
        <li>开发完成后，需要添加/修改section时，不变更现有id的数字。</li>
        <li>已删除的ID不可再使用。</li>
    </ol>
    <h3 class="en_US">2. Managing Change</h3>
    <ol class="en_US">
        <li>After the development completes, the ID’s original number is not changed in case a section is added or edited</li>
        <li>The deleted IDs are not put into use again.</li>
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
', 'html' => '
    <div class="section" id="QA_XXX1">
        <div class="mTitle">
            <h2>제목</h2>
        </div>
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

    <div class="section" id="QA_XXX2">
        <div class="mTitle">
            <h2>제목</h2>
        </div>
        <div class="mBoard">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                    <col style="width:25%;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                        <th scope="col">제목</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="row">합계</th>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tfoot>
                <tbody class="center">
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
'),array(
'desc' => '
    <h3>section 분할 分割</h3>
', 'html' => '
    <div class="section" id="QA_XXX3">
        <div class="mTitle">
            <h2>제목</h2>
        </div>
        <div class="gLeft">
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
        <div class="gRight">
            <div class="mBoard">
                <table border="1" summary="">
                    <caption>제목</caption>
                    <colgroup>
                        <col style="width:25%;" />
                        <col style="width:25%;" />
                        <col style="width:25%;" />
                        <col style="width:25%;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">제목</th>
                            <th scope="col">제목</th>
                            <th scope="col">제목</th>
                            <th scope="col">제목</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="row">합계</th>
                            <td>내용</td>
                            <td>내용</td>
                            <td>내용</td>
                        </tr>
                    </tfoot>
                    <tbody class="center">
                        <tr>
                            <td>내용</td>
                            <td>내용</td>
                            <td>내용</td>
                            <td>내용</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="section" id="QA_XXX4">
        <div class="gLeft">
            <div class="mTitle">
                <h2>제목</h2>
            </div>
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
        <div class="gRight">
            <div class="mTitle">
                <h2>제목</h2>
            </div>
            <div class="mBoard">
                <table border="1" summary="">
                    <caption>제목</caption>
                    <colgroup>
                        <col style="width:25%;" />
                        <col style="width:25%;" />
                        <col style="width:25%;" />
                        <col style="width:25%;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">제목</th>
                            <th scope="col">제목</th>
                            <th scope="col">제목</th>
                            <th scope="col">제목</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="row">합계</th>
                            <td>내용</td>
                            <td>내용</td>
                            <td>내용</td>
                        </tr>
                    </tfoot>
                    <tbody class="center">
                        <tr>
                            <td>내용</td>
                            <td>내용</td>
                            <td>내용</td>
                            <td>내용</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
'),array(
'desc' => '
    <h3>section 고정</h3>
    <ol>
        <li>미관상의 이유로 화면폭을 고정시켜야 할때 section에 fixed 를 처리할 수 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>如因美观需要固定画面宽度时，可对section进行fixed处理。</li>
    </ol>
    <h3 class="en_US">The Fixation of Section</h3>
    <ol class="en_US">
        <li>If a design issue occurs, the width of screen can be fixed in the section.</li>
    </ol>
', 'html' => '
    <div class="section fixed" id="QA_XXX3">
        <div class="mTitle">
            <h2>제목</h2>
        </div>
        <div class="mBox typeAll">
            폭 고정
        </div>
    </div>
'),array(
'desc' => '
    <h3>여백</h3>
    <ol>
        <li>첫번째 요소에는 여백을 주지 않는다.</li>
        <li>gSingle, gDouble, gTriple의 경우 CSS가 없을경우를 고려해 span 이나 p 태그를 사용해서 작업한다.</li>
        <li>Break는 첫번째 요소만 display 되는 특수한 경우에만 사용한다.</li>
    </ol>

    <h3 class="zh_CN">间距</h3>
    <ol class="zh_CN">
        <li>第一个标签不留间距。</li>
        <li>鉴于没有CSS的情况，gSingle, gDouble, gTriple须使用span 或 p标签 。</li>
        <li>只有第一个元素为 display形式出现的时候使用Break</li>
    </ol>

    <h3 class="en_US">Blank space</h3>
    <ol class="en_US">
        <li>No space in the first element.</li>
        <li>In case there is no CSS in gSingle, gDouble and gTriple, the span or the p tag can be used.</li>
        <li>The break can be used only in the special occasion when the first element is displayed. </li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:10%;" />
                <col style="width:30%;" />
                <col style="width:30%;" />
                <col style="width:30%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Upper margin</th>
                    <th scope="col">gSingle</th>
                    <th scope="col">gDouble</th>
                    <th scope="col">gTriple</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">예시</th>
                    <td>첫번째 요소 : 여백 class 사용하지 않음<p class="gSingle">두번째 요소 : 위의 문장과 5px 의 여백이 생긴다</p></td>
                    <td>첫번째 요소 : 여백 class 사용하지 않음<p class="gDouble">두번째 요소 : 위의 문장과 10px 의 여백이 생긴다</p></td>
                    <td>첫번째 요소 : 여백 class 사용하지 않음<p class="gTriple">두번째 요소 : 위의 문장과 15px 의 여백이 생긴다</p></td>
                </tr>
                <tr class="zh_CN">
                    <th scope="row">예시</th>
                    <td>第一个标签：不使用间距class<p class="gSingle">第二个标签 : 与上一个文章有5px的间距。</p></td>
                    <td>第一个标签：不使用间距class<p class="gDouble">第二个标签 : 与上一个文章有10px的间距。</p></td>
                    <td>第一个标签：不使用间距class<p class="gTriple">第二个标签 : 与上一个文章有15px的间距。</p></td>
                </tr>
                <tr>
                    <th scope="row">예시</th>
                    <td>The first element : no margin class is used<p class="gSingle">The second element : margin is made for the upper sentence and the 5px.</p></td>
                    <td>The first element : no margin class is used<p class="gDouble">The second element : margin is made for the upper sentence and the 10px.</p></td>
                    <td>The first element : no margin class is used<p class="gTriple">The second element : margin is made for the upper sentence and the 15px.</p></td>
                </tr>
            </tbody>
        </table>
    </div><br /><br />
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:10%;" />
                <col style="width:60%;" />
                <col style="width:30%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Break</th>
                    <th scope="col">gBreak : 넓은화면</th>
                    <th scope="col">gBreak : 좁은화면</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">예시</th>
                    <td>화면이 넓은 경우 문장이 한줄로 노출되며, <span class="gBreak">화면이 좁은경우 경우 gBreak 를 기준으로 문장이 줄바꿈 됩니다. </span></td>
                    <td>화면이 넓은 경우 문장이 한줄로 노출되며, <span class="gBreak">화면이 좁은경우 경우 gBreak 를 기준으로 문장이 줄바꿈 됩니다. </span></td>
                </tr>
                <tr class="zh_CN">
                    <th scope="row">예시</th>
                    <td>화면이 넓은 경우 문장이 한줄로 노출되며, <span class="gBreak">화면이 좁은경우 경우 gBreak 를 기준으로 문장이 줄바꿈 됩니다. </span></td>
                    <td>화면이 넓은 경우 문장이 한줄로 노출되며, <span class="gBreak">화면이 좁은경우 경우 gBreak 를 기준으로 문장이 줄바꿈 됩니다. </span></td>
                </tr>
                <tr class="en_US">
                    <th scope="row">예시</th>
                    <td>화면이 넓은 경우 문장이 한줄로 노출되며, <span class="gBreak">화면이 좁은경우 경우 gBreak 를 기준으로 문장이 줄바꿈 됩니다. </span></td>
                    <td>화면이 넓은 경우 문장이 한줄로 노출되며, <span class="gBreak">화면이 좁은경우 경우 gBreak 를 기준으로 문장이 줄바꿈 됩니다. </span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:10%;" />
                <col style="width:30%;" />
                <col style="width:30%;" />
                <col style="width:30%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Lower margin</th>
                    <th scope="col">gSingleBreak</th>
                    <th scope="col">gDoubleBreak</th>
                    <th scope="col">gTripleBreak</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">예시</th>
                    <td><p class="gSingleBreak">첫번째 요소 : 아래 문장과 5px 의 여백이 생긴다.</p>두번째 요소 : 여백 class 사용하지 않음</td>
                    <td><p class="gDoubleBreak">첫번째 요소 : 아래 문장과 10px 의 여백이 생긴다</p>두번째 요소 : 여백 class 사용하지 않음</td>
                    <td><p class="gTripleBreak">첫번째 요소 : 아래 문장과 15px 의 여백이 생긴다</p>두번째 요소 : 여백 class 사용하지 않음</td>
                </tr>
                <tr class="zh_CN">
                    <th scope="row">예시</th>
                    <td><p class="gSingleBreak">第一个标签：与下一个文章有5px的间距</p>第二个标签 : 不使用间距class。</td>
                    <td><p class="gDoubleBreak">第一个标签：与下一个文章有10px的间距</p>第二个标签 : 不使用间距class。</td>
                    <td><p class="gTripleBreak">第一个标签：与下一个文章有15px的间距</p>第二个标签 : 不使用间距class。</p></td>
                </tr>
                <tr class="en_US">
                    <th scope="row">예시</th>
                    <td><p class="gSingleBreak">The first element : margin is made for the lower sentence and the 5px</p></td>
                    <td><p class="gDoubleBreak">The first element : margin is made for the lower sentence and the 10px</p></td>
                    <td><p class="gTripleBreak">The first element : margin is made for the lower sentence and the 15px</p></td>
                </tr>
            </tbody>
        </table>
    </div><br /><br />
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:10%;" />
                <col style="width:30%;" />
                <col style="width:30%;" />
                <col style="width:30%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Left Margin</th>
                    <th scope="col">gSingleSide</th>
                    <th scope="col">gDoubleSide</th>
                    <th scope="col">gTripleSide</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">예시</th>
                    <td>첫번째 요소 : 여백 class 사용하지 않음<span class="gSingleSide">두번째 요소 : 앞의 문장과 15px 의 여백이 생긴다</span></td>
                    <td>첫번째 요소 : 여백 class 사용하지 않음<span class="gDoubleSide">두번째 요소 : 앞의 문장과 30px 의 여백이 생긴다</span></td>
                    <td>첫번째 요소 : 여백 class 사용하지 않음<span class="gTripleSide">두번째 요소 : 앞 문장과 40px 의 여백이 생긴다</span></td>
                </tr>
                <tr class="zh_CN">
                    <th scope="row">예시</th>
                    <td>第一个标签：不使用间距class<span class="gSingleSide">第二个标签 : 与前一个文章有15px的间距。</span></td>
                    <td>第一个标签：不使用间距class<span class="gDoubleSide">第二个标签 : 与前一个文章有30px的间距。</span></td>
                    <td>第一个标签：不使用间距class<span class="gTripleSide">第二个标签 : 与前一个文章有40px的间距。</span></td>
                </tr>
                <tr class="en_US">
                    <th scope="row">예시</th>
                    <td>The first element : no margin class is used.<span class="gSingleSide">The second element : margin is made the front(upper) sentence and the 15px.</span></td>
                    <td>The first element : no margin class is used.<span class="gDoubleSide">The second element : margin is made the front(upper) sentence and the 30px.</span></td>
                    <td>The first element : no margin class is used.<span class="gTripleSide">The second element : margin is made the front(upper) sentence and the 40px.</span></td>
                </tr>
            </tbody>
        </table>
    </div>
'),
array(
'desc' => '
    <h3>gWidth : 가로폭 고정</h3>
    <ol>
        <li>넓이확인을 위해 이 화면에서만 배경색을 지정함. 실제로는 배경색이 들어가지 않는다.</li>
        <li>.gWidth.w$Size 의 조합으로 사용한다.</li>
        <li>.w$Size의 사이즈 예시는 /css/width.css 에서 확인할 수 있으며, 필요시 추가할 수 있다.</li>
        <li>텍스트의 정렬이 필요한 경우에 사용되며, 가능한 생략한다.</li>
    </ol>
    <h3 class="zh_CN">gWidth : 固定宽度</h3>
    <ol class="zh_CN">
        <li>为方便确认宽度，只在此页面设置背景色，实际页面未设置背景色。</li>
        <li>以.gWidth.与w$Size的组合使用。</li>
        <li>有关.w$Size大小示例可在/css/width.css确认，必要时可再添加。</li>
        <li>尽可能省略，需要排序文本时再使用。</li>
    </ol>
    <h3 class="en_US">gWidth : Fixation of the width</h3>
    <ol class="en_US">
        <li>The background color has to be selected just to check the width, not to be actually used.</li>
        <li>The combination of the.gWidth.w$Size is utilized.</li>
        <li>The example of .w$Size can be checked in /css/width.css, which can be added if necessary.</li>
        <li>It is used when the text array is needed, if possible, skip it. </li>
    </ol>
', 'html' => '
        <span class="gWidth w100" style="background:#e1e1e1;">gWidth w100</span>
        <span class="gWidth w150" style="background:#e1e1e1;">gWidth w150</span>
        <span class="gWidth w310" style="background:#e1e1e1;">gWidth w310</span>
        <span class="gWidth w77" style="background:#e1e1e1;">gWidth w77</span>
')
);
?>