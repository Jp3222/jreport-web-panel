<?php include('./db.php'); ?>

<?php include('./includes/header.php'); ?>

<div class="containter">
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

                    <form action="test_save.php" method="post">

                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" name="campo_test" class="form-control" id="campo_test" placeholder="ejemplo xddd">
                                <label for="campo_test">Test</label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            <input type="submit" class="btn btn-primary" name="xd" value="save">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <table class="table table-bordered">

            <?php include('test_select.php') ?>

        </table>
    </div>
</div>

<?php
include('./includes/footer.php');
?>