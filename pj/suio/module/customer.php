<?php

// 모듈 전체 제목
$header_name = 'mCustomer';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>서비스소개(introdue.html)의 연락처 정보를 전달할때 주로 사용된다.</li>
        <li>예시화면과 다른 디자인이 필요한경우 type으로 분리해서 제작 가능하다.</li>
        <li>이미지는 배경으로 처리하지 않고 &lt;img src&gt;로 제작되었으며, 이미지사이즈는 가로, 세로 유동적이다. (하단 예시 참고)</li>
        <li>이미지 영역과 컨텐츠 영역은 width 값이 없으며, float처리되어 있다. 화면에서 틀어질 경우 타입을 분리해서 작업하거나 &lt;br /&gt;로 줄바꿈 처리해서 수정가능하다.</li>
    </ol>
    <ol class="zh_CN">
        <li>主要在服务简介(introdue.html)页面提供联系方式等信息时使用。</li>
        <li>可参照示例页面，需要不同设计时，可以通过type分离并制作。</li>
        <li>图片是以&lt;img src&gt;形式制作，不处理为背景，图片横向、纵向大小自动变化。 (参照下方示例)</li>
        <li>图片领域跟contents领域没有width值，已处理为float。如页面有倾斜现象，可通过type分离或使用&lt;br /&gt; 换行并修改。</li>
    </ol>
    <ol class="en_US">
        <li>It is used when delivering the contact information of the service introduction (introduce.html)</li>
        <li>In case different design from the example is needed, divide by type to produce.</li>
        <li>Image is produced by the &lt;img src&gt;, not background, and the size of it is variable. (refer the example below)</li>
        <li>The area of image and contents do not have the value for width, and handled by the float. In case it is fallen out on the screen, the type should be divided or the line has to be changed by the &lt;br/&gt; to edit.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
//$preview_css = '';

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
    <h3>[mCustomer]</h3>
', 'html' => '
    <div class="mCustomer">
        <div class="logo"><img src="//img.echosting.cafe24.com/ec/optional/img_intro_delivery3.jpg" alt="" /></div>
        <ul class="number">
            <li>
                <strong class="title">제목</strong>
                <p>내용</p>
            </li>
            <li>
                <strong class="title">标题</strong>
                <p>内容</p>
            </li>
        </ul>
    </div>
')
);
?>

