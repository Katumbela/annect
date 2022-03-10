
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
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <header>
        <nav>
            <span class="logo1"><a href="dashboard.php"> ANNECT </a></span>

<input type="checkbox" name="" id="check">
<label for="check" class="checkbtn">
            <div class="mobile-menu">
                <div class="linha1"></div>
                <div class="linha2"></div>
                <div class="linha3"></div>
            </div>
</label> <ul class="nav-list">
    <li><a onclick="carregar()" href="dashboard.php">Início</a></li>
    <li><a onclick="carregar()" href="carteira.php">Depósito</a></li>
    <li><a onclick="carregar()" href="convidados.php">Referidos</a></li>
    <li><a onclick="carregar()" href="ajuda.php">Ajuda</a></li>
    <li><a onclick="carregar()" href="configuracao.php">Conta</a></li>
    <li><a onclick="carregar()" href="index.php?logout=1">Sair</a></li>
</ul>
        </nav>
    </header>

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