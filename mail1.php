<?php

   $to = "sales@yourpreferredtvdealer.com";
   $subject = "New Quotes From Websitee";
   $message = "A new Quotes form has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "Email: " . $_POST["email"] . "\n";
   $message .= "Phone: " . $_POST["phone"] . "\n";
   $message .= "Address: " . $_POST["add"];
   $headers = "From: no-reply@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: offer.html");

?>