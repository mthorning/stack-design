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
    <?php
$msg = '';
$msgClass = '';
$ok = 1;
?>
        <?php   
        session_start();
        $siteFolders = $_SESSION['siteFolders'];
        $target = 'C:/xampp/htdocs/uploads/'.$siteFolders[0].'/';
        if (!file_exists($target)) {
            mkdir($target, 0777, true);
        }
        $target = $target.time().'-'.basename($_FILES['uploaded']['name']);
        $uploaded_size = $_FILES['uploaded']['size'];
        $uploaded_type = $_FILES['uploaded']['type']; 
        //Size condition
        if ($uploaded_size > 400000) {
            echo '<p class="text-center">Your file is too large</p>';
            $ok = 0;
        }
        
        //file limit type condition
        if ($uploaded_type == 'text/php') {
            echo '<p>No PHP files allowed</p>';
            $ok = 0;
        }
        
        //display errors if there are any
        if ($ok == 0) {
            $msgClass = 'alert alert-danger';
        }else{
            //try to upload file
            if (move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) {
                $msg .= '<p class="text-center">The file '.basename($_FILES['uploaded']['name']).' has been uploaded</p>';
                $msgClass = 'alert alert-success';
            }else{
                $msg .= '<p class="text-center">Sorry, there was a problem uploading your file</p>';
                $msgClass = 'alert alert-danger';
            }
        }
?>

            <?php include 'components/header.php'; ?>

                <div class="container standardContainer">
                    <div class="<?php echo $msgClass; ?>">
                        <?php echo $msg; ?>
                    </div>
                    <a class="pull-right" href="userPage.php">...back</a>
                </div>

                <script type="text/javascript" src="js/baseJQ.js"></script>
                <?php include 'modules/navigationClassControl.php'; ?>

</body>

</html>