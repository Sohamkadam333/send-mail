<!-- send mail -->

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $client_email = $_POST['email'];
  $subject = "Email Subject";
  $message = $_POST['message'];
  $to = "sohamkadam58@example.com";
  $headers = "From : $client_email";

  echo "$client_email  $subject $message <br>";


  mail($to, $subject, $message, $headers);
}
?>