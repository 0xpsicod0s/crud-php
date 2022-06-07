<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbName = "contatos";

$connect = mysqli_connect($host, $username, $password, $dbName);
mysqli_set_charset($connect, "utf8");

if (mysqli_connect_error()) {
    echo "Erro na conexão: ". mysqli_connect_error();
}