<?php
session_start();
include("conexao.php");

$id_user= $_SESSION['id'];
$id= $_GET['id'];



$eliminar = "UPDATE transacoes  SET estado='1' WHERE id='$id'";
$consultar =  $conexao->query($eliminar);

header('location:control.php');
?>