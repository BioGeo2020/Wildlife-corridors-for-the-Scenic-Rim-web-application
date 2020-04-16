<?php

if (isset($_POST['submit'])) {
    
    
    $name = $_post['name'];
    $subject= $_post['subject'];
    $name = $_post['name'];
    $mailFrom = $_post['mail'];
    $message = $_post['message'];
    
    $mailTo = "andrew.mackey@biogeo.com.au";
    $headers = "From: ".$mailFrom;
    
    $txt = "You have recieved an email from ".$name. ".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
    
}