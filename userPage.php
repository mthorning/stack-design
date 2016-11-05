<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stack-Design</title>

    <?php include 'components/headLinks.php'; ?>

</head>

<body id="userPage" class="basicPageTemplate">
    <?php include 'components/header.php'; ?>
        <?php include 'components/uploadPopup.php'; ?>
            <?php
            $username = $_SESSION['username'];
            $firstname = $_SESSION['firstname'];
            $sites = $_SESSION['sites'];
            $siteFolders = $_SESSION['siteFolders'];
            
            if(count($sites) > 1) {
                $multiAccess = true;
            }else{
                $multiAccess = false;
            }
    
            if (!$username) {
                header('Location: clientLogin.php');
            }
        ?>


                <div class="container standardContainer">

                    <h1>Welcome <?php echo $firstname; ?></h1>
                    <br />

                    <h3>You have access to the following:</h3>
                    <br />

                    <?php
            
            foreach($sites As $site) {
                echo '<p>'.$site.'</p>';
            }
            
            ?>

                        <br />
                        <hr />

                        <h3>What would you like to do?</h3>
                        <?php 
                    if($multiAccess) {
                        echo '<select id="selectSite">';
                        for($i = 0; $i < count($sites); $i++) {
                        echo '<option value="'.$siteFolders[$i].'">'.$sites[$i].'</option>';
                    }
                    echo '</select>'; 
                    }
            ?>
                    
            <?php 
              if (!$multiAccess) {
                  echo '<button id="upload" type="button" class="btn btn-lg btn-custom uploadBtn">Upload Files</button>';  
              }    
            ?>

                            <button id="view" type="button" class="btn btn-lg btn-custom">View Site</button>

                </div>

                <script type="text/javascript" src="js/baseJQ.js"></script>

                <script type="text/javascript">
                    $(function () {
                        //view site button
                        var multiAccess = "<?php echo $multiAccess; ?>";
                        $('#view').click(function () {
                            if (multiAccess == true) {
                                var selected = $('#selectSite option:selected').val();
                            } else {
                                var selected = "<?php echo $siteFolders[0]; ?>";
                            }
                            window.location.href = 'clientarea/' + selected;
                        });

                        //upload files button
                        $('.uploadBtn').click(function () { openClosePopup('#uploadContainer');
                        });
                    });
                </script>

                <?php include 'modules/navigationClassControl.php'; ?>

</body>

</html>