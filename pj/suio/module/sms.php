<?php

// 모듈 전체 제목
$header_name = 'SMS';

// 모듈 상단 설명 (미사용시 주석처리)
// $header_desc = '';

// 프리뷰를 위한 태그 리셋 (미사용시 주석처리)
$preview_css = '
    <style type="text/css">
        .mLayer { display:block; position:relative !important; left:0 !important; }
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
    <div class="mSms">
        <div class="preview">
            <p class="sms"><strong>SMS 발송가능</strong><span><em>300,000</em>건</span></p>
            <textarea rows="3" cols="20" title="SMS 내용 입력">SMS메시지는 80byte 이내로 작성해주세요.</textarea>
            <p class="byte"><strong>0</strong> / 80 byte</p>
        </div>
        <ul class="info">
            <li>
                <label for="recipient">받는 사람</label>
                <input type="text" id="recipient" class="fText" />
            </li>
            <li>
                <label for="sender">보내는 사람</label>
                <input type="text" id="sender" class="fText" />
            </li>
        </ul>
        <div class="button">
            <a href="#none" class="btnSend"><span>보내기</span></a>
            <a href="#none" class="btnSendCancel"><span>취소</span></a>
        </div>
    </div>
'), array(
'desc' => '
    <h3>[ mLayer + typeSms &gt; mSms ]</h3>
', 'html' => '
    <div id="ordSms" class="mLayer typeSms">
        <h2>SMS 보내기</h2>
        <div class="wrap">
            <div class="mSms">
                <div class="preview">
                    <p class="sms"><strong>SMS 발송가능</strong><span><em>300,000</em>건</span></p>
                    <textarea rows="3" cols="20" title="SMS 내용 입력">SMS메시지는 80byte 이내로 작성해주세요.</textarea>
                    <p class="byte"><strong>0</strong> / 80 byte</p>
                </div>
                <ul class="info">
                    <li>
                        <label for="recipient">받는 사람</label>
                        <input type="text" id="recipient" class="fText" />
                    </li>
                    <li>
                        <label for="sender">보내는 사람</label>
                        <input type="text" id="sender" class="fText" />
                    </li>
                </ul>
                <div class="button">
                    <a href="#none" class="btnSend"><span>보내기</span></a>
                    <a href="#none" class="btnSendCancel"><span>취소</span></a>
                </div>
            </div>
        </div>
        <button type="button" class="btnClose eClose">닫기</button>
    </div>
')
);
?>