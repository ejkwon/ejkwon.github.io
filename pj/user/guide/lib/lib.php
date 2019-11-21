<?php
    // root
    $ROOT = '/guide';

    // GNB
    $GNB = basename($_SERVER['PHP_SELF']);

    // project type
    $P_TYPE = '';
    $P_NAME = '';
    if($GNB == 'project.html'){
        if(isset($_GET['P_NAME'])){
           $P_NAME = $_GET['P_NAME'];
        }
        if(!isset($_GET['P_TYPE'])){
            $P_TYPE = 'PC';
        } else {
            $P_TYPE = $_GET['P_TYPE'];
        }
    }
    
    // PROJECT FILE
    $FILE = basename($_SERVER['PHP_SELF']);
    if($FILE == 'layout.html'){
        $IA_SCRIPT = '<script type="text/javascript" id="iaScript">
            function addSuioLoadEvent(func) {
                var oldonload = window.onload;
                if (typeof window.onload != "function") {
                    window.onload = func;
                } else {
                    window.onload = function() {
                      if (oldonload) {
                        oldonload();
                      }
                      func();
                    }
                }
            }
            var iaScript = function(){
                $(function(){
                    $("#iaScript").remove();
                });
            }
            addSuioLoadEvent(iaScript);
        </script>';
    }
    //echo $IA_SCRIPT;
?>
