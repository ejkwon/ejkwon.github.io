<?php
    session_start();
    unset($_SESSION['latest']);
    echo ('<script type="text/javascript">alert("jquery 1.4.4�������� ����Ǿ����ϴ�."); history.go(-1)</script>');
?>