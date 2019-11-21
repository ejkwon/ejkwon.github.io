<?php

// 모듈 전체 제목
$header_name = 'mState';

// 모듈 상단 설명 (미사용시 주석처리)
//$header_desc = '';

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
    <ol>
        <li>.gLeft나 .gRight의 단독사용이 가능하다.</li>
    </ol>
    <ol class="zh_CN">
        <li>可单独使用.gLeft和 .gRight。</li>
    </ol>
    <ol class="en_US">
        <li>gLeft and .gRight can be used individually.</li>
    </ol>
', 'html' => '
    <div class="mState">
        <div class="gLeft">
            <p class="total">[총 등록상품 <strong>40</strong>개] 검색결과 <strong>4</strong>개</p>
        </div>
        <div class="gRight">
            <select class="fSelect">
                <option>10개씩보기</option>
                <option>20개씩보기</option>
                <option>30개씩보기</option>
                <option>50개씩보기</option>
                <option>100개씩보기</option>
            </select>
            <a href="#none" class="btnNormal"><span>추가</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[mState+gMerge] 여백줄이기 <span class="zh_CN">缩小间距</span><span class="en_US">minimizing the margin</span></h3>
    <ol>
        <li>H2와 .mState가 사용될 때, gLeft를 생략하게 될 경우 .gLeft의 공백을 없애기 위해 사용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>用H2和 .mState时，在省略gLeft的情况下，为删除 .gLeft的空白而使用。</li>
    </ol>
    <ol class="en_US">
        <li>When the H2 and .mState are used, it is used to delete the margin of the .gLeft if the .gLeft has to be deleted.</li>
    </ol>
', 'html' => '
    <div class="section">
        <div class="mTitle">
            <h2 class="zh_CN">잘된 예 正确</span></h2>
            <h2 class="en_US">잘된 예 good example</span></h2>
        </div>
        <div class="mState gMerge">
            <div class="gRight">
                <select class="fSelect">
                    <option>10개씩보기</option>
                    <option>20개씩보기</option>
                    <option>30개씩보기</option>
                    <option>50개씩보기</option>
                    <option>100개씩보기</option>
                </select>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="mTitle">
            <h2 class="zh_CN">잘못된 예 错误</h2>
            <h2 class="en_US">잘못된 예 bad example</h2>
        </div>
        <div class="mState">
            <div class="gRight">
                <select class="fSelect">
                    <option>10개씩보기</option>
                    <option>20개씩보기</option>
                    <option>30개씩보기</option>
                    <option>50개씩보기</option>
                    <option>100개씩보기</option>
                </select>
            </div>
        </div>
    </div>
'),
array(
'desc' => '
    <h3>[mState > title]</h3>
    <ol>
        <li>여백조정을 위해 mState 안에 h2.title을 사용할 수 있다.</li>
    </ol>
    <ol class="zh_CN">
        <li>为了调整边距，可以把 h2.title 放到 mState 里。</li>
    </ol>
    <ol class="en_US">
        <li>번역필요</li>
    </ol>
', 'html' => '
    <div class="mState">
        <h2 class="title">제목</h2>
        <div class="gLeft"><p class="total">[검색결과 <strong>40</strong>개 / 입고 수량 <strong>20</strong>개]</p></div>
        <div class="gRight">
            <select class="fSelect">
                <option>10개씩보기</option>
                <option>20개씩보기</option>
                <option>30개씩보기</option>
                <option>50개씩보기</option>
                <option>100개씩보기</option>
            </select>
        </div>
    </div>
')
);
?>