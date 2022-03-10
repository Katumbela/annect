
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
$email=$_SESSION['email'];
$passe=$_SESSION['senha'];
$consulta = "SELECT * FROM cadastro WHERE senha='$passe' AND email='$email' "; 
$resultado =  $conexao ->query($consulta ); 
$dado = mysqli_fetch_array($resultado);  
$logg= $dado['nome'];
$id_logg= $dado['id'];
$_SESSION['login']=$logg;

$quantia=$_GET['quantidade'];
$da_carteira=$_GET['carteira_origem'];
$carteira_annect=$_GET['annect_endereco'];
?>




<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concluindo - ANNECT</title>
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<a href="dashboard">
<svg  viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
</svg></a> <h2 class="anne">ANNECT</h2>
<hr>
    <center><h1 class="c-titulo">Histórico de Transações</h1></center>
    
  <center>
   
    <br><br>
    <h4 class="c-dados-pessoal">Suas Transações</h4>
<br>
</center>

  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Operação</th>
          <th scope="col">Uni.</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">23/03/2021</th>
          <td>Levnt.</td>
          <td>$13.00</td>
          <td class="confirmado">confirmado</td>
        </tr>
      </tbody>
    </table>



</body>
</html>