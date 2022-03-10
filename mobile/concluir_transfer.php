<?php
session_start();
include('conexao.php');
?>
<?php
if((!isset($_SESSION['email'])== true) and (!isset ($_SESSION['senha'])==true)){
  unset($_SESSION['email']);
unset( $_SESSION['senha']);
header('location:index');

}
//---------------------------------------------------------------------


//variaveis pegadas do metodo post do formulario

$nome= $_SESSION['nome'];
$user_idd= $_SESSION['id'];
$quantia=$_POST['quantidade'];
$saldo=$_POST['saldo'];
$destinatario=$_POST['email_destino'];

$dia=date('d');
$mes=date('M');
$ano=date('Y');
$hora=date('H');
$data="$dia $mes $ano, $hora h";
/*---------------------------------------------------------------------------------------*/

$email=$_SESSION['email'];
$passe=$_SESSION['senha'];
$consulta = "SELECT * FROM cadastro WHERE senha='$passe' AND email='$email' "; 
$resultado =  $conexao ->query($consulta ); 
$dado = mysqli_fetch_array($resultado);  
$logg= $dado['nome'];
$id_logg= $dado['id'];
$log_bal= $dado['balance'];
$_SESSION['login']=$logg;

/*consilta de dados de conta a transferir*/
$consulta_conta = "SELECT nome FROM cadastro WHERE  email='$destinatario' "; 
$resultado_conta =  $conexao ->query($consulta_conta ); 
$dado_conta = mysqli_fetch_array($resultado_conta);  
$conta_exist= $dado_conta['nome'];
//termina aqui

if(!$dado_conta){
  echo "<br><center class='container'><img src='icones/erro_annect.png' alt='erro' height='18%' width='20%' class='icon'><br><h4> Não existe nenhuma conta na annect com este email, por favor verifique se email está correcto e tente novamente! </h4><br> <a href='dashboard'>Voltar</a></center>";
}

else{

//subtração da transferencia
if( $quantia < $log_bal ){

$res_bal1= $log_bal - $quantia; 

}

if( $quantia > $log_bal ){
  
$res_bal1= $quantia - $log_bal; 

}


//aqui vai a logica das transferencias e tudo mais

$transfer1= "UPDATE cadastro SET balance='$res_bal1' WHERE email='$email'";
$actualizar1 =  $conexao->query($transfer1);

//termina aqui

$consulta_email = "SELECT * FROM cadastro WHERE email='$destinatario' "; 
$resultado_email =  $conexao ->query($consulta_email ); 
$dado_email = mysqli_fetch_array($resultado_email);  
$dest_nome= $dado_email['nome'];  
$dest_bal= $dado_email['balance'];

//adição da transferencia
$res_bal2= $dest_bal + $quantia;
//actualização do saldo 
$transfer2= "UPDATE cadastro SET balance='$res_bal2' WHERE email='$destinatario'";
$actualizar2 =  $conexao->query($transfer2);

$inserir = "INSERT INTO transacoes (nome, id_usuario, tipo_de_transacao, carteira_usuario, quantidade_dolar,  estado, para, datas) VALUES ('$nome', '$user_idd', 'Transf.','$email', '$quantia', '1',' $destinatario', '$data')";
$consultar =  $conexao->query($inserir);


?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferencia bem Sucedida</title>
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="main1.css">
    <style>

        
.concluido:hover{
    opacity: 0.8;
}
.anne{
  float: right;
  color: #0255b3;
  margin-right:2%;
}
.concluido{
    text-decoration: none;
    color: rgb(9, 61, 35);
}
    </style>
</head>
<body>
  <a href="dashboard">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
</svg></a> <h2 class="anne">ANNECT</h2>
<hr>
<?php

?>
    <p class="container">Olá <?=$logg?>, o sua transferencia  de  $ <?=$quantia?> para <b> <?=$destinatario?></b> ( <?=$dest_nome?> ) foi realizado com sucesso!<br><center> <a class="concluido" href="depositos">ver transações</a></center></p>
<?php
}
?>

  </body>
</html>