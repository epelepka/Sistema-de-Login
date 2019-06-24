
<?php
session_start();
?>

<html lang="pt-br">
   
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/estilocreateuser.css" />
    <title>Create User</title>
   
  </head>

  <div id="formusers">
      <h1> Create account</h1>
  <body>
      <form action="registeruser.php" method="POST">
   <input type="email" id="email" name="email" placeholder="Type your email"maxlength="40" required  /> <br>
   <span class="aviso"></span>
       <input type="password" id="password" name="password" placeholder="Type your password"maxlength="32" required  /> <br>
       <span class="aviso"></span>
     <input type="password" id="password2"name="password2"  placeholder="Type your password again"maxlength="32" required/>
     <span class="aviso"></span>
    <br> <br>

    <?php 
if(isset($_SESSION['status_cadastro'])):
        ?>
<div id="success">
<span class="aviso"></span>
  <p><strong>Successfully Registered </strong></p>
</div>
      <?php
      endif;
unset($_SESSION['status_cadastro']);
        ?>

<?php 
if(isset($_SESSION['usuario_existe'])):
        ?>
<div id="fail">
<span class="aviso"></span>
  <p><strong>Email already registered</strong></p>
</div>
      <?php
      endif;
unset($_SESSION['usuario_existe']);
        ?>

        
<?php 

if(isset($_SESSION['status_senha'])):
        ?>
<div id="passwordfail">
<span class="aviso"></span>
  <p><strong>The passwords does not match</strong></p>
</div>
      <?php
      endif;
unset($_SESSION['status_senha']);
        ?>

    <input type="reset" id="cancel" value="Cancel" > 
    <input type="submit" id="submit" value="Create Account"/>
    <a href="index.php" id="backtoindex"> Are you a registered user? Log In</a>  
       
   
      </form>
  </body>
</div>
</html>
