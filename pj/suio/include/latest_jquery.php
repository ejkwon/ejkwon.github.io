<?php
    session_start();
    $_SESSION['latest'] = 'Y';
    echo ('<script type="text/javascript">alert("jquery 1.9.0�������� ����Ǿ����ϴ�."); history.go(-1)</script>');
    exit;
?>