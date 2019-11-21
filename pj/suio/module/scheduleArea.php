<?php

// 모듈 전체 제목
$header_name = 'scheduleArea';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ol>
        <li>일정관리용 모듈로 캘린더형(mSchedule+scheduleArea)과 리스트형(mSchedule+typeList)으로 분리한다..</li>
        <li>.section 으로 감싸지 않는다.</li>
    </ol>
    <ol class="zh_CN">
        <li>是管理日程的模块，可分为日历型(mSchedule+scheduleArea)和目录型(mSchedule+typeList)。</li>
        <li>不使用.section套住。</li>
    </ol>
    <ol class="en_US">
        <li>It is a module to manage the schedule as a calendar type (mSchedule+ scheduleArea) and a list type (mSchedule+typeList). </li>
        <li>Do not cover it with the .section.</li>
    </ol>
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
                    <p class="info"><span class="date">2017.05.25</span><span class="writer">김진아</span></p>
                    <ul class="title">
                        <li>
                            <strong>[mPeriod] </strong> 기존화면 이슈로 CSS는 유지<br />
                            - typeHead → mPeriod (CSS유지)<br />
                            - typeBody → 삭제 (기존 CSS없음)<br />
                        </li>
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
    <h3>[ scheduleArea &gt; mSchedule +typeCalendar] 캘린더형</h3>
', 'html' => '
    <div class="scheduleArea">
        <div class="mPeriod typeSchedule">
            <div class="gLeft">
                <a href="#none" class="btnNormal"><span>오늘</span></a>
                <div class="view">
                    <a href="#none" class="calendar selected"><span>캘린더형 보기</span></a>
                    <a href="#none" class="list"><span>리스트형 보기</span></a>
                </div>
            </div>
            <p class="date">
                <button type="button" class="btnPrevYear"><span>이전 년</span></button>
                <button type="button" class="btnPrevMonth"><span>이전 달</span></button>
                <span class="now" title="현재 년/월">2014.10</span>
                <button type="button" class="btnNextMonth"><span>다음 달</span></button>
                <button type="button" class="btnNextYear"><span>다음 년</span></button>
            </p>
            <div class="gRight">
                <a href="#none" class="btnCtrl"><span><em class="icoPlus"></em> 일정등록</span></a>
            </div>
        </div>
        <div class="mSchedule typeCalendar">
            <table border="1" summary="">
                <caption>일정</caption>
                <colgroup>
                    <col style="width:14.3%;" />
                    <col style="width:14.3%;" />
                    <col style="width:14.3%;" />
                    <col style="width:14.3%;" />
                    <col style="width:14.3%;" />
                    <col style="width:14.3%;" />
                    <col style="width:14.2%;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">월</th>
                        <th scope="col">화</th>
                        <th scope="col">수</th>
                        <th scope="col">목</th>
                        <th scope="col">금</th>
                        <th scope="col">토</th>
                        <th scope="col" class="sunday">일</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="other">
                            <span class="day">29</span>
                        </td>
                        <td class="other">
                            <span class="day">30</span>
                        </td>
                        <td class="selected">
                            <span class="day">1</span>
                            <ul class="list">
                                <li>
                                    <span class="icoPersonal">개인</span>
                                    <a href="#layerScheduleDetail" class="eLayerClick" title="개인일정입니다다정입니다다정입니다다">개인일정입니다다정입니다다정입니다다</a>
                                </li>
                                <li>
                                    <span class="icoCompany">회사</span>
                                    <a href="#layerScheduleDetail" class="eLayerClick" title="회사일정입니다다">회사일정입니다다</a>
                                </li>
                                <li>
                                    <span class="icoDivision">부서</span>
                                    <a href="#layerScheduleDetail" class="eLayerClick" title="부서일정입니다다">부서일정입니다다</a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <span class="day">2</span>
                        </td>
                        <td class="today">
                            <span class="day">3</span>
                        </td>
                        <td class="saturday">
                        </td>
                        <td class="sunday">
                            <span class="day">2</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="day">6</span>
                        </td>
                        <td>
                            <span class="day">7</span>
                        </td>
                        <td>
                            <span class="day">8</span>
                        </td>
                        <td>
                            <span class="day">9</span>
                        </td>
                        <td>
                            <span class="day">10</span>
                        </td>
                        <td class="saturday">
                            <span class="day">11</span>
                        </td>
                        <td class="sunday">
                            <span class="day">12</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="day">13</span>
                        </td>
                        <td>
                            <span class="day">14</span>
                        </td>
                        <td>
                            <span class="day">15</span>
                        </td>
                        <td>
                            <span class="day">16</span>
                        </td>
                        <td>
                            <span class="day">17</span>
                        </td>
                        <td class="saturday">
                            <span class="day">18</span>
                        </td>
                        <td class="sunday">
                            <span class="day">19</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="day">20</span>
                        </td>
                        <td>
                            <span class="day">21</span>
                        </td>
                        <td>
                            <span class="day">22</span>
                        </td>
                        <td>
                            <span class="day">23</span>
                        </td>
                        <td>
                            <span class="day">24</span>
                        </td>
                        <td class="saturday">
                            <span class="day">25</span>
                        </td>
                        <td class="sunday">
                            <span class="day">26</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="day">27</span>
                        </td>
                        <td>
                            <span class="day">28</span>
                        </td>
                        <td>
                            <span class="day">29</span>
                        </td>
                        <td>
                            <span class="day">30</span>
                        </td>
                        <td>
                            <span class="day">31</span>
                        </td>
                        <td class="other saturday">
                            <span class="day">1</span>
                        </td>
                        <td class="other sunday">
                            <span class="day">2</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
'),
array(
'desc' => '
    <h3>[ scheduleArea &gt; mSchedule +typeList ] 리스트형</h3>
', 'html' => '
    <div class="scheduleArea">
        <div class="mPeriod typeSchedule">
            <div class="gLeft">
                <a href="#none" class="btnNormal"><span>오늘</span></a>
                <div class="view">
                    <a href="#none" class="calendar"><span>캘린더형 보기</span></a>
                    <a href="#none" class="list selected"><span>리스트형 보기</span></a>
                </div>
            </div>
            <p class="date">
                <button type="button" class="btnPrevYear"><span>이전 년</span></button>
                <button type="button" class="btnPrevMonth"><span>이전 달</span></button>
                <span class="now" title="현재 년/월">2014.10</span>
                <button type="button" class="btnNextMonth"><span>다음 달</span></button>
                <button type="button" class="btnNextYear"><span>다음 년</span></button>
            </p>
            <div class="gRight">
                <a href="#none" class="btnCtrl"><span><em class="icoPlus"></em> 일정등록</span></a>
            </div>
        </div>
        <div class="mSchedule typeList">
            <table border="1" summary="">
                <caption>일정</caption>
                <colgroup>
                    <col style="width:95px;" />
                    <col style="width:110px;" />
                    <col style="width:50px;" />
                    <col style="width:auto;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">날짜<span>(요일)</span></th>
                        <th scope="col">시간</th>
                        <th scope="col">상태</th>
                        <th scope="col">일정</th>
                    </tr>
                </thead>
                <tbody class="center">
                    <tr>
                        <td class="date"><strong>10.01</strong>(수)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>취소</td>
                        <td class="detail left">
                            <span class="icoCompany">회사</span>
                            <a href="#layerScheduleDetail" class="eLayerClick" title="회사일정입니다다">회사일정입니다다</a>
                        </td>
                    </tr>
                </tbody>
                <tbody class="center selected">
                    <tr>
                        <td class="date" rowspan="3"><strong>10.02</strong>(목)</td>
                        <td class="time">01:00 ~ 10:00</td>
                        <td>완료</td>
                        <td class="detail left">
                            <span class="icoPersonal">개인</span>
                            <a href="#layerScheduleDetail" class="eLayerClick" title="개인일정입니다다정입니다다정입니다다">개인일정입니다다정입니다다정입니다다</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="time">11:01 ~ 20:00</td>
                        <td>예정</td>
                        <td class="detail left">
                            <span class="icoCompany">회사</span>
                            <a href="#layerScheduleDetail" class="eLayerClick" title="회사일정입니다다">회사일정입니다다</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="time">20:01 ~ 24:00</td>
                        <td>연기</td>
                        <td class="detail left">
                            <span class="icoDivision">부서</span>
                            <a href="#layerScheduleDetail" class="eLayerClick" title="부서일정입니다다">부서일정입니다다</a>
                        </td>
                    </tr>
                </tbody>
                <tbody class="center">
                    <tr>
                        <td class="date"><strong>10.03</strong>(금)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>완료</td>
                        <td class="detail left"></td>
                    </tr>
                </tbody>
                <tbody class="center saturday">
                    <tr>
                        <td class="date"><strong>10.04</strong>(토)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>완료</td>
                        <td class="detail left"></td>
                    </tr>
                </tbody>
                <tbody class="center sunday">
                    <tr>
                        <td class="date"><strong>10.05</strong>(일)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>완료</td>
                        <td class="detail left"></td>
                    </tr>
                </tbody>
                <tbody class="center today">
                    <tr>
                        <td class="date"><strong>10.06</strong>(월)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>완료</td>
                        <td class="detail left"></td>
                    </tr>
                </tbody>
                <tbody class="center">
                    <tr>
                        <td class="date"><strong>10.07</strong>(화)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>완료</td>
                        <td class="detail left"></td>
                    </tr>
                </tbody>
                <tbody class="center">
                    <tr>
                        <td class="date"><strong>10.08</strong>(수)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>완료</td>
                        <td class="detail left"></td>
                    </tr>
                </tbody>
                <tbody class="center">
                    <tr>
                        <td class="date"><strong>10.09</strong>(목)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>완료</td>
                        <td class="detail left"></td>
                    </tr>
                </tbody>
                <tbody class="center">
                    <tr>
                        <td class="date"><strong>10.10</strong>(금)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>완료</td>
                        <td class="detail left"></td>
                    </tr>
                </tbody>
                <tbody class="center saturday">
                    <tr>
                        <td class="date"><strong>10.11</strong>(토)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>완료</td>
                        <td class="detail left"></td>
                    </tr>
                </tbody>
                <tbody class="center sunday">
                    <tr>
                        <td class="date"><strong>10.12</strong>(일)</td>
                        <td class="time">01:00 ~ 23:00</td>
                        <td>완료</td>
                        <td class="detail left"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
')
);
?>