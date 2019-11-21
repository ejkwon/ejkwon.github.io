;(function ($) {
    'use strict';

    $.fn.selectPack = function (method) {

        var defaults = {
            settingBol:     false,
            boxClass:       "selectDesign",
            listClass:      "fOption",
            dataBol:        false,
            dataNum:        0,
            aniMode:        true
        };

        var settings = {};

        var methods = {
            /*@private*/
            _eInit: function (options) {
                settings = $.extend({}, defaults, options);

                return this.each(function () {
                    var findThis = $(this);
                    methods._eSetup.apply(this, Array.prototype.slice.call(arguments, 1));
                });
            },
            /*@private*/
            _eSetup: function () {
                var findThis = $(this);
                objStart._eCreate(findThis);
            }
        };

        var objStart = {
            /*@private*/
            _eCreate: function (findThis) {
                var propClass = findThis.attr('design'),
                    propDisabled = findThis.attr('disabled'),
                    propStyle = findThis.attr('style'),
                    propWidthSize = propStyle,
                    propPercent = null;

                if(propStyle){
                    var arrStyle = propStyle.split(";");
                    if(propStyle.indexOf("width") >= 0){
                        propWidthSize = parseInt(arrStyle[0].replace(/[^0-9]/g,''));
                        propPercent = arrStyle[0].indexOf("%");
                    }else{
                        propWidthSize = "";
                    }
                }

                if(!propClass){
                    findThis.removeAttr('design').removeAttr('class');
                    propClass = settings.boxClass;
                } else {
                    findThis.removeAttr('design').removeAttr('class');
                }

                var propSelect = propClass;
                if(propDisabled){ propSelect = propClass + ' disabled'; }

                if(propWidthSize){
                    if(propPercent && propPercent > 0){
                        findThis.wrap('<div class="'+ propSelect +'" style="width:'+propWidthSize+'%;"  />');
                    }else{
                        findThis.wrap('<div class="'+ propSelect +'" style="width:'+propWidthSize+'px;"  />');
                    }
                }else{
                    findThis.wrap('<div class="'+ propSelect +'" />');
                }

                if(propStyle){
                    var figureNum = 0;
                    if(propStyle.indexOf("color") >= 0){
                        if(propStyle.indexOf("width") >= 0){
                            figureNum = 1;
                        }
                        var propColor = arrStyle[figureNum],
                            arrColorCut = propColor.split(":"),
                            arrClassCut = propSelect.split(" "),
                            strClass = "."+arrClassCut[0];

                        findThis.parents(strClass).css({"color":arrColorCut[1]});
                    }
                }

                findThis.before('<p class="fNow" />');
                findThis.before('<button type="button" class="fButton">옵션 변경</button>');
                if(settings.dataBol){
                    findThis.before('<ul class="'+settings.listClass+'" style="overflow-x:hidden; width:'+settings.dataNum+'px" />');
                }else{
                    findThis.before('<ul class="'+settings.listClass+'" style="overflow-x:hidden;" />');
                }
                var propWrap = findThis.parent(),
                    propPtag = findThis.siblings('.fNow'),
                    propUl = findThis.siblings('.fOption'),
                    propButton = findThis.siblings('.fButton');

                var findSelected =  findThis.find('option:selected'),
                    figureIndex = findThis.find('option').index(findSelected);

                findThis.find('option').each(function(i){
                    var strText = $(this).text(),
                        propSelected = $(this).attr("selected");
                    if(propSelected){
                        propPtag.text(strText);
                        propUl.append('<li><a href="#none">'+ strText +'</a></li>');
                    }else{
                        if(i == 0){
                            propPtag.text(strText);
                            propUl.append('<li><a href="#none">'+ strText +'</a></li>');
                        }else{
                            propUl.append('<li><a href="#none">'+ strText +'</a></li>');
                        }
                    }
                    var propOpt = $(this).attr("value"),
                        findThis = $(this).parent().siblings('.fOption').find("li").eq(i);

                    if(propOpt){
                        findThis.attr("data", propOpt);
                    }
                    if(figureIndex == i){
                        findThis.addClass("selected");
                    }
                });

                if(settings.settingBol){
                    var arrCut = settings.boxClass.split(" "),
                        strBoxSeleter = "."+arrCut[0]+"."+arrCut[1],
                        strListSeleter = "."+settings.listClass,
                        findSelected = findThis.parents(strBoxSeleter).find(strListSeleter);

                    var figureSelect = findThis.parents(strBoxSeleter).outerWidth(),
                        figureListWidth = findThis.width()+100;
                    if(figureSelect >= figureListWidth){
                        findSelected.css({"width":"", "overflow-x":"auto", "white-space":"nowrap"});
                    }else{
                        findSelected.css({"width":figureListWidth, "overflow-x":"auto", "white-space":"nowrap"});
                    }
                }
                objStart._eHandler(findThis, propDisabled, propWrap, propPtag, propButton);
            },
            /*@private*/
            _eHandler: function(findThis, propDisabled, propWrap, propPtag, propButton) {
                propButton.click(function(e){
                    var findPtag = $(this).siblings('.fNow');
                    objStart._eClickEvent(findPtag, propWrap, propDisabled, e);
                    e.preventDefault();
                });

                propPtag.click(function(e){
                    objStart._eClickEvent($(this), propWrap, propDisabled, e);
                    e.preventDefault();
                });

                propWrap.find('a').click(function(e){
                    var strText = $(this).text(),
                        findTarget = $(this).parents('.fOption'),
                        figureIndex = $(this).parent().index(),
                        arrCut = settings.boxClass.split(" "),
                        strBoxSeleter = "."+arrCut[0]+"."+arrCut[1],
                        strCurrentText = findTarget.parents(strBoxSeleter).find('.fNow').text();

                    objStart._eChange(propWrap, strText);
                    objStart._eClickEvent(findTarget, propWrap, propDisabled, e);
                    $(this).parent().addClass("selected").siblings().removeClass('selected');
                    findTarget.parents(strBoxSeleter).find('option:eq('+figureIndex+')').prop("selected", true);

                    if (strCurrentText != strText) {
                        findTarget.parents(strBoxSeleter).find('select').trigger('change');
                    }

                    var findThisSeleter = findTarget.parents(strBoxSeleter),
                        propStyle = findThisSeleter.attr("style");
                    if(propStyle && propStyle.indexOf("color") >= 0){
                        findThisSeleter.css({"color":""});
                    }

                    e.preventDefault();
                });
            },
            /*@private*/
            _eClickEvent: function(findThis, propWrap, propDisabled, e){
                if(!propDisabled){
                    objStart._eToggle(propWrap);
                    objStart._ePositionX(findThis, propWrap);
                    objStart._ePositionY(findThis, propWrap);

                    var arrCut = settings.boxClass.split(" "),
                        strBoxSeleter = "."+arrCut[0]+"."+arrCut[1],
                        figureIndex = $(strBoxSeleter).index(findThis.parents(strBoxSeleter));

                     $(strBoxSeleter).each(function(i){
                        var propHasClass = $(this).hasClass('show');
                        if(propHasClass){
                            if(figureIndex != i){
                                var findSelecter = $(this).find('.fButton');
                                objStart._eToggle($(this));
                                objStart._ePositionX(findSelecter, $(this));
                                objStart._ePositionY(findSelecter, $(this));
                            }
                        }
                    });
                }
                e.preventDefault();
            },
            /*@private*/
            _ePositionX: function(findThis, propWrap){
                var arrCut = settings.boxClass.split(" "),
                    strBoxSeleter = "."+arrCut[0]+"."+arrCut[1],
                    strListSeleter = "."+settings.listClass,
                    findSelected = findThis.parents(strBoxSeleter).find(strListSeleter);

                if(propWrap.hasClass('show')){
                    var findLayer = findThis.parents('.mLayer'),
                        findTarget,
                        figureLeft;

                    if(findLayer.length >= 1){
                        findTarget = findLayer.find('.wrap');
                        figureLeft = findTarget.offset().left;
                    }else{
                        findTarget = $(window);
                        figureLeft = 0;
                    }

                    var figureWidth = findTarget.width(),                                //레이어 전체 넓이값
                        figureBoxLeft = findThis.offset().left-figureLeft,               //버튼 left 위치값
                        figureSelectedWidth = findSelected.width(),                      //박스 넓이값
                        figureSelecteLeft = -1,                                          //버튼 기본값 eft값
                        figureHalfLeft = figureWidth-figureBoxLeft,                      //버튼 아래 공간 넓이값
                        figureOuterWidth = findThis.parents(strBoxSeleter).outerWidth(), //버튼 넓이값
                        figureDiv = 20,                                                  //리스트 넓이 지정할때 상하 공백
                        strOverflow = "hidden";

                    if(settings.settingBol){
                        strOverflow = "auto";
                    }

                    if(figureBoxLeft >= figureHalfLeft){
                        figureSelecteLeft = ((figureSelectedWidth-figureOuterWidth)+3)*-1;
                        if((figureSelectedWidth+2) >= figureBoxLeft){
                            figureSelecteLeft = ((figureBoxLeft-figureDiv)+3)*-1;
                            var figureWidthLeft = Math.floor((figureBoxLeft+figureOuterWidth)-figureDiv);
                            findSelected.css({ width:figureWidthLeft, "overflow-x":strOverflow });
                        }
                    }else{
                        if((figureSelectedWidth+2) >= figureHalfLeft){
                            var figureWidthLeft = Math.floor((figureHalfLeft-figureDiv));
                            findSelected.css({ width:figureWidthLeft, "overflow-x":strOverflow });
                        }
                    }
                    findSelected.css({ left:figureSelecteLeft });
                }
            },
            /*@private*/
            _ePositionY: function(findThis, propWrap){
                var arrCut = settings.boxClass.split(" "),
                    strBoxSeleter = "."+arrCut[0]+"."+arrCut[1],
                    strListSeleter = "."+settings.listClass,
                    findSelected = findThis.parents(strBoxSeleter).find(strListSeleter);

                var findLayer = findThis.parents('.mLayer'),
                    findTarget,
                    figureTop,
                    propId = findLayer.attr('id'),
                    flag = false;

                if(propId){
                    var strIdChk = propId.indexOf('layer');
                    if(strIdChk >= 0){
                        flag = true;
                    }
                }

                if(findLayer.length >= 1 && flag){
                    findTarget = findLayer.find('.wrap');
                    figureTop = findTarget.offset().top;
                }else{
                    findTarget = $(window);
                    figureTop = $(window).scrollTop();
                }

                var figureHeigh = findTarget.height(),                              //레이어 전체 높이값
                    figureBoxTop = findThis.offset().top-figureTop,                 //버튼 top 위치값
                    figureSelectedHeight = findSelected.height(),                   //박스 높이값
                    figureSelecteTop = findThis.height(),                           //버튼 높이값
                    figureHalfBottom = figureHeigh-figureBoxTop,                    //버튼 아래 공간 높이값
                    figureListHeight = 0,                                           //리스트 목록 높이 지정변수
                    figureDiv = 10,                                                 //리스트 높이 지정할때 상하 공백
                    figurePlus = figureBoxTop + figureSelectedHeight,
                    figureFooter = 0,
                    findFooter = $('.footer');

                if(findLayer.length > 0){
                    findFooter = findThis.parents('.mLayer').find('.footer');
                    if(findFooter){
                        figureFooter = findFooter.outerHeight()+20;
                    }
                }

                if(propWrap.hasClass('show')){
                    var strMode = "";

                    if(figureBoxTop >= figureHalfBottom && (figurePlus+figureFooter) >= findTarget.height()){
                        strMode = "up";
                        figureListHeight = figureBoxTop-figureDiv;
                        figureSelecteTop = (figureSelectedHeight+2)*-1;

                        if(settings.aniMode){
                            /*ani*/
                            findSelected.css({ top:-2 });
                            /* //-ani-//*/
                        }
                        if(figureSelectedHeight >= (figureListHeight+figureDiv)){
                            figureSelecteTop = (figureListHeight+2)*-1;

                            if(!settings.aniMode){
                                findSelected.css({ height:figureListHeight });
                            }else{
                                /*ani*/
                                objStart._eAnimation(findSelected, "downShow", figureListHeight);
                                /* //-ani-//*/
                            }
                        }else{
                            figureSelecteTop = (figureSelectedHeight+2)*-1;

                            if(!settings.aniMode){
                                findSelected.css({ height:"auto" });
                            }else{
                                /*ani*/
                                objStart._eAnimation(findSelected, "downShow", figureSelectedHeight);
                                /* //-ani-//*/
                            }
                        }
                    }else{
                        strMode = "down";
                        if(findLayer.length < 1 && findFooter.length >= 1){
                            figureDiv = findFooter.height();
                        }

                        figureListHeight = ((figureHalfBottom-2)-findThis.height()-figureDiv);

                        if(figureSelectedHeight >= figureListHeight){
                            if(!settings.aniMode){
                                findSelected.css({ height:figureListHeight });
                            }else{
                                /*ani*/
                                objStart._eAnimation(findSelected, "downHide", figureListHeight);
                                /* //-ani-//*/
                            }
                        }else{
                            if(!settings.aniMode){
                                findSelected.css({ height:"auto" });
                            }else{
                                /*ani*/
                                objStart._eAnimation(findSelected, "downHide", figureSelectedHeight);
                                /* //-ani-//*/
                            }
                        }
                        findSelected.css({ top:figureSelecteTop });
                    }

                    findThis.siblings('.fOption').scrollTop(0);

                    var propUl = findThis.siblings('.fOption'),
                        findPosTarget = propUl.find("li.selected"),
                        offsetTop = findPosTarget.position().top,
                        figureTop = (offsetTop+findPosTarget.height())+2;

                    var propMaxHeight = propUl.css("max-height").replace(/[^0-9]/g, "");
                    if(propMaxHeight > 0){
                        var figureLen = propUl.find("li").length-1,
                            figureLastHeight = propUl.find("li").eq(figureLen).height(),
                            totalOffsetTop = propUl.find("li").eq(figureLen).position().top,
                            propPaddingTop = propUl.css("padding-top").replace(/[^0-9]/g, ""),
                            figureTotalHeight = (totalOffsetTop+figureLastHeight)-propPaddingTop;

                        objStart._scrollInit(findThis, findPosTarget, strMode, figureSelectedHeight, figureTotalHeight, figureTop);
                    }else{
                        objStart._scrollInit(findThis, findPosTarget, strMode, figureListHeight, figureSelectedHeight, figureTop);
                    }
                }else{
                    if(!settings.aniMode){
                        findSelected.css({ top:"", height:"" });
                    }else{
                        /*ani*/
                        if(figureBoxTop >= figureHalfBottom && (figurePlus+figureFooter) >= findTarget.height()){
                            objStart._eAnimation(findSelected, "upShow", 0);
                        }else{
                            objStart._eAnimation(findSelected, "upHide", 0);
                        }
                        /* //-ani-//*/
                    }
                }
            },
            _scrollInit : function(findThis, findPosTarget, strMode, figureListHeight, figureSelectedHeight, figureTop){
                if(strMode == "up"){
                    if(figureListHeight < figureTop){
                        var figureScrollNum = (figureTop - figureListHeight);
                        findThis.siblings('.fOption').scrollTop(figureScrollNum);
                    }
                }else{
                    var figureCul = figureSelectedHeight - figureListHeight,
                        figureScrollNum = (figureTop - findPosTarget.outerHeight());

                    if(figureCul < figureTop){
                        figureScrollNum = figureCul;
                    }
                    findThis.siblings('.fOption').scrollTop(figureScrollNum);
                }
            },
            /*@private*/
            _eToggle : function(propWrap){
                var propList = propWrap.find('ul');
                if(propWrap.hasClass('show')){
                    propWrap.removeClass('show');
                } else {
                    propWrap.addClass('show');
                }
            },
            /*@private*/
            _eHide : function(propWrap){
                propWrap.removeClass('show');
            },
            /*@private*/
            _eChange : function(propWrap, strText){
                propWrap.find('p').text(strText);
                propWrap.find('select').val([strText]);
            },
            /*@private*/
            _eAnimation : function(findSelected, str, figureNumber){
                if(str == "downHide"){
                    findSelected
                        .css({ height:0, "display":"block" })
                        .animate({height: figureNumber}, 300);
                }else if(str == "downShow"){
                    //var figureTop = (findSelected.outerHeight()-figureNumber)+1;
                    var figureTop = (findSelected.outerHeight()-findSelected.height())+1;
                    findSelected
                        .css({ height:0, top:-figureTop, "display":"block"})
                        .animate({height: figureNumber, top:-(figureTop+figureNumber-1)}, 300);
                }else if(str == "upShow"){
                    var figureTop = (findSelected.outerHeight()-findSelected.height())+1;
                    findSelected
                        .css({ "display":"block" })
                        .animate({height: 0, top:-figureTop}, 300, function(){
                            $(this).css({ top:"", height:"", "display":"none" });
                        });
                }else if(str == "upHide"){
                    findSelected
                        .css({ "display":"block" })
                        .animate({height: 0}, 300, function(){
                            $(this).css({ top:"", height:"", "display":"none" });
                        });
                }
            }
        }

        return methods._eInit.apply(this, arguments);
    };

})(jQuery);

$(function(){
    'use strict';

    var strFilter = "win16|win32|win64|mac|macintel",
        flag = true;

    if ( navigator.platform ) {
        if ( strFilter.indexOf( navigator.platform.toLowerCase() ) < 0 ) {
            flag = false; //mobile
        }
    }

    if(flag){
        $('.fSelect.eSelect').each(function(i){
            var propTagName = $(this).prop('tagName');
            if(propTagName == "SELECT"){
                var propClassName = $(this).attr('class'),
                    propClassBol = $(this).hasClass('nowrap'),
                    propData = $(this).attr('data-size'),
                    flag = false,
                    figureNum = 0;

                if(propData){
                    flag = true;
                    figureNum = parseInt(propData);
                }
                $(this).selectPack({settingBol:propClassBol, boxClass:propClassName, dataBol:flag, dataNum:figureNum});
            }
        });
    }

});