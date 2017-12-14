<?php
// Conecta-se ao banco de dados MySQL
//$mysqli = new mysqli("localhost", "root", "", "erp_salao");
$mysqli = mysqli_connect("localhost", "root", "", "erp_salao");
// Padrão de caracteres no banco
mysqli_query($mysqli,"SET NAMES 'utf8'");
mysqli_query($mysqli,'SET character_set_connection=utf8');
mysqli_query($mysqli,'SET character_set_client=utf8');
mysqli_query($mysqli,'SET character_set_results=utf8');


// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) {
  trigger_error(mysqli_connect_error());
}
