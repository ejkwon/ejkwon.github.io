<?php
    include('./common_cont.php');
?>
    <div id="commonArea">
        <a href="js/common.js" target="_blank">common.js</a>
        <a href="css/common.css" target="_blank">common.css</a>
        <?php
            // 상세 모듈 리스트
            for($flag=0; $flag<count($arr_module); $flag++){
                $value_html = str_replace("<", "&lt;", $arr_module[$flag]['html']);
                $code_html = str_replace(">", "&gt;", $value_html);
                    $value_java = str_replace("<", "&lt;", $arr_module[$flag]['javaCode']);
                    $code_java = str_replace(">", "&gt;", $value_java);
                echo '<section>' . $arr_module[$flag]['desc'];
                echo '<div class="debugArea">' . $arr_module[$flag]['html'] . '</div>';
                echo '<ul class="sampleMenu">';
                    echo '<li class="clip"><a href="#samplePreview_'. $flag .'" id="btnCopySource_'. $flag .'" class="btnCopySource" html="sampleClipboard_'. $flag .'">Debug code Copy</a></li>';
                    echo '<li class="html">▼ Error code Open</li>';
                echo '</ul><div class="codeView">';
                echo '<pre class="code codeJAVA prettyprint linenums">' . $code_java . '</pre>';
                echo '<pre class="sampleClipboard" id="sampleClipboard_'. $flag .'">' . $code_java . '</pre>';
                echo '<pre class="code codeHTML prettyprint linenums lang-html">' . $code_html . '</pre>';
                echo '</div></section>';
            }
         ?>
    </div>