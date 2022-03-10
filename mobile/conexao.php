<?php
$db_host='localhost:3306'; //esses dados vc vai pegar do site onde vc vai hospedar o seu site
$db_name='annect'; //nome da base de dados phpmyadmn
$db_user='root'; //nome de usuario
$db_pass=''; //palavra passe de hospedado

$conexao = new MySQLi($db_host, $db_user, $db_pass, $db_name) ;


?>


<!--
$db_host='sql105.epizy.com'; //esses dados vc vai pegar do site onde vc vai hospedar o seu site
$db_name='epiz_30096173_annect'; //nome da base de dados phpmyadmn
$db_user='epiz_30096173'; //nome de usuario
$db_pass='uGDtthp4q0Il'; //palavra passe de hospedado

$conexao = new MySQLi($db_host, $db_user, $db_pass, $db_name) ;

if(!$conexao){
    echo "erro ao conectar se com a Base de Dados";
}

?>

-->
