<?php

if($_POST['Email'] !== null)
{
    $nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $mensagem = $_POST['Mensagem'];

    $to = "autoajudaetec@gmail.com";
    $subject = " Feedback - TE AJUDA";
    $body = "Nome:" .$nome. "\n".
            "Email:" .$email. "\n".
            "Mensagem:" .$mensagem;
    $header = "</From:andrella852>@gmail.com"."\r\n". "Replay-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();
if(mail($to,$subject,$body,$header))
{
    echo("Email enviado com sucesso!");
}
else{
    echo("O Email não pode ser enviado");
}
}

  

?>