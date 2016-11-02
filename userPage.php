<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stack-Design</title>

        <?php include 'components/headLinks.php'; ?>

    </head>

    <body class="basicPageTemplate">
        <?php include 'components/header.php'; ?>
        <?php
            $username = $_SESSION['username'];
            echo $username;
            if (!$username) {
                echo '<p>no username exists</p>';
                header('Location: clientLogin.php');
            }
        ?>  


        <div class="container standardContainer">
            <h1>Welcome <?php echo $username; ?></h1>
        </div>

        <script type="text/javascript" src="js/baseJQ.js"></script>
        <?php include 'modules/navigationClassControl.php'; ?>

    </body>

</html>