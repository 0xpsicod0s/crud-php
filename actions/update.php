<?php
session_start();
require_once '../config/dbConnection.php';
require_once './filters/escapeString.php';

if (isset($_POST['action'])) {
    $id = escapeString($_POST['id']);
    $name = escapeString($_POST['name']);
    $telephone = escapeString($_POST['tell']);
    $email = escapeString($_POST['email']);

    $sql = "UPDATE contatos SET name = '$name', telephone = '$telephone', email = '$email' WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        $_SESSION['msg'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    } else {
        $_SESSION['msg'] = "Falha ao atualizar";
        header('Location: ../index.php');
    }
    mysqli_close($connection);
}