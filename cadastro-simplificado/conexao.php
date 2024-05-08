<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_cadastro";

// Criando conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificando conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>
