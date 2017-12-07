<?php
    session_start();
    if (isset($_GET['lanuagekey'])) {
        $_SESSION['lanuagekey'] = $_GET['lanuagekey'];
    }
?>