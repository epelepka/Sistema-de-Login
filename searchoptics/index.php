<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/estilologin.css" />
    <title>Sistema de Login</title>
 
  </head>

<div id="form" class="frontend">
<h1> Login </h1>
<body>

<form action="login.php" method="POST" >
<input type="email" id="login" name="login" placeholder="Email"  maxlength="40" required/> 
<span class="aviso"></span>  
<input type="password" id="senha"name="senha"  placeholder="Password" maxlength="32" required/>
<span class="aviso"></span>

<?php
if(isset($_SESSION['nao_autenticado'])):
        ?>
<div id="error">
<span class="aviso"></span>
  <p><strong>Email or password does not match.</strong></p>
</div>
      <?php
      endif;
unset($_SESSION['nao_autenticado']);
        ?>

 <input type="checkbox" id="checkbox"/> <p id="email"> Remember Email</p>
<a href="" id="resetpassword"> Forgot your Password?</a>
<input type="submit" id="submit" value="Log In" />   
<a href="createuser.php" id="createaccount"> Don't have an account? Create one</a>
    </form>
</div>






  </body>

}
 
  <footer>  
                </footer>
</html>

