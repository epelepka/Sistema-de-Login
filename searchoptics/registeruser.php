<?php

session_start(); 
include('conexao.php');

$email = mysqli_real_escape_string($connect, $_POST['email']);	
$senha = mysqli_real_escape_string($connect, trim(md5($_POST['password']))); // proteção contra sql injection
$senha2 = mysqli_real_escape_string($connect, trim(md5($_POST['password2'])));

$sql = "select count(*) as total from users where email = '$email'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
  header('Location: createuser.php');
	exit;
}




if($senha==$senha2) {
  

$sql = "INSERT INTO users (email, senha, registerdate) VALUES ('$email', '$senha', NOW())";
 
if($connect->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
} }

else  {

  $_SESSION['status_senha'] = true;
}
$connect->close();
header('Location: createuser.php');
exit;



?>
