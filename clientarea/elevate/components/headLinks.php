<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: ../../clientLogin.php');
    }
?>

<!--jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!--    bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>

<!--    custom css-->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!--    font-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<!--    Sharebox css-->
<link href="css/shareStyle.css" rel="stylesheet" type="text/css">

<!--    favicon-->
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

<!--JS Custom Functions-->
<script type="text/javascript" src="js/functions.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->