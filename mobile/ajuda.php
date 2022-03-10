

<?php
session_start();
include('conexao.php');
?>
<?php
if((!isset($_SESSION['email'])== true) and (!isset ($_SESSION['senha'])==true)){
  unset($_SESSION['email']);
unset( $_SESSION['senha']);
header('location:index');

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
    <title>FAQ - Ajuda</title>
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="main1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <a href="dashboard">
<svg  viewBox="0 0 16 16" class="bi bi-backspace" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zM5.829 5.146a.5.5 0 0 0 0 .708L7.976 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z"/>
</svg></a> <h2 class="anne">ANNECT</h2>
    <center>
        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 512 512"><path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z"/></svg> <h1 class="ajuda">Ajuda - ANNECT</h1></center>

<div class="linha-vertical">
    <br>
    <h4 id="duvida"><a href="#resposta1"> Como Funciona a ANNECT ?</a></h4><br>
    <h4 id="duvida"><a href="#resposta2"> Quais carteiras Suporta ( internacional ) ?</a></h4><br>
    <h4 id="duvida"><a href="#resposta3"> Como carregar meu saldo ?</a></h4><br>
    <h4 id="duvida"><a href="#resposta4"> Como Sacar meu saldo para o meu banco ?</a></h4><br>
    <h4 id="duvida"><a href="#resposta5"> Funciona Com KYC ?</a></h4><br>
    <h4 id="duvida"><a href="#resposta6"> Como recebo o meu saldo para minha conta ?</a></h4><br>
    <h4 id="duvida"><a href="#resposta7"> Vende Bitcoin ( BTC ) ?</a></h4>
</div>
<br>
<hr>
<br>

<div class="todos">
    <h4 id="resp-duvida resposta1"><a href="#"> - Como Funciona a ANNECT ?</a></h4><br>
    <p class="resposta">A ANNECT é uma plataforma financeira com fim de poder intermedirar transações entre carteiras  digitais internacionais, em particular para Angola devido a certas limitações internacionais e modo de vida dos angolanos. Funcionando com um modelo P2P a ANNECT possiblita saques internacionais para os Bancos locais</p>
   
   

    <br><br><br>

     <div id="resposta1">

         <h4 id="resp-duvida resposta2"><a href="#"> - Quais carteiras Suporta ( internacional ) ?</a></h4><br>
        <p class="resposta">Inicialmente a ANNECT Suporta carteiras digitais como a <a href="coinbase.com">CoinBase</a>, <a href="paypal.com">PayPal</a>, <a href="#">Perfect Money</a>, <a href="#">Payoneer</a>, <a href="airtm.com">AirTM</a> e <a href="#">Crypto Moedas</a> inclusive o <a href="#">BitCoin ( BTC )</a></p>


    <br><br><br>

        </div>

    <div id="resposta2">

        <h4 id="resp-duvida resposta3"><a href="#"> - Como carregar meu saldo ?</a></h4><br>
        <p class="resposta">Para carregar o saldo da sua carteira ANNECT deve retirar de uma carteira digital internacional para posteriormente tê-lo em sua conta bancaria local, em partida deve copiar o endereço particular da sua carteira ANNECT e enviar a quantidade para a mesma  e aguardar até que se reflita <span class="confirmado"><strong>CONFRIMADO</strong></span> no Status da transação </p>

    <br><br><br>

</div>

    <div id="resposta3">

        <h4 id="resp-duvida resposta4"><a href="#"> - Como Sacar meu saldo para o meu banco ?</a></h4><br>
        <p class="resposta">Para fazer o saque da sua carteira ANNECT para sua conta bancaria local é necessárioque tenha pelo menos <b class="confirmado">$1.00</b>, só assim poderá tê lo refletida na sua conta e o status da transação retornará <strong class="confirmado">CONFIRMADO</strong></p>
    

         <br><br><br>

    </div>

    <div id="resposta4">

         <h4 id="duvida resposta5"><a href="#"> - Funciona Com KYC ?</a></h4><br>
         <p class="resposta">Actualmente a ANNECT não funciona co KYC ou verificação de Identidade, possivelmente posteriormente será implementado este sistema, a ANNECT acha que os dados requeridos são necessários para manter a segurança de seus usuários  </p>


        <br><br><br>
    </div>


    <div id="resposta5">
    
        <h4 id="resp-duvida respost6"><a href="#"> Como recebo o meu saldo para minha conta ?</a></h4><br>
        <p class="resposta">Após a criação ou abertura da conta ANNECT, deve actualizar seus dados e adicionar ou vincular uma conta bancaria local. Dados como IBAN, Nº da conta e o nome comppleto do titular da conta, após o saquer ser realisado na plataforma vai se refletir " CONFIRMADO " no status da operação e posteriormente poderá consultar o seu saldo da sua conta bancária. E o mais importante: <strong>" <i>a ANNECT disponibilisará um extrato ou comprovante da transação, obrigatoriamente.</i> "</strong></p>
   
         <br><br><br>
    </div>

     <div id="resposta6">
         
        <h4 id="resposta7 resp-duvida "><a href="#"> - Vende Bitcoin ( BTC ) ?</a></h4><br>
        <p class="resposta">Sim, na ANNEC poderá tanto comprar quanto vender para poder sacar, não só o BitCoin mas também outras Cryptos e Tokens estipulado </p>

         <br><br><br>
    </div></div>
    <center>

    <div id="resposta7">

        <p class="feed">Estas informações foram úteis?</p>
        <button class="sim-btn" onclick="sim()">Sim</button><button onclick="nao()" class="nao-btn">Não</button>
    
        <br><br>
</div>
    </center>


</body>
<script src="funcao.js"></script>
</html>