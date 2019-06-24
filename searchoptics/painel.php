<?php    
session_start();
include('autentica.php');
?> 
 <link rel="stylesheet" href="css/estilopainel.css" />
<br><br><h2>Welcome <?php echo$_SESSION['login']?> </h2> <br> <br>
<h2><a href="logout.php">Sair</a></h2>