<?php 

include('./include/module.php');

$doc = new DOMDocument('1.0', 'UTF-8');
$doc->formatOutput = true;

$area = $doc->createElement('ul');
$area = $doc->appendChild($area);
for($i=0; $i<count($lnb); $i++){
    if($lnb[$i]['file'] != '' && $lnb[$i]['module'] != ''){
        $list = $doc->createElement('li');
        $file = $doc->createElement('file');
        $module = $doc->createElement('module');
        $file_text = $doc->createTextNode($lnb[$i]['file']);
        $file_text = $doc->createTextNode($lnb[$i]['file']);
        $module_text = $doc->createTextNode($lnb[$i]['module']);
        $module_text = $doc->createTextNode($lnb[$i]['module']);

        $list = $area->appendChild($list);
        $file = $list->appendChild($file);
        $module = $list->appendChild($module);
        $file_text = $file->appendChild($file_text);
        $module_text = $module->appendChild($module_text);
    }
} 

$doc->save("./suio.xml");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>suio.xml 생성</title>
</head>
<body>
    <?php 
        echo '<script type="text/javascript">alert("xml 파일리스트가 생성되었습니다.\n 서브버전에서 파일을 커밋하세요"); window.location.href = "./suio.xml"; </script>';
    ?>
    
</body>
</html>
