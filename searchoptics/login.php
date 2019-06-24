<?php

session_start(); 

include('conexao.php');

if(empty($_POST['login']) and empty($_POST['senha'])) {

  header('Location: index.php');
  exit();
}

$login = mysqli_real_escape_string($connect, $_POST['login']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']); // proteção contra sql injection 

$query = "select email from users where email = '{$login}' and senha = md5('{$senha}')"; 
  
$result = mysqli_query($connect, $query);
 
$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['login'] = $login;
	header('Location: painel.php'); //usuario autenticado 
	exit();
} else {
	$_SESSION['nao_autenticado'] = true; //usuario não autenticado 
	header('Location: index.php');
	exit();
}