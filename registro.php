<?php
include("conexao.php");

$nome= $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$senha= $_POST['senha'];
$pais= $_POST['pais'];
$banco= $_POST['banco'];
$sexo =$_POST['sexo'];




$inserir = "INSERT INTO cadastro (nome, email, senha, telefone, pais, banco, sexo, datas) VALUES ('$nome', '$email', '$senha', '$telefone', '$pais',' $banco', '$sexo', now())";
$consultar =  $conexao->query($inserir);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro bem sucedido</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <h1 class="sucess">Registro bem sucedido, agora pode fazer Login <a href="index.php">aqui</a></h1>
</body>
</html>