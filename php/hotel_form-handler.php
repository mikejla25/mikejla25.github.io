<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $message = htmlspecialchars(trim($_POST["message"]));

  $to = "hotel@example.com";
  $subject = "Nová zpráva z kontaktního formuláře";
  $headers = "From: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  $body = "Jméno: $name\nE-mail: $email\nZpráva:\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo "Děkujeme za zprávu. Brzy se vám ozveme.";
  } else {
    echo "Omlouváme se, zprávu se nepodařilo odeslat.";
  }
}
?>
