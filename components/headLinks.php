<?php

if (isset($_SESSION['previous'])) {
    if (basename($_SERVER['PHP_SELF']) != $_SESSION['previous']) {
        $tempEntry = $_SESSION['entry'];
        $tempCurrentPage = $_SESSION['currentPage'];
        session_destroy();
        $_SESSION['entry'] = $tempEntry;
        $_SESSION['currentPage'] = $tempCurrentPage;
    }
}

?>

<!-- jQuery (necessary for Bootstrap 's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>

<!--    custom style-->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!--font-->
<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">

<!--favicon-->
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->