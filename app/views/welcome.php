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
    <title>Bem vindo!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<style>
    #container{
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    .my-5{
        margin-left: auto;
        margin-right: auto;
        text-align: center;  

    }
</style>
<body>
<nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand">CRM infodevbrasil</a>
    <div class="mail"><a href="mailto:infodevbrasil@gmail.com">E-mail suport</a></div>
  </div>
 
</nav>
    <h1 class="my-5">Oi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.<br> Bem vindo ao CRM infoDEV Brasil.</h1>
    <div id="container">
    <p>
        <a href="/app/config/reset-password.php" class="btn btn-warning">Redefina sua senha</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
    </p>
    <p> 
        <a href="/app/cadastros/cadastroclientes.php" class="btn btn-primary">Cadastro de Clientes</a>
        <a href="viewclientes.php" class="btn btn-primary">Clientes View</a>
        <a href="clientesprovaveis.php" class="btn btn-primary">Clientes provaveis</a>  
        
    </p>
    <p>
        <a href="/app/views/ordensdeservicos.php" class="btn btn-primary">Ordens de serviços view</a>    
        <a href="/app/cadastros/cadastronotasfiscais.php" class="btn btn-primary">Cadastro de notas</a> 
        <a href="/app/views/notasfiscais.php" class="btn btn-primary">Notas View</a> 
    </p>
    <p>
    <a href="/app/cadastros/cadastrocolaboradores.php" class="btn btn-primary">Cadastro de colaboradores</a> 
        <a href="/app/views/colaboradores.php" class="btn btn-primary">Colaboradores view</a>    
        <a href="users.php" class="btn btn-primary">Usuarios</a>
    </p>
    <p>
        <a href="ordensdeservicos.php" class="btn btn-primary">Novos projetos</a>    
        <a href="clientesprovaveis.php" class="btn btn-primary">Projetos em andamento</a>
        <a href="clientesprovaveis.php" class="btn btn-primary">Projetos finalizados</a>
    </p>
    <p>
        <a href="cadastrorcamentos.php" class="btn btn-primary">Cadastro de orçamentos</a>  
        <a href="orcamentos.php" class="btn btn-primary">Orçamentos views</a>    
     
    </p>
    <p>
        <a href="servicos.php" class="btn btn-primary">Serviços</a>
        <a href="servicosandamentos.php" class="btn btn-primary">Serviços em andamento</a>
        <a href="servicosfinalizados.php" class="btn btn-primary">Serviços finalizados</a>
    </p>
    </div>
</body>
</html>