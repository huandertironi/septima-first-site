<?php
//iremos declarar as variaveis que recebemos pelo método post
//em alguns servidores nem precisamos declarar, depende do register_global=on ou =off
$email=$_POST[email];

//agora vamos enviar todos esses dados usando a função mail
mail("bandaseptima@hotmail.com","$assunto","
Email: $email
Assunto: Cadastro Site
Mensagem: Quero receber novidades do Septima","FROM:$email");

echo "<script>alert('Obrigado! A partir de agora você receberá notícias do Septima');top.location.href='base.html'</script>";

?>



