<?php
session_start();
include("conexao.php");

$senha= $_POST['senha'] ;
$email= $_POST['email'] ;



$ver = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha' ";
$final_res =  $conexao->query($ver);
$consultar=mysqli_fetch_array($final_res);
$d_email=$consultar['email'];
$d_senha =$consultar['senha'];
$d_nome =$consultar['nome'];
$d_id =$consultar['id'];

if($email == $d_email && $senha == $d_senha){

    $_SESSION['email']= $d_email;
    $_SESSION['senha'] = $d_senha;
    $_SESSION['nome'] = $d_nome;
    $_SESSION['id'] = $d_id;
    header('location:control.php');
}
else
{

    echo "Seus dados estão incorrectos, tentativa suspeita. <br> Tente novamente em 1h:59min! <br>";
  
}

?>