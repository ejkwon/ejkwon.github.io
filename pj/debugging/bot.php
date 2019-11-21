<?php
    session_start();
    include('./common_cont.php');
    include('./bot_cont.php');
    $arr_module = array_merge($arr_module1, $arr_module2);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>디버깅봇</title>
    <link rel="stylesheet" type="text/css" href="css/default.css" media="screen" id="codeTheme">
    <link rel="stylesheet" type="text/css" href="css/ui.css" media="screen">
    <script type="text/javascript" src="js/jquery-1.4.4.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/common.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/debug.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/prettify.js"></script>
    <script type="text/javascript" src="js/ui.js"></script>
    <script type="text/javascript" src="js/ZeroClipboard.js"></script>
</head>
<body>
    <div id="wrap">
        <div id="quick">
            <a href="#none" class="btnQuick"><span>▶</span> Quick Menu</a>
            <ul class="menu"></ul>
        </div>
        <h2 class="areaTitle">
            <button type="button" class="btnToggle">펼치기/접기</button><span id="common" class="text">공통 디버깅</span>
            <a href="js/common.js" target="_blank">common.js</a>
            <a href="css/common.css" target="_blank">common.css</a>
        </h2>
        <div id="commonArea">
        <?php
            // 상세 모듈 리스트
            for($flag=0; $flag<count($arr_module); $flag++){
                $value_html = str_replace("<", "&lt;", $arr_module[$flag]['html']);
                $code_html = str_replace(">", "&gt;", $value_html);
                    $value_java = str_replace("<", "&lt;", $arr_module[$flag]['javaCode']);
                    $code_java = str_replace(">", "&gt;", $value_java);
                if($flag == count($arr_module1)){
                    echo '</div><h2 class="areaTitle"><button type="button" class="btnToggle">펼치기/접기</button><span id="template" class="text">개별 디버깅</span> <a href="js/debug.js" target="_blank">debug.js</a> <a href="css/debug.css" target="_blank">debug.css</a></h2><div id="templateArea">';
                }
                echo '<section>' . $arr_module[$flag]['desc'];
                echo '<div class="debugArea">' . $arr_module[$flag]['html'] . '</div>';
                echo '<ul class="sampleMenu">';
                    echo '<li class="clip"><a href="#samplePreview_'. $flag .'" id="btnCopySource_'. $flag .'" class="btnCopySource" html="sampleClipboard_'. $flag .'">Debug code Copy</a></li>';
                    echo '<li class="debug">▼ Debug code Open</li>';
                    echo '<li class="html">▼ Error code Open</li>';
                echo '</ul><div class="codeView">';
                echo '<pre class="sampleClipboard" id="sampleClipboard_'. $flag .'">' . $code_java . '</pre>';
                echo '<pre class="code codeDebug prettyprint linenums">' . $code_java . '</pre>';
                echo '<pre class="code codeHTML prettyprint linenums lang-html">' . $code_html . '</pre>';
                echo '</div></section>';
            }
         ?>
        </div>
    </div>
</body>
</html>
