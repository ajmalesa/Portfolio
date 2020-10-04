<?php

    $contactEmail = $_POST["contact-email"];
    $contactMessage = $_POST["contact-message"];

    if (isset($_POST['honeypot']) && $_POST['honeypot'] !== "") {
        echo "Beep boop bop.";
    } else {
        mail("ajmalesa@gmail.com", "Contact", $contactMessage . "\r\n\r\n Sender's email: " . $contactEmail);
    }

?>