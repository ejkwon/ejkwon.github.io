<?php

// 모듈 전체 제목
$header_name = 'totalArea';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>합계정보 표시에 사용한다.</li>
        <li><strong class="txtWarn">EC몰 어드민 해외 부가서비스에 사용하기위해 제작되었으며, 이후 다른타입으로 변경/추가될수 있음</strong></li>
        <li>기존에 사용되었던 mTotalArea는 순차적으로 없앨 계획이다.</li>
    </ol>
    <ol class="zh_CN">
        <li>显示合计信息时使用。</li>
        <li><strong class="txtWarn">为了使用在Ecmall Admin 海外附加服务项目中而制作， 以后可更改/添加为别的种类。</strong></li>
        <li>번역필요</li>
    </ol>
    <ol class="en_US">
        <li>It is used in the sign of aggregate information.</li>
        <li><strong class="txtWarn">It is made to be used for the EC mall Admins’ optional service globally, which can be changed/added to a different type later.</strong></li>
        <li>번역필요</li>
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
                    <p class="info"><span class="date">2017-07-12</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[mTotalArea theme1]</strong> theme1 추가 <a href="/ec/bm/global/translation/apply.html" class="btnLink" target="_blank">해외번역 서비스신청</a></p>
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
    <h3>[ mTotalArea + theme1 ]</h3>
', 'html' => '
    <div class="mTotalArea theme1">
        <table border="1">
            <caption>총 금액 합계</caption>
            <colgroup>
                <col style="width:25%;" />
                <col style="width:25%;" />
                <col style="width:25%;" />
                <col style="width:25%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">신청 상품 개수</th>
                    <th scope="col"><span class="icoTotal a"></span> 신청 상품 합계</th>
                    <th scope="col"><span class="icoTotal b"></span> 기존 사용건 연장합계</th>
                    <th scope="col"><span class="icoTotal c"></span> <span class="txtEm">총 금액</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><div class="item">15개</div></td>
                    <td><div class="item">12,258,000원</div></td>
                    <td><div class="item add">120,000원</div></td>
                    <td><div class="item total">12,378,000원</div></td>
                </tr>
            </tbody>
        </table>
        <div class="desc">
             <p><span class="icoTotal b">기존 사용건 연장합계</span>는 기존에 사용중인 서비스가 있을 경우 만료일을 맞추기 위한 연장금액이며, <span class="icoTotal c">총 금액</span>는 신청금액과 기존 연장금액을 합친 총 결제금액입니다.</p>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[ mTotalArea ]</h3>
', 'html' => '
    <div class="mTotalArea">
        <div class="gLeft">
            <div class="item">
                <dl>
                    <dt>신청상품 갯수</dt>
                    <dd>0개</dd>
                </dl>
            </div>
        </div>
        <div class="gRight">
            <div class="item a">
                <dl>
                    <dt>신청 상품합계</dt>
                    <dd>500,000원</dd>
                </dl>
            </div>
            <div class="item b">
                <dl>
                    <dt>기존 사용건 연장합계</dt>
                    <dd>500,000원</dd>
                </dl>
            </div>
            <div class="item c">
                <dl>
                    <dt>총 금액</dt>
                    <dd>550,500,000원</dd>
                </dl>
            </div>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[ mTotalArea + Text ]</h3>
', 'html' => '
    <div class="mTotalArea">
        <div class="gLeft">
            <div class="item">
                <dl>
                    <dt>신청상품 갯수</dt>
                    <dd>0개</dd>
                </dl>
            </div>
        </div>
        <div class="gRight">
            <div class="item a">
                <dl>
                    <dt>신청 상품합계</dt>
                    <dd>500,000원</dd>
                </dl>
            </div>
            <div class="item b">
                <dl>
                    <dt>기존 사용건 연장합계</dt>
                    <dd>500,000원</dd>
                </dl>
            </div>
            <div class="item c">
                <dl>
                    <dt>총 금액</dt>
                    <dd>550,500,000원</dd>
                </dl>
            </div>
        </div>
        <div class="desc">
             <p>
                <span class="icoTotal b">기존 사용건 연장합계</span>
                 는 기존에 사용중인 서비스가 있을 경우 만료일을 맞추기 위한 연장금액이며,
                 <span class="icoTotal c">총 금액</span>
                 는 신청금액과 기존 연장금액을 합친 총 결제금액입니다.
             </p>
        </div>
    </div>
'),array(
'desc' => '
    <h3>아이콘</h3>
', 'html' => '
    <span class="icoTotal a">내용</span> 텍스트와 사용
    <span class="icoTotal b">내용</span> 텍스트와 사용
    <span class="icoTotal c">내용</span>
')
);
?>