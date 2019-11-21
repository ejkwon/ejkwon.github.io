<?php

// 모듈 전체 제목
$header_name = 'mGuide';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <h2>Guide</h2>
    <ol>
        <li>필수 호출파일: <span class="txtEm">//img.echosting.cafe24.com/css/ec/common.css //img.echosting.cafe24.com/js/suio.guide.js</span></li>
        <li>호출되는 mGuide의 html은 <strong class="txtWarn">#content가 닫히기 전에 위치</strong>한다. <a href="/uidev/test/help/help2.html" target="_blank">페이지 보기(전체구조)</a></li>
        <li>btnGuide의 href 값과 guide id를 동일하게 입력한다.</li>
        <li>guide의 "이전으로" href 값에는 btnGuide의 id를 동일하게 입력한다.</li>
        <li>mGuide는 position으로 띄워있어 하단의 컨텐츠를 가려버리기 때문에, 빈 태그인 &lt;div class="mBlank"&gt;&lt;/div&gt;와 함께 사용한다. mBlank는 mGuide 영역만큼 높이를 갖는다.</li>
    </ol>
    <ol class="zh_CN">
        <li>必须导入的文件: <span class="txtEm">//img.echosting.cafe24.com/css/ec/common.css //img.echosting.cafe24.com/js/suio.guide.js</span></li>
        <li>被导入的mGuide的html，位置在<strong class="txtWarn">#content关闭符之前</strong>。 <a href="/uidev/test/help/help2.html" target="_blank">看页面(整体结构)</a></li>
        <li>btnGuide 的 href 值与guide id 要一样。</li>
        <li>guide的"이전으로" href 值 与 btnGuide 的 id 一样。</li>
        <li>mGuide是用position定位的，会遮住最下端的内容，因此要与空标签 &lt;div class="mBlank"&gt;&lt;/div&gt;一起使用。mBlank高度是mGuide的高度。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
        <li>(번역필요)</li>
    </ol>

    <h2>인터렉션 사양 互动样式</h2>
    <h3>기본</h3>
    <ol>
        <li>아이콘 선택 전: 노출 없음</li>
        <li>아이콘 선택 후: 도움말 영역 열림</li>
        <li>동일한 (도움말을 보기위해 클릭했던) 물음표 아이콘 클릭 시: 도움말 영역 접힘</li>
        <li>다른 물음표아이콘 클릭 시: 도움말 영역 펼침상태 유지, 도움말 내 콘텐츠 변경</li>
    </ol>
    <h3>도움말 펼침상태에서 [항상열기] 체크 시</h3>
    <ol>
        <li>해당 화면의 바탕화면 클릭 시: 도움말 영역 펼침상태 유지</li>
    </ol>
    <h3>도움말 펼침상태에서 [항상열기] 언체크 시</h3>
    <ol>
        <li>해당 화면의 바탕화면 클릭 시: 도움말 영역 접힘</li>
    </ol>

    <h3>基本</h3>
    <ol>
        <li>点击icon前：不出现</li>
        <li>点击icon后：帮助语区展开</li>
        <li>再次点击icon：帮助语区消失</li>
        <li>点击另一个icon：帮助语区维持展开状态，内容有改变。</li>
    </ol>
    <h3>帮助语区展开后，选[항상열기]时</h3>
    <ol>
        <li>点击基本页面：帮助语区维持展开状态</li>
    </ol>
    <h3>帮助语区展开后，没选[항상열기]时</h3>
    <ol>
        <li>点击基本页面：帮助语区消失</li>
    </ol>

    <h2>자바스크립트 사양 Java Script 样式</h2>
    <ol>
        <li>mGuide 상태에 따라, mBlank와 mGuide에 아래와 같이 class 추가된다.</li>
        <li>기본: default</li>
        <li>활성화시: active</li>
        <li>확장했을 경우: expand</li>
    </ol>

    <ol>
        <li>根据mGuide的状态，在mBlank和mGuide添加class名。</li>
        <li>默认：default</li>
        <li>激活时：active</li>
        <li>展开时：expand</li>
    </ol>
';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
<link rel="stylesheet" type="text/css" href="//img.echosting.cafe24.com/css/ec/common.css" />
<script type="text/javascript" src="//img.echosting.cafe24.com/js/suio.guide.js" charset="utf-8"></script>
<style type="text/css">
.mGuide { left:220px; right:20px; }
</style>
';

// SUIO 업데이트 알림창
$update_notice = '
    <div id="updateNotice">
        <h2>SUIO 업데이트 알림</h2>
        <div id="noticefakeScroll">
            <!--
                [ ※ 최신 업데이트를 맨 위에 추가할 것 ]
            <ul class="list">
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
            </ul>
            -->
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
    <button type="button" id="uioUpdate">Update</button>

';

// 상세 모듈
$arr_module = array(
array(
'desc' => '
    <h3>[ btnGuide + eOpen ]</h3>
    <ol>
        <li>btnGuide에 eOpen 클래스를 넣어야 가이드가 열리는 스크립트가 동작한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>class="btnGuide eOpen" 有eOpen类名，script启动作展开guide。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요) </li>
    </ol>
', 'html' => '
    btnGuide <a href="#tip1" id="icon1" class="btnGuide eOpen">도움말</a>
'),array(
'desc' => '
    <h3>[ mTitle > btnGuide ]</h3>
', 'html' => '
    <div class="mTitle">
        <h2>중제목</h2>
        <a href="#tip2" id="icon2" class="btnGuide eOpen">도움말</a>
    </div>

'),array(
'desc' => '
    <h3>[ mBoard + gGuide > btnGuide ]</h3>
    <ol>
        <li>th에 btnGuide 가 들어가는 경우, mBoard에 클래스 gGuide를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>btnGuide在th里时，mBoard 加类名 gGuide。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <div class="mBoard gSmall gGuide">
        <table border="1" summary="">
            <caption>판매 정보</caption>
            <tbody>
                <tr>
                    <th scope="row">판매가 <a href="#tip3" id="icon3" class="btnGuide eOpen">도움말</a></th>
                    <td>38,000원</td>
                </tr>
            </tbody>
        </table>
    </div>
'),array(
'desc' => '
    <h3>[ btnGuide + gLabel ]</h3>
    <ol>
        <li>gLabel 다음에 쓰일 경우, btnGuide에 gLabel 클래스를 추가한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>btnGuide位置在gLabel后， btnGuide加类名gLabel。</li>
    </ol>
    <ol class="en_US">
        <li>(번역필요)</li>
    </ol>
', 'html' => '
    <label class="gLabel"><input type="radio" class="fChk" /> 옵션 불러오기</label>
    <label class="gLabel"><input type="radio" class="fChk" /> 직접입력하기</label>
    <a href="#tip4" id="icon4" class="btnGuide gLabel eOpen">도움말</a>
'),array(
'desc' => '
    <h3>[ mGuide ]</h3>
', 'html' => '
    <!-- 참고: mGuide 상태에 따라, mBlank와 mGuide에 아래와 같이 class 추가된다.
        1. 기본: default
        2. 활성화시: active
        3. 확장했을 경우: expand
    -->

    <div class="mBlank"></div>

    <div class="mGuide theme1">
        <button type="button" class="btnRemote open eOpen">도움말 <span class="icoArrow">펼치기</span></button>
        <button type="button" class="btnRemote expand eExpand">크게보기 <span class="icoArrow"></span></button>
        <button type="button" class="btnRemote reduce eReduce">작게보기 <span class="icoArrow"></span></button>

        <div class="content">
            <!-- 참고: tip1 -->
            <div id="tip1" class="guide">
                <h2 class="title">도움말 대제목</h2>
                <ul class="list">
                    <li>도움말 목록</li>
                    <li>도움말 목록</li>
                </ul>
                <h3 class="title">도움말 중제목 (없으면 생략)</h3>
                <ol class="list">
                    <li>도움말 숫자 목록</li>
                    <li>도움말 숫자 목록</li>
                </ol>
                <a href="#icon1" class="blind">이전으로</a><!-- 참고: href에 btnGuide id 동일하게 입력-->
            </div><!-- //참고 -->
            <!-- 참고: tip2 -->
            <div id="tip2" class="guide">
                <h2 class="title">도움말 대제목</h2>
                <ol class="list">
                    <li>도움말 숫자 목록
                        <ul class="list">
                            <li>도움말 목록</li>
                            <li>도움말 목록</li>
                        </ul>
                    </li>
                    <li>도움말 숫자 목록
                        <ul class="list">
                            <li>도움말 목록</li>
                            <li>도움말 목록</li>
                        </ul>
                    </li>
                </ol>
                <a href="#icon3" class="blind">이전으로</a><!-- 참고: href에 btnGuide id 동일하게 입력-->
            </div><!-- //참고 -->
            <!-- 참고: tip3 -->
            <div id="tip3" class="guide">
                <h2 class="title">도움말 대제목</h2>
                <ul class="list">
                    <li>도움말 목록</li>
                    <li>도움말 목록</li>
                </ul>
                <a href="#icon3" class="blind">이전으로</a><!-- 참고: href에 btnGuide id 동일하게 입력-->
            </div><!-- //참고 -->
            <!-- 참고: tip4 -->
            <div id="tip4" class="guide">
                <h2 class="title">도움말 대제목</h2>
                <ul class="list">
                    <li>도움말 목록
                        <ol class="list">
                            <li>도움말 숫자 목록</li>
                            <li>도움말 숫자 목록</li>
                        </ol>
                    </li>
                    <li>도움말 목록
                        <ol class="list">
                            <li>도움말 숫자 목록</li>
                            <li>도움말 숫자 목록</li>
                        </ol>
                    </li>
                </ul>
                <a href="#icon4" class="blind">이전으로</a><!-- 참고: href에 btnGuide id 동일하게 입력-->
            </div><!-- //참고 -->
        </div>

        <div class="btnArea">
            <label class="lock"><input type="checkbox" /> 항상열기</label>
            <button type="button" class="close eClose"><span>접기</span></button>
        </div>
    </div>
')
);
?>