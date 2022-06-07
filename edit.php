<?php 
    require_once './includes/header.php'; 
    require_once './config/dbConnection.php';
    require_once './actions/filters/escapeString.php';


    if (isset($_GET['id'])) {
        $id = escapeString($_GET['id']);

        $sql = "SELECT * FROM contatos WHERE id = '$id'";
        $result = mysqli_query($connect, $sql);
        $data = mysqli_fetch_array($result);
    }
?>

<div class="container center-align">
    <h3 class="light">Editar contato</h3>
    <form class="col s12" action="./actions/update.php" method="POST">
        <div class="row">
            <div class="input-field col s6">
            <input id="name" name="name" type="text" class="validate" value="<?= $data[1]; ?>">
            <label for="name">Nome</label>
            </div>
        <div class="row">
            <div class="input-field col s6">
            <input id="telephone" name="tell" type="text" class="validate" value="<?= $data[2]; ?>">
            <label for="telephone">Telefone</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate" value="<?= $data[3]; ?>">
            <label for="email">Email</label>
            </div>
        </div>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button class="btn waves-effect waves-light" type="submit" name="action">Editar
            <i class="material-icons right">edit</i>
        </button>
        <a class="btn" href="./index.php">
            <i class="material-icons">account_box</i>
        </a>
    </form>
  </div>

<?php require_once './includes/footer.php'; ?>