<?php

// 모듈 전체 제목
$header_name = 'mDropDown';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>select와 같은 역활을 하나, 선택값에 미리보기 이미지가 필요한 경우 사용된다.</li>
        <li>gFix는 가로폭을 130px 로 고정시킨다. 다른 사이즈가 필요할 경우 style로 처리한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>功能与select相同，但仅在选项值需要预览图片时使用。</li>
        <li>gFix的宽度定为130px。如需不同尺寸可用style处理。</li>
    </ol>
    <ol class="en_US">
        <li>It has the same role as the select, but used when a preview image is needed for the selected value.</li>
        <li>The horizontal width of gFix is fixed at 130px. If other size is needed, the style can handle.</li>
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
                    <p class="info"><span class="date">2016.04.07</span><span class="writer">권언정</span></p>
                    <p class="title"><strong>[mDropDown]</strong> default / disabled 클래스 추가 <a href="/smartAdmin/community/review/setting.html" class="btnLink" target="_blank">리뷰톡톡 설정</a></p>
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

    <h3>[mDropDown + grid]</h3>
', 'html' => '
   <div class="mBoard">
       <table border="1" summary="">
           <caption>옵션세트</caption>
           <colgroup>
               <col style="width:150px;" />
               <col style="width:150px;" />
               <col style="width:auto;" />
           </colgroup>
           <tbody>
               <tr>
                   <th scope="row">기본형</th>
                   <th scope="row"><span class="zh_CN">基本样式</span><span class="en_US">(번역필요)</span></th>
                   <td>
                       <div class="mDropDown">
                           <p class="value eDropDown style">셀렉트박스</p>
                           <ul class="list">
                               <li><a href="#none" class="style">셀렉트박스</a></li>
                               <li><a href="#none" class="preview">미리보기</a></li>
                               <li><a href="#none" class="button">텍스트버튼</a></li>
                               <li><a href="#none" class="input">글자입력</a></li>
                               <li><a href="#none" class="number">숫자입력</a></li>
                           </ul>
                       </div>
                    </td>
               </tr>
               <tr>
                   <th scope="row">고정형 gFix</th>
                   <th scope="row"></th>
                   <td>
                       <div class="mDropDown gFix">
                           <p class="value eDropDown preview">셀렉트박스</p>
                           <ul class="list">
                               <li><a href="#none" class="style">셀렉트박스</a></li>
                               <li><a href="#none" class="preview">미리보기</a></li>
                               <li><a href="#none" class="button">텍스트버튼</a></li>
                               <li><a href="#none" class="input">글자입력</a></li>
                               <li><a href="#none" class="number">숫자입력</a></li>
                           </ul>
                       </div>
                    </td>
               </tr>
           </tbody>
       </table>
   </div>
'),
array(
'desc' => '
    <h3>[mDropDown > value eDropDown]</h3>
        <ol>
            <li>선택하기 전의 UI가 필요한 경우, default 클래스를 추가한다.</li>
            <li>비활성화 처리가 필요한 경우, disabled 클래스를 추가한다.</li>
        </ol>
        <ol class="zh_CN">
            <li>选择前需要UI的情况，添加default class。</li>
            <li>需要非活性化处理的情况，添加disabled class。</li>
        </ol>
        <ol class="en_US">
            <li>If an UI is needed before the selection, add the default class.</li>
            <li>If an inactive handling is needed, add the disabled class.</li>
        </ol>
', 'html' => '
    <div class="mBoard">
       <table border="1" summary="">
           <caption>옵션세트</caption>
           <colgroup>
               <col style="width:150px;" />
               <col style="width:150px;" />
               <col style="width:auto;" />
           </colgroup>
           <tbody>
               <tr>
                   <th scope="row">선택 전 default</th>
                   <th scope="row"></th>
                   <td>
                       <div class="mDropDown gFix">
                           <p class="value eDropDown default">- 입력방식 선택 -</p>
                           <ul class="list">
                               <li><a href="#none" class="style">셀렉트박스</a></li>
                               <li><a href="#none" class="preview">미리보기</a></li>
                               <li><a href="#none" class="button">텍스트버튼</a></li>
                               <li><a href="#none" class="input">글자입력</a></li>
                               <li><a href="#none" class="number">숫자입력</a></li>
                           </ul>
                       </div>
                    </td>
               </tr>
               <tr>
                   <th scope="row">비활성화 disabled</th>
                   <th scope="row"></th>
                   <td>
                       <div class="mDropDown gFix">
                           <p class="value eDropDown default disabled">- 입력방식 선택 -</p>
                           <ul class="list">
                               <li><a href="#none" class="style">셀렉트박스</a></li>
                               <li><a href="#none" class="preview">미리보기</a></li>
                               <li><a href="#none" class="button">텍스트버튼</a></li>
                               <li><a href="#none" class="input">글자입력</a></li>
                               <li><a href="#none" class="number">숫자입력</a></li>
                           </ul>
                       </div>
                    </td>
               </tr>
           </tbody>
       </table>
   </div>
')
);
?>