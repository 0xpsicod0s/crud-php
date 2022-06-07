<?php 
    require_once './includes/header.php';
    require_once './includes/message.php';
    require_once './config/dbConnection.php';

    $sql = "SELECT * FROM contatos";
    $result = mysqli_query($connect, $sql);
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <table class="striped centered responsive-table">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
            </thead>

            <tbody>
            <?php 
                if ($result) {
                    while ($row = mysqli_fetch_row($result)) {
            ?>
            <tr>
                <td><?= $row[1]; ?></td>
                <td><?= $row[2]; ?></td>
                <td><?= $row[3]; ?></td>
                <td><a href="./edit.php?id=<?= $row[0]; ?>" class="btn-floating blue"> <i class="material-icons">edit</i> </a></td>
                <td><a href="#modal<?= $row[0]; ?>" class="btn-floating red modal-trigger"> <i class="material-icons">delete</i> </a></td>

                <div id="modal<?= $row[0]; ?>" class="modal">
                    <div class="modal-content">
                        <h4>Tem certeza que deseja excluir esse contato?</h4>
                        <p>Após a exclusão, não é possível a recuperação do mesmo</p>
                    </div>
                    <div class="modal-footer">
                        <form action="./actions/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?= $row[0]; ?>">
                            <button type="submit" name="btn-delete" class="btn red">Deletar</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </form>
                    </div>
                </div>
            </tr>
            <?php 
                }
            } 
            mysqli_close($connect);
            ?>

            </tbody>
        </table>
        <br>
        <a href="./add.php" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">add</i></a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
    });
</script>


<?php require_once './includes/footer.php' ?>
