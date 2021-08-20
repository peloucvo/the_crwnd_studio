<?php

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $companyName = $_POST['companyname'];
    $brand = $_POST['whatcompanydo'];
    $mailFrom = $_POST['youremail'];
    $phone = $_POST['phonenumber'];
    $webDesign = $_POST['webDesign'];
    $printDesign = $_POST['printDesign'];
    $branding = $_POST['branding'];
    $message = $_POST['message'];

    $mailTo = "vojta.pelouch@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from".$name.".\n\n."$message;

    mail($mailTo,$txt,$headers); 
    header("Loaction: contact.php?mailsend");
}