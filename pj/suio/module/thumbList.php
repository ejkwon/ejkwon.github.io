<?php

// 모듈 전체 제목
$header_name = 'mThumbList';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>정렬방법에 따라 가로형과 세로형으로 구분된다.</li>
        <li>기본구조는 아래와 같으며 이미지 사이즈 등 다른 상황이 발생할 경우 class를 추가해 적용한다.</li>
        <li>개발팀 요청으로 파일업로드 버튼이 <strong>플래시로 제작 될 경우</strong>으로 text버튼을 사용하지않고 아래와같이 <strong class="txtWarn">이미지로 전달한다.</strong></li>
        <li>가로형(typeHor)에서 상품명이 필요한 경우, 이미지사이즈에 따른 grid 적용이 필요하다. width.css에 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>根据排列方法，可区分为横向型与纵向型。</li>
        <li>基本结构如下所示，若发生图片size等不同的情况，则添加class适用。</li>
        <li>如开发组要求，以flash制作上传文件按钮时不可使用text按钮，则用以下<strong class="txtWarn">图片方式转达。</strong></li>
        <li>在横向型（typeHor）中需要商品名时，应按照图片尺寸进行grid适用。在width.css中添加。</li>
    </ol>
    <ol class="en_US">
        <li>The array distinguishes the horizontal type and the vertical type.</li>
        <li>The basic structure is as below. Then classes can be added in case different occasion occurs such as image sizes.</li>
        <li>If the button for uploading files are produced as flash,, text buttons should not be used but instead an image is to be delivered. </li>
        <li>If product name is needed in the horizontal type(typeHor), a grid is needed to be applied by the image sizes. Add in the width.css.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .mForm .addForm { display:block; }

        /* eImgSort */
        .mThumbList.typeHor.addImage li { margin:11px 23px 12px 0; }
        .addImage .highlight { width:110px; height:120px; background:url("/img/ec/product/sfix_drag.png") -20px 0; }
        .addImage .highlight:before { top:0; left:-16px; width:20px; height:97px; }
        .addImage .ui-sortable-helper:before { margin:-20px 0 0; }

        .mThumbList.typeVer li { height:62px; background:none; }
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
                    <p class="info"><span class="date">2016.06.22</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[mThumbList + eImgSort]</strong> 드래그앤드롭 <a href="/smartAdmin/product/registration/product/register.html" class="btnLink" target="_blank">상품등록</a></p>
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
    <h3>[mThumbList + typeHor]</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">가로형</th>
                    <th scope="row"><span class="zh_CN">横向型</span><span class="en_US">horizontal type</span></th>
                    <td>
                        <a href="#none"><img src="//img.echosting.cafe24.com/suio/btn_image_import.gif" alt="이미지 불러오기" /></a>
                        <a href="#none"><img src="//img.echosting.cafe24.com/suio/btn_image_register.gif" alt="등록" /></a>
                        <div class="mThumbList typeHor">
                            <ul>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">가로형 + 상품진열</th>
                    <th scope="row"><span class="zh_CN">横向型 + 商品陈列</span><span class="en_US">Product array</span></th>
                    <td>
                        <div class="mThumbList typeHor w110">
                            <ul>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></span>
                                    <span class="title"><a href="#none" class="txtLinK">상품명 링크O</a></span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></span>
                                    <span class="title">상품명 링크X</span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></span>
                                    <span class="title"><a href="#none" class="txtLinK">상품명 링크O <br /> + 버튼 혼합형</a></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></span>
                                    <span class="title">상품명 링크X <br /> + 버튼 혼합형</span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 버튼형</span></a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">가로형 + 드래그앤드롭</th>
                    <th scope="row"><span class="zh_CN">横向型+drag and drop</span><span class="en_US">drag & drop</span></th>
                    <td>
                        <!-- 테스트용 : 개발시 삭제 -->
                        <script type="text/javascript" src="/js/jquery-ui.min.js" charset="utf-8"></script>
                        <script type="text/javascript">
                            // 드래그앤드롭
                            $(function() {
                                $( ".eImgSort" ).sortable({
                                    placeholder: "highlight"
                                });
                            });
                        </script>
                        <!-- //테스트용 : 개발시 삭제 -->
                        <div class="mThumbList typeHor addImage">
                            <ul class="eImgSort">
                                <li>
                                    <span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span>
                                </li>
                                <li>
                                    <span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span>
                                </li>
                                <li>
                                    <span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span>
                                </li>
                                <li>
                                    <span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span>
                                </li>
                                <li>
                                    <span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span>
                                </li>
                            </ul>
                        </div>
                        <ul class="mList">
                            <li>JS 컨트롤 : ul 에 <strong>.eImgSort</strong> 를 추가하면, 드래그앤드롭이 동작한다.</li>
                            <li>배경이나 썸네일 사이즈 등의 CSS가 추가되어야할 경우, 해당요소에서만 사용하는 class에 CSS를 추가한다.</li>
                        </ul>
                        <ul class="mList">
                            <li>JS control：将<strong>.eImgSort</strong>添加于ul，则会启动drag and drop。</li>
                            <li>需要添加背景或缩略图大小等因素的CSS时，在该因素专用的class中添加CSS。</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),
array(
'desc' => '
    <h3>[mThumbList + typeVer]</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">세로형</th>
                    <th scope="row"><span class="zh_CN">纵向型</span><span class="en_US">vertical type</span></th>
                    <td>
                        <a href="#none"><img src="//img.echosting.cafe24.com/suio/btn_image_import.gif" alt="이미지 불러오기" /></a>
                        <a href="#none"><img src="//img.echosting.cafe24.com/suio/btn_image_register.gif" alt="등록" /></a>
                        <div class="mThumbList typeVer">
                            <ul>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/416x60.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/416x60.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/416x60.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/416x60.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">세로형 + 드래그앤드롭</th>
                    <th scope="row"><span class="zh_CN">纵向型+drag and drop</span><span class="en_US">drag & drop</span></th>
                    <td>
                        <div class="mThumbList typeVer">
                            <ul class="eImgSort">
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/416x60.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/416x60.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/416x60.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="figure"><img src="//img.echosting.cafe24.com/thumb/416x60.gif" alt="" /></span>
                                    <span class="button">
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    </span>
                                </li>
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
    <h3>[mThumbList + typeBoard]</h3>
    <ol>
        <li>mCtrl과 조합해서 사용한다.</li>
        <li>grid를 활용해 이미지 사이즈나 노출 갯수를 설정할 수 있다. (body에 gFixed를 상속 받는 경우에만 해당)</li>
        <li>썸네일 이미지는 가로/세로비율에 맞춰 큰폭을 기준으로 리사이징되며 등록된 상품이미지가 작을 경우 여백이 생기며 가운데정렬. (단, IE7에서는 위로 이미지가 붙는 차이가 있다)</li>
    </ol>
    <ol class="zh_CN">
        <li>与mCtrl组合使用。</li>
        <li>活用grid，可设定图片size或显示数量。（仅限于将gFixed继承于body的情况。）</li>
        <li>缩略图根据纵向/横向比例，以较大一方为准重新调整size。若上传的商品图片size过小时，会产生居中而四周空白的情况。（但在IE7浏览器中会有图片向上对齐的情况。）</li>
    </ol>
    <ol class="en_US">
        <li>It is combined with the mCtrl to be used.</li>
        <li>Using grid, the image size and the number of product that will be shown can be set up. (only when gFixed is inherited to the body)</li>
        <li>Thumbnail image is resized followed by the rate of horizontal and vertical lines, and if the uploaded product image is small, space may be made and arrayed in the middle. (However, in the IE7, the images are put on the upper side.)</li>
    </ol>
', 'html' => '

    <div class="mThumbList typeBoard grid5">
        <ul>
            <li>
                <span class="check"><input type="checkbox" class="fChk" /></span>
                <span class="thumb"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/174x174.gif" alt="" /></a></span>
                <span class="name">SS 59 뉴발란스</span>
                <strong class="price">B2B공급가 : 10,000원</strong>
            </li>
            <li>
                <span class="check"><input type="checkbox" class="fChk" /></span>
                <span class="thumb"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/174x174.gif" alt="" /></a></span>
                <span class="name">SS 59 뉴발란스 new balance KX629ABY</span>
                <strong class="price">B2B공급가 : 10,000원</strong>
            </li>
            <li>
                <span class="check"><input type="checkbox" class="fChk" /></span>
                <span class="thumb"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/174x174.gif" alt="" /></a></span>
                <span class="name">SS 59 뉴발란스 new balance SS 59 뉴발란스 SS 59 뉴발란스 KX629ABY new balance KX629ABY</span>
                <strong class="price">B2B공급가 : 10,000원</strong>
            </li>
            <li>
                <span class="check"><input type="checkbox" class="fChk" /></span>
                <span class="thumb"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/174x174.gif" alt="" /></a></span>
                <span class="name">SS 59 뉴발란스 new balance KX629ABY</span>
                <strong class="price">B2B공급가 : 10,000원</strong>
            </li>
            <li>
                <span class="check"><input type="checkbox" class="fChk" /></span>
                <span class="thumb"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/174x174.gif" alt="" /></a></span>
                <span class="name">SS 59 뉴발란스</span>
                <strong class="price">B2B공급가 : 10,000원</strong>
            </li>
            <li>
                <span class="check"><input type="checkbox" class="fChk" /></span>
                <span class="thumb"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/174x174.gif" alt="" /></a></span>
                <span class="name">SS 59 뉴발란스 new balance KX629ABY</span>
                <strong class="price">B2B공급가 : 10,000원</strong>
            </li>
            <li>
                <span class="check"><input type="checkbox" class="fChk" /></span>
                <span class="thumb"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/174x174.gif" alt="" /></a></span>
                <span class="name">SS 59 뉴발란스 new balance KX629ABY new balance KX629ABY</span>
                <strong class="price">B2B공급가 : 10,000원</strong>
            </li>
            <li>
                <span class="check"><input type="checkbox" class="fChk" /></span>
                <span class="thumb"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/174x174.gif" alt="" /></a></span>
                <span class="name">SS 59 뉴발란스</span>
                <strong class="price">B2B공급가 : 10,000원</strong>
            </li>
            <li>
                <span class="check"><input type="checkbox" class="fChk" /></span>
                <span class="thumb"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/174x174.gif" alt="" /></a></span>
                <span class="name">SS 59 뉴발란스 new balance KX629ABY</span>
                <strong class="price">B2B공급가 : 10,000원</strong>
            </li>
            <li>
                <span class="check"><input type="checkbox" class="fChk" /></span>
                <span class="thumb"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/174x174.gif" alt="" /></a></span>
                <span class="name">SS 59 뉴발란스 new balance KX629ABY new balance KX629ABY</span>
                <strong class="price">B2B공급가 : 10,000원</strong>
            </li>
        </ul>
    </div>
')
);
?>