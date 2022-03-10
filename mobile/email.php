<?php 
ini_set( 'display_errors', 1 ); 
error_reporting( E_ALL ); 
$from = "joaokatumbela82@gmail.com"; 
$to = "annectwallet@gmail.com"­; 
$subject = "Checkando o PHP mail - Teste"; 
$message = "PHP email, está funcionando :"; 
$headers = "From:" . $from; mail($to,$subject,$m­essage, $headers); 
echo "The email message was sent."; 
?>