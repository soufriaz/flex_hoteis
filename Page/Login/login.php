<?php
$email = @$_REQUEST['user'];
$password = @$_REQUEST['pass'];
$submit = @$_REQUEST['submit'];

/* Declaração das variáveis que possuem os usuarios e as senhas */
$user1 = 'toolmmer';
$pass1 = 'a1b24d';

$user2 = 'gabrielsooco';
$pass2 = 'b3gabriel';

/* Testa se o botão submit foi ativado */
if($submit){

  /* Se o campo usuário ou senha estiverem vazios geramos um alerta */
  if($user == "" || $pass == ""){
    echo "<script:alert('Por favor, preencha todos os campos!');</script>";
  }
  /* Caso o campo usuario e senha não 
    *estejam vazios vamos testar se o usuário e a senha batem 
  *iniciamos uma sessão e redirecionamos o usuário para o painel */
  else{
    if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
      session_start();
      $_SESSION['usuario']=$user;
      $_SESSION['senha']=$pass;
      header("Location: painel.php");
    }
    /* Se o usuario ou a senha não batem alertamos o usuario */
    else{
      echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
    }
  }
}
?>