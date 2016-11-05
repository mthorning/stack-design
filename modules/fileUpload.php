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
echo $target.'<br />';
        //Size condition
        if ($uploaded_size > 400000) {
            echo '<p>Your file is too large</p>';
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
echo 'file moved <br />';
                $msg .= '<p>The file '.basename($_FILES['uploaded']['name']).' has been uploaded</p>';
                $msgClass = 'alert alert-success';
            }else{
echo 'file not moved <br />';
                $msg .= '<p>Sorry, there was a problem uploading your file</p>';
                $msgClass = 'alert alert-danger';
            }
        }
?>

        <div class="<?php echo $msgClass; ?>">
            <?php echo $msg; ?>
        </div>