<?php
function getConnection() {
  $username = 'root';
  $password = '';
  $conn = new PDO('mysql:host=localhost;dbname=cadastro',  $username, $password);
  return $conn;
}
?>
