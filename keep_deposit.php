
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

$acao=$_GET['transacao'];


?>


<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet - Depósito </title>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="preloader/preloader-style.css">
    <script src="main.js"></script>
</head>
<style>
    
#input{
    width:20%;
    letter-spacing: 2px;
    border-color: rgb(47, 137, 255);
    font-size: 15px;
}
</style>
<body>
    <main class="bodi">
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
    <li><a onclick="carregar()" href="dashboard.php">Início</a></li>
    <li><a onclick="carregar()" href="carteira.php">Depósito</a></li>
    <li><a onclick="carregar()" href="convidados.php">Referidos</a></li>
    <li><a onclick="carregar()" href="ajuda.php">Ajuda</a></li>
    <li><a onclick="carregar()" href="configuracao.php">Conta</a></li>
    <li><a onclick="carregar()" href="index.php?logout=1">Sair</a></li>
</ul>
        </nav>
    </header>

    <center>

        <h1 class="deposito">De: <?=$acao?></h1>
    
</center>
     <center>
         <form action="inserir_transacao.php" method="get">
<?php

$consulta_carteira = "SELECT * FROM carteiras WHERE id_usuario='$id_logg' "; 
$resultado_c =  $conexao ->query($consulta_carteira ); 
$dado = mysqli_fetch_array($resultado_c);  
$endereco= $dado['endereco'];
$tipo= $dado['tipo'];
?>
         <input type="hidden" name="user_wallet" value="<?=$endereco?>">
         <input type="hidden" name="type_wallet" value="<?=$tipo?>">
        <input type="hidden" name="carteira_origem" value="<?=$acao?>">
             Quantidade ( $ ) : <br><br>
             <input type="number"  id="input" placeholder="Quantidade " name="quantidade" id="quantidade" max-lenght="5" required><br>
           <br>  Envie para este endereço: <br><br>
             <input type="text"  class="inputt" name="annect_endereco" value="annect.usuario@gmail.com" id="endereco">
  <br><br>
     <button class="continuar" onclick="carregar()">Finalizar</button>
   </form>
     
<br><br> <hr>
<svg id="Layer_2" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 119.49"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>pay-money</title><path class="cls-1" d="M61.88,42a8,8,0,1,1-7.26,8.65A8,8,0,0,1,61.88,42ZM1,5.44H11.51a1,1,0,0,1,1,1V31.9a1,1,0,0,1-1,1H1a1,1,0,0,1-1-1V6.47a1,1,0,0,1,1-1ZM15.17,10a2,2,0,0,1,.33-1.24c.67-.91,2.31-.64,3.35-.64a15.15,15.15,0,0,0,3.22-.25,37.57,37.57,0,0,0,4.6-1.53c5.69-2,10.54-3.3,16.47-5.9A4.57,4.57,0,0,1,47,.42,100.69,100.69,0,0,1,63.06,7.94a5.69,5.69,0,0,1,2.39,2.37c3.29,4.78,6.1,9.62,8.81,14.47.91,1.7,1.28,3.32.66,4.33-2.54,4.17-7.11-1.76-12-5.71-2.07-1.66-4.89-3.14-7.31-4.82-3.1-1.3-4.57-2.54-7.9-3.24-5.12-.44-5.54,6.91,1.19,7.18,4.57.18,14,4.32,16.62,8.13,2.47,3.56,1.11,7.06-3.91,6.93l-4.2-.78c-6.68-1.26-6.5-1.51-13.46-.22-3.73.7-7.65,1.42-11.51.7-2.34-.44-3.57-1.37-5.67-3A19,19,0,0,0,23.4,32a12.35,12.35,0,0,0-3.06-1.3c-1.6-.38-3.85.16-4.79-1.22a2.59,2.59,0,0,1-.38-1.37V10ZM122.88,83.14H107.3v30.14h15.58V83.14Zm-19,27.61V85.56H92.56c-4.8.86-9.6,3.46-14.41,6.49h-8.8c-4,.24-6.07,4.27-2.19,6.93,3.08,2.26,7.15,2.13,11.33,1.76,2.88-.15,3,3.72,0,3.74-1,.08-2.18-.17-3.17-.17-5.21,0-9.49-1-12.12-5.11l-1.32-3.08L48.79,89.63c-6.55-2.15-11.2,4.7-6.38,9.46a171.58,171.58,0,0,0,29.15,17.16c7.23,4.39,14.45,4.24,21.67,0l10.66-5.5ZM79.13,27,105,66.8,75.32,85.58l-2.54-3.91L94,68.26l.28-.17A4.4,4.4,0,0,0,95.56,62l-1.22-1.88.06,0-5.89-8.94-11.71-18a9.88,9.88,0,0,0,1.5-1.94h0A6.38,6.38,0,0,0,79.13,27Zm-5.41,7.7,19.51,30L63.56,83.5l-27.26-42c.76,0,1.51-.06,2.26-.13,1.29-.12,2.54-.3,3.75-.51L62.15,71a5.2,5.2,0,0,1,7.16,1.61L81,65.15A5.18,5.18,0,0,1,82.64,58L69.45,38c.06-.08.11-.17.16-.25a3.62,3.62,0,0,0,.2-.33,7.21,7.21,0,0,0,.82-3.18,6.59,6.59,0,0,0,3.09.46Z"/></svg>
 
<br>
    </div>
        <br>
        
       
</center>


<center><br>




<br><br>

<fieldset class="atencao">
 <h1 class="att">atenção</h1>
   
    <p class="attt">após fazer o depósito aguarde até que o status apareça Confirmado para que o valor se reflita na sua conta ANNECT</p>
</fieldset>

 </center>

 </main>

 <div class="container" >
    <div id="load" class="tscssload-aim"></div>
    </div>
    
    <script>
    document.querySelector('.bodi').style.display="none";
    document.getElementById('load').classList.add('tscssload-aim')
    
    
    setTimeout(()=>{
        
    document.getElementById('load').classList.remove('tscssload-aim');
    document.querySelector('.bodi').style.display="block";
    }, 1000);
    </script>
</body>
</html>