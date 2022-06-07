<?php require_once './includes/header.php'; ?>

<div class="container center-align">
    <h3 class="light">Novo contato</h3>
    <form class="col s12" action="./actions/create.php" method="POST">
        <div class="row">
            <div class="input-field col s6">
            <input id="name" name="name" type="text" class="validate">
            <label for="name">Nome</label>
            </div>
        <div class="row">
            <div class="input-field col s6">
            <input id="telephone" name="tell" type="text" class="validate">
            <label for="telephone">Telefone</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
            <i class="material-icons right">save</i>
        </button>
        <a class="btn" href="./index.php">
            <i class="material-icons">account_box</i>
        </a>
    </form>
  </div>

<?php require_once './includes/footer.php'; ?>