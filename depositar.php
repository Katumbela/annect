
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
$_SESSION['login']=$logg

?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depositar - ANNECT</title>
    <link rel="stylesheet" href="main1.css">
</head>
<body>
    <header>
        <nav>
            <a href="dashboard.php"><span class="logo1"> ANNECT</span> </a>

<input type="checkbox" name="" id="check">
<label for="check" class="checkbtn">
            <div class="mobile-menu">
                <div class="linha1"></div>
                <div class="linha2"></div>
                <div class="linha3"></div>
            </div>
</label>
<ul class="nav-list">
    <li ><a href="dashboard.php">Início</a></li>
    <li ><a href="carteira.php">Depósito</a></li>
    <li><a href="convidados.php">Referidos</a></li>
    <li ><a href="ajuda.html">Ajuda</a></li>
    <li ><a href="configuracao.php">Conta</a></li>
    <li ><a href="index.php?logout=1">Sair</a></li>
</ul>
        </nav>
    </header>
<br>
    <center><h2 class="c-titulo">Quantia a Depositar</h2>
    <form action="deposit.php" method="post">
<h5>Seu endereço pessoal: jkatumbela9@gmail.com</h5>
<h5>Seu endereço de depósito: kat.aniumuconsultoria@gmail.com</h5>
    <input type="number" name="quantia" id="quantia">
    <input type="submit" class="term-dep" value="Terminar">

</form>
    
</body>
</html>