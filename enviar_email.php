<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "campossoares.daniel@gmail.com";
  $subject = "Formulário de Contato";
  $headers = "From: $name <$email>";
  $body = "Mensagem: $message";

  if (mail($to, $subject, $body, $headers)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Erro ao enviar a mensagem.";
  }
}
?>
