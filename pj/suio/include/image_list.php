<?php
    /*
     * 공통 이미지 리스트
    **/
?>

<?php
// 확장자 지정
$ext = array('.gif','.jpg','.png');

// path
$path_arr = array(
                // 섬네일
                array(
                    'type' => 'thumb',
                    'path' => '../../img.echosting.cafe24.com/thumb/'
                // 아이콘
                ),array(
                    'type' => 'icon',
                    'path' => '../../img.echosting.cafe24.com/icon/'
                // 아이콘 상품
                ),array(
                    'type' => 'iconProduct',
                    'path' => '../../img.echosting.cafe24.com/icon/product/'
                // SUIO 공통
                ),array(
                    'type' => 'common',
                    'path' => '../../img.echosting.cafe24.com/suio/'
                // info 모듈
                ),array(
                    'type' => 'info',
                    'path' => '../../img.echosting.cafe24.com/suio/info/'
                // info state 모듈
                ),array(
                'type' => 'info_state',
                'path' => '../../img.echosting.cafe24.com/suio/state/'
            ));

$path = '';
$img_thumb = '';
$img_icon = '';
$img_iconProduct = '';
$img_common = '';
$img_info = '';
$img_info_state = '';

for($i=0; $i<count($path_arr); $i++){
    $path = $path_arr[$i]['path'];
    if ($dh = opendir($path)){
        while (($read=readdir($dh))!==false){
            if (!is_file($path . $read) || !in_array(strrchr($read,'.'),$ext)){ 
                continue; 
            }
            switch($path_arr[$i]['type']){
                case "thumb":
                    $img_thumb = $img_thumb . '<a href="'. $path . $read .'" target="_blank" title="새창보기"><img src="'. $path . $read .'" alt="" /></a>'; 
                break;
                case "icon":
                    $img_icon = $img_icon . '<a href="'. $path . $read .'" target="_blank" title="새창보기"><img src="'. $path . $read .'" alt="" /></a>'; 
                break;
                case "iconProduct":
                    $img_iconProduct = $img_iconProduct . '<a href="'. $path . $read .'" target="_blank" title="새창보기"><img src="'. $path . $read .'" alt="" /></a>'; 
                break;
                case "common":
                    $img_common = $img_common . '<a href="'. $path . $read .'" target="_blank" title="새창보기"><img src="'. $path . $read .'" alt="" /></a>'; 
                break;
                case "info":
                    $img_info = $img_info . '<a href="'. $path . $read .'" target="_blank" title="새창보기"><img src="'. $path . $read .'" alt="" /></a>'; 
                break;
                case "info_state":
                $img_info_state = $img_info_state . '<a href="'. $path . $read .'" target="_blank" title="새창보기"><img src="'. $path . $read .'" alt="" /></a>';
                break;
            }
        }
        closedir($dh);
    }
}
?>
<section class="moduleArea">
    <header>
        <h1>공통 이미지</h1>
    </header>
    <article>
        <style type="text/css">
            #sampleImgTab { margin:20px 0 0; text-transform:Capitalize; }
            .sampleImgList { display:none; margin:20px 0 0; }
            .sampleImgList li { margin:20px 0 0 15px; list-style:circle; }
            .sampleImgList span { display:block; margin:0 0 5px; font-size:14px; }
            .sampleImgList a { display:inline-block; margin:5px; vertical-align:top; }
            .sampleImgList img { padding:2px; background-color:#57B0E8; }
            .sampleImgList img:hover { background-color:#000; }
        </style>
        <div id="sampleImgTab" class="mTab typeNav">
            <ul>
                <li class="selected"><a href="#sampleImgCont1"><span>Thumbnail</span></a></li>
                <li><a href="#sampleImgCont2"><span>Icon</span></a></li>
                <li><a href="#sampleImgCont3"><span>Icon Product</span></a></li>
                <li><a href="#sampleImgCont4"><span>SUIO common</span></a></li>
                <li><a href="#sampleImgCont5"><span>안내(mInfo) 모듈</span></a></li>
                <li><a href="#sampleImgCont6"><span>안내(mInfo state) 모듈</span></a></li>
            </ul>
        </div>
        <script type="text/javascript">
            var call_eTab = function() {
                $.eTab($("#sampleImgTab"));
            }
        </script>
        <?php 
            for($i=1; $i<7; $i++){
            switch($i){
                case "1":
                    $result = $img_thumb;
                    $title = 'img.echosting.cafe24.com/thumb/';
                break;
                case "2":
                    $result = $img_icon;
                    $title = 'img.echosting.cafe24.com/icon/';
                break;
                case "3":
                    $result = $img_iconProduct;
                    $title = 'img.echosting.cafe24.com/icon/product/';
                break;
                case "4":
                    $result = $img_common;
                    $title = 'img.echosting.cafe24.com/suio/';
                break;
                case "5":
                    $result = $img_info;
                    $title = 'img.echosting.cafe24.com/suio/info/';
                break;
                case "6":
                    $result = $img_info_state;
                    $title = 'img.echosting.cafe24.com/suio/state/';
                break;
            }
        ?>
        <div id="sampleImgCont<?=$i?>" class="sampleImgList" <?php if($i==1){ ?>style="display:block;"<?php } ?>>
            <div class="mBoard">
                <table border="1" summary="">
                    <caption>이미지</caption>
                    <colgroup>
                        <col style="width:auto" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">경로 : <strong><?=$title?></strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?=$result?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
    </article>
</section>
