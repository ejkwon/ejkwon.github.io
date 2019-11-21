/**
* UI HTML SOURCE PREVIEW  
*/
$.fn.htmlPreview = function(){
    var regExpLt = /</gi;
    var regExpGt = />/gi;
    var regExpSpace = /        &lt;/gi;
    var regExpLast = /\r?\n?[^\r\n]*$/gi;
    var guideUi = {
        init : function(){
            // create elementt
            var guideTag = ['guideFrame', 'guidePreview'];
            for(var i=0; i<guideTag.length; i++){
                document.createElement(guideTag[i]);
            }
            $(function(){
                // guidePreview 구조 변경
                var limit = $('guidePreview').length - 1;
                $('guidePreview').each(function(i){
                    var preview = $(this);
                    preview.wrap('<div class="guideCodePreview" />');
                    preview.before('<h4 class="guideCodeTitle">미리보기</h4>');
                    var htmlViewArea = '<div class="guideButton">';
                        htmlViewArea += '    <button type="button" class="guideBtnNormal">HTML 보기</button>';
                        htmlViewArea += '</div>';
                        htmlViewArea += '<div class="guideSource">';
                        htmlViewArea += '    <h4 class="guideCodeTitle">HTML</h4>';
                        htmlViewArea += '    <div class="guideCodeHtml"></div>';
                        htmlViewArea += '</div>';
                    preview.after(htmlViewArea);
                    preview.replaceWith($('<div class="guidePreview" />').html(preview.html()));
                    // 마지막 아이템 변경후 gFrame(), htmlView() calling
                    if(limit == i){
                        guideUi.gFrame();
                        guideUi.htmlView();
                    }
                });
                // window resize iframe height
                if(parent.guideFrameResize != undefined){
                    guideUi.updateIframeHeight();
                    $(window).resize(function(){
                        guideUi.updateIframeHeight();
                    });
                }
            });
        },
        // guideFrame 단위 구조 변경
        gFrame : function(){
            var limit = $('guideFrame').length - 1;
            var guideFrames  = '<div id="mySliderTabs">';
                guideFrames += '    <ul>';
                guideFrames += '    </ul>';
                guideFrames += '</div>'
            $('body#guideUi > .guideTitle').after(guideFrames);
            $('guideFrame').each(function(i){
                var head = $(this).find('guideTitle');
                var headText = head.clone().text();
                head.remove();
                $('#mySliderTabs').append('<div id="gFrameCont_'+ i +'">'+ $(this).html() +'</div>');
                $('#mySliderTabs > ul').append('<li><a href="#gFrameCont_'+ i +'">'+ headText +'</a></li>');
                $(this).remove();
                // sliderTabs plugin calling
                if(limit == i){
                    $("div#mySliderTabs").sliderTabs({
                        indicators: true,
                        transition: false
                    });
                }
            });
        },
        htmlView : function(){
            $('.guideBtnNormal').click(function(){
                // HTML 보기시 클릭시 1회만 sourceViewer() calling
                if(!$(this).hasClass('create')){
                    $(this).addClass('create');
                    guideUi.sourceViewer($(this).parent().siblings('.guidePreview'));
                }
                $(this).parent().next('.guideSource').toggle();
                var height = $(this).parents('.ui-slider-tab-content:first').outerHeight(); 
                $('.ui-slider-tabs-content-container').css({'height':height});
            });
        },
        sourceViewer : function(target){
            var source = target.html().replace(regExpLt, '&lt;').replace(regExpGt, '&gt;').replace(regExpSpace,'&lt;').replace(regExpLast,'');
            target.siblings('.guideSource').find('.guideCodeHtml').append('<pre class="prettyprint linenums lang-html">'+ source +'</pre>');
            // syntax highlighting plugin calling
            prettyPrint();
        },
        // iframe heigeht
        updateIframeHeight : function(){
            parent.guideFrameResize($('body').outerHeight());
        }
    }
    guideUi.init();
}
$.fn.htmlPreview();