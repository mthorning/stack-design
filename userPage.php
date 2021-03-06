<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html class="footer-html" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client's Area</title>

    <?php include 'components/headLinks.php'; ?>

</head>

<body id="userPage" class="basicPageTemplate footer-body">
    <?php
    if (!isset($_SESSION['username'])) {
        header('Location: clientLogin.php');
    } else {
        $username = $_SESSION['username'];
        $firstname = $_SESSION['firstname'];
        $lastname = $_SESSION['lastname'];
        $sites = $_SESSION['sites'];
        $siteFolders = $_SESSION['siteFolders'];
        $email = $_SESSION['email'];

        if (count($sites) > 1) {
            $multiAccess = true;
        } else {
            $multiAccess = false;
        }
        include 'components/header.php';
        include 'components/uploadPopup.php';
    }
    ?>


                <div class="container standardContainer">

                    <h1>Hello <?php echo $firstname; ?>.</h1>
                    <br />

                    <br />
                    <p>Click below to upload files, send a message or view the most recent developments to your website.</p>
                    
                    <?php
                    if ($multiAccess) {
                        echo '<select id="selectSite">';
                        for ($i = 0; $i < count($sites); $i++) {
                            echo '<option value="'.$siteFolders[$i].'">'.$sites[$i].'</option>';
                        }
                        echo '</select>';
                    }
            ?>

            <?php
            if (!$multiAccess) {
                  echo '<a href="#uploadContainer" id="upload" type="button" class="btn btn-lg btn-custom uploadBtn">Upload Files</a>';
                  
                  echo '<a href="#contactContainer" id="sendMessage" type="button" class="btn btn-lg btn-custom enquiryReq">Send a Message</a>';
            }
            ?>

                    <button id="view" type="button" class="btn btn-lg btn-custom">View Site</button>
                    
                    <?php include 'components/footer.php'; ?>
                    
                </div>

                <script type="text/javascript">
                    $(function () {
                        localStorage.setItem('emailVal', '<?php echo $email; ?>');
                        localStorage.setItem('nameVal','<?php echo $firstname . ' ' . $lastname; ?>');
                        localStorage.setItem('subjectVal', 'Contact from <?php echo $firstname; ?> at <?php echo $sites[0]; ?>');

                        var selected;
                        //view site button
                        var multiAccess = "<?php echo $multiAccess; ?>";
                        $('#view').click(function () {
                            if (multiAccess === true) {
                                selected = $('#selectSite option:selected').val();
                            } else {
                                selected = "<?php echo $siteFolders[0]; ?>";
                            }
                            window.location.href = 'clientarea/' + selected;
                        });
                        
                    });
                </script>
                <script type="text/javascript" src="js/baseJQ.js"></script>

</body>

</html>
<?php ob_end_flush(); ?>