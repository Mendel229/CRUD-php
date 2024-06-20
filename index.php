<?php
    require_once('./controller.php');
    session_start();
    if (isset($_GET['controller'])) {
        $_GET['controller']();
    } else {
        if (isset($_POST['controller'])) {
            $_POST['controller']();
        } else {
            readUser();
        }
    }
?>