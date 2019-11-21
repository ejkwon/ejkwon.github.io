<?php

// 모듈 전체 제목
$header_name = 'mHelp';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>페이지하단에서만 사용되며, mBoard나 mLayer 에서는 <a href="/suio/include/layout.php?MODULE=advice" class="txtEm"><span>[mAdvice]</span></a> 를 사용한다.</li>
        <li>section으로 감싸지 않는다.</li>
        <li><strong class="txtWarn">문단형 도움말 2017년 9월부로 사용하지 않는다.</strong></li>
    </ol>
    <ol class="zh_CN">
        <li>仅在页面下端使用，在mBoard或mLayer使用 <a href="/suio/include/layout.php?MODULE=advice" class="txtEm"><span>[mAdvice]</span></a>。</li>
        <li>不要用section套住。</li>
        <li><strong class="txtWarn">段落型 从2017年9月起 不再使用。</strong></li>
    </ol>
    <ol class="en_US">
        <li>It is only used in the bottom of page, and <a href="/suio/include/layout.php?MODULE=advice" class="txtEm"><span>[the mAdvice]</spam></a> is used in the mBoard or mLayer.</li>
        <li>Do not cover with the section.</li>
        <li>(번역필요)</li>
    </ol>';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .mHelp { margin:0; }
        .mHelp p + p { outline:0; }
        .mHelp p + p:before{ display:none; }
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
', 'html' => '
    <div class="mHelp typeInfo">
        <h2>도움말 대제목</h2>
        <div class="content">
            <h3>1. 도움말 중제목 : 순서가 없는 목록형</h3>
            <ul>
                <li>순서가 없는 목록형 도움말 <a href="#none" class="btnLink" title="새창 열림" target="_blank"><strong>[링크<em class="icoLink"></em>]</strong></a></li>
                <li>순서가 없는 목록형 도움말</li>
                <li class="empty"><span class="txtIcon">※</span> 순서가 없는 목록형 도움말</li>
            </ul>
            <h3>2. 도움말 중제목 : 순서가 있는 목록형</h3>
            <ol>
                <li>1) 순서가 있는 목록형 도움말 <a href="#none" class="btnLink" title="새창 열림" target="_blank"><strong>[링크<em class="icoLink"></em>]</strong></a></li>
                <li>2) 순서가 있는 목록형 도움말</li>
                <li><span class="txtIcon">※</span> 순서가 있는 목록형 도움말 .empty 생략 가능</li>
            </ol>
        </div>
    </div><br />
    <div class="mHelp typeInfo zh_CN">
        <h2>&lt;帮助&gt; 大标题</h2>
        <div class="content">
            <h3>1. &lt;帮助&gt;中标题：目录型</h3>
            <ul>
                <li>目录型  <a href="#none" class="btnLink" title="새창 열림" target="_blank"><strong>[링크<em class="icoLink"></em>]</strong></a></li>
                <li>目录型</li>
                <li class="empty"><span class="txtIcon">※</span> 目录型</li>
            </ul>
            <h3>2. &lt;帮助&gt;中标题：有序目录型</h3>
            <ol>
                <li>1) 有序目录型 &lt;帮助&gt; <a href="#none" class="btnLink" title="새창 열림" target="_blank"><strong>[링크<em class="icoLink"></em>]</strong></a></li>
                <li>2) 有序目录型 &lt;帮助&gt;</li>
                <li><span class="translate KR"><span class="txtIcon">※</span> 可省略有序目录型 &lt;帮助&gt;.empty</span></li>
            </ol>
        </div>
    </div>
    <div class="mHelp typeInfo en_US">
        <h2>the large title help</h2>
        <div class="content">
            <h3>1. the medium title help : paragraph type</h3>
            <p>paragraph type help</p>
            <p class="empty"><span class="txtIcon">※</span> paragraph type help<a href="#none" class="btnLink" title="새창 열림" target="_blank"><strong>[링크<em class="icoLink"></em>]</strong></a></p>
            <h3>2. the medium title help : list type</h3>
            <ul>
                <li>The list type help without order <a href="#none" class="btnLink" title="새창 열림" target="_blank"><strong>[링크<em class="icoLink"></em>]</strong></a></li>
                <li>The list type help without order</li>
                <li class="empty"><span class="txtIcon">※</span> The list type help without order</li>
            </ul>
            <h3>3. the medium title help : The list type with order</h3>
            <ol>
                <li>1) The list type help with order <a href="#none" class="btnLink" title="새창 열림" target="_blank"><strong>[링크<em class="icoLink"></em>]</strong></a></li>
                <li>2) The list type help with order</li>
                <li><span class="txtIcon">※</span> 번역필요</li>
            </ol>
        </div>
    </div><br />
    <div class="mHelp typeInfo">
        <h2>도움말 대제목</h2>
        <div class="content">
            <ul>
                <li>중제목은 생략 가능하다</li>
            </ul>
        </div>
    </div><br />
    <div class="mHelp typeInfo zh_CN">
        <h2>&lt;帮助&gt; 大标题</h2>
        <div class="content">
            <ul>
                <li>可省略中标题。</li>
            </ul>
        </div>
    </div>
    <div class="mHelp typeInfo en_US">
        <h2>the large title help</h2>
        <div class="content">
            <ul>
                <li>the central title can be skipped.</li>
            </ul>
        </div>
    </div>
'),array(
'desc' => '
    <h3>Tip, 법적고지 <span class="en_US">Legal notice</span></h3>
    <ol>
        <li>도움말이 아닌, tip을 안내할 경우 h2.tip 을 적용한다.</li>
        <li>주요 법적이슈와 같이 도움말 내 강조하고 싶은 영역을 적용할때 .law를 사용한다.</li>
        <li>tip과 도움말을 같이 사용할 경우에만, h2 + content 를 반복하여 사용할 수는 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>不提供 &lt;帮助&gt;，提供tip时适用h2.tip。</li>
        <li>适用于 &lt;帮助&gt;内需要强调的区域（例如：主要法律问题）时，使用.law。</li>
        <li>只在tip与 &lt;帮助&gt;同时使用时，可反复使用h2+content。</li>
    </ol>
    <ol class="en_US">
        <li>When a tip is guided not a help, the h2.tip should be applied.</li>
        <li>When a part should be highlighted in the help such as main legal issues, the .law should be utilized.</li>
        <li>Only when both the tip and help are used together, the h2 + content can be utilized repeatedly.</li>
    </ol>
', 'html' => '
    <div class="mHelp typeInfo">
        <h2 class="tip">관련 Tip, 법적고지</h2>
        <div class="content">
            <h3>1. Tip 중제목</h3>
            <ul>
                <li>도움말</li>
            </ul>
            <h3>2. 법적고지</h3>
            <div class="law">
                <div class="title">
                    <h3>법적고지 도움말</h3>
                    <span class="txtLaw">법적고지</span>
                </div>
                <ul>
                    <li>순서가 없는 법적고지 도움말</li>
                    <li>순서가 없는 법적고지 도움말</li>
                </ul>
            </div>
        </div>
        <h2 class="tip zh_CN">相关tip，法律公告</h2>
        <div class="content zh_CN">
            <h3>1. Tip 中标题</h3>
            <ul>
                <li>段落型 Tip</li>
            </ul>
            <h3>2. 法律公告</h3>
            <div class="law">
                <div class="title">
                    <h3>法律公告 &lt;帮助&gt;</h3>
                    <span class="txtLaw">法律公告</span>
                </div>
                <ul>
                    <li>目录型</li>
                    <li>目录型</li>
                </ul>
            </div>
        </div>
        <h2 class="tip en_US">Related tip, legal notice</h2>
        <div class="content en_US">
            <h3>1. Tip mid-title</h3>
            <p>phrase type tip</p>
            <h3>2. legal notice</h3>
            <div class="law">
                <div class="title">
                    <h3>legal notice help</h3>
                    <span class="txtLaw">legal notice</span>
                </div>
                <ul>
                    <li>legal notice help without order</li>
                    <li>legal notice help without order</li>
                </ul>
            </div>
        </div>
    </div>
'),array(
'desc' => '
    <h3>들여쓰기 <span class="en_US">indentation</span></h3>
    <ol>
        <li>도움말의 내용이 많아 질 경우 ol &gt; ul 같이 들여쓰기 형태로 코딩할 수 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>&lt;帮助&gt;内容多时，以 ol &gt; ul 缩排形式编写代码。</li>
    </ol>
    <ol class="en_US">
        <li>If the volume of the help contents increases, the coding can be applied in the indentation such as the ol > ul.</li>
    </ol>
', 'html' => '
    <div class="mHelp typeInfo">
        <h2>도움말</h2>
        <div class="content">
            <ul>
                <li>첫번째 들여쓰기 도움말
                    <ol>
                        <li>1. 두번째 순서가 있는 들여쓰기 도움말</li>
                        <li>2. 두번째 순서가 있는 들여쓰기 도움말</li>
                    </ol>
                </li>
                <li>첫번째 들여쓰기 도움말</li>
            </ul>
        </div>
    </div><br />
    <div class="mHelp typeInfo zh_CN">
        <h2>&lt;帮助&gt;</h2>
        <div class="content">
            <ul>
                <li>第一，缩排形式 &lt;帮助&gt;
                    <ol>
                        <li>1. 第二， 有序缩排形式 &lt;帮助&gt;</li>
                        <li>2. 第二， 有序缩排形式 &lt;帮助&gt;</li>
                    </ol>
                </li>
                <li>第一，缩排形式 &lt;帮助&gt;</li>
            </ul>
        </div>
    </div>
    <div class="mHelp typeInfo en_US">
        <h2>Help</h2>
        <div class="content">
            <ul>
                <li>The first indentation help
                    <ol>
                        <li>1. 번역필요</li>
                        <li>2. 번역필요</li>
                    </ol>
                </li>
                <li>The first indentation help</li>
            </ul>
        </div>
    </div>
')
);
?>