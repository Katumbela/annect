<?php
session_start();
include("conexao.php");

$id_user= $_SESSION['id'];
$id_banco= $_GET['id_b'];



$eliminar = "DELETE FROM bancos WHERE id_usuario='$id_user' AND id='$id_banco' ";
$consultar =  $conexao->query($eliminar);

header('location:configuracao.php');
?>