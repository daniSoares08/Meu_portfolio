
<?php
ini_set("SMTP", "campossoares.daniel@gmail.com");
ini_set("smtp_port", "587");

if (isset($_POST['email']) && !empty($_POST['email'])) {
  $msg = '';

  $name = addslashes($_POST["name"]);
  $email = addslashes($_POST["email"]);
  $message = addslashes($_POST["message"]);

  $to = "campossoares.daniel@gmail.com";
  $subject = "Formulário de Contato";
  $body = "Mensagem: $message";
  $headers = "From:campossoares.daniel@gmail.com"."\r\n".
              "Reply-To:".$email. "\r\n".
              "X=Mailer:PHP/".phpversion();



  if (mail($to, $subject, $body, $headers)) {
    $msg = '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Mensagem enviada com sucesso!</strong> 
            </div>';
    
  } else {
    $msg = '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erro ao enviar mensagem, tente novamente! </strong> 
            </div>';
  }
} else {
        
  //mostra mensagem de erro caso algum dos campos esteja vazio
  $msg = '<div class="alert alert-danger alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Preencha o campo de email!! </strong> 
      </div>';
}
?>
