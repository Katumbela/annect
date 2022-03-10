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
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="preloader/preloader-style.css">
    <script src="main.js"></script>
</head>
<style>
    .logo1{
        font-size:13px;
        line-height:80px;
    }
    table{
      font-size:11px;
    }
    .conc{
      color:green;
    }
    .pend{
      color:orange;
    }
    .canc{
      color:red;
    }
.anne{
  float: right;
  color: #0255b3;
  margin-right:2%;
}
</style>
<body>

<main class="bodi">
  <a href="dashboard.php">
<svg  viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
</svg></a> <h3 class="anne">ANNECT</h3>
<hr>

    <center><h3 class="c-titulo">Histórico de Transações</h3></center>
    
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
          
          <td><?=$data?></td>
          <td><?=$tipo_transacao?></td>
          <td><?="$ ".$quantia?></td>
          <td><?php if($estado==1){
            echo"<span class='conc'>Concluido</span>";
          }
          elseif($estado==2){
            echo"<span class='pend'>Pendente</span>";
          }
          elseif($estado==0){
            echo"<span class='canc'>Cancelado</span>";
          }
        }
          ?></td>
          
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