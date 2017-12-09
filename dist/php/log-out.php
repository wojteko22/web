<?php
session_start();
$params = session_get_cookie_params();
setcookie(session_name(), '', 0, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
session_unset();
session_destroy();
header("Location: ../html/login-panel.php");