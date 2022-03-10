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


?>


<?php
$nome= $_SESSION['nome'];
$user_idd= $_SESSION['id'];
$quantia=$_GET['quantidade'];
$titular=$_GET['titular'];
$iban=$_GET['iban'];
$carteira_annect=$_GET['annect_endereco'];



$inserir = "INSERT INTO transacoes (nome, id_usuario, tipo_de_transacao, carteira_usuario, quantidade_dolar,  estado, para, datas) VALUES ('$nome', '$user_idd', 'Saque','$titular', '$quantia', 'Confirmado',' IBAN:  $iban', now())";
$consultar =  $conexao->query($inserir);


?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transação bem Sucedida</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="main1.css">
    <style>

        
.concluido:hover{
    opacity: 0.8;
}
.concluido{
    text-decoration: none;
    color: rgb(9, 61, 35);
}
    </style>
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
    <h1 class="sucess">Olá <?=$logg?>, o seu pedido de saque de $ <?=$quantia?> para o seu banco pelo IBAN: " <?=$iban?> " está em processamento. <br>Aguarde um instante, por favor!<br> <a class="concluido" href="depositos.php">ver transações</a></h1>
</body>
</html>