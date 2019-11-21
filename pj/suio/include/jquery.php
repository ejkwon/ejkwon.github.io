<?php
    session_start();
    unset($_SESSION['latest']);
    echo ('<script type="text/javascript">alert("jquery 1.4.4버전으로 변경되었습니다."); history.go(-1)</script>');
?>