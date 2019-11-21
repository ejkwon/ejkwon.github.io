<?php

// 모듈 전체 제목
$header_name = 'mAttach';

// 모듈 상단 설명 (미사용시 주석처리)
/*$header_desc = '

';*/

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
    <h3>[mAttach + typeFile]</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">파일등록</th>
                    <th scope="row" class="zh_CN">上传文件</th>
                    <th scope="row" class="en_US">Upload File</th>
                    <td>
                        <input type="file" class="fFile" />
                        <ul class="txtInfo">
                            <li>첨부파일 : 1M 이하 / csv, xls, doc, ppt, pdf</li>
                        </ul>
                        <ul class="mAttach typeFile">
                            <li><a href="파일명.xls" class="attached">파일명.xls</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">여러 파일등록</th>
                    <th scope="row" class="zh_CN">上传多个文件</th>
                    <th scope="row" class="en_US">Multiple files</th>
                    <td>
                        <input type="file" class="fFile" />
                        <a href="#none" class="btnCtrl"><span>등록</span></a>
                        <ul class="txtInfo">
                            <li>첨부파일 : 1M 이하 / csv, xls, doc, ppt, pdf</li>
                        </ul>
                        <ul class="mAttach typeFile">
                            <li><a href="파일명.xls" class="attached">파일명.xls</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.doc" class="attached">파일명.doc</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.ppt" class="attached">파일명.ppt</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.pdf" class="attached">파일명.pdf</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.hwp" class="attached">파일명.hwp</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.txt" class="attached">파일명.txt</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.psd" class="attached">파일명.psd</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.zip" class="attached">파일명.zip</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.etc" class="attached">파일명.etc</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.jpg" class="attached">파일명.jpg</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.png" class="attached">파일명.png</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.gif" class="attached">파일명.gif</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명.html" class="attached">파일명.html</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                            <li><a href="파일명" class="attached">위 범위에 해당하지 않는 모든 확장자</a> <button type="button" class="btnIcon icoDel"><span>삭제</span></button></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">이미지 업로드 .gFile</th>
                    <th scope="row" class="zh_CN">上传图片 .gFile</th>
                    <th scope="row" class="en_US">- image uloae – .gFile</th>
                    <td>
                        <span class="figure"><img src="//img.echosting.cafe24.com/thumb/112x30.gif" alt="" style="max-width:112px;" /></span>
                        <span class="gFile">
                            <input type="file" class="file" />
                            <span class="btnNormal"><span><em class="icoPlus"></em> 이미지등록</span></span>
                        </span>
                        <ul class="mList">
                            <li>이미지가 바로 등록되는 UI일 경우 선택가능</li>
                        </ul>
                        <ul class="mList zh_CN">
                            <li>可立即上传图片的UI时选择</li>
                        </ul>
                        <ul class="mList en_US">
                            <li>Available in case the UI allows images to be uploaded immediately.</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),
array(
'desc' => '
    <h3>[mAttach + typeImage]</h3>
    <p>썸네일이미지 사이즈가 32px 이하인 경우, .frame을 사용한다.</p>
    <p class="zh_CN">缩略图size在32px以下时，使用.frame。</p>
    <p class="en_US">The size of nail image is under 32px, the .frame is to be used.</p>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">이미지등록<br />.gHor</th>
                    <th scope="row" class="zh_CN">上传图片<br />.gHor</th>
                    <th scope="row" class="en_US">upload image<br />.gHor</th>
                    <td>
                        <input type="file" class="fFile" />
                        <ul class="txtInfo">
                            <li>등록이미지 : 500px * 500px / 1M 이하 / gif, png, jpg(jpeg)</li>
                        </ul>
                        <div class="mAttach typeImage gHor">
                            <ul>
                                <li>
                                    <span class="figure"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></a></span>
                                    <button type="button" class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">여러 이미지등록<br />가로진열 .gHor</th>
                    <th scope="row" class="zh_CN">上传多个图片<br />横向陈列.gHor</th>
                    <th scope="row" class="en_US">upload multiple image<br />Horizontal array .gHor</th>
                    <td>
                        <input type="file" class="fFile" />
                        <a href="#none" class="btnCtrl"><span>등록</span></a>
                        <ul class="txtInfo">
                            <li>권장이미지 : 500px * 500px / 1M 이하 / gif, png, jpg(jpeg)</li>
                            <li>최대 10개까지 추가 가능합니다.</li>
                        </ul>
                        <div class="mAttach typeImage gHor">
                            <ul>
                                <li>
                                    <span class="figure"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /></a></span>
                                    <button type="button" class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <span class="frame"><a href="#none"><img src="//img.echosting.cafe24.com/design/skin/admin/ko_KR/ico_pay_money.gif" alt="" /></a></span>
                                    <button type="button" class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">여러 이미지등록<br />세로진열 .gVer</th>
                    <th scope="row" class="zh_CN">上传多个图片<br />纵向陈列 .gVer</th>
                    <th scope="row" class="en_US">upload multiple image<br />Vertical array .gVer</th>
                    <td>
                        <input type="file" class="fFile" />
                        <a href="#none" class="btnCtrl"><span>등록</span></a>
                        <ul class="txtInfo">
                            <li>권장이미지 : 500px * 500px / 1M 이하 / gif, png, jpg(jpeg)</li>
                            <li>최대 10개까지 추가 가능합니다.</li>
                        </ul>
                        <div class="mAttach typeImage gVer">
                            <ul>
                                <li>
                                    <span class="figure"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/416x60.gif" alt="" /></a></span>
                                    <button type="button" class="btnIcon icoDel"><span>삭제</span></button>
                                </li>
                                <li>
                                    <span class="figure"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/416x60.gif" alt="" /></a></span>
                                    <button type="button" class="btnIcon icoDel"><span>삭제</span></button>
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
    <h3>[mAttach + typeView]</h3>
    <ul>
        <li>이미지 등록이 1개만 이루어 지는 경우 사용한다. (2개 이상의 이미지 등록 할 경우 <a href="/suio/include/layout.php?MODULE=thumbList" class="txtEm">.mThumbList 참고</a>)</li>
        <li>이미지 등록 후 <img src="//img.echosting.cafe24.com/suio/btn_figure_closeup.gif" alt="" />이 있을 경우 사용한다.</li>
        <li>.zoom의 사이즈가 고정되어야 할 경우 이미지에 width와 height를 필수로 추가한다.</li>
    </ul>
    <ul class="zh_CN">
        <li>只上传一个图片时使用。（上传两个以上图片时请参考 <a href="/suio/include/layout.php?MODULE=thumbList" class="txtEm">.mThumbList</a>）</li>
        <li>上传图片后有 <img src="//img.echosting.cafe24.com/suio/btn_figure_closeup.gif" alt="" /> 时使用。     </li>
        <li>如需固定.zoom的size时，在图片上须添加width与height。</li>
    </ul>
    <ul class="en_US">
        <li>Available in case only one image is uploaded. (For more than 2 image upload, refer the <a href="/suio/include/layout.php?MODULE=thumbList" class="txtEm">.mThumbList</a>)</li>
        <li>Use it when <img src="//img.echosting.cafe24.com/suio/btn_figure_closeup.gif" alt="" /> is seen after uploading the image.</li>
        <li>If the size of .zoom has to be fixed, the width and height are required to be added. </li>
    </ul>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">이미지등록</th>
                    <th scope="row" class="zh_CN">上传图片</th>
                    <th scope="row" class="en_US">upload image</th>
                    <td>
                        <div class="mAttach typeView">
                            <div class="thumb">
                                <span  class="zoom"><img src="//img.echosting.cafe24.com//thumb/256x128.gif" alt="" width="256" height="128" /><a href="#none" class="btnZoom">미리보기</a></span>
                                <div class="button">
                                    <span class="gFile">
                                        <input type="file" class="file" />
                                        <span class="btnNormal"><span><em class="icoPlus"></em> 이미지등록</span></span>
                                    </span>
                                    <span class="gFile">
                                        <input type="file" class="file" />
                                        <span class="btnNormal"><span><em class="icoRefresh"></em> 이미지 변경</span></span>
                                    </span>
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                </div>
                            </div>
                            <div class="info">
                                <ul class="mList">
                                    <li>이미지 해상도: <span class="txtEm">1024 * 512 pixels</span></li>
                                    <li>파일형식: <span class="txtEm">PNG, JPG / 1MB 이하</span></li>
                                    <li>기기에 따라 이미지가 잘려보일 수 있으니, 중요한 문구 및 디자인요소는 중앙에 배치하는 것이 좋습니다.</li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">이미지등록<br />.gHor</th>
                    <th scope="row" class="zh_CN">上传图片<br />.gHor</th>
                    <th scope="row" class="en_US">upload image<br />.gHor</th>
                    <td>
                        <div class="mAttach typeView gHor">
                            <div class="thumb">
                                <span  class="zoom"><img src="//img.echosting.cafe24.com//thumb/256x128.gif" alt="" width="256" height="128" /><a href="#none" class="btnZoom">미리보기</a></span>
                                <div class="button">
                                    <span class="gFile">
                                        <input type="file" class="file" />
                                        <span class="btnNormal"><span><em class="icoPlus"></em> 이미지등록</span></span>
                                    </span>
                                    <span class="gFile">
                                        <input type="file" class="file" />
                                        <span class="btnNormal"><span><em class="icoRefresh"></em> 이미지 변경</span></span>
                                    </span>
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                </div>
                            </div>
                            <div class="info">
                                <ul class="mList">
                                    <li>이미지 해상도: <span class="txtEm">1024 * 512 pixels</span></li>
                                    <li>파일형식: <span class="txtEm">PNG, JPG / 1MB 이하</span></li>
                                    <li>기기에 따라 이미지가 잘려보일 수 있으니, 중요한 문구 및 디자인요소는 중앙에 배치하는 것이 좋습니다.</li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>