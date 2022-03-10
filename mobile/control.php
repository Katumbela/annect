
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
$balance= $dado['balance'];
$bal_kwanza=$balance*730;
$id_logg= $dado['id'];
$_SESSION['login']=$logg

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Control</title>
    <link rel="stylesheet" href="control.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>
  
  .conc{
      color:green;
    }
    .pend{
      color:orange;
    }
    .canc{
      color:red;
    }
    #cancel{
    background-color:rgb(233, 81, 81);
    }
</style>
<body>
    <center class=container>Olá admn <h1 class="realce"><?=$logg?></h1>
    
    <h2>observe e controle as actividades na annect</h2></center>
    <hr>
  <main class="container">
    <fieldset disabled>
    <h2 class="tema">Cadastrados</h2>
    <?php
$consultas = "SELECT * FROM cadastro"; 
$resultados =  $conexao ->query($consultas ); 
while($dados = mysqli_fetch_array($resultados)){  
$nome= $dados['nome'];  
$data= $dados['datas'];  
$id= $dados['id'];  
$banco= $dados['banco'];    
$pais= $dados['pais'];  
$email= $dados['email'];  
$tel= $dados['telefone'];  
$senha= $dados['senha'];  
$saldo= $dados['balance'];  
$sexo= $dados['sexo'];


echo"<hr><br>id: $id, <b class='realce'>$nome</b> , $pais de sexo $sexo, aderiu em $data, seu banco é $banco e seu email é $email, seu saldo no momento é de $saldo $. seu telefone é $tel e senha: $senha.<br> <a href='apagar_conta.php'>apagar conta</a>";

}?>

</fieldset>
<br>
<fieldset>
    <h2 class="tema">Transações</h2>

<?php

$consultas = "SELECT * FROM transacoes where estado=1 or estado=0 "; 
$resultados =  $conexao ->query($consultas ); 
while($dados = mysqli_fetch_array($resultados)){  
$nome= $dados['nome'];  
$data= $dados['datas'];  
$id= $dados['id'];  
$estado= $dados['estado'];  
$tipo= $dados['tipo_de_transacao'];    
$para= $dados['para'];  
$quantidade = $dados['quantidade_dolar'];  

if($estado==1){
 $status="<span class='conc'>Concluido</span>";
}
elseif($estado==2){
  $status="<span class='pend'>Pendente</span>";
}
elseif($estado==0){
  $status="<span class='canc'>Cancelado</span>";
}

echo"<hr><br>id da transação: $id, <b class='realce'>$nome</b> fez um/a $tipo de $quantidade dólares para <b class='realce'>$para</b>, data: $data. estado: $status <br> ";

}
?>
    
    </fieldset>


    
<br>
<fieldset>
    <h2 class="tema">Pedidos a Aprovar</h2>

<?php

$consultas_pend = "SELECT * FROM transacoes WHERE estado=2"; 
$resultados_pend =  $conexao ->query($consultas_pend ); 
while($dados_pend = mysqli_fetch_array($resultados_pend)){  
$nome_pend= $dados_pend['nome'];  
$data_pend= $dados_pend['datas'];  
$id_pend= $dados_pend['id'];  
$estado_pend= $dados_pend['estado'];  
$tipo_pend= $dados_pend['tipo_de_transacao'];    
$para_pend= $dados_pend['para'];  
$quantidade_pend = $dados['quantidade_dolar'];  

  $consulta_b = "SELECT * FROM bancos WHERE id_usuario='$id_pend'  "; 
  $resultado_b =  $conexao ->query($consulta_b ); 
 $dado = mysqli_fetch_array($resultado_b);  
  $banco= $dado['banco'];
  
if($estado_pend==1){
  $status_pend="<span class='conc'>Concluido</span>";
 }
 elseif($estado_pend==2){
   $status_pend="<span class='pend'>Pendente</span>";
 }
 elseif($estado_pend==0){
   $status_pend="<span class='canc'>Cancelado</span>";
 }
 
  if($estado_pend=2){


echo"<hr><br>id da transação: $id_pend, <b class='realce'>$nome_pend</b> fez um pedido de $tipo_pend de $quantidade_pend dólares, IBAN <b class='realce'> $para_pend</b> , data: $data_pend.<br> estado: $status_pend <br> <a href='cancelar.php?id=$id_pend'><button id='cancel' class='btn btn-success'>Cancelar</button></a>    <a href='aprovar.php?id=$id_pend'><button class='btn btn-success'>Aprovar</button></a>";

  }
else{
  echo"<p class='h5'> Não há ainda transacções pendentes $logg</p>";
}

}
?>
    
    </fieldset>
  
  </main>
</body>
</html>