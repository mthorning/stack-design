<?php session_start(); ?>

<!DOCTYPE html>
<html class="footer-html" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stack-Design</title>

    <?php include 'components/headLinks.php'; ?>

</head>

<body class="basicPageTemplate footer-body">

    <?php include 'components/header.php'; ?>
        <div class="container standardContainer">
        <div class="col-md-4 col-md-push-8 menu col-xs-12">
                <ul id="menuItems" class="pull-right">

                </ul>
            </div>
            <div id="content" class="col-md-8 col-md-pull-4 col-xs-12">
            </div>
        </div>
        <?php include 'components/footer.php'; ?>
        <script type="text/javascript" src="js/baseJQ.js"></script>

        <script type="text/javascript" src="js/about.js">
        </script>
        
</body>

</html>