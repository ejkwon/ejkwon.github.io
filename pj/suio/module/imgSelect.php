<?php

// 모듈 전체 제목
$header_name = 'mImgSelect';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>버튼의 위치에 따라 버튼가로형(.gHor) 버튼세로형(.gVer)로 구분한다. </li>
        <li>선택되는 이미지 사이즈 대응은 type을 지정하고 각 type별 CSS는 프로젝별 CSS에서 관리하며, 이미지태그 &lt;img&gt; 앞 뒤에 space tag인 &amp;nbsp;를 꼭 추가해야 중앙정렬이 가능하다.</li>
        <li>버튼가로형의 경우 <a href="/suio/include/layout.php?MODULE=btn" class="txtEm">[아이콘형 버튼]</a>이나 <a href="/suio/include/layout.php?MODULE=btn" class="txtEm">[기본 시스템 버튼]</a>을 사용할 수 있다.</li>
        <li>이미지의 프레임(보더)을 기준으로 프레임이 있는 경우에만 해당모듈을 사용한다. 프레임이 없는 경우, <a href="/suio/include/layout.php?MODULE=form" class="txtEm">[.mForm.typeHor.gTop]</a> 을 사용한다.</li>
        <li>텍스트와 같이 쓰일경우, 텍스트가 2줄 이상이면 .type$NAME .text에 min-height 속성을 추가한다.</li>
        <li>.border안의 이미지 중앙정렬을 위해 (.border의 height값 - 7px) 한 값을 .border에 line-height로 지정해준다.</li>
    </ol>
    <ol class="zh_CN">
        <li>根据按钮的位置分为横向排列按钮(.gHor)与纵向排列按钮(.gVer)。</li>
        <li>被选图片的size用type指定，每个type的CSS在各project的CSS中管理，须在图片标签&lt;img&gt;前后添加space tag-&amp;nbsp;才能居中。</li>
        <li>横向排列按钮可使用 <a href="/suio/include/layout.php?MODULE=btn" class="txtEm">[icon型按钮]</a> 或 <a href="/suio/include/layout.php?MODULE=btn" class="txtEm">[基本系统按钮]</a>。</li>
        <li>以image frame（.border）为基准，仅在有frame时使用该模块。没有frame时使用 <a href="/suio/include/layout.php?MODULE=form" class="txtEm">[.mForm.typeHor.gTop]</a>。</li>
        <li>在与text一同被使用时，若text多于2行，则在.type$NAME .text添加min-height属性。</li>
        <li>为.border里的图片居中，在.border中将(.border的 height值 - 7px) 的一个值指定为line-height。</li>
    </ol>
    <ol class="en_US">
        <li>Based on the location of button, distinguish the horizontal button(.gHor) and the vertical button(.gVer).</li>
        <li>A type should be selected to respond to the chosen image, and each type of the CSS should be managed in CSS by projects. For the central alignment, on the other hand, the &nbsp; should be added before and after the image tag &lt;img&gt;.</li>
        <li>In case of the horizontal button, <a href="/suio/include/layout.php?MODULE=btn" class="txtEm">[icon type button]</a> or <a href="/suio/include/layout.php?MODULE=btn" class="txtEm">[basic system button]</a> can be used. </li>
        <li>Use the module if there is a frame based on the image frame(boarder), whereas in case there is no frame, use <a href="/suio/include/layout.php?MODULE=form" class="txtEm">[.mForm.typeHor.gTop]</a>.</li>
        <li>When it is used with texts and the texts are more than 2 lines, add the min-height in the .type$NAME.text.</li>
        <li>For the central alignment of the image in the .border, assign the value (the height of .border - 7px) as a line-height in the .border.</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
      .addForm { display:block !important; }

      /* 이미지꾸미기 */
        .mImgSelect.typeIconThumb.gDefault li { width:110px; }
        .mImgSelect.typeIconThumb .text { min-height:36px; }
        .mImgSelect.typeIconThumb .border { width:110px; height:110px; line-height:103px; }
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
                <col style="width:120px;" />
                <col style="width:100px;" />
                <col style="width:150px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <th scope="col">한국어</th>
                <th scope="col" class="zh_CN">中文</th>
                <th scope="col" class="en_US">English</th>
                <th scope="col">Class</th>
                <th scope="col">설명 说明</th>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">기본형</th>
                    <th class="zh_CN">基本样式</th>
                    <th class="en_US">The general type</th>
                    <th>type$NAME + gDefault</th>
                    <td>
                        <ul class="mImgSelect typeIconThumb gDefault">
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    <a href="#none" class="btnNormal"><span><em class="icoRefresh"></em> 변경</span></a>
                                </div>
                                <select class="fSelect full gSingle">
                                    <option>상단</option>
                                    <option>중간</option>
                                    <option>하단</option>
                                </select>
                            </li>
                            <li>
                                <label>
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                    <input type="checkbox" class="fChk" />
                                </label>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                </div>
                            </li>
                            <li>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                </div>
                                <label>
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                    <input type="checkbox" class="fChk" />
                                </label>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">기본형 (텍스트)</th>
                    <th class="zh_CN">基本样式(Text)</th>
                    <th class="en_US">The general type (text)</th>
                    <th>type$NAME + gDefault</th>
                    <td>
                        <ul class="mImgSelect typeIconThumb gDefault">
                            <li>
                                <label>
                                    <strong class="text left"><input type="radio" class="fChk" />왼쪽 정렬 왼쪽 정렬</strong>
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    <a href="#none" class="btnNormal"><span><em class="icoRefresh"></em> 변경</span></a>
                                </div>
                                <select class="fSelect full gSingle">
                                    <option>상단</option>
                                    <option>중간</option>
                                    <option>하단</option>
                                </select>
                            </li>
                            <li>
                                <label>
                                    <strong class="text center"><input type="radio" class="fChk" />중앙정렬</strong>
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    <a href="#none" class="btnNormal"><span><em class="icoRefresh"></em> 변경</span></a>
                                </div>
                                <select class="fSelect full gSingle">
                                    <option>상단</option>
                                    <option>중간</option>
                                    <option>하단</option>
                                </select>
                            </li>
                            <li>
                                <label>
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                    <strong class="text right"><input type="checkbox" class="fChk" />오른쪽정렬</strong>
                                </label>
                            </li>
                        </ul>
                        <ul class="mList">
                            <li>텍스트가 2줄 이상이면 .type$NAME .text에 {min-height} 를 지정한다.<br />텍스트 정렬에 따라 text에 left, center, right 클래스를 추가한다.</li>
                            <li>Text有2行或2行以上， 给.type$NAME .text 定 {min-height}。<br />根据Text的排列， text上加类名left, center, right。</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">풀그리드형</th>
                    <th class="zh_CN">Full grid型</th>
                    <th class="en_US">Full grid type</th>
                    <th>type$NAME + gFull</th>
                    <td>
                        <ul class="mImgSelect typeIconThumb gFull">
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">버튼 가로형</th>
                    <th class="zh_CN">按钮<br />横向位置型</th>
                    <th class="en_US">Horizontal button</th>
                    <th>type$NAME + gHor</th>
                    <td>
                        <ul class="mImgSelect typeIconThumb gHor">
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <button class="btnIcon icoDel" type="button"><span>삭제</span></button>
                                </div>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <button class="btnIcon icoDel" type="button"><span>삭제</span></button>
                                </div>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    <span class="gSingle"><a href="#none" class="btnNormal"><span><em class="icoRefresh"></em> 변경</span></a></span>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">풀그리드<br />버튼 가로형</th>
                    <th class="zh_CN">Full grid 按钮横向位置型</th>
                    <th class="en_US">Full grid button in vertical</th>
                    <th>type$NAME + gFull + gHor</th>
                    <td>
                        <ul class="mImgSelect typeIconThumb gFull gHor">
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                </div>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    <span class="gSingle"><a href="#none" class="btnNormal"><span><em class="icoRefresh"></em> 변경</span></a></span>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">버튼 세로형</th>
                    <th class="zh_CN">按钮<br />纵向位置型</th>
                    <th class="en_US">Vertical button</th>
                    <th>type$NAME + gVer</th>
                    <td>
                        <ul class="mImgSelect typeIconThumb gVer">
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                </div>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                </div>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" class="fChk" />
                                    <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                </label>
                                <div class="button">
                                    <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                    <a href="#none" class="btnNormal"><span><em class="icoRefresh"></em> 변경</span></a>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>[ mImgSelect ] mForm내 활용</h3>
    <ol>
        <li><a href="/suio/include/layout.php?MODULE=form" class="txtEm">[mForm]</a>의 가이드를 따르며, addForm안에 mImgSelect를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>根据<a href="/suio/include/layout.php?MODULE=form" class="txtEm">[mForm]</a>的指南，在addForm添加mImgSelect。</li>
    </ol>
    <ol class="en_US">
        <li>Follow the guide from the <a href="/suio/include/layout.php?MODULE=form" class="txtEm">[mForm]</a> and add the mlmgSelect in the addForm</li>
    </ol>
', 'html' => '
    <div class="mBoard gLarge">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">div.addForm &gt; type$NAME + gDefault</th>
                    <td>
                        <div class="mForm">
                            <label class="gLabel"><input type="radio" class="fChk" checked="checked" /> 기본 이미지</label>
                            <label class="gLabel"><input type="radio" class="fChk" /> 직접 등록</label>
                            <div class="addForm">
                                <ul class="mImgSelect typeIconThumb gDefault">
                                    <li>
                                        <label>
                                            <input type="checkbox" class="fChk" />
                                            <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                        </label>
                                        <div class="button">
                                            <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" class="fChk" />
                                            <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                        </label>
                                        <div class="button">
                                            <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" class="fChk" />
                                            <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                        </label>
                                        <div class="button">
                                            <a href="#none" class="btnNormal"><span><em class="icoDel"></em> 삭제</span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">div.addForm &gt; type$NAME + gHor</th>
                    <td>
                        <div class="mForm">
                            <label class="gLabel"><input type="radio" class="fChk" checked="checked" /> 기본 이미지</label>
                            <label class="gLabel"><input type="radio" class="fChk" /> 직접 등록</label>
                            <div class="addForm">
                                <ul class="mImgSelect typeIconThumb gHor">
                                    <li>
                                        <label>
                                            <input type="checkbox" class="fChk" />
                                            <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                        </label>
                                        <div class="button">
                                            <button class="btnIcon icoDel" type="button"><span>삭제</span></button>
                                        </div>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" class="fChk" />
                                            <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                        </label>
                                        <div class="button">
                                            <button class="btnIcon icoDel" type="button"><span>삭제</span></button>
                                        </div>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" class="fChk" />
                                            <span class="border">&nbsp;<img src="//img.echosting.cafe24.com/skin/admin_ko_KR/product/ico_thumb_recommend2.png" alt="" />&nbsp;</span>
                                        </label>
                                        <div class="button">
                                            <button class="btnIcon icoDel" type="button"><span>삭제</span></button>
                                        </div>
                                    </li>
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