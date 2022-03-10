<?php
session_start();
include('conexao.php');
?>
<?php
if((!isset($_SESSION['email'])== true) and (!isset ($_SESSION['senha'])==true)){
  unset($_SESSION['email']);
unset( $_SESSION['senha']);
header('location:index.php');

}
$email=$_SESSION['email'];
$passe=$_SESSION['senha'];
$consulta = "SELECT * FROM cadastro WHERE senha='$passe' AND email='$email' "; 
$resultado =  $conexao ->query($consulta ); 
$dado = mysqli_fetch_array($resultado);  
$logg= $dado['nome'];
$id_logg= $dado['id'];
$_SESSION['login']=$logg;

$banco=$dado['banco'];

$dia=date('d');
$mes=date('M');
$ano=date('Y');
$hora=date('H');
$data="$dia $mes $ano, $hora h";
?>


<?php
$nome= $_SESSION['nome'];
$user_idd= $_SESSION['id'];
$quantia=$_GET['quantidade'];
$titular=$_GET['titular'];
$iban=$_GET['iban'];



$inserir = "INSERT INTO transacoes (nome, id_usuario, tipo_de_transacao, carteira_usuario, quantidade_dolar,  estado, para, datas) VALUES ('$nome', '$user_idd', 'Saque','$titular', '$quantia', '2',' IBAN:  $iban', '$data')";
$consultar =  $conexao->query($inserir);


?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transação bem Sucedida</title>
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
<body><a href="dashboard.php">
<svg  viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
</svg></a> <h2 class="anne">ANNECT</h2>
<hr>
<center class="container">
  <img src="icones/sucess_annect.png" alt="annect sucess" width="20%" height="20%">

    <h4 class="sucess">Seu pedido de saque de $ <?=$quantia?> para o seu banco <?=$banco?>, IBAN: " <?=$iban?> " está em processamento. <br>Aguarde um instante, por favor!<br> <a class="concluido" href="depositos.php">ver transações</a></h4>
<br>
<a href="dashboard.php"><button class="btn btn-success">      OK     </button></a></center>
</body>
</html>