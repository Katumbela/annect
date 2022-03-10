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
    header('location:dashboard.php');
}
else
{

    echo "senha ou email inserido está incorrecto, tente novamente! <br>";
    echo $senha ;
    echo $email;
    echo $d_email;
    echo $d_senha;
}

?>