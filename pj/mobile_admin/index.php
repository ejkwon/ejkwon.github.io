<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<title>Mobile Admin</title>
<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/mobileadmin.css" media="screen" />
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../guide/ui/ui.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var firstHref = "layout/layout_main.html";
    $("#pageUrl").attr("value",firstHref);
    $("#frameUrl").attr("src",firstHref);
    $(".btnGo").attr("href",firstHref);

    $('.ia ul li a').click(function(event){
        if($(this).parents(".log").length <= 0) {
            var href = $(this).attr("href");
            event.preventDefault();

            // 접속한 디바이스 환경
            var pc_device = "win16|win32|win64|mac|macintel";
            var this_device = navigator.platform;
            if ( this_device ) {
                if ( pc_device.indexOf(navigator.platform.toLowerCase()) < 0 ) {
                    window.open(href, '_blank');
                } else {
                    $("#pageUrl").attr("value",href);
                    $("#frameUrl").attr("src",href);
                    $(".btnGo").attr("href",href);
                }
            }
        }
    });
    $(".btnBig").click(function(event){
        $(this).addClass("selected").siblings().removeClass("selected");
        if($(".desc").length == 0) $(".buttonArea").append("<p class='desc'>[480 x 640]</p>");
        else $(".desc").html("[480 x 640]");
        $(".iframeWrap").css({ width:"497px", height:"640px"});
        $("#contents .preview").css("width","560px");
    });
    $(".btnSmall").click(function(event){
        $(this).addClass("selected").siblings().removeClass("selected");
        if($(".desc").length == 0) $(".buttonArea").append("<p class='desc'>[320 x 480]</p>");
        else $(".desc").html("[320 x 480]");
        $(".iframeWrap").css({ width:"337px", height:"480px"});
        $("#contents .preview").css("width","400px");
    });
});
</script>
</head>
<body>
<div id="wrap">
    <div id="header">
        <h1 class="logo">
            <a href="#none"><span class="logoSub">Web Publisher</span> :: EJ</a>
        </h1>
    </div>

    <div id="contents">
        <div class="ia">
            <?php include 'ia.html'; ?>
        </div>
        <div class="preview">
            <?php include 'preview.html'; ?>
        </div>
    </div>

    <div id="footer">
        <p>Copyright&copy; <strong>EonJeong Kwon.</strong> All rights Reserved.</p>
    </div>
</div>
</body>
</html>