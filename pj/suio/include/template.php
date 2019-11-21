<?php
    /*
     * layout.php에 삽입되는 모듈 리스트 템플릿
    **/
?>
<section class="moduleArea">
    <header>
        <h1><?=$header_name?></h1>
    </header>

    <article>
        <div class="uioUtil">
            <p class="maker">제작자 : <?=$maker?></p>
            <p class="wiki">WIKI : <?=$wiki?></p>
        </div>
        <?php
            // 상단 설명 분기
            if(isset($header_desc)){
                echo '<div class="headerDesc">' . $header_desc . '</div>';
            }
            // 프리뷰용 css 분기
            if(isset($preview_css)){
                echo $preview_css;
            }
            if(isset($update_notice)){
                echo $update_notice;
            }
            // 상세 모듈 리스트
            for($flag=0; $flag<count($arr_module); $flag++){
                $value_html = str_replace("<", "&lt;", $arr_module[$flag]['html']);
                $code_html = str_replace(">", "&gt;", $value_html);
				if($module == 'javascript'){
					$value_java = str_replace("<", "&lt;", $arr_module[$flag]['javaCode']);
					$code_java = str_replace(">", "&gt;", $value_java);
				}
                echo '<div class="sampleTitle">' . $arr_module[$flag]['desc'] . '</div>';
                echo '<div class="samplePreview">' . $arr_module[$flag]['html'] . '</div>';

                if($module != 'popup'){
                    echo '<ul class="sampleMenu">';
                        echo '<li><a href="/suio/include/preview.php?MODULE=' . $module .'&amp;FLAG='. $flag .'&amp;ONLY=Y" target="_blank" class="preview">New Window View </a></li>';
                        if($module != 'section' && $module != 'headingArea' || $flag != 0){
                            echo '<li><a href="/suio/include/preview.php?MODULE=' . $module .'&amp;FLAG='. $flag .'" target="_blank" class="preview">Layout View</a></li>';
                        }
                        if($module != 'section' && $module != 'headingArea' || $flag != 0 ){
                            echo '<li><a href="/suio/include/preview_pop.php?MODULE=' . $module .'&amp;FLAG='. $flag .'" target="_blank" class="preview" onclick="window.open(this.href,\'POPNAME_'. $module . $flag .'\',\'width=1000,height=500,scrollbars=yes\'); return false">Popup View</a></li>';
                        }
                        echo '<li class="clip"><a href="#samplePreview_'. $flag .'" id="btnCopySource_'. $flag .'" class="btnCopySource" html="sampleClipboard_'. $flag .'">HTML Copy</a></li>';
                        echo '<li class="html">▼ HTML Preview Open</li>';

						if($module == 'javascript'){
							echo '<li class="java">▼ JAVASCRIPT code Open</li>';
						}
                    echo '</ul>';
                    // code light
                    echo '<pre class="code codeHTML prettyprint linenums lang-html">' . $code_html . '</pre>';
                    // copy to clipboard
					if($module == 'javascript'){
						echo '<pre class="code codeJAVA prettyprint linenums">' . $code_java . '</pre>';
					}
                } else {
                    echo '<ul class="sampleMenu">';
                        echo '<li class="clip"><a href="#samplePreview_'. $flag .'" id="btnCopySource_'. $flag .'" class="btnCopySource" html="sampleClipboard_'. $flag .'">HTML Copy</a></li>';
                        echo '<li class="html">▼ HTML Preview Open</li>';
                    echo '</ul>';
                    // code light
                    echo '<pre class="code codeHTML prettyprint linenums lang-html">' . $code_html . '</pre>';
                }
                echo '<pre class="sampleClipboard" id="sampleClipboard_'. $flag .'">' . $code_html . '</pre>';
            }
        ?>
    </article>
</section>