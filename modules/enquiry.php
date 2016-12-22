<?php
session_start();

$errors = '';

$_SESSION['enquiryMade'] = true;
$_SESSION['formName'] = $name = $_POST['name'];
$_SESSION['formEmail'] = $email = $_POST['email'];
$_SESSION['formSubject'] = $subject = $_POST['subject'];
$_SESSION['formMessage'] = $message = $_POST['comment'];

$missingName = '<p><strong><span class="glyphicon glyphicon-exclamation-sign"></span></strong> Please enter your name.</p>';
$missingEmail = '<p><strong><span class="glyphicon glyphicon-exclamation-sign"></span></strong> Please enter your email.</p>';
$missingSubject = '<p><strong><span class="glyphicon glyphicon-exclamation-sign"></span></strong> Please enter your subject.</p>';
$missingMessage = '<p><strong><span class="glyphicon glyphicon-exclamation-sign"></span></strong> Please enter your message.</p>';
$invalidEmail = '<p><strong><span class="glyphicon glyphicon-exclamation-sign"></span></strong> Please enter a valid email address.</p>';

if (!$name) {
    $errors .= $missingName;
} else {
    $name = filter_var($name, FILTER_SANITIZE_STRING);
}

if (!$email) {
    $errors .= $missingEmail;
} else {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors .= $invalidEmail;
    }
}

if (!$subject) {
    $errors .= $missingSubject;
} else {
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
}

if (!$message) {
    $errors .= $missingMessage;
} else {
    $message = filter_var($message, FILTER_SANITIZE_STRING);
}

if ($errors) {
    $_SESSION['errors'] = '<div class="alert alert-danger">' . $errors . '</div>';
    $_SESSION['success'] = false;
    header('location: ' . $_SESSION['currentPage']);
} else {
    $_SESSION['success'] = true;
    //email details
    $email_to = "matt@stack-design.co.uk";
    $email_subject = "Customer Enquiry";

    //email form details
    $email_message =
    "<html>
        <body>
            <img style='width: 20%; height: auto;' src='http://stack-design.co.uk/img/Stack-Design-logo.jpg>
            <div style='padding: 5px;'>
                <h2 Style='color: #ff6619;'>You have been contacted by ".ucwords($name)."</h2>
                <h3 Style='color: #ff6619;'>Message:</h3>
                <p style='padding-left: 30px; font-size: 1.2em'>" . $message . "</p>
            </div>
            <br />
            <hr />
            <p style='font-size: 1.1em'>Email: <span style='font-style: italic'><a href='mailto:" . $email . "'>" . $email . "</a></span></p>  
        </body>
    </html>";
                    
                    
    $headers = "From: " .$email. "\r\n" .
    "Reply-To: " .$email. "\r\n".
    "Content-type: text/html" . "\r\n".
    "CC:";
    mail($email_to, $email_subject, $email_message, $headers);

    header('location: ' . $_SESSION['currentPage']);
}
