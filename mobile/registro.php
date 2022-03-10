<?php
include('conexao.php');

$nome= $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$senha= $_POST['senha'];
$pais= $_POST['pais'];
$banco= $_POST['banco'];




$inserir = "INSERT INTO cadastro (nome, email, senha, telefone, pais, banco, balance, sexo, bilhete, datas, obs) VALUES ('$nome', '$email', '$senha', '$telefone', '$pais',' $banco','0', 'set','00000000000', now(), 'por descrever')";
$consultar=$conexao->query($inserir);

?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro bem sucedido</title>
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <br> 
<center>
    <?php
if ($consultar){
    echo "<h1 class='container'>Registro bem sucedido, agora pode fazer Login na sua conta Annect <a href='login_register_page'>aqui</a></h1>";
}
else{
    echo "<h1 class='container'>Lamentamos, mas ocorreu algum erro, tente novamente mais tarde ou encaminhe para o nosso email <a href='mailto:annectwallet@gmail.com'>annectwallect@gmail.com";
}
?>
   
    

<footer class="footer">
            ANNECT All rights reserved &copy; 2020-2021
        </footer>
</center>

</body>
</html>