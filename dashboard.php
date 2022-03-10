
<?php
session_start();
include('conexao.php');
?>
<?php
if((!isset($_SESSION['email'])== true) and (!isset ($_SESSION['senha'])==true)){
  unset($_SESSION['email']);
unset( $_SESSION['senha']);

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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANNECT</title>
    <link rel="stylesheet" href="main1.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="preloader/preloader-style.css.css">
</head>
<style>
    *{
    font-family:Century Gothic;
   
}


.tscssload-aim {
	position: relative;
	width: 80px;
	height: 80px;
	left: 35%;
	left: calc(50% - 43px);
	left: -o-calc(50% - 43px);
	left: -ms-calc(50% - 43px);
	left: -webkit-calc(50% - 43px);
	left: -moz-calc(50% - 43px);
	left: calc(50% - 43px);
	border-radius: 50px;
	background-color: rgb(255,255,255);
	border-width: 40px;
	border-style: double;
	border-color:transparent #03a9f4;
	box-sizing:border-box;
	-o-box-sizing:border-box;
	-ms-box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	transform-origin:	50% 50%;
	-o-transform-origin:	50% 50%;
	-ms-transform-origin:	50% 50%;
	-webkit-transform-origin:	50% 50%;
	-moz-transform-origin:	50% 50%;
	animation: cssload-aim 0.7s linear infinite;
	-o-animation: cssload-aim 0.7s linear infinite;
	-ms-animation: cssload-aim 0.7s linear infinite;
	-webkit-animation: cssload-aim 0.7s linear infinite;
	-moz-animation: cssload-aim 0.7s linear infinite;
}
 @keyframes cssload-aim {
 0% {
transform:rotate(0deg);
}
 100% {
transform:rotate(360deg);
}
}
 @-o-keyframes cssload-aim {
 0% {
-o-transform:rotate(0deg);
}
 100% {
-o-transform:rotate(360deg);
}
}
 @-ms-keyframes cssload-aim {
 0% {
-ms-transform:rotate(0deg);
}
 100% {
-ms-transform:rotate(360deg);
}
}
 @-webkit-keyframes cssload-aim {
 0% {
-webkit-transform:rotate(0deg);
}
 100% {
-webkit-transform:rotate(360deg);
}
}
 @-moz-keyframes cssload-aim {
 0% {
-moz-transform:rotate(0deg);
}
 100% {
-moz-transform:rotate(360deg);
}
}



.sacar:hover{
    background: #153b5f;
    text-align: center; 
    width: 120px;
    font-size: 23px;
    transition: 0.5s;
}

.sacar{
    background: rgb(3, 173, 91);
    color: #fff;
    letter-spacing: 4px;
    font-size: 20px;
    border-radius: 11px;
    border-style: double;
    border-color: #153b5f;
    transition: 0.6s;
}
.dados .sacar{
    cursor: pointer;
}  .logo1{
        font-size:13px;
        line-height:80px;
    }
</style>
<body >
 <div class="bodi">
            
            <header>
                <nav>
                     <a href="dashboard.php"><span  class="logo1"> ANNECT</span></a>

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


            <h1 id="desktop" class="c-titulo">A versão Desktop Ainda não está disponivel</h1>

<center>

    <div class="dados">
        <h2 class="user"><?=$logg?></h2>
    <form action="saque.php" method="get">
        <input type="hidden" name="saldo" value="$ 9.02">
        <span class="saldo"  value="$ 9.02">$ 9,02</span><br>

       <a href="saque.php?saldo=9.02"><svg onclick="carregar()" class="sacar" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-upload" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
</svg></a> 
        
     <a href="carteira.php">   <svg onclick="carregar()" class="sacar" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>
  
</form>
    </div>
    <br>
<p ><a href="depositos.php" class="historicoos">Histórico de Transações</a></p>
<br><br>
<h4>Olá João, Seja bem vindo!</h4>
<br>
<span class="p-actualizacao">Ultima actualização do Câmbio em 14 / 08 / 2021, preço dólar na ANNECT:</span>
<br><br>
<p class="preco"> <b>$ 1.00 = 700.00 AOA</b></p>
<br>

</center>
<hr>

<div class="tools">

<img src="imagens/img1.jpg" alt="working" width="50%" height="50%" class="lado-esquerdo"/>
<p class="lado-direito">Olá, foca te em ganhos e ter acesso na sua conta local</p>


<img src="imagens/goingup.png" width="50%" height="50%" alt="going up" class="l-esquerdo"/>
<p class="l-direito">Obtenha seus ganhos e rendas diretamenta em sua conta local ( Angola ) em instantes a partir de uma conta do exterior</p>
</div>




    <div class="rodape">

        <div class="logos-carteiras">
       
            <img src="icones/paypal.png" alt="" id="logos-img">
            <img src="icones/payoneer.jpeg" alt="" id="logos-img">
            <img src="icones/airtm.jpeg" alt="" id="logos-img">
            <img src="icones/bitcoin.jpeg" alt="" id="logos-img">
       
    
    </div>
    <br>
    <div class="d-esquerdo">
            <h4 class="tittle-link">Links</h4>
            <ol>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
            </ol>
        </div>

        <div class="d-direito">
            <h4 class="tittle-link">Tags</h4>
            <ol>
                <li>Dinheiro</li>
                <li>Bitcoin</li>
            </ol>
        </div>
<br><br><br><br><br><center>
        <span class="desenvolvedor">Powered by <a class="link" href="https://facebook.com/joao.afonso.katombela">João Afonso Katombela</a></span>
    </center><br><br></div>

</div>



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