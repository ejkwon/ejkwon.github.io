$( document ).ready(function(e) {
    var firstMode = false;
    var bodyClickMode = false;
    var nowHelpTarget;
    
    $('.eOpen').click(function(){
        firstMode = true;
        bodyClickMode = false;
        var bol = $('.mGuide').hasClass('default');
        if(bol){
            $('.mGuide').removeClass('default').addClass('active');
            $('.mBlank').removeClass('default').addClass('active');
        }
        var btnBol = $(this).hasClass('btnGuide');
        if(btnBol){
            nowHelpTarget = $(this);
        }
        btnGuideEvent(nowHelpTarget);
    });

    function btnGuideEvent(target){
        var btnToggle = target.hasClass('selected');
        if(btnToggle){
            $('.mGuide').removeClass('active').removeClass('expand').addClass('default');
            $('.mBlank').removeClass('active').removeClass('expand').addClass('default');
        }else{
            var nowClass = $('.mGuide').hasClass('expand');
            if(!nowClass){
                $('.mGuide').addClass('active');
                $('.mBlank').addClass('active');
            }
        }
        $('.btnGuide').removeClass('selected');

        var propHref = target.attr('href');
        if(!btnToggle){
            target.addClass('selected');
            $('.mGuide .content').find(propHref).addClass('selected').siblings().removeClass('selected');
        }else{
            removeEvent(propHref);
        }
    }

    $('.eExpand').click(function(){
        $('.mGuide').removeClass('active').addClass('expand');
        $('.mBlank').removeClass('active').addClass('expand');
    });

    $('.eReduce').click(function(){
        $('.mGuide').removeClass('expand').addClass('active');
        $('.mBlank').removeClass('expand').addClass('active');
    });

    $('.mGuide .eClose').click(function(){
        closeEvent();
    });

    $('.mGuide').click(function(){
        bodyClickMode = false;
    });

    $('body').click(function(){
        if(firstMode){
            if(bodyClickMode){
                var bol = $('.lock').hasClass('eSelected');
                if(!bol){
                    closeEvent();
                }
            }
            bodyClickMode = true;
        }
    });

    function closeEvent(){
        $('.mGuide').removeClass('active').removeClass('expand').addClass('default');
        $('.mBlank').removeClass('active').removeClass('expand').addClass('default');

        $('.btnGuide').removeClass('selected');
        removeEvent('.guide');
    }

    function removeEvent(propHref){
        $('.mGuide .content').find(propHref).removeClass('selected');
    }
});