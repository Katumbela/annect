
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
$pais= $dado['pais'];
$email= $dado['email'];
$tel= $dado['telefone'];
$data= $dado['datas'];
$_SESSION['login']=$logg;



?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta - <?=$logg?></title>
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href=" preloader/preloader-style.css">
    <script src="main.js"></script>
</head>
<style>
 .banco, table{
    font-size: 10px;
  }
</style>
<body>

<main class="bodi">
  
<a href="dashboard">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
</svg></a><h2 class="anne">ANNECT</h2>
<hr>
    <center><h2 class="c-titulo">Sua Conta</h2>
<br>
    <h3 class="c-dados-pessoal">Dados Pessoais</h3>

</center>


<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">--------</th>
        <th scope="col">-----------</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Nome Completo: </td>
        <td><?=$logg?></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>País :</td>
        <td> <?=$pais?></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>E-mail :</td>
        <td> <?=$email ?></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Telefone:</td>
        <td> +244 <?= $tel?></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Aderiu em:</td>
        <td><?= $data ?></td>
      </tr>
    </tbody>
  </table>


  <center>
    <br> <br>
    <hr>
    
    <h3 class="c-dados-pessoal">Dados Bancários</h3>
<br>

  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Banco</th>
          <th scope="col">IBAN</th>
        </tr>
      </thead>
      <tbody>
        
      <form action="actualizar" method="get">
            <?php

$consulta_banco = "SELECT * FROM bancos WHERE id_usuario='$id_logg' "; 
$resultado_b =  $conexao ->query($consulta_banco ); 
while($dados2 = mysqli_fetch_array($resultado_b)){  
$banco= $dados2['banco'];
$iban= $dados2['iban'];
$id_banco= $dados2['id'];
    ?>
        <tr>
          
          <td><?=$banco?></td>
          <td class="este"><?=$iban?></td>
          <td><?php echo"<a class='este_nao' href='eliminar_b.php?id_b=$id_banco'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-eye-slash-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg''>
  <path d='M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z'/>
  <path d='M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z'/>
  <path fill-rule='evenodd' d='M13.646 14.354l-12-12 .708-.708 12 12-.708.708z'/>
</svg></a>";}?></td>
        </tr>
            <tr class="banco">
              <td><input type="text" name="tipo_banco" placeholder="Seu Banco " id="alter_wallet" >  </td>
              <td><input type="text" placeholder="Seu IBAN " name="iban" id="alter_wallet" ></td>
            </tr>
          </tbody>
        </table>
    </table>
</center>
    <center>
      <button type="submit" class="continuar" name="vincular_banco">Vincular Banco</button>
      </center>
</form>


    <center>
        <br>
        <hr>

        <br>
        
        <h3 class="c-dados-pessoal">Carteiras</h3>
    <br>
    </center>
    
    <form action="actualizar.php" method="get">
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Carteira/nome</th>
              <th scope="col">Endereço</th>
            </tr>
          </thead>
          <tbody>
            
            <?php

$consulta_carteira = "SELECT * FROM carteiras WHERE id_usuario='$id_logg' "; 
$resultado_c =  $conexao ->query($consulta_carteira ); 
while($dados = mysqli_fetch_array($resultado_c)){  
$endereco= $dados['endereco'];
$tipo= $dados['tipo'];
$id_carteira= $dados['id'];
    ?>
        <tr>
          <td scope="row"><?=$id_carteira?></td>
          <td><?=$tipo?></td>
          <td class="este"><?=$endereco?></td>
          <td><?php echo"<a class='este_nao' href='eliminar.php?id_b=$id_carteira'><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-eye-slash-fill' fill='currentColor' xmlns='http://www.w3.org/2000/svg''>
  <path d='M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z'/>
  <path d='M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z'/>
  <path fill-rule='evenodd' d='M13.646 14.354l-12-12 .708-.708 12 12-.708.708z'/>
</svg></a>";}?></td>
        </tr>
            <tr>
              <th scope="row"></th>
              <td><input type="text" placeholder="Nome da carteira " name="tipo_carteira" id="alter_wallet" >  </td>
              <td><input type="text" placeholder="Endereço da carteira " name="endereco" id="alter_wallet" ></td>
            </tr>
          </tbody>
        </table>
        <center>
      <button type="submit" class="continuar" name="add_wallet">Adionar Carteira</button>
      </center></form>
      <br><br>


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