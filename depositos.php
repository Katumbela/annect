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
    <title>Transações - ANNECT</title>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="preloader/preloader-style.css">
    <script src="main.js"></script>
</head>
<style>
    .logo1{
        font-size:13px;
        line-height:80px;
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
</label><ul class="nav-list">
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
          <th scope="col">ID Opr.</th>
          <th scope="col">Data</th>
          <th scope="col">Operação</th>
          <th scope="col">Uni.</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody> <?php

$consulta_carteira = "SELECT * FROM transacoes WHERE id_usuario='$id_logg' "; 
$resultado_c =  $conexao ->query($consulta_carteira ); 
while($dados = mysqli_fetch_array($resultado_c)){  
$data= $dados['datas'];
$tipo_transacao= $dados['tipo_de_transacao'];
$estado= $dados['estado'];
$quantia= $dados['quantidade_dolar'];
$id_operacao= $dados['id'];
    ?>
        <tr>
          <td scope="row"><?=$id_operacao?></td>
          <td><?=$data?></td>
          <td><?=$tipo_transacao?></td>
          <td><?="$ ".$quantia?></td>
          <td><?=$estado?></td>
          <td><?php echo"<a onclick='carregar()' href='apagar_hist.php?id_b=$id_operacao'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-eye-slash-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg''>
  <path d='M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z'/>
  <path d='M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z'/>
  <path fill-rule='evenodd' d='M13.646 14.354l-12-12 .708-.708 12 12-.708.708z'/>
</svg></a>";}?></td>
        </tr>
      </tbody>
    </table>




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
    }, 2000);
    </script>
</body>
</html>