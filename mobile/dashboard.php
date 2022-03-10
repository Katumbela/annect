
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
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard Annect</title>
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="dashboard.css">
    <script src="jquery.js"></script>
    <script src="main.js"></script>
</head>

<style>

.btn-sucess{
    font-size:20px;
}
.container p{
 
    color: rgb(26, 67, 121);
}
.saldo{
	font-size:25px;
}

.olaUser{
    text-decoration: solid;
    color: rgb(26, 67, 121);
}
</style>
<body>
	
<nav class="navbar navbar-expand-md navbar-light bg-white box-shadow">
			<div class="container">
				<a href="dashboard" class="btn btn-sucess"> ANNECT</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#youchat"
						aria-controls="youchat" aria-expanded="false" aria-lbel="Toggle Button">
							<span class="navbar-toggler-icon"></span>
						</button>
				<div class="navbar-collapse collapse" id="youchat">
					<ul class="navbar navbar-nav">
						<li class="nav-item"><a href="convidados" class="nav-link">Referidos</a></li>
						<li class="nav-item"><a href="ajuda" class="nav-link">Ajuda</a></li>
						<li class="nav-item"><a href="configuracao" class="nav-link">Conta</a></li>
						<li class="nav-item"><a href="index?logout=1" class="nav-link">sair</a></li>

					</ul>
					<ul class="navbar navbar-nav ml-auto">
						
					</ul>
				</div>
			</div>
		</nav>
<center>
   <b class="olaUse"> Olá <?=$logg?>!</b>
<div class="balance">
    <p class="desc_saldo">Seu Saldo Total</p>
    <span class="saldo">$ <?php echo $balance." ~ ". $bal_kwanza."Kz"?></span><br>
   <a href="saque.php?saldo=<?=$balance?>"><svg onclick="carregar()" class="saque" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-upload" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
</svg></a>  


<a href="carteira.php">   <svg onclick="carregar()" class="deposito" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>
</div>
<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Transferir</button>

<hr>
<div class="historicoos">
<a href="depositos.php" class="transfer">Transacções</a></div><hr>

<div class="container">
<p class="destaque">" A annect wallet vai disponibilizar cursos de Cryptos e carteiras digitais em E-Books e em vídeos gratuitos e pagos muito em breve para iniciantes e para aperfeiçoamento do mundo digital "</p>
</div>
</center>

    <hr class="divisao">
<img src="img/transfer2.svg" class="transfer_img" alt="transferencias"><br><p class="transfer_right">Faça transferencias externas para seus contactos, amigos ou negociantes e poderem retirar em seus bancos locais</p>

<p class="transfer_img2">Faça transferencias internas para seus contactos que estejam utilizando a annect e este mesmo poderá ser refletido em sua conta o valor da transferencia</p>
<img src="img/transferir.svg" alt="" class="transfer_right2">

<br><br>
<center><br>
<fieldset id="campo" class="atencao"> 
  <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h3 class="att">Seja Bem vindo</h3></h5>
        <button onclick="fechar()" type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
    <p class="attt">seja bem vindo à annect, esperamos poder suprir suas necessidades conforme propomos e contribuir no seu desevolvimento financeiro</p>
</fieldset>
<br><br>
<p style="color:white">annect Wallet</p>

<footer>
	<hr>
<div class="icones">
	<img src="icones/airtm.jpeg" width="10%" height="25" alt="airtm" class="iconwallet">
	<img src="icones/paypal.png" alt="" width="10%" height="25"  class="iconwallet">
	<img src="icones/payoneer.jpeg" alt="" width="10%" height="25"  class="iconwallet">
	<img src="icones/bitcoin.jpeg" alt="" width="10%" height="25"  class="iconwallet">
</div><hr><br>
    

<a href="en/dashboard"> Inglês</a>
   <a href="fr/dashboard">Francês</a>
    <a href="es/dashboard">Espanhol</a>

<br><br>
<div class="footer">
            ANNECT All rights reserved &copy; 2020-2021
        </footer>
</center>

</div><br>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Transferir $ para:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="concluir_transfer.php" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Destinatário:</label>
            <input type="email" name="email_destino" class="form-control" required id="recipient-name">
          </div>
		  <input type="hidden" name="saldo" value="<?=$balance?>">
          <div class="form-group">
            <label for="message-text" class="col-form-label">Quantidade:</label>
            <input type="text" name="quantidade" class="form-control" required id="message-text">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
       <button type="submit" class="btn btn-primary">Enviar</button></form>
      </div>
    </div>
  </div>
</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	
<script>
$('#meuModal').on('shown.bs.modal', function () {
  $('#meuInput').trigger('focus')
})
</script>
</body>
</html>