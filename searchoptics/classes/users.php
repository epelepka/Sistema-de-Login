<?php /*
por PDO, não cheguei a implementar. 
class Users {
  private $pdo;
  private $msgError="";

  public function conect($nome, $host, $email, $password)
  {
    global $pdo;
    global $msgError;

    try {
      $pdo = new pdo("mysql:dbname=".$nome.";host=".$host,$user,$password);
    } catch (PDOException $e) {
      $msgError = $e->getMessage(); 

    }
  }
 
  public function register($email, $password) { //método registrar

    global $pdo;
      //verificar se já existe e-mail cadastrado.
      $sql = $pdo->prepare("SELECT id_user FROM users WHERE email =:e");
      $sql->bindValue(":e",$email); 
      $sql->execute(); 

      if($sql->rowCount() > 0) 

      {
          return false; // já está cadastrado

      }
      // caso não, cadastrar.
      else {
        $sql = $pdo->prepare("INSERT INTO users (email, password) VALUES (:e, :p");
        $sql->bindValue(":e",$email); 
        $sql->bindValue(":p",md5($password)); // criptografar
        $sql->execute(); 

        return true; // ok
      }
     
  }

  public function login($email, $password) { //método logar
    
    global $pdo;
    //verificar se o email e senha estão cadastrados
    $sql= $pdo->prepare("SELECT id_user FROM users WHERE email =:e AND password = :p ");
    $sql->bindValue(":e",$email); 
    $sql->bindValue(":p",md5($password)); // criptografar
    $sql->execute();
    if($sql->rowCount() > 0) {

        $data=$sql->fetch();
        session_star(); 
        $_SESSION['id_user'] = $data=['id_user'];
        return true; //logado com sucesso 

          }

  else { 

    return false; //não foi possivel logar

  }
}
}

?>
