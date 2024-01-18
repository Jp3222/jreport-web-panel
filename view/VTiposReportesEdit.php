<?php
require("../model/conexion.php");
require("../includes/header.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tipo_reportes WHERE id='$id'";
    $res = $conexion->query($query);
    if (!isset($res)) {
        die("NULL");
    }
    $row = $res->fetch_assoc();
    if ($row) {
?>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <!--Ttitulo-->
                <h3 class="text-center mt-4"> Tipos de Reportes</h3>

                <!--Formulario-->
                <form method="post" action="../controller/CTiposReportesEdit.php">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="c1" name="campo_id" placeholder="..." value="<?= $row['id']; ?>">
                        <label for="c1">ID</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="c2" name="campo_tipo" placeholder="..." value="<?= $row['tipo']; ?>">
                        <label for="c2">Tipo de reporte</label>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" name="campo_des" id="c3" placeholder="..."><?= $row['descripcion']; ?></textarea>
                        <label for="c3">Descripcion</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="c4" name="campo_fr" placeholder="..." value="<?= $row['fecha_registro']; ?>">
                        <label for="c4">Fecha de registro</label>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary mt-2 me-2" name="tr_edit">
                            Registrar
                        </button>
                        <a class="btn btn-secondary mt-2" href="./VTiposReportes.php">Cancelar</a>
                    </div>
                </form>
            </div>
            <div class="col2"></div>
        </div>
<?php
    }
} else {
    echo "GET/NULL";
}
require("../includes/footer.php");
?>