
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
try{
  $sql = "INSERT INTO usuarios(nome, apelido, tel, email) VALUES (:nome, :apelido, :tel,:email)";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':apelido', $apelido);
  $stmt->bindParam(':tel', $tel);
  $stmt->bindParam(':email', $email);
  if ($stmt->execute())
    echo "Sucesso";
  else
    echo "Falha";
}catch(PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
}



?>
