<?php 
session_start();
require_once '../config/dbConnection.php';
require_once './filters/escapeString.php';

if (isset($_POST['action'])) {
    $name = escapeString($_POST['name']);
    $telephone = escapeString($_POST['tell']);
    $email = escapeString($_POST['email']);

    $sql = "INSERT INTO contatos (name, telephone, email) VALUES ('$name', '$telephone', '$email')";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        $_SESSION['msg'] = "Criado com sucesso!";
        header('Location: ../index.php');
    } else {
        $_SESSION['msg'] = "Falha ao criar contato";
        header('Location: ../index.php');
    }
    mysqli_close($connect);
}