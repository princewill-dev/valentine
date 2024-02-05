<?php


    // Recipient email address
    $to = "val.headgear787@passmail.net";

    // Subject of the email
    $subject = "Val Answer!";

    // Message body of the email
    $message = "Yayyy!!! she said yes";

    // Additional headers
    $headers = "From: hello@princewilldev.com";

    // Send the email
    mail($to, $subject, $message, $headers);

    header("Location: yes.php");

?>