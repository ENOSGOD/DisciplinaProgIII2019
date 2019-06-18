
<?php
require_once "banco.php";

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$tel = $_POST['tel'];
$email = $_POST['email'];

if (empty($nome)) {
  die("Nome obrigatório");
}
if (empty($tel)) {
  die("Telefone obrigatório");
}
if (empty($email)) {
  die("E-mail obrigatório");
}
if(filter_var($email, FILTER_VALIDATE_EMAIL))
 {
  try{
    $sql = ;
    $stmt =$pdo->prepare("INSERT INTO 'usuarios'('nome', 'apelido', 'tel', 'email') 'VALUES' ('?','?','?','?')");
    $stmt->execute(array($nome, $apelido,$tel,$email));
    if ($stmt->execute())
      echo "Sucesso";
    else
      echo "Falha";
  }catch(PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
  }
  if($insert){
          echo"<script>alert('Usuário cadastrado com sucesso!');window.location.
          href='listarusuarios.php'</script>";
        }else{
          echo"<script> alert('Não foi possível cadastrar esse usuário');window.location
          .href='index.html'</script>";
        }
 }
 else
 {
   echo "Email incorreto";
 }

?>
