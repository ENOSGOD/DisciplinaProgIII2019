<?php
  require_once "banco.php";
  $email = $_GET['email'];
  echo "$email";
  $sql = "delete from usuarios where email = '$getemail' ";
  query = mysqli_query($connect, $sel);

  if($result['usuarios'] == 1){
      header('Location: ../func/listarusuarios.php');
  }
  else if($result['usuarios'] == 0){
      header('Location: ../func/listarusuarios.php');
  }
?>
