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
    <style>
     
     body{
        display: flex;
        flex-wrap: wrap;
        font: 14px sans-serif;
        max-width: 650px;
        margin: 20px;
     }   

    </style>
</head>
<body>
    <h1 class="my-5">Oi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.<br> Bem vindo CRM infoDEV Brasil.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Redefina sua senha</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
    </p>
    <p> 
        <a href="cadastroclientes.php" class="btn btn-primary">Cadastro de Clientes</a>
        <a href="viewclientes.php" class="btn btn-primary">Clientes View</a>
        <a href="clientesprovaveis.php" class="btn btn-primary">Clientes provaveis</a>  
        
    </p>
    <p>
        <a href="ordensdeservicos.php" class="btn btn-primary">Ordens de serviços view</a>    
        <a href="cadastronotasfiscais.php" class="btn btn-primary">Cadastro de notas</a> 
        <a href="notasfiscais.php" class="btn btn-primary">Notas View</a> 
    </p>
    <p>
    <a href="cadastrocolaboradores.php" class="btn btn-primary">Cadastro de colaboradores</a> 
        <a href="colaboradores.php" class="btn btn-primary">Colaboradores view</a>    
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
</body>
</html>