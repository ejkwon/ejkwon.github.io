<?php

// 모듈 전체 제목
$header_name = 'Javascript';

// 모듈 상단 설명 (미사용시 주석처리)
$header_desc = '
    <ul>
        <li>SUIO의 공통 javascript 적용된 예시페이지로, 모듈의 html 가이드는 각 모듈에서 확인한다.</li>
    </ul>
    <ul class="zh_CN">
        <li>此页面是SUIO适用共同javascript的示例页面，html指南在各模块中确认。</li>
    </ul>
    <ul class="en_US">
        <li>It is an example page applied with the SUIO’s common javascript, and the html guide can be checked in each module.</li>
    </ul>
';

// 프리뷰를 위한 태그 리셋  (미사용시 주석처리)
$preview_css = '
    <link rel="stylesheet" type="text/css" href="/css/ec/order.css" media="all" />
    <style type="text/css">
    .mTitle { outline:0; }
    .mTitle:before { display:none; }

    /* eImgSort */
    .mThumbList.typeHor.addImage li { margin:11px 23px 12px 0; }
    .addImage .highlight { width:110px; height:120px; background:url("/img/ec/product/sfix_drag.png") -20px 0; }
    .addImage .highlight:before { top:0; left:-16px; width:20px; height:97px; }
    .addImage .ui-sortable-helper:before { margin:-20px 0 0; }
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
                    <p class="info"><span class="date">2017.05.12</span><span class="writer"승기용</span></p>
                    <p class="title"><strong>[Tooltip]</strong> javascript code 업데이트 및 Tooltip 화면에 따른 위치 이동 개선</p>
                </li>
            </ul>
            <ul class="list">
                <li>
                    <p class="info"><span class="date">2017.05.10</span><span class="writer"승기용</span></p>
                    <p class="title"><strong>[eChkColor]</strong> javascript code 업데이트 및 eChkColor jquery 버전상관없이 예외처리</p>
                </li>
            </ul>
            <ul class="list">
                <li>
                    <p class="info"><span class="date">2017.03.03</span><span class="writer"승기용</span></p>
                    <p class="title"><strong>[mTab + typeNav]</strong> javascript code 업데이트 및 tabCont class 요소에 여러개의 class 가 들어가도 실행되도록 개선</p>
                </li>
            </ul>
            <ul class="list">
                <li>
                    <p class="info"><span class="date">2017.02.02</span><span class="writer"승기용</span></p>
                    <p class="title"><strong>[Tooltip]</strong> javascript code 업데이트 및 mTooltip 활성화시 도움말 아이콘 클릭시에도 닫힐수 있게 개선</p>
                </li>
            </ul>
            <ul class="list">
                <li>
                    <p class="info"><span class="date">2017.02.01</span><span class="writer"승기용</span></p>
                    <p class="title"><strong>[eChkTr, eChkColor, eChkBody]</strong> javascript code 업데이트 및 eChkColor rowspan일 경우 예시 추가</p>
                </li>
            </ul>
            <ul class="list">
                <li>
                    <p class="info"><span class="date">2017.01.26</span><span class="writer"승기용</span></p>
                    <p class="title"><strong>[Tooltip]</strong> javascript code 업데이트 및 eTipHover 추가에 따른 설명 업데이트</p>
                </li>
            </ul>
            <ul class="list">
                <li>
                    <p class="info"><span class="date">2016.06.22</span><span class="writer">송유진</span></p>
                    <p class="title"><strong>[eImgSort]</strong> 드래그앤드롭 <a href="/smartAdmin/product/registration/product/register.html" class="btnLink" target="_blank">상품등록</a></p>
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
    <h3>Form</h3>
    <ol>
        <li>자동으로 실행되는 javascript, html 작성시 eSelected 는 적용하지 않는다.</li>
    </ol>
    <ol class="zh_CN">
        <li>制作自动执行的javascript和html时，不适用eSelected。</li>
    </ol>
    <ol class="en_US">
        <li>Coding in javascript and html that run automatically, the eSelected is not applied.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <colgroup>
                <col style="width:100px;" />
                <col style="width:300px;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">tag</th>
                    <th scope="col">예시</th>
                    <th scope="col">설명</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">checkbox</th>
                    <td>
                        <label class="gLabel"><input type="checkbox" class="fChk" checked="checked" /> 예시</label>
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 예시</label>
                    </td>
                    <td>
                        checked 되었을때 bold되며, 코딩시 checked="checked"는 생략한다.
                        <p class="zh_CN">在checked状态下，字体显示为bold，编写代码时可省略 “checked=checked”。</p>
                        <p class="en_US">When checked, the bold function is applicable, and checked=”checked” is to be skipped when coding.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">radio</th>
                    <td>
                        <label class="gLabel"><input type="radio" class="fChk" checked="checked" /> 예시</label>
                        <label class="gLabel"><input type="radio" class="fChk" /> 예시</label>
                    </td>
                    <td>
                        checked 되었을때 bold되며, 코딩시 checked="checked"는 생략한다.
                        <p class="zh_CN">在checked状态下，字体显示为bold，编写代码时可省略 “checked=checked”。</p>
                        <p class="en_US">When checked, the bold function is applicable, and checked=”checked” is to be skipped when coding.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row" rowspan="2">placeholder</th>
                    <td>
                        <input type="text" placeholder="예시) value" class="fText" style="width:120px;" value="예시) value" />
                        <input type="text" placeholder="예시) placeholder" class="fText" style="width:120px;"  />
                    </td>
                    <td>
                        placeholder가 지원되지 않는 IE 8부터는 javascript로 처리되며, 그 외 브라우저에서는 placeholder 를 사용한다.<br />
                        value와 중복될 경우, value의 가 적용 됩니다.<br />
                        <p class="zh_CN">不支持placeholder的IE8及以下版本的浏览器，使用javascript处理，其他浏览器使用placeholder。</p>
                        <p class="zh_CN">placeholder的值与value重复时，适用value的"值。</p>
                        <p class="en_US">The javascript is utilized from IE8 in which the placeholder cannot be supported, whereas the other browsers can use the placeholder.</p>
                        <p class="en_US">(번역필요)</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="test" style="line-height:2.5em;">
                            <input type="text" placeholder="예시) xxxx" class="fText" style="width:120px;" />
                            <a href="#none" class="btnNormal" id="btn"><span>CLICK</span></a>
                        </div>
                        <script type="text/javascript">
                            $(function(){
                                var testIndex = 0;
                                $("#btn").click(function(){
                                    testIndex ++;
                                    $("#test").append("<input type= \"text\" class= \"fText placeTest_" + testIndex + "\" placeholder= \"예시) 동적추가\" style=\"width:120px;\" /><br />");
                                    $("input[placeholder].placeTest_"+ testIndex).placeholder();
                                });
                            });
                        </script>
                    </td>
                    <td>
                        버튼 클릭 시 항목이 추가됨. (동적추가시 placeholder가 오류없는지 테스트용.)
                        <p class="zh_CN">点击按钮时项目被增加。（动态添加时测试placeholder是否存在错误）</p>
                        <p class="en_US">Clicking the button, a new item is to be added (to test the placeholder for the dynamic addition).</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
', 'javaCode' => '
    //-------------------- checkbox, radio --------------------//
    var regexpSelectedClassName = /(^|\s)eSelected($|\s)/;
    function updateCheckedDesign(target) {
        var cur = target;
        for (var i = 0; i < 4; i++) {
            cur = cur.parentNode;
            if ( ! cur || ! cur.ownerDocument) {
                break;
            }
            if (cur.tagName.toUpperCase() === "LABEL") {
                var className = cur.className;
                var hasClass = regexpSelectedClassName.test(className);
                if (target.checked && hasClass === false) {
                    cur.className = className + " eSelected";
                } else if ( ! target.checked && hasClass === true) {
                    cur.className = className.replace(regexpSelectedClassName, " ");
                }
                break;
            }
        }
    }
    // checked 상태에 따라 해당 요소의 design을 자동으로 업데이트.
    $("body").delegate("input[type=checkbox],input[type=radio]", "updateDesign", function() {
        var target = this;
        window.setTimeout(function(){updateCheckedDesign(target);});
    })
    // checked 상태에 따라 label에 eSelected class 추가.
    $("body").delegate("input[type=checkbox],input[type=radio]", "click", function() {
        var target = this;
        window.setTimeout(function(){updateCheckedDesign(target);});

        // radio 체크 처리
        if ($(this).is("input[type=radio]") === true) {
            $("input[type=radio][name="" + this.name + ""]").each(function() {
                var target = this;
                window.setTimeout(function(){updateCheckedDesign(target);});
             });
         }
    });
    // 페이지 로드시 checked 상태에 따라 design 요소 업데이트.
    $("input[type=checkbox],input[type=radio]").each(function() {
        updateCheckedDesign(this);
    });

    //-------------------- placeholder --------------------//
    //placeholder가 지원되지 않는 IE8부터 적용되는 코드.
    $.fn.extend({
        placeholder : function() {
            //IE 8 버전에는 hasPlaceholderSupport() 값이 false 리턴.
            if (hasPlaceholderSupport() === true) {
                return this;
            }
            //hasPlaceholderSupport() 값이 false 일 경우 아래 코드 실행.
            return this.each(function(){
                var findThis = $(this);
                var sPlaceholder = findThis.attr("placeholder");
                if ( ! sPlaceholder) {
                   return;
                }
                findThis.wrap("<label class="ePlaceholder" />");
                var sDisplayPlaceHolder = $(this).val() ? " style="display:none;"" : "";
                findThis.before("<span" + sDisplayPlaceHolder + ">" + sPlaceholder + "</span>");
                this.onpropertychange = function(e){
                    e = event || e;
                    if (e.propertyName == "value") {
                        $(this).trigger("focusout");
                    }
                };
            });
        }
    });
    $(":input[placeholder]").placeholder(); //placeholder() 함수를 호출합니다.
    //클릭하면 placeholder 비활성
    $("body").delegate(".ePlaceholder span", "click", function(){
        $(this).hide();
    });
    //input창 포커스 인 일때 placeholder 비활성
    $("body").delegate(".ePlaceholder :input", "focusin", function(){
        $(this).prev("span").hide();
    });
    //input창 포커스 아웃 일때 value 가 true 이면 비활성, false 이면 활성
    $("body").delegate(".ePlaceholder :input", "focusout", function(){
        if (this.value) {
            $(this).prev("span").hide();
        } else {
            $(this).prev("span").show();
        }
    });
    //input에 placeholder가 지원여부에 따라 true, false 값을 리턴.
    function hasPlaceholderSupport() {
        if ("placeholder" in document.createElement("input")) {
            return true;
        } else {
            return false;
        }
    }
'), array(
'desc' => '
    <h3 class="inline">mTab + typeNav</h3><a href="../include/layout.php?MODULE=tab" target="_blank" class="btnNormal"><span>mTab 메뉴로 이동</span></a>
    <ol>
        <li>tab 적용이 필요한 mTab에 .eTab를 추가한다.</li>
        <li>tabCont 으로 컨텐츠 영역을 감싸주며, 탭메뉴의 href 값과 display 되어야 하는 영역의 id를 동일하게 입력해준다.</li>
        <li>화면이 열렸을때, 보여져야 하는 .tabCont 의 display:block 으로 처리하고 나머지 .tabCont는 모두 display:none으로 처리한다.</li>
        <li>tabCont의 id는 tab으로 시작한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>在需要适用tab的mTab上添加.eTab。</li>
        <li>用tabCont覆盖每个tab的内容部分，tab菜单的href值与需要display来控制显示的tab的内容部分的id必须相同。</li>
        <li>打开tab菜单时，应显示的.tabCont要处理为display:block，其余.tabCont要处理为display:none。</li>
        <li>tabCont的id名要用tab打头。</li>
    </ol>
    <ol class="en_US">
        <li>Add the eTab in the mTab that needs to apply the tab.</li>
        <li>Covering the contents area with the tabCont, the href in the tab menu and the ID that has to be displayed should be identically input.</li>
        <li>Opening a page, handle it with the display:block of .tabCont and the rest .tabCont should be handled with the display:none.</li>
        <li>ID of the tabCont should start with the tab.</li>
    </ol>
', 'html' => '
    <div class="mTab typeNav eTab">
        <ul>
            <li><a href="#tabCont1_1">메뉴예시 1</a></li>
            <li class="selected"><a href="#tabCont1_2">메뉴예시 2</a></li>
            <li><a href="#tabCont1_3">메뉴예시 3</a></li>
            <li><a href="#tabCont1_4">메뉴예시 4</a></li>
        </ul>
    </div>
    <div id="tabCont1_1" class="tabCont" style="display:none;">
        메뉴예시 1
    </div>
    <div id="tabCont1_2" class="tabCont" style="display:block;">
        메뉴예시 2
    </div>
    <div id="tabCont1_3" class="tabCont" style="display:none;">
        메뉴예시 3
    </div>
    <div id="tabCont1_4" class="tabCont" style="display:none;">
        메뉴예시 4
    </div>
', 'javaCode' => '
    //-------------------- mTab + typeNav --------------------//
    $("body").delegate(".eTab a", "click", function(e){
        // 클릭한 li 에 selected 클래스 추가, 기존 li에 있는 selected 클래스는 삭제.
        var _li = $(this).parent("li").addClass("selected").siblings().removeClass("selected"),
        _target = $(this).attr("href"),
        _siblings = $(_target).attr("class"),
        _arr = _siblings.split(" "),
        _classSiblings = "."+_arr[0];

        //클릭한 탭에 해당하는 요소는 활성화, 기존 요소는 비활성화 함.
        $(_target).show().siblings(_classSiblings).hide();
        
        var mtab = $(this).parents(".mTab:first");
        if($(this).siblings("ul").length > 0){
            if(!mtab.hasClass("gExtend")){
                mtab.addClass("gExtend");
            }
        } else {
            if($(this).parents("ul:first").siblings("a").length <= 0){
                mtab.removeClass("gExtend");
            }
        }

        //preventDefault 는 a 태그 처럼 클릭 이벤트 외에 별도의 브라우저 행동을 막기 위해 사용됨.
        e.preventDefault();
    });
'), array(
'desc' => '
    <h3 class="inline">Layer Popup</h3><a href="../include/layout.php?MODULE=layer" target="_blank" class="btnNormal"><span>mLayer 메뉴로 이동</span></a>
    <ol>
        <li>호출되는 레이어의 HTML은 <strong class="txtWarn">body가 닫히기 전에 위치</strong>해야한다.</li>
        <li>레이어 호출버튼의 href 값과 mLayer의 id를 동일하게 입력해준다.</li>
        <li>
            호출형태에 따라 class를 적용한다.
            <ol>
                <li>eLayerClick : 버튼을 클릭시 mLayer가 버튼 주변에서 활성화 됨</li>
                <li>eModal : 버튼을 클릭시 mLayer의 아래에 흰색 Dimmed 화면이 뜨며 mLayer는 화면 중앙에서 활성화 됨</li>
                <li>eLayerOver : 버튼에 마우스오버시 mLayer가 버튼 아래에서 활성화 됨</li>
                <li>eLayerOverSide : 버튼에 마우스오버시 mLayer가 버튼 오른쪽에서 활성화 됨</li>
            </ol>
        </li>
        <li>네이밍룰은 별도로 없으나, Layer가 들어가는 것을 권장한다. 단, jsSampleLayers는 사용 금지한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>被导入的Layer的HTML代码<strong class="txtWarn">需位于body代码结束之前。</strong></li>
        <li>呼出弹窗的按钮的herf值与弹窗中mLayer的id名必须相同。</li>
        <li>
            根据弹窗的形式适用class。
            <ol>
                <li>eLayerClick : 点击按钮时，mLayer在按钮周围被激活。</li>
                <li>eModal : 点击按钮时，mLayer下端会弹出白色Dimmed窗口，mLayer将在窗口中央被激活。</li>
                <li>eLayerOver：鼠标移至按钮之上时，mLayer在按钮下端被激活。</li>
                <li>eLayerOverSide : </li>
            </ol>
        </li>
        <li>无具体起名要求，建议添加Layer。禁止使用jsSampleLayers。 </li>
    </ol>
    <ol class="en_US">
        <li>The HTML of the called layer should be located <strong class="txtWarn">before the body closes.</strong></li>
        <li>The value of the href in the layer call button and the ID of mLayer have to be the same.</li>
        <li>
            The classes should be applied in accordance with the calling type.
            <ol>
                <li>eLayerClick : Clicking the button, mLayer is to be activated around the button</li>
                <li>eModal : Clicking the button, a white Dimmed screen is to be appeared under the mLayer, which is to be activated in the middle of the screen.</li>
                <li>eLayerOver : Putting the cursor on the button, the mLayer is to be activated under the button.</li>
                <li>eLayerOverSide : </li>
            </ol>
        </li>
        <li>Not many rules apply when it comes to the naming, except it is recommended to put Layer. However, the jsSampleLayers is banned to use.</li>
    </ol>
', 'html' => '
    <a href="#jsSampleLayer" class="btnNormal eLayerClick"><span>Click 레이어보기</span></a>
    <a href="#jsSampleLayer" class="btnNormal eModal"><span>Modal 레이어보기</span></a>
    <a href="#jsSampleLoading" class="btnNormal eModal"><span>Loading 레이어보기</span></a>
    <a href="#jsSampleLayerOver" class="btnNormal eLayerOver"><span>MouseOver 레이어보기(bottom)</span></a>
    <a href="#jsSampleLayerOver" class="btnNormal eLayerOverSide"><span>MouseOver 레이어보기(right)</span></a>
', 'javaCode' => '
    //-------------------- mLayer : eLayerClick --------------------//
    $("body").delegate(".eLayerClick", "click", function(e){
        var findThis = $(this),
            propBtnWidth = findThis.outerWidth(),
            findTarget = $($(this).attr("href")),
            propTargetWidth = findTarget.outerWidth(),
            propTargetHeight = findTarget.outerHeight(),
            propDocWidth = $(document).width(),
            propDocHeight = $(document).height(),
            propTop = findThis.offset().top,
            propLeft = findThis.offset().left,
            figure = propLeft + propTargetWidth,
            propMarginLeft = 0;
        if((propDocHeight-propTop) < propTargetHeight){
            if(propDocHeight < propTargetHeight) {
                propTop = 0;
            } else {
                propTop = propDocHeight - propTargetHeight - 10;
            }
        }
        if(propDocWidth <= figure){
            if(propTargetWidth > propLeft){
                propMarginLeft = "-" + ( propTargetWidth / 2 ) + "px";
                propLeft = "50%";
            } else {
                propLeft = propLeft - propTargetWidth + 20;
            }
        }
        //레이어 위치 값을 구해서 해당 위치에 팝업.
        findTarget.css({"top":propTop+10, "left":propLeft, "marginLeft":propMarginLeft}).show();

        //preventDefault 는 a 태그 처럼 클릭 이벤트 외에 별도의 브라우저 행동을 막기 위해 사용됨.
        e.preventDefault();
    });

	//-------------------- MouseOver layer show --------------------//
    // case1) </body> 직전에 하나의 레이어팝업으로 존재하는 경우 (mLayerOver > mLayer)
    $("body").delegate(".eLayerOver", "mouseenter", function(){
        eLayerOver($(this), "enter", "over");
    });
    // case1) mouseleave
    $("body").delegate(".eLayerOver", "mouseleave", function(){
        eLayerOver($(this), "leave", "over");
    });

    // eLayerOverSide
    $("body").delegate(".eLayerOverSide", "mouseenter", function(){
        eLayerOver($(this), "enter", "side");
    });
    $("body").delegate(".eLayerOverSide", "mouseleave", function(){
        eLayerOver($(this), "leave", "side");
    });

    var flagLayer = true;
    function eLayerOver(findThis, str, opt){
        var findTarget = $(findThis.attr("href")),
            propClass = findThis.attr("class");

        if(str == "enter"){
            // 레이어팝업의 넓이 + offset좌표 의 값이 body태그의 width보다 클때 좌표값 왼쪽으로 이동
            var bodyWidth = $("body").width(),
                targetWidth = findTarget.outerWidth(),
                setTop = findThis.offset().top+findThis.height(),
                setLeft = findThis.offset().left;
            if(opt == "side"){
                setTop = findThis.offset().top-5;
                setLeft = findThis.offset().left+findThis.width()+3;
            }
            var posWidth = targetWidth + setLeft;
            if(bodyWidth < posWidth){
                if(opt == "side"){
                    targetWidth = posWidth - bodyWidth;
                }else{
                    targetWidth = targetWidth - findThis.width();
                }
                findTarget.css({"top":setTop,"left":setLeft, "margin-left":"-"+ targetWidth +"px"});
            } else {
                findTarget.css({"top":setTop,"left":setLeft, "margin-left":0});
            }
            if(flagLayer){
                flagLayer = false;
                findTarget.mouseenter(function() {
                    $(this).show();
                }).mouseleave(function() {
                    $(this).hide();
                });
            }
            findTarget.show();
        }else{
            findTarget.hide();
        }
    }

    //-------------------- modal layer show, loading layer show --------------------//
    //레이어 위치 값을 구해서 해당 위치에 팝업.
    function dimmedLayerPosition(target){
        if(!target.attr("fixed")){
            var findLayer = target,
                propWinWidth = $(window).width(),
                propWinHeight = $(window).height(),
                propWidth = findLayer.outerWidth(),
                propHeight = findLayer.outerHeight(),
                propWinScroll = $(window).scrollTop();
            if(propWinWidth < propWidth){
                findLayer.css({"left":0, "marginLeft":0});
            } else {
                var propLeft = propWidth/2;
                findLayer.css({"left":"50%", "marginLeft":"-"+ propLeft +"px"});
            }
            var propTop = (propWinHeight/2) - (propHeight/2) + propWinScroll;
            findLayer.css({"top":propTop});

            findLayer.show();
        }
    }

    $("body").delegate(".eModal", "click", function(e){
        var findTarget = $($(this).attr("href"));
        //call dimmed layer position function
        dimmedLayerPosition(findTarget);
        //흰색 투명 배경 생성.
        findTarget.parent().append("<div id="dimmed_"+ findTarget.attr("id") +"" class="dimmed"></div>");
        //흰색 투명 배경이 2개 이상일경우 zindex를 높여서 처리해줌.
        if($(".dimmed").length > 1 ){
            $(".dimmed").addClass("hide");
            var propZIndex = 110 + $(".dimmed").length;
            $(findTarget).css({"zIndex":propZIndex+5});
            $("#dimmed_"+ findTarget.attr("id")).css({ "zIndex" : propZIndex }).removeClass("hide");
        }
        e.preventDefault();
    });
    
    //-------------------- close --------------------//
    //mLayer : close
    $.mLayer_close = function(target){
        var findParent = target.parents(".mLayer:first");
        var findDimmed = $("#dimmed_" + findParent.attr("id"));
        findParent.hide();

        //흰색 투명 배경 있을 경우 삭제.
        if(findDimmed){
            if($(".dimmed").length > 1){
                $(".dimmed").removeClass("hide");
            }
            findDimmed.remove();
        }
        return false
    }
    $("body").delegate(".mLayer .footer .eClose", "click", function(){
        $.mLayer_close($(this));
    });
    $("body").delegate(".mLayer > .eClose", "click", function(){
        $.mLayer_close($(this));
    });
    //mLayer : typeView
    $("body").delegate(".mLayer.typeView", "mouseleave", function(){
        $(this).hide();
    });
'), array(
'desc' => '
    <h3 class="inline">mToggle</h3><a href="../include/layout.php?MODULE=toggle" target="_blank" class="btnNormal"><span>mToggle 메뉴로 이동</span></a>
    <ol>
        <li>토글을 시키고자 하는 버튼에 .eToggle 를 추가한다. .mToggle 안에서만 사용이 가능하다.</li>
        <li>토글영역을 활성화 시키고 싶다면, .eToggle.selected 로 처리한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>需要Toggle的按钮应添加 .eToggle，但只能在 .mToggle范围内使用。</li>
        <li>如需激活Toggle区域，应使用eToggle. Selected。</li>
    </ol>
    <ol class="en_US">
        <li>Add the eToggle in a button where the toggle is to be carried out, which is operational only in the mToggle.</li>
        <li>Apply the eToggle.selected, if you want to activate the toggle parts.</li>
    </ol>
', 'html' => '
    <br /><br />
    <div class="mToggle typeHeader">
        <div class="ctrl">
            <span class="eToggle"><button type="button"><em>열기</em></button></span>
        </div>
    </div>
    <div class="toggleArea">
        <div class="mBoard">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col style="width:50%;" />
                    <col style="width:50%;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">예시</th>
                        <th scope="col">예시</th>
                    </tr>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br /><br /><br />

    <div class="mToggle typeHeader">
        <div class="ctrl">
            <span class="eToggle selected"><button type="button"><em>닫기</em></button></span>
        </div>
    </div>
    <div class="toggleArea" style="display:block;">
        <div class="mBoard">
            <table border="1" summary="">
                <caption>제목</caption>
                <colgroup>
                    <col style="width:50%;" />
                    <col style="width:50%;" />
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">예시</th>
                        <th scope="col">예시</th>
                    </tr>
                <tbody>
                    <tr>
                        <td>내용</td>
                        <td>내용</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
', 'javaCode' => '
    //-------------------- mToggle --------------------//
    $(".mToggle .eToggle").click(function(e){
        var findParent = $(this).parents(".mToggle:first");
        // typeTop
        if(findParent.hasClass("typeHeader")){
            var findTarget = findParent.next(".toggleArea");
        }
        // typeBtm
        if(findParent.hasClass("typeFooter")){
            var findTarget = findParent.prev(".toggleArea");
        }
        if(findTarget.css("display") == "none"){
            $(this).find("em").text("닫기");
            $(this).addClass("selected");
            findTarget.show();
        } else {
            $(this).find("em").text("열기");
            $(this).removeClass("selected");
            findTarget.hide();
        }
        e.preventDefault();
    });
'), array(
'desc' => '
    <h3 class="inline">mCalendar</h3><a href="../include/layout.php?MODULE=calendar" target="_blank" class="btnNormal"><span>mCalendar 메뉴로 이동</span></a>
    <ol>
        <li>12r에서 제공하는 javascript 예시화면이다.</li>
        <li>Javascript 적용은 개발팀에서 적용하며, html 시에는 아이콘만 적용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>是12r提供的javascript示例页面。</li>
        <li>Javascript适用由开发部进行，进行html时只适用icon。</li>
    </ol>
    <ol class="en_US">
        <li>This shows the Javascript example screen that the 12r supports.</li>
        <li>Only the development team can apply the Javascript, and when utilizing the html, only an icon is to be applicable.</li>
    </ol>
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
                        <input type="text" class="fText gDate" />
                        <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a> ~
                        <input type="text" class="fText gDate" />
                        <a href="#none" class="btnIcon icoCal"><span>달력보기</span></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

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
', 'javaCode' => '
    //-------------------- mCalendar --------------------//
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
            "pop_calendar"  : "mCalendar" ,
            "target" : "input[name=end_date]"
        });
        // ]]>
    </script>
    //calendar jquery
    <script type="text/javascript" src="/js/calendar/jquery.12r.calendar.js"></script>
    //dateUtil 날짜 간격 계산 스크립트
    <script type="text/javascript" src="/js/calendar/dateUtil.js"></script>
'), array(
'desc' => '
    <h3 class="inline">mColorPicker + eColorPicker</h3><a href="../include/layout.php?MODULE=color_picker" target="_blank" class="btnNormal"><span>mColorpicker 메뉴로 이동</span></a>
    <ol>
        <li>12r에서 제공하는 javascript 예시화면이다.</li>
        <li>Javascript 적용은 개발팀에서 적용하며, html 시에는 아이콘만 적용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>是12r提供的javascript示例页面。</li>
        <li>Javascript适用由开发部进行，进行html时只适用icon。</li>
    </ol>
    <ol class="en_US">
        <li>This shows the Javascript example screen that the 12r supports.</li>
        <li>Only the development team can apply the Javascript, and when utilizing the html, only an icon is to be applicable.</li>
    </ol>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>테이블 제목</caption>
            <tbody>
                <tr>
                    <th scope="row">컬러선택</th>
                    <td>
                        <div class="mColorPicker eColorPicker">
                            <span class="selected" style="background-color:#ff0000"></span><input type="text" maxlength="7" readonly="readonly" value="#ff0000" class="fText" style="width:50px;" />
                            <span class="selector">
                                <a href="#none">컬러선택</a>
                            </span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="/js/colorpicker.js"></script>
', 'javaCode' => '
    //-------------------- colorpicker jquery --------------------//
    <script type="text/javascript" src="/js/colorpicker.js"></script>
'), array(
'desc' => '
    <h3 class="inline">Tooltip</h3><a href="../include/layout.php?MODULE=tooltip" target="_blank" class="btnNormal"><span>mTooltip 메뉴로 이동</span></a>
    <ol>
        <li><div class="mTooltip gSmall"><button type="button" class="icon eTip">도움말</button></div>이나 텍스트를 클릭 또는 오버시 도움말 레이어 팝업이 활성화된다.</li>
        <li>클릭되어야 하는 요소에 eTip, eTipScroll 을 적용한다.</li>
        <li>오버되어야 하는 요소에 eTipHover 을 적용한다.</li>
    </ol>
    <ol class="zh_CN">
        <li>点击<div class="mTooltip gSmall"><button type="button" class="icon eTip">도움말</button></div>或文本时，将激活&lt;帮助&gt;弹窗。</li>
        <li>将eTip，eTipScroll适用于需要点击的元素上。</li>
        <li>在需要hover效果的元素上添加.eTipHover</li>
    </ol>
    <ol class="en_US">
        <li>Clicking the <div class="mTooltip gSmall"><button type="button" class="icon eTip">도움말</button></div> or text, the help layer pop up is to be activated.</li>
        <li>The eTip and eTipScroll should be applied in the elements that has to be clicked.</li>
        <li></li>
    </ol>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">
                        tootip
                        <div class="mTooltip gSmall">
                            <button type="button" class="icon eTip">도움말</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">대제목</strong>
                                    <strong class="title">중제목</strong>
                                    <ul class="mList">
                                        <li>내용</li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                    </th>
                    <td>클릭 예시/鼠标点击 示例</td>
                </tr>
                <tr>
                    <th scope="row">
                        tootip
                        <div class="mTooltip gSmall">
                            <button class="icon eTipHover">도움말</button>
                            <div class="tooltip">
                                <div class="content">
                                    <strong class="titleEm">대제목</strong>
                                    <strong class="title">중제목</strong>
                                    <ul class="mList">
                                        <li>내용</li>
                                    </ul>
                                </div>
                                <button type="button" class="close eClose">닫기</button>
                                <span class="edge"></span>
                            </div>
                        </div>
                    </th>
                    <td>오버 예시/鼠标经过 示例</td>
                </tr>
            </tbody>
        </table>
    </div>
', 'javaCode' => '
    //-------------------- toolTip --------------------//
    // 고정
    $("body").delegate(".mTooltip .eTip", "click", function(e){
        mTooltipMouseEvent(this, e);
    });
    // mouseover
    $("body").delegate(".mTooltip .eTipHover", "mouseover", function(e){
        mTooltipMouseEvent(this, e);
    });

    function mTooltipMouseEvent(_this, e){
        var findSection = $(_this).parents(".section:first"),
            findTarget = $($(_this).siblings(".tooltip")),
            findTooltip = $(".tooltip"),
            findHover = $(_this).hasClass("eTipHover"),
            findShow = $(_this).parents(".mTooltip:first").hasClass("show");
        //도움말 아이콘 클릭시 레이어가 있으면 삭제해줌.
        if(findShow && !findHover){
            $(".mTooltip").removeClass("show");
            findTarget.hide();
            findSection.css({"zIndex":0, "position":"static"});
        }else{
            $(".mTooltip").removeClass("show");
            $(_this).parents(".mTooltip:first").addClass("show");
            findSection.css({"zIndex":0, "position":"static"});
            findSection.css({"zIndex":100, "position":"relative"});

            // 툴팁의 넓이 + offset좌표 의 값이 body태그의 width보다 클때 좌표값 왼쪽으로 이동
            var bodyWidth = $("body").width(),
                targetWidth = findTarget.outerWidth(),
                offsetLeft = $(_this).offset().left,
                posWidth = targetWidth + offsetLeft;
            if(bodyWidth < posWidth){
                var propMarginLeft = (targetWidth+$(_this).width()+10);
                var propWidth = offsetLeft - targetWidth;
                if(propWidth > 0){
                    findTarget.addClass("posRight").css({"marginLeft": "-"+ targetWidth +"px" });
                }else{
                    findTarget.removeClass("posRight").css({"marginLeft": 0 });
                }
            } else {
                findTarget.removeClass("posRight").css({"marginLeft": 0 });
            }
            // 툴팁의 top 값이 window height값보다 클때 좌표값 상단으로 이동
            var findFooter = $("#footer");
            var propFooterHeight = 0;
            if(findFooter.length >= 1){
                propFooterHeight = findFooter.outerHeight();
            }
            var propwindowHeight = $(window).height()-propFooterHeight,
                targetHeight = findTarget.outerHeight(),
                propscrollTop = $(window).scrollTop();
                offsetTop = $(_this).offset().top,
                posHeight = (offsetTop-propscrollTop)+targetHeight+$(_this).height();

            if(propwindowHeight < posHeight){
                var propMarginTop = (targetHeight+$(_this).height()+10);
                var propHeight = (offsetTop-propscrollTop) - targetHeight;
                if(propHeight > 0){
                    findTarget.addClass("posTop").css({"marginTop": "-"+ propMarginTop +"px" });
                }else{
                    findTarget.removeClass("posTop").css({"marginTop": 0 });
                }
            }else{
                findTarget.removeClass("posTop").css({"marginTop": 0 });
            }
            findTooltip.hide();
            findTarget.show();

            if($("#tooltipSCrollView").length > 0){
                $("#tooltipSCrollView").remove();
            }
        }
        e.preventDefault();
    }
    // 동적
    $("body").delegate(".mTooltip .eTipScroll", "click", function(e) {
        $("#tooltipSCrollView").remove();
        var findShow = $(this).parents(".mTooltip:first").hasClass("show");
        if (findShow) {
            $(".mTooltip").removeClass("show");
        } else {
            var tooltip = $(this).siblings(".tooltip").clone();
            var prevClass = $(this).parent(".mTooltip").attr("class");
            $("body").append("<div id="tooltipSCrollView" class="" + prevClass + "" virtual="true">");
            $("#tooltipSCrollView").append(tooltip);
            $(".mTooltip").removeClass("show");
            $(this).parents(".mTooltip:first").addClass("show");
            var findThis = $(this),
                findTarget = $("#tooltipSCrollView").find(".tooltip"),
                propTargetWidth = findTarget.outerWidth(),
                propTargetHeight = findTarget.outerHeight(),
                propDocWidth = $(document).width(),
                propDocHeight = $(document).height(),
                propTop = findThis.offset().top + 5,
                propLeft = findThis.offset().left,
                figure = propLeft + propTargetWidth,
                propMarginLeft = "-12px",
                propMarginTop = findThis.outerHeight();
            if ((propDocHeight - propTop) < propTargetHeight) {
                if (propDocHeight < propTargetHeight) {
                    propTop = 0;
                } else {
                    propTop = propDocHeight - propTargetHeight - 10;
                }
            }
            if (propDocWidth <= figure) {
                propLeft = propLeft - propTargetWidth + 20;
                findTarget.addClass("posRight");
            } else {
                findTarget.removeClass("posRight");
            }
            findTarget.css({
                "top": propTop,
                "left": propLeft,
                "marginLeft": propMarginLeft,
                "marginTop": propMarginTop
            }).show();
            $(".mTooltip .icon").each(function(i) {
                var findScroll = $(this).hasClass("eTipScroll");
                if (!findScroll) {
                    $(this).parent().removeClass("show");
                    $(this).parent().find(".tooltip").hide();
                }
            });
        }
        e.preventDefault();
    });
    $("body").delegate(".mTooltip .eClose", "click", function(e) {
        // 동적
        if ($(this).parents(".mTooltip:first").attr("virtual")) {
            $("#tooltipSCrollView").remove();
        } else {
            var findSection = $(this).parents(".section:first");
            var findTarget = $(this).parents(".tooltip:first");
            findTarget.hide();
            findSection.css({
                "zIndex": 0,
                "position": "static"
            });
        }
        $(".mTooltip").removeClass("show");
        e.preventDefault();
    });

'), array(
'desc' => '
    <h3 class="inline">eImgSort</h3><a href="../include/layout.php?MODULE=ThumbList" target="_blank" class="btnNormal"><span>ThumbList 메뉴로 이동</span></a>
    <ol>
        <li>ul 에 .eImgSort 를 추가해야 사용가능하다.</li>
        <li>mThumbList 또는 mImgSelect 모듈과 함께 사용가능하다.</li>
        <li>
            class 가이드
            <ol>
                <li>해당모듈은 다양한 사이즈 대응을 위해, 해당기능에 맞는 class를 추가해야한다. (ex: mThumbList typeHor <strong>addImage</strong>, mImgSelect <strong>typeIconList</strong>)</li>
                <li>drag 되고있는 li (예시에서 체크 아이콘 표시) : ui-sortable-helper</li>
                <li>drop 되는 위치의 li (점선, 화살표 표시) : highlight</li>
            </ol>
        </li>
    </ol>
    <ol class="zh_CN">
        <li>在ul添加.eImgSort后方可使用。</li>
        <li>可与mThumbList或者是mImgSelect模块一同使用。</li>
        <li>class指南
            <ol>
                <li>模块为应对不同大小的尺寸，需添加符合相应功能的class。(ex: mThumbList typeHor <strong>addImage</strong>, mImgSelect <strong>typeIconList</strong>)</li>
                <li>正在被drag的li（示例中以对号图标标记）：ui-sortable-helper</li>
                <li>位于被drop处的li（以点线、箭头标记）： highlight</li>
            </ol>
        </li>
    </ol>
    <ol class="en_US">
        <li>The .eImgSort should be added in the ul, to make it available.</li>
        <li>It is possible to use in conjunction with mThumbList or mlmgSelect module.</li>
        <li>The Class Guide
            <ol>
                <li>The following module needs to respond with various sizes, so the classes have to be added. (ex: mThumbList typeHor <strong>addImage</strong>, mImgSelect <strong>typeIconList</strong>)</li>
                <li>The li that is dragging (mark a check icon in the example) : ui-sortable-helper</li>
                <li>The li locating at the drop (the dotted line, an arrow sign) : highlight</li>
            </ol>
        </li>
    </ol>
', 'html' => '
    <!-- 테스트용 : 개발시 삭제 -->
    <script type="text/javascript" src="/js/jquery-ui.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        // 드래그앤드롭
        $(function() {
            $( ".eImgSort" ).sortable({
                placeholder: "highlight"
            });
        });
    </script>
    <!-- //테스트용 : 개발시 삭제 -->
    <div class="mThumbList typeHor addImage">
        <ul class="eImgSort">
            <li>
                <span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span>
            </li>
            <li>
                <span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span>
            </li>
            <li>
                <span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span>
            </li>
            <li>
                <span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span>
            </li>
            <li>
                <span class="zoom"><img src="//img.echosting.cafe24.com/thumb/108x108_1.gif" alt="" /><a href="#none" class="btnZoom">확대보기</a><button type="button" class="btnIcon icoDelete">삭제</button></span>
            </li>
        </ul>
    </div>
', 'javaCode' => '
    <!-- 테스트용 : 개발시 삭제 -->
    <script type="text/javascript" src="/js/jquery-ui.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        // 드래그앤드롭
        $(function() {
            $( ".eImgSort" ).sortable({
                placeholder: "highlight"
            });
        });
    </script>
    <!-- //테스트용 : 개발시 삭제 -->
'), array(
'desc' => '
    <h3 class="inline">multipleArea &gt; mSelect</h3><a href="../include/layout.php?MODULE=multipleArea" target="_blank" class="btnNormal"><span>multipleArea 메뉴로 이동</span></a>
    <ol>
        <li>eSelect 를 추가해야 사용가능하다.</li>
        <li>hover 되었을때 배경색 변경, 삭제아이콘이 활성화 된다.</li>
    </ol>
    <ol class="zh_CN">
        <li>须添加eSelect才能使用。</li>
        <li>hover时，将变更背景色同时显示删除icon。</li>
    </ol>
    <ol class="en_US">
        <li>eSelect should be added to use it.</li>
        <li>When hovering, the background color is to be changed meanwhile the delete icon is to be activated.</li>
    </ol>
', 'html' => '
    <div class="mBoard gSmall">
        <table border="1" summary="">
            <caption>제목</caption>
            <tbody>
                <tr>
                    <th scope="row">예시</th>
                    <td>
                        <div class="multipleArea">
                            <div class="gFlow">
                                <div class="mSelect eSelect">
                                    <ul>
                                        <li class="selected"><strong>목록형 단일선택</strong></li>
                                        <li><strong>목록형 단일선택</strong></li>
                                        <li><strong>목록형 단일선택</strong></li>
                                        <li><strong>목록형 단일선택</strong></li>
                                        <li><strong>목록형 단일선택</strong></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mController">
                                <div class="button">
                                    <p>
                                        <button type="button" class="btnMove icoRight"><span>선택한 항목 오른쪽으로 이동</span></button>
                                        <button type="button" class="btnMove icoLeft"><span>선택한 항목 왼쪽으로 이동</span></button>
                                    </p>
                                </div>
                            </div>
                            <div class="gReverse">
                                <div class="mSelect gFunction eSelect">
                                    <ul>
                                        <li class="selected">
                                            <strong>버튼을 포함한 목록형 단일선택</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>버튼을 포함한 목록형 단일선택</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>버튼을 포함한 목록형 단일선택</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>버튼을 포함한 목록형 단일선택</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                        <li>
                                            <strong>버튼을 포함한 목록형 단일선택</strong>
                                            <button class="btnIcon icoDel"><span>삭제</span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
', 'javaCode' => '
    //-------------------- eSelect --------------------//
    $("body").delegate(".eSelect li", "mouseenter", function(){
        $(this).addClass("selected").siblings("li").removeClass("selected");
    });
    $("body").delegate(".eSelect", "mouseleave", function(){
        $("li", this).removeClass("selected");
    });
'), array(
'desc' => '
    <h3>eChkTr</h3>
    <ol>
        <li>mBoard에서만 사용되며, checkbox를 전체 선택하는 javascript 이다.</li>
        <li>checkbox에 checked 되었을때, tr의 배경색은 변경되지 않는다.</li>
        <li>tr의 class로 배경색을 지정했을 때, 해당 색상이 적용 된다.</li>
    </ol>
    <ol class="zh_CN">
        <li>只能在mBoard使用，是全选checkbox的javascript。</li>
        <li>在checkbox进行checked时，tr背景色不会变更。</li>
        <li>背景色指定tr的class时，将适用该颜色。</li>
    </ol>
    <ol class="en_US">
        <li>It is used only in the mBoard, which is javascript that select the all checkboxes.</li>
        <li>When checked in the checkbox, the background color of tr is not changed.</li>
        <li>When selecting a background color in the tr’s class, the color is to be applied.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="" class="eChkTr">
            <caption>제목</caption>
            <colgroup>
                <col class="chk" />
                <col style="width:auto;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">중국어</th>
                    <th scope="col" class="en_US">English</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="center"><input type="checkbox" class="rowChk" /></td>
                    <td>기본값</td>
                    <td class="zh_CN">基本值</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td class="center">-</td>
                    <td>checkbox가 없는 경우</td>
                    <td class="zh_CN">无checkbox的情况</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td class="center"><input type="checkbox" class="rowChk" checked="checked" /></td>
                    <td>checkbox가 checked인 경우</td>
                    <td class="zh_CN">checkbox的状态为checked的情况</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr class="negative">
                    <td class="center"><input type="checkbox" class="rowChk" /></td>
                    <td>negative 로 색상이 적용 된 경우, negative 의 색상이 유지됨</td>
                    <td class="zh_CN">颜色适用为negative时，将会保持negative的颜色。</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
            </tbody>
        </table>
    </div>
', 'javaCode' => '
    // table : allCheck
    $("body").delegate(".mBoard .allChk", "click", function() {
        var findThis = $(this),
            findTable = $(this).parents("table:first"),
            findMboard = $(this).parents(".mBoard:first"),
            findColspan;
        //table class 가 eChkBody 유무에 따른 처리
        if (findTable.hasClass("eChkBody")) {
            var findRowChk = findTable.find(".rowChk").not(":disabled");
            if (findThis.is(":checked")) {
                findRowChk.attr("checked", true);
            } else {
                findRowChk.attr("checked", false);
            }
        } else {
            //typeHead class 유무에 따른 처리.
            if (findMboard.hasClass("typeHead")) {
                var findNext = findMboard.next();
                var findRowChk = findNext.find(".rowChk").not(":disabled");
            } else {
                var findRowChk = findTable.find(".rowChk").not(":disabled");
            }
            /*eChkTr code-----------------------------------------------------*/
            if (findThis.is(":checked")) {
                findRowChk.each(function() {
                    //checked가 안되어 있을때 전체 체크박스에 체크.
                    $(this).attr("checked", true);
                    if ($(this).parents("table:first").hasClass("eChkColor")) {
                        $(this).parents("tr:first").addClass("selected");
                    }
                });
            } else {
                findRowChk.each(function() {
                    //checked가 되어 있을때 전체 체크박스에 체크풀어줌.
                    $(this).attr("checked", false);
                    if ($(this).parents("table:first").hasClass("eChkColor")) {
                        $(this).parents("tr:first").removeClass("selected");
                    }
                });
            }
            /*----------------------------------------------------------------------*/
            //allchk colspan selected
            //typeHead class 유무에 따른 처리.
            if (findMboard.hasClass("typeHead")) {
            //typeHead 일경우 다음 테이블을 타켓으로 잡아줌.
                findColspan = findMboard.next();
            } else {
                findColspan = findTable;
            }
            // rowChk에 체크가 안된 부분 전체 selected 를 추가 해줌.
            var findNoRowChk = findColspan.find("tbody tr:not(tbody table tr)").each(function(i) {
                if (!$(this).children().children().hasClass("rowChk")) {
                    if (findThis.is(":checked")) {
                        findColspan.find("tbody tr:not(tbody table tr)").eq(i).addClass("selected");
                    } else {
                        findColspan.find("tbody tr:not(tbody table tr)").eq(i).removeClass("selected");
                    }
                }
            });
        }
    });
'), array(
'desc' => '
    <h3>eChkColor</h3>
    <ol>
        <li>mBoard에서만 사용되며, checkbox를 전체 선택하는 javascript 이다.</li>
        <li>tr의 class로 배경색 지정이 필요할 경우 해당 eChkTr을 사용한다.</li>
        <li>checkbox에 checked 되었거나, hover시에 tr의 배경색이 변경된다.</li>
    </ol>
    <ol class="zh_CN">
        <li>只能在mBoard使用，是全选checkbox的javascript。</li>
        <li>需要指定tr的class背景色时，使用该eChkTr。</li>
        <li>checkbox的状态为checked或hover时，tr的背景色会变更。</li>
    </ol>
    <ol class="en_US">
        <li>It is used only in the mBoard, which is javascript that select the all checkboxes.</li>
        <li>When a background color has to be selected with the class of tr, the eChkTr has to be used.</li>
        <li>When checked in the checkbox or hovering, the background color of tr is changed.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="" class="eChkColor">
            <caption>제목</caption>
            <colgroup>
                <col class="chk" />
                <col style="width:auto;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">중국어</th>
                    <th scope="col" class="en_US">English</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="center"><input type="checkbox" class="rowChk" /></td>
                    <td>기본값</td>
                    <td class="zh_CN">基本值</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td class="center">-</td>
                    <td>checkbox가 없는 경우</td>
                    <td class="zh_CN">无checkbox的情况</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr class="selected">
                    <td class="center"><input type="checkbox" class="rowChk" checked="checked" /></td>
                    <td>checkbox가 checked인 경우 자동으로 selected 가 추가되어 배경색이 변경된다.</td>
                    <td class="zh_CN">checkbox的状态为checked时，将自动添加selected，背景色也将变更。</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr class="negative">
                    <td class="center"><input type="checkbox" class="rowChk" /></td>
                    <td>negative 로 색상이 적용 된 경우, negative 의 색상이 유지되므로 eChkTr을 사용한다.</td>
                    <td class="zh_CN">颜色适用为negative时，将保持negative的颜色，因此使用eChkTr。</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td class="center" rowspan="2"><input type="checkbox" class="rowChk" /></td>
                    <td rowspan="2">rowspan이 있을경우 rowspan 영역이 checkbox에 checked 되었거나, hover시에 tr의 배경색이 변경된다.</td>
                    <td class="zh_CN">有rowspan时，rowspan区域的checkbox被checked，或鼠标移入到该区域，tr的背景色会变。</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td class="zh_CN">-</td>
                    <td class="en_US">-</td>
                </tr>
            </tbody>
        </table>
    </div>
', 'javaCode' => '
    /*eChkColor code-----------------------------------------------------*/
    // table : rowChk
    $("body").delegate(".eChkColor .rowChk", "click", function() {
        var findChkTarget = $(this).parent("td").parent("tr");
        var findRowspan = parseInt(findChkTarget.children().attr("rowspan"));
        if (findRowspan > 1) {
            //rowspan이 있을경우 chkTrHover() 함수에 몇번째 tr에 있는지 인자값으로 변수 전달
            var figureNum = $(this).parents("tbody tr").index();
            chkTrHover($(this), figureNum, findRowspan);
        } else {
            //rowspan이 없을경우 체크박스부무에 따라 selected 추가 삭제
            if ($(this).is(":checked")) {
                $(this).parents("tr:first").addClass("selected");
            } else {
                $(this).parents("tr:first").removeClass("selected");
            }
        }
    });
    //chk rowspan hover color
    function chkTrHover(findTarget, figureNum, findRowspan) {
        //rowspan이 몇개에 tr에 적용되어 있는지 체크한후 체크박스 유무에 따라 selected 추가 삭제
        var findTisTarget = $(".eChkColor").find("tbody tr:not(tbody table tr)");
        for (var i = figureNum; i < (figureNum + findRowspan); i++) {
            if (findTarget.is(":checked")) {
                findTisTarget.eq(i).addClass("selected");
            } else {
                findTisTarget.eq(i).removeClass("selected");
            }
        }
    }
    /*----------------------------------------------------------------------*/
    // table : allCheck
    $("body").delegate(".mBoard .allChk", "click", function() {
        var findThis = $(this),
            findTable = $(this).parents("table:first"),
            findMboard = $(this).parents(".mBoard:first"),
            findColspan;
        //table class 가 eChkBody 유무에 따른 처리
        if (findTable.hasClass("eChkBody")) {
            var findRowChk = findTable.find(".rowChk").not(":disabled");
            if (findThis.is(":checked")) {
                findRowChk.attr("checked", true);
            } else {
                findRowChk.attr("checked", false);
            }
        } else {
            //typeHead class 유무에 따른 처리.
            if (findMboard.hasClass("typeHead")) {
                var findNext = findMboard.next();
                var findRowChk = findNext.find(".rowChk").not(":disabled");
            } else {
                var findRowChk = findTable.find(".rowChk").not(":disabled");
            }
            /*eChkColor code-----------------------------------------------------*/
            if (findThis.is(":checked")) {
                findRowChk.each(function() {
                    //checked가 안되어 있을때 전체 체크박스에 체크.
                    $(this).attr("checked", true);
                    if ($(this).parents("table:first").hasClass("eChkColor")) {
                        $(this).parents("tr:first").addClass("selected");
                    }
                });
            } else {
                findRowChk.each(function() {
                    //checked가 되어 있을때 전체 체크박스에 체크풀어줌.
                    $(this).attr("checked", false);
                    if ($(this).parents("table:first").hasClass("eChkColor")) {
                        $(this).parents("tr:first").removeClass("selected");
                    }
                });
            }
            /*----------------------------------------------------------------------*/
            //allchk colspan selected
            //typeHead class 유무에 따른 처리.
            if (findMboard.hasClass("typeHead")) {
                //typeHead 일경우 다음 테이블을 타켓으로 잡아줌.
                findColspan = findMboard.next();
            } else {
                findColspan = findTable;
            }
            // rowChk에 체크가 안된 부분 전체 selected 를 추가 해줌.
            var findNoRowChk = findColspan.find("tbody tr:not(tbody table tr)").each(function(i) {
                if (!$(this).children().children().hasClass("rowChk")) {
                    if (findThis.is(":checked")) {
                        findColspan.find("tbody tr:not(tbody table tr)").eq(i).addClass("selected");
                    } else {
                        findColspan.find("tbody tr:not(tbody table tr)").eq(i).removeClass("selected");
                    }
                }
            });
        }
    });
    /*eChkColor code-----------------------------------------------------*/
    // Table : tr hover
    $("body").delegate(".eChkColor > tbody:not(.empty) > tr", "mouseover", function() {
        tableTrHover($(this), "over");
    });
    $("body").delegate(".eChkColor > tbody:not(.empty) > tr", "mouseout", function() {
        tableTrHover($(this), "out");
    });
    //eChkColor 일때 마우스 오버/아웃 일때 처리하는 함수
    function tableTrHover(_this, str) {
        var findTarget = _this.parents(".eChkColor");
        var figurei = 0;
        var findRowspan = 0;
        var figureindex = _this.index();
        findTarget = findTarget.find("tbody tr:not(tbody table)");
        var findNoRowspan = findTarget.each(function(i) {
            var figureNum = parseInt($(this).children().attr("rowspan"));
            if(!figureNum){
                figureNum = 1;
            }
            if (figureNum >= 1) {
                figurei = i;
                findRowspan = figureNum;
                if (figureindex >= figurei && figureindex < (figurei + findRowspan)) {
                    //rowspan이 있는경우 몇개에 tr에 적용되어 있는지 체크한후 마우스 오버/아웃에  따라 hover 추가 삭제
                    for (var j = figurei; j < (figurei + findRowspan); j++) {
                        if (str == "over") {
                            findTarget.eq(j).addClass("hover");
                        } else {
                            findTarget.eq(j).removeClass("hover");
                        }
                    }
                } else {
                    //rowspan이 없을경우 마우스 오버/아웃에  따라 hover 추가 삭제
                    if (str == "over") {
                        findTarget.eq(figureindex).addClass("hover");
                    } else {
                        findTarget.eq(figureindex).removeClass("hover");
                    }
                }
            }
        });
    }
    /*----------------------------------------------------------------------*/
'), array(
'desc' => '
    <h3>[eChkBody]</h3>
    <ol>
        <li>mBoard에서만 사용되며, checkbox를 전체 선택하는 javascript 이다.</li>
        <li>checkbox에 checked 되었거나, hover시에 tr의 배경색 변경되지 않는다.</li>
        <li>짝수의 tbody마다 even class가 추가되어 배경색이 변경된다.</li>
        <li>EC몰어드민 주문 메뉴에서만 사용된다.</li>
    </ol>
    <ol class="zh_CN">
        <li>只能在mBoard使用，是全选checkbox的javascript。</li>
        <li>在checkbox的状态为checked或hover时，tr的背景色将不会变更。</li>
        <li>每个偶数的tbody将添加even class，背景色也将变更。</li>
        <li>仅限在EC购物网admin订购菜单使用。</li>
    </ol>
    <ol class="en_US">
        <li>It is only used in the mBoard, which is javascript that select the all checkboxes.</li>
        <li>When checked in the check box or hovering, the background color of tr is not changed.</li>
        <li>Adding the even class in every tbody, the background color is to be changed.</li>
        <li>It is used only in the purchase menu of EC mall admin.</li>
    </ol>
', 'html' => '
    <div class="mBoard typeOrder">
        <table border="1" summary="" class="eChkBody">
            <caption>제목</caption>
            <colgroup>
                <col class="chk" />
                <col style="width:auto;" />
                <col style="width:auto;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col"><input type="checkbox" class="allChk" /></th>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">중국어</th>
                    <th scope="col" class="en_US">English</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="center"><input type="checkbox" class="rowChk" /></td>
                    <td>기본값</td>
                    <td class="zh_CN">基本值</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td class="center">-</td>
                    <td>checkbox가 없는 경우</td>
                    <td class="zh_CN">无checkbox的情况</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td class="center"><input type="checkbox" class="rowChk" checked="checked" /></td>
                    <td>checkbox가 checked인 경우도 배경색이 변경되지 않는다.</td>
                    <td class="zh_CN">checkbox的状态为checked时，背景色不会变更。</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
            </tbody>
            <tbody class="even">
                <tr>
                    <td class="center"><input type="checkbox" class="rowChk" /></td>
                    <td>기본값</td>
                    <td class="zh_CN">基本值</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td class="center">-</td>
                    <td>checkbox가 없는 경우</td>
                    <td class="zh_CN">无checkbox的情况</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td class="center"><input type="checkbox" class="rowChk" checked="checked" /></td>
                    <td>checkbox가 checked인 경우도 배경색이 변경되지 않는다.</td>
                    <td class="zh_CN">checkbox的状态为checked时，背景色不会变更。</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
            </tbody>
        </table>
    </div>
', 'javaCode' => '
    // table : allCheck
    $("body").delegate(".mBoard .allChk", "click", function() {
        var findThis = $(this),
            findTable = $(this).parents("table:first"),
            findMboard = $(this).parents(".mBoard:first"),
            findColspan;
        /*eChkBody code-----------------------------------------------------*/
        //table class 가 eChkBody 유무에 따른 처리
        if (findTable.hasClass("eChkBody")) {
            var findRowChk = findTable.find(".rowChk").not(":disabled");
            if (findThis.is(":checked")) {
                findRowChk.attr("checked", true);
            } else {
                findRowChk.attr("checked", false);
            }
        /*-----------------------------------------------------------------------*/
        } else {
            //typeHead class 유무에 따른 처리.
            if (findMboard.hasClass("typeHead")) {
                var findNext = findMboard.next();
                var findRowChk = findNext.find(".rowChk").not(":disabled");
            } else {
                var findRowChk = findTable.find(".rowChk").not(":disabled");
            }
            if (findThis.is(":checked")) {
                findRowChk.each(function() {
                //checked가 안되어 있을때 전체 체크박스에 체크.
                    $(this).attr("checked", true);
                    if ($(this).parents("table:first").hasClass("eChkColor")) {
                        $(this).parents("tr:first").addClass("selected");
                    }
                });
            } else {
                findRowChk.each(function() {
                    //checked가 되어 있을때 전체 체크박스에 체크풀어줌.
                    $(this).attr("checked", false);
                    if ($(this).parents("table:first").hasClass("eChkColor")) {
                        $(this).parents("tr:first").removeClass("selected");
                    }
                });
            }
            //allchk colspan selected
            //typeHead class 유무에 따른 처리.
            if (findMboard.hasClass("typeHead")) {
            //typeHead 일경우 다음 테이블을 타켓으로 잡아줌.
                findColspan = findMboard.next();
            } else {
                findColspan = findTable;
            }
            // rowChk에 체크가 안된 부분 전체 selected 를 추가 해줌.
            var findNoRowChk = findColspan.find("tbody tr:not(tbody table tr)").each(function(i) {
                if (!$(this).children().children().hasClass("rowChk")) {
                    if (findThis.is(":checked")) {
                        findColspan.find("tbody tr:not(tbody table tr)").eq(i).addClass("selected");
                    } else {
                        findColspan.find("tbody tr:not(tbody table tr)").eq(i).removeClass("selected");
                    }
                }
            });
        }
    });
'), array(
'desc' => '
    <h3>eInlay</h3>
    <ol>
        <li>클릭시 바로 아래의 tr을 활성화 시킨다.</li>
        <li>다른 메뉴클릭시 이미 열려진 활성화된 메뉴들은 모두 숨겨진다.</li>
        <li>활성화 되었을때 다시 클릭하면 하위 메뉴를 숨긴다.</li>
    </ol>
    <ol class="zh_CN">
        <li>点击即可激活下面tr。</li>
        <li>点击其他按钮时，被打开的激活菜单将会全部隐藏。</li>
        <li>在激活的状态下，再次点击将会隐藏子菜单。</li>
    </ol>
    <ol class="en_US">
        <li>When click, the tr that is right under is to be activated.</li>
        <li>When click the different menus, all the menus that are already open are to be closed.</li>
        <li>Clicking when it is activated, the sub menus are to be closed.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="" id="inlayTest_1" class="eInlay">
            <caption>제목</caption>
            <colgroup>
                <col style="width:50%;" />
                <col style="width:50%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">중국어</th>
                    <th scope="col" class="en_US">English</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#none" class="active">[메뉴 1] 클릭 됨 : 클릭 영역 선택시 a.active로 클릭된 메뉴가 bold 된다.</a></td>
                    <td class="zh_CN"><a href="#none" class="active">[菜单 1] 被点击时 : 在点击的领域以 a.active的形式 做bold处理</a></td>
                    <td class="en_US"><a href="#none" class="active">(번역필요)</a></td>
                </tr>
                <tr class="gInlay enabled">
                    <td>[메뉴 1 상세] 메뉴 클릭시 .enabled 가 추가되며, 다른 메뉴의 상세 내용은 보이지 않는다.</td>
                    <td class="zh_CN">[菜单 1 详细] 点击菜单时会添加.enabled, 同时隐藏其他菜单的详细内容。</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td><a href="#none">[메뉴 2] 클릭 전</a></td>
                    <td class="zh_CN"><a href="#none">[菜单 2] 未点击</a></td>
                    <td class="en_US"><a href="#none">(번역필요)</a></td>
                </tr>
                <tr class="gInlay">
                    <td>[메뉴 2 상세] 메뉴 클릭 전에는 내용이 보이지 않는다.</td>
                    <td class="zh_CN">[菜单 2 详细] 未点击菜单，将不会显示内容。</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
            </tbody>
        </table>
    </div>
', 'javaCode' => '
    //-------------------- inlay --------------------//
    $(".eInlay a").click(function(e){
        //multi class가 있으면 true 없으면 false
        var flag = $(this).parents(".eInlay").hasClass("multi");
        if($(this).hasClass("active")){
            //active(텍스트강조) class가 있을때 active class를 삭제해주고 다음 tr 에 있는 enabled(tr 하위텍스트) class를 삭제.
            $(this).removeClass("active").parents("tr:first").next(".gInlay").removeClass("enabled");
        } else {
            if(flag){
                $(this).addClass("active").parents("tr:first").next(".gInlay").addClass("enabled");
            } else {
                //active(텍스트강조) class를 추가해주고 tr 이외에 형제 gInlay class a 태그를 찾아서 active(텍스트강조) class를 삭제.
                $(this).addClass("active").parents("tr:first").siblings("tr:not(.gInlay)").find("a").removeClass("active");
                //enabled(tr 하위텍스트) class 이외에 형제 gInlay class의 enabled(tr 하위텍스트) class를 삭제.
                $(this).parents("tr:first").next(".gInlay").addClass("enabled").siblings(".gInlay").removeClass("enabled");
            }
        }
        e.preventDefault();
    });
'), array(
'desc' => '
    <h3>eInlay + multi</h3>
    <ol>
        <li>클릭시 바로 아래의 tr을 활성화 시킨다.</li>
        <li>다른 메뉴클릭시 이미 열려진 활성화된 메뉴들을 숨기지 않고 모두 보여준다.</li>
        <li>활성화 되었을때 다시 클릭하면 하위 메뉴를 숨긴다.</li>
    </ol>
    <ol class="zh_CN">
        <li>点击即可激活下面tr。</li>
        <li>点击其他菜单时，被打开的激活菜单将会全部显示。</li>
        <li>在激活的状态下，再次点击将会隐藏子菜单。</li>
    </ol>
    <ol class="en_US">
        <li>When click, the tr that is right under is to be activated.</li>
        <li>When click the different menus, other menus that are already open are to be shown without closing</li>
        <li>Clicking when it is activated, the sub menus are to be closed.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="" id="inlayTest_2" class="eInlay multi">
            <caption>제목</caption>
            <colgroup>
                <col style="width:50%;" />
                <col style="width:50%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">한국어</th>
                    <th scope="col" class="zh_CN">중국어</th>
                    <th scope="col" class="en_US">English</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#none" class="active">[메뉴 1] 클릭 됨 : 클릭 영역 선택시 a.active로 클릭된 메뉴가 bold 된다.</a></td>
                    <td class="zh_CN"><a href="#none" class="active">[菜单 1] 被点击时 : 在点击的领域以 a.active的形式 做bold处理。</a></td>
                    <td class="en_US"><a href="#none">(번역필요)</a></td>
                </tr>
                <tr class="gInlay enabled">
                    <td>[메뉴 1 상세] 메뉴 클릭시 .enabled 가 추가되며, 다른 메뉴의 상세 내용은 보이지 않는다.</td>
                    <td class="zh_CN">[菜单 1 详细] 点击菜单时会添加.enabled, 同时隐藏其他菜单的详细内容。</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
                <tr>
                    <td><a href="#none">[메뉴 2] 클릭 전</a></td>
                    <td class="zh_CN"><a href="#none">[菜单 2] 未点击</a></td>
                    <td class="en_US"><a href="#none">(번역필요)</a></td>
                </tr>
                <tr class="gInlay">
                    <td>[메뉴 2 상세] 메뉴 클릭 전에는 내용이 보이지 않는다.</td>
                    <td class="zh_CN">[菜单 2 详细] 未点击菜单，将不会显示内容。</td>
                    <td class="en_US">(번역필요)</td>
                </tr>
            </tbody>
        </table>
    </div>
', 'javaCode' => '
    //-------------------- eInlay + multi --------------------//
    $(".eInlay a").click(function(e){
        //multi class가 있으면 true 없으면 false
        var flag = $(this).parents(".eInlay").hasClass("multi");
        if($(this).hasClass("active")){
            //active(텍스트강조) class가 있을때 active class를 삭제해주고 다음 tr 에 있는 enabled(tr 하위텍스트) class를 삭제.
            $(this).removeClass("active").parents("tr:first").next(".gInlay").removeClass("enabled");
        } else {
            if(flag){
                //active(텍스트강조) class를 추가해주고 첫번째 tr 다음 gInlay class에 enabled를 추가.
                $(this).addClass("active").parents("tr:first").next(".gInlay").addClass("enabled");
            } else {
                $(this).addClass("active").parents("tr:first").siblings("tr:not(.gInlay)").find("a").removeClass("active");
                $(this).parents("tr:first").next(".gInlay").addClass("enabled").siblings(".gInlay").removeClass("enabled");
            }
        }
        e.preventDefault();
    });
'), array(
'desc' => '
    <h3 class="inline">mOpen + eOpenOver</h3><a href="../include/layout.php?MODULE=open" target="_blank" class="btnNormal"><span>mOpen 메뉴로 이동</span></a>
    <ol>
        <li>mouseover시 메뉴레이어가 활성화 됨</li>
    </ol>
    <ol class="zh_CN">
        <li>mouseover时，Menu Layer将被激活。</li>
    </ol>
    <ol class="en_US">
        <li>The menu layer is to be activated when the cursor is on mouse-over.</li>
    </ol>
', 'html' => '
    <div class="mBoard">
        <table border="1" summary="">
            <caption>제목</caption>
            <colgroup>
                <col style="width:100%;" />
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">예시</th>
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
                                        <ul class="default">
                                            <li><a href="#none">예시</a></li>
                                            <li><a href="#none">예시</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#none">왼쪽 이미지 mouseover, 左图 mouseover</a></p>
                            <ul class="etc">
                                <li>예시</li>
                                <li>预览</li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
', 'javaCode' => '
    //-------------------- mOpen + eOpenOver --------------------//
    $("body").delegate(".mOpen .eOpenOver", "mouseenter", function(){
        var findTarget = $(this).siblings(".open");
        //find(gGoods)
        var flag = $(this).attr("find");
        //open 클래스 요소를 활성화.
        findTarget.show();
        if(flag){
            //flag 있을경우 부모 노드 zindx 값 1 설정.
            $(this).parents("."+ flag +":first").css({"zIndex":1});
        }
    });
    $("body").delegate(".mOpen", "mouseleave", function(){
        var findClose = $(this).find(".eClose");
        if(findClose.length <= 0){
            var findTarget = $(this).find(".open");
            //find(gGoods)
            var flag = $(this).find(".eOpenOver").attr("find");
            //open 클래스 요소를 비활성화.
            findTarget.hide();
            if(flag){
                //flag 있을경우 부모 노드 zindx 값 0 설정.
                $(this).parents("."+ flag +":first").css({"zIndex":0});
            }
        }
    });
'), array(
'desc' => '
    <h3 class="inline">mOpen + eOpenClick</h3><a href="../include/layout.php?MODULE=open" target="_blank" class="btnNormal"><span>mOpen 메뉴로 이동</span></a>
    <ol>
        <li>클릭시 메뉴레이어가 활성화 됨</li>
    </ol>
    <ol class="zh_CN">
        <li>点击即可激活菜单Layer。</li>
    </ol>
    <ol class="en_US">
        <li>When click, the menu layer is to be activated.</li>
    </ol>
', 'html' => '
    <div class="mCtrl typeHeader">
        <div class="gLeft">
            <div class="mOpen">
                <a href="#ordOpen1" class="btnNormal eOpenClick"><span>click <em class="icoLayer"></em></span></a>
                <div id="ordOpen1" class="open" style="width:115px;">
                    <div class="wrap">
                        <ul class="print">
                            <li><a href="#none" class="order">예시</a></li>
                            <li><a href="#none" class="screen">예시</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
', 'javaCode' => '
    //-------------------- mOpen + eOpenClick --------------------//
    $("body").delegate(".mOpen .eOpenClick", "click", function(e){
        var findTarget = $($(this).attr("href"));
        findTarget.toggle();
        e.preventDefault();
    });
    $("body").delegate(".mOpen", "mouseleave", function(){
        var findClose = $(this).find(".eClose");
        if(findClose.length <= 0){
            var findTarget = $(this).find(".open");
            //find(gGoods)
            var flag = $(this).find(".eOpenOver").attr("find");
            //open 클래스 요소를 비활성화
            findTarget.hide();
            if(flag){
                //flag 있을경우 부모 노드 zindx 값 0 설정.
                $(this).parents("."+ flag +":first").css({"zIndex":0});
            }
        }
    });
')
);
?>