<?php
    ob_start();
    session_start();
    $tempEntry = $_SESSION['entry'];
    $tempCurrentPage = $_SESSION['currentPage'];
    session_destroy();
    $_SESSION['entry'] = $tempEntry;
    $_SESSION['currentPage'] = $tempCurrentPage;
    $headerLoc = 'Location: ' . $tempCurrentPage;
    header($headerLoc);
    ob_end_flush();
