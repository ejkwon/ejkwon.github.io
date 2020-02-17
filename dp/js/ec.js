$(document).ready(function(){
    ecIntro();
});

var ecIntro = function(){
    //mIntroQuick
    var firstMode = true;
    var tabMode = true;
    quickCheck();

    $(window).scroll(function(event){
        quickCheck();
    });

    function quickCheck(){
        if(tabMode){
            var st = $(window).scrollTop();
            if (st > 200){
                $('.mIntroQuick').show();
            }else {
                $('.mIntroQuick').hide();
            }
        }else{
            $('.mIntroQuick').hide();
        }
    }

    $('.mIntroQuick .menu a').click(function(e){
        var idname = $(this).attr("id");
        var idArr = idname.split("Quick");
        var idStr = "#"+idArr[0];
        var topNum = $(idStr).offset().top;
        $("html, body").animate({scrollTop:topNum}, '1000', 'swing');
    });

    $('.mIntroTab.eTab li a').click(function(){
        var text = $(this).text();
        if(text == "서비스 고객지원"){
            tabMode = false;
        } else {
            tabMode = true;
        }
         quickCheck();
    });

    // mIntroFaq
    $(".mIntroFaq .question").click(function(){
        if($(this).parent("li").attr("class")!="selected"){
            $(this).parent("li").removeClass("selected");
            $(this).parent().addClass("selected");
        } else {
            $(this).parent("li").removeClass("selected");
        }
    });
}