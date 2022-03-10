
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
    <link rel="stylesheet" href="css/bootstrap.css">
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
    <a href="dashboard">
<svg  viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
</svg></a> <h2 class="anne">ANNECT</h2>
<hr>
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
             <input type="text"  id="input" placeholder="Quantidade " name="quantidade" id="quantidade" max-lenght="5" required><br>
         
         <?php
             if($acao=='deposito'){
               echo"
        
             <br>  Deposite neste endereço: <br><br>
             <input type='text'  class='inputt' name='annect_endereco' value='AO055.6574.4334.4545.3434.5' id='endereco'>
           "; }

           else{
             echo"
              <br>  Envie para este endereço: <br><br>
             <input type='text'  class='inputt' name='annect_endereco' value='annectwallet@gmail.com' id='endereco'>
 ";
           }

             ?><br><br>
     <button class="continuar" onclick="carregar()">Finalizar</button>
   </form>
     
<br> <hr>
    </div>
        <br>
        
       




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