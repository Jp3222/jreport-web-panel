<?php
require('./model/test.php');
$test_controlador = new Test();
$coll = $test_controlador->get();
?>

<?php require('./includes/header.php'); ?>

<div class="container">
    <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-save-test">
            Agregar Test
        </button>

        <?php if (isset($_SESSION['mensaje'])) { ?>
            <div class="alert alert-<?= $_SESSION['tipo_mensaje'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['mensaje'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>

        <?php session_unset();
        } ?>

        <!-- Modal -->
        <div class="modal fade" id="modal-save-test" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="./controller/CTest.php" method="post">
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" name="campo_test" class="form-control" id="campo_test" placeholder="ejemplo xddd">
                                <label for="campo_test">Test</label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            <input type="submit" class="btn btn-primary" name="save_test" value="save">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <table class="table table-hover table-striped">
            <thead>
                <th>ID</th>
                <th>Texto</th>
                <th>Registro</th>
                <th>Opciones</th>
            </thead>

            <tbody>
                <?php
                foreach ($coll as $row) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></td>
                        <td><?php echo $row['texto']; ?></td>
                        <td><?php echo $row['fecha']; ?></td>
                        <td>
                            <a href="./view/VTestEdit.php?id=<?= $row['id']?>" class="btn btn-primary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="./controller/CTest.php?action=dl&id=<?= $row['id'] ?>" class="btn btn-primary">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
require('./includes/footer.php');
?>