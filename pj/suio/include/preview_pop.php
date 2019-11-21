<?php
    /*
     * 팝업으로보기 버튼으로 노출되는 팝업미리보기
    **/

    // 모듈이 없을경우
    if(!isset($_GET['MODULE'])){
        $_GET['MODULE'] = 'popup';
    }
    // "n"번째 모듈이없을경우 0
    if(!isset($_GET['FLAG'])){
        $_GET['FLAG'] = 0;
    }

?>
<?php include('../module/'.$_GET['MODULE'].'.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>팝업</title>
    <link rel="stylesheet" type="text/css" href="/css/suio.css" media="all" />
    <script type="text/javascript" src="/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="/js/suio.js"></script>
    <style type="text/css">
        *:before { display:none; }
    </style>
</head>
<body id="popup">
    <div id="wrap">
        <div class="headingArea">
            <div class="mTitle">
                <h1>팝업 대제목</h1>
            </div>
        </div>
        <div class="section">
            <?= $arr_module[$_GET['FLAG']]['html']; ?>
        </div>
    </div>
    <div id="footer">
        <a href="#none" class="btnSubmit"><span>확인</span></a>
        <a href="#none" class="btnEm" onclick="window.close();"><span>닫기</span></a>
    </div>
</body>
</html>

