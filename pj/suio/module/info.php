<?php

// 모듈 전체 제목
$header_name = 'mInfo';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>주요 안내 화면에 사용하는 모듈로, 관련이미지와 안내문구로 구성 되어있다. </li>
        <li>이미지 사이즈는 286 * 170로 제작되며, /suio/info/ 폴더에서 관리된다.</li>
        <li>전체화면용(typePage) 화면상단 안내용(typeCont) 2가지 type을 사용할 수 있으며, typePage 형에서는 다른 모듈은 사용하지 않는다.</li>
        <li>이미 제작된 다양한 이미지를 참고해서 활용할 수 있다. <a href="/suio/include/layout.php?MODULE=imageList" target="_blank">[ mInfo 관련이미지 미리보기 ]</a></li>
    </ol>
    <ol class="zh_CN">
        <li>用于主要的指南页面模块，由相关image与指南构成。</li>
        <li>Image的size设置为286 * 170，并在/suio/info/ 文件夹中管理。</li>
        <li>可用整个页面用（typePage）与页面上端指南用（typeCont）两种type，在typePage 不可用其他模块。</li>
        <li>mInfo的运用可参考已制作的多样image。<a href="/suio/include/layout.php?MODULE=imageList" target="_blank">[mInfo相关图片预览]</a></li>
    </ol>
    <ol class="en_US">
        <li>It is a module that is used for a main guide page, consisting of the text guide and related images.</li>
        <li>The size of image is 286 * 170, which is managed in the folder of /suio/info/.</li>
        <li>Both the whole page type (typePage) and the upper page guide type (typeCont) can be used. In the typePage, other modules cannot be used.</li>
        <li>The diverse images that are made already can be utilized. <a href="/suio/include/layout.php?MODULE=imageList" target="_blank">[preview of mInfo related image]</a></li>
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
                <li>
                    <p class="info"><span class="date">2017.10.10</span><span class="writer">김은경</span></p>
                    <ul class="title">
                        <li><strong>[mInfo + typeState]</strong> h2 문구 시스템폰트화, btnInfo 버튼 추가 <br /><a href="/ec/product/curation/setting_end.html" class="btnLink" target="_blank">쇼핑 큐레이션 설정</a></li>
                    </ul>
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
    <h3>[mInfo + typePage]</h3>
', 'html' => '
    <div class="mInfo typePage">
        <div class="visual"><img src="//img.echosting.cafe24.com/suio/info/img_delivery.png" alt="" /></div>
        <h2><strong class="txtEm">강조 </strong> 안내 문구 <span class="zh_CN"><strong class="txtEm">强调</strong> 指南</span><span class="en_US"><strong class="txtEm">Highlighted</strong> guide texts</span></h2>
        <div class="detail">
            <p>설명 문구. p를 반복 할 수 있다.</p>
            <p><span class="zh_CN">说明。可反复使用P。</span><span class="en_US">The .p, explanatory phrase, can be repeated.</span></p>
            <div class="content typeBorder">
                <ul class="step">
                    <li><span class="number">1</span> <strong>순서가 있는 목록 (강조) <span class="zh_CN">有序目录（强调）</span><span class="en_US">A list with order (highlight)</span></strong></li>
                    <li><span class="number">2</span> 순서가 있는 목록 <span class="zh_CN">有序目录</span><span class="en_US">A list with order</span></li>
                    <li><span class="number">99</span> 순서가 있는 목록 <span class="zh_CN">有序目录</span><span class="en_US">A list with order </span></li>
                </ul>
            </div>
            <div class="content typeBorder">
                <h3>단락구분 (.content.typeBorder)</h3>
                <p>
                    <span class="txtEm">.content 로 단락을 구분할 수 있다.</span><br />
                    점선라인처리는 .content.typeBorder를 사용한다.
                </p>
                <p><span class="txtLess">- 보조 설명 문구</span></p>
                <h3>단락구분 (.content.typeBorder)</h3>
                <p>일반 설명 문구</p>
            </div>
            <div class="content zh_CN">
                <h3>分段 (.content)</h3>
                <p>
                    <span class="txtEm">可用.content 分段。</span><br />
                    虚线须用 .content.typeBorder处理。
                </p>
                <p><span class="txtLess">- 辅助说明</span></p>
                <h3>分段 (.content.typeBorder)</h3>
                <p>一般说明</p>
            </div>
            <div class="content en_US">
                <h3>paragraph division</h3>
                <p>
                    <span class="txtEm">The .content can divide paragraphs.</span><br />
                    The .content.typeBorder is used for the dotted line.
                </p>
                <p><span class="txtLess">- supplementary guide text</span></p>
                <h3>paragraph division</h3>
                <p>general guide text</p>
            </div>
            <p class="customer">고객센터 0000-0000 (평일 : 00:00 ~ 00:00, 토/일 : 00:00 ~ 00:00)</p>
            <p class="customer zh_CN">客服中心 0000-0000 (工作日 : 00:00 ~ 00:00, 周六/周日 : 00:00 ~ 00:00)</p>
            <p class="customer en_US">Customer service center 0000-0000 (weekdays : 00:00 ~ 00:00, weekends : 00:00 ~ 00:00)</p>
        </div>
        <div class="button">
            <a href="#none" class="btnSubmit"><span>버튼</span></a>
            <a href="#none" class="btnEm"><span>버튼</span></a>
        </div>
    </div>
'),
array(
'desc' => '
    <h3>[mInfo + typeCont]</h3>
', 'html' => '
    <div class="mInfo typeCont">
        <div class="visual"><img src="/img.echosting.cafe24.com/suio/info/img_check_note.png" alt="" /></div>
        <h2><strong class="txtEm">강조 </strong> 안내 문구 <span class="zh_CN"><strong class="txtEm">强调</strong> 指南</span><span class="en_US"><strong class="txtEm">Highlighted</strong> guide texts</span></h2>
        <div class="detail">
            <p>설명 문구. p를 반복할 수 있다.</p>
            <p class="zh_CN">说明。 可反复使用P。</p>
            <p class="en_US">The .p, explanatory phrase, can be repeated.</p>
        </div>
        <div class="detail">
            <ul class="normal">
                <li>순서가 없는 목록</li>
                <li><span class="zh_CN">无序目录</span><span class="en_US">A list without order</span></li>
            </ul>
        </div>
    </div>
'),
array(
'desc' => '
    <h3>[mInfo + typeState]</h3>
    <ol>
        <li>visual의 메타포이미지는 재사용성을 위해 "img_calender.확장자"와 같이 이미지 그대로를 파일명으로 한다.</li>
        <li>h2 문구는 과거엔 이미지를 사용하였으나, 확장성을 넓히기 위해서 시스템폰트로 정의한다.</li>
    </ol>
    <ol>
        <li>为了反复使用visual里的图片 ，命名文件名时用图片自身的意义，如"img_calender.扩展名"。</li>
        <li>(해석필요)</li>
    </ol>
', 'html' => '
    <div class="mInfo typeState">
        <div class="visual"><img src="//img.echosting.cafe24.com/suio/state/img_calender.gif" alt="" /></div>
        <h2>부가서비스 이용기간이 <br /><span class="txtEm">만료되었습니다.</span></h2>
        <div class="mButton gCenter"><a href="#none" class="btnInfo">서비스 연장</a></div>
        <div class="detail">
            <div class="content">
                <p>설명 문구. p를 반복 할 수 있다.</p>
                <p><span class="txtEm">설명 문구</span>. p를 반복 할 수 있다.</p>
            </div>
            <div class="content">
                <p>br 태그의 <br />줄바꿈</p>
            </div>
            <div class="content">
                <ul>
                    <li>- 순서가 없는 목록</li>
                    <li>- <span class="txtEm">순서가 없는 목록</span></li>
                </ul>
            </div>
            <div class="content">
                <ol>
                    <li>1. 순서가 있는 목록</li>
                    <li>2. <span class="txtEm">순서가 있는 목록</span></li>
                </ol>
            </div>
        </div>
    </div>
')
);
?>

