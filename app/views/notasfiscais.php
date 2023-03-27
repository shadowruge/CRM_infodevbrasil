<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand">CRM infodevbrasil</a>
    <div class="mail"><a href="mailto:infodevbrasil@gmail.com">E-mail suport</a></div>
  </div>
 
</nav>
    <h1 class="my-5">Visualisação de notas fiscais.</h1>
    <table class="table">
  <thead>
    
  </thead>
  <tbody>
    
  </tbody>
</table>
</body>
</html>