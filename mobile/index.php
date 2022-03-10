<!DOCTYPE html>
<html lang="PT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annect Wallet-Uma Conexão</title>
	<link rel="icon" type="icones/icon1.jpg" href="icones/icon1.jpg"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="en-estilo.css">
    <script src="jquery.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<style>
   body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-login {		
		color: #636363;
		width: 350px;
		margin: 80px auto 0;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;   
        position: relative;
        justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-login .form-control:focus {
		border-color: #70c5c0;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
        justify-content: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer a {
		color: #999;
	}		
	.modal-login .avatar {
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -70px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #60c7c1;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-login .avatar img {
		width: 100%;
	}
    .modal-login .btn {
        color: #fff;
        border-radius: 4px;
		background: #60c7c1;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #45aba6;
		outline: none;
	}
.cursos{
    font-size:20px;
    color:green;
}
#google_translate_element {
    display: none;
}
.goog-te-banner-frame {
    display: none !important;
}
body {
    position: static !important;
    top: 0 !important;
    font-family: Century Gothic;
}
.btn-sucess{
    font-size:20px;
}
</style>
<body>


<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
				<center style="color:white">Annect Wallet</center>
				</div>				
				<h4 class="modal-title">Login Annect</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="login-form.php" method="post">
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="senha" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">esqueceu a password?</a>
			</div>
		</div>
	</div>
</div>     
        <main class="container">
            <center>
                <br><br>
            <div class="conteudo">
                <h1 class="h1">Utilize a ANNECT gratuitamente</h1><br>
                <a href="cadastrar_se.html"><button class="reg2">Criar Conta</button></a><br>
                <br>
               <a href="#myModal" class="trigger-btn" data-toggle="modal"> <button class="login2">Entrar</button></a>
            </div>


<br>
<img src="icones/icon1.jpg" data-aos="fade-up" alt="icon annect" class="icon">

<p class="desc" data-aos="fade-up">utilize a annect gratuitamente para saques e transferências internacionais até à sua conta bancária local desde que ambos tenham conta na annect sem a necessidade de um cartão internacional ou quaisquer burocracias saque suas cryptos de sua carteira para o seu banco local. ANNECT, uma nova conexão</p>
                <marquee class="cursos" ><b> Cursos de investimentos digitais disponíveis e empreendedorismo na Annect ( Muito em breve)</b></marquee>
<br>
<hr><br>
<img src="img/bankdeposit.jpg" data-aos="fade-up" alt="deposit to a bank" class="icon">
<p class="desc">Saque seus fundos de outras carteiras digitais como PayPal, Payoneer, AirTM, Payeer, e Cryptos. Sem burocracias e taxas muito baixas de saque para o seu banco local por intermedio da ANNECT Wallet</p>
</center>
</main>
<img src="img/funcionando.jpg" data-aos="fade-left" alt="settings" height="20%" class="icon2">

<center>
<p class="desc" data-aos="fade-left">a ANNECT funciona como intermédio de modo a permitir que tais operações sejam realizadas em países não elegiveis para certas carteiras digitais de modo satisfatório e favorável à aqueles que não possuem cartões internacionais</p>


<a href="javascript:trocarIdioma('pt')">Português</a>
<a href="javascript:trocarIdioma('es')">Español</a>
<a href="javascript:trocarIdioma('en')">Inglés</a>
<a href="javascript:trocarIdioma('fr')">Francés</a>

<hr>
<center>Suporte annect: <a href="mailto:support.annectwallet@gmail.com">support.annectwallet@gmail.com</a></center>
<br>

        <footer class="footer">
            ANNECT All rights reserved &copy; 2020-2021
        </footer>
    </center>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script><script >

var comboGoogleTradutor = null; //Varialvel global

function googleTranslateElementInit() {
	new google.translate.TranslateElement({
		pageLanguage: 'pt',
		includedLanguages: 'en,fr,es',
		layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
	}, 'google_translate_element');

	comboGoogleTradutor = document.getElementById("google_translate_element").querySelector(".goog-te-combo");
}

function changeEvent(el) {
	if (el.fireEvent) {
		el.fireEvent('onchange');
	} else {
		var evObj = document.createEvent("HTMLEvents");

		evObj.initEvent("change", false, true);
		el.dispatchEvent(evObj);
	}
}

function trocarIdioma(sigla) {
	if (comboGoogleTradutor) {
		comboGoogleTradutor.value = sigla;
		changeEvent(comboGoogleTradutor);//Dispara a troca
	}
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
</script> 
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init(
      {
        duration: 1000,
      }
  );
  </script>
</body>
</html>