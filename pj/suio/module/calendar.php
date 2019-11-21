<?php

// 모듈 전체 제목
$header_name = 'mCalendar';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>12r (사내 개발 Framework) 캘린더 플러그인과 같은 구조로, /js/calendar/jquery.12r.calendar.js 와 /js/calendar/dateUtil.js 파일을 호출하여 사용한다.
        ( 참고 : <a href="http://wiki.simplexi.com/display/platformDocument/JQuery#JQuery-플러그인-달력" target="_blank">12r Calendar</a> )</li>
        <li>선택된 검색버튼이 필요할 경우, .btnDate에 .selected를 추가한다.</span></li>
    </ol>
    <ol class="zh_CN">
        <li>与12r（公司自主开发的Framework）Calendar菜单结构相同，可调出使用 /js/calendar/jquery.12r.dateUtil.js文件。（参考：<a href="http://wiki.simplexi.com/display/platformDocument/JQuery#JQuery-플러그인-달력" target="_blank">12r Calendar）</a></li>
        <li>如果需要已选择的按钮，在.btnDate添加.selected。</li>
    </ol>
    <ol class="en_US">
        <li>It is the same structure with the calendar plugin of 12r (in-company development framework), which recalls the files of /js/calendar/jquery.12r.calendar.js and /js/calendar/dateUtil.js.( 참고 : <a href="http://wiki.simplexi.com/display/platformDocument/JQuery#JQuery-플러그인-달력" target="_blank">12r Calendar</a> )</li>
        <li>If the selected search button is needed, add the .selected to the .btnDate.</li>
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
    <img src="/suio/img/preview/mCalendar.gif" alt="" />
    <!-- 캘린더 소스
    <div class="mCalendar">
        <div class="calendar_header"><a class="calendar_close_btn" href="javascript:;"><span>닫기</span></a></div>
        <div class="calendar_cont">
            <ul class="day_select">
                <li class="prev"><a class="prev_month" href="javascript:;"><span>이전으로</span></a></li>
                <li><select class="year_select" style="width: 55px;"><option value="2013" selected="selected">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option></select><select class="month_select" style="width: 40px;"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6" selected="selected">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select></li>
                <li class="next"><a class="next_month" href="javascript:;"><span>다음으로</span></a></li>
            </ul>
            <table cellspacing="0" cellpadding="0" border="0" class="calendar">
                <thead>
                    <tr><th class="sunday">일</th><th class="">월</th><th class="">화</th><th class="">수</th><th class="">목</th><th class="">금</th><th class="saturday">토</th></tr>
                </thead>
                <tbody class="clendar_body">
                    <tr><td class="line_bt" colspan="7"></td></tr>
                    <tr class="weekend week1"><td class=""><a class="calendar_day" href="javascript:;"></a></td><td class="noromal"><a class="calendar_day" href="javascript:;">01</a></td><td class="now"><a class="calendar_day" href="javascript:;">02</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">03</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">04</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">05</a></td><td class="sat"><a class="calendar_day" href="javascript:;">06</a></td></tr><tr class="weekend week2"><td class="sunday"><a class="calendar_day" href="javascript:;">07</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">08</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">09</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">10</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">11</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">12</a></td><td class="sat"><a class="calendar_day" href="javascript:;">13</a></td></tr><tr class="weekend week3"><td class="sunday"><a class="calendar_day" href="javascript:;">14</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">15</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">16</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">17</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">18</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">19</a></td><td class="sat"><a class="calendar_day" href="javascript:;">20</a></td></tr><tr class="weekend week4"><td class="sunday"><a class="calendar_day" href="javascript:;">21</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">22</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">23</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">24</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">25</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">26</a></td><td class="sat"><a class="calendar_day" href="javascript:;">27</a></td></tr><tr class="weekend week5"><td class="sunday"><a class="calendar_day" href="javascript:;">28</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">29</a></td><td class="noromal"><a class="calendar_day" href="javascript:;">30</a></td><td class=""><a class="calendar_day" href="javascript:;"></a></td><td class=""><a class="calendar_day" href="javascript:;"></a></td><td class=""><a class="calendar_day" href="javascript:;"></a></td><td class=""><a class="calendar_day" href="javascript:;"></a></td></tr>
                </tbody>
            </table>
        </div>
    </div>
    -->
'),
array(
'desc' => '
    <h3>예시</h3>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">검색기간</th>
                    <td>
                        <a href="#none" class="btnDate"><span>오늘</span></a>
                        <a href="#none" class="btnDate"><span>3일</span></a>
                        <a href="#none" class="btnDate"><span>7일</span></a>
                        <a href="#none" class="btnDate"><span>1개월</span></a>
                        <a href="#none" class="btnDate"><span>3개월</span></a>
                        <a href="#none" class="btnDate"><span>1년</span></a>
                        <a href="#none" class="btnDate"><span>기본 검색기간 설정</span></a>
                        <input type="text" value="2013-04-03" class="fText gDate" />
                        <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a> ~
                        <input type="text" value="2013-04-03" class="fText gDate" />
                        <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">추가 입력형 <span class="zh_CN">数量</span><span class="en_US">additional insert type</span><br />.gForm</th>
                    <td>
                        <select class="fSelect"><option>- 선택 -</option></select>
                        <span class="gForm">
                            <a href="#none" class="btnDate"><span>오늘</span></a>
                            <a href="#none" class="btnDate"><span>3일</span></a>
                            <a href="#none" class="btnDate"><span>7일</span></a>
                            <a href="#none" class="btnDate"><span>1개월</span></a>
                            <a href="#none" class="btnDate"><span>3개월</span></a>
                            <a href="#none" class="btnDate"><span>1년</span></a>
                            <a href="#none" class="btnDate"><span>기본 검색기간 설정</span></a>
                            <input type="text" value="2013-04-03" class="fText gDate" />
                            <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a> ~
                            <input type="text" value="2013-04-03" class="fText gDate" />
                            <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a>
                        </span>
                        <ul class="txtInfo">
                            <li>
                                select 에서 option을 선택했을때 select 오른쪽에 노출되는 여러 form tag가 필요할 경우 편의를 위해 추가한다.<br />
                                추가되는 tag가 하나일경우 생략 가능하며 개발팀 편의를 위한 목적 외에는 아무런 기능이 없다.<br />
                                mTooltip 등 block 요소 대응을 대비하여 div으로 처리되었으나, span 과 같은 inline 태그도 사용 가능하다.
                             </li>
                            <li class="zh_CN">select中选择option后右边需要添加几个form tag的时候使用.<br />
                                  如果追加的tag只有一个时可省略, 除了给开发组提供方便之外, 毫无功能和效果.<br />
                                  因为考虑到mTooltip等block属性的元素使用了div, 但其实像span等inline标签也可以使用.
                            </li>
                            <li class="en_US">When select an option in the select, add if the various form tags are needed that are shown on the right side of the select.<br />
                                   In case only one tag is added, it can be skipped and has no function other than the objective on the comfort of the dev team.<br />
                                   It was handled with the div to prepare the response of block property such as the mTooltip, but it is available to use the inline tag like the span.
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <link rel="stylesheet" href="/css/library.css" type="text/css" />
    <script type="text/javascript" src="/js/calendar/jquery.12r.calendar.js"></script>
    <script type="text/javascript" src="/js/calendar/dateUtil.js"></script>
    <script type="text/javascript">
    // <![CDATA[

    var options = {
        "startDate" : "#pr_start_date",
        "endDate" : "#pr_end_date",
        "stardardDate" : "pr_end_date"
    };


    window.sdate = dateUtil.init(options);

     // 달력 출력 .
    $("#start_date").Calendar({
        "pop_calendar"  : "mCalendar" ,
        "target" : "input[name=start_date]"
    });

    $("#end_date").Calendar({
        "target" : "input[name=end_date]"
    });

    // ]]>
    </script>
')
);
?>