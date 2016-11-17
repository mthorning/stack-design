<?php  
                
//error messages
$missingName = '<p><strong>Please enter your name.</strong></p>';
$missingEmail = '<p><strong>Please enter your email address.</strong></p>';               
$invalidEmail = '<p><strong>Please enter a valid email address.</strong></p>';    
$missingMessage = '<p><strong>Please enter a message.</strong></p>';
    
//Get user input
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
                
                
//if user has submitted form
if ($_POST["submit"]) {
    if(!$name) {
        $errors .= $missingName;
    }else{
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    }
    
    if(!$email) {
        $errors .= $missingEmail;
    }else{
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors .= $invalidEmail;
        }
    }
    
    if (!$message) {
        $errors .=$missingMessage;
    }else{
        $message = filter_var($message, FILTER_SANITIZE_STRING);
    }
    
    //if there are any errors
    if ($errors) {
        $resultMessage = '<div class="alert alert-danger">' . $errors . '</div>';
    }
        // no => send email. email sent? 
            // yes => print success message
            // no => print warning message
//print result message
echo $resultMessage;
}
                
?>
                        <form action="contactform.php" method="post">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea name="message" id="message" class="form-control" rows="5"><?php echo $message; ?>
                                </textarea>
                            </div>
                            <input value="Send Message" type="submit" name="submit" class="btn btn-lg btnColor pull-right">
                        </form>