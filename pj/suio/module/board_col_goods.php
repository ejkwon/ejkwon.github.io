<?php

// 모듈 전체 제목
$header_name = 'mBoard &gt; gGoods : 상품';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>
            gGoods에 사용되는 상품 이미지에는 width,heigth 속성을 추가한다. ex) &lt;img src="/thumb/32x32.gif" width="32" height="32" alt="" /&gt;
        </li>
    </ol>
    <ol class="zh_CN">
        <li>在gGoods使用的商品图片，需要添加width与heigth的属性。例) &lt;img src="/thumb/32x32.gif" width="32" height="32" alt="" /&gt;</li>
        <li>使用gGoods时外层td不需要加.left</li>
        <li>蓝色说明文字单行用p.etc标签，多行用ul.etc</li>
    </ol>
    <ol class="en_US">
        <li>Add the property of width and height for the product images used in the gGoods. ex) &lt;img src="/thumb/32x32.gif" width="32" height="32" alt="" /&gt;</li>
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
        <table border="1" summary="" class="eChkColor">
            <caption>제목</caption>
            <colgroup>
                <col style="width:300px;" />
                <col style="width:300px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Class</th>
                    <th scope="col">상품정보 <span class="zh_CN">商品信息</span><span class="en_US">product information</span></th>
                    <th scope="col">비고 <span class="zh_CN">备注</span><span class="en_US">note</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>-</td>
                    <td class="center"><span class="frame"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/32x32.gif" width="32" height="32" alt="" /></a></span></td>
                    <td>
                        상품명과 옵션은 없고, 상품이미지만 있을 경우 gGoods로 감싸지 않고, td.center 로 코딩한다.
                        <p class="zh_CN">无商品名及选项，只有商品图片时，无需用gGoods套住，用td.center编写代码。</p>
                        <p class="en_US">In case there is only the product image with no name of or its option, do not cover it with the gGoods, but code with the td.center.</p>
                    </td>
                </tr>
                <tr>
                    <td>gGoods</td>
                    <td>
                        <div class="gGoods">
                            <p><a href="#none">상품명</a></p>
                            <ul class="etc">
                                <li>목록형 설명문구</li>
                                <li>목록형 설명문구</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        상품 미리보기 이미지가 없을 경우 gGoods만 사용한다.
                        <p class="zh_CN">无商品预览图片时，只用gGoods。</p>
                        <p class="en_US">Use the gGoods only if there is no preview of the product. </p>
                    </td>
                </tr>
                <tr>
                    <td>gGoods + gSmall</td>
                    <td>
                        <div class="gGoods gSmall">
                            <span class="frame"><a href="#none"><img src="//img.echosting.cafe24.com/thumb/32x32.gif" width="32" height="32" alt="" /></a></span>
                            <p><a href="#none">상품명</a></p>
                            <p class="etc"><a href="#none">문단형 설명문구</a></p>
                        </div>
                    </td>
                    <td>
                        gSmall : 상품 이미지 사이즈 38x38 일 경우 사용한다.
                        <p class="zh_CN">gSmall : 商品图片size为38x38时使用。</p>
                        <p class="en_US">gSmall : Use it if the size of product image is 38X38.</p>
                    </td>
                </tr>
                <tr>
                    <td>gGoods + gMedium</td>
                    <td>
                        <div class="gGoods gMedium">
                            <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                            <p><a href="#none">상품명</a></p>
                            <ul class="etc">
                                <li>목록형 설명문구</li>
                                <li>목록형 설명문구</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        gMedium : 상품 이미지 사이즈 50x50 일 경우 사용한다.<br />
                        <p class="zh_CN">gMedium :商品图片size为50x50时使用。</p>
                        <p class="en_US">gMedium : Use it if the size of product image is 50X50.</p>
                    </td>
                </tr>
                <tr>
                    <td>gGoods + gMedium set</td>
                    <td>
                        <div class="gGoods gMedium">
                            <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                            <p><a href="#none">상품명</a></p>
                            <ul class="set">
                                <li>
                                    <strong>첫번째 상품명</strong>(1개)
                                    <ul>
                                        <li>옵션 : 옵션값</li>
                                        <li>옵션 : 옵션값</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>두번째 상품명</strong>(1개)
                                    <ul>
                                        <li>옵션 : 옵션값</li>
                                        <li>옵션 : 옵션값</li>
                                    </ul>
                                </li>
                                <li><span class="other">외 2개 포함</span></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        set : 세트상품일 경우 사용한다.<br />
                        <p class="zh_CN">(번역필요)</p>
                        <p class="en_US">(번역필요)</p>
                    </td>
                </tr>
                <tr>
                    <td>gGoods + gMedium + gFunction</td>
                    <td>
                        <div class="gGoods gMedium gFunction">
                            <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                            <p><a href="#none">상품명</a></p>
                            <ul class="etc">
                                <li>목록형 설명문구</li>
                                <li>목록형 설명문구</li>
                            </ul>
                            <a href="#none" class="btnIcon icoView" title="미리보기">미리보기</a>
                        </div>
                    </td>
                    <td>
                        gFunction : 미리보기 기능이 있을 경우 추가한다. gCheck와 같이 사용할 수 있다.
                        <p class="zh_CN">gFunction : 具有预览功能时添加。可与gCheck一并使用。</p>
                        <p class="en_US">gFunction : Add it if a preview function is available. It can be used with the gCheck.</p>
                    </td>
                </tr>
                <tr>
                    <td>gGoods + gMedium + gCheck</td>
                    <td>
                        <div class="gGoods gMedium gCheck">
                            <input type="checkbox" class="fChk" />
                            <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                            <p><a href="#none">상품명</a></p>
                            <ul class="etc">
                                <li>목록형 설명문구</li>
                                <li>목록형 설명문구</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        gCheck : checkbox나 radio가 필요할 경우 추가한다. gFunction과 같이 사용할 수 있다.<br />
                        <p class="zh_CN">gCheck : 根据需求添加checkbox与radio。 可与gFunction一并使用</p>
                        <p class="en_US">gCheck : Add it if there is a need for the checkbox or radio. It can be used with the gFunction.</p>
                    </td>
                </tr>
                <tr>
                    <td>mGoods &gt; gGoods + gMedium + gCheck</td>
                    <td>
                        <div class="mGoods">
                            <div class="gGoods gMedium gCheck">
                                <div class="check"><input type="radio" class="fChk" checked="checked" /></div>
                                <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                                <p><a href="#none">상품명</a></p>
                                <ul class="etc">
                                    <li>목록형 설명문구</li>
                                    <li>목록형 설명문구</li>
                                </ul>
                            </div>
                            <div class="gGoods gMedium gCheck">
                                <div class="check"><input type="radio" class="fChk" /></div>
                                <span class="frame"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" width="44" height="44" alt="" /></span>
                                <p><a href="#none">상품명</a></p>
                                <ul class="etc">
                                    <li>목록형 설명문구</li>
                                    <li>목록형 설명문구</li>
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td>
                        mGoods : 하나의 td안에 여러 상품이 나열 될 경우 mGoods로 감싼다.<br />
                        <p class="zh_CN">mGoods：在一个td里排列多个商品时，用mGoods套住。</p>
                        <p class="en_US">mGoods : Cover it with the mGoods if various products are aligned in a td.</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>