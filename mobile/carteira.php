
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


<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet - Add Fundos </title>
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="preloader/preloader-style.css">
    <script src="main.js"></script>
</head>
<style>
    
.anne{
  float: right;
  color: #0255b3;
  margin-right:2%;
}
</style>
<body><a href="dashboard">
<svg  viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
</svg></a> <h2 class="anne">ANNECT</h2>
<hr>
<main class="container">

    <center>

        <h2 class="deposito">Adicionar Fundos a partir de:</h2>
    
</center>
        <div class="radios">
<br>
        <form action="keep_deposit.php" name="radios" method="get">
            
            <input type="radio" class="r1" name="transacao" id="radio-btn" value="PayPal" checked> PayPal
    <br>
            <input type="radio" class="r2" name="transacao" id="radio-btn" value="Payoneer"> <label for="radios">Payoneer</label>
    <br>
            <input type="radio" class="r3"  name="transacao" id="radio-btn" value="AirTM"> <label for="radios">AirTM</label>
    <br>
            <input type="radio" class="r3" name="transacao" id="radio-btn" value="Perfect Money"> <label for="radios">Perfect Money </label>
     <br>
            <input type="radio" class="r3" name="transacao" id="radio-btn" value="Crypto Moeda"> <label for="radios">Crypto Moeda</label>
     <br>
            <input type="radio" class="r3"  name="transacao" id="radio-btn" value="deposito"> <label for="radios">Depósito</label>
    <br>
     <br>
     <center>
     <button class="continuar">Continuar</button></center>


   </form>

<hr> <br>
<center>
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
    }, 1500);
    </script>


</body>
</html>