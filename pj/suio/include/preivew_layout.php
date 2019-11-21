<?php
    /*
     * 레이아웃보기 버튼으로 노출되는 미리보기
    **/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SimplexI FUIO :: <?=$header_name?></title>
    <link rel="stylesheet" type="text/css" href="/css/ec/layout.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/suio.css" media="all" />
    <script type="text/javascript" src="/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="/js/suio.js"></script>
</head>
<body>
<div id="skipNavigation">
    <p>
        <a href="#gnb">대메뉴 바로가기</a>
        <a href="#content">컨텐츠 바로가기</a>
    </p>
</div>
<hr class="layout" />

<div id="wrap">
    <!-- header -->
    <div id="header" style="width:auto">
        <img src="//img.echosting.cafe24.com/smartAdmin/img/common/@gnb.gif" alt="" />
    </div><!-- //header -->
    <hr class="layout" />

    <div id="container">
        <!-- sidebar -->
        <div id="sidebar">
             <div id="snb" class="sub">
                <img src="//img.echosting.cafe24.com/smartAdmin/img/common/@snb.gif" alt="" />
            </div>
        </div><!-- //sidebar -->
        <hr class="layout" />

        <!-- content -->
        <div id="content">
            <div class="headingArea">
                <div class="mTitle">
                    <h1>페이지 대제목</h1>
                </div>
                <div class="mBreadcrumb">
                    <ol>
                        <li class="home"><a href="#none">홈</a></li>
                        <li>2depth</li>
                        <li>3depth</li>
                        <li class="now" title="현재 페이지">현재 페이지</li>
                    </ol>
                    <a href="#none" class="manual">매뉴얼</a>
                    <a href="#none" class="help">도움말</a>
                </div>
            </div>

            <div class="section">
                <?=$module?>
            </div>
        </div><!-- //content -->
    </div>
</div>
<div id="footer">
    Copyright(c) <strong>SimpleX Internet</strong> Inc.All Rights Reserved.
</div>

<?= $module_layer ?>
</body>
</html>