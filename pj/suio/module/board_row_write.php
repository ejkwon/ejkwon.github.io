<?php

// 모듈 전체 제목
$header_name = 'mBoard : 게시판 쓰기/수정 <span class="zh_CN">发表/修改留言板</span><span class="en_US">(번역필요)</span>';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>자주 사용하는 휴대전화, E-mail의 경우, input 사이즈를 가이드에 맞추는 것을 권장한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>常用的手机或E-mail，建议input的size须按照guide的规定制作。</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
    </ol>';

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
                    <p class="info"><span class="date">2016.06.22</span><span class="writer">김진아</span></p>
                    <p class="title"><strong>[gColumnSet]</strong> gMemo 비권장 grid로 변경, gColumnSet 추가</p>
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
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:164px;" />
                <col style="width:164px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">한국어 <span class="zh_CN">韩文</span><span class="en_US">Korean</span></th>
                    <th scope="col" class="zh_CN">중국어 中文</th>
                    <th scope="col" class="en_US">영어 English</th>
                    <th scope="col">적용 예시 <span class="zh_CN">适用示例</span><span class="en_US">Example</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">제목</th>
                    <th scope="row"><span class="zh_CN">标题</span><span class="en_US">Title</span></th>
                    <td>
                        <div class="gIcoShop">
                            <span class="icoShop">상점별</span>
                            <input type="text" class="fText" style="width:100%;" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">이름</th>
                    <th scope="row"><span class="zh_CN">姓名</span><span class="en_US">Name</span></th>
                    <td>
                        <input type="text" placeholder="예시) 홍길동" class="fText" style="width:120px;" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">아이디 <strong class="icoRequired">필수</strong></th>
                    <th scope="row"><span class="zh_CN">账号 必填</span><span class="en_US">ID (must input)</span></th>
                    <td>
                        <input type="text" class="fText" style="width:120px;" />
                        <a href="#none" class="btnNormal"><span>중복체크</span></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">휴대전화, 일반전화</th>
                    <th scope="row" rowspan="2"><span class="zh_CN">手机、座机</span><span class="en_US">Cell number, Phone number</span></th>
                    <td>
                        <input type="text" class="fText" style="width:120px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="fText" style="width:45px;" /> -
                        <input type="text" class="fText" style="width:50px;" /> -
                        <input type="text" class="fText" style="width:50px;" />
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">E-mail</th>
                    <th scope="row" rowspan="2">E-mail</th>
                    <td>
                        <input type="text" class="fText" style="width:230px;" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="fText" style="width:120px;" /> @ <input type="text" class="fText" style="width:120px;" />
                        <select class="fSelect">
                            <option>naver.com</option>
                            <option>daum.net</option>
                            <option>nate.com</option>
                            <option>hotmail.com</option>
                            <option>yahoo.com</option>
                            <option>empal.com</option>
                            <option>korea.com</option>
                            <option>dreamwiz.com</option>
                            <option>gmail.com</option>
                            <option selected="selected">직접입력</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row">주소 <br /><a href="/suio/include/layout.php?MODULE=zipcode" target="_blank" class="txtEm">[우편번호검색 상세보기]</a></th>
                    <th scope="row" class="zh_CN">地址 <br /><a href="/suio/include/layout.php?MODULE=zipcode" target="_blank" class="txtEm">[搜索邮编 查看详情]</a></th>
                    <th scope="row" class="en_US">Address <br /><a href="/suio/include/layout.php?MODULE=zipcode" target="_blank" class="txtEm">[zipcode detail]</a></th>
                    <td>
                        <input type="text" class="fText" readonly="readonly" style="width:70px;" />
                        <a href="/suio/module/zipcode_common_popup.html" onclick="window.open(this.href, \'zipcode\', \'width=600, height=565, scrollbars=no, resizable=no\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>주소 검색<em class="icoLink"></em></span></a>
                        <div class="gSingle"><input type="text" readonly="readonly" class="fText" style="width:340px;" /></div>
                        <div class="gSingle"><input type="text" class="fText" style="width:340px;" /></div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">이미지 업로드 (.gFile)</th>
                    <th scope="row" rowspan="2" class="zh_CN">上传图片 (.gFile)</th>
                    <th scope="row" rowspan="2" class="en_US">upload image (.gFile)</th>
                    <td>
                        <span class="figure"><img src="//img.echosting.cafe24.com/thumb/112x30.gif" alt="" style="max-width:112px;" /></span>
                        <span class="gFile">
                            <input type="file" class="file" />
                            <span class="btnNormal"><span><em class="icoPlus"></em> 이미지등록</span></span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="figure"><img src="//img.echosting.cafe24.com/thumb/112x30.gif" alt="" style="max-width:112px;" /></span>
                        <span class="gFile">
                            <input type="file" class="file" />
                            <span class="btnNormal"><span>등록</span></span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">첨부파일</th>
                    <th scope="row" rowspan="2" class="zh_CN">添加附件</th>
                    <th scope="row" rowspan="2" class="en_US">attachment</th>
                    <td>
                        <input type="file" class="fFile" />
                        <ul class="txtInfo">
                            <li>권장이미지 : 500px * 500px / 1M 이하 / gif, png, jpg(jpeg)</li>
                            <li>등록이미지 : 500px * 500px / 1M 이하 / gif, png, jpg(jpeg)</li>
                            <li>첨부파일 : 1M 이하 / csv, xls, doc, ppt, pdf</li>
                        </ul>
                        <span class="frame gSingle"><img src="//img.echosting.cafe24.com/thumb/104x104_1.gif" alt="" /></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="file" class="fFile" />
                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">입력 1 (textarea)</th>
                    <th scope="row" class="zh_CN">输入 1 (textarea)</th>
                    <th scope="row" class="en_US">note 1 (textarea)</th>
                    <td><textarea rows="3" cols="110" class="fTextarea" style="width:98%;"></textarea></td>
                </tr>
                <tr>
                    <th scope="row">입력 2 (Editor)</th>
                    <th scope="row" class="zh_CN">输入 2 (Editor)</th>
                    <th scope="row" class="en_US">note 2 (Editor)</th>
                    <td>
                        <div class="gEditor"><img src="//img.echosting.cafe24.com/suio/@editor.gif" alt="" /></div>
                        <ul class="mList">
                            <li>에디터 삽입시 반드시 .gEditor를 추가.</li>
                            <li class="zh_CN"><span class="txtMore">插入编辑器时，须添加.gEditor</span></li>
                            <li class="en_US"><span class="txtMore">Must add the .gEditor when editor is inserted</span></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">검색기간</th>
                    <th scope="row" class="zh_CN">搜索时间段</th>
                    <th scope="row" class="en_US">search period</th>
                    <td>
                        <a href="#none" class="btnDate"><span>오늘</span></a>
                        <a href="#none" class="btnDate"><span>3일</span></a>
                        <a href="#none" class="btnDate"><span>7일</span></a>
                        <a href="#none" class="btnDate"><span>1개월</span></a>
                        <a href="#none" class="btnDate"><span>3개월</span></a>
                        <a href="#none" class="btnDate"><span>1년</span></a>
                        <a href="#none" class="btnDate"><span>기본 검색기간 설정</span></a>
                        <input type="text" value="2013-04-03" class="fText gDate" />
                        <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a> ~
                        <input type="text" value="2013-04-03" class="fText gDate" />
                        <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">radio</th>
                    <th scope="row"></th>
                    <td>
                        <label class="gLabel"><input type="radio" class="fChk" checked="checked" /> 예시1</label>
                        <span class="gLabel">(설명)</span>
                        <label class="gLabel"><input type="radio" class="fChk" /> 예시2</label>
                        <label class="gLabel"><input type="radio" class="fChk" /> 예시3</label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">checkbox</th>
                    <th scope="row"></th>
                    <td>
                        <label class="gLabel"><input type="checkbox" class="fChk" checked="checked" /> 전체</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시2</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시3</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시4</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시5</label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">가격, 숫자 입력</th>
                    <th scope="row" class="zh_CN">价格，请输入数字</th>
                    <th scope="row" class="en_US">input price, number</th>
                    <td><input type="text" class="fText right" style="width:120px;" value="26,000" /> 원
                        <ul class="txtInfo">
                            <li>fText.right 를 사용하면, input 내 텍스트 오른쪽 정렬을 할 수 있다</li>
                            <li class="zh_CN">使用fText.right，可将input内文字向右对齐</li>
                            <li class="en_US">Using the fText.right, the text can be aligned in the right side in the box.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">기본 입력값이<br />한글인 경우</th>
                    <th scope="row" class="zh_CN">输入基本值为韩文时</th>
                    <th scope="row" class="en_US">if the default text is Korean</th>
                    <td>
                        <input type="text" class="fText fKorean" style="width:120px;" />
                        <ul class="txtInfo">
                            <li>fText, fInput 의 기본값을 한글로 제공해야 할때 fKorean 추가한다. Webkit브라우저(사파리, 크롬)에서 제공되지 않음</li>
                            <li class="zh_CN">将fText、finput的基本值设为韩文时，应添加fKorean。不支持Webkit浏览器（Safari、谷歌浏览器）。</li>
                            <li class="en_US">Add the fKorean when the default value of fText and flnput has to be provided in Korean.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">블릿의 사용</th>
                    <th scope="row" class="zh_CN">项目符号的使用</th>
                    <th scope="row" class="en_US">The use of blit</th>
                    <td>
                        <label class="gLabel"><span class="icoDot"></span> 예시 <input type="text" class="fText right" style="width:80px;" /></label>
                        <label class="gLabel"><span class="icoDot"></span> 예시 <input type="text" class="fText right" style="width:80px;" /></label>
                    </td>
                </tr>
                <tr>
                    <th scope="row">selectbox <br />max-width 제한</th>
                    <th scope="row" class="zh_CN">selectbox <br />限制max-width</th>
                    <th scope="row" class="en_US">selectbox <br />max-width limit</th>
                    <td>
                        <select class="fSelect category">
                            <option>- 예시예시예시예시예시예시 -</option>
                        </select>
                        <select class="fSelect category">
                            <option>- 예시예시예시예시예시예시 -</option>
                        </select>
                        <select class="fSelect category">
                            <option>- 예시예시예시예시예시예시 -</option>
                        </select>
                        <ul class="txtInfo">
                            <li>상품 카테고리명(대/중/소)에서 사용 권장. IE8에서는 option이 잘림 현상있으므로 특수한 경우를 제외하고 사용하지 않아야 함.</li>
                            <li class="zh_CN"><span class="txtMore">建议在商品分类名（大/中/小）中使用。浏览器IE8中会出现option不完整的现象。<a href="/smartAdmin/market/global/admin/_mogujie/product/register_write.html" class="btnLink" target="_blank" title="새창 열림"><strong>[例子<em class="icoLink"></em>]</strong></a></span></li>
                            <li class="en_US"><span class="txtMore">It is recommended to use in the product category name (big/mid/small). However, it is not recommended to use it in IE8 unless it is a special occasion since the option may be cut in the environment.</span></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">국가선택</th>
                    <th scope="row" class="zh_CN">选择国家</th>
                    <th scope="row" class="en_US">Country</th>
                    <td>
                        <select id="board_nation" class="fSelect" style="width:210px;"></select>
                        &lt;select class="fSelect" style="width:210px;"&gt;&lt;?php require_once( $_SERVER["DOCUMENT_ROOT"]."/suio/module/board_nation.html"); ?&gt;&lt;/select&gt;
                        <ul class="mList">
                            <li>위의 html 을 복사하면 공통으로 사용되는 국가 목록이 include 된다</li>
                            <li class="zh_CN"><strong class="txtEm">复制上方html，共同使用的国家目录将被导入。</strong></li>
                            <li class="en_US">Copying the html above, the list of countries that are commonly used is included.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">입력한 글자 수 표시</th>
                    <th scope="row" rowspan="2" class="zh_CN">显示输入字数</th>
                    <th scope="row" rowspan="2" class="en_US">The number of text that’s input</th>
                    <td>
                        <input type="text" class="fText" style="width:150px;" />
                        <span class="txtByte" title="현재글자수/최대글자수">[ <strong>0</strong> / 100 ]</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="fText" style="width:98%;" />
                        <p class="txtByte" title="현재글자수/최대글자수">[ <strong>0</strong> / 100 ]</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">메모</th>
                    <th scope="row" class="zh_CN">便签</th>
                    <th scope="row" class="en_US">memo</th>
                    <td>
                        <div class="gMemo">
                            <textarea rows="3" cols="100" class="fTextarea" style="width:90%;"></textarea>
                            <div class="button">
                                <a href="#none" class="btnNormal"><span>수정</span></a><br />
                                <a href="#none" class="btnNormal"><span>취소</span></a>
                            </div>
                        </div>
                        <ul class="mList">
                            <li>2016년 6월 22일 이후 비권장</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="3">분할</th>
                    <th scope="row" rowspan="3" class="zh_CN">分割</th>
                    <th scope="row" rowspan="3" class="en_US">division</th>
                    <td>
                        <select class="fSelect">
                            <option>몰ID</option>
                            <option>쇼핑몰명</option>
                        </select>
                        <input type="text" class="fText" style="width:400px;" />
                        <label class="gLabel"><input type="checkbox" class="fChk" checked="checked" /> 다중 입력</label>
                        <ul class="txtInfo">
                            <li>단순한 검색을 위한 form 태그의 진열시, gColumnSet로 감싸지 않는다.</li>
                            <li class="zh_CN">如果是为了单纯地搜索而陈列form标签，则不用gColumnSet套住。</li>
                            <li class="en_US">Do not cover it with the gColumnSet, if it is only the form tag display for simple search.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="gColumnSet">
                            <div class="column">
                                <select class="fSelect">
                                    <option>몰ID</option>
                                    <option>쇼핑몰명</option>
                                </select>
                            </div>
                            <div class="column">
                                <input type="text" class="fText" style="width:400px;" />
                                <ul class="txtInfo">
                                    <li>[다중입력] input이 textarea로 변경되는 UI일 경우, <br />input 버전도 gColumnSet로 감싸준다.</li>
                                    <li class="zh_CN">"如果是[다중입력] input变为textarea的UI，<br />则input版本也要用gColumnSet套住。"</li>
                                    <li class="en_US">[multiple input] In case the input has a UI that is changed to the textarea,<br />cover the version of input with the gColumnist.</li>
                                </ul>
                            </div>
                            <div class="column">
                                <label class="gLabel"><input type="checkbox" class="fChk" checked="checked" /> 다중 입력</label>
                            </div>
                        </div>
                        <div class="gColumnSet middle">
                            <div class="column">
                                <select class="fSelect">
                                    <option>몰ID</option>
                                    <option>쇼핑몰명</option>
                                </select>
                            </div>
                            <div class="column">
                                <textarea class="fTextarea" rows="6" cols="65" style="width:400px;"></textarea>
                                <ul class="txtInfo">
                                    <li>화면에서 table-cell로 구분이 필요할때, 화면 분할이 필요할때 사용한다.</li>
                                    <li>middle을 이용해서 vertial-align 변경이 가능하다.</li>
                                    <li class="zh_CN">用于以table-cell区分画面时以及需要分割画面时。</li>
                                    <li class="zh_CN">可通过middle来更改vertial-align。</li>
                                    <li class="en_US">It is used when a division is needed with the table-cell in a screen or the screen division is required.</li>
                                    <li class="en_US">It is possible to change the vertical-align, using the middle.</li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="gColumnSet full">
                            <div class="column">
                                <label class="gLabel"><input type="checkbox" class="fChk" checked="checked" /> 예시</label>
                                <ul class="mList">
                                    <li>full grid 사용을 원할 경우 gColumnSet에 full class를 추가한다.</li>
                                    <li>column의 width는 <a href="//img.echosting.cafe24.com/css/width.css" target="_blank" title="새창 열림" class="btnLink"><strong>[width.css<em class="icoLink"></em>]</strong></a>의 w$숫자 class를 사용하고, 부득이한 경우 인라인으로 추가한다.</li>
                                    <li class="zh_CN">如要使用full grid时，在gColumnSet添加full class。</li>
                                    <li class="zh_CN">column的width使用 <a href="//img.echosting.cafe24.com/css/width.css" target="_blank" title="새창 열림" class="btnLink"><strong>[width.css<em class="icoLink"></em>]</strong></a> 的w$数字class，在不得已的情况下添加为inline。</li>
                                    <li class="en_US">(번역필요)</li>
                                    <li class="en_US">(번역필요)</li>
                                </ul>
                            </div>
                            <div class="column w50">
                                <a href="#none" class="btnNormal"><span>버튼</span></a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">text + button</th>
                    <th scope="row"></th>
                    <td>예시 <a href="#none" class="btnNormal"><span>버튼</span></a></td>
                </tr>
                <tr>
                    <th scope="row">form + button</th>
                    <th scope="row"></th>
                    <td>
                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> delete</span></a>
                        <a href="#none" class="btnNormal"><span><em class="icoPlus"></em> add</span></a>
                        <a href="#none" class="btnNormal"><span><em class="icoMinus"></em> minus</span></a>
                        <input type="text" class="fText" />
                        <a href="#none" class="btnSearch"><span>검색</span></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">검색 기간 설정</th>
                    <th scope="row" class="zh_CN">设置搜索时间段</th>
                    <th scope="row" class="en_US">set search period</th>
                    <td>
                        <a href="#none" class="btnDate"><span>오늘</span></a>
                        <a href="#none" class="btnDate"><span>3일</span></a>
                        <a href="#none" class="btnDate"><span>7일</span></a>
                        <a href="#none" class="btnDate"><span>1개월</span></a>
                        <a href="#none" class="btnDate"><span>3개월</span></a>
                        <a href="#none" class="btnDate"><span>1년</span></a>
                        <a href="#none" class="btnDate"><span>기본 검색기간 설정</span></a>
                        <input type="text" value="2013-04-03" class="fText gDate" />
                        <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a> ~
                        <input type="text" value="2013-04-03" class="fText gDate" />
                        <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">text + .btnIcon</th>
                    <th scope="row"></th>
                    <td>
                        <div class="gBtnFixed">
                            <p class="txt">예시 문장입니다.</p>
                            <p class="button">
                                <a href="#none" class="btnIcon icoView" title="미리보기">미리보기</a>
                                <a href="#none" class="btnIcon icoEdit" title="수정">수정</a>
                            </p>
                        </div>
                        <ul class="mList">
                            <li>아이콘은 최대 2개까지 삽입 할 수 있다.</li>
                            <li class="zh_CN"><span class="txtMore">最多可插入2个icon</span></li>
                            <li class="en_US"><span class="txtMore">2 icons in maximum can be inserted.</span></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>