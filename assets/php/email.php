<?php 



if(isset($_POST['email']&& !empty($_POST['email']))){


$nome = addslashes($_POST['name'])
$email = addslashes($_POST['email'])
$assunto = addslashes($_POST['assunto'])
$mensagem = addslashes($_POST['mensage'])


$to = "viniciusfpinheiro0@gmail.com"
$subjet = "Contato - Portfolio"
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Mensagem: ".$mensagem;

$header = "From:portfolio-site@github.io"."\r\n"
            ."Reply-To".$email."\e\n"
            ."X=Mailer:PHP".phpversion()


if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("O Email não pode ser enviado");
}

}

?>