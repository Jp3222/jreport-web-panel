<!--Cabecera y estilos-->
<?php require('../includes/header.php') ?>
<?php
require('../model/conexion.php');
$query = "SELECT * FROM tipo_reportes";
$res = $conexion->query($query);
?>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <!--Ttitulo-->
        <h3 class="text-center mt-4"> Tipos de Reportes</h3>
        <!--Mensaje de alerta-->
        <?php
        $mensaje = $_SESSION['mensaje'];
        if (isset($mensaje)) {
        ?>
            <div class="alert alert-<?= $_SESSION['mensaje-tipo'] ?> alert-dismissible fade show mt-5" role="alert">
                <?php echo $_SESSION['mensaje'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php
            session_unset();
        }
        ?>

        <!--Formulario-->
        <form method="post" action="../controller/CTiposReportesInsert.php">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="c1" name="campo_tipo" placeholder="...">
                <label for="c1">Tipo</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" name="campo_descripcion" id="c2" placeholder="..."></textarea>
                <label for="c2">Descripcion</label>
            </div>

            <div>
                <button type="submit" class="btn btn-primary mt-2" name="tr_save">
                    Registrar
                </button>
            </div>
        </form>
    </div>
    <div class="col2"></div>
</div>
<div data-bs-spy="scroll" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2">

    <h3 class="text-center">Tipo de reportes registrados</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descripcion </th>
                <th scope="col">Registro</th>
                <th scope="col"> Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if ((!isset($res))) { ?>
                <tr>
                    <td colspan="5" class="text-center">
                        <?php echo "Sin Resultados" ?>
                    </td>
                </tr>
                <?php
            } else {
                while ($row = $res->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row">
                            <?php echo $row['id'] ?>
                        </th>
                        <td>
                            <?php echo $row['tipo'] ?>
                        </td>
                        <td>
                            <div class="form-floating">
                                <textarea class="form-control text-justify" style="height: 100px" disabled id="c2">
                                <?php echo $row['descripcion'] ?>              
                            </textarea>
                            </div>
                        </td>
                        <td>
                            <?php echo $row['fecha_registro'] ?>
                        </td>
                        <td>
                            <a href="./VTiposReportesEdit.php?id=<?= $row['id'] ?>" class="btn btn-primary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="../controller/CTiposReportesDelete.php?id=<?= $row['id'] ?>" class="btn btn-primary">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

            <?php
                }
            }
            ?>

        </tbody>
    </table>
</div>

<!--Pie de pagina y scripts-->
<?php include('../includes/footer.php') ?>