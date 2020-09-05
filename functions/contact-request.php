<?php

    $contactEmail = $_POST["contact-email"];
    $contactMessage = $_POST["contact-message"];

    mail($contactEmail, "Contact", $contactMessage);

?>