<?php

// Check the value of a URL tag
$answer = htmlspecialchars($_GET["answer"]);

// Check if the statement is true
if ($answer == "yes") {
    
    // Recipient email address
    $to = "val.headgear787@passmail.net";

    // Subject of the email
    $subject = "She Said Yes!";

    // Message body of the email
    $message = "This is a test email.";

    // Additional headers
    $headers = "From: hello@princewilldev.com";

    // Send the email
    mail($to, $subject, $message, $headers);
}

else if ($answer == "no") {
    header("Location: again.php");
}

// else {
//     echo "Invalid answer.";
// }
