<?php

// 모듈 전체 제목
$header_name = 'mOpen';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>마우스오버(eOpenOver)형과 클릭(eOpenClick)형을 사용할 수 있다.</li>
        <li>활성화 되는 영역(.open)의 사이즈는 inline style으로 수정할 수 있다.</li>
        <li>.wrap에는 주로 선택할 수 있는 목록이 들어가며 기본값은 &lt;ul class="default"&gt;이다. 디자인에 class를 활용하여 변경이 가능하다.</li>
        <li>.wrap에 inline style로 height 값을 추가하면 스크롤바가 노출된다.</li>
        <li>
            IE7에서 .open 활성화시 해당레이어가 다른 .mOpen을 감싸는 엘리먼트에 가려지는 버그가 있어 .mOpen를 감싸는 부모의 class에 find Attribute를 추가한다.
            <ol>
                <li>부모 class는 relative 속성을 가지고 있어야 한다.</li>
                <li>예시) &lt;div class="mOpen" find="부모class"&gt;</li>
            </ol>
        </li>
    </ol>
    <ol class="zh_CN">
        <li>可使用eOpenOver型与eOpenClick型。</li>
        <li>可被激活区域（.open)的size可用inline style修改。</li>
        <li>wrap 里主要添加可选择目录，基本值为&lt;ul class="default"&gt;。在设计中运用class即可修改内容。</li>
        <li>在wrap，用inline style添加height值将会显示滚动条。</li>
        <li>
            在IE7激活.open时，因该框架的bug被套住其他 .mOpen的element 元素遮挡，所以，在套住.mOpen父母元素的class，须添加find Attribute。
            <ol>
                <li>父母元素的class须有ralative属性。</li>
                <li>示例）&lt;div class="mOpen" find="父母元素的class"&gt;</li>
            </ol>
        </li>
    </ol>
    <ol class="en_US">
        <li>The mouseover(eOpenOver) type and the click(eOpenClick) type can be used.</li>
        <li>The size of the activated area(.open) can be modified with the inline style.</li>
        <li>the .wrap, mainly the list that can be selected is inserted, and its default value is &lt;ul class="default"&gt;. Using the class in design, it can be changed. </li>
        <li>A scroll bar will be exposed if the height value is added in the inline style in the .wrap.</li>
        <li>(번역필요)
            <ol>
                <li>The parent class should have a relative property.</li>
                <li>Example) &lt;div class="mOpen" find="parent class"&gt;</li>
            </ol>
        </li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        /* .mOpen .open { display:block; } */
        #uioContent article .samplePreview .mBoard { margin:0; }
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
    <h3>[mOpen] eOpenOver</h3>
    <ol>
        <li>예시) 상품이미지에 마우스오버시 mOpen 활성화</li>
    </ol>
    <ol class="zh_CN">
        <li>示例）鼠标移入商品图片时，mOpen将被激活。</li>
    </ol>
    <ol class="en_US">
        <li>Example) Activating the mOpen when mouseover on the product image.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <thead>
                <tr>
                    <th scope="col">Default</th>
                    <th scope="col">Scroll</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="gGoods gMedium">
                            <div class="mOpen">
                                <span class="frame eOpenOver" find="gGoods"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" alt="" /></span>
                                <div class="open" style="top:50%; left:50%; width:120px;">
                                    <div class="wrap">
                                        <!-- 참고 : 디자인에 따라 변경가능 -->
                                        <ul class="default">
                                            <li><a href="#none">관리자 상품관리</a></li>
                                            <li><a href="#none">프론트 진열보기</a></li>
                                        </ul><!-- //참고 -->
                                    </div>
                                </div>
                            </div>
                            <p><a href="#none">상품명</a></p>
                            <ul class="etc">
                                <li>목록형 설명문구</li>
                                <li>목록형 설명문구</li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="gGoods gMedium">
                            <div class="mOpen">
                                <span class="frame eOpenOver" find="gGoods"><img src="//img.echosting.cafe24.com/thumb/44x44.gif" alt="" /></span>
                                <div class="open" style="top:50%; left:50%; width:220px;">
                                    <div class="wrap" style="height:100px;">
                                        <ul class="default">
                                            <li><a href="#none">생성한 양식1</a></li>
                                            <li><a href="#none">생성한 양식2</a></li>
                                            <li><a href="#none">생성한 양식3</a></li>
                                            <li><a href="#none">생성한 양식4</a></li>
                                            <li><a href="#none">생성한 양식5</a></li>
                                            <li><a href="#none">생성한 양식6</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer">
                                        <a href="#none" class="btnNormal"><span>저장</span></a>
                                        <a href="#none" class="btnNormal"><span>취소</span></a>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#none">상품명</a></p>
                            <ul class="etc">
                                <li>목록형 설명문구</li>
                                <li>목록형 설명문구</li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
'), array(
'desc' => '
    <h3>[mCtrl + gSetting &gt; mOpen] eOpenClick</h3>
    <ol>
        <li>예시1) 설정버튼(톱니바퀴 아이콘)을 클릭했을 때 mOpen이 활성화 됨</li>
        <li>예시2) btnNormal을 클릭했을때 mOpen이 활성화 된다. 상황에 따라 ul.default에 style로 width를 지정하거나, 다른 클래스를 추가해 아이콘 등을 추가할 수 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>示例1）点击设定按钮（齿轮icon）时，mOpen将被激活。</li>
        <li>示例2）点击btnNormal时激活mOpen，根据情况可在 ul.default 设置style来指定width，或添加其他class名来插入icon。</li>
    </ol>
    <ol class="en_US">
        <li>Example) Activating the mOpen when click on the setting button (cogwheel icon)</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mCtrl typeHeader setting">
        <div class="gRight">
            <div class="mOpen">
                <a href="#ordOpen1" class="btnNormal eOpenClick"><span>버튼형 <em class="icoLayer"></em></span></a>
                <div id="ordOpen1" class="open" style="width:70px;">
                    <div class="wrap">
                        <ul class="default">
                            <li><a href="#none">목록</a></li>
                            <li><a href="#none">목록</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="gSetting">
            <div class="mOpen">
                <a href="#listSubject" class="btnSetting eOpenClick"><span>설정</span></a>
                <div id="listSubject" class="open">
                    <strong>목록표시</strong>
                    <div class="wrap">
                        <ul class="default">
                            <li><label><input type="checkbox" class="fChk" /> No</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품구분</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품코드</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품명</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품명(상점별)</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 쇼핑몰 화면</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 판매가</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 할인가</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 모바일할인가</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 영문상품명</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 공급자 상품명</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 상품분류</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 자체 상품코드</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 진열상태</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 판매상태</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 제조사</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 공급사</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 브랜드</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 트랜드</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 공급가</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 원산지</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 모델명</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품상태</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품 검색태그</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 품절사용</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 품목수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 품절품목수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 관심상품수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 무이자할부 상품</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 조회수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 배송수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 결제수</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 상품구매율(%)</label></li>
                            <li class="line"><label><input type="checkbox" class="fChk" /> 상품등록일</label></li>
                            <li><label><input type="checkbox" class="fChk" /> 메모</label></li>
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#none" class="btnCtrl"><span>적용</span></a>
                        <a href="#none" class="btnNormal eClose"><span>닫기</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mBoard">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <colgroup>
                <col style="width:33%;" />
                <col style="width:33%;" />
                <col style="width:33%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                    <th scope="col">제목</th>
                </tr>
            </thead>
            <tbody class="center">
                <tr>
                    <td>내용</td>
                    <td>내용</td>
                    <td>내용</td>
                </tr>
            </tbody>
        </table>
    </div>
')
);
?>