<?php

    $contactEmail = $_POST["contact-email"];
    $contactMessage = $_POST["contact-message"];

    mail("ajmalesa@gmail.com", "Contact", $contactMessage . "<br /> sender's email: " . $contactMessage);

?>