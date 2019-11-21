<?php
    session_start();
    $_SESSION['latest'] = 'Y';
    echo ('<script type="text/javascript">alert("jquery 1.9.0버전으로 변경되었습니다."); history.go(-1)</script>');
    exit;
?>