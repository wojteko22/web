<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dawid
 * Date: 03/12/2017
 * Time: 23:31
 */
session_start();
session_unset();
session_destroy();
setcookie('PHPSESSID', '', time() - 3600, '/');
unset($_COOKIE['PHPSESSID']);
header("Location: ../html/login-panel.php");