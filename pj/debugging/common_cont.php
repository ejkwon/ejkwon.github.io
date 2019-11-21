<?php
// 상세 모듈
$arr_module1 = array(
array(
'desc' => '
    <h2 class="debugTitle" id="com1">heading</h2>
    <h3 class="debugSubTitle">heading 태그 내에 블록요소 태그 추가시</h3>
', 'html' => '
    <h2>heading 태그 내에 <p style="display:inline-block">블록요소 p 태그를 추가해보았다.</p></h2>
', 'javaCode' => '
    // heading 태그 내에 블록요소 태그 추가시
    $("h1, h2, h3, h4, h5, h6").each(function(){
        $(this).has("p, div, table, h1, h2, h3, h4, h5, h6, form, ul, ol, li, dl, dt, dd, pre, blockquote").addClass("eDebug").after("<div class="eVirtual">heading 태그 내에 블록요소 태그 위치불가</div>");
    });
'), array(
'desc' => '
    <h2 class="debugTitle" id="com3">img</h2>
    <h3 class="debugSubTitle">img 태그의 alt 속성이 빠진 경우</h3>
', 'html' => '
    <img src="http://img.cafe24.com/img/simplexi/common/h3_logobottom.png" />
', 'javaCode' => '
    // img 태그의 alt 속성이 빠진 경우
    $("img").each(function(){
        var fImg = $(this)[0].outerHTML;
        if(fImg.indexOf("alt=") == -1){
            $(this).addClass("eDebug").after("<div class="eVirtual">alt 속성 필수</div>");
        }
    });
'), array(
'desc' => '
    <h2 class="debugTitle" id="com4">button</h2>
    <h3 class="debugSubTitle">button 태그의 type="button" 속성이 빠진 경우</h3>
', 'html' => '
    <button class="btnClose">버튼</button>
', 'javaCode' => '
    // button 태그의 type="button" 속성이 빠진 경우
    $("button").each(function(){
        var fButton = $(this)[0].outerHTML;
        if(fButton.indexOf("type=") == -1){
            $(this).addClass("eDebug").after("<div class="eVirtual">type="button" 속성 필수</div>");
        }
    });
'), array(
'desc' => '
    <h2 class="debugTitle" id="com6">table</h2>
    <h3 class="debugSubTitle">border 속성이 빠진 경우</h3>
', 'html' => '
    <table class="sample">
        <caption>테이블 캡션명</caption>
        <colgroup>
            <col style="width:100px;" />
            <col style="width:auto;" />
        </colgroup>
        <tbody>
            <tr>
                <th scope="row">제목</th>
                <td>내용</td>
            </tr>
        </tbody>
    </table>
', 'javaCode' => '
    // border 속성이 빠진 경우
    $("table").each(function(){
        if($(this).attr("border") == ""){
            $(this).addClass("eDebug").after("<div class="eVirtual">border="1" 속성 필수</div>");
        }
    });
'), array(
'desc' => '
    <h3 class="debugSubTitle">caption이 빠진 경우</h3>
', 'html' => '
    <table border="1" class="sample">
        <colgroup>
            <col style="width:100px;" />
            <col style="width:auto;" />
        </colgroup>
        <tbody>
            <tr>
                <th scope="row">제목</th>
                <td>내용</td>
            </tr>
        </tbody>
    </table>
', 'javaCode' => '
    // caption 태그가 빠진 경우
    $("table:not(:has(caption))").each(function(){
        $(this).addClass("eDebug").after("<div class="eVirtual">&lt;caption&gt; 필수</div>");
    });
'), array(
'desc' => '
    <h3 class="debugSubTitle">&lt;col width=""&gt; 로 표현된 경우</h3>
', 'html' => '
    <table border="1" class="sample">
        <caption>테이블 캡션명</caption>
        <colgroup>
            <col width="100px;" />
            <col width="auto;" />
        </colgroup>
        <tbody>
            <tr>
                <th scope="row">제목</th>
                <td>내용</td>
            </tr>
        </tbody>
    </table>
', 'javaCode' => '
    // col width="" 로 표현된 경우
    $("colgroup").each(function(){
        if($(this).children("col").attr("width") != ""){
            $(this).parents("table").addClass("eDebug").after("<div class="eVirtual">col 태그의 width는 &lt;col style="width:"&gt; 로 표시</div>");
        }
    });
'), array(
'desc' => '
    <h3 class="debugSubTitle">th 태그 scope 속성이 누락되었거나, 속성값(col/row/colgroup/rowgroup) 이외의 값을 적용한 경우</h3>
', 'html' => '
    <table border="1" class="sample">
        <caption>테이블 캡션명</caption>
        <colgroup>
            <col style="width:200px;" />
            <col style="width:auto;" />
            <col style="width:auto;" />
        </colgroup>
        <thead>
            <tr>
                <th scope="col">정상</th>
                <th scope="colcol">속성 이외의 값</th>
                <th scope="col">정상</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>누락</th>
                <td>내용</td>
                <td>내용</td>
            </tr>
            <tr>
                <th scope="row">정상</th>
                <td>내용</td>
                <td>내용</td>
            </tr>
        </tbody>
    </table>
', 'javaCode' => '
    // th 태그 scope 속성이 누락되었거나, 속성값(col/row/colgroup/rowgroup) 이외의 값을 적용한 경우
    $("table th").each(function(){
        var fScope = $(this).attr("scope");
        if ( fScope == "" ) {
            $(this).addClass("eDebug scopenone");
        } else if ( fScope != "col" && fScope != "row" && fScope != "colgroup" && fScope != "rowgroup" ) {
            $(this).addClass("eDebug scopeerror");
        }
    });

    /* th 태그 scope 속성이 누락되었거나, 속성값(col/row/colgroup/rowgroup) 이외의 값을 적용한 경우 */
      table .scopenone:before { position:absolute; left:0; top:0; padding:3px 10px; content:"scope 속성 누락"; white-space:nowrap; color:#fff; text-align:left; background:#467bff; box-shadow:6px 6px 10px -1px rgba(89,89,89,0.75); }
      table .scopeerror:before { position:absolute; left:0; top:0; padding:3px 10px; content:"scope 속성값 확인"; white-space:nowrap; color:#fff; text-align:left; background:#50a54c; box-shadow:6px 6px 10px -1px rgba(89,89,89,0.75); }
'), array(
'desc' => '
    <h3 class="debugSubTitle">tfoot 태그가 tbody 아래에 위치하는 경우</h3>
', 'html' => '
    <table border="1" class="sample">
        <caption>테이블 캡션명</caption>
        <colgroup>
            <col style="width:100px;" />
            <col style="width:auto;" />
        </colgroup>
        <tbody>
            <tr>
                <th scope="row">제목</th>
                <td>내용</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th scope="row">tfoot 제목</th>
                <td>tfoot 내용</td>
            </tr>
        </tfoot>
    </table>
', 'javaCode' => '
    /* tfoot 태그가 tbody 아래에 위치하는 경우 */
      table tbody + tfoot th + td,
      table tbody + tfoot td:first-child { position:relative; }
      table tbody + tfoot th + td:before,
      table tbody + tfoot td:first-child:before { position:absolute; left:0; top:0; padding:3px 10px; content:"tbody, tfoot 순서 확인"; color:#fff; text-align:left; background:#467bff; box-shadow:6px 6px 10px -1px rgba(89,89,89,0.75); }
'), array(
'desc' => '
    <h2 class="debugTitle" id="com7">label</h2>
    <h3 class="debugSubTitle">&lt;lable&gt; 안에 &lt;label&gt; 이나 &lt;a&gt; 태그가 들어갈 경우</h3>
', 'html' => '
    <label><input type="checkbox"> label 체크 <label>label &gt; label</label></label>
    <br><br>
    <label><input type="checkbox"> label 체크 <a href="#none">label &gt; a 링크</a></label></label>
', 'javaCode' => '
    /* lable 안에 label 이나 a 태그가 들어갈 경우 */
      label label,
      label a { position:relative; outline:2px solid #467bff; }
      label label:after { position:absolute; left:100%; top:-2px; padding:2px 7px; content:"label 안에 label 중복 불가"; font-size:12px; white-space:nowrap; color:#fff; text-align:left; background:#467bff; box-shadow:6px 6px 10px -1px rgba(89,89,89,0.75); }
      label a:after { position:absolute; left:100%; top:-2px; padding:2px 7px; content:"label 안에 a 태그 불가"; font-size:12px; white-space:nowrap; color:#fff; text-align:left; background:#467bff; box-shadow:6px 6px 10px -1px rgba(89,89,89,0.75); }
'), array(
'desc' => '
    <h3 class="debugSubTitle">&lt;lable&gt; 안에 폼태그가 2개이상인 경우</h3>
', 'html' => '
    <label><input type="checkbox"> label 체크 <input type="text" value="인풋박스"></label>
', 'javaCode' => '
    // lable 안에 폼태그가 2개이상인 경우
    var count=0;
    $("label").each(function(){
        var inputLen = $(this).find("input").length;
        var selectLen = $(this).find("select").length;
        var areaLen = $(this).find("textarea").length;
        var total = inputLen + selectLen + areaLen;
        if(total > 1){
            $(this).addClass("eDebug").after("<div class="eVirtual">label 안의 폼태그는 최대 1개 사용가능</div>");
            count++;
        }
    });
'), array(
'desc' => '
    <h2 class="debugTitle" id="com_blind">.blind</h2>
    <h3 class="debugSubTitle">대체 텍스트 숨김처리(확인용 디버깅)</h3>
', 'html' => '
    <h2 class="blind">공지사항</h2>
', 'javaCode' => '
    // 대체 텍스트
    $(".blind").each(function(){
        $(this).addClass("eViewMessage");
    });
'), array(
'desc' => '
    <h2 class="debugTitle" id="com9">RMB, RMIB</h2>
    <h3 class="debugSubTitle">img 태그에 RMB, RMIB 사용 시 이미지 파일명 끝에 _m 이 붙지 않은 경우</h3>
', 'html' => '
    <img src="//img.cafe24.com/img/simplexi/common/h3_logobottom.png" alt="cafe24 | SimpleX Internet" class="RMB">
    <br><br>
    <img src="//img.cafe24.com/img/simplexi/common/h3_logobottom.png" alt="cafe24 | SimpleX Internet" class="RMIB">
    <br><br>
    <p class="RMB"><img src="//img.cafe24.com/img/simplexi/common/h3_logobottom.png" alt="cafe24 | SimpleX Internet"></p>
', 'javaCode' => '
    // img 태그에 RMB, RMIB 사용 시 이미지 파일명 끝에 _m 이 붙지 않은 경우
    $("img.RMB, img.RMIB, .RMB img, .RMIB img").each(function(){
        var imgName = $(this).attr("src");
        if( imgName.substring(imgName.length-4,imgName.length-6) != "_m"){
            $(this).addClass("eDebug").after("<div class="eVirtual">이미지 파일명 끝에 _m 필수</div>");
        }
    });
'), array(
'desc' => '
    <h2 class="debugTitle" id="com10">mBreadcrumb</h2>
    <h3 class="debugSubTitle">mBreadcrumb 클래스 내에 ol 태그 사용하지 않은 경우</h3>
', 'html' => '
    <ul class="mBreadcrumb">
        <li>HOME</li>
        <li>쇼핑몰센터</li>
        <li title="현재 위치"><strong>쇼핑몰센터 소개</strong></li>
    </ul>
', 'javaCode' => '
    /* mBreadcrumb 클래스 내에 ol 태그 사용하지 않은 경우 */
      .mBreadcrumb { position:relative; outline:2px solid #467bff; }
      .mBreadcrumb:before { z-index:1; position:absolute; left:-2px; top:100%; padding:2px 7px; content:"mBreadcrumb는 ol tag 사용 필수"; font-size:12px; white-space:nowrap; color:#fff; text-align:left; background:#467bff; box-shadow:6px 6px 10px -1px rgba(89,89,89,0.75); }
      ol.mBreadcrumb { outline:0; }
      ol.mBreadcrumb:before { display:none; }
')
);
?>