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
    <h1 class="my-5">Visualisação de clientes.</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Responsável</th>
      <th scope="col">Nome</th>
      <th scope="col">Cpf/Cnpj</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Endereço</th>
      <th scope="col">cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Cep</th>
      <th scope="col">...</th>
    </tr>
  </thead>
 
</body>
    <?php
// Configurações do banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "CRM_infodevbrasil";

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão é bem sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL para selecionar todos os registros da tabela "clientes"
$sql = "SELECT * FROM clientes";

// Executa a consulta SQL
$result = $conn->query($sql);

// Verifica se a consulta retornou registros
if ($result->num_rows > 0) {
    

    // Exibe os dados em cada linha da tabela HTML
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td></td>
        <td>" . $row["id"] . "</td>
        <td>" . $row["responsavel"] . "</td>
        <td>" . $row["nome"] . "</td>
        <td>" . $row["cpf_cnpj"] . "</td>
        <td>" . $row["email"] . "</td>
        <td>" . $row["telefone"] . "</td>
        <td>" . $row["endereco"] . "</td>
        <td>" . $row["cidade"] . "</td>
        <td>" . $row["estado"] . "</td>
        <td>" . $row["cep"] . "</td>
        <td>" . "..." . "</td>

        </tr>";
    }

    
    // Fecha a tabela HTML
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
