<?php
    /*
     * 새창으로보기, 레이아웃 보기에 대한 분기 처리
    **/
?>
<?php
    // 모듈이 없을경우
    if(!isset($_GET['MODULE'])){
        $_GET['MODULE'] = 'sample';
    }

    // 상세 모듈이 지정안될경우
    if(!isset($_GET['FLAG'])){
        $_GET['FLAG'] = 0;
    }
    
    // 모듈파일을 가져옴
    include('../module/'.$_GET['MODULE'].'.php');

    $module = '';
    $module_layer = '';

    if($_GET['MODULE'] == 'layer' ){
        // mLayer 모듈
        $module = $module .'<style type="text/css">
                                .sampleMlayerShow li { margin:10px 0 0; }
                                .sampleMlayerShow a { display:inline-block; padding:5px 10px; border:1px solid #777; background:none; }
                                .sampleMlayerShow a:hover { background-color:#eee; }
                            </style>';
        $module = $module .'<ul class="sampleMlayerShow">';
        $module = $module .'<li><a href="#mLayerTest1" class="eLayerClick">click 레이어</a></li>';
        $module = $module .'<li style="float:right; margin-left:5px;"><a href="#mLayerTest1" class="eLayerClick">click 레이어</a></li>';
        $module = $module .'<li><a href="#mLayerTest1" class="eModal">modal 레이어</a></li>';
        $module = $module .'</ul>';
        $module_layer = $arr_module[$_GET['FLAG']]['html'];
    } else {
        // 일반 모듈
        $module = $module . $arr_module[$_GET['FLAG']]['html'];
    }

    // 모듈만 보기 
    if(isset($_GET['ONLY'])){
        // 레이어 모듈
        if($_GET['MODULE'] == 'layer'){
            $module = $module . $arr_module[$_GET['FLAG']]['html'];
        }
        // 일반 모듈
        include('./preview_only.php');
    } else {
        // 레이아웃 포함 모듈 보기 
        include('./preivew_layout.php');
    }
?>