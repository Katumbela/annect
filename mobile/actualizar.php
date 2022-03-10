<?php
session_start();
include("conexao.php");



$titular= $_SESSION['login'];
$id_usuario= $_SESSION['id'];
$endereco= $_GET['endereco'];
$tipo=$_GET['tipo_carteira'];
$banco=$_GET['tipo_banco'];
$iban=$_GET['iban'];


if(isset($_GET['add_wallet'])){
    
$inserir = "INSERT INTO carteiras( id_usuario, endereco, tipo, datas) VALUES ('$id_usuario', '$endereco', '$tipo', now())";
$consultar =  $conexao->query($inserir);

}


if(isset($_GET['vincular_banco'])){
    
    $inserir = "INSERT INTO bancos( id_usuario, banco, iban, titular, datas) VALUES ('$id_usuario', '$banco', '$iban', '$titular', now())";
    $consultar =  $conexao->query($inserir);
    
    }


header("location: configuracao.php");
?>