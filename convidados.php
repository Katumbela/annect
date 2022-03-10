
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
    <title>Referidos - ANNECT</title>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="preloader/preloader-style.css">
</head>
<body>
    <main class="bodi">
    <header>
        <nav>
            <a href="dashboard.php"><span class="logo"> ANNECT</span> </a>

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
<br>
    <center><h2 class="c-titulo">Referidos / Convidados por você:</h2>
    
    <h1 class="c-ref"> 0 </h1><br>
    Convidados
    <br><br>
    <br><p>Seu link de Ref:</p>
    <a href="#">www.annect.ga/?ref=katombela</a>
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
    }, 900);
    </script>
</body>
</html>