<?php

   $to = "sales@yourpreferredtvdealer.com";
   $subject = "New Quotes From Websitee";
   $message = "A new Quotes form has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "E-Mail: " . $_POST["email"];
   $headers = "From: no-reply@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: index.html");

?>