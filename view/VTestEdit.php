<?php
require('../model/conexion.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM test where id = $id";
    $res = $conexion->query($query);
    $row = $res->fetch_assoc();
    if (!$row) {
        die("Datos Erroneos");
    }
}
?>
<?php include('../includes/header.php') ?>

<div class="container">
    <div class="row">

        <form method="post">
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <input type="text" name="campo_test" class="form-control" id="campo_test" placeholder="ejemplo xddd" value="<?= $row['texto'] ?>">
                    <label for="campo_test">Test</label>
                </div>
            </div>

            <a href="../" class="btn btn-second"> cancelar</a>
            <button type="submit" class="btn btn-primary" name="test-save" value="ok"> Modificar </button>
        </form>
    </div>
</div>


<?php include('../includes/footer.php') ?>