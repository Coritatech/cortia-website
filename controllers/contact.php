<?php

include "../functions.php";

// Check if the form was submitted
if (isset($_POST['send_msg'])) {
    // Sanitize and fetch form inputs
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $org = $_POST['org'];
    $content = $_POST['message'];

    $msg = "<center><h3>Message from $name </h3></center>
            <p><strong>Organization:</strong> $org </p>
            <p><strong>Email:</strong> $email </p>
            <p><strong>Message:</strong><br> $content</p>";

    if(mailingMethod($email, $name, $subject, $msg) == 1){
        $response = 'Thanks, Your message has been sent successfully. We will get back to you soon.';
    }else{
        $response = 'There was an error sending your message. Please try again later.';
    }

}

$name = 'Contact';
require "views/contact.view.php";