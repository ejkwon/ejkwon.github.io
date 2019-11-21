/**
  * SUIO Markup Check v.20131216
*/

$.fn.debug = function(opts){
    // default options
    var defaultOpts = {
        tools : true,       // 고정 디버그 정보
        tableAlign : true,  // table, tbody, td 정렬
        tableCheck : true,  // 테이블 체크리스트
        qaId : true,        // QA id
        gLabel : true,      // .mForm > .gLabel
        text : true,        // .txtEm, .txtWarn, .txtNormal
        label : true,       // label에 2개이상의 폼태그 자식여부
        keyword : true,     // 잘못된 키워드
        popup : true,       // 새창열림
        btnIcon : true,     // 버튼 > .icoLink
        btnLink : true,     // .btnLink > 대괄호([])
        ctrl : true,        // .mCtrl > .icoPlus(플러스 아이콘 사용불가)
        help : true,        // 도움말 복사
        li : true,          // ul > li, ol > li 자식요소 확인
        editor : true,      // 에디터 이미지 부모 class
        required : true,    // table > .required
        optionArea : true,  // .optionArea > .mOption 기본열림
        placeholder : true,  // placeholder 넓이 %지정
        report : true       // report 결과
    }
    // override options
    for(key in opts){
        defaultOpts[key] = opts[key];
    }
    // css check
    var headCss = $('head link');
    var cUrl = document.location.pathname;
    var suioFind = 0;
    headCss.each(function(){
        var href = $(this).attr('href').split('/');
        if(href[href.length-1] == 'module.css'){
            suioFind++;
        }
    });
    if(suioFind <= 0){
        alert('module.css로 제작되지 않았습니다.');
        return false
    }

    function cssWarn(val) {
        var warn = '<div class="cssWarn" style="display:none;">';
        warn+= '<p>';
        warn+= val + '.css 로 제작되지 않았습니다.';
        warn+= '</p></div>'
        $('body').append(warn);
        $('.cssWarn').slideToggle().click(function(){
            $(this).remove();
        });
    }

    if(!cUrl.indexOf('/smartAdmin/crm/') && !$(headCss + '[href*=/ec/crm.css]').length) cssWarn('crm'); // crm
    if(!cUrl.indexOf('/smartAdmin/shop/') && !$(headCss + '[href*=/ec/shop.css]').length) cssWarn('shop'); // 상점관리
    if(!cUrl.indexOf('/smartAdmin/product') && !$(headCss + '[href*=/ec/product.css]').length) cssWarn('product'); // 상품관리
    if(!cUrl.indexOf('/smartAdmin/order') && !$(headCss + '[href*=/ec/order.css]').length) cssWarn('order'); // 주문관리
    if(!cUrl.indexOf('/smartAdmin/calculate') && !$(headCss + '[href*=/ec/calculate.css]').length) cssWarn('calculate'); // 정산관리
    if(!cUrl.indexOf('/smartAdmin/member') && cUrl.indexOf('/sms/') < 0 && !$(headCss + '[href*=/ec/member.css]').length) cssWarn('member'); // 고객관리
    // if(!cUrl.indexOf('/smartAdmin/market') && cUrl.indexOf('/soho/') < 0 && !$(headCss + '[href*=/ec/market.css]').length) cssWarn('market'); // 마켓통합관리
    if(!cUrl.indexOf('/smartAdmin/market/global') && cUrl.indexOf('/soho/') < 0 && !$(headCss + '[href*=/ec/market.css]').length) cssWarn('market'); // 마켓통합관리 해외마켓
    if(!cUrl.indexOf('/smartAdmin/market/soho') && !$(headCss + '[href*=/ec/soho.css]').length) cssWarn('soho'); // 마켓통합관리>소호
    if(!cUrl.indexOf('/smartAdmin/promotion/benefit') && !$(headCss + '[href*=/ec/promotion.css]').length) cssWarn('promotion'); // 프로모션 > 고객혜택관리
    if(!cUrl.indexOf('/smartAdmin/promotion/memberinfo') && !$(headCss + '[href*=/ec/promotion.css]').length) cssWarn('promotion'); // 프로모션 > 회원정보 수정 이벤트
    if(!cUrl.indexOf('/smartAdmin/promotion/attend') && !$(headCss + '[href*=/ec/promotion.css]').length) cssWarn('promotion'); // 프로모션 > 출석체크 이벤트
    if(!cUrl.indexOf('/smartAdmin/promotion/sns') && !$(headCss + '[href*=/ec/promotion.css]').length) cssWarn('promotion'); // 프로모션 > SNS 관리
    if(!cUrl.indexOf('/smartAdmin/promotion/coupon') && !$(headCss + '[href*=/ec/coupon.css]').length) cssWarn('coupon'); // 쿠폰
    if(!cUrl.indexOf('/smartAdmin/ftp') && !$(headCss + '[href*=/ec/ftp.css]').length) cssWarn('ftp'); // FTP
    if(!cUrl.indexOf('/smartAdmin/optional/operate') && !$(headCss + '[href*=/ec/operation.css]').length) cssWarn('operation'); // 부가서비스>운영서비스
    if(!cUrl.indexOf('/smartAdmin/optional/buying') && !$(headCss + '[href*=/ec/buying.css]').length) cssWarn('buying'); // 부가서비스>구매대행
    if(!cUrl.indexOf('/smartAdmin/optional/alliance') && !$(headCss + '[href*=/ec/alliance.css]').length) cssWarn('alliance'); // 부가서비스>제휴부가서비스
    if(!cUrl.indexOf('/smartAdmin/optional/outsourcing') && !$(headCss + '[href*=/ec/outsourcing.css]').length) cssWarn('outsourcing'); // 부가서비스>아웃소싱
    if(!cUrl.indexOf('/smartAdmin/optional/apparel') && !$(headCss + '[href*=/ec/outsourcing.css]').length) cssWarn('outsourcing'); // 부가서비스>의류제작
    if(!cUrl.indexOf('/smartAdmin/optional/global') && !$(headCss + '[href*=/ec/global.css]').length) cssWarn('global'); // 부가서비스>해외서비스

    //SCM
    if(!cUrl.indexOf('/scm/Dhub/') && cUrl.indexOf('/scm/Dhub/admin') && !$(headCss + '[href*=/scm/dhub/dhub.css]').length) cssWarn('dhub'); // SCM dHub
    if(!cUrl.indexOf('/scm/Dhub/admin') && !$(headCss + '[href*=/scm/dhub/admin.css]').length) cssWarn('admin'); // SCM dHub admin

    // EC admin check - YUIDEV-779 프레임셋 제거 작업후, debug.js는 last에 위치하지 않으므로 삭제
//    var debugJs = $('script:last');
//    var debugJsSrc = debugJs.attr('src');
//    if(debugJsSrc.split('?')[1]){
//        var debugUrl = 'http://fe.cafe24test.com/';
//        var admin = true;
//    } else {
//        var debugUrl = '';
//    }
    // report struct
    $('body').append('<div id="dReport" />');
    $('#dReport').append('<h1>디버그 결과</h1>');
    $('#dReport').append('<ul />');
    $('#dReport').append('<button type="button" class="close">닫기</button>');

    // debug
    var debug = {
        init : function(){
            // debug.css import
            $('body').append('<link rel="stylesheet" type="text/css" href="/guide/ui/debug.css" media="all" />');
            // calling dynamic function
            for(key in opts){
                if(opts[key] == true && key != 'tools' && key != 'report'){
                    this[key].apply(this);
                }
            }
            // calling toggle tool
            debug.tools();
            // calling report ctrl
            debug.reportCtrl();
        },
        tableAlign : function(){
            var tbodyList = $('.mBoard tbody:not(.empty)');
            tbodyList.each(function(){
                var tbody = $(this);
                // tbody 정렬 확인
                var tbodyInfo = tbodyAlign(tbody);
                // td 정렬 갯수
                var tr = $(this).find('> tr:first-child');
                var td = tr.find('> td');
                var tdInfo = tdAlign(tr, tbodyInfo);
                // 가장많은 정렬 확인
                if(td.length > 0){
                    alignCalc(tdInfo, tbodyInfo, tbody);
                }
            });
            // tbody 정렬 확인
            function tbodyAlign(target){
                var propClass = target.attr('class').split(' ');
                var alignCount = 0;
                var tbodyClass;
                for(var i=0; i<propClass.length; i++){
                    var align = propClass[i];
                    if(align == 'left'){
                        alignCount ++;
                        tbodyClass = 'left';
                    } else if(align == 'center'){
                        alignCount ++;
                        tbodyClass = 'center';
                    } else if(align == 'right'){
                        alignCount ++;
                        tbodyClass = 'right';
                    }
                }
                // tbody 정렬 2개 이상여부
                if(alignCount > 1){
                    target.parents('table:first').addClass('overlapTbodyAlign').before('<p class="overlapMsg">tbody 정렬이 2개 이상 사용되었습니다.</p>');
                }
                // tbody에 선언된 class 반환
                return tbodyClass;
            }
            // td 정렬 갯수
            function tdAlign(target, tbodyInfo){
                var td = target.find('td');
                var max = td.length;
                var left = 0;
                var center = 0;
                var right = 0;
                var leftDefault = 0;
                td.each(function(){
                    var propClass = $(this).attr('class').split(' ');
                    var alignCount = 0;
                    var tbodyClass;
                    for(var i=0; i<propClass.length; i++){
                        var align = propClass[i];
                        if(align == 'left'){
                            left ++;
                        } else if(align == 'center'){
                            center ++;
                        } else if (align == 'right'){
                            right ++;
                        }
                    }
                });
                leftDefault = left;
                // tbody class와 비교, 각 정렬별 갯수 지정
                if(tbodyInfo == 'left'){
                    left = max - (center + right);
                } else if(tbodyInfo == 'center'){
                    center = max - (left + right);
                } else if(tbodyInfo == 'right'){
                    right = max - (left + center);
                } else {
                    left = max - (center + right);
                }

                // td정렬갯수 반환(왼쪽, 가운데, 오른쪽, td총 갯수);
                var resultArray = [left,center,right,max,leftDefault];
                return resultArray;
            }
            // 가장많은 정렬 확인
            function alignCalc(tdInfo, tbodyInfo, tbody){
                var manyIndex = 0;
                var manyIndexVal = 0;
                var overlap = 0;
                // tdInfo.length-2 : 배열중 정렬에 해당하는값 반복(0~2)
                for(var i=0; i<tdInfo.length-2; i++){
                    var val = tdInfo[i];
                    if(manyIndexVal == val){
                        overlap++;
                    }
                    if(manyIndexVal < val){
                        manyIndex = i;
                        manyIndexVal = val;
                    }
                }
                var manyAlign;
                if(manyIndex == 0){
                    manyAlign = 'left';
                } else if(manyIndex == 1){
                    manyAlign = 'center';
                } else if(manyIndex == 2){
                    manyAlign = 'right';
                }
                // 가장많은 정렬 class추가
                if(manyAlign != tbodyInfo && overlap == 0 && tdInfo[3]> 2 && tbodyInfo != undefined){
                    /*
                        @조건
                        - 가장많은 정렬(manyAlign)과 tbody에 지정된 정렬(tbodyInfo)이 다른경우
                        - 중첩횟수(overlap)가 0 일때
                        - td의 갯수(tdInfo[3])가 3개 이상일때
                        - tbody에 지정된 정렬(tbodyInfo)이 left, right, center가 존재하면
                    */
                    tbody.parents('table:first').addClass('manyAlign').before('<p class="manyAlignMsg">tbody에 가장 많은 정렬을 class('+ manyAlign +') 사용하세요.</p>');
                }
                // tbody에 class없이 td에만 정렬
                if(tbodyInfo == undefined){
                    /*
                        @조건
                        - 중첩횟수(overlap)가 1이상
                        - 가장 많은 정렬값(manyIndexVal)이 1이상
                        - tbody에 지정된 정렬(tbodyInfo)이 left, right, center가 존재하지 않으면
                    */
                    var td = tbody.find(' >tr:first-child > td');
                    var tdLength = td.size();
                    var tdLengthCheck = 0;
                    td.each(function(){
                        var propClass = $(this).attr('class').split(' ');
                        var alignCount = 0;
                        for(var i=0; i<propClass.length; i++){
                            var align = propClass[i];
                            if(align == 'left'){
                                tdLengthCheck++;
                            } else if(align == 'center'){
                                tdLengthCheck++;
                            } else if(align == 'right'){
                                tdLengthCheck++;
                            }
                        }
                    });
                    if(tdLength == tdLengthCheck){
                        tbody.parents('table:first').addClass('onlyAlignMsg').before('<p class="tdOnlyAlignMsg">td에 사용된 class 중 가장 많은 정렬 중 하나를 tbody에 사용하세요.</p>');
                    }
                }
            }
        },
        tableCheck : function(){
            var count=0;
            $('.allChk').each(function(){
                var findBoard = $(this).parents('.mBoard:first'),
                    findTbody = findBoard.find('> table > tbody:not(.empty)'),
                    figureLength = findTbody.length;
                if(!findBoard.hasClass('typeHead')){
                    if(figureLength > 1){
                        if(!$(this).parents('table:first').hasClass('eChkBody')){
                            findBoard.css({'position':'relative'}).append('<div class="dTableWrap"><span class="dTableMsg">&lt;table class="eChkBody"&gt;를 넣으세요</span></div>');
                            count++;
                        }
                    } else {
                        var findTable = findBoard.find('> *');
                        if(findTable[0].tagName == 'FORM') {
                            findTable = findTable.find('>table');
                        } else {
                            findTable = findTable;
                        }
                        if(!findTable.hasClass('eChkTr') && !findTable.hasClass('eChkColor')){
                            findBoard.css({'position':'relative'}).append('<div class="dTableWrap"><span class="dTableMsg">&lt;table class="eChkTr"&gt;혹은, &lt;table class="eChkColor"&gt;를 넣으세요</span></div>');
                            count++;
                        }
                    }
                }
            });
            $('table[class*=eChk]').each(function(){
               if(!$(this).parents('.mBoard:first').hasClass('typeBody')){
                   if($(this).find('.allChk').length <= 0){
                        $(this).parents('.mBoard:first').css({'position':'relative'}).append('<div class="dTableWrap"><span class="dTableMsg">표안에 checkbox가 없습니다. &lt;table class="eChkXX"&gt; 를 제거하세요</span></div>');
                        count++;
                   }
               }
            });
            debug.report('체크박스 테이블', count);
        },
        qaId : function(){
            if(!cUrl.indexOf('/smartAdmin')){				//스마트 어드민일때만 section ID 체크
				var count=0;
				var qaSection = $('.section');
				var qaStyleText = $('style').text();
				var qaIdArray = [];
				if(qaSection.length>0){
					qaSection.each(function(){
						/*
							// 주석과 일치여부
							var qaId = $(this).attr('id');
							var pattern = new RegExp('#' + qaId,'gi');
							var flag = pattern.test(qaStyleText);
							if(flag == false){
								$(this).addClass('qaUndefined');
							}
						*/
						// QA_로 시작되는지 여부
						var qaId = $(this).attr('id');
						var pattern = new RegExp('^QA_','gi');
						var flag = pattern.test(qaId);
						if(flag == false && qaId ){
							$(this).addClass('qaId');
							count++;
						}
						// 아이디 할당여부
						if(!qaId){
							$(this).addClass('qaAssign');
							count++;
						}
						// QA 아이디 리스트
						if(qaId != ''){
							qaIdArray.push(qaId);
						}
					});
					// QA 아이디 보이기
					if(qaIdArray.length > 0){
						$('body').append('<div id="qaIdViewer"><strong>QA ID List</strong><ul></ul><button type="button" class="eClose">닫기</button></div>');
						for(var i=0; i<qaIdArray.length; i++){
							$('#qaIdViewer ul').append('<li><a href="#'+ qaIdArray[i] +'">'+ qaIdArray[i] +'</a></li>');
						};
					}
					$('#qaIdViewer .eClose').click(function(){
						$('#qaIdViewToggle').trigger('click');
					});
				}
				debug.report('section QA ID', count);
			}
        },
        gLabel : function(){
            var count=0;
            $('div.mForm').each(function(){
                var gLabel = $(this).find('> .gLabel').length;
                var addForm = $(this).find('.addForm').length;
                if(gLabel > 0 && addForm == 0) {
                    $(this).addClass('divMform');
                    count++;
                }
            });
            debug.report('.mForm > .gLabel', count);
        },
        text : function(){
            var count=0;
            var txtCheckArray = ['txtWarn', 'txtEm', 'txtNormal'];
            for(var i=0; i<txtCheckArray.length; i++){
                var target = $('.' + txtCheckArray[i]);
                target.each(function(){
                    var strong = $(this).find('strong').length;
                    var hasText = this.childNodes.length;
                    if(strong > 0 && hasText == 1){
                        $(this).before('<span class="txtCheckMsg"><span> &lt;strong class="'+ txtCheckArray[i] +'"&gt;</span></span>');
                        count++;
                    }
                });
            }
            debug.report('txtWarn, txtEm, txtNormal', count);
        },
        label : function(){
            var count=0;
            $('label').each(function(){
                var inputLen = $(this).find('input').length;
                var selectLen = $(this).find('select').length;
                var areaLen = $(this).find('textarea').length;
                var total = inputLen + selectLen + areaLen;
                if(total > 1){
                    $(this).addClass('txtOverflowForm');
                    count++;
                }
            });
            debug.report('Label > 다수의 폼태그', count);
        },
        keyword : function(){
            var count=0;
            $('body').append('<script id="keywordJs" type="text/javascript" src="/suio/js/jquery.highlight-4.js"></script>');
            var dKeyArr = [
                'E-mail','e-mail','email','Email',
                'HS 코드','HS CODE','HS Code','HSCODE','HSCode','HS code',
                '휴대폰','핸드폰',
                '유선전화',
                '어드민','상점','멀티샵','프론트','몰어드민','몰 어드민','샵',
                '스킨','카테고리','상품목록','상품 목록'
            ];
            for(var i=0; i<dKeyArr.length; i++){
                $('body').highlight(dKeyArr[i]);
                count++;
            }
            debug.report('keyword', count);
        },
        popup : function(){
            var count=0;
            var regNewMsg = new RegExp("새창 열림");
            $('a').each(function(){
                var propTarget = $(this).attr('target'),
                    propTitle = $(this).attr('title');
                // 타겟 없고, 타이틀만 있을때
                if(!propTarget && propTitle.match(regNewMsg)){
                    $(this).css({'position': 'relative'});
                    $(this).append('<em class="dBlankA">&lt;target="_blank"&gt; 누락</em>');
                    count++;
                }
                // 타겟만 있을때
                if(propTarget && !propTitle){
                    $(this).css({'position': 'relative'});
                    $(this).append('<em class="dBlankA">&lt;title="새창 열림"&gt; 누락</em>');
                    count++;
                }
                // title이 오타일때
                if(propTarget == '_blank' && propTitle && !propTitle.match(regNewMsg)){
                    $(this).css({'position': 'relative'});
                    $(this).append('<em class="dBlankA">&lt;title="새창 열림"&gt;의 띄어쓰기/포함여부 확인</em>');
                    count++;
                }
            });
            debug.report('버튼 새창열기', count);
        },
        btnIcon : function(){
            var count=0;
            function blankIcon(target){
                var result = target.find('.icoBul').length;
                if(result == 0){
                    target.append('<em class="dBlankA">target="_blank" 가 사용된 버튼은 &lt;em class="icoBul"&gt;&lt;/em&gt; 아이콘 추가</em>');
                }
            }
            $('.btnNormal').each(function(){
                if($(this).attr('target') == '_blank'){
                    blankIcon($(this));
                }
            });
            $('.btnCtrl').each(function(){
                if($(this).attr('target') == '_blank'){
                    blankIcon($(this));
                }
            });
            $('.icoLink').each(function(){
                var propTarget = $(this).parents('a:first').attr('target'),
                    propTitle = $(this).parents('a:first').attr('title');
                if(!propTitle && !propTarget){
                    $(this).parents('a:first').append('<em class="dTcoLink">&lt;target="_blank"&gt; &lt;title="새창 열림"&gt; 누락</em>');
                    count++;
                }
            });
            debug.report('.btnIcon', count);
        },
        btnLink : function(){
            var count=0;
            $('.btnLink > *').each(function(){
                var text = $(this).text();
                if(this.tagName != 'SPAN' && this.tagName != 'STRONG'){
                    $(this).css({'position':'relative'}).append('<em class="dBtnWrap">&lt;span&gt; or &lt;strong&gt; 누락</em>');
                    count++;
                } else {
                    if(text.indexOf("[") == -1){
                        $(this).css({'position':'relative'}).append('<em class="dBtnWrap">[대괄호] 누락</em>');
                        count++;
                    }
                }
            });
            debug.report('.btnLink', count);
        },
        ctrl : function(){
            var count=0;
            $('.mCtrl .btnCtrl').each(function(){
                if($(this).find('.icoPlus').length > 0){
                    $(this).append('<em class="dCtrlPlus">아이콘 제거</em>');
                    count++;
                }
            });
            debug.report('.mCtrl > .icoPlus', count);
        },
        help : function(){
            //if(!admin){
                $('body').append('<script id="keywordJs" type="text/javascript" src="/suio/js/ZeroClipboard.js"></script>');
                function dSetHelpLayer(target){
                    var findLayer = target,
                        propWinWidth = $(window).width(),
                        propWinHeight = $(window).height(),
                        propWidth = findLayer.outerWidth(),
                        propHeight = findLayer.outerHeight(),
                        propWinScroll = $(window).scrollTop();
                    if(propWinWidth < propWidth){
                        findLayer.css({'left':0, 'marginLeft':0});
                    } else {
                        var propLeft = propWidth/2;
                        findLayer.css({'left':'50%', 'marginLeft':'-'+ propLeft +'px'});
                    }
                    if(propWinHeight < propHeight){
                        window.scrollTo(0,0);
                        findLayer.css({'top':0});
                    } else {
                        var propTop = (propWinHeight/2) - (propHeight/2) + propWinScroll;
                        findLayer.css({'top':propTop});
                    }
                    findLayer.show();
                }
                if($('.mHelp').length > 0){
                    var helpClip = [];
                    $('.mHelp').each(function(i){
                        var helps = $(this);
                        var attrClass = helps.attr('class');
                        helps.before('<div class="copyHelpHtml"><span class="btn"><button type="button" id="btnCopySource_' + i +'">도움말 HTML 복사</button"></span></div>');
                        var clone = helps.wrap('<div class="'+ attrClass +'"/>').parent().clone().html();
                        helps.unwrap('<div class="'+ attrClass +'"/>');
                        var helpClip = new ZeroClipboard.Client();
                        helpClip.setText(clone);
                        helpClip.glue('btnCopySource_' + i );
                        helpClip.addEventListener('complete', function (client) {
                            if($('#dHelpCopy').length > 0){
                                $('#dHelpCopy').remove();
                            }
                            $('body').append('<div id="dHelpCopy"><p>도움말 모듈(HTML)이 <strong>클립보드에 복사</strong>되었습니다.</p></div>');
                            var layer = $('#dHelpCopy');
                            dSetHelpLayer(layer);
                            layer.fadeOut(2000, function(){
                                layer.remove();
                            });
                        });
                    });
                }
            //}
        },
        li : function(){
            var count=0;
            var li_check_array = [ $('ul.txtInfo'), $('.mHelp ul'), $('.mHelp ol')];
            for(var i=0; i<li_check_array.length; i++){
                li_check_array[i].each(function(){
                    var findChild = $(this).find('> *').length;
                    if(findChild == 1 && $(this).find('> *').find('*').length == 0){
                        $(this).css({'position':'relative'}).append('<em class="dMlist">한줄은 P태그사용</em>');
                        count++;
                    }
                });
            }
            debug.report('자식이없는 li가 1개', count);
        },
        editor : function(){
            var count=0;
            var editorArray = ['@editor\.gif','@editor_mini\.gif'];
            $('img').each(function(){
                var propSrc = $(this).attr('src');
                for(var i=0; i<editorArray.length; i++){
                    var pattern = new RegExp(editorArray[i],'gi');
                    var flag = pattern.test(propSrc);
                    if(flag){
                        var parent = $(this).parent();
                        if(!parent.hasClass('gEditor')){
                            parent.addClass('editorMsg');
                            count++;
                        }
                    }
                }
            });
            debug.report('에디터 class', count);
        },
        required : function(){
            var count=0;
            $('table .icoRequired').each(function(){
                var require = $(this);
                var tr = require.parents('tr:first');
                var td = tr.find('>td');
                var radioCount = td.find('input[type="radio"]').length;
                if(radioCount > 0){
                    require.addClass('requiredMsg');
                    count++;
                }
            });
            debug.report('.icoRequired', count);
        },
        optionArea : function(){
            $('.optionArea .mOption').css({'display':'block'});
            $('.optionArea .eOrdToogle').text('상세검색 닫기');
        },
        placeholder : function(){
            var count=0;
            $('*[placeholder]').each(function(){
                var width = $(this).attr('style');
                if ( typeof(width) != 'undefined') width = width.replace(' ', '');
                var pattern = new RegExp('[0-9]%','gi');
                if(pattern.test(width) == true){
                    $(this).wrap('<span class="placeholderPercent" />');
                    count++;
                }
                var fPlaceholder = $(this).attr('placeholder');
                if(typeof(fPlaceholder) == 'undefined' || fPlaceholder.indexOf('예시)') == -1){
                    $(this).css("background-color","#efcb39");
                    $(this).val('[placeholder="예시) ~~"] 실제 예시 필요(기획자와 확인해주세요.)');
                }
            });
            debug.report('placeholder width %지정', count);
        },
        tools : function(){
            $('body').append('<div id="debugArea"><h1>Debug <a href="#dReport"></a></h1></div><a href="/guide/module.html" class="btnSUIO" target="_blank">Guide</a>');
            $('#debugArea h1').click(function(){
                $(this).parent().toggleClass('hide');
            });
            var debugArea = $('#debugArea');
            $.debugArea =  function(parm){
                var buttonId = parm.buttonId;
                var target = parm.target;
                var swapClass = parm.swapClass;
                var msgT = parm.msgT;
                var msgF = parm.msgF;
                var status = parm.status;
                debugArea.append('<button id="'+ buttonId +'" type="button">'+ msgT +'</button>');
                var button = $('#'+buttonId);
                // body only
                function bodyOnly(flag){
                    var body = $('body');
                    var fixWidth = body.css('minWidth');
                    if(flag == true){
                        body.css({'width':fixWidth});
                    } else {
                        body.css({'width':'auto'});
                    }
                }
                // swap class
                function swapAction(className, flag){
                    if(swapClass && flag == true){
                        target.addClass(swapClass);
                    } else {
                        target.removeClass(swapClass);
                    }
                }
               // toggle
                $(button).toggle(function(){
                    button.html(msgF);
                    // body only
                    if(buttonId == 'dBodyWidth'){
                        bodyOnly(true);
                    }else if(buttonId == 'ecJapanToggle'){
                        debug.ecLangCheck(true);
                    // remainder
                    } else {
                        if(msgF.indexOf('Hide') == -1) { // 디폴트가 Hide인 경우
                            swapAction(swapClass, false);
                        } else {
                            swapAction(swapClass, true);
                        }
                        //팝업 size 영역
                        if(swapClass=="sizeBorder"){
                            var size = $("#popup").attr("size");
                            var popupWidth = size.split(",")[0];
                            var allHeight = document.body.clientHeight;
                            if(allHeight > popupHeight) {
                                popupWidth = popupWidth-17;
                            }
                            $("#popup").css({ width:popupWidth, height:popupHeight-9 });
                        }
                    }
                }, function(){
                    button.html(msgT);
                    // body only
                    if(buttonId == 'dBodyWidth'){
                        bodyOnly(false);
                    }else if(buttonId == 'ecJapanToggle'){
                        debug.ecLangCheck(false);
                    // remainder
                    } else {
                        if(msgT.indexOf('Show') == -1) { // 디폴트가 Hide인 경우
                            swapAction(swapClass, true);
                        } else {
                            swapAction(swapClass, false);
                        }
                        if(swapClass=="sizeBorder") $("#popup").css({ width:"", height:""}); //팝업 size 영역
                    }
                });
            }
            // body
            if($('body').attr('id') != 'popup'){
                $.debugArea({
                    buttonId : 'dBodyWidth',
                    target : $('body'),
                    msgT : 'Layout Fix',
                    msgF : 'Layout Flexible'
                });
            }
            // addForm
            if($('.addForm').length > 0){
                $.debugArea({
                    buttonId : 'addFormToggle',
                    target : $('.addForm'),
                    swapClass : 'show',
                    msgT : 'Show : addForm',
                    msgF : 'Hide : addForm',
                    status : false
                });
               $('#addFormToggle').click();
            }
            // caption
            if($('caption').length > 0){
                $.debugArea({
                    buttonId : 'captionToggle',
                    target : $('caption'),
                    swapClass : 'dCaption',
                    msgT : 'Show : Caption ',
                    msgF : 'Hide : Caption'
                });
            }
            // scroll
            if($('.mBoard.gScroll').length > 0){
                $.debugArea({
                    buttonId : 'gScrollToggle',
                    target : $('.mBoard.gScroll'),
                    swapClass : 'gScrollCheck',
                    msgT : 'Show : gScroll ',
                    msgF : 'Hide : gScroll',
                    status : false
                });
            }
            // QA id할당 안됨
            if($('.qaAssign').length > 0){
                $.debugArea({
                    target : $('.qaAssign'),
                    buttonId : 'qaAssignToggle',
                    msgT : 'Show : QA ID 미지정',
                    msgF : 'Hide : QA ID 미지정',
                    swapClass : 'show',
                    status : false
                });
            }
            // QA id 시작여부
            if($('.qaId').length > 0){
                $.debugArea({
                    target : $('.qaId'),
                    buttonId : 'qaIdToggle',
                    swapClass : 'show',
                    msgT : 'Show : QA ID 시작확인',
                    msgF : 'Hide : QA ID 시작확인',
                    status : false
                });
            }
            // QA id 보기 토글
            if($('#qaIdViewer').length > 0){
                $.debugArea({
                    target : $('#qaIdViewer'),
                    buttonId : 'qaIdViewToggle',
                    swapClass : 'show',
                    msgT : 'Show : QA ID List',
                    msgF : 'Hide : QA ID List',
                    status : false
                });
            }

            // 레이어팝업 호출
            var loadingChk = ''; // Check Loading 버튼 확인
            if($('.eLayerClick').length == 0 && $('.eModal').length == 1){
                if($('.eModal').hasClass('loading') == true){
                    loadingChk = true;
                }
            }
            if($('.eLayerClick').length > 0 || $('.eModal').length > 0){
                if(loadingChk != true){
                    $.debugArea({
                        buttonId : 'layerToggle',
                        target : $('.eLayerClick, .eModal:not(.loading)'),
                        swapClass : 'show',
                        msgT : 'Hide : Layer Button',
                        msgF : 'Show : Layer Button',
                        status : false
                    });
                    $('#layerToggle').click();
                }
            }

            // case
            if($('[uidev-case]').length > 0){
                $("html").dblclick(function(e){
                    $('[uidev-case]').toggleClass('uidev-case-text');
                    $('#caseToggle').click();
                    e.preventDefault();
                });
                $.debugArea({
                    buttonId : 'caseToggle',
                    target : $('[uidev-case]'),
                    swapClass : 'uidev-case-text',
                    msgT : 'Hide : Case Text',
                    msgF : 'Show : Case Text',
                    status : false
                });
               $('#caseToggle').click();
            }
            // report toggle
            $('#debugArea h1 a').click(function(e){
                $($(this).attr('hash')).toggle();
                e.preventDefault();
            });
            //팝업 size 영역
            if($("#popup").attr("size") != undefined){
                $.debugArea({
                    target : $('#popup'),
                    buttonId : 'popupSizeToggle',
                    msgT : 'Show : 팝업 size <strong style="color:#ff003b;">['+$("#popup").attr("size")+']</strong>',
                    msgF : 'Hide : 팝업 size <strong style="color:#ff003b;">['+$("#popup").attr("size")+']</strong>',
                    swapClass : 'sizeBorder',
                    status : false
                });
            }
            // button length 0 check
            if(debugArea.find('button').length <=0){
                debugArea.remove();
            }

            //ec-lang
            var figureEcLen = $("[ec-lang]").length,
                figureAdd = 10;

            $('img').each(function(i){
                var propScr = $(this).attr('src'),
                    figureIndexOf = propScr.indexOf("/ko_KR/");
                if(figureIndexOf >= 0){
                    figureAdd++;
                }
            });

            if(figureEcLen > 0 || figureAdd > 0){
                $("html").dblclick(function(e){
                    $('[ec-lang]').toggleClass('ec-lang');
                    $('#ecJapanToggle').click();
                    e.preventDefault();
                });

                $.debugArea({
                    target : $('[ec-lang]'),
                    buttonId : 'ecJapanToggle',
                    msgT : 'Show : EC Japan',
                    msgF : 'Hide : EC Japan',
                    swapClass : 'ec-lang',
                    status : false
                });
            }

        },
        report : function(title, count){
            if(count > 0){
                $('#dReport ul').append('<li>'+ title +'<strong>('+ count +')</strong></li>');
            }
        },
        reportCtrl : function(){
            var count = $('#dReport li').size();
            if($('#dReport li').size() > 0){
                $('#debugArea h1 a').text('('+ count +')');
                $('#debugArea h1 a').attr('title', '총 '+count+'개의 디버그가 발생');
            }
            $('#dReport .close').click(function(){
                $('#dReport').hide();
            });
        },
        ecLangCheck : function(flag){
            var strLang = "ko";
            if(flag){
                strLang = "ja";
            }
            $('html').attr({'xml:lang':strLang, 'lang':strLang});

            $('[ec-lang]').each(function(i){
                if(flag){
                    debug.ecLangCreate($(this), true);
                }else{
                    $('.ecjapan').remove();
                    var flagClass = $(this).hasClass("afterChange");
                    if(flagClass){
                        $(this).removeClass('afterChange');
                    }
                }
            });

            $('img').each(function(i){
                var propScr = $(this).attr('src');
                var strlang = "/ko_KR/";
                if(!flag){
                    strlang = "/ja_JP/";
                }
                var figureIndexOf = propScr.indexOf(strlang);
                if(figureIndexOf >= 0){
                    var strSrc = "";
                    if(flag){
                        strSrc = propScr.replace('ko_KR', 'ja_JP');
                    }else{
                        strSrc = propScr.replace('ja_JP', 'ko_KR');
                    }
                    $(this).attr("src", strSrc);
                }
            });
        },
        ecLangCreate : function (findTarget, flag) {
            var strTag = '<div class="ecjapan">EC Japan</div>',
                arrTag = ["SELECT", "IMG"],
                tagFlag = true;

            for(var j = 0; j<arrTag.length; j++){
                if(findTarget.attr("tagName") == arrTag[j]){
                    tagFlag = false;
                    findTarget.before(strTag);
                }
            }
            if(tagFlag){
                findTarget.prepend(strTag);
                findTarget.find('.ecjapan').addClass('sort');
            }

            var flagClass = findTarget.hasClass("uidev-case-text");
            if(flagClass){
                findTarget.addClass('afterChange');
            }
        }
    }
    debug.init();
}

$(function(){
    // fText 클래스에 style="width" 누락한 경우 배경색 지정
    $(".fText").each(function(){
        var fStyle = $(this).attr("style");
        var fClass = $(this).attr("class");
        var fParent = $(this).parent().attr("class");

        if( typeof(fParent) == 'undefined' || fParent.indexOf('gNumber') == -1) { // 부모가 gNumber인 것 제외
            if ( typeof(fClass) == 'undefined' || fClass.indexOf('gDate') == -1 ) { // gDate 제외
                if ( typeof(fStyle) == 'undefined' || fStyle.indexOf('width') == -1 ) {
                    $(this).css("background-color","#ffd3d3");
                    $(this).val("width 누락");
                }
            }
        }
    });

    $.fn.debug({
        tools : true,       // 고정 디버그 정보
        tableAlign : true,  // table, tbody, td 정렬
        tableCheck : true,  // 테이블 체크리스트
        qaId : true,        // QA id
        gLabel : true,      // .mForm > .gLabel
        text : true,        // .txtEm, .txtWarn, .txtNormal
        label : true,       // label에 2개이상의 폼태그 자식여부
        keyword : false,     // 잘못된 키워드
        popup : true,       // 새창열림
        btnIcon : true,     // 버튼 > .icoLink
        btnLink : true,     // .btnLink > 대괄호([])
        ctrl : true,        // .mCtrl > .icoPlus(플러스 아이콘 사용불가)
        help : true,        // 도움말 복사
        li : true,          // ul > li, ol > li 자식요소 확인
        editor : true,      // 에디터 이미지 부모 class
        required : true,    // table > .required
        optionArea : true,  // .optionArea > .mOption 기본열림
        placeholder : true,  // .optionArea > .mOption 기본열림
        report : true       // debug 결과
    });

});

$(function(){
    // [EC프레임셋 제거 후 퍼블리싱 가이드] 관련하여 title 태그 공통 적용
    var title = $('.mPath li:last-child strong').html();
    if(title != null){
        $('title').html(title);
    }
    // 로컬 내부에서만 동작하는 디버깅js
    if(window.location.hostname == "fe.cafe24test.com"){ $.getScript("/guide/ui/debug_test.js"); }
});