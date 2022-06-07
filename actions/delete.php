<?php 
session_start();
require_once '../config/dbConnection.php';
require_once './filters/escapeString.php';


if (isset($_POST['btn-delete'])) {
    $id = escapeString($_POST['id']);

    $sql = "DELETE FROM contatos WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        $_SESSION['msg'] = "Deletado com sucesso!";
        header('Location: ../index.php');
    } else {
        $_SESSION['msg'] = "Falha ao deletar";
        header('Location: ../index.php');
    }
    mysqli_close($connection);
}