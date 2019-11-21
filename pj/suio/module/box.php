<?php

// 모듈 전체 제목
$header_name = 'mBox';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>기본값은 왼쪽 정렬이며 type 없이 mBox만 단독으로 사용 할 수 없다.</li>
        <li>디자인에 따라 여러 type 설정이 가능하다.</li>
        <li>typeBg, typeAll 은 gStrong을 사용해 강조가 가능하다.</li>
    </ol>
    <ol class="zh_CN">
        <li>基本值为左对齐，不可没有type单独使用 mBox。</li>
        <li>根据设计因素，可设定多种type。</li>
        <li>typeBg, typeAll可用gStrong进行强调。</li>
    </ol>
    <ol class="en_US">
        <li>The basic value is the left alignment and the mBox cannot be used individually without the type.</li>
        <li>Various types can be set up depending on the design.</li>
        <li>It is possible to highlight the typeBg and typeAll using gStrong</li>
    </ol>';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        /* 주문상세 */
        .mBox.typeAll.order { margin:0 0 20px; padding:10px 20px; }
        .mBox.typeAll.order .gRight { padding:5px 0 0; }
        .mBox.typeAll.order ul { float:left; }
        .mBox.typeAll.order li { margin:2px 0; }
        .mBox.typeAll.order .division { margin:0 0 0 20px; padding:0 0 0 20px; border-left:1px solid #d0d4d7; }
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
                    <p class="info"><span class="date">2017.08.14</span><span class="writer">김은경</span></p>
                    <ul class="title">
                        <li><strong>[mBox box]</strong> mBox안에 box형 메시지 추가 <a href="/ec/mobile/app/register/ios_app.html" class="btnLink" target="_blank">카페24 플러스앱 IOS정보변경</a></li>
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
', 'html' => '
    <div class="mBox">
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.
    </div>
'), array(
'desc' => '
    <h3>[mBox + typeEmpty]</h3>
', 'html' => '
    <div class="mBox typeEmpty">
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.
    </div>
'), array(
'desc' => '
    <h3>[mBox + typeBorder]</h3>
', 'html' => '
    <div class="mBox typeBorder">
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.
    </div>
'), array(
'desc' => '
    <h3>[mBox + typeBg]</h3>
', 'html' => '
    <div class="mBox typeBg">
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.
    </div>
    <div class="mBox typeBg gStrong">
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.
    </div>
'), array(
'desc' => '
    <h3>[mBox + typeAll]</h3>
', 'html' => '
    <div class="mBox typeAll">
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.
    </div>
    <div class="mBox typeAll gStrong">
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.
    </div>
'), array(
'desc' => '
    <h3>[mBox + typeInfo] 안내문구형 <span class="zh_CN">指南语句type</span><span class="en_US">guide phrase type</span></h3>
    <ol>
        <li>가운데 정렬(gCenter)인 경우, 맨 앞 아이콘은 span 태그로 적용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li></li>
    </ol>
    <ol class="en_US">
        <li></li>
    </ol>
', 'html' => '
    <div class="section">
        <div class="mTitle">
            <h2>예시</h2>
        </div>
        <div class="mBox typeInfo">
            <p>예시입니다.</p>
        </div>
        <div class="mBox typeInfo gCenter">
            <span class="icoPoint"></span>예시입니다. 예시입니다.<br />
            예시입니다.
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mBox + typeFrame] </h3>
    <ol>
        <li>약관 등 Iframe이 필요한 경우의 타입 <del>(컨텐츠에 약관이 들어갈 경우 .mBox + .typeBorder + .gScroll 를 권장한다.)</del></li>
        <li>필요에 따라 textarea도 적용 가능하다.</li>
        <li>약관 한 화면에서 한번만 사용되는 경우 Iframe의 높이를 600px로 선언한다.</li>
        <li>여러 약관을 한 화면에 표현하고 싶은 경우 <a href="/suio/include/layout.php?MODULE=term" class="txtEm">[mTerm]</a> 과 같이 처리할 수 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>如遇条款等需要Iframe的情况时的type<del>（内容中包含条款时，建议使用 .mBox+.typeBorder+.gScroll。）</del></li>
        <li>根据需要， 可加textarea。</li>
        <li>在一个页面里条约只出现一次，Iframe的高度设为600px。</li>
        <li>在一个页面里出现好几个条约时，可应用 <a href="/suio/include/layout.php?MODULE=term" class="txtEm">[mTerm]</a>。</li>
    </ol>
    <ol class="en_US">
        <li>It is a type when iframe is needed for the cases such as indicating terms and conditions. <del>(If the terms are inserted in the contents, it is recommended to utilize the .mBox + .typeBorder + .gScroll.)</del></li>
        <li>If necessary, the textarea can be applied as well.</li>
        <li>번역필요</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="section">
        <div class="mTitle">
            <h2>약관 - Iframe</h2>
        </div>
        <div class="mBox typeFrame">
            <iframe src="//m-img.cafe24.com/images/terms/CStore/api_terms_use.html" title="해외 운영대행서비스 이용약관" frameborder="0" scrolling="auto" style="width:100%; height:223px;"></iframe>
        </div>
        <p class="gDouble">
            <label class="gLabel"><input type="checkbox" class="fChk" /> 약관에 동의합니다.</label>
        </p>
    </div>
    <div class="section">
        <div class="mTitle">
            <h2>약관 - Textarea (비권장: 데이터를 받아와야 할 경우에 사용)</h2>
        </div>
        <div class="mBox typeFrame">
            <div class="gTextarea">
                <textarea class="fTextarea" rows="10" cols="150" readonly="readonly">이 약관은 심플렉스인터넷(주)(이하 "회사"라 합니다)와 회사가 제공하는 카페24 해외운영대행 서비스(이하 "서비스")을 이용하는 회원(이하 "회원"이라 합니다)간에 서비스 이용에 관한 권리-의무 및 기타 필요한 제반 사항을 규정하여, 회원과 회사의 권익을 보호하고 상호 번영에 기여함을 목적으로 합니다.</textarea>
            </div>
        </div>
        <p class="gDouble">
            <label class="gLabel"><input type="checkbox" class="fChk" /> 약관에 동의합니다.</label>
        </p>
    </div>
    <div class="section">
        <div class="mTitle">
            <h2>약관 - Div (권장)</h2>
        </div>
        <div class="mBox typeFrame">
            <div class="term">
            이 약관은 심플렉스인터넷(주)(이하 "회사"라 합니다)와 회사가 제공하는 카페24 해외운영대행 서비스(이하 "서비스")을 이용하는 회원(이하 "회원"이라 합니다)간에 서비스 이용에 관한 권리-의무 및 기타 필요한 제반 사항을 규정하여, 회원과 회사의 권익을 보호하고 상호 번영에 기여함을 목적으로 합니다.
            </div>
        </div>
        <p class="gDouble">
            <label class="gLabel"><input type="checkbox" class="fChk" /> 약관에 동의합니다.</label>
        </p>
    </div>
'), array(
'desc' => '
    <h3>[mBox + type + grid] 조합 组合</h3>
    <ol>
        <li>.mBox의 조합은, 모든 박스에 사용 가능하다.</li>
        <li>.gScroll : 스크롤 영역으로 변경되며, 기본 높이값 100px 로 지정되어 있지만 재 지정할 경우 style로 적용한다. 예시) &lt;div class="mBox typeBg gScroll" style="height:150px;"&gt;</li>
        <li>.gCenter : 텍스트를 가운데 정렬한다.</li>
        <li>.gLeft, .gRight, .gMiddle：단순 텍스트 한 줄이 추가 될 경우, 줄간격 조절을 위해 적용한다.</li>
        <li>.gNoMarign을 이용하여 상단 여백을 없앨 수 있다.</li>
        <li>.gBox : mBox안에 box형 메시지가 추가될 때 사용한다.</li>
        <li>.gClear : gLeft, gRight 뒤에 오는 요소에 감싸서 float을 해제 할 수 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>mBox的组合可用于所有box。</li>
        <li>会变更为scroll区域，指定的基本高度值100px在重新指定时会被适用为style。示例）&lt;div class="mBox typeBg gScroll" style="height:150px;"&gt;</li>
        <li>.gCenter：将text向中央对齐</li>
        <li>.gLeft, .gRight, .gMiddle：添加一行纯text时，为调节行间距离而适用。</li>
        <li>.gNoMarign会去掉上端边距。</li>
    </ol>
    <ol class="en_US">
        <li>The combination of the .mBox can be utilized in every box.</li>
        <li>gScroll : It is changed to the area of scroll, and the basic height is set at 100px which can be re-set by the style.예시) &lt;div class="mBox typeBg gScroll" style="height:150px;"&gt;</li>
        <li>gCenter : the texts should be central aligned.</li>
        <li>gLeft, .gRight, .gMiddle：The interval of lines are rearranged when a line of simple text is added.</li>
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mBox typeBg gScroll" style="height:150px;">
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.
    </div>

    <div class="mBox typeBg gCenter">
        예시입니다.<br />
        예시입니다.<br />
        예시입니다.
    </div>

    <div class="mBox typeBg">
        <div class="gLeft">
            <strong>왼쪽정렬</strong>
        </div>
        <div class="gRight"><a href="#none" class="btnSubmit"><span>버튼</span></a></div>
    </div>

    <div class="mBox typeBg">
        <div class="gLeft gMiddle">
            <strong>왼쪽정렬+가운데정렬</strong>
        </div>
        <div class="gRight"><a href="#none" class="btnSubmit"><span>버튼</span></a></div>
    </div>

    <div class="mBox typeBg gNoMargin">
        여백 없앰
    </div>

    <div class="mBox typeBg">
       예시입니다
      <div class="gBox gDouble">
          <strong class="title">예시입니다</strong>
          <ul>
              <li>- 예시입니다.</li>
              <li>- 예시입니다.</li>
          </ul>
      </div>
  </div>

    <div class="mBox typeBg">
      <div class="gLeft">
          <strong>왼쪽정렬</strong>
      </div>
      <div class="gRight">
          <a href="#none" class="btnSubmit"><span>버튼</span></a>
      </div>
      <div class="gClear">
          <div class="gBox gDouble">
              <strong class="title">예시입니다</strong>
              <ul>
                  <li>- 예시입니다.</li>
                  <li>- 예시입니다.</li>
              </ul>
          </div>
      </div>
  </div>
'), array(
'desc' => '
    <h3>[mBox + type + class] 활용 的应用</h3>
    <ol>
        <li>디자인 변형이 필요할 경우 class 추가하여 재 지정한다. 예시) &lt;div class="mBox typeAll order"&gt;</li>
    </ol>
    <ol class="zh_CN">
        <li>如需对设计进行变形，则添加class重新指定。示例）&lt;div class="mBox typeAll order"&gt;</li>
    </ol>
    <ol class="en_US">
        <li>When the design format has to be changed, the class can be added to re-set.</li>
    </ol>
', 'html' => '
    <div class="mBox typeAll order">
        <div class="gLeft">
            <ul>
                <li><strong>쇼핑몰 : </strong>[기본] 이선혜난다(국문)</li>
                <li><strong>판매처 : </strong>모바일</li>
            </ul>
            <ul class="division">
                <li><strong>주문번호 : </strong>20121204-2046022</li>
                <li><strong>주문일자 : </strong>2012-12-04 20:46:55</li>
            </ul>
        </div>
        <div class="gRight"><a href="#none" class="btnSubmit" onclick="window.print();"><span>인쇄</span></a></div>
    </div>
')
);
?>