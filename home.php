<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stack-Design</title>

    <?php include 'components/headLinks.php'; ?>

</head>

<body id="homePage">

    <?php
    if ($_SESSION['entry']) {
        echo '
        <script>
            $(function() {
                $("#welcomeSequence").hide();
            });
        </script>';
    }
    include 'components/header.php';
    ?>

        <div id="mainStackH1Div">
            <h1 id="mainStackH1"><img src="img/stackLogo.png">Stack-Design</h1>
        </div>

        <div id="welcomeSequence">
            <div id="slideBox1" class="slideBox">
                <h1><br />Hello, my name is Matt and I build websites.</h1>
            </div>
            <div id="slideBox2" class="slideBox">
                <h1>I believe that when you are running a business, creating a website should be the least of your worries. </h1>
            </div>
            <div id="slideBox3" class="slideBox">
                <h1>I can create a website for you and manage it once it is launched.</h1>
            </div>
            <div id="slideBox4" class="slideBox">
                <h1>Leaving you to do what you do best... </h1>
            </div>
        </div>

        <script type="text/javascript" src="js/baseJQ.js"></script>
        <?php 
            if ($_SESSION['entry'] == 0) {
                echo '
                    <script type="text/javascript" src="js/homePageJQ.js"></script>
                ';
                $_SESSION['entry'] = 1;
            }
        ?>

</body>

</html>