<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: ../../clientLogin.php');
    }
?>

<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />