
<?php
session_start();


if(isset($_GET['logout']) && $_GET['logout']=1){
    session_destroy();
    echo "sessão quebrada!";
}
?>

<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cadastro </title>
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="../cadastro.css">
</head>
<body>
    <main class="container">
<div class="col-2">
    <div class="form-container">
        <div class="form-btn">
            <span onclick="login()">Login</span>
            <span onclick="register()">Cadastro</span>
            <hr id="indicator">
        </div>
<form action="login-form.php" method="post" id="loginform">
<input type="email" name="email" id="" placeholder="Email ou telefone">
<input type="password" name="senha" id="" placeholder="Senha">
<button type="submit" class="btn">Login</button><br>
<a href="#" class="link">Esqueceu a senha</a>
</form>

<form action="registro.php" method="post" id="registerform">
<input type="text" name="nome" placeholder="Nome Completo" id="" required>
<input type="email" name="email" placeholder="Seu email" id="" required>
<input type="password" name="senha" placeholder="Senha" id="" required>
<input type="password" name="senha" placeholder="Confirmar senha" id="" required>
<input type="tel" name="telefone" placeholder="telefone (+244)" id="" required>
<select name="pais" id="" required>
    <option value="NULL">País</option>
    <option value="Angola">Angola</option>
    <option value="Moçambique">Moçambique</option>
    <option value="Cabo Verde">Cabo Verde</option>
</select>
<select name="banco" id="" required>
    <option value="NULL">Seu Banco</option>
    <option value="BAI">BAI</option>
    <option value="BFA">BFA</option>
    <option value="BIC">BIC</option>
    <option value="atlantico">Millenium Atlantico</option>
    <option value="KEVE">KEVE</option>
</select>
<br><br>
<input type="radio" name="sexo" value="Masculino" id="radio"> Masculino 
<input type="radio" name="sexo" value="Feminino" id="radio"> Feminino

<button type="submit" class="btn">Cadastrar-se</button>
</form>
    </div>
</div>


</main>
<script>
    

var loginform = document.getElementById("loginform");
var registerform = document.getElementById("registerform");
var indicador = document.getElementById("indicator");

function login(){
    loginform.style.transform = "translateX(400px)";
    registerform.style.transform = "translateX(400px)";
    indicador.style.transform = "translateX(-90px)";
}
function register(){
    loginform.style.transform = "translateX(0px)";
    registerform.style.transform = "translateX(0px)";
    indicador.style.transform = "translateX(90px)";
}

</script>
</body>
</html>