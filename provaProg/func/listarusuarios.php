<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"type="text/css" href="../css/stylesheet.css">
    <title>Lista de Usuários</title>
  </head>
  <body>
<table border="1">
  <thead>
    <th class="form-panel th">Nome</th><th class="form-panel th">E-mail</th>
    <th class="form-panel th">Usuário</th><th class="form-panel th">E-mail</th>
  </thead>
  <tbody>
<?php
    require_once "banco.php";
    $sql = "select nome, apelido, tel, email from usuarios";
    foreach (getConnection()->query($sql) as $row) {
      echo "<tr>";
      echo "<td>".$row['nome']."</td>";
      echo "<td>".$row['apelido']."</td>";
      echo "<td>".$row['tel']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "</tr>";
    }
?>
  </tbody>
</table>
  <form action="../index.html" method="POST">
    <div>
    <button name="button" class="button button-register">Cadastrar novo</button>
  </div>
  </form>
  <form action="../func/delete.html" method="POST">
    <div>
      <div>
        <input type="email" name="email" required="true"  placeholder="E-mail" class="input-control">
        <input type="submit" value="Excluir e-mail" class="button button-register">
      </div>
  </div>
  </form>
</body>
</html>
