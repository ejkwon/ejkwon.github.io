<?php

// 모듈 전체 제목
$header_name = 'Table in Table';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <p>mBoard 내에 mBoard가 사용 될때, 2개 이상이 되지 않도록 주의한다.</p>
    <p class="zh_CN">mBoard里有mBoard时， 不要有两级以上的mBoard嵌套。</p>
    <p class="en_US">번역필요</p>
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
    <h3>row Type &gt col Type</h3>
', 'html' => '
    <div class="mBoard gLarge">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">제목</th>
                    <td>
                        <div class="mBoard gSmall">
                            <table border="1" summary="">
                                <caption>제목</caption>
                                <tbody>
                                    <tr>
                                        <th scope="row">제목</th>
                                        <td>내용</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">이름</th>
                                        <td>내용</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">제목</th>
                    <td>
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
                                <tbody>
                                    <tr>
                                        <td>내용</td>
                                        <td>내용</td>
                                        <td>내용</td>
                                        <td>내용</td>
                                    </tr>
                                    <tr>
                                        <td>내용</td>
                                        <td>내용</td>
                                        <td>내용</td>
                                        <td>내용</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),
array(
'desc' => '
    <h3>col Type &gt row Type</h3>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:199px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>내용</td>
                    <td>
                        <div class="mBoard gSmall">
                            <table border="1" summary="">
                                <caption>제목</caption>
                                <tbody>
                                    <tr>
                                        <th scope="row">제목</th>
                                        <td>내용</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">이름</th>
                                        <td>내용</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>내용</td>
                    <td>
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
                                <tbody>
                                    <tr>
                                        <td>내용</td>
                                        <td>내용</td>
                                        <td>내용</td>
                                        <td>내용</td>
                                    </tr>
                                    <tr>
                                        <td>내용</td>
                                        <td>내용</td>
                                        <td>내용</td>
                                        <td>내용</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>