<?php
    session_start();
    $currentPage = $_SESSION['currentPage'];
    session_destroy();
    session_start();
    $_SESSION['entry'] = 1;
    header('Location: '.$currentPage);
?>