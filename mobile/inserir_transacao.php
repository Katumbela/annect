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
$user_wallet= $_GET['user_wallet'];
$type_wallet= $_GET['type_wallet'];
$da_carteira=$_GET['carteira_origem'];
$carteira_annect=$_GET['annect_endereco'];
$dia=date('d');
$mes=date('M');
$ano=date('Y');
$hora=date('H');
$data="$dia $mes $ano, $hora h";



$inserir = "INSERT INTO transacoes(nome, id_usuario, tipo_de_transacao, carteira_usuario, quantidade_dolar,  estado, para, datas) VALUES ('$nome', '$user_idd', 'depó.', '$user_wallet', '$quantia', '2',' $carteira_annect', '$data')";
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
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="preloader/preloader-style.css">
    <script src="main.js"></script>
    <style>

        
.concluido:hover{
    opacity: 0.8;
}
.concluido, .endereco{
    text-decoration: none;
    color: rgb(9, 61, 35);
}
    </style>
</head>
<body>
<body><a href="dashboard">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
</svg></a>

<center class="container">
    <img src="icones/sucess_annect.png" alt="success" width="20%" height="20%">
    <br><br>
    <h4 class="sucess">Concluido <?=$logg?>, Aguardamos o seu depósito de $ <?=$quantia?> para a sua carteira ANNECT no <br> Endereço:<br><br> <span class="endereco"><?=$carteira_annect?></span> <br> </h4>
<br>
    <a href="dashboard.php"><button class="btn btn-success">Concluido</button></a>
</center>


</body>
</html>