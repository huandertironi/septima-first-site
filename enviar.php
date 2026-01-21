<?php
//iremos declarar as variaveis que recebemos pelo método post
//em alguns servidores nem precisamos declarar, depende do register_global=on ou =off
$nome=$_POST[nome];
$email=$_POST[email];
$assunto=$_POST[assunto];
$mensagem=$_POST[mensagem];

//agora vamos enviar todos esses dados usando a função mail
mail("bandaseptima@hotmail.com","$assunto","
Nome: $nome
Email: $email
Assunto: $assunto
Mensagem: $mensagem","FROM:$nome<$email>");

echo "<script>alert('Obrigado! Entraremos em contato em breve!');top.location.href='base.html'</script>";

?>



