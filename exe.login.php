<?php
include('include/conexao.php');
   
SESSION_START();
//Print_r ($_REQUEST);
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//$senha = md5($senha);

$SQL = "SELECT * FROM funcionario where usuario='".$usuario."' and senha='".$senha."'";
$RS  = mysql_query($SQL);

$RF = mysql_fetch_array($RS);

if (!empty($RF['id_usuario'])) {

$_SESSION['id'] = $RF['id_usuario'];

header('location:index.php');

}else echo "Usuário não encontrado!";

?>
