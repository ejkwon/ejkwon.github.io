<?php

// 모듈 전체 제목
$header_name = 'Page Template';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = '';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .mBoard thead img { border:1px solid #b4b4b4; border-radius:5px; }
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
                    <th scope="col">EC LAYOUT</th>
                    <th scope="col">FRAMTSET</th>
                    <th scope="col">POPUP</th>
                    <th scope="col">SUIO LAYOUT</th>
                </tr>
                <tr class="center">
                    <th><img src="../img/img_thumb_layout.gif" alt="" /></th>
                    <th><img src="../img/img_thumb_frame.gif" alt="" /></th>
                    <th><img src="../img/img_thumb_popup.gif" alt="" /></th>
                    <th><img src="../img/img_thumb_uio.gif" alt="" /></th>
                </tr>
            </thead>
            <tfoot>
                <tr class="center">
                    <td>
                        <a href="/smartAdmin/layout/layout.html" class="btnNormal" target="_blank"><span>EC LAYOUT 예시 示例</span></a>
                        <a href="https://wiki.simplexi.com/pages/viewpage.action?pageId=832672654" class="btnNormal" target="_blank"><span>개발가이드</span></a>
                    </td>
                    <td><a href="/suio/template/page.html" class="btnNormal" target="_blank"><span>FRAMTSET 예시 示例</span></a></td>
                    <td><a href="/suio/template/popup.html" onclick="window.open(this.href, \'popup\', \'width=600, height=600\'); return false;" target="_blank" title="새창 열림" class="btnNormal"><span>POPUP 예시 示例<em class="icoLink"></em></span></a></td>
                    <td><a href="/suio/template/template.html" class="btnNormal" target="_blank"><span>SUIO LAYOUT 예시 示例</span></a></td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>EC어드민에서만 사용된다. 1 frame을 설계했으나, frameset을 사용하게 되어 신규페이지는 적용 되지 않는다.</td>
                    <td>
                        - body의 영역지정을 위해 .gMargin 를 필수로 적용한다.<br />
                        - 고정폭으로 제작해야 하는 경우 gMargin gFixed를 적용한다. <a href="/ec/product/b2b/list/list_vendors.html" class="btnLink" target="_blank"><span>[예시]</span></a>
                    </td>
                    <td>body의 id 처리 등 레이아웃 요소만 차이가 있고, 모듈 코딩방식은 동일하다.</td>
                    <td>
                        - 사내 주요 솔루션은 SUIO 레이아웃형으로 제작한다<br />
                        - 레이아웃과 관련된 CSS, IMG는 각 프로젝트 디렉토리에 필요한 부분만 복사/수정한다
                    </td>
                </tr>
                <tr class="zh_CN">
                    <td>仅限在ECadmin使用，虽然已设计iframe，但是由于要使用frameset，因此不适用于新网站。</td>
                    <td>- 为指定body区域，必须适用gMargin。<br />- 需要固定宽度时，须同时适用gMargin gFixed。<a href="/ec/product/b2b/list/list_vendors.html" class="btnLink" target="_blank"><span>[예시]</span></td>
                    <td>只有处理body的id等框架元素时存在差异，其它模块编码方式不变。</td>
                    <td>- 公司内主要网站布局采用SUIO框架形式。<br />- 框架中的CSS、IMG，只选取各网站设计方案文件夹所必要的部分进行复制/修改。</td>
                </tr>
                <tr class="en_US">
                    <td>It is only used in the EC Admin. The 1 frame had been designed but it has been decided to use the frameset instead so it does not apply in a new page. </td>
                    <td>- To designate area of the body, gMargin has to be applied essentially<br />- gMargin gFixed should be applied as to the case when a fixed width needs to be applied.  <a href="/smartAdmin/product/b2b/list/list_vendors.html" class="btnLink" target="_blank"><span>[예시]</span></td>
                    <td>Some elements of the layouts are differentiated such as handling with the ID of body, whereas the module coding is identical.</td>
                    <td>- The main solution in the company should be made in the SUIO layout type.<br />- For CSS and IMG which are related to layouts, only the parts that are needed in the directories of each project should be copied/edited.</td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>