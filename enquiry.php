<?php
session_start();

$errors = '';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['comment'];

$missingName = '<p>Please enter your name.</p>';
$missingEmail = '<p>Please enter your email.</p>';
$missingSubject = '<p>Please enter your subject.</p>';
$missingMessage = '<p>Please enter your message.</p>';

if (!$name) {
    $errors .= $missingName;
}

if (!$email) {
    $errors .= $missingEmail;
}

if (!$subject) {
    $errors .= $missingSubject;
}

if (!$message) {
    $errors .= $missingMessage;
}

if ($errors) {
    $_SESSION['errors'] = '<div class="alert alert-danger">' . $errors . '</div>';
    header('location: ' . $_SESSION['currentPage']);
}
