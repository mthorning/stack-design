<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stack-Design</title>

        <?php include 'components/headLinks.php'; ?>

    <body id="landingPage">
        <?php
            unset($_SESSION['entry']);
        ?>
        <a href="home.php"><h1 id="mainStackH1"><img src="img/stackLogo.png">Stack-Design</h1></a>

    </body>
</html>